<div class="banner-1">
  <img src="<?= get_template_directory_uri();?>/dist/images/banner1.jpg"/>
</div>
<div class="sub">
  <div class="small-title-wrapper">
    <div class="small-title">SMALL TITLE</div>
    <hr>
  </div>
  <div class="sub-description">
    Lorem ipsum dolor sit amet, eu est summo scripserit. Mei cu quod vol uptua
  </div>
</div>
<div class="categories">
  <?php 
    include( 'content-categories.php' );
    foreach( $categories as $category ) : 
  ?>
    <div class="category">
      <i class="category-icon <?php echo $category['icon'] ?>" aria-hidden="true"></i>
      <div class="category-name"><?php echo $category['category'] ?></div>
      <hr>
      <div class="category-info"><?php  echo $category['info'] ?></div>
    </div>
  <?php endforeach; ?>
</div>
<div class="banner-2">
  <img src="<?= get_template_directory_uri();?>/dist/images/banner2.jpg"/>
</div>
<div class="job-listing">
  <?php 
    include( 'content-job-listing.php' );
    foreach( $jobs as $job ) : 
  ?>
    <div class="job">
      <div class="role-wrapper">
         <div class="role-icon"></div>
         <div class="job-role"><?php echo $job['role'] ?></div> 
      </div>
      <div class="job-info">
        <div class="job-location"><?php echo $job['location'] ?></div>
        <div class="job-position"><?php  echo $job['position'] ?></div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
<div class="sub">
  <div class="sub-description">
     Mei cu quod vol uptua elaboraret. An wisi hen drerit pertinacia vis, ne eum saepe vive ndum interesset. Lobortis sapi ent em no usu
  </div>
</div>