<?php
if (is_array($dm_tintuc)) {
    # code...
    extract($dm_tintuc);
}
?>

<div class="row">
    <div class="row frmtitle">
        <h1>Cập nhật loại tin tức</h1>
    </div>
    <div class="row frmcontent" >
        <form action="index.php?act=updatedm_tintuc" method="post">
            <div class="row mb10">
                <label for="maloai">Mã loại danh mục</label>
                <input type="text" name="maloai" id="" disabled>
            </div>
            <div class="row mb10">
                <label for="tenloai">Tên loại tin tức</label>
                <input type="text" name="ten_danhmuc" id="" value="<?= $ten_danhmuc ?>">
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $id_danhmuc?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listdm_tintuc"><input type="button" value="Danh sách"></a>

            </div>
            <?php
            if (isset($thongbao) && ($thongbao!="")) echo $thongbao;
            ?>

        </form>
    </div>
</div>


</div>