<?php 
 
 namespace Project_\crownPHPEXTEND\abstra\base;

/**
 * summary
 * saver v1.1
 *
 * FatherClass is assigned for all properties abstract method for application
 * This will set as Final Private, Protected
 * Father can be extend onyl by mother
 * - The unpredictable and changeable var/properties
 * - The Reusable method for differentce instances
 * - Assign for MotherClass which care for functionality
 *
 * ex. Your aplication running | abstract assign to emthod such for
 * absctract function start()
 * absctract function stop()
 * 
 * This Class assign for Final Private, Protected exclusively from crownHPEXTEND conding convention
 * NOTE: Make sure the function cannot be executed from public only child can do that! 
 * 
 * Outside of cpE code convention link using abstract Reference more examples:
 * @link https://www.w3schools.com/php/php_oop_classes_abstract.asp
 * @link https://www.php.net/manual/en/language.oop5.abstract.php
 *
 */

abstract class FatherCLass {
 
 public function __construct()
 {
        
  print "Father Live Final Private and Protected! <br />"; 
 
 }
  

 protected function FatherProtected() {
    
  return $this->ProtectedMethod()."Test Application<br />";
  
 } 

 final private function ProtectedMethod() {
   
   return "USE ME Final Pivate! Method named ProtectedMethod()";

 }

}
