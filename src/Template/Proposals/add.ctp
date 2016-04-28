<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Proposals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Signs'), ['controller' => 'Signs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sign'), ['controller' => 'Signs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="proposals form large-9 medium-8 columns content">
    <?= $this->Form->create($proposal) ?>
    <fieldset>
        <legend><?= __('Add Proposal') ?></legend>
        <?php
            echo $this->Form->input('testo');
            echo $this->Form->input('hash');
            echo $this->Form->input('data');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
