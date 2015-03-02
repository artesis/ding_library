<?php if (count($libraries)) :?>
<ul class="ding-library-opened-today">
  <?php foreach ($libraries as $library) :?>
      <li class="library">
        <div class="name"><?php print $library['title'];?></div>
        <?php if (isset($library['start_time']) && isset($library['end_time'])) :?>
          <div class="hours" original-title="<?php echo $library['notice']; ?>">
          <span class="start_time" title="<?php echo t('Opening time'); ?>"><?php echo $library['start_time']; ?></span> –
          <span class="end_time" title="<?php echo t('Closing time'); ?>"><?php echo $library['end_time']; ?></span>
          <?php if ($library['notice']) { ?>
            <span class="notice"><?php echo $library['notice']; ?></span>
          <?php } ?>
        </div>
        <?php else:?>
          <div class="hours"><?php print t('closed'); ?></div>
        <?php endif;?>
      </li>
  <?php endforeach;?>
</ul>
<?php else:?>
  <?php print t('No content available.'); ?>
<?php endif;?>
