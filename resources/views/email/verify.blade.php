<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body style="margin: 1% !important; padding: 4% !important; background-color: #F3F7F8">
<div style="display:block !important"><img src="https://www.investakers.com/images/investakers.png" style="float: left; margin-left:5%;"><h3 style="float: right; position:relative; top: -15px; margin-right: 5%;">Welcome to investakers</h3></div>
<div style="position: relative; top: 50px;">

<div style="background-color: white; padding:5%;" >
<p> Dear {{$user}},</p>
<p>Welcome to Arbking!</p>

    <p>Thanks so much for joining us. You’re on your way to starting your risk-free sports trading!</p>

    <p>Arbking is a sports trading company that helps absorb all the risks of sports betting on your side. We deliver this to you through our automated system which does all the needed work.</p>

    <p><span><a href="{{ URL::to('register/verify/' . $confirmation_code) }}">Click here</a></span> to activate your account or if its not clickable on your device copy and paste the following link on a new tab.</p>
    {{ URL::to('register/verify/' . $confirmation_code) }}
    <p>Have any questions? Read our <a href="https://www.investakers.com/faq">FAQ here</a> or visit us on any of our social media pages, We’re always here to help.
    <br>
    <br>
    <p>Cheerfully yours,</p>
    </p>Nina, Head of trades Arbking.</p>
    {{-- {{ URL::to('register/verify/' . $confirmation_code) }}.<br/> --}}
</div>
</div>
<h5 style="text-align: center; margin-top: 10%;">Arbking Group &copy; 2017</h5>
</body>
</html>