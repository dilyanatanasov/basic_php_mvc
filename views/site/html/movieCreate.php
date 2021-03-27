<?php

echo "<section class='content'>
        <section class='create'>
            <form action='" . APPLICATION_PATH . "index.php?controller=movies&action=create' method='post'>
                <label>Title</label>
                <input type='text' name='title'><br>
                <label for='description'>Description</label>
                <textarea name='description'></textarea><br>
                <label>Main Actor</label>
                <input type='text' name='main_actor'><br>
                <label>Duration</label>
                <input type='text' name='duration'><br>
                <label>Rating</label>
                <input type='text' name='rating'><br>
                <label>Thumbnail</label>
                <input type='text' name='thumbnail'><br>
                <input type='submit' name='create' value='Create'>
            </form>
        </section>
    </section>";