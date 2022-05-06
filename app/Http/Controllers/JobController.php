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

        $person = Person::find(session('person_id'));

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

        $job_new = request('new_data');

        $job = Job::where('person_id',$job_new['person_id'])->first();

        $job->job_title = $job_new['job_title'];
        $job->company = $job_new['company'];
        $job->start_month = $job_new['start_month'];
        $job->end_month = $job_new['end_month'];
        $job->start_year = $job_new['start_year'];
        $job->end_year = $job_new['end_year'];
        $job->is_working = $job_new['is_working'];
        $job->description = $job_new['description'];
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
