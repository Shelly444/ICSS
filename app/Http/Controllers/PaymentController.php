<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Http\Request;
use App\Payment;
use App\Availabilities;
use App\Lessons;
use App\Instructors;
use App\Client;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{

    public function showAll()
    {


        $payments = Payment::all();

        return view('/reports/payment', compact('payments')); 


    }
    

    public function add()
        {


        	$payment = new Payment;

        	$payment->name = request('name');
        	$payment->paymentType = request('paymentType');
        	$payment->amount = request('amount');
        	$payment->date = request('date');


        	$payment->save();

        	$payments = Payment::all();

        	return view('/reports/payment', compact('payments')); 


    }

    public function showLessons()
    {


        $employees = Instructors::all();
        $clients = Client::all();
        $lessons = Lessons::all();

        return view('/reports/lessons',  compact('employees', 'clients', 'lessons')); 


    }
     public function deleteLesson($id=0){

        if($id != 0){
          // Delete
          Payment::deleteData($id);

          
          
        }
        $employees = Instructors::all();
        $clients = Client::all();
        $lessons = Lessons::all();

           return view('/reports/lessons',  compact('employees', 'clients', 'lessons')); 
      } 

      public function deleteAvailability($id=0){

        if($id != 0){
          // Delete
          Payment::deleteAvailabilities($id);

          
          
        }
       $availabilities = Availabilities::all();
        $instructors = Instructors::all();

        return view('/reports/availabilities', compact('availabilities', 'instructors'));
      } 





      public function showAvailabilities(){



        $availabilities = Availabilities::all();
        $instructors = Instructors::all();

        return view('/reports/availabilities', compact('availabilities', 'instructors'));
  
      }

      public function addAvailability(){

        $availability = new Availabilities;

        $availability->availabilityId = request('availabilityId');
        $availability->employeeId = request('employeeId');
        $availability->year = request('year');
        $availability->dayOfTheWeek = request('dayOfTheWeek');
        $availability->startTime = request('startTime');
        $availability->endTime = request('endTime');
        $availability->roomNumber = request('roomNumber');


        $availability->save();
        
        $availability = Availabilities::all();
        return redirect()->back()->with( compact('availability'));
      }

}
