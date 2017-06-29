 <?php include(FCPATH . "assets/includes/nav.php"); ?>

<style type="text/css">
	.dropdown-menu > .active > a, .dropdown-menu > .active > a:focus, .dropdown-menu > .active > a:hover {
    background-color: none !important;
    background-image: none !important;
     
}
  
</style>

 <div class="row">
   
  <div class="col-md-6 col-md-offset-3">
    <div class="input-group">
      <!-- <input type="text" class="form-control" placeholder="Search for..."> -->
      <input type="text" class="form-control" data-provide="typeahead" data-source='["item 1","item 2","item 3"]'>
      <span class="input-group-btn">
        <button class="btn btn-default" type="button"><strong>Search</strong></button> 
        <button class="btn btn-default" type="button">Advance Search</button>
      </span>

    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
 