<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function show($id){
        $data = array (
            "id" => $id,
            "name" => "Kirsten";

            return view ('user',['data' => $data]);
        )
    }
}
