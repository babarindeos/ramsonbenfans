<?php
		require_once("include/header.inc.php");
?>

<body class="page">

<?php
		require_once("include/navbar2.inc.php");
?>

<div id="mobilemenu"></div>        </div>
      </div>
    </div>
  </header>
<main class="main">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-title">Bookings</h2>

        <div class="row">
          <div class="col-md-8 col-xs-12">
            <article class="entry">
              <div class="entry-content">
                <p>For booking requests lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur est iste libero minima molestias nisi odio reiciendis reprehenderit sequi tenetur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut fuga laborum modi quod saepe sunt ullam? Nemo, nesciunt, repudiandae.</p>

                <form class="form form-booking" action="/">
                  <p>
                    <label for="name">Your Name</label>
                    <input type="text" required id="name"/>
                  </p>

                  <p>
                    <label for="email">Your E-mail</label>
                    <input type="email" required id="email"/>
                  </p>

                  <p>
                    <label for="subject">Subject</label>
                    <input type="text" id="subject"/>
                  </p>

                  <p>
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                  </p>

                  <p><button type="submit">Submit</button></p>
                </form>
              </div>
            </article>
          </div>

          <div class="col-md-4 col-xs-12">
            <div class="sidebar">
              <aside class="widget widget_text group">
	<h3 class="widget-title">Text Widget</h3>
	<p>Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus.</p>
</aside><!-- /widget -->              <!-- For a list of all supported social icons please see: http://fontawesome.io/icons/#brand -->

<aside class="widget widget_ci_social_widget ci-socials group">
	<h3 class="widget-title">Socials</h3>
	<a href="#" class="social-icon" title="Subscribe to our RSS feed."><i class="fa fa-rss"></i></a>
	<a href="#" class="social-icon" title="Follow us on twitter."><i class="fa fa-twitter"></i></a>
	<a href="#" class="social-icon" title="Like us on Facebook."><i class="fa fa-facebook"></i></a>
	<a href="#" class="social-icon" title="See our Dribbble shots."><i class="fa fa-dribbble"></i></a>
</aside>
              <aside class="widget jetpack_subscription_widget group">
	<h3 class="widget-title"><label for="subscribe-field">newsletter</label></h3>

		<form action="#" method="post">
			<p>Enter your email address to subscribe to this blog and receive notifications of new posts by email.</p>

			<p>
				<label class="sr-only" for="subscribe-field">
					Email Address
				</label>
				<input id="subscribe-field" type="email" name="email" value="Email Address" placeholder="Email Address">
			</p>

			<p>
				<input type="submit" value="Subscribe" name="jetpack_subscriptions_widget">
			</p>
		</form>
</aside>            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

  <?php
			require_once("include/footer.inc.php");
	?>
