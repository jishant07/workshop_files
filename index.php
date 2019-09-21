<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Flipster Demo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="../../demo.css"> -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" href="css/jquery.flipster.min.css">
    <link rel="stylesheet" type="text/css" href="assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/owl.theme.default.css">

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.flipster.min.js"></script>
    <style type="text/css">
        .item
        {
            height:85vh;
            width:100vw;
        }
        .container-fluid
        {
            width:75% !important;
        }
        .uls
        {
        	height: 100%;
        }

        ul li img
        {
        	margin: 55px;
        	height: 70vh;
        }

        body
        {
        	background: #062639;
        }

        .heading
        {
        	margin-top: 20px;
        	text-align: center;
        }

        .extra_div
        {
        	margin-top: 20px;
        	height: 77.5vh;
        	display: flex;
        	align-items: center;
        }

       .jumbotron
       {	
 			width: 70%;
       }

       .heading_content
       {
       		height: 50vh;
       		/*display: flex;
       		align-items: center;*/
       }

       .mid
       {
       		display: block;
       		width: 100%;
       		text-align: center;
       }

       h1
       {
       		font-size: 7vh;
       }

       li
       {
       	font-size: 3vh;
       }

       .hybrid
       {
       		font-size: 1.2vw;
       }
    </style>
</head>
<body>
<div class="container-fluid">
<div id="demo-flat" class="demo">

    <div id="flat">
    	<!-- Added a new class to ul named 'uls' and changed height of all imgs-->
        <ul class="uls">
            <li data-flip-title="Red">
                <img src="img_b/html-5.svg" id="html_section">
            </li>
            <li data-flip-title="Razzmatazz" data-flip-category="Purples">
                <img src="img_b/css-5.svg" id="css_section">
             </li>
            <li data-flip-title="Deep Lilac" data-flip-category="Purples">
                <img src="img_b/Bootstrap.svg" id="bootstrap_section">
            </li>
            <li data-flip-title="Daisy Bush" data-flip-category="Purples">
                <img src="img_b/Javascript.svg" id="javascript_section">
            </li>
            <li data-flip-title="Cerulean Blue" data-flip-category="Blues">
                <img src="img_b/PHP.svg" id="jquery_section">
            </li>
            <li data-flip-title="Cerulean Blue" data-flip-category="Blues">
                <img src="img_b/SQL.svg" id="php_section">
            </li>
        </ul>
    </div>
</div>
<script>
    var flat = $("#flat").flipster({
        style: 'flat',
        spacing: -0.25,
        start:'1'
    });
</script>
<div id="html_info" style="display: none;">
    <button class="back">Back</button>
    <div class="owl-carousel owl-theme owl-stage nonloop">

    	<!-- /////////////////////////////////////////////////////////////////////////////// 
											DIVS FOR SINGLE PAGE CENTER HEADING
    		/////////////////////////////////////////////////////////////////////////////// -->

    	<!-- <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">!!!   ENTER TEXT HERE   !!!</p>
     			</div>
            </div>
        </div> -->

        <!-- /////////////////////////////////////////////////////////////////////////////// 
											DIVS FOR HEADING + CONTENT
    		/////////////////////////////////////////////////////////////////////////////// -->

        <!-- <div class="item">
        	<div class="heading jumbotron">
        		<h1>CSS 5</h1>
        	</div>
            <div class="heading_content jumbotron lead">
     			!!!   ENTER TEXT HERE   !!!
            </div>
        </div> -->

        <!-- /////////////////////////////////////////////////////////////////////////////// 
											DIVS FOR EXTRA PAGES
    		/////////////////////////////////////////////////////////////////////////////// -->

        <!-- <div class="item">
            <div class="extra_div jumbotron lead">
     			!!!   ENTER YOUR CONTENT HERE   !!!
            </div>
        </div> -->

        <!-- /////////////////////////////////////////////////////////////////////////////// 
											HTML SECTION
    		/////////////////////////////////////////////////////////////////////////////// -->

        <div class="item">
        	<div class="heading jumbotron">
        		<h1>HTML 1</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>HTML 2</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>HTML 3</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>HTML 4</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>HTML 5</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div> 
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>HTML 6</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</div>
<div id="css_info" style="display: none;">
    <button class="back">Back</button>
    <div class="owl-carousel owl-theme owl-stage nonloop">
    	<!-- /////////////////////////////////////////////////////////////////////////////// 
											CSS SECTION
    		/////////////////////////////////////////////////////////////////////////////// -->
        <div class="item">
        	<div class="jumbotron extra_div">
      			<div class="mid">
      				<p class="display-1">CSS</p>
      			</div>
        	</div>
        </div>
        <div class="item">
            <div class="heading jumbotron">
        		<h1>What is CSS?</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p>
            		<ul>
            			<li>CSS stands for Cascading Style Sheets</li>
            			<li>CSS describes how HTML elements are to be displayed on screen, paper, or in other media</li>
            			<li>CSS saves a lot of work. It can control the layout of multiple web pages all at once</li>
            		</ul>
            	</p>
            </div>
        </div>
        
        <div class="item">
            <div class="extra_div jumbotron lead">
            	<div class="mid">
            		<p class="display-1">Why do we use CSS?</p>
            	</div>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>Types of CSS</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            		<ul>
	            		<li>External CSS (Stored in .CSS file)</li>
	            		<li>Internal CSS (Stored in same file under head using style tag)</li>
	            		<li>In-Line CSS (Uses style tag right after an element)</li>
	            	</ul>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>General Synatx</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<img src="img_b/selector.gif">
            </div>
        </div>
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">How do we access CSS elements?</p>
     			</div>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>SELECTORS</h1>
        	</div>
            <div class="heading_content jumbotron lead hybrid">
     			<p style="display: inline-block;">
     				<strong style="font-size: 1.3vw">1. Element Selector</strong>
     				<br>
     				<br>
     				Synatx :
     				<br>
     				Element_tag { Declaration }
     				<br>
     				<br>
     				Example :
     				<br>
     				p { color : blue; }
     			</p>
     			<p style="display: inline-block; margin-left: 5%;">
     				<strong  style="font-size: 1.3vw">2. ID Selector</strong>
     				<br>
     				<br>
     				Syntax :
     				<br>
     				#ID_name { Declaration }
     				<br>
     				<br>
     				Example :
     				<br>
     				#myDiv { color : blue; }
     			</p>
     			<p style="display: inline-block; margin-left: 5%;">
     				<strong  style="font-size: 1.3vw">3. Class Selector</strong>
     				<br>
     				<br>
     				Syntax : 
     				<br>
     				.Class_name { Declaration }
     				<br>
     				<br>
     				Example :
     				<br>
     				.myDiv { color : blue; }
     			</p>
     			<p style="display: inline-block; margin-left: 5%;">
     				<strong  style="font-size: 1.3vw">4. Universal Selector</strong>
     				
     				<br>
     				<br>
     				Syntax : 
     				<br>
     				* { Declaration }
     				<br>
     				<br>
     				Example :
     				<br>
     				* { color : blue; }
     			</p>
            </div>
        </div>
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">CSS SPECIFICITY</p>
     				<p class="display-4">Inline > IDs > Class > Elements</p>
     			</div>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>COLOR</h1>
        	</div>
            <div class="heading_content jumbotron lead">
     			<ul style="width: 70%; margin-left: 10%;">
     				<li style="background-color: DodgerBlue;">1. CSS Background Color <span style="float: right;">background-color : DodgerBlue</span></li>
     				<li style="color: tomato;">2. CSS Text Color <span style="float: right;">color : tomato</span></li>
     				<li style="color: rgb(30,144,255)">3. CSS RGB Values <span style="float: right;">color : rgb(30, 144, 255)</span></li>
     				<li style="color: rgba(255, 99, 71, 0.5)">4. CSS RGBalpha Values <span style="float: right;">color : rgba(255, 99, 71, 0.5)</span></li>
     				<li>5. CSS HEX Values <span style="float: right;">color : #000000</span></li>
     			</ul>
            </div>
        </div>
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">BOX MODEL</p>
     			</div>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>BORDERS</h1>
        	</div>
            <div class="heading_content jumbotron lead hybrid">
            	<p>
            		Syntax : border : (width) (border-style) (color);
            		<br>
            		Example : border : 1px solid grey;
            	</p>
     			<div style="text-align: center; border: 1px solid grey; width: 100%;">
     				<p>Border of width 1px with 'solid' style and grey color</p>
     			</div>
     			<p>
     				Border radius attribute : border-radius : 5px;
     			</p>
     			<div style="text-align: center; border: 1px solid grey; border-radius: 5px; width: 100%;">
     				<p>Border of width 1px with 'solid' style, rounded corners and grey color</p>
     			</div>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>MARGIN</h1>
        	</div>
            <div class="heading_content jumbotron lead hybrid">
     			<p>Margins are used to seprate elements</p>
     			<div style="width: 30vw; height: 5vh; background-color: tomato; display: inline-block; margin: 10px;text-align: center;">margin : 10px;</div>
     			<div style="width: 30vw; height: 5vh; background-color: tomato; display: inline-block; margin: 10px;text-align: center;">margin : 10px;</div>
     			<p>
     				Syntax : <br>
     				margin : 10px;<br>
     				margin-(x) : 10px;<br>
     				X can be top, bottom, right, left <br>	
     				margin : 10px 20px 30px 40px;<br>
     				margin : 10px 20px;
     			</p>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>PADDING</h1>
        	</div>
            <div class="heading_content jumbotron lead">
     			<p>
     				Padding Follows same properties as of Margin <br>
     				<br>
     				The CSS padding properties are used to generate space around an element's content, inside of any defined borders. <br>
     				<br>
					With CSS, you have full control over the padding. There are properties for setting the padding for each side of an element (top, right, bottom, and left)
     			</p>
            </div>
        </div>
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">CSS UNITS</p>
     			</div>
            </div>
        </div>
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">CSS TEXT & FONTS</p>
     			</div>
            </div>
        </div>
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">CSS POSITIONS</p>
     			</div>
            </div>
        </div>
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">CSS PSEUDO	- CLASS</p>
     			</div>
            </div>
        </div>
    </div>
</div>
<div id="bootstrap_info" style="display: none;">
    <button class="back">Back</button>
    <div class="owl-carousel owl-theme owl-stage nonloop">
    	<!-- /////////////////////////////////////////////////////////////////////////////// 
											BOOTSTRAP SECTION
    		/////////////////////////////////////////////////////////////////////////////// -->
        <div class="item">
       		<div class="heading jumbotron">
        		<h1>BOOTSTRAP 1</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>BOOTSTRAP 2</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>BOOTSTRAP 3</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>BOOTSTRAP 4</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>BOOTSTRAP 5</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</div>
<div id="javascript_info" style="display: none;">
    <button class="back">Back</button>
    <div class="owl-carousel owl-theme owl-stage nonloop">
    	<!-- /////////////////////////////////////////////////////////////////////////////// 
											JAVASCRIPT SECTION
    		/////////////////////////////////////////////////////////////////////////////// -->
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>JAVASCRIPT 1</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>JAVASCRIPT 2</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>JAVASCRIPT 3</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>JAVASCRIPT 4</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>JAVASCRIPT 5</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</div>
<div id="jquery_info" style="display: none;">
    <button class="back">Back</button>
    <div class="owl-carousel owl-theme owl-stage nonloop">
    	<!-- /////////////////////////////////////////////////////////////////////////////// 
											PHP SECTION
    		/////////////////////////////////////////////////////////////////////////////// -->
        <div class="item">
         	<div class="heading jumbotron">
        		<h1>PHP 1</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>PHP 2</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>PHP 3</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>PHP 4</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>PHP 5</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</div>
<div id="php_info" style="display: none;">
    <button class="back">Back</button>
    <div class="owl-carousel owl-theme owl-stage nonloop">
    	<!-- /////////////////////////////////////////////////////////////////////////////// 
											SQL SECTION
    		/////////////////////////////////////////////////////////////////////////////// -->
        <div class="item">
         	<div class="heading jumbotron">
        		<h1>SQL 1</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>SQL 2</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>SQL 3</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>SQL 4</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>SQL 5</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</div>
</div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript">
    var owl = $('.owl-carousel');
    $('.nonloop').owlCarousel({
    center: true,
    loop:false,
    items:2,
    margin:50,
    center:true,
    animateOut: 'zoomInDown',
    animateIn: 'zoomOutUp',
    responsive:{
        0:{
            items:1
        }
    }
});
owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('prev.owl');
    } else {
        owl.trigger('next.owl');
    }
    e.preventDefault();
});
</script>
<script type="text/javascript">
    var html_section = 0;
    var css_section = 0;
    var bootstrap_section = 0;
    var javascript_section = 0;
    var jquery_section = 0;
    var php_section = 0;
    function hide_all()
    {
        if (html_section)
        {
            $('#html_info').fadeOut('fast');
            html_section = 0;
        }
        if (css_section)
        {
            $('#css_info').fadeOut('fast');
            css_section = 0;
        }
        if (bootstrap_section)
        {
        	$('#bootstrap_info').fadeOut('fast');
            bootstrap_section = 0;
        }
        if (javascript_section)
        {
        	$('#javascript_info').fadeOut('fast');
            javascript_section = 0;
        }
        if (jquery_section)
        {
        	$('#jquery_info').fadeOut('fast');
            jquery_section = 0;
        }
        if (php_section)
        {
        	$('#php_info').fadeOut('fast');
            php_section = 0;
        }
    }
    $(document).ready(function()
    {
        $('#html_section').on("click",function()
        {
            $('#flat').fadeOut("fast",function()
            {
                $('#html_info').fadeIn("fast");
                html_section = 1;
            })
        });
        $('#css_section').on("click",function()
        {
            $('#flat').fadeOut("fast",function()
            {
                $('#css_info').fadeIn("fast");
                css_section = 1;
            })
        });
        $('#bootstrap_section').on("click",function()
        {
            $('#flat').fadeOut("fast",function()
            {
                $('#bootstrap_info').fadeIn("fast");
                bootstrap_section = 1;
            })
        });
        $('#javascript_section').on("click",function()
        {
            $('#flat').fadeOut("fast",function()
            {
                $('#javascript_info').fadeIn("fast");
                javascript_section = 1;
            })
        });
        $('#jquery_section').on("click",function()
        {
            $('#flat').fadeOut("fast",function()
            {
                $('#jquery_info').fadeIn("fast");
                jquery_section = 1;
            })
        });
        $('#php_section').on("click",function()
        {
            $('#flat').fadeOut("fast",function()
            {
                $('#php_info').fadeIn("fast");
                php_section = 1;
            })
        });
        $('.back').on("click",function()
        {
            hide_all();
            setTimeout(function(){ $('#flat').fadeIn() }, 500);
        });
    });
</script>
</html>