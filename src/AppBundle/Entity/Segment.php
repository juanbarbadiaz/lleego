<?php

namespace AppBundle\Entity;

class Segment
{
    /**
     * Origin IATA code, for example PMI
     * @var string
     * @example PMI
     */
    private $originCode;

    /**
     * Origin name, for example Palma de Mallorca
     * @var string
     * @example Palma de Mallorca
     */
    private $originName;

    /**
     * Destination IATA code, for example MAD
     * @var string
     * @example MAD
     */
    private $destinationCode;

    /**
     * Destination IATA code, for example MAD
     * @var string
     * @example Madrid Adolfo Suárez Barajas
     */
    private $destinationName;

    /**
     * Departure date time
     * @var \DateTime
     */
    private $start;

    /**
     * Arrival date time
     * @var \DateTime
     */
    private $end;

    /**
     * Transport or flight number
     * @var string
     * @example 3975
     */
    private $transportNumber;

    /**
     * Company / airline code
     * @var string
     * @example IB
     */
    private $companyCode;

    /**
     * Company / airline name
     * @var string
     * @example Iberia
     */
    private $companyName;

    /**
     * @return string
     */
    public function getOriginCode(){
        return $this->originCode;
    }

    /**
     * @param string $originCode
     * @return Segment
     */
    public function setOriginCode($originCode){
        $this->originCode = $originCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getOriginName(){
        return $this->originName;
    }

    /**
     * @param string $originName
     * @return Segment
     */
    public function setOriginName($originName){
        $this->originName = $originName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestinationCode(){
        return $this->destinationCode;
    }

    /**
     * @param string $destinationCode
     * @return Segment
     */
    public function setDestinationCode($destinationCode){
        $this->destinationCode = $destinationCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestinationName(){
        return $this->destinationName;
    }

    /**
     * @param string $destinationName
     * @return Segment
     */
    public function setDestinationName($destinationName){
        $this->destinationName = $destinationName;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStart(){
        return $this->start;
    }

    /**
     * @param \DateTime $start
     * @return Segment
     */
    public function setStart($start){
        $this->start = $start;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEnd(){
        return $this->end;
    }

    /**
     * @param \DateTime $end
     * @return Segment
     */
    public function setEnd($end){
        $this->end = $end;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransportNumber(){
        return $this->transportNumber;
    }

    /**
     * @param string $transportNumber
     * @return Segment
     */
    public function setTransportNumber($transportNumber)
    {
        $this->transportNumber = $transportNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyCode()
    {
        return $this->companyCode;
    }

    /**
     * @param string $companyCode
     * @return Segment
     */
    public function setCompanyCode($companyCode)
    {
        $this->companyCode = $companyCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return Segment
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }
}
