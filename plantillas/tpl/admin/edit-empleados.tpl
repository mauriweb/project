<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="es" class="no-js"> <!--<![endif]-->

<head>
        <!-- =======================================
        
        HEAD
        
        ======================================= -->
        {include file="admin/head.tpl"}
        <!-- =======================================
        
        FIN HEAD
        
        ======================================= -->	
        
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/gritter/css/jquery.gritter.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/select2/select2_metro.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/clockface/css/clockface.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-datepicker/css/datepicker.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-timepicker/compiled/timepicker.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-colorpicker/css/colorpicker.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/jquery-multi-select/css/multi-select.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch-metro.css"/>
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/jquery-tags-input/jquery.tagsinput.css" />
	<link rel="stylesheet" type="text/css" href="plantillas/assets/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
	<!-- END PAGE LEVEL STYLES -->
    {literal}
    <style type="text/css">
		.codigo{
			margin-top:7px;
			margin-bottom:7px;
			text-align:left;
			position:relative;
			padding-right:0px;
			font-weight:bold;
			font-size:12px;	
		}
		
		th, tr{
			text-align:center;
		}
		tr input{
			text-align:center
		}
			
	</style>
    {/literal}
    	
</head>

<body class="page-header-fixed">
        <!-- =======================================
        
        MENU
        
        ======================================= -->
        {include file="admin/menu.tpl"}		
        <!-- =======================================
        
        FIN MENU
        
        ======================================= -->
        <div class="page-container">
			<!-- BEGIN SIDEBAR -->
            <div class="page-sidebar navbar-collapse collapse">
               <!-- ======================================= MENU LATERAL ======================================= -->
            {include file="admin/menuLateral.tpl"}		
              <!-- ======================================= FIN MENU LATERAL ======================================= --> 
            <!-- END SIDEBAR MENU -->
            </div>
        	<!--###########################################################################################################-->
            <!-- BEGIN PAGE -->
            <div class="page-content"> 
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<h3 class="page-title">
						Editar empleados <small>aplicación Acero estudio</small>
					</h3>
					<ul class="page-breadcrumb breadcrumb">
						<li class="btn-group">
							
							<a href="empleados" class="btn red dropdown-toggle"><span style="color:#FFF;">Ver empleados</span></a>
							
						</li>
						<li>
							<i class="inicio"></i>
							<a href="inicio">Inicio</a> 
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							Editar empleados
						</li>
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">Editar empleados</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="#" id="form_sample_1" class="form-horizontal form-bordered form-row-stripped">
								<div class="form-body">
                                	<div class="form-group">
										<label class="control-label col-md-3">Sede</label>
										<div class="col-md-4">
											<select class="form-control" name="category" class="select2me">
                                            	<option value="ES">España</option>
                                                <option value="ES">Perú</option>
											</select>
										</div>
									</div>
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Contraseña</label>
													<div class="col-md-4 codigo">
														<span class="control-labe">(se genera automáticamente, número del DNI)</span>
													</div>
									</div>
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Nombre</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="Nombre">
													</div>
									</div>
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Primer apellidos</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="Apellidos">
													</div>
									</div>
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Segundo apellidos</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="Apellidos">
													</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Fecha de nacimiento</label>
										<div class="col-md-4">
											<input class="form-control" id="mask_date2" type="text"  />
											<span class="help-block">dd/mm/yyyy</span>
										</div>
									</div>	
                                    <div class="form-group">
													<label  class="col-md-3 control-label">DNI</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="99999999-X">
													</div>
									</div>
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Teléfono</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="+99 999 99 99">
													</div>
									</div>
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Teléfono secundario</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="+99 999 99 99">
													</div>
									</div>
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Email</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="ejemplo@ejemplo.com">
													</div>
									</div>
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Email secundarioa</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="ejemplo@ejemplo.com">
													</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">País</label>
										<div class="col-md-4">
											<select name="" id="select2_sample4" class="form-control select2">
                                            	<option value="ES">Spain</option>
												<option value="AF">Afghanistan</option>
												<option value="AL">Albania</option>
												<option value="DZ">Algeria</option>
												<option value="AS">American Samoa</option>
												<option value="AD">Andorra</option>
												<option value="AO">Angola</option>
												<option value="AI">Anguilla</option>
												<option value="AQ">Antarctica</option>
												<option value="AR">Argentina</option>
												<option value="AM">Armenia</option>
												<option value="AW">Aruba</option>
												<option value="AU">Australia</option>
												<option value="AT">Austria</option>
												<option value="AZ">Azerbaijan</option>
												<option value="BS">Bahamas</option>
												<option value="BH">Bahrain</option>
												<option value="BD">Bangladesh</option>
												<option value="BB">Barbados</option>
												<option value="BY">Belarus</option>
												<option value="BE">Belgium</option>
												<option value="BZ">Belize</option>
												<option value="BJ">Benin</option>
												<option value="BM">Bermuda</option>
												<option value="BT">Bhutan</option>
												<option value="BO">Bolivia</option>
												<option value="BA">Bosnia and Herzegowina</option>
												<option value="BW">Botswana</option>
												<option value="BV">Bouvet Island</option>
												<option value="BR">Brazil</option>
												<option value="IO">British Indian Ocean Territory</option>
												<option value="BN">Brunei Darussalam</option>
												<option value="BG">Bulgaria</option>
												<option value="BF">Burkina Faso</option>
												<option value="BI">Burundi</option>
												<option value="KH">Cambodia</option>
												<option value="CM">Cameroon</option>
												<option value="CA">Canada</option>
												<option value="CV">Cape Verde</option>
												<option value="KY">Cayman Islands</option>
												<option value="CF">Central African Republic</option>
												<option value="TD">Chad</option>
												<option value="CL">Chile</option>
												<option value="CN">China</option>
												<option value="CX">Christmas Island</option>
												<option value="CC">Cocos (Keeling) Islands</option>
												<option value="CO">Colombia</option>
												<option value="KM">Comoros</option>
												<option value="CG">Congo</option>
												<option value="CD">Congo, the Democratic Republic of the</option>
												<option value="CK">Cook Islands</option>
												<option value="CR">Costa Rica</option>
												<option value="CI">Cote d'Ivoire</option>
												<option value="HR">Croatia (Hrvatska)</option>
												<option value="CU">Cuba</option>
												<option value="CY">Cyprus</option>
												<option value="CZ">Czech Republic</option>
												<option value="DK">Denmark</option>
												<option value="DJ">Djibouti</option>
												<option value="DM">Dominica</option>
												<option value="DO">Dominican Republic</option>
												<option value="EC">Ecuador</option>
												<option value="EG">Egypt</option>
												<option value="SV">El Salvador</option>
												<option value="GQ">Equatorial Guinea</option>
												<option value="ER">Eritrea</option>
												<option value="EE">Estonia</option>
												<option value="ET">Ethiopia</option>
												<option value="FK">Falkland Islands (Malvinas)</option>
												<option value="FO">Faroe Islands</option>
												<option value="FJ">Fiji</option>
												<option value="FI">Finland</option>
												<option value="FR">France</option>
												<option value="GF">French Guiana</option>
												<option value="PF">French Polynesia</option>
												<option value="TF">French Southern Territories</option>
												<option value="GA">Gabon</option>
												<option value="GM">Gambia</option>
												<option value="GE">Georgia</option>
												<option value="DE">Germany</option>
												<option value="GH">Ghana</option>
												<option value="GI">Gibraltar</option>
												<option value="GR">Greece</option>
												<option value="GL">Greenland</option>
												<option value="GD">Grenada</option>
												<option value="GP">Guadeloupe</option>
												<option value="GU">Guam</option>
												<option value="GT">Guatemala</option>
												<option value="GN">Guinea</option>
												<option value="GW">Guinea-Bissau</option>
												<option value="GY">Guyana</option>
												<option value="HT">Haiti</option>
												<option value="HM">Heard and Mc Donald Islands</option>
												<option value="VA">Holy See (Vatican City State)</option>
												<option value="HN">Honduras</option>
												<option value="HK">Hong Kong</option>
												<option value="HU">Hungary</option>
												<option value="IS">Iceland</option>
												<option value="IN">India</option>
												<option value="ID">Indonesia</option>
												<option value="IR">Iran (Islamic Republic of)</option>
												<option value="IQ">Iraq</option>
												<option value="IE">Ireland</option>
												<option value="IL">Israel</option>
												<option value="IT">Italy</option>
												<option value="JM">Jamaica</option>
												<option value="JP">Japan</option>
												<option value="JO">Jordan</option>
												<option value="KZ">Kazakhstan</option>
												<option value="KE">Kenya</option>
												<option value="KI">Kiribati</option>
												<option value="KP">Korea, Democratic People's Republic of</option>
												<option value="KR">Korea, Republic of</option>
												<option value="KW">Kuwait</option>
												<option value="KG">Kyrgyzstan</option>
												<option value="LA">Lao People's Democratic Republic</option>
												<option value="LV">Latvia</option>
												<option value="LB">Lebanon</option>
												<option value="LS">Lesotho</option>
												<option value="LR">Liberia</option>
												<option value="LY">Libyan Arab Jamahiriya</option>
												<option value="LI">Liechtenstein</option>
												<option value="LT">Lithuania</option>
												<option value="LU">Luxembourg</option>
												<option value="MO">Macau</option>
												<option value="MK">Macedonia, The Former Yugoslav Republic of</option>
												<option value="MG">Madagascar</option>
												<option value="MW">Malawi</option>
												<option value="MY">Malaysia</option>
												<option value="MV">Maldives</option>
												<option value="ML">Mali</option>
												<option value="MT">Malta</option>
												<option value="MH">Marshall Islands</option>
												<option value="MQ">Martinique</option>
												<option value="MR">Mauritania</option>
												<option value="MU">Mauritius</option>
												<option value="YT">Mayotte</option>
												<option value="MX">Mexico</option>
												<option value="FM">Micronesia, Federated States of</option>
												<option value="MD">Moldova, Republic of</option>
												<option value="MC">Monaco</option>
												<option value="MN">Mongolia</option>
												<option value="MS">Montserrat</option>
												<option value="MA">Morocco</option>
												<option value="MZ">Mozambique</option>
												<option value="MM">Myanmar</option>
												<option value="NA">Namibia</option>
												<option value="NR">Nauru</option>
												<option value="NP">Nepal</option>
												<option value="NL">Netherlands</option>
												<option value="AN">Netherlands Antilles</option>
												<option value="NC">New Caledonia</option>
												<option value="NZ">New Zealand</option>
												<option value="NI">Nicaragua</option>
												<option value="NE">Niger</option>
												<option value="NG">Nigeria</option>
												<option value="NU">Niue</option>
												<option value="NF">Norfolk Island</option>
												<option value="MP">Northern Mariana Islands</option>
												<option value="NO">Norway</option>
												<option value="OM">Oman</option>
												<option value="PK">Pakistan</option>
												<option value="PW">Palau</option>
												<option value="PA">Panama</option>
												<option value="PG">Papua New Guinea</option>
												<option value="PY">Paraguay</option>
												<option value="PE">Peru</option>
												<option value="PH">Philippines</option>
												<option value="PN">Pitcairn</option>
												<option value="PL">Poland</option>
												<option value="PT">Portugal</option>
												<option value="PR">Puerto Rico</option>
												<option value="QA">Qatar</option>
												<option value="RE">Reunion</option>
												<option value="RO">Romania</option>
												<option value="RU">Russian Federation</option>
												<option value="RW">Rwanda</option>
												<option value="KN">Saint Kitts and Nevis</option>
												<option value="LC">Saint LUCIA</option>
												<option value="VC">Saint Vincent and the Grenadines</option>
												<option value="WS">Samoa</option>
												<option value="SM">San Marino</option>
												<option value="ST">Sao Tome and Principe</option>
												<option value="SA">Saudi Arabia</option>
												<option value="SN">Senegal</option>
												<option value="SC">Seychelles</option>
												<option value="SL">Sierra Leone</option>
												<option value="SG">Singapore</option>
												<option value="SK">Slovakia (Slovak Republic)</option>
												<option value="SI">Slovenia</option>
												<option value="SB">Solomon Islands</option>
												<option value="SO">Somalia</option>
												<option value="ZA">South Africa</option>
												<option value="GS">South Georgia and the South Sandwich Islands</option>
												<option value="LK">Sri Lanka</option>
												<option value="SH">St. Helena</option>
												<option value="PM">St. Pierre and Miquelon</option>
												<option value="SD">Sudan</option>
												<option value="SR">Suriname</option>
												<option value="SJ">Svalbard and Jan Mayen Islands</option>
												<option value="SZ">Swaziland</option>
												<option value="SE">Sweden</option>
												<option value="CH">Switzerland</option>
												<option value="SY">Syrian Arab Republic</option>
												<option value="TW">Taiwan, Province of China</option>
												<option value="TJ">Tajikistan</option>
												<option value="TZ">Tanzania, United Republic of</option>
												<option value="TH">Thailand</option>
												<option value="TG">Togo</option>
												<option value="TK">Tokelau</option>
												<option value="TO">Tonga</option>
												<option value="TT">Trinidad and Tobago</option>
												<option value="TN">Tunisia</option>
												<option value="TR">Turkey</option>
												<option value="TM">Turkmenistan</option>
												<option value="TC">Turks and Caicos Islands</option>
												<option value="TV">Tuvalu</option>
												<option value="UG">Uganda</option>
												<option value="UA">Ukraine</option>
												<option value="AE">United Arab Emirates</option>
												<option value="GB">United Kingdom</option>
												<option value="US">United States</option>
												<option value="UM">United States Minor Outlying Islands</option>
												<option value="UY">Uruguay</option>
												<option value="UZ">Uzbekistan</option>
												<option value="VU">Vanuatu</option>
												<option value="VE">Venezuela</option>
												<option value="VN">Viet Nam</option>
												<option value="VG">Virgin Islands (British)</option>
												<option value="VI">Virgin Islands (U.S.)</option>
												<option value="WF">Wallis and Futuna Islands</option>
												<option value="EH">Western Sahara</option>
												<option value="YE">Yemen</option>
												<option value="ZM">Zambia</option>
												<option value="ZW">Zimbabwe</option>
											</select>
										</div>
									</div>
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Ciudad</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="Insertar ciudad">
													</div>
									</div>
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Población</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="Insertar población">
														
													</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Dirección</label>
										<div class="col-md-9">
											<input type="text" class="form-control" maxlength="100" name="defaultconfig" id="maxlength_placement">
											<span class="help-block">
											Máximo 100 caracteres
											</span>
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Categoria profesional</label>
										<div class="col-md-4">
											<select class="form-control" name="category" class="select2me">
                                            	<option value="ES">E101</option>
                                                <option value="ES">E101</option>
                                                <option value="ES">E101</option>
                                                <option value="ES">E101</option>
                                                <option value="ES">E101</option>
											</select>
										</div>
									</div>
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Nº Cuenta Bancaria</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="C102">
													</div>
									</div>
                                     <div class="form-group">
													<label  class="col-md-3 control-label">Nº Seguridad Social</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="C102">
													</div>
									</div>
                                    <div class="form-group">
													<label  class="col-md-3 control-label">Grupo cotización</label>
													<div class="col-md-4">
														<input type="text" class="form-control" placeholder="C102">
													</div>
									</div>
								</div>
								<div class="form-actions fluid">
									<div class="col-md-offset-3 col-md-9">
										<button type="submit" class="btn red">Enviar</button>
										<button type="button" class="btn default">Cancelar</button>                              
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END VALIDATION STATES-->
				</div>
			</div>
			<!-- END PAGE CONTENT -->
		</div>
		
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->
        
                 
       <!-- =======================================
        
        PIE
        
        ======================================= -->
        {include file="admin/pie.tpl"}		
        <!-- =======================================
        
        FIN PIE
        
        ======================================= -->
        <script type="text/javascript" src="plantillas/assets/plugins/fuelux/js/spinner.min.js"></script>
		<script type="text/javascript" src="plantillas/assets/plugins/ckeditor/ckeditor.js"></script>  
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/select2/select2.min.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/clockface/js/clockface.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script> 
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
        <script type="text/javascript" src="plantillas/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   
        <script type="text/javascript" src="plantillas/assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="plantillas/assets/plugins/jquery-multi-select/js/jquery.quicksearch.js"></script>   
        <script src="plantillas/assets/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js" type="text/javascript" ></script>
        <script src="plantillas/assets/plugins/bootstrap-switch/static/js/bootstrap-switch.min.js" type="text/javascript" ></script>
        <script src="plantillas/assets/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript" ></script>
        <script src="plantillas/assets/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript" ></script>
        <script src="plantillas/assets/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript" ></script>
        <script src="plantillas/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript" ></script>
        <script src="plantillas/assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript" ></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="plantillas/assets/scripts/app.js"></script>
        <script src="plantillas/assets/scripts/form-components.js"></script>     
        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
            jQuery(document).ready(function() {       
               // initiate layout and plugins
               App.init();
               FormComponents.init();
            });
        </script>
        <!-- BEGIN GOOGLE RECAPTCHA -->
        <script type="text/javascript">
            var RecaptchaOptions = {
               theme : 'custom',
               custom_theme_widget: 'recaptcha_widget'
            };
        </script>
        <script type="text/javascript" src="https://www.google.com/recaptcha/api/challenge?k=6LcrK9cSAAAAALEcjG9gTRPbeA0yAVsKd8sBpFpR"></script>
        <!-- END GOOGLE RECAPTCHA -->
		<!-- END JAVASCRIPTS -->   
</body>
</html>
