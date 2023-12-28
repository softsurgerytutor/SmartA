<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Niveaux</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
     <link rel="stylesheet" href="../assets/css/styleges.css"> 
     <link rel="icon" type="image/x-icon" href="../assets/images/sa.ico">

</head>
<body>
<header>
        <div class="entete" id="entete">
        <div class="logo" id="logo">
        <img src="../assets/images/logo.png" style height="auto" width="70px" />
        </div> 
            <h1>Gestion Niveau</h1>
        </div>
        
    </header>
    <?php include_once "./Sociale.php"?>


    <div id="Sidenav" class="sidenav">
     
    <?php include_once "./navigation.php"?>
       
    </div>
    <div class="main" id="main">
  
    <form>
        <table>
            <tr>
                <td> <label for="nom">Niveau : </label> </td>
                <td> <input type="text" name="nom" id="nom"></td>
           
                <td rowspan="2"><button type="button" onclick="ajouter_niveau()">Ajouter Niveau</button></td>
            </tr>
        </table>
    </form>

    <h3>Liste des Niveaux</h3>
    <input type="text" id="searchNiveau" placeholder="Rechercher une niveau..." onkeyup="lister_niveau(this.value)">
    <table border="2">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody id="dataNiveaux">

        </tbody>
    </table>
    </div>
    <script src="../assets/js/niveau.script.js"></script>

</body>

</html>