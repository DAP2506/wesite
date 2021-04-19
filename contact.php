<?php
//varible setting
$text = $_REQUEST['text'];

//check input fields
if (empty($text)) {
    echo "Please give feedback....";
} else {
    mail("codinghubmhd@gmail.com", "Coding Hub Feedback", $text);
    echo "<script type = 'text/javascript'>alert('Your feedback send sucessfully..');
            window.history.log(-1);
            <script>";
}

?>