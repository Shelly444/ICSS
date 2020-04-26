<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Http\Request;
use App\Instructors;

class InstructorsController extends Controller
{
    public function showAll()
    {


        $instructors = Instructors::all();

        return view('/instructors/instructorShow', compact('instructors'));

    }

    public function add()
    {

    	$instructor = new Instructors;

        $instructor->instructorId = request('instructorId');
        $instructor->instructorFirstName = request('instructorFirstName');
        $instructor->instructorLastName = request('instructorLastName');
        $instructor->instructorContactNumber = request('instructorContactNumber');
        $instructor->instructorEmail = request('instructorEmail');
        $instructor->instructorSpecialty = request('instructorSpecialty');
        $instructor->instructorMedicalInstructions = request('instructorMedicalInstructions');


        $instructor->save();
         $instructors = Instructors::all();
        return redirect()->back()->with( compact('instructors'));
        //return view('/instructors/instructorShow', compact('instructors'));
    }



    public function deleteUser($id=0){

    if($id != 0){
      // Delete
      Instructors::deleteData($id);

      
      
    }
    $instructors = Instructors::all();

        return view('/instructors/instructorShow', compact('instructors'));
  }
}
