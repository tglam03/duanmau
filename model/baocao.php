<?php
function loadAll_baocao(){
    $sql = "SELECT bc.* , dm.ten_danhmuc FROM baocao as bc
            INNER JOIN danhmuctintuc as dm ON dm.id_danhmuc = bc.id_danhmuc";
    $list_bc = pdo_query($sql);
    return $list_bc;
}

function insert_baocao($tieu_de, $noi_dung, $filename, $baibaocao, $iddm){
    $sql = "INSERT INTO baocao(tieude,noidung,hinhanh,baibaocao,id_danhmuc)
                VALUES ('$tieu_de' , '$noi_dung' ,   '$filename' , '$baibaocao', '$iddm')";
    pdo_execute($sql);
}

function loadone_baocao($id)
{
    $sql = "SELECT * FROM baocao WHERE id = '$id' ";
    $tintuc = pdo_query_one($sql);
    return $tintuc;
}

//update tintuc
function update_baocao($id, $tieu_de ,$noi_dung, $filename,$baibaocao, $iddm){
    if($filename != ""){
        $sql = "UPDATE baocao 
                        SET id_danhmuc = '$iddm', tieude = '$tieu_de' , noidung = '$noi_dung', hinhanh = '$filename' , baibaocao = '$baibaocao'
                    Where id = " . $id ;
    }else{
        $sql = "UPDATE baocao 
                    SET id_danhmuc = '$iddm', tieude = '$tieu_de' , noidung = '$noi_dung' ,baibaocao = '$baibaocao'
                    Where id = " . $id ;
    }
    pdo_execute($sql);
}

function delete_baocao($id){
    $sql = "DELETE FROM baocao WHERE id = " . $id;
    pdo_execute($sql);
}
?>