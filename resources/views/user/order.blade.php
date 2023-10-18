@extends('layouts.user')

@section('main-content')
@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger border-left-danger" role="alert">
    <ul class="pl-4 my-2">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<!-- Main page content-->
<div class="container-xl">

    <div class="card shadow">
        <div class="card-header">Order Now</div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" action="{{ url('/user/orders') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="POST">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th style="min-width:145px;">Name</th>
                                <th style="min-width:125px;">Model No.</th>
                                <th style="min-width:100px;">Color</th>
                                <th style="min-width:100px;">Quantity</th>
                                <th style="min-width:125px;">Price</th>
                                <th style="min-width:125px;">Total Amount</th>
                                <th style="min-width:125px;">Remarks</th>
                                <th><button id="add" type="button" class="btn btn-info">+</button></th>
                            </tr>
                        </thead>
                        <tbody id="newRow">
                        <tbody class="detail single-input">
                            <tr>
                                <td class="no">1</td>
                                <td class="no">{{ auth()->user()->name }}</td>
                                <td>
                                    <select id="model" class="model" name="model[]" required="">
                                        <option data-price="0" value="">Select Model</option>
                                        <option data-price="80895" value="Revolt RV300">Revolt RV300</option>
                                        <option data-price="86423" value="ORevolt RV400">Revolt RV400</option>
                                        <option data-price="86423" value="Revolt RV Cafe Racer">Revolt RV Cafe Racer
                                        </option>
                                    </select>
                                </td>
                                <td>
                                    <select name="model_color[]" required="">
                                        <option value="">Select Color</option>
                                        <option value="Red">Red</option>
                                        <option value="Black">Black</option>
                                        <option value="Black & Silver">Black & Silver</option>
                                    </select>
                                </td>
                                <td>
                                    <div class="input-text">
                                        <input type="number" class="quantity" name="quantity[]" required="">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-text">
                                        <input type="number" class="price" name="price[]" readonly="">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-text">
                                        <input type="text" class="amount" name="amount[]" readonly="" required="">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-text">
                                        <input type="text" class="remark" name="remark[]">
                                    </div>
                                </td>
                                <td><a href="javascript:void(0);" class="remove">Delete</td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th style="text-align:center;" id="total"></th>
                            <th></th>
                            <th></th>
                        </tfoot>
                        </tbody>
                    </table>
                    <div class="card-body text-center" id="saveOrder">
                        <button class="btn btn-primary" type="submit">Place Order</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    @endsection
    @push('scripts')
    <script type="text/javascript">
        $('#addBtn').on('click', function () {
            var html = '',
                i = 1;;
            html += '<tr>';
            html += '<td><select id="">';
            html += '<option>Select Model</option>';
            html += '<option>Revolt RV300</option>';
            html += '<option>Revolt RV400</option>';
            html += '<option>Revolt RV Cafe Racer</option>';
            html += '</select></td>';
            html += '<td><select id="">';
            html += '<option>Select Color</option>';
            html += '<option>Red</option>';
            html += '<option>Black</option>';
            html += '<option>Black & Silver</option>';
            html += '</select></td>';
            html += '<td><input type="number"></td>';
            html += '<td><input type="text"></td>';
            html += '<td><input type="text"></td>';
            html += '<td><input type="text"></td>';
            html += '<td></td>';
            html += '</tr>';
            $('#newRow').append(html);
            $("#saveOrder").show();
        });

        $(document).ready(function () {
            let price = 0;
            $('body').on('change', '.model', function () {
                var tr = $(this).parent().parent();
                tr.find('.price').val($(this).find(':selected').data('price'));
                price = $(this).find(':selected').data('price');
            });


            $('.details').click(function () {
                $('.info-data').hide();
                var target = $(this).data('target');
                $('#' + target).show();
                return false;
            });
            $('#add').click(function () {
                addnewrow();
            });
            $('body').on('click', '.remove', function () {
                $(this).parent().parent().remove();
            });
            $('body').on('keyup', '.quantity', function () {
                var tr = $(this).parent().parent().parent();
                var qty = parseFloat(tr.find('.quantity').val());
                //var price = parseFloat(tr.find('.price').val());

                var amount = (qty * price);

                tr.find('.amount').val(amount);
                total();
            });

            function total() {
                var t = 0;
                $('.amount').each(function (i, e) {
                    var amt = parseFloat($(this).val()) - 0;
                    t += amt;
                });
                $('#total').html(t);
            }

            function addnewrow() {
                var n = ($('.detail tr').length - 0) + 1;
                var tr = '<tr>' +
                    '                            <td class="no">' + n + '</td>' + 
                    '<td>{{ auth()->user()->name }}</td>' +
                    '                            <td>' +
                    '                                <select id="model" class="model" name="model[]" required="">' +
                    '                                        <option data-price="0" value="">Select Model</option>' +
                    '                                        <option data-price="45775" value="Revolt RV300">Revolt RV300</option>' +
                    '                                        <option data-price="47920" value="Revolt RV400">Revolt RV400</option>' +
                    '                                        <option data-price="49150" value="Revolt RV Cafe Racer">Revolt RV Cafe Racer</option>' +
                    '                                </select>' +
                    '                            </td>' +
                    '                            <td>' +
                    '                                <select name="model_color[]" required="">' +
                    '                                    <option value="">Select Color</option>' +
                    '                                    <option value="Red">Red</option>' +
                    '                                    <option value="Black">Black</option>' +
                    '                                    <option value="Black & Silver">Black & Silver</option>' +
                    '                                </select>' +
                    '                            </td>' +
                    '                            <td>' +
                    '                                <div class="input-text">' +
                    '                                    <input type="number" class="quantity" name="quantity[]" required="">' +
                    '                                </div>' +
                    '                            </td>' +
                    '                            <td>' +
                    '                                <div class="input-text">' +
                    '                                    <input type="number" class="price" name="price[]" readonly="">' +
                    '                                </div>' +
                    '                            </td>' +
                    '                            <td>' +
                    '                                <div class="input-text">' +
                    '                                    <input type="text" readonly="" class="amount" name="amount[]" required="">' +
                    '                                </div>' +
                    '                            </td>' +
                    '                            <td>' +
                    '                                <div class="input-text">' +
                    '                                    <input type="text" class="remark" name="remark[]">' +
                    '                                </div>' +
                    '                            </td>' +
                    '                            <td><a href="javascript:void(0);" class="remove">Delete</td>' +
                    '                        </tr>';



                $('.detail').append(tr);
                $("#saveOrder").show();
            }
        });

    </script>
    @endpush
