<html>
  <head>
    <title></title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <style>
        table
        {
          margin-top:20%;
        }
       
        .form_control
        {
          padding:10px 100px 10px 100px;
            margin-top:20px;
            border-radius:5px;
            border-color:white:
        }
        .btn-success-change
        {
            background-color:#009b8b;
            border-color:white;
            border-radius:5px;
            color:white;
        }
        #login_form
        {
          margin-top:5%;
        }
        table
        {
          background-color:white!important;
          border-color:white;
          border-radius:10%;
          text-align:center;
         
        }
        tr
        {
          border-color:white;
        }
        input
        {
          border-color:#dbdbdb;
        }
        .form_footer
        {
          margin-top:10px;
        }
        #register_form
        {
          margin-top:5%;
        }
        .form_footer
        {
          font-size:13px;
          margin-top:25px;
          margin-bottom:20px;
        }
        body
        {
          margin: auto;
          width: 35%;
          padding: 10px;
          background-color:#009b8b;
        }
     </style>
  </head>
  <body>
  <div class="container">
     <form method="POST" name="login_form" id="login_form" action="<?php echo base_url('index.php/register/userlogin');  ?>">
       <table border="2">
       <tr>
        <td>
          <div class="col-md-12 form_footer" id="first_name_div">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
               <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
               <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg> <br>
            <h4>Register</h4>  
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="col-md-12 email_div" id="email_div">
          <input type="email" name="email" id="email" class="form_control" value="" placeholder="Enter Email">
             <span class="login_email_error" id="login_email_error"></span>
          </div>
        </td>
      <tr>
      <tr>
        <td>
          <div class="col-md-12 password_div" id="password_div">
             <input type="Password" name="password" id="password" class="form_control" value="" placeholder="Enter Password">
             <span class="login_password_error" id="login_password_error"></span>
          </div>
        </td>
      <tr>
      <tr>
        <td>
          <div class="col-md-12 submit_div" id="submit_div">
             <input type="submit" name="submit" id="submit" value="submit" class="form_control btn-success-change">   
          </div>
        </td>
      <tr>
      <tr>
          <td>
              <div class="col-md-12 form_footer">
                 Create Another Account<a href="<?php echo base_url('index.php/register'); ?>"> Register/Signup</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Forget Password ?</a>
              </div>
          </td>
        </tr>
       </table>
     </form>
  </div>

  </body>
</html>