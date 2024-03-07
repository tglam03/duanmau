<?php
if (is_array($tintuc)) {
    # code...
    extract($tintuc);
}
$hinhpath = "upload/" . $hinh_anh;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height = '80px'>";
} else {
    $hinh = "No Photo";
}
?>

<div class="row">
    <div class="row frmtitle">
        <h1>Thêm mới tin tức</h1>
    </div>
    <div>
        <ul>
            <?php if(isset($_SESSION['error'])) {
                foreach($_SESSION['error'] as $er) {
                    ?>
                    <li>
                        <?php echo $er; ?>
                    </li>
                    <?php
                }

            } ?>
        </ul>
    </div>

    <div class="row from_content">
        <form action="index.php?act=updatetintuc" method="post" enctype="multipart/form-data">
            <label>Danh mục</label>
            <select name="iddm">
                <!--                        <option value="0" selected>Tất cả</option>-->
                <?php foreach ($listdmtintuc as $dm): ?>
                    <?php $selected = ($iddm == $dm['id_danhmuc']) ? 'selected' : ''; ?>
                    <option value="<?= $dm['id_danhmuc'] ?>" <?= $selected ?>>
                        <?= $dm['ten_danhmuc'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <div class="row mb10">
                <label for="tieu_de">Tên khóa học</label>
                <input type="text" name="ten_khoahoc" id="" value="<?= $ten_khoahoc ?>">
            </div>
            <div class="row mb10">
                <label for="noi_dung">Giá</label><br>
                <input type="text" name="gia" id="" value="<?= $gia ?>">
            </div>
            <div class="row mb10">
                <label for="hinh_anh">Hình</label>
                <input type="file" name="hinh_anh" id="">
                <?= $hinh ?>
            </div>

            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $id ?>" >
                <input type="submit" name="capnhat_tt" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listtintuc"><input type="button" value="Danh sách"></a>

            </div>
            <?php
            if(isset($thongbao) && $thongbao!=""){
                echo $thongbao;
            }
            ?>

        </form>
    </div>
</div>



