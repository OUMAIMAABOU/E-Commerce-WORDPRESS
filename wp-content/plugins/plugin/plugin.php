<?php
/**
 * Plugin Name: OUMAIMA ABOU EL HAITAM
 * Description: Artisana plugin .
 */
add_filter('show_admin_bar','__return_false');

function createTable(){
    global $wpdb;
    $qr=$wpdb->query("CREATE TABLE IF NOT EXISTS `wordpress`.`plugin` ( `id` INT NOT NULL AUTO_INCREMENT , `email` TEXT NOT NULL , `name` TEXT NOT NULL , `subject` TEXT NOT NULL , `message` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;");
}
function deleteTable(){
    global $wpdb;
    $qr=$wpdb->query("DROP TABLE IF EXISTS `wordpress`.`plugin`;");
}

add_action('activate_contact-us-test/main.php',function(){
    createTable();
});

add_action('deactivate_contact-us-test/main.php',function(){
    deleteTable();
});

