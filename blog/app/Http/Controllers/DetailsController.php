<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DetailsController extends Controller
{

public function create_table(Request $request){
   $name= $request->input("Name");
   $class= $request->input("Class");
   $roll= $request->input("Roll");
   $City= $request->input("city");
   $phone= $request->input("Phone");

   $SQL = "INSERT INTO `student_details`(`Name`, `Class`, `Roll`, `city`, `Phone`) VALUES (?,?,?,?,?)";
    $result= DB::insert($SQL,[$name,$class,$roll,$City,$phone]);
    if ($result==true) {
        return "Data seve succssfully";
    }
    else {
        return "Data seve Unsuccssfully";
    }

}

public function update_table(Request $request){
    $id = $request->input("ID");
    $name= $request->input("Name");
    $class= $request->input("Class");
    $roll= $request->input("Roll");
    $City= $request->input("city");
    $phone= $request->input("Phone");
    $SQL= "UPDATE `student_details` SET `Name`=?,`Class`=?,`Roll`=?,`city`=?,`Phone`=? WHERE `ID`='16'";
        $result= DB::update($SQL, [$name,$class,$roll,$City,$phone]);

        if ($result==true) {
            return "Data update successful";
        }
        else {
            return "Data update Unsuccessful";
        }
    
}


public function select_table(Request $request){
        $SQL="SELECT * FROM `student_details`";
        $request = DB::select($SQL);
        return $request;
            
}

public function delete_table(Request $request){
                $id = $request->input("ID");
            $SQl= "DELETE FROM `student_details` WHERE `ID`=? ";
            $result = DB::delete($SQl,[$id]);

            if ($result==true) {
                return "Data Delete successful";
            }
            else {
                return "Data Delete Unsuccessful";
            }
        

    
}


}
