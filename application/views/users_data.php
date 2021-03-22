<html>
  <head>
    <title></title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
     <style>
       
       th
       {
           padding:8px 40px 8px 40px;
       } 
       td
       {
         padding:8px 10px 8px 10px ;
       } 
       .seial_number
       {
         text-align:center;
       }
       .topnav {
  overflow: hidden;
  background-color: #009b8b;
}

/*.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}*/
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 1px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  /*float: right;*/
  padding: 5px 5px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ffffff;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

.topnav .search-container button:hover {
  background: #ccc;
}
.currentColor
{
  color:white;
  margin-right:20px;
  
}
.side_bar
{
  background-color:#008272;
  /*padding-bottom:27px;*/
}
.logo_font
{
  font-family: 'Great Vibes', cursive;
  color:#ffffff;
  font-size:33px;
  text-align:center;
  padding-top:11px;
}
.login_user_details img
{
  border-radius:50%;
  float:left;
}
.login_user_details
{
  background-color:#273037;
  color:#ffffff;
}


     </style>
  </head>
  <body>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2" style="padding-right:1px!important;padding-left:1px!important;" class="">
        <div class="left_navbar">
         <div class="side_bar ">
          <h4 class="logo_font">Vali</h4>
         </div>
         </div>
        </div>
        <div class="col-md-10" style="padding-right:1px!important;padding-left:1px!important;">
        <div class="topnav">
          <div class="search-container">
            <form action="/action_page.php">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search" heigth="20px;"></i></button>
                 <a href="#" class="">
                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="currentColor" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                      <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                   </svg>
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="currentColor" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                </a>
            </form>
          </div>  
         </div>
        </div>
      </div> 
    </div>

    <!--next section-->
    <div class="container-fluid second_container" >
      <div class="row">
        <div class="col-md-2 login_user_details" style="padding-top:0px!important;">
         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkjmUyRahAl-j_OOJFpM8jl2wbyQ0z7SI_0w&usqp=CAU" width="50" height="50" alt="Avatar" >
          <p style="padding:5px 0px 0px 0px;margin-left:10%;"> &nbsp;&nbsp;Hello<br> <?php echo '&nbsp;&nbsp;'.$this->session->userdata('name'); ?></p>
          <div class="">
           
          </div>
        </div>
        <div class="col-md-10">
          
        </div>
      </div>
    </div>
    <!--
    <div class="container">
        <table name="user_table" id="user_table" class="user_table" border="2">
           <tr>
             <th>Sr.no</th>
             <th>Name</th>
             <th>Email</th>
             <th>Phone</th>
             <th>Password</th>
             <th colspan="2">Actions</th>
           </tr>
           
           <?php/* 
           $Q1= $this->db->query('select * from register');
           $count=1;
           foreach($Q1->result_array() as $row)
           {
             echo '
              <tr>
                <td class="seial_number">'.$count.'</td>
                <td>'.$row['name'].'</td>s
                <td>'.$row['email'].'</td>
                <td>'.$row['phone'].'</td>
                <td>'.$row['password'].'</td>
                <td><a href="">Edit</a></td>
                <td><a href="">Delete</a></td>
              </tr>
             ';
             $count++;
           }
             */
           ?>
        </table>
    </div>
          -->
  </body>
</html>