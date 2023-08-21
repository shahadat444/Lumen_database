<?php

namespace App\Http\Controllers;
use illuminate\support\Facades\DB;

class ExampleController extends Controller
{
    public function TestConnect()
    {
       // $getDatabaseName=DB::Connection()->select('SELECT * FROM `student_details`');

       $getDatabaseName=DB::insert("INSERT INTO `student_details`(`Name`, `Class`, `Roll`, `city`, `Phone`) VALUES ('[Shakil_khAN]','[ten]','[0043]','[Bhola]','[01866299513]')");
                if ($getDatabaseName==true) {
                    return 'Insert Success';
                }
                else {
                    return 'Insert fail';
                } 
        /* $getDatabaseName=DB::Connection()->getDatabaseName();
        return $getDatabaseName; */
    }



    
}
