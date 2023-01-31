<?php 

/**
 * Auth Model 
 */

class Auth 
{
    public static function authenticate($row)
    {
        if(is_object($row))
        {
            $_SESSION['user'] = $row;
        }
    }  
    public static function logout()
    {
        if(!empty($_SESSION['user']))
        {
            unset($_SESSION['user']);
        }
    }  
    public static function logged_in()
    {
        if(!empty($_SESSION['user']))
        {
            return true;
        }

        return false;
    } 

    public static function is_admin()
    {
        if(!empty($_SESSION['user']))
        {
            if($_SESSION['user']->role == 'admin')
            {
                return true;
            }
            
        }

        return false;
    } 
    
    public static function __callStatic($func, $arguments)
    {
        $key = str_replace('get','',strtolower($func));
        if(!empty($_SESSION['user']->$key))
        {
            return $_SESSION['user']->$key;
        }

        return '';
    }
}