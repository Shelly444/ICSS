<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Http\Request;
use App\Availabilities;
use App\Lessons;
use App\Instructors;
use App\Client;
use Illuminate\Support\Facades\DB;


class LessonsController extends Controller
{
    // index method
    public function index() 
    {
        // 
        $lessons = Lessons::all();
        //$instructors = Instructors::select('instructorId', 'instructorLastName')->get();
        $instructors = Instructors::all();
        $clients = Client::all();
        $availabilities = Availabilities::all();


        return view('scheduling.calendar', compact('lessons', 'availabilities', 'instructors', 'clients'));

    }


    // show method
    public function show($day) 
    {
        // 
        $lessons = Lessons::where('lessonDay', '=', $day)
                            ->get();
        $availabilities = Availabilities::where('dayOfTheWeek', '=', $day)
                                            ->get();        
        return compact('lessons', 'availabilities');

    }

        // store method
        public function add()
        {

            $check = request('lessonTime');
            $check2 = request('lessonDay');
            $check3 = request('clientId');

            // $sql = DB::table('lessons')->where('name', 'John')->first();

            $sql = DB::table('lessons')->where('lessonTime', $check)
                                       ->where('lessonDay', $check2)
                                       ->where('clientId', $check3)
                                       ->first();

                
                if (empty($sql)) {   

                    $lesson = new Lessons;

                    $lesson->lessonId = request('lessonId');
                    $lesson->lessonDay = request('lessonDay');
                    $lesson->lessonTime = request('lessonTime');
                    $lesson->lessonLength = request('lessonLength');
                    $lesson->employeeId = request('employeeId');
                    $lesson->clientId = request('clientId');
                    $lesson->roomNumber = request('roomNumber');
                    $lesson->lessonFee = request('lessonFee');  
    
                    $lesson->save();
                }else{

                   return back()->with('fail','FuckNo');

                }

            $lessons = Lessons::all();

            return redirect()->back()->with( compact('lessons'));
        }
}
