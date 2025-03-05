<div>
    <h3><?= ($post->title) ?></h3>
    <p><?= ($post->content) ?></p>
</div>
<h2>Commentaires</h2>
<ul>
    <?php foreach ($post->comments as $comment): ?>
        <li>
            <p><?= $comment->user->username ?> </p>
            <p><?= $comment->content ?></p>
        </li>
    <?php endforeach; ?>
</ul>
<p><?= $this->Html->link('Revenir a la liste de post', ['controller' => 'posts', 'action' => 'index']) ?></p>
