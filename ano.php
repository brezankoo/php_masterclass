<?php
$maturita = [
    [
    'color'=> '#696969',
    'text' => 'prva veta je takato',
    'url' =>'https://www.zilinak.sk/&#039',
    'font-weight' => 200,
    'font-size' => 20,
    ],
    [
    'color'=> '#6b8e23',
    'text' => 'Druha veta je takato',
    'url' => 'https://www.youtube.com/&#039',
    'font-weight' => 600,
    'font-size' => 30,
    ],
    [
    'color'=> '#afeeee',
    'text' => 'Tretia veta je takato',
    'url' => 'https://soaza.edupage.org/&#039',
    'font-weight' => 800,
    'font-size' => 16,
    ],
    [
    'color'=> '#ff4500',
    'text' => 'stvrta veta je takato',
    'url' => 'https://www.learn2code.sk/prihlasenie&#039',
    'font-weight' => 200,
    'font-size' => 25,
    ],
    [
    'color'=> '#ff4538',
    'text' => 'Piata veta je takato',
    'url' => 'https://www.sme.sk/&#039',
    'font-weight' => 800,
    'font-size' => 18,
    ],
];
foreach($maturita as $key){

    echo '<a href="'.$key['url'].'" style="font-size:'. $key['font-size']. '; color:'.$key['color'].'" "font-weight: ' . $key['font-weight'] . '">'.$key['text'] . '</a><br>';
}


?>
