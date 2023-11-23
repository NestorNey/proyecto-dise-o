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

function _setList($listName, $userList, $userName){
    global $conection;

    $userList = json_encode($userList);

    $sql = "UPDATE users
    SET $listName = '$userList'
    WHERE UserName = '$userName';";

    $query = mysqli_query($conection, $sql);

    if(!$query){
        echo "ERROR";
    }
}

?>