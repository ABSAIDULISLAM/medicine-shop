
@extends('admin.layouts.master')
@section('title', 'collection-report')

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
            Collection Report
            <small> Collection Report</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Collection Report</a></li>
            <li class="active"> Collection Report</li>
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
                        Collection Report
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
                                <label for="customer_id">Company Name</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <select name="customer_id" id="customer_id" class="form-control select2" style="width: 100%;">
                                        <option value="0">ALL</option>
                                                                                    <option value="1213"></option>
                                                                                    <option value="1209">a</option>
                                                                                    <option value="1047">A K M Sirajul Islam</option>
                                                                                    <option value="1082">Abbas</option>
                                                                                    <option value="1153">Abdul Jolil (Projonmo)</option>
                                                                                    <option value="1088">Abu Bokkor Siddik</option>
                                                                                    <option value="1203">Abul </option>
                                                                                    <option value="1119">Abul Hossain</option>
                                                                                    <option value="1164">Acme (Nozrul)</option>
                                                                                    <option value="1179">Actera</option>
                                                                                    <option value="1056">Afsar </option>
                                                                                    <option value="1194">Ali Hossain</option>
                                                                                    <option value="1122">Alim Uddin (K)</option>
                                                                                    <option value="1158">Alom</option>
                                                                                    <option value="1200">Amin</option>
                                                                                    <option value="1147">Amir Ali</option>
                                                                                    <option value="1247">Amun</option>
                                                                                    <option value="1095">Amzad Hossain</option>
                                                                                    <option value="1087">Anis</option>
                                                                                    <option value="1151">Arif</option>
                                                                                    <option value="1057">Armin (Projonmo)</option>
                                                                                    <option value="1252">Asd</option>
                                                                                    <option value="1129">Asha Ghomez</option>
                                                                                    <option value="1214">Ashed</option>
                                                                                    <option value="1152">Ashik </option>
                                                                                    <option value="1130">Ashik (Projonmo)</option>
                                                                                    <option value="1111">Aslam </option>
                                                                                    <option value="1192">Aslam</option>
                                                                                    <option value="1051">Ataur Rahman</option>
                                                                                    <option value="1243">Athik</option>
                                                                                    <option value="1048">Atik (Projonmo)</option>
                                                                                    <option value="1073">Azad </option>
                                                                                    <option value="1120">Azmain Rohoman</option>
                                                                                    <option value="1142">Babul</option>
                                                                                    <option value="1248">Benoy</option>
                                                                                    <option value="1217">Bhh</option>
                                                                                    <option value="1218">Biplob</option>
                                                                                    <option value="1081">Blood, </option>
                                                                                    <option value="1131">Bondhu Pharmacy </option>
                                                                                    <option value="1249">boshonto</option>
                                                                                    <option value="1220">Bozlu</option>
                                                                                    <option value="1221">Bozlu</option>
                                                                                    <option value="1228">bozlu</option>
                                                                                    <option value="1025">cash</option>
                                                                                    <option value="1186">comisonar</option>
                                                                                    <option value="1206">customer</option>
                                                                                    <option value="1201">Delawar</option>
                                                                                    <option value="1135">Dhorenda </option>
                                                                                    <option value="1177">dicaltol</option>
                                                                                    <option value="1089">Dr Batenary</option>
                                                                                    <option value="1066">Dr. Priyanka  Roy</option>
                                                                                    <option value="1160">Dr. Soniya</option>
                                                                                    <option value="1178">DR.SUMON</option>
                                                                                    <option value="1054">Ekramul JK</option>
                                                                                    <option value="1055">Emergency</option>
                                                                                    <option value="1230">faysal</option>
                                                                                    <option value="1050">Ferdos sement</option>
                                                                                    <option value="1071">Ferdous </option>
                                                                                    <option value="1128">Forid</option>
                                                                                    <option value="1123">Forid (Ramoril)</option>
                                                                                    <option value="1076">FURID</option>
                                                                                    <option value="1250">fvfvfv</option>
                                                                                    <option value="1108">Galif</option>
                                                                                    <option value="1180">Galif(Amaril4)</option>
                                                                                    <option value="1253">ghgh</option>
                                                                                    <option value="1190">Gluvan 850</option>
                                                                                    <option value="1233">Gulzar</option>
                                                                                    <option value="1242">Habib</option>
                                                                                    <option value="1092">Happy</option>
                                                                                    <option value="1170">Hazera Aktar</option>
                                                                                    <option value="1176">hemolin</option>
                                                                                    <option value="1112">HFA</option>
                                                                                    <option value="1197">Hujur</option>
                                                                                    <option value="1173">Humulin</option>
                                                                                    <option value="1165">Jahanara (Khala)</option>
                                                                                    <option value="1061">Jamid Sorder</option>
                                                                                    <option value="1065">Jihad</option>
                                                                                    <option value="1091">Jorina</option>
                                                                                    <option value="1101">jowel</option>
                                                                                    <option value="1110">Juel (Projonmo)</option>
                                                                                    <option value="1159">Juel P (Projonmo)</option>
                                                                                    <option value="1100">Kamal Hossain</option>
                                                                                    <option value="1202">Karim</option>
                                                                                    <option value="1238">Karim</option>
                                                                                    <option value="1144">Kawser</option>
                                                                                    <option value="1161">kawshar</option>
                                                                                    <option value="1109">Kazi Medical holl</option>
                                                                                    <option value="1083">Khairul  Aristopharma</option>
                                                                                    <option value="1210">khaled</option>
                                                                                    <option value="1258">khaled</option>
                                                                                    <option value="1134">Khan cabol</option>
                                                                                    <option value="1140">Khorshed Ali</option>
                                                                                    <option value="1068">Kobir Hossin</option>
                                                                                    <option value="1094">Koly (Projonmo)</option>
                                                                                    <option value="1078">Labe</option>
                                                                                    <option value="1127">Ligazid</option>
                                                                                    <option value="1063">Lima</option>
                                                                                    <option value="1145">Lipi </option>
                                                                                    <option value="1107">Lipi (Projonmo)</option>
                                                                                    <option value="1070">Liza</option>
                                                                                    <option value="1187">losectil</option>
                                                                                    <option value="1146">Lovely</option>
                                                                                    <option value="1245">Mahfuz Azim</option>
                                                                                    <option value="1234">Mahmuda</option>
                                                                                    <option value="1235">Mahmuda</option>
                                                                                    <option value="1251">Mahmuda Mimi</option>
                                                                                    <option value="1155">Mamun (Healthcare)</option>
                                                                                    <option value="1143">Mamun (Kidmil)</option>
                                                                                    <option value="1181">MAMUN(GK)</option>
                                                                                    <option value="1141">Master (Manikgonj)</option>
                                                                                    <option value="1077">MD. Azad</option>
                                                                                    <option value="1098">MD. Babu Hossain</option>
                                                                                    <option value="1232">MD. Joybijoy </option>
                                                                                    <option value="1121">MD. Tujamel Hok</option>
                                                                                    <option value="1212">Md.Khaled Khan</option>
                                                                                    <option value="1049">MD.Malek Vai</option>
                                                                                    <option value="1185">MD.Sahauddin</option>
                                                                                    <option value="1175">Mehedi</option>
                                                                                    <option value="1133">Mili Aktar</option>
                                                                                    <option value="1105">Milon</option>
                                                                                    <option value="1229">Mithu</option>
                                                                                    <option value="1067">Mizan</option>
                                                                                    <option value="1222">mo</option>
                                                                                    <option value="1148">Mohommod ali comisonar</option>
                                                                                    <option value="1117">monjur Khan</option>
                                                                                    <option value="1183">Morium</option>
                                                                                    <option value="1113">mr ALLOM</option>
                                                                                    <option value="1114">MR. ALLOM</option>
                                                                                    <option value="1205">Mr. XXXX</option>
                                                                                    <option value="1079">Mukarom</option>
                                                                                    <option value="1074">Murshed (Projonmo)</option>
                                                                                    <option value="1189">Nahid</option>
                                                                                    <option value="1116">NANA(JUEL)</option>
                                                                                    <option value="1216">Nanno</option>
                                                                                    <option value="1106">Nazma (Samsul)</option>
                                                                                    <option value="1162">Nerupoma</option>
                                                                                    <option value="1219">Nur Pharmacy</option>
                                                                                    <option value="1168">ovic pall</option>
                                                                                    <option value="1132">Polish</option>
                                                                                    <option value="1195">Prent Sanitary mart</option>
                                                                                    <option value="1058">Prince (Rosuva)</option>
                                                                                    <option value="1167">PROFACHAR</option>
                                                                                    <option value="1086">projonmo</option>
                                                                                    <option value="1093">Projonmo (DNC)</option>
                                                                                    <option value="1172">Projonmo (Emarjency)</option>
                                                                                    <option value="1138">projonmo circumcision</option>
                                                                                    <option value="1103">Rabya</option>
                                                                                    <option value="1227">Rafe Pharma</option>
                                                                                    <option value="1136">Rafique </option>
                                                                                    <option value="1225">rafique</option>
                                                                                    <option value="1040">Rahat Kholifa</option>
                                                                                    <option value="1196">Rahoman Hossain</option>
                                                                                    <option value="1072">Rajib Medical Holl</option>
                                                                                    <option value="1075">RAJU</option>
                                                                                    <option value="1237">Rakib</option>
                                                                                    <option value="1104">Rekha(Khala)</option>
                                                                                    <option value="1125">renata</option>
                                                                                    <option value="1223">reo</option>
                                                                                    <option value="1199">Rincon</option>
                                                                                    <option value="1097">Robin</option>
                                                                                    <option value="1191">Robiul(Jahaggirnogor)</option>
                                                                                    <option value="1137">Rocky</option>
                                                                                    <option value="1226">Rofik</option>
                                                                                    <option value="1118">Rony (Projonmo)</option>
                                                                                    <option value="1139">Rowsonara bagem</option>
                                                                                    <option value="1062">Rubel</option>
                                                                                    <option value="1069">Rubel MPSM</option>
                                                                                    <option value="1024">Rumon</option>
                                                                                    <option value="1244">SABBIR</option>
                                                                                    <option value="1215">saif</option>
                                                                                    <option value="1060">Sajahan</option>
                                                                                    <option value="1246">sajal</option>
                                                                                    <option value="1084">Salauddin</option>
                                                                                    <option value="1149">Salauddin</option>
                                                                                    <option value="1059">Salim</option>
                                                                                    <option value="1174">Santo</option>
                                                                                    <option value="1254">sefrswad</option>
                                                                                    <option value="1169">Shad Sultana</option>
                                                                                    <option value="1090">Shamsun Nahar</option>
                                                                                    <option value="1207">sharif</option>
                                                                                    <option value="1156">Shedam</option>
                                                                                    <option value="1096">Sobed Ali taiec</option>
                                                                                    <option value="1053">Sobuj </option>
                                                                                    <option value="1208">SOFTWAREFARM</option>
                                                                                    <option value="1163">Sokhi</option>
                                                                                    <option value="1124">Soma</option>
                                                                                    <option value="1184">Sorsothi Saha</option>
                                                                                    <option value="1115">SPIROCARD</option>
                                                                                    <option value="1255">ss</option>
                                                                                    <option value="1166">STAR PH</option>
                                                                                    <option value="1193">Sufiya</option>
                                                                                    <option value="1064">Syod. Hamayet Hossin</option>
                                                                                    <option value="1198">Takowa pharmacy</option>
                                                                                    <option value="1154">Tarek(Ibn Sina)</option>
                                                                                    <option value="1046">Taskia</option>
                                                                                    <option value="1102">Tawhid Medicin corner</option>
                                                                                    <option value="1126">Tuhin</option>
                                                                                    <option value="1188">Tumpa</option>
                                                                                    <option value="1257">Walid</option>
                                                                                    <option value="1211">Walk in Coustomar</option>
                                                                                    <option value="1204">X</option>
                                                                                    <option value="1256">Zaman</option>
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
