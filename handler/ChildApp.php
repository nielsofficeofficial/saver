<?php 


 namespace Project_\crownPHPEXTEND\handler; 
 
 use Project_\crownPHPEXTEND\root\App as Application; 
 use adzProject\ADZFRAMEWORK\Html\Html as NoHtml; 

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

     $New = NEW NoHtml();

     $New->H1("TITLE");
       
    }

  
  public function MadeMy_Day() {
   
   $New = NEW Application();
    
   return $New->test_me();

  } 

}  
 


  