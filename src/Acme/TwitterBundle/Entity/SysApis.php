<?php

namespace Acme\TwitterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysApis
 *
 * @ORM\Table(name="sys_apis")
 * @ORM\Entity
 */
class SysApis
{
    /**
     * @var string
     *
     * @ORM\Column(name="api_key", type="string", length=100, nullable=false)
     */
    private $apiKey;

    /**
     * @var string
     *
     * @ORM\Column(name="api_secret", type="string", length=200, nullable=false)
     */
    private $apiSecret;

    /**
     * @var string
     *
     * @ORM\Column(name="api_access_level", type="string", length=55, nullable=false)
     */
    private $apiAccessLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="api_owner_name", type="string", length=50, nullable=false)
     */
    private $apiOwnerName;

    /**
     * @var integer
     *
     * @ORM\Column(name="api_owner_id", type="integer", nullable=false)
     */
    private $apiOwnerId;

    /**
     * @var string
     *
     * @ORM\Column(name="api_owner_access_token", type="string", length=200, nullable=false)
     */
    private $apiOwnerAccessToken;

    /**
     * @var string
     *
     * @ORM\Column(name="api_owner_token_secret", type="string", length=200, nullable=false)
     */
    private $apiOwnerTokenSecret;

    /**
     * @var integer
     *
     * @ORM\Column(name="api_add_time", type="integer", nullable=false)
     */
    private $apiAddTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="api_total_user", type="integer", nullable=false)
     */
    private $apiTotalUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="api_last_use", type="integer", nullable=false)
     */
    private $apiLastUse;

    /**
     * @var string
     *
     * @ORM\Column(name="api_created_by", type="string", length=30, nullable=false)
     */
    private $apiCreatedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="api_name", type="string", length=60, nullable=false)
     */
    private $apiName;

    /**
     * @var string
     *
     * @ORM\Column(name="api_description", type="string", length=200, nullable=false)
     */
    private $apiDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="api_website", type="string", length=100, nullable=false)
     */
    private $apiWebsite;

    /**
     * @var string
     *
     * @ORM\Column(name="api_callback_url", type="string", length=150, nullable=false)
     */
    private $apiCallbackUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="api_logo", type="string", length=100, nullable=false)
     */
    private $apiLogo;

    /**
     * @var string
     *
     * @ORM\Column(name="api_logout_url", type="string", length=150, nullable=false)
     */
    private $apiLogoutUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="api_extra_info", type="string", length=300, nullable=false)
     */
    private $apiExtraInfo;

    /**
     * @var integer
     *
     * @ORM\Column(name="api_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $apiId;



    /**
     * Set apiKey
     *
     * @param string $apiKey
     * @return SysApis
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * Get apiKey
     *
     * @return string 
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Set apiSecret
     *
     * @param string $apiSecret
     * @return SysApis
     */
    public function setApiSecret($apiSecret)
    {
        $this->apiSecret = $apiSecret;

        return $this;
    }

    /**
     * Get apiSecret
     *
     * @return string 
     */
    public function getApiSecret()
    {
        return $this->apiSecret;
    }

    /**
     * Set apiAccessLevel
     *
     * @param string $apiAccessLevel
     * @return SysApis
     */
    public function setApiAccessLevel($apiAccessLevel)
    {
        $this->apiAccessLevel = $apiAccessLevel;

        return $this;
    }

    /**
     * Get apiAccessLevel
     *
     * @return string 
     */
    public function getApiAccessLevel()
    {
        return $this->apiAccessLevel;
    }

    /**
     * Set apiOwnerName
     *
     * @param string $apiOwnerName
     * @return SysApis
     */
    public function setApiOwnerName($apiOwnerName)
    {
        $this->apiOwnerName = $apiOwnerName;

        return $this;
    }

    /**
     * Get apiOwnerName
     *
     * @return string 
     */
    public function getApiOwnerName()
    {
        return $this->apiOwnerName;
    }

    /**
     * Set apiOwnerId
     *
     * @param integer $apiOwnerId
     * @return SysApis
     */
    public function setApiOwnerId($apiOwnerId)
    {
        $this->apiOwnerId = $apiOwnerId;

        return $this;
    }

    /**
     * Get apiOwnerId
     *
     * @return integer 
     */
    public function getApiOwnerId()
    {
        return $this->apiOwnerId;
    }

    /**
     * Set apiOwnerAccessToken
     *
     * @param string $apiOwnerAccessToken
     * @return SysApis
     */
    public function setApiOwnerAccessToken($apiOwnerAccessToken)
    {
        $this->apiOwnerAccessToken = $apiOwnerAccessToken;

        return $this;
    }

    /**
     * Get apiOwnerAccessToken
     *
     * @return string 
     */
    public function getApiOwnerAccessToken()
    {
        return $this->apiOwnerAccessToken;
    }

    /**
     * Set apiOwnerTokenSecret
     *
     * @param string $apiOwnerTokenSecret
     * @return SysApis
     */
    public function setApiOwnerTokenSecret($apiOwnerTokenSecret)
    {
        $this->apiOwnerTokenSecret = $apiOwnerTokenSecret;

        return $this;
    }

    /**
     * Get apiOwnerTokenSecret
     *
     * @return string 
     */
    public function getApiOwnerTokenSecret()
    {
        return $this->apiOwnerTokenSecret;
    }

    /**
     * Set apiAddTime
     *
     * @param integer $apiAddTime
     * @return SysApis
     */
    public function setApiAddTime($apiAddTime)
    {
        $this->apiAddTime = $apiAddTime;

        return $this;
    }

    /**
     * Get apiAddTime
     *
     * @return integer 
     */
    public function getApiAddTime()
    {
        return $this->apiAddTime;
    }

    /**
     * Set apiTotalUser
     *
     * @param integer $apiTotalUser
     * @return SysApis
     */
    public function setApiTotalUser($apiTotalUser)
    {
        $this->apiTotalUser = $apiTotalUser;

        return $this;
    }

    /**
     * Get apiTotalUser
     *
     * @return integer 
     */
    public function getApiTotalUser()
    {
        return $this->apiTotalUser;
    }

    /**
     * Set apiLastUse
     *
     * @param integer $apiLastUse
     * @return SysApis
     */
    public function setApiLastUse($apiLastUse)
    {
        $this->apiLastUse = $apiLastUse;

        return $this;
    }

    /**
     * Get apiLastUse
     *
     * @return integer 
     */
    public function getApiLastUse()
    {
        return $this->apiLastUse;
    }

    /**
     * Set apiCreatedBy
     *
     * @param string $apiCreatedBy
     * @return SysApis
     */
    public function setApiCreatedBy($apiCreatedBy)
    {
        $this->apiCreatedBy = $apiCreatedBy;

        return $this;
    }

    /**
     * Get apiCreatedBy
     *
     * @return string 
     */
    public function getApiCreatedBy()
    {
        return $this->apiCreatedBy;
    }

    /**
     * Set apiName
     *
     * @param string $apiName
     * @return SysApis
     */
    public function setApiName($apiName)
    {
        $this->apiName = $apiName;

        return $this;
    }

    /**
     * Get apiName
     *
     * @return string 
     */
    public function getApiName()
    {
        return $this->apiName;
    }

    /**
     * Set apiDescription
     *
     * @param string $apiDescription
     * @return SysApis
     */
    public function setApiDescription($apiDescription)
    {
        $this->apiDescription = $apiDescription;

        return $this;
    }

    /**
     * Get apiDescription
     *
     * @return string 
     */
    public function getApiDescription()
    {
        return $this->apiDescription;
    }

    /**
     * Set apiWebsite
     *
     * @param string $apiWebsite
     * @return SysApis
     */
    public function setApiWebsite($apiWebsite)
    {
        $this->apiWebsite = $apiWebsite;

        return $this;
    }

    /**
     * Get apiWebsite
     *
     * @return string 
     */
    public function getApiWebsite()
    {
        return $this->apiWebsite;
    }

    /**
     * Set apiCallbackUrl
     *
     * @param string $apiCallbackUrl
     * @return SysApis
     */
    public function setApiCallbackUrl($apiCallbackUrl)
    {
        $this->apiCallbackUrl = $apiCallbackUrl;

        return $this;
    }

    /**
     * Get apiCallbackUrl
     *
     * @return string 
     */
    public function getApiCallbackUrl()
    {
        return $this->apiCallbackUrl;
    }

    /**
     * Set apiLogo
     *
     * @param string $apiLogo
     * @return SysApis
     */
    public function setApiLogo($apiLogo)
    {
        $this->apiLogo = $apiLogo;

        return $this;
    }

    /**
     * Get apiLogo
     *
     * @return string 
     */
    public function getApiLogo()
    {
        return $this->apiLogo;
    }

    /**
     * Set apiLogoutUrl
     *
     * @param string $apiLogoutUrl
     * @return SysApis
     */
    public function setApiLogoutUrl($apiLogoutUrl)
    {
        $this->apiLogoutUrl = $apiLogoutUrl;

        return $this;
    }

    /**
     * Get apiLogoutUrl
     *
     * @return string 
     */
    public function getApiLogoutUrl()
    {
        return $this->apiLogoutUrl;
    }

    /**
     * Set apiExtraInfo
     *
     * @param string $apiExtraInfo
     * @return SysApis
     */
    public function setApiExtraInfo($apiExtraInfo)
    {
        $this->apiExtraInfo = $apiExtraInfo;

        return $this;
    }

    /**
     * Get apiExtraInfo
     *
     * @return string 
     */
    public function getApiExtraInfo()
    {
        return $this->apiExtraInfo;
    }

    /**
     * Get apiId
     *
     * @return integer 
     */
    public function getApiId()
    {
        return $this->apiId;
    }
}
