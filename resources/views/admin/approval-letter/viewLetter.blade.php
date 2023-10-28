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
            body{
                background-color:#fdeeeb!important;
            }
            .bg-image {
                /*background-color: red;*/
                background-image: url("{{ url('assets/letter')}}/bg.png");
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
            .margin-side{
                background: #fdeeeb;
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
                    background: #fdeeeb!important;
                }
                @page {
                    size: A4 portrait;
                    margin: 0;
                    border: none !important;
                }
            }
        </style>

    </head>

    <body lang=EN-US>

        <div class="WordSection1 bg-image">
            <img src="{{ url('public/letter')}}/offer-letter-header.jpg" style="width: 100%;">
            <div class="margin-side">
                <p class=MsoNormal style='line-height:normal'><b style="display: flex;
                                                                 justify-content: space-between;"s><span style='font-size:14.0pt;
                             color:#002060'>File No. <span class="text-red">{{$approval->file_no}}</span></span><span style='font-size:14.0pt;
                             color:#002060'>Date: {{ date('d-m-Y', strtotime($approval->approval_date)) }}</span></b></p>

                <p class=MsoNormal align=center style='text-align:center;
                   line-height:normal'><b><span
                            style='font-size:14.0pt;
                            color:#002060'>APPROVAL LETTER</span></b></p>

                <table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
                       style='border-collapse:collapse;
                       border:none'>
                    <tr style='height:29.75pt'>
                        <td width=315 valign=top style='width:236.55pt;
                            padding:0in 5.4pt 0in 5.4pt;
                            height:29.75pt'>
                            <p class=MsoNormal style='margin-bottom:0in;
                               line-height:normal'><b><span
                                        lang=EN-IN style='font-size:12.0pt;
                                        color:#70AD47;
                                        letter-spacing:.5pt'>&nbsp;</span></b></p>
                            <p class=MsoNormal style='margin-bottom:0in;
                               line-height:normal'><b><span
                                        lang=EN-IN style='font-size:12.0pt;
                                        color:black'>KYC Verification : <span class="text-red">{{$approval->kyc_status}}</span></span></b></p>
                            <p class=MsoNormal style='margin-bottom:0in;
                               line-height:normal'><b><span
                                        lang=EN-IN style='font-size:12.0pt;
                                        color:black'>Registration Fee : <span class="text-red">{{$approval->registration}}/-</span></span></b></p>
                        </td>
                        <td width=299 valign=top style='width:224.15pt;
                            padding:0in 5.4pt 0in 5.4pt;
                            height:29.75pt'>
                            <p class=MsoNormal align=right style='margin-bottom:0in;
                            text-align:right;
                            line-height:normal'><span lang=EN-IN><img width=167 height=45 id="Picture 9"
                                                 src="{{ url('assets/letter')}}/qrcode.jpg"></span></p>
                        </td>
                    </tr>
                </table>

                <p class=MsoNormal style='line-height:normal'><b><span style='color:#70AD47;
                                                                       letter-spacing:.5pt'>&nbsp;</span></b></p>

                <p class=MsoNormal style='line-height:normal'><b><span style='font-family:"Times New Roman",serif;
                                                                       color:red'>Subject :- Approval for Dealership of resell  Motor Vehicle .</span></b></p>

                <p class=MsoNormal style='margin-bottom:0in;
                   line-height:normal'><span
                        style='font-size:12.0pt;
                        font-family:"Times New Roman",serif;
                        color:#0F243E'>Dear
                        Sir/Madam, </span></p>

                <p class=MsoNormal style='margin-bottom:0in;
                   text-align:justify;
                   text-justify:
                   inter-ideograph;
                   line-height:normal'><span style='font-size:12.0pt;
                        font-family:
                        "Times New Roman",serif;
                        color:#0F243E'>            This is to certify that </span><span
                        style='font-size:12.0pt;
                        font-family:"Times New Roman",serif;
                        color:#00B0F0'>{{$approval->name}} </span><span style='font-size:12.0pt;
                        font-family:"Times New Roman",serif;
                        color:#0F243E'>is our authorized dealership/distributor. The above mentioned
                        firm has authorized by M/s Simpleenergy Private Limited for sale and service of
                        two wheeler electric motor vehicle. We are sending you this letter to confirm your Dealership
                        of Two wheeler electric motor vehicle has been approved by “ M/s Simpleenergy Private Limited” for </span><span style='font-size:12.0pt;
                        font-family:"Times New Roman",serif;
                                              color:#00B0F0'>{{$approval->year}} years </span><span style='font-size:12.0pt;
                        font-family:
                        "Times New Roman",serif;
                        color:#0F243E'>for sale and service in your city. </span></p>

                <p class=MsoNormal style='margin-bottom:0in;
                   text-align:justify;
                   text-justify:
                   inter-ideograph;
                   text-indent:.5in;
                   line-height:normal'><span style='font-size:
                        12.0pt;
                        font-family:"Times New Roman",serif;
                        color:#0F243E'>We are offering high
                        profit rates as well as risk-free dealership terms, which I am sure you will
                        find very intriguing. You will be glad to know that you will have interested in
                        a potential Dealer/Distributor with us. </span></p>

                <p class=MsoNormal style='margin-bottom:0in;
                   text-align:justify;
                   text-justify:
                   inter-ideograph;
                   text-indent:.5in;
                   line-height:normal'><span style='font-size:
                        12.0pt;
                        font-family:"Times New Roman",serif;
                        color:#0F243E'>Everything has
                        mentioned terms and conditions and about our company profile, which has
                        everything that you need to know about rule and regulation &amp; us and about
                        our products. This is very important to know for future work and relationship.
                        So however, should you need more details, please do not hesitate to ask any
                        question. </span></p>

                <p class=MsoNormal style='margin-bottom:0in;
                   text-align:justify;
                   text-justify:
                   inter-ideograph;
                   text-indent:.5in;
                   line-height:normal'><span style='font-size:
                        12.0pt;
                        font-family:"Times New Roman",serif;
                        color:#0F243E'>&nbsp;</span></p>

                <p class=MsoNormal style='margin-bottom:0in;
                   line-height:normal'><b><span
                            style='font-size:14.0pt;
                            font-family:"Times New Roman",serif;
                            color:#0F243E'>Terms
                            &amp; Conditions. </span></b></p>

                <p class=MsoListParagraphCxSpFirst style='margin-top:0in;
                   margin-right:0in;
                   margin-bottom:0in;
                   margin-left:21.3pt;
                   text-align:justify;
                   text-justify:inter-ideograph;
                   text-indent:-21.3pt;
                   line-height:normal'><span style='font-size:12.0pt;
                        font-family:"Times New Roman",serif;
                        color:#0F243E'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;
                        </span></span><span style='font-size:12.0pt;
                        font-family:"Times New Roman",serif;
                                            color:#0F243E'>The period of contract shall be for 15 years with effect from
                        the date of award of the issue Approval letter. </span></p>

                <p class=MsoListParagraphCxSpMiddle style='margin-top:0in;
                   margin-right:0in;
                   margin-bottom:0in;
                   margin-left:21.3pt;
                   text-align:justify;
                   text-justify:inter-ideograph;
                   text-indent:-21.3pt;
                   line-height:normal'><span style='font-size:12.0pt;
                        font-family:"Times New Roman",serif;
                        color:#0F243E'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;
                        </span></span><span style='font-size:12.0pt;
                        font-family:"Times New Roman",serif;
                                            color:#0F243E'>The Competent authority reserves the right to accept or reject
                        any or all of the dealership/distributor without assigning any reasons thereof.
                    </span></p>

                <p class=MsoListParagraphCxSpLast style='margin-top:0in;
                   margin-right:0in;
                   margin-bottom:0in;
                   margin-left:21.3pt;
                   text-align:justify;
                   text-justify:inter-ideograph;
                   text-indent:-21.3pt;
                   line-height:normal'><span style='font-size:12.0pt;
                        font-family:"Times New Roman",serif;
                        color:#0F243E'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;
                        </span></span><span style='font-size:12.0pt;
                        font-family:"Times New Roman",serif;
                                            color:#0F243E'>In case of any disputes, the decision of the competent authority
                        shall be final and binding on the dealership/distributor. </span></p>

                <p class=MsoNormal style='margin-top:0in;
                   margin-right:0in;
                   margin-bottom:0in;
                   margin-left:.5in;
                   text-align:justify;
                   text-justify:inter-ideograph;
                   line-height:
                   normal'><span style='font-size:12.0pt;
                        font-family:"Times New Roman",serif;
                        color:#0F243E'>&nbsp;</span></p>

                <p class=MsoNormal style='margin-bottom:0in;
                   text-align:justify;
                   text-justify:
                   inter-ideograph;
                   text-indent:.5in;
                   line-height:normal'><span style='font-size:
                        12.0pt;
                        font-family:"Times New Roman",serif;
                        color:#0F243E'>Looking forward to
                        your best future. </span></p>

                <p class=MsoNormal align=right style='margin-bottom:0in;
                   text-align:right;
                   text-indent:.5in;
                   line-height:normal'><span style='font-size:12.0pt;
                        font-family:
                        "Times New Roman",serif;
                        color:#0F243E'>Best Regards, </span></p>

                <p class=MsoNormal style='margin-bottom:0in;
                   text-align:justify;
                   text-justify:
                   inter-ideograph;
                   text-indent:.5in;
                   line-height:normal'><span style='font-size:
                        12.0pt;
                        font-family:"Times New Roman",serif;
                        color:#0F243E'>&nbsp;</span></p>

                <p class=MsoNormal style='text-align:justify;
                   text-justify:inter-ideograph;
                   line-height:normal'><b><span style='color:#70AD47;
                           letter-spacing:.5pt'>&nbsp;</span></b></p>

            </div>
            <img src="{{ url('public/assets/letter')}}/image006.png" style="width: 100%;">
            <div class="offer-letter-footer">
                <hr class="footer-break-line">
                <h1 class="footer-company-name">Simpleenergy Private Limited</h1>
                <p class="footer-company-address">
                    Head Office: # 76/4, Ground Floor, M-Block, 3<sup>rd</sup><br>
                    Avenue, East Anna Nagar, Chennai - 600102
                </p>
                <p class="footer-company-contact">
                    Website: https://simple1energy.in/<br>
                    E-Mail: care@simple1energy.in<br>
                    GSTIN: 07AIGPD0584J1ZB PAN: AALCM2906K
                </p>
            </div>
        </div>

    </body>
    <script>
        window.onload = function () {
            window.print();
        }

    </script>
</html>