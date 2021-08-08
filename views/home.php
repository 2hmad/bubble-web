<html>

<head>
	<title>Home - Bubble Templating</title>
	{% include 'links.php' %}
	<style>
		.container {
			text-align: center;
			margin-top: 7%;
		}

	</style>
</head>

<body>
{% include 'navbar.php' %}
	<div class="container">
		<div>
			<h1 style="font-weight: 800;font-size: 40px;line-height: 45px;margin-bottom: 2%;">Bubble is a PHP Template Engine</h1>
			<span style="font-weight: 400;font-size: 16px;color: #757575;margin-bottom: 2%;">that helps you quickly write simple yet powerful web applications</span>
		</div>
		<div class="buttons" style="display: flex;gap: 15px;justify-content: center;flex-wrap: wrap;margin-top:3%">
			<a href="docs">
				<button class="docs"><i class="fad fa-file-code" style="font-size: 15px;"></i> Documentation</button>
			</a>
			<a href="https://dinophp.com/blog">
				<button class="blog"><i class="far fa-rss" style="font-size: 15px;"></i> Blog</button>
			</a>
			<a href="https://github.com/DinoPHP/BubbleTemplateEngine">
				<button class="contribute"><i class="far fa-tools" style="font-size: 15px;"></i> Contribute</button>
			</a>
		</div>

		<div class="download-section" style="margin-top: 7%;">
			<h2>Download & Install</h2>
			<p style="text-align: left;margin-top: 2%;margin-bottom: 2%;font-weight: 600;">Install via composer, Don't forget to replace [App Name] with your app name :</p>
			<div class="code">
				composer require dinophp/bubbletemplate [App Name]
			</div>
			<p style="text-align: left;margin-top: 2%;margin-bottom: 2%;font-weight: 600;">Or install it via composer.json in your project :</p>
			<div class="code">
				"dinophp/bubbletemplate" : "^1.0.1"
			</div>
		</div>

		<div class="follow-section" style="margin-top: 7%;">
			<h2>Follow Us on Twitter</h2>
			<!-- <a class="twitter-timeline" data-lang="en" data-width="500" data-height="600" data-theme="dark" href="https://twitter.com/dino_php?ref_src=twsrc%5Etfw">Tweets by dino_php</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
	</div>

{% include 'footer.php' %}
</body>
{% include 'scripts.php' %}

</html>