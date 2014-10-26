<h1>Add Post</h1>
<?php
echo $this->Form->create('Post');

echo('<div class="form-group">');
echo $this->Form->input('title', array('class' => 'form-control'));
echo('</div>');

echo('<div class="form-group">');
echo $this->Form->input('body', array('class' => 'form-control', 'rows' => '3'));
echo('</div>');

echo $this->Form->end('Save Post');
?>