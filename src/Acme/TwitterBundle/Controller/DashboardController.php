<?php

namespace Acme\TwitterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acme\TwitterBundle\AcmeTwitterBundle;
use Acme\TwitterBundle\Entity\SysApis;
use Acme\TwitterBundle\Entity\SysPackets;
use Acme\TwitterBundle\Entity\SysTweets;
use Acme\TwitterBundle\Entity\SysUsers;

class DashboardController extends Controller
{
    public function __construct() {
        
        $adminLogin = AcmeTwitterBundle::adminLogin();
        if(1 != $adminLogin){
            
            exit($adminLogin);
        }  
    }
    
    public function indexAction()
    {   
        $sData = AcmeTwitterBundle::startInfos();
        
        $sData["users"] =  $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysUsers')->findAll();
        
        $sData["apis"] =  $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysApis')->findAll();
        
        $sData["packets"] =  $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysPackets')->findAll();
        
        $sData["tweets"] =  $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysTweets')->findAll();
        
        return $this->render('AcmeTwitterBundle:Twitter:Panel/dashboard.html.twig', $sData);    
    }
}
