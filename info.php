<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once './MainClass.php';
$ob=new MyClass();

$rs=$ob->info($_REQUEST["id"]);


?>
<html>
    <head>
        
    </head>
    <body>
       <?php foreach ($rs as $rs){
            
     ?>
        <img height="150px" width="150px" src="uploads/<?php echo $rs[11];?>">
        <h1><?php echo $rs[1];?></h1>
        <h1><?php echo $rs[10];?></h1>
        <?php } ?>
    </body>
</html>   