<?php
    if (is_array($dm)) {
        # code...
        extract($dm);
    }
?>
<div class="row">
            <div class="row frmtitle">
                <h1>Cập nhật loại hàng</h1>
            </div>
            <div class="row frmcontent" >
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb10">
                        <label for="maloai">Mã Loại</label>
                        <input type="text" name="maloai" id="" disabled>
                    </div>
                    <div class="row mb10">
                        <label for="tenloai">Tên Loại</label>
                        <input type="text" name="tenloai" id="" value="<?php if(isset($name)&& ($name!="")) echo $name; ?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&& ($id!="")) echo $id; ?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
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