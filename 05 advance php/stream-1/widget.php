<?php
class Widget {
    public $naslov;
    public $tekst;
    private $color = "black";
    private $colorWhiteList = array("red","blue","green","black");

    function setColor($color) {
        if(in_array($color,$this->colorWhiteList)) {
            $this->color = $color;
        }
        
    }

    function draw() {
        $tekst = '<div class="blokk">

		<header><p style="margin: 0; text-align: center;padding:10px 0;; color: #fff!important; background:'.$this->color.'; border-bottom: 1px solid #E8E8E8; font-weight: bold; font-size: 1.5em;">'.$this->naslov.'</p></header>
		
		<p> 
			</p><p>'.$this->tekst.'</p>
        <form onsubmit="return validateSidebarForm(event,this);" id="frmSS2" action="https://www.it-akademija.com/nl/form.php?form=2" method="post"><span style="float: left; margin: 8px 0px 0px;">E-mail:</span> <input type="email" required="" name="email">
        <p style="margin: 0px; height: 0px; clear: both;">&nbsp;</p>
        <span style="float: left; margin: 8px 0px 0px;">Ime:</span> <input type="text" required="" id="CustomFields_1_2" name="CustomFields[1]"> <input type="hidden" name="CustomFields[14]" id="CustomFields_14_2" value="RS"> <input type="hidden" name="idform" value="2"> <input type="hidden" name="CustomFields[23][]" id="CustomFields_23_1" value="RS"> <input type="hidden" value="h" name="format"> <input type="submit" value="POŠALJITE"> <label for="CustomFields[36_2]_sidebar" style="display: none;"> <input type="checkbox" checked="checked" id="CustomFields[36_2]_sidebar" name="CustomFields[36][]" value="sidebar"> sidebar</label> <input type="hidden" id="actionRecaptcha" name="actionRecaptcha" value="sidebar"> <input type="hidden" name="recaptcha_response" class="recaptchaResponse"></form></div>';
        echo $tekst;
    }
    
}