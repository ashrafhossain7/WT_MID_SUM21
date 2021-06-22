<httml>
<head>
</head>
<body>
a quickbrown <b><?php echo "fox";?></b> jumps over the lazy <b><?php echo "dog";?></b><br>
</body>
</html>

<?php
$marks=55;
if($marks>=90){
	echo "A+";
}
	elseif($marks>=80&& $marks<90)
	{
		echo"A";
	}
	elseif($marks>=70&& $marks<80)
	{
		echo "B";
	}
	elseif($marks>=60 &&$marks<70)
	{
		echo"C";
	}
	else{
		echo "F";
	}

?>

<?php
 $length="20";
 $width=20;
 $rectangle=(.5*$length*$width);
	if($length===$width){
		echo "<br>value is $rectangle and is quare";
	}
	else{
		echo"<br> value is $rectangle but not square";
	}
?>
<?php
$name="min";
if($name=="raju"||$name=="mina"||$name=="mithu")
{
	echo "<br>hello";
}
else{
	echo"<br>you are not recoznised<br>";
}
?>
<html>
<?php
$backColor="green";$frontColor="red";$imageWidth="80px";$imageHeight="80px";
?>
<table>
	<tr>
	<td rowspan="2"><img src="aiub_logo.jpg" width="<?php echo $imageWidth ?>" height="<?php echo $imageHeight ?>" /></td>
	<td><h2>American international </h2> 
	</tr>
	<tr>
		<td>
	<h2>University -<span style="background-color:<?php echo $backColor ?>;color:<?php echo $frontColor ?>">
Bangladesh</h2></td>
	</tr>
</table>
</span>
</html>
