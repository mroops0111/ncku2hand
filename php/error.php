<?php
//set absolute path & always report php error
register_shutdown_function("fatal_handler");
function fatal_handler() {
    print_r(error_get_last());
}
$rootPath = str_replace("ncku2hand/php", "", str_replace('\\', '/', dirname(__FILE__)));
/* 
 * TODO: This php is supposed to catch error message thrown from front-end
 * and log to server for debugging
 */
