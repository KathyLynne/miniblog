<article class="post-detail">
  <header>
    <h3>
      Viewing: <?php echo $post->title; ?>
    </h3>
  </header>
  <section class="body">
    <p>
        <?php echo $post->body; ?>
    </p>
    <div class="actions">
      <p>
        <?php echo anchor('blog/edit/'.$post->id, 'Edit'); ?>
      </p>
      <p>
        <?php echo anchor('blog/delete/'.$post->id, 'Delete',
            array('onclick' => "return confirm
                ('Are you sure want to delete this post?')")); ?>
      </p>
    </div>
  </section>
  <footer>
      <p>
        Created on: <?php echo $post->created; ?>
      </p>
  </footer>
</article>
