@extends('layouts.layout')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mycard">
                    <div class="m-contents">
                        <div class="row">
                            <div class="col-12">
                                <div class="mc-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="mcb-invoice">
                                                <h2>Invoice</h2>
                                            </div>
                                            <table class="table-invoice">
                                                <tr>
                                                    <td class="b1">Invoce ID</td>
                                                    <td class="b5">001</td>
                                                </tr>
                                                <tr>
                                                    <td class="b1">Issue Date</td>
                                                    <td class="b5">sdf</td>
                                                </tr>
                                                <tr>
                                                    <td class="b1">Due Date</td>
                                                    <td class="b5">sdf</td>
                                                </tr>
                                                <tr>
                                                    <td class="b1">Subject</td>
                                                    <td class="b5">sdf</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mcb-from">
                                                <table class="table-invoice">
                                                    <tr>
                                                        <td class="b1 align-top" style="width:20%;">From</td>
                                                        <td class="b5">
                                                            <strong>Dsicovery Design</strong>
                                                            <p>41 St Vincent Place Glasgow G1 2ER Scotland</p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="mcb-for">
                                                <table class="table-invoice">
                                                    <tr>
                                                        <td class="b1 align-top" style="width:20%;">From</td>
                                                        <td class="b5">
                                                            <strong>Dsicovery Design</strong>
                                                            <p>41 St Vincent Place Glasgow G1 2ER Scotland</p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mcb-items">
                                                <form id="insert-form" action="" method="pos">
                                                    <table id="myTable" class="table order-list table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <td>Item Type</td>
                                                                <td>Description</td>
                                                                <td>Phone</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="col-sm-4">
                                                                    <select class="form-select form-select-sm select2" id="id_item_type">
                                                                        <option selected disabled>---</option>
                                                                        @foreach ($type_products as $key_tp => $data_tp)
                                                                            <option value="{!! $data_tp->id !!}">{!! $data_tp->type_name !!}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                                <td class="col-sm-4">
                                                                    <select class="form-select form-select-sm select2" id="id_product">
                                                                        <option selected disabled>---</option>
                                                                    </select>
                                                                </td>
                                                                <td class="col-sm-3">
                                                                    <input type="text" name="phone" class="form-control form-control-sm" />
                                                                </td>
                                                                <td class="col-sm-2"><a class="deleteRow"></a>
                                                                    <input type="button" class="btn btn-sm btn-block btn-outline-secondary"
                                                                        id="addrow" value="Add Row" />
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection


@section('perPageJs')
<script>
    $( document ).ready(function() {
        var dataItemType = '{{ $type_products }}';
        console.log(dataItemType);
        
        
    });

    // start script halaman invoice
    var counter = 0;

    $("#addrow").on("click", function () {
        // console.log('tes');
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><select class="form-select form-select-sm select2" aria-label=".form-select-sm example"> <option selected disabled>--Description--</option> <option value="1">One</option> <option value="2">Two</option> <option value="3">Three</option> </select></td>';
        cols += '<td><input type="text" class="form-control form-control-sm" name="mail' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control form-control-sm" name="phone' + counter + '"/></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-sm btn-block btn-outline-danger"  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;

        $("select").select2({
            theme: "bootstrap-5",
            containerCssClass: "select2--small", // For Select2 v4.0
            selectionCssClass: "select2--small", // For Select2 v4.1
            dropdownCssClass: "select2--small",
        });
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });

    function calculateRow(row) {
        var price = +row.find('input[name^="price"]').val();

    }

    function calculateGrandTotal() {
        var grandTotal = 0;
        $("table.order-list").find('input[name^="price"]').each(function () {
            grandTotal += +$(this).val();
        });
        $("#grandtotal").text(grandTotal.toFixed(2));
    }
    // end script halaman invoice


    // script option select


    $("#id_item_type").change(function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();

        var item_type_id = $(this).val();
        // console.log(id_item_type);
        var formData = {
                id: item_type_id
            };
            // console.log(formData);
            var type = "POST";
            var ajaxurl = "loaddatatypeproduct";
        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'html',
            success: function(result){
            // console.log(result);
            $('select#id_product').html(result);
            }
        });
    });

</script>

@endsection