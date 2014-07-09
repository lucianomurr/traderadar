<?php
/**
 * file(//src/classes/CrossReference.php)
 * @author: Luciano Murruni //2014-03-27
 */

class CrossReference
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
    protected $description;

    /**
     * @Column(type="datetime")
     * @var DateTime
     */
    protected $last_update;

    /**
     * @Column(type="integer")
     * @var [type]
     */
    protected $user_id;



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

    /* DESCRIPTION */ 
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    
    /* LAST UPDATE DATE */ 
    public function getLastAccessDate()
    {
        return $this->last_access_date;
    }

    public function setLastAccessDate(DateTime $last_access_date)
    {
        $this->last_access_date = $last_access_date;
    }

    /* LAST UPDATE DATE */ 
    public function getUserID()
    {
        return $this->user_id;
    }

    public function setUserID($user_id)
    {
        $this->user_id = $user_id;
    }


}