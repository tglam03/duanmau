<div class="row">
    <div class="row frmtitle">
        <h1>Thống kê sản phẩm theo loại</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmds">
            <table>
                <tr>
                    <th>STT</th>
                    <th>Loại hàng</th>
                    <th>Số lượng</th>
                    <th>Giá thấp nhất</th>
                    <th>Giá cao nhất</th>
                    <th>Giá trung bình</th>
                </tr>
                <?php
                foreach ($listthongke as $thongke) {
                    extract($thongke);
                    echo '<tr>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$soluong.'</td>
                                <td>'.$gia_min.'</td>
                                <td>'.$gia_max.'</td>
                                <td>'.$gia_avg. '   VND</td>
                                
                            </tr>';
                }
                ?>
                


            </table>
        </div>
        <div class="row mb10">

        </div>
        <div class="row mb10">
           <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ" ></a>
        </div>