airpushStatus="WAITING";(function(){b("01");var I="//mobileweb.api.airpush.com";var Q="airpush-sdk/index.html";var q="abstract/airsdk.html";var W="banner/banner.html";var ai=I+Q+q;var K=I+Q+W;var ac="0";var p=0;var y=0;var C="";var ad="320";var D=false;var a="";var aa=true;var G;var c=new Date();var O="";var J=0;var P="";var w=false;var S=1;var l=false;var H=false;var Y="";var u=false;var R=window.innerHeight;var e=window.innerWidth;this.airpush={initializeAirpush:function(aj,al,ak){b("05");if(location.protocol=="index.html"){j.is_https=true}if(ak!=null){a=ak}if(/^\+?\d+$/.test(aj)&&aj>0){ac=aj}else{if(typeof a.onIntegrationError!="undefined"){a.onIntegrationError("Invalid site id")}console.log("Please set valid Site Id.");return}if(al==0||al==1){p=parseInt(al)}else{p=0;if(typeof a.onIntegrationError!="undefined"){a.onIntegrationError("Invalid test mode")}console.log("Wrong Value set in testmode. Please set either 0 for live mode or 1 for test mode.")}if(typeof R!="undefined"&&R=="0"){if(screen.availHeight!=0){R=screen.availHeight}else{R="480"}}if(typeof e!="undefined"&&e=="0"){if(screen.availWidth!=0){e=screen.availWidth}else{e="320"}}D=true;if(typeof airpushConfig!="undefined"&&typeof airpushConfig.click_tracker!="undefined"&&airpushConfig.click_tracker!=null&&airpushConfig.click_tracker.length>5){O=airpushConfig.click_tracker}if(typeof airpushConfig!="undefined"&&typeof airpushConfig.imp_tracker!="undefined"&&airpushConfig.imp_tracker!=null&&airpushConfig.imp_tracker.length>5){P=airpushConfig.imp_tracker}if(typeof airpushConfig!="undefined"&&typeof airpushConfig.auto_refresh!="undefined"&&airpushConfig.auto_refresh!=null&&!isNaN(airpushConfig.auto_refresh)&&([0,1].indexOf(airpushConfig.auto_refresh)>-1)){S=airpushConfig.auto_refresh}if(typeof airpushSlotIds!="undefined"&&airpushSlotIds!==null){if(document.readyState==="complete"||document.readyState==="interactive"){F()}else{window.addEventListener("load",function(){F()})}}N();setTimeout(af,5000)},setPlacementId:function(aj){if(aj>=0&&aj<101){y=aj;console.log("Placement Updated:"+y)}else{if(typeof a.onIntegrationError!="undefined"){a.onIntegrationError("Invalid placement id. Setting to default 0")}console.log("Wrong placement Id for 360 Ad. Please set any number between 0 to 100. Setting to default 0");y=0}},load360Banner:function(aj){b("06");if(D==false){return}if(aj>=0&&aj<101){y=aj}else{if(typeof a.onIntegrationError!="undefined"){a.onIntegrationError("Invalid placement id")}console.log("Wrong placement Id for 360 Ad. Please set any number between 0 to 100. Setting to default 0");y=0}r();o()},loadBanner:function(aj){if(D==false){return}var ak=document.getElementById(aj);if(typeof(ak)!=="undefined"&&ak!==null){b("07");U(aj)}else{if(typeof a.onIntegrationError!="undefined"){a.onIntegrationError("slot:"+aj+" does not exist on current page")}console.log("slot:"+aj+" does not exist on current page")}}};function F(){for(i=0;i<airpushSlotIds.length;i++){airpush.loadBanner(airpushSlotIds[i])}}var j={cookieEnabled:navigator.cookieEnabled,doNotTrack:navigator.doNotTrack,language:navigator.language,userAgent:navigator.userAgent,platform:navigator.platform,width:window.innerWidth,height:window.innerHeight,airSDKVersion:"2.0",is_https:false};function ab(aj){var ak=new Date();console.log(ak.getHours()+":"+ak.getMinutes()+":"+ak.getSeconds()+" =>"+aj)}function V(aj){aj=aj.replace(/[\[]/,"\\[").replace(/[\]]/,"\\]");var am=document.getElementById("airpushScript").getAttribute("src");var al=new RegExp("[\\?&]"+aj+"=([^&#]*)"),ak=al.exec(am);return ak===null?"":decodeURIComponent(ak[1].replace(/\+/g," "))}function ae(){b("03");if(location.protocol=="index.html"){j.is_https=true}var aj=document.getElementById("airpushScript");if(typeof aj=="undefined"||aj==null){return}var at=V("siteid");ac=at;var an=V("banner360");var aq=V("banner");var ao=V("testmode");var am=V("placementid");var ap=V("tp");var al=V("click_tracker");if(typeof al!="undefined"&&al!=null&&al.length>5){O=al}var au=V("imp_tracker");if(typeof au!="undefined"&&au!=null&&au.length>5){P=au}var ar=V("auto_refresh");console.log("Auto Refresh:"+ar);if(typeof ar!="undefined"&&ar!=null&&ar!=""&&ar==0){S=ar}var ak=V("wrapperId");if(typeof ak!="undefined"&&ak!=null&&ak!=""&&ak.length>1){Y=ak}ab("Appid: "+at);ab("bannerad: "+an);ab("banner: "+aq);ab("testmode: "+ao);ab("placementid: "+am);ab("tp: "+ap);J=ap;b("04");if(typeof airpushCallBack!="undefined"){airpush.initializeAirpush(at,ao,airpushCallBack)}else{airpush.initializeAirpush(at,ao,"")}if(document.readyState==="complete"||document.readyState==="interactive"){H=true}if(ap=="0"||ap=="4716"){if(an==="1"){airpush.load360Banner(am)}if(typeof aq!="undefined"&&aq!=null&&aq.length>0&&ap!="4716"){if(document.readyState==="complete"||document.readyState==="interactive"){airpush.loadBanner(aq)}else{window.addEventListener("load",function(){airpush.loadBanner(aq)})}}}else{if(an==="1"){f()}else{if(aq!==""&&aq!==null&&aq!=0){if(document.readyState==="complete"||document.readyState==="interactive"){ag()}else{window.addEventListener("load",function(){ag()})}}else{f()}}}}function f(){if(J=="2"){x(ac,0,p,y)}else{airpush.load360Banner(y)}}function ag(){var al=new Date();var aj="airpushDFP"+(Math.floor(Math.random()*(100-1+1)+1))+al.getMilliseconds();var ak=document.createElement("div");ak.setAttribute("id",aj);document.body.appendChild(ak);airpush.loadBanner(aj)}function k(an,ak,am){if(ak!==""&&ak!==null&&ak!=0){var aj="airpushDFP"+(Math.floor(Math.random()*(100-1+1)+1))+d.getMilliseconds();var al=document.createElement("div");al.setAttribute("id",aj);document.body.appendChild(al);if(document.readyState==="complete"||document.readyState==="interactive"){airpush.loadBanner(aj)}else{window.addEventListener("load",function(){airpush.loadBanner(aj)})}}else{airpush.load360Banner(am)}}function x(ak,aj,an,am){url="../ab.airpush.com/apportal/client/airpushc30a.js?siteid="+ak+"&testmode="+an+"&banner360=1&banner=0&placementid="+am+"&tp=4716&click_tracker="+encodeURIComponent(O)+"&imp_tracker="+encodeURIComponent(P)+"&auto_refresh="+S;var al=document.createElement("script");al.type="text/javascript";al.id="airpushScript";al.src=url;window.parent.document.getElementsByTagName("head")[0].appendChild(al)}(function(){var ak="hidden";if(ak in document){document.addEventListener("visibilitychange",aj)}else{if((ak="mozHidden") in document){document.addEventListener("mozvisibilitychange",aj)}else{if((ak="webkitHidden") in document){document.addEventListener("webkitvisibilitychange",aj)}else{if((ak="msHidden") in document){document.addEventListener("msvisibilitychange",aj)}else{if("onfocusin" in document){document.onfocusin=document.onfocusout=aj}else{window.onpageshow=window.onpagehide=window.onfocus=window.onblur=aj}}}}}function aj(){if(!w){if(document[ak]){aa=false}else{aa=true;j.width=window.innerWidth;j.height=window.innerHeight;if(D&&l){clearTimeout(G);if(J==0){r()}var al=0;var am=c.getTime()-new Date().getTime();if(am>0){al=am;ab("7676:"+al)}else{ab("7676 Default:"+al)}if(J==0){G=setTimeout(function(){o()},parseInt(al))}}}}else{}}})();function af(){var ak=encodeURIComponent(document.location);if(T(ak)){var aj=X();if(aj!=""){var al="http://api.airpush.com/webads/mweb_metadata.php?siteid="+ac+"&pageurl="+encodeURIComponent(document.location)+"&metadata_content="+encodeURIComponent(aj);E(al);v(ak)}else{console.log("Msg Data:071201")}}else{console.log("Msg Data:071202")}}function N(){try{var aj;if(window!=window.parent){aj=window.parent.document.querySelector("meta[name='viewport']").getAttribute("content")}else{aj=document.querySelector("meta[name='viewport']").getAttribute("content")}if(aj!=""||aj!=undefined){u=true}console.log("Site is optimised for mobile devices")}catch(ak){console.log("Site is not optimised for mobile devices")}}function X(){g_metadata=document.getElementsByTagName("meta");g_keywords="";var aj=g_metadata.length;for(var ak=0;ak<aj;ak++){if(g_metadata[ak].name=="keywords"||(g_metadata[ak].name=="Keywords")){g_keywords=g_metadata[ak].content;break}}return g_keywords}function T(aj){var al=new Date(t(aj));var ak=al.getTime()-new Date().getTime();if(ak>0){return false}else{return true}}function v(aj){var ak=new Date(new Date().getTime()+604800*1000);Z(aj,ak)}function t(al){var ak=al+"=";var an="";var aj=document.cookie.split(";");for(var am=0;am<aj.length;am++){var ao=aj[am];while(ao.charAt(0)==" "){ao=ao.substring(1)}if(ao.indexOf(ak)!=-1){an=ao.substring(ak.length,ao.length)}}return an}function Z(ak,an){if(an!=""){var al=30;var am=new Date();am.setTime(am.getTime()+(al*24*60*60*1000));var aj="expires="+am.toGMTString();document.cookie=ak+"="+an+"; "+aj}}function A(aj){var ak=t("guid");if(ak!=""){ab("9999:"+ak);return ak}else{Z("guid",aj);ab("1111:"+aj);return aj}}window.addEventListener("resize",g);function g(){j.width=window.innerWidth;j.height=window.innerHeight;if(C!="ABU"&&C!="VAU"){var aj=document.getElementById("Airpushpifrm");if(typeof(aj)!=="undefined"&&aj!==null){remainingWidth=j.width-ad;left=parseInt(remainingWidth/2)+"px";aj.style.left=left;aj.style.right=left}}}function z(al,ak){var aj=document.getElementById("Airpushpifrm");if(ak!=-3&&(navigator.userAgent.search("Safari/534")==-1)){aj.style.height="100%"}else{aj.style.height=al+"px"}aj.style.width="100%";aj.style.left="0px";aj.style.right="0px"}function U(al){var ao="0px";var ak="0px";var ap=new Date();var an=K+"?tp="+J+"&siteId="+ac+"&testmode="+p+"&containerId="+al+"&cb="+ap.getHours()+ap.getMinutes()+ap.getSeconds()+""+Math.floor(Math.random()*16)+"&click_tracker="+encodeURIComponent(O)+"&imp_tracker="+encodeURIComponent(P)+"&auto_refresh="+S+"&wrapperId="+Y;var aj=document.createElement("IFRAME");aj.setAttribute("src",an);aj.id=al+"AirpushBanner";aj.setAttribute("align","center");aj.style.width=ao;aj.style.height=ak;aj.setAttribute("frameborder","0");aj.setAttribute("scrolling","no");aj.style.margin="0";aj.style.padding="0";var am=document.getElementById(al);am.innerHTML="";am.appendChild(aj)}function o(){l=true;var ap="0px";var al="0px";var aq=new Date();var ao=t("guid");var am=ai+"?tp="+J+"&siteId="+ac+"&testmode="+p+"&cb="+aq.getHours()+aq.getMinutes()+aq.getSeconds()+aq.getMilliseconds()+"&click_tracker="+encodeURIComponent(O)+"&imp_tracker="+encodeURIComponent(P)+"&auto_refresh="+S+"&imei="+ao+"&placement_id="+y+"&wrapperId="+Y+"&siteUrl="+encodeURIComponent(window.location.host)+"&isSiteOptimised="+u+"&siteRef="+encodeURIComponent(document.location)+"&sourceUrl="+encodeURIComponent(document.referrer)+"&isHttps="+j.is_https+"&winHeight="+R+"&winWidth="+e;var an="../q.adrta.com/aacb21.js?cb="+aq.getMilliseconds()+"#arp;paid=arp;avid=;caid=888888;plid=999999;publisherId="+ac+";kv8=;kv9=;kv4=;kv18=;kv14=;kv15=;kv16=;kv17=;kv19=;kv20=;kv23=;kv25=0";if(H){var ak=document.createElement("IFRAME");ak.setAttribute("src",am);ak.id="Airpushpifrm";ak.setAttribute("align","center");ak.style.width=ap;ak.style.height=al;ak.setAttribute("frameborder","0");ak.setAttribute("scrolling","no");ak.setAttribute("style","margin-left: auto;margin-right: auto;position: fixed;left:0;right:0;bottom:0;z-index:999999999;height:0px;");document.body.appendChild(ak)}else{var aj='<div><iframe src="'+am+'" id="Airpushpifrm" align="center" frameborder="0" scrolling="no" style="margin-left: auto;margin-right: auto;position: fixed;left:0;right:0;bottom:0;z-index:999999999;height:0px;"></iframe></div><div id="block" class="block" style="width:88px;height:31px;display:none"></div> ';E(an);document.write(aj)}H=true}function r(){var aj=document.getElementById("Airpushpifrm");if(aj!==null){aj.parentNode.removeChild(aj)}}function L(al,an){var ak=document.getElementById("Airpushpifrm");var aj;var ao="0px";var am="0px";if(parseInt(an)==-1){an="100%";aj=window.innerHeight+"px";ak.style.left="0px";ak.style.right="0px";setTimeout(function(){ah(al)},2000)}else{if(parseInt(an)==-2){an="100%";aj=al+"px";ak.style.left="0px";ak.style.right="0px"}else{aj=al+"px";an=an+"px";remainingWidth=0;if(screen.width<=window.innerWidth){remainingWidth=screen.width-ad}else{remainingWidth=window.innerWidth-ad}ao=parseInt(remainingWidth/2)+"px";ak.style.left=ao;ak.style.right=ao}}ak.style.height=aj;ak.style.width=an}function n(al){var ak=[];for(var aj in al){if(al.hasOwnProperty(aj)){ak.push(encodeURIComponent(aj)+"="+encodeURIComponent(al[aj]))}}return ak.join("&")}function M(aj){var ak=s(aj);ak.inline="1";return n(ak)}function m(aj){var ak=s(aj);ak.placement_id=y;return n(ak)}function s(ak){var aj={cookieEnabled:j.cookieEnabled,cookieValue:A(ak),doNotTrack:j.doNotTrack,language:j.language,platform:j.platform,UserAgent:j.userAgent,width:e,height:R,siteId:ac,siteUrl:window.location.host,webSdkVersion:j.airSDKVersion,sdkTestMode:p,siteRef:encodeURIComponent(document.location),source_url:encodeURIComponent(document.referrer),is_https:j.is_https,isOptimised:u};return aj}function B(ak,al,aj){var am=document.getElementById(ak);am.style.height=aj+"px";am.style.width=al+"px"}function ah(ak){ak=ak+"px";var aj=document.getElementById("Airpushpifrm");aj.style.height=ak}function E(aj){var al=document.getElementsByTagName("head")[0];var ak=document.createElement("script");ak.type="text/javascript";if(location.protocol.search("https")!=-1){aj=aj.replace("http://","https:///")}ak.src=aj;al.appendChild(ak)}function b(aj){}function h(){if(airpushStatus=="WAITING"){airpushStatus="OK";window.addEventListener("message",function(am){if(am.origin==location.protocol+I&&aa){if(am.data.search("180923")>-1){var aw="180923";var al=am.data.substr(aw.length,am.data.length).split(":");var an=al[0];var ax=al[1];ad=ax;if(typeof al[2]!="undefined"&&al[2]!="clkt"){C=al[2]}else{if(al[2]=="clkt"){if(typeof al[3]!="undefined"){c=new Date(new Date().getTime()+al[3]*1000)}else{c=new Date(new Date().getTime()+45*1000)}}C=""}if(!S){w=true}L(an,ax)}else{if(am.data.search("1819230622")>-1){var aw="1819230622";ah(am.data.substr(aw.length,am.data.length))}else{if(am.data.search("182223")>-1){var ak=am.data.split(":");var au=ak[1];z(au,ak[2])}else{if(am.data.search("18090223")>-1){var aw="18090223";var al=am.data.split(":");var av=al[1];var ax=al[2];var an=al[3];B(av+"AirpushBanner",ax,an)}else{if(am.data.search("180116")>-1){var aw="180116:";var ar=document.getElementById("Airpushpifrm");ar.contentWindow.postMessage(aw+m(am.data.substr(aw.length,am.data.length)),location.protocol+I)}else{if(am.data.search("18020116")>-1){var aw="18020116:";var aq=am.data.split(":");var ar=document.getElementById(aq[1]+"AirpushBanner");ar.contentWindow.postMessage(aw+M(aq[2]),location.protocol+I)}else{if(am.data.search("030222")>-1){var ap=am.data.split(":");if(ap[1]=="onAdLoaded"){if(typeof a.onAdLoaded!="undefined"){a.onAdLoaded(ap[2])}}else{if(ap[1]=="onAdError"){if(typeof a.onAdError!="undefined"){a.onAdError(ap[2])}}else{if(ap[1]=="noAdAvailable"){if(typeof a.noAdAvailable!="undefined"){a.noAdAvailable(ap[2])}}else{if(ap[1]=="onAdClick"){if(typeof a.onAdClick!="undefined"){a.onAdClick(ap[2])}}else{if(ap[1]=="OnIntegrationError"){if(typeof a.onIntegrationError!="undefined"){a.onIntegrationError(ap[2])}}}}}}}else{if(am.data.search("0418")>-1){var ao=am.data.split(":")[1];var aj=A(ao)}}}}}}}}}else{if(am.origin==location.protocol+I&&!aa){if(am.data.search("180923")>-1){var aw="180923";var at=am.data.substr(aw.length,am.data.length).split(":");if(typeof at[2]!="undefined"&&at[2]=="clkt"){if(typeof at[3]!="undefined"){c=new Date(new Date().getTime()+at[3]*1000)}else{c=new Date(new Date().getTime()+45*1000)}}L(0,0)}else{if(am.data.search("030222")>-1){var ap=am.data.split(":");if(ap[1]=="onAdClick"){if(typeof a.onAdClick!="undefined"){a.onAdClick(ap[2])}}}else{}}}}})}ae()}h();b("02")}).call(this);
