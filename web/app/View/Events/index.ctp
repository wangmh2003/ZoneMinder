<?php $this->assign('title', 'Events'); ?>
<?php $this->start('sidebar'); ?>
<div class="panel-body">
<div id="sidebar">
<?php
echo $this->Form->create('Events', array('action' => 'index', 'default' => false, 'inputDefaults' => array(
	'legend' => false,
	'label' => false,
	'div' => false,
	'fieldset' => false
)));
?>

<div class="panel panel-default">
  <div class="panel-heading">Filter by Monitor</div>
  <div class="panel-body">
<div id="events_monitors">
<?
  foreach ($monitors as $monitor) {
    echo $this->Form->input($monitor['Monitor']['Name'], array('type' => 'checkbox', 'label' => $monitor['Monitor']['Name']));
  }
?>
</div>
</div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">Filter by Date & Time</div>
  <div class="panel-body">
    Start Date
    <div class="form-group">
      <div class="input-group date datetime">
        <input type="text" class="form-control" id="EventStartDate" name="data[StartDate]">
        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
      </div>
    </div>
    End Date
    <div class="form-group">
      <div class="input-group date datetime">
        <input type="text" class="form-control" id="EventEndDate" name="data[EndDate]">
        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
      </div>
    </div>  
  </div>
</div>

<?php echo $this->Form->end(array('label' => 'Search', 'class' => 'btn btn-default')); ?>
<?php echo $this->Html->link('Delete Selected','#',array('class' => 'btn btn-default', 'onClick' => '$("#EventsDeleteSelectedForm").submit();')); ?>

</div>
</div>

<?php $this->end(); ?>

<div id="EventsContent">
<ul class="pagination">
  <?php echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => false, 'currentClass' => 'active', 'currentTag' => 'span')); ?>
</ul>

<?
  echo $this->Form->create('Events', array('action' => 'deleteSelected'));
?>

<table class="table table-condensed table-striped" id="Events">
<thead>
<?php
  echo $this->Html->tableHeaders(array($this->Form->checkbox('', array('hiddenField' => false, 'class' => 'selectAll')), 'Thumbnail', 'Id', 'Name', 'Monitor', 'Cause', 'Date/Time', 'Duration', 'Alarm Frames', 'Total Score', 'Avg. Score', 'Max Score'));
?>
</thead>
<tbody id="EventsTableBody">
<?
foreach ($events as $key => $value) {
	echo $this->Html->tableCells(array(
		$this->Form->checkbox('delete.', array(
      'value' => $value['Event']['Id'],
      'hiddenField' => false
    )),
    $this->Html->link($this->Html->image('/events/'.$thumbData[$key]['Path'], array(
			'alt' => $thumbData[$key]['Frame']['FrameId'].'/'.$thumbData[$key]['Event']['MaxScore'],
			'width' => $thumbData[$key]['Width'],
			'height' => $thumbData[$key]['Height']
		)),
		array('controller' => 'events', 'action' => 'view', $value['Event']['Id']), array('escape' => false)),
		$value['Event']['Id'],
		$value['Event']['Name'],
		$value['Monitor']['Name'],
		$value['Event']['Cause'],
		$this->Time->format('n/j/y @ g:i:s A', $value['Event']['StartTime'], null, 'EST'),
		$value[0]['Duration'],
		$value['Event']['AlarmFrames'],
		$value['Event']['TotScore'],
		$value['Event']['AvgScore'],
		$value['Event']['MaxScore']
	));
}
?>
</tbody>
</table>

<?
  echo $this->Form->end();
?>

<ul class="pagination">
  <?php echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => false, 'currentClass' => 'active', 'currentTag' => 'span')); ?>
</ul>
</div>