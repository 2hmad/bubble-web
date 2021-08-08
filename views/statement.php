<html>

<head>
	<title>Statement - Bubble Templating</title>
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
                <h3 style="font-weight: bold"><span class="hashtag">#</span> Statement</h3>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> IF</h5>
                <p>The if statement in Bubble is comparable with the if statements of PHP</p>
                <code>
&#123;% if website == false %&#125;
    &lt;span>Website is under construction now&lt;/span>
&#123;% endif %&#125;
                </code>
                <p>You can also use not to check for values that evaluate to false</p>
                <code>
&#123;% if not user.liked %&#125;
    &lt;span>You are not liked our post&lt;/span>
&#123;% endif %&#125;
                </code>
                <p>For multiple conditions, and and or can be used</p>
                <code>
&#123;% if temperature > 18 and temperature < 27 %&#125;
    &lt;span>It's a nice day for a walk in the street.&lt;/span>
&#123;% endif %&#125;
                </code>
                <p>For multiple branches elseif and else can be used like in PHP. You can use more complex expressions there too</p>
                <code>
&#123;% if product.stock > 10 %&#125;
    &lt;span>It's a available.&lt;/span>
&#123;% elseif product.stock > 0 %&#125;
    &lt;span>Only &#123;{ product.stock }&#125; left!&lt;/span>
&#123;% else %&#125;
    &lt;span>Sold&lt;/span>
&#123;% endif %&#125;
                </code>

            </div>
        </div>
    </div>

    </div>

{% include 'footer.php' %}
</body>
{% include 'scripts.php' %}

</html>