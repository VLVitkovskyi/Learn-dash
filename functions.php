
add_action( 'wp_footer', function(){
            if( is_user_logged_in() ) return;
?>
<script type="text/javascript">
jQuery(document).ready(function($){
$('.ld-button').click(function(e){
e.preventDefault();
$('.xoo-el-login-tgr').trigger('click');
})
})
</script>
<?php
