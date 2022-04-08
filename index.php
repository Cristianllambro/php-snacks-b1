<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks PHP</title>
</head>
<body>

    <!-- SNAKE NUMBER ONE -->
    <div class="snak1">
        <h1>Snack number 1</h1>
        <?php $arr_game= 
            [
                'home' => [
                    'name' => 'Olimpia Milano',
                    'score' => 55,
                ],
                'out' => [
                    'name' => 'Cantu',
                    'score' => 60,
                ],
                'home' => [
                    'name' => 'Reyer',
                    'score' => 120,
                ],
                'out' => [
                    'name' => 'Treviso',
                    'score' => 1,
                ],
            ];

            for ($_i = 0; $_i < count($arr_game); $_i++) { 
                echo $arr_game[$_i]['home']['name'];
            }
        ?>

    </div>


    <!-- SNAKE NUMBER TWO -->
    <div class="two">
        <h1>Snack number 2</h1>
        <?php ?>

        <form action="">
            <label for="email">Enter your email</label>
            <input type="email">
            <button>Done</button>
        </form>
    </div>
</body>
</html>