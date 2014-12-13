<?php

namespace Acme\TwitterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acme\TwitterBundle\AcmeTwitterBundle;
use Acme\TwitterBundle\Entity\SysTweets;

class TweetController extends Controller
{   
    public function __construct() {
        
        $adminLogin = AcmeTwitterBundle::adminLogin();
        if(1 !== $adminLogin){
            
            exit($adminLogin);
        }  
    }
    
    public function allTweets()
    {   
        $tweets = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysTweets');
        return $tweets;
    }
    
    public function indexAction()
    {   
        $sData = AcmeTwitterBundle::startInfos();
    
        $sData["tweets"] = $this->allTweets()->findAll();
        
        return $this->render('AcmeTwitterBundle:Twitter:Panel/tweet.html.twig', $sData);    
    }
    
    public function addAction()
    {   
        foreach ($_POST as $val){
            
            if($val == ""){
                
                $response = array("error" => 1, "text" => "Boş alan bırakmayın");
                return new Response(json_encode($response));                 
            }
        }
        
        $tweets = new SysTweets();
        $tweets->setHead($_POST['tweetHead']);
        $tweets->setContent($_POST['tweetContent']);
        $tweets->setExtraInfo($_POST['tweetComment']);
        $tweets->setAddTime(time());
        $tweets->setCreator("behramcelen");
        $tweets->setTotalPublish("0");
        if(isset($_POST['isOnline'])){
            
            $tweets->setIsOnline("Online");
        }else{
            
            $tweets->setIsOnline("Not Online");
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($tweets);
        $em->flush();
        
        $response = array("error" => 0, "text" => 'İşlem Başarılı. Tweet ID si -> '.$tweets->getEId());
        return new Response(json_encode($response));

    }
    
    public function deleteAction($tweetId)
    {   
        $em = $this->getDoctrine()->getEntityManager(); 
        $tweet = $em->getRepository('AcmeTwitterBundle:SysTweets')->find($tweetId);

        if (!$tweet) {
            throw $this->createNotFoundException('No product found for id '.$tweetId);
        }

        $em->remove($tweet);
        $em->flush();
        
        $response = array("error" => 0, "text" => 'İşlem Başarılı. Silinen Tweet ID si -> '.$tweetId);
        return new Response(json_encode($response));

    }
    
}
