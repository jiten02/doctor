<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once './MainClass.php';
$ob=new MyClass();
header("location:admin.php");
$ob->ddeleted($_REQUEST["id"])


?>