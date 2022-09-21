<?php

// Start the session.
session_start();

// If the page was accessed via a POST request, then assign all POST request data
// that has been set to the SESSION data.
if($_SERVER['REQUEST_METHOD'] === 'POST') {

    if(isset($_POST['full_name'])) {
        $_SESSION['full_name'] = $_POST['full_name'];
    }

    if(isset($_POST['username'])) {
        $_SESSION['username'] = $_POST['username'];
    }

    if(isset($_POST['dob'])) {
        $_SESSION['dob'] = $_POST['dob'];
    }
}

?>

<!-- Styling for the error message. -->
<style>
    .error {
        color:red;
        font-weight:bold;
    }
</style>

<?php

// Prints a custom error message as a list item.
function print_error_message($message) {
    echo '<li class="error">' . $message . '</li>';
}

echo '<h1>User Page</h1>';

// Opening tag for an unordered list.
echo '<ul>';

// If the full name session variable is set, print it as a list item.
// Otherwise, print an error message.
if(isset($_SESSION['full_name'])) {
    echo '<li><b>Full Name:</b> ' . $_SESSION['full_name'] . '</li>';
}
else {
    print_error_message('Full name not found!');
}

// If the username session variable is set, print it as a list item.
// Otherwise, print an error message.
if(isset($_SESSION['username'])) {
    echo '<li><b>Username:</b> ' . $_SESSION['username'] . '</li>';
}
else {
    print_error_message('Username not found!');
}

// If the date of birth session variable is set, print it as a list item.
// Otherwise, print an error message.
if(isset($_SESSION['dob'])) {
    echo '<li><b>Date Of Birth:</b> ' . $_SESSION['dob'] . '</li>';
}
else {
    print_error_message('Date of birth not found!');
}

// Closing tag for an unordered list.
echo '</ul>';

echo '<br>';

// Logout button that takes the user to the logout.php page.
echo '<form action="logout.php" method="post">';
echo '<button type="submit">Logout</button>';
echo '</form>';

/*
 * References:
 * 
 * How to fix 'session cannot be started after headers have already been sent' error:
 * - https://stackoverflow.com/questions/28366881/session-start-errors-because-headers-already-sent-by-the-same-session-start-ac
 * 
 * How to destroy a session after clicking a link or button:
 * - https://stackoverflow.com/questions/17564795/destroy-a-php-session-on-clicking-a-link
 * 
 * How to make a button act like a link when clicked:
 * - https://www.w3docs.com/snippets/html/how-to-create-an-html-button-that-acts-like-a-link.html
 * 
 */

?>