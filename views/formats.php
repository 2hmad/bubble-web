<html>

<head>
	<title>Formats - Bubble Templating</title>
	{% include 'links.php' %}
	<style>
		.container {
			margin-top: 7%;
		}

	</style>
</head>

<body>
{% include 'navbar.php' %}
	<div class="container">

    <div class="row">
        <div class="col-lg-3">
            {% include 'docs-menu.php' %}
        </div>
        <div class="col-lg">
            <div style="margin-top:5%">
                <h3 style="font-weight: bold"><span class="hashtag">#</span> Format</h3>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> format</h5>
                <p>The format filter formats a given string by replacing the placeholders</p>
                <code>
&#123;{ "I like %s and %s."|format("rest", "bar") }&#125;
&#123;# Output : I like rest and bar. #&#125;
                </code>
                </div>

            </div>
        </div>
    </div>
    </div>

{% include 'footer.php' %}
</body>
{% include 'scripts.php' %}

</html>