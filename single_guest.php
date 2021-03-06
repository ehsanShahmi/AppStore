<!DOCTYPE HTML>
<html>
    <head>
        <title>Sample App</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.  css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="css/homepage_style.css" rel="stylesheet" type="text/css"  media="all">
        <link rel="stylesheet" href="css/homepage_style.css" type="text/css">
        <meta name="keywords" content="Mobilestore iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
        <script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
        <script src="js/jqzoom.pack.1.0.1.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/jqzoom.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
        <script type="text/javascript">
            $(function() {
                $(".jqzoom").jqzoom();
            });
        </script>
        <script>
        $(document).ready(function(){
            $(".menu_body").hide();
            //toggle the componenet with class menu_body
            $(".menu_head").click(function(){
                $(this).next(".menu_body").slideToggle(600);
                var plusmin;
                plusmin = $(this).children(".plusminus").text();

                if( plusmin == '+')
                $(this).children(".plusminus").text('-');
                else
                $(this).children(".plusminus").text('+');
            });
        });
        </script>
    </head>
    <body>
        <div class="wrap">

        <!----start-Header---->
        <div class="header">
            <div class="search-bar">
                <form>
                    <input type="text"><input type="submit" value="Search" />
                </form>
            </div>
            <div class="clear"> </div>
        </div>
        </div>

        <div class="clear"> </div>

        <div class="top-header">
            <div class="wrap">
        <!----start-logo---->
            <div class="logo">
                <a href="homepage_guest.php">
                    <img src="images/Logo.png" title="logo"/>
                </a>
            </div>
        <!----end-logo---->
        <!----start-top-nav---->

        <div class="top-nav">
            <ul>
                <li><a href="index.php" id="loginform">Login</a><li>
                <li style="padding: 10px 1px;">|</li>
                <li><a href="register.php">Register</a></li>
                <li><a href="newHome/index.html">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Store</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="clear"> </div>
        </div>
        </div>
        <!----End-top-nav---->
        <!----End-Header---->
            <div class="clear"> </div>

            <div class="wrap">
            <div class="content">
            <div class="content-grids">
                <div class="details-page">
                    <div class="back-links">
                        <ul>
                            <li><a href="#">Home</a><img src="images/arrow.png" alt=""></li>
                            <li><a href="#">Product</a><img src="images/arrow.png" alt=""></li>
                            <li><a href="#">Product-Details</a><img src="images/arrow.png" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="detalis-image">
                    <div id="content">
                        <a href="#">
                            <img class="img-responsive" src="images/royale.png"  title="Product-Name" style="border: 1px solid #e5e5e5;" alt="image from database">
                        </a>
                    </div>
                </div>

                <div class="detalis-image-details">
                    <div class="details-categories">
                        <ul>
                            <li><h3>Operating System:</h3></li>
                            <li class="active1"><a href="#"><span>Windows</span></a></li>
                            <li><a href="#">iOS</a></li>
                            <li><a href="#">Android</a></li>
                            <li><a href="#">LINUX</a></li><br/>
                        </ul>
                    </div><br/>
                    <div class="brand-value">
                        <h3>Product Name : </h3>
                            <a href="#">Product_name</a><br/>
                        <h3>Product Value : </h3>
                        <div class="left-value-details">
                            <ul>
                                <li>Price:</li>
                                <li><span>$350</span></li>
                                <li><h5>$250</h5></li>
                                <br />
                                <li><p>Not rated</p></li>
                            </ul>
                        </div>
                        <div class="right-value-details">
                            <p>No reviews</p>
                        </div>
                        <div class="clear"> </div>
                    </div>
                    <div class="brand-history">
                        <h5>Description :</h5>
                        <p>The app consists of numerous applications and features
                            and also is a great source of learning for little children. Parents should be aware of their children for having to learn this app as soon as they are 3 years old at the least.
                        </p>
                        <a data-toggle="modal" data-target="#myModal">Download</a>
                                                    <!-- Modal -->
                          <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Problem!!!</h4>
                                </div>
                                <div class="modal-body">
                                  <p style="font-family: 'Open Sans', sans-serif;font-size: 1.2em;">Please login or register to download this app.</p>
                                  <a href="login.html">Login</a>
                                  <a style="pointer-events:none;cursor:default;">|</a>
                                  <a href="register.html">Register</a>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>

                            </div>
                          </div>
                    </div>
                    <div class="share">
                        <ul>
                            <li> <a href="#"><img src="images/facebook.png" title="facebook" /> FaceBook</a></li>
                            <li> <a href="#"><img src="images/twitter.png" title="Twiiter" />Twiiter</a></li>
                            <li> <a href="#"><img src="images/rss.png" title="Rss" />Rss</a></li>
                        </ul>
                    </div>
                    <div class="clear"> </div>

                    </div>
                    <div class="clear"> </div>
                <div class="menu_container">
                        <p class="menu_head">About product<span class="plusminus">+</span></p>
                            <div class="menu_body" style="display: none;">
                                <p>Operating System : Android</p>
                                <p>Category : Games</p>
                                <p>Developed by : CSEDU developer Team.</p>
                                <p>Date of upload : May 21st, 2016</p>
                                <p>Latest update : not updated till now</p><br/>
                            </div>
                    </div>
                </div>

                <div class="content-sidebar">
                    <h4>Categories</h4>
                        <ul>
                            <li><a href="category.html">Books</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Communication</a></li>
                            <li><a href="#">Education</a></li>
                            <li><a href="#">Entertainment</a></li>
                            <li><a href="#">Games</a></li>
                            <li><a href="#">Health</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Media</a></li>
                            <li><a href="#">Mobile Phones</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">Photography</a></li>
                            <li><a href="#">Shopping</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Transformation</a></li>
                            <li><a href="#">Weather</a></li>
                        </ul>
                </div>
            </div>
            <div class="clear"> </div>
            </div>

        <div class="footer">
            <div class="wrap">
            <div class="section group">
                <div class="col_1_of_4 span_1_of_4">
                    <h3>Credits</h3>
                    <p>Feel free to contact us
                        <a href="contact.html">here.</a>
                    </p>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <h3>Latest News:</h3>
                    <p>New Android App has been uploaded daily now.</p>
                    <p>iOS updates are more advanced.</p>
                    <p>LINUX apps getting more accepted by people.</p>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <h3>Store Location</h3>
                    <p>Yet to be announced. :p</p>
                    <h3>Order-online</h3>
                    <p>01685-604351</p>
                    <p>123-345-678</p>
                </div>
                <div class="col_1_of_4 span_1_of_4 footer-lastgrid">
                    <h3>News-Letter</h3>
                    <input type="text"><input type="submit" value="go" />
                    <h3>Follow Us:</h3>
                     <ul>
                        <li><a href="https://twitter.com/?lang=en"><img src="images/twitter.png" title="twitter" />Twitter</a></li>
                        <li><a href="https://www.facebook.com/"><img src="images/facebook.png" title="Facebook" />Facebook</a></li>
                        <li><a href="https://www.rss.com/"><img src="images/rss.png" title="Rss" />Rss</a></li>
                     </ul>
                </div>
            </div>
        </div>

        <div class="clear"> </div>
        <div class="wrap">
        <div class="copy-right">
            <p>Mobilestore  &#169    All Rights Reserved | Design By <a href="contact.html">Roll08&12</a></p>
        </div>
        </div>
        </div>
    </body>
</html>

