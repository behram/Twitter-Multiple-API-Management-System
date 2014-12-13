<?php

namespace Acme\TwitterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acme\TwitterBundle\AcmeTwitterBundle;

class TicketController extends Controller {

    public function __construct() {

        $adminLogin = AcmeTwitterBundle::adminLogin();
        if (1 !== $adminLogin) {

            exit($adminLogin);
        }
    }

    public function allTickets() {
        $tickets = $this->getDoctrine()->getRepository('AcmeTwitterBundle:Tickets')->findAll();
        return $tickets;
    }

    public function indexAction() {
        $sData = AcmeTwitterBundle::startInfos();
        $sData["tickets"] = $this->allTickets();
        return $this->render('AcmeTwitterBundle:Twitter/Panel:ticket.html.twig', $sData);
    }

    public function deleteAction() {
        
        $ticketId = $_GET["ticketId"];
        $em = $this->getDoctrine()->getEntityManager(); 
        $ticket = $em->getRepository('AcmeTwitterBundle:Tickets')->find($ticketId);

        if (!$ticket) {
            throw $this->createNotFoundException('No product found for id ');
        }

        $em->remove($ticket);
        $em->flush();
        
        $response = array("error" => 0, "text" => 'İşlem Başarılı. Silinen Ticket ID si -> '.$ticketId);
        return new Response(json_encode($response));
    }
    
    public function finishAction()
    {   
        $ticketId = $_GET["ticketId"];
        $em = $this->getDoctrine()->getManager();
        $sets = $em->getRepository('AcmeTwitterBundle:Tickets')->find($ticketId);
        
        $sets->setIsResponsed(1);
   
        $em->flush(); 
        
        $response = array("error" => 0, "text" => 'Başarıyla Güncellendi');
        return new Response(json_encode($response));
    }

}
