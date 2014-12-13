<?php

namespace Acme\TwitterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysSettings
 *
 * @ORM\Table(name="sys_settings")
 * @ORM\Entity
 */
class SysSettings
{
    /**
     * @var integer
     *
     * @ORM\Column(name="e_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eId;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_user", type="string", length=255, nullable=false)
     */
    private $adminUser;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_pass", type="string", length=255, nullable=false)
     */
    private $adminPass;

    /**
     * @var string
     *
     * @ORM\Column(name="site_title", type="string", length=200, nullable=false)
     */
    private $siteTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="site_header", type="string", length=200, nullable=false)
     */
    private $siteHeader;

    /**
     * @var string
     *
     * @ORM\Column(name="site_footer", type="string", length=200, nullable=false)
     */
    private $siteFooter;

    /**
     * @var integer
     *
     * @ORM\Column(name="normal_kredi", type="integer", nullable=false)
     */
    private $normalKredi;

    /**
     * @var string
     *
     * @ORM\Column(name="paypal_mail", type="string", length=200, nullable=false)
     */
    private $paypalMail;

    /**
     * @var string
     *
     * @ORM\Column(name="oto_tweet", type="string", length=300, nullable=false)
     */
    private $otoTweet;

    /**
     * @var string
     *
     * @ORM\Column(name="oto_follow_hesap", type="string", length=300, nullable=false)
     */
    private $otoFollowHesap;

    /**
     * @var integer
     *
     * @ORM\Column(name="sys_online", type="integer", nullable=false)
     */
    private $sysOnline;

    /**
     * @var integer
     *
     * @ORM\Column(name="paket_online", type="integer", nullable=false)
     */
    private $paketOnline;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_page", type="string", length=300, nullable=true)
     */
    private $facebookPage;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter_page", type="string", length=300, nullable=true)
     */
    private $twitterPage;

    /**
     * @var string
     *
     * @ORM\Column(name="tumblr_page", type="string", length=300, nullable=true)
     */
    private $tumblrPage;

    /**
     * @var string
     *
     * @ORM\Column(name="google_page", type="string", length=300, nullable=true)
     */
    private $googlePage;

    /**
     * @var integer
     *
     * @ORM\Column(name="main_api", type="integer", nullable=false)
     */
    private $mainApi;

    /**
     * @var string
     *
     * @ORM\Column(name="sys_lan", type="string", length=10, nullable=true)
     */
    private $sysLan;

    /**
     * @var string
     *
     * @ORM\Column(name="site_keys", type="string", length=300, nullable=false)
     */
    private $siteKeys;

    /**
     * @var string
     *
     * @ORM\Column(name="favicon", type="string", length=200, nullable=false)
     */
    private $favicon;

    /**
     * @var string
     *
     * @ORM\Column(name="google_anal", type="text", nullable=false)
     */
    private $googleAnal;

    /**
     * @var string
     *
     * @ORM\Column(name="site_logo", type="string", length=200, nullable=false)
     */
    private $siteLogo;

    /**
     * @var string
     *
     * @ORM\Column(name="site_title_bro", type="string", length=70, nullable=false)
     */
    private $siteTitleBro;

    /**
     * @var string
     *
     * @ORM\Column(name="site_desc", type="text", nullable=false)
     */
    private $siteDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="copy_place", type="string", length=300, nullable=false)
     */
    private $copyPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="home_entry_pla", type="string", length=300, nullable=false)
     */
    private $homeEntryPla;

    /**
     * @var string
     *
     * @ORM\Column(name="log_with_twitter_but", type="string", length=250, nullable=false)
     */
    private $logWithTwitterBut;

    /**
     * @var string
     *
     * @ORM\Column(name="site_fea_1", type="string", length=80, nullable=false)
     */
    private $siteFea1;

    /**
     * @var string
     *
     * @ORM\Column(name="site_fea_2", type="string", length=80, nullable=false)
     */
    private $siteFea2;

    /**
     * @var string
     *
     * @ORM\Column(name="site_fea_3", type="string", length=80, nullable=false)
     */
    private $siteFea3;

    /**
     * @var string
     *
     * @ORM\Column(name="site_fea_4", type="string", length=80, nullable=false)
     */
    private $siteFea4;

    /**
     * @var string
     *
     * @ORM\Column(name="site_fea_5", type="string", length=80, nullable=false)
     */
    private $siteFea5;

    /**
     * @var string
     *
     * @ORM\Column(name="site_fea_6", type="string", length=80, nullable=false)
     */
    private $siteFea6;

    /**
     * @var string
     *
     * @ORM\Column(name="site_fea_7", type="string", length=80, nullable=false)
     */
    private $siteFea7;

    /**
     * @var string
     *
     * @ORM\Column(name="site_fea_8", type="string", length=80, nullable=false)
     */
    private $siteFea8;

    /**
     * @var string
     *
     * @ORM\Column(name="take_cre_infos", type="text", nullable=false)
     */
    private $takeCreInfos;

    /**
     * @var string
     *
     * @ORM\Column(name="take_fol_infos", type="text", nullable=false)
     */
    private $takeFolInfos;

    /**
     * @var string
     *
     * @ORM\Column(name="take_ret_infos", type="text", nullable=false)
     */
    private $takeRetInfos;

    /**
     * @var string
     *
     * @ORM\Column(name="take_twe_infos", type="text", nullable=false)
     */
    private $takeTweInfos;



    /**
     * Set adminUser
     *
     * @param string $adminUser
     * @return SysSettings
     */
    public function setAdminUser($adminUser)
    {
        $this->adminUser = $adminUser;

        return $this;
    }

    /**
     * Get adminUser
     *
     * @return string 
     */
    public function getAdminUser()
    {
        return $this->adminUser;
    }

    /**
     * Set adminPass
     *
     * @param string $adminPass
     * @return SysSettings
     */
    public function setAdminPass($adminPass)
    {
        $this->adminPass = $adminPass;

        return $this;
    }

    /**
     * Get adminPass
     *
     * @return string 
     */
    public function getAdminPass()
    {
        return $this->adminPass;
    }

    /**
     * Set siteTitle
     *
     * @param string $siteTitle
     * @return SysSettings
     */
    public function setSiteTitle($siteTitle)
    {
        $this->siteTitle = $siteTitle;

        return $this;
    }

    /**
     * Get siteTitle
     *
     * @return string 
     */
    public function getSiteTitle()
    {
        return $this->siteTitle;
    }

    /**
     * Set siteHeader
     *
     * @param string $siteHeader
     * @return SysSettings
     */
    public function setSiteHeader($siteHeader)
    {
        $this->siteHeader = $siteHeader;

        return $this;
    }

    /**
     * Get siteHeader
     *
     * @return string 
     */
    public function getSiteHeader()
    {
        return $this->siteHeader;
    }

    /**
     * Set siteFooter
     *
     * @param string $siteFooter
     * @return SysSettings
     */
    public function setSiteFooter($siteFooter)
    {
        $this->siteFooter = $siteFooter;

        return $this;
    }

    /**
     * Get siteFooter
     *
     * @return string 
     */
    public function getSiteFooter()
    {
        return $this->siteFooter;
    }

    /**
     * Set normalKredi
     *
     * @param integer $normalKredi
     * @return SysSettings
     */
    public function setNormalKredi($normalKredi)
    {
        $this->normalKredi = $normalKredi;

        return $this;
    }

    /**
     * Get normalKredi
     *
     * @return integer 
     */
    public function getNormalKredi()
    {
        return $this->normalKredi;
    }

    /**
     * Set paypalMail
     *
     * @param string $paypalMail
     * @return SysSettings
     */
    public function setPaypalMail($paypalMail)
    {
        $this->paypalMail = $paypalMail;

        return $this;
    }

    /**
     * Get paypalMail
     *
     * @return string 
     */
    public function getPaypalMail()
    {
        return $this->paypalMail;
    }

    /**
     * Set otoTweet
     *
     * @param string $otoTweet
     * @return SysSettings
     */
    public function setOtoTweet($otoTweet)
    {
        $this->otoTweet = $otoTweet;

        return $this;
    }

    /**
     * Get otoTweet
     *
     * @return string 
     */
    public function getOtoTweet()
    {
        return $this->otoTweet;
    }

    /**
     * Set otoFollowHesap
     *
     * @param string $otoFollowHesap
     * @return SysSettings
     */
    public function setOtoFollowHesap($otoFollowHesap)
    {
        $this->otoFollowHesap = $otoFollowHesap;

        return $this;
    }

    /**
     * Get otoFollowHesap
     *
     * @return string 
     */
    public function getOtoFollowHesap()
    {
        return $this->otoFollowHesap;
    }

    /**
     * Set sysOnline
     *
     * @param integer $sysOnline
     * @return SysSettings
     */
    public function setSysOnline($sysOnline)
    {
        $this->sysOnline = $sysOnline;

        return $this;
    }

    /**
     * Get sysOnline
     *
     * @return integer 
     */
    public function getSysOnline()
    {
        return $this->sysOnline;
    }

    /**
     * Set paketOnline
     *
     * @param integer $paketOnline
     * @return SysSettings
     */
    public function setPaketOnline($paketOnline)
    {
        $this->paketOnline = $paketOnline;

        return $this;
    }

    /**
     * Get paketOnline
     *
     * @return integer 
     */
    public function getPaketOnline()
    {
        return $this->paketOnline;
    }

    /**
     * Set facebookPage
     *
     * @param string $facebookPage
     * @return SysSettings
     */
    public function setFacebookPage($facebookPage)
    {
        $this->facebookPage = $facebookPage;

        return $this;
    }

    /**
     * Get facebookPage
     *
     * @return string 
     */
    public function getFacebookPage()
    {
        return $this->facebookPage;
    }

    /**
     * Set twitterPage
     *
     * @param string $twitterPage
     * @return SysSettings
     */
    public function setTwitterPage($twitterPage)
    {
        $this->twitterPage = $twitterPage;

        return $this;
    }

    /**
     * Get twitterPage
     *
     * @return string 
     */
    public function getTwitterPage()
    {
        return $this->twitterPage;
    }

    /**
     * Set tumblrPage
     *
     * @param string $tumblrPage
     * @return SysSettings
     */
    public function setTumblrPage($tumblrPage)
    {
        $this->tumblrPage = $tumblrPage;

        return $this;
    }

    /**
     * Get tumblrPage
     *
     * @return string 
     */
    public function getTumblrPage()
    {
        return $this->tumblrPage;
    }

    /**
     * Set googlePage
     *
     * @param string $googlePage
     * @return SysSettings
     */
    public function setGooglePage($googlePage)
    {
        $this->googlePage = $googlePage;

        return $this;
    }

    /**
     * Get googlePage
     *
     * @return string 
     */
    public function getGooglePage()
    {
        return $this->googlePage;
    }

    /**
     * Set mainApi
     *
     * @param integer $mainApi
     * @return SysSettings
     */
    public function setMainApi($mainApi)
    {
        $this->mainApi = $mainApi;

        return $this;
    }

    /**
     * Get mainApi
     *
     * @return integer 
     */
    public function getMainApi()
    {
        return $this->mainApi;
    }

    /**
     * Set sysLan
     *
     * @param string $sysLan
     * @return SysSettings
     */
    public function setSysLan($sysLan)
    {
        $this->sysLan = $sysLan;

        return $this;
    }

    /**
     * Get sysLan
     *
     * @return string 
     */
    public function getSysLan()
    {
        return $this->sysLan;
    }

    /**
     * Set siteKeys
     *
     * @param string $siteKeys
     * @return SysSettings
     */
    public function setSiteKeys($siteKeys)
    {
        $this->siteKeys = $siteKeys;

        return $this;
    }

    /**
     * Get siteKeys
     *
     * @return string 
     */
    public function getSiteKeys()
    {
        return $this->siteKeys;
    }

    /**
     * Set favicon
     *
     * @param string $favicon
     * @return SysSettings
     */
    public function setFavicon($favicon)
    {
        $this->favicon = $favicon;

        return $this;
    }

    /**
     * Get favicon
     *
     * @return string 
     */
    public function getFavicon()
    {
        return $this->favicon;
    }

    /**
     * Set googleAnal
     *
     * @param string $googleAnal
     * @return SysSettings
     */
    public function setGoogleAnal($googleAnal)
    {
        $this->googleAnal = $googleAnal;

        return $this;
    }

    /**
     * Get googleAnal
     *
     * @return string 
     */
    public function getGoogleAnal()
    {
        return $this->googleAnal;
    }

    /**
     * Set siteLogo
     *
     * @param string $siteLogo
     * @return SysSettings
     */
    public function setSiteLogo($siteLogo)
    {
        $this->siteLogo = $siteLogo;

        return $this;
    }

    /**
     * Get siteLogo
     *
     * @return string 
     */
    public function getSiteLogo()
    {
        return $this->siteLogo;
    }

    /**
     * Set siteTitleBro
     *
     * @param string $siteTitleBro
     * @return SysSettings
     */
    public function setSiteTitleBro($siteTitleBro)
    {
        $this->siteTitleBro = $siteTitleBro;

        return $this;
    }

    /**
     * Get siteTitleBro
     *
     * @return string 
     */
    public function getSiteTitleBro()
    {
        return $this->siteTitleBro;
    }

    /**
     * Set siteDesc
     *
     * @param string $siteDesc
     * @return SysSettings
     */
    public function setSiteDesc($siteDesc)
    {
        $this->siteDesc = $siteDesc;

        return $this;
    }

    /**
     * Get siteDesc
     *
     * @return string 
     */
    public function getSiteDesc()
    {
        return $this->siteDesc;
    }

    /**
     * Set copyPlace
     *
     * @param string $copyPlace
     * @return SysSettings
     */
    public function setCopyPlace($copyPlace)
    {
        $this->copyPlace = $copyPlace;

        return $this;
    }

    /**
     * Get copyPlace
     *
     * @return string 
     */
    public function getCopyPlace()
    {
        return $this->copyPlace;
    }

    /**
     * Set homeEntryPla
     *
     * @param string $homeEntryPla
     * @return SysSettings
     */
    public function setHomeEntryPla($homeEntryPla)
    {
        $this->homeEntryPla = $homeEntryPla;

        return $this;
    }

    /**
     * Get homeEntryPla
     *
     * @return string 
     */
    public function getHomeEntryPla()
    {
        return $this->homeEntryPla;
    }

    /**
     * Set logWithTwitterBut
     *
     * @param string $logWithTwitterBut
     * @return SysSettings
     */
    public function setLogWithTwitterBut($logWithTwitterBut)
    {
        $this->logWithTwitterBut = $logWithTwitterBut;

        return $this;
    }

    /**
     * Get logWithTwitterBut
     *
     * @return string 
     */
    public function getLogWithTwitterBut()
    {
        return $this->logWithTwitterBut;
    }

    /**
     * Set siteFea1
     *
     * @param string $siteFea1
     * @return SysSettings
     */
    public function setSiteFea1($siteFea1)
    {
        $this->siteFea1 = $siteFea1;

        return $this;
    }

    /**
     * Get siteFea1
     *
     * @return string 
     */
    public function getSiteFea1()
    {
        return $this->siteFea1;
    }

    /**
     * Set siteFea2
     *
     * @param string $siteFea2
     * @return SysSettings
     */
    public function setSiteFea2($siteFea2)
    {
        $this->siteFea2 = $siteFea2;

        return $this;
    }

    /**
     * Get siteFea2
     *
     * @return string 
     */
    public function getSiteFea2()
    {
        return $this->siteFea2;
    }

    /**
     * Set siteFea3
     *
     * @param string $siteFea3
     * @return SysSettings
     */
    public function setSiteFea3($siteFea3)
    {
        $this->siteFea3 = $siteFea3;

        return $this;
    }

    /**
     * Get siteFea3
     *
     * @return string 
     */
    public function getSiteFea3()
    {
        return $this->siteFea3;
    }

    /**
     * Set siteFea4
     *
     * @param string $siteFea4
     * @return SysSettings
     */
    public function setSiteFea4($siteFea4)
    {
        $this->siteFea4 = $siteFea4;

        return $this;
    }

    /**
     * Get siteFea4
     *
     * @return string 
     */
    public function getSiteFea4()
    {
        return $this->siteFea4;
    }

    /**
     * Set siteFea5
     *
     * @param string $siteFea5
     * @return SysSettings
     */
    public function setSiteFea5($siteFea5)
    {
        $this->siteFea5 = $siteFea5;

        return $this;
    }

    /**
     * Get siteFea5
     *
     * @return string 
     */
    public function getSiteFea5()
    {
        return $this->siteFea5;
    }

    /**
     * Set siteFea6
     *
     * @param string $siteFea6
     * @return SysSettings
     */
    public function setSiteFea6($siteFea6)
    {
        $this->siteFea6 = $siteFea6;

        return $this;
    }

    /**
     * Get siteFea6
     *
     * @return string 
     */
    public function getSiteFea6()
    {
        return $this->siteFea6;
    }

    /**
     * Set siteFea7
     *
     * @param string $siteFea7
     * @return SysSettings
     */
    public function setSiteFea7($siteFea7)
    {
        $this->siteFea7 = $siteFea7;

        return $this;
    }

    /**
     * Get siteFea7
     *
     * @return string 
     */
    public function getSiteFea7()
    {
        return $this->siteFea7;
    }

    /**
     * Set siteFea8
     *
     * @param string $siteFea8
     * @return SysSettings
     */
    public function setSiteFea8($siteFea8)
    {
        $this->siteFea8 = $siteFea8;

        return $this;
    }

    /**
     * Get siteFea8
     *
     * @return string 
     */
    public function getSiteFea8()
    {
        return $this->siteFea8;
    }

    /**
     * Set takeCreInfos
     *
     * @param string $takeCreInfos
     * @return SysSettings
     */
    public function setTakeCreInfos($takeCreInfos)
    {
        $this->takeCreInfos = $takeCreInfos;

        return $this;
    }

    /**
     * Get takeCreInfos
     *
     * @return string 
     */
    public function getTakeCreInfos()
    {
        return $this->takeCreInfos;
    }

    /**
     * Set takeFolInfos
     *
     * @param string $takeFolInfos
     * @return SysSettings
     */
    public function setTakeFolInfos($takeFolInfos)
    {
        $this->takeFolInfos = $takeFolInfos;

        return $this;
    }

    /**
     * Get takeFolInfos
     *
     * @return string 
     */
    public function getTakeFolInfos()
    {
        return $this->takeFolInfos;
    }

    /**
     * Set takeRetInfos
     *
     * @param string $takeRetInfos
     * @return SysSettings
     */
    public function setTakeRetInfos($takeRetInfos)
    {
        $this->takeRetInfos = $takeRetInfos;

        return $this;
    }

    /**
     * Get takeRetInfos
     *
     * @return string 
     */
    public function getTakeRetInfos()
    {
        return $this->takeRetInfos;
    }

    /**
     * Set takeTweInfos
     *
     * @param string $takeTweInfos
     * @return SysSettings
     */
    public function setTakeTweInfos($takeTweInfos)
    {
        $this->takeTweInfos = $takeTweInfos;

        return $this;
    }

    /**
     * Get takeTweInfos
     *
     * @return string 
     */
    public function getTakeTweInfos()
    {
        return $this->takeTweInfos;
    }

    /**
     * Get eId
     *
     * @return integer 
     */
    public function getEId()
    {
        return $this->eId;
    }
}
