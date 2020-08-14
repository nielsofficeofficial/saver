<?php 
 namespace Project_\crownPHPEXTEND\handler_; 
 
 use Project_\crownPHPEXTEND\abstract_\MotherCLass as Application; 
 use crown\crownPHPEXTEND\Html\Html as NoHtml; 

/**
 * summary Child
 * saver v1.1
 * childClass/inheritance method which set all to Final public called handler carry the burden between root and executor/view files.
 * Obviously this is your Method from abstract and interface will be prepare before it will execute
 *
 */
class ChildApp  extends Application 
{
    /**
     * summary
     */
    public function __construct()
    {
  

      print "ChildClass Handler <br />";

      $this->MadeMy_Day()."<br />";


      $New = NEW NoHtml();
      $New->H1("TITLE Child");

       print MyFunction("DF_WithinClass")."<br />";

    }

  public function MadeMy_Day() {
   
   $New = NEW Application();
    
   return $New->MotherMethod();

  } 

}  
 


  