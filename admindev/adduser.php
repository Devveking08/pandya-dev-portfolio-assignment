<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'pandya_dev_portfolio_db';

    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    $errors = array();

    $f_name = mysqli_real_escape_string($connection, $_POST['f_name']);
    if ($f_name == NULL) {
        $errors[] = "First name field is empty.";
    $Subject = mysqli_real_escape_string($connection, $_POST['Subject']);
    if ($Subject == NULL) {
        $errors[] = "Last name field is empty.";
    }

    }
    
    $e_mail = $_POST['e_mail'];
    if ($e_mail == NULL) {
        $errors[] = "Email field is empty.";
    }

    if (!filter_var($e_mail, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "\"" . $e_mail . "\" is not a valid email address.";
    }
    
    $comments = mysqli_real_escape_string($connection, $_POST['comments']);
    if ($comments == NULL) {
        $errors[] = "comments field is empty.";
    }

    $errcount = count($errors);
    if ($errcount > 0) {
        $errmsg = array();
        for ($i = 0; $i < $errcount; $i++) {
            $errmsg[] = $errors[$i];
        }
        echo json_encode(array("errors" => $errmsg));
    } else {
        $querystring = "INSERT INTO contact_info(contact_id,f_name,e_mail,Subject,comments ) VALUES(NULL,'" . $f_name . "','" . $e_mail . "','" . $Subject . "','" . $comments . "')";
        $qpartner = mysqli_query($connection, $querystring);
        echo json_encode(array("message" => "Form submitted. Thank you for your interest!"));
    }
?>