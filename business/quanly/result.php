<?php
function week()
{
    // danh sách 7 ngày

    $listDays = [];
    for ($i = 0; $i < 7; $i -= -1) {
        $date = new DateTime('-' . $i . 'days');
        $dateFormat = $date->format('Y-m-d');
        $listDays[] = $dateFormat;
    }
    $listDays = array_reverse($listDays);

    // lấy tất cả hóa đơn trong từng ngày
    // chạy vòng lặp các hóa đơn, cộng tổng tiền từng ngày
    // add vào mảng
    $listMoney = [];
    foreach ($listDays as $day) {
        $getBillByDateQuery = "select*from bill where  date between '$day 0:0:0' and '$day 23:59:59'";
        $bill = pdo_query($getBillByDateQuery);
        $totalMoneyByDay = 0;
        foreach ($bill as $b) {
            $totalMoneyByDay += $b['amount'];
        }
        $listMoney[] = $totalMoneyByDay;
    }
    admin_render('result/index.php', compact('listDays','listMoney'), ['result/result.js','result/datepicker.js']);
}
function month()
{
    // danh sách 1 tháng
    $thisMonth= date('d');
    $listDays = [];
    for ($i = 0; $i < $thisMonth; $i -= -1) {
        $date = new DateTime('-' . $i . 'days');
        $dateFormat = $date->format('Y-m-d');
        $listDays[] = $dateFormat;
    }
    $listDays = array_reverse($listDays);

    // lấy tất cả hóa đơn trong từng ngày
    // chạy vòng lặp các hóa đơn, cộng tổng tiền từng ngày
    // add vào mảng
    $listMoney = [];
    foreach ($listDays as $day) {
        $getBillByDateQuery = "select*from bill where  date between '$day 0:0:0' and '$day 23:59:59'";
        $bill = pdo_query($getBillByDateQuery);
        $totalMoneyByDay = 0;
        foreach ($bill as $b) {
            $totalMoneyByDay += $b['amount'];
        }
        $listMoney[] = $totalMoneyByDay;
    }
    admin_render('result/index.php', compact('listDays','listMoney'), ['result/result.js','result/datepicker.js']);
}

function hour()
{
    // 1 ngày
    $thisday= date('h');
    $listDays = [];
    for ($i = 0; $i < $thisday; $i -= -1) {
        $date = new DateTime('-' . $i . 'hours');
        $dateFormat = $date->format('h:i:s');
        $listDays[] = $dateFormat;
    }
    $listDays = array_reverse($listDays);

    // lấy tất cả hóa đơn trong từng ngày
    // chạy vòng lặp các hóa đơn, cộng tổng tiền từng ngày
    // add vào mảng
    $listMoney = [];
    foreach ($listDays as $day) {
        $getBillByDateQuery = "select*from bill where  TIME(date) between '0:0:0' and '$day'";
        $bill = pdo_query($getBillByDateQuery);
        $totalMoneyByDay = 0;
        foreach ($bill as $b) {
            $totalMoneyByDay += $b['amount'];
        }
        $listMoney[] = $totalMoneyByDay;
    }
    admin_render('result/index.php', compact('listDays','listMoney'), ['result/result.js','result/datepicker.js']);
}
