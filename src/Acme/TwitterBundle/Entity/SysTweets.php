<?php

namespace Acme\TwitterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysTweets
 *
 * @ORM\Table(name="sys_tweets")
 * @ORM\Entity
 */
class SysTweets
{
    /**
     * @var string
     *
     * @ORM\Column(name="head", type="string", length=100, nullable=false)
     */
    private $head;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=200, nullable=false)
     */
    private $content;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_online", type="integer", nullable=false)
     */
    private $isOnline;

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_publish", type="integer", nullable=false)
     */
    private $totalPublish;

    /**
     * @var string
     *
     * @ORM\Column(name="creator", type="string", length=50, nullable=false)
     */
    private $creator;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=100, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="extra_info", type="string", length=200, nullable=false)
     */
    private $extraInfo;

    /**
     * @var integer
     *
     * @ORM\Column(name="e_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eId;



    /**
     * Set head
     *
     * @param string $head
     * @return SysTweets
     */
    public function setHead($head)
    {
        $this->head = $head;

        return $this;
    }

    /**
     * Get head
     *
     * @return string 
     */
    public function getHead()
    {
        return $this->head;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return SysTweets
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set isOnline
     *
     * @param integer $isOnline
     * @return SysTweets
     */
    public function setIsOnline($isOnline)
    {
        $this->isOnline = $isOnline;

        return $this;
    }

    /**
     * Get isOnline
     *
     * @return integer 
     */
    public function getIsOnline()
    {
        return $this->isOnline;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     * @return SysTweets
     */
    public function setAddTime($addTime)
    {
        $this->addTime = $addTime;

        return $this;
    }

    /**
     * Get addTime
     *
     * @return integer 
     */
    public function getAddTime()
    {
        return $this->addTime;
    }

    /**
     * Set totalPublish
     *
     * @param integer $totalPublish
     * @return SysTweets
     */
    public function setTotalPublish($totalPublish)
    {
        $this->totalPublish = $totalPublish;

        return $this;
    }

    /**
     * Get totalPublish
     *
     * @return integer 
     */
    public function getTotalPublish()
    {
        return $this->totalPublish;
    }

    /**
     * Set creator
     *
     * @param string $creator
     * @return SysTweets
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * Get creator
     *
     * @return string 
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return SysTweets
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set extraInfo
     *
     * @param string $extraInfo
     * @return SysTweets
     */
    public function setExtraInfo($extraInfo)
    {
        $this->extraInfo = $extraInfo;

        return $this;
    }

    /**
     * Get extraInfo
     *
     * @return string 
     */
    public function getExtraInfo()
    {
        return $this->extraInfo;
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
