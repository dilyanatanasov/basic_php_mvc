<?php

echo "<section class='content'>
        <form action='". APPLICATION_PATH ."index.php?controller=movies&action=update&movie_id=$data->id' method='post'>
            <input type='number' name='id' hidden='true' value='$data->id'><br>
            <input type='text' name='title' value='$data->title'><br>
            <input type='text' name='description' value='$data->description'><br>
            <input type='text' name='main_actor' value='$data->main_actor'><br>
            <input type='text' name='duration' value='$data->duration'><br>
            <input type='text' name='rating' value='$data->rating'><br>
            <input type='text' name='thumbnail' value='$data->thumbnail'><br>
            <input type='submit' name='update' value='Update'>
        </form>
    </section>";