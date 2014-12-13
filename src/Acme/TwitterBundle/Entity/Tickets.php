<?php

namespace Acme\TwitterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tickets
 *
 * @ORM\Table(name="tickets")
 * @ORM\Entity
 */
class Tickets
{
    /**
     * @var string
     *
     * @ORM\Column(name="sender_mail", type="string", length=300, nullable=false)
     */
    private $senderMail;

    /**
     * @var string
     *
     * @ORM\Column(name="ticket_head", type="string", length=300, nullable=false)
     */
    private $ticketHead;

    /**
     * @var string
     *
     * @ORM\Column(name="ticket_content", type="string", length=700, nullable=false)
     */
    private $ticketContent;

    /**
     * @var string
     *
     * @ORM\Column(name="sender_ip", type="string", length=30, nullable=false)
     */
    private $senderIp;

    /**
     * @var integer
     *
     * @ORM\Column(name="send_time", type="integer", nullable=false)
     */
    private $sendTime;

    /**
     * @var string
     *
     * @ORM\Column(name="sender_sessions", type="text", nullable=false)
     */
    private $senderSessions;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_responsed", type="boolean", nullable=false)
     */
    private $isResponsed;

    /**
     * @var integer
     *
     * @ORM\Column(name="entry_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entryId;



    /**
     * Set senderMail
     *
     * @param string $senderMail
     * @return Tickets
     */
    public function setSenderMail($senderMail)
    {
        $this->senderMail = $senderMail;

        return $this;
    }

    /**
     * Get senderMail
     *
     * @return string 
     */
    public function getSenderMail()
    {
        return $this->senderMail;
    }

    /**
     * Set ticketHead
     *
     * @param string $ticketHead
     * @return Tickets
     */
    public function setTicketHead($ticketHead)
    {
        $this->ticketHead = $ticketHead;

        return $this;
    }

    /**
     * Get ticketHead
     *
     * @return string 
     */
    public function getTicketHead()
    {
        return $this->ticketHead;
    }

    /**
     * Set ticketContent
     *
     * @param string $ticketContent
     * @return Tickets
     */
    public function setTicketContent($ticketContent)
    {
        $this->ticketContent = $ticketContent;

        return $this;
    }

    /**
     * Get ticketContent
     *
     * @return string 
     */
    public function getTicketContent()
    {
        return $this->ticketContent;
    }

    /**
     * Set senderIp
     *
     * @param string $senderIp
     * @return Tickets
     */
    public function setSenderIp($senderIp)
    {
        $this->senderIp = $senderIp;

        return $this;
    }

    /**
     * Get senderIp
     *
     * @return string 
     */
    public function getSenderIp()
    {
        return $this->senderIp;
    }

    /**
     * Set sendTime
     *
     * @param integer $sendTime
     * @return Tickets
     */
    public function setSendTime($sendTime)
    {
        $this->sendTime = $sendTime;

        return $this;
    }

    /**
     * Get sendTime
     *
     * @return integer 
     */
    public function getSendTime()
    {
        return $this->sendTime;
    }

    /**
     * Set senderSessions
     *
     * @param string $senderSessions
     * @return Tickets
     */
    public function setSenderSessions($senderSessions)
    {
        $this->senderSessions = $senderSessions;

        return $this;
    }

    /**
     * Get senderSessions
     *
     * @return string 
     */
    public function getSenderSessions()
    {
        return $this->senderSessions;
    }

    /**
     * Set isResponsed
     *
     * @param boolean $isResponsed
     * @return Tickets
     */
    public function setIsResponsed($isResponsed)
    {
        $this->isResponsed = $isResponsed;

        return $this;
    }

    /**
     * Get isResponsed
     *
     * @return boolean 
     */
    public function getIsResponsed()
    {
        return $this->isResponsed;
    }

    /**
     * Get entryId
     *
     * @return integer 
     */
    public function getEntryId()
    {
        return $this->entryId;
    }
}
