<?php

namespace App\Http\Controllers;

use App\Events\PersonDataSaved;
use App\Models\Job;
use App\Models\Person;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function getJobs(){

        $person = Person::find(session('person_id'));


        $jobs = Job::where('person_id',$person->id)->get();

        return $jobs;

    }

    public function saveJobs(){

        $person = Person::where('session_id',session()->getId())->first();

        if(!$person){
            $person = new Person();

            $person->save();            
            PersonDataSaved::dispatch($person->id);
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

    public function UpdateJobItem(){

        $job = request('job');

        $job = Job::where('person_id',$job['person_id'])->first();

        $job->job_title = $job['job_title'];
        $job->company = $job['company'];
        $job->start_month = $job['start_month'];
        $job->end_month = $job['end_month'];
        $job->company = $job['start_year'];
        $job->company = $job['end_year'];
        $job->company = $job['is_working'];
        $job->company = $job['description'];
        $job->save();

        return ['msg' => 'successful'];

    }

    public function DeleteJobItem(){

        $job_array = request('job');

        $job = Job::find($job_array['id']);
        $job->delete();
        return ['msg' => 'success'];
        

    }
}
