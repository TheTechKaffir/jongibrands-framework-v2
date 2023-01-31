<?php 

/**
 * Login Class 
 */

class Login extends Controller
{
    public function index()
    {
        $data['errors'] = [];

        $data['title'] = 'Login';
        $user = new User();

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            //validate
            $row = $user->single([
                'email'  => $_POST['email']
            ]);

            if($row)
            {
                
                if(password_verify($_POST['password'],$row->password))
                {
                    // Authenticate
                    Auth::Authenticate($row);

                    redirect('home');
                }
            }

            $data['errors']['email'] = 'Wrong Email address or Password!';
        }

        $this->view('login',$data);
    
    }
}