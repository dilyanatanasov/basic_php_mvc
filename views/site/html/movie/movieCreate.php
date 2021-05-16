<?php

echo "<section class='content'>
        <section class='create'>
            <form action='" . APPLICATION_PATH . "index.php?controller=movies&action=create' method='post' enctype='multipart/form-data'>
                <label>Title</label>
                <input type='text' name='title' placeholder='Title'><br>
                <label for='description'>Description</label>
                <textarea name='description' placeholder='Description'></textarea><br>
                <label>Main Actor</label>
                <input type='text' name='main_actor' placeholder='Main Actor'><br>
                <label>Duration</label>
                <input type='text' name='main_actor' placeholder='Duration'><br>
                <label>Rating</label>
                <input type='text' name='rating' placeholder='Rating'><br>
                <label>Thumbnail</label>
                <input type='file' name='fileToUpload'><br>
                <input type='submit' name='create' value='Create'>
            </form>
        </section>
    </section>";