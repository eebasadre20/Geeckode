<div class="ui inverted purple page grid masthead segment">
    <div class="column">
      <div class="inverted secondary pointing ui menu">
        <div class="header item">
          <a href="<?php echo site_url('main'); ?>">
            Geeckode
          </a>
        </div>
        <div class="right menu">
          <div class="ui top right pointing mobile dropdown link item">
            <i class="large reorder icon"></i>
            <div class="menu">
              <a class="item" href="<?php echo base_url('leaderboards');?>"><i class="ui trophy icon"></i>Leaderboard</a>
            </div>
          </div>
              <a class="item" href="<?php echo base_url('leaderboards');?>">
                  <i class="trophy icon"></i>Leaderboard
              </a>
        </div>
      </div>
      <img src="<?php echo base_url('assets/images/gecko.png'); ?>" class="ui medium image">
      <div class="ui bounce transition information">
        <h1 class="ui inverted header">
          Leaderboard !
        </h1>
        <div class="ui grid">
            <div class="one wide column">
            </div>
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

<div class="ui inverted purple page grid stackable segment">
    <div class="row">
      <div class="column">
        <h1 class="center aligned ui header">
          One of our source to build our Geeckode Knowledge
        </h1>
        <div class="ui horizontal divider"><i class="trophy icon"></i></div>
      </div>
    </div>
    <div class="center four column aligned row">
      <div class="column">
        <div class="ui text shape">
          <div class="sides">
            <div class="active side">
              <i class="huge circular github icon"></i>
            </div>
            <div class="side">
              <i class="huge circular github icon"></i>
            </div>
            <div class="side">
              <i class="huge circular github icon"></i>
            </div>
            <div class="side">
              <i class="huge circular github icon"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="ui text shape">
          <div class="sides">
            <div class="side">
              <i class="huge circular youtube icon"></i>
            </div>
            <div class="active side">
              <i class="huge circular youtube icon"></i>
            </div>
            <div class="side">
              <i class="huge circular youtube icon"></i>
            </div>
            <div class="side">
              <i class="huge circular youtube icon"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="ui text shape">
          <div class="sides">
            <div class="side">
              <i class="huge circular html5 icon"></i>
            </div>
            <div class="side">
              <i class="huge circular html5 icon"></i>
            </div>
            <div class="active side">
              <i class="huge circular html5 icon"></i>
            </div>
            <div class="side">
              <i class="huge circular html5 icon"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="ui text shape">
          <div class="sides">
            <div class="side">
              <i class="huge circular css3 icon"></i>
            </div>
            <div class="side">
              <i class="huge circular css3 icon"></i>
            </div>
            <div class="side">
              <i class="huge circular css3 icon"></i>
            </div>
            <div class="active side">
              <i class="huge circular css3 icon"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


