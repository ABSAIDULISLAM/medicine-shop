@extends('admin.layouts.master')
@section('title', 'payment-report')

@section('content')
<style>
    @media print {
        #printbtn {
            display :  none;
        }
        #reloadButton {
            display :  none;
        }
        #main-footer{
            display :  none;
        }
        #search{
            display :  none;
        }
        a[href]:after {
            content: none !important;
        }
    }
    .table{width:100%;} .table thead, .table tbody{border:1px solid #000;}
    .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {padding:5px;line-height:1.42857143;border:1px solid #000;}
</style>

    <section class="content-header">
        <h1>
            Payment Report
            <small> Payment Report</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Payment Report</a></li>
            <li class="active"> Payment Report</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <div align="right">
                    <button id ="printbtn" type="button" value="Print this page" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                    <button id ="reloadButton" onclick="myFunction()">Reload page</button>
                </div>
                <script>
                    function myFunction() {
                        location.reload();
                    }
                </script>
                <h4 align="center" class="page-header" style="text-transform:uppercase;">
                    <img src="company_logo/" alt="logo" height="50px" width="150px" style="height: 60px;width: 350px;"><br/>
                    <span style="font-size: 15px">
                                            </span><br/>
                    <span style="font-size: 15px">
                        Payment Report
                    </span><br/>
                    <span style="font-size: 15px">
                       Date : 01-03-2024  To 21-03-2024                    </span>
                </h4>
            </div>
            <div  style="margin-right:10px;margin-top:10px;padding:10px;text-align: right" id="search">
                <form method="POST" action="">
                    <div class="row">
                        <div class="form-group col-md-2"></div>
                        <div class="form-group col-md-3">
                            <div class="form-group">
                                <label for="datepicker4">From Date </label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="from_date" class="form-control pull-right" id="datepicker4" autocomplete="off" required="">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="form-group">
                                <label for="datepicker2">To Date </label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="to_date" class="form-control pull-right" id="datepicker2" autocomplete="off" required="">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="form-group">
                                <label for="supplier_id">Supplier Name</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <select name="supplier_id" id="supplier_id" class="form-control select2" style="width: 100%;">
                                        <option value="0">ALL</option>
                                                                                    <option value="1038"> BIO-TRADE INTERNATIONAL</option>
                                                                                    <option value="2"> Boehringer Ingelheim Pharmaceutical</option>
                                                                                    <option value="1034"> Nestle</option>
                                                                                    <option value="3">245-3410(V)-98</option>
                                                                                    <option value="4">A/S Lundbeck Export DivisionLtd., Denmark</option>
                                                                                    <option value="5">Abbott HealthcareProducts,Netherlands</option>
                                                                                    <option value="7">Abbott Laboratories Ltd., Pakistan</option>
                                                                                    <option value="8">Abbott Laboratories Ltd., USA</option>
                                                                                    <option value="9">Abbott Laboratories, UK</option>
                                                                                    <option value="10">Ablation Pharmaceuticals Ltd.</option>
                                                                                    <option value="1240">ABRAR ph</option>
                                                                                    <option value="1239">Abrar pharma</option>
                                                                                    <option value="1241">ABRAR PHARMA</option>
                                                                                    <option value="11">Abul Khair Milk Products Ltd.</option>
                                                                                    <option value="12">abul khayer</option>
                                                                                    <option value="13">Ace Chemicals,UK</option>
                                                                                    <option value="1036">ACI</option>
                                                                                    <option value="14">ACI Limited</option>
                                                                                    <option value="1037">ACI Toiletic</option>
                                                                                    <option value="15">Acme Laboratories Ltd.</option>
                                                                                    <option value="16">Acme Specialized Pharmaceuticals Ltd.</option>
                                                                                    <option value="17">Actavis Italy SpA, Italy</option>
                                                                                    <option value="18">Actavis, UK</option>
                                                                                    <option value="19">Active Fine Chemicals Ltd</option>
                                                                                    <option value="20">Ad-din Pharmaceuticals Ltd.</option>
                                                                                    <option value="21">Adco Pharmaceuticals & Chemicals Ltd.</option>
                                                                                    <option value="22">Adcock Ingram</option>
                                                                                    <option value="6">Adron Pharmaceuticals (Unani)	</option>
                                                                                    <option value="23">Advanced Medical Optics UppsalaAB, Sweden</option>
                                                                                    <option value="24">Aesica Queenborough Limited, UK</option>
                                                                                    <option value="25">Aexim Pharmaceuticals Ltd.</option>
                                                                                    <option value="26">AL AMIN & SONS</option>
                                                                                    <option value="27">Al-Madina Pharmaceuticals Ltd.</option>
                                                                                    <option value="28">Albert David (BD) Limited</option>
                                                                                    <option value="29">Albion Laboratories Ltd.</option>
                                                                                    <option value="30">Alco Pharma Limited</option>
                                                                                    <option value="31">Alcon Cannada Inc., Canada</option>
                                                                                    <option value="32">Alcon Laboratories Inc, USA</option>
                                                                                    <option value="33">Alkad Laboratories</option>
                                                                                    <option value="34">Allergan Inc, USA</option>
                                                                                    <option value="35">Allergan Pharmaceuticals Ltd.,Ireland</option>
                                                                                    <option value="36">Allergan Sales LLC, USA</option>
                                                                                    <option value="37">Allied Pharmaceuticals Ltd.</option>
                                                                                    <option value="38">Alpha Pharmaceuticals</option>
                                                                                    <option value="39">Alpha Therapeutic Corporation,USA</option>
                                                                                    <option value="40">Ambee Pharmaceuticals Ltd.</option>
                                                                                    <option value="41">Amico Laboratories Ltd.</option>
                                                                                    <option value="42">AMS Trading</option>
                                                                                    <option value="43">Amulet Pharmaceuticals Ltd.</option>
                                                                                    <option value="44">Anhui Kangning Industrial (Group)Co. Ltd., China</option>
                                                                                    <option value="45">Anji Sunlight Medical Products Co.Ltd. China</option>
                                                                                    <option value="46">Antec International Ltd., U.K.</option>
                                                                                    <option value="47">Apollo Pharmaceutical Laboratories Ltd.</option>
                                                                                    <option value="48">Apothecon</option>
                                                                                    <option value="49">Apu Da</option>
                                                                                    <option value="50">Aristopharma Limited</option>
                                                                                    <option value="51">Asia Pacific Medicals</option>
                                                                                    <option value="52">ASIAN CONSUMER CARE (PVT.) LTD</option>
                                                                                    <option value="53">Asiatic Laboratories Ltd.</option>
                                                                                    <option value="54">Aspen Bad Oldesloe, Germany</option>
                                                                                    <option value="55">Asta Medica AG, Germany</option>
                                                                                    <option value="56">Astra Biopharmaceuticals Ltd.</option>
                                                                                    <option value="57">Astral Pharmaceuticals Industries,India</option>
                                                                                    <option value="58">Astrazeneca Pharmaceutical company</option>
                                                                                    <option value="59">Aventis Behring GmbH, Germany</option>
                                                                                    <option value="60">Aventis Pasteur S.A. France</option>
                                                                                    <option value="61">Aventis Pharma, Dagenham, UK</option>
                                                                                    <option value="62">Aventis Pharma, France</option>
                                                                                    <option value="63">Aventis Pharma, Germany</option>
                                                                                    <option value="64">Aventis Pharma, UK</option>
                                                                                    <option value="65">Avert Pharma Ltd.</option>
                                                                                    <option value="66">Axcentive Sarl, France</option>
                                                                                    <option value="67">Ayerst Wyeth PharmaceuticalsInc.,</option>
                                                                                    <option value="68">Aztec Pharmaceuticals</option>
                                                                                    <option value="69">B S M I (Bismillah S M  Industries)</option>
                                                                                    <option value="70">B S M I (Bismillah S M Industries)</option>
                                                                                    <option value="71">B. Braun Melsungen Ag, Germany</option>
                                                                                    <option value="72">Bangladesh Antibiotic Industries Limited</option>
                                                                                    <option value="73">Bangladesh Immunity Co.</option>
                                                                                    <option value="74">Bangladesh Machine Tools Factory Ltd.(BMTFL)</option>
                                                                                    <option value="75">Bangladesh Oxygen Ltd.</option>
                                                                                    <option value="76">Bashundhaara</option>
                                                                                    <option value="77">Bashundhara Paper Mills Ltd.</option>
                                                                                    <option value="78">Bashundhora </option>
                                                                                    <option value="79">Baxter Ag, Australia</option>
                                                                                    <option value="80">Baxter AG, Austria</option>
                                                                                    <option value="81">Baxter Healthcare SA, Singapore</option>
                                                                                    <option value="82">Baxter Oncology Gmbh, Germany</option>
                                                                                    <option value="83">Bayer Pharma AG Berlin,Germany</option>
                                                                                    <option value="84">Bayer SChering Pharma Oy,Finland</option>
                                                                                    <option value="85">BC Laboratories Ltd.</option>
                                                                                    <option value="86">Beacon Pharmaceuticals Ltd.</option>
                                                                                    <option value="87">Becton Dickinson and Company,USA</option>
                                                                                    <option value="88">Behringwerke AG, Germany</option>
                                                                                    <option value="89">Beijing Fresenius KabiPharmacutical co. Ltd., China</option>
                                                                                    <option value="90">Belsen Pharmaceuticals Ltd.</option>
                                                                                    <option value="91">Bene Arzneimittel GmbH,Germany</option>
                                                                                    <option value="92">Bengal Techno Pharma Ltd.</option>
                                                                                    <option value="93">Benham Pharmaceuticals Ltd.</option>
                                                                                    <option value="94">Berna Biotech Ltd., Switzerland</option>
                                                                                    <option value="95">Berna Biotech, Korea</option>
                                                                                    <option value="96">Bestar Laboratories (Singapore)Pte Ltd., Singapore</option>
                                                                                    <option value="97">Beximco Pharmaceuticals Ltd.</option>
                                                                                    <option value="98">Bexter(Unani)</option>
                                                                                    <option value="99">Bikalpa Friends Pharmaceuticals Ltd.</option>
                                                                                    <option value="100">Bio Pharma Laboratories Ltd.</option>
                                                                                    <option value="101">Bioderma</option>
                                                                                    <option value="102">Biogen & Co. Ltd., Korea</option>
                                                                                    <option value="103">Bioland Technology</option>
                                                                                    <option value="104">Biomune Company, USA</option>
                                                                                    <option value="105">Biomune de Mexico S.de R L CV., Mexico</option>
                                                                                    <option value="106">Biopharm, Research Institute ofBiopharmacy and veterinaryDrugs, Czech Republic</option>
                                                                                    <option value="1231">BIOPHARMA</option>
                                                                                    <option value="107">Biopharma Bangladesh Limited</option>
                                                                                    <option value="108">Bios Pharmaceutical Ltd.</option>
                                                                                    <option value="109">Bioveta, Czech Republic</option>
                                                                                    <option value="110">Blubell Laboratories Ltd.</option>
                                                                                    <option value="111">Boichem Pharmaceutical</option>
                                                                                    <option value="112">Bomac Laboratories Limited NewZearland</option>
                                                                                    <option value="1224">Borno pharmacy</option>
                                                                                    <option value="113">Boshir (Brokar)</option>
                                                                                    <option value="114">Bracco S.P.A, Italy</option>
                                                                                    <option value="115">Bremer Pharma GmbH, Germany</option>
                                                                                    <option value="116">Bridge Pharmaceuticals Ltd.</option>
                                                                                    <option value="117">Bristol Caribbean, USA</option>
                                                                                    <option value="118">Bristol Myers Squibb Pvt. Ltd.,USA</option>
                                                                                    <option value="119">Bristol Pharma Ltd.</option>
                                                                                    <option value="120">Bristol-Myers, Italy</option>
                                                                                    <option value="121">BS Industries Ltd.</option>
                                                                                    <option value="122">C.B. Fleet Company Inc, USA</option>
                                                                                    <option value="123">Care Pharma Laboratories Ltd.</option>
                                                                                    <option value="124">Centeon Pharma Limited</option>
                                                                                    <option value="125">Central Pharmaceutical Ltd.</option>
                                                                                    <option value="126">Ceva Phylaxia, Hungary</option>
                                                                                    <option value="127">CEVA Phylaxia, VeterinaryBiological Company, Hungary</option>
                                                                                    <option value="128">Ceva-Phylaxia VeterinaryBiological Co. Ltd., Hungary</option>
                                                                                    <option value="129">CEVA-PHYLAXIA VeterinaryBiologicals Co. Ltd., Hungary</option>
                                                                                    <option value="130">Cheil Bio Co. Ltd., Korea</option>
                                                                                    <option value="131">Chemial Works of Gedeon RichterLtd., Hungary</option>
                                                                                    <option value="132">Chemist Laboratories Ltd.</option>
                                                                                    <option value="133">Chiron Behring Vaccine Pvt. Ltd.,</option>
                                                                                    <option value="134">Choong Ang Animal DiseaseLaboratory, Korea</option>
                                                                                    <option value="135">Choong Ang VaccineLaboratory,Korea.</option>
                                                                                    <option value="136">Choongwae Pharma Corporation,Korea</option>
                                                                                    <option value="137">chu chu  diaper</option>
                                                                                    <option value="138">Ciba Geigy Ltd., Switzerland</option>
                                                                                    <option value="139">Ciba Vision Ag, Switzerland</option>
                                                                                    <option value="140">CID Lines N.V Waterpoorstraat 2,Belgium</option>
                                                                                    <option value="141">Cilag AG, Switzerland</option>
                                                                                    <option value="142">Cipla Ltd.</option>
                                                                                    <option value="143">City Chemicals & Pharmaceuticals Works Ltd.</option>
                                                                                    <option value="144">City overseas</option>
                                                                                    <option value="145">Claris Lifesciences Ltd., India</option>
                                                                                    <option value="146">Closed Joint-Stock Company</option>
                                                                                    <option value="147">CLS Pharma ,France</option>
                                                                                    <option value="148">CNN-Laboratoria veterinario Ltda.,Hungary</option>
                                                                                    <option value="149">Comilla Laboratories Ltd.</option>
                                                                                    <option value="150">Concord Pharmaceuticals Ltd.</option>
                                                                                    <option value="151">Convatec</option>
                                                                                    <option value="152">Coophavate,France</option>
                                                                                    <option value="153">Coophavet, France</option>
                                                                                    <option value="154">COSMETICS</option>
                                                                                    <option value="155">Cosmic Chemical Industries Ltd.</option>
                                                                                    <option value="156">Cosmic Pharma Ltd.</option>
                                                                                    <option value="157">Cosmo Pharma Laboratories Ltd.</option>
                                                                                    <option value="158">Coventry Chemicals Limited, EU</option>
                                                                                    <option value="159">Cresent Pharmaceuticals</option>
                                                                                    <option value="160">Crystal Pharmaceuticals Ltd.</option>
                                                                                    <option value="161">CSL Behring Ag, Switzeland</option>
                                                                                    <option value="162">CSL Behring GmbH, Germany</option>
                                                                                    <option value="163">Dabur Pharmaceuticals Ltd., India</option>
                                                                                    <option value="164">Dae Sung Microbiological Labs,korea</option>
                                                                                    <option value="165">DaOne Chemical Co. Ltd., Korea</option>
                                                                                    <option value="166">Decent Pharma Laboratories Ltd.</option>
                                                                                    <option value="167">Delta Pharma Limited</option>
                                                                                    <option value="168">Delta Pharma Ltd</option>
                                                                                    <option value="169">Denex International, India</option>
                                                                                    <option value="170">Desh Pharmaceuticals Ltd.</option>
                                                                                    <option value="171">Dhaka Medical Supply</option>
                                                                                    <option value="172">Doctor Tims Pharmaceuticals Ltd.</option>
                                                                                    <option value="173">Doctor's Chemicals Works Ltd.</option>
                                                                                    <option value="174">Doms Pharmaceuticals</option>
                                                                                    <option value="175">Dong Bang Co. Ltd. Korea</option>
                                                                                    <option value="176">Dong Kook Pharmaceutical, Korea</option>
                                                                                    <option value="177">Dopharma International,Netherlands</option>
                                                                                    <option value="178">Dr. Jalil's Pharma (Pvt) Ltd.</option>
                                                                                    <option value="179">Dr. Reddy's Laboratories ltd</option>
                                                                                    <option value="180">Drug International Ltd.</option>
                                                                                    <option value="181">Drugland Limited</option>
                                                                                    <option value="182">E. Merck</option>
                                                                                    <option value="183">Eagle Vet. Tech Co., Ltd., Korea</option>
                                                                                    <option value="184">Eastern Drug Co. (Pvt.) Ltd.</option>
                                                                                    <option value="185">Eastern Medikit Limited, India</option>
                                                                                    <option value="186">Eastern Pharmaceuticals Ltd.</option>
                                                                                    <option value="187">Ebew Pharma,Austria</option>
                                                                                    <option value="188">Eco Animal Health Ltd., UK</option>
                                                                                    <option value="189">Edruc Ltd.</option>
                                                                                    <option value="190">EGIS Pharmaceuticals</option>
                                                                                    <option value="191">Egis Pharmaceuticals, Hungary</option>
                                                                                    <option value="192">Elanco Animal Health, USA</option>
                                                                                    <option value="193">Eli Lilly and Company USA</option>
                                                                                    <option value="1032">Eli Lilly France Company</option>
                                                                                    <option value="194">Eli Lilly France SA, France</option>
                                                                                    <option value="195">Eli Lilly Italia SpA, Italy</option>
                                                                                    <option value="196">Elixir</option>
                                                                                    <option value="197">Eon Pharmaceuticals Ltd.</option>
                                                                                    <option value="198">Eskayef Bangladesh Ltd.</option>
                                                                                    <option value="199">Essential Drugs Company Ltd.</option>
                                                                                    <option value="200">Ethical Drug Ltd.</option>
                                                                                    <option value="201">Euro Pharma Ltd.</option>
                                                                                    <option value="202">Evans Vanodine International, UK</option>
                                                                                    <option value="203">Everest Pharmaceuticals Ltd.</option>
                                                                                    <option value="204">Ewabo Chemikalien GmbH,Germany</option>
                                                                                    <option value="205">Excella, Germany</option>
                                                                                    <option value="206">Excelvision AG, Switzerland</option>
                                                                                    <option value="207">F N F Pharmaceuticals Ltd.</option>
                                                                                    <option value="208">F. H. Faulding & Co., Ltd.,Australia</option>
                                                                                    <option value="209">F. Hoffmann La Roche,Switzerland</option>
                                                                                    <option value="210">F. Hoffmann, Switzerland</option>
                                                                                    <option value="211">F. Hoffmann-La Roche Ltd.,Canada</option>
                                                                                    <option value="212">F. Hoffmann-La Roche Ltd.Switzerland</option>
                                                                                    <option value="213">F.Hoffmann La Roche, Switzerland</option>
                                                                                    <option value="214">F.Hoffmann-La Roche Ltd.Germany</option>
                                                                                    <option value="215">Fam Vanodione International, UK</option>
                                                                                    <option value="216">Famy Care Lrtd., India</option>
                                                                                    <option value="217">Faruk Pharmaceutical</option>
                                                                                    <option value="218">Fasska</option>
                                                                                    <option value="219">Fasska</option>
                                                                                    <option value="220">Fasska Co.</option>
                                                                                    <option value="221">Fatro SpA, Italy</option>
                                                                                    <option value="222">Ferring GmbH, Germany</option>
                                                                                    <option value="223">Fidia Farmaceutical SPA, Italy</option>
                                                                                    <option value="224">Fisons Limited, UK</option>
                                                                                    <option value="225">Fonterra Ltd</option>
                                                                                    <option value="226">Fort Dodge Animal Health, USA</option>
                                                                                    <option value="227">Fresenius Kabi (Guangzhou) Co.Ltd., China</option>
                                                                                    <option value="228">Fresenius Kabi Austria GmbH,Austria</option>
                                                                                    <option value="229">Fresenius Kabi DeutschlandGmbH, Germany</option>
                                                                                    <option value="230">Fresenius Medical CareDeustshland, Germany</option>
                                                                                    <option value="231">Fresh</option>
                                                                                    <option value="232">Fresinus Kabi Austria GmbH,Austria</option>
                                                                                    <option value="233">G. A. Company Ltd.</option>
                                                                                    <option value="234">G.M. Laboratory</option>
                                                                                    <option value="235">G.P.I. Ltd.</option>
                                                                                    <option value="1045">Gaco Pharmaceutical LTD.</option>
                                                                                    <option value="236">Galxo Wellcome, France</option>
                                                                                    <option value="237">GE Health Care., Ireland</option>
                                                                                    <option value="238">Genentech Inc, USA</option>
                                                                                    <option value="239">Genentech Inc., USA</option>
                                                                                    <option value="240">General Pharmaceuticals Ltd.</option>
                                                                                    <option value="241">Gentry Pharmaceuticals Ltd.</option>
                                                                                    <option value="1043">GET  WELL LTD. ( R F L)</option>
                                                                                    <option value="242">Get Well Limited</option>
                                                                                    <option value="243">Glaxo Operations UK Ltd., UK</option>
                                                                                    <option value="244">Glaxo Smith Klin ,Australia</option>
                                                                                    <option value="245">Glaxo Smith Kline Bioglan SA,Belgium</option>
                                                                                    <option value="246">Glaxo Smith Kline Biological S.A.,Belgium</option>
                                                                                    <option value="247">Glaxo Smith Kline SpA, Italy</option>
                                                                                    <option value="248">Glaxo SmithKline Biological S.A.,Belgium</option>
                                                                                    <option value="249">Glaxo Wellcome GmbH, Germany</option>
                                                                                    <option value="250">Glaxo Wellcome Operations, UK</option>
                                                                                    <option value="251">Glaxo Wellcome Production,France</option>
                                                                                    <option value="252">Glaxo Wellcome Spa, Italy</option>
                                                                                    <option value="253">GlaxoSmithKline Bangladesh Ltd.</option>
                                                                                    <option value="254">GlaxoSmithkline Biologicals S.A,Australia</option>
                                                                                    <option value="255">GlaxoSmithkline Biologicals S.A,Belgium</option>
                                                                                    <option value="256">GlaxoSmithKline Biologicals,Germany</option>
                                                                                    <option value="257">Global Heavy Chemicals Ltd.</option>
                                                                                    <option value="258">Global s Ltd.</option>
                                                                                    <option value="259">Globe Drug Ltd</option>
                                                                                    <option value="260">Globe Laboratories (Pvt.) Ltd.</option>
                                                                                    <option value="261">Globe Pharmaceuticals Ltd.</option>
                                                                                    <option value="262">Globex Pharmaceuticals Ltd.</option>
                                                                                    <option value="263">Godecke GmbH, Germany</option>
                                                                                    <option value="264">gohnsons</option>
                                                                                    <option value="265">Gonoshasthaya Pharmaceuticals Ltd.</option>
                                                                                    <option value="266">Gosun Pharma Co. Ltd., China</option>
                                                                                    <option value="267">GP Grenzach Produktion GmbH,Germany</option>
                                                                                    <option value="268">Great Bengal Chemical & Pharmaceuticals Works (Suspended)</option>
                                                                                    <option value="269">Green Cross GuangzhouPharmaceutical Co. Ltd., China</option>
                                                                                    <option value="270">Green Cross veterinary productsCo. Ltd. Korea</option>
                                                                                    <option value="271">Green Laboratory</option>
                                                                                    <option value="272">Greenland Pharmaceuticals Ltd.</option>
                                                                                    <option value="273">Grifols Biologicals Inc, USA</option>
                                                                                    <option value="274">Gruppo Lepetit Srl, Italy</option>
                                                                                    <option value="1035">GSK LTD.</option>
                                                                                    <option value="275">Guardian Healthcare Ltd.</option>
                                                                                    <option value="1026">Gwt well LTD</option>
                                                                                    <option value="276">H. Lundbeck & Co., A/S, Denmark</option>
                                                                                    <option value="277">H. Lundbeck A/S, Ottiliavej,Denmark</option>
                                                                                    <option value="278">Haiou Medical Appliance Co.,Chine</option>
                                                                                    <option value="279">Halal</option>
                                                                                    <option value="280">Hallmark Pharmaceuticals Ltd.</option>
                                                                                    <option value="281">Halocarbone Laboratories, USA</option>
                                                                                    <option value="282">Hamdacd</option>
                                                                                    <option value="283">Hamdard Lab. (Waqf), Pakistan</option>
                                                                                    <option value="284">Hamdard Laboratories Bangladesh.</option>
                                                                                    <option value="285">Hameln Pharma Plus GmbH,Germany</option>
                                                                                    <option value="286">Hangdong Co.Ltd. Korea</option>
                                                                                    <option value="287">Haupt Pharma, Germany</option>
                                                                                    <option value="288">Health Care Agro Limited</option>
                                                                                    <option value="289">Healthcare Pharmaceuticals Ltd.</option>
                                                                                    <option value="290">Hexal Ag Germany by EbewePharma Austria</option>
                                                                                    <option value="291">Hexal Ag, Austria</option>
                                                                                    <option value="292">Hexal ag, Germany</option>
                                                                                    <option value="293">HLL Life Care Limited, India</option>
                                                                                    <option value="294">Hoechst Marion RousselDeutschland GmbH, Germany</option>
                                                                                    <option value="295">Hoechst Roussel Vet Private Ltd.,India</option>
                                                                                    <option value="296">Hoechstl Aventis Pharma,Germany</option>
                                                                                    <option value="297">Hoffman-La Roche Ltd.Switzerland</option>
                                                                                    <option value="298">Holay Company</option>
                                                                                    <option value="299">Hope Pharmaceuticals Ltd.</option>
                                                                                    <option value="300">Hospira Australia Pty Ltd.,Australia</option>
                                                                                    <option value="301">Hospira Australia Pvt. Ltd.,Australia</option>
                                                                                    <option value="302">Huaian wanjia Medical Divice Co.Ltd. China</option>
                                                                                    <option value="303">Hudson Pharmaceuticals Ltd.</option>
                                                                                    <option value="304">Huqsons Laboratories Ltd. Suspened</option>
                                                                                    <option value="305">Hydroxide Ltd.</option>
                                                                                    <option value="306">HYGIENETEX BANGLADESH</option>
                                                                                    <option value="307">Ibn Sina Pharmaceutical Ind. Ltd.</option>
                                                                                    <option value="308">Incepta Pharmaceuticals Ltd.</option>
                                                                                    <option value="309">Indobangla Pharmaceuticals</option>
                                                                                    <option value="310">Innova Phrmaceutical Ltd.</option>
                                                                                    <option value="311">Institute of Public Health</option>
                                                                                    <option value="312">Instituto Grifols S.A., Spain</option>
                                                                                    <option value="313">Instituto Sierovaccinogeno ItalianoSpa, Italy</option>
                                                                                    <option value="314">Intervet International B.V,Netherland</option>
                                                                                    <option value="315">Intervet International B.V., Holland</option>
                                                                                    <option value="316">Intervet International,Netherland</option>
                                                                                    <option value="317">Islami Pharmaceutical Industries Ltd.</option>
                                                                                    <option value="318">IZO S.p.A Via Bianchi, Italy</option>
                                                                                    <option value="319">J C I Bangladesh Ltd</option>
                                                                                    <option value="320">Jalalabad Pharmaceuticals Ltd.</option>
                                                                                    <option value="321">Jams Pharmaceuticals Ltd.</option>
                                                                                    <option value="322">Janasheba Pharmaceuticals Ltd.</option>
                                                                                    <option value="323">Janata Traders</option>
                                                                                    <option value="324">Janseen Pharmaceutica, Belgium</option>
                                                                                    <option value="325">Jansin Health Products (PVT) Limited.</option>
                                                                                    <option value="326">Jayson Pharmaceuticals Ltd.</option>
                                                                                    <option value="327">Jhon Wyeth & Brother Ltd. UK andMarketing Authorisation HolderWyeth Lederle Vaccine SABelgium</option>
                                                                                    <option value="328">JHP Pharmaceuticals, USA</option>
                                                                                    <option value="329">Jiaxing Tianhe Pharmaceutical Co.Ltd. China</option>
                                                                                    <option value="330">JMI Pharma</option>
                                                                                    <option value="331">JMI Syringes & Medical Devices Ltd.</option>
                                                                                    <option value="332">JMS Singapore Pte Ltd.,Singapore</option>
                                                                                    <option value="333">Julphar Bangladesh Ltd.</option>
                                                                                    <option value="334">Kanters Middenakkerweg,Netherlands</option>
                                                                                    <option value="335">Kasiruddin Chemical Works (pvt) Ltd. (Suspended)</option>
                                                                                    <option value="336">Kawasumi Laboratories, Thailand</option>
                                                                                    <option value="337">Kawser Chemicals</option>
                                                                                    <option value="338">Kazi Chemicals</option>
                                                                                    <option value="339">KBNP Inc. Korea</option>
                                                                                    <option value="340">KDH Laboratories Ltd.</option>
                                                                                    <option value="341">Kedrion, Italy</option>
                                                                                    <option value="342">Kela Laboratoria, Belgium</option>
                                                                                    <option value="343">Kela N.V., Belgium</option>
                                                                                    <option value="344">Kemiko Pharmaceuticals Ltd.</option>
                                                                                    <option value="345">Kepro B.V Maagdenburgstarrt,Netherland</option>
                                                                                    <option value="346">Kepro BV Compagnieweg, TheNetherlands</option>
                                                                                    <option value="347">KL Corporation</option>
                                                                                    <option value="348">Komipharm International Co.Ltd. Korea</option>
                                                                                    <option value="349">Korea Thumb Vet Co. Ltd., Korea</option>
                                                                                    <option value="350">Koream Vetchem Co., Korea</option>
                                                                                    <option value="351">Kumudini Pharma Ltd.</option>
                                                                                    <option value="352">Kyowa Hakko KivinCo. Ltd., Japan</option>
                                                                                    <option value="353">Kyowa Hakko Kogyo Co., Ltd.,Japan</option>
                                                                                    <option value="354">Labaid Pharmaceuticals Ltd.</option>
                                                                                    <option value="355">Laboratories Crinex, France</option>
                                                                                    <option value="356">Laboratories Hipra S.A., Spain</option>
                                                                                    <option value="357">Laboratories Ovejero S.A Spain</option>
                                                                                    <option value="358">Laboratories Panpharma, France</option>
                                                                                    <option value="359">Laboratories Sogeval</option>
                                                                                    <option value="360">Laboratorio Aldo-Union, Spain</option>
                                                                                    <option value="361">Laboratorio Varifarma, Argentina</option>
                                                                                    <option value="362">Laboratorios Hipra SA, Spain</option>
                                                                                    <option value="363">Lavipharm S.A, Greece</option>
                                                                                    <option value="364">Leiras OY, Finland</option>
                                                                                    <option value="365">Lek dd Ljubljana Pharmaceutical &Chemical Co., Slovenia</option>
                                                                                    <option value="366">Leo Pharmaceutical Products,Denmark</option>
                                                                                    <option value="367">Leon Pharmaceuticals Ltd.</option>
                                                                                    <option value="368">Les Laboratories Servier Industrie,France</option>
                                                                                    <option value="369">LFB Biomedicaments, France</option>
                                                                                    <option value="370">LG Life Sciences Ltd.(LGLS),Korea</option>
                                                                                    <option value="371">Libra Pharmaceuticls Ltd.</option>
                                                                                    <option value="372">Lilly Deutsch Land GmbH,Germany</option>
                                                                                    <option value="373">Lilly Egypt, Egypt</option>
                                                                                    <option value="374">Lilly France SA, France</option>
                                                                                    <option value="375">Lilly, France</option>
                                                                                    <option value="376">Links Pharma</option>
                                                                                    <option value="377">Lohmann Animal Health GmbH &Co., Germany</option>
                                                                                    <option value="378">Lohmann Animal HealthInternational, USA</option>
                                                                                    <option value="379">Loly Pharma (Vet)</option>
                                                                                    <option value="380">LTS Lohmann Therapie-Systeme,Germany</option>
                                                                                    <option value="381">Lundbeck/Lilac</option>
                                                                                    <option value="382">M.R Chemicals</option>
                                                                                    <option value="383">M/S Meril select Inc,U.S.A</option>
                                                                                    <option value="384">M/s Organon,Holland</option>
                                                                                    <option value="385">M/S. LG Life Sciences Ltd., Korea</option>
                                                                                    <option value="386">M/S. Swadesh</option>
                                                                                    <option value="387">Made for F. Hoffmann-La RocheLtd. Switzerland By RocheDiagnostic GmbH Germany</option>
                                                                                    <option value="388">Mafnaz Pharmaceuticals Ltd.</option>
                                                                                    <option value="389">Makharaj International Limited</option>
                                                                                    <option value="390">Maks Drugs Ltd.</option>
                                                                                    <option value="391">Mallinckrodt Inc., USA</option>
                                                                                    <option value="392">MARKS</option>
                                                                                    <option value="393">Marksman Pharmaceutical Ltd.</option>
                                                                                    <option value="394">Maxborn Pharmaceuticals Ltd.</option>
                                                                                    <option value="395">Maxim Traders</option>
                                                                                    <option value="396">Mayne Pharma Pty Ltd., Australia</option>
                                                                                    <option value="397">Mayne Pharma Pty. Ltd., Germany</option>
                                                                                    <option value="398">Maynul & Ali Surgical</option>
                                                                                    <option value="399">Medac Gesellschaft fur Klinischespezialpraparate Germany</option>
                                                                                    <option value="400">Medica AG, Germany</option>
                                                                                    <option value="401">Medical Device</option>
                                                                                    <option value="402">Medico Pharmaceuticals Ltd.</option>
                                                                                    <option value="403">Medicon Pharmaceuticals Ltd.</option>
                                                                                    <option value="404">Medihealth Pharmaceutical Limited</option>
                                                                                    <option value="405">Medimet Pharmaceuticals Ltd.</option>
                                                                                    <option value="406">Mediplus </option>
                                                                                    <option value="407">Medipro Medikal Uruler San.,Turkey</option>
                                                                                    <option value="408">MedRx Life Science Ltd.</option>
                                                                                    <option value="409">Merck , Italy</option>
                                                                                    <option value="410">Merck KGaA, Germany</option>
                                                                                    <option value="411">Merck Serono S.A., Switzerland</option>
                                                                                    <option value="412">Merck Serono S.p.A, Italy</option>
                                                                                    <option value="413">Merial Biological Laboratory, UK</option>
                                                                                    <option value="414">Merial Italia S.p. A., Italy</option>
                                                                                    <option value="415">Merial Select, Inc., USA</option>
                                                                                    <option value="416">Merial, France</option>
                                                                                    <option value="417">Merial, U.K</option>
                                                                                    <option value="418">Merial,France</option>
                                                                                    <option value="419">Meril</option>
                                                                                    <option value="420">Merz Pharmaceuticals</option>
                                                                                    <option value="421">Meyer organics ltd</option>
                                                                                    <option value="422">Mgi</option>
                                                                                    <option value="423">Microbe Laboratories Ltd.</option>
                                                                                    <option value="424">MicroMed</option>
                                                                                    <option value="425">Mig Pharmaceutical Ltd.</option>
                                                                                    <option value="426">Mika Pharma GmbH, Germany</option>
                                                                                    <option value="427">Millat Pharmaceuticals Ltd.</option>
                                                                                    <option value="428">Model Surgical </option>
                                                                                    <option value="429">Modern Pharmaceuticals Ltd.</option>
                                                                                    <option value="430">Modi-mundipharma</option>
                                                                                    <option value="431">Momotaz Pharmaceuticals Ltd.</option>
                                                                                    <option value="432">Monicopharma Limited</option>
                                                                                    <option value="433">Monomedi Bangladesh Ltd.</option>
                                                                                    <option value="434">MST Pharma and Healthcare Ltd.</option>
                                                                                    <option value="435">MultiBrands Limited</option>
                                                                                    <option value="436">Mundipharma (Bangladesh) Pvt. Ltd.</option>
                                                                                    <option value="437">Mystic Pharmaceuticals Ltd.</option>
                                                                                    <option value="438">N V Organon OSS, Holland</option>
                                                                                    <option value="439">N. V. Organon, Netherlands</option>
                                                                                    <option value="440">N.V. Organon, Holland</option>
                                                                                    <option value="441">N.V. Upjohn S.A., Belgium</option>
                                                                                    <option value="442">Naafco Pharma Ltd.</option>
                                                                                    <option value="443">Najat Pharma Co. (Suspended)</option>
                                                                                    <option value="444">Nantong Egens Biotechinology Co.Ltd., China</option>
                                                                                    <option value="445">Natal Chemical Ind.</option>
                                                                                    <option value="446">National Laboratories Ltd.</option>
                                                                                    <option value="447">Navana Pharmaceuticals Ltd.</option>
                                                                                    <option value="448">NCC Co.</option>
                                                                                    <option value="449">Nephron Pharma, USA</option>
                                                                                    <option value="450">Nestel</option>
                                                                                    <option value="451">Nicholas</option>
                                                                                    <option value="452">Niddle Normal</option>
                                                                                    <option value="453">Nip Chemicals And Pharmaceuticals Ltd.</option>
                                                                                    <option value="454">Nipa Pharmaceuticals Ltd.</option>
                                                                                    <option value="455">Nippon Kayaku Co Ltd,.Japan</option>
                                                                                    <option value="456">NIPRO JMI Pharma Limited</option>
                                                                                    <option value="457">NISU TISSUE PAPERS CO.LTD</option>
                                                                                    <option value="458">Nivea</option>
                                                                                    <option value="459">Norbrook Laboratories Ltd.,Ireland</option>
                                                                                    <option value="460">Norgine</option>
                                                                                    <option value="461">not a pharma</option>
                                                                                    <option value="462">Novartis (Bangladesh) Ltd.</option>
                                                                                    <option value="463">Novartis Farma SpA, Italy</option>
                                                                                    <option value="464">Novartis Farmaceutica S.A., Spain</option>
                                                                                    <option value="465">Novartis Opthalmics, Switzerland</option>
                                                                                    <option value="466">Novartis Pharma AG, Switzerland</option>
                                                                                    <option value="467">Novartis Pharma Ag. Germany</option>
                                                                                    <option value="468">Novartis Pharma Ag. Switerland</option>
                                                                                    <option value="469">Novartis Pharma GmbH, Germany</option>
                                                                                    <option value="470">Novartis Pharma SA, China</option>
                                                                                    <option value="471">Novartis Pharma SA, France</option>
                                                                                    <option value="472">Novartis Pharma Switzerland</option>
                                                                                    <option value="473">Novartis Pharma, France</option>
                                                                                    <option value="474">Novartis Pharmaceuticals, UK</option>
                                                                                    <option value="475">Novartis Vaccine and DiagnosticsGermany</option>
                                                                                    <option value="476">Novartis Vaccines & DiagnosticsS.r.l Italy</option>
                                                                                    <option value="477">Novelta Bestway Pharmaceuticals Ltd.</option>
                                                                                    <option value="478">Novo Healthcare and Pharma Ltd.</option>
                                                                                    <option value="479">Novo Industri A/S, Denmark</option>
                                                                                    <option value="1031">Novo Nordisk</option>
                                                                                    <option value="480">Novo Nordisk</option>
                                                                                    <option value="481">Novo Nordisk A/S Denmark</option>
                                                                                    <option value="482">Novus Pharmaceuticals Ltd.</option>
                                                                                    <option value="483">Nuvista Pharma Ltd</option>
                                                                                    <option value="484">Nycomed GmbH, USA</option>
                                                                                    <option value="485">Nycomed, Germany</option>
                                                                                    <option value="486">Oasis Laboratories Ltd.</option>
                                                                                    <option value="487">Octapharma Pharmazeutika mbH,Germany</option>
                                                                                    <option value="488">Oculus Innovative Sciences, USA</option>
                                                                                    <option value="489">Omor Surgical</option>
                                                                                    <option value="490">One Pharma Ltd.</option>
                                                                                    <option value="1027">Opso Saline Limited.</option>
                                                                                    <option value="491">Opso Saline Ltd.</option>
                                                                                    <option value="492">Opsonin Pharma Limited</option>
                                                                                    <option value="493">Orbit Pharmaceuticals Ltd.</option>
                                                                                    <option value="494">Organic Health Care</option>
                                                                                    <option value="495">Organon (Ireland) Ltd., Ireland</option>
                                                                                    <option value="496">Organon Iteland Ltd., Organon</option>
                                                                                    <option value="497">Orion Corporation Finland</option>
                                                                                    <option value="498">Orion Infusion Ltd.</option>
                                                                                    <option value="499">Orion Pharma Ltd.</option>
                                                                                    <option value="500">others </option>
                                                                                    <option value="501">Oyster Pharmaceuticals Ltd.</option>
                                                                                    <option value="502">Pacific Hospital Supply Co., Ltd.,USA</option>
                                                                                    <option value="503">Pacific Pharmaceuticals Ltd.</option>
                                                                                    <option value="504">Pacsun Industrial Co. Ltd., Korea</option>
                                                                                    <option value="505">Paradise Chemical Industries</option>
                                                                                    <option value="506">Pasteur Merieux Serums andVaccines, France</option>
                                                                                    <option value="507">Patheon Inc., Canada</option>
                                                                                    <option value="508">Peoples Pharma Ltd.</option>
                                                                                    <option value="509">Pfizer (perth) Pty. Ltd. Australia</option>
                                                                                    <option value="510">Pfizer Animal Health, USA</option>
                                                                                    <option value="511">Pfizer Italia Srl, Italy</option>
                                                                                    <option value="512">Pfizer Manufacturing deutchslandGermany</option>
                                                                                    <option value="513">Pfizer Manufacturing, Belgium</option>
                                                                                    <option value="514">Pfizer PGM, France</option>
                                                                                    <option value="515">Pfizer Pharmaceuticals, Ireland</option>
                                                                                    <option value="516">Pfizer Puus SP.A, Italy</option>
                                                                                    <option value="517">Pfizer Puus SP.A,., Belgium</option>
                                                                                    <option value="518">Pfizer Spa, Italy</option>
                                                                                    <option value="519">Pfizer, Belgium</option>
                                                                                    <option value="520">Pfizer, Canada</option>
                                                                                    <option value="521">Pharma Care BD</option>
                                                                                    <option value="522">Pharmachemie B. V. Netherlands</option>
                                                                                    <option value="523">Pharmachemie B.V., Holland</option>
                                                                                    <option value="524">Pharmacia Spa, Italy</option>
                                                                                    <option value="525">Pharmacil Ltd.</option>
                                                                                    <option value="526">Pharmaco International Ltd.</option>
                                                                                    <option value="527">Pharmacosmos</option>
                                                                                    <option value="528">Pharmadesh Laboratories Ltd.</option>
                                                                                    <option value="529">Pharmasia Ltd.</option>
                                                                                    <option value="530">Pharmatek Chemicals Ltd.</option>
                                                                                    <option value="531">Pharmathen S.A Greece</option>
                                                                                    <option value="532">Pharmik Laboratories Ltd.</option>
                                                                                    <option value="533">Phoenix Chemicals Laboratories (BD) Ltd.</option>
                                                                                    <option value="534">Pioneer Pharmaceutical Ltd</option>
                                                                                    <option value="535">Pip Limited</option>
                                                                                    <option value="536">Plasmapharm Sera GmbH & Co.,Austria</option>
                                                                                    <option value="537">Polichem S.A., Spain</option>
                                                                                    <option value="538">POLIPHARM CO LTD</option>
                                                                                    <option value="539">Popular Pharmaceuticals Ltd.</option>
                                                                                    <option value="540">Premier Enterprises, India</option>
                                                                                    <option value="541">Premier Pharmaceuticals</option>
                                                                                    <option value="542">Prime Pharmaceuticals Ltd.</option>
                                                                                    <option value="543">Procter & Gamble ( P & G )</option>
                                                                                    <option value="544">Procter & Gumble, Germany</option>
                                                                                    <option value="1042">Projonmo Surgical LTD.</option>
                                                                                    <option value="545">Pubali Pharmaceutical</option>
                                                                                    <option value="546">Purnava Limited</option>
                                                                                    <option value="547">Quality Pharmaceuticals Ltd.</option>
                                                                                    <option value="548">Quatchem Limited, Uk</option>
                                                                                    <option value="549">R. P. Scherer GmbH, Germany</option>
                                                                                    <option value="550">R.D.C.C.S. Limited</option>
                                                                                    <option value="551">Radiant Pharmaceutical Ltd.</option>
                                                                                    <option value="552">Rahman Chemicals Ltd.</option>
                                                                                    <option value="553">Rakit Benkijar(BD) Ltd.</option>
                                                                                    <option value="554">Rampart-Power Bangladesh Ltd.</option>
                                                                                    <option value="555">Rangs Medicine</option>
                                                                                    <option value="556">Rangs Pharmaceuticals Ltd.</option>
                                                                                    <option value="557">Rasa Pharmaceuticals Ltd.</option>
                                                                                    <option value="558">Razzak (Broker)</option>
                                                                                    <option value="559">Reckitt & Benckiser Bangladesh Ltd.</option>
                                                                                    <option value="560">Reckitt & Colman Products Ltd., UK</option>
                                                                                    <option value="561">Reliable Drugs & Chemicals</option>
                                                                                    <option value="562">Reliance Laboratories Ltd.</option>
                                                                                    <option value="563">Reliance Pharmaceuticals Ltd.</option>
                                                                                    <option value="564">Reman Drug Laboratories Ltd.</option>
                                                                                    <option value="565">Remee</option>
                                                                                    <option value="566">Remex Pharmaceuticals</option>
                                                                                    <option value="567">Renata Limited</option>
                                                                                    <option value="568">Rephco Pharmaceuticals Ltd.</option>
                                                                                    <option value="569">Return Medicine</option>
                                                                                    <option value="570">Rex Pharma</option>
                                                                                    <option value="571">Riemser Arzneimittel AG,Germany</option>
                                                                                    <option value="572">Ripon(Broker)</option>
                                                                                    <option value="573">RN Pharmaceuticals</option>
                                                                                    <option value="574">Roche</option>
                                                                                    <option value="575">Roche Bangladesh Pharmaceutical</option>
                                                                                    <option value="576">Roche Diagnostic, GermanyUnder Licence Roche, Swiss</option>
                                                                                    <option value="577">Roche Diagnostics GmbH,Germany</option>
                                                                                    <option value="578">Roche Fontenay, France</option>
                                                                                    <option value="579">Roche SpA, Italy</option>
                                                                                    <option value="580">Roche Spa, ItalyF. Hoffmann La Roche,Switzerland</option>
                                                                                    <option value="581">Rodoshi Enterprise</option>
                                                                                    <option value="582">Rotexmedica GmbH, Germany</option>
                                                                                    <option value="583">Royal Pharmaceutical</option>
                                                                                    <option value="1044">Royal Toiletise LTD.</option>
                                                                                    <option value="584">S. A. Alcon Couvereur NV,Belgium</option>
                                                                                    <option value="585">S. A. Alcon Couvreur N.V.,Belgium</option>
                                                                                    <option value="586">S. N. Pharmaceuticals Ltd.</option>
                                                                                    <option value="587">S.A. Alcon Couvreur.,N.V., Belgium</option>
                                                                                    <option value="588">S.C Sindan Pharma S.R.l,Romania</option>
                                                                                    <option value="589">S.C Sindan Pharma S.R.LkRomania</option>
                                                                                    <option value="590">S.P Veterinaria, s.a, Spain</option>
                                                                                    <option value="591">Safeco Laboratories Ltd.</option>
                                                                                    <option value="592">Salton Pharmaceuticals Ltd.</option>
                                                                                    <option value="593">Samyang Anipharm Co. Ltd. Korea</option>
                                                                                    <option value="594">Samyang Pharma ChemicalsCo.Ltd,, Korea</option>
                                                                                    <option value="595">Sandoz GmbH, Austria</option>
                                                                                    <option value="596">Sandoz Pharmaceuticals LTD.</option>
                                                                                    <option value="1033">Sanjida Enterprise</option>
                                                                                    <option value="597">Sanofi Aventis (BD) Ltd.</option>
                                                                                    <option value="598">Sanofi Aventis Pasteur SA, France</option>
                                                                                    <option value="599">Sanofi Aventis, Germany</option>
                                                                                    <option value="600">Sanofi Pasteur Lyon, France</option>
                                                                                    <option value="601">Sanofi Pasteur S A ,France</option>
                                                                                    <option value="602">Sanofi Winthrop Industries,France</option>
                                                                                    <option value="603">Sanofi-aventis DeutschlandGmbH, Germany</option>
                                                                                    <option value="604">Santo Enterprise</option>
                                                                                    <option value="605">Sarma Chemical Works Ltd.</option>
                                                                                    <option value="606">SAVLON</option>
                                                                                    <option value="607">SBL Vaccin AB, Sweden</option>
                                                                                    <option value="608">Schering A.G, Germany</option>
                                                                                    <option value="609">Schering Plough, Ireland</option>
                                                                                    <option value="610">Schering- Plough Animal HealthCorp., USA</option>
                                                                                    <option value="611">ScheringOy,Pansiontie,47,20210Turku, Finland</option>
                                                                                    <option value="612">Schwarz Pharma, USA</option>
                                                                                    <option value="613">Seba Laboratories Ltd.</option>
                                                                                    <option value="614">Seema Pharmaceuticals Ltd.</option>
                                                                                    <option value="615">Senexi Sas Fontenay-Sous-Bois,France</option>
                                                                                    <option value="616">Senixi SAS, France</option>
                                                                                    <option value="617">SENSODYNE</option>
                                                                                    <option value="618">Serono Pharma Ltd., UK</option>
                                                                                    <option value="619">Serono Pharma Spa, Italy</option>
                                                                                    <option value="620">Serumwerk Burnburg AG,Germany</option>
                                                                                    <option value="621">SF Co. Ltd., Korea</option>
                                                                                    <option value="622">Shamsul Al-Amin Pharmaceuticals Ltd.</option>
                                                                                    <option value="623">Shandong weigao Group MedicalPolymer Co. Ltd., China</option>
                                                                                    <option value="624">Sharif Pharmaceuticals Ltd.</option>
                                                                                    <option value="625">SHAWON</option>
                                                                                    <option value="626">Sheba Chemicals Industries Ltd.</option>
                                                                                    <option value="627">Shinil Biogen & Co. Ltd., Korea</option>
                                                                                    <option value="628">Shire Pharmaceuticals Ltd.</option>
                                                                                    <option value="629">Silco Pharmaceuticlas Ltd.</option>
                                                                                    <option value="630">Silva Pharmaceuticals Ltd.</option>
                                                                                    <option value="631">Sino Swed PharmaceuticalCorporation Ltd., China</option>
                                                                                    <option value="632">Skylab Ltd.</option>
                                                                                    <option value="633">Smart Distribution (PVT.) Ltd.</option>
                                                                                    <option value="634">SMC Enterprise Limited Bangladesh</option>
                                                                                    <option value="635">Smith & Nephew Medical Ltd., UK</option>
                                                                                    <option value="636">Social Marketing Company</option>
                                                                                    <option value="637">Socorex Isba S .A. CH.ChampColomb 7,Switzerland</option>
                                                                                    <option value="638">Solvay Pharmaceuticals,Netherlands</option>
                                                                                    <option value="639">Somatec Pharmaceuticals Ltd.</option>
                                                                                    <option value="640">Sonear Laboratories Ltd.</option>
                                                                                    <option value="641">Sonergaon Chemical Complex (pvt) Ltd.</option>
                                                                                    <option value="642">Sony Pharmaceutical Ltd.</option>
                                                                                    <option value="643">Spark Pharmaceutical Ltd.</option>
                                                                                    <option value="644">Special T Products Ltd., UK</option>
                                                                                    <option value="645">Spectra Oxygen Limited</option>
                                                                                    <option value="646">Square Cephalosporins Ltd.</option>
                                                                                    <option value="647">Square Pharmaceuticals Ltd.</option>
                                                                                    <option value="648">Square Toiletries Limited</option>
                                                                                    <option value="649">Standard Laboratories Ltd.</option>
                                                                                    <option value="650">Stars Pharmaceuticals Ltd.</option>
                                                                                    <option value="651">Stiefel Laboratories Ptd Ltd.,Ireland</option>
                                                                                    <option value="652">Stiefel Laboratories Ptd Ltd.,Singapore</option>
                                                                                    <option value="653">Sumitomo Pharmaceuticals Co.,Ltd., Japan</option>
                                                                                    <option value="654">Sun Pharmaceutical (Bangladesh) Ltd.</option>
                                                                                    <option value="655">SUNMAN-BIRDEM Pharma Ltd</option>
                                                                                    <option value="656">Super</option>
                                                                                    <option value="657">Super Power Pharmaceuticals Ltd.</option>
                                                                                    <option value="658">Supreme Pharmaceuticals Ltd.</option>
                                                                                    <option value="659">Surgical</option>
                                                                                    <option value="660">Swensweg 5 Haarlem, Holland</option>
                                                                                    <option value="661">Syntho Laboratories Ltd.</option>
                                                                                    <option value="662">Takeda Pharmaceutical Companyltd., Japan</option>
                                                                                    <option value="663">Talecris Biotherapeutics Inc. USA</option>
                                                                                    <option value="664">Team Pharmaceuticals Ltd.</option>
                                                                                    <option value="665">Techno Drugs Ltd.</option>
                                                                                    <option value="666">Terumo Corporation, Japan</option>
                                                                                    <option value="667">Test Company</option>
                                                                                    <option value="668">Teva Pharmaceutical Private Ltd.,Hungary</option>
                                                                                    <option value="669">Thai Nokorn Patana Co. Ltd.Thailand</option>
                                                                                    <option value="1039">Thai Plastic Industries</option>
                                                                                    <option value="670">The Dow Chemical Company,USA</option>
                                                                                    <option value="671">The Research Foundation forMicrobial Disease of OsakaUniversity, Japan</option>
                                                                                    <option value="672">Theraputics (BD) Ltd.</option>
                                                                                    <option value="673">Tibet</option>
                                                                                    <option value="674">Transcom Distribution Com. Ltd.</option>
                                                                                    <option value="675">TRB Chemedica International Sa,Switzerland</option>
                                                                                    <option value="676">Tropical Pharmaceuticals Ltd.</option>
                                                                                    <option value="677">Tyco Healthcare, Canada</option>
                                                                                    <option value="678">UCB India Ltd., India</option>
                                                                                    <option value="679">UG Medical Disposable DNMalaysia</option>
                                                                                    <option value="680">Ultra Pharma Ltd.</option>
                                                                                    <option value="681">UniDerma</option>
                                                                                    <option value="682">Unilever</option>
                                                                                    <option value="1041">Unilever Consumer Care LTD.</option>
                                                                                    <option value="683">Unimed & Unihealth Manufacturers Ltd.</option>
                                                                                    <option value="684">UniMed UniHealth Pharmaceuticals Limited</option>
                                                                                    <option value="685">Union Pharmaceuticals Ltd.</option>
                                                                                    <option value="686">Unique Pharmaceutical Ltd.</option>
                                                                                    <option value="687">United Chemicals & Pharmaceuticals Ltd.</option>
                                                                                    <option value="688">United Propotions Inc., USA</option>
                                                                                    <option value="689">varieties</option>
                                                                                    <option value="690">Varun Medimpex,India</option>
                                                                                    <option value="691">Vaseline</option>
                                                                                    <option value="692">Veritas Pharmaceuticals Ltd.</option>
                                                                                    <option value="693">Vetech Labortories Inc., Canada</option>
                                                                                    <option value="694">Vetoquinol SA, France</option>
                                                                                    <option value="695">Vifor (International) Inc.,Switzerland</option>
                                                                                    <option value="696">Virgo Pharmaceuticals Ltd.</option>
                                                                                    <option value="697">VITRO Surgical</option>
                                                                                    <option value="698">Walter Ritter GmbH, Germany</option>
                                                                                    <option value="699">Walter Ritter Kg, Germany</option>
                                                                                    <option value="700">Weinberg Pharmaceuticals</option>
                                                                                    <option value="701">Wellcome Chemical</option>
                                                                                    <option value="702">whisper </option>
                                                                                    <option value="703">White Horse Pharma</option>
                                                                                    <option value="704">Wyeth Canada, Canada</option>
                                                                                    <option value="705">Wyeth Pharma GmbH, Germany</option>
                                                                                    <option value="706">Y. Snore LLC 460, USA</option>
                                                                                    <option value="707">YC</option>
                                                                                    <option value="708">Zagro Singapore Pte. Ltd.,Singapore</option>
                                                                                    <option value="709">Zaman Pharmaceutical Ltd,</option>
                                                                                    <option value="710">Zas Corporation</option>
                                                                                    <option value="711">Zenith Pharmaceuticals Ltd.</option>
                                                                                    <option value="712">Zentaris GmbH, Germany</option>
                                                                                    <option value="713">Zhejiang Anji Sunlight MedicinalProducts Co., Ltd., China</option>
                                                                                    <option value="714">Ziska Pharmaceuticals Ltd.</option>
                                                                                    <option value="715">Zuellig Pharma Bangladesh LTD.</option>
                                                                            </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-1">
                            <button type="submit" name="search_btn" class="btn btn-primary" style="margin-top:25px">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.col -->
        </div>
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-bordered table-striped">
                    <thead style="font-size: 10px">
                        <tr style="background-color: #14A586;color: #fff;">
                            <th class="text-center">SL</th>
                            <th class="text-center">Payment Date</th>
                            <th class="text-center">Company Name</th>
                            <th class="text-center">Money Receipt</th>
                            <th class="text-center">Installment Paid</th>
                            <th class="text-center">Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                                                <tr>
                            <th>Total</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th class="text-right">0</th>
                            <th></th>
                        </tr>
                </table>
            </div>
            <!-- /.col
        </div>
            <!-- /.row -->
    </section>

@endsection
