<?php
// 以下のPOSTデータが渡ってきたとして
$_POST = ['test' => 123];

if ( $_POST['testing'] ) {
//if ( isset($_POST['testing']) ) {
	echo 'OK';
} else {
	echo 'NG';
}
echo '<br>';
