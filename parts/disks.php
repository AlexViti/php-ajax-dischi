<?php

foreach ($disks as $disk) {
  echo "<div class=\"disc\">
    <img src=\"$disk[poster]\" alt=\"$disk[title]\" width=\"300\">
    <div class=\"disc-info\">
      <h3>$disk[title]</h3>
      <h4>$disk[author]</h4>
      <p>$disk[year]</p>
    </div>
  </div>";
}