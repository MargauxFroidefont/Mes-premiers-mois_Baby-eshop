<section class="navbar">

  <div class="navbar-logo">
    <a href="#"><img src="src/images/logo_grand_format.png" alt="Logo Mes premiers mois"></a>
  </div>

  <nav>
    <ul>
      <li class="lato-menu"><a href="#">Accueil</a></li>
      <li class="lato-menu-active"><a href="#"><img src="src/images/poussin_head.png" alt="Page en cours" class="active-menu-acheteroffrir">Acheter-Offrir</a></li>
      <li class="lato-menu"><a href="#">Nos box</a></li>
      <li class="lato-menu"><a href="#">Boutique</a></li>
      <li class="lato-menu"><a href="#">Le blog</a></li>
    </ul>
  </nav>

</section>

<section class="content">

  <div class="ariane-string">

  <nav>
    <ul>
      <li class="lato-ariane-done">Acheter-Offrir</li>
      <li><img src="src/icons/arrow.svg" alt="" class"arrow"></li>
      <li class="lato-ariane-done">Formulaire bébé</li>
      <li><img src="src/icons/arrow_grey.svg" alt="" class"arrow"></li>
      <li class="lato-ariane-to-do">Identification</li>
      <li><img src="src/icons/arrow_grey.svg" alt="" class"arrow"></li>
      <li class="lato-ariane-to-do">Formulaire d'achat</li>
      <li><img src="src/icons/arrow_grey.svg" alt="" class"arrow"></li>
      <li class="lato-ariane-to-do">Validation</li>
    </ul>
  </nav>

  </div>

  <div class="baby-form">

    <h1 class="satisfy-little-title-orange">Qui est l'heureux bébé ?</h1>

    <form class="form login-form lato-text-bluedark form-inscription" action="#" method="post">

    <div class="form-part">
      <div class="form-zone">
          <label class="form-label" for="name">Prénom</label>
          <div class="form-input">
            <input class="lato-text-grey form-input-size" type="name" name="name" id="name" placeholder="Prénom">
          </div>
      </div>
      <div class="form-zone">
          <label class="form-label" for="birth_date">Date de naissance</label>
          <div class="form-input">
            <input class="lato-text-grey form-input-size" type="birth_date" name="birth_date" id="birth_date" placeholder="JJ/MM/AA">
          </div>
      </div>
      <div class="form-zone-check">
          <label class="form-label-choice" for="sexe">Sexe</label>
          <div class="form-checklist">
            <div class="form-check">
              <input type="radio" name="sexe" id="sexe"><label for="sexe">Garçon</label>
            </div>
            <div class="form-check">
              <input type="radio" name="sexe" id="sexe"><label for="sexe">Fille</label>
            </div>
          </div>
      </div>
      <div class="form-zone-check">

          <label class="form-label-choice" for="morpho">Morphologie</label>
          <div class="form-checklist">
            <div class="form-check">
              <input type="radio" name="width" id="width"><label for="width">Petit</label>
            </div>
            <div class="form-check">
              <input type="radio" name="width" id="width"><label for="width">Moyen</label>
            </div>
            <div class="form-check">
              <input type="radio" name="width" id="width"><label for="width">Grand</label>
            </div>
          </div>
          <div class="form-checklist">
            <div class="form-check">
              <input type="radio" name="height" id="height"><label for="height">Mince</label>
            </div>
            <div class="form-check">
              <input type="radio" name="height" id="height"><label for="height">Moyen</label>
            </div>
            <div class="form-check">
              <input type="radio" name="height" id="height"><label for="height">Potelé</label>
            </div>
          </div>

      </div>

    </div>

    <div class="form-part">

      <div class="form-zone">
          <label class="form-label" for="color">Votre couleur préférée</label>
          <div class="form-input">
            <select class="lato-text-grey form-input-size" type="color" name="color" id="color">
              <option>Jaune
              <option>Bleu
              <option>Vert
              <option>Rose
              <option>Violet
              <option>Orange
            </select>
          </div>
      </div>

      <div class="form-zone">
          <label class="form-label" for="allergies">Allergies et intolérances</label>
          <div class="form-input">
            <textarea name="allergies" class="lato-text-grey form-input-size" id="allergies" placeholder="Gluten, pollen"></textarea>
          </div>
      </div>

      <div class="form-zone">
          <label class="form-label" for="others">Autres informations</label>
          <div class="form-input">
            <textarea name="others" class="lato-text-grey form-input-size" id="allergies"></textarea>
          </div>
      </div>

      <div class="form-button form-zone button">
          <input type="submit">
      </div>

    </div>

    <div class="clear-both"></div>

    </form>
  </div>

</section>
