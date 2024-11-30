<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Book $book
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Book'), ['action' => 'edit', $book->book_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Book'), ['action' => 'delete', $book->book_id], ['confirm' => __('Are you sure you want to delete # {0}?', $book->book_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Books'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Book'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="books view content">
            <h3><?= h($book->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($book->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Author') ?></th>
                    <td><?= h($book->author) ?></td>
                </tr>
                <tr>
                    <th><?= __('Book Id') ?></th>
                    <td><?= $this->Number->format($book->book_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Published Year') ?></th>
                    <td><?= $book->published_year === null ? '' : $this->Number->format($book->published_year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $book->price === null ? '' : $this->Number->format($book->price) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>