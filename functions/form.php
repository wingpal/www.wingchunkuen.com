<?php
include_once "functions.php";

switch ($_GET['action']) {
  case "addstudents":
    kuen_addingstudent($_POST);
  case "textareaadd":
    kuen_textareaadd($_POST);

}