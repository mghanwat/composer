<?php
namespace Product\ClassN;

class CalculatorClass{
    public $m_intFirstVal;
    public $m_intSecondVal; 
    public function __construct($intFirst, $intSecond ) {
        $this->m_intFirstVal = $intFirst;
        $this->m_intSecondVal = $intSecond;
    }
    public function add() {

        return  ( $this->m_intFirstVal + $this->m_intSecondVal );
    }
    public function sub() {
        return  $this->m_intFirstVal - $this->m_intSecondVal;
    }
    public function mul() {
        return  $this->m_intFirstVal * $this->m_intSecondVal;
    }
}

?>