<?php

foreach ($discs as $disc) {
  echo "<div class=\"disc\">
    <img src=\"$disc[poster]\" alt=\"$disc[title]\" width=\"300\">
    <div class=\"disc-info\">
      <h3>$disc[title]</h3>
      <h4>$disc[author]</h4>
      <p>$disc[year]</p>
      <p>$disc[genre]</p>
    </div>
  </div>";
}