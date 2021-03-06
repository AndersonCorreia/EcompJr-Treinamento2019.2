<?php 

class Router{
    private $url;
    private $controller;
    private $method;
    private $param;

    public function start($request){

        $this->url = explode('/', $request['REQUEST_URI']);
        if(count($this->url) > 2){
            array_shift($this->url);
            $this->controller = ucfirst($this->url[0]."Controller");
            array_shift($this->url);
            if(isset($this->url[0])){
                $this->method = $this->url[0];
                array_shift($this->url);
                if(isset($this->url[0])){
                    $this->param = $this->url[0];                    
                }
            }        
        }else{
            $this->controller = "HomeController";
            $this->method = "index";
        }        
        call_user_func([new $this->controller, $this->method], $this->param);
    }
}