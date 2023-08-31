<?php $title = "Liste inscrits"; ?>
<?php ob_start(); ?>
<?php require_once('../eleves/includes/nav.php') ?>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 d-flex justify-content-between">
                        <h2 class="pull-left">Liste des Élèves</h2>
                        
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Num</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>E-mail</th>
                                <th>Sexe</th>
                                <th>Nationalité</th>
                                <th>Date de Naissance</th>
                                <th>Contact</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once "../eleves/includes/config.php";
                            require_once "../eleves/includes/db_connect.php";

                            $sql = "SELECT * FROM eleves";
                            $result = $pdo->query($sql);

                            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['Nom'] . "</td>";
                                echo "<td>" . $row['Prenoms'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['Sexe'] . "</td>";
                                echo "<td>" . $row['Nationalite'] . "</td>";
                                echo "<td>" . $row['DateNaissance'] . "</td>";
                                echo "<td>" . $row['Contact'] . "</td>";

                                echo "</tr>";
                            }

                            unset($result);
                            unset($pdo);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    
    <?php $content = ob_get_clean(); ?>
    
    <?php require('templates/layout.php') ?>
    <?php require_once "../eleves/includes/copyright.php";?>
