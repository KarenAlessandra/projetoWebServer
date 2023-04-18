<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $search_query = $_GET["search_query"];

    // to-do: make a search query for products using $search_query

    // after, redirect the user to the search results page :3
    header("Location: /search-results.php?q=$search_query");
    exit();
}
?>