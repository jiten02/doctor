<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>patients data</h1>
        <?php
        require_once './MainClass.php';
        $ob=new MyClass();
        $res=$ob->pshowdata();
        // put your code here
        ?>
        <table>
            
            <tr>
                <td>id</td>
                <td>NAME</td>
                <td>AGE</td>
                <td>PHNNO</td>
                <td>CITY</td>
                <td>EMAILID</td>
                <td>PASSWORD</td>
                <td>Delete</td>
            </tr>
            <?php 
                    foreach ($res as $res){
            ?> 
               <tr>
                   <td><?php echo $res[0]; ?></td>
                <td><?php echo $res[1]; ?></td>
                <td><?php echo $res[2]; ?></td>
                <td><?php echo $res[3]; ?></td>
                <td><?php echo $res[4]; ?></td>
                 <td><?php echo $res[5]; ?></td>
                <td><?php echo $res[6]; ?></td>
                
                
                <td> <a href="delete.php?id=<?php echo $res[0]; ?>">delete</a> </td>
            </tr>
                    <?php } ?>
        </table>
        
        <h1>Doctors data</h1>
        <?php
        require_once './MainClass.php';
        $ob=new MyClass();
        $res=$ob->dshowdata();
        // put your code here
        ?>
        <table>
            
            <tr>
                <td>id</td>
                <td>NAME</td>
                <td>ADDRESS</td>
                <td>PHNNO</td>
                <td>EMAILID</td>
                <td>EXPERTISE</td>
                <td>STATUS</td>
                <td>GENDER</td>
                <td>FEES</td>
                <td>PASSWORD</td>
                <td>Delete</td>
            </tr>
            <?php 
                    foreach ($res as $res){
            ?> 
               <tr>
                   <td><?php echo $res[0]; ?></td>
                <td><?php echo $res[1]; ?></td>
                <td><?php echo $res[2]; ?></td>
                <td><?php echo $res[3]; ?></td>
                <td><?php echo $res[4]; ?></td>
                 <td><?php echo $res[5]; ?></td>
                  <td><?php echo $res[6]; ?></td>
                <td><?php echo $res[7]; ?></td>
                <td><?php echo $res[8]; ?></td>
                 <td><?php echo $res[9]; ?></td>
               
                <td> <a href="ddelete.php?id=<?php echo $res[0]; ?>">delete</a> </td>
            </tr>
                    <?php } ?>
        </table>
          <?php  
         $res=$ob->pandingdshowdata();
        // put your code here
        ?>
        <h1>Panding Doctors</h1>
        <table>
            
            
            <tr>
                <td>id</td>
                <td>NAME</td>
                <td>ADDRESS</td>
                <td>PHNNO</td>
                <td>EMAILID</td>
                <td>EXPERTISE</td>
                <td>STATUS</td>
                <td>GENDER</td>
                <td>FEES</td>
                <td>PASSWORD</td>
                <td>Delete</td>
            </tr>
            <?php 
                    foreach ($res as $res){
            ?> 
               <tr>
                   <td><?php echo $res[0]; ?></td>
                <td><?php echo $res[1]; ?></td>
                <td><?php echo $res[2]; ?></td>
                <td><?php echo $res[3]; ?></td>
                <td><?php echo $res[4]; ?></td>
                 <td><?php echo $res[5]; ?></td>
                  <td><?php echo $res[6]; ?></td>
                <td><?php echo $res[7]; ?></td>
                <td><?php echo $res[8]; ?></td>
                 <td><?php echo $res[9]; ?></td>
                   <td> <a href="verify.php?id=<?php echo $res[0]; ?>">Verify</a> </td>
                <td> <a href="ddelete.php?id=<?php echo $res[0]; ?>">delete</a> </td>
                 <td> <a href="info.php?id=<?php echo $res[4]; ?>">Info</a> </td>
            </tr>
                    <?php } ?>
        </table>
    </body>
    
</html>
