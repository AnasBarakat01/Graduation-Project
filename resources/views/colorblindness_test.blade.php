<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/colorblindness.css">
    <title>colorblindness test</title>
    <link href="assets/img/logo.png" rel="icon">
</head>
<body>
    <div class="container" style="padding-top: 15px;">

        <div class="row">

            <div id="div1" class="col-sm-4" style="padding-top: 5px;margin:7% 20%;">

                <div style="background-color: white; padding: 30px; border-radius: 15px;">
                    <div class="panel-footer">Your Progress<br />
                        <br>
                        <p id="questCount"></p>

                        <div id="barra" class="progress" >
                            <div id="bar" class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"
                                style="width:0.5%;">
                            </div>

                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color: white;">
                        </div>
                        <div class="panel-body">

                            <div id='title'>
                                <h3>colorblindness test</h3>
                            </div>

                            <div id="h4Start">

                                <p style="color: #e86202"><b>Discripiton</b>
                                    <p />
                                    This is just a test from several questions to see if you suffer from color blindness or not.
                                <h4>Click start to start the test</h4>
                            </div>




                            <button id="start">Start Test</button>


                            <div id="content">
                                <div id="question"></div>
                                <div id="answers"></div>
                                <br />
                                <button id="back" disabled>Back</button>
                                <button id="next">Next</button>

                                <h3>
                                    <p id="score"></p>
                                </h3>
                                <p id="result"><b>Congratulations! You see normally.</b></p>
                                <p id="resultbad"><b>Sorry, You suffer from color blindness.</b></p>

                                <button id="startagain">Start Again</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="/assets/js/colorblindness.js"></script>

</body>
</html>
