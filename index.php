<!DOCTYPE html>

<?php
    header('Content-Type: text/html; charset=utf-8');
?>

<html>
    <head>
        <meta charset='uft-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="cv icon" href="assets/img/icones.PNG" type="image/png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title> Mon CV Virtuel </title>
        <link rel="stylesheet" href="/css/style.css">
    </head>

    <body>
        <header>
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">
                    <h5 class="text-white h4"><a class="btn btn-light btn-sm" href="#cv_1" role="button">CV</a></h5>
                    <h6 class="text-white h5"><a class="btn btn-light btn-sm" href="#PremierBlocCompetence" role="button">Compétences</a></h6>
                    <span class="text-muted"><a class="btn btn-light btn-sm" href="#Liste-informations-contact" role="button">Contact</a></span>
                </div>
              </div>
              <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                </div>
              </nav>
              
                            
        </header>

        <main>
            <br>
            <div class="carousel">
                <div class="carousel_item carousel_item--visible">
                    <img src="./assets/img/stage-etudiant-tournai-belgique-ecommerce.jpg" alt="img1">
                </div>
                <div class="carousel_item">
                    <img src="./assets/img/CV-parfait.jpg" alt="img2">
                </div>
                <div class="carousel_item">
                    <img src="./assets/img/capture-decran-2019-06-14-a-12-15-02.png" alt="img3">
                </div>

                <div class="carousel_actions">
                    <button id="prev" aria-label="slide_avant" ><</button>
                    <button id="next" aria-label="slide_suivante" >></button>
            </div>

            </div>
            
                <div class="row">
                    <div class="col-6 col-md-4 competence shadow-sm p-3 mb-5 bg-white rounded">
                     
                        <h2>Projet Professionnel</h1>
                        <p>Actuellement en formation Concepteur Développeur d'Application  web à l'ORT de Colomiers, je cherche activement un stage pour valider mon titre Professionnel
                            mes compétences transverses peuvent être un véritable atout pour votre entreprise.   </p>
                        
                            
                    </div>
                    <div class="col-6 col-md-4 competence shadow-sm p-3 mb-5 bg-white rounded"> 
                        <a name="PremierBlocCompetence" class="encre"></a>
                        <h2>Compétences</h2>
                        <p>
                            <li> Maîtrise des outils bureautiques 
                                et messagerie Internet
                            </li>
                            <li>Compétences informatiques</li>
                            <li>Contact et relation client</li>
                            <li>Connaissances des bases en
                                HTML5, CSS3, JS, SQL, PHP, UML, framework, Méthode Agiles (SCRUM)</li>
                            <li>Analyse et résolution de 
                                problèmes</li>      
                        </p>    
                    </div>
                    <div class="col-6 col-md-4 competence shadow-sm p-3 mb-5 bg-white rounded"> 
                        <h2>Centre d'intérêt</h2>
                        <p>
                            <li>Intérêt pour les accessoires 
                                high-tech</li>
                            <li>Jeux vidéo (ordinateur)</li>
                            <li>Football</li>
                            <li>Famille</li>
                            <li>Chineur d'objet de collection(achat - revente)</li>
                            <br>
                        </p>
                    </div>
            </div>
            <br>
            <br>
            <div class="card-group">
                <div class="card border border-primary shadow p-3 mb-5 bg-white rounded">
                    <h4 class="card-title">Vendeur chez</h4>
                    <br>
                    <br>
                    <br>
                    <img class="card-img-top" src="./assets/img/png-clipart-blue-background-with-decathlon-text-overlay-decathlon2-logo-icons-logos-emojis-iconic-brands-thumbnail.png" alt="Card image cap">
                    <div class="card-body">
                    <br>
                    <br>
                    <br>
                    <br>
                    <h3 class="card-title">Septembre 2012 à Aout 2013</h3>
                    <p class="card-text">- Recherche des besoins client</p>
                    <p class="card-text">- Mise en rayon</p>
                    <p class="card-text">- Prise d'appel</p>
                    </div>
                </div>
                <div class="card border border-primary shadow p-3 mb-5 bg-white rounded">
                    <h4 class="card-title">Vendeur expert chez</h4>
                    <img class="card-img-top" src="./assets/img/BCBC2A667523A57DEA255CourFB96642A26.png"  alt="Card image cap">
                    <div class="card-body">
                    <h3 class="card-title">Mars 2014 à Avril 2016</h3>
                    <p class="card-text">- Formation des vendeurs débutants</p>
                    <p class="card-text">- Responsable du merchandising</p>
                    <p class="card-text">- Mise en place d’opération commerciale</p>
                    </div>
                </div>
                <div class="card border border-primary shadow p-3 mb-5 bg-white rounded">
                    <h4 class="card-title">Responsable adjoint chez</h4>
                    <img class="card-img-top" src="./assets/img/BCBC2A667523A57DEA255CourFB96642A26.png" alt="Card image cap">
                    <div class="card-body">
                    <h3 class="card-title">Avril 2016 à Septembre 2020</h3>
                    <p class="card-text">- Gestion RH, management des équipes</p>
                    <p class="card-text">- Gestion logistique </p>
                    <p class="card-text">- Gestion et résolution de problématique magasin</p>
                </div>
            </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12 col-xl-6">
                    <div class="card border border-dark" style="width: auto;">
                        <img class="card-img-top" style="max-width: fit-content;" src="/assets/img/1618931511407.jpg"   alt="ma photo">
                    <div class="card-body">
                        <p class="card-text">Ma photo</p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-6">
                    <div class="card border border-dark" style="width: auto;">
                            <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2890.0693416555628!2d1.2803900514557127!3d43.584271979021196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aeb3d0e51a4319%3A0xa3542624b93d2541!2s73%20Rue%20Albert%20Einstein%2C%2031830%20Plaisance-du-Touch!5e0!3m2!1sfr!2sfr!4v1617980458485!5m2!1sfr!2sfr" height="545" allowfullscreen></iframe>
                            </div>
                            <div class="card-body">
                        <p class="card-text">Mon Adresse</p>
                        <h5 class="card-title"></h5>
        
                    </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-6">
                    <div class="card border border-dark mt-1" style="widht: auto;">
                        <a name="cv_1" class="encre"></a>
                        <embed class="card-img-top" src="/assets/cv2021.pdf" width=500 height=519   type='application/pdf'/>
                    <div class="card-body">
                            <p class="card-text">Mon CV</p>
                        <h5 class="cv"></h5>
                    </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-6">
                    <div class="card border border-dark mt-1">
                        <div class="card-body">
                        <div class="mb-3">
                            <form method="POST">
                                <label for="exampleFormControlInput1" class="form-label">Email </label>
                                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
                                    <label for="exampleFormControlTextarea1" class="form-label"> Message</label>    
                                    <textarea class="form-control" name="message" id="exampleFormControlTextarea4"rows="16" required></textarea>
                                    <input type="submit" class="btn btn-primary">
                            </form>
                            <!--<?php
                            if (isset($_POST['message'])) {
                                $position_arobase = strpos($_POST['email'], '@');
                                if ($position_arobase === false)
                                    echo '<p>Votre email doit comporter un arobase.</p>';
                                else {
                                    $retour = mail('martin.raph@live.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
                                    if($retour)
                                        echo '<p>Votre message a été envoyé.</p>';
                                    else
                                        echo '<p>Erreur.</p>';
                                }
                            }
                            ?>
                        -->
                        </div>
                        </div>        
                    </div>
                </div>
            </div>    
            </div>
        </main>
        <br>


        <footer>
            <div class="d-flex justify-content-around">
                <div class="Liste-informations-personelles">
                    <h5>Informations Personelles<h5>
                    <ul class="Liste-informations-personelles">
                        <li>Raphael Martin</li>
                        <li>28 ans</li>
                        <li>73 rue Albert Einstein</li>
                        <li>31830 - Plaisance du touch</li>
                    </ul>
                </div>
                <div class="ListeInformationsContact">
                    <h5>Me contacter</h5>                    
                    <ul class="Liste-informations-contact">
                        <li><a href="tel:0782630096"> 07.82.63.00.96</li>
                        <li><a href="mailto:martin.raph@live.fr">martin.raph@live.fr</a></li>
                        <a name="Liste-informations-contact" class="encre"></a>
                    </ul>
                </div>
                <div class="Liste-informations-reseau">
                    <h5>Réseau social</h5>
                    <ul class="Liste-informations-reseau">
                        <li><img src="/assets/img/linkedin.svg" width="15px" alt=""><a href="https://www.linkedin.com/in/rapha%C3%ABl-martin-60b0a7208/">Linkedin</a></li>
                    </ul>
                </div>    
            </div>
        
        </footer>










    </body> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script type="module" src="main.js"></script>
</html>