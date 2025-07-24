<?php

/**
 * Define custom posts and taxonomies
 */
/**
 * Register a Hỏi đáp post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
$labels = array(
	'name'               => __('Hỏi đáp', 'msi'),
	'singular_name'      => __('Hỏi đáp', 'msi'),
	'menu_name'          => __('Hỏi đáp', 'msi'),
	'name_admin_bar'     => __('Hỏi đáp', 'msi'),
	'add_new'            => __('Thêm Hỏi đáp mới', 'msi'),
	'add_new_item'       => __('Thêm Hỏi đáp', 'msi'),
	'new_item'           => __('Thêm Hỏi đáp', 'msi'),
	'edit_item'          => __('Sửa Hỏi đáp', 'msi'),
	'view_item'          => __('Xem Hỏi đáp', 'msi'),
	'all_items'          => __('Tất cả Hỏi đáp', 'msi'),
	'search_items'       => __('Tìm Hỏi đáp', 'msi'),
	'parent_item_colon'  => __('Hỏi đáp cha:', 'msi'),
	'not_found'          => __('Không tìm thấy Hỏi đáp nào.', 'msi'),
	'not_found_in_trash' => __('Không tìm thấy Hỏi đáp nào trong thùng rác.', 'msi')
);
$args = array(
	'labels'             => $labels,
	'public'             => true,
	'publicly_queryable' => true,
	'show_ui'            => true,
	'show_in_menu'       => true,
	'query_var'          => true,
	'rewrite'            => array('slug' => 'hoi-dap'),
	'capability_type'    => 'post',
	'has_archive'        => true,
	'hierarchical'       => false,
	'menu_position'      => null,
	'menu_icon'          => 'dashicons-star-filled',
	'supports'           => array('title', 'editor', 'thumbnail')
);
register_post_type('hoi-dap', $args);
/**
 * Register a Danh mục Hỏi đáp taxonomy.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
$labels = array(
	'name'              => __('Danh mục Hỏi đáp', 'msi'),
	'singular_name'     => __('Danh mục Hỏi đáp', 'msi'),
	'search_items'      => __('Tìm danh mục Hỏi đáp', 'msi'),
	'all_items'         => __('Tất cả danh mục Hỏi đáp', 'msi'),
	'parent_item'       => __('Danh mục Hỏi đáp cha', 'msi'),
	'parent_item_colon' => __('Danh mục Hỏi đáp cha', 'msi') . ':',
	'edit_item'         => __('Sửa danh mục Hỏi đáp', 'msi'),
	'update_item'       => __('Cập nhật danh mục Hỏi đáp', 'msi'),
	'add_new_item'      => __('Thêm danh mục Hỏi đáp mới', 'msi'),
	'new_item_name'     => __('Thêm danh mục Hỏi đáp', 'msi'),
	'menu_name'         => __('Danh mục Hỏi đáp', 'msi'),
);
$args = array(
	'hierarchical'      => true,
	'labels'            => $labels,
	'show_ui'           => true,
	'show_admin_column' => true,
	'query_var'         => true,
	'rewrite'           => array('slug' => 'danh-muc-hoi-dap'),
);
register_taxonomy('hoi-dap-cat', array('hoi-dap'), $args);


/**
 * Register a Trải nghiệm khách hàng post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
$labels = array(
	'name'               => __('Trải nghiệm khách hàng', 'msi'),
	'singular_name'      => __('Trải nghiệm khách hàng', 'msi'),
	'menu_name'          => __('Trải nghiệm khách hàng', 'msi'),
	'name_admin_bar'     => __('Trải nghiệm khách hàng', 'msi'),
	'add_new'            => __('Thêm bài viết mới', 'msi'),
	'add_new_item'       => __('Thêm bài viết', 'msi'),
	'new_item'           => __('Thêm bài viết', 'msi'),
	'edit_item'          => __('Sửa bài viết', 'msi'),
	'view_item'          => __('Xem bài viết', 'msi'),
	'all_items'          => __('Tất cả bài viết', 'msi'),
	'search_items'       => __('Tìm bài viết', 'msi'),
	'parent_item_colon'  => __('Bài viết cha:', 'msi'),
	'not_found'          => __('Không tìm thấy bài viết nào.', 'msi'),
	'not_found_in_trash' => __('Không tìm thấy bài viết nào trong thùng rác.', 'msi')
);
$args = array(
	'labels'             => $labels,
	'public'             => true,
	'publicly_queryable' => true,
	'show_ui'            => true,
	'show_in_menu'       => true,
	'query_var'          => true,
	'rewrite'            => array('slug' => 'khach-hang'),
	'capability_type'    => 'post',
	'has_archive'        => true,
	'hierarchical'       => false,
	'menu_position'      => null,
	'menu_icon'          => 'dashicons-media-video',
	'supports'           => array('title', 'editor', 'thumbnail')
);
register_post_type('khach-hang', $args);
/**
 * Register a Danh mục Khách Hàng taxonomy.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
$labels = array(
	'name'              => __('Danh mục Khách Hàng', 'msi'),
	'singular_name'     => __('Danh mục Khách Hàng', 'msi'),
	'search_items'      => __('Tìm danh mục Khách Hàng', 'msi'),
	'all_items'         => __('Tất cả danh mục Khách Hàng', 'msi'),
	'parent_item'       => __('Danh mục bài viết cha', 'msi'),
	'parent_item_colon' => __('Danh mục bài viết cha', 'msi') . ':',
	'edit_item'         => __('Sửa danh mục bài viết', 'msi'),
	'update_item'       => __('Cập nhật danh mục bài viết', 'msi'),
	'add_new_item'      => __('Thêm danh mục bài viết mới', 'msi'),
	'new_item_name'     => __('Thêm danh mục bài viết', 'msi'),
	'menu_name'         => __('Danh mục bài viết', 'msi'),
);
$args = array(
	'hierarchical'      => true,
	'labels'            => $labels,
	'show_ui'           => true,
	'show_admin_column' => true,
	'query_var'         => true,
	'rewrite'           => array('slug' => 'danh-sach-khach-hang'),
);
register_taxonomy('danh-sach-khach-hang', array('khach-hang'), $args);
