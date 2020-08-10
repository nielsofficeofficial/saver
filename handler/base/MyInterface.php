<?php
 
 namespace Project_\crownPHPEXTEND\handler\base;

/**
 * summary Interfaces (Optional/Occasionally implementation)
 * saver v1.1
 *
 * Interface is assigned for categories child class for instance  
 * ex.
 * - Toys extend MotherClass abstract 
 * - Car class { ... } // object 
 * - Ball class  { ... } // object
 * 
 * This will set as Final Private, Protected
 * Father can be extend onyl by mother
 * - The unpredictable and changeable var/properties
 * - The Reusable method for differentce instances
 * - Assign for MotherClass which care for functionality
 *
 * 
 * This Class assign for Final Private, Protected exclusively from crownHPEXTEND conding conversion
 * NOTE: Make sure the function cannot be executed from public only child can do that! 
 * 
 * Outside of cpE code convention link using abstract Reference more examples:
 * @link https://www.php.net/manual/en/language.oop5.interfaces.php
 * @link https://phpenthusiast.com/object-oriented-php-tutorials/interfaces
 *
 */


 interface MyTestInterface {

  public function hellFirst();

 }

 class TestClass implements MyTestInterface {

 public function hellFirst() {

	echo "This is method implementation......";
 
 }

}