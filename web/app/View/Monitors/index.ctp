<?php $this->assign('title', 'Monitors'); ?>
<?php $this->start('sidebar'); ?>
<ul class="list-group">
  <li class="list-group-item"><?php echo $this->Html->link( 'Add Monitor', array('controller' => 'monitors', 'action' => 'add')); ?></li>
  <li class="list-group-item"><?php echo $this->Html->link( 'Delete Monitor', array('controller' => 'monitors', 'action' => 'delete')); ?></li>
</ul>
<?php $this->end(); ?>

<div id="monitors">
  <?php foreach ($monitors as $monitor => $mon): ?>
    <div class="panel panel-default monitor pull-left" id="Monitor_<?= $mon['Monitor']['Id']; ?>" style="width:<?php echo Configure::read('ZM_WEB_LIST_THUMB_WIDTH'); ?>px;">
      <div class="panel-heading">
        <h4><?php echo $this->Html->link($mon['Monitor']['Name'],array('controller' => 'monitors', 'action' => 'view', $mon['Monitor']['Id'])); ?></h4>
      </div>
      <div class="panel-body">
        <div class="thumbnail">
        <?php echo $this->Html->image($mon['img']['src'], array(
		'alt' => $mon['img']['alt'],
		'id' => $mon['img']['id'],
		'width' => Configure::read('ZM_WEB_LIST_THUMB_WIDTH')
	)); ?>
        </div>
        <div class="caption">
          <p><?php echo $this->Html->link($mon['Monitor']['Function'], array('action' => 'edit', $mon['Monitor']['Id'])); ?></p>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  <?php unset($monitor); ?>
</div>

<?php
  $this->Js->get('#monitors');
  $this->Js->sortable(array('complete' => '$.post("/monitors/reorder", $("#monitors").sortable("serialize"))',));
?>
