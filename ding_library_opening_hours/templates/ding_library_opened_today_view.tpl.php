<?php if (count($libraries)) :?>
<ul class="ding-library-opened-today">
  <?php foreach ($libraries as $library) :?>
      <li class="library">
        <div class="name"><?php print $library['title'];?></div>
        <?php if (isset($library['start_time']) && isset($library['end_time'])) :?>
          <div class="hours"><?php print $library['start_time']; ?> - <?php print $library['end_time'];?></div>
        <?php else:?>
          <div class="hours"><?php print t('Closed'); ?></div>
        <?php endif;?>
      </li>
  <?php endforeach;?>
</ul>
<?php else:?>
  <?php print t('No content available.'); ?>
<?php endif;?>
