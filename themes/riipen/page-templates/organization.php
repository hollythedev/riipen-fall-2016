<?php 
/* Template Name: Educator Page */ 
?>

<?php get_header(); ?>
<?php
  $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
  echo "<a href='$url'>back</a>"; 
?>
<div class="organization-section-1">
    <h1>r<span>ii</span>pen</h1>  <p> <?php echo CFS()->get( 'motto'); ?> </p>
</div>

<div class="organization-section2">
<?php echo CFS()->get( 'explanation'); ?></div>
</div>

<div class="organization-section-3"> 
<?php echo CFS()->get( 'banner'); ?></div>

<div class="organization-section-4">
    <p> 4 easy steps to being Riipened </p>
    <a href="<?php the_permalink(); ?>" class='eductor-talent-btn'> riipen up</a>
</div>

<div class="organizationsection-5> 
<?php echo CFS()->get( 'banner_2'); ?></div>

<div class="organization-section-6">
    <?php echo CFS()->get( 'testimonial'); ?>
     <?php echo CFS()->get( 'position'); ?>
      <?php echo CFS()->get( 'name'); ?>
</div>


<!-- #primary -->
<?php get_footer(); ?>

