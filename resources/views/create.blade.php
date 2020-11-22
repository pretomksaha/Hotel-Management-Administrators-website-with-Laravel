<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form class="jotform-form" action="https://submit.jotform.com/submit/203055226721345/" method="post" name="form_203055226721345" id="203055226721345" accept-charset="utf-8" autocomplete="on">
                    <input type="hidden" name="formID" value="203055226721345" />
                    <input type="hidden" id="JWTContainer" value="" />
                    <input type="hidden" id="cardinalOrderNumber" value="" />
                    <div role="main" class="form-all">
                        <ul class="form-section page-section">
                            <li id="cid_1" class="form-input-wide" data-type="control_head">
                                <div class="form-header-group  header-large">
                                    <div class="header-text httal htvam">
                                        <h1 id="header_1" class="form-header" data-component="header">
                                            Booking Enquiry Form
                                        </h1>
                                        <div id="subHeader_1" class="form-subHeader">
                                            Once we receive the filled form, we will contact you shortly to confirm availability.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line jf-required" data-type="control_fullname" id="id_4">
                                <label class="form-label form-label-left form-label-auto" id="label_4" for="prefix_4">
                                    Full Name
                                    <span class="form-required">
            *
          </span>
                                </label>
                                <div id="cid_4" class="form-input jf-required">
                                    <div data-wrapper-react="true" class="extended">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="prefix">
              <input type="text" id="prefix_4" name="q4_fullName4[prefix]" class="form-textbox" size="4" value="" data-component="prefix" aria-labelledby="label_4 sublabel_4_prefix" required="" />
              <label class="form-sub-label" for="prefix_4" id="sublabel_4_prefix" style="min-height:13px" aria-hidden="false"> Prefix </label>
            </span>
                                        <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_4" name="q4_fullName4[first]" class="form-textbox validate[required]" size="10" value="" data-component="first" aria-labelledby="label_4 sublabel_4_first" required="" />
              <label class="form-sub-label" for="first_4" id="sublabel_4_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
                                        <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_4" name="q4_fullName4[last]" class="form-textbox validate[required]" size="15" value="" data-component="last" aria-labelledby="label_4 sublabel_4_last" required="" />
              <label class="form-sub-label" for="last_4" id="sublabel_4_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line jf-required" data-type="control_email" id="id_5">
                                <label class="form-label form-label-left form-label-auto" id="label_5" for="input_5">
                                    E-mail
                                    <span class="form-required">
            *
          </span>
                                </label>
                                <div id="cid_5" class="form-input jf-required">
                                    <input type="email" id="input_5" name="q5_email5" class="form-textbox validate[required, Email]" size="30" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_5" required="" />
                                </div>
                            </li>
                            <li class="form-line jf-required" data-type="control_phone" id="id_6">
                                <label class="form-label form-label-left form-label-auto" id="label_6" for="input_6_area">
                                    Phone Number
                                    <span class="form-required">
            *
          </span>
                                </label>
                                <div id="cid_6" class="form-input jf-required">
                                    <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="areaCode">
              <input type="tel" id="input_6_area" name="q6_phoneNumber6[area]" class="form-textbox validate[required]" value="" data-component="areaCode" aria-labelledby="label_6 sublabel_6_area" required="" />
              <span class="phone-separate" aria-hidden="true">
                 -
              </span>
              <label class="form-sub-label" for="input_6_area" id="sublabel_6_area" style="min-height:13px" aria-hidden="false"> Area Code </label>
            </span>
                                        <span class="form-sub-label-container" style="vertical-align:top" data-input-type="phone">
              <input type="tel" id="input_6_phone" name="q6_phoneNumber6[phone]" class="form-textbox validate[required]" value="" data-component="phone" aria-labelledby="label_6 sublabel_6_phone" required="" />
              <label class="form-sub-label" for="input_6_phone" id="sublabel_6_phone" style="min-height:13px" aria-hidden="false"> Phone Number </label>
            </span>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line jf-required" data-type="control_address" id="id_9">
                                <label class="form-label form-label-left form-label-auto" id="label_9" for="input_9_addr_line1">
                                    Address
                                    <span class="form-required">
            *
          </span>
                                </label>
                                <div id="cid_9" class="form-input jf-required">
                                    <div summary="" class="form-address-table jsTest-addressField">
                                        <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_9_addr_line1" name="q9_address[addr_line1]" class="form-textbox validate[required] form-address-line" value="" data-component="address_line_1" aria-labelledby="label_9 sublabel_9_addr_line1" />
                  <label class="form-sub-label" for="input_9_addr_line1" id="sublabel_9_addr_line1" style="min-height:13px" aria-hidden="false"> Street Address </label>
                </span>
              </span>
                                        </div>
                                        <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_9_addr_line2" name="q9_address[addr_line2]" class="form-textbox form-address-line" value="" data-component="address_line_2" aria-labelledby="label_9 sublabel_9_addr_line2" />
                  <label class="form-sub-label" for="input_9_addr_line2" id="sublabel_9_addr_line2" style="min-height:13px" aria-hidden="false"> Street Address Line 2 </label>
                </span>
              </span>
                                        </div>
                                        <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_9_city" name="q9_address[city]" class="form-textbox validate[required] form-address-city" value="" data-component="city" aria-labelledby="label_9 sublabel_9_city" />
                  <label class="form-sub-label" for="input_9_city" id="sublabel_9_city" style="min-height:13px" aria-hidden="false"> City </label>
                </span>
              </span>
                                            <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_9_state" name="q9_address[state]" class="form-textbox validate[required] form-address-state" value="" data-component="state" aria-labelledby="label_9 sublabel_9_state" />
                  <label class="form-sub-label" for="input_9_state" id="sublabel_9_state" style="min-height:13px" aria-hidden="false"> State / Province </label>
                </span>
              </span>
                                        </div>
                                        <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-zip-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_9_postal" name="q9_address[postal]" class="form-textbox form-address-postal" value="" data-component="zip" aria-labelledby="label_9 sublabel_9_postal" />
                  <label class="form-sub-label" for="input_9_postal" id="sublabel_9_postal" style="min-height:13px" aria-hidden="false"> Postal / Zip Code </label>
                </span>
              </span>
                                            <span class="form-address-line form-address-country-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <select class="form-dropdown validate[required] form-address-country noTranslate" name="q9_address[country]" id="input_9_country" data-component="country" required="" aria-labelledby="label_9 sublabel_9_country">
                    <option value=""> Please Select </option>
                    <option value="United States"> United States </option>
                    <option value="Afghanistan"> Afghanistan </option>
                    <option value="Albania"> Albania </option>
                    <option value="Algeria"> Algeria </option>
                    <option value="American Samoa"> American Samoa </option>
                    <option value="Andorra"> Andorra </option>
                    <option value="Angola"> Angola </option>
                    <option value="Anguilla"> Anguilla </option>
                    <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                    <option value="Argentina"> Argentina </option>
                    <option value="Armenia"> Armenia </option>
                    <option value="Aruba"> Aruba </option>
                    <option value="Australia"> Australia </option>
                    <option value="Austria"> Austria </option>
                    <option value="Azerbaijan"> Azerbaijan </option>
                    <option value="The Bahamas"> The Bahamas </option>
                    <option value="Bahrain"> Bahrain </option>
                    <option value="Bangladesh"> Bangladesh </option>
                    <option value="Barbados"> Barbados </option>
                    <option value="Belarus"> Belarus </option>
                    <option value="Belgium"> Belgium </option>
                    <option value="Belize"> Belize </option>
                    <option value="Benin"> Benin </option>
                    <option value="Bermuda"> Bermuda </option>
                    <option value="Bhutan"> Bhutan </option>
                    <option value="Bolivia"> Bolivia </option>
                    <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                    <option value="Botswana"> Botswana </option>
                    <option value="Brazil"> Brazil </option>
                    <option value="Brunei"> Brunei </option>
                    <option value="Bulgaria"> Bulgaria </option>
                    <option value="Burkina Faso"> Burkina Faso </option>
                    <option value="Burundi"> Burundi </option>
                    <option value="Cambodia"> Cambodia </option>
                    <option value="Cameroon"> Cameroon </option>
                    <option value="Canada"> Canada </option>
                    <option value="Cape Verde"> Cape Verde </option>
                    <option value="Cayman Islands"> Cayman Islands </option>
                    <option value="Central African Republic"> Central African Republic </option>
                    <option value="Chad"> Chad </option>
                    <option value="Chile"> Chile </option>
                    <option value="China"> China </option>
                    <option value="Christmas Island"> Christmas Island </option>
                    <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                    <option value="Colombia"> Colombia </option>
                    <option value="Comoros"> Comoros </option>
                    <option value="Congo"> Congo </option>
                    <option value="Cook Islands"> Cook Islands </option>
                    <option value="Costa Rica"> Costa Rica </option>
                    <option value="Cote d&#x27;Ivoire"> Cote d&#x27;Ivoire </option>
                    <option value="Croatia"> Croatia </option>
                    <option value="Cuba"> Cuba </option>
                    <option value="Curacao"> Curacao </option>
                    <option value="Cyprus"> Cyprus </option>
                    <option value="Czech Republic"> Czech Republic </option>
                    <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                    <option value="Denmark"> Denmark </option>
                    <option value="Djibouti"> Djibouti </option>
                    <option value="Dominica"> Dominica </option>
                    <option value="Dominican Republic"> Dominican Republic </option>
                    <option value="Ecuador"> Ecuador </option>
                    <option value="Egypt"> Egypt </option>
                    <option value="El Salvador"> El Salvador </option>
                    <option value="Equatorial Guinea"> Equatorial Guinea </option>
                    <option value="Eritrea"> Eritrea </option>
                    <option value="Estonia"> Estonia </option>
                    <option value="Ethiopia"> Ethiopia </option>
                    <option value="Falkland Islands"> Falkland Islands </option>
                    <option value="Faroe Islands"> Faroe Islands </option>
                    <option value="Fiji"> Fiji </option>
                    <option value="Finland"> Finland </option>
                    <option value="France"> France </option>
                    <option value="French Polynesia"> French Polynesia </option>
                    <option value="Gabon"> Gabon </option>
                    <option value="The Gambia"> The Gambia </option>
                    <option value="Georgia"> Georgia </option>
                    <option value="Germany"> Germany </option>
                    <option value="Ghana"> Ghana </option>
                    <option value="Gibraltar"> Gibraltar </option>
                    <option value="Greece"> Greece </option>
                    <option value="Greenland"> Greenland </option>
                    <option value="Grenada"> Grenada </option>
                    <option value="Guadeloupe"> Guadeloupe </option>
                    <option value="Guam"> Guam </option>
                    <option value="Guatemala"> Guatemala </option>
                    <option value="Guernsey"> Guernsey </option>
                    <option value="Guinea"> Guinea </option>
                    <option value="Guinea-Bissau"> Guinea-Bissau </option>
                    <option value="Guyana"> Guyana </option>
                    <option value="Haiti"> Haiti </option>
                    <option value="Honduras"> Honduras </option>
                    <option value="Hong Kong"> Hong Kong </option>
                    <option value="Hungary"> Hungary </option>
                    <option value="Iceland"> Iceland </option>
                    <option value="India"> India </option>
                    <option value="Indonesia"> Indonesia </option>
                    <option value="Iran"> Iran </option>
                    <option value="Iraq"> Iraq </option>
                    <option value="Ireland"> Ireland </option>
                    <option value="Israel"> Israel </option>
                    <option value="Italy"> Italy </option>
                    <option value="Jamaica"> Jamaica </option>
                    <option value="Japan"> Japan </option>
                    <option value="Jersey"> Jersey </option>
                    <option value="Jordan"> Jordan </option>
                    <option value="Kazakhstan"> Kazakhstan </option>
                    <option value="Kenya"> Kenya </option>
                    <option value="Kiribati"> Kiribati </option>
                    <option value="North Korea"> North Korea </option>
                    <option value="South Korea"> South Korea </option>
                    <option value="Kosovo"> Kosovo </option>
                    <option value="Kuwait"> Kuwait </option>
                    <option value="Kyrgyzstan"> Kyrgyzstan </option>
                    <option value="Laos"> Laos </option>
                    <option value="Latvia"> Latvia </option>
                    <option value="Lebanon"> Lebanon </option>
                    <option value="Lesotho"> Lesotho </option>
                    <option value="Liberia"> Liberia </option>
                    <option value="Libya"> Libya </option>
                    <option value="Liechtenstein"> Liechtenstein </option>
                    <option value="Lithuania"> Lithuania </option>
                    <option value="Luxembourg"> Luxembourg </option>
                    <option value="Macau"> Macau </option>
                    <option value="Macedonia"> Macedonia </option>
                    <option value="Madagascar"> Madagascar </option>
                    <option value="Malawi"> Malawi </option>
                    <option value="Malaysia"> Malaysia </option>
                    <option value="Maldives"> Maldives </option>
                    <option value="Mali"> Mali </option>
                    <option value="Malta"> Malta </option>
                    <option value="Marshall Islands"> Marshall Islands </option>
                    <option value="Martinique"> Martinique </option>
                    <option value="Mauritania"> Mauritania </option>
                    <option value="Mauritius"> Mauritius </option>
                    <option value="Mayotte"> Mayotte </option>
                    <option value="Mexico"> Mexico </option>
                    <option value="Micronesia"> Micronesia </option>
                    <option value="Moldova"> Moldova </option>
                    <option value="Monaco"> Monaco </option>
                    <option value="Mongolia"> Mongolia </option>
                    <option value="Montenegro"> Montenegro </option>
                    <option value="Montserrat"> Montserrat </option>
                    <option value="Morocco"> Morocco </option>
                    <option value="Mozambique"> Mozambique </option>
                    <option value="Myanmar"> Myanmar </option>
                    <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                    <option value="Namibia"> Namibia </option>
                    <option value="Nauru"> Nauru </option>
                    <option value="Nepal"> Nepal </option>
                    <option value="Netherlands"> Netherlands </option>
                    <option value="Netherlands Antilles"> Netherlands Antilles </option>
                    <option value="New Caledonia"> New Caledonia </option>
                    <option value="New Zealand"> New Zealand </option>
                    <option value="Nicaragua"> Nicaragua </option>
                    <option value="Niger"> Niger </option>
                    <option value="Nigeria"> Nigeria </option>
                    <option value="Niue"> Niue </option>
                    <option value="Norfolk Island"> Norfolk Island </option>
                    <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                    <option value="Northern Mariana"> Northern Mariana </option>
                    <option value="Norway"> Norway </option>
                    <option value="Oman"> Oman </option>
                    <option value="Pakistan"> Pakistan </option>
                    <option value="Palau"> Palau </option>
                    <option value="Palestine"> Palestine </option>
                    <option value="Panama"> Panama </option>
                    <option value="Papua New Guinea"> Papua New Guinea </option>
                    <option value="Paraguay"> Paraguay </option>
                    <option value="Peru"> Peru </option>
                    <option value="Philippines"> Philippines </option>
                    <option value="Pitcairn Islands"> Pitcairn Islands </option>
                    <option value="Poland"> Poland </option>
                    <option value="Portugal"> Portugal </option>
                    <option value="Puerto Rico"> Puerto Rico </option>
                    <option value="Qatar"> Qatar </option>
                    <option value="Republic of the Congo"> Republic of the Congo </option>
                    <option value="Romania"> Romania </option>
                    <option value="Russia"> Russia </option>
                    <option value="Rwanda"> Rwanda </option>
                    <option value="Saint Barthelemy"> Saint Barthelemy </option>
                    <option value="Saint Helena"> Saint Helena </option>
                    <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                    <option value="Saint Lucia"> Saint Lucia </option>
                    <option value="Saint Martin"> Saint Martin </option>
                    <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                    <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                    <option value="Samoa"> Samoa </option>
                    <option value="San Marino"> San Marino </option>
                    <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                    <option value="Saudi Arabia"> Saudi Arabia </option>
                    <option value="Senegal"> Senegal </option>
                    <option value="Serbia"> Serbia </option>
                    <option value="Seychelles"> Seychelles </option>
                    <option value="Sierra Leone"> Sierra Leone </option>
                    <option value="Singapore"> Singapore </option>
                    <option value="Slovakia"> Slovakia </option>
                    <option value="Slovenia"> Slovenia </option>
                    <option value="Solomon Islands"> Solomon Islands </option>
                    <option value="Somalia"> Somalia </option>
                    <option value="Somaliland"> Somaliland </option>
                    <option value="South Africa"> South Africa </option>
                    <option value="South Ossetia"> South Ossetia </option>
                    <option value="South Sudan"> South Sudan </option>
                    <option value="Spain"> Spain </option>
                    <option value="Sri Lanka"> Sri Lanka </option>
                    <option value="Sudan"> Sudan </option>
                    <option value="Suriname"> Suriname </option>
                    <option value="Svalbard"> Svalbard </option>
                    <option value="eSwatini"> eSwatini </option>
                    <option value="Sweden"> Sweden </option>
                    <option value="Switzerland"> Switzerland </option>
                    <option value="Syria"> Syria </option>
                    <option value="Taiwan"> Taiwan </option>
                    <option value="Tajikistan"> Tajikistan </option>
                    <option value="Tanzania"> Tanzania </option>
                    <option value="Thailand"> Thailand </option>
                    <option value="Timor-Leste"> Timor-Leste </option>
                    <option value="Togo"> Togo </option>
                    <option value="Tokelau"> Tokelau </option>
                    <option value="Tonga"> Tonga </option>
                    <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                    <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                    <option value="Tristan da Cunha"> Tristan da Cunha </option>
                    <option value="Tunisia"> Tunisia </option>
                    <option value="Turkey"> Turkey </option>
                    <option value="Turkmenistan"> Turkmenistan </option>
                    <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                    <option value="Tuvalu"> Tuvalu </option>
                    <option value="Uganda"> Uganda </option>
                    <option value="Ukraine"> Ukraine </option>
                    <option value="United Arab Emirates"> United Arab Emirates </option>
                    <option value="United Kingdom"> United Kingdom </option>
                    <option value="Uruguay"> Uruguay </option>
                    <option value="Uzbekistan"> Uzbekistan </option>
                    <option value="Vanuatu"> Vanuatu </option>
                    <option value="Vatican City"> Vatican City </option>
                    <option value="Venezuela"> Venezuela </option>
                    <option value="Vietnam"> Vietnam </option>
                    <option value="British Virgin Islands"> British Virgin Islands </option>
                    <option value="Isle of Man"> Isle of Man </option>
                    <option value="US Virgin Islands"> US Virgin Islands </option>
                    <option value="Wallis and Futuna"> Wallis and Futuna </option>
                    <option value="Western Sahara"> Western Sahara </option>
                    <option value="Yemen"> Yemen </option>
                    <option value="Zambia"> Zambia </option>
                    <option value="Zimbabwe"> Zimbabwe </option>
                    <option value="other"> Other </option>
                  </select>
                  <label class="form-sub-label" for="input_9_country" id="sublabel_9_country" style="min-height:13px" aria-hidden="false"> Country </label>
                </span>
              </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line jf-required" data-type="control_number" id="id_10">
                                <label class="form-label form-label-left form-label-auto" id="label_10" for="input_10">
                                    Number of Adults
                                    <span class="form-required">
            *
          </span>
                                </label>
                                <div id="cid_10" class="form-input jf-required">
                                    <input type="number" id="input_10" name="q10_numberOf10" data-type="input-number" class=" form-number-input form-textbox validate[required, Numeric]" style="width:60px" size="5" value="1" placeholder="ex: 23" data-component="number" aria-labelledby="label_10" required="" step="any" />
                                </div>
                            </li>
                            <li class="form-line jf-required" data-type="control_number" id="id_11">
                                <label class="form-label form-label-left form-label-auto" id="label_11" for="input_11">
                                    Number of Children Aged 6-15
                                    <span class="form-required">
            *
          </span>
                                </label>
                                <div id="cid_11" class="form-input jf-required">
                                    <input type="number" id="input_11" name="q11_numberOf11" data-type="input-number" class=" form-number-input form-textbox validate[required, Numeric]" style="width:60px" size="5" value="0" placeholder="ex: 23" data-component="number" aria-labelledby="label_11" required="" step="any" />
                                </div>
                            </li>
                            <li class="form-line jf-required" data-type="control_number" id="id_12">
                                <label class="form-label form-label-left form-label-auto" id="label_12" for="input_12">
                                    Number of Children Aged 0-5
                                    <span class="form-required">
            *
          </span>
                                </label>
                                <div id="cid_12" class="form-input jf-required">
                                    <input type="number" id="input_12" name="q12_numberOf12" data-type="input-number" class=" form-number-input form-textbox validate[required, Numeric]" style="width:60px" size="5" value="0" placeholder="ex: 23" data-component="number" aria-labelledby="label_12" required="" step="any" />
                                </div>
                            </li>
                            <li class="form-line form-line-column form-col-1 jf-required" data-type="control_birthdate" id="id_7">
                                <label class="form-label form-label-top" id="label_7" for="input_7">
                                    Arrival Date
                                    <span class="form-required">
            *
          </span>
                                </label>
                                <div id="cid_7" class="form-input-wide jf-required">
                                    <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top">
              <select name="q7_arrivalDate[day]" id="input_7_day" class="form-dropdown validate[required]" data-component="birthdate-day" aria-labelledby="label_7 sublabel_7_day">
                <option>  </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
                <option value="10"> 10 </option>
                <option value="11"> 11 </option>
                <option value="12"> 12 </option>
                <option value="13"> 13 </option>
                <option value="14"> 14 </option>
                <option value="15"> 15 </option>
                <option value="16"> 16 </option>
                <option value="17"> 17 </option>
                <option value="18"> 18 </option>
                <option value="19"> 19 </option>
                <option value="20"> 20 </option>
                <option value="21"> 21 </option>
                <option value="22"> 22 </option>
                <option value="23"> 23 </option>
                <option value="24"> 24 </option>
                <option value="25"> 25 </option>
                <option value="26"> 26 </option>
                <option value="27"> 27 </option>
                <option value="28"> 28 </option>
                <option value="29"> 29 </option>
                <option value="30"> 30 </option>
                <option value="31"> 31 </option>
              </select>
              <label class="form-sub-label" for="input_7_day" id="sublabel_7_day" style="min-height:13px" aria-hidden="false"> Day </label>
            </span>
                                        <span class="form-sub-label-container" style="vertical-align:top">
              <select name="q7_arrivalDate[month]" id="input_7_month" class="form-dropdown validate[required]" data-component="birthdate-month" aria-labelledby="label_7 sublabel_7_month">
                <option>  </option>
                <option value="January"> January </option>
                <option value="February"> February </option>
                <option value="March"> March </option>
                <option value="April"> April </option>
                <option value="May"> May </option>
                <option value="June"> June </option>
                <option value="July"> July </option>
                <option value="August"> August </option>
                <option value="September"> September </option>
                <option value="October"> October </option>
                <option value="November"> November </option>
                <option value="December"> December </option>
              </select>
              <label class="form-sub-label" for="input_7_month" id="sublabel_7_month" style="min-height:13px" aria-hidden="false"> Month </label>
            </span>
                                        <span class="form-sub-label-container" style="vertical-align:top">
              <select name="q7_arrivalDate[year]" id="input_7_year" class="form-dropdown validate[required]" data-component="birthdate-year" aria-labelledby="label_7 sublabel_7_year">
                <option>  </option>
                <option value="2020"> 2020 </option>
                <option value="2019"> 2019 </option>
                <option value="2018"> 2018 </option>
                <option value="2017"> 2017 </option>
                <option value="2016"> 2016 </option>
                <option value="2015"> 2015 </option>
                <option value="2014"> 2014 </option>
                <option value="2013"> 2013 </option>
                <option value="2012"> 2012 </option>
                <option value="2011"> 2011 </option>
                <option value="2010"> 2010 </option>
                <option value="2009"> 2009 </option>
                <option value="2008"> 2008 </option>
                <option value="2007"> 2007 </option>
                <option value="2006"> 2006 </option>
                <option value="2005"> 2005 </option>
                <option value="2004"> 2004 </option>
                <option value="2003"> 2003 </option>
                <option value="2002"> 2002 </option>
                <option value="2001"> 2001 </option>
                <option value="2000"> 2000 </option>
                <option value="1999"> 1999 </option>
                <option value="1998"> 1998 </option>
                <option value="1997"> 1997 </option>
                <option value="1996"> 1996 </option>
                <option value="1995"> 1995 </option>
                <option value="1994"> 1994 </option>
                <option value="1993"> 1993 </option>
                <option value="1992"> 1992 </option>
                <option value="1991"> 1991 </option>
                <option value="1990"> 1990 </option>
                <option value="1989"> 1989 </option>
                <option value="1988"> 1988 </option>
                <option value="1987"> 1987 </option>
                <option value="1986"> 1986 </option>
                <option value="1985"> 1985 </option>
                <option value="1984"> 1984 </option>
                <option value="1983"> 1983 </option>
                <option value="1982"> 1982 </option>
                <option value="1981"> 1981 </option>
                <option value="1980"> 1980 </option>
                <option value="1979"> 1979 </option>
                <option value="1978"> 1978 </option>
                <option value="1977"> 1977 </option>
                <option value="1976"> 1976 </option>
                <option value="1975"> 1975 </option>
                <option value="1974"> 1974 </option>
                <option value="1973"> 1973 </option>
                <option value="1972"> 1972 </option>
                <option value="1971"> 1971 </option>
                <option value="1970"> 1970 </option>
                <option value="1969"> 1969 </option>
                <option value="1968"> 1968 </option>
                <option value="1967"> 1967 </option>
                <option value="1966"> 1966 </option>
                <option value="1965"> 1965 </option>
                <option value="1964"> 1964 </option>
                <option value="1963"> 1963 </option>
                <option value="1962"> 1962 </option>
                <option value="1961"> 1961 </option>
                <option value="1960"> 1960 </option>
                <option value="1959"> 1959 </option>
                <option value="1958"> 1958 </option>
                <option value="1957"> 1957 </option>
                <option value="1956"> 1956 </option>
                <option value="1955"> 1955 </option>
                <option value="1954"> 1954 </option>
                <option value="1953"> 1953 </option>
                <option value="1952"> 1952 </option>
                <option value="1951"> 1951 </option>
                <option value="1950"> 1950 </option>
                <option value="1949"> 1949 </option>
                <option value="1948"> 1948 </option>
                <option value="1947"> 1947 </option>
                <option value="1946"> 1946 </option>
                <option value="1945"> 1945 </option>
                <option value="1944"> 1944 </option>
                <option value="1943"> 1943 </option>
                <option value="1942"> 1942 </option>
                <option value="1941"> 1941 </option>
                <option value="1940"> 1940 </option>
                <option value="1939"> 1939 </option>
                <option value="1938"> 1938 </option>
                <option value="1937"> 1937 </option>
                <option value="1936"> 1936 </option>
                <option value="1935"> 1935 </option>
                <option value="1934"> 1934 </option>
                <option value="1933"> 1933 </option>
                <option value="1932"> 1932 </option>
                <option value="1931"> 1931 </option>
                <option value="1930"> 1930 </option>
                <option value="1929"> 1929 </option>
                <option value="1928"> 1928 </option>
                <option value="1927"> 1927 </option>
                <option value="1926"> 1926 </option>
                <option value="1925"> 1925 </option>
                <option value="1924"> 1924 </option>
                <option value="1923"> 1923 </option>
                <option value="1922"> 1922 </option>
                <option value="1921"> 1921 </option>
                <option value="1920"> 1920 </option>
              </select>
              <label class="form-sub-label" for="input_7_year" id="sublabel_7_year" style="min-height:13px" aria-hidden="false"> Year </label>
            </span>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line form-line-column form-col-2 jf-required" data-type="control_birthdate" id="id_13">
                                <label class="form-label form-label-top" id="label_13" for="input_13">
                                    Departure Date
                                    <span class="form-required">
            *
          </span>
                                </label>
                                <div id="cid_13" class="form-input-wide jf-required">
                                    <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top">
              <select name="q13_departureDate[day]" id="input_13_day" class="form-dropdown validate[required]" data-component="birthdate-day" aria-labelledby="label_13 sublabel_13_day">
                <option>  </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
                <option value="10"> 10 </option>
                <option value="11"> 11 </option>
                <option value="12"> 12 </option>
                <option value="13"> 13 </option>
                <option value="14"> 14 </option>
                <option value="15"> 15 </option>
                <option value="16"> 16 </option>
                <option value="17"> 17 </option>
                <option value="18"> 18 </option>
                <option value="19"> 19 </option>
                <option value="20"> 20 </option>
                <option value="21"> 21 </option>
                <option value="22"> 22 </option>
                <option value="23"> 23 </option>
                <option value="24"> 24 </option>
                <option value="25"> 25 </option>
                <option value="26"> 26 </option>
                <option value="27"> 27 </option>
                <option value="28"> 28 </option>
                <option value="29"> 29 </option>
                <option value="30"> 30 </option>
                <option value="31"> 31 </option>
              </select>
              <label class="form-sub-label" for="input_13_day" id="sublabel_13_day" style="min-height:13px" aria-hidden="false"> Day </label>
            </span>
                                        <span class="form-sub-label-container" style="vertical-align:top">
              <select name="q13_departureDate[month]" id="input_13_month" class="form-dropdown validate[required]" data-component="birthdate-month" aria-labelledby="label_13 sublabel_13_month">
                <option>  </option>
                <option value="January"> January </option>
                <option value="February"> February </option>
                <option value="March"> March </option>
                <option value="April"> April </option>
                <option value="May"> May </option>
                <option value="June"> June </option>
                <option value="July"> July </option>
                <option value="August"> August </option>
                <option value="September"> September </option>
                <option value="October"> October </option>
                <option value="November"> November </option>
                <option value="December"> December </option>
              </select>
              <label class="form-sub-label" for="input_13_month" id="sublabel_13_month" style="min-height:13px" aria-hidden="false"> Month </label>
            </span>
                                        <span class="form-sub-label-container" style="vertical-align:top">
              <select name="q13_departureDate[year]" id="input_13_year" class="form-dropdown validate[required]" data-component="birthdate-year" aria-labelledby="label_13 sublabel_13_year">
                <option>  </option>
                <option value="2020"> 2020 </option>
                <option value="2019"> 2019 </option>
                <option value="2018"> 2018 </option>
                <option value="2017"> 2017 </option>
                <option value="2016"> 2016 </option>
                <option value="2015"> 2015 </option>
                <option value="2014"> 2014 </option>
                <option value="2013"> 2013 </option>
                <option value="2012"> 2012 </option>
                <option value="2011"> 2011 </option>
                <option value="2010"> 2010 </option>
                <option value="2009"> 2009 </option>
                <option value="2008"> 2008 </option>
                <option value="2007"> 2007 </option>
                <option value="2006"> 2006 </option>
                <option value="2005"> 2005 </option>
                <option value="2004"> 2004 </option>
                <option value="2003"> 2003 </option>
                <option value="2002"> 2002 </option>
                <option value="2001"> 2001 </option>
                <option value="2000"> 2000 </option>
                <option value="1999"> 1999 </option>
                <option value="1998"> 1998 </option>
                <option value="1997"> 1997 </option>
                <option value="1996"> 1996 </option>
                <option value="1995"> 1995 </option>
                <option value="1994"> 1994 </option>
                <option value="1993"> 1993 </option>
                <option value="1992"> 1992 </option>
                <option value="1991"> 1991 </option>
                <option value="1990"> 1990 </option>
                <option value="1989"> 1989 </option>
                <option value="1988"> 1988 </option>
                <option value="1987"> 1987 </option>
                <option value="1986"> 1986 </option>
                <option value="1985"> 1985 </option>
                <option value="1984"> 1984 </option>
                <option value="1983"> 1983 </option>
                <option value="1982"> 1982 </option>
                <option value="1981"> 1981 </option>
                <option value="1980"> 1980 </option>
                <option value="1979"> 1979 </option>
                <option value="1978"> 1978 </option>
                <option value="1977"> 1977 </option>
                <option value="1976"> 1976 </option>
                <option value="1975"> 1975 </option>
                <option value="1974"> 1974 </option>
                <option value="1973"> 1973 </option>
                <option value="1972"> 1972 </option>
                <option value="1971"> 1971 </option>
                <option value="1970"> 1970 </option>
                <option value="1969"> 1969 </option>
                <option value="1968"> 1968 </option>
                <option value="1967"> 1967 </option>
                <option value="1966"> 1966 </option>
                <option value="1965"> 1965 </option>
                <option value="1964"> 1964 </option>
                <option value="1963"> 1963 </option>
                <option value="1962"> 1962 </option>
                <option value="1961"> 1961 </option>
                <option value="1960"> 1960 </option>
                <option value="1959"> 1959 </option>
                <option value="1958"> 1958 </option>
                <option value="1957"> 1957 </option>
                <option value="1956"> 1956 </option>
                <option value="1955"> 1955 </option>
                <option value="1954"> 1954 </option>
                <option value="1953"> 1953 </option>
                <option value="1952"> 1952 </option>
                <option value="1951"> 1951 </option>
                <option value="1950"> 1950 </option>
                <option value="1949"> 1949 </option>
                <option value="1948"> 1948 </option>
                <option value="1947"> 1947 </option>
                <option value="1946"> 1946 </option>
                <option value="1945"> 1945 </option>
                <option value="1944"> 1944 </option>
                <option value="1943"> 1943 </option>
                <option value="1942"> 1942 </option>
                <option value="1941"> 1941 </option>
                <option value="1940"> 1940 </option>
                <option value="1939"> 1939 </option>
                <option value="1938"> 1938 </option>
                <option value="1937"> 1937 </option>
                <option value="1936"> 1936 </option>
                <option value="1935"> 1935 </option>
                <option value="1934"> 1934 </option>
                <option value="1933"> 1933 </option>
                <option value="1932"> 1932 </option>
                <option value="1931"> 1931 </option>
                <option value="1930"> 1930 </option>
                <option value="1929"> 1929 </option>
                <option value="1928"> 1928 </option>
                <option value="1927"> 1927 </option>
                <option value="1926"> 1926 </option>
                <option value="1925"> 1925 </option>
                <option value="1924"> 1924 </option>
                <option value="1923"> 1923 </option>
                <option value="1922"> 1922 </option>
                <option value="1921"> 1921 </option>
                <option value="1920"> 1920 </option>
              </select>
              <label class="form-sub-label" for="input_13_year" id="sublabel_13_year" style="min-height:13px" aria-hidden="false"> Year </label>
            </span>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line" data-type="control_textarea" id="id_14">
                                <label class="form-label form-label-left form-label-auto" id="label_14" for="input_14"> Comments? </label>
                                <div id="cid_14" class="form-input">
                                    <textarea id="input_14" class="form-textarea" name="q14_comments" cols="60" rows="10" data-component="textarea" aria-labelledby="label_14"></textarea>
                                </div>
                            </li>
                            <li class="form-line" data-type="control_button" id="id_15">
                                <div id="cid_15" class="form-input-wide">
                                    <div style="margin-left:156px" data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
                                        <button id="input_15" type="submit" class="form-submit-button form-submit-button-light submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
                                            Submit Form
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li style="clear:both">
                            </li>
                            <li style="display:none">
                                Should be Empty:
                                <input type="text" name="website" value="" />
                            </li>
                        </ul>
                    </div>
                    <script>
                        JotForm.showJotFormPowered = "new_footer";
                    </script>
                    <script>
                        JotForm.poweredByText = "Powered by JotForm";
                    </script>
                    <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="203055226721345" />
                    <script type="text/javascript">
                        var all_spc = document.querySelectorAll("form[id='203055226721345'] .si" + "mple" + "_spc");
                        for (var i = 0; i < all_spc.length; i++)
                        {
                            all_spc[i].value = "203055226721345-203055226721345";
                        }
                    </script>
                    <div class="formFooter-heightMask">
                    </div>
                    <div class="formFooter f6">
                        <div class="formFooter-wrapper formFooter-leftSide">
                           </div>
                        <div class="formFooter-wrapper formFooter-rightSide">
      <span class="formFooter-text">

      </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>