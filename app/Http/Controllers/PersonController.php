<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function getSummaryData(){

     $person = Person::where('session_id',session()->getId())->first();
    
     $fullname = $person->fullname;
     $job_title = $person->job_title;
     $job_status = $person->job_status;
     return [
         'fullname' => $fullname,
         'job_title' => $job_title,
         'job_status' => $job_status,
     ];
    }

    public function saveSummaryData(){

        $name = request('name');
        $job_status = request('job_status');
        $job_title = request('job_title');
        
        $session_id = session()->getId();

        $person =Person::updateOrCreate(
            ['session_id' => $session_id],
            [
                'fullname'=>$name,
                'job_title'=>$job_title,
                'job_status'=>$job_status,
            ]
    );
      
        return ['msg'=> 'Data Saved Successfully'];

    }
}
