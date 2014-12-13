<?php

namespace Acme\TwitterBundle\Controller;

use Acme\TwitterBundle\AcmeTwitterBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acme\TwitterBundle\Entity\SysPackets;
use Acme\TwitterBundle\Entity\PacketRequest;


class PacketRequestController extends Controller
{
    public function __construct()
	{
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
	}
    
    public function indexAction()
    {   
        if(isset($_POST)){
            
            $pData["packetType"] = $_POST["packetType"];
            $pData["userPaypalMail"] = $_POST["userPaypalMail"];
            $pData["processValue"] = $_POST["processValue"];
            $pData["returnUrl"] = $_POST["returnUrl"];
            
            
            $packet = $this->getDoctrine()
                            ->getRepository('AcmeTwitterBundle:SysPackets')
                            ->findByEid((int)$pData["packetType"]);
            
            $settings = $this->getDoctrine()
                            ->getRepository('AcmeTwitterBundle:SysSettings')
                            ->findAll();
            
            
            if(AcmeTwitterBundle::isBlank($pData)){
                
                return new Response('<meta http-equiv="Refresh" content="1; url='.$pData["returnUrl"].'?error=1" />Yönlendiriliyorsunuz... ');
            }elseif(!filter_var($pData["userPaypalMail"], FILTER_VALIDATE_EMAIL)){
                
                return new Response('<meta http-equiv="Refresh" content="1; url='.$pData["returnUrl"].'?error=2" />Yönlendiriliyorsunuz... ');
            } elseif (count($packet) < 1) {
                
                return new Response('<meta http-equiv="Refresh" content="1; url='.$pData["returnUrl"].'?error=5" />Yönlendiriliyorsunuz... ');
            }  else {
                
                $pRequest = new PacketRequest();
                $pRequest->setInsertTime(time());
                $pRequest->setIsFinish(0);
                $pRequest->setPacketId($pData["packetType"]);
                $pRequest->setPaymentMail($pData["userPaypalMail"]);
                $pRequest->setPaypalMail($settings[0]->getPaypalMail());
                $pRequest->setProcessValue($pData["processValue"]);
                $pRequest->setPacketType($packet[0]->getPaketTipi());
                $pRequest->setSentTime(0);
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($pRequest);
                $em->flush();
                
                
                $sData = AcmeTwitterBundle::startInfos();
                $sData["userMail"] = $pData["userPaypalMail"];
                $sData["processValue"] = $pData["processValue"];
                $sData["packet"] = $packet;
                $sData["setting"] = $settings;
                $sData["itemName"] = $packet[0]->getPaketTipi();
                
                return $this->render('AcmeTwitterBundle:Twitter:paypalRedirect.html.twig', $sData);
            }
            
            
        }else{
            
            return new Response('<meta http-equiv="Refresh" content="1; url='.$pData["returnUrl"].'?error=1" />Yönlendiriliyorsunuz... ');
        }
    }   
}
