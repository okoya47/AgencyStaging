<?php
class App{
    private $controller = "Home";
    private $method     = 'index';
    private function splitUrl(){
        $URL = $_GET['url'] ?? 'Home';
        $URL = explode("/", trim($URL, "/"));
        return ($URL);
    }
    
    public function loadContoller() {

        /** Selects controller **/
        $URL = $this->splitUrl();
        $filename = '../app/Controllers/'.ucfirst($URL[0]).'.php';
        if(file_exists($filename)){
            require $filename;
            $this->controller = ucfirst($URL[0]);
            unset($URL[0]);
        }else{
            require '../app/Controllers/pageNotFound.php';
            $this->controller = "pageNotFound";
        }
        $controller = new $this->controller();

        /** Selects method **/
        if(!empty($URL[1])){
            if(method_exists($controller, $URL[1])){
                $this->method = $URL[1];
                unset($URL[1]);
            }
        }
        call_user_func_array([$controller, $this->method], $URL);
    }
}

?>