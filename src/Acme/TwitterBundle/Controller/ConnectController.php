<?php

namespace Acme\TwitterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acme\TwitterBundle\Entity\SysUsers;
use Acme\TwitterBundle\Entity\SysSettings;
use Acme\TwitterBundle\AcmeTwitterBundle;

class ConnectController extends Controller {

    public $access_token;
    public $sData = array();

    public function __construct() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        require 'twitteroauth.php';
        $this->sData = AcmeTwitterBundle::startInfos();
    }

    public function allSettings() {
        $systemSetting = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysSettings')->findAll();
        return $systemSetting;
    }

    public function mainApi() {
        $allSetting = $this->allSettings();
        $mainApi = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysApis')->find($allSetting[0]->getMainApi());
        return $mainApi;
    }

    public function indexAction() {
        /* Build TwitterOAuth object with client credentials. */
        $connection = new \TwitterOAuth($this->mainApi()->getApiKey(), $this->mainApi()->getApiSecret());

        /* Get temporary credentials. */
        $request_token = $connection->getRequestToken($this->mainApi()->getApiCallbackUrl());

        /* Save temporary credentials to session. */
        $_SESSION['oauth_token'] = $token = $request_token['oauth_token'];
        $_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];

        /* If last connection failed don't display authorization link. */
        switch ($connection->http_code) {
            case 200:
                /* Build authorize URL and redirect user to Twitter. */
                $url = $connection->getAuthorizeURL($token);
                return new Response('<meta http-equiv="Refresh" content="0; url=' . $url . '" />Yönlendiriliyorsunuz... ');
                break;
            default:
                /* Show notification if something went wrong. */
                return new Response('Could not connect to Twitter. Refresh the page or try again later.');
        }
    }

    public function callbackAction() {
        $oauth_token = $_SESSION["oauth_token"];
        $oauth_token_secret = $_SESSION["oauth_token_secret"];

        /* Create TwitteroAuth object with app key/secret and token key/secret from default phase */
        $connection = new \TwitterOAuth($this->mainApi()->getApiKey(), $this->mainApi()->getApiSecret(), $oauth_token, $oauth_token_secret);


        /* Request access tokens from twitter */
        $this->access_token = $connection->getAccessToken($_GET['oauth_verifier']);

        $IsPreUser = $this->getDoctrine()
                ->getRepository('AcmeTwitterBundle:SysUsers')
                ->findByUserScreenName($this->access_token["screen_name"]);

        if (count($IsPreUser) == 1) {

            $userApis = json_decode($IsPreUser[0]->getUserMemberedApis());

            if (!in_array((string) $this->mainApi()->getApiId(), $userApis)) {

                $userApis[] = (string) $this->mainApi()->getApiId();

                $user_access_token = json_decode($IsPreUser[0]->getUserOauthToken());
                $user_oauth_token_secret = json_decode($IsPreUser[0]->getUserOauthTokenSecret());
                
                $main_api_id = $this->mainApi()->getApiId();
                
                $user_access_token->$main_api_id = $this->access_token["oauth_token"];
                $user_oauth_token_secret->$main_api_id = $this->access_token["oauth_token_secret"];

                $em = $this->getDoctrine()->getManager();
                $sets = $em->getRepository('AcmeTwitterBundle:SysUsers')->find($IsPreUser[0]->getUserEntryId());

                $sets->setUserMemberedApis(json_encode($userApis));
                $sets->setUserOauthToken(json_encode($user_access_token));
                $sets->setUserOauthTokenSecret(json_encode($user_oauth_token_secret));

                $em->flush();
            }

            $_SESSION["added_user_entry_id"] = $IsPreUser[0]->getUserEntryId();
            $_SESSION["added_user_screen_name"] = $IsPreUser[0]->getUserScreenName();
            $_SESSION["added_user_avatar"] = $IsPreUser[0]->getUserScreenImage();
            $_SESSION["follower_count"] = $IsPreUser[0]->getUserFollowersCount();
            $_SESSION["user_credit"] = $IsPreUser[0]->getUserCredit();
            $_SESSION["user_added"] = "yes";
            $_SESSION["add_time"] = time();

            return new Response('<meta http-equiv="Refresh" content="0; url=' . $this->generateUrl("acme_process") . '" />Yönlendiriliyorsunuz... ');
        } else {

            /*
             * apinin kullanıcı access token ını json şeklinde tanımladık
             */
            $access_token = json_encode(array((string) $this->mainApi()->getApiId() => $this->access_token["oauth_token"]));

            /*
             * apinin kullanıcı access token ını json şeklinde tanımladık
             */
            $oauth_token_secret = json_encode(array((string) $this->mainApi()->getApiId() => $this->access_token["oauth_token_secret"]));

            $user = new SysUsers();
            $user->setUserOauthToken($access_token);
            $user->setUserOauthTokenSecret($oauth_token_secret);
            $user->setUserTwitterId($this->access_token["user_id"]);
            $settings = $this->allSettings();
            $user->setUserCredit($settings[0]->getNormalKredi());
            $user->setUserEntryTime(time());
            $user->setUserScreenName($this->access_token["screen_name"]);
            $user->setUserApiTweeted("0");
            $user->setUserCreatedAt("0");
            $user->setUserFollowersCount("0");
            $user->setUserFriendsCount("0");
            $user->setUserFavouritesCount("0");
            $user->setUserStatusesCount("0");
            $user->setUserLastModfTime("0");
            $user->setUserApiTweeted("0");
            $user->setUserApiFavorated("0");
            $user->setUserMemberedApis(json_encode(array((string) $this->mainApi()->getApiId())));

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $_SESSION["added_user_entry_id"] = $user->getUserEntryId();
            $_SESSION["added_user_screen_name"] = $user->getUserScreenName();
            $_SESSION["user_added"] = "yes";
            $_SESSION["add_time"] = time();

            return new Response('<meta http-equiv="Refresh" content="0; url=' . $this->generateUrl("acme_connect_detail") . '" />Yönlendiriliyorsunuz... ');
        }
    }

    public function detailAction() {
        $users = $this->getDoctrine()->getRepository('AcmeTwitterBundle:SysUsers')->find($_SESSION["added_user_entry_id"]);

        $main_api_id = $this->mainApi()->getApiId();

        $user_ac_json_decoded = json_decode($users->getUserOauthToken());
        $user_access_token = $user_ac_json_decoded->$main_api_id;

        $user_as_json_decoded = json_decode($users->getUserOauthTokenSecret());
        $oauth_token_secret = $user_as_json_decoded->$main_api_id;

        $connection = new \TwitterOAuth($this->mainApi()->getApiKey(), $this->mainApi()->getApiSecret(), $user_access_token, $oauth_token_secret);
        $userDetail = $connection->get('users/show/' . $users->getUserTwitterId());

        $em = $this->getDoctrine()->getManager();
        $usersUpdate = $em->getRepository('AcmeTwitterBundle:SysUsers')->find($_SESSION["added_user_entry_id"]);

        $usersUpdate->setUserScreenImage($userDetail->profile_image_url);
        $usersUpdate->setUserLocation($userDetail->location);
        $usersUpdate->setUserDescription($userDetail->description);
        $usersUpdate->setUserFollowersCount($userDetail->followers_count);
        $usersUpdate->setUserFriendsCount($userDetail->friends_count);
        $usersUpdate->setUserCreatedAt($userDetail->created_at);
        $usersUpdate->setUserFavouritesCount($userDetail->favourites_count);
        $usersUpdate->setUserLanguage($userDetail->lang);

        $em->flush();

        $settings = $this->allSettings();

        $_SESSION["added_user_avatar"] = $userDetail->profile_image_url;
        $_SESSION["follower_count"] = $userDetail->followers_count;
        $_SESSION["user_credit"] = $settings[0]->getNormalKredi();

        return new Response('<meta http-equiv="Refresh" content="0; url=' . $this->generateUrl("acme_process") . '" />Yönlendiriliyorsunuz... ');
    }

    public function singoutAction() {
        session_destroy();
        return new Response('<meta http-equiv="Refresh" content="0; url=' . $this->generateUrl("acme_homepage") . '" />Yönlendiriliyorsunuz... ');
    }

}
