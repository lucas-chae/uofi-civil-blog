<!DOCTYPE html>

<html <?php language_attributes();?> >
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" >
        <meta name="viewport" content="width=device-width">
        
        <meta name="description" content="University of Illinois Department of Civil and Environmental Engineering. Student Blog by Student Committee ">
        <meta name="author" content="Lucas Chae">
        
        <title><?php bloginfo('name');?></title>
        <?php wp_head(); ?>
        
        <link href="<?php bloginfo('template_url');?> /css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php bloginfo('template_url');?> /css/animate.min.css" rel="stylesheet">
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Catamaran:600" rel="stylesheet">
        
        
        
    </head>
    
    
<body>
    
    <div  style="height:100%; width:100%; margin:auto; background-image: url('<?php echo get_bloginfo('template_url') ?>/img/yeh.png'); display: table; top:0; background-size: cover; " id=front-page>
    <div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
        <div class="center xlarge">
            
            CEE @ ILLINOIS
            
            
        </div>
        <div class="center xlarge">
            <a href="<?php echo get_page_link( get_page_by_title(about)->ID ); ?>">Enter Blog</a>
            
            </div>
           <div id="changeText" >
    <script type="text/javascript">
    var text = ["Welcome", "Hi", "Sup dude"];
    var counter = 0;
    var elem = document.getElementById("changeText");
    setInterval(change, 1000);
    function change() {
     elem.innerHTML = text[counter];
        counter++;
        if(counter >= text.length) { counter = 0; }
    }
    </script>
               </div>
            
           <div id="textMessage"></div>
<div class="textContent">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet risus vitae ligula lobortis feugiat. Aenean a lorem vitae nisi vehicula tempor. Donec suscipit ornare dui, sit amet tincidunt lorem aliquet id. Donec egestas sollicitudin consectetur. Donec ante dolor, bibendum a ultrices scelerisque, sagittis imperdiet sapien. Maecenas sagittis, sem et pharetra sollicitudin, orci nisi commodo augue, id molestie velit ipsum eget est. </div>
<div class="textContent">In sit amet diam et arcu aliquam tincidunt. Vestibulum quis mi id lacus fringilla pulvinar in nec lorem. Duis sed est at nunc euismod scelerisque. Nulla venenatis augue non urna sollicitudin et molestie neque aliquet. Proin odio ligula, sodales a auctor ac, iaculis ut urna. Nam tellus felis, ultrices sed ornare a, pretium eget odio. Suspendisse potenti. </div>
     
            
            
            
        </div>
        
        
    
    
    </div>
        </div>
        </div>
  <script>
            $("#js-rotating").Morphext();
        </script>
    <script>
        
        var cnt=0, texts=[];

// save the texts in an array for re-use
$(".textContent").each(function() {
  texts[cnt++]=$(this).text();
});
function slide() {
  if (cnt>=texts.length) cnt=0;
  $('#textMessage').html(texts[cnt++]);
  $('#textMessage')
    .fadeIn('slow').animate({opacity: 1.0}, 5000).fadeOut('slow', 
     function() {
       return slide()
     }
  );      
}      
slide()      
    </script>
    
    </body>
    
    
<?php get_footer();

?>