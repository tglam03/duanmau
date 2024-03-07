<div class="row">
    <div class="row frmtitle mb10">
        <h1>Danh sách hàng hóa</h1>
    </div>
    <form action="index.php?act=listsp" method="post">
        <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php foreach ($listdm as $dm): ?>
                <option value="<?= $dm['id'] ?>">
                    <?= $dm['name'] ?>
                </option>
            <?php endforeach; ?>
        </select>
        <input type="text" name="kyw" placeholder="Từ khóa">
        <input type="submit" name="listOk" value="Go">
    </form>
    <div class="row frmcontent">

        <div class="row mb10 frmds">

            <table>
                <tr>
                    <th></th>
                    <th>Mã Loại</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình</th>
                    <th>Giá</th>
                    <th>Mô tả</th>
                    <th>Lượt xem</th>
                    <th></th>

                </tr>

                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $thongbaoxoa = "'" . "Bạn có muốn xóa sản phẩm:" . $name . "'";
                    $hinhpath = "upload/" . $img;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height = '80px'>";
                    } else {
                        $hinh = "No Photo";
                    }
                    echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' . $id . '</td>
                                <td>' . $name . '</td>
                                <td>' . $hinh . '</td>
                                <td>' . $price . '</td>
                                <td>' . $mota . '</td>
                                <td>' . $luotxem . '</td>
                                <td>
                                <a href="' . $suasp . '"><input type="button" value="Sửa"></a> 
                                <a href="' . $xoasp . '" onclick="return confirm('.$thongbaoxoa.')">
                                <input type="button" value="Xóa"></a>
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
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
        </div>