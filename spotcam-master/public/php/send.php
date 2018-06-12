<?php
    if(isset($_POST['email']) && !empty($_POST['email'])){
        $connection = mysql_connect("spotcamemaildb.db.10389122.hostedresource.com", "spotcamemaildb", "Magentic1!") or die(mysql_error()); // Connect to database server(localhost) with username and password.
        mysql_select_db("spotcamemaildb") or die(mysql_error()); // Select registration database.

        $email = mysql_real_escape_string($_POST['email']);
        
        //check if email alread exist
        $sql = "SELECT * FROM emails WHERE email ='".$email."'"; 
        $result = mysql_query($sql) or die(mysql_error());

        if(mysql_num_rows($result) > 0) {
            echo "<p>Email already exist.</p>";
        } else{
            mysql_query("INSERT INTO emails (email) VALUES('". $email ."')") or die(mysql_error());  
            echo "<p>Thanks, we will be in touch!</p>";
        }
        mysql_close($connection);
        $to      = 'doyle.d@apsolute-tt.com'; //Send email to our user
        $subject = 'SpotCam signup'; // Give the email a subject 
        $message = $email .' signed up'; //Message!
        $headers = 'From:info@myspotcams.com' . "\r\n"; // Set from headers
        mail($to, $subject, $message, $headers); // Send the email
    } else{
        echo "<p>Something went wrong!</p>";
    }
?>