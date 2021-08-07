<html>

<head>
	<title>Tags - Bubble Templating</title>
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
                <h3 style="font-weight: bold"><span class="hashtag">#</span> Tags</h3>
                <h5><span class="hashtag">#</span> Apply</h5>
                <code>
{% apply upper %}
This text becomes uppercase
{% endapply %}
                </code>

            </div>
        </div>
    </div>

    </div>

{% include 'footer.php' %}
</body>
{% include 'scripts.php' %}

</html>