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

            for ($i = 0; $i < count($arr_game); $i++) { ?>
                <span><?= $arr_game[$i]['home']['name'] ?> - </span>
                <span><?= $arr_game[$i]['out']['name'] ?> | </span>
                <span><?= $arr_game[$i]['home']['score'] ?> - </span>
                <span><?= $arr_game[$i]['out']['score'] ?></span>
                <br>
                <?php
            }
        ?>
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

    <!-- snack 01 lezione  -->
    <!-- /*
    <div class="five">
        <h1>Snack lezione</h1>
    <!-- <?php
        $ads = [
            [
                'image_path' => 'https://conversionsciences.com/wp-content/uploads/2019/04/example-of-emotional-logical-appeal-on-persuasive-copy.jpg',
                'link' => 'https://www.google.com',
                'is_active' => true,
            ],
            [
                'image_path' => 'https://previews.123rf.com/images/hstrongart/hstrongart1612/hstrongart161200121/68060446-anuncios-de-cepillos-de-dientes-el%C3%A9ctricos-modo-diferente-de-este-producto-con-blanco-modelo-de-diente.jpg',
                'link' => 'https://www.facebook.com',
                'is_active' => true,
            ],
            [
                'image_path' => 'https://thumbs.dreamstime.com/z/back-to-school-sale-background-chalkboard-sale-percentages-marketing-poster-color-pencils-96751666.jpg',
                'link' => 'https://codepen.io',
                'is_active' => false,
            ],
            [
                'image_path' => 'https://foodsecurityfoodjustice.files.wordpress.com/2016/11/beyond-the-omlette-1.jpg',
                'link' => 'https://laravel.com',
                'is_active' => false,
            ],
            [
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRniLfGdFLxVOUoEwYC9WeRIrfZInB74_80IV8yMnANx3HTZYoQ',
                'link' => 'https://www.php.net',
                'is_active' => true,
            ],
        
        ];

        $active_ad = [];
        foreach($ads as $ad) {
            if($ad['is_active']) {
                $active_ad[] = $ad;
            }
        }
        if($active_ad) {
            $random_ad = $active_ad[rand(0, count($active_ad) -1)]; -->
        //     echo "<a href=\"{$random_ad['link]}\"> <img src=\"{$random_ad['image_path']}\" </a>";
        // }

    ?>
    </div>
     -->
</body>
</html>