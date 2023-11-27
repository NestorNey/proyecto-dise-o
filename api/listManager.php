<?php
require 'conection.php';

function addSongToList($list, $song, $userName){
    $userList = json_decode(getList($list, $userName)[0], true);

    if(empty($userList)) {
        array_unshift($userList, $song);
    } else {
        $songIndex = array_search($song['ID'], array_column($userList, 'ID'));
        if ($songIndex !== false) {
            unset($userList[$songIndex]);
        }

        array_unshift($userList, $song);

        if ($list === 'UltimasEscuchadas') {
            if (count($userList) > 20) {
                array_pop($userList);
            }
        }
    }

    _setList($list, $userList, $userName);
}


function getList($list, $userName){
    global $conection;

    $sql = "SELECT $list FROM users WHERE UserName='$userName'";

    $query = mysqli_query($conection, $sql);

    return mysqli_fetch_array($query);
}

function _setList($listName, $userList, $userName) {
    global $conection;

    $userList = json_encode($userList);

    $sql = "UPDATE users SET $listName = ? WHERE UserName = ?";
    
    // Preparar la consulta
    $stmt = mysqli_prepare($conection, $sql);

    // Vincular los parámetros
    mysqli_stmt_bind_param($stmt, "ss", $userList, $userName);

    // Ejecutar la consulta
    $query = mysqli_stmt_execute($stmt);

    if(!$query){
        echo "ERROR";
    }
}

?>