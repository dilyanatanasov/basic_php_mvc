<?php

echo "
    <header>
        <p>Movies</p>
        <form action='" . APPLICATION_PATH . "index.php?controller=movies&action=listAll' method='post'>
            <input type='text' name='search'>
            <button type='submit'>Search</button>
        </form>
    </header>
    <section class='split-content'>
        <section class='movies'>";
            foreach ($data as $movie) {
                echo "
                <div class='movie'>
                    <a class='view' href='" . APPLICATION_PATH . "index.php?controller=movies&action=view&movie_id=$movie->id'>
                        <img width='100px' src='" . APPLICATION_PATH . IMG_PATH . "$movie->thumbnail'>
                    </a>
                    <span>";
                    display_rating($movie->rating);
                    echo "</span>
                    <a class='delete' href='" . APPLICATION_PATH . "index.php?controller=movies&action=delete&movie_id=$movie->id'>Delete</a>
                </div>";
            }
echo "        </section>
    </section>
    ";