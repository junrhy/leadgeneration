<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Financial Planning Webinar</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito';
                font-size: 18pt;
                margin: 0 auto;
            }

            .content {
                text-align: center;
                margin: auto;
                width: 90%;
                max-width: 1000px;
            }

            .responsive {
                width: 100%;
                max-width: 1000px;
                height: auto;
            }

            .header {
                font-size: 36pt;
                color: #0aa55a;
                font-weight: bold;
            }
        </style>
    </head>
    <body class="antialiased">
    	<div class="content">
    		<br>
    		<span class="header">Thanks for signing up for:</span>
    		<br>
    		<br>
    		<strong>Financial Planning Webinar By Mye Bornales</strong>
    		<br>
    	</div>
    	<br>
    	<div style="background-color: #282b3e;text-align: center;">
			<img src="{{ asset('storage/webinar-thank-you.png') }}" class="responsive">
		</div>
		<br>
		<div class="content">
			Please check your email. We sent you the instructions on how to access the webinar.
		</div>
    </body>
</html>