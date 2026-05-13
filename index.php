<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  </head>
  <body class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class="w-full max-w-5xl bg-white rounded-2xl shadow-lg overflow-hidden grid grid-cols-1 md:grid-cols-2">
<!--Partie de Gauche-->
      <div class="bg-blue-700 text-white p-10 flex flex-col justify-between">
        <div>
          <div>
            <h1 class="text-3xl font-bold mb-4">NOM APPLICATION</h1>
            <p class="text-blue-100 mb-8">Message de bienvenue</p>
          </div>

            <div class="space-y-4">
              <div class="bg-blue-600 rounded-xl p-4">
                <p class="text-sm text-blue-200">Etudiant inscrits</p>
                <p class="text-2xl font-bold">100</p>
              </div>

              <div class="bg-blue-600 rounded-xl p-4">
                <p class="text-sm text-blue-200">Cours disponibles</p>
                <p class="text-2xl font-bold">50</p>
              </div>

              <div class="bg-blue-600 rounded-xl p-4">
                <p class="text-sm text-blue-200">Professeurs</p>
                <p class="text-2xl font-bold">14</p>
              </div>

            </div>
          </div>

        <p class="text-sm text-blue-200 mt-10">&copy; 2026 - Breukh'Scool</p>
      </div>
<!--Partie de Droite-->
      <div class="p-10">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Connexion</h2>
        <p class="text-gray-500 mb-8">Connectez-vous pour acceder au tableau de bord.</p>
        <form action="index.php" method="POST" class="space-y-5">
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Adresse email</label>
            <input type="email" id="email" name="email" placeholder="exemple@email.com" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>

          <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Votre mot de passe" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>

          <button type="submit" class="w-full bg-blue-700 text-white py-3 rounded-lg font-semibold hover:bg-blue-800 hover:cursor-pointer">Se connecter</button>
        </form>
        <p>Version PHP simple - Seance 1</p>
      </div>
    </div>
  </body>
</html>


<?php

$nom = "Aly";
$age = 12;Stack(
  children: [
    
  ]
)

?>