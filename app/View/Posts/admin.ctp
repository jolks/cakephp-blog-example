<div class="container">
    <?php echo $this->Html->link(
        'View Blog',
        array('controller' => 'posts', 'action' => 'index'),
        array('class' => 'btn btn-primary btn-lg', 'role' => 'button')
    ); ?>

    <?php echo $this->Html->link(
        'Add Post',
        array('controller' => 'posts', 'action' => 'add'),
        array('class' => 'btn btn-primary btn-lg', 'role' => 'button')
    ); ?>
</div>

<div class="container"></div>

<div class="container">
    <table class="table table-hover">
        <tr>
            <th>Title</th>
            <th>Actions</th>
            <th>Created</th>
        </tr>

    <!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($posts as $post): ?>
        <tr>
            <td>
                <?php echo h($post['Post']['title']); ?>
            </td>
            <td>
                <?php
                    echo $this->Form->postLink(
                        $this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-remove')). " Delete",
                        array('action' => 'delete', $post['Post']['id']),
                        array('escape'=>false),
                        __('Are you sure you want to delete # %s?', $post['Post']['title']),
                        array('class' => 'btn btn-mini')
                    );
                ?>
                <?php
                    echo $this->Html->link(
                        'Edit',
                        array('action' => 'edit', $post['Post']['id']),
                        array('class' => 'btn btn-warning btn-xs', 'role' => 'button')
                    );
                ?>
            </td>
            <td>
                <?php echo $post['Post']['created']; ?>
            </td>
        </tr>
        <?php endforeach; ?>

    </table>
</div>