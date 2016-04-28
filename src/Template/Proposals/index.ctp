<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Proposal'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Signs'), ['controller' => 'Signs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sign'), ['controller' => 'Signs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="proposals index large-9 medium-8 columns content">
    <h3><?= __('Proposals') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('hash') //da eliminare?></th>
                <th><?= $this->Paginator->sort('data') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proposals as $proposal): ?>
            <tr>
                <td><?= $this->Number->format($proposal->id) ?></td>
                <td><?= h($proposal->created) ?></td>
                <td><?= h($proposal->modified) ?></td>
                <td><?= h($proposal->hash) ?></td>
                <td><?= h($proposal->data) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $proposal->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $proposal->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $proposal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proposal->id)]) ?>
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
