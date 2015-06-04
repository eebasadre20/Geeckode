<div class="ui fixed inverted purple menu">
  <div class="left menu">
    <a class="item" href="<?php echo site_url('home'); ?>">
        Geeckode
    </a>
  </div>
  <div class="right menu">
    <a href="<?php echo site_url('home'); ?>" class="item">
      <i class="home icon"></i>Home
    </a>
    <a href="<?php echo site_url('user/challenges'); ?>" class="active item">
      <i class="code icon"></i>Challenge
    </a>
    <a href="<?php echo site_url('profile'); ?>" class=" item">
     <div class="example">
      <img src="<?php echo $path; ?>"class="ui tiny avatar image"><?php echo $firstName; ?>
      </div>
    </a>
    <div class="ui dropdown item">
      <i class="settings icon"></i><i class="dropdown icon"></i>
      <div class="menu">
      <a class="item" href="<?php echo site_url('user/leaderboard'); ?>"><i class="trophy icon"></i> Leaderboard</a>
        <a class="item" href="<?php echo site_url('main1'); ?>"><i class="off icon"></i> Logout</a>
      </div>
    </div>

  </div>
</div>

<div class="ui page grid masthead segment">

  <div class="ui grid">

    <div class="sixteen wide column">
          <div class="ui three column grid">
          <?php foreach($challenges as $challenge) : ?>
            <div class="column">
             <a href="<?php echo site_url('user/challenge/'.$challenge->idProblem); ?>">
                <i class="circular massive inverted teal code icon"></i>
            </a>
            <h3 style="margin-left:75px;"><?php echo $challenge->problemName; ?></h3>
            <em style="margin-left:75px;"><?php echo $challenge->problemPoints; ?> Points</em>
            </div>
          <?php endforeach; unset($challenges); ?>
          </div>
    </div>

  </div>
</div>
<center>
    <div class="ui segment">
      <a href="<?php echo site_url('team/geeckode'); ?>">About Us</a> • <a href="#">Leaderboard</a> • <a href="<?php echo site_url('home'); ?>">Geeckode.com</a> • © 2014 Geeckode CDO
    </div>
</center>
<!--- JAVASCRIPTS -->
  <script src="<?php echo base_url('assets/javascript/jquery.js'); ?>"></script>
  <script src="<?php echo base_url('assets/javascript/semantic.js'); ?>"></script>
  <script src="<?php echo base_url('assets/javascript/homepage.js'); ?>"></script>

  </body>
  </html>

