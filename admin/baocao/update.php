<?php
if (is_array($baocao)) {
    # code...
    extract($baocao);
}
$hinhpath = "upload/" . $hinhanh;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height = '80px'>";
} else {
    $hinh = "No Photo";
}
?>
<div class="row">
    <div class="row frmtitle">
        <h1>Cập nhật báo cáo</h1>
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
        <form action="index.php?act=updatebaocao" method="post" enctype="multipart/form-data">
            <label>Danh mục</label>
            <select name="iddm">
                <?php
                foreach($listdmtintuc as $dm) {
                    extract($dm);
                    echo ' <option value="' . $id_danhmuc . '">' . $ten_danhmuc . '</option>';
                }

                ?>

            </select>
            <div class="row mb10">
                <label for="tieu_de">Tiêu đề</label>
                <input type="text" name="tieu_de" id="" value="<?= $tieude ?>">
            </div>
            <div class="row mb10">
                <label for="noi_dung">Nội dung</label><br>
                <textarea name="noi_dung" id="" cols="158" rows="10"><?= $noidung ?></textarea>
            </div>
            <div class="row mb10">
                <label for="noi_dung">Bài báo cáo</label><br>
                <textarea name="baibaocao" id="" cols="158" rows="10"><?= $baibaocao ?></textarea>
            </div>

            <div class="row mb10">
                <label for="hinh_anh">Hình</label>
                <input type="file" name="hinh_anh" id="">
                <?= $hinh ?>
            </div>

            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="capnhat_bc" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listbaocao"><input type="button" value="Danh sách"></a>

            </div>
            <?php
            if(isset($thongbao) && $thongbao != "") {
                echo $thongbao;
            }
            ?>

        </form>
    </div>
</div>



