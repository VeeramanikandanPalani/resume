<?php

namespace App\Controllers;

class School extends BaseController
{
    public function index()
    {
        $data = [
            ['id' => 1, 'description' => 'First Task'],
            ['id' => 2, 'description' => 'Second Task']
        ];        
        return view('School/index',['tasks' => $data]);
    }
}