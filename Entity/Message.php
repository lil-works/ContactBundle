<?php
namespace LilWorks\ContactBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="lilworks_contact_message")
 * @ORM\Entity(repositoryClass="LilWorks\ContactBundle\Entity\Repository\MessageRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Message
{
    /**
     * @ORM\PreFlush()
     */
    public function preFlush()
    {
        if($this->createdAt == null)
            $this->createdAt = new \DateTime();

    }

    /**
     * @ORM\Id
     * @ORM\Column(type="integer",name="id")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @var datetime
     *
     * @ORM\Column(name="subject", type="datetime",nullable=false)
     */
    private $createdAt;

    /**
     * @var text
     *
     * @ORM\Column(name="messageSubject", type="text",nullable=true)
     */
    private $messageSubject;

    /**
     * @var text
     *
     * @ORM\Column(name="message", type="text",nullable=false)
     * @Assert\NotBlank()
     */
    private $message;

    /**
     * @var text
     *
     * @ORM\Column(name="response", type="text",nullable=true)
     */
    private $response;


    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string",length=255,nullable=true)
     * @Assert\NotBlank()
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="readed", type="boolean",nullable=true)
     */
    private $readed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="responseSended", type="boolean",nullable=true)
     */
    private $responseSended;

    /**
     * @var boolean
     *
     * @ORM\Column(name="getCopy", type="boolean",nullable=true)
     */
    private $getCopy;




    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Message
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set messageSubject
     *
     * @param string $messageSubject
     *
     * @return Message
     */
    public function setMessageSubject($messageSubject)
    {
        $this->messageSubject = $messageSubject;

        return $this;
    }

    /**
     * Get messageSubject
     *
     * @return string
     */
    public function getMessageSubject()
    {
        return $this->messageSubject;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set response
     *
     * @param string $response
     *
     * @return Message
     */
    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }

    /**
     * Get response
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Message
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set readed
     *
     * @param boolean $readed
     *
     * @return Message
     */
    public function setReaded($readed)
    {
        $this->readed = $readed;

        return $this;
    }

    /**
     * Get readed
     *
     * @return boolean
     */
    public function getReaded()
    {
        return $this->readed;
    }

    /**
     * Set responseSended
     *
     * @param boolean $responseSended
     *
     * @return Message
     */
    public function setResponseSended($responseSended)
    {
        $this->responseSended = $responseSended;

        return $this;
    }

    /**
     * Get responseSended
     *
     * @return boolean
     */
    public function getResponseSended()
    {
        return $this->responseSended;
    }

    /**
     * Set getCopy
     *
     * @param boolean $getCopy
     *
     * @return Message
     */
    public function setGetCopy($getCopy)
    {
        $this->getCopy = $getCopy;

        return $this;
    }

    /**
     * Get getCopy
     *
     * @return boolean
     */
    public function getGetCopy()
    {
        return $this->getCopy;
    }
}
