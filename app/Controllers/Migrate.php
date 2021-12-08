<?php 

namespace App\Controllers;

class Migrate extends BaseController {

    public function index(){

        $migrate = \config\Services::migrations();
        try {
            $migrate->latest();
            echo "Done";
        } catch(\Exception $e) {
            echo $e->getMessage();
        }       
        
    }

}