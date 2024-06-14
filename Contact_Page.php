<?php require_once ("websitedb_connect.php"); 
include_once("website_templates/links.php"); 
if(isset($_POST["send_message"])){
    $fn = $_POST["fullname"];
    $mail = $_POST["email_address"];
    $subject = $_POST["subject_line"];
    $message = $_POST["client_message"];

    $insert_message = "INSERT INTO messages (sender_name, sender_email, subject_line, text_message) VALUES ('$fn', '$mail', '$subject', '$message')";
    if ($conn->query($insert_message) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insert_message . "<br>" . $conn->error;
    }
}
?>
    <div class = "banner">
        <h1>Contact Us</h1>
    </div>
    
        <div class="content">
            <h2>Contact TechSolutions</h2>
            <p style="color: brown;">Our team is here to assist you with any inquiries or support needs you may have. Whether you're interested in our services, have a technical question, or need assistance with a product, we're just a message or phone call away.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contacts_form">
            <label for="fn">Fullname:</label><br>
            <input type="text" id="fn" placeholder="Fullname" name="fullname" required><br><br>

            <label for="em">Email Address:</label><br>
            <input type="email" id="em" placeholder="Email Address" name="email_address" required><br><br>

            <label for="sb">Subject:</label><br>
            <select name="subject_line" id="sb" required>
                <option value="">---Select Subject---</option>
                <option value="Email Support">Email Support</option>
                <option value="eLearning Support">Hardware Support</option>
                <option value="AMS Support">Software Support</option>
            </select><br><br>

            <label for="msg">Message:</label><br>
            <textarea name="client_message" id="msg" cols="30" rows="5" required></textarea><br><br>
            <input type="submit" name="send_message" value="Send Message">
        </form>
           
        </div>
        <?php include_once("website_templates/footer.php"); ?>