<htm>
    <head>
        
    </head>
    <body>
        
    <center>
        
        <h1>Patient Registartion</h1>
        <table>
        
        <form method="post">
            <div class="form-group"><tr>
                             <td><label class="col-form-label">Name</label></td>
                             <td> <input type="text" name="name" class="form-control" id="validationDefault01" placeholder="Full Name" ></td>
                           </tr> </div>
                            <div class="form-group"><tr>
                               <td> <label class="col-form-label">Age</label></td>
                               <td> <input type="number" name="age" class="form-control" id="validationDefault02" placeholder="age"></td>
                            </tr></div>
                            <div class="form-group"><tr>
                               <td> <label class="col-form-label">mobile</label></td>
                               <td> <input type="text" name="mb" class="form-control" id="validationDefault02" placeholder="con"></td>
                           </tr> </div>
                            <div class="form-group"><tr>
                               <td> <label class="col-form-label">City</label></td>
                              <td>  <input type="text" name="city" class="form-control" id="validationDefault02" placeholder="City" ></td>
                           </tr> </div>
                            <div class="form-group"><tr>
                               <td> <label class="col-form-label">Email</label></td>
                              <td>  <input type="text" name="email" class="form-control" id="validationDefault02" placeholder="Email" required=""></td>
                           </tr> </div>
                            <div class="form-group"><tr>
                              <td>  <label class="mb-2 col-form-label">Password</label></td>
                              <td>  <input type="password" name="pwd" class="form-control" id="password1" laceholder="Password" required=""></td>
                            </tr></div>
                            <div class="form-group"><tr>
                               <td> <label class="col-form-label">C.Password</label></td>
                              <td>  <input type="password" name="cpwd" class="form-control" id="password2" placeholder="conform Password" required=""></td>
                           </tr> </div>
			   <div class="reg-w3l"><tr>
                                   <td></td><td>  <button type="submit" name="rsubmit" class="form-control submit mb-4">Register</button>
                                   </td></tr></div>
        </form>
            </table>
    </center>
    </body>
</htm>
<?php
            require './MainClass.php';
             $obj = new MyClass();
         if(isset($_REQUEST['rsubmit']))
         {
        
             $r= $obj->registration($_REQUEST['name'],$_REQUEST['age'],$_REQUEST['mb'],$_REQUEST['city'], $_REQUEST['email'], $_REQUEST['pwd']);
             if($r)
             {
                 header('location:plogin.php');
             }
            else {
                echo 'Error';
            }

         }
 ?>

