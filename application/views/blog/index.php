<?php
  if (count($posts) >= 1)
  {
  foreach($posts as $post) : ?>
    <article class='post-list-item'>
      <header>
        <h4>
            <?php echo anchor("blog/details/{$post->id}", $post->title); ?>
        </h4>
      </header>
      <section class="body">
        <p>
          <?php echo $post->body; ?>
        </p>
      </section>
      <footer>
        <p>
           Created on: <?php echo $post->created; ?>
        </p>
      </footer>
    </article>
<?php endforeach;
  }
  else
  { ?>
  <article class="post-list-item">
    <header>
      <h4> There are no posts!  </h4>
    </header>
    <section class="body">
      <div class="actions">
        <p>
           <?php echo anchor("blog/create", "Add Entry"); ?>
        </p>
      </div>
    </section>
  </article>
<?php
  }
?>
