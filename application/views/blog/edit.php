<?php echo form_open($action) ;?>
    <header>
      <h3>Editing Post:</h3>
    </header>
    <p>
        <label for="title">Title</label><br />
        <input id="title" name="title" type="text"
            size="75" value="<?php echo $post->title; ?>" />
        <?php echo form_error('title', '<div class="error">', '</div>'); ?>
    </p>
    <p>
        <label for="body">Body</label><br />
        <textarea id="body" name="body" size="500"><?php echo $post->body; ?></textarea>
        <span id="chars"></span>
        <?php echo form_error('body', '<div class="error">', '</div>'); ?>
    </p>
    <p>
        <input type="submit" class="submit"/>
    </p>

</form>
