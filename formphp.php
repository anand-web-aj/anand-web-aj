 <html>
   <head></head>

   <body>
           <?php
error_reporting(0);

             $a=$_GET['txt'];
             $b=$_GET['rl'];
             $c=$_GET['fe'];
echo$a;
    $bb=mysqli_connect("localhost","root","","sample");
  
$q="insert into student values('$a','$b','$c')";
$cb=mysqli_query($q,$cn);
 if($cb)
{
 echo"inserted";
}
?>

     <form method="get">
       Name<input type="text"name="txt"><br><br>
       RollNo<input type="Number"name="rl"><br><br>
       Fee<input type="text"name="fe"><br><br>
       <input type="submit"value="submit">
        
      


   </form>
       
  </body>

</html>