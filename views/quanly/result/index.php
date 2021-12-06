<div class="col-12">
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <canvas id="myChart" width="400" height="400"></canvas>
        </div>
    </div>
</div>
<script>
    var listTitle = <?= json_encode($listDays) ?>;
    var listData = <?= json_encode($listMoney) ?>;
</script>