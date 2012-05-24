<?= $header ?>

	<div class="container">
      <div class="hero-unit">
        <h1>Admin Control Panel</h1>
      </div>

      <div class="row">
      	<div class="span12">
      		<div id="display_ajax_content"></div>
      		
      		<a href="#" class="ajax" title="Ajax Action" data-url="hello_world" data-display-id="display_ajax_content">Ajax Action</a>

      		<hr>

                  <a href="#" class="btn btn-danger ajax" data-confirm="Are you sure you want to do this action?" title="Ajax Action" data-url="hello_world">Delete Ajax Action</a>

                  <hr>

      		<form action="hello_world_2" method="POST" class="well form-inline ajax" >
                        <div class="control-group">
                              <input type="text" class="input-small" name="test-input" placeholder="sample input">
                              <button type="submit" class="btn" data-loading-text="submitting...">Do This</button>
                        </div>
			</form>

      	</div>
      </div>

	</div>
	
<?= $footer ?>