<?php

    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/WordCount.php';

    $app = new Silex\Application;
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__.'/../views'

    ));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('form.twig');
    });

    $app->post('/results', function() use ($app) {
      $new_count = new WordCount;
      $count = $new_count->countWords($_POST['count']);
      return $app['twig']->render('results.twig');

    });

    return $app;

?>
