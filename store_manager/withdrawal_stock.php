<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body id="home">
		<?php include('navbar_store.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('store_sidebar.php'); ?>
		
						<div class="span9" id="content">
		                    <div class="row-fluid">
							
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Withdrawal Stock</div>
										
																<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script>   
                            
		                            </div>
		                <div class="block-content collapse in">	
                         <div class="alert alert-success"><i class="icon-info-sign"></i> Please Fill in required details</div>						
							<form class="form-horizontal" method="post">
							
										<div class="control-group">
		                                 <label class="control-label" for="inputEmail">Client Name</label>
			                                <div class="controls">
				                              <select name="clientname" class="chzn-select"  required/>
				                                 <option></option>
			                                       <?php $device_name =  mysql_query("select * from client")or die(mysql_error()); 
			                                        while ($row=mysql_fetch_array($device_name)){ 
													$dev_name = $row['client_name'];
													?>
				                                    <option value="<?php echo $row['client_id']; ?>&nbspName&nbsp<?php echo $row['client_name']; ?>"><?php echo $row['client_name']; ?></option>
				                                     <?php } ?>
				                                </select>
		                                     </div>
	                                    </div>
										
										<div class="control-group">
		                                 <label class="control-label" for="inputEmail">Project Name</label>
			                                <div class="controls">
				                              <select name="clientname" class="chzn-select"  required/>
				                                 <option></option>
			                                       <?php $device_name =  mysql_query("select * from project ")or die(mysql_error()); 
			                                        while ($row=mysql_fetch_array($device_name)){ 
													$dev_name = $row['project_name'];
													?>
				                                    <option value="<?php echo $row['project_id']; ?>&nbspName&nbsp<?php echo $row['project_name']; ?>"><?php echo $row['project_name']; ?></option>
				                                     <?php } ?>
				                                </select>
		                                     </div>
	                                    </div>
										
										<div class="form-group">  
                     <form name="add_name" id="add_name">
                     <?php

  if(isset($_POST['add_sale'])){
    $req_fields = array('s_id','quantity','price','total', 'date' );
    validate_fields($req_fields);
        if(empty($errors)){
          $p_id      = $db->escape((int)$_POST['s_id']);
          $s_qty     = $db->escape((int)$_POST['quantity']);
          $s_total   = $db->escape($_POST['total']);
          $date      = $db->escape($_POST['date']);
          $s_date    = make_date();

          $sql  = "INSERT INTO sales (";
          $sql .= " product_id,qty,price,date";
          $sql .= ") VALUES (";
          $sql .= "'{$p_id}','{$s_qty}','{$s_total}','{$s_date}'";
          $sql .= ")";

                if($db->query($sql)){
                  update_product_qty($s_qty,$p_id);
                  $session->msg('s',"Sale added. ");
                  redirect('add_sale.php', false);
                } else {
                  $session->msg('d',' Sorry failed to add!');
                  redirect('add_sale.php', false);
                }
        } else {
           $session->msg("d", $errors);
           redirect('add_sale.php',false);
        }
  }

?>

<div class="row">
  <div class="col-md-6">
    
    <form method="post" action="ajax.php" autocomplete="off" id="sug-form">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-primary">Find It</button>
            </span>
            <input type="text" id="sug_input" class="form-control" name="title"  placeholder="Search for product name">
         </div>
         <div id="result" class="list-group"></div>
        </div>
    </form>
  </div>
</div>
<div class="row">

  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Sale Eidt</span>
       </strong>
      </div>
      <div class="panel-body">
        <form method="post" action="add_sale.php">
         <table class="table table-bordered">
           <thead>
            <th> Item </th>
            <th> Price </th>
            <th> Qty </th>
            <th> Total </th>
            <th> Date</th>
            <th> Action</th>
           </thead>
             <tbody  id="product_info"> </tbody>
         </table>
       

                     </form>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
  
 $(document).ready(function(){  

      var i=1;  
      $('#add').click(function(){  
	
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter stock" class="form-control stock_list" /> <td><input type="text" name="quantity[]" placeholder="Quantity" class="form-control quantity" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"withdrawal_stock.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>


																										
		                            </div>
		                        </div>
		                        <!-- /block -->
		                    </div>
		                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>