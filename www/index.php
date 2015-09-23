<?php
require 'flight/Flight.php';

require "data.php";

/** definition des URLS */
// Flight::route('/',              'acceuil');
Flight::route('/pratique',         'pratique');
Flight::route('/',     'programme');
Flight::route('/partenaires',   'partenaires');
Flight::route('/credits',   'credits');



function acceuil() {
   Flight::render ('acceuil', null, 'body' );
   Flight::render ('layout', array('title'=>"Acceuil"));
} // acceuil

function pratique() {
   Flight::render ('pratique', null, 'body' );
   Flight::render ('layout', array('title'=>"Pratique"));
} // pratique

function programme() {
   Flight::render ('programme', null, 'body' );
   Flight::render ('layout', array('title'=>"Programme"));
} // programme

function partenaires() {
   Flight::render ('partenaires', null, 'body' );
   Flight::render ('layout', array('title'=>"Partenaires"));
} // partenaires

function credits() {
   Flight::render ('credits', null, 'body' );
   Flight::render ('layout', array('title'=>"Crédits"));
} // credits


Flight::start();
?>
