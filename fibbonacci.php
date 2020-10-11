/* An Application for generating Fibonacci series */
<html>
<head>
<font size=6>fibonacci series
</font>
</head>
<br/>
<body bgcolor="pink">
<?php
$a=0;
$b=1;
echo"<br> the fibonacci series<br/>";
echo $a."<br/>";
echo $b;
for($i=0;$i<8;$i++)
{
$c=$a+$b;
echo"<br>".$c;
$a=$b;
$b=$c;
}
?>
</body>
</html>