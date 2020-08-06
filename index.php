<?php 

 require_once 'crownPHPEXTEND/crownPHPEXTEND.v.1.0.php';

$nohtml  = NEW  \adzProject\ADZFRAMEWORK\Html\Html();

function my_htmattr() {
   
   return $sets = [
     
     $attr_name = ['1','2'],
     $attr_val  = ['_niel_','_fernandez_'],
    
   ];
 
 }

// display via echo/print
echo  $nohtml->H1("Sample_return ",  my_htmattr() ,'id_ECHO_TO_RETURN_ASSOC','','label_ECHO_h1','FUNC_ASSOC'); // will show

      $nohtml->H1("Sample_return ",  my_htmattr() ,'id_ECHO_TO_RETURN_ASSOC','','label_ECHO_hIDE','FUNC_ASSOC'); // will NOT SHOW

      // NULL use outside of function 
      $nohtml->H1("Sample_echo ",    my_htmattr(),'id_ECHO_DEFAULT','ADD_CLASS','NO_CLASS', NULL);  // will show 

$nohtml->_addLINE();



 $new = NEW \Project_\crownPHPEXTEND\handler\ChildApp();

 $newApp = NEW \Project_\crownPHPEXTEND\root\App();




