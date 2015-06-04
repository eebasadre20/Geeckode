<div class="ui page grid masthead segment">
  <div class="ui four steps">
    <div class="ui two line step">
      <a><i class="info icon"></i>Status</a>
    </div>
    <div class="ui active two line step">
      <a style="color:white"><i class="upload disk icon"></i>Upload Photo</a>
    </div>
    <div class="ui two line step">
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
          Upload your photo
        </div>
        <?php echo form_open_multipart('user/profile1');?>
          <input type="hidden" name="username" value="<?php echo $user; ?>">
          <input type="hidden" name="password" value="<?php echo $pass; ?>">
          <input type="file" name="userfile" size="20" />
          <br /><br />
          <div class="ui vertical buttons">
          <button class="ui green button" type="submit">Upload</button>
          </form>
          <br/>
          <?php echo form_open_multipart('user/profile2');?>
          <input type="hidden" name="username" value="<?php echo $user; ?>">
          <input type="hidden" name="password" value="<?php echo $pass; ?>">
          <button class="ui negative button" type="submit">Skip</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <div class="three wide column">
    </div>
  </div>
</div>
<!--  <div class="ten wide column">
      <div class="ui attached message">
        <div class="header">
          Upload your photo
        </div>
        <?php echo form_open_multipart('user/profile1');?>
        <input type="hidden" name="username" value="<?php echo $user; ?>">
       <input type="hidden" name="password" value="<?php echo $pass; ?>">
          <input type="file" name="userfile" size="20" />
          <br /><br />
        <div class="ui large buttons">
          <button class="ui green button" type="submit">Upload</button>
          </form>
            <div class="or"></div>
            <?php echo form_open_multipart('user/profile2');?>
        <input type="hidden" name="username" value="<?php echo $user; ?>">
       <input type="hidden" name="password" value="<?php echo $pass; ?>">
          <button class="ui green button" type="submit">Skip</button>
        </div>

</form>
      </div>

    </div> -->
