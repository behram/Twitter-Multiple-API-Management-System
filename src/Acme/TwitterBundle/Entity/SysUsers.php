<?php

namespace Acme\TwitterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysUsers
 *
 * @ORM\Table(name="sys_users")
 * @ORM\Entity
 */
class SysUsers
{
    /**
     * @var string
     *
     * @ORM\Column(name="user_oauth_token", type="string", length=200, nullable=false)
     */
    private $userOauthToken;

    /**
     * @var string
     *
     * @ORM\Column(name="user_oauth_token_secret", type="string", length=200, nullable=false)
     */
    private $userOauthTokenSecret;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_twitter_id", type="integer", nullable=false)
     */
    private $userTwitterId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_screen_name", type="string", length=30, nullable=false)
     */
    private $userScreenName;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_entry_time", type="integer", nullable=false)
     */
    private $userEntryTime;

    /**
     * @var string
     *
     * @ORM\Column(name="user_screen_image", type="string", length=200, nullable=false)
     */
    private $userScreenImage;

    /**
     * @var string
     *
     * @ORM\Column(name="user_location", type="string", length=30, nullable=false)
     */
    private $userLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="user_description", type="string", length=200, nullable=false)
     */
    private $userDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="user_own_url", type="string", length=100, nullable=false)
     */
    private $userOwnUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_followers_count", type="integer", nullable=false)
     */
    private $userFollowersCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_friends_count", type="integer", nullable=false)
     */
    private $userFriendsCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_created_at", type="integer", nullable=false)
     */
    private $userCreatedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_favourites_count", type="integer", nullable=false)
     */
    private $userFavouritesCount;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_statuses_count", type="integer", nullable=false)
     */
    private $userStatusesCount;

    /**
     * @var string
     *
     * @ORM\Column(name="user_language", type="string", length=30, nullable=false)
     */
    private $userLanguage;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_last_modf_time", type="integer", nullable=false)
     */
    private $userLastModfTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_api_tweeted", type="integer", nullable=false)
     */
    private $userApiTweeted;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_api_favorated", type="integer", nullable=false)
     */
    private $userApiFavorated;

    /**
     * @var string
     *
     * @ORM\Column(name="user_creator_name", type="string", length=50, nullable=false)
     */
    private $userCreatorName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_membered_apis", type="string", length=100, nullable=false)
     */
    private $userMemberedApis;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_credit", type="integer", nullable=false)
     */
    private $userCredit;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_entry_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userEntryId;



    /**
     * Set userOauthToken
     *
     * @param string $userOauthToken
     * @return SysUsers
     */
    public function setUserOauthToken($userOauthToken)
    {
        $this->userOauthToken = $userOauthToken;

        return $this;
    }

    /**
     * Get userOauthToken
     *
     * @return string 
     */
    public function getUserOauthToken()
    {
        return $this->userOauthToken;
    }

    /**
     * Set userOauthTokenSecret
     *
     * @param string $userOauthTokenSecret
     * @return SysUsers
     */
    public function setUserOauthTokenSecret($userOauthTokenSecret)
    {
        $this->userOauthTokenSecret = $userOauthTokenSecret;

        return $this;
    }

    /**
     * Get userOauthTokenSecret
     *
     * @return string 
     */
    public function getUserOauthTokenSecret()
    {
        return $this->userOauthTokenSecret;
    }

    /**
     * Set userTwitterId
     *
     * @param integer $userTwitterId
     * @return SysUsers
     */
    public function setUserTwitterId($userTwitterId)
    {
        $this->userTwitterId = $userTwitterId;

        return $this;
    }

    /**
     * Get userTwitterId
     *
     * @return integer 
     */
    public function getUserTwitterId()
    {
        return $this->userTwitterId;
    }

    /**
     * Set userScreenName
     *
     * @param string $userScreenName
     * @return SysUsers
     */
    public function setUserScreenName($userScreenName)
    {
        $this->userScreenName = $userScreenName;

        return $this;
    }

    /**
     * Get userScreenName
     *
     * @return string 
     */
    public function getUserScreenName()
    {
        return $this->userScreenName;
    }

    /**
     * Set userEntryTime
     *
     * @param integer $userEntryTime
     * @return SysUsers
     */
    public function setUserEntryTime($userEntryTime)
    {
        $this->userEntryTime = $userEntryTime;

        return $this;
    }

    /**
     * Get userEntryTime
     *
     * @return integer 
     */
    public function getUserEntryTime()
    {
        return $this->userEntryTime;
    }

    /**
     * Set userScreenImage
     *
     * @param string $userScreenImage
     * @return SysUsers
     */
    public function setUserScreenImage($userScreenImage)
    {
        $this->userScreenImage = $userScreenImage;

        return $this;
    }

    /**
     * Get userScreenImage
     *
     * @return string 
     */
    public function getUserScreenImage()
    {
        return $this->userScreenImage;
    }

    /**
     * Set userLocation
     *
     * @param string $userLocation
     * @return SysUsers
     */
    public function setUserLocation($userLocation)
    {
        $this->userLocation = $userLocation;

        return $this;
    }

    /**
     * Get userLocation
     *
     * @return string 
     */
    public function getUserLocation()
    {
        return $this->userLocation;
    }

    /**
     * Set userDescription
     *
     * @param string $userDescription
     * @return SysUsers
     */
    public function setUserDescription($userDescription)
    {
        $this->userDescription = $userDescription;

        return $this;
    }

    /**
     * Get userDescription
     *
     * @return string 
     */
    public function getUserDescription()
    {
        return $this->userDescription;
    }

    /**
     * Set userOwnUrl
     *
     * @param string $userOwnUrl
     * @return SysUsers
     */
    public function setUserOwnUrl($userOwnUrl)
    {
        $this->userOwnUrl = $userOwnUrl;

        return $this;
    }

    /**
     * Get userOwnUrl
     *
     * @return string 
     */
    public function getUserOwnUrl()
    {
        return $this->userOwnUrl;
    }

    /**
     * Set userFollowersCount
     *
     * @param integer $userFollowersCount
     * @return SysUsers
     */
    public function setUserFollowersCount($userFollowersCount)
    {
        $this->userFollowersCount = $userFollowersCount;

        return $this;
    }

    /**
     * Get userFollowersCount
     *
     * @return integer 
     */
    public function getUserFollowersCount()
    {
        return $this->userFollowersCount;
    }

    /**
     * Set userFriendsCount
     *
     * @param integer $userFriendsCount
     * @return SysUsers
     */
    public function setUserFriendsCount($userFriendsCount)
    {
        $this->userFriendsCount = $userFriendsCount;

        return $this;
    }

    /**
     * Get userFriendsCount
     *
     * @return integer 
     */
    public function getUserFriendsCount()
    {
        return $this->userFriendsCount;
    }

    /**
     * Set userCreatedAt
     *
     * @param integer $userCreatedAt
     * @return SysUsers
     */
    public function setUserCreatedAt($userCreatedAt)
    {
        $this->userCreatedAt = $userCreatedAt;

        return $this;
    }

    /**
     * Get userCreatedAt
     *
     * @return integer 
     */
    public function getUserCreatedAt()
    {
        return $this->userCreatedAt;
    }

    /**
     * Set userFavouritesCount
     *
     * @param integer $userFavouritesCount
     * @return SysUsers
     */
    public function setUserFavouritesCount($userFavouritesCount)
    {
        $this->userFavouritesCount = $userFavouritesCount;

        return $this;
    }

    /**
     * Get userFavouritesCount
     *
     * @return integer 
     */
    public function getUserFavouritesCount()
    {
        return $this->userFavouritesCount;
    }

    /**
     * Set userStatusesCount
     *
     * @param integer $userStatusesCount
     * @return SysUsers
     */
    public function setUserStatusesCount($userStatusesCount)
    {
        $this->userStatusesCount = $userStatusesCount;

        return $this;
    }

    /**
     * Get userStatusesCount
     *
     * @return integer 
     */
    public function getUserStatusesCount()
    {
        return $this->userStatusesCount;
    }

    /**
     * Set userLanguage
     *
     * @param string $userLanguage
     * @return SysUsers
     */
    public function setUserLanguage($userLanguage)
    {
        $this->userLanguage = $userLanguage;

        return $this;
    }

    /**
     * Get userLanguage
     *
     * @return string 
     */
    public function getUserLanguage()
    {
        return $this->userLanguage;
    }

    /**
     * Set userLastModfTime
     *
     * @param integer $userLastModfTime
     * @return SysUsers
     */
    public function setUserLastModfTime($userLastModfTime)
    {
        $this->userLastModfTime = $userLastModfTime;

        return $this;
    }

    /**
     * Get userLastModfTime
     *
     * @return integer 
     */
    public function getUserLastModfTime()
    {
        return $this->userLastModfTime;
    }

    /**
     * Set userApiTweeted
     *
     * @param integer $userApiTweeted
     * @return SysUsers
     */
    public function setUserApiTweeted($userApiTweeted)
    {
        $this->userApiTweeted = $userApiTweeted;

        return $this;
    }

    /**
     * Get userApiTweeted
     *
     * @return integer 
     */
    public function getUserApiTweeted()
    {
        return $this->userApiTweeted;
    }

    /**
     * Set userApiFavorated
     *
     * @param integer $userApiFavorated
     * @return SysUsers
     */
    public function setUserApiFavorated($userApiFavorated)
    {
        $this->userApiFavorated = $userApiFavorated;

        return $this;
    }

    /**
     * Get userApiFavorated
     *
     * @return integer 
     */
    public function getUserApiFavorated()
    {
        return $this->userApiFavorated;
    }

    /**
     * Set userCreatorName
     *
     * @param string $userCreatorName
     * @return SysUsers
     */
    public function setUserCreatorName($userCreatorName)
    {
        $this->userCreatorName = $userCreatorName;

        return $this;
    }

    /**
     * Get userCreatorName
     *
     * @return string 
     */
    public function getUserCreatorName()
    {
        return $this->userCreatorName;
    }

    /**
     * Set userMemberedApis
     *
     * @param string $userMemberedApis
     * @return SysUsers
     */
    public function setUserMemberedApis($userMemberedApis)
    {
        $this->userMemberedApis = $userMemberedApis;

        return $this;
    }

    /**
     * Get userMemberedApis
     *
     * @return string 
     */
    public function getUserMemberedApis()
    {
        return $this->userMemberedApis;
    }

    /**
     * Set userCredit
     *
     * @param integer $userCredit
     * @return SysUsers
     */
    public function setUserCredit($userCredit)
    {
        $this->userCredit = $userCredit;

        return $this;
    }

    /**
     * Get userCredit
     *
     * @return integer 
     */
    public function getUserCredit()
    {
        return $this->userCredit;
    }

    /**
     * Get userEntryId
     *
     * @return integer 
     */
    public function getUserEntryId()
    {
        return $this->userEntryId;
    }
}
