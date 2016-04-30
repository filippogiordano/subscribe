<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Proposal'), ['action' => 'edit', $proposal->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Proposal'), ['action' => 'delete', $proposal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proposal->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Proposals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proposal'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Signs'), ['controller' => 'Signs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sign'), ['controller' => 'Signs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="proposals view large-9 medium-8 columns content">
    <h3><?= h($proposal->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Subject') ?></th>
            <td><?= h($proposal->subject) ?></td>
        </tr>
        <tr>
            <th><?= __('Hash') ?></th>
            <td><?= h($proposal->hash) ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $proposal->has('user') ? $this->Html->link($proposal->user->username, ['controller' => 'Users', 'action' => 'view', $proposal->user->username]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($proposal->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Data') ?></th>
            <td><?= h($proposal->data) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($proposal->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($proposal->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Testo') ?></h4>
        <?= $this->Text->autoParagraph(h($proposal->testo)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Comments') ?></h4>
        <?php if (!empty($proposal->comments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Proposal Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Testo') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proposal->comments as $comments): ?>
            <tr>
                <td><?= h($comments->id) ?></td>
                <td><?= h($comments->created) ?></td>
                <td><?= h($comments->modified) ?></td>
                <td><?= h($comments->proposal_id) ?></td>
                <td><?= h($comments->nome) ?></td>
                <td><?= h($comments->user_id) ?></td>
                <td><?= h($comments->testo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Comments', 'action' => 'view', $comments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Comments', 'action' => 'edit', $comments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Comments', 'action' => 'delete', $comments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Signs') ?></h4>
        <?php if (!empty($proposal->signs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('User Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Hash') ?></th>
                <th><?= __('Proposal Id') ?></th>
                <th><?= __('Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proposal->signs as $signs): ?>
            <tr>
                <td><?= h($signs->user_id) ?></td>
                <td><?= h($signs->nome) ?></td>
                <td><?= h($signs->created) ?></td>
                <td><?= h($signs->hash) ?></td>
                <td><?= h($signs->proposal_id) ?></td>
                <td><?= h($signs->id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Signs', 'action' => 'view', $signs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Signs', 'action' => 'edit', $signs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Signs', 'action' => 'delete', $signs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $signs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
