<?php

namespace App\Http\Controllers\Test;
use App\Laravel;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Response;


class ItemAuctionerController extends Controller
{
	public function importFile()
	{
		return view ('pages.uploadFile');
	}
	

	public function uploadExcel(Request $request)
	{
		//get file
		$upload = $request->file('upload-file');
		$filePath = $upload->getRealPath();

		//open and read

		$file=fopen($filePath,'r');
		$header = fgetcsv($file);
		
		$escapedHeader = [];

		//validate headers

		foreach($header as $key => $value)
		{
			$lheader = strtolower($value);
			$escapedItem = preg_replace('/[^a-z]/','',$header);
			array_push($escapedHeader,$escapedItem);

		}
		//Looping through other columns
		while($columns = fgetcsv($file))
		{
			if($columns[0] == "")
			{
				continue;
			}
			foreach($columns as $key => &$value)
			{
				$value = preg_replace('/\D/','',$value);
			}
			
			$data = array_combine($escapedHeader,$columns);

			//setting type
			foreach ($data as $key => &$value) {
				$value=($key=="date" || $key=="category")?(integer)$value: (float)$value;
			   }
			//Table update

			$date = $data['date'];
			$category = $data['category'];
			$lotTitle = $data['lottitle'];
			$lotLocation = $data['lotlocation'];
			$lotCondition = $data['lotcondition'];
			$preTaxAmount = $data['pretaxamount'];
			$taxName = $data['taxname'];
			$taxAmount = $data['taxamount'];

			$itemAuction = ItemAuction::firstOrNew(['date'=>$date,'category'=>$category]);
			$itemAuction->lottitle = $lotTitle;
			$itemAuction->lotlocation = $lotLocation;
			$itemAuction->lotcondition = $lotCondition;
			$itemAuction->pretaxamount = $preTaxAmount;
			$itemAuction->taxname = $taxName;
			$itemAuction->taxamount = $taxName;
			$itemAuction->save();


		}
	}

}