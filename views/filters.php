<html>

<head>
	<title>Filters - Bubble Templating</title>
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
                <h3 style="font-weight: bold"><span class="hashtag">#</span> Filters</h3>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Capitalize</h5>
                <p>The capitalize filter capitalizes a value. The first character will be uppercase, all others lowercase</p>
                <code>
&#123;{ 'my first car'|capitalize }&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Convert Encoding</h5>
                <p>The convert_encoding filter converts a string from one encoding to another. The first argument is the expected output charset and the second one is the input charset:</p>
                <code>
&#123;{ data|convert_encoding('UTF-8', 'iso-2022-jp') }&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Date</h5>
                <p>The date filter accepts strings (it must be in a format supported by the strtotime function), DateTime instances, or DateInterval instances. For instance, to display the current date, filter the word "now":</p>
                <code>
&#123;{ "now"|date("m/d/Y") }&#125;
                </code>
                <p>To escape words and characters in the date format use \\ in front of each character</p>
                <code>
&#123;{ now|date("F jS \\a\\t g:ia") }&#125;   
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Escaping</h5>
                <p>The escape filter escapes a string using strategies that depend on the context</p>
                <code>
&#123;{ user.username|escape }&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Join</h5>
                <p>The join filter returns a string which is the concatenation of the items of a sequence:</p>
                <code>
&#123;{ ['a', 'b', 'c']|join }&#125;
&#123;# Output : abc #&#125;
                </code>
                <p>The separator between elements is an empty string per default, but you can define it with the optional first parameter:</p>
                </div>
                <code>
&#123;{ ['a', 'b', 'c']|join(' , ') }&#125;
&#123;# Output : a , b , c #&#125;
                </code>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Json Encode</h5>
                <p>The json_encode filter returns the JSON representation of a value</p>
                <code>
&#123;{ data|json_encode() }&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Length</h5>
                <p>The length filter returns the number of items of a sequence or mapping, or the length of a string.</p>
                <code>
&#123;% if name|length > 10 %&#125;
   
&#123;% endif %&#125;

                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Lower</h5>
                <p>The lower filter converts a value to lowercase:</p>
                <code>
&#123;{ 'HELLO WORLD'|lower }&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Merge</h5>
                <p>The merge filter merges an array with another array:</p>
                <code>
&#123;% set values = [1, 2] %&#125;
&#123;% set values = values|merge(['mercedes', 'chevrolet']) %&#125;
&#123;# Output: [1, 2, 'mercedes', 'chevrolet'] #&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Replace</h5>
                <p>The replace filter formats a given string by replacing the placeholders</p>
                <code>
&#123;&#123; "I like %this% and %that%."|replace({'%this%': "restaurant", '%that%': "bars"}) &#125;&#125;
&#123;# Output: I like restaurant and bars #&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Url Encoding</h5>
                <p>The url_encode filter percent encodes a given string as URL segment or an array as query string</p>
                <code>
&#123;{ "url-seg*ment"|url_encode }&#125;
&#123;# outputs "url-seg%2Ament" #&#125;

&#123;{ "string and spaces"|url_encode }&#125;
&#123;# outputs "string%and%20spaces" #&#125;

&#123;{ {'param': 'value', 'rest': 'bar'&#125;|url_encode }&#125;
&#123;# outputs "param=value&rest=bar" #&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Split</h5>
                <p>The split filter splits a string by the given delimiter and returns a list of strings</p>
                <code>
&#123;% set foo = "123"|split('') %&#125;
&#123;# foo contains ['1', '2', '3'] #&#125;
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