<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sign->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sign->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Signs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Proposals'), ['controller' => 'Proposals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proposal'), ['controller' => 'Proposals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="signs form large-9 medium-8 columns content">
    <?= $this->Form->create($sign) ?>
    <fieldset>
        <legend><?= __('Edit Sign') ?></legend>
        <?php
            echo $this->Form->input('domainid');
            echo $this->Form->input('nome');
            echo $this->Form->input('hash');
            echo $this->Form->input('proposal_id', ['options' => $proposals]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
