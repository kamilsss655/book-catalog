<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Books Category'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="booksCategories index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('book_id') ?></th>
            <th><?= $this->Paginator->sort('category_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($booksCategories as $booksCategory): ?>
        <tr>
            <td>
                <?= $booksCategory->has('book') ? $this->Html->link($booksCategory->book->title, ['controller' => 'Books', 'action' => 'view', $booksCategory->book->id]) : '' ?>
            </td>
            <td>
                <?= $booksCategory->has('category') ? $this->Html->link($booksCategory->category->title, ['controller' => 'Categories', 'action' => 'view', $booksCategory->category->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $booksCategory->book_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $booksCategory->book_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $booksCategory->book_id], ['confirm' => __('Are you sure you want to delete # {0}?', $booksCategory->book_id)]) ?>
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
