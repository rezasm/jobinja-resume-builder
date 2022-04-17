<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Person;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    

    public function getLanguages(){

        $person = Person::where('session_id',session()->getId())->first();

        if (!$person) {
            $person = new Person();
            $person->session_id = session()->getId();
            $person->save();
        }

        $languages = Language::where('person_id',$person->id)->get();


        return $languages;


    }


}
