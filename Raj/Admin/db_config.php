<?php
$hname = 'localhost';
$uname = 'root';
$pass = '';
$db = 'tbms';

$con = mysqli_connect($hname,$uname,$pass,$db);

if(!$con){
    die("Cannot Connect o Database".mysqli_connect_error());
}

function filteration($data){
    foreach($data as $key => $value){
        $value = trim($value);
        $value = stripslashes($value);       
        $value = strip_tags($value);
        $value = htmlspecialchars($value);

        $data[$key] = $value;
    }
    return $data;
}
function select($sql,$values,$datatypes)
{
    $con = $GLOBALS['con'];
    if($stmt = mysqli_prepare($con,$sql))
    {
        mysqli_stmt_bind_param($stmt,$datatypes,...$values); //splat operator ...
        if(mysqli_stmt_execute($stmt))
        {
            $res =mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else
        {
            mysqli_stmt_close($stmt);
            die("Query Cannot be executed - select");
        }
    }
    else
    {
        die("Query Cannot be prepared - select");
    }
}

function update($sql,$values,$datatypes)
{
    $con = $GLOBALS['con'];
    if($stmt = mysqli_prepare($con,$sql))
    {
        mysqli_stmt_bind_param($stmt,$datatypes,...$values); //splat operator ...
        if(mysqli_stmt_execute($stmt))
        {
            $res =mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else
        {
            mysqli_stmt_close($stmt);
            die("Query Cannot be executed - update");
        }
    }
    else
    {
        die("Query Cannot be prepared - update");
    }
}
function insert($sql,$value,$datatypes)
{
    $con = $GLOBALS['con'];
    if($stmt = mysqli_prepare($con,$sql))
    {
        mysqli_stmt_bind_param($stmt,$datatypes,...$value); //splat operator ...
        if(mysqli_stmt_execute($stmt))
        {
            $res =mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }
        else
        {
            mysqli_stmt_close($stmt);
            die("Query Cannot be executed - inserted");
        }
    }
    else
    {
        die("Query Cannot be prepared - cannot inserted");
    }
}
function delete( $sql, $values,$datatypes) {
    $con = $GLOBALS['con'];

    if($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);

        if(mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - deleted");
        }
    } else {
        die("Query cannot be prepared - cannot delete");
    }
}



