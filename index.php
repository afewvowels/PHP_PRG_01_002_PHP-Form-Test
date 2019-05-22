<!doctype html>

<html>
<head>
  <title>PHP Header and Footer</title>
  <meta charset='utf-8' />
  <link rel='stylesheet' href='./css/style.css' type='text/css' />
  <script src='./js/scripts.js' async></script>
</head>

<body>
  <?php include('./includes/functions.php') ?>
  <h1>Goes to new php page and sends post data</h1>
  <div id='form-wrapper'>
    <form method='post' action='./includes/submit.php' onsubmit='hide_form()' id='main-form'>
      <input name='textinput' type='text' />
      <input name='submitbutton' type='submit' value='go' />
      <input type='hidden' name='hidden-value' id='hidden-value' value='submitted' />
    </form>
  </div>
  <h1>Stays on same page and posts data</h1>
  <div id='form-wrapper-2'>
    <form method='post' id='main-form'>
      <input name='textinput2' type='text' />
      <input name='submitbutton2' type='submit' value='go' />
      <input type='hidden' name='hidden-value2' id='hidden-value2' value='submitted' />
    </form>
  </div>
</body>

</html>
