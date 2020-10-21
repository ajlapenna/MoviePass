<?php 
 include('header.php');

?>

<div class="wrapper row4">
<main class="container clear"> 
    <div class="content"> 
      <div id="comments" >
        <h2>ADD NEW CINEMA</h2>
        <form action="<?php echo  FRONT_ROOT."Cinema/AddCinema"?>" method="post">
          <table> 
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Adress</th>
                <th>Ticket Value</th>
              </tr>
            </thead>
            <tbody align="center">
              <tr>
                <td style="max-width: 100px;">
                  <input type="number" name="id" min="1" max="999" size="30" placeholder="ID del cine" required>
                </td>
                <td>
                  <input type="text" name="name" size="20" placeholder="Nombre del cine" required>
                </td>
                <td>
                  <input type="text" name="address" size="20" placeholder="Direccion del cine" required>
                </td>     
                <td>
                  <input type="number" name="ticketValue" size="10" placeholder="Precio por ticket" required>
                </td>         
              </tr>
              </tbody>
          </table>
          <div>
            <input type="submit" class="btn" value="Add" style="background-color:#DC8E47;color:white;"/>
            <br>
          </div>
        </form>
      </div>
    </div>
  </main>
</div>


<?php 
  include('footer.php');
?>