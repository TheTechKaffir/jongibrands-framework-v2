<?php 

/**
 * Home Class
 */

 class Home extends Controller
 {
    public function index()
    {
        $db = new Database(); // may use this instance of the Database Class ($db) anywhere to get or post data into Database
       
        $this->view('index');
    }
 }