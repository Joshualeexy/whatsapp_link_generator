<?php
$error = [];
$success = [];
function showValue($PostArrayKey)
{
    $value  = $_POST[$PostArrayKey];
    echo  $value;
}

function setError(string $key = null, string $value = null)
{
    global $error;
    if (isset($value)) {
        $error[$key] = $value;
        return $error;
    }
}
function getError($arraykey)
{
    global $error;
    if (isset($error[$arraykey])) {
        return $error[$arraykey];
    }
}
function getAllErrors()
{
    global $error;
    return $error;
}


function setSuccess(string $key = null, string $value = null)
{
    global $success;
    if (isset($value)) {
        $success[$key] = $value;
        return $success;
    }
}
function getSuccess($arraykey)
{
    global $success;
    if (isset($success[$arraykey])) {
        return $success[$arraykey];
    }
}
function getAllSuccess()
{
    global $success;
    return $success;
}

function assets(string $filepath)
{
    $fullpath = APP_URL . 'assets/' . $filepath;

    echo $fullpath;
}

function includes(string $filepath)
{
    $fullpath = 'includes/' . $filepath . '.php';
    include $fullpath;
}

function controllers(string $filepath)
{
    $fullpath = 'controllers/' . $filepath . '.php';
    include $fullpath;
}



function dd($data)
{
    echo  "<pre style='background-color:black; color:green; font-weight:bolder'>";
    var_dump($data);
    echo  "<pre>";
    die();
}
function views($filepath)
{
    $filepath = str_replace('.', '/', $filepath);
    return 'views/' . $filepath . '.php';
}

function session($key)
{
    if (isset($_SESSION[$key])) {
        echo $_SESSION[$key];
    }
}

function now()
{
    return date('Y-m-d : H:i:s');
}

function Redirect($uri)
{
    header("location:$uri");
}
function jsRedirect($uri)
{
    echo "<script>window.location.href = '$uri'</script>";
}
