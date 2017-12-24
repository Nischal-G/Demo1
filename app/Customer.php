<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $fillable = ['customerName','retailMiti','daysEcp','model','mobileNo','salesExe','salesPrice','amountRecived','principleDue','interest','totalDue','remarks']; 
}
