<?php

namespace Acme\TwitterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PacketRequest
 *
 * @ORM\Table(name="packet_request")
 * @ORM\Entity
 */
class PacketRequest
{
    /**
     * @var string
     *
     * @ORM\Column(name="user_mail", type="string", length=50, nullable=true)
     */
    private $userMail;

    /**
     * @var integer
     *
     * @ORM\Column(name="packet_id", type="integer", nullable=false)
     */
    private $packetId;

    /**
     * @var string
     *
     * @ORM\Column(name="paypal_mail", type="string", length=50, nullable=false)
     */
    private $paypalMail;

    /**
     * @var integer
     *
     * @ORM\Column(name="insert_time", type="integer", nullable=false)
     */
    private $insertTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_finish", type="integer", nullable=false)
     */
    private $isFinish;

    /**
     * @var string
     *
     * @ORM\Column(name="process_value", type="string", length=200, nullable=false)
     */
    private $processValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="sent_time", type="integer", nullable=false)
     */
    private $sentTime;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_mail", type="string", length=50, nullable=false)
     */
    private $paymentMail;

    /**
     * @var string
     *
     * @ORM\Column(name="packet_type", type="string", length=30, nullable=false)
     */
    private $packetType;

    /**
     * @var string
     *
     * @ORM\Column(name="user_twitter_name", type="string", length=60, nullable=true)
     */
    private $userTwitterName;

    /**
     * @var integer
     *
     * @ORM\Column(name="sended_tweet_id", type="integer", nullable=true)
     */
    private $sendedTweetId;

    /**
     * @var integer
     *
     * @ORM\Column(name="eid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eid;



    /**
     * Set userMail
     *
     * @param string $userMail
     * @return PacketRequest
     */
    public function setUserMail($userMail)
    {
        $this->userMail = $userMail;

        return $this;
    }

    /**
     * Get userMail
     *
     * @return string 
     */
    public function getUserMail()
    {
        return $this->userMail;
    }

    /**
     * Set packetId
     *
     * @param integer $packetId
     * @return PacketRequest
     */
    public function setPacketId($packetId)
    {
        $this->packetId = $packetId;

        return $this;
    }

    /**
     * Get packetId
     *
     * @return integer 
     */
    public function getPacketId()
    {
        return $this->packetId;
    }

    /**
     * Set paypalMail
     *
     * @param string $paypalMail
     * @return PacketRequest
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
     * Set insertTime
     *
     * @param integer $insertTime
     * @return PacketRequest
     */
    public function setInsertTime($insertTime)
    {
        $this->insertTime = $insertTime;

        return $this;
    }

    /**
     * Get insertTime
     *
     * @return integer 
     */
    public function getInsertTime()
    {
        return $this->insertTime;
    }

    /**
     * Set isFinish
     *
     * @param integer $isFinish
     * @return PacketRequest
     */
    public function setIsFinish($isFinish)
    {
        $this->isFinish = $isFinish;

        return $this;
    }

    /**
     * Get isFinish
     *
     * @return integer 
     */
    public function getIsFinish()
    {
        return $this->isFinish;
    }

    /**
     * Set processValue
     *
     * @param string $processValue
     * @return PacketRequest
     */
    public function setProcessValue($processValue)
    {
        $this->processValue = $processValue;

        return $this;
    }

    /**
     * Get processValue
     *
     * @return string 
     */
    public function getProcessValue()
    {
        return $this->processValue;
    }

    /**
     * Set sentTime
     *
     * @param integer $sentTime
     * @return PacketRequest
     */
    public function setSentTime($sentTime)
    {
        $this->sentTime = $sentTime;

        return $this;
    }

    /**
     * Get sentTime
     *
     * @return integer 
     */
    public function getSentTime()
    {
        return $this->sentTime;
    }

    /**
     * Set paymentMail
     *
     * @param string $paymentMail
     * @return PacketRequest
     */
    public function setPaymentMail($paymentMail)
    {
        $this->paymentMail = $paymentMail;

        return $this;
    }

    /**
     * Get paymentMail
     *
     * @return string 
     */
    public function getPaymentMail()
    {
        return $this->paymentMail;
    }

    /**
     * Set packetType
     *
     * @param string $packetType
     * @return PacketRequest
     */
    public function setPacketType($packetType)
    {
        $this->packetType = $packetType;

        return $this;
    }

    /**
     * Get packetType
     *
     * @return string 
     */
    public function getPacketType()
    {
        return $this->packetType;
    }

    /**
     * Set userTwitterName
     *
     * @param string $userTwitterName
     * @return PacketRequest
     */
    public function setUserTwitterName($userTwitterName)
    {
        $this->userTwitterName = $userTwitterName;

        return $this;
    }

    /**
     * Get userTwitterName
     *
     * @return string 
     */
    public function getUserTwitterName()
    {
        return $this->userTwitterName;
    }

    /**
     * Set sendedTweetId
     *
     * @param integer $sendedTweetId
     * @return PacketRequest
     */
    public function setSendedTweetId($sendedTweetId)
    {
        $this->sendedTweetId = $sendedTweetId;

        return $this;
    }

    /**
     * Get sendedTweetId
     *
     * @return integer 
     */
    public function getSendedTweetId()
    {
        return $this->sendedTweetId;
    }

    /**
     * Get eid
     *
     * @return integer 
     */
    public function getEid()
    {
        return $this->eid;
    }
}
