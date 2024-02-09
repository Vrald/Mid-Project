<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>

    <!-- CSS -->
    <link rel="stylesheet" href="CSS/List.css">

    <!-- Font -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>

    <!-- ICON -->
    <script src="https://kit.fontawesome.com/841fe3b1a2.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="navigation">
        <div>
            <ul class="flex-nav">
                <li><a href="/List">List</a></li>
                <li><a href="/create-add">Add</a></li>
                <li><a href="/Update">Update</a></li>
                <li><a href="/Erase">Erase</a></li>
            </ul>
        </div>
    </div>

    <div class="kosong"></div>

    <div class="leader" id="leader-data">
        
        <h1 class="heading">LIST KARYAWAN</h1>
        
        <div class="d-baloon">

                <ul class="FAQ-lab">
                    <li class="FAQ-gap">
                        
                        <label for="first">
                            <div  class="baloon">
                                <div class="wrap-lead">
                                    <img src="images/person.png" alt="">
                                    <div class="p-baloon">John Doe</div>
                                </div>
                                
                                <img src="images/up-arrow.png" alt="" class="arrow1">
                            </div>
                        </label>
                        <input type="checkbox" name="faq" id="first">
                            
                        <div class="faq-info">

                            <div class="faq-center">
                                <div class="faq-space">
                                    <img src="images/b-cake.png" alt="">
                                </div>
                                
                                <p><h6>18</h6> tahun</p>
                            </div>

                            <div class="faq-center">
                                <div class="faq-space">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <p>Silver Coconut, Block A No 12, Kelapa Gading</p>
                            </div>
                            
                            <div class="faq-center">
                                <div class="faq-space">
                                    <img src="images/b-mail.png" alt="" style="widht: 80px; height: 65px;">
                                </div>
                                <p>johndoe@gmail.com</p>
                            </div>

                            <div class="faq-center">
                                <div class="faq-space">
                                    <img src="images/b-wa.png" alt="">
                                </div>
                                <p>08123123123</p>
                            </div>

                            <!-- Leader Data Button CV-->

                            <div class="wrap-faq">
                                <div class="faq-button">
                                    <button>Update</button>
                                    <div class="download"></div>
                                </div>

                                <!-- Leader Data Button FLASS CARD-->
                                <div class="faq-button">
                                    <button>Delete</button>
                                    <div class="download2"></div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </li>

                </ul>

        </div>
    </div>

    <!-- JS -->
    <script src="JS/List.js"></script>
</body>
</html>