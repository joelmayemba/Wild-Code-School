<html>

<head>
    <meta charset="utf-8">
    <title>Welcome to PHPSandbox</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,500;0,531;0,600;0,700;0,800;0,900;1,400;1,500;1,531;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="h-screen bg-white flex items-center justify-center font-sans text-gray-700" style="font-family: 'Jost', sans-serif">
        <div class="font-medium items-center text-center flex flex-col justify-center h-full">
            <div class="flex flex-col justify-center items-center">
                <?php

                $movies = array(
                    "Indiana Jones and the Raiders of the Lost Ark" => 1981,
                    "Indiana Jones and the Kingdom of the Crystal Skull" => 2008,
                    "Indiana Jones and the Dial of Destiny" => 2023
                );

                arsort($movies);

                foreach ($movies as $titre => $annee) {
                    echo $annee . " - " . $titre . PHP_EOL;
                }

                ?>
            </div>
        </div>
    </div>
</body>

</html>