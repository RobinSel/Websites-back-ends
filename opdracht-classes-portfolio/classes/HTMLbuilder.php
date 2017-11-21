<?php

class HTMLBuilder{
    
    protected $headerName;
    protected $bodyName;
    protected $footerName;
    protected $cssName;
    protected $jsName;
    
    public function __constructs ($HName, $BName, $FName, $cName, $jName) {
        $this->headerName = $HName;
        $this->bodyName = $BName;
        $this->footerName = $FName;
        $this->cssName = $cName;
        $this->jsName = $jName;
    }
    
    public function getHeaderName () {
        return $this->headerName;
    }
    public function getBodyName () {
        return $this->bodyName;
    }
    public function getFooterName () {
        return $this->footerName;
    }
    public function getCssName () {
        return $this->cssName;
    }
    public function getJsName () {
        return $this->jsName;
    }
    
    
}

?>