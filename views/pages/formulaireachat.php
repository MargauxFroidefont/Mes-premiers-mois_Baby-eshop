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
      <li><img src="src/icons/arrow.svg" alt="" class"arrow"></li>
      <li class="lato-ariane-done">Identification</li>
      <li><img src="src/icons/arrow.svg" alt="" class"arrow"></li>
      <li class="lato-ariane-done">Formulaire d'achat</li>
      <li><img src="src/icons/arrow_grey.svg" alt="" class"arrow"></li>
      <li class="lato-ariane-to-do">Validation</li>
    </ul>
  </nav>

  </div>

  <div class="baby-form">

    <h1 class="satisfy-little-title-orange">Bénéficiaire et Livraison</h1>

    <form class="form login-form lato-text-bluedark form-inscription" action="validation" method="post">

    <div class="form-part-buy">

      <div class="form-zone">
          <label class="form-label" for="name">Prénom et Nom</label>
          <div class="form-input">
            <input class="lato-text-grey form-input-size" type="name" name="name" id="name" placeholder="Prénom Nom">
          </div>
      </div>

      <div class="form-zone">
          <label class="form-label" for="adress">Adresse</label>
          <div class="form-input">
            <input class="lato-text-grey form-input-size" type="adress" name="adress" id="adress" placeholder="1 rue du lac">
          </div>
      </div>

      <div class="form-zone">
          <label class="form-label" for="adress_complement">Complément d'adresse</label>
          <div class="form-input">
            <input class="lato-text-grey form-input-size" type="adress_complement" name="adress_complement" id="adress_complement" placeholder="Batiment B">
          </div>
      </div>

      <div class="form-zone-check">
          <div class="form-checklist">
            <div class="form-buy-check">
              <input type="radio" name="livraison" id="livraison"><label for="livraison">Faire livrer à domicile par Cronopost (+8€99)</label>
            </div>
          </div>
      </div>

      <div class="form-zone-check">
          <div class="form-checklist">
            <div class="form-buil-check">
              <input type="radio" name="livraison" id="livraison"><label for="livraison">Faire livrer dans le point Mondial Relais  le plus proche(+4€99)</label>
            </div>
          </div>
      </div>

    </div>

    <div class="form-part-buy">

      <div class="form-zone">
          <label class="form-label" for="postal_code">Code postal</label>
          <div class="form-input">
            <input class="lato-text-grey form-input-size" type="postal_code" name="postal_code" id="postal_code" placeholder="75000">
          </div>
      </div>

      <div class="form-zone">
          <label class="form-label" for="city">Ville</label>
          <div class="form-input">
            <input class="lato-text-grey form-input-size" type="city" name="city" id="city" placeholder="Paris">
          </div>
      </div>

      <div class="form-zone">
          <label class="form-label" for="others">Message personnalisé</label>
          <div class="form-input form-build">
            <textarea name="others" class="lato-text-grey form-input-size" id="ot"></textarea>
          </div>
      </div>

    </div>

    <div class="clear-both"></div>

    </form>

    <h1 class="satisfy-little-title-orange">Facturation</h1>

    <form class="form login-form lato-text-bluedark form-inscription" action="validation" method="post">

    <div class="form-part-buy">

      <div class="form-zone">
          <label class="form-label" for="adress">Adresse</label>
          <div class="form-input">
            <input class="lato-text-grey form-input-size" type="adress" name="adress" id="adress" placeholder="1 rue du lac">
          </div>
      </div>

      <div class="form-zone">
          <label class="form-label" for="adress_complement">Complément d'adresse</label>
          <div class="form-input">
            <input class="lato-text-grey form-input-size" type="adress_complement" name="adress_complement" id="adress_complement" placeholder="Batiment B">
          </div>
      </div>

    </div>

    <div class="form-part-buy">

      <div class="form-zone">
          <label class="form-label" for="postal_code">Code postal</label>
          <div class="form-input">
            <input class="lato-text-grey form-input-size" type="postal_code" name="postal_code" id="postal_code" placeholder="75000">
          </div>
      </div>

      <div class="form-zone">
          <label class="form-label" for="city">Ville</label>
          <div class="form-input">
            <input class="lato-text-grey form-input-size" type="city" name="city" id="city" placeholder="Paris">
          </div>
      </div>

    </div>

    <div class="clear-both"></div>

    </form>

    <div class="buy-recap">

      <h1 class="satisfy-little-title-orange">Récapitulatif de la commande</h1>

      <div class="buy-table">
        <table>
          <tr class="lato-text-bluedark">
            <td class="left">Article</td>
            <td class="right">Prix</td>
            <td class="right">Quantité</td>
            <td class="right">Total</td>
          </tr>
          <tr class="lato-text-grey">
            <td class="left">Abonnement box 3 mois</td>
            <td class="right">84 €</td>
            <td class="right">1</td>
            <td class="right">84 €</td>
          </tr>
          <tr class="lato-text-bluedark">
            <td class="left">Frais de ports</td>
            <td></td>
            <td></td>
            <td class="lato-text-grey right">4,99 €</td>
          </tr>
          <tr class="lato-text-bluedark">
            <td class="left">Total de la commande</td>
            <td></td>
            <td></td>
            <td class="right bold">88,99 €</td>
          </tr>
        </table>
      </div>

    </div>

    <form class="form login-form lato-text-bluedark form-inscription" action="validation" method="post">

    <div class="form-part-buy">

      <h1 class="satisfy-little-title-orange">Coordonnés bancaires</h1>

      <div class="form-zone-check">
          <div class="form-checklist">
            <div class="form-buy-check">
              <input type="radio" name="card" id="card"><label for="card">Visa</label>
            </div>
            <div class="form-buy-check">
              <input type="radio" name="card" id="card"><label for="card">Master Card</label>
            </div>
            <div class="form-buy-check">
              <input type="radio" name="card" id="card"><label for="card">American Express</label>
            </div>
          </div>
      </div>

      <div class="form-zone">
          <label class="form-label" for="name">Nom</label>
          <div class="form-input">
            <input class="lato-text-grey form-input-size" type="name" name="name" id="name" placeholder="NOM">
          </div>
      </div>

      <div class="form-zone">
          <label class="form-label" for="card_number">Numéro de carte</label>
          <div class="form-input">
            <input class="lato-text-grey form-input-size" type="card_number" name="card_number" id="card_number" placeholder="XXXX XXXX XXXX XXXX">
          </div>
      </div>

      <div class="form-zone-card">
          <label class="form-label" for="card_expiration">Date d'expiration</label>
          <div class="form-input">
            <input class="lato-text-grey form-input-size" type="card_expiration" name="card_expiration" id="card_expiration" placeholder="XX/XX">
          </div>
      </div>

      <div class="form-zone-card">
          <label class="form-label" for="card_verification">Code de vérification</label>
          <div class="form-input">
            <input class="lato-text-grey form-input-size" type="card_verification" name="card_verification" id="card_verification" placeholder="XXX">
          </div>
      </div>

    </div>

    <div class="form-part-buy paypal">

      <h1 class="satisfy-little-title-orange">Compte paypal</h1>

      <div class="form-zone">
          <label class="form-label" for="paypal_code">Adresse Paypal</label>
          <div class="form-input">
            <input class="lato-text-grey form-input-size" type="paypal_code" name="paypal_code" id="paypal_code" placeholder="Compte">
          </div>
      </div>

      <div class="form-zone">
          <label class="form-label" for="password">Mot de passe Paypal</label>
          <div class="form-input">
            <input class="lato-text-grey form-input-size" type="password" name="password" id="password" placeholder="Mot de passe">
          </div>
      </div>

      <div class="form-zone-check valid">
          <div class="form-checklist">
            <div class="form-buy-check">
              <input type="radio" name="card" id="card"><label for="card">Enregistrer les coordonnés bancaires</label>
            </div>
            <div class="form-buy-check">
              <input type="radio" name="card" id="card"><label for="card">J'accepte les conditions générales de vente</label>
            </div>
            <div class="form-buy-check">
              <input type="radio" name="card" id="card"><label for="card">S'abonner à la newsletter</label>
            </div>
          </div>
      </div>

      <div class="form-buy-button form-zone button">
          <input type="submit">
      </div>

      <div class="lato-text-grey email-confirm">
        <p>Vous recevrez un email de confirmation</p>
      </div>

    </div>

    <div class="clear-both"></div>

    </form>

  </div>



</section>
