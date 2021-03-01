<?php

$photos = scandir('small');
unset($photos[0]);
unset($photos[1]);
unset($photos[2]);

// подгружаем и активируем авто-загрузчик Twig-а
require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
    // указывае где хранятся шаблоны
    $loader = new Twig_Loader_Filesystem('templates');
    
    // инициализируем Twig
    $twig = new Twig_Environment($loader);
    
    // подгружаем шаблон
    $template = $twig->loadTemplate('gallery.tmpl');
    
    // передаём в шаблон переменные и значения
    // выводим сформированное содержание
    
    $content = $template->render(array(
      'names' => $photos,
    ));
    echo $content;
    
  } catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
  }