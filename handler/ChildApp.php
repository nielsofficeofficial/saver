<?php 


 namespace Project_\crownPHPEXTEND\handler; 
 
 use Project_\crownPHPEXTEND\root\App as Application; 

/**
 * summary
 */
class ChildApp extends Application
{
    /**
     * summary
     */
    public function __construct()
    {
  

      print "ChildClass <br />";
      $this->MadeMy_Day()."<br />";
       
    }

  
  public function MadeMy_Day() {
   
   $New = NEW Application();
    
   return $New->test_me();

  } 

}  
 


  