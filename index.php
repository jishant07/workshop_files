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

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.flipster.min.js"></script>
    <style type="text/css">
        .item
        {
            height:85vh;
            width:100vw;
            background:lightgreen;
        }
        #flat
        {
            overflow-x:hidden;
            overflow-y: hidden;
            height:110%;
        }
        .container-fluid
        {
            vertical-align:middle;
        }
        .uls
        {
        	height: 100%;
        }
        ul li img
        {
        	padding: 0px 30px;
        	margin: auto;
        }

        body
        {
        	background: #062639;
        }
    </style>
</head>
<body>
    <br>
<div class="container-fluid">
<div id="demo-flat" class="demo row">
    <div class="col-lg-1"></div>
    <div id="flat" class="col-lg-10">
    	<!-- Added a new class to ul named 'uls' and changed height of all imgs-->
        <ul class="uls">
            <li data-flip-title="Red">
                <img src="img_b/html-5.svg" id="html_section" style="height: 550px;">
            </li>
            <li data-flip-title="Razzmatazz" data-flip-category="Purples">
                <img src="img_b/css-5.svg" id="css_section" style="height: 550px;">
             </li>
            <li data-flip-title="Deep Lilac" data-flip-category="Purples" style="padding-bottom: 10px;">
                <img src="img_b/Bootstrap.svg" id="bootstrap_section" style="height: 550px;">
            </li>
            <li data-flip-title="Daisy Bush" data-flip-category="Purples">
                <img src="img_b/Javascript.svg" id="javascript_section" style="height: 550px;">
            </li>
            <li data-flip-title="Cerulean Blue" data-flip-category="Blues">
                <img src="img_b/PHP.svg" id="jquery_section" style="height: 550px;">
            </li>
            <li data-flip-title="Cerulean Blue" data-flip-category="Blues">
                <img src="img_b/SQL.svg" id="php_section" style="height: 550px;">
            </li>
        </ul>
    </div>
    <div class="col-lg-1"></div>
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
    <div class="owl-carousel owl-one owl-theme owl-stage nonloop">
        <div class="item">
            <h1>HTML 1</h1>
            <p style="padding: 30px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="item" style="background: yellow;"><h1>HTML 2</h1></div>
        <div class="item" style="background: navy;"><h1>HTML 3</h1></div>
        <div class="item" style="background: red;"><h1>HTML 4</h1></div>
        <div class="item" style="background: cyan;"><h1>HTML 5</h1></div>
    </div>
</div>
<div id="css_info" style="display: none;">
    <button class="back">Back</button>
    <div class="owl-carousel owl-two owl-theme owl-stage nonloop">
        <div class="item">
            <h1>CSS 1</h1>
            <p style="padding: 30px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="item" style="background: yellow;"><h1>CSS 2</h1></div>
        <div class="item" style="background: navy;"><h1>CSS 3</h1></div>
        <div class="item" style="background: red;"><h1>CSS 4</h1></div>
        <div class="item" style="background: cyan;"><h1>CSS 5</h1></div>
    </div>
</div>
<div id="bootstrap_info" style="display: none;">
    <button class="back">Back</button>
    <div class="owl-carousel owl-theme owl-stage nonloop">
        <div class="item">
            <h1>BOOTSTRAP 1</h1>
            <p style="padding: 30px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="item" style="background: yellow;"><h1>BOOTSTRAP 2</h1></div>
        <div class="item" style="background: navy;"><h1>BOOTSTRAP 3</h1></div>
        <div class="item" style="background: red;"><h1>BOOTSTRAP 4</h1></div>
        <div class="item" style="background: cyan;"><h1>BOOTSTRAP 5</h1></div>
    </div>
</div>
<div id="javascript_info" style="display: none;">
    <button class="back">Back</button>
    <div class="owl-carousel owl-theme owl-stage nonloop">
        <div class="item">
            <h1>JavaScript 1</h1>
            <p style="padding: 30px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="item" style="background: yellow;"><h1>JavaScript 2</h1></div>
        <div class="item" style="background: navy;"><h1>JavaScript 3</h1></div>
        <div class="item" style="background: red;"><h1>JavaScript 4</h1></div>
        <div class="item" style="background: cyan;"><h1>JavaScript 5</h1></div>
    </div>
</div>
<div id="jquery_info" style="display: none;">
    <button class="back">Back</button>
    <div class="owl-carousel owl-theme owl-stage nonloop">
        <div class="item">
            <h1>Jquery 1</h1>
            <p style="padding: 30px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="item" style="background: yellow;"><h1>Jquery 2</h1></div>
        <div class="item" style="background: navy;"><h1>Jquery 3</h1></div>
        <div class="item" style="background: red;"><h1>Jquery 4</h1></div>
        <div class="item" style="background: cyan;"><h1>Jquery 5</h1></div>
    </div>
</div>
<div id="php_info" style="display: none;">
    <button class="back">Back</button>
    <div class="owl-carousel owl-theme owl-stage nonloop">
        <div class="item">
            <h1>PHP 1</h1>
            <p style="padding: 30px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="item" style="background: yellow;"><h1>PHP 2</h1></div>
        <div class="item" style="background: navy;"><h1>PHP 3</h1></div>
        <div class="item" style="background: red;"><h1>PHP 4</h1></div>
        <div class="item" style="background: cyan;"><h1>PHP 5</h1></div>
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
/*owl1.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('prev.owl');
    } else {
        owl.trigger('next.owl');
    }
    e.preventDefault();
});*/
</script>
<script type="text/javascript" src="js/flip.js"></script>
</html>