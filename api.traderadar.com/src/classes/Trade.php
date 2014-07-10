<?php
/**
 * file(//src/classes/Trade.php)
 * @author: Luciano Murruni //2014-03-27
 */

class Trade
{
    /**
    *Property
    */

    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $user_id;

    /**
     * @var string
     */
    protected $image;

    /**
     * @var integer
     */
    protected $cross_reference_id;

    /**
     * @var integer
     */
    protected $timeframe_id;

    /**
     * @var integer
     */
    protected $technical_pattern_id;

    /**
     * @var string
     */
    protected $operation_type_id;

    /**
     * @var decimal
     */
    protected $volume;

    /**
     * @var decimal
     */
    protected $capital_risk;

    /**
     * @var decimal
     */
    protected $entry_price;

    /**
     * @var decimal
     */
    protected $stop_loss;

    /**
     * @var decimal
     */
    protected $target_price_primary;

    /**
     * @var decimal
     */
    protected $target_price_secondary;

    /**
     * @var text
     */
    protected $note;

    /**
     * @var smallint
     */
    protected $status;

    /**
     * @var string
     */
    protected $result;

    /**
     * @var datetime
     */
    protected $date_open;

    /**
     * @var datetime
     */
    protected $date_close;

    /**
     * @var datetime
     */
    protected $last_update;


    /**
    * Lista delle funzioni GET / SET
    */

    public function getId(){return $this->id;}

    /* NAME */ 
    public function getName(){return $this->name;}
    public function setName($name){
        $this->name = $name;
    }

    /* USER ID */ 
    public function getUserId(){return $this->user_id;}
    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }

    /* Image */ 
    public function getImage(){return $this->image;}
    public function setImage($image){
        $this->image = $image;
    }

    /* CROSS REFERENCE */ 
    public function getCrossReference(){return $this->cross_reference_id;}
    public function setCrossReference($cross_reference){
        $this->cross_reference_id = $cross_reference;
    }

    /* TIME FRAME */ 
    public function getTimeframe(){return $this->timeframe_id;}
    public function setTimeframe($timeframe_id){
        $this->timeframe_id = $timeframe_id;
    }

    /* TECHNICAL PATTERN */ 
    public function getTechnicalPattern(){return $this->technical_pattern_id;}
    public function setTechnicalPattern($technical_pattern_id){
        $this->technical_pattern_id = $technical_pattern_id;
    }

    /* OPERATION TYPE */ 
    public function getOperationType(){return $this->operation_type_id;}
    public function setOperationType($operation_type_id){
        $this->operation_type_id = $operation_type_id;
    }

    /* VOLUME */
    public function getVolume(){ return $this->volume; }
    public function setVolume($volume){
        $this->volume = $volume;
    }

    /* CAPITAL RISK */
    public function getCapitalRisk(){ return $this->capital_risk; }
    public function setCapitalRisk($capital_risk){
        $this->capital_risk = $capital_risk;
    }

    /* ENTRY PRICE */
    public function getEntryPrice(){ return $this->entry_price; }
    public function setEntryPrice($entry_price){
        $this->entry_price = $entry_price;
    }

    /* STOP LOSS */
    public function getStopLoss(){ return $this->stop_loss; }
    public function setStopLoss($stop_loss){
        $this->stop_loss = $stop_loss;
    }

    /* TARGET PRICE #1 */
    public function getTargetPricePrimary(){ return $this->target_price_primary; }
    public function setTargetPricePrimary($target_price_primary){
        $this->target_price_primary = $target_price_primary;
    }

    /* TARGET PRICE #2 */
    public function getTargetPriceSecondary(){ return $this->target_price_secondary; }
    public function setTargetPriceSecondary($target_price_secondary){
        $this->target_price_secondary = $target_price_secondary;
    }

    /* NOTE */
    public function getNote(){ return $this->note; }
    public function setNote($note){
        $this->note = $note;
    }
    
    /* STATUS */
    public function getStatus(){ return $this->status; }
    public function setStatus($status){
        $this->status = $status;
    }

    /* RESULT */
    public function getResult(){ return $this->result; }
    public function setResult($result){
        $this->result = $result;
    }

    /* DATE OPEN */
    public function getDateOpen(){ return $this->date_open; }
    public function setDateOpen( DateTime $date_open ){
        $this->date_open = $date_open;
    }

    /* DATE CLOSE */
    public function getDateClose(){ return $this->date_close; }
    public function setDateClose( DateTime $date_close ){
        $this->date_close = $date_close;
    }

    /* LAST UPDATE */
    public function getLastUpdate(){ return $this->last_update; }
    public function setLastUpdate( DateTime $last_update ){
        $this->last_update = $last_update;
    }

}