<?php
if (isset($_POST['submit'])) {
  if (empty($_POST['email'])) {
    echo 'fdfsdfs';
  }
  echo htmlspecialchars($_POST['email']) . '<br/>';
  echo htmlspecialchars($_POST['title']) . '<br/>';
  echo htmlspecialchars($_POST['engredients']) . '<br/>';
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include('css/style.php') ?>

<?php include('templates/header.php'); ?>

<section class="container grey-text">
  <h4 class="center">Add a Pizza</h4>
  <form action="add.php" method="POST" class="white">

    <label for="email">Your Email:</label>
    <input type="text" name="email" id="email">

    <label for="title">Title:</label>
    <input type="text" name="title" id="title">

    <label for="engredients">Engredients:</label>
    <input type="text" name="engredients" id="engredients">
    <div class="center">
      <input type="submit" value="submit" name="submit" class="btn brand z-depth-0">
    </div>
  </form>
</section>


<?php include('templates/footer.php'); ?>


</html>