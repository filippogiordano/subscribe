<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $administrator->domainid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $administrator->domainid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Administrators'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="administrators form large-9 medium-8 columns content">
    <?= $this->Form->create($administrator) ?>
    <fieldset>
        <legend><?= __('Edit Administrator') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
