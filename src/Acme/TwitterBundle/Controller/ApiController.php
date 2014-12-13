<?php

namespace Acme\TwitterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acme\TwitterBundle\AcmeTwitterBundle;
use Acme\TwitterBundle\Entity\SysApis;

class ApiController extends Controller {

    public function __construct() {

        $adminLogin = AcmeTwitterBundle::adminLogin();
        if (1 !== $adminLogin) {

            exit($adminLogin);
        }
    }

    public function allApis() {
        $apis = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysApis')->findAll();
        return $apis;
    }

    public function indexAction() {
        $sData = AcmeTwitterBundle::startInfos();
        $sData['apis'] = $this->allApis();
        return $this->render('AcmeTwitterBundle:Twitter/Panel:api.html.twig', $sData);
    }

    public function addAction() {
        foreach ($_POST as $val) {

            if ($val == "") {

                $response = array("error" => 1, "text" => "Boş alan bırakmayın");
                return new Response(json_encode($response));
            }
        }

        $apis = new SysApis();
        $apis->setApiName($_POST['apiHead']);
        $apis->setApiSecret($_POST['apiSecret']);
        $apis->setApiKey($_POST['apiKey']);
        $apis->setApiAccessLevel($_POST['apiPermission']);
        $apis->setApiExtraInfo($_POST['apiComment']);
        $apis->setApiAddTime(time());
        $apis->setApiCreatedBy("behramcelen");
        $apis->setApiTotalUser("0");

        $em = $this->getDoctrine()->getManager();
        $em->persist($apis);
        $em->flush();

        $response = array("error" => 0, "text" => 'İşlem Başarılı. Paket ID si -> ' . $apis->getApiId());
        return new Response(json_encode($response));
    }

    public function deleteAction($apiId) {
        $em = $this->getDoctrine()->getEntityManager();
        $api = $em->getRepository('AcmeTwitterBundle:SysApis')->find($apiId);

        if (!$api) {
            throw $this->createNotFoundException('No product found for id ' . $tweetId);
        }

        $em->remove($api);
        $em->flush();

        $response = array("error" => 0, "text" => 'İşlem Başarılı. Silinen Api ID si -> ' . $apiId);
        return new Response(json_encode($response));
    }

    public function editAction() {
        
        foreach ($_POST as $val){
            
            if($val == ""){
                
                $response = array("error" => 1, "text" => "Boş alan bırakmayın");
                return new Response(json_encode($response));                 
            }
        }
        
        $em = $this->getDoctrine()->getManager();
        $sets = $em->getRepository('AcmeTwitterBundle:SysApis')->find($_POST["editApiId"]);
        
        $sets->setApiName($_POST['editApiHead']);
        $sets->setApiSecret($_POST['editApiSecret']);
        $sets->setApiKey($_POST['editApiKey']);
        $sets->setApiExtraInfo($_POST['editExtraComment']);
        
        $em->flush();
        
        $response = array("error" => 0, "text" => 'Başarıyla Güncellendi. Sayfayı Yenilemeyi Unutmayın');
        return new Response(json_encode($response));
    }
}
