<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> :: Pengumuman Kelulusan SMK Penerbangan Bina Dhirgantara :: </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        #countdown {
            font-size: 4em;
            text-align: center;
        }

        .title {
            margin-top: 20px;
        }

        .kecil {
            font-size: 10pt;
        }

        body {
            /*background: linear-gradient(45deg, #1870ed 0, #f18f88 100%);*/
            background-image: url("background.jpg");
            font-family: 'Montserrat', 'sans-serif';
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card title">
            <div class="card-body">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15821.434352636878!2d110.7602788!3d-7.5358127!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a147dfee50657%3A0xee512dd4720fa081!2sSMK%20Penerbangan%20Bina%20Dhirgantara%20Surakarta!5e0!3m2!1sid!2sid!4v1683118591538!5m2!1sid!2sid"
                    width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="card title">
            <div class="card-header marque1">
                <h4 style="color: red;">
                    <marquee direction="left">Pada Tanggal : 05 Mei 2023 Jam 17.00.00 </marquee>
                </h4>
            </div>
            <div class="card-body">
                <center>
                    <h4 class="info-waktu">Waktu Pengumuman :</h4>
                </center>
                <div id="countdown"></div>
            </div>
            <div class="card-header">
                <h4 style="color: red;">
                    <marquee direction="left"><b>
                            <?= ucwords("Semoga para lulusan mendapatkan hasil yang optimal, dan mampu mengembangkan diri menjadi pribadi lebih baik serta bermanfaat bagi masyarakat") ?>
                        </b></marquee>
                </h4>
            </div>
            <div class="card-footer" style="background-color: #203354;">
                <center style="color: white;">Copyright © 2023 SMK Penerbangan Bina Dhirgantara</center>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        var countDownDate = new Date("May 5, 2023 17:00:00").getTime();

        var x = setInterval(function () {

            var now = new Date().getTime();
            var distance = countDownDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("countdown").innerHTML = days + " <label class='kecil'>Hari</label> " + hours + " <label class='kecil'>Jam</label> "
                + minutes + " <label class='kecil'>Menit</label> " + seconds + " <label class='kecil'>Detik</label> ";

            if (distance < 0) {
                clearInterval(x);
                $(".info-waktu").attr('hidden', true);
                $(".marque1").attr('hidden', true);
                document.getElementById("countdown").innerHTML = "<h1><b>SMK Penerbangan Bina Dhirgantara Lulus 100%</b></h1>";
            }
        }, 1000);
    </script>
</body>

</html>
