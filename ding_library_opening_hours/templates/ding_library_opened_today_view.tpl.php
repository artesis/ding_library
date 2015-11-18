<?php if (count($libraries)) :?>
<ul class="ding-library-opened-today">
  <?php foreach ($libraries as $library) :?>
      <li class="library">
        <div class="name"><?php print $library['title'];?></div>
        <?php if(isset($library['hours'])): ?>
          <?php foreach ($library['hours'] as $hour): ?>
            <div class="hours" original-title="<?php echo $hour['notice']; ?>">
              <span class="start_time" title="<?php echo t('Opening time'); ?>"><?php echo $hour['start_time']; ?></span> –
              <span class="end_time" title="<?php echo t('Closing time'); ?>"><?php echo $hour['end_time']; ?></span>
              <?php if ($hour['notice']): ?>
                <span class="notice"><?php echo $hour['notice']; ?></span>
              <?php endif; ?>
          </div>
          <?php endforeach; ?>
        <?php else:?>
            <div class="hours"><?php print t('closed'); ?></div>
        <?php endif;?>
      </li>
  <?php endforeach;?>
</ul>
<?php else:?>
  <?php print t('No content available.'); ?>
<?php endif;?>
