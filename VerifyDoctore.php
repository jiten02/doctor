<html>
    <head>
        
    </head>
    <body>
    <center>
        <h1>VeriFication Upload Document</h1>
        <form method="post"  action="upload.php" enctype="multipart/form-data">
            <label>Degree Name</label>
            <input name="degree" type="text" placeholder="Enter Your Degree name"><br>
            
            Select image to upload:
            <input type="file" name="image" id="image">
            <input type="submit" value="Upload Image" name="submit">
        </form>
    </center>
    </body>
</html>
