<?php

    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/WordCount.php';

    $app = new Silex\Application;
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__.'/../views'

    ));
    //renders the home page with forms
    $app->get('/', function() use ($app) {
        return $app['twig']->render('form.twig');
    });
    //renders the results page with home button
    $app->post('/results', function() use ($app) {
      $new_wordCount = new WordCount;
      $count = $new_wordCount->countWords($_POST['input1'], $_POST['input2']);
      return $app['twig']->render('results.twig', array('count' => $count));

    });

    return $app;

?>
