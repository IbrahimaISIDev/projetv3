<div class="containe">

    <div class="dev">
        <div class="promo">
            <span>Liste Des Promotions <span class="un">(6)</span></span>
        </div>
        <div class="input">
            <input type="text" placeholder="Recherche ici..." class="text">
            <i class="fa-solid fa-magnifying-glass"></i>

            <a href="cree-promo.html"> <button><i class="fa-solid fa-plus"></i>nouvel</button></a>

        </div>
    </div>


</div>
 <div class="container-promo">
<table>
    <thead>
        <tr>
            <th>Libellé</th>
            <th>Date Debut</th>
            <th>Date Fin</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>

        <?php

        include '../app/models/promos.php';
        $promos = LirePromoCSV($_SESSION['promotion']);
        $_SESSION['promotion'] = $_POST['promo'] ?? $_SESSION['promotion'];
        /* if (isset($_POST['prom'])){
            $_SESSION['promotion'] = $_POST['promo'] ?? $_SESSION['promotion'];
        }
 */
        foreach ($promos as $pro) : ?>
            <tr>
                <td><?= $pro['libelle'] ?></td>
                <td><?= $pro['DateDebut'] ?></td>
                <td><?= $pro['DateFin'] ?></td>
                <td><?php if ($pro['Id'] == $_SESSION['promotion']) {
                        echo 'activé';
                    } else echo 'desactivé' ?></td>
                <td>
                    <form action="" method="post">
                        <input type="checkbox" name="promo" value="<?= $pro['Id'] ?>" <?php if ($pro['Id'] == $_SESSION['promotion']) {
                                                                                            echo 'checked';
                                                                                        } ?>>
                        <input type="submit" name="promo" value="<?= $pro['Id'] ?>" style="position: absolute; left: 106.6rem; background: transparent; color: transparent; ">
                    </form>
                </td>

            </tr>
        <?php endforeach; ?>

    </tbody>
</table>
 </div>
