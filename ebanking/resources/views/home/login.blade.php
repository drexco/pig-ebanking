<!DOCTYPE html>
  <html ng-app="nwa-merlin-login">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          
          
      <meta http-equiv="X-UA-Compatible" content="IE=edge">    
      <meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
      <meta http-equiv="CACHE-CONTROL" content="NO-STORE"> 
      <meta name="google" content="notranslate">
      <meta http-equiv="Content-Language" content="fr">
      <meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable=no">

      <title>Piguet Galland</title>
         

      <!-- compiled CSS -->
          
      <link rel="stylesheet" type="text/css" href="https://ebanking.piguetgalland.ch/assets/vendor_vendor_2.1.5.1.css" media="all" onload="if(media!=&#39;all&#39;)media=&#39;all&#39;">
            
      <link rel="stylesheet" type="text/css" href="https://ebanking.piguetgalland.ch/assets/vendor_2.1.5.1.css" media="all" onload="if(media!=&#39;all&#39;)media=&#39;all&#39;">
          
      <link rel="stylesheet" type="text/css" href="https://ebanking.piguetgalland.ch/assets/login_2.1.5.1.css" media="all" onload="if(media!=&#39;all&#39;)media=&#39;all&#39;">
          
      <link rel="apple-touch-icon" sizes="57x57" href="https://ebanking.piguetgalland.ch/assets/icons-82bc4a938ca071af75594af4bab278a9/apple-touch-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="https://ebanking.piguetgalland.ch/assets/icons-82bc4a938ca071af75594af4bab278a9/apple-touch-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="https://ebanking.piguetgalland.ch/assets/icons-82bc4a938ca071af75594af4bab278a9/apple-touch-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="https://ebanking.piguetgalland.ch/assets/icons-82bc4a938ca071af75594af4bab278a9/apple-touch-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="https://ebanking.piguetgalland.ch/assets/icons-82bc4a938ca071af75594af4bab278a9/apple-touch-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="https://ebanking.piguetgalland.ch/assets/icons-82bc4a938ca071af75594af4bab278a9/apple-touch-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="https://ebanking.piguetgalland.ch/assets/icons-82bc4a938ca071af75594af4bab278a9/apple-touch-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="https://ebanking.piguetgalland.ch/assets/icons-82bc4a938ca071af75594af4bab278a9/apple-touch-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="https://ebanking.piguetgalland.ch/assets/icons-82bc4a938ca071af75594af4bab278a9/apple-touch-icon-180x180.png">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
      <meta name="apple-mobile-web-app-title" content="webpack-boilerplate">
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="theme-color" content="#fff">
      <meta name="application-name" content="webpack-boilerplate">
      <link rel="icon" type="image/png" sizes="32x32" href="https://ebanking.piguetgalland.ch/assets/icons-82bc4a938ca071af75594af4bab278a9/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="https://ebanking.piguetgalland.ch/assets/icons-82bc4a938ca071af75594af4bab278a9/favicon-16x16.png">
      <link rel="shortcut icon" href="https://ebanking.piguetgalland.ch/assets/icons-82bc4a938ca071af75594af4bab278a9/favicon.ico">
      <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)" href="https://ebanking.piguetgalland.ch/assets/icons-82bc4a938ca071af75594af4bab278a9/apple-touch-startup-image-320x460.png">
      <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)" href="https://ebanking.piguetgalland.ch/assets/icons-82bc4a938ca071af75594af4bab278a9/apple-touch-startup-image-640x920.png">
      <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" href="https://ebanking.piguetgalland.ch/assets/icons-82bc4a938ca071af75594af4bab278a9/apple-touch-startup-image-640x1096.png">
      <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" href="https://ebanking.piguetgalland.ch/assets/icons-82bc4a938ca071af75594af4bab278a9/apple-touch-startup-image-750x1294.png">
      <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 3)" href="https://ebanking.piguetgalland.ch/assets/icons-82bc4a938ca071af75594af4bab278a9/apple-touch-startup-image-1182x2208.png">
      <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 3)" href="https://ebanking.piguetgalland.ch/assets/icons-82bc4a938ca071af75594af4bab278a9/apple-touch-startup-image-1242x2148.png">
      <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)" href="https://ebanking.piguetgalland.ch/assets/icons-82bc4a938ca071af75594af4bab278a9/apple-touch-startup-image-748x1024.png">
      <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)" href="https://ebanking.piguetgalland.ch/assets/icons-82bc4a938ca071af75594af4bab278a9/apple-touch-startup-image-768x1004.png">
      <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" href="https://ebanking.piguetgalland.ch/assets/icons-82bc4a938ca071af75594af4bab278a9/apple-touch-startup-image-1496x2048.png">
      <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" href="https://ebanking.piguetgalland.ch/assets/icons-82bc4a938ca071af75594af4bab278a9/apple-touch-startup-image-1536x2008.png">
    </head>

    <body>

        <div class="fill login-piguet" ng-if="languageLoaded" style="">
          <div ng-if="sidebarEnabled" class="row-offcanvas row-offcanvas-left fill ng-scope" style="position:relative;" ng-class="{active: offcanvas.open}" login-offcanvas="">
            <div class="corporate sidebar-offcanvas fill">
              <login-corporate class="ng-isolate-scope">
                <div class="container-fluid fill pg-corporate-expand">
                  <div class="corporate-bar-toggle visible-xs-block" login-offcanvas-toggle="">
                    <md-icon md-svg-src="https://ebanking.piguetgalland.ch/assets/ed9e6708093eead34b536dc25e868c23.svg" class="small-arrow" aria-hidden="true"><svg enable-background="new 0 0 56.7 56.7" viewBox="0 0 56.7 56.7" xmlns="http://www.w3.org/2000/svg" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false"><path d="m40.5 56.7l3.7-3.8-24.3-24.6 24.3-24.5-3.7-3.8-28 28.3z"></path></svg>
                    </md-icon>
                  </div>
                  <table class="corporate-bar-table" border="0">
                    <tbody>
                      <tr>
                        <td>
                          <div class="corporate-title">
                            <h1 class="corporate-name ng-binding">Piguet<br>Galland &amp;</h1>
                            <h2 class="corporate-site color-rotate ng-binding">votre<br>eBanking.</h2>
                            <div class="corporate-logo"></div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td height="100%">&nbsp;</td>
                      </tr>
                      <tr>
                        <td>
                          <div class="corporate-navigation-bottom">
                            <a href="http://piguetgalland.ch/fr/" class="corporate-navigation-back ng-binding">
                              <span class="arrow-button"><md-icon md-svg-src="https://ebanking.piguetgalland.ch/assets/ed9e6708093eead34b536dc25e868c23.svg" class="small-arrow" aria-hidden="true"><svg enable-background="new 0 0 56.7 56.7" viewBox="0 0 56.7 56.7" xmlns="http://www.w3.org/2000/svg" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false"><path d="m40.5 56.7l3.7-3.8-24.3-24.6 24.3-24.5-3.7-3.8-28 28.3z"></path></svg></md-icon></span> PiguetGalland.ch
                            </a>
                            <help-desk-summary class="corporate-helpdesk">
                              <div class="row corporate-helpdesk-container">
                                <div class="question-mark-button">
                                  <md-icon class="assistance" md-svg-src="https://ebanking.piguetgalland.ch/assets/124b958598199f04c27df8f7678475f0.svg" aria-hidden="true">
                                    <svg enable-background="new 0 0 56.7 56.7" viewBox="0 0 56.7 56.7" xmlns="http://www.w3.org/2000/svg" fit="" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false"><path d="m32.1 56.7l-.5-3.5c12.3-1.6 21.5-12.2 21.5-24.7 0-13.8-11.1-24.9-24.8-24.9-13.6 0-24.8 11.1-24.8 24.9 0 12.4 9.2 23 21.5 24.7l-.5 3.5c-13.9-1.9-24.5-14-24.5-28.2 0-15.7 12.7-28.5 28.3-28.5s28.3 12.8 28.3 28.5c.1 14.2-10.5 26.3-24.5 28.2zm-3.8-8.9c-2.9 0-5.3-2.4-5.3-5.3s2.4-5.3 5.3-5.3 5.3 2.4 5.3 5.3-2.3 5.3-5.3 5.3zm0-7.1c-1 0-1.8.8-1.8 1.8s.8 1.8 1.8 1.8 1.8-.8 1.8-1.8-.8-1.8-1.8-1.8zm0-28.5c-3.9 0-7.1 3.2-7.1 7.1h-3.5c0-5.9 4.8-10.7 10.6-10.7s10.7 4.9 10.7 10.7c0 5.3-3.8 9.7-8.9 10.5v3.7h-3.5v-7.1h1.8c3.9 0 7.1-3.2 7.1-7.1-.1-3.9-3.2-7.1-7.2-7.1z"></path></svg>
                                  </md-icon>
                                </div>
                                <div class="question-mark-text">
                                  <div class="row">
                                    <div class="col-xs-12 ng-binding" ng-bind="&#39;Helpdesk.Line1&#39;|loginTranslate">ASSISTANCE</div>
                                  </div>
                                  <div class="row">
                                    <div class="col-xs-12 ng-binding" ng-bind="&#39;Helpdesk.Line2&#39;|loginTranslate">Veuillez contacter votre gérant
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </help-desk-summary>

                            <div class="corporate-footer">
                              <div class="corporate-footer-links">
                                <a href="http://piguetgalland.ch/fr/piguet-galland/" target="_blank" class="ng-binding">Informations sur Piguet Galland</a> | <a href="http://piguetgalland.ch/fr/e-banking/conditions/" target="_blank" class="ng-binding">Conditions d'utilisation</a> | <a href="http://piguetgalland.ch/fr/e-banking/cookies/" target="_blank" class="ng-binding">Cookies
                                </a>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </login-corporate>
            </div>
            <div class="content fill pg-detail" login-offcanvas-off="">
              <login-content class="ng-isolate-scope">
                <div class="container-fluid fill detail-container">
                  <div class="content-bar-toggle hidden-lg" login-offcanvas-toggle="">
                    <div class="content-bar-toggle-button"><md-icon md-svg-src="https://ebanking.piguetgalland.ch/assets/d700681915e11f95f58b25bb06cec63c.svg" aria-hidden="true"><svg height="100%" viewBox="0 0 18 12" width="100%" xmlns="http://www.w3.org/2000/svg" fit="" preserveAspectRatio="xMidYMid meet" focusable="false"><path d="m0 12h18v-2h-18zm0-5h18v-2h-18zm0-7v2h18v-2z" fill-rule="evenodd" transform=""></path></svg></md-icon>
                    </div>
                  </div>
                <div class="row pull-right" style="padding-top: 15px;">
                  <div class="col-xs-11 pull-right">
                    <switch-language class="ng-isolate-scope">
                      <div class="btn-group login-dropdown-bright" ng-class="{ open: status.isopen }" style="width:200px; display:block">
                        <button type="button" class="btn dropdown-toggle ng-binding" ng-click="status.isopen = !status.isopen" aria-label="Français">Français<span class="btn-arrow-down"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu"><!-- ngRepeat: value in languages -->
                          <li ng-repeat="value in languages" ng-click="language.current = value; setLanguage()" class="ng-binding ng-scope" role="button" tabindex="0" style="">Français
                          </li><!-- end ngRepeat: value in languages -->
                          <li ng-repeat="value in languages" ng-click="language.current = value; setLanguage()" class="ng-binding ng-scope" role="button" tabindex="0">English
                          </li><!-- end ngRepeat: value in languages -->
                        </ul>
                      </div>
                    </switch-language>
                  </div>
                  <div class="col-xs-1">&nbsp;</div>
                </div>

                <div class="row" style="height: 10vmin;">
                  <div class="col-xs-12">&nbsp;</div>
                </div>
                <div class="row">
                  <div class="detail-title-container">
                    <h1 class="detail-title text-left ng-binding">Connexion</h1>
                  </div>
                </div>
                <div class="row">
                  <div class="detail-form">
                    <div class="row">
                      <div class="detail-form-inputs"><!-- uiView: -->
                        <ui-view class="ng-scope"><!-- uiView: --><ui-view class="ng-scope">
                          <div class="inline-form detail-form-content ng-scope">
                            <form role="form" name="login_form" novalidate="" method="post" class="ng-pristine ng-valid-server ng-invalid ng-invalid-required">
                              <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                              <div class="inline-form-group">
                                <input name="email" class="login-input-bright ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" type="text" aria-label="Code d&#39;accès" placeholder="Code d&#39;accès" id="email" autocomplete="off" required="" tabindex="1" aria-invalid="true">
                              </div>
                              <div class="inline-form-group">
                                <input name="password" class="login-input-bright ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" type="password" aria-label="Mot de passe" placeholder="Mot de passe" id="" ="password" autocomplete="off" required="" tabindex="2" aria-invalid="true">
                              </div>
                              <div class="inline-form-group" spinner="api/login$" spinner-dark="true" style="min-height: 50px; position: relative;">
                                <input ng-hide="loading" type="submit" class="login-button-primary-bright" ng-disabled="!login_form.$valid" value="Utiliser &#39;Entrée&#39; pour valider" aria-label="Utiliser &#39;Entrée&#39; pour valider" tabindex="3" aria-hidden="false">
                              </div>
                              <div class="inline-form-group error-message  ng-hide" style="text-align: left" ng-show="error" aria-hidden="true">
                                <p class="text ng-binding">
                                  @if(Session::get('login_message'))
                                    {{Session::get('login_message')}}
                                  @endif
                                </p>
                              </div>
                            </form>
                          </div>
                        </ui-view></ui-view>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </login-content>
          </div>
        </div><!-- end ngIf: sidebarEnabled -->
      </div><!-- end ngIf: languageLoaded -->

          <!-- compiled JS -->
          
      <script type="text/javascript" src="./Piguet Galland_files/vendor_2.1.5.1.js.download"></script>
          
      <script type="text/javascript" src="./Piguet Galland_files/login_2.1.5.1.js.download"></script>    


    </body>
</html>