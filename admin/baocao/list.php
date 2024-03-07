<div class="row">
    <div class="row frmtitle">
        <h1>Danh sách báo cáo</h1>
    </div>
    <div class="row frmcontent">
        <form action="" method="post">
            <div class="row mb10 frmds">
                <table>
                    <tr>
                        <th></th>
                        <th>ID BÀI BÁO CÁO</th>
                        <th>TIÊU ĐỀ</th>
                        <th>NỘI DUNG</th>
                        <th>HÌNH ẢNH</th>
                        <th>BÀI BÁO CÁO</th>
                        <th>DANH MỤC</th>
                        <th></th>
                    </tr>
                    <?php foreach($listbaocao as $baocao) {
                        extract($baocao);
                        $suasp = "index.php?act=suabaocao&id=" . $id;
                        $xoasp = "index.php?act=xoabaocao&id=" . $id;
                        $thongbaoxoa = "'" . "Bạn có muốn xóa báo cáo:" . $baibaocao . "'";

                        $hinhpath = "upload/" . $hinhanh;
                        if (is_file($hinhpath)) {
                            $hinh = "<img src='" . $hinhpath . "' height = '80px'>";
                        } else {
                            $hinh = "No Photo";
                        }

                        echo '<tr>

                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $id . '</td>
                            <td>' . $tieude . '</td>
                            <td>' . $noidung . '</td>
                            <td>' . $hinh . '</td>
                            <td>' . $baibaocao . '</td>
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
            <a href="index.php?act=addbaocao"><input type="button" value="Nhập thêm"></a>
        </div>