<?php
/*
Plugin Name: Add submenu using wrapper function
Version: 1.0
Plugin URI: www.selftuts.com
Author: SelfTuts

*/

global $wp_version;

//comparing the version
if(version_compare($wp_version,"4.7",">=")){
    //echo "compitable version";
}else{
    exit("The version of plugin needs wordpress version to be greater than 4.7");
}

add_action('admin_menu','add_submenu_page_to_dashboard_callback');


// this function is called when admin_menu action is called
function add_submenu_page_to_dashboard_callback(){
    
    add_dashboard_page(
        'SelfTuts Dashboard Page',
        'SelfTuts',
        'manage_options',
        'selftuts_submenu_slug',
        'template_function_callback'
    );
}



//this function is called as a callback when add dashboard wrapper function is called
function template_function_callback(){
    echo "<h1>Hello You have successfully added submenu page using wrapper function</h1>";
}




