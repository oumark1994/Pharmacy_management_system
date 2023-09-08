<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Kolla Pharmacy Management System
   </title>
  <!--     Fonts and icons     -->

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link rel="stylesheet" href="{{asset('admin/css/styles.min.css')}}" />
  <link rel="stylesheet" href="{{asset('admin/css/styles.css')}}" />

</head>

<body>
  <!--  Body Wrapper -->
  
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
@yield('content')

  <!--   Core JS Files   -->
  <!-- <script src="{{asset('admin/js/jquery.js')}}"></script> -->
  <script src="{{asset('admin/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
  <script src="{{asset('admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('admin/js/app.min.js')}}"></script>
  <script src="{{asset('admin/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{asset('admin/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{asset('admin/js/dashboard.js')}}"></script>

  
  <script type="text/javascript">
    $(document).ready(function () {
      // var subcategory = $('#inputSubcategory')
      // $('#sub').hide();
        $('#medecine_id').on('change',function(){
            var medecine_id = this.value;
           
            $.ajax({
                url:"{{route('getmedecinebyid')}}",
                data:{
                  medecine_id:$(this).val()
                },
                success: function (res) {
                  // $('#sub').show();
                    // $('#inputSubcategory').html('<option value="">Select Subcategory</option>');
                    $.each(res, function (key, value) {
                      // $('#qty').append('<input type="text" readonly name="qty" class="form-control" value="'+value.qty+'"</input>');
                      // $('#price').append('<input type="text" readonly name="price" class="form-control" value="'+value.price+'"</input>');
                      // $('#quantity').append('<input type="text" placeholder="Quantity" name="quantity" class="form-control"</input>');
                      $('#tbody').append(`
                      <tr>
                      <td><input type="text" readonly name="medecine_name[]" class="form-control" value=`+value.medecine_name+`></input></td>
                      <input type="hidden"  name="medecine_id[]" class="form-control" value=`+value.id+`></input>


                      <td><input type="text" readonly name="capacity[]" class="form-control" value=`+value.type+`></input>
                          </td>
                          <td><input type="text" readonly name="qty[]" class="form-control" value=`+value.qty+`></input></td>
                          <td><input type="text" readonly name="price[]" class="form-control" value=`+value.price+`></input></td>
                          <td><input type="text" readonly name="expiry_date[]" class="form-control" value=`+value.expiry_date+`></input></td>
                          <td><input type="number" name="quantity[]" class="form-control" name="quantity" placeholder="Quantity"></input></td>
                        <td><a class="btn btn-danger" id="remove">Remove</a></td>
                        </tr>
                       `)
                    });
                }
            });
        });   
        
      
    });

  $(document).on('click','#remove',function(e){
    e.preventDefault();
    let row_item = $(this).parent().parent();
    $(row_item).remove();
  })
</script>
<script>
  function calculateBalance(){
  var total = document.getElementById("total");
  var amount = document.getElementById("amount");
  var balance = document.getElementById("balance");
    balance.value = amount.value - total.value;
    if(balance.value < 0){
      balance.value = 0;
    }
  }
  function calculateProfit(){
    var buy = document.getElementById("buy");
  var sell = document.getElementById("sell");
  var profit = document.getElementById("profit");
    profit.value = sell.value - buy.value;
    if(profit.value < 0){
      profit.value = 0;
    }

  }
</script>
@if(Session::has('message'))
<script >
  toastr.options={
  "progressBar":true,
  "closeButton":true,
}
toastr.success("{{Session::get('message')}}",'Success!',{timeOut:12000})
</script>
@elseif(Session::has('error'))
<script >
  toastr.options={
  "progressBar":true,
  "closeButton":true,
}
toastr.error("{{Session::get('error')}}",'Danger!',{timeOut:12000})
</script>
@endif


</body>

</html>