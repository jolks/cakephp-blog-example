<p>My Blog</p>

<?php foreach ($posts as $post): ?>
    <h1><?php
                echo $this->Html->link(
                    $post['Post']['title'],
                    array('action' => 'view', $post['Post']['id'])
                );
            ?></h1>
    <p><small>Created: <?php echo $post['Post']['created']; ?></small></p>
    <p><?php echo h($post['Post']['body']); ?></p>
    <hr>
<?php endforeach; ?>