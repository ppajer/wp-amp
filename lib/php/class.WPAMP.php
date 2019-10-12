<?php

class WPAMP {

	private static $admin_styles_to_keep;
	private static $styles_to_keep;
	private static $custom_styles;
	private static $amp_plugins;
	private static $amp_fonts;

	private static function strip_scripts() {
		global $wp_scripts;

		if (isset($wp_scripts->registered)) {
			
			foreach ($wp_scripts->registered as $handle => $script) {
				wp_deregister_script($handle);
			}
		}
	}

	private static function strip_styles() {
		global $wp_styles;

		if (isset($wp_styles->registered)) {
			
			foreach ($wp_styles->registered as $handle => $style) {

				$styles_to_keep = is_admin() ? self::$admin_styles_to_keep : self::$styles_to_keep;
				
				if (!in_array($handle, $styles_to_keep)) {
					wp_deregister_style($handle);	
				}
			}
		}
	}

	private static function fonts() {
		$fontBase = 'https://fonts.googleapis.com/css?family=';
		$fontFamilies = array();
		
		foreach ($wpamp_custom_fonts as $font => $sizes) {
			$fontFamilies[] = $font.':'.implode(',', $sizes);
		}

		echo '<link rel="stylesheet" href="'.$fontBase.implode('|', $fontFamilies).'">';
	}

	private static function amp_libs() {
		echo '<script async src="https://cdn.ampproject.org/v0.js"></script>';
		
		foreach ($wpamp_enabled_plugins as $lib) {
			echo '<script async custom-element="'.$lib.'" src="https://cdn.ampproject.org/v0/'.$lib.'-0.1.js"></script>';
		}
	}

	private static function custom_styles() {
		echo '<style amp-custom>';
		
		foreach (self::$custom_styles as $url) {
			
			$url = get_template_directory_uri().'/'.$url;
			
			if (file_exists($url)) {
				echo file_get_contents($url);
			}
		}

		echo '</style>';
	}

	public static function head() {
		self::fonts();
		self::amp_libs();
		self::custom_styles();
	}

	public static function strip_assets() {
		self::strip_scripts();
		self::strip_styles();
	}

	public static function insert_amp_img($html, $id, $alt, $title, $align, $url) {
		$img_url = wp_get_attachment_url($id);
		$img_meta = wp_get_attachment_metadata ($id);
		$amp_img = '<amp-img src="'.$img_url.'" ';
		$amp_img .= 'width="'.$img_meta['width'].'" ';
		$amp_img .= 'height="'.$img_meta['height'].'" ';
		$amp_img .= 'id="media-'.$id.'" ';
		$amp_img .= 'class="content-img" ';
		$amp_img .= 'layout="responsive">';
		$amp_img .= '</amp-img>';

		return $amp_img;
	}

	public static function featured_image() {
		// TODO
	}

	public static function setup($config) {
		self::$amp_libs = isset($config['amp_libs']) ? $config['amp_libs'] : array();
		self::$amp_fonts = isset($config['amp_fonts']) ? $config['amp_fonts'] : array();
		self::$custom_styles = isset($config['custom_styles']) ? $config['custom_styles'] : array();
		self::$styles_to_keep = isset($config['styles_to_keep']) ? $config['styles_to_keep'] : array();
		self::$admin_styles_to_keep = isset($config['admin_styles_to_keep']) ? $config['admin_styles_to_keep'] : array();

		self::add_hooks();
	}

	public static function add_hooks() {
		add_action('wp_enqueue_scripts', 'self::strip_assets');
		add_action('wp_head', 'self::head');

		add_filter('image_send_to_editor', 'self::insert_amp_img', 10, 7 );
	}
}

?>