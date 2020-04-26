@extends ('../layouts/master')



@section ('content')

<h1 align="center">Client Infomation</h1>
      <table class="list_table" align="center">
        <tr>
          <th class="list_th_tr">ID</th>
          <th class="list_th_tr">First Name</th>
          <th class="list_th_tr">Last Name</th>
          <th class="list_th_tr">Program</th>
          <th class="list_th_tr">Guardian</th>
          <th class="list_th_tr">Specialilty</th>
          <th class="list_th_tr">Contact Number</th>
          <th class="list_th_tr">Contact Email</th>
          <th class="list_th_tr">QUIT?</th>
        </tr>

        @foreach ($clients as $client)
          <tr>
            <td class="list_th_tr">
              {{ $client->clientId }}
            </td>
            <td class="list_th_tr">
              {{ $client->clientFirstName }} 
            </td>
            <td class="list_th_tr">
              {{ $client->clientLastName }} 
            </td>
            <td class="list_th_tr">
              {{ $client->clientProgram }} 
            </td>
            <td class="list_th_tr">
              {{ $client->clientGuardianFirstName }} {{ $client->clientGuardianLastName }} 
            </td>
            <td class="list_th_tr">
              {{ $client->clientSpecialilty }}
            </td>
            <td class="list_th_tr">
              {{ $client->clientGuardianContactNumber }} 
            </td>
            <td class="list_th_tr">
              {{ $client->clientGuardianEmail }} 
            </td>
            <td class="list_th_tr">
              <a href='/deleteClient/{{ $client->clientId }}'>Delete</a></td>
            </td>
          </tr>

        @endforeach
      </table>


<hr>


  <h3><strong> Add client</strong></h3>
  <form method="POST" action="/clients">
    {{ csrf_field() }}
<div>

    <table>

        <tr>
          <th>
            <label for="clientFirstName">First Name: </label>
          </th>
          <td>
            <input type="text" id="clientFirstName" name="clientFirstName" required>
          </td>
        </tr>

        <tr>
          <th>
            <label for="clientLastName">Last Name: </label>
          </th>
          <td>
            <input type="text" id="clientLastName" name="clientLastName" required>
          </td>
        </tr>

        <tr>
          <th>
            <label for="clientRegistrationDate">Registration: </label>
          </th>
          <td>
            <input type="date" id="clientRegistrationDate" name="clientRegistrationDate" required>
          </td>
        </tr>

        <tr>
          <th>
            <label for="clientProgram">Program: </label>
          </th>
          <td>
            <input type="Text" id="clientProgram" name="clientProgram" required>
          </td>
        </tr>

        <tr>
          <th>
            <label for="clientSpecialilty">Specialilty: </label>
          </th>
          <td>
            <input type="Text" id="clientSpecialilty" name="clientSpecialilty" required>
          </td>
        </tr>
          
        <tr>
          <th>
            <label for="clientSocialMediaStatus">Pictures Allowed: </label>
          </th>
          <td>
            <input type="text" id="clientSocialMediaStatus" name="clientSocialMediaStatus" required>
          </td>
        </tr>

        <tr>
          <th>
            <label for="clientGuardianFirstName">Guardian First Name: </label>
          </th>
          <td>
            <input type="text" id="clientGuardianFirstName" name="clientGuardianFirstName" required>
          </td>
        </tr>        
 
         <tr>
          <th>
            <label for="clientGuardianLastName">Guardian Last Name: </label>
          </th>
          <td>
            <input type="text" id="clientGuardianLastName" name="clientGuardianLastName" required>
          </td>
        </tr> 

        <tr>
          <th>
            <label for="clientGuardianContactNumber">Guardian ContactNumber: </label>
          </th>
          <td>
            <input type="text" id="clientGuardianContactNumber" name="clientGuardianContactNumber" required>
          </td>
        </tr> 

        <tr>
          <th>
            <label for="clientGuardianEmail">Guardian Email: </label>
          </th>
          <td>
            <input type="text" id="clientGuardianEmail" name="clientGuardianEmail" required>
          </td>
        </tr> 

    </table>

    </div>

    <div align="left">

      <button type="submit" class="btn btn-primary">Add</button>

    </div>
    
    <div align="left">
        <a href="/"> Back to Search </a> 
    </div>

      </form>

      

@endsection