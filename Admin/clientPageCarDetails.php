<?php 
include('./adminPartials/adminHeader.php');
?>

    <div class="adminDasboard flex">

        <?php 
         include('./adminPartials/sideMenuClient.php');
        ?>

        <div class="propertyDetailsBody">
            <div class="top flex greyBg">
                <h1 class="titleText">
                    Single Car Details
                </h1>

            </div>

            <div class="detailsContainer">
                <div class="rightDiv">
                    <div class="divTopSection flex">
                    <div class="imgsDiv flex">
                        <div class="smallImgs grid">
                            <div class="smallImg">
                                <img src="../../../Assets/interior-(1).png" alt="Car Image">
                            </div>
                            <div class="smallImg">
                                <img src="../../../Assets/interior-(5).png" alt="Car Image">
                            </div>
                            <div class="smallImg">
                                <img src="../../../Assets/interior-(3).png" alt="Car Image">
                            </div>
                        </div>

                        <div class="mainImgSwiper">
                            
                                <div class="bigImg">
                                    <img src="../../../Assets/mbz.png" alt="Car Image">
    
                                    <span class="flex"><i class='bx bxs-star icon'></i>Perfect Fit</span>
                                </div>
                        </div>
                    </div>

                    <div class="staffDetails">
                        <h3 class="cardTitle">Staff Bio</h3>
                        <div class="imgDiv">
                            <img src="../Assets/user (1).png" alt="Image">
                        </div>
                        <h3 class="name">Adams Linnet</h3>
                        <span class="nationality flex">
                            <i class="uil uil-globe icon"></i>USA
                        </span>
                      
                        <span class="phone flex">
                            <i class="uil uil-phone icon"></i></i>+444 345 9908
                        </span>

                        <span class="history">
                            <p>About Staff</p>
                            <small>Experienced car dealer with over 16 years in this business.</small>
                            <small></small>
                        </span>

                        <a href="staffDetailsClient.php">
                            <span class="email flex bg">
                                <i class="uil uil-envelope-alt icon"></i>Contact Staff
                            </span>
                        </a>
                        
                        
                    </div>
                    </div>

                    <div class="divBottomSection flex">
                           <div class="divBottomleftSection">
                            
                            <div class="divTop flex">
                                <h1 class="price">$21,000</h1>
                                <div class="aprtName">
                                    <h2>Mercedes Benz</h2>
                                    <span class="flex"> <i class='bx bxs-location-plus icon'></i>United States </span>
                                </div>
    
                                <div class="icons flex">
                                    <i class="uil uil-share icon"></i>
                                    <i class="uil uil-heart-alt icon"></i>
                                    <i class='bx bx-dots-horizontal-rounded icon' ></i>
                                </div>
    
                            </div>

                            <div class="divBottom">
                                <div class="bottomRight flex">
                                    <div class="smallMenu grid">
                                        <i class="uil uil-info-circle icon active"></i>
                                        <i class="uil uil-wallet icon"></i>
                                        <i class="uil uil-bill icon"></i>
                                    </div>
        
                                    <div class="mainContent">
                                       <div class="summary flex">
                                        <span>
                                            <p>Model Year</p>
                                            <h4 class="flex"> <i class="uil uil-calendar-alt icon"></i>2018</h4>
                                        </span>

                                        <span>
                                            <p>Front Seat</p>
                                            <h4 class="flex"><i class="uil uil-bed-double icon"></i>2</h4>
                                        </span>
        
                                        <span>
                                            <p>Back Seat</p>
                                            <h4 class="flex"><i class="uil uil-bath icon"></i>2</h4>
                                        </span>
        
                                        <span>
                                            <p>Autopilot</p>
                                            <h4 class="flex"> <i class="uis uis-anchor icon"></i>Yes</h4>
                                        </span>
                                         

                                        <span>
                                            <p>Area Parking</p>
                                            <h4 class="flex"> <i class='bx bx-tachometer icon'></i>6.5Km/1Liter</h4>
                                        </span>

                                        <span>
                                            <p>Swimming Pool</p>
                                            <h4 class="flex"><i class='bx bxs-gas-pump icon' ></i>Electricity</h4>
                                        </span>

                                       </div>

                                       <div class="content grid">
                                        <div class="desc">
                                        <h3>Description</h3>
                                        <p>The Mercedes-Benz Group AG (former Daimler AG) is one of the world's most successful automotive companies. With Mercedes-Benz AG, we are one of the leading global suppliers of premium and luxury cars and vans.  
                                        </p>
                                        </div>
                                        

                                        <div class="overview">
                                            <h3>Overview</h3>
                                            <div class="overviewContent grid">
                                                <span class="span"> Body: <span class="ans">SUV</span></span>
                                                <span class="span"> Model Year: <span class="ans">2023</span></span>
                                                <span class="span"> Final Drive: <span class="ans">FRONT WHEEL DRIVE</span></span>
                                                <span class="span"> Model Grade: <span class="ans">GX HYBRID</span></span>
                                                <span class="span"> Spec Region: <span class="ans">GCC</span></span>
                                                <span class="span"> Fuel Type: <span class="ans">HYBRID</span></span>
                                                <span class="span"> Engine Type: <span class="ans">16V DOHC with VVT-i, 2ZR-FXE</span></span>
                                            </div>
                                        </div>

                                        <div class="features">
                                            <h3>Features</h3>
                                            <div class="featuresContent grid">
                                                <div class="singleCard">
                                                    <span class="title">
                                                        Body Style
                                                    </span>
                                                    <li class="item">
                                                       - Two-Tone Body Color
                                                    </li>
                                                    <li class="item">
                                                       - Adaptive Led Headlamp 
                                                    </li>
                                                    <li class="item">
                                                       - Front Foglamps
                                                    </li>
                                                    <li class="item">
                                                       - Rear Spoiler
                                                    </li>
                                                </div>
                            
                                                <div class="singleCard">
                                                    <span class="title">
                                                        Performace
                                                    </span>
                                                    <li class="item">
                                                       - 1.8l, 4 Cylinders
                                                    </li>
                                                    <li class="item">
                                                       - 121Hp Combined Output
                                                    </li>
                                                    <li class="item">
                                                       - 1.8l, 4 Cylinders
                                                    </li>
                                                    <li class="item">
                                                       - E-CVT Transmission
                                                    </li>
                                                </div>
                            
                                                <div class="singleCard">
                                                    <span class="title">
                                                        Safety
                                                    </span>
                                                    <li class="item">
                                                       - Electronic Brake-Force Distribution
                                                    </li>
                                                    <li class="item">
                                                       - Hill-Start Assist Control
                                                    </li>
                                                    <li class="item">
                                                       - ABS, VSC
                                                    </li>
                                                    <li class="item">
                                                       - E-CVT Transmission
                                                    </li>
                                                </div>
                                                <div class="singleCard">
                                                    <span class="title">
                                                        Technology
                                                    </span>
                                                    <li class="item">
                                                       - Electronic Brake-Force Distribution
                                                    </li>
                                                    <li class="item">
                                                       - Smart Keyless Entry
                                                    </li>
                                                    <li class="item">
                                                       - Rear View Camera
                                                    </li>
                                                    <li class="item">
                                                       - Rear Bumper Reflector
                                                    </li>
                                                </div>
                                             </div>
                                        </div>

                                        <div class="note">
                                            <h3>Note</h3>
                                        <p>Please note that the monthly price you see on this listing is applicable for check-ins for this current month only. The pricing of short term rentals is not fixed and it varies according to seasonality.  
                                        </p>
                                        </div>
                                        
                                            
                                        

                                       </div>
                                    </div>
                                </div>
                               
                            </div>
                           </div>

                           <div class="reviews divBottomRightSection">
                            <h3 class="reviewTitle">Car Reviews</h3>
                            <div class="reviewsContainer grid">
                                <div class="singleReview">
                                  <span class="reviewerName">
                                    Isratech 
                                  </span>
                                  <p class="text">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quis iure cumque provident odio eius quas in perferendis nesciunt minima?
                                  </p>
                                </div>
                                <div class="singleReview">
                                  <span class="reviewerName">
                                    Isratech 
                                  </span>
                                  <p class="text">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quis iure cumque provident odio eius quas in perferendis nesciunt minima?
                                  </p>
                                </div>
                                <div class="singleReview">
                                  <span class="reviewerName">
                                    Isratech 
                                  </span>
                                  <p class="text">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quis iure cumque provident odio eius quas in perferendis nesciunt minima?
                                  </p>
                                </div>
                                <div class="singleReview">
                                  <span class="reviewerName">
                                    Isratech 
                                  </span>
                                  <p class="text">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quis iure cumque provident odio eius quas in perferendis nesciunt minima?
                                  </p>
                                </div>
                                <div class="singleReview">
                                  <span class="reviewerName">
                                    Isratech 
                                  </span>
                                  <p class="text">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quis iure cumque provident odio eius quas in perferendis nesciunt minima?
                                  </p>
                                </div>
                                <div class="singleReview">
                                  <span class="reviewerName">
                                    Isratech 
                                  </span>
                                  <p class="text">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quis iure cumque provident odio eius quas in perferendis nesciunt minima?
                                  </p>
                                </div>
                                <div class="singleReview">
                                  <span class="reviewerName">
                                    Isratech 
                                  </span>
                                  <p class="text">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quis iure cumque provident odio eius quas in perferendis nesciunt minima?
                                  </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>


    <!-- link js file-->
    <script src="../index.js"></script>
    <!-- link swiper js -->
    <script src="../swiper-bundle.min.js"></script>
    
<?php 
include('./adminPartials/adminFooter.php');
?>