<?php 

/**
 * User Model
 */

 class User extends Model
 {
    public $errors = [];
    protected $table = 'users';
    protected $allowedColumns = [
        'name',
        'username',
        'email',
        'password',
        'image',
        'slug',
        'address',
        'phone',
    ];

    public function validate($data)
    {
        $this->errors = [];

        // Validate Name input
        if(empty($data['name']))
        {
            $this->errors['name'] = 'Full Name is required!';
        }
        // Validate Username input
        if(empty($data['username']))
        {
            $this->errors['username'] = 'Username is required!';
        }else
        if(!preg_match("/^[a-z]+$/",trim($data['username'])))
        {
            $this->errors['username'] = 'Username must be lower case with no numbers and spaces!';
        }
        // Validate Email input - Check if valid email, including if empty
        if(!filter_var(($data['email']),FILTER_VALIDATE_EMAIL))
        {
            $this->errors['email'] = 'Not a valid email address!';

        } elseif($this->where(['email' => $data['email']]))
        {
            $this->errors['email'] = 'Email already exists!';
        }
        // Validate Password input
        if(empty($data['password']))
        {
            $this->errors['password'] = 'Password is required!';
        }
        // Validate Repeat Password input
        if($data['password'] !== $data['repeatPassword'])
        {
            $this->errors['repeatPassword'] = 'Password mismatch!';
        }
        // Validate Terms input
        if(empty($data['terms']))
        {
            $this->errors['terms'] = 'You must agree to the terms of use of this app!';
        }


        if(empty($this->errors))
        {
            return true;
        }

        return false;
    }
 }