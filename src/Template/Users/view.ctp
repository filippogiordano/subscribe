<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->username]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->username], ['confirm' => __('Are you sure you want to delete # {0}?', $user->username)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proposals'), ['controller' => 'Proposals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proposal'), ['controller' => 'Proposals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Signs'), ['controller' => 'Signs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sign'), ['controller' => 'Signs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->username) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($user->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Comments') ?></h4>
        <?php if (!empty($user->comments)): ?>
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
            <?php foreach ($user->comments as $comments): ?>
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
        <h4><?= __('Related Proposals') ?></h4>
        <?php if (!empty($user->proposals)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Testo') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Hash') ?></th>
                <th><?= __('Data') ?></th>
                <th><?= __('User Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->proposals as $proposals): ?>
            <tr>
                <td><?= h($proposals->id) ?></td>
                <td><?= h($proposals->testo) ?></td>
                <td><?= h($proposals->created) ?></td>
                <td><?= h($proposals->modified) ?></td>
                <td><?= h($proposals->hash) ?></td>
                <td><?= h($proposals->data) ?></td>
                <td><?= h($proposals->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Proposals', 'action' => 'view', $proposals->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Proposals', 'action' => 'edit', $proposals->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Proposals', 'action' => 'delete', $proposals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proposals->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Signs') ?></h4>
        <?php if (!empty($user->signs)): ?>
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
            <?php foreach ($user->signs as $signs): ?>
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
