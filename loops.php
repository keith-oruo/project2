<h1>loops</h1>
<h4> While-loop </h4>
<?php
//While-loop

$in = 0;
while($in < 10){
    print $in . "<br>";
    $in++;
}
?>
<h4>do-while loop</h4>
<?php
//do-while loop
$s = 5;
do{
    print $s . "<br>";
    $s++;
}while($s < 15);
?>
<h4> for loop </h4>
<?php
for($f=45; $f<55; $f++){
    print $f . "<br>";
}
?>
<h4>Foreach</h4>
<?php
$months = ["January", "Febuary", "March","April","May","June","July","August","Spetember","October","November","December"];

foreach($months AS $months){
    print $months . "<br>";
}
?>

<form action=""></form>
    <select name="" id ="">
        <option value="">--Month--</option>
        <?php
        foreach($months AS $month){
            print "<option value=''>$month</option>";
        }
        ?>
    </select>
    <select name="" id ="">
    <option value="">--Year--</option>
        <?php
        //while loop
        $y= 2014;
        while($y < 2030){
            print "<option value =''>$y</option>";
            $y++;
        }
        ?>
    </select>