<?php 
//echo "we are on footer page..";
    echo "we are";
    $name = $_REQUEST['name'];
    $mailForm = $_REQUEST['email'];

    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];

    $mailTo = "keryaritsolutions@gmail.com";
    $headers = "From: ".$mailForm;
   
    $txt = "You Have Receive New Mail.\n Name : ".$name.".\n Email : ".$mailForm. ".\n Phone : ".$subject. ".\n Message : ".$message;

    mail($mailTo,"New inquiry from: $name", $txt, $headers);
   //header("location:index.html");
   
   //$htmlContent = file_get_contents("mail.html");
   
   $body =  "Thank You Mr/Mrs : ".$name. " \n We contact You soon...";
  
   
   
   mail($mailForm,"Thank you very much . ",$body,"From:noreply@hoffae.com")

?>




<script language="javascript">
    window.open("index.html","_self");
</script>