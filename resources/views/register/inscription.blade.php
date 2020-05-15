<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IMMOBILERFACIL</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons
        ================================================== -->
    <link href="{{ asset('img/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('img/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('img/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">


    <!--

  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
  -->

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
        ================================================== -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('css/nivo-lightbox/nivo-lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nivo-lightbox/default.css') }}" rel="stylesheet">


    <!--
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
   <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            <a class="navbar-brand page-scroll" href="#page-top">IMMOBILIERFACIL</a>
            <div class="phone"><span>Call Today</span>691 780 379</div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <li class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" style="margin-left: 0px">
                <li><a href="#about" class="page-scroll">qui sommes nous</a></li>
                <li><a href="#services" class="page-scroll">Nos Services</a></li>
                <li><a href="#portfolio" class="page-scroll">Nos Projets</a></li>
                <li><a href="#testimonials" class="page-scroll">Avis des clients</a></li>
                <li><a href="#contact" class="page-scroll">Contact</a></li>
                <li>
                    <div class="col-md-8 col-md-offset-2 intro-text">
                        <button type="button" class="btn btn-custom btn-lg" data-toggle="modal"
                                data-target="#loginModal">connexion
                        </button>
                    </div>
                </li>
                <li>
                    <div class="col-md-8 col-md-offset-2 intro-text">
                        <button type="button" class="btn btn-custom btn-lg" data-toggle="modal"
                                data-target="#signModal">inscription
                        </button>
                    </div>
                </li>


            </ul>
    </div>
    <!-- /.navbar-collapse -->
    </div>
</nav>

<!--

<div class="modal" id="login">
    <h4>Login form</h4>
</div>

<script>

    $(document).ready(function () {
        $('.modal').modal();
    })
</script>
-->

<!-- Contact Section -->
<div id="contact">
    <div class="container">
        <div class="col-md-8">
            <div class="row">
                <div class="section-title">
                    <h2>Exprimez vous</h2>
                    <p>Avez vous des préoccupation,des suggestions ou critiques ? ,Si oui merci de remplir ce formulaire
                        SVP.Nous y répondrons dans des brefs délai.</p>
                </div>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="name" class="form-control" placeholder="Name"
                                       required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" id="email" class="form-control" placeholder="Email"
                                       required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message"
                                  required></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
                </form>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-1 contact-info">
            <div class="contact-item">
                <h4>Contact Info</h4>
                <p><span>Address</span><br>
                    Douala Cameroun</p>
            </div>
            <div class="contact-item">
                <p><span>Phone</span> (+237)691 780 379/ (+237)670 044 686</p>
            </div>
            <div class="contact-item">
                <p><span>Email</span> nguimfackrodrigue@gmail.com</p>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="social">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Section -->


<div class="modal fade" role="dialog" id="loginModal">
    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h3 class="modal-title">login form</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="username">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="password">
                </div>
            </div>
            <div class="modal-footer">

                <button type="submit" class="btn btn-success">submit</button>
            </div>

        </div>
    </div>


</div>


<div class="modal fade" role="dialog" id="signModal">
    <div class="modal-dialog">

        <form class="modal-content">

            <div class="modal-header">

                <h3 class="modal-title" style="color:#4a1e7f;text-align: center">Merci de nous faire confiance </h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>votre nom:</label>
                        <input type="text" name="nom" class="form-control" placeholder="nom" required>
                    </div>
                    <div class="form-group">
                        <label>Nom d'utilisateur:</label>
                        <input type="text" name="username" class="form-control" placeholder="ex : rodeo">
                    </div>
                    <div class="form-group">
                        <label>adresse email:</label>
                        <input type="email" name="email" class="form-control" placeholder="email" required>
                    </div>
                    <div class="form-group">
                        <label>N0 Téléphone:</label>
                        <input type="number" name="telephone" class="form-control" placeholder="telephone" required>
                    </div>
                    <div class="form-group">
                        <label>N0 carte nationale d'identité:</label>
                        <input type="text" name="cni" class="form-control" placeholder="cni">
                    </div>
<!--
                    <fieldset class="chkbxrdio-grp">
                        <div class="radio">
                            <label for="status1" class="required"><input type="radio" name="proprietaire"
                                                                         value="proprietaire" id="proprietaire"
                                                                         required="required"/>
                                propriétaire : si vous voulez vendre ou louer vos biens</label>
                        </div>

                        <div class="radio">
                            <label for="status1" class="required"><input type="radio" name="locataire" value="locataire"
                                                                         id="locataire" required="required"/>
                                locataire : si vous chercher un bien pour louer</label>
                        </div>
                        <br>
                        <div class="radio">
                            <label style="margin-top: 11px;margin-left: -270px" for="status1" class="required"><input
                                        style="margin-top: 4px;margin-left: -20px" type="radio" name="particulier"
                                        value="particulier" id="particulier" required="required"/>
                                particulier : si vous voulez acheter un bien</label>
                        </div>

                    </fieldset>   -->

                    <fieldset class="radio">
                        <div class="radio">
                            <label for="status1" class="required"><input type="radio" name="status" value="1" id="status1" required="required" />      propriétaire : si vous voulez vendre ou louer vos biens</label>
                        </div>
            <br>
                        <div class="radio">
                            <label for="status2"><input type="radio" name="status" value="2" id="status2" />  locataire : si vous chercher un bien pour louer</label>
                        </div>
                        <br>
                        <div class="radio">
                            <label for="status3"><input type="radio" name="status" value="3" id="status3" />  particulier : si vous voulez acheter un bien</label>
                        </div>
                        <br>

                    </fieldset>

                    <div class="form-group">

                        <label style="margin-top: 40px;" for="nationalite">votre nationalité:</label>
                        <select type="text" id="nationalite" class="form-control">

                            <option value="Cameroun" selected="selected">Cameroun</option>

                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Afrique_Centrale">Afrique_Centrale</option>
                            <option value="Afrique_du_sud">Afrique_du_Sud</option>
                            <option value="Albanie">Albanie</option>
                            <option value="Algerie">Algerie</option>
                            <option value="Allemagne">Allemagne</option>
                            <option value="Andorre">Andorre</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Arabie_Saoudite">Arabie_Saoudite</option>
                            <option value="Argentine">Argentine</option>
                            <option value="Armenie">Armenie</option>
                            <option value="Australie">Australie</option>
                            <option value="Autriche">Autriche</option>
                            <option value="Azerbaidjan">Azerbaidjan</option>

                            <option value="Bahamas">Bahamas</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbade">Barbade</option>
                            <option value="Bahrein">Bahrein</option>
                            <option value="Belgique">Belgique</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermudes">Bermudes</option>
                            <option value="Bielorussie">Bielorussie</option>
                            <option value="Bolivie">Bolivie</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bhoutan">Bhoutan</option>
                            <option value="Boznie_Herzegovine">Boznie_Herzegovine</option>
                            <option value="Bresil">Bresil</option>
                            <option value="Brunei">Brunei</option>
                            <option value="Bulgarie">Bulgarie</option>
                            <option value="Burkina_Faso">Burkina_Faso</option>
                            <option value="Burundi">Burundi</option>

                            <option value="Caiman">Caiman</option>
                            <option value="Cambodge">Cambodge</option>
                            <option value="Cameroun">Cameroun</option>
                            <option value="Canada">Canada</option>
                            <option value="Canaries">Canaries</option>
                            <option value="Cap_vert">Cap_Vert</option>
                            <option value="Chili">Chili</option>
                            <option value="Chine">Chine</option>
                            <option value="Chypre">Chypre</option>
                            <option value="Colombie">Colombie</option>
                            <option value="Comores">Colombie</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo_democratique">Congo_democratique</option>
                            <option value="Cook">Cook</option>
                            <option value="Coree_du_Nord">Coree_du_Nord</option>
                            <option value="Coree_du_Sud">Coree_du_Sud</option>
                            <option value="Costa_Rica">Costa_Rica</option>
                            <option value="Cote_d_Ivoire">Côte_d_Ivoire</option>
                            <option value="Croatie">Croatie</option>
                            <option value="Cuba">Cuba</option>

                            <option value="Danemark">Danemark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominique">Dominique</option>

                            <option value="Egypte">Egypte</option>
                            <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis</option>
                            <option value="Equateur">Equateur</option>
                            <option value="Erythree">Erythree</option>
                            <option value="Espagne">Espagne</option>
                            <option value="Estonie">Estonie</option>
                            <option value="Etats_Unis">Etats_Unis</option>
                            <option value="Ethiopie">Ethiopie</option>

                            <option value="Falkland">Falkland</option>
                            <option value="Feroe">Feroe</option>
                            <option value="Fidji">Fidji</option>
                            <option value="Finlande">Finlande</option>
                            <option value="France">France</option>

                            <option value="Gabon">Gabon</option>
                            <option value="Gambie">Gambie</option>
                            <option value="Georgie">Georgie</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Grece">Grece</option>
                            <option value="Grenade">Grenade</option>
                            <option value="Groenland">Groenland</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernesey">Guernesey</option>
                            <option value="Guinee">Guinee</option>
                            <option value="Guinee_Bissau">Guinee_Bissau</option>
                            <option value="Guinee equatoriale">Guinee_Equatoriale</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Guyane_Francaise ">Guyane_Francaise</option>

                            <option value="Haiti">Haiti</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong_Kong">Hong_Kong</option>
                            <option value="Hongrie">Hongrie</option>

                            <option value="Inde">Inde</option>
                            <option value="Indonesie">Indonesie</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Irlande">Irlande</option>
                            <option value="Islande">Islande</option>
                            <option value="Israel">Israel</option>
                            <option value="Italie">italie</option>

                            <option value="Jamaique">Jamaique</option>
                            <option value="Jan Mayen">Jan Mayen</option>
                            <option value="Japon">Japon</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Jordanie">Jordanie</option>

                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kirghizstan">Kirghizistan</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Koweit">Koweit</option>

                            <option value="Laos">Laos</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Lettonie">Lettonie</option>
                            <option value="Liban">Liban</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lituanie">Lituanie</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Lybie">Lybie</option>

                            <option value="Macao">Macao</option>
                            <option value="Macedoine">Macedoine</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Madère">Madère</option>
                            <option value="Malaisie">Malaisie</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malte">Malte</option>
                            <option value="Man">Man</option>
                            <option value="Mariannes du Nord">Mariannes du Nord</option>
                            <option value="Maroc">Maroc</option>
                            <option value="Marshall">Marshall</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Maurice">Maurice</option>
                            <option value="Mauritanie">Mauritanie</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexique">Mexique</option>
                            <option value="Micronesie">Micronesie</option>
                            <option value="Midway">Midway</option>
                            <option value="Moldavie">Moldavie</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolie">Mongolie</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Mozambique">Mozambique</option>

                            <option value="Namibie">Namibie</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk">Norfolk</option>
                            <option value="Norvege">Norvege</option>
                            <option value="Nouvelle_Caledonie">Nouvelle_Caledonie</option>
                            <option value="Nouvelle_Zelande">Nouvelle_Zelande</option>

                            <option value="Oman">Oman</option>
                            <option value="Ouganda">Ouganda</option>
                            <option value="Ouzbekistan">Ouzbekistan</option>

                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestine">Palestine</option>
                            <option value="Panama">Panama</option>
                            <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Pays_Bas">Pays_Bas</option>
                            <option value="Perou">Perou</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pologne">Pologne</option>
                            <option value="Polynesie">Polynesie</option>
                            <option value="Porto_Rico">Porto_Rico</option>
                            <option value="Portugal">Portugal</option>

                            <option value="Qatar">Qatar</option>

                            <option value="Republique_Dominicaine">Republique_Dominicaine</option>
                            <option value="Republique_Tcheque">Republique_Tcheque</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Roumanie">Roumanie</option>
                            <option value="Royaume_Uni">Royaume_Uni</option>
                            <option value="Russie">Russie</option>
                            <option value="Rwanda">Rwanda</option>

                            <option value="Sahara Occidental">Sahara Occidental</option>
                            <option value="Sainte_Lucie">Sainte_Lucie</option>
                            <option value="Saint_Marin">Saint_Marin</option>
                            <option value="Salomon">Salomon</option>
                            <option value="Salvador">Salvador</option>
                            <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                            <option value="Samoa_Americaine">Samoa_Americaine</option>
                            <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapour">Singapour</option>
                            <option value="Slovaquie">Slovaquie</option>
                            <option value="Slovenie">Slovenie</option>
                            <option value="Somalie">Somalie</option>
                            <option value="Soudan">Soudan</option>
                            <option value="Sri_Lanka">Sri_Lanka</option>
                            <option value="Suede">Suede</option>
                            <option value="Suisse">Suisse</option>
                            <option value="Surinam">Surinam</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Syrie">Syrie</option>

                            <option value="Tadjikistan">Tadjikistan</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Tanzanie">Tanzanie</option>
                            <option value="Tchad">Tchad</option>
                            <option value="Thailande">Thailande</option>
                            <option value="Tibet">Tibet</option>
                            <option value="Timor_Oriental">Timor_Oriental</option>
                            <option value="Togo">Togo</option>
                            <option value="Trinite_et_Tobago">Trinite_et_Tobago</option>
                            <option value="Tristan da cunha">Tristan de cuncha</option>
                            <option value="Tunisie">Tunisie</option>
                            <option value="Turkmenistan">Turmenistan</option>
                            <option value="Turquie">Turquie</option>

                            <option value="Ukraine">Ukraine</option>
                            <option value="Uruguay">Uruguay</option>

                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Vatican">Vatican</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vierges_Americaines">Vierges_Americaines</option>
                            <option value="Vierges_Britanniques">Vierges_Britanniques</option>
                            <option value="Vietnam">Vietnam</option>

                            <option value="Wake">Wake</option>
                            <option value="Wallis et Futuma">Wallis et Futuma</option>

                            <option value="Yemen">Yemen</option>
                            <option value="Yougoslavie">Yougoslavie</option>

                            <option value="Zambie">Zambie</option>
                            <option value="Zimbabwe">Zimbabwe</option>


                        </select>
                    </div>
                    <div class="form-group">
                        <label>Entrez un mot de passe:</label>
                        <input type="password" name="password" class="form-control" placeholder="password" required>
                    </div>
                    <div class="form-group">
                        <label>retapez votre mot de passe:</label>
                        <input type="password" name="password" class="form-control" placeholder="password" required>
                    </div>

            </div>

            <div class="modal-footer">
                <button type="reset" class="btn btn-danger">réessayer</button>
                <button type="submit" class="btn btn-success">je m'inscris</button>
            </div>
        </form>
    </div>

</div>


</div>


<div id="footer">
    <div class="container text-center">
        <p>&copy; 2020 IMMOBILIERFACIL. Design by <a href="http://www.templatewire.com" rel="nofollow">Ing Nguimfack
                Rodrigue</a></p>
    </div>
</div>
<!-- Scripts javasript -->
<script src="{{ asset('js/jquery.1.11.1.js') }}" defer></script>
<script src="{{ asset('js/bootstrap.js') }}" defer></script>
<script src="{{ asset('js/SmoothScroll.js') }}" defer></script>
<script src="{{ asset('js/nivo-lightbox.js') }}" defer></script>
<script src="{{ asset('js/jqBootstrapValidation.js') }}" defer></script>
<script src="{{ asset('js/contact_me.js') }}" defer></script>
<script src="{{ asset('js/contact_me.js') }}" defer></script>
<script src="{{ asset('js/main.js') }}" defer></script>


<!--
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>

-->
</body>
</html>