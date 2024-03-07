
<?php
if (isset($_SESSION['user'])) {
    extract($_SESSION['user']);
}?>
<div class="row mb10">
    <h1>Xin chào:  <?= $user ?> </h1>
</div>
