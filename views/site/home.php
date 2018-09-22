<?php
use yii\helpers\html;

/* @var $this yii\web\View */

$this->title = 'CRUD Application';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>CRUD Application</h1>
        <p class="lead">Create Read Update Delete.</p>        
    </div>
    <div class="row">
    	<center>
			<span>
				<?= html::a('Create' ,['/site/create'],['class'=>"btn btn-primary"])?>
			 </span>
		</center>
    </div>
    <br>

    <div class="body-content">
        <div class="row">
           <table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">id</th>
			      <th scope="col">name</th>
			      <th scope="col">username</th>      
			      <th scope="col">email</th>
			      <th scope="col">mobile </th>
			      <th scope="col">gender </th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>

			  <tbody>
			  	<?php if(count($Users) > 0 ): ?>
			  		<?php foreach($Users as $user): ?>
					    <tr class="table-active">
					      <th scope="row"><?php echo $user->id;?></th>
					      <td><?php echo $user->name;?></td>
					      <td><?php echo $user->username;?></td>
					      <td><?php echo $user->email;?></td>
					      <td><?php echo $user->mobile;?></td>
					      <td><?php if($user->gender == 1) {echo "Male";} else{echo "Female";}?></td>
					      <td>					      	
				  			<span>
				    			<?= html::a('Read' ,['read','id'=>$user->id],['class'=>"btn btn-primary"])?>
				 			 </span>
				 			 <span>
				    			<?= html::a('Update' ,['update','id'=>$user->id],['class'=>"btn btn-secondary"])?>
				 			 </span>
				 			 <span>
				    			<?= html::a('Delete' ,['delete','id'=>$user->id],['class'=>"btn btn-danger"])?>
				 			 </span>					 										
						 </td>
					    </tr>  
			    	<?php endforeach; ?>
			    	<?php else: ?>
			    		<tr>
			    			<td>No Record Are Found</td>
			    		</tr> 
		    		<?php endif; ?>
			  </tbody>
</table>
        </div>

    </div>
</div>
