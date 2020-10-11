<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center>
        <h1>Patient Login</h1>
        <table>
        <form method="get">
            <div><tr><td>
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name" required=""></td></tr>
                        </div>
                        <div class="form-group"><tr><td>
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" " name="Password" id="password" required=""></td></tr>
                        </div>
                        <div class="right-w3l"><tr><td>
                            <input type="submit" name="submit"class="form-control" value="Login"></td></tr>
                        </div>
           <tr><td> <p class="text-center dont-do">Don't have an account?
                <a href="pregister.php">
                                Register Now</a></td><tr>
								
                        </p>
                     <tr>  <td> <a href="plogin.php">
                            Patient Login</a><br></td></tr>
                     <tr> <td>  <a href="index.php">
                                Doctor Login</a></td></tr>
        </form>
            </table>
    </center>
    </body>
</html>
<?php
if(isset($_REQUEST['submit']))
         {
                require_once './MainClass.php';
                $obj = new MyClass();
                $r=$obj->valid($_REQUEST['Name'], $_REQUEST['Password']);
            
            
             if($r)
             { 
                 $data = $obj->show_patient($_REQUEST['Name'],$_REQUEST['Password']);
                 foreach ($data as $v)
                 {
                     $_SESSION["id"] = $v['pid'];
                 }
                 
                
                header('location:appoiment.php?doc=0');
                 
             }
             else
             {
                 echo 'Login fail';
             }
         }
?>
