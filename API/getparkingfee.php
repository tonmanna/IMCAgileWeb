<?php
include 'SQLRunner.php';
$car_id = 'ณข1597';
// $car_id = $_POST['car_id'];

$sql = "select * from 'tbl_transaction' t join tbl_cars c on c.id=t.car_id  where c.id = " . $car_id;

$result = getQueryData($sql);
dd($result);

?>