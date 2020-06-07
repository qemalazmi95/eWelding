			
			<form id="login_form1" class="form-signin" method="post">
				<h3 class="form-signin-heading">
					<i class="icon-lock"></i> Please Login
				</h3>
				<input type="text"      class="input-block-level"   id="username" name="username" placeholder="Username" required>
				<input type="password"  class="input-block-level"   id="password" name="password" placeholder="Password" required>
				
				<button data-placement="right" title="Click Here to Sign In" id="signin" name="login" class="btn btn-info" type="submit"><i class="icon-signin icon-large"></i> Sign in</button>
				<script type="text/javascript">
				$(document).ready(function(){
				$('#signin').tooltip('show');
				$('#signin').tooltip('hide');
				});
				</script>		
			</form>
						<script>
						jQuery(document).ready(function(){
						jQuery("#login_form1").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "login.php",
									data: formData,
									success: function(html){
									if(html=='true_manager')
									{
									$.jGrowl("Loading File Please Wait......", { sticky: true });
									$.jGrowl("AZW e-Inventory", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'manager/dashboard_manager.php'  }, delay);  
									}else if (html == 'true_clerk'){
										$.jGrowl("AZW e-Inventory System", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'officerClerk/dashboard_clerk.php'  }, delay);
									}else if (html == 'true_store'){
										$.jGrowl("AZW e-Inventory System", { header: 'Access Granted' });
									var delay = 1000;
										setTimeout(function(){ window.location = 'store_manager/dashboard_store.php'  }, delay);   
									}else
									{
									$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
									}
									}
								});
								return false;
							});
						});
						</script>
			