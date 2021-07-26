<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Realtime Chat App</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    <div class="wrapper">
     <section class="form signup">
         <header>Realtime chat </header>
         <form action="#">
             <div class="error-txt">This is an error message</div>
             <div class="name-details">
                 <div class="field input">
                     <label>First Name</label>
                     <input type="text" placeholder="First Name">
                 </div>
                 <div class="field input">
                    <label>Last Name</label>
                    <input type="text" placeholder="Last Name">
                 </div>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" placeholder="Enter new Password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select image</label>
                    <input type="file">
                </div>
                <div class="field button">
                    <input type="submit" value="Sign Up">
             </div>
         </form>
         <div class="link">Already signed up? <a href="#">Login Now</a></div>
     </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>

</body>
</html>