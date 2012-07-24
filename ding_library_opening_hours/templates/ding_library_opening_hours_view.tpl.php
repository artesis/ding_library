<div class="ding-library-opening-hours">
  <?php foreach ($days as $date => $info) :?>
    <?php if (isset($info['start_time']) && isset($info['end_time'])) :?>
    <div class="day">
      <div class="day-name"><?php print $info['day_name']; ?></div>
      <div class="hours"><?php print $info['start_time']; ?> - <?php print $info['end_time'];?></div>
    </div>
    <?php endif; ?>
  <?php endforeach; ?>
</div>
