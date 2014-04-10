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
     * @Column(type="datetime")
     * @var DateTime
     */
    protected $last_update;



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


    
    /* LAST UPDATE DATE */ 
    public function getLastAccessDate()
    {
        return $this->last_access_date;
    }

    public function setLastAccessDate(DateTime $last_access_date)
    {
        $this->last_access_date = $last_access_date;
    }


}