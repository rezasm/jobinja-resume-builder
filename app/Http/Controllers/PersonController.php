<?php

namespace App\Http\Controllers;

use App\Events\PersonDataSaved;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class PersonController extends Controller
{
    public function getSummaryData()
    {

        $person = Auth::user()->person;
        
        $fullname = $person->fullname ?? '';
        $job_title = $person->job_title ?? '';
        $job_status = $person->job_status ?? '';
        $image = $person->image ?? '';
        return [
            'person' =>   [
                'fullname' => $fullname,
                'job_title' => $job_title,
                'job_status' => $job_status,
                'image' => $image,
            ]
        ];
    }

    public function saveSummaryData()
    {
        
        $name = request('name');
        $job_status = request('job_status');
        $job_title = request('job_title');

   

        $person = Person::updateOrCreate(
            ['user_id' => Auth::id()],
            [
                'fullname' => $name,
                'job_title' => $job_title,
                'job_status' => $job_status,
            ]
        );
        PersonDataSaved::dispatch($person->id);

        return ['msg' => 'Data Saved Successfully'];
    }


    public function getPersonalInfo(){

        $person = Auth::user()->person;



        return [

        'person' => [ 
            'email' => $person->email ?? null,
            'phone' => $person->phone ?? null,
            'province' => $person->province ?? null,
            'address' => $person->address ?? null,
            'birth_year' => $person->birth_year ?? null,
            'married' => $person->married ?? null,
            'gender' => $person->gender ?? null,
            'military_service_status' => $person->military_service_status ?? ''
            ]

      
        ];

    }

    public function savePersonalInfo(){
        
        $person = Auth::user()->person;

        if(!$person){
            $person = new Person();
         }

        $new_data = request('newPerson'); // array
        $person->user_id = Auth::id();
        $person->email =  $new_data['email']; 
        $person->phone = $new_data['phone']; 
        $person->province = $new_data['province']; 
        $person->address = $new_data['address']; 
        $person->birth_year = $new_data['birth_year']; 
        $person->married = ($new_data['married'] == "snigle") ? false : true; 
        $person->gender = $new_data['gender']; 
        $person->military_service_status = $new_data['military_service_status'];    
        $person->save();
        PersonDataSaved::dispatch($person->id);
        return ['msg' => 'Data Saved Successfully'];
    }

    public function getAboutMe(){

        $person = Auth::user()->person;


        
        return $person->about_me ?? '';



    }
    public function saveAboutMe(){

        $person = Auth::user()->person;

        if(!$person){
            $person = new Person();

            $person->user_id = Auth::id();
            
        }
        $about_me = request('about_me');

        $person->about_me = $about_me;
        $person->save();
        PersonDataSaved::dispatch($person->id);
    }

    public function getSkills(){

        $person = Auth::user()->person;

        $skills_array = explode(',',$person->skills);

        return $skills_array ?? [];


    }

    public function saveSkills(){

        $skills = request('skills'); //array

        $skilld_str = implode(',',$skills);

        $person = Auth::user()->person;

        if(!$person){
            $person = new Person(); 
            $person->user_id = Auth::id();   
        }

        $person->skills = $skilld_str;
        $person->save();
        PersonDataSaved::dispatch($person->id);
        return ['Data saved Successfully'];

    }

    public function saveImage(Request $request){

 
        $file = $request->file('image')->store('avatars');
        
        $person = Auth::user()->person;

        if(!$person){
            $person = new Person();           
            $person->user_id = Auth::id();
        }
        
        $person->image = $file;
        $person->save();

        PersonDataSaved::dispatch($person->id);

        return ['msg' => 'success'];
    }

}
