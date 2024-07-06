<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller
{
    
    public function normal(Request $request) {

        $normalAbout = $request->input('normalAbout');
        $date = $request->input('date');

        DB::insert("insert into dreams (dreamAbout,dreamType,dreamDate) values ('$normalAbout','normal','$date')");

        $ok = true;

        return view('normal', ['ok' => $ok]);

    }


    public function nightmare(Request $request) {

        $nightmareAbout = $request->input('nightmareAbout');
        $nightmareDate = $request->input('nightmareDate');

        DB::insert("insert into dreams (dreamAbout,dreamType,dreamDate) values ('$nightmareAbout','nightmare','$nightmareDate')");

        $ok = true;

        return view('nightmare', ['ok' => $ok]);

    }

    public function lucid(Request $request) {

        $lucidAbout = $request->input('lucidAbout');
        $lucidDate = $request->input('lucidDate');

        DB::insert("insert into dreams (dreamAbout,dreamType,dreamDate) values ('$lucidAbout','lucid','$lucidDate')");

        $ok = true;

        return view('lucid', ['ok' => $ok]);

    }

    public function daydream(Request $request) {

        $daydreamAbout = $request->input('daydreamAbout');
        $daydreamDate = $request->input('daydreamDate');

        DB::insert("insert into dreams (dreamAbout,dreamType,dreamDate) values ('$daydreamAbout','daydream','$daydreamDate')");

        $ok = true;

        return view('daydream', ['ok' => $ok]);

    }

    public function recurringdream(Request $request) {

        $recurringdreamAbout = $request->input('recurringdreamAbout');
        $recurringdreamDate = $request->input('recurringdreamDate');

        DB::insert("insert into dreams (dreamAbout,dreamType,dreamDate) values ('$recurringdreamAbout','recurringdream','$recurringdreamDate')");

        $ok = true;

        return view('recurringdream', ['ok' => $ok]);

    }

    public function nightterrors(Request $request) {

        $nightterrorsAbout = $request->input('nightterrorsAbout');
        $nightterrorsDate = $request->input('nightterrorsDate');

        DB::insert("insert into dreams (dreamAbout,dreamType,dreamDate) values ('$nightterrorsAbout','nightterrors','$nightterrorsDate')");

        $ok = true;

        return view('nightterrors', ['ok' => $ok]);

    }

    public function dreams() {

        $dreams = DB::select('select * from dreams');


       return view('dreams', ['dreams' => $dreams]);
    }

    public function delete(Request $request) {

            $id = $request->input('id');

            $dreams = DB::select('select * from dreams');
            
            DB::delete("delete from dreams where dreamId = $id");

        

        return view('dreams', ['dreams' => $dreams]);

    }

    public function about(Request $request) {

        $id = $request->input('id');

        $aboutData = DB::select("select * from dreams where dreamId = '$id' ");

        return view('about', ['id' => $id, 'aboutData' => $aboutData]);

    }


}
