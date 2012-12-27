<?php 
//
// octo-cypher class contaninng methods for cyphering text
// by Marcin Lawniczak marcin.safmb@wp.pl marcinlawnik@github
class octocypher {
        var $TextToCypher; 
        var $CypheredText;
        function __construct($Input) {           
            $this->TextToCypher = $Input;            
        }   
        function Input($NewText) { 
            $this->TextToCypher = $NewText;  
        }
        //method from manual by peter at NOSPAM jamit dot com
        function EncryptRot13 ($str) {
            $str=$this->TextToCypher;
            $this->CypheredText=str_rot13(base64_encode($str));
        }
        //method from manual by peter at NOSPAM jamit dot com
        function DecryptRot13 ($str) {
            $str=$this->TextToCypher;
            $this->CypheredText=base64_decode(str_rot13($str));
        }
        function Output() {
            return $this->CypheredText;
        }
} 
?>
