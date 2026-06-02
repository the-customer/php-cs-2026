<?php 
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
            "average" => 12.0, 
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <h1 class="text-3xl">Dashboard</h1>
    <p>Bienvenue <?= $adminName ?> sur le tableau de bord de l'application de gestion scolaire.</p>
</body>
</html>