<?php 
 include('header.php');
 
?>
<div class="wrapper row4">
  <main class="hoc container clear"> 
    <div class="content"> 
      <div class="scrollable">
      <form action="<?php echo FRONT_ROOT."Cinema/Remove"?> " method="post">
        <table style="text-align:center;">
          <thead>
            <tr>
           
            <th style="width: 20%;">Name</th>
            <th style="width: 20%;">Adress</th>
            <th style="width: 15%;">Ticket Value</th>
            <th style="width: 30%;" > Action</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($cinemaList as $Cinema)
          {
               ?>
            <tr>
                <td> <?php echo $Cinema->GetName(); ?> </td>
                <td> <?php echo $Cinema->GetAddress(); ?> </td>
                <td> <?php echo $Cinema->GetTicketValue(); ?> </td>
           
                <td>
                <button type="submit" name="id_Cinema" class="btn" value="<?php echo $Cinema->GetId_Cinema() ?>"style="font-size: 12px"> Remove </button>
                <button type="submit" name="" class="btn" value="Show Functions"style="margin-left: 10px"> Show Functions </button>
                </td>
                
            </tr> 
          <?php 
        }
         ?>                
        </tbody></form>
        </table> 
      </div>
    </div>
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<?php 
  include('footer.php');
?>