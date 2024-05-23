<?php
echo "This is my first php code"; //Displaying a sentence or a string
print "<br>"; //Using HTML's <br> to break a line
print "Today is <span style ='color: #ff4856; text-transform: uppercase;'>Thursday</span>";

print "<br>"; //Using HTML's <br> to break a line
print 1999;//This is an integer or a digit
print "<br>"; //Using HTML's <br> to break a line
print "5478";//This is a string
print "<br>"; //Using HTML's <br> to break a line
print date('l');//Displaying the current day of the week
print "<br>"; //Using HTML's <br> to break a line
print date('d/F/Y', strtotime('+5 months'));
print "<br>"; //Using HTML's <br> to break a line

date_default_timezone_set("Africa/Nairobi");
print "Today is ". date('l,F jS Y H:i:s');

//Creating(declaring) a variable

$fname = "Alex";//Declaration of a variable or a string or a group of words

$yob = 1999; //Declaration of a digit or an integer

$user_yob = "1999-05-26";
print "<br>"; //Using HTML's <br> to break a line
echo $fname . " was born in " . $yob;
print "<br>"; //Using HTML's <br> to break a line
echo $fname . " was actually born on " . date('l,F jS Y', strtotime($user_yob));
print "<br>"; //Using HTML's <br> to break a line
$current_year= date('Y');
echo $current_year;
print "<br>"; //Using HTML's <br> to break a line
$age = $current_year - $yob;
print $age;
print "<br>"; //Using HTML's <br> to break a line
print $fname . " is ". $age . "years old. ";
print "<br>"; //Using HTML's <br> to break a line
print "<br>"; //Using HTML's <br> to break a line
print"45 + 96";
print "<br>"; //Using HTML's <br> to break a line
print 45 + 69;

$birthday = new DateTime($user_yob);
$today = new DateTime('today');

$interval = $birthday->diff($today);

echo'<pre>';
print_r($interval);
echo'</pre>';

print "<br>"; //Using HTML's <br> to break a line
echo $fname . " is actually " . $interval->y. "years ". $interval->m . "months and ". $interval->d. "days old";
print "<br>"; //Using HTML's <br> to break a line
$adult_age =18;
if($interval->y > $adult_age){
    print $fname . " is an adult";//event in block to be excecuted if the condition is true
}else{
    print $fname . " is not an adult";//event in block to be executed if the condition is false
}
print "<br>"; //Using HTML's <br> to break a line

$last_name = "Okama";
echo "My last name is $last_name";
print "<br>"; //Using HTML's <br> to break a line
echo 'My last name is ' . $last_name;
print "<br>"; //Using HTML's <br> to break a line
echo "Today is " .date('l');
print "<br>"; //Using HTML's <br> to break a line
$call['lname'] = "Okama";
print $call['lname'];
print "<br>"; //Using HTML's <br> to break a line
define('LNAME', 'Okama');
echo LNAME;









?>
