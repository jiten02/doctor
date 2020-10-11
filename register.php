<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center>
        <h1>Doctors Registration</h1>
        <form method="get">
            <table>
            <div><tr>   
                    <td>  <label for="recipient-name" class="col-form-label">Name</label></td>
                <td><input type="text" placeholder="Enter the Name" name="name"></td>
            </tr> </div>
            <div><tr>
               <td> <label for="recipient-name" class="col-form-label">Address</label></td>
               <td> <input type="text" placeholder="Enter the Address" name="add"></td>
             </tr></div>
            <div><tr>
               <td> <label for="recipient-name" class="col-form-label">Contact</label></td>
                <td><input type="text" placeholder="Enter the Contacct" name="con"></td>
            </tr> </div>
            <div><tr>
                <td><label for="recipient-name" class="col-form-label">Email</label></td>
               <td> <input type="text" placeholder="Enter the Email" name="email"></td>
            </tr> </div>
            <div><tr>
                <td><label for="recipient-name" class="col-form-label">Exepertise</label></td>
               <td> <select name="exp">
                    <option>Pysician</option>
                    <option>Skin</option>
                    <option>Heart</option>
                    <option>Bone</option>
                    <option>Neurologist</option>
                </select></td>
             </tr></div>
            <div><tr>
               <td> <label for="recipient-name" class="col-form-label">gender</label></td>
               <td> Male <input type="radio" name="gen" value="m" />
                Female <input type="radio" name="gen" value="f" /></td>
             </tr></div>
            <div><tr>
               <td> <label for="recipient-name" class="col-form-label">Fees</label></td>
                <td><input type="number" placeholder="Enter the case Fees" name="fees"></td>
            </tr> </div>
            <div class="form-group"><tr>
               <td> <label for="password" class="col-form-label">Password</label></td>
               <td> <input type="password" class="form-control" placeholder=" " name="pass" id="password" required=""></td>
            </tr></div>
            <div class="right-w3l"><tr>
               <td><input type="submit" name="submit" class="form-control" value="Register"></td>
           </tr> </div>
                <tr><td></td><td><p class="text-center dont-do">AllReady Register Then Login?
                <a href="index.php">
                                Login</a>
			  </p></td></tr>
            </table>
        </form>
    </center>
    </body>
    <a href="register.php"></a>
</html>
<?php
    $status = "pending";
    require_once './MainClass.php';
    session_start();
    if(isset($_REQUEST['submit']))
    {
        $obj = new MyClass();
        $r = $obj->insertData($_REQUEST['name'],$_REQUEST['add'],$_REQUEST['con'],$_REQUEST['email'],$_REQUEST['exp'],$status,$_REQUEST['gen'],$_REQUEST['fees'],$_REQUEST['pass']);
        if($r)
        {
            $_SESSION["user"]=$_REQUEST['email'];
            header('location:VerifyDoctore.php');
        }
    }
?>
