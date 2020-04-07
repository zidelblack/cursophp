<?php

    namespace App\Controllers;
    
    use App\Models\{Job, Project, Users};
    use Laminas\Diactoros\Response\HtmlResponse;


    class AdminController extends Basecontroller {
        public function getIndex(){        

            return $this->renderHTML('admin.twig');
        }
    }