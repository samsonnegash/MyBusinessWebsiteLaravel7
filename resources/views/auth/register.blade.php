<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mybusinesswebsite</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/styles.min.css">

</head>

<body>
<div class="container">
  <br>
  <h1>Register:</h1>
  <p style="text-align: right "><a href="/login" style="color: red">already registered?</a></p>
  <hr> <br>
  

  <form action="/" method="POST">
    @csrf
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="Fname">First name</label>
        <input type="text" class="form-control" id="Fname" name="Fname" placeholder="First name" required>
      </div>
      <div class="col-md-4 mb-3">
        <label for="Lname">Last name</label>
        <input type="text" class="form-control" id="Lname" name="Lname" placeholder="Last name" required>
      </div>
      <div class="col-md-4 mb-3">
        <label for="userName">Username</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
          </div>
           <input type="text" class="form-control" id="userName" name="userName" placeholder="Username" aria-describedby="inputGroupPrepend" required>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required>
      </div>

      <div class="col-md-3 mb-3">
        <label for="city">City</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="State" required>
      </div>

      <div class="col-md-3 mb-3">
        <label for="city">Gender</label><br> 
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
          <label class="form-check-label" for="inlineRadio1">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
          <label class="form-check-label" for="female">female</label>
        </div>
      </div>
   </div>


   <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="phone">Enter a phone number</label>
      <input class="form-control" type="tel" id="phone" name="phone" placeholder="+251-942-828-018" pattern="[0-9]{10}" required>
    </div>

    <div class="col-md-5 mb-3">
      <label for="city">Choose You Use bank</label>
      <select class="form-control" name="bank" id="bank">
        <option>ABAY BANK S.C.</option>
        <option>ADDIS INTERNATIONAL BANK S.C.</option>
        <option>AWASH INTERNATIONAL BANK S.C.</option>
        <option>BANK OF ABYSSINIA</option>
        <option>BERHAN INTERNATIONAL BANK	</option>
        <option>BUNNA INTERNATIONAL BANK S.C</option>
        <option>COMMERCIAL BANK OF ETHIOPIA</option>
        <option>DEBUB GLOBAL BANK S.C</option>
        <option>LION INTERNATIONAL BANK S.C.</option>
        <option>NIB INTERNATIONAL BANK S.C.	</option>
        <option>OROMIA INTERNATIONAL BANK S.C.</option>
        <option>UNITED BANK SHARE COMPANY</option>
        <option>WEGAGEN BANK S.C.</option>
        <option>ZEMEN BANK S.C.</option>
        <option>PayPal</option>
        <option>Payoneer</option>
        <option>Other</option>
      </select>
    </div>
 </div>


 <div class="form-row">
  <div class="col-md-5 mb-3">
    <label for="password">Password</label>
    <input type="password" id="password" name="password" class="form-control" minlength="6" required>
    <small id="passwordHelpBlock" class="form-text text-muted">
      Your password shall to be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
    </small>
  </div>
  <div class="col-md-5 mb-3">
    <label for="confirm_password">Password</label>
    <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>

  </div>
  

</div>


    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Agree to terms and conditions
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>
    </div>
    <hr>
    <button class="btn btn-primary" type="submit">Submit form</button>
  </form>


  <acronym title="sami"></acronym>
  
  <script src="/js/passwardValidation.js"></script>

</div>






  
</body>

</html>