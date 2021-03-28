<?php

echo "<section class='content'>
        <section class='update'>
            <form action='". APPLICATION_PATH ."index.php?controller=movies&action=update&movie_id=$data->id' method='post' enctype='multipart/form-data'>
                <input style='display: none' type='number' name='id' hidden='true' value='$data->id'><br>
                <label>Title</label>
                <input type='text' name='title' placeholder='Title' value='$data->title'><br>
                <label for='description'>Description</label>
                <textarea name='description' placeholder='Description'>$data->description</textarea><br>
                <label>Main Actor</label>
                <input type='text' name='main_actor' placeholder='Main Actor' value='$data->main_actor'><br>
                <label>Duration</label>
                <input type='text' name='duration' placeholder='Duration' value='$data->duration'><br>
                <label>Rating</label>
                <input type='text' name='rating' placeholder='Rating' value='$data->rating'><br>
                <label>Thumbnail</label>
                <input type='file' name='fileToUpload'><br>
                <input type='submit' name='update' value='Update'>
            </form>
        </section>
    </section>";