<?php
include_once "functions.php";

switch ($_GET['action']) {
  case "addstudents":
    kuen_addingstudent($_POST);
    break;
  case "textareaadd":
    kuen_textareaadd($_POST);
    break;
  case "contact":
    kuen_contact_us($_POST);
    break;
  case "deletestudent":
    kuen_delete_student($_POST);
    break;
  case "updatestudent":
    kuen_updatestudent($_POST);
    break;
  case "login":
    kuen_login($_POST);
    break;
  case "logout":
    kuen_logout();
    break;




}