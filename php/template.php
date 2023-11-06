<?php
function printheader()
{
    echo '  
    <header>
        <div class="container">
            <a href="./"><div class="logo-box">                    
                <img src="images/favicon.ico">
                <h1>Lynx</h1>
                <h2>Web Services</h1>
            </div></a>
            <btn id="menu-button" onclick="toggledisplay('main-menu')"><span class="material-icon">menu</span></btn>
        </div>
    </header>
    ';
}
function printfooter()
{
    echo '    
    <footer>
            <div class="logo-box">                    
                <img src="images/lynx-logo-white.png" style="opacity:0.3">
                <h1>Lynx</h1>
                <h2>Web Services</h1>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h2>Why choose us</h2>
                    <p>Lynx Web Services offers cost effective and minimalistic web services for your business. We have been providing our customers with industry standard mobile friendly websites and web related services since 2016.</p>
                    <p>Give your business a classy and reliable web presence with out expertly curated web products.</p>
                </div>
        
                <div class="col-md-4">
                    <h2>Technologies we serve</h2>
                    <img class="margin-10" src="images/icon/html5.png" height="60px"/>
                    <img class="margin-10" src="images/icon/css3.png" height="60px"/>
                    <img class="margin-10" src="images/icon/bootstrap.png" height="60px"/>
                    <img class="margin-10" src="images/icon/php.png" height="60px"/>
                    <img class="margin-10" src="images/icon/aws.png" height="60px"/>
                    <img class="margin-10" src="images/icon/react.png" height="60px"/>
                    <img class="margin-10" src="images/icon/zoho.png" height="60px"/>
                </div>
        
                <div class="col-md-4">
                    <h2>Important Links</h2>
                        <div class="row">
                            <div class="col-6">
                                <ul>
                                    <h3>Sitemap</h3>
                                    <li><a href="index.php">Homepage</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="contact.php">Contact us</a></li>
                                </ul>
                            </div>            
                            <div class="col-6">
                                <ul>
                                    <h3>Legal</h3>
                                    <li><a href="terms-of-service.php">Terms of services</a></li>
                                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                    <li><a href="refund-policy.php">Refund policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
    ';
}

function printmenu()
{
    echo '    
    <ul id="main-menu">
    <li><a href="index.php">Homepage</a></li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="services.php">Services</a></li>
    <li><a href="blog.php">Blog</a></li>
    <li><a href="contact.php">Contact us</a></li>
    </ul>
    ';
}

function printlinks()
{
    echo '    
    <div class="linkbar">
        <a><img src="images/icon/facebook.png"></a>
        <a><img src="images/icon/instagram.png"></a>
        <a><img src="images/icon/whatsapp.png"></a>
        <a><img src="images/icon/twitter.png"></a>
        <a><img src="images/icon/youtube.png"></a>
        <a><img src="images/icon/linkedin.png"></a>
        <a><img src="images/icon/telegram.png"></a>
    </div>
    ';
}

function printheadercss()
{
    echo '
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="style/design-primary.css" rel="stylesheet">
    ';
}

function printheaderjs()
{
    echo '
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script>
            function toggledisplay($toggleId){
                $toggleElement=document.getElementById($toggleId);
                if($toggleElement.style.display=="none")$toggleElement.style.display="block";
                else if($toggleElement.style.display=="block")$toggleElement.style.display="none";
                else $toggleElement.style.display="block";
            }
        </script>
    ';
}
?>