<?php

namespace MF\Controller;

abstract class Action{

    protected $view;

    public function __construct(){

        $this->view = new \stdClass();
        
    }

    protected function render($view, $layout){

        $this->view->page = $view;
        if(file_exists("../App/Views/".$layout.".phtml")){
            require_once "../App/Views/".$layout.".phtml";


        }else{

            $this->content();


        }
        
    }

    protected function content(){

        $classe = get_class($this);

        $classe = str_replace('App\\Controllers\\','', $classe);

        $classe = str_replace('Controller','',$classe);

        $classe = strtolower($classe);

        require_once '../App/Views/'.$classe.'/'.$this->view->page.'.phtml';

    }


}

?>