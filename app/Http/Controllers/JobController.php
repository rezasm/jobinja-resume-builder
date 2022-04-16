<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Person;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function getJobs(){

        $person = Person::where('session_id',session()->getId())->first();


        $jobs = Job::where('person_id',$person->id)->get();

        return $jobs;

    }

    public function saveJobs(){

        $person = Person::where('session_id',session()->getId())->first();

        if(!$person){
            $person = new Person();

            $person->session_id = session()->getId();
        }

        $job = New Job();

        $job->person_id = $person->id;
        $job->job_title = request('title');
        $job->company = request('company');
        $job->start_month = request('start_month');
        $job->start_year = request('start_year');
        $job->end_month = request('end_month');
        $job->end_year = request('end_year');
        $job->is_working = request('is_working');
        $job->description = request('description');
        $job->save();
        return ['msg' => 'success'];


    }
}
