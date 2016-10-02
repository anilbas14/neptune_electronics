<!DOCTYPE html>
<html>
    <head>
        <title>Neptune electronics</title>
        <style type="text/css">
            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }
        </style>
    </head>
        <body>
        <div class="container">
            <div class="content">
                <div class="title">Welcome to Neptune Electronics shop. <br> 
                {{ link_to_route('products.index', 'Proceed to catalogue') }} </div>
            </div>
        </div>
    </body>
</html>