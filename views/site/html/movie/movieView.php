<?php

echo "<section class='content'>
        <section class='view'>
            <section class='heading'>
            <header>
                <p>" . $data["movieData"]->title . "</p>
            </header>
            <h3><img src='" . APPLICATION_PATH . IMG_PATH . $data["movieData"]->thumbnail. "'></h3>
            <h3 class='rating'>";
display_rating($data["movieData"]->rating);
echo "</h3>
            <a class='update' href='" . APPLICATION_PATH . "index.php?controller=movies&action=update&movie_id=" . $data["movieData"]->id . "'>Update</a>        
        </section>
        <section class='main'>
            <h3>Description: " . $data["movieData"]->description . "</h3>
            <h3>Main Actor: " . $data["movieData"]->main_actor . "</h3>
            <h3>Duration: " . $data["movieData"]->duration . "</h3>    
            <h3>
              Comments:
                <input id='message' type='text' placeholder='I like the movie...'>
                <button id='addComment' type='submit'>Comment</button>";
                foreach ($data["comments"] as $comment) {
                    echo "<p>" .$comment->username . ": " . $comment->comment . " " . $comment->created_at . "</p>";
                }

echo "        </h3>
        </section>
    </section>";


echo "
<script type='application/javascript'>
async function postData(url = 'http://localhost/mvc/api/Api.php', data = {}) {
    // Default options are marked with *
    const response = await fetch(url, {
        method: 'POST', // *GET, POST, PUT, DELETE, etc.
        headers: {
            'Content-Type': 'application/json'
            // 'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: JSON.stringify(data) // body data type must match 'Content-Type' header
    });

    return response.json(); // parses JSON response into native JavaScript objects
}

const button = document.getElementById('addComment');
button.onclick = async () => {
    let message = document.getElementById('message').value;
    await postData('http://localhost/mvc/api/Api.php', {
        token: '123abc',
        action: 'comment',
        data: {
            user_id: " . $_SESSION['uid'] . ",
            comment: message,
            movie_id: " .$data["movieData"]->id. "
        }
    })
    document.getElementById('message').value = '';
};
</script>
";