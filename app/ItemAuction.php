<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class ItemAuction extends Model
{
    //
    protected $fillable=['date','category','lottitle','lotlocation','lotcondition','pretaxamount','taxname','taxamount'];
   
}