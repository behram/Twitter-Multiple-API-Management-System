<?php

namespace Acme\TwitterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acme\TwitterBundle\AcmeTwitterBundle;
use Acme\TwitterBundle\Entity\SysPackets;

class PacketController extends Controller
{
    public function __construct() {
        
        $adminLogin = AcmeTwitterBundle::adminLogin();
        if(1 !== $adminLogin){
            
            exit($adminLogin);
        }  
    }
    
    public function allPackets()
    {   
        $packets = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysPackets')->findAll();
        return $packets;
    }
    
    public function indexAction()
    {   
        $sData = AcmeTwitterBundle::startInfos();
        $sData['packets'] = $this->allPackets();
        return $this->render('AcmeTwitterBundle:Twitter/Panel:packet.html.twig', $sData);    
    }
    
    public function addAction()
    {   
        foreach ($_POST as $val){
            
            if($val == ""){
                
                $response = array("error" => 1, "text" => "Boş alan bırakmayın");
                return new Response(json_encode($response));                 
            }
        }
        $packetType = explode("--", $_POST['pacType']); 
        $packets = new SysPackets();
        $packets->setMiktar($_POST['pacCount']);
        $packets->setPaketTipi($packetType["0"]);
        $packets->setPacketTypeInt($packetType["1"]);
        $packets->setTlKarsiligi($_POST['pacTL']);
        $packets->setExtraInfo($_POST['packetComment']);
        $packets->setCreator("behramcelen");
        $packets->setTime(time());
        $packets->setTotalComing("0");
        
        if(isset($_POST['isOnline'])){
            
            $packets->setIsOnline("Online");
        }else{
            
            $packets->setIsOnline("Not Online");
        }
        $em = $this->getDoctrine()->getManager();
        $em->persist($packets);
        $em->flush();
        
        $response = array("error" => 0, "text" => 'İşlem Başarılı. Api ID si -> '.$packets->getEid());
        return new Response(json_encode($response));
    }
    
    public function deleteAction($packetId)
    {   
        $em = $this->getDoctrine()->getEntityManager(); 
        $packet = $em->getRepository('AcmeTwitterBundle:SysPackets')->find($packetId);

        if (!$packet) {
            throw $this->createNotFoundException('No product found for id '.$packetId);
        }

        $em->remove($packet);
        $em->flush();
        
        $response = array("error" => 0, "text" => 'İşlem Başarılı. Silinen paket ID si -> '.$packetId);
        return new Response(json_encode($response));

    }
}
