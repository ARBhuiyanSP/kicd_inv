<?php

/**********************LOGIN HISTORY FUNCTION ********************************


process_log_information FUNCTION will use for storing
user login information.

Parameter list:

# user_id
# log_time in timestamp format
# log_time (login or logout)
# log_date (2022-07-14)


process_log_information function paframer data must be in pbject format



*/

function process_log_information($data){

    $table       =   'user_login_history';
    $user_id     =   $data->user_id;
    $log_time    =   $data->log_time;
    $log_type    =   $data->log_type;
    $log_date    =   $data->log_date;



    $dataParam      =   [
        'user_id'          =>  $user_id,
        'log_time'         =>  $log_time,
        'log_type'         =>  $log_type,
        'log_date'         =>  $log_date,
        'login_ip'         =>  login_ip(),
    ];
    saveData($table, $dataParam);

}


// the login_ip function will get the user IP Address
function login_ip(){
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';    
    return $ipaddress;
 }




?>