<p><?= $_SERVER["HTTP_USER_AGENT"] ?></p>
<br><br>
<p>Your favorite puppy breed is: <?= htmlspecialchars($_POST['breed1']) ?></p>
<p>Followed by: <?= htmlspecialchars($_POST['breed2']) ?></p>
<p>And lastly: <?= htmlspecialchars($_POST['breed3']) ?></p>
<p>You successfully confirmed your submission by entering: <?= htmlspecialchars($_POST['confirm']) ?></p>