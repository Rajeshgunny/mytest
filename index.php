<?php



//require_once('/usr/local/mails/Sendsms.php');

$smsMobileNo = "9676266294";
$smsUserName = "svrtravels@abhibus.com";
$smsPassword = "svrtravels";
$smsFromName = "SVRTVR";

$TicketNo="SVRDEMO1234";
$Source="Hyderabad";
$Destination="Goa";
$service_number="SVR123";
$gblSelectedSeats="1,2";
$Journey_Date="2022-06-20";
$Boarding_Point="Kukatpally 09:30 PM";
$Enquiry_PhoneNo="9676266294";
$smsMSG = "TKT NO ".$TicketNo.",From-".$Source." To-".$Destination." Service Number-".$service_number." (Seats-".$gblSelectedSeats.") DOJ-".$Journey_Date.", Boardingpoint -".$Boarding_Point.".Ph:".$Enquiry_PhoneNo.". Liquor /Alcohol bottles are strictly not allowed in the bus.WWW.SVRTRAVELS.COM";			    
$templateId="1707165545053325704";						 
//SendSMS($smsUserName,$smsPassword,$smsFromName,$smsMobileNo,$smsMSG,$templateId);



//$selDate="Sat Jun 04 2022 00:00:00 GMT+0530 (India Standard Time)";

 //$startDate=date('Y-m-d', strtotime($selDate));
 
 //$myDateTime = DateTime::createFromFormat('Y-m-d', $selDate);
//$newDateString = $myDateTime->format('Y-m-d');
 
 //echo  $startDate;exit;
 
 
 $data='{"payment_info":[{"sNo":"1","code":"376","payAmt":"500","status":"Active","oprName":"demo","invoiceNum":"AB/2014/MAR/1043","transRefNo":"demo"},{"sNo":"8","code":"376","payAmt":"500","status":"Active","oprName":"demo","invoiceNum":"AB/2014/MAR/1043","transRefNo":"demo"},{"sNo":"15","code":"376","payAmt":"500","status":"Active","oprName":"demo","invoiceNum":"AB/2014/MAR/1043","transRefNo":"demo"}]}';
 
 
 $testing=json_decode($data,true);
 
 foreach($testing['payment_info'] as $key => $val){
	 print_r($key);
	 }exit;
 
 for($i=0;$i<count($testing['payment_info']);$i++){
	echo "<pre>"; print_r($testing['payment_info'][$i]);
 }exit;
 
 
// echo "<pre>";print_r($testing['payment_info']);exit;
 
 
 
$curr_timestamp = date('Y-m-d H:i:s');


// Prints something like: Monday
//echo $curr_timestamp;exit;

 $yearStartDate=date('Y').'-01-01';
 $yearEndDate=date('Y').'-12-31';
 
 echo $yearStartDate;
 echo "<br/>";
 echo $yearEndDate;//exit;
 
  echo "<br/>";
  $date = date('Y-m-d');
  $newdate = date("Y-m-d",strtotime( '-1 year , +1 month', strtotime($date) )) ;
  echo $newdate;exit;
 
 
 $yearStartDate=date('Y').'-01-01';
 $yearEndDate=date('Y').'-12-31';
 
 echo $yearStartDate;
 echo "<br/>";
 echo $yearEndDate;exit;
 
 
$first_day_this_month = date('Y-m-01');
$last_day_this_month  = date('Y-m-t');

echo  $first_day_this_month;
echo "<br/>";
echo  $last_day_this_month;

exit;

echo "<br/>";
//Year start and end dates
/*$year = date('Y');
$date = Carbon::create($year, 12, 31, 0, 0, 0);
$date->toDateTimeString($year, 12, 31, 0, 0, 0);  // 2016-12-31 00:00:00
$date->format('l'); // Saturday

$date2 = Carbon::create($year, 1, 1, 0, 0, 0);
$date2->toDateTimeString($year, 1, 1, 0, 0, 0);  // 2016-01-01 00:00:00
$date2->format('l'); // Firday*/



$b="ALG 003A";

$string = preg_replace('/\s+/', '', $b);

//echo $string;//exit;
//echo "<pre>";
//echo "test";//exit;
$a=array("L1","L2");
$b=array("L2","L1");
//echo "<pre>";
$c=array_diff($a,$b);



//print_r($a);exit;

?>

<script>
var y = 5;  
let xy = 10;  
const x = 20;       // Allowed

{
	var y=40;
  const x = 3;   // Allowed
  console.log(x);
  let xy = 30; 
  console.log(xy);
}


{
  const x = 4;   // Allowed
  console.log(x);
}


  console.log(xy);return false;
let z = xy + y; 

 console.log(z);
 
 
 let x = myFunction(4, 3);   // Function is called, return value will end up in x

function myFunction(a, b) {
  return a * b;             // Function returns the product of a and b
}
 console.log(x);
 
 const person = {
  firstName: "P John",
  lastName : "Doe Text",
  id       : 5566,
  fullName : function() {
    return this.firstName + " " + this.lastName;
  }
};

console.log(person.fullName())

//text = "Hello".concat(" ", "World!");


//let text = "5";
//let padded = text.padStart(4,"0");

let text = `Hello World!`;

//console.log(text)

const cal=(a,b)=>{ return a + b; }

//console.log(cal(20,4));

const cars = ["Saab", "Volvo", "BMW"];

//console.log(cars);

"use strict";

 x = 3.14;
 x = {p1:10, p2:20};  
console.log(x);

eval ("var p = 2");
alert (p);  

a = 5;
b = 6;
c = a + b;
console.log(c);

let array: number[] = [1, 2, 3];

//let value = array;

console.log(array);

</script>


<?php
//echo strlen("https://m368j.app.goo.gl/nqsEbA9bqAbE2wYJ9");exit;


/*while(true){
	//echo "--Cron run at: ".date("10:56:44")."-------";
	echo "--Cron run at: ".date("H:i:s")."-------";
	echo "--Next Cron will run at: ".date("H:i:s", time()+300);
	echo "\n";

	//$ch = curl_init("https://www.abhibus.com/cron/operatorservicelogs/serviceChangeDataInsert");
	//$ch = curl_init("https://www.abhibus.com/cron/operatorservicelogs/getOperatorsServiceLogs");
	//$ch = curl_init("http://demo.abhibus.com/edge/Cron_methods/notificationCronData");
	//$ch = curl_init("http://localhost/edge/Cron_methods/notificationCronData");
	//curl_exec($ch);
	//curl_close($ch);
	
	sleep(300);
}*/
//php /var/www/index.php

//php /var/www/html/Insertservicelog_cron.php
//php /var/www/html/getServicelogs.php

//exit;

$date = "2022-05-17 11:00:00";
$date = strtotime($date);
//echo date('H:i:s', $date);


//phpinfo();
$hdnjourneydate=date('Y-m-d');
$hdnjourneydate = date('Y-m-d', strtotime($hdnjourneydate . ' -1 day'));
echo $hdnjourneydate;exit;

$time1="";

$time2="";


//$hourdiff = round((strtotime($time1) - strtotime($time2))/3600, 1);

//echo $hourdiff;exit;

//$start = '17:00:00';
$start = '08:30:00';
//$end = '08:30:00';
$end = '17:00:00';
//echo $start;exit;
$hours_dayadd = $start - $end ;
if($hours_dayadd>0){
	$jendDate="2022-05-12".' '.$end;
}else{
	$jendDate="2022-05-11".' '.$end;
}
//echo $jendDate;exit;

$to_time = strtotime("2022-05-12 08:30:00");
$from_time = strtotime("2022-05-11 17:00:00");
//echo round(abs($to_time - $from_time) / 60,2). " minute";

$expire_date = "2022-05-26 14:45:00"; // time that you want the link to expire 
//echo $now = date("Y-m-d H:i:s"); // your current time.

if ($now>$expire_date) {

   // echo " Your link is expired";
}
else
{
   //echo " link is still alive";
}

//exit;


$CurrentDate=date("Y-m-d");
    //$FutureDays = date($CurrentDate, strtotime("+30 days"));  
    
$FutureDays = date('Y-m-d', strtotime("+30 days"));
    $EndDate="2022-05-12";
    //$EndDate=$result["End_Date"];
						if($EndDate>=$FutureDays){
							$EndDate=$FutureDays;
						}
   // echo $EndDate;
?>
