
<div class="row">
    <div class="row frmtitle">
        <h1>Danh sách khóa học</h1>
    </div>
    <div class="row frmcontent">
        <form action="" method="post">
            <div class="row mb10 frmds">
                <table>
                    <tr>
                        <th></th>
                        <th>ID KHÓA HỌC</th>
                        <th>TÊN KHÓA HỌC</th>
                        <th>HÌNH ẢNH</th>
                        <th>GIÁ</th>
                        <th>DANH MỤC</th>
                        <th></th>
                    </tr>
                    <?php foreach($list_tintuc as $tintuc) {
                        extract($tintuc);
                        $suasp = "index.php?act=suatintuc&id=" . $id;
                        $xoasp = "index.php?act=xoatintuc&id=" . $id;
                        $thongbaoxoa = "'" . "Bạn có muốn xóa khóa học:" . $ten_khoahoc . "'";

                        $hinhpath = "upload/" . $hinh_anh;
                        if (is_file($hinhpath)) {
                            $hinh = "<img src='" . $hinhpath . "' height = '80px'>";
                        } else {
                            $hinh = "No Photo";
                        }

                        echo '<tr>

                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $id . '</td>
                            <td>' . $ten_khoahoc . '</td>
                            <td>' . $hinh . '</td>
                            <td>' . $gia. '</td>
                            <td>' . $ten_danhmuc . '</td>
                            
                             <td>
                             
                                <a href="'.$suasp.'">
                                <input type="button" name="" id="" value="Sửa">
                                </a>
                                
                                <a href="'.$xoasp.'" onclick="return confirm('.$thongbaoxoa.')" role="button">
                                <input type="button" name="" id="" value="Xóa">
                                </a>
                                
                             </td>
                              
                              <tr>';
                    } ?>


                </table>
            </div>
        </form>
        <div class="row mb10">

        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <a href="index.php?act=addtintuc"><input type="button" value="Nhập thêm"></a>
        </div>