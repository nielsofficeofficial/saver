<?php 

/**
 * summary view
 * saver v1.1
 * Is a collection of method generate from child class that will use to executed and collect data from client side contains specially HTML 
 *
 */

/**
 * summary direct function 
 * saver v1.1
 * Is a chaining function that warpping all methods
 *
 */

require_once 'crownPHPEXTEND/crownPHPEXTEND.v.1.0.php';

$nohtml  = NEW  \crown\crownPHPEXTEND\Html\Html();

function my_htmattr() {
   
   return $sets = [
     
     $attr_name = ['1','2'],
     $attr_val  = ['_niel_','_fernandez_'],
    
   ];
 
 }

// display via echo/print
echo  $nohtml->H1("Sample_return ",  my_htmattr() ,'id_ECHO_TO_RETURN_ASSOC','','label_ECHO_h1',FUNC_ASSOC); // will show

      $nohtml->H1("Sample_return ",  my_htmattr() ,'id_ECHO_TO_RETURN_ASSOC','','label_ECHO_hIDE',FUNC_ASSOC); // will NOT SHOW

      // NULL use outside of function 
      $nohtml->H1("Sample_echo ",    my_htmattr(),'id_ECHO_DEFAULT','ADD_CLASS','NO_CLASS', NULL);  // will show 

$nohtml->_addLINE();


$new = NEW Project_\crownPHPEXTEND\handler_\ChildApp();


echo MyFunction("Test DirectFunction");

# Gud Luck! 

