<?php

require_once 'model/ContactDAO.php';

 showErrors(1); 
 
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'GET') 
{
  $contactID = $_GET['contactID'];
  include "views/contactUpdate-view.php";
}

if($method == 'POST')
{

    $contactID = $_POST['contactID'];
    $action = $_POST['action'];

    if($action == 'cancel')
    {
        header("Location: contactListController.php");
        exit();
    }

    if($action == 'update')
    {
        $contactDAO = new ContactDAO();
        $username = $_POST['username'];
        $email = $_POST['email'];
        $contact = new Contact();
        
        $contact->contactID=$contactID;
        $contact->username=$username;
        $contact->email=$email;
        $contactDAO->updateContact($contact);

        header("Location: contactListController.php");
        exit;




        $contactDAO = new ContactDAO();
        $deleteResult = $contactDAO->deleteContact($contactID);           
        header("Location: contactListController.php");
       
    }  
}


 function showErrors($debug)
 {
        if($debug==1){
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        }  
    }
      

?>