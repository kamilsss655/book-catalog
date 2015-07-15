<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Authors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="authors form large-10 medium-9 columns">
    <?= $this->Form->create($author) ?>
    <fieldset>
        <legend><?= __('Add Author') ?></legend>
        <?php
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('birthdate', array(
                'label' => 'Date of birth', 
                'dateFormat' => 'DMY',
                'minYear' => date('Y') - 100,
                'maxYear' => date('Y') - 10));

            echo $this->Form->input('active');
            echo $this->Form->input('books._ids', ['options' => $books]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
