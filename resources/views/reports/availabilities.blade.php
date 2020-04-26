@extends ('../layouts/master')



@section ('content')

    <h1 align="center">Instructors</h1>
      <table class="list_table" align="center" border="1">
        <tr>
          <th class="list_th_tr">&nbsp&nbsp&nbsp Instructor ID &nbsp&nbsp&nbsp  </th>
          <th class="list_th_tr">&nbsp&nbsp&nbsp Day  &nbsp&nbsp&nbsp</th>
          <th class="list_th_tr">&nbsp&nbsp&nbsp StartTime &nbsp&nbsp&nbsp</th>
          <th class="list_th_tr">&nbsp&nbsp&nbsp Room Number&nbsp&nbsp&nbsp </th>
          <th class="list_th_tr">&nbsp&nbsp&nbsp Delete&nbsp&nbsp&nbsp </th>
        

    
         @foreach ($availabilities as $availability)
          <tr>
            <td class="list_th_tr">
              {{ $availability->employeeId }}
            </td>
            <td class="list_th_tr">
              {{ $availability->dayOfTheWeek }}
            </td>
            <td class="list_th_tr">
              {{ $availability->startTime }}
            </td>
            <td class="list_th_tr">
              {{ $availability->roomNumber }}
            </td>
            <td class="list_th_tr">
              <a href='/deleteAvailability/{{ $availability->availabilityId }}'>Delete</a></td>
            </td>
          </tr>

        @endforeach



        </tr>
      </table>

      <h3><strong> Add Availability</strong></h3>
        <form method="POST" action="/addAvailability">
    {{ csrf_field() }}

    <div>

    <table>


        <tr>
          <th>
            <label for="instructorId">Instructor: </label>
          </th>
          <td>
            <select name="employeeId" id="employeeId">
                @foreach($instructors as $instructor)
                 <option value="{{ $instructor->instructorId}}">{{ $instructor->instructorFirstName }} {{ $instructor->instructorLastName }}</option>
                @endforeach
        </select>
          </td>
        </tr>


        <tr>
          <th>
            <label for="year">Year: </label>
          </th>
          <td>
            <input type="text" id="year" name="year" required>
          </td>
        </tr>

        <tr>
          <th>
            <label for="dayOfTheWeek">Day Of The Week: </label>
          </th>
          <td>
            <input type="text" id="dayOfTheWeek" name="dayOfTheWeek" required>
          </td>
        </tr>

        <tr>
          <th>
            <label for="startTime">Start Time: </label>
          </th>
          <td>
            <input type="text" id="startTimestartTime" name="startTime" required>
          </td>
        </tr>
          
        <tr>
          <th>
            <label for="endTime">End Time: </label>
          </th>
          <td>
            <input type="text" id="endTime" name="endTime" required>
          </td>
        </tr>

        <tr>
          <th>
            <label for="roomNumber">Room Number: </label>
          </th>
          <td>
            <input type="text" id="roomNumber" name="roomNumber" required>
          </td>
        </tr>        
 
    </table>

    </div>

    <div>

      <button type="submit" class="btn btn-primary">Add</button>

    </div>
    
    <div align="left">
        <a href="/"> Back to Search </a> 
    </div>

      </form>
 

@endsection