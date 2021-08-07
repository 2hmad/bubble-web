<html>

<head>
	<title>Installation - Bubble Templating</title>
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
                <h3 style="font-weight: bold"><span class="hashtag">#</span> Installation</h3>
                <p>
                    You are ready to create your first project with Bubble. Launch Windows Terminal ( Git ) and begin a new terminal session. Next, you can use a simple terminal command to create a new project. For example, to create a new application in a directory named "Bubble", you may run the following command in your terminal
                </p>
                <code>
                    composer create-project --prefer-dist dinophp/bubbletemplate [App Name]
                </code>
                <p>
                    Of course, you can change [App Name] in this URL to anything you like. The Dinophp application's directory will be created within the directory you execute the command from.
                </p>
                <h3 style="font-weight: bold"><span class="hashtag">#</span> Getting started on MacOS</h3>
                <p>
                    Coming Soon. Please keep in touch !
                </p>
                <h3 style="font-weight: bold"><span class="hashtag">#</span> Getting started on Linux</h3>
                <p>
                    Coming Soon. Please keep in touch !
                </p>

            </div>
        </div>
    </div>

    </div>

{% include 'footer.php' %}
</body>
{% include 'scripts.php' %}

</html>