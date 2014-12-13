<?php

namespace Acme\TwitterBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\HttpFoundation\Response;

class AcmeTwitterBundle extends Bundle {

    static function startInfos() {

        if (isset($_SESSION["sysLan"])) {
            
            $rData['sdata'] = Yaml::parse(file_get_contents('../src/Acme/TwitterBundle/Resources/translations/AcmeTwitterBundle.'.$_SESSION["sysLan"].'.yml'));            
            return $rData;
            
        } else {
            if (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) == "tr") {

                $rData['sdata'] = Yaml::parse(file_get_contents('../src/Acme/TwitterBundle/Resources/translations/AcmeTwitterBundle.tr.yml'));
                return $rData;
            } else {

                $rData['sdata'] = Yaml::parse(file_get_contents('../src/Acme/TwitterBundle/Resources/translations/AcmeTwitterBundle.en.yml'));
                return $rData;
            }
        }
    }

    static function adminLogin() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $redirect = '<meta charset="utf8"><meta http-equiv="Refresh" content="0; url=/panel/login" />Yönlendiriliyor ';
        if (isset($_SESSION['admin_logged_in'])) {

            if ($_SESSION['admin_logged_in'] == "1") {

                return 1;
            } else {

                return $redirect;
            }
        } else {

            return $redirect;
        }
    }

    static function isBlank($array) {
        foreach ($array as $value) {
            if ($value == "") {

                return 1;
            }
        }
        return 0;
    }

    static function nRemove($array) {
        foreach ($array as $k => $v) {

            $array[$k] = preg_replace("/\n/", "", $v);
        }
        return $array;
    }

    static function random50User() {
        $fileAvatars = array();
        $fileAvatars = file('../src/Acme/TwitterBundle/avatars.txt');

        for ($x = 0; $x < 50; $x++) {

            $siteAvatars[] = $fileAvatars[rand(0, count($fileAvatars) - 5)];
        }

        $siteAvatars = AcmeTwitterBundle::nRemove($siteAvatars);

        return $siteAvatars;
    }

    static function random22User() {
        $fileAvatars = array();
        $fileAvatars = file('../src/Acme/TwitterBundle/avatars.txt');

        for ($x = 0; $x < 22; $x++) {

            $siteAvatars[] = $fileAvatars[rand(0, count($fileAvatars) - 5)];
        }

        $siteAvatars = AcmeTwitterBundle::nRemove($siteAvatars);

        return $siteAvatars;
    }

}
