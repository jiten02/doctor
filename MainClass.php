<?php
class MyClass{
private $con;
    function __construct() {
        $this->con= new PDO('mysql:host=localhost;dbname=mp','root','');
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    function loadDoctor(){
        $q = "select * from doctor";
       $stmt = $this->con->prepare($q);
       try{
           $stmt->setFetchMode(PDO::FETCH_NUM);
           $stmt->execute();
           $r = $stmt->fetchall();
           
       } catch (PDOException $ex) {
           echo $ex->getMessage();
       }
       
       return $r;
    }
    
    function insertverification($degree,$image,$email)
    {
        $q='insert into verification (degree,image,email)values(:d,:i,:e);';
        try {
            $stmt = $this->con->prepare($q);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $stmt->bindParam(':d', $degree);
        $stmt->bindParam(':i', $image);
        $stmt->bindParam(':e', $email);
     
        try {
            $r = $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $r;
    }
    
        

    function validdata($u,$p)
   {
       $q = "select * from doctor where email=:u and password=:p";
       $stmt = $this->con->prepare($q);
       $stmt->bindParam(':u', $u);
       $stmt->bindParam(':p', $p);
       
       try{
           $stmt->setFetchMode(PDO::FETCH_NUM);
           $stmt->execute();
           $r = $stmt->fetchall();
           
       } catch (PDOException $ex) {
           echo $ex->getMessage();
       }
       
       return $r;
   }
   function showdata()
   {
       $q = "select * from expertise";
       $stmt = $this->con->prepare($q);
       try{
           $stmt->setFetchMode(PDO::FETCH_NUM);
           $stmt->execute();
           $r = $stmt->fetchall();
           
       } catch (PDOException $ex) {
           echo $ex->getMessage();
       }
       
       return $r;
   }
   function finddetalis($u)
   {
       $q = "select * from doctor where expertise=:u";
       $stmt = $this->con->prepare($q);
       $stmt->bindParam(':u', $u);
   
       
       try{
           $stmt->setFetchMode(PDO::FETCH_NUM);
           $stmt->execute();
           $r = $stmt->fetchall();
           
       } catch (PDOException $ex) {
           echo $ex->getMessage();
       }
       
       return $r;
   }
   function findfees($u)
   {
       $q = "select * from doctor where did=:u";
       $stmt = $this->con->prepare($q);
       $stmt->bindParam(':u', $u);
   
       
       try{
           $stmt->setFetchMode(PDO::FETCH_NUM);
           $stmt->execute();
           $r = $stmt->fetchall();
           
       } catch (PDOException $ex) {
           echo $ex->getMessage();
       }
       
       return $r;
   }
   function registration($nm,$age,$con,$city,$eid,$pwd)
    {
        
        $q= "INSERT INTO patient (name,age,mobile,city,email,password) VALUES (:b,:c,:con,:d,:e,:f)";
        $smt=$this->con->prepare($q);
        $smt->bindParam(':b', $nm);
        $smt->bindParam(':c', $age);
        $smt->bindParam(':con', $con);
        $smt->bindParam(':d', $city);
        $smt->bindParam(':e', $eid);
        $smt->bindParam(':f', $pwd);
       
        
        try {
            $f=$smt->execute();
            return $f;        
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
             
    }
    
     function insertData($n,$add,$con,$em,$exp,$st,$gen,$f,$pw)
    {
        $q='insert into doctor (name,address,contact,email,expertise,status,gender,fees,password)values(:n,:a,:con,:em,:ep,:st,:gen,:f,:pw);';
        try {
            $stmt = $this->con->prepare($q);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $stmt->bindParam(':n', $n);
        $stmt->bindParam(':a', $add);
        $stmt->bindParam(':con', $con);
        $stmt->bindParam(':em', $em);
        $stmt->bindParam(':ep', $exp);
        $stmt->bindParam(':st', $st);
        $stmt->bindParam(':gen', $gen);
        $stmt->bindParam(':f', $f);
        $stmt->bindParam(':pw', $pw);
        try {
            $r = $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $r;
    }

    function valid($uid,$pwd)
    {
         $qry = "select * from patient where email=:a and password=:b";
         $stmt = $this->con->prepare($qry);
         $stmt->bindParam(':a', $uid);
         $stmt->bindParam(':b', $pwd);
         try
         {
             $stmt->execute();
             $f = $stmt->rowCount();
             return $f;
         } catch (PDOException $ex) {
             $ex->getMessage();
         }
    }
    function show_patient($eid,$pwd)
    {
        $qry = "select * from patient where email=:a and password=:b";
        $stmt = $this->con->prepare($qry);
        $stmt->bindParam(':a', $eid);
         $stmt->bindParam(':b', $pwd);
         try
         {
             $stmt->execute();
             $f = $stmt->fetchall();
             return $f;
         } catch (PDOException $ex) {
             $ex->getMessage();
         }
    }
    
     function pshowdata()
   {
       $q = "select * from patient";
       $stmt = $this->con->prepare($q);
       try{
           $stmt->setFetchMode(PDO::FETCH_NUM);
           $stmt->execute();
           $r = $stmt->fetchall();
           
       } catch (PDOException $ex) {
           echo $ex->getMessage();
       }
       
       return $r;
   }
   
   
   function dshowdata()
   {
       $q = "select * from doctor where status='verified'";
       $stmt = $this->con->prepare($q);
       try{
           $stmt->setFetchMode(PDO::FETCH_NUM);
           $stmt->execute();
           $r = $stmt->fetchall();
           
       } catch (PDOException $ex) {
           echo $ex->getMessage();
       }
       
       return $r;
   }
   
   function pandingdshowdata()
   {
       $q = "select * from doctor where status='pending'";
       $stmt = $this->con->prepare($q);
       try{
           $stmt->setFetchMode(PDO::FETCH_NUM);
           $stmt->execute();
           $r = $stmt->fetchall();
           
       } catch (PDOException $ex) {
           echo $ex->getMessage();
       }
       
       return $r;
   }
    function deleted($a)
    {
        $q="Delete from patient where pid=:a";
        $smt=$this->con->prepare($q);
        $smt->bindParam(':a', $a);
        try {
            $f=$smt->execute();
            return $f;   
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
     function ddeleted($a)
    {
        $q="Delete from doctor where did=:a";
        $smt=$this->con->prepare($q);
        $smt->bindParam(':a', $a);
        try {
            $f=$smt->execute();
            return $f; 
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
     function verify($a)
    {
        $q="update Doctor set status='verified' where did=:a";
        $smt=$this->con->prepare($q);
        $smt->bindParam(':a', $a);
        try {
            $f=$smt->execute();
            return $f; 
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    function info($a)
    {
      
         $q="SELECT * FROM doctor inner join verification on doctor.email=verification.email WHERE doctor.email=:a";
          $q1="SELECT * FROM doctor WHERE email=:a";
          
          
         $stmt = $this->con->prepare($q);
        $stmt->bindParam(':a', $a);
         
         try
         {
             $stmt->execute();
             $f = $stmt->fetchall();
             
             return $f;
         } catch (PDOException $ex) {
             $ex->getMessage();
         }
    }
   
}
