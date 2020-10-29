<?php
include('header.php');
include('nav-bar.php');
?>
<div class="wrapper row4">
    <main class="container clear">
        <div class="content">
            <div id="comments">
                <h2>ADD NEW SCREENING</h2>
                <form action="<?php echo  FRONT_ROOT . "Screening/AddScreening" ?>" method="post" style="padding: 2rem !important;">
                    <table style="width: 60%;">
                        <thead>
                            <tr>
                                <?php if ($message) {
                                    echo "<h3>" . $message . "</h3><br>";
                                } ?>
                            </tr>
                            <tr>
                                <th>Cinema</th>
                                <th>Day</th>
                                <th>Horario</th>
                                <th>Inicio</th>
                                <th>Fin</th>
                            </tr>
                        </thead>
                        <tbody align="center">
                            <tr>
                                <td style="max-width: 100px; align-items: center;">
                                    <select name="cinema" id="cinema_screening" style="width: 100%; margin-top: 10px;" required>
                                            <option value="" disable_selected>--Choose a Cinema--</option>
                                            <option value="Cine1">Cine1</option>
                                            <option value="Cine2">Cine2</option>
                                            <option value="Cine3">Cine3</option>
                                    </select>
                                </td>
                                <td>
                                <select name="cinema" id="cinema_screening" style="width: 100%; margin-top: 10px;" required>
                                            <option value="" disable_selected>--Choose a day--</option>
                                            <option value="Lunes">Lunes</option>
                                            <option value="Martes">Martes</option>
                                            <option value="Miercoles">Miercoles</option>
                                            <option value="Jueves">Jueves</option>
                                            <option value="Viernes">Viernes</option>
                                            <option value="Sabado">Sabado</option>
                                            <option value="Domingo">Domingo</option>
                                    </select>
                                </td>
                                <td>
                                <select name="cinema" id="cinema_screening" style="width: 100%; margin-top: 10px;" required>
                                            <option value="" disable_selected>--Choose a screening--</option>
                                            <option value="Lunes">Horario1 (14:10)</option>
                                            <option value="Lunes">Horario2 (18:15)</option>
                                            <option value="Lunes">Horario3 (22:15)</option>
                                    </select>
                                </td>
                                </td>
                                <td>
                                <input type="date" id="date" style="width: 100%;" required>
                                </td>
                                <td>
                                <input type="date" id="date" style="width: 100%;" required>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div>
                        <input type="submit" class="btn" value="Add Screening" style="background-color:#DC8E47;color:white;" />
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