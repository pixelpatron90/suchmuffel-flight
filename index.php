<?php
require __DIR__ . '/libs/Flight.php';
Flight::set('flight.views.path', __DIR__ . '/views');

Flight::route('/', function() {
    Flight::render('home', [
      'title' => 'Startseite'
    ]);
});

Flight::route('/about', function() {
    Flight::render('about', [
      'title' => 'About'
    ]);
});

Flight::start();
