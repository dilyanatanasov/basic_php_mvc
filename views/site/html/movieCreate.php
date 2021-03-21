<?php

echo "<section class='content'>
        <form action='". APPLICATION_PATH ."index.php?controller=movies&action=create' method='post'>
            <input type='text' name='title'><br>
            <input type='text' name='description'><br>
            <input type='text' name='main_actor'><br>
            <input type='text' name='duration'><br>
            <input type='text' name='rating'><br>
            <input type='text' name='thumbnail'><br>
            <input type='submit' name='create' value='Create'>
        </form>
    </section>";