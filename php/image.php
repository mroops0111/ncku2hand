<?php
//set absolute path & always report php error
register_shutdown_function("fatal_handler");
function fatal_handler() {
    print_r(error_get_last());
}
$rootPath = str_replace("ncku2hand/php", "", str_replace('\\', '/', dirname(__FILE__)));

require_once $rootPath.'inc/config.php';

$msg = filter_input(INPUT_GET, 'msg');
if($imageId) {
    echo file_get_contents($imagePath);
}