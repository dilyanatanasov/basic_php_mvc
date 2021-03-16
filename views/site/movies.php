<?php
require_once "navigation.php";

if (!isset($data) && is_array($data)) {
    echo "
    <section>
        <h1>Movies</h1>
        <table style='border: 1px solid black'>
            <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Main Actor</th>
                <th>Duration</th>
                <th>Rating</th>
                <th>Thumbnail</th>
            </tr>
            </thead>
            <tbody>";
    if (!empty($data)) {
        foreach ($data as $movie) {
            echo "<tr>";
            echo "<td>" . $movie->title . "</td>";
            echo "<td>" . $movie->description . "</td>";
            echo "<td>" . $movie->main_actor . "</td>";
            echo "<td>" . $movie->duration . "</td>";
            echo "<td>" . $movie->rating . "</td>";
            echo "<td><img style='width: 100px' src='" . $movie->thumbnail . "'</td>";
            echo "</tr>";
        }
    }
    echo "  </tbody>
        </table>
    </section>
    ";
} else {
    echo "<section>
            <h1>Movies</h1>";
    echo "<h1>$data->title</h1><br>";
    echo "<p>$data->description</p><br>";
    echo "<p>$data->main_actor</p><br>";
    echo "<p>$data->duration</p><br>";
    echo "<p>$data->rating</p><br>";
    echo "<img src='" . $data->thumbnail . "'></img><br>";
    echo "</section>";
}
require_once "footer.php";
?>
