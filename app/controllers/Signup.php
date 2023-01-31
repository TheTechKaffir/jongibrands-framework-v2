<?php

/**
 * Signup Class 
 */

class Signup extends Controller
{
    public function index()
    {
        
        $data['errors'] = [];

        $user = new User(); // instance of the User Class (import here)

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            

            if ($user->validate($_POST)) 
            {
                $_POST['password'] = password_hash($_POST['password'],PASSWORD_DEFAULT);
                $user->insert($_POST);

                message('Your Profile has been created successfully! You may now login below');

                redirect('login');
            }
            
        }

        $data['errors'] = $user->errors;

        $data['title'] = 'Signup';

        $this->view('signup', $data);
    }
}