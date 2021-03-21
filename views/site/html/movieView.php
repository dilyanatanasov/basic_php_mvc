<?php

echo "<section class='content'>
        <header>
            <p>$data->title</p>
        </header>
        <h3><img width='300px' src='$data->thumbnail'></h3>
        <h3>$data->description</h3>
        <h3>$data->main_actor</h3>
        <h3>$data->duration</h3>
        <h3>$data->rating</h3>
        <a href='" . APPLICATION_PATH . "index.php?controller=movies&action=update&movie_id=$data->id'>Update</a>
    </section>";