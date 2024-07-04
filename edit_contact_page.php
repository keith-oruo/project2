
    <link rel="stylesheet" href="css/WebsiteStyles.css">
<?php
require_once ("websitedb_connect.php"); 
include_once("website_templates/links.php"); 

// Handle sending a message
if(isset($_POST["send_message"])){
    $fn = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $mail = mysqli_real_escape_string($conn, $_POST["email_address"]);
    $subject = mysqli_real_escape_string($conn, $_POST["subject_line"]);
    $message = mysqli_real_escape_string($conn, $_POST["client_message"]);

    $insert_message = "INSERT INTO messages (sender_name, sender_email, subject_line, text_message) VALUES ('$fn', '$mail', '$subject', '$message')";
    if ($conn->query($insert_message) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insert_message . "<br>" . $conn->error;
    }
}

// Handle deleting a message
if(isset($_GET["DelId"])){
    $DelId = mysqli_real_escape_string($conn, $_GET["DelId"]);
    $del_mes = "DELETE FROM messages WHERE messageId='$DelId' LIMIT 1";
    if ($conn->query($del_mes) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $del_mes . "<br>" . $conn->error;
    }
}

// Fetch message for editing
$messageId = isset($_GET["messageId"]) ? $_GET["messageId"] : null;
if ($messageId) {
    $spot_msg = "SELECT * FROM `messages` WHERE messageId = '$messageId' LIMIT 1";
    $spot_msg_res = $conn->query($spot_msg);
    $spot_msg_row = $spot_msg_res->fetch_assoc();
}

// Handle updating a message
if(isset($_POST["update_message"])){
    $fn = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $mail = mysqli_real_escape_string($conn, $_POST["email_address"]);
    $subject = mysqli_real_escape_string($conn, $_POST["subject_line"]);
    $message = mysqli_real_escape_string($conn, $_POST["client_message"]);
    $messageId = mysqli_real_escape_string($conn, $_POST["messageId"]);

    $update_message = "UPDATE messages SET sender_name='$fn', sender_email='$mail', subject_line='$subject', text_message='$message' WHERE messageId='$messageId' LIMIT 1";
    if ($conn->query($update_message) === TRUE) {
        header("Location: contact.php");
        exit();
    } else {
        echo "Error: " . $update_message . "<br>" . $conn->error;
    }
}
?>
<div class="banner">
    <h1>Contact Us</h1>
</div>

<div class="content">
    <h2>Contact TechSolutions</h2>
    <p style="color: brown;">Our team is here to assist you with any inquiries or support needs you may have. Whether you're interested in our services, have a technical question, or need assistance with a product, we're just a message or phone call away.</p>
    
    <!-- Form to send a new message -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contacts_form">
        <label for="fn">Fullname:</label><br>
        <input type="text" id="fn" placeholder="Fullname" name="fullname" required value="<?php echo isset($spot_msg_row) ? $spot_msg_row["sender_name"] : ''; ?>"><br><br>

        <label for="em">Email Address:</label><br>
        <input type="email" id="em" placeholder="Email Address" name="email_address" required value="<?php echo isset($spot_msg_row) ? $spot_msg_row["sender_email"] : ''; ?>"><br><br>

        <label for="sb">Subject:</label><br>
        <select name="subject_line" id="sb" required>
            <option value="Email Support" <?php echo (isset($spot_msg_row) && $spot_msg_row["subject_line"] == 'Email Support') ? 'selected' : ''; ?>>Email Support</option>
            <option value="eLearning Support" <?php echo (isset($spot_msg_row) && $spot_msg_row["subject_line"] == 'eLearning Support') ? 'selected' : ''; ?>>Hardware Support</option>
            <option value="AMS Support" <?php echo (isset($spot_msg_row) && $spot_msg_row["subject_line"] == 'AMS Support') ? 'selected' : ''; ?>>Software Support</option>
        </select><br><br>

        <label for="msg">Message:</label><br>
        <textarea name="client_message" id="msg" cols="30" rows="5" required><?php echo isset($spot_msg_row) ? $spot_msg_row["text_message"] : ''; ?></textarea><br><br>
        
        <input type="submit" name="<?php echo isset($spot_msg_row) ? 'update_message' : 'send_message'; ?>" value="<?php echo isset($spot_msg_row) ? 'Update Message' : 'Send Message'; ?>">
        <?php if (isset($spot_msg_row)) { ?>
            <input type="hidden" name="messageId" value="<?php echo $spot_msg_row["messageId"]; ?>">
        <?php } ?>
    </form>
    
    <!-- Table to display messages -->
    <h1>Messages</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Sender Name</th>
                <th>Sender Email</th>
                <th>Subject Line</th>
                <th>Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $select_msg = "SELECT * FROM `messages` ORDER BY datecreated DESC";
            $sel_msg_res = $conn->query($select_msg);
            $en = 0;
            if ($sel_msg_res->num_rows > 0) {
                while($sel_msg_row = $sel_msg_res->fetch_assoc()) {
                    $en++;
                    ?>
                    <tr>
                        <td><?php echo $en; ?>.</td>
                        <td><?php echo $sel_msg_row["sender_name"]; ?></td>
                        <td><?php echo $sel_msg_row["sender_email"]; ?></td>
                        <td><?php echo "<strong>" . $sel_msg_row["subject_line"] .'</strong> - ' . substr($sel_msg_row["text_message"], 0, 20) . '...'; ?></td>
                        <td><?php echo date("d-M-Y H:i", strtotime($sel_msg_row["datecreated"])); ?></td>
                        <td>
                            [ <a href="contact.php?messageId=<?php echo $sel_msg_row["messageId"]; ?>">Edit</a> ] 
                            [ <a href="contact.php?DelId=<?php echo $sel_msg_row["messageId"]; ?>">Del</a> ]
                        </td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='6'>No results found</td></tr>";
            }
        ?>
        </tbody>
    </table>
</div>

<?php include_once("website_templates/footer.php"); ?>

