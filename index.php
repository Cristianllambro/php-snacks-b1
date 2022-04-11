<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks PHP</title>
</head>
<body>

    <!-- SNACKE NUMBER 1 -->
    <div class="snak1">
        <h1>Snack number 1</h1>
        <?php $arr_game= 
            [
                [
                    'home' => 
                    [
                        'name' => 'Olimpia Milano',
                        'score' => 55,
                    ],
                    'out' => 
                    [
                        'name' => 'Cantu',
                        'score' => 60,
                    ],
                ],
                [
                    'home' => 
                    [
                        'name' => 'Reyer',
                        'score' => 120,
                    ],
                    'out' => 
                    [
                        'name' => 'Treviso',
                        'score' => 1,
                    ],
                ],
                [
                    'home' => 
                    [
                        'name' => 'Lakers',
                        'score' => 120,
                    ],
                    'out' => 
                    [
                        'name' => 'Heat',
                        'score' => 99,
                    ],
                ]
            ];

            for ($i = 0; $i < count($arr_game); $i++) { 
                $home_squad = $arr_game[$i]['home']['name'];
                $home_out = $arr_game[$i]['out']['name'];
                $score_home = $arr_game[$i]['home']['score'];
                $score_out = $arr_game[$i]['out']['score'];
            }
        ?>
        <span><?= $home_squad ?> - </span>
        <span><?= $home_out ?> | </span>
        <span><?= $score_home ?></span>
        <span><?= $score_out ?></span>
    </div>


    <!-- SNACKE NUMBER 2 -->
    <div class="two">
        <h1>Snack number 2</h1>
        <?php
            if (isset($_GET['name-user']) && $_GET ['email-user'] && $_GET['age-user']) {
               if((strlen($_GET['name-user']) > 3) && (strpos($_GET['email-user'], '@')) && (strpos($_GET['email-user'], '.', -4)) && (is_numeric($_GET['age-user']))){
                   echo 'Login successful';
                } else {
                   echo 'Access denied';
                }
            }
        ?>

        <form action="" method="GET">
            <label for="name-user">Enter your name</label>
            <input type="text" id="name-user">

            <label for="email-user">Enter your email</label>
            <input type="email" id="email-user">

            <label for="age-user">Enter your age</label>
            <input type="number" id="age-user">

            <button>Login</button>
        </form>
    </div>


    <!-- SNACK 3 -->
    <div class="three">
        <h1>Snack number 3</h1>
        <?php
            $arr_random_number = [];
            while(count($arr_random_number) < 15){
                $random_number = rand(1, 50);
                if(!in_array($random_number, $arr_random_number)){
                    $arr_random_number[] = $random_number;
                }
            }
            var_dump($arr_random_number);
        ?>
    </div>


    <!-- SNACK 4 -->

    <div class="four">
        <h1>Snack number 4</h1>
        <?php 
        $txt = 'Lorem ipsum dolor sit amet consectetur adipisicing elit, Numquam, asperiores, Ex velit, explicabo adipisci sequi, enim officia alias a id doloremque facere provident quibusdam, Illum iusto natus consequuntur accusantium dolorem, Lorem ipsum dolor sit amet consectetur adipisicing elit, Incidunt quas dolorem odio maxime quis ut ipsa facere at quos illum, maiores veniam atque reiciendis porro et eum consectetur sunt doloremque!';

        $txt_explode = explode(',', $txt);
        for ($i=0; $i < count($txt_explode) ; $i++) { 
            echo $txt_explode[$i] . '</p><p>';
        }
        
        ?>
    </div>
</body>
</html>