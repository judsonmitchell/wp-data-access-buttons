<?php
/**
* Plugin Name: WP Data Access Buttons
* Plugin URI: https://github.com/judsonmitchell/wp-data-access-buttons
* Description: Adds dataTables Buttons to a WP Data Access Table.
* Version: 1.0beta
* Author: Judson Mitchell
* Author URI: https://github.com/judsonmitchell/
**/

function add_dataTables_buttons(){
   wp_enqueue_style('jquery_datatables_buttons', '//cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css'); 
   wp_enqueue_script( 
      'jquery_datatables_buttons',
      '//cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.js',
      array('jquery','jquery_datatables','jquery_datatables_responsive'),
      false,
      true
   );
   wp_enqueue_script( 
      'jquery_datatables_buttons_html5',
      '//cdn.datatables.net/buttons/1.6.1/js/buttons.html5.js',
      array('jquery','jquery_datatables','jquery_datatables_responsive','jquery_datatables_buttons'),
      false,
      true
   );
   wp_enqueue_script( 
      'jquery_datatables_buttons_jszip',
      'https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.js',
      array('jquery','jquery_datatables','jquery_datatables_responsive','jquery_datatables_buttons'),
      false,
      true
   );
   wp_enqueue_script( 
      'jquery_datatables_buttons_pdfmake',
      'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.js',
      array('jquery','jquery_datatables','jquery_datatables_responsive','jquery_datatables_buttons'),
      false,
      true
   );
   wp_enqueue_script( 
      'jquery_datatables_buttons_pdffont',
      'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js',
      array('jquery_datatables_buttons_pdfmake'),
      false,
      true
   );
}

add_action( 'plugins_loaded', 'add_dataTables_buttons', 12,0 );


