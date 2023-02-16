<?php
/**
 *  @package Sign-Up-Registration
 */


   /*

Plugin Name: Sign-up
Plugin URI:
Author: Kennedy Karuri
Author URI: 
Description: This is a custom plugin that collect sign up information for Mobi-Max.
Version: 1.0
Requires at least: 5.0
Tested up to: 5.4
Requires PHP: 7.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


*/

/**
 * Securing A plugin
 */

defined('ABSPATH') or die('gerara here!');



class SignUpReg{
    function __construct(){
        $this->pass_data_to_db();   
    }

    function activate(){ 
        $this->create_table_to_db();
        flush_rewrite_rules();
    }

    function deactivate(){
   
        flush_rewrite_rules();
    }

    function create_table_to_db(){
        global $wpdb;

        $table_name = $wpdb->prefix.'registration';
       

        $sign_details = "CREATE TABLE ".$table_name."(
            fullname text NOT NULL,
            email varchar(30) NOT NULL,
            password varchar(50) NOT NULL,
            type text NOT NULL
        );";

      

        require_once(ABSPATH.'wp-admin/includes/upgrade.php');
        dbDelta($sign_details);
    }

    function pass_data_to_db(){
        if (isset($_POST['submitbtn'])){
            $data = array(
                'fullname'=>$_POST['fullname'],
                'email'=>$_POST['email'],
                'password'=>$_POST['password'],
                'type'=>$_POST['type']
            );
            global $wpdb;
            $tableName= $wpdb->prefix.'registration';
            $result = $wpdb->insert($tableName, $data, $format=NULL);
        
            if($result == true){
                echo "<script>alert('Registration Details Captured Succesfully');</script>";
            }else{
                echo "<script>alert('Unable to Register');</script>";
            }
        }
    }
}

if (class_exists('SignUpReg')){
    $userRegInstance = new SignUpReg();
}

//activation
register_activation_hook(__FILE__, array($userRegInstance, 'activate'));

//deactivate
register_deactivation_hook(__FILE__, array($userRegInstance, 'deactivate'));
