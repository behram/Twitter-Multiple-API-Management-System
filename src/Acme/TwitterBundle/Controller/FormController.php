<?php

namespace Acme\TwitterBundle\Controller;

use Acme\TwitterBundle\AcmeTwitterBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acme\TwitterBundle\Entity\SysPackets;

class FormController extends Controller
{
    public $sData;
    public $error;
    public $errorText;


    public function __construct()
	{
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        require 'twitteroauth.php';
        $this->sData = AcmeTwitterBundle::startInfos();
        
        if(isset($_GET["error"])){
            $error = $_GET["error"];
            if($error == 1){
                
                $this->error = 1;
                $this->errorText = "Boş Alan Bırakmayın";
            }elseif ($error == 2) {
                
                $this->error = 1;
                $this->errorText = "Geçerli bir mail adresi girin";  
            }elseif ($error == 3) {
                
                $this->error = 1;
                $this->errorText = "Twitter kullanıcısı bulunamadı";  
            }elseif ($error == 4) {
                
                $this->error = 1;
                $this->errorText = "Bu paket şuan mevcut değil";  
            }elseif ($error == 5) {
                
                $this->error = 1;
                $this->errorText = "İstediğiniz paket bulunamadı";  
            } else {
                
                $this->error = 0; 
            }
        }else{
            
            $this->error = 0;
        }
	}
    
    public function allSettings()
    {
        $systemSetting = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysSettings')->find("1");
        return $systemSetting;
    }
    
    public function takefollowAction()
    {
        $sData = $this->sData;
        $sData["setting"] = $this->allSettings();
        if($this->error){
            
            $sData["error"]["text"] = $this->errorText; 
        }
        $sData["follow_packets"] = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysPackets')->findByPacketTypeInt("2");
        return $this->render('AcmeTwitterBundle:Twitter:form.takefollow.html.twig', $sData);    
    }
    
    public function takeretweetAction()
    {
        $sData = $this->sData;
        $sData["setting"] = $this->allSettings();
        if($this->error){
            
            $sData["error"]["text"] = $this->errorText; 
        }
        $sData["follow_packets"] = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysPackets')->findByPacketTypeInt("5");
        return $this->render('AcmeTwitterBundle:Twitter:form.takeretweet.html.twig', $sData);   
    }
    
    public function takefavoriteAction()
    {
        $sData = $this->sData;
        $sData["setting"] = $this->allSettings();
        if($this->error){
            
            $sData["error"]["text"] = $this->errorText; 
        }
        $sData["follow_packets"] = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysPackets')->findByPacketTypeInt("4");
        return $this->render('AcmeTwitterBundle:Twitter:form.takefavorite.html.twig', $sData); 
    }
    
    public function takecreditAction()
    {
        $sData = $this->sData;
        $sData["setting"] = $this->allSettings();
        if($this->error){
            
            $sData["error"]["text"] = $this->errorText; 
        }
        $sData["credit_packets"] = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysPackets')->findByPacketTypeInt("3");
        return $this->render('AcmeTwitterBundle:Twitter:form.takecredit.html.twig', $sData); 
    }
    
    public function sendtweetAction()
    {
        $sData = $this->sData;
        $sData["setting"] = $this->allSettings();
        if($this->error){
            
            $sData["error"]["text"] = $this->errorText; 
        }
        $sData["tweet_packets"] = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysPackets')->findByPacketTypeInt("1");
        return $this->render('AcmeTwitterBundle:Twitter:form.sendtweet.html.twig', $sData); 
    }
}
