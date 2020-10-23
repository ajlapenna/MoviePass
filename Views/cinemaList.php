<?php
use Controllers\CinemaController;
use Models\Cinema;

$CinemaController = new CinemaController();

?>
<div>
    <table class="homeTable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Adress</th>
                <th>Ticket Value</th>
                <th style="max-width: 20%;">Action</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach($CinemaController->getCinemaList() as $Cinema){ ?>
            <tr>
                <td> <?php echo $Cinema->GetId_Cinema(); ?></td>
                <td> <?php echo $Cinema->GetName(); ?> </td>
                <td> <?php echo $Cinema->GetAddress(); ?> </td>
                <td> <?php echo $Cinema->GetTicketValue(); ?> </td>
                <td style="max-width: 20%;"> <form action=""><input type="submit" value="Delete" class="" style="center;background-color:#DC8E47;color:white; display:inline"/>
                <input type="submit" value="Show Functions" class="" style="background-color:#DC8E47;color:white;display:inline; padding: 0"/></form> </td>

            </tr> 
          <?php } ?>                            
        </tbody>
        <tfoot>

        </tfoot>
    </table>

</div>