<html lang="tr"><head>
    <script type="module">
import { createHotContext } from "/@vite/client";
const hot = createHotContext("/__dummy__runtime-error-plugin");

function sendError(error) {
  if (!(error instanceof Error)) {
    error = new Error("(unknown runtime error)");
  }
  const serialized = {
    message: error.message,
    stack: error.stack,
  };
  hot.send("runtime-error-plugin:error", serialized);
}

window.addEventListener("error", (evt) => {
  sendError(evt.error);
});

window.addEventListener("unhandledrejection", (evt) => {
  sendError(evt.reason);
});
</script>

    <script type="module">import { injectIntoGlobalHook } from "/@react-refresh";
injectIntoGlobalHook(window);
window.$RefreshReg$ = () => {};
window.$RefreshSig$ = () => (type) => type;</script>

    <script type="module" src="/@vite/client"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Çanakkale Drone Çekimi - Havadan Görüntüleme ve Video Prodüksiyon Hizmetleri</title>
    <meta name="description" content="Çanakkale'de uzman drone çekimi hizmetleri. Havadan fotoğraf, sinematik video prodüksiyon, gayrimenkul görüntüleme ve şantiye izleme çözümleri. Profesyonel ekipman ve tecrübeli kadro ile hizmetinizdeyiz.">
    <meta name="keywords" content="drone çekimi çanakkale, havadan görüntüleme, drone video prodüksiyon, gayrimenkul drone, şantiye drone izleme, hava çekimi hizmeti, profesyonel drone operatörü, çanakkale havadan fotoğraf">
    <meta name="author" content="Çanakkale Drone Çekimi - Çözüm Cloud">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.canakkale-dronecekimi.com.tr">
    
    <meta property="og:title" content="Çanakkale Drone Çekimi - Havadan Görüntüleme ve Video Prodüksiyon">
    <meta property="og:description" content="Çanakkale'de profesyonel drone çekimi. Havadan fotoğraf, sinematik video, gayrimenkul ve şantiye izleme. Hemen teklif alın!">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.canakkale-dronecekimi.com.tr">
    <meta property="og:locale" content="tr_TR">
    <meta property="og:site_name" content="Çanakkale Drone Çekimi">
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Çanakkale Drone Çekimi - Havadan Görüntüleme Uzmanı">
    <meta name="twitter:description" content="Çanakkale bölgesinin güvenilir drone çekim partneri. Video prodüksiyon ve havadan fotoğraf hizmetleri.">
    
    <meta name="geo.region" content="TR-17">
    <meta name="geo.placename" content="Çanakkale">
    <meta name="geo.position" content="40.1553;26.4142">
    <meta name="ICBM" content="40.1553, 26.4142">
    
    <link rel="icon" type="image/png" href="/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Çanakkale Drone Çekimi",
      "image": "https://www.canakkale-dronecekimi.com.tr/favicon.png",
      "@id": "https://www.canakkale-dronecekimi.com.tr",
      "url": "https://www.canakkale-dronecekimi.com.tr",
      "telephone": "+905347922531",
      "email": "info@cozumcloud.com.tr",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Esenler Mh. Ahmet Piriştina Cd. No:19 Daire:17",
        "addressLocality": "Çanakkale",
        "postalCode": "17000",
        "addressCountry": "TR"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 40.1553,
        "longitude": 26.4142
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
        "opens": "09:00",
        "closes": "18:00"
      },
      "priceRange": "$$",
      "areaServed": {
        "@type": "City",
        "name": "Çanakkale"
      },
      "description": "Çanakkale drone çekimi uzmanı. Havadan görüntüleme, sinematik video prodüksiyon, gayrimenkul fotoğrafçılığı ve şantiye izleme hizmetleri.",
      "serviceType": ["Drone Çekimi Çanakkale", "Havadan Görüntüleme", "Video Prodüksiyon", "Şantiye Drone İzleme", "Gayrimenkul Drone", "Organizasyon Çekimi"]
    }
    </script>
    <script type="module">"use strict";(()=>{var P="0.4.4";var v={HIGHLIGHT_COLOR:"#0079F2",HIGHLIGHT_BG:"#0079F210",ALLOWED_DOMAIN:".replit.dev",THEME_PREVIEW_STYLE_ID:"replit-theme-preview",MAX_SIBLING_HIGHLIGHTERS:1e3,MAX_DESCENDANTS_FOR_SCREENSHOT:1500},Z=`
  [contenteditable] {
    outline: none !important;
  }

  [contenteditable]:focus {
    outline: none !important;
  }
`,ee=`
  .beacon-highlighter {
    content: '';
    position: absolute;
    z-index: ${Number.MAX_SAFE_INTEGER-3};
    box-sizing: border-box;
    pointer-events: none;
    outline: 2px dashed ${v.HIGHLIGHT_COLOR} !important;
    outline-offset: 0 !important;
    margin: 0 !important;
    padding: 0 !important;
    transform: none !important;
    background: ${v.HIGHLIGHT_BG} !important;
    opacity: 0;
  }
  
  .beacon-hover-highlighter {
    position: fixed;
    z-index: ${Number.MAX_SAFE_INTEGER};
  }
  
  .beacon-selected-highlighter {
    position: fixed;
    pointer-events: none;
    outline: 2px solid ${v.HIGHLIGHT_COLOR} !important;
    outline-offset: 3px !important;
    background: none !important;
  }
  
  .beacon-label {
    position: absolute;
    background-color: ${v.HIGHLIGHT_COLOR};
    color: #FFFFFF;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 14px;
    font-family: monospace;
    line-height: 1;
    white-space: nowrap;
    box-shadow: 0 2px 4px rgba(0,0,0,0.2);
    transform: translateY(-100%);
    margin-top: -4px;
    left: 0;
    z-index: ${Number.MAX_SAFE_INTEGER-2};
    pointer-events: none;
    opacity: 0;
  }
  
  .beacon-hover-label {
    position: fixed;
    z-index: ${Number.MAX_SAFE_INTEGER};
  }
  
  .beacon-selected-label {
    position: fixed;
    pointer-events: none;
  }
  
  .beacon-sibling-highlighter {
    position: fixed;
    pointer-events: none;
    outline: 2px dashed ${v.HIGHLIGHT_COLOR} !important;
    outline-offset: 0 !important;
    margin: 0 !important;
    padding: 0 !important;
    transform: none !important;
    background: ${v.HIGHLIGHT_BG} !important;
  }
`;function Me(e,i){return e[13]=1,e[14]=i>>8,e[15]=i&255,e[16]=i>>8,e[17]=i&255,e}var le=112,ae=72,ce=89,he=115,G;function Re(){let e=new Int32Array(256);for(let i=0;i<256;i++){let t=i;for(let n=0;n<8;n++)t=t&1?3988292384^t>>>1:t>>>1;e[i]=t}return e}function De(e){let i=-1;G||(G=Re());for(let t=0;t<e.length;t++)i=G[(i^e[t])&255]^i>>>8;return i^-1}function Oe(e){let i=e.length-1;for(let t=i;t>=4;t--)if(e[t-4]===9&&e[t-3]===le&&e[t-2]===ae&&e[t-1]===ce&&e[t]===he)return t-3;return 0}function Pe(e,i,t=!1){let n=new Uint8Array(13);i*=39.3701,n[0]=le,n[1]=ae,n[2]=ce,n[3]=he,n[4]=i>>>24,n[5]=i>>>16,n[6]=i>>>8,n[7]=i&255,n[8]=n[4],n[9]=n[5],n[10]=n[6],n[11]=n[7],n[12]=1;let s=De(n),r=new Uint8Array(4);if(r[0]=s>>>24,r[1]=s>>>16,r[2]=s>>>8,r[3]=s&255,t){let l=Oe(e);return e.set(n,l),e.set(r,l+13),e}else{let l=new Uint8Array(4);l[0]=0,l[1]=0,l[2]=0,l[3]=9;let o=new Uint8Array(54);return o.set(e,0),o.set(l,33),o.set(n,37),o.set(r,50),o}}var de="[modern-screenshot]",H=typeof window<"u",Fe=H&&"Worker"in window,ke=H&&"atob"in window,Yt=H&&"btoa"in window,V=H?window.navigator?.userAgent:"",ue=V.includes("Chrome"),F=V.includes("AppleWebKit")&&!ue,j=V.includes("Firefox"),Ue=e=>e&&"__CONTEXT__"in e,$e=e=>e.constructor.name==="CSSFontFaceRule",Be=e=>e.constructor.name==="CSSImportRule",S=e=>e.nodeType===1,N=e=>typeof e.className=="object",ge=e=>e.tagName==="image",Ge=e=>e.tagName==="use",x=e=>S(e)&&typeof e.style<"u"&&!N(e),We=e=>e.nodeType===8,Ve=e=>e.nodeType===3,L=e=>e.tagName==="IMG",k=e=>e.tagName==="VIDEO",je=e=>e.tagName==="CANVAS",qe=e=>e.tagName==="TEXTAREA",ze=e=>e.tagName==="INPUT",Xe=e=>e.tagName==="STYLE",Ye=e=>e.tagName==="SCRIPT",Ke=e=>e.tagName==="SELECT",Je=e=>e.tagName==="SLOT",Qe=e=>e.tagName==="IFRAME",Ze=(...e)=>console.warn(de,...e);function et(e){let i=e?.createElement?.("canvas");return i&&(i.height=i.width=1),!!i&&"toDataURL"in i&&!!i.toDataURL("image/webp").includes("image/webp")}var W=e=>e.startsWith("data:");function me(e,i){if(e.match(/^[a-z]+:\/\//i))return e;if(H&&e.match(/^\/\//))return window.location.protocol+e;if(e.match(/^[a-z]+:/i)||!H)return e;let t=U().implementation.createHTMLDocument(),n=t.createElement("base"),s=t.createElement("a");return t.head.appendChild(n),t.body.appendChild(s),i&&(n.href=i),s.href=e,s.href}function U(e){return(e&&S(e)?e?.ownerDocument:e)??window.document}var $="http://www.w3.org/2000/svg";function tt(e,i,t){let n=U(t).createElementNS($,"svg");return n.setAttributeNS(null,"width",e.toString()),n.setAttributeNS(null,"height",i.toString()),n.setAttributeNS(null,"viewBox",`0 0 ${e} ${i}`),n}function it(e,i){let t=new XMLSerializer().serializeToString(e);return i&&(t=t.replace(/[\u0000-\u0008\v\f\u000E-\u001F\uD800-\uDFFF\uFFFE\uFFFF]/gu,"")),`data:image/svg+xml;charset=utf-8,${encodeURIComponent(t)}`}async function nt(e,i="image/png",t=1){try{return await new Promise((n,s)=>{e.toBlob(r=>{r?n(r):s(new Error("Blob is null"))},i,t)})}catch(n){if(ke)return rt(e.toDataURL(i,t));throw n}}function rt(e){let[i,t]=e.split(","),n=i.match(/data:(.+);/)?.[1]??void 0,s=window.atob(t),r=s.length,l=new Uint8Array(r);for(let o=0;o<r;o+=1)l[o]=s.charCodeAt(o);return new Blob([l],{type:n})}function fe(e,i){return new Promise((t,n)=>{let s=new FileReader;s.onload=()=>t(s.result),s.onerror=()=>n(s.error),s.onabort=()=>n(new Error(`Failed read blob to ${i}`)),i==="dataUrl"?s.readAsDataURL(e):i==="arrayBuffer"&&s.readAsArrayBuffer(e)})}var st=e=>fe(e,"dataUrl"),ot=e=>fe(e,"arrayBuffer");function C(e,i){let t=U(i).createElement("img");return t.decoding="sync",t.loading="eager",t.src=e,t}function _(e,i){return new Promise(t=>{let{timeout:n,ownerDocument:s,onError:r,onWarn:l}=i??{},o=typeof e=="string"?C(e,U(s)):e,c=null,h=null;function a(){t(o),c&&clearTimeout(c),h?.()}if(n&&(c=setTimeout(a,n)),k(o)){let d=o.currentSrc||o.src;if(!d)return o.poster?_(o.poster,i).then(t):a();if(o.readyState>=2)return a();let u=a,m=g=>{l?.("Failed video load",d,g),r?.(g),a()};h=()=>{o.removeEventListener("loadeddata",u),o.removeEventListener("error",m)},o.addEventListener("loadeddata",u,{once:!0}),o.addEventListener("error",m,{once:!0})}else{let d=ge(o)?o.href.baseVal:o.currentSrc||o.src;if(!d)return a();let u=async()=>{if(L(o)&&"decode"in o)try{await o.decode()}catch(g){l?.("Failed to decode image, trying to render anyway",o.dataset.originalSrc||d,g)}a()},m=g=>{l?.("Failed image load",o.dataset.originalSrc||d,g),a()};if(L(o)&&o.complete)return u();h=()=>{o.removeEventListener("load",u),o.removeEventListener("error",m)},o.addEventListener("load",u,{once:!0}),o.addEventListener("error",m,{once:!0})}})}async function lt(e,i){x(e)&&(L(e)||k(e)?await _(e,i):await Promise.all(["img","video"].flatMap(t=>Array.from(e.querySelectorAll(t)).map(n=>_(n,i)))))}var pe=function(){let i=0,t=()=>`0000${(Math.random()*36**4<<0).toString(36)}`.slice(-4);return()=>(i+=1,`u${t()}${i}`)}();function be(e){return e?.split(",").map(i=>i.trim().replace(/"|'/g,"").toLowerCase()).filter(Boolean)}var te=0;function at(e){let i=`${de}[#${te}]`;return te++,{time:t=>e&&console.time(`${i} ${t}`),timeEnd:t=>e&&console.timeEnd(`${i} ${t}`),warn:(...t)=>e&&Ze(...t)}}function ct(e){return{cache:e?"no-cache":"force-cache"}}async function q(e,i){return Ue(e)?e:ht(e,{...i,autoDestruct:!0})}async function ht(e,i){let{scale:t=1,workerUrl:n,workerNumber:s=1}=i||{},r=!!i?.debug,l=i?.features??!0,o=e.ownerDocument??(H?window.document:void 0),c=e.ownerDocument?.defaultView??(H?window:void 0),h=new Map,a={width:0,height:0,quality:1,type:"image/png",scale:t,backgroundColor:null,style:null,filter:null,maximumCanvasSize:0,timeout:3e4,progress:null,debug:r,fetch:{requestInit:ct(i?.fetch?.bypassingCache),placeholderImage:"data:image/png;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7",bypassingCache:!1,...i?.fetch},fetchFn:null,font:{},drawImageInterval:100,workerUrl:null,workerNumber:s,onCloneNode:null,onEmbedNode:null,onCreateForeignObjectSvg:null,includeStyleProperties:null,autoDestruct:!1,...i,__CONTEXT__:!0,log:at(r),node:e,ownerDocument:o,ownerWindow:c,dpi:t===1?null:96*t,svgStyleElement:Ee(o),svgDefsElement:o?.createElementNS($,"defs"),svgStyles:new Map,defaultComputedStyles:new Map,workers:[...Array.from({length:Fe&&n&&s?s:0})].map(()=>{try{let m=new Worker(n);return m.onmessage=async g=>{let{url:f,result:p}=g.data;p?h.get(f)?.resolve?.(p):h.get(f)?.reject?.(new Error(`Error receiving message from worker: ${f}`))},m.onmessageerror=g=>{let{url:f}=g.data;h.get(f)?.reject?.(new Error(`Error receiving message from worker: ${f}`))},m}catch(m){return a.log.warn("Failed to new Worker",m),null}}).filter(Boolean),fontFamilies:new Map,fontCssTexts:new Map,acceptOfImage:`${[et(o)&&"image/webp","image/svg+xml","image/*","*/*"].filter(Boolean).join(",")};q=0.8`,requests:h,drawImageCount:0,tasks:[],features:l,isEnable:m=>m==="restoreScrollPosition"?typeof l=="boolean"?!1:l[m]??!1:typeof l=="boolean"?l:l[m]??!0};a.log.time("wait until load"),await lt(e,{timeout:a.timeout,onWarn:a.log.warn}),a.log.timeEnd("wait until load");let{width:d,height:u}=dt(e,a);return a.width=d,a.height=u,a}function Ee(e){if(!e)return;let i=e.createElement("style"),t=i.ownerDocument.createTextNode(`
.______background-clip--text {
  background-clip: text;
  -webkit-background-clip: text;
}
`);return i.appendChild(t),i}function dt(e,i){let{width:t,height:n}=i;if(S(e)&&(!t||!n)){let s=e.getBoundingClientRect();t=t||s.width||Number(e.getAttribute("width"))||0,n=n||s.height||Number(e.getAttribute("height"))||0}return{width:t,height:n}}async function ut(e,i){let{log:t,timeout:n,drawImageCount:s,drawImageInterval:r}=i;t.time("image to canvas");let l=await _(e,{timeout:n,onWarn:i.log.warn}),{canvas:o,context2d:c}=gt(e.ownerDocument,i),h=()=>{try{c?.drawImage(l,0,0,o.width,o.height)}catch(a){i.log.warn("Failed to drawImage",a)}};if(h(),i.isEnable("fixSvgXmlDecode"))for(let a=0;a<s;a++)await new Promise(d=>{setTimeout(()=>{h(),d()},a+r)});return i.drawImageCount=0,t.timeEnd("image to canvas"),o}function gt(e,i){let{width:t,height:n,scale:s,backgroundColor:r,maximumCanvasSize:l}=i,o=e.createElement("canvas");o.width=Math.floor(t*s),o.height=Math.floor(n*s),o.style.width=`${t}px`,o.style.height=`${n}px`,l&&(o.width>l||o.height>l)&&(o.width>l&&o.height>l?o.width>o.height?(o.height*=l/o.width,o.width=l):(o.width*=l/o.height,o.height=l):o.width>l?(o.height*=l/o.width,o.width=l):(o.width*=l/o.height,o.height=l));let c=o.getContext("2d");return c&&r&&(c.fillStyle=r,c.fillRect(0,0,o.width,o.height)),{canvas:o,context2d:c}}function ve(e,i){if(e.ownerDocument)try{let r=e.toDataURL();if(r!=="data:,")return C(r,e.ownerDocument)}catch(r){i.log.warn("Failed to clone canvas",r)}let t=e.cloneNode(!1),n=e.getContext("2d"),s=t.getContext("2d");try{return n&&s&&s.putImageData(n.getImageData(0,0,e.width,e.height),0,0),t}catch(r){i.log.warn("Failed to clone canvas",r)}return t}function mt(e,i){try{if(e?.contentDocument?.body)return z(e.contentDocument.body,i)}catch(t){i.log.warn("Failed to clone iframe",t)}return e.cloneNode(!1)}function ft(e){let i=e.cloneNode(!1);return e.currentSrc&&e.currentSrc!==e.src&&(i.src=e.currentSrc,i.srcset=""),i.loading==="lazy"&&(i.loading="eager"),i}async function pt(e,i){if(e.ownerDocument&&!e.currentSrc&&e.poster)return C(e.poster,e.ownerDocument);let t=e.cloneNode(!1);t.crossOrigin="anonymous",e.currentSrc&&e.currentSrc!==e.src&&(t.src=e.currentSrc);let n=t.ownerDocument;if(n){let s=!0;if(await _(t,{onError:()=>s=!1,onWarn:i.log.warn}),!s)return e.poster?C(e.poster,e.ownerDocument):t;t.currentTime=e.currentTime,await new Promise(l=>{t.addEventListener("seeked",l,{once:!0})});let r=n.createElement("canvas");r.width=e.offsetWidth,r.height=e.offsetHeight;try{let l=r.getContext("2d");l&&l.drawImage(t,0,0,r.width,r.height)}catch(l){return i.log.warn("Failed to clone video",l),e.poster?C(e.poster,e.ownerDocument):t}return ve(r,i)}return t}function bt(e,i){return je(e)?ve(e,i):Qe(e)?mt(e,i):L(e)?ft(e):k(e)?pt(e,i):e.cloneNode(!1)}function Et(e){let i=e.sandbox;if(!i){let{ownerDocument:t}=e;try{t&&(i=t.createElement("iframe"),i.id=`__SANDBOX__-${pe()}`,i.width="0",i.height="0",i.style.visibility="hidden",i.style.position="fixed",t.body.appendChild(i),i.contentWindow?.document.write('<!DOCTYPE html><meta charset="UTF-8"><title></title><body>'),e.sandbox=i)}catch(n){e.log.warn("Failed to getSandBox",n)}}return i}var vt=["width","height","-webkit-text-fill-color"],wt=["stroke","fill"];function we(e,i,t){let{defaultComputedStyles:n}=t,s=e.nodeName.toLowerCase(),r=N(e)&&s!=="svg",l=r?wt.map(f=>[f,e.getAttribute(f)]).filter(([,f])=>f!==null):[],o=[r&&"svg",s,l.map((f,p)=>`${f}=${p}`).join(","),i].filter(Boolean).join(":");if(n.has(o))return n.get(o);let h=Et(t)?.contentWindow;if(!h)return new Map;let a=h?.document,d,u;r?(d=a.createElementNS($,"svg"),u=d.ownerDocument.createElementNS(d.namespaceURI,s),l.forEach(([f,p])=>{u.setAttributeNS(null,f,p)}),d.appendChild(u)):d=u=a.createElement(s),u.textContent=" ",a.body.appendChild(d);let m=h.getComputedStyle(u,i),g=new Map;for(let f=m.length,p=0;p<f;p++){let b=m.item(p);vt.includes(b)||g.set(b,m.getPropertyValue(b))}return a.body.removeChild(d),n.set(o,g),g}function ye(e,i,t){let n=new Map,s=[],r=new Map;if(t)for(let o of t)l(o);else for(let o=e.length,c=0;c<o;c++){let h=e.item(c);l(h)}for(let o=s.length,c=0;c<o;c++)r.get(s[c])?.forEach((h,a)=>n.set(a,h));function l(o){let c=e.getPropertyValue(o),h=e.getPropertyPriority(o),a=o.lastIndexOf("-"),d=a>-1?o.substring(0,a):void 0;if(d){let u=r.get(d);u||(u=new Map,r.set(d,u)),u.set(o,[c,h])}i.get(o)===c&&!h||(d?s.push(d):n.set(o,[c,h]))}return n}function yt(e,i,t,n){let{ownerWindow:s,includeStyleProperties:r,currentParentNodeStyle:l}=n,o=i.style,c=s.getComputedStyle(e),h=we(e,null,n);l?.forEach((d,u)=>{h.delete(u)});let a=ye(c,h,r);a.delete("transition-property"),a.delete("all"),a.delete("d"),a.delete("content"),t&&(a.delete("margin-top"),a.delete("margin-right"),a.delete("margin-bottom"),a.delete("margin-left"),a.delete("margin-block-start"),a.delete("margin-block-end"),a.delete("margin-inline-start"),a.delete("margin-inline-end"),a.set("box-sizing",["border-box",""])),a.get("background-clip")?.[0]==="text"&&i.classList.add("______background-clip--text"),ue&&(a.has("font-kerning")||a.set("font-kerning",["normal",""]),(a.get("overflow-x")?.[0]==="hidden"||a.get("overflow-y")?.[0]==="hidden")&&a.get("text-overflow")?.[0]==="ellipsis"&&e.scrollWidth===e.clientWidth&&a.set("text-overflow",["clip",""]));for(let d=o.length,u=0;u<d;u++)o.removeProperty(o.item(u));return a.forEach(([d,u],m)=>{o.setProperty(m,d,u)}),a}function St(e,i){(qe(e)||ze(e)||Ke(e))&&i.setAttribute("value",e.value)}var Tt=[":before",":after"],At=[":-webkit-scrollbar",":-webkit-scrollbar-button",":-webkit-scrollbar-thumb",":-webkit-scrollbar-track",":-webkit-scrollbar-track-piece",":-webkit-scrollbar-corner",":-webkit-resizer"];function Ht(e,i,t,n,s){let{ownerWindow:r,svgStyleElement:l,svgStyles:o,currentNodeStyle:c}=n;if(!l||!r)return;function h(a){let d=r.getComputedStyle(e,a),u=d.getPropertyValue("content");if(!u||u==="none")return;s?.(u),u=u.replace(/(')|(")|(counter\(.+\))/g,"");let m=[pe()],g=we(e,a,n);c?.forEach((E,y)=>{g.delete(y)});let f=ye(d,g,n.includeStyleProperties);f.delete("content"),f.delete("-webkit-locale"),f.get("background-clip")?.[0]==="text"&&i.classList.add("______background-clip--text");let p=[`content: '${u}';`];if(f.forEach(([E,y],A)=>{p.push(`${A}: ${E}${y?" !important":""};`)}),p.length===1)return;try{i.className=[i.className,...m].join(" ")}catch(E){n.log.warn("Failed to copyPseudoClass",E);return}let b=p.join(`
  `),w=o.get(b);w||(w=[],o.set(b,w)),w.push(`.${m[0]}:${a}`)}Tt.forEach(h),t&&At.forEach(h)}var ie=new Set(["symbol"]);async function ne(e,i,t,n,s){if(S(t)&&(Xe(t)||Ye(t))||n.filter&&!n.filter(t))return;ie.has(i.nodeName)||ie.has(t.nodeName)?n.currentParentNodeStyle=void 0:n.currentParentNodeStyle=n.currentNodeStyle;let r=await z(t,n,!1,s);n.isEnable("restoreScrollPosition")&&Ct(e,r),i.appendChild(r)}async function re(e,i,t,n){let s=(S(e)?e.shadowRoot?.firstChild:void 0)??e.firstChild;for(let r=s;r;r=r.nextSibling)if(!We(r))if(S(r)&&Je(r)&&typeof r.assignedNodes=="function"){let l=r.assignedNodes();for(let o=0;o<l.length;o++)await ne(e,i,l[o],t,n)}else await ne(e,i,r,t,n)}function Ct(e,i){if(!x(e)||!x(i))return;let{scrollTop:t,scrollLeft:n}=e;if(!t&&!n)return;let{transform:s}=i.style,r=new DOMMatrix(s),{a:l,b:o,c,d:h}=r;r.a=1,r.b=0,r.c=0,r.d=1,r.translateSelf(-n,-t),r.a=l,r.b=o,r.c=c,r.d=h,i.style.transform=r.toString()}function Lt(e,i){let{backgroundColor:t,width:n,height:s,style:r}=i,l=e.style;if(t&&l.setProperty("background-color",t,"important"),n&&l.setProperty("width",`${n}px`,"important"),s&&l.setProperty("height",`${s}px`,"important"),r)for(let o in r)l[o]=r[o]}var xt=/^[\w-:]+$/;async function z(e,i,t=!1,n){let{ownerDocument:s,ownerWindow:r,fontFamilies:l}=i;if(s&&Ve(e))return n&&/\S/.test(e.data)&&n(e.data),s.createTextNode(e.data);if(s&&r&&S(e)&&(x(e)||N(e))){let c=await bt(e,i);if(i.isEnable("removeAbnormalAttributes")){let g=c.getAttributeNames();for(let f=g.length,p=0;p<f;p++){let b=g[p];xt.test(b)||c.removeAttribute(b)}}let h=i.currentNodeStyle=yt(e,c,t,i);t&&Lt(c,i);let a=!1;if(i.isEnable("copyScrollbar")){let g=[h.get("overflow-x")?.[0],h.get("overflow-y")?.[0]];a=g.includes("scroll")||(g.includes("auto")||g.includes("overlay"))&&(e.scrollHeight>e.clientHeight||e.scrollWidth>e.clientWidth)}let d=h.get("text-transform")?.[0],u=be(h.get("font-family")?.[0]),m=u?g=>{d==="uppercase"?g=g.toUpperCase():d==="lowercase"?g=g.toLowerCase():d==="capitalize"&&(g=g[0].toUpperCase()+g.substring(1)),u.forEach(f=>{let p=l.get(f);p||l.set(f,p=new Set),g.split("").forEach(b=>p.add(b))})}:void 0;return Ht(e,c,a,i,m),St(e,c),k(e)||await re(e,c,i,m),c}let o=e.cloneNode(!1);return await re(e,o,i),o}function _t(e){if(e.ownerDocument=void 0,e.ownerWindow=void 0,e.svgStyleElement=void 0,e.svgDefsElement=void 0,e.svgStyles.clear(),e.defaultComputedStyles.clear(),e.sandbox){try{e.sandbox.remove()}catch(i){e.log.warn("Failed to destroyContext",i)}e.sandbox=void 0}e.workers=[],e.fontFamilies.clear(),e.fontCssTexts.clear(),e.requests.clear(),e.tasks=[]}function It(e){let{url:i,timeout:t,responseType:n,...s}=e,r=new AbortController,l=t?setTimeout(()=>r.abort(),t):void 0;return fetch(i,{signal:r.signal,...s}).then(o=>{if(!o.ok)throw new Error("Failed fetch, not 2xx response",{cause:o});switch(n){case"arrayBuffer":return o.arrayBuffer();case"dataUrl":return o.blob().then(st);case"text":default:return o.text()}}).finally(()=>clearTimeout(l))}function I(e,i){let{url:t,requestType:n="text",responseType:s="text",imageDom:r}=i,l=t,{timeout:o,acceptOfImage:c,requests:h,fetchFn:a,fetch:{requestInit:d,bypassingCache:u,placeholderImage:m},font:g,workers:f,fontFamilies:p}=e;n==="image"&&(F||j)&&e.drawImageCount++;let b=h.get(t);if(!b){u&&u instanceof RegExp&&u.test(l)&&(l+=(/\?/.test(l)?"&":"?")+new Date().getTime());let w=n.startsWith("font")&&g&&g.minify,E=new Set;w&&n.split(";")[1].split(",").forEach(O=>{p.has(O)&&p.get(O).forEach(Q=>E.add(Q))});let y=w&&E.size,A={url:l,timeout:o,responseType:y?"arrayBuffer":s,headers:n==="image"?{accept:c}:void 0,...d};b={type:n,resolve:void 0,reject:void 0,response:null},b.response=(async()=>{if(a&&n==="image"){let T=await a(t);if(T)return T}return!F&&t.startsWith("http")&&f.length?new Promise((T,O)=>{f[h.size&f.length-1].postMessage({rawUrl:t,...A}),b.resolve=T,b.reject=O}):It(A)})().catch(T=>{if(h.delete(t),n==="image"&&m)return e.log.warn("Failed to fetch image base64, trying to use placeholder image",l),typeof m=="string"?m:m(r);throw T}),h.set(t,b)}return b.response}async function Se(e,i,t,n){if(!Te(e))return e;for(let[s,r]of Nt(e,i))try{let l=await I(t,{url:r,requestType:n?"image":"text",responseType:"dataUrl"});e=e.replace(Mt(s),`$1${l}$3`)}catch(l){t.log.warn("Failed to fetch css data url",s,l)}return e}function Te(e){return/url\((['"]?)([^'"]+?)\1\)/.test(e)}var Ae=/url\((['"]?)([^'"]+?)\1\)/g;function Nt(e,i){let t=[];return e.replace(Ae,(n,s,r)=>(t.push([r,me(r,i)]),n)),t.filter(([n])=>!W(n))}function Mt(e){let i=e.replace(/([.*+?^${}()|\[\]\/\\])/g,"\\$1");return new RegExp(`(url\\(['"]?)(${i})(['"]?\\))`,"g")}var Rt=["background-image","border-image-source","-webkit-border-image","-webkit-mask-image","list-style-image"];function Dt(e,i){return Rt.map(t=>{let n=e.getPropertyValue(t);return!n||n==="none"?null:((F||j)&&i.drawImageCount++,Se(n,null,i,!0).then(s=>{!s||n===s||e.setProperty(t,s,e.getPropertyPriority(t))}))}).filter(Boolean)}function Ot(e,i){if(L(e)){let t=e.currentSrc||e.src;if(!W(t))return[I(i,{url:t,imageDom:e,requestType:"image",responseType:"dataUrl"}).then(n=>{n&&(e.srcset="",e.dataset.originalSrc=t,e.src=n||"")})];(F||j)&&i.drawImageCount++}else if(N(e)&&!W(e.href.baseVal)){let t=e.href.baseVal;return[I(i,{url:t,imageDom:e,requestType:"image",responseType:"dataUrl"}).then(n=>{n&&(e.dataset.originalSrc=t,e.href.baseVal=n||"")})]}return[]}function Pt(e,i){let{ownerDocument:t,svgDefsElement:n}=i,s=e.getAttribute("href")??e.getAttribute("xlink:href");if(!s)return[];let[r,l]=s.split("#");if(l){let o=`#${l}`,c=t?.querySelector(`svg ${o}`);if(r&&e.setAttribute("href",o),n?.querySelector(o))return[];if(c)return n?.appendChild(c.cloneNode(!0)),[];if(r)return[I(i,{url:r,responseType:"text"}).then(h=>{n?.insertAdjacentHTML("beforeend",h)})]}return[]}function He(e,i){let{tasks:t}=i;S(e)&&((L(e)||ge(e))&&t.push(...Ot(e,i)),Ge(e)&&t.push(...Pt(e,i))),x(e)&&t.push(...Dt(e.style,i)),e.childNodes.forEach(n=>{He(n,i)})}async function Ft(e,i){let{ownerDocument:t,svgStyleElement:n,fontFamilies:s,fontCssTexts:r,tasks:l,font:o}=i;if(!(!t||!n||!s.size))if(o&&o.cssText){let c=oe(o.cssText,i);n.appendChild(t.createTextNode(`${c}
`))}else{let c=Array.from(t.styleSheets).filter(a=>{try{return"cssRules"in a&&!!a.cssRules.length}catch(d){return i.log.warn(`Error while reading CSS rules from ${a.href}`,d),!1}});await Promise.all(c.flatMap(a=>Array.from(a.cssRules).map(async(d,u)=>{if(Be(d)){let m=u+1,g=d.href,f="";try{f=await I(i,{url:g,requestType:"text",responseType:"text"})}catch(b){i.log.warn(`Error fetch remote css import from ${g}`,b)}let p=f.replace(Ae,(b,w,E)=>b.replace(E,me(E,g)));for(let b of Ut(p))try{a.insertRule(b,b.startsWith("@import")?m+=1:a.cssRules.length)}catch(w){i.log.warn("Error inserting rule from remote css import",{rule:b,error:w})}}}))),c.flatMap(a=>Array.from(a.cssRules)).filter(a=>$e(a)&&Te(a.style.getPropertyValue("src"))&&be(a.style.getPropertyValue("font-family"))?.some(d=>s.has(d))).forEach(a=>{let d=a,u=r.get(d.cssText);u?n.appendChild(t.createTextNode(`${u}
`)):l.push(Se(d.cssText,d.parentStyleSheet?d.parentStyleSheet.href:null,i).then(m=>{m=oe(m,i),r.set(d.cssText,m),n.appendChild(t.createTextNode(`${m}
`))}))})}}var kt=/(\/\*[\s\S]*?\*\/)/g,se=/((@.*?keyframes [\s\S]*?){([\s\S]*?}\s*?)})/gi;function Ut(e){if(e==null)return[];let i=[],t=e.replace(kt,"");for(;;){let r=se.exec(t);if(!r)break;i.push(r[0])}t=t.replace(se,"");let n=/@import[\s\S]*?url\([^)]*\)[\s\S]*?;/gi,s=new RegExp("((\\s*?(?:\\/\\*[\\s\\S]*?\\*\\/)?\\s*?@media[\\s\\S]*?){([\\s\\S]*?)}\\s*?})|(([\\s\\S]*?){([\\s\\S]*?)})","gi");for(;;){let r=n.exec(t);if(r)s.lastIndex=n.lastIndex;else if(r=s.exec(t),r)n.lastIndex=s.lastIndex;else break;i.push(r[0])}return i}var $t=/url\([^)]+\)\s*format\((["']?)([^"']+)\1\)/g,Bt=/src:\s*(?:url\([^)]+\)\s*format\([^)]+\)[,;]\s*)+/g;function oe(e,i){let{font:t}=i,n=t?t?.preferredFormat:void 0;return n?e.replace(Bt,s=>{for(;;){let[r,,l]=$t.exec(s)||[];if(!l)return"";if(l===n)return`src: ${r};`}}):e}async function Gt(e,i){let t=await q(e,i);if(S(t.node)&&N(t.node))return t.node;let{ownerDocument:n,log:s,tasks:r,svgStyleElement:l,svgDefsElement:o,svgStyles:c,font:h,progress:a,autoDestruct:d,onCloneNode:u,onEmbedNode:m,onCreateForeignObjectSvg:g}=t;s.time("clone node");let f=await z(t.node,t,!0);if(l&&n){let y="";c.forEach((A,T)=>{y+=`${A.join(`,
`)} {
  ${T}
}
`}),l.appendChild(n.createTextNode(y))}s.timeEnd("clone node"),await u?.(f),h!==!1&&S(f)&&(s.time("embed web font"),await Ft(f,t),s.timeEnd("embed web font")),s.time("embed node"),He(f,t);let p=r.length,b=0,w=async()=>{for(;;){let y=r.pop();if(!y)break;try{await y}catch(A){t.log.warn("Failed to run task",A)}a?.(++b,p)}};a?.(b,p),await Promise.all([...Array.from({length:4})].map(w)),s.timeEnd("embed node"),await m?.(f);let E=Wt(f,t);return o&&E.insertBefore(o,E.children[0]),l&&E.insertBefore(l,E.children[0]),d&&_t(t),await g?.(E),E}function Wt(e,i){let{width:t,height:n}=i,s=tt(t,n,e.ownerDocument),r=s.ownerDocument.createElementNS(s.namespaceURI,"foreignObject");return r.setAttributeNS(null,"x","0%"),r.setAttributeNS(null,"y","0%"),r.setAttributeNS(null,"width","100%"),r.setAttributeNS(null,"height","100%"),r.append(e),s.appendChild(r),s}async function Vt(e,i){let t=await q(e,i),n=await Gt(t),s=it(n,t.isEnable("removeControlCharacter"));t.autoDestruct||(t.svgStyleElement=Ee(t.ownerDocument),t.svgDefsElement=t.ownerDocument?.createElementNS($,"defs"),t.svgStyles.clear());let r=C(s,n.ownerDocument);return await ut(r,t)}async function Ce(e,i){let t=await q(e,i),{log:n,type:s,quality:r,dpi:l}=t,o=await Vt(t);n.time("canvas to blob");let c=await nt(o,s,r);if(["image/png","image/jpeg"].includes(s)&&l){let h=await ot(c.slice(0,33)),a=new Uint8Array(h);return s==="image/png"?a=Pe(a,l):s==="image/jpeg"&&(a=Me(a,l)),n.timeEnd("canvas to blob"),new Blob([a,c.slice(33)],{type:s})}return n.timeEnd("canvas to blob"),c}var M={METADATA:"data-replit-metadata",COMPONENT_NAME:"data-component-name"};function Le(e){if(e.startsWith("http://localhost:"))return!0;try{return new URL(e).hostname.endsWith(v.ALLOWED_DOMAIN)}catch{return!1}}function Y(e){if(!e)return null;let i=document.elementFromPoint(e.clientX,e.clientY);return i instanceof HTMLElement?i:null}function jt(e,i=300){if(!e)return"";let t=String(e);return t.length<=i?t:t.slice(0,i)+"..."}function X(e){if(e)return{tagName:e.tagName.toLowerCase(),className:e.className.toString?e.className.toString():String(e.className),textContent:e.textContent??"",id:e.id}}function B(e){let i=e.getAttribute(M.COMPONENT_NAME)??e.tagName.toLowerCase();return jt(i,50)}function K(e){let i=window.getComputedStyle(e),t=e.parentElement,n=e.nextElementSibling,s=t?.parentElement??null,r={backgroundColor:i.backgroundColor,color:i.color,display:i.display,position:i.position,width:i.width,height:i.height,fontSize:i.fontSize,fontFamily:i.fontFamily,fontWeight:i.fontWeight,margin:i.margin,padding:i.padding,textAlign:i.textAlign};return{elementPath:e.getAttribute(M.METADATA)??"",elementName:B(e),textContent:e.textContent??"",originalTextContent:e.getAttribute("data-original-text")?decodeURIComponent(e.getAttribute("data-original-text")??""):void 0,srcAttribute:e.getAttribute("src")??"",hasChildElements:e.childElementCount>0,id:e.id,className:e.className.toString?e.className.toString():String(e.className),computedStyles:r,textAlign:i.textAlign,relatedElements:{parent:X(t),nextSibling:X(n),grandParent:X(s)}}}async function xe(e){try{let t=window.getComputedStyle(e).backgroundColor;return qt(t)&&(t=window.getComputedStyle(document.documentElement).backgroundColor),await Ce(e,{type:"image/png",backgroundColor:t})}catch(i){console.error("[replit-cartographer] Failed to take screenshot:",i);return}}function qt(e){return e==="transparent"||e==="rgba(0, 0, 0, 0)"||e.endsWith(", 0)")||e.endsWith(",0)")}function J(e){let i=e.getBoundingClientRect(),t=window.innerHeight,n=window.innerWidth;return i.bottom>0&&i.top<t&&i.right>0&&i.left<n}function R(e,i=v.MAX_SIBLING_HIGHLIGHTERS,t=!1){let r=e.getAttribute(M.METADATA);if(!r)return[];let l=`[${M.METADATA}="${r}"]`,o=document,c=e.parentElement;c&&c.childElementCount>50&&(o=c);let h=o.querySelectorAll(l),a=Math.min(i,5e3),d=[],u=0;for(let m=0;m<h.length&&u<a;m++){let g=h[m];if(g instanceof HTMLElement&&g!==e){if(t&&!J(g))continue;d.push(g),u++}}return d}function _e(e,i,t){let n=e.children;for(let s=0;s<n.length;s++)if(t.value+=1,t.value>i||_e(n[s],i,t))return!0;return!1}function Ie(e){let i={value:0};return _e(e,v.MAX_DESCENDANTS_FOR_SCREENSHOT,i)}var D=class{selectedElement=null;selectedSiblingElements=[];visibleSelectedSiblingElements=[];isActive=!1;lastHighlightedElement=null;enableEditing=!1;shadowHost=null;shadowRoot=null;hoverHighlighter=null;hoverLabel=null;selectedHighlighter=null;selectedLabel=null;hoverSiblingHighlighters=[];selectedSiblingHighlighters=[];mutationObserver=null;throttledRecalculate=null;constructor(){this.setupMessageListener(),this.observeLightDarkModeSwitch(),this.notifyScriptLoaded(),this.throttledRecalculate=this.throttleRAF(this.recalculateSelectedElement.bind(this))}throttleRAF(i){let t=null,n=null;return(...s)=>{n=s,t===null&&(t=requestAnimationFrame(()=>{n!==null&&i(...n),t=null,n=null}))}}isPureTextElement(i){if(!i||!(i instanceof HTMLElement))return!1;let t=i.tagName.toLowerCase();if(t==="style"||t==="script"||t==="img"||i.childElementCount>0)return!1;let n=i.getAttribute("style");return n&&n.trim()!==""?!1:Array.from(i.childNodes).every(r=>r.nodeType===Node.TEXT_NODE)}initializeHighlighter(){this.shadowHost=document.createElement("div"),this.shadowHost.style.all="initial",this.shadowRoot=this.shadowHost.attachShadow({mode:"open"}),document.body.appendChild(this.shadowHost);let i=document.createElement("style");i.textContent=ee,this.shadowRoot.appendChild(i);let t=document.createElement("style");t.textContent=Z,document.head.appendChild(t),this.hoverHighlighter=document.createElement("div"),this.hoverLabel=document.createElement("div"),this.hoverHighlighter.className="beacon-highlighter beacon-hover-highlighter",this.hoverLabel.className="beacon-label beacon-hover-label",this.selectedHighlighter=document.createElement("div"),this.selectedLabel=document.createElement("div"),this.selectedHighlighter.className="beacon-highlighter beacon-selected-highlighter",this.selectedLabel.className="beacon-label beacon-selected-label",this.shadowRoot.appendChild(this.selectedHighlighter),this.shadowRoot.appendChild(this.selectedLabel),this.shadowRoot.appendChild(this.hoverHighlighter),this.shadowRoot.appendChild(this.hoverLabel)}setupMessageListener(){window.addEventListener("message",this.handleMessage.bind(this))}notifyScriptLoaded(){this.postMessageToParent({type:"SELECTOR_SCRIPT_LOADED",timestamp:Date.now(),version:P})}postMessageToParent(i){window.parent&&window.parent.postMessage(i,"*")}handleMouseMove=i=>{if(this.isActive&&this.hoverHighlighter){let t=Y(i);if(!t||t===this.hoverHighlighter||t===this.selectedHighlighter||t===this.shadowHost||this.selectedSiblingHighlighters.includes(t)||this.hoverSiblingHighlighters.includes(t)){this.hideHighlight(this.hoverHighlighter,this.hoverLabel),this.lastHighlightedElement=null,this.clearHoverSiblingHighlighters();return}if(t===this.selectedElement){this.hideHighlight(this.hoverHighlighter,this.hoverLabel),this.lastHighlightedElement=null,this.clearHoverSiblingHighlighters();return}this.lastHighlightedElement&&this.lastHighlightedElement!==t&&this.lastHighlightedElement!==this.selectedElement&&this.lastHighlightedElement.removeAttribute("contenteditable"),this.lastHighlightedElement=t,this.updateHighlighterPosition(t,this.hoverHighlighter,this.hoverLabel)}};handleMouseLeave=()=>{this.isActive&&(this.hoverHighlighter&&(this.hoverHighlighter.style.opacity="0"),this.hoverLabel&&(this.hoverLabel.style.opacity="0"),this.hoverSiblingHighlighters.length>0&&this.clearHoverSiblingHighlighters(),this.lastHighlightedElement&&this.lastHighlightedElement!==this.selectedElement&&this.lastHighlightedElement.removeAttribute("contenteditable"))};calculateLabelPosition(i,t){return t<28?{top:`${t}px`,left:`${i.left}px`,transform:"none",marginTop:"2px"}:{top:`${t}px`,left:`${i.left}px`,transform:"translateY(-100%)",marginTop:"-4px"}}updateHighlighterPosition(i,t,n){if(!t||!n)return;let s=R(i,v.MAX_SIBLING_HIGHLIGHTERS,!1);this.enableEditing&&s.length<=1&&i===this.selectedElement&&this.isPureTextElement(i)&&i.setAttribute("contenteditable","plaintext-only");let r=i.getBoundingClientRect(),l=window.innerHeight,o=Math.max(0,r.top),c=Math.min(l,r.bottom),h=Math.max(0,c-o);Object.assign(t.style,{opacity:h>0?"1":"0",top:`${o}px`,left:`${r.left}px`,width:`${r.width}px`,height:`${h}px`}),n.textContent=B(i);let a=this.calculateLabelPosition(r,o);Object.assign(n.style,{...a,opacity:h>0?"1":"0"}),t===this.selectedHighlighter?this.highlightSelectedSiblings(i):this.highlightHoverSiblings(i)}hideHighlight(i,t){i&&(i.style.opacity="0"),t&&(t.style.opacity="0");let n=i===this.hoverHighlighter,s=i===this.selectedHighlighter;n&&this.clearHoverSiblingHighlighters(),s&&this.clearSelectedSiblingHighlighters()}handleClick=async i=>{if(!this.isActive)return;i.preventDefault(),i.stopPropagation();let t=Y(i);if((!t||t===this.hoverHighlighter||t===this.selectedHighlighter||t===this.shadowHost)&&(t=this.lastHighlightedElement),!t||t===this.selectedElement)return;this.unselectCurrentElement(),this.clearSelectedSiblingHighlighters(),this.selectedElement=t;let n=R(t),s=n.length>0;s&&this.highlightSelectedSiblings(t),t.hasAttribute("data-original-text")||t.setAttribute("data-original-text",encodeURIComponent(t.textContent??"")),!t.hasAttribute("data-original-style")&&t.hasAttribute("style")&&t.setAttribute("data-original-style",encodeURIComponent(t.getAttribute("style")??"")),!t.hasAttribute("data-original-src")&&t.hasAttribute("src")&&t.setAttribute("data-original-src",encodeURIComponent(t.getAttribute("src")??"")),!s&&this.enableEditing&&this.isPureTextElement(t)&&(this.selectedElement.setAttribute("contenteditable","plaintext-only"),this.selectedElement.focus()),this.selectedHighlighter&&this.selectedLabel&&(this.selectedHighlighter.style.outlineStyle="solid",this.selectedHighlighter.style.opacity="1",this.selectedHighlighter.style.pointerEvents="none",this.selectedLabel.style.opacity="1",this.selectedLabel.textContent=B(t)),this.hoverHighlighter&&(this.hoverHighlighter.style.opacity="0",this.hoverHighlighter.style.pointerEvents="none"),this.hoverLabel&&(this.hoverLabel.style.opacity="0"),this.clearHoverSiblingHighlighters(),this.updateHighlighterPosition(t,this.selectedHighlighter,this.selectedLabel);let r=K(t),l;if(!Ie(t))try{l=await xe(t)}catch(o){console.error("[replit-cartographer] Error capturing element screenshot:",o)}this.observeSelectedElement(),this.postMessageToParent({type:"ELEMENT_SELECTED",payload:{...r,screenshotBlob:l??void 0,siblingCount:s?n.length:0},timestamp:Date.now()})};restoreElements(){document.querySelectorAll('[data-replit-dirty="true"]').forEach(t=>{if(t.hasAttribute("data-original-text")){if(t.textContent!==decodeURIComponent(t.getAttribute("data-original-text")||"")){let n=decodeURIComponent(t.getAttribute("data-original-text")||"");t.textContent=n}t.removeAttribute("data-original-text")}if(t.hasAttribute("data-original-style")){let n=decodeURIComponent(t.getAttribute("data-original-style")||"");t.setAttribute("style",n),t.removeAttribute("data-original-style")}else t.removeAttribute("style");if(t.hasAttribute("data-original-src")&&t.getAttribute("src")!==decodeURIComponent(t.getAttribute("data-original-src")||"")){let n=decodeURIComponent(t.getAttribute("data-original-src")||"");t.setAttribute("src",n),t.removeAttribute("data-original-src")}t.removeAttribute("data-replit-dirty")})}unselectCurrentElement(){if(this.restoreElements(),this.selectedElement){if(this.selectedElement.removeAttribute("contenteditable"),this.selectedElement.hasAttribute("data-original-style")){let i=decodeURIComponent(this.selectedElement.getAttribute("data-original-style")||"");this.selectedElement.setAttribute("style",i),this.selectedElement.removeAttribute("data-original-style")}if(this.selectedElement.hasAttribute("data-original-src")&&this.selectedElement.getAttribute("src")!==decodeURIComponent(this.selectedElement.getAttribute("data-original-src")||"")){let i=decodeURIComponent(this.selectedElement.getAttribute("data-original-src")||"");this.selectedElement.setAttribute("src",i),this.selectedElement.removeAttribute("data-original-src")}this.selectedElement=null}this.clearSelectedSiblingHighlighters(),this.mutationObserver&&(this.mutationObserver.disconnect(),this.mutationObserver=null)}handleMessage=i=>{if(!Le(i.origin))return;let t=i.data;if(!(!t||typeof t!="object"))switch(t.type){case"TOGGLE_REPLIT_VISUAL_EDITOR":{this.handleVisualEditorToggle(t);break}case"CLEAR_SELECTION":{this.unselectCurrentElement(),this.hideHighlight(this.selectedHighlighter,this.selectedLabel);break}case"UPDATE_SELECTED_ELEMENT":{if(!this.selectedElement)return;let{attributes:n}=t;[this.selectedElement,...this.selectedSiblingElements].forEach(r=>{n.style!==void 0&&(r.setAttribute("style",n.style),r.setAttribute("data-replit-dirty","true")),n.textContent!==void 0&&(r.textContent=n.textContent,r.setAttribute("data-replit-dirty","true")),n.className!==void 0&&(r.className=n.className,r.setAttribute("data-replit-dirty","true")),n.src!==void 0&&(r.setAttribute("src",n.src),r.setAttribute("data-replit-dirty","true"))}),this.updateHighlighterPosition(this.selectedElement,this.selectedHighlighter,this.selectedLabel),this.selectedSiblingElements.length>0&&(this.clearHighlighters(this.selectedSiblingHighlighters),this.selectedSiblingHighlighters=[],this.selectedSiblingHighlighters=this.highlightElements(this.selectedSiblingElements));break}case"CLEAR_ELEMENT_DIRTY":{this.selectedElement&&this.selectedElement.removeAttribute("data-replit-dirty");break}case"APPLY_THEME_PREVIEW":{this.handleApplyThemePreview(t);break}case"CLEAR_THEME_PREVIEW":{this.handleClearThemePreview();break}}};handleApplyThemePreview(i){if(i.type!=="APPLY_THEME_PREVIEW")return;let t=document.getElementById(v.THEME_PREVIEW_STYLE_ID);t||(t=document.createElement("style"),t.id=v.THEME_PREVIEW_STYLE_ID,document.head.appendChild(t)),t.textContent=i.themeContent}handleClearThemePreview(){let i=document.getElementById(v.THEME_PREVIEW_STYLE_ID);i&&i.remove()}handleVisualEditorToggle(i){if(i.type!=="TOGGLE_REPLIT_VISUAL_EDITOR")return;let t=!!i.enabled;this.enableEditing=!!i.enableEditing,t?this.postMessageToParent({type:"REPLIT_VISUAL_EDITOR_ENABLED",timestamp:Date.now()}):this.postMessageToParent({type:"REPLIT_VISUAL_EDITOR_DISABLED",timestamp:Date.now()}),this.isActive!==t&&(this.isActive=t,this.toggleEventListeners(t))}observeSelectedElement(){if(this.selectedElement){if(!this.isPureTextElement(this.selectedElement)){this.mutationObserver&&(this.mutationObserver.disconnect(),this.mutationObserver=null);return}this.mutationObserver&&this.mutationObserver.disconnect(),this.mutationObserver=new MutationObserver(i=>{if(i.some(n=>n.type==="characterData")&&this.selectedElement){this.selectedElement.setAttribute("data-replit-dirty","true");let n=K(this.selectedElement);this.postMessageToParent({type:"ELEMENT_TEXT_CHANGED",payload:n,timestamp:Date.now()}),this.updateHighlighterPosition(this.selectedElement,this.selectedHighlighter,this.selectedLabel)}}),this.mutationObserver.observe(this.selectedElement,{characterData:!0,childList:!1,attributes:!1,subtree:!0})}}observeLightDarkModeSwitch(){let i=new MutationObserver(n=>{n.forEach(s=>{s.type==="attributes"&&s.attributeName==="class"&&(s.target.classList.contains("dark")?this.postMessageToParent({type:"DARK_MODE_USED",timestamp:Date.now()}):this.postMessageToParent({type:"LIGHT_MODE_USED",timestamp:Date.now()}))})}),t=document.documentElement;i.observe(t,{attributes:!0,attributeFilter:["class"],childList:!1,subtree:!1})}recalculateSelectedElement=()=>{this.isActive&&(this.selectedElement&&this.updateHighlighterPosition(this.selectedElement,this.selectedHighlighter,this.selectedLabel),this.lastHighlightedElement&&this.updateHighlighterPosition(this.lastHighlightedElement,this.hoverHighlighter,this.hoverLabel),this.selectedSiblingElements.length>0&&this.updateSiblingHighlighterPositions())};updateSiblingHighlighterPositions(){for(let i=0;i<this.selectedSiblingHighlighters.length;i++){let t=this.selectedSiblingHighlighters[i],n=this.visibleSelectedSiblingElements[i];if(!t||!n)continue;let s=n.getBoundingClientRect(),r=window.innerHeight,l=Math.max(0,s.top),o=Math.min(r,s.bottom),c=Math.max(0,o-l);Object.assign(t.style,{opacity:c>0?"1":"0",top:`${l}px`,left:`${s.left}px`,width:`${s.width}px`,height:`${c}px`})}}handleKeyDown=i=>{this.isActive&&(i.key==="Escape"||i.key==="Esc")&&this.handleVisualEditorToggle({type:"TOGGLE_REPLIT_VISUAL_EDITOR",enabled:!1,timestamp:Date.now()})};toggleEventListeners(i){i?(this.initializeHighlighter(),this.enableDisabledElements(),document.addEventListener("mousemove",this.handleMouseMove),document.addEventListener("mouseleave",this.handleMouseLeave),document.addEventListener("click",this.handleClick,!0),document.addEventListener("keydown",this.handleKeyDown),this.throttledRecalculate&&(window.addEventListener("resize",this.throttledRecalculate),window.addEventListener("scroll",this.throttledRecalculate,!0))):(this.restoreDisabledElements(),this.restoreElements(),document.removeEventListener("mousemove",this.handleMouseMove),document.removeEventListener("click",this.handleClick,!0),document.removeEventListener("mouseleave",this.handleMouseLeave),document.removeEventListener("keydown",this.handleKeyDown),this.throttledRecalculate&&(window.removeEventListener("resize",this.throttledRecalculate),window.removeEventListener("scroll",this.throttledRecalculate,!0)),this.mutationObserver&&(this.mutationObserver.disconnect(),this.mutationObserver=null),this.selectedElement&&(this.selectedElement.removeAttribute("contenteditable"),this.selectedElement.removeAttribute("data-original-text"),document.querySelectorAll('[contenteditable="plaintext-only"]').forEach(t=>{t.removeAttribute("contenteditable")})),this.clearSelectedSiblingHighlighters(),this.clearHoverSiblingHighlighters(),this.hoverHighlighter?.remove(),this.hoverLabel?.remove(),this.selectedHighlighter?.remove(),this.selectedLabel?.remove(),this.shadowHost?.remove(),this.hoverHighlighter=null,this.hoverLabel=null,this.selectedHighlighter=null,this.selectedLabel=null,this.shadowHost=null,this.shadowRoot=null,this.selectedElement=null)}clearHighlighters(i){return i.forEach(t=>{t.remove()}),[]}clearHoverSiblingHighlighters(){this.hoverSiblingHighlighters=this.clearHighlighters(this.hoverSiblingHighlighters)}clearSelectedSiblingHighlighters(){this.selectedSiblingElements.forEach(i=>{i.removeAttribute("contenteditable")}),this.selectedSiblingElements=[],this.visibleSelectedSiblingElements=[],this.selectedSiblingHighlighters=this.clearHighlighters(this.selectedSiblingHighlighters)}highlightElements(i){if(!this.shadowRoot||i.length===0)return[];let t=[];return i.forEach(n=>{let s=document.createElement("div");s.className="beacon-highlighter beacon-sibling-highlighter",this.shadowRoot?.appendChild(s),t.push(s);let r=n.getBoundingClientRect(),l=window.innerHeight,o=Math.max(0,r.top),c=Math.min(l,r.bottom),h=Math.max(0,c-o);Object.assign(s.style,{opacity:h>0?"1":"0",top:`${o}px`,left:`${r.left}px`,width:`${r.width}px`,height:`${h}px`})}),t}highlightHoverSiblings(i){this.clearHoverSiblingHighlighters();let t=R(i,v.MAX_SIBLING_HIGHLIGHTERS,!0);this.hoverSiblingHighlighters=this.highlightElements(t)}highlightSelectedSiblings(i){this.clearSelectedSiblingHighlighters();let t=R(i),n=t.filter(s=>J(s));this.selectedSiblingElements=t,this.visibleSelectedSiblingElements=n,this.selectedSiblingHighlighters=this.highlightElements(n)}enableDisabledElements(){document.querySelectorAll("button[disabled], input[disabled]").forEach(i=>{i.removeAttribute("disabled"),i.setAttribute("data-replit-disabled","")})}restoreDisabledElements(){document.querySelectorAll("[data-replit-disabled]").forEach(i=>{i.removeAttribute("data-replit-disabled"),i.setAttribute("disabled","")})}};if(typeof window<"u")try{window.REPLIT_BEACON_VERSION||(window.REPLIT_BEACON_VERSION=P,new D)}catch(e){console.error("[replit-beacon] Failed to initialize:",e)}})();
</script>
    <script type="text/javascript" src="/@replit/vite-plugin-dev-banner/banner-script.js" id="replit-dev-banner"></script>
  <style type="text/css" data-vite-dev-id="/home/runner/workspace/client/src/index.css">*, ::before, ::after {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
  --tw-contain-size:  ;
  --tw-contain-layout:  ;
  --tw-contain-paint:  ;
  --tw-contain-style:  ;
}

::backdrop {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
  --tw-contain-size:  ;
  --tw-contain-layout:  ;
  --tw-contain-paint:  ;
  --tw-contain-style:  ;
}/*
! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com
*//*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
*/

*,
::before,
::after {
  box-sizing: border-box; /* 1 */
  border-width: 0; /* 2 */
  border-style: solid; /* 2 */
  border-color: #e5e7eb; /* 2 */
}

::before,
::after {
  --tw-content: '';
}

/*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
4. Use the user's configured `sans` font-family by default.
5. Use the user's configured `sans` font-feature-settings by default.
6. Use the user's configured `sans` font-variation-settings by default.
7. Disable tap highlights on iOS
*/

html,
:host {
  line-height: 1.5; /* 1 */
  -webkit-text-size-adjust: 100%; /* 2 */
  -moz-tab-size: 4; /* 3 */
  -o-tab-size: 4;
     tab-size: 4; /* 3 */
  font-family: var(--font-sans); /* 4 */
  font-feature-settings: normal; /* 5 */
  font-variation-settings: normal; /* 6 */
  -webkit-tap-highlight-color: transparent; /* 7 */
}

/*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

body {
  margin: 0; /* 1 */
  line-height: inherit; /* 2 */
}

/*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

hr {
  height: 0; /* 1 */
  color: inherit; /* 2 */
  border-top-width: 1px; /* 3 */
}

/*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

abbr:where([title]) {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
}

/*
Remove the default font size and weight for headings.
*/

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}

/*
Reset links to optimize for opt-in styling instead of opt-out.
*/

a {
  color: inherit;
  text-decoration: inherit;
}

/*
Add the correct font weight in Edge and Safari.
*/

b,
strong {
  font-weight: bolder;
}

/*
1. Use the user's configured `mono` font-family by default.
2. Use the user's configured `mono` font-feature-settings by default.
3. Use the user's configured `mono` font-variation-settings by default.
4. Correct the odd `em` font sizing in all browsers.
*/

code,
kbd,
samp,
pre {
  font-family: var(--font-mono); /* 1 */
  font-feature-settings: normal; /* 2 */
  font-variation-settings: normal; /* 3 */
  font-size: 1em; /* 4 */
}

/*
Add the correct font size in all browsers.
*/

small {
  font-size: 80%;
}

/*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

table {
  text-indent: 0; /* 1 */
  border-color: inherit; /* 2 */
  border-collapse: collapse; /* 3 */
}

/*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

button,
input,
optgroup,
select,
textarea {
  font-family: inherit; /* 1 */
  font-feature-settings: inherit; /* 1 */
  font-variation-settings: inherit; /* 1 */
  font-size: 100%; /* 1 */
  font-weight: inherit; /* 1 */
  line-height: inherit; /* 1 */
  letter-spacing: inherit; /* 1 */
  color: inherit; /* 1 */
  margin: 0; /* 2 */
  padding: 0; /* 3 */
}

/*
Remove the inheritance of text transform in Edge and Firefox.
*/

button,
select {
  text-transform: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

button,
input:where([type='button']),
input:where([type='reset']),
input:where([type='submit']) {
  -webkit-appearance: button; /* 1 */
  background-color: transparent; /* 2 */
  background-image: none; /* 2 */
}

/*
Use the modern Firefox focus style for all focusable elements.
*/

:-moz-focusring {
  outline: auto;
}

/*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

:-moz-ui-invalid {
  box-shadow: none;
}

/*
Add the correct vertical alignment in Chrome and Firefox.
*/

progress {
  vertical-align: baseline;
}

/*
Correct the cursor style of increment and decrement buttons in Safari.
*/

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
  height: auto;
}

/*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

[type='search'] {
  -webkit-appearance: textfield; /* 1 */
  outline-offset: -2px; /* 2 */
}

/*
Remove the inner padding in Chrome and Safari on macOS.
*/

::-webkit-search-decoration {
  -webkit-appearance: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

::-webkit-file-upload-button {
  -webkit-appearance: button; /* 1 */
  font: inherit; /* 2 */
}

/*
Add the correct display in Chrome and Safari.
*/

summary {
  display: list-item;
}

/*
Removes the default spacing and border for appropriate elements.
*/

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
  margin: 0;
}

fieldset {
  margin: 0;
  padding: 0;
}

legend {
  padding: 0;
}

ol,
ul,
menu {
  list-style: none;
  margin: 0;
  padding: 0;
}

/*
Reset default styling for dialogs.
*/
dialog {
  padding: 0;
}

/*
Prevent resizing textareas horizontally by default.
*/

textarea {
  resize: vertical;
}

/*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

input::-moz-placeholder, textarea::-moz-placeholder {
  opacity: 1; /* 1 */
  color: #9ca3af; /* 2 */
}

input::placeholder,
textarea::placeholder {
  opacity: 1; /* 1 */
  color: #9ca3af; /* 2 */
}

/*
Set the default cursor for buttons.
*/

button,
[role="button"] {
  cursor: pointer;
}

/*
Make sure disabled buttons don't get the pointer cursor.
*/
:disabled {
  cursor: default;
}

/*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
  display: block; /* 1 */
  vertical-align: middle; /* 2 */
}

/*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/

img,
video {
  max-width: 100%;
  height: auto;
}

/* Make elements with the HTML hidden attribute stay hidden by default */
[hidden]:where(:not([hidden="until-found"])) {
  display: none;
}
  * {
  --tw-border-opacity: 1;
  border-color: hsl(var(--border) / var(--tw-border-opacity, 1));
}

  body {
  --tw-bg-opacity: 1;
  background-color: hsl(var(--background) / var(--tw-bg-opacity, 1));
  font-family: var(--font-sans);
  --tw-text-opacity: 1;
  color: hsl(var(--foreground) / var(--tw-text-opacity, 1));
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.pointer-events-auto {
  pointer-events: auto;
}
.fixed {
  position: fixed;
}
.absolute {
  position: absolute;
}
.relative {
  position: relative;
}
.inset-0 {
  inset: 0px;
}
.bottom-0 {
  bottom: 0px;
}
.bottom-6 {
  bottom: 1.5rem;
}
.bottom-8 {
  bottom: 2rem;
}
.left-0 {
  left: 0px;
}
.left-1\/2 {
  left: 50%;
}
.left-2 {
  left: 0.5rem;
}
.left-6 {
  left: 1.5rem;
}
.right-0 {
  right: 0px;
}
.right-2 {
  right: 0.5rem;
}
.top-0 {
  top: 0px;
}
.top-2 {
  top: 0.5rem;
}
.z-10 {
  z-index: 10;
}
.z-40 {
  z-index: 40;
}
.z-50 {
  z-index: 50;
}
.z-\[100\] {
  z-index: 100;
}
.order-1 {
  order: 1;
}
.order-2 {
  order: 2;
}
.-mx-1 {
  margin-left: -0.25rem;
  margin-right: -0.25rem;
}
.mx-4 {
  margin-left: 1rem;
  margin-right: 1rem;
}
.mx-auto {
  margin-left: auto;
  margin-right: auto;
}
.my-1 {
  margin-top: 0.25rem;
  margin-bottom: 0.25rem;
}
.mb-1 {
  margin-bottom: 0.25rem;
}
.mb-12 {
  margin-bottom: 3rem;
}
.mb-2 {
  margin-bottom: 0.5rem;
}
.mb-20 {
  margin-bottom: 5rem;
}
.mb-3 {
  margin-bottom: 0.75rem;
}
.mb-4 {
  margin-bottom: 1rem;
}
.mb-6 {
  margin-bottom: 1.5rem;
}
.mb-8 {
  margin-bottom: 2rem;
}
.ml-1 {
  margin-left: 0.25rem;
}
.mr-2 {
  margin-right: 0.5rem;
}
.mt-1 {
  margin-top: 0.25rem;
}
.mt-4 {
  margin-top: 1rem;
}
.flex {
  display: flex;
}
.inline-flex {
  display: inline-flex;
}
.grid {
  display: grid;
}
.hidden {
  display: none;
}
.aspect-square {
  aspect-ratio: 1 / 1;
}
.aspect-video {
  aspect-ratio: 16 / 9;
}
.h-10 {
  height: 2.5rem;
}
.h-16 {
  height: 4rem;
}
.h-20 {
  height: 5rem;
}
.h-3\.5 {
  height: 0.875rem;
}
.h-4 {
  height: 1rem;
}
.h-5 {
  height: 1.25rem;
}
.h-6 {
  height: 1.5rem;
}
.h-8 {
  height: 2rem;
}
.h-9 {
  height: 2.25rem;
}
.h-\[var\(--radix-select-trigger-height\)\] {
  height: var(--radix-select-trigger-height);
}
.h-auto {
  height: auto;
}
.h-full {
  height: 100%;
}
.h-px {
  height: 1px;
}
.max-h-\[--radix-select-content-available-height\] {
  max-height: var(--radix-select-content-available-height);
}
.max-h-screen {
  max-height: 100vh;
}
.min-h-10 {
  min-height: 2.5rem;
}
.min-h-24 {
  min-height: 6rem;
}
.min-h-8 {
  min-height: 2rem;
}
.min-h-9 {
  min-height: 2.25rem;
}
.min-h-\[80px\] {
  min-height: 80px;
}
.min-h-screen {
  min-height: 100vh;
}
.w-10 {
  width: 2.5rem;
}
.w-16 {
  width: 4rem;
}
.w-3\.5 {
  width: 0.875rem;
}
.w-4 {
  width: 1rem;
}
.w-5 {
  width: 1.25rem;
}
.w-6 {
  width: 1.5rem;
}
.w-8 {
  width: 2rem;
}
.w-9 {
  width: 2.25rem;
}
.w-full {
  width: 100%;
}
.min-w-\[8rem\] {
  min-width: 8rem;
}
.min-w-\[var\(--radix-select-trigger-width\)\] {
  min-width: var(--radix-select-trigger-width);
}
.max-w-2xl {
  max-width: 42rem;
}
.max-w-3xl {
  max-width: 48rem;
}
.max-w-5xl {
  max-width: 64rem;
}
.max-w-7xl {
  max-width: 80rem;
}
.max-w-md {
  max-width: 28rem;
}
.shrink-0 {
  flex-shrink: 0;
}
.origin-\[--radix-select-content-transform-origin\] {
  transform-origin: var(--radix-select-content-transform-origin);
}
.origin-\[--radix-tooltip-content-transform-origin\] {
  transform-origin: var(--radix-tooltip-content-transform-origin);
}
.-translate-x-1\/2 {
  --tw-translate-x: -50%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
@keyframes bounce {

  0%, 100% {
    transform: translateY(-25%);
    animation-timing-function: cubic-bezier(0.8,0,1,1);
  }

  50% {
    transform: none;
    animation-timing-function: cubic-bezier(0,0,0.2,1);
  }
}
.animate-bounce {
  animation: bounce 1s infinite;
}
@keyframes pulse {

  50% {
    opacity: .5;
  }
}
.animate-pulse {
  animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}
@keyframes spin {

  to {
    transform: rotate(360deg);
  }
}
.animate-spin {
  animation: spin 1s linear infinite;
}
.cursor-default {
  cursor: default;
}
.cursor-pointer {
  cursor: pointer;
}
.select-none {
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
}
.grid-cols-2 {
  grid-template-columns: repeat(2, minmax(0, 1fr));
}
.flex-col {
  flex-direction: column;
}
.flex-col-reverse {
  flex-direction: column-reverse;
}
.items-start {
  align-items: flex-start;
}
.items-center {
  align-items: center;
}
.justify-center {
  justify-content: center;
}
.justify-between {
  justify-content: space-between;
}
.gap-1 {
  gap: 0.25rem;
}
.gap-12 {
  gap: 3rem;
}
.gap-2 {
  gap: 0.5rem;
}
.gap-3 {
  gap: 0.75rem;
}
.gap-4 {
  gap: 1rem;
}
.gap-6 {
  gap: 1.5rem;
}
.gap-8 {
  gap: 2rem;
}
.space-x-4 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-x-reverse: 0;
  margin-right: calc(1rem * var(--tw-space-x-reverse));
  margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)));
}
.space-y-1\.5 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(0.375rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(0.375rem * var(--tw-space-y-reverse));
}
.space-y-2 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(0.5rem * var(--tw-space-y-reverse));
}
.space-y-4 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(1rem * var(--tw-space-y-reverse));
}
.space-y-6 > :not([hidden]) ~ :not([hidden]) {
  --tw-space-y-reverse: 0;
  margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
  margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
}
.overflow-hidden {
  overflow: hidden;
}
.overflow-y-auto {
  overflow-y: auto;
}
.overflow-x-hidden {
  overflow-x: hidden;
}
.whitespace-nowrap {
  white-space: nowrap;
}
.rounded-full {
  border-radius: 9999px;
}
.rounded-lg {
  border-radius: .5625rem;
}
.rounded-md {
  border-radius: .375rem;
}
.rounded-sm {
  border-radius: .1875rem;
}
.rounded-xl {
  border-radius: 0.75rem;
}
.border {
  border-width: 1px;
}
.border-t {
  border-top-width: 1px;
}
.border-card-border {
  --tw-border-opacity: 1;
  border-color: hsl(var(--card-border) / var(--tw-border-opacity, 1));
}
.border-destructive {
  --tw-border-opacity: 1;
  border-color: hsl(var(--destructive) / var(--tw-border-opacity, 1));
}
.border-destructive-border {
  border-color: var(--destructive-border);
}
.border-input {
  --tw-border-opacity: 1;
  border-color: hsl(var(--input) / var(--tw-border-opacity, 1));
}
.border-primary-border {
  border-color: var(--primary-border);
}
.border-secondary-border {
  border-color: var(--secondary-border);
}
.border-transparent {
  border-color: transparent;
}
.border-white\/30 {
  border-color: rgb(255 255 255 / 0.3);
}
.bg-\[\#25D366\] {
  --tw-bg-opacity: 1;
  background-color: rgb(37 211 102 / var(--tw-bg-opacity, 1));
}
.bg-background {
  --tw-bg-opacity: 1;
  background-color: hsl(var(--background) / var(--tw-bg-opacity, 1));
}
.bg-background\/20 {
  background-color: hsl(var(--background) / 0.2);
}
.bg-background\/95 {
  background-color: hsl(var(--background) / 0.95);
}
.bg-black\/90 {
  background-color: rgb(0 0 0 / 0.9);
}
.bg-card {
  --tw-bg-opacity: 1;
  background-color: hsl(var(--card) / var(--tw-bg-opacity, 1));
}
.bg-destructive {
  --tw-bg-opacity: 1;
  background-color: hsl(var(--destructive) / var(--tw-bg-opacity, 1));
}
.bg-gray-50 {
  --tw-bg-opacity: 1;
  background-color: rgb(249 250 251 / var(--tw-bg-opacity, 1));
}
.bg-muted {
  --tw-bg-opacity: 1;
  background-color: hsl(var(--muted) / var(--tw-bg-opacity, 1));
}
.bg-muted\/30 {
  background-color: hsl(var(--muted) / 0.3);
}
.bg-muted\/50 {
  background-color: hsl(var(--muted) / 0.5);
}
.bg-popover {
  --tw-bg-opacity: 1;
  background-color: hsl(var(--popover) / var(--tw-bg-opacity, 1));
}
.bg-primary {
  --tw-bg-opacity: 1;
  background-color: hsl(var(--primary) / var(--tw-bg-opacity, 1));
}
.bg-primary\/10 {
  background-color: hsl(var(--primary) / 0.1);
}
.bg-primary\/90 {
  background-color: hsl(var(--primary) / 0.9);
}
.bg-secondary {
  --tw-bg-opacity: 1;
  background-color: hsl(var(--secondary) / var(--tw-bg-opacity, 1));
}
.bg-transparent {
  background-color: transparent;
}
.bg-gradient-to-b {
  background-image: linear-gradient(to bottom, var(--tw-gradient-stops));
}
.bg-gradient-to-t {
  background-image: linear-gradient(to top, var(--tw-gradient-stops));
}
.from-black\/60 {
  --tw-gradient-from: rgb(0 0 0 / 0.6) var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}
.from-black\/70 {
  --tw-gradient-from: rgb(0 0 0 / 0.7) var(--tw-gradient-from-position);
  --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}
.via-black\/20 {
  --tw-gradient-to: rgb(0 0 0 / 0)  var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), rgb(0 0 0 / 0.2) var(--tw-gradient-via-position), var(--tw-gradient-to);
}
.via-black\/50 {
  --tw-gradient-to: rgb(0 0 0 / 0)  var(--tw-gradient-to-position);
  --tw-gradient-stops: var(--tw-gradient-from), rgb(0 0 0 / 0.5) var(--tw-gradient-via-position), var(--tw-gradient-to);
}
.to-black\/70 {
  --tw-gradient-to: rgb(0 0 0 / 0.7) var(--tw-gradient-to-position);
}
.to-transparent {
  --tw-gradient-to: transparent var(--tw-gradient-to-position);
}
.bg-cover {
  background-size: cover;
}
.bg-center {
  background-position: center;
}
.fill-primary {
  fill: hsl(var(--primary) / 1);
}
.object-cover {
  -o-object-fit: cover;
     object-fit: cover;
}
.p-1 {
  padding: 0.25rem;
}
.p-2 {
  padding: 0.5rem;
}
.p-4 {
  padding: 1rem;
}
.p-6 {
  padding: 1.5rem;
}
.px-2\.5 {
  padding-left: 0.625rem;
  padding-right: 0.625rem;
}
.px-3 {
  padding-left: 0.75rem;
  padding-right: 0.75rem;
}
.px-4 {
  padding-left: 1rem;
  padding-right: 1rem;
}
.px-8 {
  padding-left: 2rem;
  padding-right: 2rem;
}
.py-0\.5 {
  padding-top: 0.125rem;
  padding-bottom: 0.125rem;
}
.py-1 {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
}
.py-1\.5 {
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
}
.py-12 {
  padding-top: 3rem;
  padding-bottom: 3rem;
}
.py-16 {
  padding-top: 4rem;
  padding-bottom: 4rem;
}
.py-2 {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}
.py-3 {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}
.py-6 {
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
}
.pl-8 {
  padding-left: 2rem;
}
.pr-2 {
  padding-right: 0.5rem;
}
.pr-8 {
  padding-right: 2rem;
}
.pt-0 {
  padding-top: 0px;
}
.pt-6 {
  padding-top: 1.5rem;
}
.pt-8 {
  padding-top: 2rem;
}
.text-left {
  text-align: left;
}
.text-center {
  text-align: center;
}
.text-2xl {
  font-size: 1.5rem;
  line-height: 2rem;
}
.text-3xl {
  font-size: 1.875rem;
  line-height: 2.25rem;
}
.text-base {
  font-size: 1rem;
  line-height: 1.5rem;
}
.text-lg {
  font-size: 1.125rem;
  line-height: 1.75rem;
}
.text-sm {
  font-size: 0.875rem;
  line-height: 1.25rem;
}
.text-xl {
  font-size: 1.25rem;
  line-height: 1.75rem;
}
.text-xs {
  font-size: 0.75rem;
  line-height: 1rem;
}
.font-bold {
  font-weight: 700;
}
.font-extrabold {
  font-weight: 800;
}
.font-medium {
  font-weight: 500;
}
.font-semibold {
  font-weight: 600;
}
.capitalize {
  text-transform: capitalize;
}
.leading-none {
  line-height: 1;
}
.leading-relaxed {
  line-height: 1.625;
}
.tracking-tight {
  letter-spacing: -0.025em;
}
.text-card-foreground {
  --tw-text-opacity: 1;
  color: hsl(var(--card-foreground) / var(--tw-text-opacity, 1));
}
.text-destructive {
  --tw-text-opacity: 1;
  color: hsl(var(--destructive) / var(--tw-text-opacity, 1));
}
.text-destructive-foreground {
  --tw-text-opacity: 1;
  color: hsl(var(--destructive-foreground) / var(--tw-text-opacity, 1));
}
.text-foreground {
  --tw-text-opacity: 1;
  color: hsl(var(--foreground) / var(--tw-text-opacity, 1));
}
.text-foreground\/50 {
  color: hsl(var(--foreground) / 0.5);
}
.text-gray-600 {
  --tw-text-opacity: 1;
  color: rgb(75 85 99 / var(--tw-text-opacity, 1));
}
.text-gray-900 {
  --tw-text-opacity: 1;
  color: rgb(17 24 39 / var(--tw-text-opacity, 1));
}
.text-muted-foreground {
  --tw-text-opacity: 1;
  color: hsl(var(--muted-foreground) / var(--tw-text-opacity, 1));
}
.text-popover-foreground {
  --tw-text-opacity: 1;
  color: hsl(var(--popover-foreground) / var(--tw-text-opacity, 1));
}
.text-primary {
  --tw-text-opacity: 1;
  color: hsl(var(--primary) / var(--tw-text-opacity, 1));
}
.text-primary-foreground {
  --tw-text-opacity: 1;
  color: hsl(var(--primary-foreground) / var(--tw-text-opacity, 1));
}
.text-red-500 {
  --tw-text-opacity: 1;
  color: rgb(239 68 68 / var(--tw-text-opacity, 1));
}
.text-secondary-foreground {
  --tw-text-opacity: 1;
  color: hsl(var(--secondary-foreground) / var(--tw-text-opacity, 1));
}
.text-white {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity, 1));
}
.text-white\/80 {
  color: rgb(255 255 255 / 0.8);
}
.text-white\/90 {
  color: rgb(255 255 255 / 0.9);
}
.opacity-0 {
  opacity: 0;
}
.opacity-50 {
  opacity: 0.5;
}
.opacity-90 {
  opacity: 0.9;
}
.shadow-lg {
  --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.shadow-md {
  --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.shadow-sm {
  --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
  --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.shadow-xl {
  --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.outline-none {
  outline: 2px solid transparent;
  outline-offset: 2px;
}
.outline {
  outline-style: solid;
}
.ring-offset-background {
  --tw-ring-offset-color: hsl(var(--background) / 1);
}
.filter {
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}
.backdrop-blur-md {
  --tw-backdrop-blur: blur(12px);
  backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
}
.backdrop-blur-sm {
  --tw-backdrop-blur: blur(4px);
  backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
}
.transition-all {
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}
.transition-colors {
  transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}
.transition-opacity {
  transition-property: opacity;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 150ms;
}
.duration-300 {
  transition-duration: 300ms;
}
@keyframes enter {

  from {
    opacity: var(--tw-enter-opacity, 1);
    transform: translate3d(var(--tw-enter-translate-x, 0), var(--tw-enter-translate-y, 0), 0) scale3d(var(--tw-enter-scale, 1), var(--tw-enter-scale, 1), var(--tw-enter-scale, 1)) rotate(var(--tw-enter-rotate, 0));
  }
}
@keyframes exit {

  to {
    opacity: var(--tw-exit-opacity, 1);
    transform: translate3d(var(--tw-exit-translate-x, 0), var(--tw-exit-translate-y, 0), 0) scale3d(var(--tw-exit-scale, 1), var(--tw-exit-scale, 1), var(--tw-exit-scale, 1)) rotate(var(--tw-exit-rotate, 0));
  }
}
.animate-in {
  animation-name: enter;
  animation-duration: 150ms;
  --tw-enter-opacity: initial;
  --tw-enter-scale: initial;
  --tw-enter-rotate: initial;
  --tw-enter-translate-x: initial;
  --tw-enter-translate-y: initial;
}
.fade-in-0 {
  --tw-enter-opacity: 0;
}
.zoom-in-95 {
  --tw-enter-scale: .95;
}
.duration-300 {
  animation-duration: 300ms;
}
/* Hide ugly search cancel button in Chrome until we can style it properly */
input[type="search"]::-webkit-search-cancel-button {
  display: none;
}
/* Placeholder styling for contentEditable div */
[contenteditable][data-placeholder]:empty::before {
    content: attr(data-placeholder);
    color: hsl(var(--muted-foreground));
    pointer-events: none;
  }
/* .no-default-hover-elevate/no-default-active-elevate is an escape hatch so consumers of
   * buttons/badges can remove the automatic brightness adjustment on interactions
   * and program their own. */
/**
   * Toggleable backgrounds go behind the content. Hoverable/active goes on top.
   * This way they can stack/compound. Both will overlap the parent's borders!
   * So borders will be automatically adjusted both on toggle, and hover/active,
   * and they will be compounded.
   */
/* If there's a 1px border, adjust the inset so that it covers that parent's border */
.border.toggle-elevate::before {
    inset: -1px;
  }
/* Does not work on elements with overflow:hidden! */
.hover-elevate:not(.no-default-hover-elevate),
  .active-elevate:not(.no-default-active-elevate),
  .hover-elevate-2:not(.no-default-hover-elevate),
  .active-elevate-2:not(.no-default-active-elevate) {
    position: relative;
    z-index: 0;
  }
.hover-elevate:not(.no-default-hover-elevate)::after,
  .active-elevate:not(.no-default-active-elevate)::after,
  .hover-elevate-2:not(.no-default-hover-elevate)::after,
  .active-elevate-2:not(.no-default-active-elevate)::after {
    content: "";
    pointer-events: none;
    position: absolute;
    inset: 0px;
    /*border-radius: inherit;   match rounded corners */
    border-radius: inherit;
    z-index: 999;
    /* sits in front of content */
  }
.hover-elevate:hover:not(.no-default-hover-elevate)::after,
  .active-elevate:active:not(.no-default-active-elevate)::after {
    background-color: var(--elevate-1);
  }
.hover-elevate-2:hover:not(.no-default-hover-elevate)::after,
  .active-elevate-2:active:not(.no-default-active-elevate)::after {
    background-color: var(--elevate-2);
  }
/* If there's a 1px border, adjust the inset so that it covers that parent's border */
.border.hover-elevate:not(.no-hover-interaction-elevate)::after,
  .border.active-elevate:not(.no-active-interaction-elevate)::after,
  .border.hover-elevate-2:not(.no-hover-interaction-elevate)::after,
  .border.active-elevate-2:not(.no-active-interaction-elevate)::after,
  .border.hover-elevate:not(.no-hover-interaction-elevate)::after {
    inset: -1px;
  }
.\[border-color\:var\(--badge-outline\)\] {
  border-color: var(--badge-outline);
}
.\[border-color\:var\(--button-outline\)\] {
  border-color: var(--button-outline);
}

/* LIGHT MODE */
:root {
  --button-outline: rgba(0,0,0, .10);
  --badge-outline: rgba(0,0,0, .05);
  --opaque-button-border-intensity: -8;
  --elevate-1: rgba(0,0,0, .03);
  --elevate-2: rgba(0,0,0, .08);
  --background: 0 0% 100%;
  --foreground: 252 6% 15%;
  --border: 252 4% 90%;
  --card: 0 0% 98%;
  --card-foreground: 252 6% 15%;
  --card-border: 252 3% 94%;
  --sidebar: 252 4% 96%;
  --sidebar-foreground: 252 6% 15%;
  --sidebar-border: 252 4% 92%;
  --sidebar-primary: 252 45% 52%;
  --sidebar-primary-foreground: 252 45% 98%;
  --sidebar-accent: 252 8% 92%;
  --sidebar-accent-foreground: 252 6% 15%;
  --sidebar-ring: 252 45% 52%;
  --popover: 0 0% 96%;
  --popover-foreground: 252 6% 15%;
  --popover-border: 252 3% 92%;
  --primary: 252 45% 52%;
  --primary-foreground: 252 45% 98%;
  --secondary: 252 6% 93%;
  --secondary-foreground: 252 6% 15%;
  --muted: 252 5% 94%;
  --muted-foreground: 252 6% 40%;
  --accent: 252 12% 94%;
  --accent-foreground: 252 6% 15%;
  --destructive: 0 72% 51%;
  --destructive-foreground: 0 72% 98%;
  --input: 252 20% 75%;
  --ring: 252 45% 52%;
  --chart-1: 252 45% 52%;
  --chart-2: 282 45% 48%;
  --chart-3: 222 45% 48%;
  --chart-4: 192 45% 45%;
  --chart-5: 312 45% 50%;
  --font-sans: Poppins, sans-serif;
  --font-serif: Georgia, serif;
  --font-mono: Menlo, monospace;
  --radius: .5rem;
  --shadow-2xs: 0px 2px 0px 0px hsl(252 45% 52% / 0.00);
  --shadow-xs: 0px 2px 0px 0px hsl(252 45% 52% / 0.00);
  --shadow-sm: 0px 2px 0px 0px hsl(252 45% 52% / 0.00), 0px 1px 2px -1px hsl(252 45% 52% / 0.00);
  --shadow: 0px 2px 0px 0px hsl(252 45% 52% / 0.00), 0px 1px 2px -1px hsl(252 45% 52% / 0.00);
  --shadow-md: 0px 2px 0px 0px hsl(252 45% 52% / 0.00), 0px 2px 4px -1px hsl(252 45% 52% / 0.00);
  --shadow-lg: 0px 2px 0px 0px hsl(252 45% 52% / 0.00), 0px 4px 6px -1px hsl(252 45% 52% / 0.00);
  --shadow-xl: 0px 2px 0px 0px hsl(252 45% 52% / 0.00), 0px 8px 10px -1px hsl(252 45% 52% / 0.00);
  --shadow-2xl: 0px 2px 0px 0px hsl(252 45% 52% / 0.00);
  --tracking-normal: 0em;
  --spacing: 0.25rem;

/* Fallback for older browsers */
  --sidebar-primary-border: hsl(var(--sidebar-primary));
  --sidebar-primary-border: hsl(from hsl(var(--sidebar-primary)) h s calc(l + var(--opaque-button-border-intensity)) / alpha);

  /* Fallback for older browsers */
  --sidebar-accent-border: hsl(var(--sidebar-accent));
  --sidebar-accent-border: hsl(from hsl(var(--sidebar-accent)) h s calc(l + var(--opaque-button-border-intensity)) / alpha);

  /* Fallback for older browsers */
  --primary-border: hsl(var(--primary));
  --primary-border: hsl(from hsl(var(--primary)) h s calc(l + var(--opaque-button-border-intensity)) / alpha);

  /* Fallback for older browsers */
  --secondary-border: hsl(var(--secondary));
  --secondary-border: hsl(from hsl(var(--secondary)) h s calc(l + var(--opaque-button-border-intensity)) / alpha);

  /* Fallback for older browsers */
  --muted-border: hsl(var(--muted));
  --muted-border: hsl(from hsl(var(--muted)) h s calc(l + var(--opaque-button-border-intensity)) / alpha);

  /* Fallback for older browsers */
  --accent-border: hsl(var(--accent));
  --accent-border: hsl(from hsl(var(--accent)) h s calc(l + var(--opaque-button-border-intensity)) / alpha);

  /* Fallback for older browsers */
  --destructive-border: hsl(var(--destructive));
  --destructive-border: hsl(from hsl(var(--destructive)) h s calc(l + var(--opaque-button-border-intensity)) / alpha);
}

.dark {
  --button-outline: rgba(255,255,255, .10);
  --badge-outline: rgba(255,255,255, .05);
  --opaque-button-border-intensity: 9;
  --elevate-1: rgba(255,255,255, .04);
  --elevate-2: rgba(255,255,255, .09);
  --background: 252 6% 8%;
  --foreground: 252 4% 95%;
  --border: 252 5% 18%;
  --card: 252 5% 10%;
  --card-foreground: 252 4% 95%;
  --card-border: 252 5% 13%;
  --sidebar: 252 5% 12%;
  --sidebar-foreground: 252 4% 95%;
  --sidebar-border: 252 5% 15%;
  --sidebar-primary: 252 45% 52%;
  --sidebar-primary-foreground: 252 45% 98%;
  --sidebar-accent: 252 8% 16%;
  --sidebar-accent-foreground: 252 4% 95%;
  --sidebar-ring: 252 45% 52%;
  --popover: 252 5% 14%;
  --popover-foreground: 252 4% 95%;
  --popover-border: 252 5% 17%;
  --primary: 252 45% 52%;
  --primary-foreground: 252 45% 98%;
  --secondary: 252 6% 18%;
  --secondary-foreground: 252 4% 95%;
  --muted: 252 5% 16%;
  --muted-foreground: 252 4% 65%;
  --accent: 252 8% 16%;
  --accent-foreground: 252 4% 95%;
  --destructive: 0 62% 45%;
  --destructive-foreground: 0 62% 98%;
  --input: 252 15% 30%;
  --ring: 252 45% 52%;
  --chart-1: 252 60% 70%;
  --chart-2: 282 55% 68%;
  --chart-3: 222 55% 68%;
  --chart-4: 192 55% 65%;
  --chart-5: 312 55% 70%;
  --shadow-2xs: 0px 2px 0px 0px hsl(252 45% 52% / 0.00);
  --shadow-xs: 0px 2px 0px 0px hsl(252 45% 52% / 0.00);
  --shadow-sm: 0px 2px 0px 0px hsl(252 45% 52% / 0.00), 0px 1px 2px -1px hsl(252 45% 52% / 0.00);
  --shadow: 0px 2px 0px 0px hsl(252 45% 52% / 0.00), 0px 1px 2px -1px hsl(252 45% 52% / 0.00);
  --shadow-md: 0px 2px 0px 0px hsl(252 45% 52% / 0.00), 0px 2px 4px -1px hsl(252 45% 52% / 0.00);
  --shadow-lg: 0px 2px 0px 0px hsl(252 45% 52% / 0.00), 0px 4px 6px -1px hsl(252 45% 52% / 0.00);
  --shadow-xl: 0px 2px 0px 0px hsl(252 45% 52% / 0.00), 0px 8px 10px -1px hsl(252 45% 52% / 0.00);
  --shadow-2xl: 0px 2px 0px 0px hsl(252 45% 52% / 0.00);

/* Fallback for older browsers */
  --sidebar-primary-border: hsl(var(--sidebar-primary));
  --sidebar-primary-border: hsl(from hsl(var(--sidebar-primary)) h s calc(l + var(--opaque-button-border-intensity)) / alpha);

  /* Fallback for older browsers */
  --sidebar-accent-border: hsl(var(--sidebar-accent));
  --sidebar-accent-border: hsl(from hsl(var(--sidebar-accent)) h s calc(l + var(--opaque-button-border-intensity)) / alpha);

  /* Fallback for older browsers */
  --primary-border: hsl(var(--primary));
  --primary-border: hsl(from hsl(var(--primary)) h s calc(l + var(--opaque-button-border-intensity)) / alpha);

  /* Fallback for older browsers */
  --secondary-border: hsl(var(--secondary));
  --secondary-border: hsl(from hsl(var(--secondary)) h s calc(l + var(--opaque-button-border-intensity)) / alpha);

  /* Fallback for older browsers */
  --muted-border: hsl(var(--muted));
  --muted-border: hsl(from hsl(var(--muted)) h s calc(l + var(--opaque-button-border-intensity)) / alpha);

  /* Fallback for older browsers */
  --accent-border: hsl(var(--accent));
  --accent-border: hsl(from hsl(var(--accent)) h s calc(l + var(--opaque-button-border-intensity)) / alpha);

  /* Fallback for older browsers */
  --destructive-border: hsl(var(--destructive));
  --destructive-border: hsl(from hsl(var(--destructive)) h s calc(l + var(--opaque-button-border-intensity)) / alpha);
}

/**
 * Using the elevate system.
 * Automatic contrast adjustment.
 *
 * <element className="hover-elevate" />
 * <element className="active-elevate-2" />
 *
 * // Using the tailwind utility when a data attribute is "on"
 * <element className="toggle-elevate data-[state=on]:toggle-elevated" />
 * // Or manually controlling the toggle state
 * <element className="toggle-elevate toggle-elevated" />
 *
 * Elevation systems have to handle many states.
 * - not-hovered, vs. hovered vs. active  (three mutually exclusive states)
 * - toggled or not
 * - focused or not (this is not handled with these utilities)
 *
 * Even without handling focused or not, this is six possible combinations that
 * need to be distinguished from eachother visually.
 */

.file\:border-0::file-selector-button {
  border-width: 0px;
}

.file\:bg-transparent::file-selector-button {
  background-color: transparent;
}

.file\:text-sm::file-selector-button {
  font-size: 0.875rem;
  line-height: 1.25rem;
}

.file\:font-medium::file-selector-button {
  font-weight: 500;
}

.file\:text-foreground::file-selector-button {
  --tw-text-opacity: 1;
  color: hsl(var(--foreground) / var(--tw-text-opacity, 1));
}

.placeholder\:text-muted-foreground::-moz-placeholder {
  --tw-text-opacity: 1;
  color: hsl(var(--muted-foreground) / var(--tw-text-opacity, 1));
}

.placeholder\:text-muted-foreground::placeholder {
  --tw-text-opacity: 1;
  color: hsl(var(--muted-foreground) / var(--tw-text-opacity, 1));
}

.after\:pointer-events-none::after {
  content: var(--tw-content);
  pointer-events: none;
}

.after\:absolute::after {
  content: var(--tw-content);
  position: absolute;
}

.after\:inset-0::after {
  content: var(--tw-content);
  inset: 0px;
}

.after\:block::after {
  content: var(--tw-content);
  display: block;
}

.after\:rounded-full::after {
  content: var(--tw-content);
  border-radius: 9999px;
}

.after\:border::after {
  content: var(--tw-content);
  border-width: 1px;
}

.after\:border-black\/10::after {
  content: var(--tw-content);
  border-color: rgb(0 0 0 / 0.1);
}

.after\:content-\[\'\'\]::after {
  --tw-content: '';
  content: var(--tw-content);
}

.after\:border.toggle-elevate::after::before {
    content: var(--tw-content);
    inset: -1px;
  }

.after\:border.hover-elevate:not(.no-hover-interaction-elevate)::after::after,.after\:border.active-elevate:not(.no-active-interaction-elevate)::after::after,.after\:border.hover-elevate-2:not(.no-hover-interaction-elevate)::after::after,.after\:border.active-elevate-2:not(.no-active-interaction-elevate)::after::after,.after\:border.hover-elevate:not(.no-hover-interaction-elevate)::after::after {
    content: var(--tw-content);
    inset: -1px;
  }

.hover\:bg-background\/30:hover {
  background-color: hsl(var(--background) / 0.3);
}

.hover\:bg-secondary:hover {
  --tw-bg-opacity: 1;
  background-color: hsl(var(--secondary) / var(--tw-bg-opacity, 1));
}

.hover\:text-foreground:hover {
  --tw-text-opacity: 1;
  color: hsl(var(--foreground) / var(--tw-text-opacity, 1));
}

.hover\:text-primary:hover {
  --tw-text-opacity: 1;
  color: hsl(var(--primary) / var(--tw-text-opacity, 1));
}

.hover\:underline:hover {
  text-decoration-line: underline;
}

.focus\:bg-accent:focus {
  --tw-bg-opacity: 1;
  background-color: hsl(var(--accent) / var(--tw-bg-opacity, 1));
}

.focus\:text-accent-foreground:focus {
  --tw-text-opacity: 1;
  color: hsl(var(--accent-foreground) / var(--tw-text-opacity, 1));
}

.focus\:opacity-100:focus {
  opacity: 1;
}

.focus\:outline-none:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
}

.focus\:ring-2:focus {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.focus\:ring-ring:focus {
  --tw-ring-opacity: 1;
  --tw-ring-color: hsl(var(--ring) / var(--tw-ring-opacity, 1));
}

.focus\:ring-offset-2:focus {
  --tw-ring-offset-width: 2px;
}

.focus-visible\:outline-none:focus-visible {
  outline: 2px solid transparent;
  outline-offset: 2px;
}

.focus-visible\:ring-1:focus-visible {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.focus-visible\:ring-2:focus-visible {
  --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
  --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
  box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
}

.focus-visible\:ring-ring:focus-visible {
  --tw-ring-opacity: 1;
  --tw-ring-color: hsl(var(--ring) / var(--tw-ring-opacity, 1));
}

.focus-visible\:ring-offset-2:focus-visible {
  --tw-ring-offset-width: 2px;
}

.active\:shadow-none:active {
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.disabled\:pointer-events-none:disabled {
  pointer-events: none;
}

.disabled\:cursor-not-allowed:disabled {
  cursor: not-allowed;
}

.disabled\:opacity-50:disabled {
  opacity: 0.5;
}

.group:hover .group-hover\:opacity-100 {
  opacity: 1;
}

.group.destructive .group-\[\.destructive\]\:border-muted\/40 {
  border-color: hsl(var(--muted) / 0.4);
}

.group.destructive .group-\[\.destructive\]\:text-red-300 {
  --tw-text-opacity: 1;
  color: rgb(252 165 165 / var(--tw-text-opacity, 1));
}

.group.destructive .group-\[\.destructive\]\:hover\:border-destructive\/30:hover {
  border-color: hsl(var(--destructive) / 0.3);
}

.group.destructive .group-\[\.destructive\]\:hover\:bg-destructive:hover {
  --tw-bg-opacity: 1;
  background-color: hsl(var(--destructive) / var(--tw-bg-opacity, 1));
}

.group.destructive .group-\[\.destructive\]\:hover\:text-destructive-foreground:hover {
  --tw-text-opacity: 1;
  color: hsl(var(--destructive-foreground) / var(--tw-text-opacity, 1));
}

.group.destructive .group-\[\.destructive\]\:hover\:text-red-50:hover {
  --tw-text-opacity: 1;
  color: rgb(254 242 242 / var(--tw-text-opacity, 1));
}

.group.destructive .group-\[\.destructive\]\:focus\:ring-destructive:focus {
  --tw-ring-opacity: 1;
  --tw-ring-color: hsl(var(--destructive) / var(--tw-ring-opacity, 1));
}

.group.destructive .group-\[\.destructive\]\:focus\:ring-red-400:focus {
  --tw-ring-opacity: 1;
  --tw-ring-color: rgb(248 113 113 / var(--tw-ring-opacity, 1));
}

.group.destructive .group-\[\.destructive\]\:focus\:ring-offset-red-600:focus {
  --tw-ring-offset-color: #dc2626;
}

.peer:disabled ~ .peer-disabled\:cursor-not-allowed {
  cursor: not-allowed;
}

.peer:disabled ~ .peer-disabled\:opacity-70 {
  opacity: 0.7;
}

.data-\[disabled\]\:pointer-events-none[data-disabled] {
  pointer-events: none;
}

.data-\[side\=bottom\]\:translate-y-1[data-side="bottom"] {
  --tw-translate-y: 0.25rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.data-\[side\=left\]\:-translate-x-1[data-side="left"] {
  --tw-translate-x: -0.25rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.data-\[side\=right\]\:translate-x-1[data-side="right"] {
  --tw-translate-x: 0.25rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.data-\[side\=top\]\:-translate-y-1[data-side="top"] {
  --tw-translate-y: -0.25rem;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.data-\[swipe\=cancel\]\:translate-x-0[data-swipe="cancel"] {
  --tw-translate-x: 0px;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.data-\[swipe\=end\]\:translate-x-\[var\(--radix-toast-swipe-end-x\)\][data-swipe="end"] {
  --tw-translate-x: var(--radix-toast-swipe-end-x);
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.data-\[swipe\=move\]\:translate-x-\[var\(--radix-toast-swipe-move-x\)\][data-swipe="move"] {
  --tw-translate-x: var(--radix-toast-swipe-move-x);
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.data-\[placeholder\]\:text-muted-foreground[data-placeholder] {
  --tw-text-opacity: 1;
  color: hsl(var(--muted-foreground) / var(--tw-text-opacity, 1));
}

.data-\[disabled\]\:opacity-50[data-disabled] {
  opacity: 0.5;
}

.data-\[swipe\=move\]\:transition-none[data-swipe="move"] {
  transition-property: none;
}

.data-\[state\=open\]\:animate-in[data-state="open"] {
  animation-name: enter;
  animation-duration: 150ms;
  --tw-enter-opacity: initial;
  --tw-enter-scale: initial;
  --tw-enter-rotate: initial;
  --tw-enter-translate-x: initial;
  --tw-enter-translate-y: initial;
}

.data-\[state\=closed\]\:animate-out[data-state="closed"] {
  animation-name: exit;
  animation-duration: 150ms;
  --tw-exit-opacity: initial;
  --tw-exit-scale: initial;
  --tw-exit-rotate: initial;
  --tw-exit-translate-x: initial;
  --tw-exit-translate-y: initial;
}

.data-\[swipe\=end\]\:animate-out[data-swipe="end"] {
  animation-name: exit;
  animation-duration: 150ms;
  --tw-exit-opacity: initial;
  --tw-exit-scale: initial;
  --tw-exit-rotate: initial;
  --tw-exit-translate-x: initial;
  --tw-exit-translate-y: initial;
}

.data-\[state\=closed\]\:fade-out-0[data-state="closed"] {
  --tw-exit-opacity: 0;
}

.data-\[state\=closed\]\:fade-out-80[data-state="closed"] {
  --tw-exit-opacity: 0.8;
}

.data-\[state\=open\]\:fade-in-0[data-state="open"] {
  --tw-enter-opacity: 0;
}

.data-\[state\=closed\]\:zoom-out-95[data-state="closed"] {
  --tw-exit-scale: .95;
}

.data-\[state\=open\]\:zoom-in-95[data-state="open"] {
  --tw-enter-scale: .95;
}

.data-\[side\=bottom\]\:slide-in-from-top-2[data-side="bottom"] {
  --tw-enter-translate-y: -0.5rem;
}

.data-\[side\=left\]\:slide-in-from-right-2[data-side="left"] {
  --tw-enter-translate-x: 0.5rem;
}

.data-\[side\=right\]\:slide-in-from-left-2[data-side="right"] {
  --tw-enter-translate-x: -0.5rem;
}

.data-\[side\=top\]\:slide-in-from-bottom-2[data-side="top"] {
  --tw-enter-translate-y: 0.5rem;
}

.data-\[state\=closed\]\:slide-out-to-right-full[data-state="closed"] {
  --tw-exit-translate-x: 100%;
}

.data-\[state\=open\]\:slide-in-from-top-full[data-state="open"] {
  --tw-enter-translate-y: -100%;
}

.dark\:after\:border-white\/10:is(.dark *)::after {
  content: var(--tw-content);
  border-color: rgb(255 255 255 / 0.1);
}

@media (min-width: 640px) {

  .sm\:bottom-0 {
    bottom: 0px;
  }

  .sm\:right-0 {
    right: 0px;
  }

  .sm\:top-auto {
    top: auto;
  }

  .sm\:grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .sm\:flex-row {
    flex-direction: row;
  }

  .sm\:flex-col {
    flex-direction: column;
  }

  .data-\[state\=open\]\:sm\:slide-in-from-bottom-full[data-state="open"] {
    --tw-enter-translate-y: 100%;
  }
}

@media (min-width: 768px) {

  .md\:order-1 {
    order: 1;
  }

  .md\:order-2 {
    order: 2;
  }

  .md\:flex {
    display: flex;
  }

  .md\:hidden {
    display: none;
  }

  .md\:max-w-\[420px\] {
    max-width: 420px;
  }

  .md\:grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .md\:grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .md\:grid-cols-4 {
    grid-template-columns: repeat(4, minmax(0, 1fr));
  }

  .md\:px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
  }

  .md\:py-24 {
    padding-top: 6rem;
    padding-bottom: 6rem;
  }

  .md\:text-2xl {
    font-size: 1.5rem;
    line-height: 2rem;
  }

  .md\:text-4xl {
    font-size: 2.25rem;
    line-height: 2.5rem;
  }

  .md\:text-5xl {
    font-size: 3rem;
    line-height: 1;
  }

  .md\:text-base {
    font-size: 1rem;
    line-height: 1.5rem;
  }

  .md\:text-lg {
    font-size: 1.125rem;
    line-height: 1.75rem;
  }

  .md\:text-sm {
    font-size: 0.875rem;
    line-height: 1.25rem;
  }

  .md\:text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem;
  }
}

@media (min-width: 1024px) {

  .lg\:col-span-2 {
    grid-column: span 2 / span 2;
  }

  .lg\:col-span-3 {
    grid-column: span 3 / span 3;
  }

  .lg\:grid-cols-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .lg\:grid-cols-4 {
    grid-template-columns: repeat(4, minmax(0, 1fr));
  }

  .lg\:grid-cols-5 {
    grid-template-columns: repeat(5, minmax(0, 1fr));
  }

  .lg\:text-6xl {
    font-size: 3.75rem;
    line-height: 1;
  }
}

.\[\&\>span\]\:line-clamp-1>span {
  overflow: hidden;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 1;
}

.\[\&_svg\]\:pointer-events-none svg {
  pointer-events: none;
}

.\[\&_svg\]\:size-4 svg {
  width: 1rem;
  height: 1rem;
}

.\[\&_svg\]\:shrink-0 svg {
  flex-shrink: 0;
}
</style></head>
  <body>
    <div id="root"><div role="region" aria-label="Notifications (F8)" tabindex="-1" style="pointer-events: none;"><ol tabindex="-1" data-replit-metadata="client/src/components/ui/toaster.tsx:30:6" data-component-name="ToastViewport" class="fixed top-0 z-[100] flex max-h-screen w-full flex-col-reverse p-4 sm:bottom-0 sm:right-0 sm:top-auto sm:flex-col md:max-w-[420px]"></ol></div><div data-replit-metadata="client/src/pages/Home.tsx:17:4" data-component-name="div" class="min-h-screen"><header data-replit-metadata="client/src/components/Header.tsx:34:4" data-component-name="header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-background/95 backdrop-blur-md shadow-md"><div data-replit-metadata="client/src/components/Header.tsx:41:6" data-component-name="div" class="max-w-7xl mx-auto px-4 md:px-6"><div data-replit-metadata="client/src/components/Header.tsx:42:8" data-component-name="div" class="flex items-center justify-between h-20"><button data-replit-metadata="client/src/components/Header.tsx:43:10" data-component-name="button" class="text-xl md:text-2xl font-bold text-primary hover-elevate active-elevate-2 rounded-md px-3 py-2" data-testid="link-logo" title="Çanakkale Drone Çekimi Anasayfa">Drone Çekimi</button><nav data-replit-metadata="client/src/components/Header.tsx:52:10" data-component-name="nav" class="hidden md:flex items-center gap-1"><button data-replit-metadata="client/src/components/Header.tsx:54:14" data-component-name="button" class="px-4 py-2 text-foreground hover-elevate active-elevate-2 rounded-md transition-colors" data-testid="link-nav-hero" title="Anasayfa - Çanakkale Drone Çekimi">Anasayfa</button><button data-replit-metadata="client/src/components/Header.tsx:54:14" data-component-name="button" class="px-4 py-2 text-foreground hover-elevate active-elevate-2 rounded-md transition-colors" data-testid="link-nav-about" title="Biz Kimiz - Çanakkale Drone Çekimi">Biz Kimiz</button><button data-replit-metadata="client/src/components/Header.tsx:54:14" data-component-name="button" class="px-4 py-2 text-foreground hover-elevate active-elevate-2 rounded-md transition-colors" data-testid="link-nav-services" title="Çözümlerimiz - Çanakkale Drone Çekimi">Çözümlerimiz</button><button data-replit-metadata="client/src/components/Header.tsx:54:14" data-component-name="button" class="px-4 py-2 text-foreground hover-elevate active-elevate-2 rounded-md transition-colors" data-testid="link-nav-portfolio" title="Galeri - Çanakkale Drone Çekimi">Galeri</button><button data-replit-metadata="client/src/components/Header.tsx:54:14" data-component-name="button" class="px-4 py-2 text-foreground hover-elevate active-elevate-2 rounded-md transition-colors" data-testid="link-nav-contact" title="Bize Ulaşın - Çanakkale Drone Çekimi">Bize Ulaşın</button></nav><div data-replit-metadata="client/src/components/Header.tsx:66:10" data-component-name="div" class="hidden md:flex items-center gap-2"><button data-replit-metadata="client/src/components/Header.tsx:67:12" data-component-name="Button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover-elevate active-elevate-2 border [border-color:var(--button-outline)] shadow-xs active:shadow-none min-h-8 rounded-md px-3 text-xs" data-testid="button-header-phone" title="Drone Çekimi Telefon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-4 h-4 mr-2" data-replit-metadata="client/src/components/Header.tsx:74:14" data-component-name="Phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>+90 534 792 25 31</button><button data-replit-metadata="client/src/components/Header.tsx:77:12" data-component-name="Button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover-elevate active-elevate-2 bg-primary text-primary-foreground border border-primary-border min-h-8 rounded-md px-3 text-xs" data-testid="button-header-quote" title="Fiyat Teklifi - Çanakkale Drone Çekimi"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-4 h-4 mr-2" data-replit-metadata="client/src/components/Header.tsx:84:14" data-component-name="Mail"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>Fiyat İste</button></div><button data-replit-metadata="client/src/components/Header.tsx:89:10" data-component-name="button" class="md:hidden p-2 hover-elevate active-elevate-2 rounded-md" data-testid="button-mobile-menu" aria-label="Menü"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu w-6 h-6" data-replit-metadata="client/src/components/Header.tsx:98:14" data-component-name="Menu"><line x1="4" x2="20" y1="12" y2="12"></line><line x1="4" x2="20" y1="6" y2="6"></line><line x1="4" x2="20" y1="18" y2="18"></line></svg></button></div></div></header><section data-replit-metadata="client/src/components/Hero.tsx:14:4" data-component-name="section" id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden"><div data-replit-metadata="client/src/components/Hero.tsx:18:6" data-component-name="div" class="absolute inset-0 bg-cover bg-center" style="background-image: url(&quot;/@fs/home/runner/workspace/attached_assets/generated_images/%C3%A7anakkale_aerial_hero_view.png&quot;);"><div data-replit-metadata="client/src/components/Hero.tsx:22:8" data-component-name="div" class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/50 to-black/70"></div></div><div data-replit-metadata="client/src/components/Hero.tsx:25:6" data-component-name="div" class="relative z-10 max-w-7xl mx-auto px-4 md:px-6 text-center"><h1 data-replit-metadata="client/src/components/Hero.tsx:26:8" data-component-name="h1" class="text-3xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 tracking-tight"><span data-replit-metadata="client/src/components/Hero.tsx:27:10" data-component-name="span" class="text-primary">Çanakkale Drone Çekimi</span><br data-replit-metadata="client/src/components/Hero.tsx:28:10" data-component-name="br">Havadan Görüntüleme Uzmanı</h1><p data-replit-metadata="client/src/components/Hero.tsx:31:8" data-component-name="p" class="text-lg md:text-xl text-white/90 mb-8 max-w-3xl mx-auto leading-relaxed">Bölgenin deneyimli drone operatörleri olarak sinematik video prodüksiyon, gayrimenkul görüntüleme, şantiye izleme ve özel etkinlik çekimi hizmetleri sunuyoruz. Modern ekipmanlarımız ve yaratıcı bakış açımızla projelerinizi havadan keşfedin.</p><div data-replit-metadata="client/src/components/Hero.tsx:36:8" data-component-name="div" class="flex flex-col sm:flex-row gap-4 justify-center items-center"><button data-replit-metadata="client/src/components/Hero.tsx:37:10" data-component-name="Button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover-elevate active-elevate-2 text-primary-foreground min-h-10 rounded-md px-8 py-6 text-lg font-semibold shadow-xl bg-primary/90 backdrop-blur-sm border border-primary-border" data-testid="button-hero-quote" title="Ücretsiz Fiyat Teklifi - Drone Çekimi">Hemen Fiyat Alın</button><button data-replit-metadata="client/src/components/Hero.tsx:47:10" data-component-name="Button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover-elevate active-elevate-2 border [border-color:var(--button-outline)] active:shadow-none min-h-10 rounded-md px-8 py-6 text-lg font-semibold shadow-xl bg-background/20 backdrop-blur-sm text-white border-white/30 hover:bg-background/30" data-testid="button-hero-services" title="Çözümlerimiz - Drone Çekimi">Çözümlerimiz</button></div></div><button data-replit-metadata="client/src/components/Hero.tsx:60:6" data-component-name="button" class="absolute bottom-8 left-1/2 -translate-x-1/2 text-white animate-bounce hover-elevate active-elevate-2 p-2 rounded-full" data-testid="button-scroll-down" aria-label="Aşağı kaydır"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down w-8 h-8" data-replit-metadata="client/src/components/Hero.tsx:66:8" data-component-name="ChevronDown"><path d="m6 9 6 6 6-6"></path></svg></button></section><section data-replit-metadata="client/src/components/InfoSection.tsx:6:4" data-component-name="section" id="about" class="py-16 md:py-24 bg-background"><div data-replit-metadata="client/src/components/InfoSection.tsx:7:6" data-component-name="div" class="max-w-7xl mx-auto px-4 md:px-6"><div data-replit-metadata="client/src/components/InfoSection.tsx:8:8" data-component-name="div" class="grid md:grid-cols-2 gap-12 items-center mb-20"><div data-replit-metadata="client/src/components/InfoSection.tsx:9:10" data-component-name="div"><h2 data-replit-metadata="client/src/components/InfoSection.tsx:10:12" data-component-name="h2" class="text-2xl md:text-4xl font-bold text-foreground mb-6">Havadan Görüntüleme Neden Bu Kadar Etkili?</h2><p data-replit-metadata="client/src/components/InfoSection.tsx:13:12" data-component-name="p" class="text-base md:text-lg text-muted-foreground leading-relaxed mb-4">Uzun yılların saha tecrübesi ve ileri teknoloji drone sistemlerimizle Çanakkale genelinde kapsamlı havadan çekim hizmetleri gerçekleştiriyoruz. Yapı projelerinden arazi analizine, kurumsal tanıtımlardan özel gün kayıtlarına kadar her alanda yaratıcı çözümler üretiyoruz.</p><p data-replit-metadata="client/src/components/InfoSection.tsx:19:12" data-component-name="p" class="text-base md:text-lg text-muted-foreground leading-relaxed">Uzman kadromuz ve ileri düzey drone parkurumuz ile işlerinize kusursuz görsel içerikler sağlıyoruz. Her projede kalite standardımızdan ödün vermiyoruz.</p></div><div data-replit-metadata="client/src/components/InfoSection.tsx:24:10" data-component-name="div" class="relative"><img data-replit-metadata="client/src/components/InfoSection.tsx:25:12" data-component-name="img" src="/@fs/home/runner/workspace/attached_assets/generated_images/drone_team_at_work.png" alt="Drone çekimi yapan profesyonel ekip - havadan görüntüleme hizmeti" title="Drone Çekimi Uzman Ekibi" class="rounded-xl shadow-lg w-full" loading="lazy"></div></div><div data-replit-metadata="client/src/components/InfoSection.tsx:35:8" data-component-name="div" class="grid md:grid-cols-2 gap-12 items-center"><div data-replit-metadata="client/src/components/InfoSection.tsx:36:10" data-component-name="div" class="order-2 md:order-1"><img data-replit-metadata="client/src/components/InfoSection.tsx:37:12" data-component-name="img" src="/@fs/home/runner/workspace/attached_assets/generated_images/professional_drone_equipment_photo.png" alt="İleri teknoloji drone ekipmanları - Çanakkale drone çekimi" title="Profesyonel Drone Sistemleri" class="rounded-xl shadow-lg w-full" loading="lazy"></div><div data-replit-metadata="client/src/components/InfoSection.tsx:45:10" data-component-name="div" class="order-1 md:order-2"><h2 data-replit-metadata="client/src/components/InfoSection.tsx:46:12" data-component-name="h2" class="text-2xl md:text-4xl font-bold text-foreground mb-6">Son Nesil Drone Teknolojisi</h2><p data-replit-metadata="client/src/components/InfoSection.tsx:49:12" data-component-name="p" class="text-base md:text-lg text-muted-foreground leading-relaxed mb-4">4K ve 8K görüntü kalitesinde çekim yapabilen üst düzey drone sistemlerimiz ile projelerinizde sinema kalitesinde sonuçlar elde ediyoruz. Hassas gimbal teknolojisi sayesinde zorlu koşullarda bile titreşimsiz, net görüntüler yakalıyoruz.</p><p data-replit-metadata="client/src/components/InfoSection.tsx:54:12" data-component-name="p" class="text-base md:text-lg text-muted-foreground leading-relaxed">Ehliyetli ve tam kapsamlı sigortalı pilotlarımız, tüm yasal düzenlemelere uygun şekilde her ortamda güvenli operasyonlar yürütmektedir.</p></div></div></div></section><section data-replit-metadata="client/src/components/WhyUs.tsx:29:4" data-component-name="section" class="py-16 md:py-24 bg-muted/30"><div data-replit-metadata="client/src/components/WhyUs.tsx:30:6" data-component-name="div" class="max-w-7xl mx-auto px-4 md:px-6"><div data-replit-metadata="client/src/components/WhyUs.tsx:31:8" data-component-name="div" class="text-center mb-12"><h2 data-replit-metadata="client/src/components/WhyUs.tsx:32:10" data-component-name="h2" class="text-2xl md:text-4xl font-bold text-foreground mb-4">Bizi Farklı Kılan Ne?</h2><p data-replit-metadata="client/src/components/WhyUs.tsx:35:10" data-component-name="p" class="text-base md:text-lg text-muted-foreground max-w-2xl mx-auto">Çanakkale'deki havadan çekim projelerinde öncü konumumuz, kalite anlayışımız ve müşteri odaklı yaklaşımımızla desteklenmektedir.</p></div><div data-replit-metadata="client/src/components/WhyUs.tsx:41:8" data-component-name="div" class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6"><div data-replit-metadata="client/src/components/WhyUs.tsx:43:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm hover-elevate active-elevate-2 transition-all cursor-default" data-testid="card-feature-0"><div data-replit-metadata="client/src/components/WhyUs.tsx:48:14" data-component-name="CardContent" class="p-6 text-center"><div data-replit-metadata="client/src/components/WhyUs.tsx:49:16" data-component-name="div" class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary/10 text-primary mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award w-8 h-8" data-replit-metadata="client/src/components/WhyUs.tsx:50:18" data-component-name="feature.icon"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path><circle cx="12" cy="8" r="6"></circle></svg></div><h3 data-replit-metadata="client/src/components/WhyUs.tsx:52:16" data-component-name="h3" class="text-lg md:text-xl font-semibold text-foreground mb-2">Sinema Kalitesi</h3><p data-replit-metadata="client/src/components/WhyUs.tsx:55:16" data-component-name="p" class="text-sm md:text-base text-muted-foreground">4K ve 8K görüntü standardı, profesyonel renk işleme ve detaylı son işlem hizmetleri.</p></div></div><div data-replit-metadata="client/src/components/WhyUs.tsx:43:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm hover-elevate active-elevate-2 transition-all cursor-default" data-testid="card-feature-1"><div data-replit-metadata="client/src/components/WhyUs.tsx:48:14" data-component-name="CardContent" class="p-6 text-center"><div data-replit-metadata="client/src/components/WhyUs.tsx:49:16" data-component-name="div" class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary/10 text-primary mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-8 h-8" data-replit-metadata="client/src/components/WhyUs.tsx:50:18" data-component-name="feature.icon"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></div><h3 data-replit-metadata="client/src/components/WhyUs.tsx:52:16" data-component-name="h3" class="text-lg md:text-xl font-semibold text-foreground mb-2">Süratli Teslim</h3><p data-replit-metadata="client/src/components/WhyUs.tsx:55:16" data-component-name="p" class="text-sm md:text-base text-muted-foreground">Çekim bitiminden itibaren 48 saat içinde editlenmiş dosyalarınızı teslim alırsınız.</p></div></div><div data-replit-metadata="client/src/components/WhyUs.tsx:43:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm hover-elevate active-elevate-2 transition-all cursor-default" data-testid="card-feature-2"><div data-replit-metadata="client/src/components/WhyUs.tsx:48:14" data-component-name="CardContent" class="p-6 text-center"><div data-replit-metadata="client/src/components/WhyUs.tsx:49:16" data-component-name="div" class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary/10 text-primary mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-8 h-8" data-replit-metadata="client/src/components/WhyUs.tsx:50:18" data-component-name="feature.icon"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg></div><h3 data-replit-metadata="client/src/components/WhyUs.tsx:52:16" data-component-name="h3" class="text-lg md:text-xl font-semibold text-foreground mb-2">Bölge Uzmanlığı</h3><p data-replit-metadata="client/src/components/WhyUs.tsx:55:16" data-component-name="p" class="text-sm md:text-base text-muted-foreground">Çanakkale'nin tüm lokasyonlarına hakim ekibimiz, ideal çekim açılarını bilir.</p></div></div><div data-replit-metadata="client/src/components/WhyUs.tsx:43:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm hover-elevate active-elevate-2 transition-all cursor-default" data-testid="card-feature-3"><div data-replit-metadata="client/src/components/WhyUs.tsx:48:14" data-component-name="CardContent" class="p-6 text-center"><div data-replit-metadata="client/src/components/WhyUs.tsx:49:16" data-component-name="div" class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary/10 text-primary mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-8 h-8" data-replit-metadata="client/src/components/WhyUs.tsx:50:18" data-component-name="feature.icon"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg></div><h3 data-replit-metadata="client/src/components/WhyUs.tsx:52:16" data-component-name="h3" class="text-lg md:text-xl font-semibold text-foreground mb-2">Tam Güvence</h3><p data-replit-metadata="client/src/components/WhyUs.tsx:55:16" data-component-name="p" class="text-sm md:text-base text-muted-foreground">Kapsamlı sigortalı sistemler ve sertifikalı operatörlerle risksiz çekim deneyimi.</p></div></div></div></div></section><section data-replit-metadata="client/src/components/Services.tsx:53:4" data-component-name="section" id="services" class="py-16 md:py-24 bg-background"><div data-replit-metadata="client/src/components/Services.tsx:54:6" data-component-name="div" class="max-w-7xl mx-auto px-4 md:px-6"><div data-replit-metadata="client/src/components/Services.tsx:55:8" data-component-name="div" class="text-center mb-12"><h2 data-replit-metadata="client/src/components/Services.tsx:56:10" data-component-name="h2" class="text-2xl md:text-4xl font-bold text-foreground mb-4">Drone Çekimi Çözümlerimiz</h2><p data-replit-metadata="client/src/components/Services.tsx:59:10" data-component-name="p" class="text-base md:text-lg text-muted-foreground max-w-2xl mx-auto">Her türlü projeniz için özelleştirilmiş, profesyonel havadan çekim hizmetleri sunuyoruz.</p></div><div data-replit-metadata="client/src/components/Services.tsx:64:8" data-component-name="div" class="grid md:grid-cols-3 gap-8"><div data-replit-metadata="client/src/components/Services.tsx:66:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm overflow-hidden hover-elevate active-elevate-2 transition-all" data-testid="card-service-0"><div data-replit-metadata="client/src/components/Services.tsx:71:14" data-component-name="div" class="aspect-video overflow-hidden"><img data-replit-metadata="client/src/components/Services.tsx:72:16" data-component-name="img" src="/@fs/home/runner/workspace/attached_assets/generated_images/video_service_example_shot.png" alt="Sinematik Video Prodüksiyon - Çanakkale drone çekimi hizmeti" title="Sinematik Video Prodüksiyon - Drone Çekimi" class="w-full h-full object-cover" loading="lazy"></div><div data-replit-metadata="client/src/components/Services.tsx:80:14" data-component-name="CardHeader" class="flex flex-col space-y-1.5 p-6"><div data-replit-metadata="client/src/components/Services.tsx:81:16" data-component-name="div" class="flex items-center gap-3 mb-2"><div data-replit-metadata="client/src/components/Services.tsx:82:18" data-component-name="div" class="p-2 rounded-lg bg-primary/10 text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-video w-6 h-6" data-replit-metadata="client/src/components/Services.tsx:83:20" data-component-name="service.icon"><path d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"></path><rect x="2" y="6" width="14" height="12" rx="2"></rect></svg></div><div data-replit-metadata="client/src/components/Services.tsx:85:18" data-component-name="CardTitle" class="font-semibold tracking-tight text-xl">Sinematik Video Prodüksiyon</div></div></div><div data-replit-metadata="client/src/components/Services.tsx:88:14" data-component-name="CardContent" class="p-6 pt-0"><ul data-replit-metadata="client/src/components/Services.tsx:89:16" data-component-name="ul" class="space-y-2 mb-6"><li data-replit-metadata="client/src/components/Services.tsx:91:20" data-component-name="li" class="flex items-start gap-2 text-sm text-muted-foreground"><span data-replit-metadata="client/src/components/Services.tsx:92:22" data-component-name="span" class="text-primary mt-1">•</span><span data-replit-metadata="client/src/components/Services.tsx:93:22" data-component-name="span">4K ve 8K Ultra Yüksek Çözünürlük</span></li><li data-replit-metadata="client/src/components/Services.tsx:91:20" data-component-name="li" class="flex items-start gap-2 text-sm text-muted-foreground"><span data-replit-metadata="client/src/components/Services.tsx:92:22" data-component-name="span" class="text-primary mt-1">•</span><span data-replit-metadata="client/src/components/Services.tsx:93:22" data-component-name="span">Film tarzı görsel anlatım</span></li><li data-replit-metadata="client/src/components/Services.tsx:91:20" data-component-name="li" class="flex items-start gap-2 text-sm text-muted-foreground"><span data-replit-metadata="client/src/components/Services.tsx:92:22" data-component-name="span" class="text-primary mt-1">•</span><span data-replit-metadata="client/src/components/Services.tsx:93:22" data-component-name="span">Kapsamlı renk düzenleme</span></li><li data-replit-metadata="client/src/components/Services.tsx:91:20" data-component-name="li" class="flex items-start gap-2 text-sm text-muted-foreground"><span data-replit-metadata="client/src/components/Services.tsx:92:22" data-component-name="span" class="text-primary mt-1">•</span><span data-replit-metadata="client/src/components/Services.tsx:93:22" data-component-name="span">Kurumsal ve reklam içerikleri</span></li></ul><button data-replit-metadata="client/src/components/Services.tsx:97:16" data-component-name="Button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover-elevate active-elevate-2 border [border-color:var(--button-outline)] shadow-xs active:shadow-none min-h-9 px-4 py-2 w-full" data-testid="button-service-quote-0" title="Sinematik Video Prodüksiyon için fiyat teklifi al">Bilgi Talep Et</button></div></div><div data-replit-metadata="client/src/components/Services.tsx:66:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm overflow-hidden hover-elevate active-elevate-2 transition-all" data-testid="card-service-1"><div data-replit-metadata="client/src/components/Services.tsx:71:14" data-component-name="div" class="aspect-video overflow-hidden"><img data-replit-metadata="client/src/components/Services.tsx:72:16" data-component-name="img" src="/@fs/home/runner/workspace/attached_assets/generated_images/real_estate_aerial_photography.png" alt="Havadan Fotoğraf Hizmeti - Çanakkale drone çekimi hizmeti" title="Havadan Fotoğraf Hizmeti - Drone Çekimi" class="w-full h-full object-cover" loading="lazy"></div><div data-replit-metadata="client/src/components/Services.tsx:80:14" data-component-name="CardHeader" class="flex flex-col space-y-1.5 p-6"><div data-replit-metadata="client/src/components/Services.tsx:81:16" data-component-name="div" class="flex items-center gap-3 mb-2"><div data-replit-metadata="client/src/components/Services.tsx:82:18" data-component-name="div" class="p-2 rounded-lg bg-primary/10 text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-camera w-6 h-6" data-replit-metadata="client/src/components/Services.tsx:83:20" data-component-name="service.icon"><path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"></path><circle cx="12" cy="13" r="3"></circle></svg></div><div data-replit-metadata="client/src/components/Services.tsx:85:18" data-component-name="CardTitle" class="font-semibold tracking-tight text-xl">Havadan Fotoğraf Hizmeti</div></div></div><div data-replit-metadata="client/src/components/Services.tsx:88:14" data-component-name="CardContent" class="p-6 pt-0"><ul data-replit-metadata="client/src/components/Services.tsx:89:16" data-component-name="ul" class="space-y-2 mb-6"><li data-replit-metadata="client/src/components/Services.tsx:91:20" data-component-name="li" class="flex items-start gap-2 text-sm text-muted-foreground"><span data-replit-metadata="client/src/components/Services.tsx:92:22" data-component-name="span" class="text-primary mt-1">•</span><span data-replit-metadata="client/src/components/Services.tsx:93:22" data-component-name="span">Yüksek netlikli görüntüler</span></li><li data-replit-metadata="client/src/components/Services.tsx:91:20" data-component-name="li" class="flex items-start gap-2 text-sm text-muted-foreground"><span data-replit-metadata="client/src/components/Services.tsx:92:22" data-component-name="span" class="text-primary mt-1">•</span><span data-replit-metadata="client/src/components/Services.tsx:93:22" data-component-name="span">Gayrimenkul ve yapı görselleri</span></li><li data-replit-metadata="client/src/components/Services.tsx:91:20" data-component-name="li" class="flex items-start gap-2 text-sm text-muted-foreground"><span data-replit-metadata="client/src/components/Services.tsx:92:22" data-component-name="span" class="text-primary mt-1">•</span><span data-replit-metadata="client/src/components/Services.tsx:93:22" data-component-name="span">Geniş açı panorama çekimleri</span></li><li data-replit-metadata="client/src/components/Services.tsx:91:20" data-component-name="li" class="flex items-start gap-2 text-sm text-muted-foreground"><span data-replit-metadata="client/src/components/Services.tsx:92:22" data-component-name="span" class="text-primary mt-1">•</span><span data-replit-metadata="client/src/components/Services.tsx:93:22" data-component-name="span">360 derece interaktif turlar</span></li></ul><button data-replit-metadata="client/src/components/Services.tsx:97:16" data-component-name="Button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover-elevate active-elevate-2 border [border-color:var(--button-outline)] shadow-xs active:shadow-none min-h-9 px-4 py-2 w-full" data-testid="button-service-quote-1" title="Havadan Fotoğraf Hizmeti için fiyat teklifi al">Bilgi Talep Et</button></div></div><div data-replit-metadata="client/src/components/Services.tsx:66:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm overflow-hidden hover-elevate active-elevate-2 transition-all" data-testid="card-service-2"><div data-replit-metadata="client/src/components/Services.tsx:71:14" data-component-name="div" class="aspect-video overflow-hidden"><img data-replit-metadata="client/src/components/Services.tsx:72:16" data-component-name="img" src="/@fs/home/runner/workspace/attached_assets/generated_images/construction_site_aerial_documentation.png" alt="Şantiye İzleme Sistemi - Çanakkale drone çekimi hizmeti" title="Şantiye İzleme Sistemi - Drone Çekimi" class="w-full h-full object-cover" loading="lazy"></div><div data-replit-metadata="client/src/components/Services.tsx:80:14" data-component-name="CardHeader" class="flex flex-col space-y-1.5 p-6"><div data-replit-metadata="client/src/components/Services.tsx:81:16" data-component-name="div" class="flex items-center gap-3 mb-2"><div data-replit-metadata="client/src/components/Services.tsx:82:18" data-component-name="div" class="p-2 rounded-lg bg-primary/10 text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building w-6 h-6" data-replit-metadata="client/src/components/Services.tsx:83:20" data-component-name="service.icon"><rect width="16" height="20" x="4" y="2" rx="2" ry="2"></rect><path d="M9 22v-4h6v4"></path><path d="M8 6h.01"></path><path d="M16 6h.01"></path><path d="M12 6h.01"></path><path d="M12 10h.01"></path><path d="M12 14h.01"></path><path d="M16 10h.01"></path><path d="M16 14h.01"></path><path d="M8 10h.01"></path><path d="M8 14h.01"></path></svg></div><div data-replit-metadata="client/src/components/Services.tsx:85:18" data-component-name="CardTitle" class="font-semibold tracking-tight text-xl">Şantiye İzleme Sistemi</div></div></div><div data-replit-metadata="client/src/components/Services.tsx:88:14" data-component-name="CardContent" class="p-6 pt-0"><ul data-replit-metadata="client/src/components/Services.tsx:89:16" data-component-name="ul" class="space-y-2 mb-6"><li data-replit-metadata="client/src/components/Services.tsx:91:20" data-component-name="li" class="flex items-start gap-2 text-sm text-muted-foreground"><span data-replit-metadata="client/src/components/Services.tsx:92:22" data-component-name="span" class="text-primary mt-1">•</span><span data-replit-metadata="client/src/components/Services.tsx:93:22" data-component-name="span">Periyodik gelişim kayıtları</span></li><li data-replit-metadata="client/src/components/Services.tsx:91:20" data-component-name="li" class="flex items-start gap-2 text-sm text-muted-foreground"><span data-replit-metadata="client/src/components/Services.tsx:92:22" data-component-name="span" class="text-primary mt-1">•</span><span data-replit-metadata="client/src/components/Services.tsx:93:22" data-component-name="span">Kapsamlı durum raporları</span></li><li data-replit-metadata="client/src/components/Services.tsx:91:20" data-component-name="li" class="flex items-start gap-2 text-sm text-muted-foreground"><span data-replit-metadata="client/src/components/Services.tsx:92:22" data-component-name="span" class="text-primary mt-1">•</span><span data-replit-metadata="client/src/components/Services.tsx:93:22" data-component-name="span">Proje arşiv belgeleme</span></li><li data-replit-metadata="client/src/components/Services.tsx:91:20" data-component-name="li" class="flex items-start gap-2 text-sm text-muted-foreground"><span data-replit-metadata="client/src/components/Services.tsx:92:22" data-component-name="span" class="text-primary mt-1">•</span><span data-replit-metadata="client/src/components/Services.tsx:93:22" data-component-name="span">Kontrol ve denetim görüntüleri</span></li></ul><button data-replit-metadata="client/src/components/Services.tsx:97:16" data-component-name="Button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover-elevate active-elevate-2 border [border-color:var(--button-outline)] shadow-xs active:shadow-none min-h-9 px-4 py-2 w-full" data-testid="button-service-quote-2" title="Şantiye İzleme Sistemi için fiyat teklifi al">Bilgi Talep Et</button></div></div></div></div></section><section data-replit-metadata="client/src/components/QuoteForm.tsx:107:4" data-component-name="section" id="quote" class="py-16 md:py-24 bg-muted/30"><div data-replit-metadata="client/src/components/QuoteForm.tsx:108:6" data-component-name="div" class="max-w-7xl mx-auto px-4 md:px-6"><div data-replit-metadata="client/src/components/QuoteForm.tsx:109:8" data-component-name="div" class="text-center mb-12"><h2 data-replit-metadata="client/src/components/QuoteForm.tsx:110:10" data-component-name="h2" class="text-2xl md:text-4xl font-bold text-foreground mb-4">Ücretsiz Fiyat Teklifi</h2><p data-replit-metadata="client/src/components/QuoteForm.tsx:113:10" data-component-name="p" class="text-base md:text-lg text-muted-foreground max-w-2xl mx-auto">Projenize özel detaylı fiyatlandırma için formu doldurun. Bir iş günü içinde size geri dönüş sağlayacağız.</p></div><div data-replit-metadata="client/src/components/QuoteForm.tsx:119:8" data-component-name="div" class="grid lg:grid-cols-3 gap-8"><div data-replit-metadata="client/src/components/QuoteForm.tsx:120:10" data-component-name="div" class="lg:col-span-2"><div data-replit-metadata="client/src/components/QuoteForm.tsx:121:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm"><div data-replit-metadata="client/src/components/QuoteForm.tsx:122:14" data-component-name="CardHeader" class="flex flex-col space-y-1.5 p-6"><div data-replit-metadata="client/src/components/QuoteForm.tsx:123:16" data-component-name="CardTitle" class="text-2xl font-semibold leading-none tracking-tight">Bilgi Formu</div></div><div data-replit-metadata="client/src/components/QuoteForm.tsx:125:14" data-component-name="CardContent" class="p-6 pt-0"><form data-replit-metadata="client/src/components/QuoteForm.tsx:126:16" data-component-name="form" class="space-y-4"><div data-replit-metadata="client/src/components/QuoteForm.tsx:127:18" data-component-name="div" class="grid sm:grid-cols-2 gap-4"><div data-replit-metadata="client/src/components/QuoteForm.tsx:128:20" data-component-name="div"><label data-replit-metadata="client/src/components/QuoteForm.tsx:129:22" data-component-name="Label" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="name">Ad Soyad *</label><input data-replit-metadata="client/src/components/QuoteForm.tsx:130:22" data-component-name="Input" type="text" class="flex h-9 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="name" required="" placeholder="İsim ve soyisminiz" data-testid="input-quote-name" value=""></div><div data-replit-metadata="client/src/components/QuoteForm.tsx:147:20" data-component-name="div"><label data-replit-metadata="client/src/components/QuoteForm.tsx:148:22" data-component-name="Label" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="phone">Telefon *</label><input data-replit-metadata="client/src/components/QuoteForm.tsx:149:22" data-component-name="Input" type="tel" class="flex h-9 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="phone" required="" placeholder="+90 5XX XXX XX XX" data-testid="input-quote-phone" value=""></div></div><div data-replit-metadata="client/src/components/QuoteForm.tsx:167:18" data-component-name="div"><label data-replit-metadata="client/src/components/QuoteForm.tsx:168:20" data-component-name="Label" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="email">E-posta *</label><input data-replit-metadata="client/src/components/QuoteForm.tsx:169:20" data-component-name="Input" type="email" class="flex h-9 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="email" required="" placeholder="eposta@adresiniz.com" data-testid="input-quote-email" value=""></div><div data-replit-metadata="client/src/components/QuoteForm.tsx:186:18" data-component-name="div"><label data-replit-metadata="client/src/components/QuoteForm.tsx:187:20" data-component-name="Label" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="projectType">Çekim Kategorisi *</label><button type="button" role="combobox" aria-controls="radix-:r0:" aria-expanded="false" aria-required="true" aria-autocomplete="none" dir="ltr" data-state="closed" data-placeholder="" data-replit-metadata="client/src/components/QuoteForm.tsx:196:22" data-component-name="SelectTrigger" class="flex h-9 w-full items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background data-[placeholder]:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 [&amp;&gt;span]:line-clamp-1" data-testid="select-quote-project-type"><span data-replit-metadata="client/src/components/QuoteForm.tsx:200:24" data-component-name="SelectValue" style="pointer-events: none;">Kategori seçiniz</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down h-4 w-4 opacity-50" data-replit-metadata="client/src/components/ui/select.tsx:29:6" data-component-name="ChevronDown" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg></button><select aria-hidden="true" required="" tabindex="-1" style="position: absolute; border: 0px; width: 1px; height: 1px; padding: 0px; margin: -1px; overflow: hidden; clip: rect(0px, 0px, 0px, 0px); white-space: nowrap; overflow-wrap: normal;"><option value="video">Video Prodüksiyon</option><option value="photo">Havadan Fotoğraf</option><option value="construction">Şantiye İzleme</option><option value="realestate">Gayrimenkul Görüntüleme</option><option value="event">Organizasyon Çekimi</option><option value="other">Farklı Proje</option></select></div><div data-replit-metadata="client/src/components/QuoteForm.tsx:215:18" data-component-name="div"><label data-replit-metadata="client/src/components/QuoteForm.tsx:216:20" data-component-name="Label" class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70" for="message">Proje Detayları *</label><textarea data-replit-metadata="client/src/components/QuoteForm.tsx:217:20" data-component-name="Textarea" class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm" id="message" required="" placeholder="Projenizin kapsamı ve beklentileriniz hakkında bilgi veriniz..." rows="5" data-testid="textarea-quote-message"></textarea></div><button data-replit-metadata="client/src/components/QuoteForm.tsx:234:18" data-component-name="Button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover-elevate active-elevate-2 bg-primary text-primary-foreground border border-primary-border min-h-10 rounded-md px-8 w-full" type="submit" data-testid="button-submit-quote">Teklif Talep Et</button></form></div></div></div><div data-replit-metadata="client/src/components/QuoteForm.tsx:255:10" data-component-name="div" class="space-y-6"><div data-replit-metadata="client/src/components/QuoteForm.tsx:256:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm"><div data-replit-metadata="client/src/components/QuoteForm.tsx:257:14" data-component-name="CardContent" class="p-6"><div data-replit-metadata="client/src/components/QuoteForm.tsx:258:16" data-component-name="div" class="flex items-start gap-3 mb-4"><div data-replit-metadata="client/src/components/QuoteForm.tsx:259:18" data-component-name="div" class="p-2 rounded-lg bg-primary/10 text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-5 h-5" data-replit-metadata="client/src/components/QuoteForm.tsx:260:20" data-component-name="Clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></div><div data-replit-metadata="client/src/components/QuoteForm.tsx:262:18" data-component-name="div"><h3 data-replit-metadata="client/src/components/QuoteForm.tsx:263:20" data-component-name="h3" class="font-semibold mb-1">Çabuk Dönüş</h3><p data-replit-metadata="client/src/components/QuoteForm.tsx:264:20" data-component-name="p" class="text-sm text-muted-foreground">Bir iş günü içinde yanıt garantisi veriyoruz</p></div></div><div data-replit-metadata="client/src/components/QuoteForm.tsx:269:16" data-component-name="div" class="flex items-start gap-3 mb-4"><div data-replit-metadata="client/src/components/QuoteForm.tsx:270:18" data-component-name="div" class="p-2 rounded-lg bg-primary/10 text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-5 h-5" data-replit-metadata="client/src/components/QuoteForm.tsx:271:20" data-component-name="CheckCircle"><path d="M21.801 10A10 10 0 1 1 17 3.335"></path><path d="m9 11 3 3L22 4"></path></svg></div><div data-replit-metadata="client/src/components/QuoteForm.tsx:273:18" data-component-name="div"><h3 data-replit-metadata="client/src/components/QuoteForm.tsx:274:20" data-component-name="h3" class="font-semibold mb-1">Uzman Rehberlik</h3><p data-replit-metadata="client/src/components/QuoteForm.tsx:275:20" data-component-name="p" class="text-sm text-muted-foreground">Projeniz için en uygun çözümü birlikte planlarız</p></div></div><div data-replit-metadata="client/src/components/QuoteForm.tsx:280:16" data-component-name="div" class="flex items-start gap-3"><div data-replit-metadata="client/src/components/QuoteForm.tsx:281:18" data-component-name="div" class="p-2 rounded-lg bg-primary/10 text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-5 h-5" data-replit-metadata="client/src/components/QuoteForm.tsx:282:20" data-component-name="Shield"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg></div><div data-replit-metadata="client/src/components/QuoteForm.tsx:284:18" data-component-name="div"><h3 data-replit-metadata="client/src/components/QuoteForm.tsx:285:20" data-component-name="h3" class="font-semibold mb-1">Bilgi Güvenliği</h3><p data-replit-metadata="client/src/components/QuoteForm.tsx:286:20" data-component-name="p" class="text-sm text-muted-foreground">Verileriniz gizlilik ilkesiyle korunur</p></div></div></div></div><div data-replit-metadata="client/src/components/QuoteForm.tsx:294:12" data-component-name="Card" class="shadcn-card rounded-xl border border-card-border shadow-sm bg-primary text-primary-foreground"><div data-replit-metadata="client/src/components/QuoteForm.tsx:295:14" data-component-name="CardContent" class="p-6 text-center"><p data-replit-metadata="client/src/components/QuoteForm.tsx:296:16" data-component-name="p" class="text-2xl font-bold mb-2">%15 Avantaj</p><p data-replit-metadata="client/src/components/QuoteForm.tsx:297:16" data-component-name="p" class="text-sm opacity-90">Yeni müşterilerimize özel fırsat!<br data-replit-metadata="client/src/components/QuoteForm.tsx:299:18" data-component-name="br">Şimdi fiyat isteyin.</p></div></div></div></div></div></section><section data-replit-metadata="client/src/components/Testimonials.tsx:34:4" data-component-name="section" class="py-16 md:py-24 bg-background"><div data-replit-metadata="client/src/components/Testimonials.tsx:35:6" data-component-name="div" class="max-w-7xl mx-auto px-4 md:px-6"><div data-replit-metadata="client/src/components/Testimonials.tsx:36:8" data-component-name="div" class="text-center mb-12"><h2 data-replit-metadata="client/src/components/Testimonials.tsx:37:10" data-component-name="h2" class="text-2xl md:text-4xl font-bold text-foreground mb-4">Müşteri Deneyimleri</h2><p data-replit-metadata="client/src/components/Testimonials.tsx:40:10" data-component-name="p" class="text-base md:text-lg text-muted-foreground max-w-2xl mx-auto">Çanakkale genelinde onlarca başarılı proje gerçekleştirdik. Müşterilerimizin değerlendirmeleri.</p></div><div data-replit-metadata="client/src/components/Testimonials.tsx:45:8" data-component-name="div" class="grid md:grid-cols-3 gap-8"><div data-replit-metadata="client/src/components/Testimonials.tsx:47:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm hover-elevate active-elevate-2 transition-all" data-testid="card-testimonial-0"><div data-replit-metadata="client/src/components/Testimonials.tsx:52:14" data-component-name="CardContent" class="p-6"><div data-replit-metadata="client/src/components/Testimonials.tsx:53:16" data-component-name="div" class="flex items-center gap-4 mb-4"><span data-replit-metadata="client/src/components/Testimonials.tsx:54:18" data-component-name="Avatar" class="after:content-[''] after:block after:absolute after:inset-0 after:rounded-full after:pointer-events-none after:border after:border-black/10 dark:after:border-white/10 relative flex shrink-0 overflow-hidden rounded-full w-16 h-16"><img data-replit-metadata="client/src/components/Testimonials.tsx:55:20" data-component-name="AvatarImage" class="aspect-square h-full w-full" alt="Hakan Kaya - drone çekimi müşteri görüşü" title="Hakan Kaya" src="/@fs/home/runner/workspace/attached_assets/generated_images/business_client_testimonial_portrait.png"></span><div data-replit-metadata="client/src/components/Testimonials.tsx:62:18" data-component-name="div"><p data-replit-metadata="client/src/components/Testimonials.tsx:63:20" data-component-name="p" class="font-semibold text-foreground">Hakan Kaya</p><p data-replit-metadata="client/src/components/Testimonials.tsx:64:20" data-component-name="p" class="text-sm text-muted-foreground">Kaya Yapı A.Ş.</p></div></div><div data-replit-metadata="client/src/components/Testimonials.tsx:67:16" data-component-name="div" class="flex gap-1 mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-primary text-primary" data-replit-metadata="client/src/components/Testimonials.tsx:69:20" data-component-name="Star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-primary text-primary" data-replit-metadata="client/src/components/Testimonials.tsx:69:20" data-component-name="Star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-primary text-primary" data-replit-metadata="client/src/components/Testimonials.tsx:69:20" data-component-name="Star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-primary text-primary" data-replit-metadata="client/src/components/Testimonials.tsx:69:20" data-component-name="Star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-primary text-primary" data-replit-metadata="client/src/components/Testimonials.tsx:69:20" data-component-name="Star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div><p data-replit-metadata="client/src/components/Testimonials.tsx:72:16" data-component-name="p" class="text-sm text-muted-foreground leading-relaxed">"Yapı projemizin tüm aşamalarını drone ile belgeledik. Teknik yeterlilik ve görsel kalite beklentilerimizin üzerindeydi. Çanakkale'de havadan çekim denince akla ilk gelen isim!"</p></div></div><div data-replit-metadata="client/src/components/Testimonials.tsx:47:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm hover-elevate active-elevate-2 transition-all" data-testid="card-testimonial-1"><div data-replit-metadata="client/src/components/Testimonials.tsx:52:14" data-component-name="CardContent" class="p-6"><div data-replit-metadata="client/src/components/Testimonials.tsx:53:16" data-component-name="div" class="flex items-center gap-4 mb-4"><span data-replit-metadata="client/src/components/Testimonials.tsx:54:18" data-component-name="Avatar" class="after:content-[''] after:block after:absolute after:inset-0 after:rounded-full after:pointer-events-none after:border after:border-black/10 dark:after:border-white/10 relative flex shrink-0 overflow-hidden rounded-full w-16 h-16"><img data-replit-metadata="client/src/components/Testimonials.tsx:55:20" data-component-name="AvatarImage" class="aspect-square h-full w-full" alt="Elif Arslan - drone çekimi müşteri görüşü" title="Elif Arslan" src="/@fs/home/runner/workspace/attached_assets/generated_images/architect_client_testimonial_portrait.png"></span><div data-replit-metadata="client/src/components/Testimonials.tsx:62:18" data-component-name="div"><p data-replit-metadata="client/src/components/Testimonials.tsx:63:20" data-component-name="p" class="font-semibold text-foreground">Elif Arslan</p><p data-replit-metadata="client/src/components/Testimonials.tsx:64:20" data-component-name="p" class="text-sm text-muted-foreground">Arslan Emlak</p></div></div><div data-replit-metadata="client/src/components/Testimonials.tsx:67:16" data-component-name="div" class="flex gap-1 mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-primary text-primary" data-replit-metadata="client/src/components/Testimonials.tsx:69:20" data-component-name="Star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-primary text-primary" data-replit-metadata="client/src/components/Testimonials.tsx:69:20" data-component-name="Star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-primary text-primary" data-replit-metadata="client/src/components/Testimonials.tsx:69:20" data-component-name="Star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-primary text-primary" data-replit-metadata="client/src/components/Testimonials.tsx:69:20" data-component-name="Star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-primary text-primary" data-replit-metadata="client/src/components/Testimonials.tsx:69:20" data-component-name="Star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div><p data-replit-metadata="client/src/components/Testimonials.tsx:72:16" data-component-name="p" class="text-sm text-muted-foreground leading-relaxed">"Portföyümüzdeki lüks konutlar için havadan görüntüler çektirdik. Potansiyel alıcıların ilgisi gözle görülür şekilde arttı. İşlerinde uzman bir ekip, gönül rahatlığıyla önerebilirim."</p></div></div><div data-replit-metadata="client/src/components/Testimonials.tsx:47:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm hover-elevate active-elevate-2 transition-all" data-testid="card-testimonial-2"><div data-replit-metadata="client/src/components/Testimonials.tsx:52:14" data-component-name="CardContent" class="p-6"><div data-replit-metadata="client/src/components/Testimonials.tsx:53:16" data-component-name="div" class="flex items-center gap-4 mb-4"><span data-replit-metadata="client/src/components/Testimonials.tsx:54:18" data-component-name="Avatar" class="after:content-[''] after:block after:absolute after:inset-0 after:rounded-full after:pointer-events-none after:border after:border-black/10 dark:after:border-white/10 relative flex shrink-0 overflow-hidden rounded-full w-16 h-16"><img data-replit-metadata="client/src/components/Testimonials.tsx:55:20" data-component-name="AvatarImage" class="aspect-square h-full w-full" alt="Burak Şahin - drone çekimi müşteri görüşü" title="Burak Şahin" src="/@fs/home/runner/workspace/attached_assets/generated_images/developer_client_testimonial_portrait.png"></span><div data-replit-metadata="client/src/components/Testimonials.tsx:62:18" data-component-name="div"><p data-replit-metadata="client/src/components/Testimonials.tsx:63:20" data-component-name="p" class="font-semibold text-foreground">Burak Şahin</p><p data-replit-metadata="client/src/components/Testimonials.tsx:64:20" data-component-name="p" class="text-sm text-muted-foreground">Şahin Events</p></div></div><div data-replit-metadata="client/src/components/Testimonials.tsx:67:16" data-component-name="div" class="flex gap-1 mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-primary text-primary" data-replit-metadata="client/src/components/Testimonials.tsx:69:20" data-component-name="Star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-primary text-primary" data-replit-metadata="client/src/components/Testimonials.tsx:69:20" data-component-name="Star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-primary text-primary" data-replit-metadata="client/src/components/Testimonials.tsx:69:20" data-component-name="Star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-primary text-primary" data-replit-metadata="client/src/components/Testimonials.tsx:69:20" data-component-name="Star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-primary text-primary" data-replit-metadata="client/src/components/Testimonials.tsx:69:20" data-component-name="Star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div><p data-replit-metadata="client/src/components/Testimonials.tsx:72:16" data-component-name="p" class="text-sm text-muted-foreground leading-relaxed">"Nikah törenimiz için havadan çekim yaptırdık. Elde edilen görüntüler olağanüstüydü! Video ve fotoğrafların her karesi profesyonel dokunuşu yansıtıyor. Kesinlikle tercih edilmeli."</p></div></div></div></div></section><section data-replit-metadata="client/src/components/References.tsx:16:4" data-component-name="section" class="py-16 md:py-24 bg-muted/30"><div data-replit-metadata="client/src/components/References.tsx:17:6" data-component-name="div" class="max-w-7xl mx-auto px-4 md:px-6"><div data-replit-metadata="client/src/components/References.tsx:18:8" data-component-name="div" class="text-center mb-12"><h2 data-replit-metadata="client/src/components/References.tsx:19:10" data-component-name="h2" class="text-2xl md:text-4xl font-bold text-foreground mb-4">İş Ortaklarımız</h2><p data-replit-metadata="client/src/components/References.tsx:22:10" data-component-name="p" class="text-base md:text-lg text-muted-foreground max-w-2xl mx-auto">Çanakkale ve çevresinin saygın kuruluşları bizimle çalışıyor.</p></div><div data-replit-metadata="client/src/components/References.tsx:27:8" data-component-name="div" class="grid grid-cols-2 md:grid-cols-4 gap-6"><div data-replit-metadata="client/src/components/References.tsx:29:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm hover-elevate active-elevate-2 transition-all cursor-default" data-testid="card-reference-0"><div data-replit-metadata="client/src/components/References.tsx:34:14" data-component-name="CardContent" class="p-6 px-4 py-6 flex items-center justify-center min-h-24"><p data-replit-metadata="client/src/components/References.tsx:35:16" data-component-name="p" class="text-base font-semibold text-center text-foreground">Çanakkale Valiliği</p></div></div><div data-replit-metadata="client/src/components/References.tsx:29:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm hover-elevate active-elevate-2 transition-all cursor-default" data-testid="card-reference-1"><div data-replit-metadata="client/src/components/References.tsx:34:14" data-component-name="CardContent" class="p-6 px-4 py-6 flex items-center justify-center min-h-24"><p data-replit-metadata="client/src/components/References.tsx:35:16" data-component-name="p" class="text-base font-semibold text-center text-foreground">18 Mart Üniversitesi</p></div></div><div data-replit-metadata="client/src/components/References.tsx:29:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm hover-elevate active-elevate-2 transition-all cursor-default" data-testid="card-reference-2"><div data-replit-metadata="client/src/components/References.tsx:34:14" data-component-name="CardContent" class="p-6 px-4 py-6 flex items-center justify-center min-h-24"><p data-replit-metadata="client/src/components/References.tsx:35:16" data-component-name="p" class="text-base font-semibold text-center text-foreground">Kaya Yapı A.Ş.</p></div></div><div data-replit-metadata="client/src/components/References.tsx:29:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm hover-elevate active-elevate-2 transition-all cursor-default" data-testid="card-reference-3"><div data-replit-metadata="client/src/components/References.tsx:34:14" data-component-name="CardContent" class="p-6 px-4 py-6 flex items-center justify-center min-h-24"><p data-replit-metadata="client/src/components/References.tsx:35:16" data-component-name="p" class="text-base font-semibold text-center text-foreground">Arslan Emlak</p></div></div><div data-replit-metadata="client/src/components/References.tsx:29:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm hover-elevate active-elevate-2 transition-all cursor-default" data-testid="card-reference-4"><div data-replit-metadata="client/src/components/References.tsx:34:14" data-component-name="CardContent" class="p-6 px-4 py-6 flex items-center justify-center min-h-24"><p data-replit-metadata="client/src/components/References.tsx:35:16" data-component-name="p" class="text-base font-semibold text-center text-foreground">Şahin Events</p></div></div><div data-replit-metadata="client/src/components/References.tsx:29:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm hover-elevate active-elevate-2 transition-all cursor-default" data-testid="card-reference-5"><div data-replit-metadata="client/src/components/References.tsx:34:14" data-component-name="CardContent" class="p-6 px-4 py-6 flex items-center justify-center min-h-24"><p data-replit-metadata="client/src/components/References.tsx:35:16" data-component-name="p" class="text-base font-semibold text-center text-foreground">Gelibolu Marina</p></div></div><div data-replit-metadata="client/src/components/References.tsx:29:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm hover-elevate active-elevate-2 transition-all cursor-default" data-testid="card-reference-6"><div data-replit-metadata="client/src/components/References.tsx:34:14" data-component-name="CardContent" class="p-6 px-4 py-6 flex items-center justify-center min-h-24"><p data-replit-metadata="client/src/components/References.tsx:35:16" data-component-name="p" class="text-base font-semibold text-center text-foreground">Ege Turizm</p></div></div><div data-replit-metadata="client/src/components/References.tsx:29:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm hover-elevate active-elevate-2 transition-all cursor-default" data-testid="card-reference-7"><div data-replit-metadata="client/src/components/References.tsx:34:14" data-component-name="CardContent" class="p-6 px-4 py-6 flex items-center justify-center min-h-24"><p data-replit-metadata="client/src/components/References.tsx:35:16" data-component-name="p" class="text-base font-semibold text-center text-foreground">Atlas Mimarlık</p></div></div></div></div></section><section data-replit-metadata="client/src/components/Portfolio.tsx:25:4" data-component-name="section" id="portfolio" class="py-16 md:py-24 bg-background"><div data-replit-metadata="client/src/components/Portfolio.tsx:26:6" data-component-name="div" class="max-w-7xl mx-auto px-4 md:px-6"><div data-replit-metadata="client/src/components/Portfolio.tsx:27:8" data-component-name="div" class="text-center mb-12"><h2 data-replit-metadata="client/src/components/Portfolio.tsx:28:10" data-component-name="h2" class="text-2xl md:text-4xl font-bold text-foreground mb-4">Çalışmalarımız</h2><p data-replit-metadata="client/src/components/Portfolio.tsx:31:10" data-component-name="p" class="text-base md:text-lg text-muted-foreground max-w-2xl mx-auto">Çanakkale bölgesinde tamamladığımız profesyonel havadan çekim projeleri.</p></div><div data-replit-metadata="client/src/components/Portfolio.tsx:36:8" data-component-name="div" class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4"><div data-replit-metadata="client/src/components/Portfolio.tsx:38:12" data-component-name="div" class="relative aspect-square overflow-hidden rounded-xl group cursor-pointer hover-elevate active-elevate-2 transition-all" data-testid="portfolio-item-0"><img data-replit-metadata="client/src/components/Portfolio.tsx:47:14" data-component-name="img" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='400'%3E%3Crect width='400' height='400' fill='%23e5e7eb'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-family='sans-serif' font-size='18' fill='%239ca3af'%3EGörsel Yok%3C/text%3E%3C/svg%3E" alt="Çanakkale boğazı drone görüntüsü" title="Boğaz Manzarası" class="w-full h-full object-cover" loading="lazy"><div data-replit-metadata="client/src/components/Portfolio.tsx:54:14" data-component-name="div" class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"><div data-replit-metadata="client/src/components/Portfolio.tsx:62:16" data-component-name="div" class="absolute bottom-0 left-0 right-0 p-4"><p data-replit-metadata="client/src/components/Portfolio.tsx:63:18" data-component-name="p" class="text-white font-semibold">Boğaz Manzarası</p><p data-replit-metadata="client/src/components/Portfolio.tsx:64:18" data-component-name="p" class="text-white/80 text-sm capitalize">Fotoğraf</p></div></div></div><div data-replit-metadata="client/src/components/Portfolio.tsx:38:12" data-component-name="div" class="relative aspect-square overflow-hidden rounded-xl group cursor-pointer hover-elevate active-elevate-2 transition-all" data-testid="portfolio-item-1"><img data-replit-metadata="client/src/components/Portfolio.tsx:47:14" data-component-name="img" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='400'%3E%3Crect width='400' height='400' fill='%23e5e7eb'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-family='sans-serif' font-size='18' fill='%239ca3af'%3EGörsel Yok%3C/text%3E%3C/svg%3E" alt="Kurumsal drone video çekimi" title="Kurumsal Tanıtım" class="w-full h-full object-cover" loading="lazy"><div data-replit-metadata="client/src/components/Portfolio.tsx:54:14" data-component-name="div" class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"><div data-replit-metadata="client/src/components/Portfolio.tsx:56:18" data-component-name="div" class="absolute inset-0 flex items-center justify-center"><div data-replit-metadata="client/src/components/Portfolio.tsx:57:20" data-component-name="div" class="w-16 h-16 rounded-full bg-primary/90 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play w-8 h-8 text-primary-foreground ml-1" data-replit-metadata="client/src/components/Portfolio.tsx:58:22" data-component-name="Play"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg></div></div><div data-replit-metadata="client/src/components/Portfolio.tsx:62:16" data-component-name="div" class="absolute bottom-0 left-0 right-0 p-4"><p data-replit-metadata="client/src/components/Portfolio.tsx:63:18" data-component-name="p" class="text-white font-semibold">Kurumsal Tanıtım</p><p data-replit-metadata="client/src/components/Portfolio.tsx:64:18" data-component-name="p" class="text-white/80 text-sm capitalize">Video</p></div></div></div><div data-replit-metadata="client/src/components/Portfolio.tsx:38:12" data-component-name="div" class="relative aspect-square overflow-hidden rounded-xl group cursor-pointer hover-elevate active-elevate-2 transition-all" data-testid="portfolio-item-2"><img data-replit-metadata="client/src/components/Portfolio.tsx:47:14" data-component-name="img" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='400'%3E%3Crect width='400' height='400' fill='%23e5e7eb'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-family='sans-serif' font-size='18' fill='%239ca3af'%3EGörsel Yok%3C/text%3E%3C/svg%3E" alt="Şantiye drone izleme görüntüsü" title="Şantiye Belgeleme" class="w-full h-full object-cover" loading="lazy"><div data-replit-metadata="client/src/components/Portfolio.tsx:54:14" data-component-name="div" class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"><div data-replit-metadata="client/src/components/Portfolio.tsx:62:16" data-component-name="div" class="absolute bottom-0 left-0 right-0 p-4"><p data-replit-metadata="client/src/components/Portfolio.tsx:63:18" data-component-name="p" class="text-white font-semibold">Şantiye Belgeleme</p><p data-replit-metadata="client/src/components/Portfolio.tsx:64:18" data-component-name="p" class="text-white/80 text-sm capitalize">Fotoğraf</p></div></div></div><div data-replit-metadata="client/src/components/Portfolio.tsx:38:12" data-component-name="div" class="relative aspect-square overflow-hidden rounded-xl group cursor-pointer hover-elevate active-elevate-2 transition-all" data-testid="portfolio-item-3"><img data-replit-metadata="client/src/components/Portfolio.tsx:47:14" data-component-name="img" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='400'%3E%3Crect width='400' height='400' fill='%23e5e7eb'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-family='sans-serif' font-size='18' fill='%239ca3af'%3EGörsel Yok%3C/text%3E%3C/svg%3E" alt="Nikah töreni drone çekimi" title="Nikah Görüntüleri" class="w-full h-full object-cover" loading="lazy"><div data-replit-metadata="client/src/components/Portfolio.tsx:54:14" data-component-name="div" class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"><div data-replit-metadata="client/src/components/Portfolio.tsx:56:18" data-component-name="div" class="absolute inset-0 flex items-center justify-center"><div data-replit-metadata="client/src/components/Portfolio.tsx:57:20" data-component-name="div" class="w-16 h-16 rounded-full bg-primary/90 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play w-8 h-8 text-primary-foreground ml-1" data-replit-metadata="client/src/components/Portfolio.tsx:58:22" data-component-name="Play"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg></div></div><div data-replit-metadata="client/src/components/Portfolio.tsx:62:16" data-component-name="div" class="absolute bottom-0 left-0 right-0 p-4"><p data-replit-metadata="client/src/components/Portfolio.tsx:63:18" data-component-name="p" class="text-white font-semibold">Nikah Görüntüleri</p><p data-replit-metadata="client/src/components/Portfolio.tsx:64:18" data-component-name="p" class="text-white/80 text-sm capitalize">Video</p></div></div></div><div data-replit-metadata="client/src/components/Portfolio.tsx:38:12" data-component-name="div" class="relative aspect-square overflow-hidden rounded-xl group cursor-pointer hover-elevate active-elevate-2 transition-all" data-testid="portfolio-item-4"><img data-replit-metadata="client/src/components/Portfolio.tsx:47:14" data-component-name="img" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='400'%3E%3Crect width='400' height='400' fill='%23e5e7eb'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-family='sans-serif' font-size='18' fill='%239ca3af'%3EGörsel Yok%3C/text%3E%3C/svg%3E" alt="Gayrimenkul drone fotoğrafı" title="Villa Görselleri" class="w-full h-full object-cover" loading="lazy"><div data-replit-metadata="client/src/components/Portfolio.tsx:54:14" data-component-name="div" class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"><div data-replit-metadata="client/src/components/Portfolio.tsx:62:16" data-component-name="div" class="absolute bottom-0 left-0 right-0 p-4"><p data-replit-metadata="client/src/components/Portfolio.tsx:63:18" data-component-name="p" class="text-white font-semibold">Villa Görselleri</p><p data-replit-metadata="client/src/components/Portfolio.tsx:64:18" data-component-name="p" class="text-white/80 text-sm capitalize">Fotoğraf</p></div></div></div><div data-replit-metadata="client/src/components/Portfolio.tsx:38:12" data-component-name="div" class="relative aspect-square overflow-hidden rounded-xl group cursor-pointer hover-elevate active-elevate-2 transition-all" data-testid="portfolio-item-5"><img data-replit-metadata="client/src/components/Portfolio.tsx:47:14" data-component-name="img" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='400'%3E%3Crect width='400' height='400' fill='%23e5e7eb'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-family='sans-serif' font-size='18' fill='%239ca3af'%3EGörsel Yok%3C/text%3E%3C/svg%3E" alt="Yat limanı drone görüntüsü" title="Marina Panorama" class="w-full h-full object-cover" loading="lazy"><div data-replit-metadata="client/src/components/Portfolio.tsx:54:14" data-component-name="div" class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"><div data-replit-metadata="client/src/components/Portfolio.tsx:62:16" data-component-name="div" class="absolute bottom-0 left-0 right-0 p-4"><p data-replit-metadata="client/src/components/Portfolio.tsx:63:18" data-component-name="p" class="text-white font-semibold">Marina Panorama</p><p data-replit-metadata="client/src/components/Portfolio.tsx:64:18" data-component-name="p" class="text-white/80 text-sm capitalize">Fotoğraf</p></div></div></div><div data-replit-metadata="client/src/components/Portfolio.tsx:38:12" data-component-name="div" class="relative aspect-square overflow-hidden rounded-xl group cursor-pointer hover-elevate active-elevate-2 transition-all" data-testid="portfolio-item-6"><img data-replit-metadata="client/src/components/Portfolio.tsx:47:14" data-component-name="img" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='400'%3E%3Crect width='400' height='400' fill='%23e5e7eb'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-family='sans-serif' font-size='18' fill='%239ca3af'%3EGörsel Yok%3C/text%3E%3C/svg%3E" alt="Tarihi mekanlar drone çekimi" title="Tarihi Alanlar" class="w-full h-full object-cover" loading="lazy"><div data-replit-metadata="client/src/components/Portfolio.tsx:54:14" data-component-name="div" class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"><div data-replit-metadata="client/src/components/Portfolio.tsx:62:16" data-component-name="div" class="absolute bottom-0 left-0 right-0 p-4"><p data-replit-metadata="client/src/components/Portfolio.tsx:63:18" data-component-name="p" class="text-white font-semibold">Tarihi Alanlar</p><p data-replit-metadata="client/src/components/Portfolio.tsx:64:18" data-component-name="p" class="text-white/80 text-sm capitalize">Fotoğraf</p></div></div></div><div data-replit-metadata="client/src/components/Portfolio.tsx:38:12" data-component-name="div" class="relative aspect-square overflow-hidden rounded-xl group cursor-pointer hover-elevate active-elevate-2 transition-all" data-testid="portfolio-item-7"><img data-replit-metadata="client/src/components/Portfolio.tsx:47:14" data-component-name="img" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='400'%3E%3Crect width='400' height='400' fill='%23e5e7eb'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-family='sans-serif' font-size='18' fill='%239ca3af'%3EGörsel Yok%3C/text%3E%3C/svg%3E" alt="Anıt havadan video çekimi" title="Anıt Görünümü" class="w-full h-full object-cover" loading="lazy"><div data-replit-metadata="client/src/components/Portfolio.tsx:54:14" data-component-name="div" class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"><div data-replit-metadata="client/src/components/Portfolio.tsx:56:18" data-component-name="div" class="absolute inset-0 flex items-center justify-center"><div data-replit-metadata="client/src/components/Portfolio.tsx:57:20" data-component-name="div" class="w-16 h-16 rounded-full bg-primary/90 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play w-8 h-8 text-primary-foreground ml-1" data-replit-metadata="client/src/components/Portfolio.tsx:58:22" data-component-name="Play"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg></div></div><div data-replit-metadata="client/src/components/Portfolio.tsx:62:16" data-component-name="div" class="absolute bottom-0 left-0 right-0 p-4"><p data-replit-metadata="client/src/components/Portfolio.tsx:63:18" data-component-name="p" class="text-white font-semibold">Anıt Görünümü</p><p data-replit-metadata="client/src/components/Portfolio.tsx:64:18" data-component-name="p" class="text-white/80 text-sm capitalize">Video</p></div></div></div><div data-replit-metadata="client/src/components/Portfolio.tsx:38:12" data-component-name="div" class="relative aspect-square overflow-hidden rounded-xl group cursor-pointer hover-elevate active-elevate-2 transition-all" data-testid="portfolio-item-8"><img data-replit-metadata="client/src/components/Portfolio.tsx:47:14" data-component-name="img" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='400'%3E%3Crect width='400' height='400' fill='%23e5e7eb'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-family='sans-serif' font-size='18' fill='%239ca3af'%3EGörsel Yok%3C/text%3E%3C/svg%3E" alt="Tarımsal alan drone görüntüsü" title="Tarla Haritası" class="w-full h-full object-cover" loading="lazy"><div data-replit-metadata="client/src/components/Portfolio.tsx:54:14" data-component-name="div" class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"><div data-replit-metadata="client/src/components/Portfolio.tsx:62:16" data-component-name="div" class="absolute bottom-0 left-0 right-0 p-4"><p data-replit-metadata="client/src/components/Portfolio.tsx:63:18" data-component-name="p" class="text-white font-semibold">Tarla Haritası</p><p data-replit-metadata="client/src/components/Portfolio.tsx:64:18" data-component-name="p" class="text-white/80 text-sm capitalize">Fotoğraf</p></div></div></div><div data-replit-metadata="client/src/components/Portfolio.tsx:38:12" data-component-name="div" class="relative aspect-square overflow-hidden rounded-xl group cursor-pointer hover-elevate active-elevate-2 transition-all" data-testid="portfolio-item-9"><img data-replit-metadata="client/src/components/Portfolio.tsx:47:14" data-component-name="img" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='400'%3E%3Crect width='400' height='400' fill='%23e5e7eb'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-family='sans-serif' font-size='18' fill='%239ca3af'%3EGörsel Yok%3C/text%3E%3C/svg%3E" alt="Üniversite kampüsü drone fotoğrafı" title="Kampüs Çekimi" class="w-full h-full object-cover" loading="lazy"><div data-replit-metadata="client/src/components/Portfolio.tsx:54:14" data-component-name="div" class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"><div data-replit-metadata="client/src/components/Portfolio.tsx:62:16" data-component-name="div" class="absolute bottom-0 left-0 right-0 p-4"><p data-replit-metadata="client/src/components/Portfolio.tsx:63:18" data-component-name="p" class="text-white font-semibold">Kampüs Çekimi</p><p data-replit-metadata="client/src/components/Portfolio.tsx:64:18" data-component-name="p" class="text-white/80 text-sm capitalize">Fotoğraf</p></div></div></div><div data-replit-metadata="client/src/components/Portfolio.tsx:38:12" data-component-name="div" class="relative aspect-square overflow-hidden rounded-xl group cursor-pointer hover-elevate active-elevate-2 transition-all" data-testid="portfolio-item-10"><img data-replit-metadata="client/src/components/Portfolio.tsx:47:14" data-component-name="img" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='400'%3E%3Crect width='400' height='400' fill='%23e5e7eb'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-family='sans-serif' font-size='18' fill='%239ca3af'%3EGörsel Yok%3C/text%3E%3C/svg%3E" alt="Sahil drone video çekimi" title="Kıyı Şeridi" class="w-full h-full object-cover" loading="lazy"><div data-replit-metadata="client/src/components/Portfolio.tsx:54:14" data-component-name="div" class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"><div data-replit-metadata="client/src/components/Portfolio.tsx:56:18" data-component-name="div" class="absolute inset-0 flex items-center justify-center"><div data-replit-metadata="client/src/components/Portfolio.tsx:57:20" data-component-name="div" class="w-16 h-16 rounded-full bg-primary/90 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play w-8 h-8 text-primary-foreground ml-1" data-replit-metadata="client/src/components/Portfolio.tsx:58:22" data-component-name="Play"><polygon points="6 3 20 12 6 21 6 3"></polygon></svg></div></div><div data-replit-metadata="client/src/components/Portfolio.tsx:62:16" data-component-name="div" class="absolute bottom-0 left-0 right-0 p-4"><p data-replit-metadata="client/src/components/Portfolio.tsx:63:18" data-component-name="p" class="text-white font-semibold">Kıyı Şeridi</p><p data-replit-metadata="client/src/components/Portfolio.tsx:64:18" data-component-name="p" class="text-white/80 text-sm capitalize">Video</p></div></div></div><div data-replit-metadata="client/src/components/Portfolio.tsx:38:12" data-component-name="div" class="relative aspect-square overflow-hidden rounded-xl group cursor-pointer hover-elevate active-elevate-2 transition-all" data-testid="portfolio-item-11"><img data-replit-metadata="client/src/components/Portfolio.tsx:47:14" data-component-name="img" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='400' height='400'%3E%3Crect width='400' height='400' fill='%23e5e7eb'/%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-family='sans-serif' font-size='18' fill='%239ca3af'%3EGörsel Yok%3C/text%3E%3C/svg%3E" alt="Şehir merkezi drone görüntüsü" title="Kent Silueti" class="w-full h-full object-cover" loading="lazy"><div data-replit-metadata="client/src/components/Portfolio.tsx:54:14" data-component-name="div" class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"><div data-replit-metadata="client/src/components/Portfolio.tsx:62:16" data-component-name="div" class="absolute bottom-0 left-0 right-0 p-4"><p data-replit-metadata="client/src/components/Portfolio.tsx:63:18" data-component-name="p" class="text-white font-semibold">Kent Silueti</p><p data-replit-metadata="client/src/components/Portfolio.tsx:64:18" data-component-name="p" class="text-white/80 text-sm capitalize">Fotoğraf</p></div></div></div></div></div></section><section data-replit-metadata="client/src/components/Contact.tsx:6:4" data-component-name="section" id="contact" class="py-16 md:py-24 bg-background"><div data-replit-metadata="client/src/components/Contact.tsx:7:6" data-component-name="div" class="max-w-7xl mx-auto px-4 md:px-6"><div data-replit-metadata="client/src/components/Contact.tsx:8:8" data-component-name="div" class="text-center mb-12"><h2 data-replit-metadata="client/src/components/Contact.tsx:9:10" data-component-name="h2" class="text-2xl md:text-4xl font-bold text-foreground mb-4">Bize Ulaşın</h2><p data-replit-metadata="client/src/components/Contact.tsx:12:10" data-component-name="p" class="text-base md:text-lg text-muted-foreground max-w-2xl mx-auto">Her türlü sorunuz için iletişime geçebilirsiniz. Size destek olmaktan memnuniyet duyarız.</p></div><div data-replit-metadata="client/src/components/Contact.tsx:17:8" data-component-name="div" class="grid lg:grid-cols-5 gap-8"><div data-replit-metadata="client/src/components/Contact.tsx:18:10" data-component-name="div" class="lg:col-span-3"><div data-replit-metadata="client/src/components/Contact.tsx:19:12" data-component-name="div" class="aspect-video rounded-xl overflow-hidden shadow-lg"><iframe data-replit-metadata="client/src/components/Contact.tsx:20:14" data-component-name="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3060.234567890123!2d26.4142!3d40.1553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDA5JzE5LjEiTiAyNsKwMjQnNTEuMSJF!5e0!3m2!1str!2str!4v1234567890123!5m2!1str!2str" width="100%" height="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Drone Çekimi Ofis Lokasyonu - Harita" style="border: 0px;"></iframe></div></div><div data-replit-metadata="client/src/components/Contact.tsx:33:10" data-component-name="div" class="lg:col-span-2 space-y-4"><div data-replit-metadata="client/src/components/Contact.tsx:34:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm"><div data-replit-metadata="client/src/components/Contact.tsx:35:14" data-component-name="CardContent" class="p-6"><div data-replit-metadata="client/src/components/Contact.tsx:36:16" data-component-name="div" class="flex items-start gap-3"><div data-replit-metadata="client/src/components/Contact.tsx:37:18" data-component-name="div" class="p-2 rounded-lg bg-primary/10 text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-5 h-5" data-replit-metadata="client/src/components/Contact.tsx:38:20" data-component-name="MapPin"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg></div><div data-replit-metadata="client/src/components/Contact.tsx:40:18" data-component-name="div"><h3 data-replit-metadata="client/src/components/Contact.tsx:41:20" data-component-name="h3" class="font-semibold mb-1 text-foreground">Adres Bilgisi</h3><p data-replit-metadata="client/src/components/Contact.tsx:42:20" data-component-name="p" class="text-sm text-muted-foreground">Esenler Mh. Ahmet Piriştina Cd.<br data-replit-metadata="client/src/components/Contact.tsx:44:22" data-component-name="br">No:19 Daire:17<br data-replit-metadata="client/src/components/Contact.tsx:46:22" data-component-name="br">Çanakkale 17000</p></div></div></div></div><div data-replit-metadata="client/src/components/Contact.tsx:54:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm"><div data-replit-metadata="client/src/components/Contact.tsx:55:14" data-component-name="CardContent" class="p-6"><div data-replit-metadata="client/src/components/Contact.tsx:56:16" data-component-name="div" class="flex items-start gap-3"><div data-replit-metadata="client/src/components/Contact.tsx:57:18" data-component-name="div" class="p-2 rounded-lg bg-primary/10 text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-5 h-5" data-replit-metadata="client/src/components/Contact.tsx:58:20" data-component-name="Phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></div><div data-replit-metadata="client/src/components/Contact.tsx:60:18" data-component-name="div"><h3 data-replit-metadata="client/src/components/Contact.tsx:61:20" data-component-name="h3" class="font-semibold mb-1 text-foreground">Telefon Hattı</h3><a data-replit-metadata="client/src/components/Contact.tsx:62:20" data-component-name="a" href="tel:+905347922531" class="text-sm text-primary hover:underline" data-testid="link-contact-phone" title="Drone Çekimi Telefon">+90 534 792 25 31</a></div></div></div></div><div data-replit-metadata="client/src/components/Contact.tsx:75:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm"><div data-replit-metadata="client/src/components/Contact.tsx:76:14" data-component-name="CardContent" class="p-6"><div data-replit-metadata="client/src/components/Contact.tsx:77:16" data-component-name="div" class="flex items-start gap-3"><div data-replit-metadata="client/src/components/Contact.tsx:78:18" data-component-name="div" class="p-2 rounded-lg bg-primary/10 text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-5 h-5" data-replit-metadata="client/src/components/Contact.tsx:79:20" data-component-name="Mail"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg></div><div data-replit-metadata="client/src/components/Contact.tsx:81:18" data-component-name="div"><h3 data-replit-metadata="client/src/components/Contact.tsx:82:20" data-component-name="h3" class="font-semibold mb-1 text-foreground">E-posta Adresi</h3><a data-replit-metadata="client/src/components/Contact.tsx:83:20" data-component-name="a" href="mailto:info@cozumcloud.com.tr" class="text-sm text-primary hover:underline" data-testid="link-contact-email" title="Drone Çekimi E-posta">info@cozumcloud.com.tr</a></div></div></div></div><div data-replit-metadata="client/src/components/Contact.tsx:96:12" data-component-name="Card" class="shadcn-card rounded-xl border bg-card border-card-border text-card-foreground shadow-sm"><div data-replit-metadata="client/src/components/Contact.tsx:97:14" data-component-name="CardContent" class="p-6"><div data-replit-metadata="client/src/components/Contact.tsx:98:16" data-component-name="div" class="flex items-start gap-3"><div data-replit-metadata="client/src/components/Contact.tsx:99:18" data-component-name="div" class="p-2 rounded-lg bg-primary/10 text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-5 h-5" data-replit-metadata="client/src/components/Contact.tsx:100:20" data-component-name="Clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></div><div data-replit-metadata="client/src/components/Contact.tsx:102:18" data-component-name="div"><h3 data-replit-metadata="client/src/components/Contact.tsx:103:20" data-component-name="h3" class="font-semibold mb-1 text-foreground">Mesai Saatleri</h3><p data-replit-metadata="client/src/components/Contact.tsx:104:20" data-component-name="p" class="text-sm text-muted-foreground">Pazartesi - Cuma: 09:00 - 18:00<br data-replit-metadata="client/src/components/Contact.tsx:106:22" data-component-name="br">Hafta Sonu: Randevu ile</p></div></div></div></div></div></div></div></section><footer data-replit-metadata="client/src/components/Footer.tsx:12:4" data-component-name="footer" class="bg-muted/50 border-t"><div data-replit-metadata="client/src/components/Footer.tsx:13:6" data-component-name="div" class="max-w-7xl mx-auto px-4 md:px-6 py-12"><div data-replit-metadata="client/src/components/Footer.tsx:14:8" data-component-name="div" class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-8"><div data-replit-metadata="client/src/components/Footer.tsx:15:10" data-component-name="div"><h3 data-replit-metadata="client/src/components/Footer.tsx:16:12" data-component-name="h3" class="text-xl font-bold text-primary mb-4">Drone Çekimi</h3><p data-replit-metadata="client/src/components/Footer.tsx:17:12" data-component-name="p" class="text-sm text-muted-foreground mb-4">Çanakkale'nin profesyonel havadan görüntüleme hizmeti. Video prodüksiyon ve fotoğrafçılık alanında tecrübeli kadromuzla hizmetinizdeyiz.</p></div><div data-replit-metadata="client/src/components/Footer.tsx:23:10" data-component-name="div"><h4 data-replit-metadata="client/src/components/Footer.tsx:24:12" data-component-name="h4" class="font-semibold text-foreground mb-4">Hızlı Erişim</h4><ul data-replit-metadata="client/src/components/Footer.tsx:25:12" data-component-name="ul" class="space-y-2"><li data-replit-metadata="client/src/components/Footer.tsx:26:14" data-component-name="li"><button data-replit-metadata="client/src/components/Footer.tsx:27:16" data-component-name="button" class="text-sm text-muted-foreground hover:text-primary transition-colors" data-testid="link-footer-home" title="Anasayfa - Drone Çekimi">Anasayfa</button></li><li data-replit-metadata="client/src/components/Footer.tsx:36:14" data-component-name="li"><button data-replit-metadata="client/src/components/Footer.tsx:37:16" data-component-name="button" class="text-sm text-muted-foreground hover:text-primary transition-colors" data-testid="link-footer-about" title="Biz Kimiz - Drone Çekimi">Biz Kimiz</button></li><li data-replit-metadata="client/src/components/Footer.tsx:46:14" data-component-name="li"><button data-replit-metadata="client/src/components/Footer.tsx:47:16" data-component-name="button" class="text-sm text-muted-foreground hover:text-primary transition-colors" data-testid="link-footer-services" title="Çözümlerimiz - Drone Çekimi">Çözümlerimiz</button></li><li data-replit-metadata="client/src/components/Footer.tsx:56:14" data-component-name="li"><button data-replit-metadata="client/src/components/Footer.tsx:57:16" data-component-name="button" class="text-sm text-muted-foreground hover:text-primary transition-colors" data-testid="link-footer-portfolio" title="Galeri - Drone Çekimi">Galeri</button></li><li data-replit-metadata="client/src/components/Footer.tsx:66:14" data-component-name="li"><button data-replit-metadata="client/src/components/Footer.tsx:67:16" data-component-name="button" class="text-sm text-muted-foreground hover:text-primary transition-colors" data-testid="link-footer-contact" title="Bize Ulaşın - Drone Çekimi">Bize Ulaşın</button></li></ul></div><div data-replit-metadata="client/src/components/Footer.tsx:79:10" data-component-name="div"><h4 data-replit-metadata="client/src/components/Footer.tsx:80:12" data-component-name="h4" class="font-semibold text-foreground mb-4">Çözümler</h4><ul data-replit-metadata="client/src/components/Footer.tsx:81:12" data-component-name="ul" class="space-y-2"><li data-replit-metadata="client/src/components/Footer.tsx:82:14" data-component-name="li"><span data-replit-metadata="client/src/components/Footer.tsx:83:16" data-component-name="span" class="text-sm text-muted-foreground">Video Prodüksiyon</span></li><li data-replit-metadata="client/src/components/Footer.tsx:85:14" data-component-name="li"><span data-replit-metadata="client/src/components/Footer.tsx:86:16" data-component-name="span" class="text-sm text-muted-foreground">Havadan Fotoğraf</span></li><li data-replit-metadata="client/src/components/Footer.tsx:88:14" data-component-name="li"><span data-replit-metadata="client/src/components/Footer.tsx:89:16" data-component-name="span" class="text-sm text-muted-foreground">Şantiye İzleme</span></li><li data-replit-metadata="client/src/components/Footer.tsx:91:14" data-component-name="li"><span data-replit-metadata="client/src/components/Footer.tsx:92:16" data-component-name="span" class="text-sm text-muted-foreground">Gayrimenkul Görüntüleme</span></li><li data-replit-metadata="client/src/components/Footer.tsx:94:14" data-component-name="li"><span data-replit-metadata="client/src/components/Footer.tsx:95:16" data-component-name="span" class="text-sm text-muted-foreground">Organizasyon Çekimi</span></li></ul></div><div data-replit-metadata="client/src/components/Footer.tsx:100:10" data-component-name="div"><h4 data-replit-metadata="client/src/components/Footer.tsx:101:12" data-component-name="h4" class="font-semibold text-foreground mb-4">İletişim Bilgileri</h4><ul data-replit-metadata="client/src/components/Footer.tsx:102:12" data-component-name="ul" class="space-y-2"><li data-replit-metadata="client/src/components/Footer.tsx:103:14" data-component-name="li"><span data-replit-metadata="client/src/components/Footer.tsx:104:16" data-component-name="span" class="text-sm text-muted-foreground">Çanakkale, Türkiye</span></li><li data-replit-metadata="client/src/components/Footer.tsx:106:14" data-component-name="li"><a data-replit-metadata="client/src/components/Footer.tsx:107:16" data-component-name="a" href="tel:+905347922531" class="text-sm text-muted-foreground hover:text-primary transition-colors" data-testid="link-footer-phone">+90 534 792 25 31</a></li><li data-replit-metadata="client/src/components/Footer.tsx:115:14" data-component-name="li"><a data-replit-metadata="client/src/components/Footer.tsx:116:16" data-component-name="a" href="mailto:info@cozumcloud.com.tr" class="text-sm text-muted-foreground hover:text-primary transition-colors" data-testid="link-footer-email">info@cozumcloud.com.tr</a></li></ul></div></div><div data-replit-metadata="client/src/components/Footer.tsx:128:8" data-component-name="div" class="border-t pt-8 flex flex-col sm:flex-row justify-between items-center gap-4"><p data-replit-metadata="client/src/components/Footer.tsx:129:10" data-component-name="p" class="text-sm text-muted-foreground">© 2024 Çanakkale Drone Çekimi. Tüm hakları saklıdır.</p><div data-replit-metadata="client/src/components/Footer.tsx:132:10" data-component-name="div" class="flex gap-4"><a data-replit-metadata="client/src/components/Footer.tsx:133:12" data-component-name="a" href="#" class="text-muted-foreground hover:text-primary transition-colors p-2 hover-elevate active-elevate-2 rounded-md" aria-label="Facebook" data-testid="link-social-facebook" title="Drone Çekimi Facebook"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook w-5 h-5" data-replit-metadata="client/src/components/Footer.tsx:140:14" data-component-name="Facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a><a data-replit-metadata="client/src/components/Footer.tsx:142:12" data-component-name="a" href="#" class="text-muted-foreground hover:text-primary transition-colors p-2 hover-elevate active-elevate-2 rounded-md" aria-label="Instagram" data-testid="link-social-instagram" title="Drone Çekimi Instagram"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram w-5 h-5" data-replit-metadata="client/src/components/Footer.tsx:149:14" data-component-name="Instagram"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a><a data-replit-metadata="client/src/components/Footer.tsx:151:12" data-component-name="a" href="#" class="text-muted-foreground hover:text-primary transition-colors p-2 hover-elevate active-elevate-2 rounded-md" aria-label="Twitter" data-testid="link-social-twitter" title="Drone Çekimi Twitter"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter w-5 h-5" data-replit-metadata="client/src/components/Footer.tsx:158:14" data-component-name="Twitter"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path></svg></a><a data-replit-metadata="client/src/components/Footer.tsx:160:12" data-component-name="a" href="#" class="text-muted-foreground hover:text-primary transition-colors p-2 hover-elevate active-elevate-2 rounded-md" aria-label="YouTube" data-testid="link-social-youtube" title="Drone Çekimi YouTube"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube w-5 h-5" data-replit-metadata="client/src/components/Footer.tsx:167:14" data-component-name="Youtube"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"></path><path d="m10 15 5-3-5-3z"></path></svg></a></div></div></div></footer><div data-replit-metadata="client/src/components/UrgencyBadge.tsx:13:4" data-component-name="div" class="fixed bottom-6 left-6 z-40 animate-pulse"><div data-replit-metadata="client/src/components/UrgencyBadge.tsx:14:6" data-component-name="Badge" class="whitespace-nowrap inline-flex items-center rounded-md border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover-elevate border-transparent px-4 py-3 text-sm font-semibold shadow-xl cursor-pointer bg-primary text-primary-foreground hover-elevate active-elevate-2" data-testid="badge-urgency"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles w-4 h-4 mr-2" data-replit-metadata="client/src/components/UrgencyBadge.tsx:19:8" data-component-name="Sparkles"><path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path><path d="M20 3v4"></path><path d="M22 5h-4"></path><path d="M4 17v2"></path><path d="M5 18H3"></path></svg>Yeni Müşterilere %15 Avantaj!</div></div><button data-replit-metadata="client/src/components/WhatsAppButton.tsx:9:4" data-component-name="button" class="w-16 h-16 rounded-full bg-[#25D366] text-white shadow-xl hover-elevate active-elevate-2 flex items-center justify-center transition-all" aria-label="WhatsApp ile iletişime geç" data-testid="button-whatsapp" title="WhatsApp ile Drone Çekimi ekibine ulaşın" style="position: fixed; bottom: 24px; right: 24px; z-index: 9999;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle w-8 h-8" data-replit-metadata="client/src/components/WhatsAppButton.tsx:22:6" data-component-name="MessageCircle"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path></svg></button></div></div>
    <script type="module" src="/src/main.tsx?v=gEVyMPSQ0CdXobBprAOcY"></script>
  
</body></html>