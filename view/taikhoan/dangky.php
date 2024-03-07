<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtitle">ĐĂng KÝ THÀNH VIÊN</div>

            <div class="boxcontent formuser">
                <form action="index.php?act=dangky" method="post">
                    <div class="row mb10">
                        Email
                        <input type="text" name="email">
                    </div>
                    <div class="row mb10">
                        Tên đăng nhập
                        <input type="text" name="user">
                    </div>
                    <div class="row mb10">
                        Mật khẩu
                        <input type="password" name="pass">
                    </div>
                    <input type="submit" value="Đăng ký" name="dangky">
                    <input type="reset" value="Nhập lại">
                </form>

                <h2 class="error">
                    <?php 
                    if (isset($thongbao) && $thongbao !="") {
                        echo $thongbao;
                    }
                    ?>
                </h2>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>