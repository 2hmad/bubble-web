<html>

<head>
	<title>Operators - Bubble Templating</title>
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
                <h3 style="font-weight: bold"><span class="hashtag">#</span> Operators</h3>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Comparisons</h5>
                <p>The following comparison operators are supported in any expression: ==, !=, <, >, >=, and <=</p>
                <code>
&#123;% if 'Fabien' starts with 'f' %&#125;
    //Write Something Here
&#123;% endif %&#125;
                </code>
                <code>
&#123;% if 'Fabien' ends with 'n' %&#125;
    //Write Something Here
&#123;% endif %&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Logic</h5>
                <p>You can combine multiple expressions with the following operators</p>
                <p><b>and</b>: Returns true if the left and the right operands are both true.</p>
                <p><b>or</b>: Returns true if the left or the right operand is true.</p>
                <p><b>not</b>: Negates a statement.</p>
                <p><b>(expr)</b>: Groups an expression.</p>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Math</h5>
                <p>Bubble allows you to do math in templates; the following operators are supported</p>
                <p><b>+</b>: Adds two numbers together</p>
                <p><b>-</b>: Subtracts the second number from the first one.</p>
                <p><b>/</b>: Divides two numbers. The returned value will be a floating point number.</p>
                <p><b>%</b>: Calculates the remainder of an integer division.</p>
                <p><b>//</b>: Divides two numbers and returns the floored integer result.</p>
                <p><b>*</b>: Multiplies the left operand with the right one.</p>
                <p><b>**</b>: Raises the left operand to the power of the right operand.</p>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> IN</h5>
                <p>The in operator performs containment test. It returns true if the left operand is contained in the right</p>
                <code>
&#123;{ 'cd' in 'abcde' }&#125;
&#123;# returns true #&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> IS</h5>
                <p>The in operator performs containment test. It returns true if the left operand is contained in the right</p>
                <code>
&#123;{ 'cd' in 'abcde' }&#125;
&#123;# returns true #&#125;
                </code>
                </div>

                <div style="margin-bottom: 2%;">
                <h5><a href="#"><span class="hashtag">#</span></a> Other Operators</h5>
                <p>We accept other operators in our template engine</p>
                <p><b>..</b>: Creates a sequence based on the operand before and after the operator</p>
                <p><b>.</b>: Gets an attribute of a variable.</p>
                <p><b>[]</b>: Gets an attribute of a variable.</p>
                <p><b>|</b>: Applies a filter.</p>
                <p><b>~</b>: Converts all operands into strings and concatenates them.</p>
                <p><b>?:</b>: The ternary operator. (example:  &#123;{ foo ? 'yes' : 'no' }&#125;  )</p>
                <p><b>??</b>: The null-coalescing operator (example:  &#123;{ foo ?? 'yes' }&#125;  )</p>
                </div>

            </div>
        </div>
    </div>
    </div>

{% include 'footer.php' %}
</body>
{% include 'scripts.php' %}

</html>