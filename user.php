<?php
   $user=array("Dimateo","Megan","Sofia");
   $pass=array(123,456,789);

   $estado=false;

   $nombre=$_POST['nombre'];
   $password=$_POST['pass'];

   $tan=count($user);

   for($x=0; $x<$tan; $x++)
   {
   	   if($user[$x]==$nombre && $pass[$x]==$password)
	   {
	   	   $estado=true;
	   }
   }

   if($estado)
   {
   	 header("location:ventas.html"); 
   }
   else 
	{
	header("location:index.html");
	}
?>
