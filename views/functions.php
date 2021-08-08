<html>

<head>
	<title>Functions - Bubble Templating</title>
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
                <h3 style="font-weight: bold"><span class="hashtag">#</span> Functions</h3>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Random</h5>
                <p>The random function returns a random value depending on the supplied parameter</p>
                <code>
&#123;{ random(['apple', 'orange', 'citrus']) }&#125;
&#123;# Output : citrus #&#125;

&#123;{ random(50, 100) }&#125;
&#123;# Output : 70 #&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Range</h5>
                <p>Returns a list containing an arithmetic progression of integers</p>
                <code>
&#123;% for i in range(0, 10) %&#125;
    &#123;{ i }&#125;, 
&#123;% endfor %&#125;
&#123;# Output : 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 #&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Min</h5>
                <p>min returns the smallest value of a sequence or a set of values</p>
                <code>
&#123;{ min(1, 3, 2) }&#125;
&#123;# Output : 1 #&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Max</h5>
                <p>max returns the biggest value of a sequence or a set of values</p>
                <code>
&#123;{ max(1, 3, 2) }&#125;
&#123;# Output : 3 #&#125;
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