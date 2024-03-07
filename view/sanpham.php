<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtitle">SẢN PHẨM >>> <strong><?= $tendm?></strong></div>
            <div class="row boxcontent">
                <?php
                $i = 0;
                foreach ($dssp as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    $hinh = $img_path . $img;
                    if (($i == 2) || ($i == 5) || ($i == 8)) {
                        $nr = "";
                    } else {
                        $nr = "mr";
                    }
                    echo '<div class="boxsp ' . $nr . '">
                <div class="row img">
                    <a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a></div>
                    <p>' . $price . '  VND</p>
                    <a href="' . $linksp . '">' . $name . '</a>
                </div>';
                    $i += 1;
                }
                ?>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php"; ?>
    </div>
</div>