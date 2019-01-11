<!doctype html>
<html amp lang="en">
  <head>
    <meta charset="utf-8">
    <title>
    	<?php wp_title(); ?>
    </title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

    <!-- 

    	RICH META DATA

    	1) Canonical and AMP links
    	2) Open Graph meta tags
    	3) ld-json metadata

    -->
    <link rel="canonical" href="">
    <link rel="amphtml" href="">

    <meta property="og:name" value="">

    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "NewsArticle",
        "headline": "Open-source framework for publishing content",
        "datePublished": "2015-10-07T12:02:41Z",
        "image": [
          "logo.jpg"
        ]
      }
    </script>

    <!--
	
		ASSETS

		1) AMP Libraries
		2) Custom Fonts
		3) Custom CSS

    -->
    
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <?php wpamp_libs(); ?>
    <?php wpamp_fonts(); ?>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <style amp-custom>
    	<?php echo file_get_contents(get_template_directory_uri().'/lib/css/style.css'); ?>
    </style>
  </head>
  <body class="<?php wp_body_class(); ?>">
