<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="container">
        <h1>This is my  first php website</h1>
</div>

<?php
            echo "<h2>hello world<h2>";
            //this is comment

            $variable=34;
            $variable2=35;

            echo $variable+$variable2;
            echo "<br>";

            // operators in php
            // arthemetic

            echo " variable 1 + varible 2  ";
            echo $variable+$variable2;
            echo "<br>";
            
            echo " variable 1 - variable 2 ";
            echo $variable-$variable2;
            echo "<br><br>";
            //  assingment

            echo " <h3> Assignment Operator <h3> ";
            
            $newvar=$variable;
            $newvar+=1;

            echo $newvar;
            echo "<br>";
            //  comparision

            $a=10;
            $b=20;

            var_dump($a==$b);
            echo "<br>";
            var_dump($a>$b);
            echo "<br>";
            var_dump($a!=$b);
            echo "<br><br><hr >";
            //  logical operator
            // and &&
            // or   ||
            // xor
            // !

            $tt=(true and true);
            echo var_dump($tt);
            echo "<br><hr size=\"5\" color=\"red\">";

            $tt=(true and true);
            echo var_dump($tt);
            echo "<br><hr size=\"5\" color=\"red\">";

?>


</body>
</html>