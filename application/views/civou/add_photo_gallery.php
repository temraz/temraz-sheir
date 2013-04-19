<?php include('admin_header.php')?>
<link rel="stylesheet" href="<?php echo base_url();?>css/chosen.css" />
<?php include('left_menu.php')?>

        <!--  Begining of upload form  ******************************************************-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.form.js"></script>
        <script type="text/javascript"> 
            $(document).ready(function() { 
                //elements
                var progressbox 		= $('#progressbox'); //progress bar wrapper
                var progressbar 		= $('#progressbar'); //progress bar element
                var statustxt 			= $('#statustxt'); //status text element
                var submitbutton 		= $("#SubmitButton"); //submit button
                var myform 				= $("#UploadForm"); //upload form
                var output 				= $("#output"); //ajax result output element
                var completed 			= '0%'; //initial progressbar value
                var FileInputsHolder 	= $('#AddFileInputBox'); //Element where additional file inputs are appended
                var MaxFileInputs		= 100; //Maximum number of file input boxs
                var m=1;
                // adding and removing file input box
                var i = $('#AddFileInputBox div').size() + 1;
                $('#AddMoreFileBox').live('click', function() {
                    if(i < MaxFileInputs)
                    {
                        $('<span><input type="file" id="fileInputBox" size="20" name="file'+m+'"  class="addedInput" value=""/><a href="#" class="small2" id="removeFileBox"><img src="<?php echo base_url(); ?>images/close_icon.gif" border="0" /></a></span>').appendTo(FileInputsHolder);
                        i++;
                        m++;
                    }
                    return false;
                });

                $('#removeFileBox').live('click', function() { 
                    if( i > 1 ) {
                        $(this).parents('span').remove();i--;
                    }
                    return false;
                });
                // congiguration to  uploadform2  div 

                var progressbox 		= $('#progressbox'); //progress bar wrapper
                var progressbar 		= $('#progressbar'); //progress bar element
                var statustxt 			= $('#statustxt'); //status text element
                var submitbutton 		= $("#SubmitButton"); //submit button
                var myform 				= $("#UploadForm2"); //upload form
                var output 				= $("#output"); //ajax result output element
                var completed 			= '0%'; //initial progressbar value
                var FileInputsHolder2 	= $('#AddFileInputBox2'); //Element where additional file inputs are appended
                var MaxFileInputs2		= 100; //Maximum number of file input boxs
                var mm=1;
                // adding and removing file input box
                var i = $('#AddFileInputBox2 div').size() + 1;
                $('#AddMoreFileBox2').live('click', function() {
                    if(i < MaxFileInputs2)
                    {
                        $('<span><input type="file" id="fileInputBox" size="20" name="gallery'+mm+'"  class="addedInput" value=""/><a href="#" class="small2" id="removeFileBox"><img src="<?php echo base_url(); ?>images/close_icon.gif" border="0" /></a></span>').appendTo(FileInputsHolder2);
                        i++;
                        mm++;
                    }
                    return false;
                });

                $('#removeFileBox').live('click', function() { 
                    if( i > 1 ) {
                        $(this).parents('span').remove();i--;
                    }
                    return false;
                });

                //////////////// end of  upload formdiv2 ////////////////////////////

                $("#ShowForm").click(function () {
                    $("#uploaderform").slideToggle(); //Slide Toggle upload form on click
                });
	
                $(myform).ajaxForm({
                    beforeSend: function() { //brfore sending form
                        submitbutton.attr('disabled', ''); // disable upload button
                        statustxt.empty();
                        progressbox.show(); //show progressbar
                        progressbar.width(completed); //initial value 0% of progressbar
                        statustxt.html(completed); //set status text
                        statustxt.css('color','#000'); //initial color of status text
		
                    },
	
                    uploadProgress: function(event, position, total, percentComplete) { //on progress
                        progressbar.width(percentComplete + '%') //update progressbar percent complete
                        statustxt.html(percentComplete + '%'); //update status text
                        if(percentComplete>50)
                        {
                            statustxt.css('color','#fff'); //change status text to white after 50%
                        }else{
                            statustxt.css('color','#000');
                        }
			
                    },
                    complete: function(response) { // on complete
                        output.html(response.responseText); //update element with received data
                        myform.resetForm();  // reset form
                        submitbutton.removeAttr('disabled'); //enable submit button
                        progressbox.hide(); // hide progressbar
                        $("#uploaderform").slideUp(); // hide form after upload
                    }
                });

            }); 
        </script> 
        <link href="<?php echo base_url(); ?>css/style_uploadform.css" rel="stylesheet" type="text/css" />

        <!-- end of upload form code **************************************************** -->
		<title>Add anew album </title>
				
<div class="span8" style="float:left ; margin-left:70px">

  <?php echo form_open_multipart('admin/insert_album'); ?>
                                <?php if (validation_errors()){ ?>
                                <div class="alert alert-error">
<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Error! <?php  echo validation_errors(); ?></strong> 
							</div>
                                <?php } if(isset($inserted) && $inserted == 1){?>
                                <div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Success!</strong> The album has been inserted Successfuly. 
							</div>
                            <?php } ?>
                            <?php if(isset($inserted) && $inserted == 0){?>
                                <div class="alert alert-falier">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Sorry!</strong> Can't upload the album Right now please try again. 
							</div>
                            <?php } ?>
								<div class="row controls" id="contactForm">
                                
                                <div class="span3 control-group">
										<label>Category name *</label>
										 <select name="cat_name" id="search_category_id" size="1" class="span3" required>
								
										<option value="" >Select</option>
                                        
                                        <?php if(isset($cats)){ foreach($cats as $cat){?>
										<option value="<?php echo $cat->name; ?>"> <?php echo $cat->name; ?></option>
										
								<?php }}?>
										</select>
									</div>
                              <div class="span3 control-group" style="width:100%">
                                    
                                    
										<label>Album Name *</label>
										<input type="text" value="" maxlength="30" class="span3" name="album_name"  required>
									</div>
                         
							
                                 
  <div class="span3 control-group" style="width:100%">

        </div>
         <div class="span3 control-group" style="width:100%">
        <div id="uploaderform" >
            <!--            <form  name="UploadForm" id="UploadForm">-->
            <label>  photos Album * </label> 
            <div id="AddFileInputBox">
                <input id="fileInputBox" style="margin-bottom: 5px;" type="file"  name="file0" required/></div>
            <div class="sep_s"></div>
            <span class="small"><a href="#" id="AddMoreFileBox">Add More Files</a></span>
            <div id="progressbox"><div id="progressbar"></div ><div id="statustxt">0%</div ></div>
            <!--            </form>-->
        </div>
        </div>
      </div>
    </div>
    
                <div class="btn-toolbar" style="margin-left:30px">
<input type="submit" value="Save" class="btn btn-primary btn-large" style="position:relative;float:left;margin-left:335px;" data-loading-text="Loading...">
								</div>
                                
							 <?php echo form_close();?>
                            </div>

</div>
		</div>

			</div>
        <script type="text/javascript">
            
          
             
            $('#type').change( 
            function(){
                var list_value=$('#type').val();
                
                if(list_value=='1'){
                    $('#uploaderform2').show();
                    $('#uploaderform').show();
                    $('#vedio').show();
                    $('#user').show();
                    $('#pass').show();
                }
                
                else if(list_value=='2'){
                    $('#uploaderform2').hide();
                    $('#uploaderform').show();
                    $('#vedio').hide();
                    $('#user').show();
                    $('#pass').show();
                }
                
                else if(list_value=='3'){
                    $('#uploaderform2').hide();
                    $('#uploaderform').hide();
                    $('#vedio').hide();
                    $('#user').hide();
                    $('#pass').hide();
                }
            }
        );
    
        </script> 

 

              	

		<!-- Libs -->
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js" tppabs="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php echo base_url();?>js/jquery.js"/*tpa=http://www.crivos.com/themes/porto/vendor/jquery.js*/><\/script>')</script>
		<script src="<?php echo base_url();?>js/jquery.easing.js" tppabs="http://www.crivos.com/themes/porto/vendor/jquery.easing.js"></script>
		<script src="<?php echo base_url();?>js/jquery.cookie.js" tppabs="http://www.crivos.com/themes/porto/vendor/jquery.cookie.js"></script>
		<script src="<?php echo base_url();?>js/style.switcher.js" tppabs="http://www.crivos.com/themes/porto/master/style-switcher/style.switcher.js"></script> <!-- Style Switcher -->
		<script src="<?php echo base_url();?>js/bootstrap.js" tppabs="http://www.crivos.com/themes/porto/vendor/bootstrap.js"></script>
		<script src="<?php echo base_url();?>js/selectnav.js" tppabs="http://www.crivos.com/themes/porto/vendor/selectnav.js"></script>
		<script src="<?php echo base_url();?>js/twitter.js" tppabs="http://www.crivos.com/themes/porto/vendor/twitterjs/twitter.js"></script>
		<script src="<?php echo base_url();?>js/jquery.flexslider.js" tppabs="http://www.crivos.com/themes/porto/vendor/flexslider/jquery.flexslider.js"></script>
		<script src="<?php echo base_url();?>js/jflickrfeed.js" tppabs="http://www.crivos.com/themes/porto/vendor/jflickrfeed/jflickrfeed.js"></script>
		<script src="<?php echo base_url();?>js/jquery.fancybox.js" tppabs="http://www.crivos.com/themes/porto/vendor/fancybox/jquery.fancybox.js"></script>

		<script src="<?php echo base_url();?>js/plugins.js" tppabs="http://www.crivos.com/themes/porto/js/plugins.js"></script>

		<!-- Page Scripts -->

		<!-- Theme Initializer -->
		<script src="<?php echo base_url();?>js/theme.js" tppabs="http://www.crivos.com/themes/porto/js/theme.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
		<!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->
	</body>
</html>
