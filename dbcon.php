<?php 
  define("HOSTNAME","localhost");
  define("USERNAME","root");
  define("PASSWORD","");
  define("DATABASE","iwt");

  $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

  if(!$connection){
    die('Connection Fialed');
  }else{
    echo('connected');
  }

  ?>