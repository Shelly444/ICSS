@extends ('../layouts/master')



@section ('content')

<table class="list_table" border="1" align="center">
        <tr>
          <th class="list_th_tr">Lesson Id</th>
          <th class="list_th_tr">Day</th>
          <th class="list_th_tr">Time</th>
          <th class="list_th_tr">Employee Name</th>
          <th class="list_th_tr">Client Name</th>
          <th class="list_th_tr">Room Number</th>
          <th class="list_th_tr">Delete</th>
        </tr>

  @foreach ($lessons as $lesson)
  <tr>
        <td class="list_th_tr">
            {{ $lesson->lessonId }}
        </td>
        <td class="list_th_tr">
            {{ $lesson->lessonDay }}
        </td>
        <td class="list_th_tr">
            {{ $lesson->lessonTime }}
        </td>
    <td class="list_th_tr">
            @foreach ($employees as $employee)
              @if($lesson->employeeId == $employee->instructorId)
                  {{ $employee->instructorFirstName }} {{ $employee->instructorLastName }}
        @endif 
            @endforeach
        </td>
        <td class="list_th_tr">
            @foreach ($clients as $client)
              @if($lesson->clientId == $client->clientId)
                  {{ $client->clientFirstName }} {{ $client->clientLastName }}
        @endif 
            @endforeach
        </td>
        <td class="list_th_tr">
            {{ $lesson->roomNumber }}
        </td>
        <td class="list_th_tr" class="list_th_tr">
              <a href='/deleteLesson/{{ $lesson->lessonId }}'>Delete</a></td>
        </td>
    </tr>



  @endforeach

</table>
@endsection