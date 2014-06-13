<div class="margin-top-20 row-open">
  <div class="row">
    <div class="col col-xs-6 text-center">
      <div class="box">
        <i class="fa fa-clock-o fa-5x gradient"></i>
        <?php
          $times = array(
              'mon' => '9:00 AM - 06:00 PM',
              'tue' => '9:00 AM - 06:00 PM',
              'wed' => '9:00 AM - 06:00 PM',
              'thu' => '9:00 AM - 06:00 PM',
              'fri' => '9:00 AM - 06:00 PM',
              'sat' => '9:00 AM - 01:00 PM',
              'sun' => 'closed'
          );

          function compileHours($times, $timestamp) {
              $times = $times[strtolower(date('D',$timestamp))];
              if(!strpos($times, '-')) return array();
              $hours = explode(",", $times);
              $hours = array_map('explode', array_pad(array(),count($hours),'-'), $hours);
              $hours = array_map('array_map', array_pad(array(),count($hours),'strtotime'), $hours, array_pad(array(),count($hours),array_pad(array(),2,$timestamp)));
              end($hours);
              if ($hours[key($hours)][0] > $hours[key($hours)][1]) $hours[key($hours)][1] = strtotime('+1 day', $hours[key($hours)][1]);
              return $hours;
          }

          function isOpen($now, $times) {
              $open = 0; // time until closing in seconds or 0 if closed
              // merge opening hours of today and the day before
              $hours = array_merge(compileHours($times, strtotime('yesterday',$now)),compileHours($times, $now));

              foreach ($hours as $h) {
                  if ($now >= $h[0] and $now < $h[1]) {
                      $open = $h[1] - $now;
                      return $open;
                  }
              }
              return $open;
          }

          $now = strtotime('7:59pm');
          $open = isOpen($now, $times);

          if ($open == 0) {
              ?>
              <h2 class="gradient-red">Wir haben derzeit geschlossen.</h2>
              <?php
          } else {
              //echo "Is open. Will close in ".ceil($open/60)." minutes";
              ?>
              <h2 class="gradient">Wir haben für Sie Geöffnet.</h2>
              <?php
          }
        ?>
      </div>
    </div>
    <div class="col col-xs-6 text-center">
      <div class="box">
        <i class="fa fa-th-list fa-5x gradient"></i>
        <h2 class="gradient hidden-xs">Öffnungszeiten</h2>
        <ul class="list-unstyled">
          <li><strong>Mo bis Fr </strong>9.00 Uhr - 18.00 Uhr</li>
          <li><strong>Sa: </strong>9.00 Uhr - 13.00 Uhr</li>
          <li><strong>So: </strong>geschlossen</li>
        </ul>
      </div>
    </div>
  </div>
  </div>
</div>
