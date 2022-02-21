<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>playful degens</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <?php require '../global/header-includes.php' ?>
</head>

<body class="page-template-onepage mint">
    <div class="site-wrapper">
        <?php require '../global/navbar.php' ?>

        <div id="content" class="site-content center-relative">
            <!-- Home Section -->
            <div id="home" class="section no-page-title relative">
                <div class="section-wrapper block content-1170 center-relative">
                    <div id="mintflow-home" class="content-wrapper mint-flow-hholder" style="display: flex">
                        <div>
                            <h1 class="big-text">Connect your wallet</h1>

                            <div class="button-holder text-center">
                                <a onclick="mintpageFlow('mintflow-goldlist')" class="button metamask-btn"><img
                                        width="35px" height="35px" src="../assets/images/metamask.svg"> METAMASK</a>
                            </div>
                        </div>

                        <div class="social-icons desk">
                            <div class="button-holder text-center">
                                <a class="button"><i class="fab fa-discord"></i></a>
                            </div>
                            <h2 class="social-text">Stay ahead of the curve</h2>
                            <div class="button-holder text-center">
                                <a class="button"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>

                        <div class="social-icons mob">
                            <h2 class="social-text">Stay ahead of the curve</h2>
                            <div class="button-holder text-center">
                                <div class="btn1">
                                    <a class="button"><i class="fab fa-discord"></i></a>
                                </div>
                                <div class="btn2">
                                    <a class="button"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="mintflow-goldlist" class="content-wrapper mint-flow-hholder">
                        <div>
                            <h2 class="oct-heading2">
                                Congratulations!<br /> Your Wallet is Gold Listed.<br />
                            </h2>
                            <article class="oct-bodytxt-large">
                                How many Degens would you like to mint?
                            </article>
                            <div class="oct-octaniums-countbox">
                                <article onclick="mintNumberactive(event)" class="octanium-counts-circle">
                                    1
                                </article>
                                <article onclick="mintNumberactive(event)" class="octanium-counts-circle">
                                    2
                                </article>
                                <article onclick="mintNumberactive(event)" class="octanium-counts-circle">
                                    3
                                </article>
                                <article onclick="mintNumberactive(event)" class="octanium-counts-circle">
                                    4
                                </article>
                                <article onclick="mintNumberactive(event)" class="octanium-counts-circle">
                                    5
                                </article>
                            </div>
                            <div class="button-holder text-center">
                                <a onclick="mintpageFlow('mintflow-success')" class="button goldlist-mint-btn">MINT</a>
                            </div>
                            <article class="oct-minted-numinfo">0/7846600 minted</article>
                            <div class="mint-container">
                                <div class="mint-progress">0/7846600 minted</div>
                            </div>
                            <div class="w3-container">

                                <div class="w3-light-grey">
                                    <div id="myBar" class="w3-container w3-green w3-center" style="width:60%">0/7846600
                                        minted</div>
                                </div>

                            </div>

                            <div class="social-icons desk mint-sec2">
                                <div class="button-holder text-center">
                                    <a class="button"><i class="fab fa-discord"></i></a>
                                </div>
                                <h2 class="social-text">Stay ahead of the curve</h2>
                                <div class="button-holder text-center">
                                    <a class="button"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>

                            <div class="social-icons mob mint-sec2">
                                <h2 class="social-text">Stay ahead of the curve</h2>
                                <div class="button-holder text-center">
                                    <div class="btn1">
                                        <a class="button"><i class="fab fa-discord"></i></a>
                                    </div>
                                    <div class="btn2">
                                        <a class="button"><i class="fab fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div id="mintflow-success" class="content-wrapper mint-flow-hholder">
                        <h2 class="oct-heading2">Mint Successful!</h2>

                        <div class="button-holder text-center">
                            <article>Check it Out!</article>
                            <a class="button"><img width="35px" height="35px" src="../assets/images/opensea.svg">
                                OpenSea</a>
                        </div>

                        <div style='height:100px'></div>

                        <div class="social-icons desk mint-sec2">
                            <div class="button-holder text-center">
                                <a class="button"><i class="fab fa-discord"></i></a>
                            </div>
                            <h2 class="social-text">Stay ahead of the curve</h2>
                            <div class="button-holder text-center">
                                <a class="button"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>

                        <div class="social-icons mob mint-sec2">
                            <h2 class="social-text">Stay ahead of the curve</h2>
                            <div class="button-holder text-center">
                                <div class="btn1">
                                    <a class="button"><i class="fab fa-discord"></i></a>
                                </div>
                                <div class="btn2">
                                    <a class="button"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="sale-section">
                <article>Public Sale live in</article>
                <div id="clockdiv">
                    <div>
                        <span id="days"></span> :
                        <div class="smalltext">days</div>
                    </div>
                    <div>
                        <span id="hours"></span> :
                        <div class="smalltext">hours</div>
                    </div>
                    <div>
                        <span id="minutes"></span> :
                        <div class="smalltext">mins</div>
                    </div>
                    <div>
                        <span id="seconds"></span>
                        <div class="smalltext">secs</div>
                    </div>
                </div>
            </div>
        </div>

        <?php require '../global/footer-includes.php' ?>
</body>

<script>
var countDownDate = new Date("Jan 25, 2022 15:37:25").getTime();

var x = setInterval(function() {

    var now = new Date().getTime();

    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    if (days < 10) {
        document.getElementById("days").innerHTML = "0" + days + "";
    } else {
        document.getElementById("days").innerHTML = days + "";
    }
    if (hours < 10) {
        document.getElementById("hours").innerHTML = "0" + hours + "";
    } else {
        document.getElementById("hours").innerHTML = hours + "";
    }
    if (minutes < 10) {
        document.getElementById("minutes").innerHTML = "0" + minutes + "";
    } else {
        document.getElementById("minutes").innerHTML = minutes + "";
    }
    if (seconds < 10) {
        document.getElementById("seconds").innerHTML = "0" + seconds + "";
    } else {
        document.getElementById("seconds").innerHTML = seconds + "";
    }

    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);

$(".metamask-btn").click(function() {
    $(".sale-section").hide();
});
</script>


</html>