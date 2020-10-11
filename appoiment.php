<?php
session_start();
echo 'ID : '.$_SESSION["id"];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <?php
     require './MainClass.php';
     $obj = new MyClass();
     $r = $obj->showdata();
    ?>
    <body>
    <center>
        
        <h1>Mak an Appoiment</h1>
        <form>
            
        
        <select name="doc" onchange="this.form.submit()">
            <option hidden selected>Select Expertise</option>
              <?php
             
              
                    foreach ($r as $v)
                    {
                       echo "<option value=".$v[1].">".$v[1]."</option>";
                    }
                     
                ?>
        </select>
 <?php
   if(isset($_GET["doc"])){
       $epr = $_GET["doc"];
       //echo "select country is => ".$epr;
       $doc = $obj->finddetalis($epr);
       //print_r($doc[0][1]);
   }
?>
            <br>
            <select name="doc1" onchange="this.form.submit()">
            <option hidden selected>Select Doctore</option>
              <?php
             
              
                    foreach ($doc as $v)
                    {
                       echo "<option value=".$v[0].">".$v[1]."</option>";
                    }
                     
                ?>
            </select>
            
            <?php
                if(isset($_GET["doc1"])){
                $fees = $_GET["doc1"];
                echo "select Doctore ID is => ".$fees;
                
                $fe = $obj->findfees($fees);
                //print_r($doc[0][1]);
                }
                foreach($fe as $d)
                {
 
                    echo "$d[8]";
                }
                
            ?>
            
            
            
       

            <br>
            Patient Name : <input name='pname' type="text" placeholder="Enter Patient Name">
            <br>
            <label for="recipient-name" class="col-form-label">gender</label>
            Male <input type="radio" name="gen" value="m" />
            Female <input type="radio" name="gen" value="f" />
            <br>
            </p>
         <a href="index.php">
         LOG OUT</a>    
        </form>
        
        
    </center>
    </body>
</html>