<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Signs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Proposals'), ['controller' => 'Proposals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proposal'), ['controller' => 'Proposals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="signs form large-9 medium-8 columns content">
    <?= $this->Form->create($sign) ?>
    <fieldset>
        <legend><?= __('Add Sign') ?></legend>
        <?php
            echo $this->Form->input('user_id');
            echo $this->Form->input('nome');
            echo $this->Form->input('hash');
            echo $this->Form->input('proposal_id', ['options' => $proposals]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
