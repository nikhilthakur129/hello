/* An Application for checking whether a string is palindrome or not */
<html>
<head>
<font size=6>PALINDROME
</font>
</head>
<br/>
<body bgcolor="white">
<?php
$n="MADAM";/*assigning string to a variable*/
$len=strlen($n);
$r=" ";
echo"<br>THE GIVEN STRING IS:".$n."<br/>";
for($i=$len-1;$i>=0;$i--)
{
$r=$r.$n[$i];
}
echo"<br>THE REVERSE STRING IS:".$r."<br/>";
if($n==$r)
{


echo"THE GIVEN STRING IS PALINDROME";
}
else
{
echo"THE GIVEN STRING IS NOT A PALINDROME";
}
?>
</body>
</html>