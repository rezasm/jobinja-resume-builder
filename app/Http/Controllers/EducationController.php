<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Job;
use App\Models\Person;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function getEducations()
    {
        $person = Person::where('session_id', session()->getId())->first();

        $educations = Education::where('person_id', $person->id)->get();


        return $educations;
    }


    public function saveEducation()
    {
        $person = Person::where('session_id', session()->getId())->first();

        if (!$person) {
            $person = new Person();
            $person->session_id = session()->getId();
            $person->save();
        }

        $education = new Education();
        $education->person_id = $person->id;
        $education->field_title = request('field');
        $education->university = request('university');
        $education->degree = request('degree');
        $education->start_year = request('start_year');
        $education->end_year = request('end_year');
        $education->is_studying = request('is_studying');
        $education->description = request('description');
        $education->save();

        return ['msg' => 'success'];
    }

    public function UpdateEducationItem()
    {
        $education_array = request('education');

        $education = Education::find($education_array['id']);
        $education->field_title = $education_array['field_title'];
        $education->university = $education_array['university'];
        $education->degree = $education_array['degree'];
        $education->start_year = $education_array['start_year'];
        $education->end_year = $education_array['end_year'];
        $education->is_studying = $education_array['is_studying'];
        $education->description = $education_array['description'];
        $education->save();

        return ['msg' => 'success'];
    }

    public function DeleteEducationItem()
    {
        $education_array = request('education');
        $education = Education::find($education_array['id']);
        $education->delete();

        return ['msg'=> 'deleted successfully'];
    }
}
