<?php if (count($libraries)) :?>
<ul class="ding-library-opened-today">
  <?php foreach ($libraries as $library) :?>
    <?php if (isset($library['start_time']) && isset($library['end_time'])) :?>
      <li class="library">
        <div class="name"><?php print $library['title'];?></div>
        <div class="hours"><?php print $library['start_time']; ?> - <?php print $library['end_time'];?></div>
      </li>
    <?php endif;?>
  <?php endforeach;?>
</ul>
<?php else:?>
  <?php print t('No content available.'); ?>
<?php endif;?>
