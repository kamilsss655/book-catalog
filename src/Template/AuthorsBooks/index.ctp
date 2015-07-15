<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Authors Book'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Authors'), ['controller' => 'Authors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Author'), ['controller' => 'Authors', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="authorsBooks index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('book_id') ?></th>
            <th><?= $this->Paginator->sort('author_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($authorsBooks as $authorsBook): ?>
        <tr>
            <td>
                <?= $authorsBook->has('book') ? $this->Html->link($authorsBook->book->title, ['controller' => 'Books', 'action' => 'view', $authorsBook->book->id]) : '' ?>
            </td>
            <td>
                <?= $authorsBook->has('author') ? $this->Html->link($authorsBook->author->id, ['controller' => 'Authors', 'action' => 'view', $authorsBook->author->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $authorsBook->book_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $authorsBook->book_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $authorsBook->book_id], ['confirm' => __('Are you sure you want to delete # {0}?', $authorsBook->book_id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
