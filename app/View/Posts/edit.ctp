<h1>Edit Post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title', 
    array('class' => 'form-control')
    );
echo $this->Form->input('body', array('rows' => '3'), 
    array('class' => 'form-control')
    );
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
?>