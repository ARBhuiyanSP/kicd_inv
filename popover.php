<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href="https://cdn.bootcss.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet"/>
        <title>test</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.bootcss.com/popper.js/1.11.0/umd/popper.min.js" ></script>
        <script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>   
        <style>
            
        </style>
    </head>
    <body>
        
            <span href="#" data-toggle="popover" title="Popover Header" data-html="true" data-content="<div><table border='1'><tr><td>A</td><td>B</td></tr></table></div>">Toggle popover</span>
       
        <script>
            $(function () {
                $('[data-toggle="popover"]').popover()
            })
        </script>
    </body>
</html>