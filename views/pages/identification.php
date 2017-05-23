<!-- MENU SIDEBAR  -->
<section class="navbar">
<div class="navbar-logo">
<img src="src/images/logo_grand_format.png" alt="Logo Mes premiers mois">
</div>

<nav>
<ul>
  <li class="lato-menu-active"><a href="#"><img src="src/images/poussin_head.png" alt="Page en cours" class="active-menu-accueil">Accueil</a></li>
  <li class="lato-menu"><a href="#">Acheter-Offrir</a></li>
  <li class="lato-menu"><a href="#">Nos box</a></li>
  <li class="lato-menu"><a href="#">Boutique</a></li>
  <li class="lato-menu"><a href="#">Le blog</a></li>
</ul>
</nav>
</section>
<!-- FORMULAIRE LOGIN -->

        <section class="content">

          <div class="ariane-string">

          <nav>
            <ul>
              <li class="lato-ariane-done">Acheter-Offrir</li>
              <li><img src="src/icons/arrow.svg" alt="" class"arrow"></li>
              <li class="lato-ariane-done">Formulaire bébé</li>
              <li><img src="src/icons/arrow.svg" alt="" class"arrow"></li>
              <li class="lato-ariane-done">Identification</li>
              <li><img src="src/icons/arrow_grey.svg" alt="" class"arrow"></li>
              <li class="lato-ariane-to-do">Formulaire d'achat</li>
              <li><img src="src/icons/arrow_grey.svg" alt="" class"arrow"></li>
              <li class="lato-ariane-to-do">Validation</li>
            </ul>
          </nav>

          </div>

        </section>

        <div class="inscription-container">

            <div class="login-container">
                <p class="satisfy-little-title-orange form-title">Se connecter</p>
                <form class="form lato-text-bluedark" action="formulaireachat" method="post">
                    <div class="form-zone">
                        <label class="form-label" for="mail">E-mail</label>
                        <div class="form-input">
                            <input class="lato-text-grey form-input-size" type="mail" name="mail" id="mail" required placeholder="maman@gmail.com">
                        </div>
                    </div>
                    <div class="form-zone">
                        <label class="form-label" for="password">Mot de passe</label>
                          <div class="form-input">
                            <input class="lato-text-grey form-input-size" type="password" name="password" id="password" required placeholder="mot de passe">
                          </div>
                    </div>

                      <div class="form-buton form-zone button">
                          <input type="submit">
                      </div>

                </form>




            </div>
<!-- FORMULAIRE INSCRIPTION  -->
            <div class="login-container">
                <p class="satisfy-little-title-orange form-title">Créer un compte</p>
                <form class=" form login-form lato-text-bluedark form-inscription" action="formulaireachat" method="post">
                    <div class="form-zone">
                        <label class="form-label" for="name">Nom</label>
                        <div class="form-input">
                          <input class="lato-text-grey form-input-size" type="name" name="name" id="name" placeholder="nom">
                        </div>
                    </div>
                    <div class="form-zone">
                        <label class="form-label" for="birth_date">Date de naissance</label>
                        <div class="form-input">
                          <input class="lato-text-grey form-input-size" type="birth_date" name="birth_date" id="birth_date" placeholder="JJ/MM/AA">
                        </div>
                    </div>
                     <div class="form-zone">
                          <label class="form-label" for="mail">E-mail</label>
                          <div class="form-input">
                            <input class="lato-text-grey form-input-size" type="mail" name="mail" id="mail" placeholder="maman@gmail.com">
                          </div>
                    </div>
                    <div class="form-zone">
                      <label class="form-label" for="password">Mot de passe</label>
                      <div class="form-input">
                        <input class="lato-text-grey form-input-size" type="password" name="password" id="password" placeholder="mot de passe">
                      </div>
                    </div>
                    <div class="form-buton-inscription form-zone button">
                        <input type="submit">
                    </div>

                </form>


            </div>
        </div>

</body>
</html>
