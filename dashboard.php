<?php
/*
EXERCICE :
AFFICHER DYNAMIQUEMENT LES STATUT AVEC DEUX COULEURS DIFFERENTES:
AFFICHER DYNAMIQUEMENT LA LISTE DES COURS EN BAS.
*/
$appName = "Gestion Scolaire";
$pageTitle = "Tableau de bord";
$currentYear = date("Y");

$adminName = "Aly Tall Niang";


$students = [
    [
        "id" => 1,
        "first_name" => "Awa",
        "last_name" => "Diop",
        "level" => "L1",
        "average" => 14.5,
        "status" => "active"
    ],
    [
        "id" => 2,
        "first_name" => "Mamadou",
        "last_name" => "Sarr",
        "level" => "L2",
        "average" => 8.6,
        "status" => "active"
    ],
    [
        "id" => 3,
        "first_name" => "Fatou",
        "last_name" => "Ndiaye",
        "level" => "L3",
        "average" => 9.5,
        "status" => "active"
    ],
    [
        "id" => 4,
        "first_name" => "Cheikh",
        "last_name" => "Fall",
        "level" => "L1",
        "average" => 16.0,
        "status" => "inactive"
    ],
    [
        "id" => 5,
        "first_name" => "Aissatou",
        "last_name" => "Diallo",
        "level" => "L2",
        "average" => 11.0,
        "status" => "active"
    ]

];

$courses = [
    [
        "id" => 1,
        "name" => "Algorithmique",
        "teacher" => "Mr. Breukh",
        "coefficient" => 4
    ],
    [
        "id" => 2,
        "name" => "Base de données",
        "teacher" => "Mme. Diop",
        "coefficient" => 3
    ],
    [
        "id" => 3,
        "name" => "Réseaux",
        "teacher" => "Mr. Sarr",
        "coefficient" => 2
    ],
    [
        "id" => 4,
        "name" => "Système d'exploitation",
        "teacher" => "Mme. Ndiaye",
        "coefficient" => 3
    ]
];

$totalStudents = count($students);
$totalCourses = count($courses);

$activeStudents = 0;
$inactiveStudents = 0;
$admittedStudents = 0;
$failedStudents = 0;


foreach ($students as $student) {
    if ($student["status"] == "active") {
        $activeStudents++;
    } else {
        $inactiveStudents++;
    }

    if ($student["average"] >= 10) {
        $admittedStudents++;
    } else {
        $failedStudents++;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 min-h-screen" cz-shortcut-listen="true">
    <!-- Navbar -->
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div>
                <h1 class="text-xl font-bold text-blue-700">
                    <?= $appName ?>
                </h1>
                <p class="text-sm text-gray-500">
                    Tableau de bord administrateur
                </p>
            </div>

            <div class="flex items-center gap-4">
                <p class="text-sm text-gray-600">
                    Connecté : <span class="font-semibold"><?= $adminName ?></span>
                </p>

                <a href="index.php"
                    class="bg-red-100 text-red-700 px-4 py-2 rounded-lg text-sm font-semibold hover:bg-red-200">
                    Déconnexion
                </a>
            </div>
        </div>
    </header>

    <!-- Contenu principal -->
    <main class="max-w-7xl mx-auto px-6 py-8">

        <!-- Titre -->
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-800">
                Bienvenue, <?= $adminName ?> </h2>
            <p class="text-gray-500">
                Voici un aperçu des données de la plateforme.
            </p>
        </div>

        <!-- Cartes statistiques -->
        <section class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-2xl shadow p-6">
                <p class="text-sm text-gray-500">Total étudiants</p>
                <p class="text-3xl font-bold text-gray-800 mt-2">
                    <?= $totalStudents ?>
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow p-6">
                <p class="text-sm text-gray-500">Étudiants actifs</p>
                <p class="text-3xl font-bold text-green-600 mt-2">
                    <?= $activeStudents ?>
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow p-6">
                <p class="text-sm text-gray-500">Étudiants admis</p>
                <p class="text-3xl font-bold text-blue-600 mt-2">
                    <?= $admittedStudents ?>
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow p-6">
                <p class="text-sm text-gray-500">Cours disponibles</p>
                <p class="text-3xl font-bold text-purple-600 mt-2">
                    <?= $totalCourses ?>
                </p>
            </div>
        </section>

        <!-- Liste des étudiants -->
        <section class="bg-white rounded-2xl shadow mb-8 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                <div>
                    <h3 class="text-xl font-bold text-gray-800">
                        Liste des étudiants
                    </h3>
                    <p class="text-sm text-gray-500">
                        Affichage dynamique avec un tableau PHP.
                    </p>
                </div>

                <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold">
                    <?= $totalStudents ?>
                    <?php
                    /*if($totalStudents > 1) {
                        echo "étudiants";
                    }else{
                        echo "étudiant";
                    }*/
                    ?>
                    <?= $totalStudents > 1 ? "étudiants" : "étudiant" ?>
                </span>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="text-left px-6 py-3 text-sm font-semibold text-gray-600">ID</th>
                            <th class="text-left px-6 py-3 text-sm font-semibold text-gray-600">Prénom</th>
                            <th class="text-left px-6 py-3 text-sm font-semibold text-gray-600">Nom</th>
                            <th class="text-left px-6 py-3 text-sm font-semibold text-gray-600">Niveau</th>
                            <th class="text-left px-6 py-3 text-sm font-semibold text-gray-600">Moyenne</th>
                            <th class="text-left px-6 py-3 text-sm font-semibold text-gray-600">Décision</th>
                            <th class="text-left px-6 py-3 text-sm font-semibold text-gray-600">Statut</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-100">
                        <?php foreach($students as $student): ?>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm text-gray-700">
                                    <?= $student["id"] ?>
                                </td>

                                <td class="px-6 py-4 text-sm text-gray-700">
                                    <?= $student["first_name"] ?>
                                </td>

                                <td class="px-6 py-4 text-sm text-gray-700">
                                    <?= $student["last_name"] ?>
                                </td>

                                <td class="px-6 py-4 text-sm">
                                    <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full">
                                        <?= $student["level"] ?>
                                    </span>
                                </td>

                                <td class="px-6 py-4 text-sm font-semibold">
                                    <?= $student["average"] ?>
                                </td>

                                <td class="px-6 py-4 text-sm">
                                    <?php if($student["average"] >= 10): ?>
                                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full font-semibold">
                                            Admis
                                        </span>
                                    <?php else: ?>
                                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full font-semibold">
                                            Non admis
                                        </span>
                                    <?php endif; ?>
                                </td>

                                <td class="px-6 py-4 text-sm">
                                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full font-semibold">
                                        Actif
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Liste des cours -->
        <section class="bg-white rounded-2xl shadow overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-xl font-bold text-gray-800">
                    Liste des cours
                </h3>
                <p class="text-sm text-gray-500">
                    Les cours sont aussi stockés dans un tableau PHP.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 p-6">
                <div class="border border-gray-200 rounded-xl p-5 hover:shadow-md transition">
                    <h4 class="text-lg font-bold text-gray-800 mb-2">
                        Algorithmique </h4>

                    <p class="text-sm text-gray-500 mb-3">
                        Professeur : M. Diallo </p>

                    <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-semibold">
                        Coefficient 4 </span>
                </div>
                <div class="border border-gray-200 rounded-xl p-5 hover:shadow-md transition">
                    <h4 class="text-lg font-bold text-gray-800 mb-2">
                        HTML / CSS </h4>

                    <p class="text-sm text-gray-500 mb-3">
                        Professeur : Mme Sow </p>

                    <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-semibold">
                        Coefficient 3 </span>
                </div>
                <div class="border border-gray-200 rounded-xl p-5 hover:shadow-md transition">
                    <h4 class="text-lg font-bold text-gray-800 mb-2">
                        PHP </h4>

                    <p class="text-sm text-gray-500 mb-3">
                        Professeur : M. Niang </p>

                    <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-semibold">
                        Coefficient 5 </span>
                </div>
                <div class="border border-gray-200 rounded-xl p-5 hover:shadow-md transition">
                    <h4 class="text-lg font-bold text-gray-800 mb-2">
                        Base de données </h4>

                    <p class="text-sm text-gray-500 mb-3">
                        Professeur : M. Fall </p>

                    <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-semibold">
                        Coefficient 4 </span>
                </div>
            </div>
        </section>

    </main>

    <footer class="text-center text-sm text-gray-400 py-6">
        © 2026 - Mini School Portal </footer>


</body>

</html>