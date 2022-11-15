<?php
include 'header.php';
if (isset($_GET['act']) && ($_GET['act'])) {
    switch ($_GET['act']) {
        case ['about']:
            include 'about.php';
            break;
        case ['contact']:
            include 'contact.php';
            break;
    }
} else {
    include 'body.php';
}
include 'footer.php';
?>
<h1>Test pull</h1>