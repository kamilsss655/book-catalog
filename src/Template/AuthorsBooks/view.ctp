<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Authors Book'), ['action' => 'edit', $authorsBook->book_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Authors Book'), ['action' => 'delete', $authorsBook->book_id], ['confirm' => __('Are you sure you want to delete # {0}?', $authorsBook->book_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Authors Books'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Authors Book'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Authors'), ['controller' => 'Authors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Author'), ['controller' => 'Authors', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="authorsBooks view large-10 medium-9 columns">
    <h2><?= h($authorsBook->book_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Book') ?></h6>
            <p><?= $authorsBook->has('book') ? $this->Html->link($authorsBook->book->title, ['controller' => 'Books', 'action' => 'view', $authorsBook->book->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Author') ?></h6>
            <p><?= $authorsBook->has('author') ? $this->Html->link($authorsBook->author->id, ['controller' => 'Authors', 'action' => 'view', $authorsBook->author->id]) : '' ?></p>
        </div>
    </div>
</div>
