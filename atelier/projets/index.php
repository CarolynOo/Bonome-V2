<?php

/*
$message = 'projets';

if (isset($_GET['id'])) {
	$message = 'projet '.$_GET['id'];
}
*/
/*
$message = 'projet';

if (isset($_GET['id'])) {
	$message .= $_GET['id'];
} else {
	$message .= 's';
}
*/
/*
$message = 'projet' . (isset($_GET['id']) ? $_GET['id'] : 's');
*/


$message = 'projet' . ($_GET['id'] ?? 's');

echo $message;
