<?php
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $mail = $_POST["mail"];
        $msg = $_POST["msg"];

        $mailTo = "tal.mekler11@gmail.com";
        $headers = "From :".$mail;

        $txt = "הודעה חדשה מ:".$name.\n\n."מספר טלפון: ".$phone.ֿ\n\n."מייל: ".$mail.\n\n."תוכן הודעה: ".$msg;

        mail($mailTo, "הודעה חדשה מהאתר", $txt, $headers);
        header("Location: contact-us.html?mail-send");
    }

?>