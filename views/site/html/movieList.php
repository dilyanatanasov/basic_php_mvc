<?php

echo "<section class='content'>
    <header>
        <p>Movies</p>
    </header>
    <a href='". APPLICATION_PATH ."index.php?controller=movies&action=create'>Create</a>
    <section class='split-content'>
        <section class='categories'>
            <ul>
                <li>Action</li>
                <li>Comedy</li>
                <li>Horror</li>
                <li>Historic</li>
            </ul>
        </section>
        <section class='movies'>";
foreach ($data as $movie) {
    echo "<a href='" . APPLICATION_PATH . "index.php?controller=movies&action=view&movie_id=$movie->id'><img width='100px' src='$movie->thumbnail'></a>";
    echo "<a href='" . APPLICATION_PATH . "index.php?controller=movies&action=delete&movie_id=$movie->id'>Delete</a>";
}
echo "        </section>
    </section>
</section>
    ";