<html>

<head>
	<title>Looping - Bubble Templating</title>
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
                <h3 style="font-weight: bold"><span class="hashtag">#</span> Looping</h3>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> For</h5>
                <p>Loop over each item in a sequence. For example, to display a list of letter:</p>
                <code>
&#123;% for letter in 'a'..'z' %&#125;
    &#123;{ letter }&#125;
&#123;% endfor %&#125;
                </code>
                <p>display a list of users provided in a variable called users :</p>
                <code>
&#123;% for user in users %&#125;
    &#123;{ user.email }&#125;
&#123;% endfor %&#125;
                </code>
                <p>If no iteration took place because the sequence was empty, you can render a replacement block by using else</p>
                <code>
&#123;% for user in users %&#125;

    &lt;li>&#123;{ user.email }&#125;&lt;/li>

&#123;% else %&#125;

    &lt;span>no user found&lt;/span>

&#123;% endfor %&#125;
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