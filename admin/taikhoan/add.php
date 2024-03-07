<div class="row">
            <div class="row frmtitle">
                <h1>Thêm Tài Khoản</h1>
            </div>
            <div class="row frmcontent" >
                <form action="index.php?act=addtk" method="post">
                    <div class="row mb10">
                        <label for="user">Tên tài khoản</label>
                        <input type="text" name="user">
                    </div>
                    <div class="row mb10">
                        <label for="email">Email</label>
                        <input type="text" name="email">
                    </div>
                    <div class="row mb10">
                        <label for="pass">Mật khẩu</label>
                        <input type="password" name="pass" id="">
                    </div><div class="row mb10">
                        <label for="address">Địa chỉ</label>
                        <input type="text" name="address" id="">
                    </div>
                    <div class="row mb10">
                        <label for="tel">Điện thoại</label>
                        <input type="text" name="tel" id="">
                    </div>
                    <div class="row mb10">
                        <label for="role">Vai trò</label>
                        <select name="role">
                            <option value="1">1</option>
                            <option value="0">0</option>
                        </select>
                        
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Thêm mới">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=dskh"><input type="button" value="Danh sách"></a>
    
                    </div>
                    <?php 
                        if (isset($thongbao) && ($thongbao!="")) echo $thongbao;
                    ?>
                    
                </form>
            </div>
        </div>
       
        
    </div>