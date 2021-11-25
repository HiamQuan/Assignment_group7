<div class="location">
    <?php
    foreach ($location as $l):
    ?>
    <button><a href="<?= STAFF_URL . 'nhanvien/desk?location=' . $l['location'] ?>">Tầng <?=$l['location']?></a></button>
    <?php endforeach ?>
</div>