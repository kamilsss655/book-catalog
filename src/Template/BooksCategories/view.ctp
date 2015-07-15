<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Books Category'), ['action' => 'edit', $booksCategory->book_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Books Category'), ['action' => 'delete', $booksCategory->book_id], ['confirm' => __('Are you sure you want to delete # {0}?', $booksCategory->book_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Books Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Books Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="booksCategories view large-10 medium-9 columns">
    <h2><?= h($booksCategory->book_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Book') ?></h6>
            <p><?= $booksCategory->has('book') ? $this->Html->link($booksCategory->book->title, ['controller' => 'Books', 'action' => 'view', $booksCategory->book->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Category') ?></h6>
            <p><?= $booksCategory->has('category') ? $this->Html->link($booksCategory->category->title, ['controller' => 'Categories', 'action' => 'view', $booksCategory->category->id]) : '' ?></p>
        </div>
    </div>
</div>
