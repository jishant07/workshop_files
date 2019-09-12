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