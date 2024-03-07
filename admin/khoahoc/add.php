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
        <form action="index.php?act=addtintuc" method="post" enctype="multipart/form-data">
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
        <label for="tieu_de">Tên khóa học</label>
        <input type="text" name="ten_khoahoc" id="">
    </div>
    <div class="row mb10">
        <label for="noi_dung">Giá</label><br>
        <input type="text" name="gia" id="">
    </div>
    <div class="row mb10">
        <label for="hinh_anh">Hình</label>
        <input type="file" name="hinh_anh" id="">
    </div>

    <div class="row mb10">
        <input type="submit" name="themmoi" value="Thêm mới">
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



