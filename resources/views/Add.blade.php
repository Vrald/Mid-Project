<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>

    <!-- CSS -->
    <link rel="stylesheet" href="CSS/Add.css">

    <!-- Font -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>

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

    <h1 class="heading">Karyawan Baru</h1>

    <div class="container">
        <div class="box">
            <div class="bg-box"></div>

            <h1 class="header-sign">INFORMASI KARYAWAN</h1>

            <form id="step2-form" name="forms" action="/create-list" method="POST">
                @csrf

                <div class="inputs">
                    <label for="nama">Full name</label>
                    <input type="text" id="name" placeholder="Masukkan nama lengkap anda..." name="Name">
                    <p id="error-name" class="error-message"></p>
                </div>

                <div class="inputs">
                    <label for="nama">Your email</label>

                    <input type="text" id="email" placeholder="Masukkan email anda..." name="Email">
                    
                    <p id="error-email" class="error-message"></p>
                </div>

                <div class="inputs">

                        <label for="nama">Your address</label>

                        <input type="text" id="add" placeholder="Masukkan alamat anda..." name="Address">

                        <p id="error-add" class="error-message"></p>
                </div>

                <div class="wrap">

                    <div class="selection2">
                        <label for="nama" class="bd-label">Your number</label>
    
                        <input type="text" id="wa" placeholder="08xxxxxxx..." class="birth-p" name="Number">
                        
                        <p id="error-wa" class="error-message"></p>
                    </div>

                    <div class="selection2">
                        <label for="nama" class="bd-label">Your age</label>
    
                        <input type="text" id="age" placeholder="Masukkan umur anda..." class="birth-p" name="Age">
                        
                        <p id="error-age" class="error-message"></p>
                    </div>
                </div>
            <!-- </form> -->

            
        </div>

        <button id="step-btn" type="submit" href="">ADD</button>
    </div>
</form>
    <script src="JS/Add.js"></script>
</body>
</html>