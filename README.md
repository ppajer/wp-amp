# wp-amp

A bare-bones development theme optimized for speed, adhering to the Google AMP standards

## Development

Most of the magic happens inside the `functions.php` file, where the WPAMP class is initialized according to your config.

### The config array

Since the goal of AMP is to produce highly optimized sites, WP-AMP strips almost all assets that come bundled with WordPress out of the box, and only adds custom elements, webfonts and styles as necessary. The config array is where you can decide what to keep and what to insert. By default, the empty config array looks like this:

```
$config = array(
		'amp_libs' => array(),
		'amp_fonts' => array(),
		'admin_styles_to_keep' => array('wp-admin', 'admin-bar', 'dashicons', 'open-sans'),
		'custom_styles' => array()
	);
```

### Adding AMP Plugins

To add AMP plugins, simply add the name of the desired plugin to the `amp_libs` array in the Config.

### Adding Custom Fonts

To add  fonts, simply add the name of the desired typeface as a key, and an array of requested font weights as value to the `amp_fonts` array in the Config. The fonts and weights must be available on Google Fonts.

```
//Example:
$config['amp_fonts'] = array(
	'Montserrat' => array(900),
	'Roboto' => array(300)
	);

```

### Keeping styles

If you don't want WP-AMP to strip some of the default WordPress styles, you can add the handles of those styles to the 'admin_styles_to_keep' array in the Config. Admin styles will only be visible to site admins, so not adhering to the AMP standard is acceptable here.

## Images

### Content images

Images inserted into post content via the Insert Media button are converted to `<amp-img>` tags;

### Featured images 

// Todo

### Image galleries

// Todo

## Other optimizazions

- Emoji support removed
- XMLRPC support removed

## TODO

- remove guthenberg styles
- Replace featured images with amp-img
- Add per category list and index templates
- Add post and page templates
- Add widgetized sidebar
- Forms