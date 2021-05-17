<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'seogo_preloader', 'seogo_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'seogo_header', 'seogo_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'seogo_footer', 'seogo_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'seogo_wrp_start', 'seogo_wrp_start_cb', 10 );
	add_action( 'seogo_wrp_end', 'seogo_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'seogo_blog_col_start', 'seogo_blog_col_start_cb', 10 );
	add_action( 'seogo_blog_col_end', 'seogo_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'seogo_blog_posts_thumb', 'seogo_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'seogo_blog_details_wrap_start', 'seogo_blog_details_wrap_start_cb', 10 );
	add_action( 'seogo_blog_details_wrap_end', 'seogo_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'seogo_blog_posts_title', 'seogo_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'seogo_blog_posts_meta', 'seogo_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'seogo_blog_posts_excerpt', 'seogo_blog_posts_excerpt_cb', 10 );
	// add_action( 'seogo_blog_posts_excerpt', 'seogo_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'seogo_blog_posts_info_link', 'seogo_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'seogo_blog_posts_content', 'seogo_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'seogo_blog_posts_share', 'seogo_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'seogo_blog_sidebar', 'seogo_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'seogo_blog_single_meta', 'seogo_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'seogo_page_content', 'seogo_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'seogo_fof', 'seogo_fof_cb', 10 );

	

?>