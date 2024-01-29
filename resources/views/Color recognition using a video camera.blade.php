<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/img/logo.png" rel="icon">
    <title>Color recognition using a video camera</title>
    <link rel="stylesheet" href="assets/css/radiology-upload.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="/https://fonts.googleapis.com">
    <link rel="preconnect" href="/https://fonts.gstatic.com" crossorigin>
    <link href="/https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

</head>

<body>

    <!-- start header -->
    <header>
        <div class="container">
            <div class="logo">
                <a href="/"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
                <h1><a href="/">BFCAI</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>
            <nav>
                <select>
                    <option value="hide" data-i18n="selectlanguage">--Select language--</option>
                    <option value="en" data-i18n="english">English</option>
                    <option value="ar" data-i18n="arabic">Arabic</option>
                </select>
            </nav>
        </div>
    </header>
    <!-- end header -->



    <!-- Start second-section -->
    <div class="second-section">
        <div class="overlay">
            <div class="text">
                <div class="content">
                    <h1 data-i18n="services"> services </h1>
                    <a href="/" data-i18n="home2"> Home ></a>
                    <span data-i18n="service2">Color recognition using a video camera</span>
                </div>
            </div>
        </div>
    </div>
    <!-- End second-section -->


    <!-- Start third-section -->
    <div class="third-section">

        <br />
        <video id="videoCam"></video>
        <br /><br />
        <button class="button" onclick="openCam()" data-i18n="OpenCamera">Open Camera</button>



    </div>
    <!-- ======= Footer ======= -->

    <footer id="footer">
        <div class="container">
            <h3 data-i18n="name">color blindness and eye diseases website</h3>
            <p data-i18n="Welcome2">Helping you and your health is our priority.</p>
            <div class="social-links">
                <a href="tel://013-3229371" class="phone"><i class="bi bi-phone"></i></a>
                <a href="mailto:info@fci.bu.edu.eg" class="email"><i class="bi bi-envelope"></i></a>

            </div>
            <div class="copyright">
                &copy; <strong><span data-i18n="name">color blindness and eye diseases website</span></strong>.
            </div>

        </div>
    </footer><!-- End Footer -->

    <script>
        function openCam() {
            let All_mediaDevices = navigator.mediaDevices
            if (!All_mediaDevices || !All_mediaDevices.getUserMedia) {
                console.log("getUserMedia() not supported.");
                return;
            }
            All_mediaDevices.getUserMedia({
                audio: true,
                video: true
            })
                .then(function (vidStream) {
                    var video = document.getElementById('videoCam');
                    if ("srcObject" in video) {
                        video.srcObject = vidStream;
                    } else {
                        video.src = window.URL.createObjectURL(vidStream);
                    }
                    video.onloadedmetadata = function (e) {
                        video.play();
                    };
                })
                .catch(function (e) {
                    console.log(e.name + ": " + e.message);
                });
        }
    </script>
    <script src="assets/js/script.js" type="module"></script>

</body>

</html>
