<!-- In templates/Articles/tags.php -->
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $articles
 */
?>
<h1>
    Articles tagged with
    <?= $this->Text->toList(h($tags), 'or') ?>
</h1>

<section>
    <?php foreach ($articles as $article): ?>
        <article>
            <!-- Use the HtmlHelper to create a link -->
            <h4><?= $this->Html->link(
                    $article->title,
                    ['controller' => 'Articles', 'action' => 'view', $article->slug]
                ) ?></h4>
            <span><?= h($article->created) ?></span>
        </article>
    <?php endforeach; ?>
</section>
