<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // ------------- problem fix ---------------   1   -----------------

     function abstracts($number){
     	return abs($number);
     }

     $number = [10, -12, 34, 12, -3, 123];
     $map = array_map ( "abstracts", $number );

     $minNumber = min($map);

     echo ($minNumber);



    // ------------- problem fix ---------------   2   -----------------

    // function wordCount($word){
    // 	echo str_word_count($word);
    // }
    // wordCount("Nunc ex lorem, ullamcorper ut eleifend ac, pellentesque non dolor.");



    // ------------- problem fix ---------------   4   -----------------

    // $n = 4;

    // for ($i=1; $i <= $n; $i++) { 
    // 	for ($j=1; $j<=(2*$n)-1; $j++) { 
    // 		if ($j>=$n-($i-1) and $j<=$n+($i-1)) {
    // 			echo "*";
    // 		} else {
    // 			echo "&nbsp" . "&nbsp";
    // 		}
            
    // 	}
    // 	echo "</br>";
    // }



    // ------------- problem fix ---------------   5   -----------------

    // $number = 123;
    // $a = 0;
    // $sum = 0;

    // while ($number > 0) {
    // 	$a = $number % 10;     		
    // 	$sum = $sum + $a;    		
    // 	$number = (int)($number / 10);     
    // }

    // echo $sum;
?>
</body>
</html>