<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>Laravel</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>



<nav class="navbar navbar-light bg-faded">
  <div class="row">
  <div class="col-lg-2">
  <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/img\logo.png" alt="LOGO" width="100%" height="50px">
</a>
  </div>
  </div>
</nav>




    <div id="app">
    <nav class="navbar navbar-inverse bg-inverse">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                    CodeFactory
                    </a>


                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li class="col-lg-4"><a href="{{ url('/login') }}">Login</a></li>
                        <li class="col-lg-4"><a href="{{ url('/register') }}">Register</a></li>
                    
                        @else
                            
                                

                                
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li><a href="{{ url('/checklist') }}">checklist</a></li>

                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 text-center">
     <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button thar-one" onclick="openCity(event, 'Apply')">Step 1 Application</a> </div>
    <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button thar-two" onclick="openCity(event, 'Passport')">Step 2 Passport</a> </div>
    <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button thar-three" onclick="openCity(event, 'Finance')"> Step 3 Finance and Insurance</a> </div>
    <div class="col-md-3 col-sm-3 col-xs-6"> <a href="#" class="btn btn-sm animated-button thar-four" onclick="openCity(event, 'Visa')" >Step 4 Visa</a> </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div id="Apply" class="col-md-12 tabcontent">  
<script src="{{ asset('js/app.js') }}"></script>
<div class="col-md-2">
</div>
<div class="col-md-8">
<form action="/insert" method="post">
{{csrf_field()}}

<div class="row">
<div class="col-lg-6" class="form-group">
    <label>Firstname</label>
    <input type="text" class="form-control"  name="firstname">
</div>

<div class="col-lg-6" class="form-group">
    <label>Lastname</label>
    <input type="text" class="form-control"  name="lastname">
</div>
</div>

<div class="row">
<div class="col-lg-6" class="form-group">
    <label>Phonenumber</label>
    <input type="text" class="form-control"  name="phone">
</div>

<div class="col-lg-6" class="form-group">
    <label>Occupation</label>
    <input type="text" class="form-control"  name="occupation">
</div>
</div>

<div class="row">
<div class="col-lg-6" class="form-group">
    <label>Birthdate</label>
    <input type="date" class="form-control"  name="birthdate">
</div>

<div class="col-lg-6" class="form-group">
    <label>Street</label>
    <input type="text" class="form-control"  name="street">
</div>
</div>

<div class="row">
<div class="col-lg-6" class="form-group">
    <label>Streetnumber</label>
    <input type="number" class="form-control"  name="street_number">
</div>

<div class="col-lg-6" class="form-group">
    <label>Postelcode</label>
    <input type="number" class="form-control"  name="plz">
</div>
</div>

<div class="row">
<div class="col-lg-6" class="form-group">
    <label>City</label>
    <input type="text" class="form-control"  name="city">
</div>

<div class="col-lg-6" class="form-group">
    <label>Country</label>
    <input type="text" class="form-control"  name="country">
</div>
</div>

<div style="margin-top: 10px;" class="row">
<div class="col-lg-12" class="form-group">
<textarea class="form-control" name="essay" rows="5" cols="40" placeholder="please write a short essay"></textarea>
</div>
</div>

<div style="margin-top: 10px;" class="row">
<div class="col-md-5">
</div>
<input class="btn-lg btn-primary col-md-2" type="submit" name"submit" value="Add">
</div>
<div class="col-md-5">
</div>
</form>
</div>
<div class="col-md-2">
</div>
</div>


<div id="Passport" class="tabcontent">
Do you have a passport?
<form action="/insert_passport" method="post">
{{csrf_field()}}
Yes 
<input type="checkbox" name="passport" id="passportYes" value="1" onchange="this.form.submit()"/>
No
<input type="checkbox" name="passport" id="passportNo" value="0"/>

<div id="passportDiv" style="display:none">
What you need for a passport
<br>
<a href="https://www.usps.com/international/passports.htm">Link</a>
</div>
</form>
</div>

<div id="Finance" class="tabcontent">
(You must have financing available or be approved for financing in order to obtain your VISA. 
We recommend getting approved, getting your VISA, and then taking the loan out.)
<form action="/insert_financing" method="post">
{{csrf_field()}}
I already have 18,500$ 
<input type="checkbox" name="financing" id="financingYes" value="1" onchange="this.form.submit()"/>

I need financing
<input type="checkbox" name="financing" id="financingNo" value="0"/>
<input type="submit" name"submit" value="Add">

<div id="financingDiv"  style="display:none">
b.i. Since we are a coding bootcamp, traditional student financing is not an option. The best option is to obtain a ‘personal loan.’ We also recommend stating the purpose of the loan as “Travel.”  
b.i.1. We recommend applying to your local bank first.
b.i.2. Another good place to start is www.lendingtree.com Lending Tree also offers a free credit rating. 
b.i.3. https://personalloans.com/
b.i.4. https://www.lendingclub.com/loans/personal-loans
b.i.5. https://apply.santanderbank.com/personal/forms/ploan.aspx
b.i.6. https://www.marcus.com/us/en
b.i.7. Credit Card
</div>
<br>
<br>
Insurance form filled out
<form action="/insert_insurance" method="post">
{{csrf_field()}}

Yes 
<input type="checkbox" name="insurance" id="insuranceYes" value="1" onchange="this.form.submit()"/>

No
<input type="checkbox" name="insurance" id="insuranceNo" value="0"/>
<input type="submit" name"submit" value="Add">

<div id="insuranceDiv" style="display:none">
Info info info
</div>
</form>

</div>


<div id="Visa" class="tabcontent">


VISAAAAAAAAAAAA





</body>

    <script>
 // for the checkbox just to be clickable once
$("input:checkbox").on('click', function() {
  var $box = $(this);
  if ($box.is(":checked")) {
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});

// for the checkbox passport
$(function () {
        $("#passportNo").click(function () {
            if ($(this).is(":checked")) {
                $("#passportDiv").fadeIn( "slow", function() {});
            } else {
                $("#passportDiv").fadeOut( "slow", function() {});
            }
        });
    });
$(function () {
        $("#passportYes").click(function () {
            $('#passportDiv').fadeOut( "slow", function() {});
        });
    });

// for the checkbox financing
$(function () {
        $("#financingNo").click(function () {
            if ($(this).is(":checked")) {
                $("#financingDiv").fadeIn( "slow", function() {});
            } else {
                $("#financingDiv").fadeOut( "slow", function() {});
            }
        });
    });
$(function () {
        $("#financingYes").click(function () {
            $('#financingDiv').fadeOut( "slow", function() {});
        });
    });

// for the checkbox insurance
$(function () {
        $("#insuranceNo").click(function () {
            if ($(this).is(":checked")) {
                $("#insuranceDiv").fadeIn( "slow", function() {});
            } else {
                $("#insuranceDiv").fadeOut( "slow", function() {});
            }
        });
    });
$(function () {
        $("#insuranceYes").click(function () {
            $('#insuranceDiv').fadeOut( "slow", function() {});
        });
    });

function openCity(evt, Name) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(Name).style.display = "block";
    evt.currentTarget.className += " active";
}

    </script>

</html>
