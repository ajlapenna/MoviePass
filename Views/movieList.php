<?php

use Controllers\MovieController;
use Models\Movie;

$MovieController = new MovieController();


?>
<div>
    <table>
        <thead>

        </thead>
        <tbody>
          <?php foreach($MovieController->getAPIList() as $movie){ ?>
            <tr>
                <td><img src="http://image.tmdb.org/t/p/w200<?php echo $movie->getImage();?>" alt="<?php echo $movie->getTitle(); ?>"></td>
                <td>Descripcion: <?php echo $movie->getOverview(); ?></td>

            </tr> 
          <?php } ?>                            
        </tbody>
        <tfoot>

        </tfoot>
    </table>

</div>