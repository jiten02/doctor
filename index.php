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
    <center>
        <h1><b>Doctors Login</b></h1>
        <form method="get">
            <table>
             <div>
                 <tr>
                     <td>  <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name" required=""></td>
                     </tr>   </div>
                        <div class="form-group">
                            <td><label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="Password" id="password" required=""></td>
                        </div>
                <tr> <td>  <div class="right-w3l">
                            <input type="submit" name="submit"class="form-control" value="Login"></td></tr>
                        </div>
                     <tr> <td>   <p class="text-center dont-do">Don't have an account?
                <a href="register.php">
                    Register Now</a></tr></td>
								
                        </p>
                        <tr> <td>    <a href="plogin.php">
                                Patient Login</a></td></tr>
        </form>
        
         </table>
    </center>
    </body>
</html>
<?php
require_once './MainClass.php';

         $obj = new MyClass();
         

         if(isset($_REQUEST['submit']))
         {
             $r=$obj->validdata($_REQUEST['Name'], $_REQUEST['Password']);
             if($r[0][6]=="pending")
             {
                header("location:VerifyDoctore.php");
             }
             else{
                if($r)
                {
                   
                  header('location:doctorview.php');

                }
                else
                {
                    echo 'Login fail';
                }
             }
            
         }
             
             
       
?>
