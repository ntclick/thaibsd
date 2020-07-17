<!DOCTYPE html>
<html dir="ltr">
<head>
    <title>แหวนหัวใจพระสูตร</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width" name="viewport">
    <link href="./assets/index.css" rel="stylesheet" type="text/css">
    <link href="./assets/style.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="./assets/nostra.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./assets/toastr.min.css">
	<script src="./assets/jquery-1.12.4.min.js"></script>
	<script src="./assets/dr-dtime.js"></script>
	<script src="./assets/fbp.js"></script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N7WXPN8');</script>
    <!-- End Google Tag Manager -->

    <script>
        jQuery(document).ready(function($) {
            sendClick(true);
            $('a.pre-link').attr('onclick', "sendClick(false);return true;");
        });
        function sendClick(first) {
            var urlParams = new URLSearchParams(window.location.search);
            var opid = urlParams.get('opid');
            if(!opid) return;
            var clickId = urlParams.get('click_id');
            var lp = urlParams.get('lp');
            var lp2 = urlParams.get('lp2');
            var landingId = [lp, lp2].filter(function(v) { return v;}).join(',');
            if(!landingId) landingId = 'seres';
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "https://zxc.world/v1/statistic/clicks?offer_id=nhanbatnha-th&landing_id=" + landingId + "&first=" + first + "&click_id=" + clickId);
            xhr.send();
        }
    </script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7WXPN8"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<script>var locale = 'vi';"use strict";function dtimes(e){var a,a,a=new Date;a.setDate(a.getDate()+e+1-1),document.write(a.getDate()+" "+months_localized[locale][a.getMonth()])}function dtime(e){var a=new Date;a.setDate(a.getDate()+e+1),document.write(days_localized[locale][a.getDay()]+" "+a.getDate()+",  "+months_localized[locale][a.getMonth()]+" "+a.getFullYear())}function dtime_nums(e){var a=new Date;a.setDate(a.getDate()+e+1);var r="";a.getDate()<10&&(r="0"),r+=a.getDate();var t="";a.getMonth()+1<10&&(t="0"),t+=a.getMonth()+1,document.write(t+"."+r+"."+a.getFullYear())}months_localized={ru:["января","февраля","марта","апреля","мая","июня","июля","августа","сентября","октября","ноября","декабря"],th:["มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"],fr:["janvier","février","mars","avril","mai","juin","juillet","août","septembre","octobre","novembre","décembre"],bg:["Януари","Февруари","Март","Април","Май","Юни","Юли","Август","Септември","Октомври","Ноември","Декември"],nl:["januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december"],pt:["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],de:["Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember"],tr:["Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık"],it:["Gennaio","Febbraio","Marzo","Aprile","Maggio","Giugno","Luglio","Agosto","Settembre","Ottobre","Novembre","Dicembre"],hu:["Január","Február","Március","Április","Május","Június","Július","Augusztus","Szeptember","Október","November","December"],en:["January","February","March","April","May","June","July","August","September","October","November","December"],es:["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],ro:["Ianuarie","Februarie","Martie","Aprilie","Mai","Iunie","Iulie","August","Septembrie","Octombrie","Noiembrie","Decembrie"],pl:["stycznia","lutego","marca","kwietnia","maja","czerwca","lipca","sierpnia","września","października","listopada","grudnia"],sr:["Јануар","Фебруар","Март","април","Мај","јун","јул","Август","Септембар","Октобар","Новембар","Децембар"]},days_localized={ru:["воскресенье","понедельник","вторник","среда","четверг","пятница","суббота"],th:["วันอาทิตย์","วันจันทร์","วันอังคาร","วันพุธ","วันพฤหัสบดี","วันศุกร์","วันเสาร์"],fr:["Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"],bg:["Неделя","Понеделник","Вторник","Сряда","Четвъртък","Петък","Събота"],nl:["zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag"],pt:["Domingo","Segunda Feira","Terça Feira","Quarta Feira","Quinta Feira","Sexta Feira","Sábado"],de:["Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag"],tr:["Pazar","Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi"],it:["Domenica","Lunedì","Martedì","Mercoledì","Giovedì","Venerdì","Sabato"],hu:["Vasárnap","Hétfő","Kedd","Szerda","Csütörtök","Péntek","Szombat"],en:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],es:["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"],ro:["Duminică","Luni","Marţi","Miercuri","Joi","Vineri","Sâmbătă"],pl:["niedziela","poniedziałek","wtorek","środa","czwartek","piątek","sobota"],sr:["Недеља","Понедељак","Уторак","Среда","четвртак","Петак","Субота"]};</script>

    <div id="screen-first">
        <div class="table_container">
            <div class="t_row">
                <div class="t_cell content_cell">
                    <div class="wrap">
                        <div class="box">
                            <div class="circle_content allow_overlay_0">
                                <div class="step_1">
                                    <div class="year">
                                        <i> ให้ </i>
                                        <script>
                                            var d = new Date();
                                            document.write(d.getFullYear()+0);
                                        </script>
                                        <i> ปี </i>
                                    </div>
                                    <h1> กรุณาเลือกปีเกิดของคุณ </h1>
                                    <div class="notice"> จงกรอก ชื่อ-นามสกุล , กรอกปีนักษัตร วันเดือนปีเกิดให้ถูกต้องตามจริง </div>
                                </div>
                                <div class="step_3" style="display:none;">
                                    <h1> จงกรอก
                                        <span> ชื่อ </span>
                                    </h1>
                                    <ul class="small_form">
                                        <li>
                                            <label for=""> ชื่อ </label>
                                            <input name="name" type="text" value="">
                                        </li>
                                    </ul>
                                    <p>
                                    </p>
                                    <div class="btn_small reg3"> ต่อไป </div>
                                </div>
                                <div class="step_4" style="display:none;">
                                    <h1> จงกรอก
                                        <span> วันเดือนปีเกิด
 </span>
                                    </h1>
                                    <ul class="small_form">
                                        <li>
                                            <label for=""> วัน </label>
                                            <select class="small_input" name="day">
                                                <option selected="selected" value="">  </option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </li>
                                        <li>
                                            <label for=""> เดือน </label>
                                            <select class="small_input mes" name="month">
                                                <option selected="selected" value="">  เดือน </option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </li>
                                        <li>
                                            <label for=""> ปี </label>
                                            <select class="small_input" id="" name="year">
                                                <option selected="selected" value="">  ปี  </option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2006">2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996">1996</option>
                                                <option value="1995">1995</option>
                                                <option value="1994">1994</option>
                                                <option value="1993">1993</option>
                                                <option value="1992">1992</option>
                                                <option value="1991">1991</option>
                                                <option value="1990">1990</option>
                                                <option value="1989">1989</option>
                                                <option value="1988">1988</option>
                                                <option value="1987">1987</option>
                                                <option value="1986">1986</option>
                                                <option value="1985">1985</option>
                                                <option value="1984">1984</option>
                                                <option value="1983">1983</option>
                                                <option value="1982">1982</option>
                                                <option value="1981">1981</option>
                                                <option value="1980">1980</option>
                                                <option value="1979">1979</option>
                                                <option value="1978">1978</option>
                                                <option value="1977">1977</option>
                                                <option value="1976">1976</option>
                                                <option value="1975">1975</option>
                                                <option value="1974">1974</option>
                                                <option value="1973">1973</option>
                                                <option value="1972">1972</option>
                                                <option value="1971">1971</option>
                                                <option value="1970">1970</option>
                                                <option value="1969">1969</option>
                                                <option value="1968">1968</option>
                                                <option value="1967">1967</option>
                                                <option value="1966">1966</option>
                                                <option value="1965">1965</option>
                                                <option value="1964">1964</option>
                                                <option value="1963">1963</option>
                                                <option value="1962">1962</option>
                                                <option value="1961">1961</option>
                                                <option value="1960">1960</option>
                                                <option value="1959">1959</option>
                                                <option value="1958">1958</option>
                                                <option value="1957">1957</option>
                                                <option value="1956">1956</option>
                                                <option value="1955">1955</option>
                                                <option value="1954">1954</option>
                                                <option value="1953">1953</option>
                                                <option value="1952">1952</option>
                                                <option value="1951">1951</option>
                                                <option value="1950">1950</option>
                                                <option value="1949">1949</option>
                                                <option value="1948">1948</option>
                                                <option value="1947">1947</option>
                                                <option value="1946">1946</option>
                                                <option value="1945">1945</option>
                                                <option value="1944">1944</option>
                                                <option value="1943">1943</option>
                                                <option value="1942">1942</option>
                                                <option value="1941">1941</option>
                                                <option value="1940">1940</option>
                                            </select>
                                        </li>
                                    </ul>
                                    <p>
                                    </p>
                                    <div class="btn_small reg4">  </div>
                                </div>
                                <!-- /.step_4 -->
                                <div class="step_5" style="display:none;">
                                    <h1> จงกรอก 
                                        <span> เพศ </span>
                                    </h1>
                                    <p>
                                        <label for="man">
                                            <input id="man" name="sex" type="radio" value="man"> ผู้ชาย </label>
                                    </p>
                                    <p>
                                        <label for="woman">
                                            <input checked="checked" id="woman" name="sex" type="radio" value="woman"> ผู้หญิง </label>
                                    </p>
                                    <p>
                                    </p>
                                    <div class="btn_small reg5"> ต่อ </div>
                                </div>
                                <!-- /.step_5 -->
                                <div class="step_6" style="display:none;">
                                    <h1> ประมวลผลข้อมูล... </h1>
                                    <div class="notice"> ขั้นตอนนี้อาจใช้เวลาสักครู่
                                        <span> โปรดอย่าปิดหน้านี้.. </span>
                                    </div>
                                    <div class="windows8">
                                        <div class="wBall" id="wBall_1">
                                            <div class="wInnerBall"></div>
                                        </div>
                                        <div class="wBall" id="wBall_2">
                                            <div class="wInnerBall"></div>
                                        </div>
                                        <div class="wBall" id="wBall_3">
                                            <div class="wInnerBall"></div>
                                        </div>
                                        <div class="wBall" id="wBall_4">
                                            <div class="wInnerBall"></div>
                                        </div>
                                        <div class="wBall" id="wBall_5">
                                            <div class="wInnerBall"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.step_6 -->
                                <div class="step_7 paystep" style="display:none;">
                                    <p>
                                    </p>
                                    <div class="btn_small" id="go_away" rel="./css/index.css">
                                    ต่อ </div>
                                </div>
                                <!-- /.step_7 -->
                            </div>
                            <ul class="circle-container">
                                <li class="s1">
                                    <div class="sign-img" data-id="10" data-znak="ปีเถาะ ">
                                        <div class="inner">
                                             <div class="img"><img src="./assets/mao.png">
                                                  
												</div>
                                            <div class="sign_name"> ปีเถาะ 
                                                <span> </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="s2">
                                    <div class="sign-img" data-id="11" data-znak="ปีมะโรง ">
                                        <div class="inner">
                                             <div class="img"><img src="./assets/rong.png">
                                                  
												</div>
                                            <div class="sign_name"> ปีมะโรง 
                                                <span>  </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="s3">
                                    <div class="sign-img" data-id="12" data-znak="ปีมะเส็ง ">
                                        <div class="inner">
                                             <div class="img"><img src="./assets/ran.png">
                                                  
												</div>
                                            <div class="sign_name"> ปีมะเส็ง 
                                                <span>  </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="s4">
                                    <div class="sign-img" data-id="13" data-znak="ปีมะเมีย ">
                                        <div class="inner">
                                            <div class="img"><img src="./assets/ngo.png">
                                                  
												</div>
                                            <div class="sign_name"> ปีมะเมีย 
                                                <span> </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="s5">
                                    <div class="sign-img" data-id="1" data-znak="ปีมะแม">
                                        <div class="inner">
                                            <div class="img"><img src="./assets/mui.png">
                                                  
												</div>
                                            <div class="sign_name"> ปีมะแม
                                                <span> </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="s6">
                                    <div class="sign-img" data-id="2" data-znak="ปีวอก ">
                                        <div class="inner">
                                             <div class="img"><img src="./assets/than.png">
                                                  
												</div>
                                            <div class="sign_name"> ปีวอก 
                                                <span> </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="s7">
                                    <div class="sign-img" data-id="3" data-znak="ปีระกา ">
                                        <div class="inner">
                                             <div class="img"><img src="./assets/dau.png">
                                                  
												</div>
                                            <div class="sign_name"> ปีระกา 
                                                <span> </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="s8">
                                    <div class="sign-img" data-id="4" data-znak="ปีจอ  ">
                                        <div class="inner">
 <div class="img"><img src="./assets/tuat.png">
                                                  
												</div>
                                            <div class="sign_name"> ปีจอ   
                                                <span> </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="s9">
                                    <div class="sign-img" data-id="5" data-znak="ปีกุน ">
                                        <div class="inner">
                                            <div class="img"><img src="./assets/hoi.png">
                                                  
												</div>
                                            <div class="sign_name"> ปีกุน 
                                                <span> </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="s11">
                                    <div class="sign-img" data-id="7" data-znak="ปีชวด ">
                                        <div class="inner">
                                                <div class="img"><img src="./assets/ty.png">
                                                  
												</div>
                                            
                                            <div class="sign_name"> ปีชวด 
                                                <span> </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="s12">
                                    <div class="sign-img" data-id="8" data-znak="ปีฉลู ">
                                        <div class="inner">
                                            <div class="img"><img src="./assets/suu.png">
                                                  
												</div>
                                            <div class="sign_name"> ปีฉลู 
                                                <span>  </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="s13">
                                    <div class="sign-img" data-id="9" data-znak=" ปีขาล ">
                                        <div class="inner">
                                            <div class="img"><img src="./assets/dan.png">
                                                  
												</div>
                                            <div class="sign_name"> ปีขาล 
                                                <span> </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar">
                            <div class="item">
                                <div class="inner">
                                    <h3> ดูดวงกราฟชีวิตของคุณปี 2563</h3>
                                    <p> แต่ละปีนักษัตรจะมีลักษณะอุปนิสัยที่โดดเด่นตามสัญลักษณ์ของสัตว์ประจำปีนั้นๆ เช่น คนเกิดปีชวด เป็นคนมีเสน่ห์ เป็นมิตร มีอารมณ์ขัน มีความกระตือรือร้น และเป็นที่รักใคร่ของคนทั่วไป ในทางตรงกันข้าม คนเกิดปีฉลูแสดงให้เห็นว่าเขาเป็นคนหนักแน่น คงเส้นคงวา มีความขยันอดทน มุ่งมั่นตั้งใจในชีวิต ส่วนคนเกิดปีขาลนั้น  มีความทะนงตัว กล้าหาญ และมีความเป็นผู้นำ เป็นลักษณะเด่นที่สุดเพื่อแยกระหว่างปีขาลกับปีอื่น ซึ่งปีขาลชอบที่จะเสี่ยงในการทำงานใหญ่ๆเพื่อดึงดูดความสนใจของคนอื่น
                                    </p>
                                    <p class="img_shadow">
                                        <img alt="" src="./assets/zvezda.jpg">
                                    </p>
                                    <p>
                                        <a class="btn_make_goro pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                                        ดูดวง กราฟชีวิตปี 2563 </a>
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="inner">
                                    <h3> หลวงปู่สังวาลย์ เขมโก เผยเคล็ดลับเรียกทรัพย์ สำหรับคนอยากรวย ...""
                                        </h3>
                                    <p> หลวงปู่สังวาลย์ เขมโก พยากรณ์ถึงความเปลี่ยนแปลงของปีเกิดและดวงเฮง จงเลือกปีนักษัตรของตนให้ถูกต้อง
                                    </p>
                                    <p class="img_shadow">
                                        <img alt="" src="./assets/vanga.jpg">
                                    </p>
                                    <p>
                                        <a class="btn_make_goro pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                                        ดูดวง กราฟชีวิตปี 2563 </a>
                                    </p>
                                </div>
                            </div>
                            <div class="item only_mobile">
                                <div class="inner">
                                    <h3> หลวงปู่ทิพย์ </h3>
                                    <p> หลวงปู่ทิพย์ - ตำนานพระภิกษุสงฆ์และศาสดาพยากรณ์เป็นที่รู้จักกันทั่วโลก คำทำนายและคำพยากรณ์ของท่านยังคงเป็นปรากฏการณ์ลึกลับ
                                    </p>
                                    <p class="img_shadow">
                                        <img alt="" src="./assets/nostra.jpg">
                                    </p>
                                    <p>
                                        <a class="btn_make_goro pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                                        ดูดวง กราฟชีวิตปี 2563 </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="stars">
            <div class="inner"></div>
        </div>
    </div>
    <div id="screen-second">
        <div class="main_menu topbeutyblog_menu">
            <div class="wrapper">
                <div class="container">
                    <a class="pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                        <p class="name"> ดูโชคชะตา
                            <span> โชคชะตา</span> 2563
                            <img alt="Top People Blog" class="heart" src="./assets/heart.png">
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="container main_cont">
            <div class="left-column col-md-8 col-sm-8 col-xs-12">
                <h1>
                    <center> ดูดวงกราฟชีวิตของคุณเสร็จเรียบร้อย</center>
                </h1>
                <img class="img-responsive" src="./assets/img_240x300.jpg" style="margin: 0 auto 15px;">


                <div style="margin: 0 0 11px;"> ขอแสดงความยินดี! <b class="znak"> ปีฉลู  </b> ซึ่งเป็นปีที่ได้ถูกกำหนดให้ได้เพลิดเพลินกับโชคลาภ เงินทองจะเกาะติดมือและหล่นลงบนหัวของคุณ ถ้าคุณรู้จักวิธีดึงดูดมัน
                </div>

                <p>
                	การงาน ธุรกิจ การเงิน ของคุณมักมีอุปสรรคขัดขวางเนื่องจากไร้เครื่องมือที่ช่วยสนับสนุน ความซวยเกาะติด ทำให้เกิดความผิดหวังดวงไม่ดี ผู้เชี่ยวชาญทางด้านจิตวิทยาเคยพิสูจน์ว่า มนุษย์ทุกคนจำเป็นและต้องการวัตถุที่มีค่าทางด้านจิตใจไว้ติดตัว นั้นก็คือ แหวนหัวใจพระสูตร และเพื่อให้คุณได้ในสิ่งที่คุณสมควรจะได้  แหวนหัวใจพระสูตร มีมาหลายศตวรรษ จนถึงปัจจุบันนี้มันยังมีประสิทธิภาพที่ลี้ลับมากมาย ได้รับการพิสูจน์มาแล้วโดยผลตอบรับกลับมาของคนรวยหลายคน ซึ่งเป็นผู้ที่ได้แหวนหัวใจพระสูตรไป ทั้งนี้ยังมีตำนานที่ได้เล่ามาตั้งแต่อดีตมาจนถึงปัจจุบันนี้ว่า กษัตริย์หลายพระองค์ในยุโรปเคยใช้  แหวนหัวใจพระสูตร เปรียบเสมือนแหวนหัวใจพระสูตรที่ช่วยป้องกันภัยให้ตนเองและประเทศชาติ น่ามหัศจรรย์จริงๆ
                </p>
                <p>
                	หมอช้างระบุว่า<b class="znak"> ปีฉลู  </b>  นั้นคือปีแห่งคนที่สามารถกลายเป็นเศรษฐีได้ในพริบตาถ้าทำตามหลักง่ายๆ ก็คือการใส่ แหวนหัวใจพระสูตร เนื่องจาก  แหวนหัวใจพระสูตร จะทำให้คุณมีเงินทองมากมาย ไม่มีวันดวงขาด มันจะช่วยในการปกป้องคุณจากความเสี่ยงและความอิจฉาของคนทั่วไป ความโชคดีจะติดตามคุณไปทุกๆที่เสมอ ทุกสิ่งทุกอย่างจะประสบความสำเร็จตามเป้าหมายที่ตั้งไว้
                </p>
                <p>
                	นอกจากนั้น ดวง<b class="znak"> ปีฉลู  </b> จะมีเคราะห์ อันเกิดจากความอิจฉาริษยาของคนรอบข้างบวกกับกรรมเก่า เพื่อนๆและคนที่รู้จักมักจะอิจฉากับความโชคดีของคุณ ซึ่งมันอาจจะทำให้ความโชคดีนั้นจะหายจากคุณไปตลอดกาล และเงินทองจะออกไปจากชีวิตของคุณ ดังนั้น แหวนหัวใจพระสูตร ไม่เพียงแค่ปกป้องดวงชะตาให้กับคุณแต่ยังเรียกความเฮง ทรัพย์ และสุขภาพกลับมา
                </p>
                </div>
                <a class="btn-order pre-link" href="http://nhanbatnha-th.fastbuy.biz/">สั่งซื้อแหวนหัวใจพระสูตร</a>
                <h2> เคล็ดลับของ แหวนหัวใจพระสูตร </h2>
                <div style="margin: 0 0 11px;">
                    <b>
                        แหวนหัวใจพระสูตร จะดึงดูดเงินทองและทรัพย์ที่สมควรเป็นของคุณแต่กลับต้องไปตกอยู่ในมือของคนอื่น ด้วยแหวนหัวใจพระสูตรนี้:
                    <br>
                    <i>
                        <span>
                            <img alt="" height="16" src="./assets/bullet.png" width="16"> คุณจะถูกเชิญชวนให้ไปทำงานที่ได้เงินเดือนสูง
                            <br>
                        </span>
                    </i>
                    <i>
                        <span>
                            <img alt="" height="16" src="./assets/bullet.png" width="16"> ลูกหนี้จะนำเงินมาคืน
                            <br>
                        </span>
                    </i>
                    <i>
                        <span>
                            <img alt="" height="16" src="./assets/bullet.png" width="16"> มีโอกาสในการเลื่อนตำแห่นง
                            <br>
                        </span>
                    </i>
                    <i>
                        <span>
                            <img alt="" height="16" src="./assets/bullet.png" width="16"> จะมีโชคในเรื่องการเงิน
                            <br>
                        </span>
                    </i>
                    <i>
                        <span>
                            <img alt="" height="16" src="./assets/bullet.png" width="16"> คุวามโชคดีในทุกๆครั้งจะนำมาซึ่งความร่ำรวยที่เพิ่มมากขึ้น
                            <br>
                        </span>
                    </i>
                    <i>
                        <span>
                            <img alt="" height="16" src="./assets/bullet.png" width="16"> ประสบความสำเร็จในการทำธุรกิจ </span>
                    </i>
                </b></div><b>

				<p>
				แหวนหัวใจพระสูตรถูกสร้างจากอักษรรูนซึ่ง เป็นภาษาที่มีความลับและมีความอัศจรรย์ สามารถพกติดตัวเพื่อดึงดูดเงินทอง เข้ามาสู่เจ้าของ
				</p>
                <div style="margin: 0 0 11px;"> ตอนนี้ ด้วยแหวนหัวใจพระสูตรนี้คุณจะมีความสุขและมีทรัพย์ตลอดชีวิต คุณจะไม่สามารถขาดมันได้ แม้ว่าคุณจะพยายามแค่ไหนก็ตาม เมื่อคุณได้พบกับกระแสความสุขและทรัพย์มันจะรวมตัวกันเป็นหนึ่ง แม้อยากจะแยกมันออกจากกันมันก็จะกลับมารวมกันเป็นหนึ่งเหมือนเดิม
                </div>



                <b> </b>
                <p>
                    น.ส.ณภัทร ศรีทอนสุด อยู่จังหวัดอุบลราชธานี ถูกล็อตตารี่รางวัลที่ 1 ถึง 8 ใบ ได้เงิน 48 ล้านโดยในครั้งแรกที่เธอลองเสี่ยงโชคของตัวเองกับ แหวนหัวใจพระสูตร เธอเป็นคนที่โชคไม่คอยดี ครอบครัวมีฐานะยากจนมีสมาชิกหลายคน พ่อเสียชีวิตเร็ว ชีวิตของเธอตั้งแต่อายุยังน้อยก็ต้องเจอกับความยากลำบากที่ใครๆก็เข้าใจได้ พอโตขึ้นเธอก็ยังไม่มีอะไร แม้กระทั่งเธอยังถูกคนอื่นทำร้ายดูถูกหรือด่าเมื่อทำงานที่ร้านตัดผม จนถึงวันหนึ่งหมอดูได้ให้แหวนหัวใจพระสูตร มาเส้นหนึ่ง วันที่มืดมนของเธอก็ได้จบลง ส่วนเงินที่ได้มา48 ล้าน เธอเริ่มลงมือสร้างชีวิตใหม่ที่ดีขึ้นมีครบทุกอย่างกับแม่และน้องๆ หลังจากนั้นเธอก็ได้สามีที่แสนดีและมีโรงแรม 5 ดาวในเมือง แหวนหัวใจพระสูตร แหวนหัวใจพระสูตร เป็นหนึ่งในความลับที่เธอเก็บไว้หลายปีที่ผ่านมา ถึงในครั้งหนึ่งที่ไปวัดทำบุญเธอเพิ่งเปิดเผยความลับนี้
                </p>
                <img class="img-responsive" src="./assets/img4_570x400.jpg" style="margin: 0 auto;">

                <div style="margin: 0 0 11px;"> ใครสนใจสามารถสั่งซื้อ แหวนหัวใจพระสูตร ได้ที่นี่ คุณจำเป็นต้องมีแหวนหัวใจพระสูตรสักแหวนหัวใจพระสูตรเพื่อเรียกทรัพย์ให้กับตัวเอง ดึงดูดเงินทองกลับมาเตรียมพร้อมรับปีใหม่ ขอให้ทุกคนโชคดี !
                </div>
                <div style="margin: 0 0 11px;"> ขอบคุณสำหรับการอ่านบทความนี้ </div>
                <a class="btn-order pre-link" href="http://nhanbatnha-th.fastbuy.biz/">สั่งซื้อแหวนหัวใจพระสูตร</a>
                <div class="vk-container">
                    <div class="vk-header">
                        <div class="vk-logo"></div>
                        <div class="vk-header-text">
                            <span class="comment-count">
                                <span> ความคิดเห็น </span>
                            </span>
                        </div>
                    </div>
                    <div class="vk-comment-load comment-id-1">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/16000000.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> ราชวัตน์  เข็มเพชร </span>
                        </div>
                        <div class="vk-comment-text">
                            <div> ขอบคุณมากสำหรับคำแนะนำที่ทำให้เข้าใจได้ง่ายและถูกต้อง ทุกอย่างได้อธิบายมาชัดเจนและเข้าใจง่าย ขอให้ทุกคนโชคดี สุขภาพแข็งแรง และมีความสุขมากมาย
                            </div>
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-1, true)
                            </script>
                            <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                                <span class="vk-comment-answer">
                                    <span> ความคิดเห็น </span>
                                </span>
                            </a>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>3</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vk-comment-load">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/17000000.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> พิมพ์ทอง  มณีงาม </span>
                        </div>
                        <div class="vk-comment-text">
                            <div> ขอบคุณค่ะที่ตอบตำถามที่เราสงสัยมาเสมอ เราเคยมีหลายข้อสงสัยแต่ตอนนี้เข้าใจแล้ว แหวนหัวใจพระสูตรนำมาซึ่งพลังและความเชื่อมั่นให้กับตัวเราเอง ตอนนี้ถึงได้โชคดีทั้งในการงานและการเงิน ขอบคุณมากๆค่ะ
                            </div>
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-1, true)
                            </script>
                            <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                                <span class="vk-comment-answer">
                                    <span> ความคิดเห็น </span>
                                </span>
                            </a>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>4</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vk-comment-load">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/19000000.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> มรกต ธงนำชัย </span>
                        </div>
                        <div class="vk-comment-text">
                            <div> ฉันเคยได้ยินเกี่ยวกับแหวนหัวใจพระสูตรหลายชนิด โดยเฉพาะที่ประเทศจีนแหวนหัวใจพระสูตรก็เป็นธุระกิจที่กำลังเป็นที่นิยม ตอนนี้ฉันตัดสินใจที่สั่งแหวนหัวใจพระสูตรของคุณ ขอบคุณมากสำหรับโอกาสนี้
                            </div>
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-1, true)
                            </script>
                            <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                                <span class="vk-comment-answer">
                                    <span> ความคิดเห็น </span>
                                </span>
                            </a>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>7</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    </div>
                    <div class="vk-comment-load">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/20000000.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> กล้วยนิด  นราชัย </span>
                        </div>
                        <div class="vk-comment-text">
                            <div> ใช้ได้ผลนะ ในที่สุดฉันก็ได้งานทำ ไปสัมภาษณ์ตลอดหลายเดือนแต่ไม่มีใครรับ ถ้าได้งานก็เป็นงานที่ฉันไม่ชอบ พอดีตอนนี้ได้งานเหมือนที่ฝันไว้เลย เงินเดือนสูง เพื่อนร่วมงานดี ที่ทำงานเหมะสม และหัวหน้าใจดี ถ้าเป็นแบบนี้ฉันจะมีโอกาสได้เลื่อนตำแหน่งด้วย ขอบคุณ แหวนหัวใจพระสูตร สำหรับทุกสิ่งทุกอย่าง

                            </div>
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-1, true)
                            </script>
                            <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                                <span class="vk-comment-answer">
                                    <span> ความคิดเห็น </span>
                                </span>
                            </a>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>5</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vk-comment-load">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/21000000.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> รสสินี  สามิต </span>
                        </div>
                        <div class="vk-comment-text">
                            <div> เราดีใจมากที่เจอเพจนี้ นี่คือโอกาสที่ดีมากที่เข้ามาในช่วงเวลาที่มืดที่สุดในชีวิต เราไม่ทำได้อะไรมาก เก็บตังได้นิดหนึ่งแล้วก็ต้องเอามาใช้กับเรื่องนุ่นเรื่องนี่ บางทีชาวบ้านทำให้น้ำลงบ้านเรา ต้องซ่อมบ้าน หรือไม่ก็รถหายในลานจอดรถ มันเหลือร้ายจังเลย
                            </div>
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-1, true)
                            </script>
                            <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                                <span class="vk-comment-answer">
                                    <span> ความคิดเห็น </span>
                                </span>
                            </a>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>3</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vk-comment-load">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/22000000.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> อนุชิตา  ภาษี </span>
                        </div>
                        <div class="vk-comment-text">
                            <div> มีประโยชน์จริงเหรอ? หลอกลวงมาก ไม่มีอะไรแบบนี้หรอก ฉันไม่เชื่อ </div>
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-2, true)
                            </script>
                            <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                                <span class="vk-comment-answer">
                                    <span> ความคิดเห็น </span>
                                </span>
                            </a>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>7</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vk-comment-load">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/23000000.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> พรผกามาศ ทองไทย </span>
                        </div>
                        <div class="vk-comment-text">
                            <div>
                                วันที่ 10 ก.พ.เราสั่งสินค้า ถึงวันที่ 19 เราได้รับของ เราไม่เห็นมีอะไรแตกต่างเลย เวลาอยู่บ้านก็มีปัญหาพอไปทำงานก็ไม่สนุก นี่ก็คือปัญหาของเราและปัญหาของใครหลายคน ชีวิตมันแย่ลงไม่มีความสุข อีกทั้งยังมีผลต่อเด็กๆ ด้วย โชคดีมากที่เจอเว็บนี้มา หลังจากหนึ่งเดือนที่ซื้อ แหวนหัวใจพระสูตร สิ่งแรกคือชีวิตของคู่ของฉันก็เปลี่ยนแปลงในทางที่ดีขึ้น การงานก็ดีขึ้น ได้เลื่อนตำแหน่งจากรองผู้บริหารของบริษัทการท่องเที่ยวกลายเป็นผู้บริหาร ตอนนี้ชีวิตมันสดใสเต็มพลังเนื่องจากความเชื่อของฉัน แหวนหัวใจพระสูตร แหวนหัวใจพระสูตร นั้นเองที่นำสิ่งเหล่านี้มาให้ฉัน ฉันเชื่อในเรื่องนี้จริงๆ ความโชคดีก็มากับฉันด้วย
                                <br>
                                <img class="img-responsive" src="./assets/img1_5f5f400x550.jpg" style="margin: 10px 0;">
                            </div>
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-2, true)
                            </script>
                            <span class="vk-comment-answer">
                                <span> ความคิดเห็น </span>
                            </span>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>4</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vk-comment-load">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/24000000.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> อิงฟ้า ชัยพงษ์ </span>
                        </div>
                        <div class="vk-comment-text">
                            <div> มีประโยชน์จริงๆ ฉันดีใจมาก ในที่สุดฉันก็ได้พบกับชายในฝันของฉัน ความโชคดีก็เข้ามาหาฉัน ฉันเคยเสียใจมามากถึงได้อยากจะเจอผู้ชายในอุดมคติเหมือนในนิทาน ซึ่งเป็นคนที่ทั้งหล่อ รวยและฉลาด เพื่อนของฉันเลยแกล้งซื้อแหวนหัวใจพระสูตรมาให้เป็นของขวัญวันเกิด พวกเขาเบื่อเรื่องที่ฉันมาบ่นว่าหาแฟนไม่ได้สักที ใส่แหวนหัวใจพระสูตรนี้ได้แค่สองเดือนก็เจอเนื้อคู่ เราสองคนเจอกันตรงหน้าบ้าน ฉันเปิดประตูออกจากบ้าน พอดีเขามาเยี่ยมบ้านข้างๆ มันก็คือโชคชะตานั้นแหละ

                            </div>
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-2, true)
                            </script>
                            <span class="vk-comment-answer">
                                <span> ความคิดเห็น </span>
                            </span>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>5</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vk-comment-load">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/25000000.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> มณีรัตนาวรรณ  สุขศรี </span>
                        </div>
                        <div class="vk-comment-text">
                            <div> ดีอ่ะ ไม่รู้ว่าเราจะโชคดีบ้างไหมนะ </div>
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-2, true)
                            </script>
                            <span class="vk-comment-answer">
                                <span> ความคิดเห็น </span>
                            </span>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>6</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vk-comment">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/11000000.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> เนตรนภาดา คุ้มทองไพศาล </span>
                        </div>
                        <div class="vk-comment-text">
                            <div> เราเพิ่งใช้ได้วันเดียว เมื่อไหร่ที่เรามีเงินมีทอง เดี๋ยวเราจะมาเขียนรีวิวให้นะdiv&gt;
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-2, true)
                            </script>
                            <span class="vk-comment-answer">
                                <span> ความคิดเห็น </span>
                            </span>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>21</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vk-comment">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/20000001.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> อิงฟ้า ชัยพงษ์ </span>
                        </div>
                        <div class="vk-comment-text">
                            <div> มีประโยชน์จริงๆ ฉันดีใจมาก ในที่สุดฉันก็ได้พบกับชายในฝันของฉัน ความโชคดีก็เข้ามาหาฉัน ฉันเคยเสียใจมามากถึงได้อยากจะเจอผู้ชายในอุดมคติเหมือนในนิทาน ซึ่งเป็นคนที่ทั้งหล่อ รวยและฉลาด เพื่อนของฉันเลยแกล้งซื้อแหวนหัวใจพระสูตรมาให้เป็นของขวัญวันเกิด พวกเขาเบื่อเรื่องที่ฉันมาบ่นว่าหาแฟนไม่ได้สักที ใส่แหวนหัวใจพระสูตรนี้ได้แค่สองเดือนก็เจอเนื้อคู่ เราสองคนเจอกันตรงหน้าบ้าน ฉันเปิดประตูออกจากบ้าน พอดีเขามาเยี่ยมบ้านข้างๆ มันก็คือโชคชะตานั้นแหละ
                            </div>
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-2, true)
                            </script>
                            <span class="vk-comment-answer">
                                <span> ความคิดเห็น </span>
                            </span>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>9</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vk-comment">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/30000000.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> วาสนา เกตุหงษ์ </span>
                        </div>
                        <div class="vk-comment-text">
                            <div> เคยได้ยินเรื่องราวต่างๆ เกี่ยวกับเหร๊ยญมงคลนี้มาหลายครั้ง ฉันก็เลยลองสั่งมาดูว่ามีอะไรไหม
                            </div>
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-2, true)
                            </script>
                            <span class="vk-comment-answer">
                                <span> ความคิดเห็น </span>
                            </span>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>5</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vk-comment">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/40000000.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> สายธาร  มานะชัย </span>
                        </div>
                        <div class="vk-comment-text">
                            <div> แม่เรามักจะชอบของเกี่ยวกับเครื่องรางแบบนี้ นี่แหละเหมาะที่จะเป็นของขวัญสำหรับแม่มากที่สุด  </div>
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-2, true)
                            </script>
                            <span class="vk-comment-answer">
                                <span> ความคิดเห็น </span>
                            </span>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>18</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vk-comment">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/50000000.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> เหมือนฝัน มะโนศาล </span>
                        </div>
                        <div class="vk-comment-text">
                            <div> ขอบคุณสำหรับคำแนะนำ จะลองใส่แน่นอน ถ้าได้ผลจะมาบอกนะ </div>
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-2, true)
                            </script>
                            <span class="vk-comment-answer">
                                <span> ความคิดเห็น </span>
                            </span>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>2</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vk-comment">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/60000000.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> มะลิกา อุดมกลาง </span>
                        </div>
                        <div class="vk-comment-text">
                            <div> คนที่มาคอมเมนต์ลองใช้จริงๆ หรือยัง มีประโยชน์ไหม เราควรใช้เหรือเปล่า? </div>
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-2, true)
                            </script>
                            <span class="vk-comment-answer">
                                <span> ความคิดเห็น </span>
                            </span>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>47</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vk-comment">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/70000000.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> ดวงใจ สีสัน </span>
                        </div>
                        <div class="vk-comment-text">
                            <div> สั่งได้ที่ไหน ราคาเท่าไร ทุกคนบอกฉันเร็วๆหน่อยได้ไหม ต้องการสร้อยเส้นนี้มาก เบื่อกับความโชคไม่ดีนี้มากแล้ว
                                </div>
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-2, true)
                            </script>
                            <span class="vk-comment-answer">
                                <span> ความคิดเห็น </span>
                            </span>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>31</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vk-comment">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/80000000.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> ณัฐพล นรศรี </span>
                        </div>
                        <div class="vk-comment-text">
                            <div> มีประโชยน์จริงๆ พี่เราโชคไม่ดีตั้งแต่เป็นเด็ก บางทีมีของอะไรสักอย่างแตก หรืออยู่ดีๆก็มีอะไรหล่นลงใส่เธอ แฟนที่เคยคนแต่ละคนก็เป็นคนไม่ค่อยดีไม่สุภาพ ได้เข้าไปทำงานแต่บริษัทก็ล้มละลายในหนึ่งเดือน มันไม่ใช่ความผิดของพี่เขาแน่นอน แต่ยังไงมันก็น่าเหลือเชื่อจริงๆ เราก็เลยซื้อ  แหวนหัวใจพระสูตร  ให้พี่เขา ไม่รู้ว่าเรื่องความรักของเธอเป็นอย่างไรแต่การงานดีขึ้นอย่างเห็นได้ชัด ฉันก็ไม่ได้บังเอิญหาเจอแต่ได้มีคนแนะนำให้ซื้อ ตอนนี้พี่เขาทำงานเป็นนักออกแบบเฟอร์นิเจอร์ เงินเดือนดีมาก บอกเลยจะไม่เชื่อได้ไง
                            </div>
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-2, true)
                            </script>
                            <span class="vk-comment-answer">
                                <span> ความคิดเห็น </span>
                            </span>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>11</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vk-comment">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/90000000.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> บุปผชาติ สุทธิผล </span>
                        </div>
                        <div class="vk-comment-text">
                            <div> ถ้าแหวนหัวใจพระสูตรเห็นผลกับฉันได้ ทุกคนก็สามารถเป็นเหมือนฉันได้เช่นกัน มีแค่อนาคตที่สดใสรออยู่ข้างหน้า ทุกอย่างขึ้นอยู่กับการตัดสินใจของตัวเราเองทั้งนั้น
                            </div>
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-2, true)
                            </script>
                            <span class="vk-comment-answer">
                                <span> ความคิดเห็น </span>
                            </span>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>38</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vk-comment">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/10000001.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> ศิรพันธ์ วงษ์วิจิตรา </span>
                        </div>
                        <div class="vk-comment-text">
                            <div> เราได้ยินเกี่ยวกับผลลัพธ์ที่น่ามหัศจรรย์ของแหวนหัวใจพระสูตรนานแล้วก็เลยสั่งมา หนึ่งปีที่แล้วฉันไม่สามารถรักษาสุขภาพได้ ภูมิต้านทานอ่อนลงจึงไม่มีอะไรมีประโยชน์เลย เราเสียตังเยอะมากกับการไปหาหมอและค่ายา แขนและขาหักสองครั้งแม้ว่าแต่ก่อนไม่เคยมีปัญหาใดๆเกี่ยวกับกระดูกเลย ความเสี่ยงเกี่ยวกับสุขภาพเกาะติดเราตลอด หลังจากที่สามีให้แหวนหัวใจพระสูตรนี้ มีเพื่อนร่วมงานของสามีคนหนึ่งก็ใช้แล้วสุขภาพก็ดีขึ้นไม่มีความเสี่ยงอะไรอีก เราก็ใส่โดยไม่เอามันออกหนึ่งเดือน ตอนนี้ฉันแข็งแรงอย่างกับม้า ลืมหมอไปได้เลย ขอบคุณมาก! แหวนหัวใจพระสูตร น่าเชื่อถือมาก มีประโยชน์จริง บอกเลย 99.9% คนที่ใช้แล้วเห็นผล                            </div>
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-2, true)
                            </script>
                            <span class="vk-comment-answer">
                                <span> ความคิดเห็น </span>
                            </span>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>57</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vk-comment">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/12000000.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> จันทรา มารศรี  </span>
                        </div>
                        <div class="vk-comment-text">
                            <div> ไม่รู้สิ แต่ฉันว่ามันเป็นของไร้สาระ </div>
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-2, true)
                            </script>
                            <span class="vk-comment-answer">
                                <span> ความคิดเห็น </span>
                            </span>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>3</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vk-comment">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/10000000.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> จีรวัตน์ อักษร </span>
                        </div>
                        <div class="vk-comment-text">
                            <div> นี่คือ แหวนหัวใจพระสูตร ที่เปรียบเสมือนทุกสิ่งทุกอย่างของผม ตอนที่ซื้อมาผมก็รู้สึกเบื่อกับงานซึ่งทำทั้งวันทั้งคืนก็ยังไม่พอกิน ครึ่งปีแล้วหลังจากที่ได้ แหวนหัวใจพระสูตร ผมก็ลาออกจากงานแล้วมาทำธุระกิจส่วนตัว เพิ่งซื่อรถคันใหม่มา ยี่ห้อ Ranger Rover ขอบคุณมากครับ </div>
                            <br>
                            <img class="img-responsive" src="./assets/pro.jpg">
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-2, true)
                            </script>
                            <span class="vk-comment-answer">
                                <span> ความคิดเห็น </span>
                            </span>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>5</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vk-comment">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/13000000.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> อรอุมา บุตรพรหม </span>
                        </div>
                        <div class="vk-comment-text">
                            <div> นี่แหละ ฉันทิ้งความไม่เชื่อใจไปตั้งนานแล้ว ตอนนี้ความโชคดีกำลังจะมาหาฉัน มันจะไม่หันหลังให้กับฉันอีก
                            </div>
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-2, true)
                            </script>
                            <span class="vk-comment-answer">
                                <span> ความคิดเห็น </span>
                            </span>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>9</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vk-comment">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/14000000.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> พลอยมณี ปักษา </span>
                        </div>
                        <div class="vk-comment-text">
                            <div> ใครบอกว่ามันไร้สาระ มันได้ผลที่สุดยอดมากๆเลยต่างหากล่ะ ตอนนี้บ้านของเรากำลังจะซื้อรถคันใหม่ </div>
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-2, true)
                            </script>
                            <span class="vk-comment-answer">
                                <span> ความคิดเห็น </span>
                            </span>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>16</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="vk-comment">
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-avatar">
                                <img src="./assets/15000000.jpg">
                            </div>
                        </a>
                        <div class="vk-comment-name">
                            <span> ปิ่นนภา แก้วมงคล </span>
                        </div>
                        <div class="vk-comment-text">
                            <div> เราได้รับ แหวนหัวใจพระสูตร แล้วนะคะ ขอบคุณค่ะ</div>
                        </div>
                        <div class="vk-comment-date">
                            <script>
                                dtime_nums(-2, true)
                            </script>
                            <span class="vk-comment-answer">
                                <span> ความคิดเห็น </span>
                            </span>
                        </div>
                        <a class="vk-link pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                            <div class="vk-comment-like">
                                <div class="vk-comment-like-count">
                                    <span>21</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <a class="btn-order pre-link" href="http://nhanbatnha-th.fastbuy.biz/">
                    รับ แหวนหัวใจพระสูตร เลย</a>
                </div>
            </div>
        </b>
        </div>
    </div>
    <b>
        <script src="./assets/script.js.download"></script>

    <style type="text/css">
        .circle-container .s13 .sign_name:after {
            content: '';
            display: none;
        }
    </style>
    </b>

<!--back to LP when click Back-->
<script type="text/javascript">
    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    var lp_href;
    lp_href = getParameterByName('lp_href');

    if (!lp_href || lp_href == '') {
        lp_href = $('a.pre-link').attr('href') + location.search;
    } else {
        lp_href = lp_href + location.search;
    }

    $('a.pre-link').attr('href', lp_href);

    jQuery(document).ready(function($) {

        if (window.history && window.history.pushState) {
            $(window).on('popstate', function() {
                var hashLocation = location.hash;
                var hashSplit = hashLocation.split("#!/");
                var hashName = hashSplit[1];

                if (hashName !== '') {
                    var hash = window.location.hash;
                    if (hash === '') {
                        window.location.href=lp_href;
                        return false;
                    }
                }
            });

            window.history.pushState('forward', null, location.search + '#forward');
        }

    });
</script>


    <?php
    $fbPixel = htmlspecialchars(@$_GET['fb_pixel_id'], ENT_QUOTES, 'utf-8');
    if (isset($fbPixel) && $fbPixel !== '') {
        echo "<script>
                !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
                n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
                document,'script','https://connect.facebook.net/en_US/fbevents.js');
            </script>";
        $fbPixelArr = explode(',', $fbPixel);
        for ($i=0; $i <  count($fbPixelArr); $i++) {
            if ($i >= 5) break;
            $fbPixel = trim($fbPixelArr[$i]);
            echo "<script>
                    fbq('init', '$fbPixel');
                    fbq('track', \"PageView\");
                </script>
                <noscript><img height=\"1\" width=\"1\" style=\"display:none\"
                src=\"https://www.facebook.com/tr?id=$fbPixel&ev=PageView&noscript=1\"
                /></noscript>";
        }
    }
    ?>
</body>
</html>