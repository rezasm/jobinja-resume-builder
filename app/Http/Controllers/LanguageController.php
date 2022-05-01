<?php

namespace App\Http\Controllers;

use App\Events\PersonDataSaved;
use App\Models\Language;
use App\Models\Person;
use Illuminate\Http\Request;

class LanguageController extends Controller
{


    public function getLanguages()
    {

        $person = Person::find(session('person_id'));

        if (!$person) {
            $person = new Person();
            $person->save();
            PersonDataSaved::dispatch($person->id);
        }

        $languages = Language::where('person_id', $person->id)->get();


        return $languages;
    }

    public function addLanguage()
    {

        $language_name = request('language');
        $level = request('level');

        $person = Person::find(session('person_id'));

        if (!$person) {
            $person = new Person();
            $person->session_id = session()->getId();
            $person->save();
        }


        $language = new Language();
        $language->person_id = $person->id;
        $language->language_name = $language_name;
        $language->level = $level;
        $language->save();

        return ['msg' => 'success'];
    }

    public function updateLanguage(){

        $language_array = request('language');

        $language  = Language::find($language_array['id']);
        $language->language_name = $language_array['language_name'];
        $language->level = $language_array['level'];
        $language->save();
        return ['msg' => 'successful'];
        
    }


    public function deleteLanguage(){

        $language_array = request('language');
        $language  = Language::find($language_array['id']);
        $language->delete();
        return ['msg' => 'successful'];

    }

}
