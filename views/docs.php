<html>

<head>
	<title>Documentation - Bubble Templating</title>
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
            <h2 style="font-weight: 300;">Getting Started !</h2>
            <div style="margin-top:5%">
                <h3 style="font-weight: bold"><span class="hashtag">#</span> Why DinoPHP ?</h3>
                <p>
                    Bubble is both designer and developer friendly by sticking to PHP's principles and adding functionality useful for templating environments.
                </p>
                <p>
                    Bubble is used by Open-Source projects and frameworks like DinoPHP — just to name a few.
                </p>
                <p>
                    Fast: Bubble compiles templates down to plain optimized PHP code. The overhead compared to regular PHP code was reduced to the very minimum.
                </p>
                <p>
                    Secure: Bubble has a sandbox mode to evaluate untrusted template code. This allows Bubble to be used as a template language for applications where users may modify the template design.
                </p>
                <p>
                    Flexible: Bubble is powered by a flexible lexer and parser. This allows the developer to define their own custom tags and filters, and to create their own DSL.
                </p>
            </div>
        </div>
    </div>

    </div>

{% include 'footer.php' %}
</body>
{% include 'scripts.php' %}

</html>