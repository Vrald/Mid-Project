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
            </ul>
        </div>
    </div>

    <div class="kosong"></div>

    <div class="leader" id="leader-data">
        
        <h1 class="heading">LIST KARYAWAN</h1>
        
        <div class="d-baloon">

                <ul class="FAQ-lab">
                    <li class="FAQ-gap">
                        <div>
                            @forelse ($adds as $add)
                            <label for="checkbox{{$loop->iteration}}">
                                <div  class="baloon">
                                    <div class="wrap-lead">
                                        <img src="images/person.png" alt="">
                                        <div class="p-baloon">{{$add->Name}}</div>
                                    </div>
                                    
                                    <img src="images/up-arrow.png" alt="" class="arrow1">
                                </div>
                            </label>
                            <input type="checkbox" name="faq" id="checkbox{{$loop->iteration}}">
                                
                            <div class="faq-info">

                                <div class="faq-center">
                                    <div class="faq-space">
                                        <img src="images/b-cake.png" alt="">
                                    </div>
                                    
                                    <p><h6>{{$add->Age}}</h6> tahun</p>
                                </div>

                                <div class="faq-center">
                                    <div class="faq-space">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>

                                    <p>{{$add->Address}}</p>
                                </div>
                                
                                <div class="faq-center">
                                    <div class="faq-space">
                                        <img src="images/b-mail.png" alt="" style="widht: 80px; height: 65px;">
                                    </div>

                                    <p>{{$add->Email}}</p>
                                </div>

                                <div class="faq-center">
                                    <div class="faq-space">
                                        <img src="images/b-wa.png" alt="">
                                    </div>

                                    <p>{{$add->Number}}</p>
                                </div>

                                <div class="wrap-faq">
                                    <div class="faq-button">
                                        <a href="/update/{{ $add->id }}"><button>Update</button></a>
                                    </div>

                                    <div class="faq-button">
                                        <form action="/delete-data/{{ $add->id }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button>Delete</button>
                                        </form>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            @empty
                            <label for="first">
                                <div  class="baloon">
                                    <div class="wrap-lead">
                                        <img src="images/person.png" alt="">
                                        <div class="p-baloon">No Data</div>
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
                                    
                                    <p><h6>???</h6> tahun</p>
                                </div>

                                <div class="faq-center">
                                    <div class="faq-space">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <p>Mars, Samping Matahari, deket pohon</p>

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

                                    <p>081234567891</p>
                                </div>    
                            </div>
                            @endforelse
                        </div>
                        
                        
                        
                    </li>

                </ul>

        </div>
    </div>

    <!-- JS -->
    <script src="JS/List.js"></script>
</body>
</html>