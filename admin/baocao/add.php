<div class="row">
    <div class="row frmtitle">
        <h1>Thêm mới báo cáo</h1>
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
        <form action="index.php?act=addbaocao" method="post" enctype="multipart/form-data">
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
                <input type="text" name="tieu_de" id="">
            </div>
            <div class="row mb10">
                <label for="noi_dung">Nội dung</label><br>
                <textarea name="noi_dung" id="" cols="158" rows="10"></textarea>
            </div>
            <div class="row mb10">
                <label for="noi_dung">Bài báo cáo</label><br>
                <textarea name="baibaocao" id="" cols="158" rows="10"></textarea>
            </div>
            <div class="row mb10">
                <label for="hinh_anh">Hình</label>
                <input type="file" name="hinh_anh" id="">
            </div>

            <div class="row mb10">
                <input type="submit" name="themmoi" value="Thêm mới">
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



