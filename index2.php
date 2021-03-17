<!DOCTYPE html>
<html>
    <head>
        <title>Template</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
         <link rel="stylesheet" href="style.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="menu">
            <a style="color: yellow;" href="index.html">Home</a>
			 <a href="#">Contact</a>

</div>
<div class="div_2">
  <h1 style="text-align: center"><em><strong>PHP:-</strong></em></h1>
<?php
	
	// message print/echo
	echo "message print/echo";
	echo "hello world ";
	// message print with function	
	echo "message print with function";
function msg(){
	
	echo "welcome to php";
	}
	
	msg();
	

	//int addition OPS with function
	function sum(int $x, int $y) {
		$z = $x + $y;
		return $z;
	}
echo "5 + 10 = " . sum(100, 102);
echo "7 + 13 = " . sum(75, 513) ;
echo "2 + 4 = " . sum(225, 415);
	//float addition
	
	function addNumbers(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers(1.5, 10.2); 
	
	//pass by refrence value
	echo "pass by refrence value";
	function add_five(&$value) {
  			$value += 5;
	}
$num = 5;
add_five($num);
echo $num;
	
	?>
</div>
</body>
</html>
