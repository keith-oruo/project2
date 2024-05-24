<?php
// Indexed or numeric array
$colors = ["Black","Green","Yellow"];
print_r ($colors);

?>
<br>
<?php
$user = array("Alex","Peter","Ann");
print $user[2];
?>
<pre>
    <?php print_r($user); ?>
</pre>
<?php
// Associative array
$user_data = [
    "fullname" => "Alex Okama",
    "email" => "AOkama@gamil.com",
    "phone" => "+9239074023"
];
?>
<pre>
    <?php print $user_data["email"]; ?>
</pre>
<?php
//Multidimensional Arrays
$user_details = [
    "Director" => array( 
    "fullname" => "Alex Okama",
    "email" => "AOkama@gamil.com",
    "phone" => [
        "Home" => "+842742704379",
        "Work" => "+819740127417",
        "Mobile" => "0930497109109",
    ]
),


    "Manager" => array( 
    "fullname" => "Peter Okama",
    "email" => "POkama@gamil.com",
    "phone" => [
    "Home" => "+842742704379",
    "Work" => "+819740127417",
    "Mobile" => "0930497109109",
    ]
),


    "Secretary" => array( 
    "fullname" => "Ann Okama",
    "email" => "AOkama@gamil.com",
    "phone" => [
    "Home" => "+842742704379",
    "Work" => "+819740127417",
    "Mobile" => "0930497109109",
    ] 
)
];
print $user_details
["Secretary"] ["phone"]
["Work"];
?>
<pre>
    <?php print_r($user_details); ?>
</pre>
