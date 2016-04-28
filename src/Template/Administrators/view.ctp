<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Administrator'), ['action' => 'edit', $administrator->domainid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Administrator'), ['action' => 'delete', $administrator->domainid], ['confirm' => __('Are you sure you want to delete # {0}?', $administrator->domainid)]) ?> </li>
        <li><?= $this->Html->link(__('List Administrators'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Administrator'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="administrators view large-9 medium-8 columns content">
    <h3><?= h($administrator->domainid) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Domainid') ?></th>
            <td><?= h($administrator->domainid) ?></td>
        </tr>
    </table>
</div>
