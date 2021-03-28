<?php

function display_rating($rating) {
    for ($i = 0; $i < $rating; $i++) {
        echo "<i class='fas fa-star'></i>";
    }
    if ($rating < 5) {
        $numberOfStarsToBeAdded = 5 - $rating;
        for ($i = 0; $i < $numberOfStarsToBeAdded; $i++) {
            echo "<i class='far fa-star'></i>";
        }
    }
}