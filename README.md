# wp-amp
A bare-bones development theme optimized for speed, adhering to the Google AMP standards

## Development

### Adding AMP Plugins
To add more AMP plugins, simply add the name of the desired plugin to the `$wpamp_enabled_plugins` array in the `function.php` file.

### Adding Custom Fonts
To add more fonts, simply add the name of the desired typeface as a key, and an array of requested font weights as value to the `$wpamp_custom_fonts` array in the `function.php` file. The fonts and weights must be available on Google Fonts.

```
//Example:

$wpamp_custom_fonts = array(
	'Montserrat' => array(900),
	'Roboto' => array(300)
	);

```

## TODO

- Replace featured images with amp-img
- Replace post content images with amp-img
- Add per category list and index templates
- Add post and page templates
- Add widgetized sidebar
- Forms