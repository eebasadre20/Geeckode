<div class="ui inverted purple page grid masthead segment">
    <div class="column">
      <div class="inverted secondary pointing ui menu">
        <div class="header item">
          <a href="">
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
                  <i class="ui trophy icon"></i>Leaderboard
              </a>
        </div>
      </div>
      <img src="<?php echo base_url('assets/images/gecko.png'); ?>" class="ui medium image">
      <div class="ui hidden transition information">
        <h1 class="ui inverted header">
          Start learning through Challenges
        </h1>
        <p style="margin-left:70px;">Unlock your potential one challenge at a time.</p>
        <div class="ui grid">
            <div class="one wide column">
            </div>
        <div class="ui huge buttons">
        <div class="row">
        <div class="animated fade ui red button">
          <a class="visible content" style="color:white">Haven't Account ?</a>
          <a class="hidden content" href="<?php echo site_url('user/signup'); ?>" style="color:white">Sign Up Now !</a>
        </div>
        <div class="or"></div>
        <div class="animated fade ui green button" id="btnlog">
          <a class="visible content" style="color:white">Have an Account ?</a>
          <a class="hidden content"  style="color:white">Sign In Now !</a>
        </div>
        </div>
        </div>
        </div>
      </div>
    </div>
  </div>

  <div class="ui page grid overview segment">
    <div class="ui one wide column"></div>

    <div class="fourteen wide column">
      <div class="ui three column center aligned stackable divided grid">
        <div class="column">
          <div class="ui icon header">
            <img src="<?php echo base_url('assets/images/1.png'); ?>" class="square ui medium image">
            Practice Coding
          </div>
          <p>Solve coding challenges to sharpen your coding skills on technologies you like. If you think you are already good, why not give CodeGeeks a try.</p>
        </div>
        <div class="column">
          <div class="ui icon header">
            <img src="<?php echo base_url('assets/images/2.png'); ?>" class="square ui medium image">
            Learn through Collaboration
          </div>
          <p>Work on real-world projects and let other coders help improve your code. Level-up your coding skills with code reviews.</p>
        </div>
        <div class="column">
          <div class="ui icon header">
            <img src="<?php echo base_url('assets/images/3.png'); ?>" class="square ui medium image">
            Build your Profile
          </div>
          <p>Your profile can tell a lot of things about you, from your technology stack to your attitude in learning. Make it a habit to practice coding and build your profile along the way.</p>
        </div>
      </div>
    </div>
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
              <i class="huge circular github icon" title="Github"></i>
            </div>
            <div class="side">
              <i class="huge circular github icon" title="Github"></i>
            </div>
            <div class="side">
              <i class="huge circular github icon" title="Github"></i>
            </div>
            <div class="side">
              <i class="huge circular github icon" title="Github"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="ui text shape">
          <div class="sides">
            <div class="side">
              <i class="huge circular youtube icon" title="Youtube"></i>
            </div>
            <div class="active side">
              <i class="huge circular youtube icon" title="Youtube"></i>
            </div>
            <div class="side">
              <i class="huge circular youtube icon" title="Youtube"></i>
            </div>
            <div class="side">
              <i class="huge circular youtube icon" title="Youtube"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="ui text shape">
          <div class="sides">
            <div class="side">
              <i class="huge circular html5 icon" title="Html 5"></i>
            </div>
            <div class="side">
              <i class="huge circular html5 icon" title="Html 5"></i>
            </div>
            <div class="active side">
              <i class="huge circular html5 icon" title="Html 5"></i>
            </div>
            <div class="side">
              <i class="huge circular html5 icon" title="Html 5"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="ui text shape">
          <div class="sides">
            <div class="side">
              <i class="huge circular css3 icon" title="Css 3"></i>
            </div>
            <div class="side">
              <i class="huge circular css3 icon" title="Css 3"></i>
            </div>
            <div class="side">
              <i class="huge circular css3 icon" title="Css 3"></i>
            </div>
            <div class="active side">
              <i class="huge circular css3 icon" title="Css 3"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="ui basic small modal">
  <div class="content">
    <div class="ui attached message">
        <div class="header">
          Start working on challenges now !
        </div>
        <p>Let's go ahead and get you signed in.</p>
      </div>
      <form action="<?php echo site_url('verify'); ?>" method="post" class="ui inverted red form attached fluid segment">
      <div class="ui inverted red large form segment">
        <div class="field">
          <label>Username</label>
          <div class="ui left labeled icon input">
            <input type="text" placeholder="username" name="username" value="<?php echo set_value('username'); ?>">
            <?php echo form_error('username');?>
            <i class="user icon"></i>
          </div>
        </div>
        <div class="field">
          <label>Password</label>
          <div class="ui left labeled icon input">
            <input type="password" placeholder="password" name="password" value="<?php echo set_value('password'); ?>">
            <?php echo form_error('password');?>
            <i class="lock icon"></i>
          </div>
        </div>
        <div class="ui large buttons">
          <button class="ui green button" type="submit" id="btnlog">Sign in</button>
          <div class="or"></div>
          <a class="ui submit button" href="<?php echo site_url('main'); ?>">Cancel</a>
        </div>
        </div>
        </form>
  </div>
</div>