@extends ('../layouts/master')



@section ('content')
    @if ($message = Session::get('fail'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
              <strong>{{ $message }}</strong>
      </div>
    @endif

    <div id='modal-custom' class='out-of-view' >

        {{-- This is the modal button to close pop-up --}}
        <button id='close-button' type="button" class="close" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    
        {{-- Set this to fit work schedule - dynamic --}}
              {{-- Top Half of Modal  --}}
        <div id='schedule-peek'>
            <ul>
                <li >
                    8 AM<div id='800'></div>
                </li>
                <li style='clear: both;'>
                    9 AM<div id='900'></div>
                </li>
                <li style='clear: both;'>
                    10 AM<div id='1000'></div>
                </li>
                <li style='clear: both;'>
                    11 AM<div id='1100'></div>
                </li>
                <li style='clear: both;'>
                    12 PM<div id='1200'></div>
                </li>
                <li style='clear: both;'>
                    1 PM<div id='1300'></div>
                </li>
                <li style='clear: both;'>
                    2 PM<div id='1400'></div>
                </li>
            </ul>
        </div>
        {{-- Bottom Half of Modal  --}}
        <div style="clear: both; width: 100%;" id='form'>
    
          {{-- <h5>Available Instructors:</h5>
          <ul>
            <li>Instructor's name</li>
            <li>Instructor's name</li>
          </ul> --}}
  
          <form method='POST' action='/scheduling/calendar'>
              {{ csrf_field() }}

              <div class="form-group">              
                <label for="lessonDay">Day: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>           
                <select id="lessonDay" name="lessonDay" required>
                    <option value="Sunday">Sunday</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                </select>          
              </div>
          
              <div class="form-group">              
                <label for="lessonTime">Starting Time (Military Time): &nbsp</label>          
                <select id="lessonTime" name="lessonTime" required>
                  <option value="0800">0800</option>
                  <option value="0900">0900</option>
                  <option value="1000">1000</option>
                  <option value="1100">1100</option>
                  <option value="1200">1200</option>
                  <option value="1300">1300</option>
                  <option value="1400">1400</option>
                </select>           
              </div>

              <div class="form-group">              
                <label for="lessonLength">Lesson Length: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>          
                <select id="lessonLength" name="lessonLength" required>
                  <option value="1">1 Hour</option>
                  <option value="2">2 Hours</option>
                  <option value="3">3 Hours</option>
              </select>            
              </div> 



              <div class="form-group">              
                <label for="employeeId">Instructor Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>  
                <select name="employeeId" id="employeeId">
                        @foreach($instructors as $instructor)
                         <option value="{{ $instructor->instructorId}}">{{ $instructor->instructorFirstName }} {{ $instructor->instructorLastName }}</option>
                        @endforeach
                </select>
                </div>

                <div class="form-group">              
                <label for="clientId">Client Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>  
                <select name="clientId" id="clientId">
                        @foreach($clients as $client)
                         <option value="{{ $client->clientId}}">{{ $client->clientFirstName }} {{ $client->clientLastName }}</option>
                        @endforeach
                </select>
                </div>
          

              <div class="form-group">
                  <label for="roomNumber">Room Number &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                  <input type="text" id="roomNumber" name="roomNumber" required>
              </div> 

              <div class="form-group">
                <label for="lessonFee">Lesson Fee &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                <input type="text" id="lessonFee" name="lessonFee" required>
              </div> 
              
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

          </form>
      </div>
  </div>



    <?php 
      
      // date_default_timezone_set('America/Toronto');
    
      // // day as text
      // echo date("l");
    
      // // day as number
      // echo date('d');
    
      // // echo 'numeric representation of a month';
      // echo date("n");
    
      // // echo 'number of days in month';
      // echo date("t");
    
      // // echo 'leapyear';
      // echo date("L");






      // Start the session
      session_start();
      $originalYear = date("Y"); // never changes from the current year
      // defualt variables !! important
      if(isset($_SESSION['year']) && trim($_SESSION['year']) != "") {
        $year = $_SESSION['year'];  
      } 
      else {
        $year = date("Y");
      }
      $month = date("n");

      // change throughout session
      $currentMonth = $month;
      $currentYear = $year;
    
      if(isset($_GET['month']) && trim($_GET['month']) != "") {
        $currentMonth = $_GET['month'];
      } 
      else {
        $year = date("Y");
      }
      if(isset($_GET['year']) && trim($_GET['year']) != "") {
        $currentYear = $_GET['year'];
        $_SESSION["year"] = $currentYear;
      }        
 
      $daysThisMonth = cal_days_in_month(CAL_GREGORIAN,$currentMonth,$currentYear);
      // date of first monday of month
      $firstDayOfMonth = date('N',strtotime($currentYear.'-'.$currentMonth.'-01'));


      // used for calendar reference - what month and what year to display
      if($currentMonth < 12 && $currentMonth > 1) {
        $nextMonth = ($currentMonth + 1);
        $lastMonth = ($currentMonth - 1);
        $output = "<div id='calendarPage' align='middle'>
          <a class='text-large' href=\"?month=".($lastMonth)."\">&lt Previous Month  |</a>
          <a class='text-large' href=\"?month=".($month)."&year=".($originalYear)."\">  Back to Current Month</a>
          <a class='text-large' href=\"?month=".($nextMonth)."\">  |  Next Month &gt</a>";
      }
      if($currentMonth <= 1) {
        $lastYear = ($currentYear - 1);
        $lastMonth = (12);
        $nextMonth = ($currentMonth + 1);
        $output = "<div id='calendarPage' align='middle'>
          <a class='text-large' href=\"?month=".($lastMonth)."&year=".($lastYear)."\">&lt Previous Month  |</a>
          <a class='text-large' href=\"?month=".($month)."&year=".($originalYear)."\">Back to Current Month</a>
          <a class='text-large' href=\"?month=".($nextMonth)."\">  |  Next Month &gt</a>";
      }
      if($currentMonth >= 12) {
        $nextYear = ($currentYear + 1);
        $nextMonth = (1);
        $lastMonth = ($currentMonth - 1);
        $output = "<div id='calendarPage' align='middle'>
          <a class='text-large' href=\"?month=".($lastMonth)."\">&lt Previous Month  |</a>
          <a class='text-large' href=\"?month=".($month)."&year=".($originalYear)."\">Back to Current Month</a>
          <a class='text-large' href=\"?month=".($nextMonth)."&year=".($nextYear)."\">  |  Next Month &gt</a>";
      }

  
      // echo $currentYear;

      $output .= "<table>
          <tbody id='tableBody'>
              <tr id='calendarHeaders'>
                  <th>Monday</th>
                  <th>Tuesday</th>
                  <th>Wednesday</th>
                  <th>Thursday</th>
                  <th>Friday</th>
                  <th>Saturday</th>
                  <th>Sunday</th>
              </tr>
              <tr>";
      // for each day of the month

      $days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
            $lessonPerDayCounters = array(0,0,0,0,0,0,0);
            $day = 0;
            //retrieve data from controller for lessons and availabilities
            // $openings = $availabilities;
            $scheduledLessons = $lessons;
            // echo $scheduledLessons;
            for($d = 0; $d < count($scheduledLessons); $d++) {
                // echo $scheduledLessons[$d]->lessonDay;
                // echo implode( ", ", $lessonPerDayCounters );
                switch ($scheduledLessons[$d]->lessonDay) {
                    case "Monday":
                        $lessonPerDayCounters[0] += 1;  
                        break;
                    case "Tuesday":
                        $lessonPerDayCounters[1] += 1;
                        break;
                    case "Wednesday":
                        $lessonPerDayCounters[2] += 1;
                        break;
                    case "Thursday":
                        $lessonPerDayCounters[3] += 1; 
                        break; 
                    case "Friday":
                        $lessonPerDayCounters[4] += 1; 
                        break;  
                    case "Saturday":
                        $lessonPerDayCounters[5] += 1;
                        break;
                    case "Sunday":
                        $lessonPerDayCounters[6] += 1;                                                     
                        break;
                    default:
                        break;
              }
              // echo implode( ", ", $lessonPerDayCounters );
            }

      $counter = 1;
      $dayOffset = 0;
      $day = 0;
      for ($i=1; $i < 36; $i++) {       
        if($i >= $firstDayOfMonth && $i <= ($daysThisMonth + $dayOffset)) {
          $style = '';
          for($d = 0; $d < count($scheduledLessons); $d++) {
            if($scheduledLessons[$d]->lessonDay == $days[$day]) {
              $style = 'background-color: #70d26d';
            break;
            }
            else {
              $style = 'background-color: #ff6b6b';
            }
            // echo $days[$day];
            // echo $days[$day]. "<br/>";
          }  
          $output .= "<td id='". $counter ."' class='". $days[$day] ."' style='". $style ."'>".$counter . "<br />". "Lessons" . $lessonPerDayCounters[$day]  . "</td>";
          //echo $counter;
          $counter++;
          $day++;
        }
        else {
          $output .= "<td class='". $days[$day] ."'></td>";
          $day++;
          //echo $dayOffset;
          $dayOffset++;
        }
        // if the current date is greater than length of week create new table row
        if($i > 0 & $i % 7 == 0) {
          $day = 0;
          if($i < 42) {
            $output .= "</tr>";
          }
        }
        if ($counter > $daysThisMonth) {
          $counter = 1;
        }
    
      }
      // close table element
      $output .= "</tbody>
        </table>
        </div>";
    
      // display calendar
      echo "<div class='legend green'></div><p class'text-white'>Day has 1 or more Lessons</p>
              <div class='legend red'></div><p class'text-white'>Day has No Lessons</p>";  
      echo $output;

      // destroy the session
      // session_destroy();

    ?>




    <script>
      // function to calculate number of days in month - used to make calendar
      var getDaysInMonth = function(month,year) {
        return new Date(year, month, 0).getDate();
      };

      // initialize variables to store number of days in month
      let date = new Date();
    
      let daysThisMonth = getDaysInMonth(date.getMonth(), date.getFullYear());
      console.log(date.getMonth())
      // on load, add visual functions to calendar - click- hover - modal
      window.onload = function() {
        let targets = [];
          let elements = document.getElementsByTagName("td")
          for(let i = 1; i < elements.length; i++) {
              elements[i].addEventListener('mouseover', function(e) {
                e.target.style.opacity = "0.5";

              });
              elements[i].addEventListener('mouseleave', function(e) {
                  e.target.style.opacity = "1";
              });

              // populate the schedule in modal
              elements[i].addEventListener('click', function(e) {
                  console.log(e.target.classList.value)
                  
                  e.preventDefault();   
                  $.ajax({
                      url: "/schedule/day/"+e.target.classList.value,
                      type: "GET",
                      headers: {
                          'X-CSRF-Token': '{{ csrf_token() }}',
                      },
                      success: function(data){
                          // alert("okay");
                          let availFlag = false;

                          // lessons
                            let selected = e.target.id
                            // console.log(selected)
                            for(let i =0; i < data.lessons.length; i++) {
                              targets.push(data.lessons[i].lessonTime)
                                $('#'+data.lessons[i].lessonTime).append("<div class='displayContainer' id=lesson-display"+data.lessons[i].lessonTime+"></div>");
                                $('#'+"lesson-display"+data.lessons[i].lessonTime).append("<div class='b'><p>Lesson ID</p><p>"+data.lessons[i].lessonId+"</p>" + "<p>Lesson Time</p>" + "<p>"+data.lessons[i].lessonTime+"</p>" + "<p>Lesson Length</p>" + "<p>"+data.lessons[i].lessonLength+"</p>" + "<p>Lesson Room Number</p>" +  "<p>"+data.lessons[i].roomNumber+"</p></div");
                            }
                     
                      }, 
                      error: function(){
                          alert("failure From php side!!! ");
                      }

                  }); 

                  // lessons ajax call - TODO


                $('#modal-custom').toggleClass('out-of-view', 'in-view');
                console.log(e.target);
              });     
          }
          $('#close-button').on('click', function() {
              $('#modal-custom').toggleClass('out-of-view', 'in-view');
              for(let j = 0; j < targets.length; j++) {
                $('div.displayContainer').remove()
                  // $('p').remove()
                }
          });

      }
          
    </script>

</body>



<style>
  body {
    width: auto;
    height: auto;
  }
  th, tr, td {
      border: 1px solid black;
      border-width: 1px;
      color: black;
  }
  #calendarHeaders {
    border: 4px ridge;
  }
  table {
      position: relative;
      height: 40vh;
      top: 95px;
      width: 100%;
      background-color: grey;
      border-radius: 10px;
  }  
  tbody {
      background-color: white;
      border: 4px ridge;
  } 
  td {
      width: 90px;
  } 
  .placeHolder {
    background-color: #ffa
  }

  /* .availabilities {
    background-color: blue;
  }
  .noAvailabilities {
    background-color: red !important;
  } */


  /* modal styling */
  .out-of-view {
      visibility: hidden;
  }
  .in-view {
      visibility: visible;
  }
  #form {
      width: 50vh;
      /* height: 20vh; */
      background-color: rgb(189, 189, 189);       
  }
  #schedule-peek {
      width: 100%;
      /* height: 20vh; */
      background-color: rgb(176, 223, 255);        
  }
  .b {
    display: inline-block;
    position: relative;
    margin: 1%;
    float: left;
    width: 23%;
    border: 2px solid rgb(189, 189, 189);
    background-color: white;
  }
  .legend {
  float: left;
  width: 20px;
  height: 20px;
  margin: 5px;
  border: 1px solid rgba(0, 0, 0, .2);
  }

  .green {
    background: #70d26d;
  }

  .red {
    background: #ff6b6b;
  }
  #modal-custom {
      position:fixed; 
      z-index: 1;
      top: 20vh;
      left: 25vw;
      width: 50vw;
      height: 60vh;
      background-color: rgb(176, 223, 255); 
      border: 2px solid rgb(66, 25, 248);  
      overflow:scroll;
  }

  #close-button {
    position: -webkit-sticky; /* Safari */
    position: sticky;
    top: 0;
    border: 1;
    background-color: white;
  }

</style>


@endsection


      