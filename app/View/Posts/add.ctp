<h1>Add Post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title', array('class' => 'form-control'));
echo $this->Form->input('body', array('class' => 'form-control', 'rows' => '3'));
echo $this->Form->end('Save Post');
?>