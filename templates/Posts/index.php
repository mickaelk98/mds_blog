<h1>Posts</h1>

<ul>
    <?php foreach ($posts as $post): ?>
        <li>
            <div>
                <h3><?= h($post->title) ?></h3>
                <p><?= h($post->content) ?></p>
                <p><?= $this->Html->link('Voir le post', ['action' => 'post', $post->id]) ?></p>
            </div>
        </li>
        
    <?php endforeach; ?>
</ul>