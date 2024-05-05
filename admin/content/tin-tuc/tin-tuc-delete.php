<?php
require_once('../../dao/tin-tuc.php');

extract($_REQUEST);

tin_tuc_delete($ma_tt);

header('location: tin-tuc-list.php');
?>
