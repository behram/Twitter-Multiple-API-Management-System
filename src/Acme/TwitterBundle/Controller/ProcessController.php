<?php

namespace Acme\TwitterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acme\TwitterBundle\AcmeTwitterBundle;

class ProcessController extends Controller
{
    public $access_token;
    public $sData=array();

    public function __construct()
	{
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        require 'twitteroauth.php';
        $this->sData = AcmeTwitterBundle::startInfos();
	}
    
    public function allSettings()
    {
        $systemSetting = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysSettings')->findAll();
        return $systemSetting;
    }
    
    public function mainApi()
    {
        $allSetting = $this->allSettings();
        $mainApi = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysApis')->find($allSetting[0]->getMainApi());
        return $mainApi;
    }
    
    public function indexAction()
    { 
        if($_SESSION["user_added"] == "yes"){
            
            $sData = $this->sData;
            $sData["avatars"] = AcmeTwitterBundle::random50User();
            $sData["session"] = $_SESSION;
            $allSetting = $this->allSettings();
            $sData["setting"] = $allSetting[0];
            
            return $this->render('AcmeTwitterBundle:Twitter:process.html.twig', $sData);
        }else{
            
            return new Response('<meta http-equiv="Refresh" content="0; url='.$this->generateUrl("acme_homepage").'" />Çıkış Yapılıyor... ');
        }     
    }
    
    public function followerSendAction()
    {
        if($_SESSION["user_added"] == "yes"){
            
            /*
             * tek istekte gönderilecek takipçi sayısı
             */
            $followerCount = 30;
            
            /*
             * api key
             * api key secret
             * api id
             */
            $main_api_id = $this->mainApi()->getApiId();
            $apiKey = $this->mainApi()->getApiKey();
            $apiSecret = $this->mainApi()->getApiSecret();
            
            
            /*
             * istek yapan kullanıcıyı çek
             */
            $selectUser = $this ->getDoctrine()
                                ->getRepository('AcmeTwitterBundle:SysUsers')
                                ->findByUserScreenName($_SESSION["added_user_screen_name"]);
            
            /*
             * eğer kullanıcının kredisi yetersizse
             */
            if($selectUser[0]->getUserCredit() < $followerCount){
                
                /*
                 * kullanıcı kredisi kadar takipçi çek
                 */
                $followers = $this  ->getDoctrine()
                                    ->getRepository('AcmeTwitterBundle:SysUsers')
                                    ->findBy(array(),array(), $selectUser[0]->getUserCredit(),1); 
                
                /*
                 * kullanıcının bilgilerine güncelleme verileri
                 */
                $updateCredit = 0;
                $updateFollowerCount = $selectUser[0]->getUserFollowersCount() + $selectUser[0]->getUserCredit();
            }else{
                /*
                 * normal sayı kadar takipçi gönder 
                 */
                $followers = $this  ->getDoctrine()
                                    ->getRepository('AcmeTwitterBundle:SysUsers')
                                    ->findBy(array(),array(), $followerCount,1); 
                /*
                 * kullanıcının bilgilerine güncelleme verileri
                 */
                $updateCredit = (int)$selectUser[0]->getUserCredit() - (int)$followerCount ;
                $updateFollowerCount = $selectUser[0]->getUserFollowersCount() + $followerCount;        
            }
            
            /*
             * çekilen kullanıcılara kişiyi takip ettir
             */
            foreach ($followers as $key => $follower){
                
                $follower_ac_json_decoded = json_decode($follower->getUserOauthToken());
                $follower_as_json_decoded = json_decode($follower->getUserOauthTokenSecret());
                
                $follower_access_token = $follower_ac_json_decoded->$main_api_id;
                $follower_oauth_token_secret = $follower_as_json_decoded->$main_api_id;
                
                /*
                 * Twitter api bağlan ve cevapları $createFollow arrayına aktar
                 */
                $connection = new \TwitterOAuth($apiKey, $apiSecret, $follower_access_token, $follower_oauth_token_secret);
                $createFollow[] = $connection->post('friendships/create', array('screen_name' => $_SESSION["added_user_screen_name"]));                
            } 
            
            /*
             * kullanıcı kredi, follower bilgilerini güncelle
             */
            $em = $this ->getDoctrine()->getManager();
            $sets = $em ->getRepository('AcmeTwitterBundle:SysUsers')
                        ->find($_SESSION["added_user_entry_id"]);

            $sets->setUserCredit($updateCredit);
            $sets->setUserFollowersCount($updateFollowerCount);

            $em->flush();
            
            /*
             * Session bilgilerini düzenle
             */
            $_SESSION["user_credit"] = $updateCredit;
            $_SESSION["follower_count"] = $updateFollowerCount;
            
            
            return new Response(json_encode(array("error" => "0", "text" => "İşlem Başarılı")));
        }else{
            
            return new Response('<meta http-equiv="Refresh" content="0; url='.$this->generateUrl("acme_homepage").'" />Çıkış Yapılıyor... ');
        }
    }
}
