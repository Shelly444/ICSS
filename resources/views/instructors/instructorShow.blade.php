@extends ('../layouts/master')



@section ('content')

<h1 align="center">Instructors</h1>
      <table class="list_table">
        <tr>
          <th class="list_th_tr">Instructor ID &nbsp</th>
          <th class="list_th_tr">Instructor First Name &nbsp</th>
          <th class="list_th_tr">Instructor Last Name &nbsp</th>
          <th class="list_th_tr">Instructor Contact &nbsp</th>
          <th class="list_th_tr">Instructor Email &nbsp</th>
          <th class="list_th_tr">Instructor Specialilty &nbsp</th>
          <th class="list_th_tr">Instructor Medical Instructions &nbsp</th>
          <th class="list_th_tr">FIRED?</th>
        </tr>

        @foreach ($instructors as $instructor)
          <tr>
            <td class="list_th_tr">
              {{ $instructor->instructorId }}
            </td>
            <td class="list_th_tr">
              {{ $instructor->instructorFirstName }} 
            </td>
            <td class="list_th_tr">
              {{ $instructor->instructorLastName }} 
            </td>
            <td class="list_th_tr">
              {{ $instructor->instructorContactNumber }} 
            </td>
            <td class="list_th_tr">
              {{ $instructor->instructorEmail }} 
            </td>
            <td class="list_th_tr">
              {{ $instructor->instructorSpecialty }} 
            </td>
            <td class="list_th_tr">
              {{ $instructor->instructorMedicalInstructions }} 
            </td>
            <td class="list_th_tr">
              <a href='/deleteInstructor/{{ $instructor->instructorId }}'>Delete</a></td>
            </td>
          </tr>

        @endforeach
      </table>


<hr>


  <h3><strong> Add Instructor</strong></h3>
  <form method="POST" action="/instructors">
    {{ csrf_field() }}

    <div>

    <table>

        <tr>
          <th>
            <label for="instructorFirstName">First Name: </label>
          </th>
          <td>
            <input type="text" id="instructorFirstName" name="instructorFirstName" required>
          </td>
        </tr>

        <tr>
          <th>
            <label for="instructorLastName">Last Name: </label>
          </th>
          <td>
            <input type="text" id="instructorLastName" name="instructorLastName" required>
          </td>
        </tr>

        <tr>
          <th>
            <label for="instructorContactNumber">Contact Number: </label>
          </th>
          <td>
            <input type="text" id="instructorContactNumber" name="instructorContactNumber" required>
          </td>
        </tr>

        <tr>
          <th>
            <label for="instructorEmail">Email: </label>
          </th>
          <td>
            <input type="email" id="instructorEmail" name="instructorEmail" required>
          </td>
        </tr>
          
        <tr>
          <th>
            <label for="instructorSpecialty">Specialty: </label>
          </th>
          <td>
            <input type="text" id="instructorSpecialty" name="instructorSpecialty" required>
          </td>
        </tr>

        <tr>
          <th>
            <label for="instructorMedicalInstructions">Medical Instructions: </label>
          </th>
          <td>
            <input type="text" id="instructorMedicalInstructions" name="instructorMedicalInstructions" required>
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