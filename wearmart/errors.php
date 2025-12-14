<?php if (count($errrors)>0)?>
<div class="error">
    <?php foreach($errrors as $error) :?>
        <p><?echo $error ?></p>
    <?php endforeach ?>
    </div>
    <?php endif?>