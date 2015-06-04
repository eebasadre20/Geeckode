<div class="ui page grid masthead segment">
  <div class="ui four steps">
    <div class="ui active step">
      <a style="color:white"><i class="info icon"></i>Status</a>
    </div>
    <div class="ui step">
      <a><i class="upload disk icon"></i>Upload Photo</a>
    </div>
    <div class="ui step">
      <a><i class="code icon"></i>Start Geeckode</a>
    </div>
  </div>
</div>

<div class="ui inverted purple page grid masthead segment">
  <div class="ui grid">

    <div class="three wide column">
    </div>

    <div class="ten wide column">
        <div class="ui attached message">
        <div class="header">
          Add your personal details
        </div>
      </div>
      <form action="<?php echo base_url('user/save-records'); ?>" method="post" class="ui inverted red form attached fluid segment">
      <div class="ui inverted red large form segment">
        <div class="field ">
          <label>First Name</label>
          <input placeholder="First Name" type="text" name="fname" value="<?php echo set_value('fname'); ?>">
          <?php echo form_error('fname');?>
        </div>
        <div class="field">
          <label>Last Name</label>
          <input placeholder="Last Name" type="text" name="lname" value="<?php echo set_value('lname'); ?>">
          <?php echo form_error('lname');?>
        </div>
        <div class="field ">
          <label>Middle Name</label>
          <input placeholder="Middle Name" type="text" name="mname" value="<?php echo set_value('mname'); ?>">
          <?php echo form_error('mname');?>
        </div>
        <div class="field">
          <label>Gender</label>
            <div class="ui fluid selection dropdown">
              <div class="text">Select</div>
                <i class="dropdown icon"></i>
                <input type="hidden" name="gender" value="<?php echo set_value('gender'); ?>">

              <div class="menu">
                <div class="item" data-value="male">Male</div>
                <div class="item" data-value="female">Female</div>
              </div>
            </div>
            <?php echo form_error('gender');?>
        </div>

      <div class="field">
        <label>Date Of Birth</label>
        <div class="ui grid">
        <div class="row">
          <div class="six wide column">
                 <div class="ui fluid selection dropdown">
                    <div class="text">Year</div>
                      <i class="dropdown icon"></i>
                      <input type="hidden" name="year" value="<?php echo set_value('year'); ?>">

                    <div class="menu">
<?php for ($y = 1970; $y <= date('Y'); $y++) : ?>
                      <div class="item" data-value="<?php echo $y; ?>" ><?php echo $y; ?></div>
<?php endfor; ?>
                    </div>
                  </div>
                  <?php echo form_error('year');?>
            </div>
            <div class="five wide column">
                 <div class="ui fluid selection dropdown">
                    <div class="text">Month</div>
                      <i class="dropdown icon"></i>
                      <input type="hidden" name="month"  value="<?php echo set_value('month'); ?>">

                    <div class="menu">
<?php for ($m = 1; $m <= 12; $m++) : ?>
                      <div class="item" data-value="<?php echo ($m <= 9) ? '0'.$m : $m; ?>"><?php echo ($m <= 9) ? '0'.$m : $m; ?></div>
<?php endfor; ?>
                    </div>
                  </div>
                  <?php echo form_error('month');?>
            </div>
            <div class="five wide column">
                 <div class="ui fluid selection dropdown">
                    <div class="text">Day</div>
                      <i class="dropdown icon"></i>
                      <input type="hidden" name="day"  value="<?php echo set_value('day'); ?>">

                    <div class="menu">
<?php   for ($d = 1; $d <= 31; $d++) : ?>
                      <div class="item" data-value="<?php echo ($d <= 9) ? '0'.$d : $d; ?>"><?php echo ($d <= 9) ? '0'.$d : $d; ?></div>
<?php endfor; ?>
                    </div>
                  </div>
                  <?php echo form_error('day');?>
            </div>
          </div>
          </div>
        </div>

        <div class="field">
          <label>Address</label>
          <textarea name="address"  value="<?php echo set_value('address'); ?>"></textarea>
          <?php echo form_error('address');?>
        </div>
        <div class="ui divider"></div>
        <div class="field">
          <label>Username</label>
          <div class="ui left labeled icon input">
            <input type="text" placeholder="Username" name="username" value="<?php echo set_value('username'); ?>">
            <?php echo form_error('username');?>
            <i class="user icon"></i>
          </div>
        </div>
        <div class="field">
          <label>Password</label>
          <div class="ui left labeled icon input">
            <input type="password" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>">
            <?php echo form_error('password');?>
            <i class="lock icon"></i>
          </div>
        </div>
        <div class="ui large buttons">
          <button class="ui green button" type="submit">Next</button>
          <div class="or"></div>
          <a class="ui submit button" href="<?php echo site_url('main'); ?>">Back</a>
        </div>
        </div>
        </form>
    </div>

    <div class="three wide column">
    </div>
  </div>
</div>