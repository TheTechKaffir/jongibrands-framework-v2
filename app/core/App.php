<?php 

/**
 * App Class
 */

 class App 
 {
    // Default Controller, referenced by $this->controller anywhere inside of this Class
    protected $controller = 'Home';
    // Default Method, referenced by $this->method anywhere inside of this Class
    protected $method = 'index';
    public static $page = '';

    function __construct()
    {
        $arr = $this->getURL();

        $filename = '../app/controllers/' . ucfirst($arr[0]) . '.php';
        if(file_exists($filename))
        {
            require $filename;
            // if this filename (which is a controller) is found, then update the status of the default controller
            $this->controller   = $arr[0];
            self::$page         = $arr[0];
            
            unset($arr[0]);
        } else 
        {
            require '../app/controllers/' . $this->controller . '.php';
        }

        // Instantiate the instance of that controller
        $myController = new $this->controller();
        // Instantiate the method
        $myMethod = $arr[1] ?? $this->method;

        // check if any method exists inside of this myController object (which object is an instance of its 'blueprint' Class,i.e $this->controller)
        if(!empty($arr[1]))
        {
            if(method_exists($myController,strtolower($myMethod))) 
            {
                // Update the default method supra
                $this->method = strtolower($myMethod);
                unset($arr[1]);
            }
        }
        $arr = array_values($arr); // cleaning up the array, so it starts at zero again
        
        call_user_func_array([$myController, $this->method], $arr);
    }

    private function getURL()
    {
        $url = $_GET['url'] ?? ' home ';
        $url = filter_var($url,FILTER_SANITIZE_URL);
        $arr = explode('/', $url);
        
        return $arr;

    }
 }