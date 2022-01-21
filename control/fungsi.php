<?php
function url_dasar(){
    //$_SERVER['SERVER_NAME'] : alamat website, misal abc.com
    //$_SERVER['SCRIPT_NAME'] : directory website, abc.com/bog/$_SERVER['SCRIPT_NAME'] : blog
    $url_dasar = "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']);
    return $url_dasar;
}

function ambil_subtitle($id_tulisan){
    global $mysqli;
    $sql1 = "select * from mainpage where id = '$id_tulisan'";
    $q1 = mysqli_query($mysqli, $sql1);
    $r1   = mysqli_fetch_array($q1);
    $text = $r1['subtitle'];
    return $text;
}

function ambil_title($id_tulisan){
    global $mysqli;
    $sql1 = "select * from mainpage where id = '$id_tulisan'";
    $q1 = mysqli_query($mysqli, $sql1);
    $r1   = mysqli_fetch_array($q1);
    $text = $r1['title'];
    return $text;
}

function ambil_content($id_tulisan){
    global $mysqli;
    $sql1 = "select * from mainpage where id = '$id_tulisan'";
    $q1 = mysqli_query($mysqli, $sql1);
    $r1   = mysqli_fetch_array($q1);
    $text = $r1['content'];
    return $text;
}

function bestseller_picture($id){
    global $mysqli;
    $sql1 = "select * from bestseller where id = '$id'";
    $q1 = mysqli_query($mysqli, $sql1);
    $r1   = mysqli_fetch_array($q1);
    $picture = $r1['picture'];

    if($picture){
        return $picture;
    }else{
        return 'blank-profile-picture-973460_1280.png';
    }
}

function featured_picture($id){
    global $mysqli;
    $sql1 = "select * from featured where id = '$id'";
    $q1 = mysqli_query($mysqli, $sql1);
    $r1   = mysqli_fetch_array($q1);
    $picture = $r1['picture'];

    if($picture){
        return $picture;
    }else{
        return 'blank-profile-picture-973460_1280.png';
    }
}