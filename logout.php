<?php

session_start();

// Destroys session and deletes all session data.
session_destroy();

echo '<h1>You are now logged out!</h1>';

echo '<br>';

// Link back to the Home Page.
echo '<a href="home.html">Back to Home Page</a>';

?>