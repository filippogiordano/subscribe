<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sign'), ['action' => 'edit', $sign->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sign'), ['action' => 'delete', $sign->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sign->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Signs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sign'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proposals'), ['controller' => 'Proposals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proposal'), ['controller' => 'Proposals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="signs view large-9 medium-8 columns content">
    <h3><?= h($sign->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Domainid') ?></th>
            <td><?= h($sign->domainid) ?></td>
        </tr>
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($sign->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Hash') ?></th>
            <td><?= h($sign->hash) ?></td>
        </tr>
        <tr>
            <th><?= __('Proposal') ?></th>
            <td><?= $sign->has('proposal') ? $this->Html->link($sign->proposal->id, ['controller' => 'Proposals', 'action' => 'view', $sign->proposal->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($sign->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($sign->created) ?></td>
        </tr>
    </table>
</div>
