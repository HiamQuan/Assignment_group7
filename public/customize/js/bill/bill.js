console.log(4444);

$('.to_pay').on('click', function() {
  let redirectUrl = $(this).data('url');
  Swal.fire({
      title: `Xác nhận thanh toán ?`,
      showCancelButton: true,
      confirmButtonText: 'Có',
      cancelButtonText: `Hủy`,
  }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
          window.location.href = redirectUrl;
      }
  })
})
$('.btn-redesk').on('click', function() {
  let redirectUrl = $(this).data('url');
  let name = $(this).data('name');
    Swal.fire({
        title: `Bạn có chắc muốn chuyển qua bàn số ${name} không ?`,
        showCancelButton: true,
        confirmButtonText: 'Có',
        cancelButtonText: `Hủy`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            window.location.href = redirectUrl;
        }
    })
  })


  $(function() {
    $('input[name="daterange"]').daterangepicker({
    //   opens: 'left'
    }, function(start, end, label) {
      console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
      document.getElementById('startDate').value = start.format('YYYY-MM-DD');
      document.getElementById('endDate').value = end.format('YYYY-MM-DD');
      document.getElementById('daterange').value = start.format('YYYY-MM-DD') + ' - ' + start.format('YYYY-MM-DD');

    });
  });

  $('.myModal').on('shown.bs.modal', function () {
    $('.myInput').trigger('focus')
  })
  var model = document.querySelectorAll('.modal-details');
  // model.style.display = "none";
  
  function open_modal() {
    model.style.display = "block";
  }
