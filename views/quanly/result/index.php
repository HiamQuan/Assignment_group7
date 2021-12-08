<!-- Datetimerange -->
<label>Date:</label>
<div class="input-group date" id="reservationdate" data-target-input="nearest">
    <input type="text" name="startdate" class="form-control datetimepicker-input" data-target="#reservationdate" />
    <div class="input-group-append">
        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
    </div>
    <input type="text" name="enddate" class="form-control datetimepicker-input" data-target="#reservationdate" />

</div>
</div>
<!-- Biểu đồ -->
<div class="col-12 mt-12">
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