<?php
   $user=array("dimateo","megan","sofia");
   $pass=array(123,456,789);

   $estado=false;

   $nombre=$_POST['nombre'];
   $password=$_POST['pass'];

   $tan=count($user);

   for($x=0; $x<$tan; $xx++)
   {
   	   if($user[$x]==$nombre && $pass[$x]==$password)
	   {
	   	   $estado=true;
	   }
   }

   if($estado)
   {
   	   echo "user ok";
   }
   else 
	{
	header("location:index.html");
	}
?>
