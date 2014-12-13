<?php

namespace Acme\TwitterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acme\TwitterBundle\AcmeTwitterBundle;
use Acme\TwitterBundle\Entity\SysSettings;
use Symfony\Component\HttpFoundation\Request;

class GeneralSettingController extends Controller
{
    public function __construct() {
        
        $adminLogin = AcmeTwitterBundle::adminLogin();
        if(1 !== $adminLogin){
            
            exit($adminLogin);
        }
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
    
    public function indexAction()
    {   
        
        $sData = AcmeTwitterBundle::startInfos();
        
        //all settings
        $sData["settings"] = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysSettings')->findAll();
        
        //all apis
        $sData["apis"] = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysApis')->findAll();
        
        //all tweets 
        $tweets = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysTweets')->findAll();
        
        
        $sData['oto_follow_hesap'] = implode(",",json_decode($sData["settings"][0]->getOtoFollowHesap()));
        
     
        $setIDs = json_decode($sData["settings"][0]->getOtoTweet());
        
        foreach ($tweets as $v ){
            
            $tweetIds[] = $v->getEId();
            $sData["tweet_heads"][$v->getEId()] = $v->getHead();
        }
        
        foreach ($tweetIds as $va){
            if(in_array($va, $setIDs)) {
                
                $sData["selected_tweet"][] = $va;
            }else{
                
                $sData["not_selected_tweet"][] = $va;
            }
        }
        
        $sData["langs"]["en"] = "English";
        $sData["langs"]["tr"] = "Türkçe";
        //$sData["langs"]["fr"] = "Francais";
        //daha sonra update ile eklenebilir
        
        return $this->render('AcmeTwitterBundle:Twitter/Panel:generalsetting.html.twig', $sData);    
    }
    
    public function updateAction()
    {   
        $request = Request::createFromGlobals();
        
        foreach ($_POST as $val){
            
            if($val == ""){
                
                $response = array("error" => 1, "text" => "Boş alan bırakmayın");
                return new Response(json_encode($response));                 
            }
        }
        
        $em = $this->getDoctrine()->getManager();
        $sets = $em->getRepository('AcmeTwitterBundle:SysSettings')->find("1");
        
        $pass = (($request->request->get('adminPass')));
        
        $sets->setSiteTitle($request->request->get('siteHead'));
        $sets->setSiteHeader($request->request->get('topHead'));
        $sets->setSiteFooter($request->request->get('bottomHead'));
        $sets->setAdminUser($request->request->get('adminUser'));
        $sets->setAdminPass($pass);
        $sets->setSysLan($request->request->get('sysLan'));
        $sets->setNormalKredi($request->request->get('dayCredit'));
        $sets->setPaypalMail($request->request->get('paypalMail'));
        $sets->setOtoFollowHesap(json_encode(explode(",",$request->request->get('otoFollow'))));
        $sets->setFacebookPage($request->request->get('facePage'));
        $sets->setTwitterPage($request->request->get('twitterPage'));
        $sets->setMainApi($request->request->get('mainApi'));
        $sets->setOtoTweet(json_encode($request->request->get('otoTweet')));
        
        $sets->setSiteKeys($request->request->get('siteKeys'));
        $sets->setFavicon($request->request->get('favicon'));
        $sets->setGoogleAnal($request->request->get('googleAna'));
        $sets->setSiteLogo($request->request->get('siteLogo'));
        //$sets->setSiteTitleBro($request->request->get('siteTitle'));
        $sets->setSiteDesc($request->request->get('siteDesc'));
        $sets->setCopyPlace($request->request->get('copyrPlace'));
        $sets->setHomeEntryPla($request->request->get('homeBigPlace'));
        $sets->setLogWithTwitterBut($request->request->get('LWTBut'));
        $sets->setSiteFea1($request->request->get('siteFea1'));
        $sets->setSiteFea2($request->request->get('siteFea2'));
        $sets->setSiteFea3($request->request->get('siteFea3'));
        $sets->setSiteFea4($request->request->get('siteFea4'));
        $sets->setSiteFea5($request->request->get('siteFea5'));
        $sets->setSiteFea6($request->request->get('siteFea6'));
        $sets->setSiteFea7($request->request->get('siteFea7'));
        $sets->setSiteFea8($request->request->get('siteFea8'));
        $sets->setTakeCreInfos($request->request->get('HTaCreInfo'));
        $sets->setTakeFolInfos($request->request->get('HTaFolInfo'));
        $sets->setTakeRetInfos($request->request->get('HTaRetInfo'));
        $sets->setTakeTweInfos($request->request->get('HMaTweInfo'));
        
        
        $_SESSION["sysLan"] = $request->request->get('sysLan');
        
        $em->flush();
        
        $response = array("error" => 0, "text" => 'Başarıyla Güncellendi');
        return new Response(json_encode($response));
    }
}
