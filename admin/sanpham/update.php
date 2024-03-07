<?php
if (is_array($sanpham)) {
    # code...
    extract($sanpham);
}
$hinhpath = "upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height = '80px'>";
} else {
    $hinh = "No Photo";
}
?>
<div class="row">
    <div class="row frmtitle">
        <h1>Cập nhật loại hàng</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <div class="row mb10">
                    <select name="iddm">
                        <option value="0" selected>Tất cả</option>
                        <?php foreach ($listdm as $dm): ?>
                            <?php $selected = ($iddm == $dm['id']) ? 'selected' : ''; ?>
                            <option value="<?= $dm['id'] ?>" <?= $selected ?>>
                                <?= $dm['name'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                </div>
                <div class="row mb10">
                    <label for="tensp">Tên sản phẩm</label>
                    <input type="text" name="tensp" value="<?= $name ?>">
                </div>
                <div class="row mb10">
                    <label for="giasp">Giá sản phẩm</label>
                    <input type="text" name="giasp" value="<?= $price ?>">
                </div>
                <div class="row mb10">
                    <label for="hinh">Hình</label>
                    <input type="file" name="hinh" id="">
                    <?= $hinh ?>
                </div>
                <div class="row mb10">
                    <label for="mota">Mô tả</label><br>
                    <textarea name="mota" id="" cols="30" rows="10"><?= $mota ?></textarea>
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="submit" name="capnhat" value="Cập nhật">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>

                </div>
                <?php
                if (isset($thongbao) && ($thongbao != ""))
                    echo $thongbao;
                ?>

        </form>
    </div>
</div>


</div>