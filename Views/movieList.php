<?php
use Controllers\MovieController;
use Models\Movie;

$MovieController = new MovieController();

?>
<div>
    <table class="homeTable">
        <thead>

        </thead>
        <tbody>
          <?php foreach($MovieController->getAPIList() as $movie){ ?>
            <tr>

                <td><img src="http://image.tmdb.org/t/p/w500<?php echo $movie->getImage();?>" alt="<?php echo $movie->getTitle(); ?>"></td>
                <td><h3><?php echo $movie->getTitle();?></h3><hr><p>Descripcion: <?php echo $movie->getOverview();?></p></td>
                <td><?php echo $movie->getLanguage();?></td>
            </tr> 
          <?php } ?>                            
        </tbody>
        <tfoot>

        </tfoot>
    </table>

</div>