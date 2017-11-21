<?php
class Percent{
    
    public $relative;
    public $hundred;
    public $nominal;
    
    public function __construct ($new, $unit) {
        $this->relative = $new/$unit;
        $this->hundred = $this->relative * 100;
        
        if ($this->relative > 1){$this->nominal = "Positive";}
        if ($this->relative = 1){$this->nominal = "Status-quo";}
        if ($this->relative < 1){$this->nominal = "Negative";}
        }
    
    public function roundNumber($number) {
        $roundedNumber = number_format($number,2);
        return $roundedNumber;
    }    
    
    
}



?>