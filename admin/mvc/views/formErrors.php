<?php if (count($data['errors']) > 0) : ?>
    <div class="msg error">
        <?php foreach ($data['errors'] as $error) : ?>
            <li><?php echo $error; ?></li>
        <?php endforeach; ?>
    </div>
<?php endif; ?>