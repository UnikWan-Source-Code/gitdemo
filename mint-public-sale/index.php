<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>playful degens</title>
    <?php require '../global/header-includes.php' ?>
</head>

<body class="page-template-onepage mint-nowallet">
    <div class="site-wrapper">
        <?php require '../global/navbar.php' ?>

        <div id="content" class="site-content center-relative">
            <!-- Home Section -->
            <div id="home" class="section no-page-title relative">
                <div class="section-wrapper block content-1170 center-relative">
                    <div class="content-wrapper mint-flow-hholder" style="display: flex">
                        <h2 class="oct-heading2">Congratulations!<br/> Your Wallet is Connected.</h2>

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

                        <div class="mint-nowallet-hero-img">
                            <img class="hero-img" src="../assets/images/no-wallet-hero.png" alt="phenoix" />
                            <div class="char-words-boxholdlayer" style="display: block">
                                <div class="char-words-boxhold">
                                    <div class="char-words-box">
                                        <div class="char-img-box">
                                            <img src="../assets/images/error.png">                            
                                        <div class="char-text">
                                            <article class="charwords-box-heading">Oops...<br/> You need early access :(</article>
                                            <article class="charwords-box-error">
                                                Join us on Discord for updates and a chance to make the gold list.
                                            </article>
                                        </div>                            
                                        </div>
                                    </div>
                                    <div class="oct-triangle"></div>
                                </div>
                            </div>
                        </div>

                        <!-- <div style="height: 200px"></div> -->
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

if(days < 10)
{
    document.getElementById("days").innerHTML = "0" + days + "";
}   
else
{
    document.getElementById("days").innerHTML = days + "";
}
if(hours < 10)
{
    document.getElementById("hours").innerHTML = "0" + hours + "";    
}   
else
{
    document.getElementById("hours").innerHTML = hours + "";
}
if(minutes < 10)
{
    document.getElementById("minutes").innerHTML = "0" + minutes + "";    
}   
else
{
    document.getElementById("minutes").innerHTML = minutes + "";
}
if(seconds < 10)
{
    document.getElementById("seconds").innerHTML = "0" + seconds + "";    
}   
else
{
    document.getElementById("seconds").innerHTML = seconds + "";
}
    
if (distance < 0)
{
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
}
}, 1000);    
</script>

</html>