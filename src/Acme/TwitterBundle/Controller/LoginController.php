<?php

namespace Acme\TwitterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acme\TwitterBundle\AcmeTwitterBundle;
use Acme\TwitterBundle\Entity\SysSettings;

class LoginController extends Controller
{   
    public function allSettings()
    {   
        $settings = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysSettings');
        return $settings;
    }
    
    public function indexAction()
    {   
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $settings = $this->allSettings()->findAll();
        $_SESSION["sysLan"] = $settings[0]->getSysLan();
        
        if(isset($_SESSION['admin_logged_in'])){
            
            if($_SESSION['admin_logged_in'] == 1){
                
                exit('<meta charset="utf8"><meta http-equiv="Refresh" content="0; url='.$this->generateUrl('acme_panel_homepage').'" />Giriş Yapılıyor... ');
            } 
        }
        $sData = AcmeTwitterBundle::startInfos();
            
        return $this->render('AcmeTwitterBundle:Twitter:Panel/login.html.twig', $sData);    
    }
    
    public function controlAction()
    {   
        session_start();
        $settings = $this->allSettings()->findAll();
        $dbUserName = $settings[0]->getAdminUser();
        $dbUserPass = $settings[0]->getAdminPass();

        if($dbUserName == $_POST["username"] && $dbUserPass == (($_POST["userpass"]))){
            
            $_SESSION["admin_logged_in"] = "1";
            return new Response('<meta charset="utf8"><meta http-equiv="Refresh" content="0; url='.$this->generateUrl('acme_panel_homepage').'" />Giriş Yapılıyor... ');
        }else{
            
            return new Response('<meta charset="utf8"><meta http-equiv="Refresh" content="0; url='.$this->generateUrl('acme_panel_login').'" />Yönlendiriliyorsunuz... ');        
        }
    }    
    
    public function logoutAction()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy();
        exit('<meta charset="utf8"><meta http-equiv="Refresh" content="0; url='.$this->generateUrl('acme_panel_login').'" />Çıkış Yapılıyor... ');
    }
}
