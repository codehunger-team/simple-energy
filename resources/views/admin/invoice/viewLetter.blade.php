<html>

    <head>
        <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
        <meta name=Generator content="Microsoft Word 15 (filtered)">
        <style>
            <!--
            /* Font Definitions */
            @font-face
            {
                font-family:"Cambria Math";
                panose-1:2 4 5 3 5 4 6 3 2 4;
            }
            @font-face
            {
                font-family:Calibri;
                panose-1:2 15 5 2 2 2 4 3 2 4;
            }
            @font-face
            {
                font-family:Cambria;
                panose-1:2 4 5 3 5 4 6 3 2 4;
            }
            @font-face
            {
                font-family:Tahoma;
                panose-1:2 11 6 4 3 5 4 4 2 4;
            }
            /* Style Definitions */
            p.MsoNormal, li.MsoNormal, div.MsoNormal
            {
                margin-top:0in;
                margin-right:0in;
                margin-bottom:10.0pt;
                margin-left:0in;
                line-height:115%;
                font-size:11.0pt;
                font-family:"Calibri",sans-serif;
            }
            h2
            {
                mso-style-link:"Heading 2 Char";
                margin-top:2.0pt;
                margin-right:0in;
                margin-bottom:0in;
                margin-left:0in;
                line-height:115%;
                page-break-after:avoid;
                font-size:13.0pt;
                font-family:"Cambria",serif;
                color:#365F91;
                font-weight:normal;
            }
            p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
            {
                margin-top:0in;
                margin-right:0in;
                margin-bottom:10.0pt;
                margin-left:.5in;
                line-height:115%;
                font-size:11.0pt;
                font-family:"Calibri",sans-serif;
            }
            p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
            {
                margin-top:0in;
                margin-right:0in;
                margin-bottom:0in;
                margin-left:.5in;
                line-height:115%;
                font-size:11.0pt;
                font-family:"Calibri",sans-serif;
            }
            p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
            {
                margin-top:0in;
                margin-right:0in;
                margin-bottom:0in;
                margin-left:.5in;
                line-height:115%;
                font-size:11.0pt;
                font-family:"Calibri",sans-serif;
            }
            p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
            {
                margin-top:0in;
                margin-right:0in;
                margin-bottom:10.0pt;
                margin-left:.5in;
                line-height:115%;
                font-size:11.0pt;
                font-family:"Calibri",sans-serif;
            }
            span.MsoIntenseEmphasis
            {
                color:#4F81BD;
                font-style:italic;
            }
            span.Heading2Char
            {
                mso-style-name:"Heading 2 Char";
                mso-style-link:"Heading 2";
                font-family:"Cambria",serif;
                color:#365F91;
            }
            .text-red{
             color:red;
            }
            .MsoChpDefault
            {
                font-family:"Calibri",sans-serif;
            }
            .MsoPapDefault
            {
                margin-bottom:10.0pt;
                line-height:115%;
            }
            /* Page Definitions */

            div.WordSection1
            {
                page:WordSection1;
            }
            /* List Definitions */
            ol
            {
                margin-bottom:0in;
            }
            ul
            {
                margin-bottom:0in;
            }
            -->
            .bg-image {
                /*background-color: red;*/
                background-image: url("{{ asset('letter/invoice-background.png') }}");
                background-repeat: no-repeat;
                background-position: center;
                display: block;
                margin: 0 auto;
            }
            p{
                font-size:16px !important;
            }
            p span{
                font-size:16px !important;
            }

            .offer-letter-footer{
                font-family:"Calibri",sans-serif;
                text-align: center;
            }

            .footer-break-line{
                background-color: black;
                height: 6px;
                max-width: 90%;
            }

            .footer-company-name{
                margin: 0;
                font-size: 28px;
                font-weight: 700;
            }
            .footer-company-address{
                margin: 0;
                font-size: 23px!important;
                font-weight: 400;
            }
            .footer-company-contact{
                color: red;
                margin-top: 5px;
                font-size: 17px!important;
                font-weight: 400;
            }

            page[size="A4"] {  
               width: 21cm;
               height: 29.7cm; 
            }

            @media  print {
                page {
                   margin: 0;
                   box-shadow: 0;
                }
                * {
                    -webkit-print-color-adjust: exact;
                  }
                body {
                    margin: 0;
                    border: initial;
                    border-radius: initial;
                    width: initial;
                    min-height: initial;
                    box-shadow: initial;
                    background: initial;
                    page-break-after: always;
                }
                .WordSection1{
                    padding: 11px;
                }
                @page {
                    size: A4 portrait;
                    margin: 0;
                    border: none !important;
                }
            }
            .header-divider{
                height: 10px;
                background:black;
            }
            .invoice-summary{
                background-color: lightgray;
                height: 70px;
                margin: 0 auto;
                margin-top: -10px;
            }
            .col-invoice{
                float: left;
                width: 33.3%;
                margin: 0 auto;
                margin-top: 27px;
                text-align: center;
            }
            .row:after {
                content: "";
                display: table;
                clear: both;
            }
            .invoice-customer{
                width: 90%;
                margin: 0 auto;
                margin-top: 30px;
            }
            .invoice-billing-details{
                width: 90%;
                margin: 0 auto;
                margin-top: 30px;
                text-align: left;
            }
            table{
                border-collapse: separate;
                border-spacing: 0 1em;
            }
            .invoice-billing-details thead th{
                padding-top: 10px;
                padding-bottom: 10px;
                border-top: 3px;
                border-top-style: solid;
                border-bottom: 3px;
                border-bottom-style: solid;
            }
            .invoice-billing-details tfoot td{
                padding-top: 10px;
                padding-bottom: 10px;
                border-top: 3px;
                border-top-style: solid;
                border-bottom: 3px;
                border-bottom-style: solid;
            }
            .invoice-billing-details tbody{
                margin-top:7px;
            }
            .blank{
                height: 29%;
            }
            .billing-customer{
                margin-top: 11px;
            }
            .invoice-footer{
                float: left;
                width: 50%;
                margin: 0 auto;
            }
            .footer-container{
                margin: 0 auto;
                width: 90%;
            }
            .invoice-footer-billing{
                float: right;
            }
            .invoice-footer-billing td{
                border-top-style: solid;
                border-top-color: lightgray;
                border-top-width: 1px;
            }
            .invoice-footer-billing .summary{
                width: 70%;
                padding-right: 100px;
            }
            .payment-qrcode{
                float: right;
                margin-right: 73%;
                margin-top: 30px;
            }
        </style>

    </head>

    <body lang=EN-US>

        <div class="WordSection1 bg-image">
            <img src="{{ asset('letter/invoice-header.png') }}" style="width: 100%;">
            <div class="margin-side">
                <hr class="header-divider">
                <div class="invoice-summary">
                    <div class="row">
                        <div class="col-invoice">
                            <b>Invoice Number:</b> {{ $invoice->id }}
                        </div>
                        <div class="col-invoice">
                            <b>Invoice Date:</b> {{ date('d/m/Y', strtotime($invoice->updated_at)) }}
                        </div>
                        <div class="col-invoice">
                            <b>Due Date:</b> {{ date('d/m/Y', strtotime($invoice->updated_at . '+7 days')) }}
                        </div>
                    </div>
                </div>
                <div class="invoice-customer">
                    <b>BILL TO</b><br>
                    <div class="billing-customer">
                        <b>{{ $invoice->user->name  ?? ''}}</b><br>
                        <span>E-Mail: {{ $invoice->user->email ?? ''}}</span>
                    </div>
                </div>
                    <table cellspacing="0" class="invoice-billing-details">
                        <thead>
                            <tr>
                                <th>Serial Number</th>
                                <th>Stamp Duty</th>
                                <th>Approval Fees</th>
                                <th>Registration Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $invoice->id }}</td>
                                <td>{{ $invoice->stamp_duty }}</td>
                                <td>{{ $invoice->approval_fee }}</td>
                                <td>{{ $invoice->registration_amount }}</td>
                            </tr>
                        </tbody>
                        @php
                        $totalAmount = $invoice->stamp_duty + $invoice->approval_fee + $invoice->registration_amount;
                        @endphp
                        <tfoot>
                            <tr>
                                <td colspan="3">SUB TOTAL</td>
                                <td>{{ $totalAmount }}</td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="footer-container">
                        <div class="row">
                            <div class="invoice-footer">
                                <b>PAYMENT QR CODE</b><br>
                                <img class="payment-qrcode" width="100" height="100" src="{{ asset('letter/qrcode.jpg') }}">
                            </div>
                            <div class="invoice-footer">
                                <table class="invoice-footer-billing">
                                    <tbody>
                                        <tr>
                                            <td class="summary"><b>Grand Total</b></td>
                                            <td>{{ $totalAmount }}</td>
                                        </tr>
                                        <tr>
                                            <td class="summary">Received Amount</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td class="summary"><b>Balance</b></td>
                                            <td>{{ $totalAmount }}</td>
                                        </tr>
                                        <tr>
                                            <td class="summary"><b>Current Balance</b></td>
                                            <td>{{ $totalAmount }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="invoice-footer-billing" style="text-align: right;">
                                    <b>Invoice Amount (in words)</b><br>
                                    <span>{{ $amountInWords }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <img src="{{ asset('letter/invoice-footer.png') }}" style="width: 100%; margin-top: 100px;">
        </div>
    </body>
    <script>
        window.onload = function () {
            window.print();
        }

    </script>
</html>