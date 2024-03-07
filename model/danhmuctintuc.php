<?php
// Hàm lấy toàn bộ dự liệu dmtintuc
function loadall_dmkhoahoc()
{
    $sql = "SELECT * FROM danhmuctintuc";
    $list_dmtintuc = pdo_query($sql);
    return $list_dmtintuc;
}

function insert_dmtintuc($ten_danhmuc)
{
    $sql = "INSERT INTO danhmuctintuc(ten_danhmuc) values('$ten_danhmuc')";
    pdo_execute($sql);
}

function delete_dmtintuc($id)
{
    $sql = "delete from danhmuctintuc where id_danhmuc=" . $id;
    pdo_execute($sql);
}

function loadOne_dmtintuc($id)
{
    $sql = "select * from danhmuctintuc where id_danhmuc=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_dmtintuc($id, $ten_danhmuc){
    $sql = "update danhmuctintuc set ten_danhmuc = '".$ten_danhmuc ."' where id_danhmuc=".$id;
    pdo_execute($sql);
}

?>