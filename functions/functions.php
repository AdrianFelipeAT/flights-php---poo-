<?php
 
// Create a custom error function
function on_error($error_no, $error, $filename, $linenumber)
{
    // get today date, saving logs for each day
    $today = date("Y-m-d");
 
    // Creating array for possible errors
    $error_levels = array(
        "1" => "Fatal error",
        "2" => "Warning",
        "8" => "Error",
        "1024" => "Custom error"
    );
     
    // Getting name of error by error level
    $str = $error_levels[$error_no] . ": ";
 
    // Display file name where error occurred
    $str .= $error . " in " . $filename;
 
    // Show line number which causes error
    $str .= " at " . $linenumber;
 
    // Moving to next line
    $str .= "\n";
 
    // Display error in browser
    // if you do not want to show errors to user,
    // then you can skip this line
    echo $str;
 
    // save the $str value in file
    file_put_contents("../searchflights/logs/test" . $today . ".txt", $str, FILE_APPEND);
}
 
?>