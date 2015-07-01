<?php
/* Bones Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// Flush your rewrite rules
function bones_flush_rewrite_rules() {
	flush_rewrite_rules();
}

// let's create the function for the custom type
function custom_post_example() { 
	// creating (registering) the custom type 
	register_post_type( 'lawyers', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'עורכי דין', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'עורך דין', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'כל עורכי הדין', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'הוסך חדש', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'הוסף עורך דין חדש', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'ערוך', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'ערוך עמוד עורך דין', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'עורך דין חדש', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'צפה בעמוד', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'חפש בעורכי דין', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'עורכי הדין של המשרד', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'עורך-דין', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'עורכי-דין', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */

register_post_type( 'publications', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'פרסומים', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'פרסום', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'כל הפרסומים', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'הוסך חדש', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'הוסף פרסום חדש', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'ערוך', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'ערוך פרסום', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'פרסום חדש', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'צפה בפרסום', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'חפש פרסומים', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'פרסומים של המשרד', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'פרסומים', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'פרסומים', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */

	register_post_type( 'practice', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'תחומי עיסוק', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'תחום עיסוק', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'כל תחומי העיסוק', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'הוסך חדש', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'הוסף תחום עיסוק חדש', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'ערוך', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'ערוך תחום עיסוק', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'תחום עיסוק חדש', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'צפה בעמוד', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'חפש תחומי עיסוק', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'תחומי העיסוק של המשרד', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'תחומי-העיסוק', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'תחומי-העיסוק', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register post type */
	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type( 'practice_cat', 'practice' );
	
}

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_example');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
	register_taxonomy( 'practice_cat', 
		array('practice'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
		array('hierarchical' => true,     /* if this is true, it acts like categories */
			'labels' => array(
				'name' => __( 'קטגוריות עיסוק', 'bonestheme' ), /* name of the custom taxonomy */
				'singular_name' => __( 'קטגורית עיסוק', 'bonestheme' ), /* single taxonomy name */
				'search_items' =>  __( 'חפש קטגוריות עיסוק', 'bonestheme' ), /* search title for taxomony */
				'all_items' => __( 'כל קטגוריעות העיסוק', 'bonestheme' ), /* all title for taxonomies */
				'parent_item' => __( 'קטגורית אב', 'bonestheme' ), /* parent title for taxonomy */
				'parent_item_colon' => __( 'קטגורית אב:', 'bonestheme' ), /* parent taxonomy title */
				'edit_item' => __( 'ערוך קטגוריה', 'bonestheme' ), /* edit custom taxonomy title */
				'update_item' => __( 'עדכן קטגוריה', 'bonestheme' ), /* update title for taxonomy */
				'add_new_item' => __( 'הוסף קטגוריה', 'bonestheme' ), /* add new title for taxonomy */
				'new_item_name' => __( 'קטגוריה חדשה', 'bonestheme' ) /* name title for taxonomy */
			),
			'show_admin_column' => true, 
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'קטגוריות-עיסוק' ),
		)
	);

?>
