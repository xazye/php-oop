<?php
function redirect($page = false, $message = null, $message_type = null)
{
    if (is_string($page)) {
        $location = $page;
    } else {
        $location = $_SERVER['SCRIPT_NAME'];
    }
    // check for msg
    if ($message != null) {
        // set msg
        $_SESSION['message'] = $message;
    }
    // chck for type
    if ($message_type != null) {
        // set msg type
        $_SESSION['message_type'] = $message_type;
    }
    header('Location: ' . $location);
    exit;
}

function displayMessage()
{
    if (!empty($_SESSION['message'])) {
        // assign msg var
        $message = $_SESSION['message'];
        if (!empty($_SESSION['message_type'])) {

            $message_type = $_SESSION['message_type'];
            if ($message_type == 'error') {

                echo '<div class="alert alert-danger">' . $message . '</div>';
            } else {
                echo '<div class="alert alert-success">' . $message . '</div>';
            }
        }
        // unset msg
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
    } else {
        echo '';
    }
}
