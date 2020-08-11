<?php 
 
 namespace Project_\crownPHPEXTEND\abstract_;

 use Project_\crownPHPEXTEND\abstract_\base\FatherClass as ProcessorClass;
 
/**
 * summary MotheClass crownPHPEXTEND coding convention
 * saver v1.1
 *
 * MotherClass extend FatherCLass assigned for functionality work over and over again
 * with uncetgories but the same processing
 *
 * ex. 
 * - Vehicle extends MotherClass1  {}  // This assign collect/execute of color and wheels 
 * - Car     extends MotherClass2  {}  // this assign collect/execute specification
 * - Motor   extends MotherClass3  {}  // This assign collect/execute attirbutes 
 * 
 * This will set as Final Private, Protected 
 * For some reason Final Public can be also here
 * FatherClass restricky can be extend only by mother cpE code covention
 * - The unpredictable and changeable var/properties
 * - The Reusable method for differentce instances
 * - Assign for MotherClass which care for functionality
 *
 * Outside of cpE code convention link using abstract Reference more examples:
 * @link https://www.w3schools.com/php/php_oop_classes_abstract.asp
 * @link https://www.php.net/manual/en/language.oop5.abstract.php
 *
 */

 trait MyName
 {
     /**
      * trait will use for more need to extend the class of MotherClass for some whatever reason
      * This time for cpE code convetion trait Class { ... } not allow use public but Protected Final Private Method only
      */
     public function TraitName()
     {
        echo "Your Mother Trait!" ;
     }
    
     // For Mother Private
     // NO public allowed
     // Private only 
     private function MyMethod() {

     }

 }

/**
 * summary
 */
class MotherCLass extends ProcessorClass
{
 
  // trait for more method and class that you have to use for this MotherClass
  use MyName;

  public function __construct()
  {
       
       parent::__construct()."<br />"; 
       print "Hello I am a Mother <br />"; 
       $this->TraitName();

  }
  
  // For ChildClass
  protected function MyMotherProtected() {


  } 

  // For Directpage calling for some reason 
  final public function MotherMethod() {
     
    return parent::FatherProtected(); 
    
  } 
  
  // Also Private Method can be use
  final private function MyMethod() {
   
   // My Private Method Goes Here..
   
  }
  
 
}

// echo "root";
