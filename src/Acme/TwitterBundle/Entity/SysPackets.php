<?php

namespace Acme\TwitterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysPackets
 *
 * @ORM\Table(name="sys_packets")
 * @ORM\Entity
 */
class SysPackets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="miktar", type="integer", nullable=false)
     */
    private $miktar;

    /**
     * @var string
     *
     * @ORM\Column(name="paket_tipi", type="string", length=20, nullable=false)
     */
    private $paketTipi;

    /**
     * @var integer
     *
     * @ORM\Column(name="tl_karsiligi", type="integer", nullable=false)
     */
    private $tlKarsiligi;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_online", type="integer", nullable=false)
     */
    private $isOnline;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="packet_type_int", type="integer", nullable=false)
     */
    private $packetTypeInt;

    /**
     * @var integer
     *
     * @ORM\Column(name="time", type="integer", nullable=false)
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="creator", type="string", length=50, nullable=false)
     */
    private $creator;

    /**
     * @var string
     *
     * @ORM\Column(name="total_coming", type="string", length=200, nullable=false)
     */
    private $totalComing;

    /**
     * @var string
     *
     * @ORM\Column(name="extra_info", type="string", length=200, nullable=false)
     */
    private $extraInfo;

    /**
     * @var integer
     *
     * @ORM\Column(name="eid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eid;



    /**
     * Set miktar
     *
     * @param integer $miktar
     * @return SysPackets
     */
    public function setMiktar($miktar)
    {
        $this->miktar = $miktar;

        return $this;
    }

    /**
     * Get miktar
     *
     * @return integer 
     */
    public function getMiktar()
    {
        return $this->miktar;
    }

    /**
     * Set paketTipi
     *
     * @param string $paketTipi
     * @return SysPackets
     */
    public function setPaketTipi($paketTipi)
    {
        $this->paketTipi = $paketTipi;

        return $this;
    }

    /**
     * Get paketTipi
     *
     * @return string 
     */
    public function getPaketTipi()
    {
        return $this->paketTipi;
    }

    /**
     * Set tlKarsiligi
     *
     * @param integer $tlKarsiligi
     * @return SysPackets
     */
    public function setTlKarsiligi($tlKarsiligi)
    {
        $this->tlKarsiligi = $tlKarsiligi;

        return $this;
    }

    /**
     * Get tlKarsiligi
     *
     * @return integer 
     */
    public function getTlKarsiligi()
    {
        return $this->tlKarsiligi;
    }

    /**
     * Set isOnline
     *
     * @param integer $isOnline
     * @return SysPackets
     */
    public function setIsOnline($isOnline)
    {
        $this->isOnline = $isOnline;

        return $this;
    }
    
    /**
     * Set packetTypeInt
     *
     * @param integer $packetTypeInt
     * @return SysPackets
     */
    public function setPacketTypeInt($packetTypeInt)
    {
        $this->packetTypeInt = $packetTypeInt;

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
     * Get packetTypeInt
     *
     * @return integer 
     */
    public function getPacketTypeInt()
    {
        return $this->packetTypeInt;
    }

    /**
     * Set time
     *
     * @param integer $time
     * @return SysPackets
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return integer 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set creator
     *
     * @param string $creator
     * @return SysPackets
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
     * Set totalComing
     *
     * @param string $totalComing
     * @return SysPackets
     */
    public function setTotalComing($totalComing)
    {
        $this->totalComing = $totalComing;

        return $this;
    }

    /**
     * Get totalComing
     *
     * @return string 
     */
    public function getTotalComing()
    {
        return $this->totalComing;
    }

    /**
     * Set extraInfo
     *
     * @param string $extraInfo
     * @return SysPackets
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
     * Get eid
     *
     * @return integer 
     */
    public function getEid()
    {
        return $this->eid;
    }
}
