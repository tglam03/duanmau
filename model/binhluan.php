<?php 
function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan)
{
    $format_ngyabinhluan = date('Y-m-d H:i:s', strtotime($ngaybinhluan));
    $sql = "insert into binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$format_ngyabinhluan')";
    pdo_execute($sql);
}

function loadAll_binhluan($idpro)
{
    $sql = "select * from binhluan where 1"; 
    if ($idpro>0) $sql .= " and idpro ='".$idpro."'";
    $sql.= " order by id desc";
    $listbl = pdo_query($sql);
    return $listbl;

}

function delete_binhluan($id)
{
    $sql = "delete from binhluan where id=" . $id;
    pdo_execute($sql);
}

?>