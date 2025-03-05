<div>
    <h3><?= h($post->title) ?></h3>
    <p><?= h($post->content) ?></p>
</div>
<h2>Commentaires</h2>
<ul>
    <?php foreach ($post->comments as $comment): ?>
        <li>
            <p><?= $comment->content ?></p>
        </li>
    <?php endforeach; ?>
</ul>
<p><?= $this->Html->link('Revenir a la liste de post', ['controller' => 'posts', 'action' => 'index']) ?></p>
