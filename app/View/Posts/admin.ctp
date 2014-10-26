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
                        'Delete',
                        array('action' => 'delete', $post['Post']['id']),
                        array('class' => 'btn btn-danger btn-xs', 'role' => 'button')
                        array('confirm' => 'Are you sure?')
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