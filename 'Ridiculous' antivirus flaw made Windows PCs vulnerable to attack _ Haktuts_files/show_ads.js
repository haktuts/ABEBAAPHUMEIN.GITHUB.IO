(function(){var k=this,aa=function(a,b,c){return a.call.apply(a.bind,arguments)},ba=function(a,b,c){if(!a)throw Error();if(2<arguments.length){var d=Array.prototype.slice.call(arguments,2);return function(){var c=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(c,d);return a.apply(b,c)}}return function(){return a.apply(b,arguments)}},p=function(a,b,c){p=Function.prototype.bind&&-1!=Function.prototype.bind.toString().indexOf("native code")?aa:ba;return p.apply(null,arguments)};var q=(new Date).getTime();var x=function(a){a=parseFloat(a);return isNaN(a)||1<a||0>a?0:a},ca=function(a,b){var c=parseInt(a,10);return isNaN(c)?b:c},A=function(a,b){return/^true$/.test(a)?!0:/^false$/.test(a)?!1:b},da=/^([\w-]+\.)*([\w-]{2,})(\:[0-9]+)?$/,ea=function(a,b){if(!a)return b;var c=a.match(da);return c?c[0]:b};var fa=x("0.20"),pa=x("0.001"),qa=ca("101",-1),ra=ca("98",0),sa=x("0.05"),ta=x("0.001"),ua=x("0.0"),va=x("0.001"),wa=A("true",!0),xa=x("0.01"),ya=x("0.03"),
za=x("0.001"),Aa=x("0.01"),Ba=x("");var Ca=function(){return"r20160107"},Da=A("false",!1),Ea=A("false",!1),Fa=A("false",!1),Ga=Fa||!Ea;var Ha=String.prototype.trim?function(a){return a.trim()}:function(a){return a.replace(/^[\s\xa0]+|[\s\xa0]+$/g,"")},Ia=/&/g,Ja=/</g,Ka=/>/g,ab=/"/g,bb=/'/g,cb=/\x00/g,db={"\x00":"\\0","\b":"\\b","\f":"\\f","\n":"\\n","\r":"\\r","\t":"\\t","\x0B":"\\x0B",'"':'\\"',"\\":"\\\\","<":"<"},E={"'":"\\'"},eb=function(a,b){return a<b?-1:a>b?1:0};var fb=Array.prototype.forEach?function(a,b,c){Array.prototype.forEach.call(a,b,c)}:function(a,b,c){for(var d=a.length,f="string"==typeof a?a.split(""):a,e=0;e<d;e++)e in f&&b.call(c,f[e],e,a)};var F=function(a){F[" "](a);return a};F[" "]=function(){};var G;a:{var gb=k.navigator;if(gb){var hb=gb.userAgent;if(hb){G=hb;break a}}G=""}var H=function(a){return-1!=G.indexOf(a)};var ib=function(){return H("Opera")||H("OPR")};var jb=ib(),I=H("Trident")||H("MSIE"),kb=H("Edge"),J=H("Gecko")&&!(-1!=G.toLowerCase().indexOf("webkit")&&!H("Edge"))&&!(H("Trident")||H("MSIE"))&&!H("Edge"),lb=-1!=G.toLowerCase().indexOf("webkit")&&!H("Edge"),mb=function(){var a=G;if(J)return/rv\:([^\);]+)(\)|;)/.exec(a);if(kb)return/Edge\/([\d\.]+)/.exec(a);if(I)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);if(lb)return/WebKit\/(\S+)/.exec(a)},nb=function(){var a=k.document;return a?a.documentMode:void 0},ob=function(){if(jb&&k.opera){var a;
var b=k.opera.version;try{a=b()}catch(c){a=b}return a}a="";(b=mb())&&(a=b?b[1]:"");return I&&(b=nb(),b>parseFloat(a))?String(b):a}(),pb={},qb=function(a){if(!pb[a]){for(var b=0,c=Ha(String(ob)).split("."),d=Ha(String(a)).split("."),f=Math.max(c.length,d.length),e=0;0==b&&e<f;e++){var g=c[e]||"",h=d[e]||"",m=RegExp("(\\d*)(\\D*)","g"),u=RegExp("(\\d*)(\\D*)","g");do{var r=m.exec(g)||["","",""],n=u.exec(h)||["","",""];if(0==r[0].length&&0==n[0].length)break;b=eb(0==r[1].length?0:parseInt(r[1],10),0==
n[1].length?0:parseInt(n[1],10))||eb(0==r[2].length,0==n[2].length)||eb(r[2],n[2])}while(0==b)}pb[a]=0<=b}},rb=k.document,sb=rb&&I?nb()||("CSS1Compat"==rb.compatMode?parseInt(ob,10):5):void 0;var tb;if(!(tb=!J&&!I)){var ub;if(ub=I)ub=9<=Number(sb);tb=ub}tb||J&&qb("1.9.1");I&&qb("9");var vb=function(a){try{var b;if(b=!!a&&null!=a.location.href)a:{try{F(a.foo);b=!0;break a}catch(c){}b=!1}return b}catch(c){return!1}},K=function(a,b){if(!(1E-4>Math.random())){var c=Math.random();if(c<b)return c=wb(window),a[Math.floor(c*a.length)]}return null},wb=function(a){try{var b=new Uint32Array(1);a.crypto.getRandomValues(b);return b[0]/65536/65536}catch(c){return Math.random()}},xb=function(a,b){for(var c in a)Object.prototype.hasOwnProperty.call(a,c)&&b.call(void 0,a[c],c,a)},yb=function(a){var b=
a.length;if(0==b)return 0;for(var c=305419896,d=0;d<b;d++)c^=(c<<5)+(c>>2)+a.charCodeAt(d)&4294967295;return 0<c?c:4294967296+c};var zb=function(a,b,c){a.addEventListener?a.addEventListener(b,c,!1):a.attachEvent&&a.attachEvent("on"+b,c)};var Cb=function(a,b,c,d,f,e){try{if((d?a.Y:Math.random())<(f||a.N)){var g=a.M+b+Ab(c),g=g.substring(0,2E3);"undefined"===typeof e?Bb(g):Bb(g,e)}}catch(h){}},Ab=function(a){var b="";xb(a,function(a,d){if(0===a||a)b+="&"+d+"="+encodeURIComponent(String(a))});return b},Bb=function(a,b){k.google_image_requests||(k.google_image_requests=[]);var c=k.document.createElement("img");if(b){var d=function(a){b(a);a=d;c.removeEventListener?c.removeEventListener("load",a,!1):c.detachEvent&&c.detachEvent("onload",
a);a=d;c.removeEventListener?c.removeEventListener("error",a,!1):c.detachEvent&&c.detachEvent("onerror",a)};zb(c,"load",d);zb(c,"error",d)}c.src=a;k.google_image_requests.push(c)};var Db=document,N=window,Eb,Fb=null,O=Db.getElementsByTagName("script");O&&O.length&&(Fb=O[O.length-1]);Eb=Fb;var Gb=Object.prototype.hasOwnProperty,Hb=function(a,b){for(var c in a)Gb.call(a,c)&&b.call(void 0,a[c],c,a)},Ib=function(a){return!(!a||!a.call)&&"function"===typeof a},Jb=function(a,b){for(var c=1,d=arguments.length;c<d;++c)a.push(arguments[c])},Kb=function(a,b){if(a.indexOf){var c=a.indexOf(b);return 0<c||0===c}for(c=0;c<a.length;c++)if(a[c]===b)return!0;return!1},Lb=function(a){"google_onload_fired"in a||(a.google_onload_fired=!1,zb(a,"load",function(){a.google_onload_fired=!0}))},Mb=function(a){a=
a.google_unique_id;return"number"===typeof a?a:0},Nb=!!window.google_async_iframe_id;var Ob=function(a){return(a=a.google_ad_modifications)?a.loeids||[]:[]},Pb=function(a,b,c){if(!a)return null;for(var d=0;d<a.length;++d)if((a[d].ad_slot||b)==b&&(a[d].ad_tag_origin||c)==c)return a[d];return null};var Qb=function(a,b,c){this.U=a;this.P=b;this.w=c;this.v=null;this.O=this.o;this.da=!1},Rb=function(a,b,c){this.message=a;this.fileName=b||"";this.lineNumber=c||-1},Sb=function(a){P.v=a},Ub=function(a,b,c,d){var f;try{f=c()}catch(h){var e=a.w;try{var g=Tb(h),e=(d||a.O).call(a,b,g,void 0,void 0)}catch(m){a.o("pAR",m)}if(!e)throw h;}finally{}return f},Vb=function(a,b){var c=P;return function(){var d=arguments;return Ub(c,a,function(){return b.apply(void 0,d)})}};
Qb.prototype.o=function(a,b,c,d,f){var e={};e.context=a;b instanceof Rb||(b=Tb(b));e.msg=b.message.substring(0,512);b.fileName&&(e.file=b.fileName);0<b.lineNumber&&(e.line=b.lineNumber.toString());a=k.document;e.url=a.URL.substring(0,512);e.ref=a.referrer.substring(0,512);if(this.v)try{this.v(e)}catch(g){}if(d)try{d(e)}catch(g){}Cb(this.U,f||this.P,e,this.da,c);return this.w};
var Tb=function(a){var b=a.toString();a.name&&-1==b.indexOf(a.name)&&(b+=": "+a.name);a.message&&-1==b.indexOf(a.message)&&(b+=": "+a.message);if(a.stack){var c=a.stack,d=b;try{-1==c.indexOf(d)&&(c=d+"\n"+c);for(var f;c!=f;)f=c,c=c.replace(/((https?:\/..*\/)[^\/:]*:\d+(?:.|\n)*)\2/,"$1");b=c.replace(/\n */g,"\n")}catch(e){b=d}}return new Rb(b,a.fileName,a.lineNumber)};var Bc,P;Bc=new function(){this.M="http"+("http:"===N.location.protocol?"":"s")+"://pagead2.googlesyndication.com/pagead/gen_204?id=";this.N=.01;this.Y=Math.random()};P=new Qb(Bc,"jserror",!0);var Dc=function(a,b){Ub(P,a,b,Cc)},Cc=P.o,Ec=function(a,b){return Vb(a,b)};var Fc={client:"google_ad_client",format:"google_ad_format",slotname:"google_ad_slot",output:"google_ad_output",ad_type:"google_ad_type",async_oa:"google_async_for_oa_experiment",dimpr:"google_always_use_delayed_impressions_experiment",peri:"google_top_experiment",pse:"google_pstate_expt"};P.w=!Da;var Gc=function(a,b){this.start=a<b?a:b;this.end=a<b?b:a};var Hc=function(a){var b;try{b=parseInt(a.localStorage.getItem("google_experiment_mod"),10)}catch(c){return null}if(0<=b&&1E3>b)return b;b=Math.floor(1E3*wb(a));try{return a.localStorage.setItem("google_experiment_mod",""+b),b}catch(c){return null}};var Ic=null,Jc=function(){if(!Ic){for(var a=window,b=a,c=0;a&&a!=a.parent;)if(a=a.parent,c++,vb(a))b=a;else break;Ic=b}return Ic};var V={ja:{},Oa:{i:"453848100",j:"453848101"},xa:{i:"828064124",ma:"828064125",na:"828064172",oa:"828064173"},wa:{i:"828064127",j:"828064128"},ya:{i:"828064170",j:"828064171"},Ba:{i:"24819308",j:"24819309",ga:"24819320",la:"24819321"},Aa:{i:"24819330",j:"24819331"},Da:{i:"828064162",j:"828064163"},Ca:{i:"828064164",j:"828064165",pa:"828064166"},ta:{i:"86724438",j:"86724439"},ua:{i:"828064190",j:"828064191"},Ha:{i:"10573505",j:"10573506"},J:{i:"10573595",j:"10573596"},Na:{i:"10573511",j:"10573512"},
L:{i:"10573581",j:"10573582"},Ia:{i:"10573531",j:"10573532"},K:{i:"10573561",j:"10573562"},Ja:{i:"10573551",j:"10573552"},Ga:{i:"312815006",j:"312815007"},I:{i:"312815106",j:"312815107"},ka:{i:"26835105",j:"26835106"},ra:{i:"35923720",j:"35923721"},A:{i:"35923760",j:"35923761"},H:{i:"20040000",j:"20040001"},ha:{i:"20040016",j:"20040017"},qa:{i:"828064202",j:"828064203"},sa:{i:"314159284",Pa:"314159285"},Ea:{i:"19188000",j:"19188001"},Fa:{i:"20040026",j:"20040027"},ia:{fa:"314159230",za:"314159231"},
va:{Ka:"27285692",Ma:"27285712",La:"27285713"}};var Kc=new function(){this.V=new Gc(100,199)};var W=function(a,b,c,d){return a.location&&a.location.hash=="#google_plle_"+d?d:K([c,d],b)};var Lc=function(a,b,c){Dc("files::getSrc",function(){if("https:"==N.location.protocol&&"http"==c)throw c="https",Error("Requested url "+a+b);});return[c,"://",a,b].join("")},Mc=function(a,b,c){c||(c=Ga?"https":"http");return Lc(a,b,c)};var Nc=function(){},Pc=function(a,b,c){switch(typeof b){case "string":Oc(b,c);break;case "number":c.push(isFinite(b)&&!isNaN(b)?String(b):"null");break;case "boolean":c.push(String(b));break;case "undefined":c.push("null");break;case "object":if(null==b){c.push("null");break}if(b instanceof Array||void 0!=b.length&&b.splice){var d=b.length;c.push("[");for(var f="",e=0;e<d;e++)c.push(f),Pc(a,b[e],c),f=",";c.push("]");break}c.push("{");d="";for(f in b)b.hasOwnProperty(f)&&(e=b[f],"function"!=typeof e&&
(c.push(d),Oc(f,c),c.push(":"),Pc(a,e,c),d=","));c.push("}");break;case "function":break;default:throw Error("Unknown type: "+typeof b);}},Qc={'"':'\\"',"\\":"\\\\","/":"\\/","\b":"\\b","\f":"\\f","\n":"\\n","\r":"\\r","\t":"\\t","\x0B":"\\u000b"},Rc=/\uffff/.test("\uffff")?/[\\\"\x00-\x1f\x7f-\uffff]/g:/[\\\"\x00-\x1f\x7f-\xff]/g,Oc=function(a,b){b.push('"');b.push(a.replace(Rc,function(a){if(a in Qc)return Qc[a];var b=a.charCodeAt(0),f="\\u";16>b?f+="000":256>b?f+="00":4096>b&&(f+="0");return Qc[a]=
f+b.toString(16)}));b.push('"')};var Sc=H("Safari")&&!((H("Chrome")||H("CriOS"))&&!ib()&&!H("Edge")||H("Coast")||ib()||H("Edge")||H("Silk")||H("Android"))&&!(H("iPhone")&&!H("iPod")&&!H("iPad")||H("iPad")||H("iPod"));var Tc=null,Uc=J||lb&&!Sc||jb||"function"==typeof k.btoa;var Vc="google_ad_block google_ad_channel google_ad_client google_ad_format google_ad_height google_ad_host google_ad_host_channel google_ad_host_tier_id google_ad_modifications google_ad_output google_ad_region google_ad_section google_ad_slot google_ad_type google_ad_unit_key google_ad_dom_fingerprint google_ad_width google_adtest google_allow_expandable_ads google_alternate_ad_url google_alternate_color google_analytics_domain_name google_analytics_uacct google_analytics_url_parameters google_available_width google_captcha_token google_city google_color_bg google_color_border google_color_line google_color_link google_color_text google_color_url google_container_id google_content_recommendation_ui_type google_contents google_core_dbp google_country google_cpm google_ctr_threshold google_cust_age google_cust_ch google_cust_criteria google_cust_gender google_cust_id google_cust_interests google_cust_job google_cust_l google_cust_lh google_cust_u_url google_disable_video_autoplay google_delay_requests_count google_delay_requests_delay google_ed google_eids google_ember_h google_ember_w google_enable_content_recommendations google_enable_ose google_encoding google_floating_ad_position google_font_face google_font_size google_frame_id google_gl google_hints google_is_split_slot google_image_size google_kw google_kw_type google_lact google_language google_loeid google_max_num_ads google_max_radlink_len google_mtl google_nofo google_num_radlinks google_num_radlinks_per_unit google_only_ads_with_video google_only_pyv_ads google_only_userchoice_ads google_override_format google_page_url google_pgb_reactive google_previous_watch google_previous_searches google_referrer_url google_region google_responsive_formats google_reuse_colors google_rl_dest_url google_rl_filtering google_rl_mode google_rt google_safe google_scs google_source_type google_sui google_skip google_tag_for_child_directed_treatment google_tag_info google_tag_origin google_tdsma google_tfs google_tl google_ui_features google_video_doc_id google_video_product_type google_video_url_to_fetch google_webgl_support google_with_pyv_ads google_yt_pt google_yt_up".split(" "),
Wc={google_ad_modifications:!0,google_analytics_domain_name:!0,google_analytics_uacct:!0},Xc=function(a){return(a=a.innerText||a.innerHTML)&&(a=a.replace(/^\s+/,"").split(/\r?\n/,1)[0].match(/^\x3c!--+(.*?)(?:--+>)?\s*$/))&&/google_ad_client/.test(a[1])?a[1]:null},Yc=function(a){if(a=a.innerText||a.innerHTML)if(a=a.replace(/^\s+/,"").split(/\r?\n/,1)[0],(a=a.match(/^\x3c!--+(.*?)(?:--+>)?\s*$/)||a.match(/^\/*\s*<!\[CDATA\[(.*?)(?:\/*\s*\]\]>)?\s*$/i))&&/google_ad_client/.test(a[1]))return a[1];return null},
Zc=function(a){if(a=a.innerText||a.innerHTML)if(a=a.replace(/^\s+|\s+$/g,"").replace(/\s*(\r?\n)+\s*/g,";"),(a=a.match(/^\x3c!--+(.*?)(?:--+>)?$/)||a.match(/^\/*\s*<!\[CDATA\[(.*?)(?:\/*\s*\]\]>)?$/i))&&/google_ad_client/.test(a[1]))return a[1];return null},bd=function(a,b){var c;try{a:{var d=a.document.getElementsByTagName("script"),f=Xc,e;"undefined"!=typeof a.google_pubvars_recovery_regexp_experiment?e=a.google_pubvars_recovery_regexp_experiment:(e=K(["C","E","EM"],ya),a.google_pubvars_recovery_regexp_experiment=
e);b.google_pubvars_recovery_regexp_experiment=e;switch(e){case "E":f=Yc;break;case "EM":var g=a.navigator&&a.navigator.userAgent||"",h;if(!(h=/appbankapppuzdradb|daumapps|fban|fbios|fbav|fb_iab|gsa\/|messengerforios|naver|niftyappmobile|nonavigation|pinterest|twitter|ucbrowser|yjnewsapp|youtube/i.test(g))){var m;if(m=/i(phone|pad|pod)/i.test(g)){var u;if(u=/applewebkit/i.test(g)&&!/version|safari/i.test(g)){var r;try{r=!(!N.navigator.X&&!N.top.navigator.X)}catch(v){r=!1}u=!r}m=u}h=m}f=h?Xc:Zc}for(var n=
d.length-1;0<=n;n--){var y=d[n];if(!y.google_parsed_script){y.google_parsed_script=!0;var z=f(y);if(z){c=z;break a}}}c=null}}catch(v){return!1}if(!c)return!1;try{for(var d=/(google_\w+) *= *(['"]?[\w.-]+['"]?) *(?:;|$)/gm,f={},w;w=d.exec(c);)f[w[1]]=$c(w[2]);ad(f,a)}catch(v){return!1}return!!a.google_ad_client},cd=function(a){a.google_page_url&&(a.google_page_url=String(a.google_page_url));var b=[];Hb(a,function(a,d){if(null!=a){var f;try{var e=[];Pc(new Nc,a,e);f=e.join("")}catch(g){}f&&(f=f.replace(/\//g,
"\\$&"),Jb(b,d,"=",f,";"))}});return b.join("")},dd=function(a){for(var b=0,c=Vc.length;b<c;b++){var d=Vc[b];Wc[d]||(a[d]=null)}},$c=function(a){switch(a){case "true":return!0;case "false":return!1;case "null":return null;case "undefined":break;default:try{var b=a.match(/^(?:'(.*)'|"(.*)")$/);if(b)return b[1]||b[2]||"";if(/^[-+]?\d*(\.\d+)?$/.test(a)){var c=parseFloat(a);return c===c?c:void 0}}catch(d){}}},ad=function(a,b){for(var c=0;c<Vc.length;c++){var d=Vc[c];null==b[d]&&null!=a[d]&&(b[d]=a[d])}};var ed=function(a){this.m=a;a.google_iframe_oncopy||(a.google_iframe_oncopy={handlers:{},upd:p(this.ca,this)});this.$=a.google_iframe_oncopy},fd;var X="var i=this.id,s=window.google_iframe_oncopy,H=s&&s.handlers,h=H&&H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&&d&&(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}";
/[\x00&<>"']/.test(X)&&(-1!=X.indexOf("&")&&(X=X.replace(Ia,"&amp;")),-1!=X.indexOf("<")&&(X=X.replace(Ja,"&lt;")),-1!=X.indexOf(">")&&(X=X.replace(Ka,"&gt;")),-1!=X.indexOf('"')&&(X=X.replace(ab,"&quot;")),-1!=X.indexOf("'")&&(X=X.replace(bb,"&#39;")),-1!=X.indexOf("\x00")&&(X=X.replace(cb,"&#0;")));fd=X;ed.prototype.set=function(a,b){this.$.handlers[a]=b;this.m.addEventListener&&this.m.addEventListener("load",p(this.R,this,a),!1)};
ed.prototype.R=function(a){a=this.m.document.getElementById(a);try{var b=a.contentWindow.document;if(a.onload&&b&&(!b.body||!b.body.firstChild))a.onload()}catch(c){}};ed.prototype.ca=function(a,b){var c=gd("rx",a),d;a:{if(a&&(d=a.match("dt=([^&]+)"))&&2==d.length){d=d[1];break a}d=""}d=(new Date).getTime()-d;c=c.replace(/&dtd=(\d+|-?M)/,"&dtd="+(1E5<=d?"M":0<=d?d:"-M"));this.set(b,c);return c};
var gd=function(a,b){var c=new RegExp("\\b"+a+"=(\\d+)"),d=c.exec(b);d&&(b=b.replace(c,a+"="+(+d[1]+1||1)));return b};var hd=/MSIE [2-7]|PlayStation|Gecko\/20090226|Android 2\.|Opera/i,id=/Android/,jd=!1;var kd=function(a){if(!a)return"";(a=a.toLowerCase())&&"ca-"!=a.substring(0,3)&&(a="ca-"+a);return a};var ld=null;var md={"120x90":!0,"160x90":!0,"180x90":!0,"200x90":!0,"468x15":!0,"728x15":!0};var nd="google_ad_client google_ad_format google_ad_height google_ad_width google_city google_country google_encoding google_language google_page_url".split(" "),od=function(a){try{var b=a.top.google_ads_params_store;if(b)return b;b=a.top.google_ads_params_store={};if(b===a.top.google_ads_params_store)return b}catch(c){}return null};var Y,Z=function(a){this.u=[];this.m=a||window;this.l=0;this.s=null;this.G=0},pd=function(a,b){this.S=a;this.ea=b};Z.prototype.enqueue=function(a,b){0!=this.l||0!=this.u.length||b&&b!=window?this.C(a,b):(this.l=2,this.F(new pd(a,window)))};Z.prototype.C=function(a,b){this.u.push(new pd(a,b||this.m));qd(this)};Z.prototype.T=function(a){this.l=1;if(a){var b=Ec("sjr::timeout",p(this.D,this,!0));this.s=this.m.setTimeout(b,a)}};
Z.prototype.D=function(a){a&&++this.G;1==this.l&&(null!=this.s&&(this.m.clearTimeout(this.s),this.s=null),this.l=0);qd(this)};Z.prototype.Z=function(){return!(!window||!Array)};Z.prototype.aa=function(){return this.G};Z.prototype.nq=Z.prototype.enqueue;Z.prototype.nqa=Z.prototype.C;Z.prototype.al=Z.prototype.T;Z.prototype.rl=Z.prototype.D;Z.prototype.sz=Z.prototype.Z;Z.prototype.tc=Z.prototype.aa;var qd=function(a){var b=Ec("sjr::tryrun",p(a.ba,a));a.m.setTimeout(b,0)};
Z.prototype.ba=function(){if(0==this.l&&this.u.length){var a=this.u.shift();this.l=2;var b=Ec("sjr::run",p(this.F,this,a));a.ea.setTimeout(b,0);qd(this)}};Z.prototype.F=function(a){this.l=0;a.S()};
var rd=function(a){try{return a.sz()}catch(b){return!1}},sd=function(a){return!!a&&("object"===typeof a||"function"===typeof a)&&rd(a)&&Ib(a.nq)&&Ib(a.nqa)&&Ib(a.al)&&Ib(a.rl)},td=function(){if(Y&&rd(Y))return Y;var a=Jc(),b=a.google_jobrunner;return sd(b)?Y=b:a.google_jobrunner=Y=new Z(a)},ud=function(a,b){td().nq(a,b)},vd=function(a,b){td().nqa(a,b)};var wd=Nb?1==Mb(N):!Mb(N),xd=function(){var a=Fa?"https":"http",b=F("script"),c;c=ea("","pagead2.googlesyndication.com");return["<",b,' src="',Mc(c,["/pagead/js/",Ca(),"/r20151006/show_ads_impl.js"].join(""),a),'"></',b,">"].join("")},yd=function(a,b,c,d){return function(){var f=!1;d&&td().al(3E4);try{var e=a.document.getElementById(b).contentWindow;
if(vb(e)){var g=a.document.getElementById(b).contentWindow,h=g.document;h.body&&h.body.firstChild||(h.open(),g.google_async_iframe_close=!0,h.write(c))}else{for(var m=a.document.getElementById(b).contentWindow,e=c,e=String(e),g=['"'],h=0;h<e.length;h++){var u=e.charAt(h),r=u.charCodeAt(0),n=h+1,y;if(!(y=db[u])){var z;if(31<r&&127>r)z=u;else{var w=u;if(w in E)z=E[w];else if(w in db)z=E[w]=db[w];else{var v=w,B=w.charCodeAt(0);if(31<B&&127>B)v=w;else{if(256>B){if(v="\\x",16>B||256<B)v+="0"}else v="\\u",
4096>B&&(v+="0");v+=B.toString(16).toUpperCase()}z=E[w]=v}}y=z}g[n]=y}g.push('"');m.location.replace("javascript:"+g.join(""))}f=!0}catch(Q){m=Jc().google_jobrunner,sd(m)&&m.rl()}f&&(f=gd("google_async_rrc",c),(new ed(a)).set(b,yd(a,b,f,!1)))}},zd=function(a){var b=["<iframe"];Hb(a,function(a,d){null!=a&&b.push(" "+d+'="'+a+'"')});b.push("></iframe>");return b.join("")},Ad=function(a){if(!ld)a:{for(var b=[k.top],c=[],d=0,f;f=b[d++];){c.push(f);try{if(f.frames)for(var e=f.frames.length,g=0;g<e&&1024>
b.length;++g)b.push(f.frames[g])}catch(m){}}for(b=0;b<c.length;b++)try{var h=c[b].frames.google_esf;if(h){ld=h;break a}}catch(m){}ld=null}return ld?"":(c={style:"display:none"},c["data-ad-client"]=kd(a),c.id="google_esf",c.name="google_esf",a=Mc(ea("","googleads.g.doubleclick.net"),["/pagead/html/",Ca(),"/r20151006/zrt_lookup.html"].join("")),c.src=a,zd(c))},Bd=function(a,b){var c=b.google_ad_output,d=b.google_ad_format;
d||"html"!=c&&null!=c||(d=b.google_ad_width+"x"+b.google_ad_height,b.google_ad_format_suffix&&(d+=b.google_ad_format_suffix));c=!b.google_ad_slot||b.google_override_format||!md[b.google_ad_width+"x"+b.google_ad_height]&&"aa"==b.google_loader_used;d=d&&c?d.toLowerCase():"";b.google_ad_format=d;for(var d=[b.google_ad_slot,b.google_ad_format,b.google_ad_type,b.google_ad_width,b.google_ad_height],c=[],f=0,e=Eb.parentElement;e&&25>f;e=e.parentNode,++f)c.push(9!==e.nodeType&&e.id||"");(c=c.join())&&d.push(c);
b.google_ad_unit_key=yb(d.join(":")).toString();d=a.google_adk2_experiment=a.google_adk2_experiment||K(["C","E"],va)||"N";if("E"==d){d=Eb;c=[];for(f=0;d&&25>f;++f){var e="",e=(e=9!==d.nodeType&&d.id)?"/"+e:"",g;a:{if(d&&d.nodeName&&d.parentElement){g=d.nodeName.toString().toLowerCase();for(var h=d.parentElement.childNodes,m=0,u=0;u<h.length;++u){var r=h[u];if(r.nodeName&&r.nodeName.toString().toLowerCase()===g){if(d===r){g="."+m;break a}++m}}}g=""}c.push((d.nodeName&&d.nodeName.toString().toLowerCase())+
e+g);d=d.parentElement}d=c.join()+":";c=a;f=[];if(c)try{for(var n=c.parent,e=0;n&&n!==c&&25>e;++e){var y=n.frames;for(g=0;g<y.length;++g)if(c===y[g]){f.push(g);break}c=n;n=c.parent}}catch(z){}b.google_ad_dom_fingerprint=yb(d+f.join()).toString()}else"C"==d&&(b.google_ad_dom_fingerprint="ctrl")};(function(a){Sb(function(b){fb(a,function(a){a(b)})})})([function(a){a.shv=Ca()},function(a){xb(Fc,function(b,c){try{null!=k[b]&&(a[c]=k[b])}catch(d){}})}]);
Dc("sa::main",function(){var a=window,b=a.google_ad_modifications=a.google_ad_modifications||{};if(!b.plle){b.plle=!0;var c=b.loeids=b.loeids||[],d=V.J,f,e=d.j,g;if(a.location&&a.location.hash=="#google_plle_"+e)g=e;else{var h=[d.i,e],m=new Gc(qa,qa+ra-1),u;if(!(u=0>=ra||ra%h.length)){var r=Kc.V;u=!(r.start<=m.start&&r.end>=m.end)}if(u)g=null;else{var n=Hc(a);g=null!==n&&m.start<=n&&m.end>=n?h[(n-qa)%h.length]:null}}(f=g)&&c.push(f);var d=V.I,y=W(a,sa,d.i,d.j);y&&c.push(y);var d=V.L,z=W(a,ta,d.i,
d.j);z&&c.push(z);var d=V.K,w=W(a,ua,d.i,d.j);w&&c.push(w);var d=V.A,v=W(a,Aa,d.i,d.j);v&&c.push(v);if(!Db.body){var d=V.H,B=W(a,Ba,d.i,d.j);B&&c.push(B)}}var Q;var Wb=a.google_ad_slot,R=a.google_ad_modifications;if(!R||Pb(R.ad_whitelist,Wb,void 0))Q=null;else{var Xb=R.space_collapsing||"none",Yb=Pb(R.ad_blacklist,Wb);Q=Yb?{B:!0,W:Yb.space_collapsing||Xb}:R.remove_ads_by_default?{B:!0,W:Xb}:null}if(Q&&Q.B)dd(a);else{Lb(a);var Zb=window.google_ad_output;void 0!==window.google_always_use_delayed_impressions_experiment||
Zb&&"html"!=Zb||(window.google_always_use_delayed_impressions_experiment=K(["C","E"],pa));var La;if(!(La=!1===window.google_enable_async)){var Ma;var $b=navigator.userAgent;hd.test($b)?Ma=!1:(void 0!==window.google_async_for_oa_experiment||!id.test(navigator.userAgent)||hd.test(navigator.userAgent)||(window.google_async_for_oa_experiment=K(["E","C"],fa)),Ma=id.test($b)?"E"===window.google_async_for_oa_experiment:!0);La=!Ma||window.google_container_id||window.google_ad_output&&"html"!=window.google_ad_output}if(La)a.google_loader_used=
"sb",a.google_start_time=q,Bd(a,a),document.write(Ad(a.google_ad_client)+xd());else{if(wd){var ac=a.google_ad_client,Cd=navigator;if(wa&&a&&ac&&Cd){var bc=a.document,Dd=Mc("pagead2.googlesyndication.com","/pub-config/"+kd(ac)+".js"),cc=bc.createElement("script");cc.src=Dd;var ga=bc.getElementsByTagName("script")[0];ga&&ga.parentNode&&ga.parentNode.insertBefore(cc,ga)}}a.google_unique_id?++a.google_unique_id:a.google_unique_id=1;var l={};null==a.google_ad_client&&bd(a,l)&&(l.google_loader_features_used=
2048);ad(a,l);l.google_loader_used="sa";dd(a);var dc=F("script"),Na,ha;a:{try{var L=a.top.google_pubvars_reuse_experiment;if("undefined"!==typeof L){ha=L;break a}L=K(["C","E"],xa)||null;a.top.google_pubvars_reuse_experiment=L;if(a.top.google_pubvars_reuse_experiment===L){ha=L;break a}}catch(ec){}ha=null}if("E"===ha){var Ed=null!=l.google_ad_client,Fd=null!=l.google_ad_width,Gd=null!=l.google_ad_height,fc=od(a);if(fc){for(var Oa=0;Oa<nd.length;Oa++){var Pa=nd[Oa];null!=l[Pa]&&(fc[Pa]=l[Pa])}var S=
od(a);if(S){var gc=S.google_ad_width,hc=S.google_ad_height,Qa=S.google_ad_format;if(gc&&hc&&Qa){var ia,Ra=Qa&&Qa.match(/(\d+)x(\d+)/);ia=Ra?{width:Ra[1],height:Ra[2]}:null;!ia||ia.width==gc&&ia.height==hc||delete S.google_ad_format}}}var Sa=od(a);if(Sa)for(var Ta=0;Ta<nd.length;Ta++){var ja=nd[Ta];null==l[ja]&&null!=Sa[ja]&&(l[ja]=Sa[ja])}var Hd=null!=l.google_ad_client,Id=null!=l.google_ad_width,Jd=null!=l.google_ad_height;Na=[Ed?"c2":Hd?"c1":"c0",Fd?"w2":Id?"w1":"w0",Gd?"h2":Jd?"h1":"h0"].join()}var t=
{},Kd=l.google_ad_height;t.width='"'+l.google_ad_width+'"';t.height='"'+Kd+'"';t.frameborder='"0"';t.marginwidth='"0"';t.marginheight='"0"';t.vspace='"0"';t.hspace='"0"';t.allowtransparency='"true"';t.scrolling='"no"';t.allowfullscreen='"true"';t.onload='"'+fd+'"';for(var ka,ic=a.document,T=t.id,Ld=0;!T||ic.getElementById(T);)T="aswift_"+Ld++;t.id=T;t.name=T;var jc=l.google_ad_width,kc=l.google_ad_height,Ua=V.A,lc=Ua.i,mc=Ua.j,nc=l.google_active_plles=l.google_active_plles||[];Kb(Ob(a),lc)?nc.push(lc):
Kb(Ob(a),mc)&&nc.push(mc);jd=Kb(Ob(a),Ua.j);var la=["<iframe"],ma;for(ma in t)t.hasOwnProperty(ma)&&Jb(la,ma+"="+t[ma]);var Va="left:0;position:absolute;top:0;";jd&&(Va=Va+"width:"+jc+"px;height:"+kc+"px;");la.push('style="'+Va+'"');la.push("></iframe>");var oc=t.id,pc="border:none;height:"+kc+"px;margin:0;padding:0;position:relative;visibility:visible;width:"+jc+"px;background-color:transparent";ic.write(['<ins id="',oc+"_expand",'" style="display:inline-table;',pc,'"><ins id="',oc+"_anchor",'" style="display:block;',
pc,'">',la.join(" "),"</ins></ins>"].join(""));ka=t.id;Bd(a,l);var Md=cd(l),M=null,Wa=K(["C","E"],za);if("E"==Wa){a:{try{if(window.JSON&&window.JSON.stringify&&window.encodeURIComponent){var Xa=encodeURIComponent(window.JSON.stringify(l)),Ya;if(Uc)Ya=k.btoa(Xa);else{for(var C=[],qc=0,Za=0;Za<Xa.length;Za++){for(var U=Xa.charCodeAt(Za);255<U;)C[qc++]=U&255,U>>=8;C[qc++]=U}if(!Tc){Tc={};for(var na=0;65>na;na++)Tc[na]="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".charAt(na)}for(var oa=
Tc,rc=[],D=0;D<C.length;D+=3){var sc=C[D],tc=D+1<C.length,uc=tc?C[D+1]:0,vc=D+2<C.length,wc=vc?C[D+2]:0,Nd=sc>>2,Od=(sc&3)<<4|uc>>4,xc=(uc&15)<<2|wc>>6,yc=wc&63;vc||(yc=64,tc||(xc=64));rc.push(oa[Nd],oa[Od],oa[xc],oa[yc])}Ya=rc.join("")}M=Ya;break a}Cb(Bc,"sblob",{json:window.JSON?1:0,eURI:window.encodeURIComponent?1:0},!0,void 0,void 0)}catch(ec){P.o("sblob",ec,void 0,void 0)}M=""}M||(M="{X}")}else"C"==Wa&&(M="{C}");var Pd=Ad(l.google_ad_client),zc=(new Date).getTime(),$a=a.google_async_for_oa_experiment;
$a&&(a.google_async_for_oa_experiment=void 0);var Ac=a.google_always_use_delayed_impressions_experiment,Qd=["<!doctype html><html><body>",Pd,"<",dc,">",Md,"google_show_ads_impl=true;google_unique_id=",Mb(a),';google_async_iframe_id="',ka,'";google_start_time=',q,";",Wa?'google_pub_vars = "'+M+'";':"",Na?'google_pubvars_reuse_experiment_result = "'+Na+'";':"",$a?'google_async_for_oa_experiment="'+$a+'";':"",Ac?'google_always_use_delayed_impressions_experiment="'+Ac+'";':"","google_bpp=",zc>q?zc-q:
1,";google_async_rrc=0;google_iframe_start_time=new Date().getTime();</",dc,">",xd(),"</body></html>"].join("");(a.document.getElementById(ka)?ud:vd)(yd(a,ka,Qd,!0))}}});}).call(this);
