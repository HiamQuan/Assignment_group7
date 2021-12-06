<div class="location">
    <?php
    foreach ($location as $l) : ?>
        <button class="btn btn-primary"><a href="<?= STAFF_URL . 'desk?location=' . $l['location'] ?>">Tầng <?= $l['location'] ?></a></button>
    <?php endforeach ?>
</div>

<div class="list-desk d-flex justify-content-center" >
    <?php
    foreach ($dsBan as $d) :
    $bill_id = isset($_SESSION['bill-id'][$d['desk_id']])? '&bill-id='.$_SESSION['bill-id'][$d['desk_id']]: NULL;

    ?>
        <?php
         if ($d['status'] == "đã đặt") {
            echo '<div class="box-desk-3 card text-center d-flex-column justify-content-center justify-content-center animate__animated animate__fadeIn animate__slower" style="width: 12rem;">';
        }
        if($d['status'] == "trống") {
            echo '<div class="box-desk card text-center d-flex-column justify-content-center animate__animated animate__fadeIn animate__slower" style="width: 12rem;">';
        }
        if ($d['status'] == "chưa đặt") {
            echo '<div class="box-desk-2 card text-center d-flex-column justify-content-center justify-content-center animate__animated animate__fadeIn animate__slower" style="width: 12rem;">';
        }
        if ($d['status'] == "chưa dọn") {
            echo '<div class="box-desk-4 card text-center d-flex-column justify-content-center justify-content-center animate__animated animate__fadeIn animate__slower" style="width: 12rem;">';
        }
        ?>
        <a href="<?= STAFF_URL . 'order?table-id=' . $d['desk_id'].$bill_id ?>">Bàn số <?= $d['desk_id'] ?></a> &nbsp;

</div>
<?php endforeach ?>

</div>