 <!DOCTYPE html>
<html>
<head>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>doc</title>
    
<?php ?>

</head>
<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Path</th>
      <th scope="col">Fonction</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>/microbrasserie</td>
      <td>Formulaire se connecter au site web</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>/microbrasserie/login</td>
      <td>Formulaire se connecter au site web</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>/microbrasserie/table</td>
      <td>Offre une vue tabulaire de la table brasseries</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>/microbrasserie/rest-api/add</td>
      <td>REST API du site web qui permet d'ajouter une entre a la table microbrasserie en suivant la requete suivante"/microbrasserie/rest-api/names?nom=DELICEduMAGREB&adresse=Barcklay&ville=montreal&cp=H3G1C2&permis=AB105&mail=salim.elrhilani@gmail.com" par exemple</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>/microbrasserie/rest-api/names</td>
      <td>retourne une structure json avec tous les noms</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>/microbrasserie/rest-api/names/{prefix}</td>
      <td>etourne une structure json avec
tous les noms qui commencent par le préfixe {prefix}</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>/microbrasserie/rest-api/permis/{prefix}</td>
      <td>retourne sous forme json toutes
les informations correspondant à l’item dont le numéro de permis
est celui spécifié ({permis})</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>/microbrasserie/plot</td>
      <td>offre une vue graphique (latitude / longitude) des
micro-brasseries.</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>/microbrasserie/doc</td>
      <td>offre une page HTML accessible à tous décrivant le
service REST disponible ainsi que les routes de l’application client
(où les différentes ressources HTML si vous ne parvenez pas à faire
une application en une page).</td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>/microbrasserie/add</td>
      <td>page permettant d'ajouter une entree a la table des brasseries, en remplissant le formulaire</td>
    </tr>
    <tr>
      <th scope="row">12</th>
      <td>/microbrasserie/delete</td>
      <td>page permettant de supprimer une entree a la table des brasseries, en remplissant le formulaire</td>
    </tr>
  </tbody>
</table>

</body>
</html> 
