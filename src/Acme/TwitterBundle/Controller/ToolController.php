<?php

namespace Acme\TwitterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acme\TwitterBundle\AcmeTwitterBundle;
use Acme\TwitterBundle\Entity\PacketRequest;

class ToolController extends Controller {

    public function __construct() {

        $adminLogin = AcmeTwitterBundle::adminLogin();
        if (1 !== $adminLogin) {

            exit($adminLogin);
        }
    }

    public function allTweets() {
        $tweets = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysTweets')->findAll();
        return $tweets;
    }

    public function allRequests() {
        $requests = $this->getDoctrine()->getRepository('AcmeTwitterBundle:PacketRequest')->findAll();
        return $requests;
    }

    public function allApis() {

        $apis = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysApis')->findAll();
        return $apis;
    }

    public function indexAction() {
        $sData = AcmeTwitterBundle::startInfos();

        $sData["apis"] = $this->allApis();

        return $this->render('AcmeTwitterBundle:Twitter/Panel:default.html.twig', $sData);
    }

    public function sendTweetAction() {
        $sData = AcmeTwitterBundle::startInfos();

        $sData["apis"] = $this->allApis();

        $sData["requests"] = $this->allRequests();

        $sData["tweets"] = $this->allTweets();

        return $this->render('AcmeTwitterBundle:Twitter/Panel:tool.sendTweet.html.twig', $sData);
    }

    public function sendFollowerAction() {
        $sData = AcmeTwitterBundle::startInfos();

        $sData["apis"] = $this->allApis();

        $sData["requests"] = $this->allRequests();

        return $this->render('AcmeTwitterBundle:Twitter/Panel:tool.sendFollower.html.twig', $sData);
    }

    public function doFavorateAction() {
        $sData = AcmeTwitterBundle::startInfos();

        $sData["apis"] = $this->allApis();

        $sData["requests"] = $this->allRequests();

        return $this->render('AcmeTwitterBundle:Twitter/Panel:tool.doFavorate.html.twig', $sData);
    }

    public function doRetweetAction() {
        $sData = AcmeTwitterBundle::startInfos();

        $sData["apis"] = $this->allApis();

        $sData["requests"] = $this->allRequests();

        return $this->render('AcmeTwitterBundle:Twitter/Panel:tool.doRetweet.html.twig', $sData);
    }

    public function dropClearAction() {
        $sData = AcmeTwitterBundle::startInfos();

        $sData["apis"] = $this->allApis();

        return $this->render('AcmeTwitterBundle:Twitter/Panel:tool.dropClear.html.twig', $sData);
    }

    public function packetDeleteAction() {
        $requestId = $_GET["requestId"];
        $em = $this->getDoctrine()->getEntityManager();
        $request = $em->getRepository('AcmeTwitterBundle:PacketRequest')->find($requestId);

        if (!$request) {
            throw $this->createNotFoundException('No product found for id ');
        }

        $em->remove($request);
        $em->flush();

        $response = array("error" => 0, "text" => 'İşlem Başarılı. Silinen İstek ID si -> ' . $requestId);
        return new Response(json_encode($response));
    }

    public function packetFinishAction() {
        $requestId = $_GET["requestId"];
        $em = $this->getDoctrine()->getManager();
        $sets = $em->getRepository('AcmeTwitterBundle:PacketRequest')->find($requestId);

        $sets->setIsFinish(1);
        $sets->setSentTime(time());

        $em->flush();

        $response = array("error" => 0, "text" => 'Başarıyla Güncellendi');
        return new Response(json_encode($response));
    }

    public function updateimagesAction() {
        
        $sData = AcmeTwitterBundle::startInfos();

        $sData["apis"] = $this->allApis();

        return $this->render('AcmeTwitterBundle:Twitter/Panel:tool.updateimages.html.twig', $sData);        
    }
}
