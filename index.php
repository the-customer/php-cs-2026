<?php 


  //Variables super globales : $_POST, $_GET, $_SERVER

  //$_SERVER["REQUEST_METHOD"]  // POur savoir avec quelle methode le client est arrive au serveur

  $appName = "Breukh School";
  $pageTitle = "Connexion";
  $schoolName = "Breukh School";
  $currentYear = date('Y');
  $welcomeMessage = 'Bienvenue sur la plateforme de gestion scolaire';
  $totalStudents = 120;
  $totalCourses = 8;
  $totalTeachers = 5;

  //
  $adminName = 'Aly Tall Niang';
  $appVersion = '1.0.0';
  $isOnline = true;
  $errors = [];
  $email = "";
  $password = "";
  //
  $correctEmail = "admin@example.com";
  $correctPassword = "admin123";
  //
  $successMessage = "";
  $errorMessage = "";

//tester si on a soumis le formulaire
  if($_SERVER["REQUEST_METHOD"] === "POST"){ 
    //recuperer les donnees du formulaire
    $email = trim($_POST["email"]); //trim pour supprimer les espaces avant et apres
    $password = $_POST["password"];
    //tester si l'utilisateur a saisi un email.
    //if(empty($email)){
    if($email == ""){
      $errors["email"] = "The email address is required.";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors["email"] = "The email address is not valid.";
    }
  //tester si l'utilisateur a saisi un mot de passe
    if($password == ""){
      $errors["password"] = "The password is required.";
    }elseif(strlen($password) < 4){
        $errors["password"] = "The password must have at least 4 characters.";
    }

    //Si il n'y a pas d'erreurs, on peut verifier les informations de connexion
    if(empty($errors)){ 
      if($email === $correctEmail && $password === $correctPassword){
        //Connexion reussie
        //$successMessage = "Connexion reussie. Bienvenue, " . $adminName . "!";
        header("Location: dashboard.php");
        exit();
      }else{
        //Connexion echouee
        $errorMessage = "Email ou mot de passe incorrect.";
      }
    }
  }

  //Essayer d'afficher les erreurs


?>
<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title><?= $appName . ' | ' . $pageTitle ?></title>
  </head>
  <body class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class="w-full max-w-5xl bg-white rounded-2xl shadow-lg overflow-hidden grid grid-cols-1 md:grid-cols-2">
<!--Partie de Gauche-->
      <div class="bg-blue-700 text-white p-10 flex flex-col justify-between">
        <div>
          <div>
            <h1 class="text-3xl font-bold mb-4">
              <?= $appName ?>
            </h1>
            <p class="text-blue-100 mb-8"><?= $welcomeMessage ?></p>
          </div>

            <div class="space-y-4">
              <div class="bg-blue-600 rounded-xl p-4">
                <p class="text-sm text-blue-200">Etudiant inscrits</p>
                <p class="text-2xl font-bold"><?= $totalStudents ?></p>
              </div>

              <div class="bg-blue-600 rounded-xl p-4">
                <p class="text-sm text-blue-200">Cours disponibles</p>
                <p class="text-2xl font-bold"><?= $totalCourses ?></p>
              </div>

              <div class="bg-blue-600 rounded-xl p-4">
                <p class="text-sm text-blue-200">Professeurs</p>
                <p class="text-2xl font-bold"><?= $totalTeachers ?></p>
              </div>

            </div>
          </div>

        <p class="text-sm text-blue-200 mt-10">&copy; <?= $currentYear ?> - <?= $schoolName ?></p>
      </div>
<!--Partie de Droite-->
      <div class="p-10">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Connexion</h2>
        <p class="text-gray-500 mb-8">Connectez-vous pour acceder au tableau de bord.</p>

        <?php if($successMessage != ''): ?>
          <div class="bg-green-100 text-green-700 border-green-300 p-4 rounded-lg mb-6">
            <?= $successMessage ?>
          </div>
          <?php endif; ?>
          <?php if($errorMessage != ''): ?>
          <div class="bg-red-100 text-red-700 border-red-300 p-4 rounded-lg mb-6">
            <?= $errorMessage ?>
          </div>
          <?php endif; ?>
        <div class="bg-gray-100 rounded-lg p-4 mb-6">
          <p class="text-sm text-gray-600">Administrateur : 
            <span class="font-semibold"><?= $adminName ?></span>
          </p>
          <p class="text-sm text-gray-600">Version : 
            <span class="font-semibold"><?= $appVersion ?></span>
          </p>
          <?php if($isOnline == true): ?>
            <p class="text-sm text-green-600 font-semibold">Application en ligne</p>
          <?php else: ?>
            <p class="text-sm text-red-600 font-semibold">Application hors ligne</p>
          <?php endif; ?>
        </div>
        <form action="index.php" method="POST" class="space-y-5">
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Adresse email</label>
            <input value="<?= htmlspecialchars($email) ?>" type="text" id="email" name="email" placeholder="exemple@email.com" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <?php if(isset($errors['email'])):?>
            <p class="text-red-500 text-sm mt-1">
              <?= $errors['email'] ?>
            </p>
            <?php endif; ?>
          </div>

          <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
            <input value="<?= $password ?>" type="password" id="password" name="password" placeholder="Votre mot de passe" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <?php if(isset($errors['password'])):?>
            <p class="text-red-500 text-sm mt-1">
              <?= $errors['password'] ?>
            </p>
            <?php endif; ?>
          </div>

          <!-- <input name="btn" value="aaa" type="submit" class="w-full bg-blue-700 text-white py-3 rounded-lg font-semibold hover:bg-blue-800 hover:cursor-pointer"> -->

          <button type="submit" class="w-full bg-blue-700 text-white py-3 rounded-lg font-semibold hover:bg-blue-800 hover:cursor-pointer">Se connecter</button>
        </form>
        <p>Version PHP simple - Seance 1</p>
      </div>
    </div>
  </body>
</html>

