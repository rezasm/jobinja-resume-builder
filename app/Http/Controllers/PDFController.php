<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function preview(){

        $personal_info_titles= [
            'تخصص',
            'آدرس ایمیل',
            'شماره موبایل',
            'سال تولد',
            'جنسیت',
            'وضعیت سربازی',
            'وضعیت تاهل',
            'استان سکونت',
            'آدرس',

        ];

        $person = Person::find(session('person_id'));

        $last_jobs = $person->jobs;


        return view('pdf-template',
        compact('personal_info_titles','last_jobs')
    
    );



    }
}
