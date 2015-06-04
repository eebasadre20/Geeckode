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
    <a href="<?php echo site_url('user/challenges'); ?>" class="item">
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
        <a class="active item" href="<?php echo site_url('user/leaderboard'); ?>"><i class="trophy icon"></i> Leaderboard</a>
        <a class="item" href="<?php echo site_url('main1'); ?>"><i class="off icon"></i> Logout</a>
      </div>
    </div>

  </div>
</div>

<div class="ui page grid overview segment">
    <div class="ui one wide column"></div>

    <div class="fourteen wide column">
      <table  class="ui large inverted purple three column table segment">
        <thead>
          <tr><th>Rank</th>
          <th>Coder</th>
          <th>Points</th>
        </tr></thead>
        <tbody>
        <?php $rank = 1 ; foreach($aa as $row) : ?>
          <tr>
            <td><?php echo $rank;?></td>
            <td><?php echo $row->firstName." ".$row->lastName; ?></td>
            <td><?php echo $row->totalPoints; ?></td>
          </tr>
        <?php  $rank++; endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="ui one wide column"></div>
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