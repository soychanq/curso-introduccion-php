<?php

use App\Models\{Project, Printable};

$projects = Project::all();

      function printProjects($projects) {
        echo '<li class="work-position">';
        echo '<h5>' . $projects->title . '</h5>';
        echo '<p>' . $projects->description . '</p>';
        echo '<p>' . $projects->getDurationAsString() . '</p>';
        echo '<strong>Achievements:</strong>';
        echo '<ul>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '</ul>';
        echo '</li>';
      }