<?php 

/**
*
*--------------------------------------------------------------------------
* @package Template: 
* @since:  cpE v1.0 
*--------------------------------------------------------------------------
* @package SAVER: SAFEMODE DEVELOPMENT PAGE
* @package DateCreated: 30.08.2020
* @package Project Name: SAVER/SAFEMODE
* @package Page Description: This will be a SAFEMODE / DEVELOPMENT to avoid create a multiple page.php just for testing working
*  developing application on live site and avoid crushng page while official running on live site while developing other sections.
* @package Page Tags: corePHP / SAVER / ROUTE ? SAFEMODE / DEVELOPMENT MODE
*
**/

$router->map('GET','',  function() {

 // Your saver index      

}, '' );

$router->map('GET','/about',  function() {
      
  set_view('My_label','about-section-header');
 
  set_view('My_label','home');

} , 'about');

