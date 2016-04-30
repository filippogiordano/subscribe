<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Register'), ['controller'=>'users','action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Login'), ['controller'=>'users','action' => 'login']) ?></li>
    </ul>
</nav>
<div class="comments index large-9 medium-8 columns content">
    <h3><?= __('Sottoscrivi la tua iniziativa') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Html->image('volunteer.png') ?></th>
            </tr>
        </thead>
        <tbody>
    </table>
</div>
