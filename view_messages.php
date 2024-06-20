<?php include_once("Templates/nav.php"); ?>
<?php require_once("Templates/nav.php"); 
require_once ("db_connect.php");?>
<link rel="stylesheet" href="css/style.css">
<div class="row">
<div class="banner">
            <h1>Update message</h1> 
        </div>
        <div class="row">
        <div class="content">
            <h1>Update message</h1>
                <table>
                    <thead>
                    <tr>
                        <th colspan="2">Sender Name</th>
                        <th>Sender Email</td>
                        <th>Subject Line</th>
                        <th>Time</th>
                        <th>Acion</th>
                    </tr>
</thead>
<tbody>
       <?php $select_msg = "SELECT * FROM messages ORDER BY datecreated DESC";
$sel_msg_res = $conn->query($select_msg);
$en = 0;
if ($sel_msg_res->num_rows > 0) {
  // output data of each row
  while($sel_msg_row= $sel_msg_res->fetch_assoc()) {
$en++;
?>
<tr>
<td><?php print $en; ?>.</td>
<td><?php print $sel_msg_row["sender_name"]; ?>.</td>
<td><?php print $sel_msg_row["sender_email"]; ?>.</td>
<td><?php print "<strong>" .$sel_msg_row["subject_line"]. '</strong>-'.  substr($sel_msg_row["text_message"],0 ,20). '...'; ?>.</td>
<td><?php print date("d-M-Y H:i",strtotime($sel_msg_row["datecreated"])); ?>.</td>
<td> <a href =""<?php print $sel_msg_row["messageId"];?>">Edit"</a> ] [Del]
</tr>

<?php
      
  }
} else {
  echo "0 results";
}
?>
</tbody>
<thead>
                    <tr>
                        <th colspan="2">Sender Name</th>
                        <th>Sender Email</td>
                        <th>Subject Line</th>
                        <th>Time</th>
                        <th>Acion</th>
                    </tr>
</thead>
                </table>
        </div>
        <?php include_once("Templates/sidebar.php"); ?>
</div>
 <?php include_once("Templates/footer.php"); ?>
