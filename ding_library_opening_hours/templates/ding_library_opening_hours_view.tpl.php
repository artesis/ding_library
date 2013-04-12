<div class="ding-library-opening-hours">
  <?php foreach ($days as $date => $info) :?>
    <div class="day">
      <div class="day-name"><?php print $info['day_name']; ?></div>
      <div class="hours">
        <?php if (isset($info['start_time']) && isset($info['end_time'])) :?>
          <?php print $info['start_time']; ?> - <?php print $info['end_time'];?>
        <?php else: ?>
          <?php print t('closed'); ?>
        <?php endif; ?>
      </div>
    </div>
  <?php endforeach; ?>
</div>
