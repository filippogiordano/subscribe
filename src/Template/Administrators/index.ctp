<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Administrator'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="administrators index large-9 medium-8 columns content">
    <h3><?= __('Administrators') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('domainid') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($administrators as $administrator): ?>
            <tr>
                <td><?= h($administrator->domainid) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $administrator->domainid]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $administrator->domainid]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $administrator->domainid], ['confirm' => __('Are you sure you want to delete # {0}?', $administrator->domainid)]) ?>
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
