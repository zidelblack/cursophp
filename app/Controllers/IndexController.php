<?php

    namespace App\Controllers;
    
    use App\Models\{Job, User};
    use Laminas\Diactoros\Response\HtmlResponse;


    class IndexController extends Basecontroller {
        public function indexAction(){        
            $jobs = Job::all();
            $user =User::all();

            $name = 'Hector Zid';
            $limitMonths = 2000;

            return $this->renderHTML('index.twig', [
                'name' => $name,
                'jobs' => $jobs
            ]);
        }
    }