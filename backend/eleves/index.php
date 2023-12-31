<?php $title = "Liste des Élèves"; ?>
<?php ob_start(); ?>

<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 d-flex justify-content-between">
                        <h2 class="pull-left">Liste des Élèves</h2>
                        <a href="../../frontend/page d'inscription/inscription.php" class="btn btn-success"><i class="bi bi-plus"></i> Ajouter</a>
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
                                <th>Action</th>
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
                                echo "<td>";
                                echo '<a href="read.php?id=' . $row['id'] . '" class="me-2"><i class="bi bi-eye"></i></a>';
                                echo '<a href="update.php?id=' . $row['id'] . '" class="me-2"><i class="bi bi-pencil"></i></a>';
                                echo '<a href="delete.php?id=' . $row['id'] . '"><i class="bi bi-trash"></i></a>';
                                echo "</td>";
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
    <?php require_once "../eleves/includes/copyright.php";?>
    
    <?php $content = ob_get_clean(); ?>
    <?php require('templates/layout.php') ?>

    

