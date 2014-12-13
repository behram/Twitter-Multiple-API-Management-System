<?php

namespace Acme\TwitterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acme\TwitterBundle\AcmeTwitterBundle;
use Acme\TwitterBundle\Entity\Tickets;

class HomeController extends Controller {

    public $sData;

    public function __construct() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $this->sData = AcmeTwitterBundle::startInfos();

        if (isset($_GET["error"])) {
            $error = $_GET["error"];
            if ($error == 1) {

                $this->error = 1;
                $this->errorText = "Boş Alan Bırakmayın";
            } elseif ($error == 2) {

                $this->error = 1;
                $this->errorText = "Geçerli bir mail adresi girin";
            } elseif ($error == 0) {

                $this->error = 2;
                $this->errorText = "Ticket Başarı İle Eklendi En Kısa Sürede Cevaplanacak.";
            } else {

                $this->error = 0;
            }
        } else {

            $this->error = 0;
        }
    }

    public function allSettings() {
        $em = $this->getDoctrine()->getManager();
        $allSetting = $em->getRepository('AcmeTwitterBundle:SysSettings')->find("1");
        return $allSetting;
    }

    public function indexAction() {

        $this->sData["setting"] = $this->allSettings();

        if (isset($_SESSION["user_added"])) {
            if ($_SESSION["user_added"] == "yes") {

                return new Response('<meta http-equiv="Refresh" content="0; url=' . $this->generateUrl("acme_process") . '" />Giriş Yapılıyor... ');
            } else {
                $this->sData["avatars"] = AcmeTwitterBundle::random22User();
                return $this->render('AcmeTwitterBundle:Twitter:default.html.twig', $this->sData);
            }
        } else {
            $this->sData["avatars"] = AcmeTwitterBundle::random22User();
            return $this->render('AcmeTwitterBundle:Twitter:default.html.twig', $this->sData);
        }
    }

    public function communicationAction() {

        $this->sData["setting"] = $this->allSettings();
        
        if($this->error == 1){
            
            $this->sData["error"]["text"] = $this->errorText; 
            $this->sData["error"]["class"] = "errorMessage"; 
        } elseif ($this->error == 2) {
            
            $this->sData["error"]["text"] = $this->errorText; 
            $this->sData["error"]["class"] = "successMessage"; 
        }
        return $this->render('AcmeTwitterBundle:Twitter:communication.html.twig', $this->sData);
    }

    public function communicationProcessAction() {

        if (isset($_POST)) {

            $pData["userMail"] = $_POST["userMail"];
            $pData["ticketHead"] = $_POST["ticketHead"];
            $pData["proContent"] = $_POST["proContent"];

            if (AcmeTwitterBundle::isBlank($pData)) {

                return new Response('<meta http-equiv="Refresh" content="1; url=' . $this->generateUrl("acme_homepage_communication") . '?error=1" />Yönlendiriliyorsunuz... ');
            } elseif (!filter_var($pData["userMail"], FILTER_VALIDATE_EMAIL)) {

                return new Response('<meta http-equiv="Refresh" content="1; url=' . $this->generateUrl("acme_homepage_communication") . '?error=2" />Yönlendiriliyorsunuz... ');
            } else {

                $ticket = new Tickets();
                $ticket->setIsResponsed("0");
                $ticket->setSendTime(time());
                $ticket->setSenderIp($_SERVER["REMOTE_ADDR"]);
                $ticket->setSenderMail($pData["userMail"]);
                $ticket->setSenderSessions(json_encode($_SESSION));
                $ticket->setTicketContent($pData["proContent"]);
                $ticket->setTicketHead($pData["ticketHead"]);

                $em = $this->getDoctrine()->getManager();
                $em->persist($ticket);
                $em->flush();


                return new Response('<meta http-equiv="Refresh" content="0; url=' . $this->generateUrl("acme_homepage_communication") . '?error=0" />Yönlendiriliyorsunuz... ');
            }
        } else {

            return new Response('<meta http-equiv="Refresh" content="0; url=' . $this->generateUrl("acme_homepage_communication") . '?error=1" />Yönlendiriliyorsunuz... ');
        }
    }

}
