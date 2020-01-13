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
		dd($header);
	}

}