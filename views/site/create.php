<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'Create Record';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>Create Record</h1>
    </div>
    <div class="body-content">
    	<?php $form = ActiveForm::begin()?>
    <div class="row">
    	<div class="form-group">
    		<div class="col-lg-6">
    			<?= $form->field($fm,'name')?>
    		</div>    		
    	</div>
    </div>
    <div class="row">
    	<div class="form-group">
    		<div class="col-lg-6">
    			<?= $form->field($fm,'username')?>
    		</div>    		
    	</div>
    </div>
    <div class="row">
    	<div class="form-group">
    		<div class="col-lg-6">
    			<?= $form->field($fm,'password')?>
    		</div>    		
    	</div>
    </div>
    <div class="row">
    	<div class="form-group">
    		<div class="col-lg-6">
    			<?= $form->field($fm,'email')?>
    		</div>    		
    	</div>
    </div>
    <div class="row">
    	<div class="form-group">
    		<div class="col-lg-6">
    			<?= $form->field($fm,'mobile')?>
    		</div>    		
    	</div>
    </div>
    <div class="row">
    	<div class="form-group">
    		<div class="col-lg-6">
    			<?= $form->field($fm,'gender')?>
    		</div>    		
    	</div>
    </div>
    <div class="row">
    	<div class="form-group">
    		<div class="col-lg-6">
    			<div class="col-lg-3">
    				<?= html::submitbutton('ADD',['class'=>'btn btn-primary'])?>
    			</div>
    			<div class="col-lg-2">
    				<a href=<?php echo yii::$app->homeurl;?> class="btn btn-primary">Cancel</a>
    			</div>
    		</div>    		
    	</div>
    </div>
    <?php ActiveForm::end()?>
</div>
