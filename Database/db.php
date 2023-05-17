<?php 

include __DIR__ . '/../Models/Movie.php';

$movies = [
    $movie1 = new Movie('Pulp Fiction', 'https://m.media-amazon.com/images/I/81UTs3sC5hL._SL1500_.jpg', 120, 'en', new Genre('Thriller')),
    $movie2 = new Movie('Arrivals', 'https://sfanytime-images-prod-http2.secure2.footprint.net/COVERM/4a5d8f25-850e-4e12-9e72-a70400f53bb5_COVERM_01.jpg?w=375&ar=0.692&fit=crop&fm=pjpg&s=170002c53210739e61aa1a96670eef8c', 120, 'en', new Genre('Fantascienza'))
];