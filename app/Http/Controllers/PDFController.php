<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function preview(){

        $personal_info_titles= [
            'تخصص' => 'job_title',
            'آدرس ایمیل' => 'email',
            'شماره موبایل' => 'phone',
            'سال تولد'=> 'birth_year' ,
            'جنسیت' => 'gender',
            'وضعیت سربازی' => 'military_service_status',
            'وضعیت تاهل' => 'marriage',
            'استان سکونت' => 'province' ,
            'آدرس'=> 'address' ,

        ];

        


        $person = Person::find(session('person_id'));

        $last_jobs = $person->jobs;

        $skills = explode(',',$person->skills);


        return view('resume',
        compact('personal_info_titles','last_jobs','person','skills')
    
    );



    }
}
