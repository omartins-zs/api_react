<?php

header('Access-Control-Allow-Origin: *');

$data = [
    [
        'imagem'=>'https://s2.glbimg.com/wrEOF1PnwdFrCTqhUkXhCmGLEn0=/0x0:2048x1365/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2021/w/y/C6YkGCSOK8Fom8UTOTQA/51467147796-076ded623f-k.jpg',
       'conteudo'=>'Leozinho entra para lista da Fifa de jovens destaques do Mundial de futsal
Ala de 22 anos está sendo chamado de "novo Falcão" na Lituânia e está no top 5 de astros jovens da primeira fase da competição'
    ],
    [
        'imagem'=>'https://s2.glbimg.com/Zi-prRBni8P1AYFMp3ZjPNv9VTI=/0x0:2368x1579/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2021/z/v/jyM4sBTl6IyvzN4zOwAw/51492673493-91668bca64-o-1-.jpg',
       'conteudo'=>'Brasil enfrenta o Japão nas oitavas do Mundial de Futsal; veja os outros confrontos
Brasileiros fecharam fase de grupos com 100% de aproveitamento e enfrentam os japoneses na quinta-feira, às 14h. Globo e SporTV transmitem; ge acompanha em tempo real'
    ],[
        'imagem'=>'https://s2.glbimg.com/ymKbd2BGN_oy5Q3WfhsoPiP5Iw8=/0x0:3583x2389/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2021/p/5/v89RB4T0G1wYmPbhXugw/gettyimages-1341276112.jpg',
       'conteudo'=>'Arthur herda a camisa 12 do Brasil no 1° Mundial de Futsal sem Falcão: "Sensação inexplicável"
Aos 27 anos, mineiro de Uberlândia atua no Benfica, de Portugal, e é uma das estrelas da equipe do técnico Marquinhos Xavier. Time enfrenta o Japão pelas oitavas de final na quinta-feira às 14h'
    ]



];
die(json_encode($data));
?>
