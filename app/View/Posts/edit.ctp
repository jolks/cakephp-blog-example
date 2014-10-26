<h1>Edit Post</h1>
<?php
echo $this->Form->create('Post');

echo('<div class="form-group">');
echo $this->Form->input('title', array('class' => 'form-control'));
echo('</div>');

echo('<div class="form-group">');
echo $this->Form->input('body', array('class' => 'form-control', 'rows' => '5'));
echo('</div>');

echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
?>