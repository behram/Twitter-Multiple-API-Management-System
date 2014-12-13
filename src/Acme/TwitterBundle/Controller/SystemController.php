<?php

namespace Acme\TwitterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acme\TwitterBundle\AcmeTwitterBundle;

class SystemController extends Controller
{
    public function __construct() {
        
        $adminLogin = AcmeTwitterBundle::adminLogin();
        if(1 !== $adminLogin){
            
            exit($adminLogin);
        }  
    }
    
    public function indexAction()
    {   
        return $this->render('AcmeTwitterBundle:Twitter/Panel:system.html.twig', AcmeTwitterBundle::startInfos());    
    }
}
