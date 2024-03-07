<div class="row">
            <div class="row frmtitle">
                <h1>Thêm mới loại hàng hóa</h1>
            </div>
            <div class="row frmcontent" >
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        <label for="maloai">Mã Loại</label>
                        <input type="text" name="maloai" id="" disabled>
                    </div>
                    <div class="row mb10">
                        <label for="tenloai">Tên Loại</label>
                        <input type="text" name="tenloai" id="">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Thêm mới">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
    
                    </div>
                    <?php 
                        if (isset($thongbao) && ($thongbao!="")) echo $thongbao;
                    ?>
                    
                </form>
            </div>
        </div>
       
        
    </div>