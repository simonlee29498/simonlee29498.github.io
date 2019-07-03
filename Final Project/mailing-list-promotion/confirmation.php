<!--<html>
  <head>
    <link rel="stylesheet" type="text/css" href="mailing-list-signup-styles.css"/>
    <title>Confirmation Page</title>
  </head>
  <body>
    <header>
        <div class="headercontainer">
            <ul class="menu menu-1">
                <li><a href="#" class="underline">Shop</a></li>
                <li><a href="#" class="underline">Promotions</a></li>
            </ul>
            <div class="logo"><h1>Jumpin' Juice Company</div>
            <ul class="menu menu-2">
                <li><a href="#" class="underline">About Us</a></li>
                <li><a href="#" class="underline">Locations</a></li>
            </ul>
        </div>
    </header>
    <section class="sect1">
      <h2 class="mainpageheading">Promotions: Mailing List Promotion</h2>
      <p class="lighttext">Sign up for our mailing list and receive the latest updates to our blog, menu, and gain access to member-only exclusives.
        Plus, you'll get a free drink on your next order!
      </p>
    </section>
    <hr/>
    <?php
      echo 'Thanks for signing up, ' . $_POST ["firstname"];
    ?>
    <footer>
      <small>&copy; Jumpin' Juice Company 2019</small>
    </footer>
  </body>
</html>-->

<html>
<head>
<title>Confirmation Page of Web Form</title>
</head>
<body>
<h1>Confirmation Page of Customer Info</h1>

<p>Thank you for submitting this form.

<p>We have successfully received it.

<p>Below is a summary of the information you provided.<br><br>
  <?php
  $txt1 = "Learn PHP";
  $txt2 = "W3Schools.com";
  $x = 5;
  $y = 4;

  echo "<h2>" . $txt1 . "</h2>";
  echo "Study PHP at " . $txt2 . "<br>";
  echo $x + $y;
  ?>
</body>
</html>
