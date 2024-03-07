<div class="row">
            <div class="row frmtitle">
                <h1>Thêm mới sản phẩm</h1>
            </div>
            <div class="row frmcontent" >
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        <label for="masp">Danh mục</label>
                        <select name="iddm">
                            <?php
                                foreach ($listdm as $dm) {
                                    extract($dm);
                                    echo ' <option value="'.$id.'">'.$name.'</option>';
                                }
                            
                            
                            ?>
                           
                        </select>
                    </div>
                    <div class="row mb10">
                        <label for="tensp">Tên sản phẩm</label>
                        <input type="text" name="tensp" id="">
                    </div>
                    <div class="row mb10">
                        <label for="giasp">Giá sản phẩm</label>
                        <input type="text" name="giasp" id="">
                    </div>
                    <div class="row mb10">
                        <label for="hinh">Hình</label>
                        <input type="file" name="hinh" id="">
                    </div>
                    <div class="row mb10">
                        <label for="mota">Mô tả</label><br>
                        <textarea name="mota" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Thêm mới">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
    
                    </div>
                    <?php 
                        if (isset($thongbao) && ($thongbao!="")) echo $thongbao;
                    ?>
                    
                </form>
            </div>
        </div>
       
        
    </div>