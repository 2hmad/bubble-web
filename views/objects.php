<html>

<head>
	<title>Objects - Bubble Templating</title>
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
                <h3 style="font-weight: bold"><span class="hashtag">#</span> Objects</h3>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Comparisons</h5>
                <p>defined checks if a variable is defined in the current context</p>
                <code>
&#123;% if foo is defined %&#125;
    //Write Something Here
&#123;% endif %&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Empty</h5>
                <p>empty checks if a variable is an empty string, an empty array, an empty hash, exactly false, or exactly null</p>
                <code>
&#123;% if foo is empty %&#125;
    //Write Something Here
&#123;% endif %&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Even</h5>
                <p>even returns true if the given number is even</p>
                <code>
&#123;{ var is even }&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Odd</h5>
                <p>odd returns true if the given number is odd</p>
                <code>
&#123;{ var is odd }&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Iterable</h5>
                <p>iterable checks if a variable is an array or a traversable object</p>
                <code>
&#123;# evaluates to true if the foo variable is iterable #&#125;
&#123;% if users is iterable %&#125;

    &#123;% for user in users %&#125;
        Hello &#123;{ user }&#125;!
    &#123;% endfor %&#125;

&#123;% else %&#125;

    &#123;# users is probably a string #&#125;
    Hello &#123;{ users }&#125;!

&#123;% endif %&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Null</h5>
                <p>null returns true if the variable is null</p>
                <code>
&#123;{ var is null }&#125;
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