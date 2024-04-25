<?php //error_reporting(0);
include('includes/config.php'); 

if(isset($_POST['book']))
{
$ptype=$_POST['packagetype'];
$wpoint=$_POST['washingpoint'];   
$fname=$_POST['fname'];
$mobile=$_POST['contactno'];
$date=$_POST['washdate'];
$time=$_POST['washtime'];
$message=$_POST['message'];
$status='New';
$bno=mt_rand(100000000, 999999999);
$sql="INSERT INTO tblcarwashbooking(bookingId,packageType,carWashPoint,fullName,mobileNumber,washDate,washTime,message,status) VALUES(:bno,:ptype,:wpoint,:fname,:mobile,:date,:time,:message,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':bno',$bno,PDO::PARAM_STR);
$query->bindParam(':ptype',$ptype,PDO::PARAM_STR);
$query->bindParam(':wpoint',$wpoint,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':date',$date,PDO::PARAM_STR);
$query->bindParam(':time',$time,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
 
  echo '<script>alert("Your booking done successfully. Booking number is "+"'.$bno.'")</script>';
 echo "<script>window.location.href ='washing-plans.php'</script>";
}
else 
{
 echo "<script>alert('Something went wrong. Please try again.');</script>";
}

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            
            
.content h1 {
    overflow: hidden; /* Ensures the content is not revealed until the animation */
    border-right: .15em solid red; /* The typwriter cursor */
    white-space: nowrap; /* Keeps the content on a single line */
    margin: 0 auto; /* Gives that scrolling effect as the typing happens */
    letter-spacing: .15em; /* Adjust as needed */
    animation:  
      typing 1.5s steps(40, end),
      blink-caret 1.75s step-end infinite;
  }
  
  /* The typing effect */
  @keyframes typing {
    from { width: 0 }
    to { width: 80% }
  }
  
  /* The typewriter cursor effect */
  @keyframes blink-caret {
    from, to { border-color: transparent }
    50% { border-color: rgb(237, 235, 232); }
  }

        </style>
        <meta charset="utf-8">
        <title>Parth-Purohit@ | Home Page</title>


        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- For contact -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
<?php include_once('includes/header.php');?>



            <!-- About Start -->
            <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="WhatsApp Image 2024-02-18 at 01.22.14_94e5366e.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header text-left">
                            <p>About Me...</p>
                            
                        </div>
                        
                        <div class="content">
                          <h1>Hi, I'm <span>Parth Purohit</span>,</h1>
                        </div>

                        <div class="about-content">
                            <p>
                                Parth, Web developer hailing from <b>Indore, Madhya Pradesh, India,</b> is driven by a relentless passion to excel in the realm of web development. Eager to learn and grow, committed to mastering the intricacies of web development to achieve professional excellence. With a steadfast determination to succeed......<a href="https://www.linkedin.com/in/parth-purohit-79web/">For more details lets connect on <span class="linkedins" ><b style="color:red;">linkedin</b></span></a>
                            </p>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="pexels-photo-3861976.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>I am flexible and adaptable to changing circumstances</h3>
                            <h1>& will approach new challenges with a positive attitude!</h1>
                       
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="pexels-pavel-danilyuk-5496464.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Empowering Your Team with the Right Talent</h3>
                            <h1>Let's Make Great Matches Together!</h1>
                      
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="pexels-mizuno-k-12899188.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>I thrive under pressure and see challenges </h3>
                            <h1>As opportunities for growth!</h1>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        

    
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>Skills</p>
                    <h2>Technical Skills </h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <h3>HTML5</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            
                            <h3>CSS</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <h3>JavaScript + ES6</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <h3>React</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <h3>Bootstrap</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <h3>MySQL</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <h3>JavaScript</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <h3>Java</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <h3>Php</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <h3>C++</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <h3>C</h3>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>Tools</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <h3>Git</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            
                            <h3>MS.Word</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <h3>MS.Excel</h3>
                        </div>
                    </div>
                    
                
                </div>
            </div>
        </div>

        <div class="last-section">
                
        </div>
        <!-- Service End -->
           <!-- Price Start -->
        <div class="price">
            <div class="container">
                <div class="section-header text-center">
                    
                    <h2>Projects</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Basic Projects</h3>
                                
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li>Facebook Static Login page</li>
                                    <li>Blogs</li>
                                    <li>Static admin pannel</li>
                                    <li>Flipkart clone page</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <h3> Main Concepts</h3>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li>Nav bar</li>
                                    <li>Product Listing Page</li>
                                    <li>Cart Page</li>
                                    <li>Filters</li>
                                    <li>Price Component</li>
                                    <li>Filters</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Advanced Main Concepts / Projects</h3>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li>Wish-List</li>
                                    <li>Quizify -CLI with ES6 Concepts</li>
                                    <li>Movie Filters</li>
                                    
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price End -->
        
       <?php include_once('includes/footer.php');?>

<!--Model-->
 
        
        <!-- Price End -->
        
        
        


        <!-- Footer Start -->
   <?php include_once('includes/footer.php');?>
        
<!--Model-->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Parth Purohit Portfolio Terms and Condition Section</h4>
        </div>
        <div class="modal-body">
<form method="post">   
  <p>
            <select name="packagetype" required class="form-control">
                <option value=""></option>
                <option value="1"></option>
                 <option value="2"></option>
                  <option value="3 "></option>
              </select>

          <p>
            <select name="washingpoint" required class="form-control">
                <option value=""></option>
<?php $sql = "SELECT * from tblwashingpoints";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
foreach($results as $result)
{               ?>  
    <option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->washingPointName);?> (<?php echo htmlentities($result->washingPointAddress);?>)</option>
<?php } ?>
            </select></p>
            <p><input type="text" name="fname" class="form-control" required placeholder="Full Name"></p>
            <p><input type="text" name="contactno" class="form-control" pattern="[0-9]{10}" title="10 numeric characters only" required placeholder="Mobile No."></p>
            <p>Wash Date <br /><input type="date" name="washdate" required class="form-control"></p>
             <p>Wash Time <br /><input type="time" name="washtime" required class="form-control"></p>
             <p><textarea name="message"  class="form-control" placeholder="Message if any"></textarea></p>
             <p><input type="submit" class="btn btn-custom" name="book" value="Book Now"></p>
      </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>

