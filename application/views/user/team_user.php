<div class="ui fixed inverted purple menu">
  <div class="left menu">
    <a href="<?php echo site_url('home'); ?>" class="item" >
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
        <a class="item" href="<?php echo site_url('user/leaderboard'); ?>"><i class="trophy icon"></i> Leaderboard</a>
        <a class="item" href="<?php echo site_url('main1'); ?>"><i class="off icon"></i> Logout</a>
      </div>
    </div>

  </div>
</div>
<br/>
<div class="ui page grid overview segment">
    <div class="ui one wide column"></div>

    <div class="fourteen wide column">
        <div class="ui three column grid">
          <div class="column">
            <div class="ui icon header">
              <img src="<?php echo base_url('assets/images/johncabs.jpg'); ?>" title="JohnCabs18" class="circular ui image" >
              John A. Cabardo Jr.
            </div>
            <center><p>Co-Founder</p></center>
            <center><a href="https://www.facebook.com/juan.jr018" target="_blank" ><i class="large facebook sign icon" title="Facebook" ></i></a> <a href="https://plus.google.com/u/0/114184433274708179181" target="_blank" ><i class="large google plus sign icon" title="Google Plus"></i></a></center>
          </div>
          <div class="column">
            <div class="ui icon header">
              <img src="<?php echo base_url('assets/images/edsil.jpg'); ?>" title="Dao Ming Zi"  class="circular ui image">
              Edsil R. Basadre
            </div>
            <center><p>Founder</p></center>
            <center><a href="https://www.facebook.com/Andresky.Bonifaciosky" target="_blank" ><i class="large facebook sign icon" title="Facebook"></i></a> <a href="" target="_blank" ><i class="large twitter sign icon" title="Twitter"></i></a></center>
          </div>
          <div class="column">
            <div class="ui icon header">
              <img src="<?php echo base_url('assets/images/tautau.jpg'); ?>" title="TauTau"  class="circular ui image">
              Nevel Taurine Cuasito
            </div>
            <center><p>Co-Founder</p></center>
            <center><a href="https://www.facebook.com/mytautau14?fref=ts" target="_blank" ><i class="large facebook sign icon" title="Facebook"></i></a> <a href="#" target="_blank" ><i class="large twitter sign icon" title="Twitter"></i></a></center>
          </div>
        </div>
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