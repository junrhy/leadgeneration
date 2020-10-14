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

            .tagline {
                font-size: 18pt;
                color: #b9b2aa;
            }

            .emphasize {
                color: #0aa55a;
             }

            .emphasize-bold {
                font-weight: bold;
            }

            .invite {
                margin-top: 40px;
            }

            .when {
                font-size: 18pt;
                font-weight: bold;
            }

            .urgent {
                color: red;
                text-decoration: underline;
            }

            .button {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 24px;
                border-radius: 10px;
                cursor: pointer;
                margin-top: 10px;
            }

            .button:hover {
                background-color: orange;
            }

            .testimonials {
                font-size: 14pt;
                font-weight: bold;
                color: #b9b2aa;
            }

            input[type="text"] {
                border: 1px solid black;
                font-size: 16pt;
                padding: 8px;
            }

            .registration-form {
                border: 3px solid #0aa55a;
                border-radius: 5px;
            }

            .footer {
                background-color: #282b3e;
                color: #ffffff;
                font-size: 12pt;
                text-align: center;
            }

            .footer a {
                text-decoration: none;
                color: #ffffff;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif
        </div>
        <div style="background-color: #282b3e;text-align: center;">
            <a href="#register"><img src="{{ asset('storage/webinar.png') }}" class="responsive"></a>
        </div>
        <br>
        <div class="content">
            <span class="header">What is Financial Planning?</span>
            <br>
            Financial planning is the process of <span class="emphasize">meeting your life goals</span> through the <span class="emphasize">proper management of finances</span>. Life goals, which usually involve necessities of life such us <span class="emphasize-bold">buying your <span class="emphasize">own home</span></span>, <span class="emphasize-bold">saving for your <span class="emphasize">child’s education</span></span>, <span class="emphasize-bold">planning for your <span class="emphasize">retirement</span></span> or <span class="emphasize emphasize-bold">estate planning</span>. 
            <br>
            <br>
            Unfortunately, many Filipinos have yet to discover the benefits of financial planning. Filipinos have to learn more about finance management. Many of our fellow filipinos use all their savings for consumption. That is why we have to encourage each and everyone to save more of your funds for the rainy days. Do you want to learn financial planning to achieve your goals?
            <br>
            <div class="invite">WE INVITE YOU TO JOIN THE <span class="emphasize-bold">FREE WEBINAR</span> ABOUT FINANCIAL PLANNING THIS COMING</div>
            <div class="when">OCT 12, 2020 at 5PM | <span class="urgent">Few slots Left!</span></div>
            <a class="button" href="#register">Reserve My Seat Now</a>
            <br>
            <br>
            ...
            <br>
            <a href="#register"><img src="{{ asset('storage/endorser.png') }}" class="responsive"></a>
            <br>
            <br>
            <span class="header">What You Will Learn?</span>
            <br>
            <span class="tagline">First you learn then you earn.</span>
            <br>
            <br>
            The value of investing. Why savings is not enough.
            <br>
            ...
            <br>
            The proper way of managing your money. What is the best method on how to budget.
            <br>
            ...
            <br>
            The benefits of life insurance protection and why you should have one or more.
            <br>
            ...
            <br>
            How to prepare yourself in case of health crisis. The benefits of Critical illness Insurance.
            <br>
            ...
            <br>
            What are the investment opportunities that can help you achieve your goals.
            <br>
            <br>
            <div class="invite">JOIN THE <span class="emphasize-bold">FREE WEBINAR</span> THIS COMING</div>
            <div class="when">OCT 12, 2020 at 5PM | <span class="urgent">Few slots Left!</span></div>
            <a class="button" href="#register">Reserve My Seat Now</a>
            <br>
            <br>
            <span class="header">About the Host</span>
            <br>
            <span class="tagline">If you need a financial advisor or consultant, look for someone with the heart of a teacher.</span>
            <br>
            <br>
            <img src="{{ asset('storage/host-mye.png') }}" class="responsive" style="max-width: 200px;">
            <br>
            <strong>Mye Bornales</strong>
            <br>
            Business Unit Head
            <br>
            <strong style="color: #0aa55a;">Manulife Philippines</strong>
            <br>
            ...
            <br>
            Senior Financial Planner working in the industry for 7 years
            <br>
            ...
            <br>
            Specialized in developing financial strategies by guiding clients to establish financial goals
            <br>
            ...
            <br>
            Worked in Asset Management as a Financial Analyst in Singapore
            <br>
            ...
            <br>
            Currently working in Manulife Philippines as a Business Unit Head with a passion of reaching each in every Filipino for Financial literacy.
            <br>
            <br>
            <span class="header">Why we limit our participants?</span>
            <br>
            In our webinar you will not just listen but the host will talk to you, interact with you (no camera needed). To properly give you guidance on your specific goals. After that, If you wish to have a one-on-one session, we will be happy to have an appoinment with you in your preferred schedule. Appointments are only offered to webinar participants.
            <br>
            <br>
            <span style="color: red;">Registration Closes In Oct 11, 2020 at 12midnight, Reserved your seat now.</span>
            <br>
            <br>
            This webinar from a well experience financial advisor is your biggest opportunity already. Offered FREE for you.
            <br>
            <br>
            <div class="invite">JOIN THE <span class="emphasize-bold">FREE WEBINAR</span> THIS COMING</div>
            <div class="when">OCT 12, 2020 at 5PM | <span class="urgent">Few slots Left!</span></div>
            <a class="button" href="#register">Reserve My Seat Now</a>
            <br>
            <br>
            <span class="header">Attendees Says</span>
            <br>
            ...
            <br>
            Mye is really good at explaining the details about financial planning. My mind has been open to new possibilities and opportunities that I can do to secure my future. Big thanks to you Ma'am Mye. Keep doing it to help more filipinos.
            <br>
            <span class="testimonials">Jun Rhy Crodua | 33yrs old | Cebu City, Philippines</span>
            <br>
            <br>
            <span class="header">Don't Miss Out</span>
            <br>
            <span class="header">Reserve</span>
            <br>
            <span class="header">Your Spot!</span>
            <div class="invite">JOIN THE <span class="emphasize-bold">FREE</span> WEBINAR ABOUT FINANCIAL PLANNING THIS COMING</div>
            <div class="when">OCT 12, 2020 at 5PM | <span class="urgent">Few slots Left!</span></div>
            <span style="font-size: 10pt;">To register for this webinar kindly fill-up the form and click Submit.</span>
            <br>
            <div style="max-width:500px;margin: auto;">
                <table id="register" class="registration-form responsive" cellspacing="5">
                    <tr>
                        <td align="left" style="font-size: 12pt;min-width: 80px;">First Name</td>
                        <td style="text-align: left;"><input type="text" name="first_name" class="responsive" style="width:90%; max-width: 340px;"></td>
                    </tr>
                    <tr>
                        <td align="left" style="font-size: 12pt;">Last Name</td>
                        <td style="text-align: left;"><input type="text" name="last_name" class="responsive" style="width:90%; max-width: 340px;"></td>
                    </tr>
                    <tr>
                        <td align="left" style="font-size: 12pt;">Email</td>
                        <td style="text-align: left;"><input type="text" name="email" class="responsive" style="width:90%; max-width: 340px;"></td>
                    </tr>
                </table>
                <span style="font-size: 10pt;">We will email to you the instructions on how to access the webinar.</span>
                <br>
                <button class="button" style="width: 100%;font-size: 16pt;">Yes, I understand. Submit!</button>
            </div>
            <br>
            <br>
        </div>
        <div class="footer">
            <br><br>
            <a href="https://www.manulife.com.ph/en/individual/about-us.html" target="_BLANK">About Manulife</a> | 
            <a href="https://www.manulife.com.ph/en/individual/products.html" target="_BLANK">Manulife Products</a> | 
            <a href="https://www.plia.org.ph/financial-planning-prepares-you-for-life/" target="_BLANK">Financial Planning for Filipinos</a>
            <br><br><br>
        </div>
    </body>
</html>
