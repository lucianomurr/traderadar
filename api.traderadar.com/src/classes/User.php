<?php
/**
 * file(//src/classes/Trade.php)
 * @author: Luciano Murruni //2014-03-27
 */

class User
{
    /**
    
    * Property

    */

    /**
     * @Id @Column(type="integer") @GeneratedValue
     * @var int
     */
    protected $id;
    /**
     * @Column(type="string")
     * @var string
     */
    protected $name;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $surname;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $email;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $password;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $timezone;

    /**
     * @Column(type="datetime")
     * @var DateTime
     */
    protected $register_date;

    /**
     * @Column(type="datetime")
     * @var DateTime
     */
    protected $last_access;



    






    /**
    
    * Lista delle funzioni GET / SET
    
    */
    public function getId()
    {
        return $this->id;
    }

    /* NAME */ 
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    /* SURNAME */ 
    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /* EMAIL */ 
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    /* PASSWORD */ 
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    /* TIMEZONE */ 
    public function getTimezone()
    {
        return $this->timezone;
    }

    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
    }

    /* REGISTER DATE */ 
    public function getRegisterDate()
    {
        return $this->register_date;
    }

    public function setRegisterDate(DateTime $register_date)
    {
        $this->register_date = $register_date;
    }
    
    /* LAST ACCESS DATE */ 
    public function getLastAccessDate()
    {
        return $this->last_access_date;
    }

    public function setLastAccessDate(DateTime $last_access)
    {
        $this->last_access = $last_access;
    }


}