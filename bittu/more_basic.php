<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    *{
        margin-top:0px;
        padding:0px;  
    }

    body{
        background-color:grey;
    }
    nav>div{
        margin-top:2px;
        border-radius: 20px;
        heIght: 40px;
        padding:10px;
        margin-bottom:2px;
        float: left;
        margin:0px;
        background-color:orange;
        float:clear;
    }

    .con{
        padding:10px;
        margin:10px;
        text-shadow:1px 1px 0px blue;
        box-sizing: border-box;
        text-align:center;
        border-radius:5px;
        background-color:tomato;
    }

    .con2{
        box-sizing: border-box;
        border-radius:5px;
        background-color: rgb(209, 23, 23); 
        
        font-weight: bold;
        font-size:30px;
    }

    h1{
        transform:rotate(2deg);
        font-family
        text-align:center;
        transition:1s;
    }



    .c{
        margin-bottom:50px;
        float:left;
        background-color:purple;
        float: clear;
        width: 100%;
        float:clear;
    }
    </style>
    
</head>
<body>



<div class="c">
    <nav>
        <div>ICON</div>
        <div>ICON</div>
        <div>HOME</div>
        <div>ABOUT-US</div>
        <div>TUTORIALS</div>
    </nav>
</div>
<br>


<div class="con"><h1> More Basic PHP</h1></div>

<div class="con2">
      <h2>IF ELSE</h2>

    



<?php

    $var1=10;
    $var2=20;
    echo " Variable 1 = ";
    echo $var1;
    echo "<br>";
    echo " Variable 2 = ";
    echo $var2;
    echo "<br>";

    if($var1>$var2)
    {
        echo $var1;
        echo " is greater ";
        echo " <br> ";
    }
    else if($var1<$var2)
    {
        echo $var1;
        echo " is greater ";
        echo " <br> ";
    }
    else
    { 
        echo " both are equal ";
        echo " <br> ";
    }
    echo "<br>";

    echo "<h3> ARRAYS <h3> ";

    $arr1=array("hello",10,"world",20);
    echo $arr1[0];
    echo "<br>";
    var_dump($arr1);

    echo "<br>";
    echo "<h3> LOOPS <h3> ";

    $arr1=array("hello",10,"world",20);
    
    $k=0;
    while($k<count($arr1))
    {
        echo " element ";
        echo $k+1;
        echo " = ";
        echo $arr1[$k];
        echo "<br>";
        $k++;
    }

    echo "<br>";

    
    for($k=0;$k<10;$k++)
     {
        echo $k;
     }

     echo "<br>";
     echo "<h3> Function <h3> ";
    
     function natural(){

        $v=0;
        while($v<10)
        {
            echo $v;
            echo " ";
            $v++;
        }
     }

     natural();

     echo "<br>";
     echo "<h3> Strings <h3> ";

     $ss="this is my world";
     echo $ss;

     $len=strlen($ss);

     echo "<br>Length of string ".$len." ok <br>";
    
?>

</div>

    
</body>
</html>