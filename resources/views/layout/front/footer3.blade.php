    <!-- Essential javascripts for application to work-->
    {{ Html::script("js/jquery-3.2.1.min.js") }}
    {{ Html::script("js/popper.min.js") }}
    {{ Html::script("js/bootstrap.min.js") }}
    {{ Html::script("js/main.js") }}
    <!-- The javascript plugin to display page loading on top-->
    {{ Html::script("js/plugins/pace.min.js") }}

<script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
</script>