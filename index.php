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

       span{
        font-weight: bold;
        color:blue;
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
        		<h1>1)WHAT IS HTML? </h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">
                 <li> <span>H</span>yper<span>t</span>ext <span>M</span>arkup <span>L</span>anguage is the standard markup language for documents designed to be  displayed in a web browser.Can be assisted by technologies such as Cascading Style Sheets and  scripting languages such as JavaScript.  </li>
                 <li><span>Hypertext</span> is text displayed on a computer display or other electronic devices with references to  other text that the reader can immediately access. Hypertext documents are interconnected by  hyperlinks, which are typically activated by a mouse click, keypress set or by touching the screen</li>
                 <li>A<span> markup</span> language is a computer language that uses tags to define elements within a document.  It is human-readable, meaning markup files contain standard words, rather than typical  programming syntax. </li>   
                </p>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>  2)BASIC TASK OF HTML AS COMPARED TO CSS AND JS  </h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">To create actual content of the page such as written text,or taking inputs from the user etc..  It basically defines the structure and content of  a page.</p>
                <p><a href="https://docs.google.com/document/d/13tFQ_3hWLq7jFTUcaDHyefWdBhtSW-yJWqKF9XrEHRw/edit?usp=sharing">layout</a> </p>
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>3)TAGS </h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	
                <li>A tag is a special word or letter surrounded by angle brackets, < and >.</li>
                <li> Let’s say it have a predefined meaning,which tells the browser how the contents within the tag is  to be treated as</li>
                <li><a href="https://docs.google.com/document/d/13tFQ_3hWLq7jFTUcaDHyefWdBhtSW-yJWqKF9XrEHRw/edit?usp=sharing"><span>Syntax and Example</span></a></li>
                <br>
                <li><span>Note:</span>Some tags do not have end tags</li>
            </div>
        </div>
       
       <div class="item">
          <div class="heading jumbotron">
                <h1>LIST OF TAGS </h1>
            </div>

         <div class="heading_content jumbotron lead">

            	<!-- <p style="display: inline-block;"> -->
                    <ul style="display: inline-block;">
                        <li>h1-h6</li>
                        <li>hr</li>
                        <li>br</li>
                    </ul>
              <!--  </p> -->
               <!--  <p style="display: inline-block; margin-left: 5%;"> -->
                    <ul style="display: inline-block;">
                        <li>p</li>
                        <li>div</li>
                        <li>span</li>
                    </ul>
                <!-- </p> -->
                <!-- <p style="display: inline-block; margin-left: 5%;"> -->
                <ul style="display: inline-block; margin-left: 5%;">
                    <li>a</li>
                    <li>img</li>
                    <li>strong</li>
                </ul>
                <!-- </p> -->
                <!-- <p style="display: inline-block; margin-left: 5%;"> -->
                    <ul style="display: inline-block; margin-left: 5%;">
                        <li>style</li>
                        <li>link</li>
                        <li>script</li>
                    </ul>
                <!-- </p> -->
                <!-- <br> -->
                <!-- <p style="display: inline-block; "> -->
                    <ul style="display: inline-block; margin-left: 5%;">
                        <li><span> List: </span> </li>
                            <ol>
                                <li>ol</li>
                                <li>ul</li>
                                <li>li</li>
                            </ol>
                        </ul>
                <!-- </p> -->
                <!-- <p style="display: inline-block; margin-left: 5%;"> -->
                    <ul style="display: inline-block; margin-left: 5%;">
                        <li><span>Table:</span></li>
                            <ol>
                                <li>table</li>
                                <li>th</li>
                                <li>tr</li>
                            </ol>
                    </ul>
                <!-- </p> -->
               <!--  <p style="display: inline-block; margin-left: 5%;"> -->
                    <ul style="display: inline-block; margin-left: 5%;">
                        <li><span>Form:</span></li>
                            <ol>
                                <li>form</li>
                                <li>label</li>
                                <li>input</li>
                            </ol>
                    </ul>
                <!-- </p> -->
            </div>
        </div>
        <div class="item">
        	<div class="heading jumbotron">
        		<h1>ATTRIBUTES </h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<p class="align-middle">
                   <li>An attribute is used to define the characteristics of an HTML element and is placed inside the  element's opening tag.</li>
                   <li>All attributes are made up of two parts − a name and a value </li>
                   <li><strong>Example:</strong>width="100%"</li>
                   <li>A tag can have more then one attributes,which are seperated by a space</li>   
                </p>
            </div>
        </div> 
        
        <div class="item">
            <div class="extra_div jumbotron lead">
                <div>
                    <strong>1)Headers:h1 to h6 </strong>
                          <li>The h1 to h6 tags are used to define HTML headings.  </li>
                          <li> <span>h1</span> defines the most important heading. <span>h6</span> defines the least important heading    </li>
                    
                    <strong>2)Horizontal row:hr tag</strong>
                        <li>The hr tag defines a thematic break/change of content in an HTML page (e.g. a shift of topic)</li>
                        <li>No end tag</li>
                    
                    <strong>3)Break:br tag</strong>
                        <li>The br tag inserts a line break</li>
                        <li>No end tag</li>
                    
                   <strong> 4)Paragraph:p tag</strong>
                        <li>Browsers automatically add some space (margin) before and after each p element</li>
                    
                    <strong>5)Divison:div tag</strong>
                        <li>The div tag defines a division or a section in an HTML document.</li>
                    
                    <strong>6)span tag</strong>
                        <li>The span tag provides a way to add a hook to a part of a text or a part of documen</li>
            </div>
           </div>
        </div> 

         <div class="item">
            <div class="extra_div jumbotron lead">
                <div>
                    7)Image :img tag
                    <li>The tag defines an image in an HTML page. </li>
                    <li>The img tag has two required attributes: <span>src</span> and <span> alt.</span>  </li>
                   <p> -src :image to be displayed<br>  
                    -alt:Name to be displayed incase image is not displayed <br> 
                    -other attributes​:height,width
                </p>
                 EG​: (tag_name in angle brackets) src="smiley.gif" alt="Smiley face" height="42" width="42> (close angle brackets)
                 <img src="smiley.gif" alt="Smiley face" height="42" width="42">    
                </div>
            </div>
        </div>

        <div class="item">
        	<div class="heading jumbotron">
        		<h1>8)Anchor tag</h1>
        	</div>
            <div class="heading_content jumbotron lead">
            	<li>The a tag defines a hyperlink, which is used to link from one page to another  </li>
                <li>The most important attribute of the a element is the <span>href</span> attribute, which indicates the link's  destination.  </li>
                <li><strong>Syntax​:</strong>   (opening tag) href=”link”>Link to be clicked (/closing tag) </li>
                <li><strong> Eg : </strong>:<a href=”​www.google.com​”>Click here to visit google</a> </li>
                <li>href itself has some of its attributes which includes: <strong> 1)mailto: 2)tel: </strong> </li>
            </div>
        </div>

        <div class="item">
            <div class="extra_div jumbotron lead">
                <div>
                    9)style tag
                    <li>Inside the style element you specify how HTML elements should render in a browser.</li>
                    <li><strong>Syntax:</strong>Html_element{attribute:value;}  </li>
                    <li><strong>Example:</strong>H1{color:blue;}  </li>
                    <br>
                    10)link tag
                    <li>Used to define link between the html document and other external resources.</li>  
                    <li><strong>Example:</strong>(link rel="stylesheet" type="text/css" href="exp1.css")</li>
                    <br>
                    11)script tag
                    <li>Used to define client side script</li>
                    <li><strong>Example:</strong>(script type="text/javascript"  src="exp1.js")    (/script)  
                       
                </div>
            </div>
        </div>

        <div class="item">
            <div class="heading jumbotron">
                <h1>12)Tags for making  a list</h1>
            </div>
            <div class="heading_content jumbotron lead">
                <li>The items listed under <span>ol</span> tag are ordered</li>
                <li>The items listed under <span>ul</span> tag are unordered</li>
                <li><span>li</span> is used for listing each item under ol and ul tags.</li>
                <li>Eg:Places to visit in Delhi:
               <UL>
               <LI>RED FORT</LI>
               <LI> HUMAYUN'S TOMB</LI>
               <LI>INDIA GATE</LI>
             </UL>
               <li>Try this yourself:<a href="https://docs.google.com/document/d/13tFQ_3hWLq7jFTUcaDHyefWdBhtSW-yJWqKF9XrEHRw/edit?usp=sharing">image</a></li>
            </div>
        </div>

          <div class="item">
            <div class="extra_div jumbotron lead">
                <div>
                   13)TABLE
                   <li>The table tag defines an HTML table.  </li>
                   <li>An HTML table consists of the table element and one or more ​tr​, ​th​, and ​td​ element </li>
                   <li>Attributes:​border,width,height    </li>
                   <li><span>th</span> Defines table head  <span>tr</span> Defines table row  <span>td</span> Defines table cell  </li>
                   <li><span>rowspan,colspan</span> are two attributes of the'th'tag.</li>
                   <li>Try:<a href="https://docs.google.com/document/d/13tFQ_3hWLq7jFTUcaDHyefWdBhtSW-yJWqKF9XrEHRw/edit?usp=sharing"> Image</a><br>
                   <br>
                   <li>The <strong>tbody</strong> element is used in conjunction with the ​<span>thead</span> and ​<span>tfoot</span>​ elements to specify each  part of a table (body, header, footer). </li>
                  <li> Eg:<a href="https://docs.google.com/document/d/13tFQ_3hWLq7jFTUcaDHyefWdBhtSW-yJWqKF9XrEHRw/edit?usp=sharing">Image</a></li>
                </div>
            </div>
        </div>

         <div class="item">
            <div class="extra_div jumbotron lead">
                <div>
                   14)FORM
                   <li>It used to create an html form.  </li>
                   <li>Various elements of a form:  1]label 2]input 3]button</li>
                   <li><a href="https://docs.google.com/document/d/13tFQ_3hWLq7jFTUcaDHyefWdBhtSW-yJWqKF9XrEHRw/edit?usp=sharing">Image</a></li>    
                   <br>
                   <li><span>label</span>  This tag defines a label for the input or button 
                   <p> <strong>Attributes:</strong>for</li></p><br>
                   <li><span>input</span>  Takes input from the user</li>
                   <li><strong>Attributes:-</strong>
                    1)name  2)required  3)placeholder  4)accept  5)disabled
                    6)src:url
                    7)form_method:get or post
                    8)type:text,number,email,date,password,image,file,submit,button,checkbox,radio.  
                </li>
                <li>Eg:<form>
                     <label for="FName">First Name:</label>
                    <input id="FName" type="text" placeholder="John" required  >
                </form>
            </li>
    

                </div>
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
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">BOOTSTRAP 4</p>
     			</div>
            </div>
        </div>
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">WHAT IS BOOTSTRAP?</p>
     			</div>
            </div>
        </div>
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">DOES IT MAKE THINGS EASIER?</p>
     			</div>
            </div>
        </div>
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">MUCH EASIER???</p>
     			</div>
            </div>
        </div>
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">WAS HTML AND CSS WASTE OF TIME?</p>
     			</div>
            </div>
        </div>
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">WELL YES BUT ACTUALLY NO<p>
     			</div>
            </div>
        </div>
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">BOOTSTRAP CDN<p>
     					<br>
     				<p class="display-4">(CONTENT DELIVERY NETWORK)</p>
     			</div>
            </div>
        </div>
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">BOOTSTRAP GRIDS<p>
     			</div>
            </div>
        </div> 
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">TYPOGRAPHY<p>
     			</div>
            </div>
        </div>  
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">COLORS & IMAGES<p>
     			</div>
            </div>
        </div>   
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">CONTAINER<p>
     			</div>
            </div>
        </div>     
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">JUMBOTRON<p>
     			</div>
            </div>
        </div>   
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">BUTTONS<p>
     			</div>
            </div>
        </div>    
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">NAVBARS<p>
     			</div>
            </div>
        </div>    
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">FORMS<p>
     			</div>
            </div>
        </div>     
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">CARDS<p>
     			</div>
            </div>
        </div>     
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">MODAL<p>
     			</div>
            </div>
        </div>      
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">CAROUSEL<p>
     			</div>
            </div>
        </div>      
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">POPOVER, TOAST & SPINNERS<p>
     			</div>
            </div>
        </div>      
        <div class="item">
            <div class="extra_div jumbotron lead">
     			<div class="mid">
     				<p class="display-1">FLEX BOX<p>
     			</div>
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