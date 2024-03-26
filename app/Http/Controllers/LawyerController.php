<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LawyerController extends Controller
{

    public function givemelawyers()
    {
        $lawyers = DB::table('lawyers')->get();
        // return $lawyers;
        return view('welcome', ['abc' => $lawyers]);
    }
    public function singlelawyer(string $id)
    {
        $lawyer = DB::table('lawyers')->where('id', $id)->get();
        return view('lawyer', ['abc' => $lawyer]);
        // return $lawyer;
    }
    public function addLawyer(Request $req )
    {
        $lawyer = DB::table('lawyers')
            ->insert([
                'name' => $req->name,
                'lastname' => $req->lastname,
                'city' => $req->city,
                'phone' => $req->phoneno,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        if ($lawyer) {
            return redirect()->route('home');
        } else {
            echo "<h2>Data does not added something Went Wrong</h2>";
        }

    }
    public function updatepage(string $id)
    {
        $lawyer = DB::table('lawyers')->find($id);
        return view('updatepage', ['data' => $lawyer]);
     
    }

    public function updatelawyer(Request $req,$id)
    {
        $lawyer = DB::table('lawyers')
            ->where('id', $id)
            ->update([
                'name' => $req->name,
                'lastname' => $req->lastname,
                'city' => $req->city,
                'phone' => $req->phoneno,
                'updated_at' => now()
            ]);


        if ($lawyer) {
            return redirect()->route('home');

            // echo "<h1>Data Updated Succesfully</h1>";
        } else {
            echo "<h2>Data does not Updated something Went Wrong</h2>";
        }
    }

    public function Deletelawyer(string $id)
    {
        $lawyer = DB::table('lawyers')
            ->where('id', $id)
            ->delete();
        if ($lawyer) {

            return redirect()->route('home');
        }



    }




}

