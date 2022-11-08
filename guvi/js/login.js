jQuery('#contactForm').on('submit',function(e){
            jQuery('#thank_you_msg').html("");
            jQuery('#btn').val('Please wait...');
            jQuery('#btn').attr('disabled',true);
            jQuery.ajax({
                url:'php/login.php',
                type:'post',
                data:jQuery('#contactForm').serialize(),
                success:function(result){
                    jQuery('#thank_you_msg').html('login successfully!');
                    jQuery('#contactForm')['0'].reset();
                    jQuery('#btn').val('Submit Now');
                    jQuery('#btn').attr('disabled',false);
                }
            });
            e.preventDefault();
});
