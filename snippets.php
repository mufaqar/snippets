<?php bloginfo('template_directory'); ?>/

<?php the_field('text'); ?>
<?php  global $data;
$top_info    = $data['top_info']; ?>

<?php the_field('field_name'); ?>

<?php  echo $test == '' ?  "" : "$test"; ?>

<?php bloginfo('template_url'); ?>

<?php echo get_post_meta( get_the_ID(), 'key_1', true ); ?>
blog url
<?php echo home_url(); ?>
<?php the_permalink()?>
blog name
<?php bloginfo('name'); ?>
<?php bloginfo('url'); ?>





Show a menu
<?php wp_nav_menu( array( 'theme_location' => 'left','fallback_cb'=> 'fallbackmenu1' ) ); ?>

Terms 
<?php $term = get_queried_object();
var_dump($term);





if ( is_page_template( 'about.php' ) ) {
    // about.php is used
} else {
    // about.php is not used
}





 ?>









<?php 
$slides = $data['example_slider']; //get the slides array

foreach ($slides as $slide) {
	echo $slide['title'];
	echo $slide['url'];
	echo $slide['link'];
	echo $slide['description'];
}
?>
Ye pora code hai cuffon font kay source ka
<script >
	
	jQuery(document).ready(function( $ ) {
	
	// $ Works! You can test it with next line if you like
	// console.log($);
	
});
	
</script>
     

archive, index, blog, search, ka thumnill fall back ka code
			 <?php if ( has_post_thumbnail() ) { ?>
                    <div class="thumb">
						<?php the_post_thumbnail('thumbnail'); ?>
                    </div>
				<?php } ?>	
            
            
			<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail('services-small-thumbnail');
								} else { ?>
							<img src="<?php bloginfo('template_directory'); ?>/images/img5.jpg" alt="Featured Thumbnail" />
							<?php } ?>
     
 <?php query_posts(array(
            'post_type' => 'post',
            'posts_per_page' => 2,
			'order' => 'desc'
			
        )); 
		if (have_posts()) :  while (have_posts()) : the_post(); ?>
	
	
	
		  <?php endwhile; wp_reset_query(); else : ?>
			<h2><?php _e('Nothing Found','lbt_translate'); ?></h2>
	        <?php endif; ?> 
	
	
	
	
	   <?php if ( has_post_thumbnail() ) {
						the_post_thumbnail(array(80,80));
					} else { ?>
				<img src="<?php bloginfo('template_directory'); ?>/images/img5.jpg" alt="Featured Thumbnail" />
				<?php } ?>
	
	
	
	
path to theme folder (images ki path kay lie)
<?php bloginfo('template_directory'); ?>/

aik say ziada stylesheets ko, files, css, ko link karanay kay lie
<?php bloginfo('template_url'); ?>/



kisi stylesheet ya kisi image ya kisi js file ko call karanay kay lie sahi code
<?php echo get_template_directory_uri(); ?>/







<?php
$images = rwmb_meta( 'gallery', 'size=YOURSIZE' );            // Since 4.8.0
$images = rwmb_meta( 'gallery', 'type=image&size=YOURSIZE' ); // Prior to 4.8.0
if ( !empty( $images ) ) {
    foreach ( $images as $image ) {
        echo "<a href='{$image['full_url']}' rel='lightbox'><img src='{$image['url']}' width='{$image['width']}' height='{$image['height']}' alt='{$image['alt']}' /></a>";
    }
}




Create a menus in (functions.php)
<?php

if (function_exists('register_nav_menus')) {
register_nav_menus( array(
		'left' => __( 'Left Menu', '' ),
		'right' => __( 'Right Menu', '' ),
	) );
}

function fallbackmenu1(){ ?>
			<div id="menu">
				<ul><li> Go to Adminpanel > Appearance > Menus to create your menu. You should have WP 3.0+ version for custom menus to work.</li></ul>
			</div>
<?php }

function fallbackmenu2(){ ?>
			<div id="menu">
				<ul><li> Go to Adminpanel > Appearance > Menus to create your menu. You should have WP 3.0+ version for custom menus to work.</li></ul>
			</div>
<?php }
?>


Create widgets in (functions.php)
<?php
if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h4>',
    		'after_title'   => '</h4>'
    	));
  	}
?>




Default sidebar kay elawa sidebars bananay kay lie example.
<?php
	// Declare homepage widget zone

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Homepage Widgets Area',
		'id'   => 'homepage-widgets-area',
		'description'   => 'These are widgets for the sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
}
?>
aur is sidebar ko show karanay kay lie code 
<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Homepage Widgets Area')) ?>


Makhsoos single post par content show karnay kay lie code. 
<?
if(!is_singular( 'products' ) ){
     // apni koi bhi div ya jo content "oper walay page par show nahi karana chahtay wolikhain"

}
else {
     //do conditional stuff
}
?>



Create a Footer Widgets in footer PHP
            <div id="footer-widgets">
            	<div class="widget-1">
				   <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer 1')) ?>
                </div><!--widget-1-->
                <div class="widget-2">
				   <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer 2')) ?>
                </div><!--widget-2-->
              <div class="widget-3">
				   <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer 3')) ?>
              </div><!--widget-3-->
                <div class="clear"></div>
            </div><!--footer-widgets-->


Footer Widgets Call VIA Functions PHP

if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Footer 1',
    		'id'   => 'footer-1',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h4>',
    		'after_title'   => '</h4>'
    	));
    }
	if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Footer 2',
    		'id'   => 'footer-2',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h4>',
    		'after_title'   => '</h4>'
    	));
    }
	if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Footer 3',
    		'id'   => 'footer-3',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h4>',
    		'after_title'   => '</h4>'
    	));
    }




Kisi page template mai makhsoos poston ya kisi bhi cpt archive ko show karany kya lie code
<?php global $paged;
	query_posts(array(
	'post_type' => staff,
	'posts_per_page' => 25,
	'paged' => $paged
)); 
?>




Create a Wordpress Page Template
Create a Wordpress Page Template
Create a Wordpress Page Template

<?php
 /*
  Template Name:  Jo Bhi Name Rakhna ho Yahan Likhain
 */
?>

Blog Page Query 
<?php global $paged;
	$bcat = get_option('of_blog_category');
	$bcatid = get_cat_id($bcat);
	query_posts(array(
	'cat'=>$bcatid,
	'posts_per_page' => 10,
	'paged' => $paged
	)); 
?>







Page Templete Mai Content Dalnay kay lie content ki jaga ye code lagain 
Page Templete Mai Content Dalnay kay lie content ki jaga ye code lagain
Page Templete Mai Content Dalnay kay lie content ki jaga ye code lagain

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<h1><?php the_title(); ?></h1>
		<div class="entry">
			 <?php if ( has_post_thumbnail() ) { ?>
    		    <div class="featured-image">
					<?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
    		    </div>
			<?php } ?>	
			<?php the_content(); ?>
			<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
			<div class="tags">
				<?php the_tags( __('Tags:','text_domain'),'','.'); ?>
			</div>
			<div class="clear"></div>
		</div>
	</div>
<?php endwhile; endif; ?>



Sales Page Mai title Show karanay kay lie 
Sales Page Mai title Show karanay kay lie 
Sales Page Mai title Show karanay kay lie 

<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
 
 
 
    
Sales Page Mai Lagi Styling kay lie php code
Sales Page Mai Lagi Styling kay lie php code

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/sp1-src/stylesp1.css" />



Sales page mai Content Area ko Show Karanay kay lie Cod
Sales page mai Content Area ko Show Karanay kay lie Cod
Sales page mai Content Area ko Show Karanay kay lie Cod

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
<?php endwhile; endif; ?>



if then else kay lie
<?php if (is_front_page()){ ?>

<?php } else { ?>
<?php } ?>


Is tareeqay say lagai gai custom field mai jo custom tor par shor karna hota hai wo hota hai aur agar nahi karna hota 
to default tor par jo laga hoga wo show hoga.
<style type="text/css">
<?php  if((get_post_meta($post->ID, "Banner", true))) { ?>
    #banner-area {
       background-image: url(<?php echo get_post_meta($post->ID, "Banner", true); ?>);  
    }
<?php } ?>
</style>


kisi blog ya kisi archive ki posts mai majood thumbs ki elehda elehda size denay kay lie
sab say pehely ye code function.php mai lagain.
<?php
add_image_size( 'products-thumb', 280, 280 ); //300 pixels wide (and unlimited height)?>
aur phir us kay bad ye wali line jaha thumb ka code file mai laga hai wahan lagain
<?php the_post_thumbnail('products-thumb'); ?>


Query ko reset karna kay lie code.
Query ko reset karnay kay lie code.
<?php wp_reset_query(); ?>


Odd Even ki class laganay kay lie. jo kay posts ko lagti hai . odd aur even,
<?php
function oddeven_post_class ( $classes ) {
   global $current_class;
   $classes[] = $current_class;
   $current_class = ($current_class == 'odd') ? 'even' : 'odd';
   return $classes;
}
add_filter ( 'post_class' , 'oddeven_post_class' );
global $current_class;
$current_class = 'odd';
?>



Meta Box mai image ko dalnay kay lie code
<?php $images = rwmb_meta( 'slimages', 'type=image' );
	foreach ( $images as $image )
	{
		echo "<img src='{$image['full_url']}' />";
	} 
?>

aur custom field ko else kay tareeqay say bhi laga saktay hain. 
<?php  if((get_post_meta($post->ID, "Banner Headline", true))) { ?>
	<?php echo get_post_meta($post->ID, "Banner Headline", true); ?>
<?php } else { ?>
    Juris
<?php } ?>


Custem Field Bananay kay lie
ye Code lagain

<?php  if((get_post_meta($post->ID, "Optin Text", true))) { ?>
	 <?php echo get_post_meta($post->ID, "Optin Text", true); ?>
<?php } ?>





?>

phir us kay bad 2 files jin kay nam "archives-(yahan par jo custem post banai hai us ka name likhna hai) aus single-(yahan par jo custem post banai hai us ka name likhna hai) ko apni themes mai dalain aur kay name change karain. archive aur single likha rehnay dain. is kay agay wala name change karna hai jis kai ap custom post type bana rehay hain.

is kay bad archive-lllllllll       mai ye codes paste karain.
<?php global $paged;
        query_posts(array(
            'post_type' => events,
            'posts_per_page' => 25,
			'order' => ASC,
            'paged' => $paged
			
        )); 
    ?>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <h1 class="fh-heading"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1><div class="clear"></div>
     <div class="entry">
                <div class="thumb">
                <?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} else { ?>
					<img src="<?php bloginfo('template_directory'); ?>/images/featured-thumbnail.png" alt="Featured Thumbnail" />
				<?php } ?>
                </div>
				<?php 
					global $more;    // Declare global $more (before the loop).
					$more = 0;       // Set (inside the loop) to display content above the more tag.
					the_content(__('Continue Reading','text_domain'));
				?>
                <div class="clear"></div>
                <div class="tags">
                <?php the_tags( __('Tags:','text_domain'),'','.'); ?>
                </div>
            </div>
<?php endwhile; ?>
<?php else : ?>
    <h2><?php _e('Nothing Found','text_domain'); ?></h2>
<?php endif; ?>




jabkay single-111111  mia ye code paste karain.

 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div <?php post_class() ?> id="post-<?php the_ID(); ?>"> 
    <h1><?php the_title(); ?></h1>
		<div class="entry">
            <div class="featured-image">
                 <?php if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'single-post-thumbnail' );
					} else { ?>
					<img src="<?php bloginfo('template_directory'); ?>/images/featured-image.png" alt="Featured Thumbnail" />
				<?php } ?>
            </div>		
			<?php the_content(); ?>
            <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
            <div class="clear"></div>
			<div class="tags">
				<?php the_tags( __('Tags:','text_domain'),'','.'); ?>
            </div>
        </div>
        </div>
<?php endwhile; endif; ?>
press ka logo change karnay kay lie. ye code apni fuctions.php file mai lagain aur phir apni theme kay images folder mai
apni website ka logo ya koi bhi image jo ap waha par lagana chatay hain. wo dal kar us ka sahi name neechay path mai sahi kar dain.
<?php
function custom_login_logo() {
	echo '<style type="text/css">h1 a { background: url('.get_bloginfo('template_directory').'/images/logo-login.png) 50% 50% no-repeat !important; }</style>';
}
add_action('login_head', 'custom_login_logo');
?>




Wordpress kay home page par mojood logo ko pehlay wordpress ka URL laga hota hai. neechay wala snipts apni theme ki fuctions.php mai jakar paste kar dain aur koi changing ki zaroorat nahi. automatic link ap ki website say ho jai ga jo ap nay install ki hai.
<?php
function change_wp_login_url() {
	echo bloginfo('url');
}
add_filter('login_headerurl', 'change_wp_login_url');
?>




wordpress mai login.php page par jo logo hota hai us ka title tabdeel kar kay apni theme ka title denay kay lie sirf neechay wala code apni functions.php file mai paste kar dain.
<?php
function change_wp_login_title() {
	echo get_option('blogname');
}
add_filter('login_headertitle', 'change_wp_login_title');
?>


Wordpress main visual editor . jab ham koi new page ya post add kartay hain to content walay area kay uper lagay howay buttons ko visual editor kehtay hain. un ko update karnay kay lie ye code lgain. 
<?php
function add_more_buttons($buttons) {
 $buttons[] = 'hr';
 $buttons[] = 'del';
 $buttons[] = 'sub';
 $buttons[] = 'sup';
 $buttons[] = 'fontselect';
 $buttons[] = 'fontsizeselect';
 $buttons[] = 'cleanup';
 $buttons[] = 'styleselect';
 return $buttons;
}
add_filter("mce_buttons_3", "add_more_buttons");
?>


Move WordPress Admin Bar to the Bottom. Just Copy the code and paste into the functions.php file your theme
<?php
function fb_move_admin_bar() {
    echo '
    <style type="text/css">
    body {
    margin-top: -28px;
    padding-bottom: 28px;
    }
    body.admin-bar #wphead {
       padding-top: 0;
    }
    body.admin-bar #footer {
       padding-bottom: 28px;
    }
    #wpadminbar {
        top: auto !important;
        bottom: 0;
    }
    #wpadminbar .quicklinks .menupop ul {
        bottom: 28px;
    }
    </style>';
}
// on backend area
add_action( 'admin_head', 'fb_move_admin_bar' );
// on frontend area
add_action( 'wp_head', 'fb_move_admin_bar' );
?>





Paginate Custom Post Types
<?php 
  $temp = $wp_query; 
  $wp_query = null; 
  $wp_query = new WP_Query(); 
  $wp_query->query('showposts=6&post_type=news'.'&paged='.$paged); 

  while ($wp_query->have_posts()) : $wp_query->the_post(); 
?>

  <!-- LOOP: Usual Post Template Stuff Here-->

<?php endwhile; ?>

<nav>
    <?php previous_posts_link('&laquo; Newer') ?>
    <?php next_posts_link('Older &raquo;') ?>
</nav>

<?php 
  $wp_query = null; 
  $wp_query = $temp;  // Reset
?>






Nivo Slider kay lie ye lagain.
is ko header mai paste karain.
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js" type="text/javascript"></script>
   <script src="<?php bloginfo('template_url'); ?>/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/nivo-slider.css" type="text/css" media="screen">
<script type="text/javascript">
	$(window).load(function() {
    $('#slider').nivoSlider({
	animSpeed: 400, // Slide transition speed
        pauseTime: 8000, // How long each slide will show
	effect: 'fade' // Specify sets like: 'fold,fade,sliceDown'

    });
});
</script>


aur is ko jaha par slider lagana hain. yani jaha slide wali image hai wahan lagana hain. is kay bad teno files ko js ka folder bana kar us mai rakhain
<div id="slideshow">
    <div class="slider-wrapper theme-default">
        <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
                <img src="<?php bloginfo('template_directory'); ?>/images/slide-1.jpg" width="928" height="310" />
                <img src="<?php bloginfo('template_directory'); ?>/images/slide-2.jpg" width="928" height="310" />
                <img src="<?php bloginfo('template_directory'); ?>/images/slide-3.jpg" width="928" height="310" />
        </div>
    </div>
</div><!--slideshow-->









Youtube kay peechay agar content a raha ho to is code mai apni youtube ka video code laga kar lagain to sahi ho jai ga
 <iframe width="960" height="570" src="http://www.youtube.com/embed/Cbbkj2GhDmo?rel=0&amp;wmode=transparent" frameborder="0"></iframe>
 
 
 
 
 
 
 
 Scrolling ki styling change karnay kay lie ye code lagain.
 <style type="text/css">
 #content {
	float: left;
	width: 583px;
	margin-top: 30px;
	height:279px;
	overflow:auto;
	padding-right:20px;
	margin-right:20px;
	margin-bottom:30px;
	overflow-y: scroll;
	overflow-x: hidden;
}
/* Let's get this party started */
::-webkit-scrollbar {
    width: 12px;
}
 
/* Track */
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    -webkit-border-radius: 10px;
    border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: rgba(199, 199, 199, 0.8);
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
::-webkit-scrollbar-thumb:window-inactive {
	bbackground: rgba(199, 199, 199, 0.8);
}
 </style>
 
 
 
 
 Kisi bhe website mai background mp3 sound laganay kay lie. 
<object width="0" height="0">
<param name="autostart" value="true">
<param name="src" value="<?php bloginfo('template_directory'); ?>/waves.mp3">
<param name="autoplay" value="true">
<param name="controller" value="true">
<embed src="<?php bloginfo('template_directory'); ?>/waves.mp3" width="0" height="0" controller="true" autoplay="true" autostart="True" type="audio/wav" />
</object>







Excerpt  Laganay kay lie Code
Is code ko pehlay function.php file mai paste karain
<?
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 1100 );

function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>

Ye wala Code Read More laganay kay lie hai ya continue reading. is ko (retrn '';) wali jaga paste karain.
return ' <a href="'. get_permalink($post->ID) . '" class="readmore">' . 'Continue Reading' . '</a>';




is kay bad ye wala code apni blog, archive, ya jis mai dalna ho matlab the_content ki jaga wahan dal dain 
<?php the_excerpt(); ?>




Kisi ID ya Class ko Active Class denay  kay lie Java Script ka Code
Kisi ID ya Class ko Active Class denay  kay lie Java Script ka Code
Kisi ID ya Class ko Active Class denay  kay lie Java Script ka Code
<script type="text/javascript">
$(function() {
    $('.start').addClass('active');
        $('#home-button a').click(function() {
        $('#home-button a').removeClass('active');
        $(this).addClass('active');             
   });
});
</script>



Query posts ko apni marzi ki Categorie kay sath blog page display karnay kay lie.
<?php query_posts( 'cat=-19,-3' ); ?>



Custom Widget Bananay ka Tareeqa 
Custom Widget Bananay ka Tareeqa 
Custom Widget Bananay ka Tareeqa 
Custom Widget Bananay ka Tareeqa 
Custom Widget Bananay ka Tareeqa 
<?php
/*
 * Contact Info
 */
 
class ct_ContactInfo extends WP_Widget {

   function ct_ContactInfo() {
	   $widget_ops = array('description' => 'Use this widget to display your contact information.' );
	   parent::WP_Widget(false, __('Contact Info', 'contempo'),$widget_ops);      
   }

   function widget($args, $instance) {  
	extract( $args );
	$title = $instance['title'];
	$company = $instance['company'];
	$street = $instance['street'];
	$city = $instance['city'];
	$state = $instance['state'];
	$postal = $instance['postal'];
	$country = $instance['country'];
	$email = $instance['email'];
	$phone = $instance['phone'];
	$mobile = $instance['mobile'];
	$fax = $instance['fax'];
	?>
		<?php echo $before_widget; ?>
		<?php if ($title) { echo $before_title . $title . $after_title; } ?>
            <p><?php echo $company; ?></p>
            <p><?php echo $street; ?></p>
            <p><?php echo $city; ?>, <?php echo $state; ?> <?php echo $postal; ?></li>
            <p><?php echo $country; ?></p>
            <p>Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
            <p>Tlf: <?php echo $phone; ?>, Mobile: <?php echo $mobile; ?></p>
            <p>Fax: <?php echo $fax; ?></p>
		<?php echo $after_widget; ?>   
    <?php
   }

   function update($new_instance, $old_instance) {                
	   return $new_instance;
   }

   function form($instance) {        
   
		$title = esc_attr($instance['title']);
		$company = esc_attr($instance['company']);
		$street = esc_attr($instance['street']);
		$city = esc_attr($instance['city']);
		$state = esc_attr($instance['state']);
		$postal = esc_attr($instance['postal']);
		$country = esc_attr($instance['country']);
		$email = esc_attr($instance['email']);
		$phone = esc_attr($instance['phone']);
		$fax = esc_attr($instance['fax']);
		?>
		<p>
		   <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('title'); ?>"  value="<?php echo $title; ?>" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('company'); ?>"><?php _e('Company Name:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('company'); ?>"  value="<?php echo $company; ?>" class="widefat" id="<?php echo $this->get_field_id('company'); ?>" />
		</p>
		<p>
		   <label for="<?php echo $this->get_field_id('street'); ?>"><?php _e('Street Address:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('street'); ?>"  value="<?php echo $street; ?>" class="widefat" id="<?php echo $this->get_field_id('street'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('city'); ?>"><?php _e('City:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('city'); ?>"  value="<?php echo $city; ?>" class="widefat" id="<?php echo $this->get_field_id('city'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('state'); ?>"><?php _e('State:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('state'); ?>"  value="<?php echo $state; ?>" class="widefat" id="<?php echo $this->get_field_id('state'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('postal'); ?>"><?php _e('Postal:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('postal'); ?>"  value="<?php echo $postal; ?>" class="widefat" id="<?php echo $this->get_field_id('postal'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('country'); ?>"><?php _e('Country:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('country'); ?>"  value="<?php echo $country; ?>" class="widefat" id="<?php echo $this->get_field_id('country'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('Email:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('email'); ?>"  value="<?php echo $email; ?>" class="widefat" id="<?php echo $this->get_field_id('email'); ?>" />
		</p>
         <p>
		   <label for="<?php echo $this->get_field_id('phone'); ?>"><?php _e('Phone:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('phone'); ?>"  value="<?php echo $phone; ?>" class="widefat" id="<?php echo $this->get_field_id('phone'); ?>" />
		</p>
         <p>
		   <label for="<?php echo $this->get_field_id('mobile'); ?>"><?php _e('Mobile:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('mobile'); ?>"  value="<?php echo $mobile; ?>" class="widefat" id="<?php echo $this->get_field_id('mobile'); ?>" />
		</p>
        <p>
		   <label for="<?php echo $this->get_field_id('fax'); ?>"><?php _e('Fax:','contempo'); ?></label>
		   <input type="text" name="<?php echo $this->get_field_name('fax'); ?>"  value="<?php echo $fax; ?>" class="widefat" id="<?php echo $this->get_field_id('fax'); ?>" />
		</p>
		<?php
	}
} 

register_widget('ct_ContactInfo');
?>



kisi bhi theme mai entry ko category kay name say class day kar elehda elehda har category post ko image ya background laganay kay lie ye code funtion.php mai paste karain
<?php
function the_category_unlinked($separator = ' ') {
    $categories = (array) get_the_category();
    
    $thelist = '';
    foreach($categories as $category) {    // concate
        $thelist .= $separator . $category->zip;
		$thelist .= $separator . $category->pdf;
		$thelist .= $separator . $category->doc;
		$thelist .= $separator . $category->video;
		$thelist .= $separator . $category->audio;
    }
    
    echo $thelist;
}
?>


Kisi custom post type ka elehda say search bananay kay lie takay wordpress usi cpt say search karai
 <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                <div><label class="screen-reader-text" for="s">Search for:</label>
                    <input type="text" value="" name="s" id="s" />
                    <input type="submit" id="searchsubmit" value="Search" />
                    <input type="hidden" name="post_type" value="name_of_your_post_type" />
                </div>
            </form>
            
            
without Author link Code is say posts author ka link show nahi hota
<?php the_author(); ?>

Author ki image laganay kay lie code
<img src="<?php bloginfo('template_url'); ?>/images/authors/<?php the_author_ID(); ?>.gif" alt="<?php the_author(); ?>" />

Wordpress Admin bar ko disable karnay ky lie code:
<?php
/* Disable WordPress Admin Bar for all users but admins. */
  show_admin_bar(false);
?>


Meta Box mai image ki fallback bananay kay lie code
<?php $images = rwmb_meta( 'img_wid_2', 'type=image', false );
  
      foreach ( $images as $image )
      {
       echo "<img src='{$image['full_url']}'width='210px' height='114px'  />";
 
      } 
      // check if image is blank
      if  (! in_array( $image, $images ) )
      { ?>    
                        <img src="<?php bloginfo('template_directory'); ?>/images/porduct-image.jpg" width="210px" height="114px" alt="" />
      <?php } ?>
	  
      
      
If is Home wali new snippit
 <?php
 if (is_home()){
 ?>
 <div class="abc">dsddd</div><?php
 
 
 }
 else {
	?>
 <div class="abc">dsddd</div><?php
	}
 ?>
 
Really Simple Breadcrumb kay lie shortcode ye code page.php mai lagain
Really Simple Breadcrumb kay lie shortcode ye code page.php mai lagain
Really Simple Breadcrumb kay lie shortcode ye code page.php mai lagain
<?php if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>
<?php
/*
Plugin Name: Really Simple Breadcrumb
Plugin URI: http://www.bcm-websolutions.de
Description: This is a really simple WP Plugin which lets you use Breadcrumbs for Pages!
Version: 1.0
Author: Christoph Weil
Author URI: http://www.bcm-websolutions.de
Update Server: 
Min WP Version: 3.2.1
Max WP Version: 
*/


function simple_breadcrumb() {
    global $post;
    echo '<div class="breadcrumb">';
	if (!is_front_page()) {
		echo '<a href="';
		echo get_option('home');
		echo '">Forside';
		echo "</a> &nbsp; ";
		if ( is_category() || is_single() ) {
			the_category(', ');
			if ( is_single() ) {
				echo " &nbsp; ";
				the_title();
			}
		} elseif ( is_page() && $post->post_parent ) {
			$home = get_page_by_title('home');
			for ($i = count($post->ancestors)-1; $i >= 0; $i--) {
				if (($home->ID) != ($post->ancestors[$i])) {
					echo '<a href="';
					echo get_permalink($post->ancestors[$i]); 
					echo '">';
					echo get_the_title($post->ancestors[$i]);
					echo "</a> &nbsp; ";
				}
			}
			echo the_title();
		} elseif (is_page()) {
			echo the_title();
		} elseif (is_404()) {
			echo "404";
		}
	} else {
		echo "Forside";
	}
	echo '</div>';
}

function breadcrumb_css() {
	echo "
	<style type='text/css'>
		.breadcrumb {
			padding-left: 10px;
			font-size: 10px;
		}
	</style>
	";
}
add_action( 'wp_head', 'breadcrumb_css' );




?>


View Port for Responsive Themes
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<?php
function viewport_webriver() {
	echo '
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	';
}
add_action( 'wp_head', 'viewport_webriver' );
?>






Background image ki option kay lie code 
<?php if(of_get_option('blue_box_image') != ''){ ?>
 <style type="text/css">   
	#blue-box {background-image:url(<?php echo of_get_option('blue_box_image'); ?>);
		background-repeat: no-repeat;
		background-position: center center;
	}
		 </style>
<?php } ?>


If is Page Templage laganay kay lie code
 <?php if ( is_page_template('full-width.php') ){}?>
 
 
 Posts ko Category kay name say out put karanay kay lie code
<?php 
	$cat_name = get_post_meta($post->ID, "category_name", true);
?>
        <div id="employee-post">
            <?php 
				query_posts(array(
				'post_type' => 'post', 
				'category_name' =>  $cat_name ) );
			 ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        	<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <div class="entry">
             <?php if ( has_post_thumbnail() ) { ?>
                    <div class="thumb">
						<?php the_post_thumbnail(); ?>
                    </div>
				<?php } ?>	
                <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
				<?php 
					global $more;    // Declare global $more (before the loop).
					$more = 0;       // Set (inside the loop) to display content above the more tag.
					the_content(__('Continue Reading','text_domain'));
				?>
            <div class="clear"></div>
            <div class="tags">
				<?php the_tags( __('Tags:','text_domain'),'','.'); ?>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>		
<div class="clear"></div>
<?php else : ?>
    <h2><?php _e('Nothing Found','text_domain'); ?></h2>
<?php endif; ?>		


<?php
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}
<?php echo content(25); ?>
 <?php  echo strip_shortcodes(wp_trim_words( get_the_content(), 40 )); ?>