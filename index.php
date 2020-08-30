<?php 

require_once 'cpe/crownPHPEXTEND.v.1.0.php';   
require_once DEFINED_INSTALLED_.SAVER; 

global $SecureProjectPath_;

$getSaver = ( basename(dirname(__FILE__)) != $SecureProjectPath_ ?

VERIFIER_SAVER_INSTALLATION() : 

doSAVER()); 

/**
*
*--------------------------------------------------------------------------
* @package Template: 
* @since:  cpE v1.0 
*--------------------------------------------------------------------------
* PageName: Index
* DateCreated: 21.08.2020
* Project Name: Demo
* Page Description: This is for saver demo page v1.2
* Page Tags: corePHP page named Index
*
**/

?>


