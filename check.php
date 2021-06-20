<?php 

// $arr = array('a'=>1);


// if(isset($arr['b'])  && empty($arr['b'])){
//   $arr['b'] = 'asdasd';
// }

// print_r($arr);

 // function __isset($variable)
 //    {
 //    	die;
 //        echo "Checking if $variable is set...";

 //        return isset($this->$variable);
 //    }

 //    if(isset($a)){
 //    	echo "f";
 //    }else{
 //    	echo "ff";
 //    }

// $a = null;

// if(empty($a)){
//     echo 'hi...';
// }else{
//     echo "set hai";
// }
// die;

// function get_client_ip() {
//     $ipaddress = '';
//     if (isset($_SERVER['HTTP_CLIENT_IP']))
//         $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
//     else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
//         $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
//     else if(isset($_SERVER['HTTP_X_FORWARDED']))
//         $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
//     else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
//         $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
//     else if(isset($_SERVER['HTTP_FORWARDED']))
//         $ipaddress = $_SERVER['HTTP_FORWARDED'];
//     else if(isset($_SERVER['REMOTE_ADDR']))
//         $ipaddress = $_SERVER['REMOTE_ADDR'];
//     else
//         $ipaddress = 'UNKNOWN';
//     return $ipaddress;
// }

// echo get_client_ip();

//case 1 
// echo "Case 1 round off after calculation all 3 upto 2 digit(on final values)\n";

// $gst_per    =  7.00;
// $sub_taotal = 832750.07;

/*$gst_amt_case1      = ($sub_taotal*$gst_per)/100;  
$amount_due_case1   = $sub_taotal + $gst_amt_case1;

echo 'sub_total_case1 '. round($sub_taotal,2)."\n";
echo 'gst_amt_case1 '. round($gst_amt_case1,2)."\n";
echo 'amount_due_case1 '. round($amount_due_case1,2)."\n";

echo "\n\n";
echo "Case 2 number_format after calculation all 3 upto 2 digit(on final values)\n";

$gst_amt_case2      = ($sub_taotal*$gst_per)/100;  
$amount_due_case2   = $sub_taotal + $gst_amt_case2;

echo 'sub_total_case2 '. number_format($sub_taotal,2)."\n";
echo 'gst_amt_case2 '. number_format($gst_amt_case2,2)."\n";
echo 'amount_due_case2 '. number_format($amount_due_case2,2)."\n";

echo "\n\n";
echo "Case 3 round gst calculation up to 3 digit during gst calculation and round amount during round(subtotal+gst_amt,2)\n";

$gst_amt_case3      = round(($sub_taotal*$gst_per)/100,3);  
$amount_due_case3   = round($sub_taotal + $gst_amt_case3,2);

echo 'sub_total_case3 '. $sub_taotal."\n";
echo 'gst_amt_case3 with number format 2 decimal '. number_format($gst_amt_case3,2)."\n";
echo 'gst_amt_case3 without number format '. $gst_amt_case3."\n";
echo 'amount_due_case3 '. $amount_due_case3."\n";

echo "\n\n";
echo "Case 4 number format(gst_calculation,2) and  number format(subtotal+gst_amt,2)\n";

$gst_amt_case4      = ($sub_taotal*$gst_per)/100;  
// $gst_amt_case4      = number_format($gst_amt_case4,2);  
$amount_due_case4   = $sub_taotal + $gst_amt_case4;

echo 'sub_total_case4 '. $sub_taotal."\n";
echo 'gst_amt_case4 '. number_format($gst_amt_case4)."\n";
echo 'amount_due_case4 '. number_format($amount_due_case4,2)."\n";

echo "\n\n";
echo "Case 5 round gst calculation up to 3 digit during gst calculation and round amount during round(subtotal+gst_amt,2)\n";*/

// $gst_amt_case5      = ($sub_taotal*$gst_per)/100;  
// $amount_due_case5   = $sub_taotal + $gst_amt_case5;
// echo "Sub Total :".$sub_taotal."\n";
// echo "GST Total :".$gst_amt_case5."\n";
/*echo "1. ".$amount_due_case5."\n";
echo "2. ".round($amount_due_case5,2)."\n";
echo "2.1 ".number_format($amount_due_case5,2)."\n";
echo "2.2 ".number_format(round($amount_due_case5,3),2)."\n";
echo "---- GST start\n\n";

echo "3. ".$gst_amt_case5."\n";
echo "4. ".round($gst_amt_case5,2)."\n";
echo "4.1 ".number_format($gst_amt_case5,2)."\n";
echo "4.2 ".number_format(round($gst_amt_case5,2),2)."\n";*/

// $dueAmt = ($sub_taotal - 0.00 )+$gst_amt_case5;
// echo number_format($dueAmt, 2, '.', ',');
/*echo 'sub_total_case5 '. $sub_taotal."\n";
echo 'gst_amt_case5 with number format 2 decimal '. number_format($gst_amt_case5,2)."\n";
echo 'amount_due_case5 '. number_format($amount_due_case5,2)."\n";
*/




// Final amount SUM : 8,32,750.07257

// GST 7% :  58292.50507990001


$a1 = 832750.072;
$b1 = 58292.595;
echo "a = ".$a1."\n";
echo "b = ".$b1."\n";
echo 'res1 = '. number_format(($a1+$b1),2); 
echo "\n";
$res = bcmul($a1, $b1, 2); 
  
echo $res; 