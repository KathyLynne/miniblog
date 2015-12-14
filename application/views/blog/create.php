<?php echo form_open($action) ;?>
    <header>
      <h3>Create a new post:</h3>
    </header>
    <p>
        <label for="title">Title</label><br />
        <input id="title" name="title" type="text"
            size="75" value="<?php echo set_value('title'); ?>" />
        <?php echo form_error('title', '<div class="error">', '</div>'); ?>
    </p>
    <p>
        <label for="body">Body</label><br />
        <textarea id="body" name="body" value="<?php echo set_value('body'); ?>"><?php echo $body; ?></textarea>
        <span id="chars"></span>
        <?php echo form_error('body', '<div class="error">', '</div>'); ?>
    </p>
    <p>
        <input type="submit" class="submit" />
    </p>

</form>
