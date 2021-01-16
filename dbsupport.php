<?php
require_once('config.php');

function execute($sql)
{
    $conn = mysqli_connect(Host, Username, Password, database);
    
    mysqli_query($conn, $sql);

    mysqli_close($conn);
}
// sql_information
function executeresult_information($sql_information){
    $conn = mysqli_connect(Host, Username, Password, database);

    $resultset = mysqli_query($conn, $sql_information);
    $list =[];
    while($row = mysqli_fetch_array($resultset, 1)){
        $list[] = $row;
    }
    mysqli_close($conn);
    return $list;
}
//sql_skill 
function executeresult_skill($sql_skill){
    $conn = mysqli_connect(Host, Username, Password, database);

    $resultset = mysqli_query($conn, $sql_skill);
    $list =[];
    while($row = mysqli_fetch_array($resultset, 1)){
        $list[] = $row;
    }
    mysqli_close($conn);
    return $list;
}
//sql_interests 
function executeresult_interests($sql_interests){
    $conn = mysqli_connect(Host, Username, Password, database);

    $resultset = mysqli_query($conn, $sql_interests);
    $list =[];
    while($row = mysqli_fetch_array($resultset, 1)){
        $list[] = $row;
    }
    mysqli_close($conn);
    return $list;
}
// sql experience
function executeresult_experience($sql_experience){
    $conn = mysqli_connect(Host, Username, Password, database);

    $resultset = mysqli_query($conn, $sql_experience);
    $list =[];
    while($row = mysqli_fetch_array($resultset, 1)){
        $list[] = $row;
    }
    mysqli_close($conn);
    return $list;
}
// sql education
function executeresult_education($sql_education){
    $conn = mysqli_connect(Host, Username, Password, database);

    $resultset = mysqli_query($conn, $sql_education);
    $list =[];
    while($row = mysqli_fetch_array($resultset, 1)){
        $list[] = $row;
    }
    mysqli_close($conn);
    return $list;
}
// sql img
function executeresult_img($sql_img){
    $conn = mysqli_connect(Host, Username, Password, database);

    $resultset = mysqli_query($conn, $sql_img);
    $list =[];
    while($row = mysqli_fetch_array($resultset, 1)){
        $list[] = $row;
    }
    mysqli_close($conn);
    return $list;
}
?>