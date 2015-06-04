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
    <a href="<?php echo site_url('profile'); ?>" class="active item">
     <div class="example">
      <img src="<?php echo $path; ?>" class="ui tiny avatar image"><?php echo $firstName; ?>
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
<div class="ui page grid stackable relaxed feature segment">
  <div class="ui grid">

    <div class="sixteen wide column">
      <div class="three column stackable ui grid">
        <div class="column">
            <div class="ui circular image dimmable">
              <div class="ui dimmer">
                <div class="content">
                  <div class="center">
                    <div class="ui vertical labeled icon buttons">
                      <button class="ui basic button" id="btnup">
                        <i class="camera icon"></i>
                        Update Profile Picture
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <img class="circular ui medium image" src="<?php echo $path; ?>" height="310"/>
            </div>
        </div>
        <div class="column">
          <div class="ui info message">
            <div class="header">
              <h2><?php echo $firstName." ".$middleName." ".$lastName; ?></h2>
            </div>
          </div>
            <div class="ui horizontal icon divider">
              <i class="circular inverted purple thumbs up icon"></i>
            </div>
            <div class="two column stackable ui grid">
              <div class="column">
              <p>Gender </p>
              <p>Date Of Birth </p>
              <p>Address </p>
              </div>
              <div class="column">
                  <p><?php echo ucwords($gender); ?></p>
                  <p><?php echo ucwords($dob); ?></p>
                  <p><?php echo ucwords($address); ?></p>
              </div>
            </div>
        </div>
        <div class="column">

        </div>
      </div>
            <!-- <img class="circular ui medium image" src="<?php echo $path; ?>" height="310"/>
            <h1><?php echo $firstName." ".$middleName." ".$lastName; ?></h1> -->
    </div>

  </div>
</div>

<div class="ui basic small modal">
  <div class="content">
    <div class="ui attached message">
        <div class="header">
          Update Profile Picture !
        </div>
        <p>Let's go ahead and get you signed in.</p>
      </div>
      <?php echo form_open_multipart('update/profile');?>
        <div class="ui inverted red fluid form segment">
            <input type="hidden" name="username" value="<?php echo $username; ?>">
            <input type="hidden" name="password" value="<?php echo $password; ?>">
            <input type="hidden" name="userId" value="<?php echo $id; ?>">
            <input type="file" name="userfile" size="20" />
          <br /><br />
          <div class="ui vertical buttons">
          <button class="ui green button" type="submit">
              <i class="camera icon"></i>
                Upload
            </button>
          </div>
        </div>
      </form>
          <br/>
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

<script type="text/javascript">
  $('.ui.dimmable .dimmer')
  .dimmer({
    on: 'hover'
  })
;
</script>

<script>
  $(document).ready(function(){
    $("#btnup").click(function(){
      $('.basic.small.modal').modal('show');
    });
  });
</script>

  </body>
  </html>
