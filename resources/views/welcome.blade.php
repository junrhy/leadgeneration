<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:image" content="{{ asset('storage/banner.jpg') }}" />

        <meta property="og:description" content="Financial advisor share their secrets to success so you can rock 2020. Join us for this inspiring, rejuvenating, motivating look at what secret sauce financial experts use to succeed in their financial life. This is for anyone of any level that are committed on achieving their life goals. You will be elevated both in your life and your financial literacy. Check out the topics below, there is something for everyone." />

        <meta property="og:url"content="http://financial-planning-seminar.junrhy.com" />

        <meta property="og:title" content="Getting Rich! With Proper Financial Planning" />

        <title>Financial Planning Webinar</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

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

            input.responsive.valid, select.responsive.valid {
                border: 2px solid #a3c1bb !important;
            }

            input.responsive.invalid, select.responsive.invalid {
                border: 2px solid red !important;
            }
        </style>
    </head>
    <body class="antialiased">
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
            <div class="when">Friday OCT 16, 2020 at 5PM | <span class="urgent">Few slots Left!</span></div>
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
            <div class="when">Friday OCT 16, 2020 at 5PM | <span class="urgent">Few slots Left!</span></div>
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
            <span style="color: red;">Registration Closes In Thursday OCT 15, 2020 at 12midnight, Reserved your seat now.</span>
            <br>
            <br>
            This webinar from a well experience financial advisor is your biggest opportunity already. Offered FREE for you.
            <br>
            <br>
            <div class="invite">JOIN THE <span class="emphasize-bold">FREE WEBINAR</span> THIS COMING</div>
            <div class="when">Friday OCT 16, 2020 at 5PM | <span class="urgent">Few slots Left!</span></div>
            <a class="button" href="#register">Reserve My Seat Now</a>
            <br>
            <br>
            <span class="header">Attendees Says</span>
            <br>
            ...
            <br>
            Mye is really good at explaining the details about financial planning. My mind has been open to new possibilities and opportunities that I can do to secure my future. Big thanks to you Ma'am Mye. Keep doing it to help more filipinos.
            <br>
            <span class="testimonials">Jun Rhy | IT/Software Consultant | 33yrs old | Cebu City, Philippines</span>
            <br>
            <br>
            ...
            <br>
            <br>
            Never thought that there is an easy way to grow your money. It's good that I know all of this at young age. Now I am sure that I will be a millionaire in the future.
            <br>
            <span class="testimonials">Justine Claire | College Student | 21yrs old | Romblon, Philippines</span>
            <br>
            <br>
            ...
            <br>
            <br>
            I observe that most members of our family become sickly when they are on their 40's and they don't have enough money to cure themeselves. It makes me worry because it might also happen to me when I get older. Good thing I was offered a Critical illness insurance. This will help a lot in case something happens to me.
            <br>
            <span class="testimonials">Huzziel | Marine Engineer | 29yrs old | Bohol, Philippines</span>
            <br>
            <br>
            <span class="header">Don't Miss Out</span>
            <br>
            <span class="header">Reserve</span>
            <br>
            <span class="header">Your Spot!</span>
            <div class="invite">JOIN THE <span class="emphasize-bold">FREE</span> WEBINAR ABOUT FINANCIAL PLANNING THIS COMING</div>
            <div class="when">Friday OCT 16, 2020 at 5PM | <span class="urgent">Few slots Left!</span></div>
            <span style="font-size: 10pt;">To register for this webinar kindly fill-up the form and click Submit.</span>
            <br>
            <div style="max-width:500px;margin: auto;">
               
                <table id="register" class="registration-form responsive" cellspacing="5">
                    <tr>
                        <td align="left" style="font-size: 12pt;min-width: 80px;">First Name</td>
                        <td style="text-align: left;">
                            <input type="text" name="first_name" placeholder="Enter First Name" class="responsive" required style="width:90%; max-width: 340px;">
                        </td>
                    </tr>
                    <tr>
                        <td align="left" style="font-size: 12pt;">Last Name</td>
                        <td style="text-align: left;">
                            <input type="text" name="last_name" placeholder="Enter Last name" class="responsive" required style="width:90%; max-width: 340px;">
                        </td>
                    </tr>
                    <tr>
                        <td align="left" style="font-size: 12pt;">Mobile No.</td>
                        <td style="text-align: left;">
                            <input type="text" name="contact_no" placeholder="Enter Mobile No." class="responsive" required style="width:90%; max-width: 340px;">
                        </td>
                    </tr>
                    <tr>
                        <td align="left" style="font-size: 12pt;">Email</td>
                        <td style="text-align: left;">
                            <input type="text" name="email" placeholder="Enter Email" class="responsive" required style="width:90%; max-width: 340px;">
                        </td>
                    </tr>
                </table>
                <span style="font-size: 10pt;"> <span id="email_error" style="color: red;"></span>We will email to you the instructions on how to access the webinar.</span>
                <br>
                <button id="submit" class="button" style="width: 100%;font-size: 16pt;">Yes, I understand. Submit!</button>
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
<script type="text/javascript">
$(function(){
    $("#submit").on('click', function(){
        // check required fields
        if (required_fields() == false) {
            return false;
        } 

        var first_name = $("input[name='first_name']").val();
        var last_name = $("input[name='last_name']").val();
        var contact_no = $("input[name='contact_no']").val();
        var email = $("input[name='email']").val();

        if (isEmail(email)) {
            // submit data
            $.ajax({
              method: "POST",
              url: "/save_lead",
              data: { 
                webinar_date: new Date(),
                first_name: first_name,
                last_name: last_name,
                contact_no: contact_no,
                email: email,
                _token: "{{ csrf_token() }}"
              }
            })
            .done(function( id ) {
              window.location.href = '/registration-received';
            });
        } else {
            // invalid email
            $("input[name='email']").removeClass("valid").addClass("invalid");
            $("#email_error").html('Please provide a valid email. ');
        }
    });

    function required_fields(){
        var num_invalid = 0;

        num_invalid = num_invalid + check_required_input('first_name');
        num_invalid = num_invalid + check_required_input('last_name');
        num_invalid = num_invalid + check_required_input('contact_no');
        num_invalid = num_invalid + check_required_input('email');

        if (num_invalid > 0) {return false;}else{return true;}
    }

    function check_required_input(input_name, type = "text"){
        var num_invalid = 0;

        if (type == "select") {
            var input = $('select[name="'+input_name+'"]');
            var is_name = input.val();
        } else {
            var input = $('input[name="'+input_name+'"]');
            var is_name = input.val();
        }

        if(is_name){
            input.removeClass("invalid").addClass("valid");
        }
        else{
            input.removeClass("valid").addClass("invalid");
            num_invalid = num_invalid + 1;
        }

        return num_invalid;
    }

    function clear_validation(input_name, type = "text"){
        if (type == "select") {
            $('select[name="'+input_name+'"]').removeClass("invalid");
            $('select[name="'+input_name+'"]').removeClass("valid");
        } else {
            $('input[name="'+input_name+'"]').removeClass("invalid");
            $('input[name="'+input_name+'"]').removeClass("valid");
        }
    }

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
});
</script>