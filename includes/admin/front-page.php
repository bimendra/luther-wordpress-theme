<?php

/**
 * CMB2 Metaboxes for the front page
 */

add_action('cmb2_admin_init', function() {
  $front_page_cmb2 = new_cmb2_box([
    'id' => THEME_PREFIX . 'front_page_metaboxes',
    'title' => esc_html__('Sections', THEME_TEXT_DOMAIN),
    'object_types' => ['page'],
    'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
        'show_on'       => [
            'key'   => 'id',
            'value' => get_option('page_on_front'),
        ],
      ]);
});