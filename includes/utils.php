<?php
require_once 'model/queries.php';

/*ini_set('error_reporting', '-1');
ini_set('display_errors', 'on');*/

function getBlock($file, $data = []) {
    require 'view/'.$file;
}