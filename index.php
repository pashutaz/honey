<?php
session_start();
include ("connection.php");
include ("registration.php");


if (array_key_exists('logout', $_GET)){
    setcookie('id', '', time() - 60*60*24*365,'/');
    session_unset();
}


//print_r($_POST);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
    <title>Honey</title>
  </head>
  <body>
    <div id="error"><?php echo $error;?></div>
    <!-- welcome section -->
    <div class="jumbotron jumbotron-fluid bg-secondary text-white" >
        <div class="form-inline">
            <div class="row">
                 <div class="col-sm-6"><h1 class="display-4 col-sm-6">Honey</h1></div>
            </div>
        </div>
    </div>  
    
    <!-- container -->
    <div class="container">
        
    <!-- navigation bar -->
        <nav class="navbar navbar-light bg-warning justify-content-between">
             <a class="navbar-brand">Exchange</a>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profile
                </button>
                <div class="dropdown-menu dropdown-menu-right" >
                    <!-- Button trigger modal -->
                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#signupModel">
                        Sign up
                    </button>
                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModal">
                        Login
                    </button>
                </div>
            </div>

<!--             <form class="form-inline" method="post">-->
<!--                <div class="form-group">-->
<!--                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> -->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                   <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">-->
<!--                </div>-->
<!--                <button class="btn btn-success " type="submit" name="login">Login</button>-->
<!--             </form>-->

            <!-- Modal -->
            <div class="modal fade" id="signupModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="./" method="post">
                        <div class="modal-body">

                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" name="signup" value="1">Sign in</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        
    <!-- exchange section -->
        <div class="row">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                               
                                <div class="col-sm">
                                     <div class="form-group">
                                           <select class="form-control">
                                               <option>Bitcoin</option>
                                               <option>Qiwi</option>
                                               <option>Etherium</option>
                                               <option>Credit Card</option>
                                               <option>Web Money</option>
                                           </select>
                                      </div>

                                      <input type="text" class="form-control" placeholder="Give">
                                </div>

                                <div class="form-group col-sm">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Etherium</option>
                                            <option>Bitcoin</option>
                                            <option>Qiwi</option>
                                            <option>Credit Card</option>
                                            <option>Web Money</option>  
                                        </select>
                                    </div>

                                    <input type="text" class="form-control" placeholder="Get">
                                </div>
                                
                            </div>

                            <div class="mx-auto">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                            
                      </form>
                  </div>
              </div>
          </div>
          
    <!-- right bar -->
          <div class="col-sm-4">
           
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-primary">Our reserve</h5>
                    <ul class="list-group text-right">
                        <li class="list-group-item">Bitcoin - 0</li>
                        <li class="list-group-item">Etherium - 0</li>
                        <li class="list-group-item">Qiwi - 0</li>
                        <li class="list-group-item">Web Money - 0</li>
                        <li class="list-group-item">Visa - 0</li>
                    </ul>
                </div>
            </div>
            
          </div>
          
        </div>
        <footer>
            <p>
                <small>Created by <a href="https://github.com/pashutaz">Pashutaz</a></small>
            </p>
        </footer>
    </div>

    <!-- Optional JavaScript -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>