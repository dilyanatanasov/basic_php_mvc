<?php

echo "<section class='content'>
        <section class='view'>
            <section class='heading'>
            <header>
                <p>$data->title</p>
            </header>
            <h3><img src='" . APPLICATION_PATH . IMG_PATH . "$data->thumbnail'></h3>
            <h3 class='rating'>";
display_rating($data->rating);
echo "</h3>
            <a class='update' href='" . APPLICATION_PATH . "index.php?controller=movies&action=update&movie_id=$data->id'>Update</a>        
        </section>
        <section class='main'>
            <h3>Description: $data->description</h3>
            <h3>Main Actor: $data->main_actor</h3>
            <h3>Duration: $data->duration</h3>    
            <h3>
              Comments:
                <input type='text' placeholder='I like the movie...'>
                <button type='submit'>Comment</button>
            </h3>
        </section>
    </section>";