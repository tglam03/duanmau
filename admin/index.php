<?php
session_start();
if (isset($_SESSION["user"])&& $_SESSION["user"]["role"]==1) {


    include "../model/pdo.php";
    include "header.php";
    include "../global.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/thongke.php";
    include "../model/khoahoc.php";
    include "../model/danhmuctintuc.php";
    include "../model/baocao.php";
//controller
    if(isset($_GET['act'])) {
        $act = $_GET['act'];
        switch($act) {
            case 'adddm':
                //Kiểm tra người dùng có click vào add không
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    # code...
                    $tenloai = $_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao = "Thêm thành công";
                }

                include "danhmuc/add.php";
                break;
            case 'listdm':
                $listdm = loadAll_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    # code...
                    delete_danhmuc($_GET['id']);
                }
                $listdm = loadAll_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $dm = loadOne_danhmuc($_GET['id']);
                }

                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhat']) && $_POST['capnhat']) {
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update_danhmuc($id, $tenloai);
                    $thongbao = "Cập nhật thành công";
                }
                $listdm = loadAll_danhmuc();
                include "danhmuc/list.php";
                break;

            /*Controller sản phẩm*/
            case 'addsp':
                //Kiểm tra người dùng có click vào add không
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "upload/";
                    $target_file = $target_dir . basename($_FILES['hinh']['name']);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {

                    } else {

                    }
                    insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                    $thongbao = "Thêm thành công";
                }
                $listdm = loadAll_danhmuc();
                include "sanpham/add.php";
                break;
            case 'listsp':
                if(isset($_POST['listOk']) && ($_POST['listOk'])) {
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                } else {
                    $kyw = '';
                    $iddm = 0;
                }
                $listdm = loadAll_danhmuc();
                $listsanpham = loadAll_sanpham($kyw, $iddm);
                include "sanpham/list.php";
                break;
            case 'xoasp':
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    # code...
                    delete_sanpham($_GET['id']);
                }
                $listsanpham = loadAll_sanpham();
                include "sanpham/list.php";
                break;
            case 'suasp':
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $sanpham = loadOne_sanpham($_GET['id']);
                }
                $listdm = loadAll_danhmuc();
                include "sanpham/update.php";
                break;
            case 'updatesp':
                if(isset($_POST['capnhat']) && $_POST['capnhat']) {
                    $id = $_POST['id'];
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "upload/";
                    $target_file = $target_dir . basename($_FILES['hinh']['name']);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {

                    } else {

                    }
                    update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                    $thongbao = "Thêm thành công";
                }
                $listdm = loadAll_danhmuc();
                $listsanpham = loadAll_sanpham();
                include "sanpham/list.php";
                break;

            /*Tài khoản*/
            case 'dskh':
                $listtaikhoan = loadAll_taikhoan();
                include "taikhoan/list.php";
                break;
            case 'xoatk':
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    # code...
                    delete_taikhoan($_GET['id']);
                }
                $listtaikhoan = loadAll_taikhoan();
                include "taikhoan/list.php";
                break;
            case 'addtk':
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $user = $_POST['user'];
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $role = $_POST['role'];
                    insert_tk($user, $email, $pass, $address, $tel, $role);
                    $thongbao = "Thêm thành công";
                }


                include "taikhoan/add.php";
                break;

            case 'dsbl':
                $listbinhluan = loadAll_binhluan(0);
                include "binhluan/list.php";
                break;
            case 'xoabl':
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    # code...
                    delete_binhluan($_GET['id']);
                }
                $listbinhluan = loadAll_binhluan(0);
                include "binhluan/list.php";
                break;
            case 'thongke':
                $listthongke = loadAll_thongke();
                include "thongke/list.php";
                break;
            case 'bieudo':
                $listthongke = loadAll_thongke();
                include "thongke/bieudo.php";
                break;


            // Controllers danh mục tin tức
            case 'adddm_tintuc':
                //Kiểm tra người dùng có click vào add không
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    # code...
                    $ten_danhmuc = $_POST['ten_danhmuc'];
                    insert_dmtintuc($ten_danhmuc);
                    $thongbao = "Thêm thành công";
                }

                include "danhmuctintuc/add.php";
                break;
            case 'listdm_tintuc':
                $listdm_tintuc = loadall_dmtintuc();
                include "danhmuctintuc/list.php";
                break;

            case 'xoadm_tintuc':
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    # code...
                    delete_dmtintuc($_GET['id']);
                }
                $listdm_tintuc = loadall_dmtintuc();
                include "danhmuctintuc/list.php";
                break;
            case 'suadm_tintuc':
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $dm_tintuc = loadOne_dmtintuc($_GET['id']);
                }

                include "danhmuctintuc/update.php";
                break;
            case 'updatedm_tintuc':
                if(isset($_POST['capnhat']) && $_POST['capnhat']) {
                    $ten_danhmuc = $_POST['ten_danhmuc'];
                    $id = $_POST['id'];
                    update_dmtintuc($id, $ten_danhmuc);
                    $thongbao = "Cập nhật thành công";
                }
                $listdm_tintuc = loadall_dmtintuc();
                include "danhmuctintuc/list.php";
                break;

            /*Tin tức*/

            case 'listtintuc':
                $list_tintuc = loadall_khoahoc();
                include "khoahoc/list.php";
                break;
            case 'addtintuc':
                unset($_SESSION['error']);
                if(isset($_POST['themmoi']) && $_POST['themmoi']) {
                    $error = [];
                    if(empty($_POST['ten_khoahoc'])) {
                        $error[] = "Vui lòng nhập tên khóa học";
                    }
                    if(empty($_POST['gia'])) {
                        $error[] = "Vui lòng nhập giá";
                    }
                    if(empty($_FILES['hinh_anh']['name'])) {
                        $error[] = "Vui lòng chọn hình ảnh";
                    }
                    if(count($error) >= 1) {
                        $_SESSION['error'] = $error;
                    } else {
                        $ten_khoahoc = $_POST['ten_khoahoc'];
                        $gia = $_POST['gia'];
                        $iddm = $_POST['iddm'];

                        $filename = $_FILES['hinh_anh']['name'];
                        $target_dir = "upload/";
                        $target_file = $target_dir . basename($_FILES['hinh_anh']['name']);
                        if(move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file)) {

                        } else {

                        }
                        insert_tintuc($ten_khoahoc, $gia, $filename, $iddm);
                        $thongbao = "Thêm thành công";
                    }
                }
                $listdmtintuc = loadall_dmkhoahoc();
                include "./khoahoc/add.php";
                break;

// update tintuc
            case 'suatintuc':
                unset($_SESSION['error']);
                if(isset($_GET['id']) && $_GET['id'] > 0) {
                    $tintuc = loadone_khoahoc($_GET['id']);
                }
                $listdmtintuc = loadall_dmkhoahoc();
                include "./khoahoc/update.php";
                break;
            case 'updatetintuc':
                if(isset($_POST['capnhat_tt']) && $_POST['capnhat_tt']) {
                    $error = [];
                    if(empty($_POST['ten_khoahoc'])) {
                        $error[] = "Vui lòng nhập tên khóa học";
                    }
                    if(empty($_POST['gia'])) {
                        $error[] = "Vui lòng nhập giá";
                    }
                    if(count($error) >= 1) {
                        $_SESSION['error'] = $error;
                        header("Location: http://duanmau.test/admin/index.php?act=suatintuc&id=" . $_POST['id']);
                    } else {
                        $id = $_POST['id'];
                        $ten_khoahoc = $_POST['ten_khoahoc'];
                        $gia = $_POST['gia'];
                        $iddm = $_POST['iddm'];

                        $filename = $_FILES['hinh_anh']['name'];
                        $target_dir = "upload/";
                        $target_file = $target_dir . basename($_FILES['hinh_anh']['name']);
                        if(move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file)) {

                        } else {

                        }
                        update_tintuc($id,$ten_khoahoc, $gia, $filename, $iddm);
                        $thongbao = "Cập nhật thành công";
                        header("Location: http://duanmau.test/admin/index.php?act=listtintuc ");
                    }
                }
                $listdmtintuc = loadall_dmkhoahoc();
                include "./khoahoc/list.php";
                break;

            case 'xoatintuc':
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    # code...
                    delete_tintuc($_GET['id']);
                }
                $list_tintuc = loadall_khoahoc();
                include "khoahoc/list.php";
                break;

                // controller báo cáo



            default:
                include "home.php";
                break;
        }
    } else {
        include "home.php";
    }


    include "footer.php";
}else{
    header("Location: http://duanmau.test");
}
?>