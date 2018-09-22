<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'Update Record';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>Update Record</h1>
    </div>
    <div class="body-content">
    	<?php $form = ActiveForm::begin()?>
    <div class="row">
    	<div class="form-group">
    		<div class="col-lg-6">
    			<?= $form->field($target,'name')?>
    		</div>    		
    	</div>
    </div>
    <div class="row">
    	<div class="form-group">
    		<div class="col-lg-6">
    			<?= $form->field($target,'username')?>
    		</div>    		
    	</div>
    </div>
    <div class="row">
    	<div class="form-group">
    		<div class="col-lg-6">
    			<?= $form->field($target,'password')?>
    		</div>    		
    	</div>
    </div>
    <div class="row">
    	<div class="form-group">
    		<div class="col-lg-6">
    			<?= $form->field($target,'email')?>
    		</div>    		
    	</div>
    </div>
    <div class="row">
    	<div class="form-group">
    		<div class="col-lg-6">
    			<?= $form->field($target,'mobile')?>
    		</div>    		
    	</div>
    </div>
    <div class="row">
    	<div class="form-group">
    		<div class="col-lg-6">
    			<?= $form->field($target,'gender')?>
    		</div>    		
    	</div>
    </div>
    <div class="row">
    	<div class="form-group">
    		<div class="col-lg-6">
    			<div class="col-lg-3">
    				<?= html::submitbutton('update',['class'=>'btn btn-primary'])?>
    			</div>
    			<div class="col-lg-2">
    				<a href=<?php echo yii::$app->homeurl;?> class="btn btn-primary">Cancel</a>
    			</div>
    		</div>    		
    	</div>
    </div>
    <?php ActiveForm::end()?>
</div>
