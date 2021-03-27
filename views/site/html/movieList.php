<?php

echo "
    <header>
        <p>Movies</p>
    </header>
    <br>
    <br>
    <br>
    <br>
    <section class='split-content'>
        <section class='movies'>";
            foreach ($data as $movie) {
                echo "
                <div class='movie'>
                    <a class='view' href='" . APPLICATION_PATH . "index.php?controller=movies&action=view&movie_id=$movie->id'>
                        <img width='100px' src='$movie->thumbnail'>
                    </a>
                    <a class='delete' href='" . APPLICATION_PATH . "index.php?controller=movies&action=delete&movie_id=$movie->id'>Delete</a>
                </div>";
            }
echo "        </section>
    </section>
    ";