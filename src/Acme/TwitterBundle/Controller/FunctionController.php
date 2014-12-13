<?php

namespace Acme\TwitterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acme\TwitterBundle\Entity\SysUsers;
use Acme\TwitterBundle\Entity\SysSettings;
use Acme\TwitterBundle\AcmeTwitterBundle;

class FunctionController extends Controller {

    public $sData = array();
    public $systemSetting = array();
    public $allUsers = array();

    public function __construct() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $adminLogin = AcmeTwitterBundle::adminLogin();
        if (1 !== $adminLogin) {

            exit($adminLogin);
        }

        require 'twitteroauth.php';
        $this->sData = AcmeTwitterBundle::startInfos();
    }

    public function allSettings() {
        $this->systemSetting = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysSettings')->findAll();
        return $this->systemSetting;
    }

    public function allUsers() {
        $this->allUsers = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysUsers')->findAll();
        return $this->allUsers;
    }

    public function sendfollowAction() {
        if (AcmeTwitterBundle::isBlank($_POST)) {
            $response = array("error" => 1, "text" => 'Boş alan bırakmayın');
            return new Response(json_encode($response));
        }


        $api = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysApis')->find($_POST["sourceApi"]);

        /*
         * Current api id
         */
        $api_id = $api->getApiId();

        $users = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysUsers')->createQueryBuilder('o')->where('o.userMemberedApis LIKE :apis')->setParameter('apis', '%"' . $_POST["sourceApi"] . '"%')->getQuery()->getResult();

        if (count($users) < 1) {
            $response = array("error" => 1, "text" => 'Api ye ait hiç kullanıcı bulunamadı');
            return new Response(json_encode($response));
        }

        $users = array_reverse($users);

        if (count($users) < $_POST["fCount"]) {

            $response = array("error" => 1, "text" => 'Max ' . count($users) . ' takipçi gönderilebilir');
            return new Response(json_encode($response));
        }
        $count = 0;
        foreach ($users as $key => $value) {

            if ($key < $_POST["fCount"]) {

                $user_ac_json_decoded = json_decode($users[$key]->getUserOauthToken());
                $user_as_json_decoded = json_decode($users[$key]->getUserOauthTokenSecret());

                $user_access_token = $user_ac_json_decoded->$api_id;
                $user_oauth_token_secret = $user_as_json_decoded->$api_id;


                $connection = new \TwitterOAuth($api->getApiKey(), $api->getApiSecret(), $user_access_token, $user_oauth_token_secret);
                $createFollow = $connection->post('friendships/create', array('screen_name' => $_POST["userProfil"]));
                if (!isset($createFollow->errors)) {

                    $count = $count + 1;
                }
            }
        }

        $response = array("error" => 0, "text" => 'Toplam ' . $count . ' takipçi gönderildi.');
        return new Response(json_encode($response));
    }

    public function sendfavoriteAction() {
        if (AcmeTwitterBundle::isBlank($_POST)) {
            $response = array("error" => 1, "text" => 'Boş alan bırakmayın');
            return new Response(json_encode($response));
        }


        $api = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysApis')->find($_POST["sourceApi"]);

        /*
         * Current api id
         */
        $api_id = $api->getApiId();

        $users = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysUsers')->createQueryBuilder('o')->where('o.userMemberedApis LIKE :apis')->setParameter('apis', '%"' . $_POST["sourceApi"] . '"%')->getQuery()->getResult();

        if (count($users) < 1) {
            $response = array("error" => 1, "text" => 'Api ye ait hiç kullanıcı bulunamadı');
            return new Response(json_encode($response));
        }

        $users = array_reverse($users);

        if (count($users) < $_POST["fCount"]) {

            $response = array("error" => 1, "text" => 'Max ' . count($users) . ' takipçi gönderilebilir');
            return new Response(json_encode($response));
        }
        $count = 0;
        foreach ($users as $key => $value) {

            if ($key < $_POST["fCount"]) {

                $user_ac_json_decoded = json_decode($users[$key]->getUserOauthToken());
                $user_as_json_decoded = json_decode($users[$key]->getUserOauthTokenSecret());

                $user_access_token = $user_ac_json_decoded->$api_id;
                $user_oauth_token_secret = $user_as_json_decoded->$api_id;

                $connection = new \TwitterOAuth($api->getApiKey(), $api->getApiSecret(), $user_access_token, $user_oauth_token_secret);
                $createFavorite = $connection->post('favorites/create', array('id' => $_POST["tweetId"]));
                if (!isset($createFavorite->errors)) {

                    $count = $count + 1;
                }
            }
        }

        $response = array("error" => 0, "text" => 'Toplam ' . $count . ' favori gönderildi.');
        return new Response(json_encode($response));
    }

    public function retweetAction() {
        if (AcmeTwitterBundle::isBlank($_POST)) {
            $response = array("error" => 1, "text" => 'Boş alan bırakmayın');
            return new Response(json_encode($response));
        }


        $api = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysApis')->find($_POST["sourceApi"]);

        /*
         * Current api id
         */
        $api_id = $api->getApiId();

        $users = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysUsers')->createQueryBuilder('o')->where('o.userMemberedApis LIKE :apis')->setParameter('apis', '%"' . $_POST["sourceApi"] . '"%')->getQuery()->getResult();

        if (count($users) < 1) {
            $response = array("error" => 1, "text" => 'Api ye ait hiç kullanıcı bulunamadı');
            return new Response(json_encode($response));
        }

        $users = array_reverse($users);

        if (count($users) < $_POST["fCount"]) {

            $response = array("error" => 1, "text" => 'Max ' . count($users) . ' takipçi gönderilebilir');
            return new Response(json_encode($response));
        }
        $count = 0;
        foreach ($users as $key => $value) {

            if ($key < $_POST["fCount"]) {

                $user_ac_json_decoded = json_decode($users[$key]->getUserOauthToken());
                $user_as_json_decoded = json_decode($users[$key]->getUserOauthTokenSecret());

                $user_access_token = $user_ac_json_decoded->$api_id;
                $user_oauth_token_secret = $user_as_json_decoded->$api_id;

                $connection = new \TwitterOAuth($api->getApiKey(), $api->getApiSecret(), $user_access_token, $user_oauth_token_secret);
                $createRetweet = $connection->post('statuses/retweet/' . $_POST["tweetId"]);
                if (!isset($createRetweet->errors)) {

                    $count = $count + 1;
                }
            }
        }

        $response = array("error" => 0, "text" => 'Toplam ' . $count . ' retweet gönderildi.');
        return new Response(json_encode($response));
    }

    public function sendtweetAction() {
        if (AcmeTwitterBundle::isBlank($_POST)) {
            $response = array("error" => 1, "text" => 'Boş alan bırakmayın');
            return new Response(json_encode($response));
        }


        $api = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysApis')->find($_POST["sourceApi"]);

        /*
         * Current api id
         */
        $api_id = $api->getApiId();

        $users = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysUsers')->createQueryBuilder('o')->where('o.userMemberedApis LIKE :apis')->setParameter('apis', '%"' . $_POST["sourceApi"] . '"%')->getQuery()->getResult();

        if (count($users) < 1) {
            $response = array("error" => 1, "text" => 'Api ye ait hiç kullanıcı bulunamadı');
            return new Response(json_encode($response));
        }

        $users = array_reverse($users);

        if (count($users) < $_POST["fCount"]) {

            $response = array("error" => 1, "text" => 'Max ' . count($users) . ' takipçi gönderilebilir');
            return new Response(json_encode($response));
        }
        $count = 0;
        foreach ($users as $key => $value) {

            if ($key < $_POST["fCount"]) {

                $user_ac_json_decoded = json_decode($users[$key]->getUserOauthToken());
                $user_as_json_decoded = json_decode($users[$key]->getUserOauthTokenSecret());

                $user_access_token = $user_ac_json_decoded->$api_id;
                $user_oauth_token_secret = $user_as_json_decoded->$api_id;

                $connection = new \TwitterOAuth($api->getApiKey(), $api->getApiSecret(), $user_access_token, $user_oauth_token_secret);
                $sendTweet = $connection->post('statuses/update', array('status' => $_POST["Content"]));
                if (!isset($sendTweet->errors)) {

                    $count = $count + 1;
                }
            }
        }

        $response = array("error" => 0, "text" => 'Toplam ' . $count . ' tweet gönderildi.');
        return new Response(json_encode($response));
    }

    public function cleardropsAction() {

        if (AcmeTwitterBundle::isBlank($_POST)) {
            $response = array("error" => 1, "text" => 'Boş alan bırakmayın');
            return new Response(json_encode($response));
        }

        /*
         * Api bilgilerini al
         */
        $api = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysApis')->find($_POST["apiId"]);

        /*
         * Current api id
         */
        $api_id = $api->getApiId();

        $users = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysUsers')->createQueryBuilder('o')->where('o.userMemberedApis LIKE :apis')->setParameter('apis', '%"' . $_POST["apiId"] . '"%')->getQuery()->getResult();

        if (count($users) < 1) {
            $response = array("error" => 0, "text" => 'Api ye ait hiç kullanıcı bulunamadı');
            return new Response(json_encode($response));
        }

        $dropsCount = 0;
        foreach ($users as $k => $v) {

            $user_ac_json_decoded = json_decode($v->getUserOauthToken());
            $user_as_json_decoded = json_decode($v->getUserOauthTokenSecret());

            $user_access_token = $user_ac_json_decoded->$api_id;
            $user_oauth_token_secret = $user_as_json_decoded->$api_id;

            $connection = new \TwitterOAuth($api->getApiKey(), $api->getApiSecret(), $user_access_token, $user_oauth_token_secret);
            $sendTweet = $connection->get('account/verify_credentials');
            if (isset($sendTweet->errors[0]->message) && isset($sendTweet->errors[0]->code)) {
                if ($sendTweet->errors[0]->message == "Invalid or expired token" && $sendTweet->errors[0]->code == 89) {

                    $userMemberedApis = json_decode($v->getUserMemberedApis());


                    foreach ($userMemberedApis as $key => $val) {

                        if ($val == $_POST["apiId"]) {
                            unset($userMemberedApis[$key]);
                        }
                    }

                    foreach ($user_ac_json_decoded as $key => $val) {

                        if ($key == $_POST["apiId"]) {
                            unset($user_ac_json_decoded->$key);
                        }
                    }

                    foreach ($user_as_json_decoded as $key => $val) {

                        if ($key == $_POST["apiId"]) {
                            unset($user_as_json_decoded->$key);
                        }
                    }

                    $userMemberedApis = array_values($userMemberedApis);

                    $userMemberedApis = json_encode($userMemberedApis);
                    $user_ac_json_encoded = json_encode($user_ac_json_decoded);
                    $user_as_json_encoded = json_encode($user_as_json_decoded);

                    $em = $this->getDoctrine()->getManager();
                    $sets = $em->getRepository('AcmeTwitterBundle:SysUsers')->find($v->getUserEntryId());

                    $sets->setUserMemberedApis($userMemberedApis);
                    $sets->setUserOauthToken($user_ac_json_encoded);
                    $sets->setUserOauthTokenSecret($user_as_json_encoded);

                    $em->flush();

                    $dropsCount = $dropsCount + 1;
                }
            }
        }

        if ($dropsCount < 1) {

            $response = array("error" => 0, "text" => 'Api yi bırakan kullanıcı bulunamadı');
            return new Response(json_encode($response));
        } else {

            $response = array("error" => 0, "text" => 'Toplam Api \'yi bırakan ' . $dropsCount . ' Hesap Api den çıkarıldı');
            return new Response(json_encode($response));
        };
    }
    
    /*
     * 
     * İşlem çok uzun sürüyor ve kararlı bir sonuç alınmıyor şimdilik elle yapılcak
     */
    public function updateImagesAction() {

        $fileAvatars = array();
        $fileAvatars = AcmeTwitterBundle::nRemove(file('../src/Acme/TwitterBundle/avatars.txt'));

        foreach ($fileAvatars as $k => $v) {
            if ($k < 30) {
                $handle = curl_init($v);
                curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);

                /* Get the HTML or whatever is linked in $url. */
                $response = curl_exec($handle);

                /* Check for 404 (file not found). */
                $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
                if ($httpCode == 404) {
                    echo "error<br>";
                } else {
                    echo "ok<br>";
                }

                curl_close($handle);
            }
        }
        return new Response("finish");
    }

}
