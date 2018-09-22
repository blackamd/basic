<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'Read Record';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>Read Record</h1>
    </div>
    <div class="body-content">
        <div class="alert alert-dismissible alert-primary">
          <button class="close" type="button" data-dismiss="alert">&times;</button>
          <strong>ID</strong> <?php echo $record->id;?>
        </div>
    	<div class="alert alert-dismissible alert-danger">
          <button class="close" type="button" data-dismiss="alert">&times;</button>
          <strong>Name</strong>  <?php echo $record->name;?>
        </div>
        <div class="alert alert-dismissible alert-success">
          <button class="close" type="button" data-dismiss="alert">&times;</button>
          <strong>UserName</strong> <?php echo $record->username;?>
        </div>
        <div class="alert alert-dismissible alert-info">
          <button class="close" type="button" data-dismiss="alert">&times;</button>
          <strong>Password</strong> <?php echo $record->password;?>
        </div>
        <div class="alert alert-dismissible alert-primary">
          <button class="close" type="button" data-dismiss="alert">&times;</button>
          <strong>Email</strong> <?php echo $record->email;?>
        </div>
        <div class="alert alert-dismissible alert-danger">
          <button class="close" type="button" data-dismiss="alert">&times;</button>
          <strong>Mobile</strong>  <?php echo $record->mobile;?>
        </div>
        <div class="alert alert-dismissible alert-success">
          <button class="close" type="button" data-dismiss="alert">&times;</button>
          <strong>Gender</strong> <?php if($record->gender == 1){ echo 'Male';} else{ echo 'Female';}?>
        </div>
        <div class="alert alert-dismissible alert-info">
          <button class="close" type="button" data-dismiss="alert">&times;</button>
          <strong>created at </strong> <?php echo $record->created_at ;?>
        </div>
        <div class="alert alert-dismissible alert-primary">
          <button class="close" type="button" data-dismiss="alert">&times;</button>
          <strong>updated at </strong> <?php echo $record->updated_at ;?>
        </div>
        <a href=<?php echo yii::$app->homeurl;?> class="btn btn-primary">Back</a>
</div>
