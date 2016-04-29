<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sign'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proposals'), ['controller' => 'Proposals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proposal'), ['controller' => 'Proposals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="signs index large-9 medium-8 columns content">
    <h3><?= __('Signs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('hash') ?></th>
                <th><?= $this->Paginator->sort('proposal_id') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($signs as $sign): ?>
            <tr>
                <td><?= h($sign->user_id) ?></td>
                <td><?= h($sign->nome) ?></td>
                <td><?= h($sign->created) ?></td>
                <td><?= h($sign->hash) ?></td>
                <td><?= $sign->has('proposal') ? $this->Html->link($sign->proposal->id, ['controller' => 'Proposals', 'action' => 'view', $sign->proposal->id]) : '' ?></td>
                <td><?= $this->Number->format($sign->id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sign->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sign->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sign->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sign->id)]) ?>
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
