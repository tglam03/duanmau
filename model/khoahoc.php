<?php 
 function loadall_khoahoc(){
     $sql = "SELECT tt.* , dm.ten_danhmuc FROM khoahoc as tt
            INNER JOIN danhmuctintuc as dm ON dm.id_danhmuc = tt.id_danh_muc";
     $list_tt = pdo_query($sql);
     return $list_tt;
 }
 function insert_tintuc($ten_khoahoc, $gia, $filename, $iddm){
     $sql = "INSERT INTO khoahoc (ten_khoahoc , gia , hinh_anh , id_danh_muc)
                VALUES ('$ten_khoahoc' , '$gia' ,   '$filename' , '$iddm')";
     pdo_execute($sql);
 }


 // lấy 1 tin tức để update
function loadone_khoahoc($id)
{
    $sql = "SELECT * FROM khoahoc WHERE id = '$id' ";
    $tintuc = pdo_query_one($sql);
    return $tintuc;
 }

 //update tintuc
function update_tintuc($id,$ten_khoahoc, $gia, $filename, $iddm){
     if($filename != ""){
         $sql = "UPDATE khoahoc 
                        SET id_danh_muc = '$iddm', ten_khoahoc = '$ten_khoahoc' , gia = '$gia', hinh_anh = '$filename'
                    Where id = " . $id ;
     }else{
         $sql = "UPDATE khoahoc 
                    SET id_danh_muc = '$iddm',ten_khoahoc = '$ten_khoahoc' , gia = '$gia'
                    Where id = " . $id ;
     }
     pdo_execute($sql);
}

function delete_tintuc($id){
     $sql = "DELETE FROM khoahoc WHERE id = " . $id;
     pdo_execute($sql);
}

?>