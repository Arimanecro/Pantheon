<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Spirax" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <title>Welcome</title>
    <style type="text/css">
        * {
            padding: 0px;
            margin: 0px;
        }
        html, body { height: 100%;
            background: #f1ead0 url("/public/img/logo/logo.jpg") no-repeat center center;
            background-size: contain;
        
        }
        #logo{
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        p {font-family: 'Spirax'; font-size: 80px;line-height: 55px;}
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.body.insertBefore(document.getElementById('bench'), document.body.firstChild);
        });
    </script>
</head>
<body>
</html>