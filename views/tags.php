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

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Asset</h5>
                <p>Allow for you use files from public folder such as photos, javascripts files, css and etc..</p>
                <code>
&#123;&#123; ('js/script.jg') &#125;&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Comment</h5>
                <p>You can write a comment with simple method :</p>
                <code>
&#123;# Hello World #&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Apply</h5>
                <p>The apply tag allows you to apply Twig filters on a block of template data:</p>
                <code>
&#123;% apply upper %&#125;
This text becomes uppercase
&#123;% endapply %&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Auto Escaping</h5>
                <p>Whether automatic escaping is enabled or not, you can mark a section of a template to be escaped or not by using the autoescape tag:</p>
                <code>
&#123;% autoescape %&#125;
This text will be automatically escaped
&#123;% endautoescape %&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Cache</h5>
                The cache tag tells Bubble to cache a template fragment
                <code>
&#123;% cache (cache key) %&#125;
Cached
&#123;% endcache %&#125;
                </code>
                <code>
&#123;% cache (cache key) ttl(100) %&#125;
Cached for 100 second
&#123;% endcache %&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Do</h5>
                <code>
&#123;% do 5 + 5 %&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Extends</h5>
                <p>The extends tag can be used to extend a template from another one.</p>
                <code>
&#123;% extends "base.html" %&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Flush</h5>
                <p>It is flush the output buffer</p>
                <code>
&#123;% flush %&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Include</h5>
                <p>The include statement includes a template and outputs the rendered content of that file</p>
                <code>
&#123;% include 'footer.html' %&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Macros</h5>
                <p>Macros are comparable with functions in regular programming languages. They are useful to reuse template fragments to not repeat yourself.</p>
                <code>
&#123;% macro input(name, value, type = "text", size = 20) %&#125;
&lt;input type="&#123;&#123; type &#125;&#125;" name="&#123;&#123; name &#125;&#125;" value="&#123;&#123; value|e &#125;&#125;" size="&#123;&#123; size &#125;&#125;"/>
&#123;% endmacro %}&#125;

                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Set</h5>
                <p>Inside code blocks you can also assign values to variables. Assignments use the set tag and can have multiple targets.</p>
                <code>
&#123;% set foo = 'bar' %&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Use</h5>
                <p>Horizontal reuse is a way to achieve the same goal as multiple inheritance, but without the associated complexity</p>
                <code>
&#123;% use "footer.html" %&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> With</h5>
                <p>Use the with tag to create a new inner scope. Variables set within this scope are not visible outside of the scope:</p>
                <code>
&#123;% with %&#125;
    &#123;% set foo = 42 %&#125;
&#123;% endwith %&#125;
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