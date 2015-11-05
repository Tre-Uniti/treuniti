<!DOCTYPE html>
<html>
    <head>
        <title>Tre-Uniti</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
               <div class="title">Welcome to:</div>

                <a href="#"><img src={{asset('logo/tre-uniti.png')}} alt="tre-uniti" height = "400px" width = "400px"></a>
                <br/>
                <br/>
                <hr />
                <br/>
                <br/>
                <a href="http://belle-idee.org"><img src={{asset('logo/idee.png')}} alt="idee" height = "300px" width = "300px"></a>
                <a href="http://tre-uniti.org"><img src={{asset('logo/creatori.png')}} alt="creatori" height = "300px" width = "300px"></a>
                <a href="http://tre-uniti.org"><img src={{asset('logo/studenti.png')}} alt="studenti" height = "300px" width = "300px"></a>
            </div>
        </div>
    </body>
</html>
