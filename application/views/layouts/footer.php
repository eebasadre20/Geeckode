<center>
    <div class="ui segment">
      <a href="<?php echo site_url('team'); ?>">About Us</a> • <a href="#">Leaderboard</a> • <a href="<?php echo site_url('main'); ?>">Geeckode.com</a> • © 2014 Geeckode CDO
    </div>
</center>
<!--- JAVASCRIPTS -->
  <script src="<?php echo base_url('assets/javascript/jquery.js'); ?>"></script>
  <script src="<?php echo base_url('assets/javascript/semantic.js'); ?>"></script>
  <script src="<?php echo base_url('assets/javascript/homepage.js'); ?>"></script>
 <script src="<?php echo base_url('assets/javascript/editor.js'); ?>"></script>
  <script src="<?php echo base_url('assets/javascript/ace/ace.js'); ?>"></script>


<script>
  $(document).ready(function(){
    $("#btnlog").click(function(){
      $('.basic.small.modal').modal('show');
    });
  });
</script>

  </body>
  </html>