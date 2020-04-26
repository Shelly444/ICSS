<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function showAll()
    {


        $clients = Client::all();

        return view('/client/clientShow', compact('clients'));

    }

    public function add()
    {


    	$client = new Client;

        $client->clientId = request('clientId');
        $client->clientFirstName = request('clientFirstName');
        $client->clientLastName = request('clientLastName');
        $client->clientRegistrationDate = request('clientRegistrationDate');
        $client->clientSpecialilty = request('clientSpecialilty');
        $client->clientProgram = request('clientProgram');
        $client->clientSocialMediaStatus = request('clientSocialMediaStatus');
        $client->clientGuardianFirstName = request('clientGuardianFirstName');
        $client->clientGuardianLastName = request('clientGuardianLastName');
        $client->clientGuardianContactNumber = request('clientGuardianContactNumber');
        $client->clientGuardianEmail = request('clientGuardianEmail');


        

        $client->save();
        
        $clients = Client::all();

        return redirect()->back()->with( compact('clients'));
        //return view('/client/clientShow', compact('clients'));
    }



    public function deleteUser($id=0){

    if($id != 0){
      // Delete
      Client::deleteData($id);

      
      
    }
    $clients = Client::all();
		return view('/client/clientShow', compact('clients'));
  }
}
