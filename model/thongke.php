<?php  
 function loadAll_thongke(){
    $sql = "SELECT dm.id, dm.name,COUNT(*)'soluong', MIN(price) 'gia_min', MAX(price)'gia_max',
        AVG(price) 'gia_avg' FROM danhmuc dm JOIN sanpham sp ON dm.id = sp.iddm GROUP BY dm.id, dm.name ORDER BY soluong DESC ";
        $listtk=pdo_query($sql);
        return $listtk;
 }
?>