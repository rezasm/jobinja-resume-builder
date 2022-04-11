<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function getSummaryData()
    {

        $person = Person::where('session_id', session()->getId())->first();

        $fullname = $person->fullname ?? '';
        $job_title = $person->job_title ?? '';
        $job_status = $person->job_status ?? '';
        return [
            'person' =>   [
                'fullname' => $fullname,
                'job_title' => $job_title,
                'job_status' => $job_status,
            ]
        ];
    }

    public function saveSummaryData()
    {

        $name = request('name');
        $job_status = request('job_status');
        $job_title = request('job_title');

        $session_id = session()->getId();

        $person = Person::updateOrCreate(
            ['session_id' => $session_id],
            [
                'fullname' => $name,
                'job_title' => $job_title,
                'job_status' => $job_status,
            ]
        );

        return ['msg' => 'Data Saved Successfully'];
    }


    public function getPersonalInfo(){

        $person = Person::where('session_id',session()->getId())->first();

        return [
            
        'person' => [ 'email' => $person->email,
            'phone' => $person->phone,
            'province' => $person->province,
            'address' => $person->address,
            'birth_year' => $person->birth_year,
            'married' => $person->married,
            'gender' => $person->gender,
            'military_service_status' => $person->military_service_status]
      
        ];

    }

    public function savePersonalInfo(){

        
        $person = Person::where('session_id',session()->getId())->first();


        $new_data = request('newPerson'); // array
       
        $person->email = 'sadfas'; 
        $person->phone = $new_data['phone']; 
        $person->province = $new_data['province']; 
        $person->address = $new_data['address']; 
        $person->birth_year = $new_data['birth_year']; 
        $person->married = ($new_data['married'] == "snigle") ? false : true; 
        $person->gender = $new_data['gender']; 
        $person->military_service_status = $new_data['military_service_status'];    
        $person->save();

        return ['msg' => 'Data Saved Successfully'];

    }


}
