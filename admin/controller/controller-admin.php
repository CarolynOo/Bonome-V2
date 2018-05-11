<?php
require 'model/model-admin.php';

$users = getAdmin();
$products = getAdmin();

require 'views/view-admin.php';