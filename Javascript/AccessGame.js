/**
 *
 * Change the href of the play button on home screen.
 * If user is not logged in, the play button will direct the user to
 * the login page when clicked.
 *
 */
if (sessionStorage.loggedInUsername !== undefined) {
  document.getElementsByTagName("a")[7].outerHTML =
    '<a class="play-button" href="../PHP/Gamepage.php"></a>';
}
