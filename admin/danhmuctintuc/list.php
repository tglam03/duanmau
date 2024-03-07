
<div class="row">
    <div class="row frmtitle">
        <h1>Danh sách loại khóa học</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmds">
            <table>
                <tr>
                    <th></th>
                    <th>Mã  khóa học</th>
                    <th>Tên loại khóa học</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listdm_tintuc as $danhmuc) {
                    extract($danhmuc);
                    $suadm = "index.php?act=suadm_tintuc&id=".$id_danhmuc;
                    $xoadm = "index.php?act=xoadm_tintuc&id=".$id_danhmuc;
                    $thongbaoxoa = "'" . "Bạn có muốn xóa sản phẩm:" . $ten_danhmuc . "'";
                    echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id_danhmuc.'</td>
                                <td>'.$ten_danhmuc.'</td>
                                <td>
                                <a href="'.$suadm.'"><input type="button" value="Sửa"></a>
                                 <a href="'.$xoadm.'" onclick="return confirm('.$thongbaoxoa.')"><input type="button" value="Xóa"></a>
                                </td>
                            </tr>';
                }
                ?>



            </table>
        </div>
        <div class="row mb10">

        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=adddm_tintuc"><input type="button" value="Nhập thêm"></a>
        </div>