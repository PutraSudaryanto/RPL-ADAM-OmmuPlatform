<?php
/**
 * User History Emails (user-history-email)
 * @var $this HistoryController * @var $model UserHistoryEmail *
 * @author Putra Sudaryanto <putra.sudaryanto@gmail.com>
 * @copyright Copyright (c) 2014 Ommu Platform (ommu.co)
 * @link http://company.ommu.co
 * @contect (+62)856-299-4114
 *
 */

	$this->breadcrumbs=array(
		'User History Emails'=>array('manage'),
		'Manage',
	);
?>

<div id="partial-user-history-email">
	<?php //begin.Messages ?>
	<div id="ajax-message">
	<?php
	if(Yii::app()->user->hasFlash('error'))
		echo Utility::flashError(Yii::app()->user->getFlash('error'));
	if(Yii::app()->user->hasFlash('success'))
		echo Utility::flashSuccess(Yii::app()->user->getFlash('success'));
	?>
	</div>
	<?php //begin.Messages ?>

	<div class="boxed">
		<?php //begin.Grid Item ?>
		<?php 
			$columnData   = $columns;
			/*
			array_push($columnData, array(
				'header' => 'Option',
				'class'=>'CButtonColumn',
				'buttons' => array(
					'view' => array(
						'label' => 'view',
						'options' => array(							
							'class' => 'view',
						),
						'url' => 'Yii::app()->controller->createUrl("view",array("id"=>$data->primaryKey))'),
					'update' => array(
						'label' => 'update',
						'options' => array(
							'class' => 'update'
						),
						'url' => 'Yii::app()->controller->createUrl("edit",array("id"=>$data->primaryKey))'),
					'delete' => array(
						'label' => 'delete',
						'options' => array(
							'class' => 'delete'
						),
						'url' => 'Yii::app()->controller->createUrl("delete",array("id"=>$data->primaryKey))')
				),
				'template' => '{view}|{update}|{delete}',
			));
			*/

			$this->widget('application.components.system.OGridView', array(
				'id'=>'user-history-email-grid',
				'dataProvider'=>$model->search(),
				'filter'=>$model,
				'columns' => $columnData,
				'pager' => array('header' => ''),
			));
		?>
		<?php //end.Grid Item ?>
	</div>
</div>