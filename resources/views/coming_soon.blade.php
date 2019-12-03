<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darbar restaurant</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CRoboto:400,700" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            width: 100%;
            margin: 0;
        }

        #container {
            background-image: url("{{asset('images/coming_soon.jpeg')}}");
            height: 100%;
            width: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        @media screen and (max-width: 767px) {
            #container {
                background-size:unset;
            }
        }


    </style>
</head>
<body>
{{-- <img src="{{asset('images/foods/'.$photo->url)}}" style="width: 150px;height: 150px">--}}
<div id="container"></div>

</body>
</html>
