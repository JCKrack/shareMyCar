<!DOCTYPE html>
<html>
	<head>
		<title><?php require_once('lib/title.php'); ?> Home </title>
		<link href="css/style.css" rel="stylesheet"></link>
		<link href="css/footer.css" rel="stylesheet"></link>
	</head>
	<body>
    <header>
      <?php require_once("lib/header.php"); ?>
    </header>
    <main>
      <div class="presentation">
        <div class="description-box">
          <label class="description-box__title">Title</label>
          <p class="description-box__paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
        </div>
        <div class="image-box">
          <img class="image-box__university-logo" src="images/utt.png" alt="">
          <img class="image-box__university-logo" src="images/itt.png" alt="">
          <img class="image-box__university-logo" src="images/uabc.png" alt="">
          <img class="image-box__university-logo" src="images/cetys.png" alt="">
          <img class="image-box__university-logo" src="images/xochi.png" alt="">
          <img class="image-box__university-logo" src="images/unidep.png" alt="">
        </div>
      </div>
      <div class="information">
        <div class="column-information">
          <label class="column-information__title">Title</label>
          <p class="column-information__paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <img class="column-information__image" src="images/sample.png" alt="">
        </div>
        <div class="column-information">
          <label class="column-information__title">Title</label>
          <p class="column-information__paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <img class="column-information__image" src="images/sample.png" alt="">
        </div>
        <div class="column-information">
          <label class="column-information__title">Title</label>
          <p class="column-information__paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <img class="column-information__image" src="images/sample.png" alt="">
        </div>
      </div>
		</main>
  </body>
  <footer>
    <?php require_once("lib/footer.php"); ?>
  </footer>
</html>