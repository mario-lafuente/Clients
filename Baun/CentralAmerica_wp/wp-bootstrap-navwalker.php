<!DOCTYPE html>
<html lang="en">
<head>
  <meta id="bb-bootstrap" data-current-user="{&quot;username&quot;: &quot;mlafuente&quot;, &quot;displayName&quot;: &quot;mario&quot;, &quot;uuid&quot;: &quot;{1cbc9888-e510-4835-b905-9e1620a0e43a}&quot;, &quot;firstName&quot;: &quot;mario&quot;, &quot;hasPremium&quot;: true, &quot;lastName&quot;: &quot;&quot;, &quot;avatarUrl&quot;: &quot;https://bitbucket.org/account/mlafuente/avatar/32/?ts=1497227227&quot;, &quot;isTeam&quot;: false, &quot;isSshEnabled&quot;: false, &quot;isKbdShortcutsEnabled&quot;: true, &quot;id&quot;: 9316029, &quot;isAuthenticated&quot;: true}"
data-atlassian-id="557058:c4066328-ff29-474a-90d8-02707c5c8125" />
  
  <script>
  window._experimentTiming = window._experimentTiming || {};
</script>


  
    
      <script>
        window._experimentTiming["variation\u002D1"] = new Date().getTime();
      </script>
      <script src="https://aes-artifacts--cdn.useast.atlassian.io/hashed/30szgIy7TL1CIxhIMlIoPd_mp-qHO5mjHLjPOWylTOk/variation-1/main.js" data-aes></script>
      <script>
        window._experimentTiming["variation\u002D1"] = new Date().getTime() -
          window._experimentTiming["variation\u002D1"];
      </script>
    
  

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta charset="utf-8">
  <title>
  baumdigital / Centralamerica-Wordpress 
  / source  / wp-content / themes / centralamerica / wp-bootstrap-navwalker.php
 &mdash; Bitbucket
</title>
  <script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(2),u=e(3),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}finally{f.emit("fn-end",[c.now()],t)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now()])}},{}],2:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],3:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],4:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=m(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){v[e]=m(e).concat(n)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(t)}function g(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var v={},y={},b={on:l,emit:t,get:w,listeners:m,context:n,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(2),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!x++){var e=h.info=NREUM.info,n=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+h.offset],null,"api");var t=d.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===d.readyState&&i()}function i(){f("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),f=e("handle"),c=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1026.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=n.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),f("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script>
  


<meta id="bb-canon-url" name="bb-canon-url" content="https://bitbucket.org">
<meta name="bb-api-canon-url" content="https://api.bitbucket.org">
<meta name="apitoken" content="{&quot;token&quot;: &quot;4F0MZfdPPSoTvJdopkcwIoNjekMeLMpssDao6zJhzht34r_iEVpGlXSHQ71-WNv_wFt5VApnh5zwVseaIPMi63pKPXIv0CExrg==&quot;, &quot;connectionId&quot;: 619065, &quot;expiration&quot;: 1497227979.688799}">

<meta name="bb-commit-hash" content="a23b1b22caa5">
<meta name="bb-app-node" content="app-107">
<meta name="bb-view-name" content="bitbucket.apps.repo2.views.filebrowse">
<meta name="ignore-whitespace" content="False">
<meta name="tab-size" content="None">
<meta name="locale" content="en">

<meta name="application-name" content="Bitbucket">
<meta name="apple-mobile-web-app-title" content="Bitbucket">
<meta name="theme-color" content="#205081">
<meta name="msapplication-TileColor" content="#205081">
<meta name="msapplication-TileImage" content="https://d301sr5gafysq2.cloudfront.net/a23b1b22caa5/img/logos/bitbucket/white-256.png">
<link rel="apple-touch-icon" sizes="192x192" type="image/png" href="https://d301sr5gafysq2.cloudfront.net/a23b1b22caa5/img/bitbucket_avatar/192/bitbucket.png">
<link rel="icon" sizes="192x192" type="image/png" href="https://d301sr5gafysq2.cloudfront.net/a23b1b22caa5/img/bitbucket_avatar/192/bitbucket.png">
<link rel="icon" sizes="16x16 32x32" type="image/x-icon" href="/favicon.ico">
<link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="Bitbucket">
  <meta name="description" content="">
  
  
    
  



  <link rel="stylesheet" href="https://d301sr5gafysq2.cloudfront.net/a23b1b22caa5/css/entry/vendor.css" />
<link rel="stylesheet" href="https://d301sr5gafysq2.cloudfront.net/a23b1b22caa5/css/entry/app.css" />




  <link rel="stylesheet" href="https://d301sr5gafysq2.cloudfront.net/a23b1b22caa5/css/entry/adg3.css">

  
  <script>
  window.__sentry__ = {"dsn": "https://ea49358f525d4019945839a3d7a8292a@sentry.io/159509", "release": "a23b1b22caa5", "tags": {"project": "bitbucket-core"}, "environment": "production"};
</script>
<script src="https://d301sr5gafysq2.cloudfront.net/a23b1b22caa5/dist/webpack/sentry.js"></script>
  <script src="https://d301sr5gafysq2.cloudfront.net/a23b1b22caa5/dist/webpack/early.js"></script>
  
  
    <link href="/baumdigital/centralamerica-wordpress/rss?token=609b6eb657484a49115a71ac7d133098" rel="alternate nofollow" type="application/rss+xml" title="RSS feed for Centralamerica-Wordpress" />

</head>
<body class="production adg3 "
    data-static-url="https://d301sr5gafysq2.cloudfront.net/a23b1b22caa5/"
data-base-url="https://bitbucket.org"
data-no-avatar-image="https://d301sr5gafysq2.cloudfront.net/a23b1b22caa5/img/default_avatar/user_blue.svg"
data-current-user="{&quot;username&quot;: &quot;mlafuente&quot;, &quot;displayName&quot;: &quot;mario&quot;, &quot;uuid&quot;: &quot;{1cbc9888-e510-4835-b905-9e1620a0e43a}&quot;, &quot;firstName&quot;: &quot;mario&quot;, &quot;hasPremium&quot;: true, &quot;lastName&quot;: &quot;&quot;, &quot;avatarUrl&quot;: &quot;https://bitbucket.org/account/mlafuente/avatar/32/?ts=1497227227&quot;, &quot;isTeam&quot;: false, &quot;isSshEnabled&quot;: false, &quot;isKbdShortcutsEnabled&quot;: true, &quot;id&quot;: 9316029, &quot;isAuthenticated&quot;: true}"
data-atlassian-id="{&quot;loginStatusUrl&quot;: &quot;https://id.atlassian.com/profile/rest/profile&quot;}"
data-settings="{&quot;MENTIONS_MIN_QUERY_LENGTH&quot;: 3}"

data-current-repo="{&quot;scm&quot;: &quot;git&quot;, &quot;readOnly&quot;: false, &quot;mainbranch&quot;: {&quot;name&quot;: &quot;master&quot;}, &quot;language&quot;: &quot;&quot;, &quot;owner&quot;: {&quot;username&quot;: &quot;baumdigital&quot;, &quot;uuid&quot;: &quot;6b24878c-7d71-4249-95f4-8ea0730682c8&quot;, &quot;isTeam&quot;: true}, &quot;fullslug&quot;: &quot;baumdigital/centralamerica-wordpress&quot;, &quot;slug&quot;: &quot;centralamerica-wordpress&quot;, &quot;id&quot;: 24066240, &quot;pygmentsLanguage&quot;: null}"
data-current-cset="8b58d8ca5c81814d33359cdd8d9ebae176994136"





data-browser-monitoring="true"
data-switch-create-pullrequest-commit-status="true"


data-atlassian-editor-enabled="true"
data-atlassian-emoji-base-url="https://pf-emoji-service.atlassian.io/emoji/"
data-notifications="[]">
<div id="page">
  
    
      <div id="adg3-navigation"
  
  
  >
  <nav class="skeleton-nav">
    <div class="skeleton-nav--left">
      <div class="skeleton-nav--left-top">
        <ul class="skeleton-nav--items">
          <li></li>
          <li></li>
          <li></li>
          <li class="skeleton--icon"></li>
          <li class="skeleton--icon-sub"></li>
          <li class="skeleton--icon-sub"></li>
          <li class="skeleton--icon-sub"></li>
          <li class="skeleton--icon-sub"></li>
          <li class="skeleton--icon-sub"></li>
          <li class="skeleton--icon-sub"></li>
        </ul>
      </div>
      <div class="skeleton-nav--left-bottom">
        <div class="skeleton-nav--left-bottom-wrapper">
          <div class="skeleton-nav--item-help"></div>
          <div class="skeleton-nav--item-profile"></div>
        </div>
      </div>
    </div>
    <div class="skeleton-nav--right">
      <ul class="skeleton-nav--items-wide">
        <li class="skeleton--icon-logo-container">
          <div class="skeleton--icon-container"></div>
          <div class="skeleton--icon-description"></div>
          <div class="skeleton--icon-logo"></div>
        </li>
        <li>
          <div class="skeleton--icon-small"></div>
          <div class="skeleton-nav--item-wide-content"></div>
        </li>
        <li>
          <div class="skeleton--icon-small"></div>
          <div class="skeleton-nav--item-wide-content"></div>
        </li>
        <li>
          <div class="skeleton--icon-small"></div>
          <div class="skeleton-nav--item-wide-content"></div>
        </li>
        <li>
          <div class="skeleton--icon-small"></div>
          <div class="skeleton-nav--item-wide-content"></div>
        </li>
        <li>
          <div class="skeleton--icon-small"></div>
          <div class="skeleton-nav--item-wide-content"></div>
        </li>
        <li>
          <div class="skeleton--icon-small"></div>
          <div class="skeleton-nav--item-wide-content"></div>
        </li>
      </ul>
    </div>
  </nav>
</div>


    
    <div id="wrapper">
      
  


      

      
        
          <div id="nps-survey-container"></div>
        
      

      
  

<div id="account-warning" data-module="header/account-warning"
  data-unconfirmed-addresses="false"
  data-no-addresses="false"
  
></div>



      
  
<header id="aui-message-bar">
  
</header>


    <div id="content" role="main">
      
        
          <header class="app-header">
            <div class="app-header--primary">
              
                <div class="app-header--context">
                  <div class="app-header--breadcrumbs">
                    
            <ol class="aui-nav aui-nav-breadcrumbs">
              <li>
  <a href="/baumdigital/">Baum Digital</a>
</li>

  <li class="aui-nav-selected">
    <a href="/account/user/baumdigital/projects/STAR">Starters</a>
  </li>

<li>
  <a href="/baumdigital/centralamerica-wordpress">Centralamerica-Wordpress</a>
</li>
              
            </ol>
          
                  </div>
                  <h1 class="app-header--heading">
                    Source
                  </h1>
                </div>
                
              </div>
              <div class="app-header--secondary">
                
                  
                
              </div>
            </header>
          
        
        
  

        
  <div class="aui-page-panel ">
    <div class="hidden">
  
  </div>
    <div class="aui-page-panel-inner">
      <div id="repo-content" class="aui-page-panel-content"
          data-module="repo/index"
          
            data-project-id="863453"
          
          >
        
        
  <div id="source-container" class="maskable" data-module="repo/source/index">
    



<header id="source-path">
  
    <div class="labels labels-csv">
      <div class="aui-buttons">
        <button data-branches-tags-url="/api/1.0/repositories/baumdigital/centralamerica-wordpress/branches-tags"
                data-module="components/branch-dialog"
                
                class="aui-button branch-dialog-trigger" title="master">
          
            
              <span class="aui-icon aui-icon-small aui-iconfont-devtools-branch">Branch</span>
            
            <span class="name">master</span>
          
          <span class="aui-icon-dropdown"></span>
        </button>
        <button class="aui-button" id="checkout-branch-button"
                title="Check out this branch">
          <span class="aui-icon aui-icon-small aui-iconfont-devtools-clone">Check out branch</span>
          <span class="aui-icon-dropdown"></span>
        </button>
      </div>
      
    
    
  
    </div>
  
  
    <div class="secondary-actions">
      <div class="aui-buttons">
        
          <a href="/baumdigital/centralamerica-wordpress/src/8b58d8ca5c81/wp-content/themes/centralamerica/wp-bootstrap-navwalker.php?at=master"
            class="aui-button pjax-trigger" aria-pressed="true">
            Source
          </a>
          <a href="/baumdigital/centralamerica-wordpress/diff/wp-content/themes/centralamerica/wp-bootstrap-navwalker.php?diff2=8b58d8ca5c81&at=master"
            class="aui-button pjax-trigger"
            title="Diff to previous change">
            Diff
          </a>
          <a href="/baumdigital/centralamerica-wordpress/history-node/8b58d8ca5c81/wp-content/themes/centralamerica/wp-bootstrap-navwalker.php?at=master"
            class="aui-button pjax-trigger">
            History
          </a>
        
      </div>
    </div>
  
  <h1>
    
      
        <a href="/baumdigital/centralamerica-wordpress/src/8b58d8ca5c81?at=master"
          class="pjax-trigger root" title="baumdigital/centralamerica-wordpress at 8b58d8ca5c81">Centralamerica-Wordpress</a> /
      
      
        
          
            <a href="/baumdigital/centralamerica-wordpress/src/8b58d8ca5c81/wp-content/?at=master"
              class="pjax-trigger directory-name">wp-content</a> /
          
        
      
        
          
            <a href="/baumdigital/centralamerica-wordpress/src/8b58d8ca5c81/wp-content/themes/?at=master"
              class="pjax-trigger directory-name">themes</a> /
          
        
      
        
          
            <a href="/baumdigital/centralamerica-wordpress/src/8b58d8ca5c81/wp-content/themes/centralamerica/?at=master"
              class="pjax-trigger directory-name">centralamerica</a> /
          
        
      
        
          
            <span class="file-name">wp-bootstrap-navwalker.php</span>
          
        
      
    
  </h1>
  
    
    
  
  <div class="clearfix"></div>
</header>


  
    
  

  <div id="editor-container" class="maskable"
       data-module="repo/source/editor"
       data-owner="baumdigital"
       data-slug="centralamerica-wordpress"
       data-is-writer="false"
       data-has-push-access="true"
       data-hash="8b58d8ca5c81814d33359cdd8d9ebae176994136"
       data-branch="master"
       data-path="wp-content/themes/centralamerica/wp-bootstrap-navwalker.php"
       data-source-url="/api/internal/repositories/baumdigital/centralamerica-wordpress/src/8b58d8ca5c81814d33359cdd8d9ebae176994136/wp-content/themes/centralamerica/wp-bootstrap-navwalker.php">
    <div id="source-view" class="file-source-container" data-module="repo/source/view-file" data-is-lfs="false">
      <div class="toolbar">
        <div class="primary">
          <div class="aui-buttons">
            
              <button id="file-history-trigger" class="aui-button aui-button-light changeset-info"
                      data-changeset="8b58d8ca5c81814d33359cdd8d9ebae176994136"
                      data-path="wp-content/themes/centralamerica/wp-bootstrap-navwalker.php"
                      data-current="8b58d8ca5c81814d33359cdd8d9ebae176994136">
                 

  <div class="aui-avatar aui-avatar-xsmall">
    <div class="aui-avatar-inner">
      <img src="https://bitbucket.org/account/kimQuiros/avatar/16/?ts=1497045839">
    </div>
  </div>
  <span class="changeset-hash">8b58d8c</span>
  <time datetime="2017-06-07T16:11:50+00:00" class="timestamp"></time>
  <span class="aui-icon-dropdown"></span>

              </button>
            
          </div>
          
          <a href="/baumdigital/centralamerica-wordpress/full-commit/8b58d8ca5c81/wp-content/themes/centralamerica/wp-bootstrap-navwalker.php" id="full-commit-link"
             title="View full commit 8b58d8c">Full commit</a>
        </div>
        <div class="secondary">
          
          <div class="aui-buttons">
            
              <a href="/baumdigital/centralamerica-wordpress/annotate/8b58d8ca5c81814d33359cdd8d9ebae176994136/wp-content/themes/centralamerica/wp-bootstrap-navwalker.php?at=master"
                 class="aui-button aui-button-light pjax-trigger">Blame</a>
              
            
            <a href="/baumdigital/centralamerica-wordpress/raw/8b58d8ca5c81814d33359cdd8d9ebae176994136/wp-content/themes/centralamerica/wp-bootstrap-navwalker.php" class="aui-button aui-button-light">Raw</a>
          </div>
          
            <div class="aui-buttons">
              
              <button id="file-edit-button" class="edit-button aui-button aui-button-light aui-button-split-main"
                  >
                Edit
                
              </button>
              <button id="file-more-actions-button" class="aui-button aui-button-light aui-dropdown2-trigger aui-button-split-more" aria-owns="split-container-dropdown" aria-haspopup="true"
                  >
                More file actions
              </button>
            </div>
            <div id="split-container-dropdown" class="aui-dropdown2 aui-style-default" data-container="#editor-container">
              <ul class="aui-list-truncate">
                <li><a href="#" data-module="repo/source/rename-file" class="rename-link">Rename</a></li>
                <li><a href="#" data-module="repo/source/delete-file" class="delete-link">Delete</a></li>
              </ul>
            </div>
          
        </div>

        <div id="fileview-dropdown"
            class="aui-dropdown2 aui-style-default"
            data-fileview-container="#fileview-container"
            
            
            data-fileview-button="#fileview-trigger"
            data-module="connect/fileview">
          <div class="aui-dropdown2-section">
            <ul>
              <li>
                <a class="aui-dropdown2-radio aui-dropdown2-checked"
                    data-fileview-id="-1"
                    data-fileview-loaded="true"
                    data-fileview-target="#fileview-original"
                    data-fileview-connection-key=""
                    data-fileview-module-key="file-view-default">
                  Default File Viewer
                </a>
              </li>
              
            </ul>
          </div>
        </div>

        <div class="clearfix"></div>
      </div>
      <div id="fileview-container">
        <div id="fileview-original"
            class="fileview"
            data-module="repo/source/highlight-lines"
            data-fileview-loaded="true">
          


  
    <div class="file-source">
      <table class="codehilite highlighttable"><tr><td class="linenos"><div class="linenodiv"><pre><a href="#wp-bootstrap-navwalker.php-1">  1</a>
<a href="#wp-bootstrap-navwalker.php-2">  2</a>
<a href="#wp-bootstrap-navwalker.php-3">  3</a>
<a href="#wp-bootstrap-navwalker.php-4">  4</a>
<a href="#wp-bootstrap-navwalker.php-5">  5</a>
<a href="#wp-bootstrap-navwalker.php-6">  6</a>
<a href="#wp-bootstrap-navwalker.php-7">  7</a>
<a href="#wp-bootstrap-navwalker.php-8">  8</a>
<a href="#wp-bootstrap-navwalker.php-9">  9</a>
<a href="#wp-bootstrap-navwalker.php-10"> 10</a>
<a href="#wp-bootstrap-navwalker.php-11"> 11</a>
<a href="#wp-bootstrap-navwalker.php-12"> 12</a>
<a href="#wp-bootstrap-navwalker.php-13"> 13</a>
<a href="#wp-bootstrap-navwalker.php-14"> 14</a>
<a href="#wp-bootstrap-navwalker.php-15"> 15</a>
<a href="#wp-bootstrap-navwalker.php-16"> 16</a>
<a href="#wp-bootstrap-navwalker.php-17"> 17</a>
<a href="#wp-bootstrap-navwalker.php-18"> 18</a>
<a href="#wp-bootstrap-navwalker.php-19"> 19</a>
<a href="#wp-bootstrap-navwalker.php-20"> 20</a>
<a href="#wp-bootstrap-navwalker.php-21"> 21</a>
<a href="#wp-bootstrap-navwalker.php-22"> 22</a>
<a href="#wp-bootstrap-navwalker.php-23"> 23</a>
<a href="#wp-bootstrap-navwalker.php-24"> 24</a>
<a href="#wp-bootstrap-navwalker.php-25"> 25</a>
<a href="#wp-bootstrap-navwalker.php-26"> 26</a>
<a href="#wp-bootstrap-navwalker.php-27"> 27</a>
<a href="#wp-bootstrap-navwalker.php-28"> 28</a>
<a href="#wp-bootstrap-navwalker.php-29"> 29</a>
<a href="#wp-bootstrap-navwalker.php-30"> 30</a>
<a href="#wp-bootstrap-navwalker.php-31"> 31</a>
<a href="#wp-bootstrap-navwalker.php-32"> 32</a>
<a href="#wp-bootstrap-navwalker.php-33"> 33</a>
<a href="#wp-bootstrap-navwalker.php-34"> 34</a>
<a href="#wp-bootstrap-navwalker.php-35"> 35</a>
<a href="#wp-bootstrap-navwalker.php-36"> 36</a>
<a href="#wp-bootstrap-navwalker.php-37"> 37</a>
<a href="#wp-bootstrap-navwalker.php-38"> 38</a>
<a href="#wp-bootstrap-navwalker.php-39"> 39</a>
<a href="#wp-bootstrap-navwalker.php-40"> 40</a>
<a href="#wp-bootstrap-navwalker.php-41"> 41</a>
<a href="#wp-bootstrap-navwalker.php-42"> 42</a>
<a href="#wp-bootstrap-navwalker.php-43"> 43</a>
<a href="#wp-bootstrap-navwalker.php-44"> 44</a>
<a href="#wp-bootstrap-navwalker.php-45"> 45</a>
<a href="#wp-bootstrap-navwalker.php-46"> 46</a>
<a href="#wp-bootstrap-navwalker.php-47"> 47</a>
<a href="#wp-bootstrap-navwalker.php-48"> 48</a>
<a href="#wp-bootstrap-navwalker.php-49"> 49</a>
<a href="#wp-bootstrap-navwalker.php-50"> 50</a>
<a href="#wp-bootstrap-navwalker.php-51"> 51</a>
<a href="#wp-bootstrap-navwalker.php-52"> 52</a>
<a href="#wp-bootstrap-navwalker.php-53"> 53</a>
<a href="#wp-bootstrap-navwalker.php-54"> 54</a>
<a href="#wp-bootstrap-navwalker.php-55"> 55</a>
<a href="#wp-bootstrap-navwalker.php-56"> 56</a>
<a href="#wp-bootstrap-navwalker.php-57"> 57</a>
<a href="#wp-bootstrap-navwalker.php-58"> 58</a>
<a href="#wp-bootstrap-navwalker.php-59"> 59</a>
<a href="#wp-bootstrap-navwalker.php-60"> 60</a>
<a href="#wp-bootstrap-navwalker.php-61"> 61</a>
<a href="#wp-bootstrap-navwalker.php-62"> 62</a>
<a href="#wp-bootstrap-navwalker.php-63"> 63</a>
<a href="#wp-bootstrap-navwalker.php-64"> 64</a>
<a href="#wp-bootstrap-navwalker.php-65"> 65</a>
<a href="#wp-bootstrap-navwalker.php-66"> 66</a>
<a href="#wp-bootstrap-navwalker.php-67"> 67</a>
<a href="#wp-bootstrap-navwalker.php-68"> 68</a>
<a href="#wp-bootstrap-navwalker.php-69"> 69</a>
<a href="#wp-bootstrap-navwalker.php-70"> 70</a>
<a href="#wp-bootstrap-navwalker.php-71"> 71</a>
<a href="#wp-bootstrap-navwalker.php-72"> 72</a>
<a href="#wp-bootstrap-navwalker.php-73"> 73</a>
<a href="#wp-bootstrap-navwalker.php-74"> 74</a>
<a href="#wp-bootstrap-navwalker.php-75"> 75</a>
<a href="#wp-bootstrap-navwalker.php-76"> 76</a>
<a href="#wp-bootstrap-navwalker.php-77"> 77</a>
<a href="#wp-bootstrap-navwalker.php-78"> 78</a>
<a href="#wp-bootstrap-navwalker.php-79"> 79</a>
<a href="#wp-bootstrap-navwalker.php-80"> 80</a>
<a href="#wp-bootstrap-navwalker.php-81"> 81</a>
<a href="#wp-bootstrap-navwalker.php-82"> 82</a>
<a href="#wp-bootstrap-navwalker.php-83"> 83</a>
<a href="#wp-bootstrap-navwalker.php-84"> 84</a>
<a href="#wp-bootstrap-navwalker.php-85"> 85</a>
<a href="#wp-bootstrap-navwalker.php-86"> 86</a>
<a href="#wp-bootstrap-navwalker.php-87"> 87</a>
<a href="#wp-bootstrap-navwalker.php-88"> 88</a>
<a href="#wp-bootstrap-navwalker.php-89"> 89</a>
<a href="#wp-bootstrap-navwalker.php-90"> 90</a>
<a href="#wp-bootstrap-navwalker.php-91"> 91</a>
<a href="#wp-bootstrap-navwalker.php-92"> 92</a>
<a href="#wp-bootstrap-navwalker.php-93"> 93</a>
<a href="#wp-bootstrap-navwalker.php-94"> 94</a>
<a href="#wp-bootstrap-navwalker.php-95"> 95</a>
<a href="#wp-bootstrap-navwalker.php-96"> 96</a>
<a href="#wp-bootstrap-navwalker.php-97"> 97</a>
<a href="#wp-bootstrap-navwalker.php-98"> 98</a>
<a href="#wp-bootstrap-navwalker.php-99"> 99</a>
<a href="#wp-bootstrap-navwalker.php-100">100</a>
<a href="#wp-bootstrap-navwalker.php-101">101</a>
<a href="#wp-bootstrap-navwalker.php-102">102</a>
<a href="#wp-bootstrap-navwalker.php-103">103</a>
<a href="#wp-bootstrap-navwalker.php-104">104</a>
<a href="#wp-bootstrap-navwalker.php-105">105</a>
<a href="#wp-bootstrap-navwalker.php-106">106</a>
<a href="#wp-bootstrap-navwalker.php-107">107</a>
<a href="#wp-bootstrap-navwalker.php-108">108</a>
<a href="#wp-bootstrap-navwalker.php-109">109</a>
<a href="#wp-bootstrap-navwalker.php-110">110</a>
<a href="#wp-bootstrap-navwalker.php-111">111</a>
<a href="#wp-bootstrap-navwalker.php-112">112</a>
<a href="#wp-bootstrap-navwalker.php-113">113</a>
<a href="#wp-bootstrap-navwalker.php-114">114</a>
<a href="#wp-bootstrap-navwalker.php-115">115</a>
<a href="#wp-bootstrap-navwalker.php-116">116</a>
<a href="#wp-bootstrap-navwalker.php-117">117</a>
<a href="#wp-bootstrap-navwalker.php-118">118</a>
<a href="#wp-bootstrap-navwalker.php-119">119</a>
<a href="#wp-bootstrap-navwalker.php-120">120</a>
<a href="#wp-bootstrap-navwalker.php-121">121</a>
<a href="#wp-bootstrap-navwalker.php-122">122</a>
<a href="#wp-bootstrap-navwalker.php-123">123</a>
<a href="#wp-bootstrap-navwalker.php-124">124</a>
<a href="#wp-bootstrap-navwalker.php-125">125</a>
<a href="#wp-bootstrap-navwalker.php-126">126</a>
<a href="#wp-bootstrap-navwalker.php-127">127</a>
<a href="#wp-bootstrap-navwalker.php-128">128</a>
<a href="#wp-bootstrap-navwalker.php-129">129</a>
<a href="#wp-bootstrap-navwalker.php-130">130</a>
<a href="#wp-bootstrap-navwalker.php-131">131</a>
<a href="#wp-bootstrap-navwalker.php-132">132</a>
<a href="#wp-bootstrap-navwalker.php-133">133</a>
<a href="#wp-bootstrap-navwalker.php-134">134</a>
<a href="#wp-bootstrap-navwalker.php-135">135</a>
<a href="#wp-bootstrap-navwalker.php-136">136</a>
<a href="#wp-bootstrap-navwalker.php-137">137</a>
<a href="#wp-bootstrap-navwalker.php-138">138</a>
<a href="#wp-bootstrap-navwalker.php-139">139</a>
<a href="#wp-bootstrap-navwalker.php-140">140</a>
<a href="#wp-bootstrap-navwalker.php-141">141</a>
<a href="#wp-bootstrap-navwalker.php-142">142</a>
<a href="#wp-bootstrap-navwalker.php-143">143</a>
<a href="#wp-bootstrap-navwalker.php-144">144</a>
<a href="#wp-bootstrap-navwalker.php-145">145</a>
<a href="#wp-bootstrap-navwalker.php-146">146</a>
<a href="#wp-bootstrap-navwalker.php-147">147</a>
<a href="#wp-bootstrap-navwalker.php-148">148</a>
<a href="#wp-bootstrap-navwalker.php-149">149</a>
<a href="#wp-bootstrap-navwalker.php-150">150</a>
<a href="#wp-bootstrap-navwalker.php-151">151</a>
<a href="#wp-bootstrap-navwalker.php-152">152</a>
<a href="#wp-bootstrap-navwalker.php-153">153</a>
<a href="#wp-bootstrap-navwalker.php-154">154</a>
<a href="#wp-bootstrap-navwalker.php-155">155</a>
<a href="#wp-bootstrap-navwalker.php-156">156</a>
<a href="#wp-bootstrap-navwalker.php-157">157</a>
<a href="#wp-bootstrap-navwalker.php-158">158</a>
<a href="#wp-bootstrap-navwalker.php-159">159</a>
<a href="#wp-bootstrap-navwalker.php-160">160</a>
<a href="#wp-bootstrap-navwalker.php-161">161</a>
<a href="#wp-bootstrap-navwalker.php-162">162</a>
<a href="#wp-bootstrap-navwalker.php-163">163</a>
<a href="#wp-bootstrap-navwalker.php-164">164</a>
<a href="#wp-bootstrap-navwalker.php-165">165</a>
<a href="#wp-bootstrap-navwalker.php-166">166</a>
<a href="#wp-bootstrap-navwalker.php-167">167</a>
<a href="#wp-bootstrap-navwalker.php-168">168</a>
<a href="#wp-bootstrap-navwalker.php-169">169</a>
<a href="#wp-bootstrap-navwalker.php-170">170</a>
<a href="#wp-bootstrap-navwalker.php-171">171</a>
<a href="#wp-bootstrap-navwalker.php-172">172</a>
<a href="#wp-bootstrap-navwalker.php-173">173</a>
<a href="#wp-bootstrap-navwalker.php-174">174</a>
<a href="#wp-bootstrap-navwalker.php-175">175</a>
<a href="#wp-bootstrap-navwalker.php-176">176</a>
<a href="#wp-bootstrap-navwalker.php-177">177</a>
<a href="#wp-bootstrap-navwalker.php-178">178</a>
<a href="#wp-bootstrap-navwalker.php-179">179</a>
<a href="#wp-bootstrap-navwalker.php-180">180</a>
<a href="#wp-bootstrap-navwalker.php-181">181</a>
<a href="#wp-bootstrap-navwalker.php-182">182</a>
<a href="#wp-bootstrap-navwalker.php-183">183</a>
<a href="#wp-bootstrap-navwalker.php-184">184</a>
<a href="#wp-bootstrap-navwalker.php-185">185</a>
<a href="#wp-bootstrap-navwalker.php-186">186</a>
<a href="#wp-bootstrap-navwalker.php-187">187</a>
<a href="#wp-bootstrap-navwalker.php-188">188</a>
<a href="#wp-bootstrap-navwalker.php-189">189</a>
<a href="#wp-bootstrap-navwalker.php-190">190</a>
<a href="#wp-bootstrap-navwalker.php-191">191</a>
<a href="#wp-bootstrap-navwalker.php-192">192</a>
<a href="#wp-bootstrap-navwalker.php-193">193</a>
<a href="#wp-bootstrap-navwalker.php-194">194</a>
<a href="#wp-bootstrap-navwalker.php-195">195</a>
<a href="#wp-bootstrap-navwalker.php-196">196</a>
<a href="#wp-bootstrap-navwalker.php-197">197</a>
<a href="#wp-bootstrap-navwalker.php-198">198</a>
<a href="#wp-bootstrap-navwalker.php-199">199</a>
<a href="#wp-bootstrap-navwalker.php-200">200</a>
<a href="#wp-bootstrap-navwalker.php-201">201</a>
<a href="#wp-bootstrap-navwalker.php-202">202</a>
<a href="#wp-bootstrap-navwalker.php-203">203</a>
<a href="#wp-bootstrap-navwalker.php-204">204</a>
<a href="#wp-bootstrap-navwalker.php-205">205</a>
<a href="#wp-bootstrap-navwalker.php-206">206</a>
<a href="#wp-bootstrap-navwalker.php-207">207</a>
<a href="#wp-bootstrap-navwalker.php-208">208</a>
<a href="#wp-bootstrap-navwalker.php-209">209</a>
<a href="#wp-bootstrap-navwalker.php-210">210</a>
<a href="#wp-bootstrap-navwalker.php-211">211</a></pre></div></td><td class="code"><div class="codehilite highlight"><pre><span></span><a name="wp-bootstrap-navwalker.php-1"></a><span class="cp">&lt;?php</span>
<a name="wp-bootstrap-navwalker.php-2"></a><span class="sd">/**</span>
<a name="wp-bootstrap-navwalker.php-3"></a><span class="sd"> * WP Bootstrap Navwalker</span>
<a name="wp-bootstrap-navwalker.php-4"></a><span class="sd"> *</span>
<a name="wp-bootstrap-navwalker.php-5"></a><span class="sd"> * @package WP-Bootstrap-Navwalker</span>
<a name="wp-bootstrap-navwalker.php-6"></a><span class="sd"> */</span>
<a name="wp-bootstrap-navwalker.php-7"></a><span class="cm">/*</span>
<a name="wp-bootstrap-navwalker.php-8"></a><span class="cm"> * Class Name: WP_Bootstrap_Navwalker</span>
<a name="wp-bootstrap-navwalker.php-9"></a><span class="cm"> * Plugin Name: WP Bootstrap Navwalker</span>
<a name="wp-bootstrap-navwalker.php-10"></a><span class="cm"> * Plugin URI:  https://github.com/wp-bootstrap/wp-bootstrap-navwalker</span>
<a name="wp-bootstrap-navwalker.php-11"></a><span class="cm"> * Description: A custom WordPress nav walker class to implement the Bootstrap 3 navigation style in a custom theme using the WordPress built in menu manager.</span>
<a name="wp-bootstrap-navwalker.php-12"></a><span class="cm"> * Author: Edward McIntyre - @twittem, WP Bootstrap</span>
<a name="wp-bootstrap-navwalker.php-13"></a><span class="cm"> * Version: 2.0.5</span>
<a name="wp-bootstrap-navwalker.php-14"></a><span class="cm"> * Author URI: https://github.com/wp-bootstrap</span>
<a name="wp-bootstrap-navwalker.php-15"></a><span class="cm"> * GitHub Plugin URI: https://github.com/wp-bootstrap/wp-bootstrap-navwalker</span>
<a name="wp-bootstrap-navwalker.php-16"></a><span class="cm"> * GitHub Branch: master</span>
<a name="wp-bootstrap-navwalker.php-17"></a><span class="cm"> * License: GPL-3.0+</span>
<a name="wp-bootstrap-navwalker.php-18"></a><span class="cm"> * License URI: http://www.gnu.org/licenses/gpl-3.0.txt</span>
<a name="wp-bootstrap-navwalker.php-19"></a><span class="cm">*/</span>
<a name="wp-bootstrap-navwalker.php-20"></a><span class="cm">/* Check if Class Exists. */</span>
<a name="wp-bootstrap-navwalker.php-21"></a><span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nb">class_exists</span><span class="p">(</span> <span class="s1">&#39;WP_Bootstrap_Navwalker&#39;</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-22"></a>  <span class="sd">/**</span>
<a name="wp-bootstrap-navwalker.php-23"></a><span class="sd">   * WP_Bootstrap_Navwalker class.</span>
<a name="wp-bootstrap-navwalker.php-24"></a><span class="sd">   *</span>
<a name="wp-bootstrap-navwalker.php-25"></a><span class="sd">   * @extends Walker_Nav_Menu</span>
<a name="wp-bootstrap-navwalker.php-26"></a><span class="sd">   */</span>
<a name="wp-bootstrap-navwalker.php-27"></a>  <span class="k">class</span> <span class="nc">WP_Bootstrap_Navwalker</span> <span class="k">extends</span> <span class="nx">Walker_Nav_Menu</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-28"></a>    <span class="sd">/**</span>
<a name="wp-bootstrap-navwalker.php-29"></a><span class="sd">     * Start Level.</span>
<a name="wp-bootstrap-navwalker.php-30"></a><span class="sd">     *</span>
<a name="wp-bootstrap-navwalker.php-31"></a><span class="sd">     * @see Walker::start_lvl()</span>
<a name="wp-bootstrap-navwalker.php-32"></a><span class="sd">     * @since 3.0.0</span>
<a name="wp-bootstrap-navwalker.php-33"></a><span class="sd">     *</span>
<a name="wp-bootstrap-navwalker.php-34"></a><span class="sd">     * @access public</span>
<a name="wp-bootstrap-navwalker.php-35"></a><span class="sd">     * @param mixed $output Passed by reference. Used to append additional content.</span>
<a name="wp-bootstrap-navwalker.php-36"></a><span class="sd">     * @param int   $depth (default: 0) Depth of page. Used for padding.</span>
<a name="wp-bootstrap-navwalker.php-37"></a><span class="sd">     * @param array $args (default: array()) Arguments.</span>
<a name="wp-bootstrap-navwalker.php-38"></a><span class="sd">     * @return void</span>
<a name="wp-bootstrap-navwalker.php-39"></a><span class="sd">     */</span>
<a name="wp-bootstrap-navwalker.php-40"></a>    <span class="k">public</span> <span class="k">function</span> <span class="nf">start_lvl</span><span class="p">(</span> <span class="o">&amp;</span><span class="nv">$output</span><span class="p">,</span> <span class="nv">$depth</span> <span class="o">=</span> <span class="mi">0</span><span class="p">,</span> <span class="nv">$args</span> <span class="o">=</span> <span class="k">array</span><span class="p">()</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-41"></a>      <span class="nv">$indent</span> <span class="o">=</span> <span class="nb">str_repeat</span><span class="p">(</span> <span class="s2">&quot;</span><span class="se">\t</span><span class="s2">&quot;</span><span class="p">,</span> <span class="nv">$depth</span> <span class="p">);</span>
<a name="wp-bootstrap-navwalker.php-42"></a>      <span class="nv">$output</span> <span class="o">.=</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="si">$indent</span><span class="s2">&lt;ul role=</span><span class="se">\&quot;</span><span class="s2">menu</span><span class="se">\&quot;</span><span class="s2"> class=</span><span class="se">\&quot;</span><span class="s2"> dropdown-menu</span><span class="se">\&quot;</span><span class="s2"> &gt;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-43"></a>    <span class="p">}</span>
<a name="wp-bootstrap-navwalker.php-44"></a>    <span class="sd">/**</span>
<a name="wp-bootstrap-navwalker.php-45"></a><span class="sd">     * Start El.</span>
<a name="wp-bootstrap-navwalker.php-46"></a><span class="sd">     *</span>
<a name="wp-bootstrap-navwalker.php-47"></a><span class="sd">     * @see Walker::start_el()</span>
<a name="wp-bootstrap-navwalker.php-48"></a><span class="sd">     * @since 3.0.0</span>
<a name="wp-bootstrap-navwalker.php-49"></a><span class="sd">     *</span>
<a name="wp-bootstrap-navwalker.php-50"></a><span class="sd">     * @access public</span>
<a name="wp-bootstrap-navwalker.php-51"></a><span class="sd">     * @param mixed $output Passed by reference. Used to append additional content.</span>
<a name="wp-bootstrap-navwalker.php-52"></a><span class="sd">     * @param mixed $item Menu item data object.</span>
<a name="wp-bootstrap-navwalker.php-53"></a><span class="sd">     * @param int   $depth (default: 0) Depth of menu item. Used for padding.</span>
<a name="wp-bootstrap-navwalker.php-54"></a><span class="sd">     * @param array $args (default: array()) Arguments.</span>
<a name="wp-bootstrap-navwalker.php-55"></a><span class="sd">     * @param int   $id (default: 0) Menu item ID.</span>
<a name="wp-bootstrap-navwalker.php-56"></a><span class="sd">     * @return void</span>
<a name="wp-bootstrap-navwalker.php-57"></a><span class="sd">     */</span>
<a name="wp-bootstrap-navwalker.php-58"></a>    <span class="k">public</span> <span class="k">function</span> <span class="nf">start_el</span><span class="p">(</span> <span class="o">&amp;</span><span class="nv">$output</span><span class="p">,</span> <span class="nv">$item</span><span class="p">,</span> <span class="nv">$depth</span> <span class="o">=</span> <span class="mi">0</span><span class="p">,</span> <span class="nv">$args</span> <span class="o">=</span> <span class="k">array</span><span class="p">(),</span> <span class="nv">$id</span> <span class="o">=</span> <span class="mi">0</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-59"></a>      <span class="nv">$indent</span> <span class="o">=</span> <span class="p">(</span> <span class="nv">$depth</span> <span class="p">)</span> <span class="o">?</span> <span class="nb">str_repeat</span><span class="p">(</span> <span class="s2">&quot;</span><span class="se">\t</span><span class="s2">&quot;</span><span class="p">,</span> <span class="nv">$depth</span> <span class="p">)</span> <span class="o">:</span> <span class="s1">&#39;&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-60"></a>      <span class="sd">/**</span>
<a name="wp-bootstrap-navwalker.php-61"></a><span class="sd">      * Dividers, Headers or Disabled</span>
<a name="wp-bootstrap-navwalker.php-62"></a><span class="sd">      * =============================</span>
<a name="wp-bootstrap-navwalker.php-63"></a><span class="sd">      * Determine whether the item is a Divider, Header, Disabled or regular</span>
<a name="wp-bootstrap-navwalker.php-64"></a><span class="sd">      * menu item. To prevent errors we use the strcasecmp() function to so a</span>
<a name="wp-bootstrap-navwalker.php-65"></a><span class="sd">      * comparison that is not case sensitive. The strcasecmp() function returns</span>
<a name="wp-bootstrap-navwalker.php-66"></a><span class="sd">      * a 0 if the strings are equal.</span>
<a name="wp-bootstrap-navwalker.php-67"></a><span class="sd">      */</span>
<a name="wp-bootstrap-navwalker.php-68"></a>      <span class="k">if</span> <span class="p">(</span> <span class="mi">0</span> <span class="o">===</span> <span class="nb">strcasecmp</span><span class="p">(</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">attr_title</span><span class="p">,</span> <span class="s1">&#39;divider&#39;</span> <span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="mi">1</span> <span class="o">===</span> <span class="nv">$depth</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-69"></a>        <span class="nv">$output</span> <span class="o">.=</span> <span class="nv">$indent</span> <span class="o">.</span> <span class="s1">&#39;&lt;li role=&quot;presentation&quot; class=&quot;divider&quot;&gt;&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-70"></a>      <span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span> <span class="mi">0</span> <span class="o">===</span> <span class="nb">strcasecmp</span><span class="p">(</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">title</span><span class="p">,</span> <span class="s1">&#39;divider&#39;</span> <span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="mi">1</span> <span class="o">===</span> <span class="nv">$depth</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-71"></a>        <span class="nv">$output</span> <span class="o">.=</span> <span class="nv">$indent</span> <span class="o">.</span> <span class="s1">&#39;&lt;li role=&quot;presentation&quot; class=&quot;divider&quot;&gt;&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-72"></a>      <span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span> <span class="mi">0</span> <span class="o">===</span> <span class="nb">strcasecmp</span><span class="p">(</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">attr_title</span><span class="p">,</span> <span class="s1">&#39;dropdown-header&#39;</span> <span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="mi">1</span> <span class="o">===</span> <span class="nv">$depth</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-73"></a>        <span class="nv">$output</span> <span class="o">.=</span> <span class="nv">$indent</span> <span class="o">.</span> <span class="s1">&#39;&lt;li role=&quot;presentation&quot; class=&quot;dropdown-header&quot;&gt;&#39;</span> <span class="o">.</span> <span class="nx">esc_attr</span><span class="p">(</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">title</span> <span class="p">);</span>
<a name="wp-bootstrap-navwalker.php-74"></a>      <span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span> <span class="mi">0</span> <span class="o">===</span> <span class="nb">strcasecmp</span><span class="p">(</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">attr_title</span><span class="p">,</span> <span class="s1">&#39;disabled&#39;</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-75"></a>        <span class="nv">$output</span> <span class="o">.=</span> <span class="nv">$indent</span> <span class="o">.</span> <span class="s1">&#39;&lt;li role=&quot;presentation&quot; class=&quot;disabled&quot;&gt;&lt;a href=&quot;#&quot;&gt;&#39;</span> <span class="o">.</span> <span class="nx">esc_attr</span><span class="p">(</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">title</span> <span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;&lt;/a&gt;&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-76"></a>      <span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-77"></a>        <span class="nv">$value</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-78"></a>        <span class="nv">$class_names</span> <span class="o">=</span> <span class="nv">$value</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-79"></a>        <span class="nv">$classes</span> <span class="o">=</span> <span class="k">empty</span><span class="p">(</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">classes</span> <span class="p">)</span> <span class="o">?</span> <span class="k">array</span><span class="p">()</span> <span class="o">:</span> <span class="p">(</span><span class="k">array</span><span class="p">)</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">classes</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-80"></a>        <span class="nv">$classes</span><span class="p">[]</span> <span class="o">=</span> <span class="s1">&#39;menu-item-&#39;</span> <span class="o">.</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">ID</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-81"></a>        <span class="nv">$class_names</span> <span class="o">=</span> <span class="nb">join</span><span class="p">(</span> <span class="s1">&#39; &#39;</span><span class="p">,</span> <span class="nx">apply_filters</span><span class="p">(</span> <span class="s1">&#39;nav_menu_css_class&#39;</span><span class="p">,</span> <span class="nb">array_filter</span><span class="p">(</span> <span class="nv">$classes</span> <span class="p">),</span> <span class="nv">$item</span><span class="p">,</span> <span class="nv">$args</span> <span class="p">)</span> <span class="p">);</span>
<a name="wp-bootstrap-navwalker.php-82"></a>        <span class="k">if</span> <span class="p">(</span> <span class="nv">$args</span><span class="o">-&gt;</span><span class="na">has_children</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-83"></a>          <span class="nv">$class_names</span> <span class="o">.=</span> <span class="s1">&#39; dropdown&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-84"></a>        <span class="p">}</span>
<a name="wp-bootstrap-navwalker.php-85"></a>        <span class="k">if</span> <span class="p">(</span> <span class="nb">in_array</span><span class="p">(</span> <span class="s1">&#39;current-menu-item&#39;</span><span class="p">,</span> <span class="nv">$classes</span><span class="p">,</span> <span class="k">true</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-86"></a>          <span class="nv">$class_names</span> <span class="o">.=</span> <span class="s1">&#39; active&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-87"></a>        <span class="p">}</span>
<a name="wp-bootstrap-navwalker.php-88"></a>        <span class="nv">$class_names</span> <span class="o">=</span> <span class="nv">$class_names</span> <span class="o">?</span> <span class="s1">&#39; class=&quot;&#39;</span> <span class="o">.</span> <span class="nx">esc_attr</span><span class="p">(</span> <span class="nv">$class_names</span> <span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;&quot;&#39;</span> <span class="o">:</span> <span class="s1">&#39;&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-89"></a>        <span class="nv">$id</span> <span class="o">=</span> <span class="nx">apply_filters</span><span class="p">(</span> <span class="s1">&#39;nav_menu_item_id&#39;</span><span class="p">,</span> <span class="s1">&#39;menu-item-&#39;</span> <span class="o">.</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">ID</span><span class="p">,</span> <span class="nv">$item</span><span class="p">,</span> <span class="nv">$args</span> <span class="p">);</span>
<a name="wp-bootstrap-navwalker.php-90"></a>        <span class="nv">$id</span> <span class="o">=</span> <span class="nv">$id</span> <span class="o">?</span> <span class="s1">&#39; id=&quot;&#39;</span> <span class="o">.</span> <span class="nx">esc_attr</span><span class="p">(</span> <span class="nv">$id</span> <span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;&quot;&#39;</span> <span class="o">:</span> <span class="s1">&#39;&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-91"></a>        <span class="nv">$output</span> <span class="o">.=</span> <span class="nv">$indent</span> <span class="o">.</span> <span class="s1">&#39;&lt;li itemscope=&quot;itemscope&quot; itemtype=&quot;https://www.schema.org/SiteNavigationElement&quot;&#39;</span> <span class="o">.</span> <span class="nv">$id</span> <span class="o">.</span> <span class="nv">$value</span> <span class="o">.</span> <span class="nv">$class_names</span> <span class="o">.</span> <span class="s1">&#39;&gt;&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-92"></a>        <span class="nv">$atts</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span>
<a name="wp-bootstrap-navwalker.php-93"></a>        <span class="k">if</span> <span class="p">(</span> <span class="k">empty</span><span class="p">(</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">attr_title</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-94"></a>          <span class="nv">$atts</span><span class="p">[</span><span class="s1">&#39;title&#39;</span><span class="p">]</span>  <span class="o">=</span> <span class="o">!</span> <span class="k">empty</span><span class="p">(</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">title</span> <span class="p">)</span>   <span class="o">?</span> <span class="nb">strip_tags</span><span class="p">(</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">title</span> <span class="p">)</span> <span class="o">:</span> <span class="s1">&#39;&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-95"></a>        <span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-96"></a>          <span class="nv">$atts</span><span class="p">[</span><span class="s1">&#39;title&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">attr_title</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-97"></a>        <span class="p">}</span>
<a name="wp-bootstrap-navwalker.php-98"></a>        <span class="nv">$atts</span><span class="p">[</span><span class="s1">&#39;target&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="o">!</span> <span class="k">empty</span><span class="p">(</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">target</span> <span class="p">)</span>  <span class="o">?</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">target</span> <span class="o">:</span> <span class="s1">&#39;&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-99"></a>        <span class="nv">$atts</span><span class="p">[</span><span class="s1">&#39;rel&#39;</span><span class="p">]</span>    <span class="o">=</span> <span class="o">!</span> <span class="k">empty</span><span class="p">(</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">xfn</span> <span class="p">)</span>   <span class="o">?</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">xfn</span>  <span class="o">:</span> <span class="s1">&#39;&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-100"></a>        <span class="c1">// If item has_children add atts to a.</span>
<a name="wp-bootstrap-navwalker.php-101"></a>        <span class="k">if</span> <span class="p">(</span> <span class="nv">$args</span><span class="o">-&gt;</span><span class="na">has_children</span> <span class="o">&amp;&amp;</span> <span class="mi">0</span> <span class="o">===</span> <span class="nv">$depth</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-102"></a>          <span class="nv">$atts</span><span class="p">[</span><span class="s1">&#39;href&#39;</span><span class="p">]</span>       <span class="o">=</span> <span class="s1">&#39;#&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-103"></a>          <span class="nv">$atts</span><span class="p">[</span><span class="s1">&#39;data-toggle&#39;</span><span class="p">]</span>  <span class="o">=</span> <span class="s1">&#39;dropdown&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-104"></a>          <span class="nv">$atts</span><span class="p">[</span><span class="s1">&#39;class&#39;</span><span class="p">]</span>      <span class="o">=</span> <span class="s1">&#39;dropdown-toggle&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-105"></a>          <span class="nv">$atts</span><span class="p">[</span><span class="s1">&#39;aria-haspopup&#39;</span><span class="p">]</span>  <span class="o">=</span> <span class="s1">&#39;true&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-106"></a>        <span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-107"></a>          <span class="nv">$atts</span><span class="p">[</span><span class="s1">&#39;href&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="o">!</span> <span class="k">empty</span><span class="p">(</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">url</span> <span class="p">)</span> <span class="o">?</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">url</span> <span class="o">:</span> <span class="s1">&#39;&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-108"></a>        <span class="p">}</span>
<a name="wp-bootstrap-navwalker.php-109"></a>        <span class="nv">$atts</span> <span class="o">=</span> <span class="nx">apply_filters</span><span class="p">(</span> <span class="s1">&#39;nav_menu_link_attributes&#39;</span><span class="p">,</span> <span class="nv">$atts</span><span class="p">,</span> <span class="nv">$item</span><span class="p">,</span> <span class="nv">$args</span> <span class="p">);</span>
<a name="wp-bootstrap-navwalker.php-110"></a>        <span class="nv">$attributes</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-111"></a>        <span class="k">foreach</span> <span class="p">(</span> <span class="nv">$atts</span> <span class="k">as</span> <span class="nv">$attr</span> <span class="o">=&gt;</span> <span class="nv">$value</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-112"></a>          <span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="k">empty</span><span class="p">(</span> <span class="nv">$value</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-113"></a>            <span class="nv">$value</span> <span class="o">=</span> <span class="p">(</span> <span class="s1">&#39;href&#39;</span> <span class="o">===</span> <span class="nv">$attr</span> <span class="p">)</span> <span class="o">?</span> <span class="nx">esc_url</span><span class="p">(</span> <span class="nv">$value</span> <span class="p">)</span> <span class="o">:</span> <span class="nx">esc_attr</span><span class="p">(</span> <span class="nv">$value</span> <span class="p">);</span>
<a name="wp-bootstrap-navwalker.php-114"></a>            <span class="nv">$attributes</span> <span class="o">.=</span> <span class="s1">&#39; &#39;</span> <span class="o">.</span> <span class="nv">$attr</span> <span class="o">.</span> <span class="s1">&#39;=&quot;&#39;</span> <span class="o">.</span> <span class="nv">$value</span> <span class="o">.</span> <span class="s1">&#39;&quot;&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-115"></a>          <span class="p">}</span>
<a name="wp-bootstrap-navwalker.php-116"></a>        <span class="p">}</span>
<a name="wp-bootstrap-navwalker.php-117"></a>        <span class="nv">$item_output</span> <span class="o">=</span> <span class="nv">$args</span><span class="o">-&gt;</span><span class="na">before</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-118"></a>        <span class="cm">/*</span>
<a name="wp-bootstrap-navwalker.php-119"></a><span class="cm">         * Glyphicons/Font-Awesome</span>
<a name="wp-bootstrap-navwalker.php-120"></a><span class="cm">         * ===========</span>
<a name="wp-bootstrap-navwalker.php-121"></a><span class="cm">         * Since the the menu item is NOT a Divider or Header we check the see</span>
<a name="wp-bootstrap-navwalker.php-122"></a><span class="cm">         * if there is a value in the attr_title property. If the attr_title</span>
<a name="wp-bootstrap-navwalker.php-123"></a><span class="cm">         * property is NOT null we apply it as the class name for the glyphicon.</span>
<a name="wp-bootstrap-navwalker.php-124"></a><span class="cm">         */</span>
<a name="wp-bootstrap-navwalker.php-125"></a>        <span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="k">empty</span><span class="p">(</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">attr_title</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-126"></a>          <span class="nv">$pos</span> <span class="o">=</span> <span class="nb">strpos</span><span class="p">(</span> <span class="nx">esc_attr</span><span class="p">(</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">attr_title</span> <span class="p">),</span> <span class="s1">&#39;glyphicon&#39;</span> <span class="p">);</span>
<a name="wp-bootstrap-navwalker.php-127"></a>          <span class="k">if</span> <span class="p">(</span> <span class="k">false</span> <span class="o">!==</span> <span class="nv">$pos</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-128"></a>            <span class="nv">$item_output</span> <span class="o">.=</span> <span class="s1">&#39;&lt;a&#39;</span> <span class="o">.</span> <span class="nv">$attributes</span> <span class="o">.</span> <span class="s1">&#39;&gt;&lt;span class=&quot;glyphicon &#39;</span> <span class="o">.</span> <span class="nx">esc_attr</span><span class="p">(</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">attr_title</span> <span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;&amp;nbsp;&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-129"></a>          <span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-130"></a>            <span class="nv">$item_output</span> <span class="o">.=</span> <span class="s1">&#39;&lt;a&#39;</span> <span class="o">.</span> <span class="nv">$attributes</span> <span class="o">.</span> <span class="s1">&#39;&gt;&lt;i class=&quot;fa &#39;</span> <span class="o">.</span> <span class="nx">esc_attr</span><span class="p">(</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">attr_title</span> <span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;&amp;nbsp;&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-131"></a>          <span class="p">}</span>
<a name="wp-bootstrap-navwalker.php-132"></a>        <span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-133"></a>          <span class="nv">$item_output</span> <span class="o">.=</span> <span class="s1">&#39;&lt;a&#39;</span> <span class="o">.</span> <span class="nv">$attributes</span> <span class="o">.</span> <span class="s1">&#39;&gt;&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-134"></a>        <span class="p">}</span>
<a name="wp-bootstrap-navwalker.php-135"></a>        <span class="nv">$item_output</span> <span class="o">.=</span> <span class="nv">$args</span><span class="o">-&gt;</span><span class="na">link_before</span> <span class="o">.</span> <span class="nx">apply_filters</span><span class="p">(</span> <span class="s1">&#39;the_title&#39;</span><span class="p">,</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">title</span><span class="p">,</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">ID</span> <span class="p">)</span> <span class="o">.</span> <span class="nv">$args</span><span class="o">-&gt;</span><span class="na">link_after</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-136"></a>        <span class="nv">$item_output</span> <span class="o">.=</span> <span class="p">(</span> <span class="nv">$args</span><span class="o">-&gt;</span><span class="na">has_children</span> <span class="o">&amp;&amp;</span> <span class="mi">0</span> <span class="o">===</span> <span class="nv">$depth</span> <span class="p">)</span> <span class="o">?</span> <span class="s1">&#39; &lt;span class=&quot;caret&quot;&gt;&lt;/span&gt;&lt;/a&gt;&#39;</span> <span class="o">:</span> <span class="s1">&#39;&lt;/a&gt;&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-137"></a>        <span class="nv">$item_output</span> <span class="o">.=</span> <span class="nv">$args</span><span class="o">-&gt;</span><span class="na">after</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-138"></a>        <span class="nv">$output</span> <span class="o">.=</span> <span class="nx">apply_filters</span><span class="p">(</span> <span class="s1">&#39;walker_nav_menu_start_el&#39;</span><span class="p">,</span> <span class="nv">$item_output</span><span class="p">,</span> <span class="nv">$item</span><span class="p">,</span> <span class="nv">$depth</span><span class="p">,</span> <span class="nv">$args</span> <span class="p">);</span>
<a name="wp-bootstrap-navwalker.php-139"></a>      <span class="p">}</span> <span class="c1">// End if().</span>
<a name="wp-bootstrap-navwalker.php-140"></a>    <span class="p">}</span>
<a name="wp-bootstrap-navwalker.php-141"></a>    <span class="sd">/**</span>
<a name="wp-bootstrap-navwalker.php-142"></a><span class="sd">     * Traverse elements to create list from elements.</span>
<a name="wp-bootstrap-navwalker.php-143"></a><span class="sd">     *</span>
<a name="wp-bootstrap-navwalker.php-144"></a><span class="sd">     * Display one element if the element doesn&#39;t have any children otherwise,</span>
<a name="wp-bootstrap-navwalker.php-145"></a><span class="sd">     * display the element and its children. Will only traverse up to the max</span>
<a name="wp-bootstrap-navwalker.php-146"></a><span class="sd">     * depth and no ignore elements under that depth.</span>
<a name="wp-bootstrap-navwalker.php-147"></a><span class="sd">     *</span>
<a name="wp-bootstrap-navwalker.php-148"></a><span class="sd">     * This method shouldn&#39;t be called directly, use the walk() method instead.</span>
<a name="wp-bootstrap-navwalker.php-149"></a><span class="sd">     *</span>
<a name="wp-bootstrap-navwalker.php-150"></a><span class="sd">     * @see Walker::start_el()</span>
<a name="wp-bootstrap-navwalker.php-151"></a><span class="sd">     * @since 2.5.0</span>
<a name="wp-bootstrap-navwalker.php-152"></a><span class="sd">     *</span>
<a name="wp-bootstrap-navwalker.php-153"></a><span class="sd">     * @access public</span>
<a name="wp-bootstrap-navwalker.php-154"></a><span class="sd">     * @param mixed $element Data object.</span>
<a name="wp-bootstrap-navwalker.php-155"></a><span class="sd">     * @param mixed $children_elements List of elements to continue traversing.</span>
<a name="wp-bootstrap-navwalker.php-156"></a><span class="sd">     * @param mixed $max_depth Max depth to traverse.</span>
<a name="wp-bootstrap-navwalker.php-157"></a><span class="sd">     * @param mixed $depth Depth of current element.</span>
<a name="wp-bootstrap-navwalker.php-158"></a><span class="sd">     * @param mixed $args Arguments.</span>
<a name="wp-bootstrap-navwalker.php-159"></a><span class="sd">     * @param mixed $output Passed by reference. Used to append additional content.</span>
<a name="wp-bootstrap-navwalker.php-160"></a><span class="sd">     * @return null Null on failure with no changes to parameters.</span>
<a name="wp-bootstrap-navwalker.php-161"></a><span class="sd">     */</span>
<a name="wp-bootstrap-navwalker.php-162"></a>    <span class="k">public</span> <span class="k">function</span> <span class="nf">display_element</span><span class="p">(</span> <span class="nv">$element</span><span class="p">,</span> <span class="o">&amp;</span><span class="nv">$children_elements</span><span class="p">,</span> <span class="nv">$max_depth</span><span class="p">,</span> <span class="nv">$depth</span><span class="p">,</span> <span class="nv">$args</span><span class="p">,</span> <span class="o">&amp;</span><span class="nv">$output</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-163"></a>      <span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nv">$element</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-164"></a>        <span class="k">return</span><span class="p">;</span> <span class="p">}</span>
<a name="wp-bootstrap-navwalker.php-165"></a>      <span class="nv">$id_field</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">db_fields</span><span class="p">[</span><span class="s1">&#39;id&#39;</span><span class="p">];</span>
<a name="wp-bootstrap-navwalker.php-166"></a>      <span class="c1">// Display this element.</span>
<a name="wp-bootstrap-navwalker.php-167"></a>      <span class="k">if</span> <span class="p">(</span> <span class="nb">is_object</span><span class="p">(</span> <span class="nv">$args</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-168"></a>        <span class="nv">$args</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">-&gt;</span><span class="na">has_children</span> <span class="o">=</span> <span class="o">!</span> <span class="k">empty</span><span class="p">(</span> <span class="nv">$children_elements</span><span class="p">[</span> <span class="nv">$element</span><span class="o">-&gt;</span><span class="nv">$id_field</span> <span class="p">]</span> <span class="p">);</span> <span class="p">}</span>
<a name="wp-bootstrap-navwalker.php-169"></a>      <span class="k">parent</span><span class="o">::</span><span class="na">display_element</span><span class="p">(</span> <span class="nv">$element</span><span class="p">,</span> <span class="nv">$children_elements</span><span class="p">,</span> <span class="nv">$max_depth</span><span class="p">,</span> <span class="nv">$depth</span><span class="p">,</span> <span class="nv">$args</span><span class="p">,</span> <span class="nv">$output</span> <span class="p">);</span>
<a name="wp-bootstrap-navwalker.php-170"></a>    <span class="p">}</span>
<a name="wp-bootstrap-navwalker.php-171"></a>    <span class="sd">/**</span>
<a name="wp-bootstrap-navwalker.php-172"></a><span class="sd">     * Menu Fallback</span>
<a name="wp-bootstrap-navwalker.php-173"></a><span class="sd">     * =============</span>
<a name="wp-bootstrap-navwalker.php-174"></a><span class="sd">     * If this function is assigned to the wp_nav_menu&#39;s fallback_cb variable</span>
<a name="wp-bootstrap-navwalker.php-175"></a><span class="sd">     * and a menu has not been assigned to the theme location in the WordPress</span>
<a name="wp-bootstrap-navwalker.php-176"></a><span class="sd">     * menu manager the function with display nothing to a non-logged in user,</span>
<a name="wp-bootstrap-navwalker.php-177"></a><span class="sd">     * and will add a link to the WordPress menu manager if logged in as an admin.</span>
<a name="wp-bootstrap-navwalker.php-178"></a><span class="sd">     *</span>
<a name="wp-bootstrap-navwalker.php-179"></a><span class="sd">     * @param array $args passed from the wp_nav_menu function.</span>
<a name="wp-bootstrap-navwalker.php-180"></a><span class="sd">     */</span>
<a name="wp-bootstrap-navwalker.php-181"></a>    <span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">fallback</span><span class="p">(</span> <span class="nv">$args</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-182"></a>      <span class="k">if</span> <span class="p">(</span> <span class="nx">current_user_can</span><span class="p">(</span> <span class="s1">&#39;edit_theme_options&#39;</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-183"></a>        <span class="cm">/* Get Arguments. */</span>
<a name="wp-bootstrap-navwalker.php-184"></a>        <span class="nv">$container</span> <span class="o">=</span> <span class="nv">$args</span><span class="p">[</span><span class="s1">&#39;container&#39;</span><span class="p">];</span>
<a name="wp-bootstrap-navwalker.php-185"></a>        <span class="nv">$container_id</span> <span class="o">=</span> <span class="nv">$args</span><span class="p">[</span><span class="s1">&#39;container_id&#39;</span><span class="p">];</span>
<a name="wp-bootstrap-navwalker.php-186"></a>        <span class="nv">$container_class</span> <span class="o">=</span> <span class="nv">$args</span><span class="p">[</span><span class="s1">&#39;container_class&#39;</span><span class="p">];</span>
<a name="wp-bootstrap-navwalker.php-187"></a>        <span class="nv">$menu_class</span> <span class="o">=</span> <span class="nv">$args</span><span class="p">[</span><span class="s1">&#39;menu_class&#39;</span><span class="p">];</span>
<a name="wp-bootstrap-navwalker.php-188"></a>        <span class="nv">$menu_id</span> <span class="o">=</span> <span class="nv">$args</span><span class="p">[</span><span class="s1">&#39;menu_id&#39;</span><span class="p">];</span>
<a name="wp-bootstrap-navwalker.php-189"></a>        <span class="k">if</span> <span class="p">(</span> <span class="nv">$container</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-190"></a>          <span class="k">echo</span> <span class="s1">&#39;&lt;&#39;</span> <span class="o">.</span> <span class="nx">esc_attr</span><span class="p">(</span> <span class="nv">$container</span> <span class="p">);</span>
<a name="wp-bootstrap-navwalker.php-191"></a>          <span class="k">if</span> <span class="p">(</span> <span class="nv">$container_id</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-192"></a>            <span class="k">echo</span> <span class="s1">&#39; id=&quot;&#39;</span> <span class="o">.</span> <span class="nx">esc_attr</span><span class="p">(</span> <span class="nv">$container_id</span> <span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;&quot;&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-193"></a>          <span class="p">}</span>
<a name="wp-bootstrap-navwalker.php-194"></a>          <span class="k">if</span> <span class="p">(</span> <span class="nv">$container_class</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-195"></a>            <span class="k">echo</span> <span class="s1">&#39; class=&quot;&#39;</span> <span class="o">.</span> <span class="nx">sanitize_html_class</span><span class="p">(</span> <span class="nv">$container_class</span> <span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;&quot;&#39;</span><span class="p">;</span> <span class="p">}</span>
<a name="wp-bootstrap-navwalker.php-196"></a>          <span class="k">echo</span> <span class="s1">&#39;&gt;&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-197"></a>        <span class="p">}</span>
<a name="wp-bootstrap-navwalker.php-198"></a>        <span class="k">echo</span> <span class="s1">&#39;&lt;ul&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-199"></a>        <span class="k">if</span> <span class="p">(</span> <span class="nv">$menu_id</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-200"></a>          <span class="k">echo</span> <span class="s1">&#39; id=&quot;&#39;</span> <span class="o">.</span> <span class="nx">esc_attr</span><span class="p">(</span> <span class="nv">$menu_id</span> <span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;&quot;&#39;</span><span class="p">;</span> <span class="p">}</span>
<a name="wp-bootstrap-navwalker.php-201"></a>        <span class="k">if</span> <span class="p">(</span> <span class="nv">$menu_class</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-202"></a>          <span class="k">echo</span> <span class="s1">&#39; class=&quot;&#39;</span> <span class="o">.</span> <span class="nx">esc_attr</span><span class="p">(</span> <span class="nv">$menu_class</span> <span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;&quot;&#39;</span><span class="p">;</span> <span class="p">}</span>
<a name="wp-bootstrap-navwalker.php-203"></a>        <span class="k">echo</span> <span class="s1">&#39;&gt;&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-204"></a>        <span class="k">echo</span> <span class="s1">&#39;&lt;li&gt;&lt;a href=&quot;&#39;</span> <span class="o">.</span> <span class="nx">esc_url</span><span class="p">(</span> <span class="nx">admin_url</span><span class="p">(</span> <span class="s1">&#39;nav-menus.php&#39;</span> <span class="p">)</span> <span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;&quot; title=&quot;&quot;&gt;&#39;</span> <span class="o">.</span> <span class="nx">esc_attr</span><span class="p">(</span> <span class="s1">&#39;Add a menu&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span> <span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;&lt;/a&gt;&lt;/li&gt;&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-205"></a>        <span class="k">echo</span> <span class="s1">&#39;&lt;/ul&gt;&#39;</span><span class="p">;</span>
<a name="wp-bootstrap-navwalker.php-206"></a>        <span class="k">if</span> <span class="p">(</span> <span class="nv">$container</span> <span class="p">)</span> <span class="p">{</span>
<a name="wp-bootstrap-navwalker.php-207"></a>          <span class="k">echo</span> <span class="s1">&#39;&lt;/&#39;</span> <span class="o">.</span> <span class="nx">esc_attr</span><span class="p">(</span> <span class="nv">$container</span> <span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;&gt;&#39;</span><span class="p">;</span> <span class="p">}</span>
<a name="wp-bootstrap-navwalker.php-208"></a>      <span class="p">}</span>
<a name="wp-bootstrap-navwalker.php-209"></a>    <span class="p">}</span>
<a name="wp-bootstrap-navwalker.php-210"></a>  <span class="p">}</span>
<a name="wp-bootstrap-navwalker.php-211"></a><span class="p">}</span> <span class="c1">// End if().</span>
</pre></div>
</td></tr></table>
    </div>
  


        </div>
        
      </div>
    </div>
  </div>
  
  <div data-module="source/set-changeset" data-hash="8b58d8ca5c81814d33359cdd8d9ebae176994136"></div>



  
    
    
    
  
  

  </div>

        
        
        
          
    
    
  
        
      </div>
    </div>
  </div>

      </div>
    </div>
  

  
</div>

  <div id="adg3-dialog"></div>



  

<div data-module="components/mentions/index">
  
    
    
  
  
    
    
  
  
    
    
  
</div>
<div data-module="components/typeahead/emoji/index">
  
    
    
  
</div>

<div data-module="components/repo-typeahead/index">
  
    
    
  
</div>

    
    
  

    
    
  

    
    
  

    
    
  


  


    
    
  

    
    
  


  
    
    
  
  
    
    
  
  
    
    
  
  
    
    
  
  
    
    
  
  
    
    
  
  
    
    
  


  
  
  <aui-inline-dialog
    id="help-menu-dialog"
    data-aui-alignment="bottom right"

    
    data-aui-alignment-static="true"
    data-module="header/help-menu"
    responds-to="toggle"
    aria-hidden="true">

  <div id="help-menu-section">
    <h1 class="help-menu-heading">Help</h1>

    <form id="help-menu-search-form" class="aui" target="_blank" method="get"
        action="https://support.atlassian.com/customer/search">
      <span id="help-menu-search-icon" class="aui-icon aui-icon-large aui-iconfont-search"></span>
      <input id="help-menu-search-form-input" name="q" class="text" type="text" placeholder="Ask a question">
    </form>

    <ul id="help-menu-links">
      <li>
        <a class="support-ga" data-support-gaq-page="DocumentationHome"
            href="https://confluence.atlassian.com/x/bgozDQ" target="_blank">
          Online help
        </a>
      </li>
      <li>
        <a class="support-ga" data-support-gaq-page="GitTutorials"
            href="https://www.atlassian.com/git?utm_source=bitbucket&amp;utm_medium=link&amp;utm_campaign=help_dropdown&amp;utm_content=learn_git"
            target="_blank">
          Learn Git
        </a>
      </li>
      <li>
        <a id="keyboard-shortcuts-link"
           href="#">Keyboard shortcuts</a>
      </li>
      <li>
        <a class="support-ga" data-support-gaq-page="DocumentationTutorials"
            href="https://confluence.atlassian.com/x/Q4sFLQ" target="_blank">
          Bitbucket tutorials
        </a>
      </li>
      <li>
        <a class="support-ga" data-support-gaq-page="SiteStatus"
            href="https://status.bitbucket.org/" target="_blank">
          Site status
        </a>
      </li>
      <li>
        <a class="support-ga" data-support-gaq-page="Home"
            href="https://support.atlassian.com/bitbucket/" target="_blank">
          Support
        </a>
      </li>
    </ul>
  </div>
</aui-inline-dialog>
  


  <div class="omnibar" data-module="components/omnibar/index">
    <form class="omnibar-form aui"></form>
  </div>
  
    
    
  
  
    
    
  
  
    
    
  
  
    
    
  





  

  <div class="_mustache-templates">
    
      <script id="branch-checkout-template" type="text/html">
        

<div id="checkout-branch-contents">
  <div class="command-line">
    <p>
      Check out this branch on your local machine to begin working on it.
    </p>
    <input type="text" class="checkout-command" readonly="readonly"
        
           value="git fetch && git checkout [[branchName]]"
        
        >
  </div>
  
    <div class="sourcetree-callout clone-in-sourcetree"
  data-module="components/clone/clone-in-sourcetree"
  data-https-url="https://mlafuente@bitbucket.org/baumdigital/centralamerica-wordpress.git"
  data-ssh-url="ssh://git@bitbucket.org/baumdigital/centralamerica-wordpress.git">

  <div>
    <button class="aui-button aui-button-primary">
      
        Check out in SourceTree
      
    </button>
  </div>

  <p class="windows-text">
    
      <a href="http://www.sourcetreeapp.com/?utm_source=internal&amp;utm_medium=link&amp;utm_campaign=clone_repo_win" target="_blank">Atlassian SourceTree</a>
      is a free Git and Mercurial client for Windows.
    
  </p>
  <p class="mac-text">
    
      <a href="http://www.sourcetreeapp.com/?utm_source=internal&amp;utm_medium=link&amp;utm_campaign=clone_repo_mac" target="_blank">Atlassian SourceTree</a>
      is a free Git and Mercurial client for Mac.
    
  </p>
</div>
  
</div>

      </script>
    
      <script id="branch-dialog-template" type="text/html">
        

<div class="tabbed-filter-widget branch-dialog">
  <div class="tabbed-filter">
    <input placeholder="Filter branches" class="filter-box" autosave="branch-dropdown-24066240" type="text">
    [[^ignoreTags]]
      <div class="aui-tabs horizontal-tabs aui-tabs-disabled filter-tabs">
        <ul class="tabs-menu">
          <li class="menu-item active-tab"><a href="#branches">Branches</a></li>
          <li class="menu-item"><a href="#tags">Tags</a></li>
        </ul>
      </div>
    [[/ignoreTags]]
  </div>
  
    <div class="tab-pane active-pane" id="branches" data-filter-placeholder="Filter branches">
      <ol class="filter-list">
        <li class="empty-msg">No matching branches</li>
        [[#branches]]
          
            [[#hasMultipleHeads]]
              [[#heads]]
                <li class="comprev filter-item">
                  <a class="pjax-trigger filter-item-link" href="/baumdigital/centralamerica-wordpress/src/[[changeset]]/wp-content/themes/centralamerica/wp-bootstrap-navwalker.php?at=[[safeName]]"
                     title="[[name]]">
                    [[name]] ([[shortChangeset]])
                  </a>
                </li>
              [[/heads]]
            [[/hasMultipleHeads]]
            [[^hasMultipleHeads]]
              <li class="comprev filter-item">
                <a class="pjax-trigger filter-item-link" href="/baumdigital/centralamerica-wordpress/src/[[changeset]]/wp-content/themes/centralamerica/wp-bootstrap-navwalker.php?at=[[safeName]]" title="[[name]]">
                  [[name]]
                </a>
              </li>
            [[/hasMultipleHeads]]
          
        [[/branches]]
      </ol>
    </div>
    <div class="tab-pane" id="tags" data-filter-placeholder="Filter tags">
      <ol class="filter-list">
        <li class="empty-msg">No matching tags</li>
        [[#tags]]
          <li class="comprev filter-item">
            <a class="pjax-trigger filter-item-link" href="/baumdigital/centralamerica-wordpress/src/[[changeset]]/wp-content/themes/centralamerica/wp-bootstrap-navwalker.php?at=[[safeName]]" title="[[name]]">
              [[name]]
            </a>
          </li>
        [[/tags]]
      </ol>
    </div>
  
</div>

      </script>
    
      <script id="image-upload-template" type="text/html">
        

<form id="upload-image" method="POST"
    
      action="/xhr/baumdigital/centralamerica-wordpress/image-upload/"
    >
  <input type='hidden' name='csrfmiddlewaretoken' value='mhS83ywEFuOpaD8kZNXb26NBSFVqITGx' />

  <div class="drop-target">
    <p class="centered">Drag image here</p>
  </div>

  
  <div>
    <button class="aui-button click-target">Select an image</button>
    <input name="file" type="file" class="hidden file-target"
           accept="image/jpeg, image/gif, image/png" />
    <input type="submit" class="hidden">
  </div>
</form>


      </script>
    
      <script id="mention-result" type="text/html">
        
<span class="mention-result">
  <span class="aui-avatar aui-avatar-small mention-result--avatar">
    <span class="aui-avatar-inner">
      <img src="[[avatar_url]]">
    </span>
  </span>
  [[#display_name]]
    <span class="display-name mention-result--display-name">[[&display_name]]</span> <small class="username mention-result--username">[[&username]]</small>
  [[/display_name]]
  [[^display_name]]
    <span class="username mention-result--username">[[&username]]</span>
  [[/display_name]]
  [[#is_teammate]][[^is_team]]
    <span class="aui-lozenge aui-lozenge-complete aui-lozenge-subtle mention-result--lozenge">teammate</span>
  [[/is_team]][[/is_teammate]]
</span>
      </script>
    
      <script id="mention-call-to-action" type="text/html">
        
[[^query]]
<li class="bb-typeahead-item">Begin typing to search for a user</li>
[[/query]]
[[#query]]
<li class="bb-typeahead-item">Continue typing to search for a user</li>
[[/query]]

      </script>
    
      <script id="mention-no-results" type="text/html">
        
[[^searching]]
<li class="bb-typeahead-item">Found no matching users for <em>[[query]]</em>.</li>
[[/searching]]
[[#searching]]
<li class="bb-typeahead-item bb-typeahead-searching">Searching for <em>[[query]]</em>.</li>
[[/searching]]

      </script>
    
      <script id="emoji-result" type="text/html">
        
<div class="aui-avatar aui-avatar-small">
  <div class="aui-avatar-inner">
    <img src="[[src]]">
  </div>
</div>
<span class="name">[[&name]]</span>

      </script>
    
      <script id="repo-typeahead-result" type="text/html">
        <span class="aui-avatar aui-avatar-project aui-avatar-xsmall">
  <span class="aui-avatar-inner">
    <img src="[[avatar]]">
  </span>
</span>
<span class="owner">[[&owner]]</span>/<span class="slug">[[&slug]]</span>

      </script>
    
      <script id="share-form-template" type="text/html">
        

<div class="error aui-message hidden">
  <span class="aui-icon icon-error"></span>
  <div class="message"></div>
</div>
<form class="aui">
  <table class="widget bb-list aui">
    <thead>
    <tr class="assistive">
      <th class="user">User</th>
      <th class="role">Role</th>
      <th class="actions">Actions</th>
    </tr>
    </thead>
    <tbody>
      <tr class="form">
        <td colspan="2">
          <input type="text" class="text bb-user-typeahead user-or-email"
                 placeholder="Username or email address"
                 autocomplete="off"
                 data-bb-typeahead-focus="false"
                 [[#disabled]]disabled[[/disabled]]>
        </td>
        <td class="actions">
          <button type="submit" class="aui-button aui-button-light" disabled>Add</button>
        </td>
      </tr>
    </tbody>
  </table>
</form>

      </script>
    
      <script id="share-detail-template" type="text/html">
        

[[#username]]
<td class="user
    [[#hasCustomGroups]]custom-groups[[/hasCustomGroups]]"
    [[#error]]data-error="[[error]]"[[/error]]>
  <div title="[[displayName]]">
    <a href="/[[username]]/" class="user">
      <span class="aui-avatar aui-avatar-xsmall">
        <span class="aui-avatar-inner">
          <img src="[[avatar]]">
        </span>
      </span>
      <span>[[displayName]]</span>
    </a>
  </div>
</td>
[[/username]]
[[^username]]
<td class="email
    [[#hasCustomGroups]]custom-groups[[/hasCustomGroups]]"
    [[#error]]data-error="[[error]]"[[/error]]>
  <div title="[[email]]">
    <span class="aui-icon aui-icon-small aui-iconfont-email"></span>
    [[email]]
  </div>
</td>
[[/username]]
<td class="role
    [[#hasCustomGroups]]custom-groups[[/hasCustomGroups]]">
  <div>
    [[#group]]
      [[#hasCustomGroups]]
        <select class="group [[#noGroupChoices]]hidden[[/noGroupChoices]]">
          [[#groups]]
            <option value="[[slug]]"
                [[#isSelected]]selected[[/isSelected]]>
              [[name]]
            </option>
          [[/groups]]
        </select>
      [[/hasCustomGroups]]
      [[^hasCustomGroups]]
      <label>
        <input type="checkbox" class="admin"
            [[#isAdmin]]checked[[/isAdmin]]>
        Administrator
      </label>
      [[/hasCustomGroups]]
    [[/group]]
    [[^group]]
      <ul>
        <li class="permission aui-lozenge aui-lozenge-complete
            [[^read]]aui-lozenge-subtle[[/read]]"
            data-permission="read">
          read
        </li>
        <li class="permission aui-lozenge aui-lozenge-complete
            [[^write]]aui-lozenge-subtle[[/write]]"
            data-permission="write">
          write
        </li>
        <li class="permission aui-lozenge aui-lozenge-complete
            [[^admin]]aui-lozenge-subtle[[/admin]]"
            data-permission="admin">
          admin
        </li>
      </ul>
    [[/group]]
  </div>
</td>
<td class="actions
    [[#hasCustomGroups]]custom-groups[[/hasCustomGroups]]">
  <div>
    <a href="#" class="delete">
      <span class="aui-icon aui-icon-small aui-iconfont-remove">Delete</span>
    </a>
  </div>
</td>

      </script>
    
      <script id="share-team-template" type="text/html">
        

<div class="clearfix">
  <span class="team-avatar-container">
    <span class="aui-avatar aui-avatar-medium">
      <span class="aui-avatar-inner">
        <img src="[[avatar]]">
      </span>
    </span>
  </span>
  <span class="team-name-container">
    [[display_name]]
  </span>
</div>
<p class="helptext">
  
    Existing users are granted access to this team immediately.
    New users will be sent an invitation.
  
</p>
<div class="share-form"></div>

      </script>
    
      <script id="scope-list-template" type="text/html">
        <ul class="scope-list">
  [[#scopes]]
    <li class="scope-list--item">
      <span class="scope-list--icon aui-icon aui-icon-small [[icon]]"></span>
      <span class="scope-list--description">[[description]]</span>
    </li>
  [[/scopes]]
</ul>

      </script>
    
      <script id="source-changeset" type="text/html">
        

<a href="/baumdigital/centralamerica-wordpress/src/[[raw_node]]/[[path]]?at=master"
    class="[[#selected]]highlight[[/selected]]"
    data-hash="[[node]]">
  [[#author.username]]
    <span class="aui-avatar aui-avatar-xsmall">
      <span class="aui-avatar-inner">
        <img src="[[author.avatar]]">
      </span>
    </span>
    <span class="author" title="[[raw_author]]">[[author.display_name]]</span>
  [[/author.username]]
  [[^author.username]]
    <span class="aui-avatar aui-avatar-xsmall">
      <span class="aui-avatar-inner">
        <img src="https://d301sr5gafysq2.cloudfront.net/a23b1b22caa5/img/default_avatar/user_blue.svg">
      </span>
    </span>
    <span class="author unmapped" title="[[raw_author]]">[[author]]</span>
  [[/author.username]]
  <time datetime="[[utctimestamp]]" data-title="true">[[utctimestamp]]</time>
  <span class="message">[[message]]</span>
</a>

      </script>
    
      <script id="embed-template" type="text/html">
        

<form class="aui inline-dialog-embed-dialog">
  <label for="embed-code-[[dialogId]]">Embed this source in another page:</label>
  <input type="text" readonly="true" value="&lt;script src=&quot;[[url]]&quot;&gt;&lt;/script&gt;" id="embed-code-[[dialogId]]" class="embed-code">
</form>

      </script>
    
      <script id="edit-form-template" type="text/html">
        


<form class="bb-content-container online-edit-form aui"
      data-repository="[[owner]]/[[slug]]"
      data-destination-repository="[[destinationOwner]]/[[destinationSlug]]"
      data-local-id="[[localID]]"
      [[#isWriter]]data-is-writer="true"[[/isWriter]]
      [[#hasPushAccess]]data-has-push-access="true"[[/hasPushAccess]]
      [[#isPullRequest]]data-is-pull-request="true"[[/isPullRequest]]
      [[#hideCreatePullRequest]]data-hide-create-pull-request="true"[[/hideCreatePullRequest]]
      data-hash="[[hash]]"
      data-branch="[[branch]]"
      data-path="[[path]]"
      data-is-create="[[isCreate]]"
      data-preview-url="/xhr/[[owner]]/[[slug]]/preview/[[hash]]/[[encodedPath]]"
      data-preview-error="We had trouble generating your preview."
      data-unsaved-changes-error="Your changes will be lost. Are you sure you want to leave?">
  <div class="bb-content-container-header">
    <div class="bb-content-container-header-primary">
      <h2 class="bb-content-container-heading">
        [[#isCreate]]
          [[#branch]]
            
              Creating <span class="edit-path">[[path]]</span> on branch: <strong>[[branch]]</strong>
            
          [[/branch]]
          [[^branch]]
            [[#path]]
              
                Creating <span class="edit-path">[[path]]</span>
              
            [[/path]]
            [[^path]]
              
                Creating <span class="edit-path">unnamed file</span>
              
            [[/path]]
          [[/branch]]
        [[/isCreate]]
        [[^isCreate]]
          
            Editing <span class="edit-path">[[path]]</span> on branch: <strong>[[branch]]</strong>
          
        [[/isCreate]]
      </h2>
    </div>
    <div class="bb-content-container-header-secondary">
      <div class="hunk-nav aui-buttons">
        <button class="prev-hunk-button aui-button aui-button-light"
            disabled="disabled" aria-disabled="true"
            title="Previous change">
          <span class="aui-icon aui-icon-small aui-iconfont-up">Previous change</span>
        </button>
        <button class="next-hunk-button aui-button aui-button-light"
            disabled="disabled" aria-disabled="true"
            title="Next change">
          <span class="aui-icon aui-icon-small aui-iconfont-down">Next change</span>
        </button>
      </div>
    </div>
  </div>
  <div class="bb-content-container-body has-header has-footer file-editor">
    <textarea id="id_source"></textarea>
  </div>
  <div class="preview-pane"></div>
  <div class="bb-content-container-footer">
    <div class="bb-content-container-footer-primary">
      <div id="syntax-mode" class="bb-content-container-item field">
        <label for="id_syntax-mode" class="online-edit-form--label">Syntax mode:</label>
        <select id="id_syntax-mode">
          [[#syntaxes]]
            <option value="[[#mime]][[mime]][[/mime]][[^mime]][[mode]][[/mime]]">[[name]]</option>
          [[/syntaxes]]
        </select>
      </div>
      <div id="indent-mode" class="bb-content-container-item field">
        <label for="id_indent-mode" class="online-edit-form--label">Indent mode:</label>
        <select id="id_indent-mode">
          <option value="tabs">Tabs</option>
          <option value="spaces">Spaces</option>
        </select>
      </div>
      <div id="indent-size" class="bb-content-container-item field">
        <label for="id_indent-size" class="online-edit-form--label">Indent size:</label>
        <select id="id_indent-size">
          <option value="2">2</option>
          <option value="4">4</option>
          <option value="8">8</option>
        </select>
      </div>
      <div id="wrap-mode" class="bb-content-container-item field">
        <label for="id_wrap-mode" class="online-edit-form--label">Line wrap:</label>
        <select id="id_wrap-mode">
          <option value="">Off</option>
          <option value="soft">On</option>
        </select>
      </div>
    </div>
    <div class="bb-content-container-footer-secondary">
      [[^isCreate]]
        <button class="preview-button aui-button aui-button-light"
                disabled="disabled" aria-disabled="true"
                data-preview-label="View diff"
                data-edit-label="Edit file">View diff</button>
      [[/isCreate]]
      <button class="save-button aui-button aui-button-primary"
              disabled="disabled" aria-disabled="true">Commit</button>
      [[^isCreate]]
        <a class="aui-button aui-button-link cancel-link" href="#">Cancel</a>
      [[/isCreate]]
    </div>
  </div>
</form>

      </script>
    
      <script id="commit-form-template" type="text/html">
        

<form class="aui commit-form"
      data-title="Commit changes"
      [[#isDelete]]
        data-default-message="[[filename]] deleted online with Bitbucket"
      [[/isDelete]]
      [[#isCreate]]
        data-default-message="[[filename]] created online with Bitbucket"
      [[/isCreate]]
      [[^isDelete]]
        [[^isCreate]]
          data-default-message="[[filename]] edited online with Bitbucket"
        [[/isCreate]]
      [[/isDelete]]
      data-fork-error="We had trouble creating your fork."
      data-commit-error="We had trouble committing your changes."
      data-pull-request-error="We had trouble creating your pull request."
      data-update-error="We had trouble updating your pull request."
      data-branch-conflict-error="A branch with that name already exists."
      data-forking-message="Forking repository"
      data-committing-message="Committing changes"
      data-merging-message="Branching and merging changes"
      data-creating-pr-message="Creating pull request"
      data-updating-pr-message="Updating pull request"
      data-cta-label="Commit"
      data-cancel-label="Cancel">
  [[#isDelete]]
    <div class="aui-message info">
      <span class="aui-icon icon-info"></span>
      <span class="message">
        
          Committing this change will delete [[filename]] from your repository.
        
      </span>
    </div>
  [[/isDelete]]
  <div class="aui-message error hidden">
    <span class="aui-icon icon-error"></span>
    <span class="message"></span>
  </div>
  [[^isWriter]]
    <div class="aui-message info">
      <span class="aui-icon icon-info"></span>
      <p class="title">
        
          You don't have write access to this repository.
        
      </p>
      <span class="message">
        
          We'll create a fork for your changes and submit a
          pull request back to this repository.
        
      </span>
    </div>
  [[/isWriter]]
  [[#isRename]]
    <div class="field-group">
      <label for="id_path">New path</label>
      <input type="text" id="id_path" class="text" value="[[path]]"/>
    </div>
  [[/isRename]]
  <div class="field-group">
    <label for="id_message">Commit message</label>
    <textarea id="id_message" class="long-field textarea"></textarea>
  </div>
  [[^isPullRequest]]
    [[#isWriter]]
      <fieldset class="group">
        <div class="checkbox">
          [[#hasPushAccess]]
            [[^hideCreatePullRequest]]
              <input id="id_create-pullrequest" class="checkbox" type="checkbox">
              <label for="id_create-pullrequest">Create a pull request for this change</label>
            [[/hideCreatePullRequest]]
          [[/hasPushAccess]]
          [[^hasPushAccess]]
            <input id="id_create-pullrequest" class="checkbox" type="checkbox" checked="checked" aria-disabled="true" disabled="true">
            <label for="id_create-pullrequest" title="Branch restrictions do not allow you to update this branch.">Create a pull request for this change</label>
          [[/hasPushAccess]]
        </div>
      </fieldset>
      <div id="pr-fields">
        <div id="branch-name-group" class="field-group">
          <label for="id_branch-name">Branch name</label>
          <input type="text" id="id_branch-name" class="text long-field">
        </div>
        

<div class="field-group" id="id_reviewers_group">
  <label for="reviewers">Reviewers</label>

  
  <input id="reviewers" name="reviewers" type="hidden"
          value=""
          data-mention-url="/xhr/mentions/repositories/:dest_username/:dest_slug"
          data-reviewers="[]"
          data-suggested="[]"
          data-locked="[]">

  <div class="error"></div>
  <div class="suggested-reviewers"></div>

</div>

      </div>
    [[/isWriter]]
  [[/isPullRequest]]
  <button type="submit" id="id_submit">Commit</button>
</form>

      </script>
    
      <script id="merge-message-template" type="text/html">
        Merged [[hash]] into [[branch]]

[[message]]

      </script>
    
      <script id="commit-merge-error-template" type="text/html">
        



  We had trouble merging your changes. We stored them on the <strong>[[branch]]</strong> branch, so feel free to
  <a href="/[[owner]]/[[slug]]/full-commit/[[hash]]/[[path]]?at=[[encodedBranch]]">view them</a> or
  <a href="#" class="create-pull-request-link">create a pull request</a>.


      </script>
    
      <script id="selected-reviewer-template" type="text/html">
        <div class="aui-avatar aui-avatar-xsmall">
  <div class="aui-avatar-inner">
    <img src="[[avatar_url]]">
  </div>
</div>
[[display_name]]

      </script>
    
      <script id="suggested-reviewer-template" type="text/html">
        <button class="aui-button aui-button-link" type="button" tabindex="-1">[[display_name]]</button>

      </script>
    
      <script id="suggested-reviewers-template" type="text/html">
        

<span class="suggested-reviewer-list-label">Recent:</span>
<ul class="suggested-reviewer-list unstyled-list"></ul>

      </script>
    
      <script id="omnibar-form-template" type="text/html">
        <div class="omnibar-input-container">
  <input class="omnibar-input" type="text" [[#placeholder]]placeholder="[[placeholder]]"[[/placeholder]]>
</div>
<ul class="omnibar-result-group-list"></ul>

      </script>
    
      <script id="omnibar-blank-slate-template" type="text/html">
        

<div class="omnibar-blank-slate">No results found</div>

      </script>
    
      <script id="omnibar-result-group-list-item-template" type="text/html">
        <div class="omnibar-result-group-header clearfix">
  <h2 class="omnibar-result-group-label" title="[[label]]">[[label]]</h2>
  <span class="omnibar-result-group-context" title="[[context]]">[[context]]</span>
</div>
<ul class="omnibar-result-list unstyled-list"></ul>

      </script>
    
      <script id="omnibar-result-list-item-template" type="text/html">
        [[#url]]
  <a href="[[&url]]" class="omnibar-result-label">[[&label]]</a>
[[/url]]
[[^url]]
  <span class="omnibar-result-label">[[&label]]</span>
[[/url]]
[[#context]]
  <span class="omnibar-result-context">[[context]]</span>
[[/context]]

      </script>
    
  </div>




  
  


<script>
  window.__initial_state__ = {"global": {"features": {"pr-merge-sign-off": true, "comment-likes": true, "fast-pr-merges": true, "twofactor-u2f": true, "clone-mirrors": true, "repo-onboarding": true, "require-issue-key": true, "snippets": true, "adg3": true, "new-dashboard": true, "integrations-page": true, "online-ides": true, "fe_word_diff": true, "clonebundles": true, "use-moneybucket": true, "pinned-issue-comments": true, "invitation-matching-email": true, "diff-renames-public": true, "app-passwords": true, "ignore-whitespace-button": true, "new-features-management": true, "atlassian-editor": true, "squash-merge": true, "pr-shared-component": true, "build-status": true, "projects": true, "evolution": false, "repo-avatar-revival": true, "diff-renames-internal": true, "new-features": true, "pr-checkout-command": true, "search-results-adg3-page": true, "premium-features": true, "lfs_post_beta": true, "two-step": true, "bundle-splitting": true}, "locale": "en", "targetFeatures": {"pr-merge-sign-off": true, "comment-likes": true, "fast-pr-merges": true, "twofactor-u2f": true, "clone-mirrors": true, "repo-onboarding": true, "require-issue-key": true, "snippets": true, "adg3": true, "new-dashboard": true, "integrations-page": true, "online-ides": true, "fe_word_diff": true, "clonebundles": true, "use-moneybucket": true, "pinned-issue-comments": true, "invitation-matching-email": true, "diff-renames-public": true, "app-passwords": true, "ignore-whitespace-button": true, "new-features-management": true, "atlassian-editor": false, "squash-merge": true, "pr-shared-component": true, "build-status": true, "projects": true, "evolution": false, "repo-avatar-revival": true, "diff-renames-internal": true, "new-features": true, "pr-checkout-command": true, "search-results-adg3-page": true, "premium-features": true, "lfs_post_beta": true, "two-step": true, "bundle-splitting": true}, "isFocusedTask": false, "teams": [], "bitbucketActions": [{"analytics_label": null, "icon_class": "", "badge_label": null, "weight": 100, "url": "/repo/create?owner=baumdigital", "tab_name": null, "can_display": true, "label": "<strong>Repository<\/strong>", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "repository-create-drawer-item", "icon": ""}, {"analytics_label": null, "icon_class": "", "badge_label": null, "weight": 110, "url": "/account/create-team/", "tab_name": null, "can_display": true, "label": "<strong>Team<\/strong>", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "team-create-drawer-item", "icon": ""}, {"analytics_label": null, "icon_class": "", "badge_label": null, "weight": 120, "url": "/account/projects/create?owner=baumdigital", "tab_name": null, "can_display": true, "label": "<strong>Project<\/strong>", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "project-create-drawer-item", "icon": ""}, {"analytics_label": null, "icon_class": "", "badge_label": null, "weight": 130, "url": "/snippets/new?owner=baumdigital", "tab_name": null, "can_display": true, "label": "<strong>Snippet<\/strong>", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "snippet-create-drawer-item", "icon": ""}], "targetUser": {"username": "baumdigital", "website": null, "display_name": "Baum Digital", "uuid": "{6b24878c-7d71-4249-95f4-8ea0730682c8}", "links": {"self": {"href": "https://bitbucket.org/!api/2.0/teams/baumdigital"}, "html": {"href": "https://bitbucket.org/baumdigital/"}, "avatar": {"href": "https://bitbucket.org/account/baumdigital/avatar/32/"}}, "extra": {"has_atlassian_account": false}, "created_on": "2015-08-03T20:40:51.123514+00:00", "location": null, "type": "team"}, "isNavigationOpen": true, "path": "/baumdigital/centralamerica-wordpress/src/8b58d8ca5c81814d33359cdd8d9ebae176994136/wp-content/themes/centralamerica/wp-bootstrap-navwalker.php", "focusedTaskBackButtonUrl": "", "currentUser": {"username": "mlafuente", "website": null, "display_name": "mario", "account_id": "557058:c4066328-ff29-474a-90d8-02707c5c8125", "links": {"self": {"href": "https://bitbucket.org/!api/2.0/users/mlafuente"}, "html": {"href": "https://bitbucket.org/mlafuente/"}, "avatar": {"href": "https://bitbucket.org/account/mlafuente/avatar/32/"}}, "extra": {"has_atlassian_account": true}, "created_on": "2017-06-05T17:33:53.553701+00:00", "is_staff": false, "location": null, "type": "user", "uuid": "{1cbc9888-e510-4835-b905-9e1620a0e43a}"}}, "repository": {"section": {"connectActions": [], "cloneProtocol": "https", "currentRepository": {"scm": "git", "name": "Centralamerica-Wordpress", "links": {"clone": [{"href": "https://mlafuente@bitbucket.org/baumdigital/centralamerica-wordpress.git", "name": "https"}, {"href": "ssh://git@bitbucket.org/baumdigital/centralamerica-wordpress.git", "name": "ssh"}], "self": {"href": "https://bitbucket.org/!api/2.0/repositories/baumdigital/centralamerica-wordpress"}, "html": {"href": "https://bitbucket.org/baumdigital/centralamerica-wordpress"}, "avatar": {"href": "https://bitbucket.org/baumdigital/centralamerica-wordpress/avatar/32/"}}, "full_name": "baumdigital/centralamerica-wordpress", "owner": {"username": "baumdigital", "website": null, "display_name": "Baum Digital", "uuid": "{6b24878c-7d71-4249-95f4-8ea0730682c8}", "links": {"self": {"href": "https://bitbucket.org/!api/2.0/teams/baumdigital"}, "html": {"href": "https://bitbucket.org/baumdigital/"}, "avatar": {"href": "https://bitbucket.org/account/baumdigital/avatar/32/"}}, "created_on": "2015-08-03T20:40:51.123514+00:00", "location": null, "type": "team"}, "type": "repository", "slug": "centralamerica-wordpress", "uuid": "{75f3930b-86ec-44de-bcb3-6330936cd271}"}, "menuItems": [{"analytics_label": "repository.overview", "icon_class": "icon-overview", "badge_label": null, "weight": 100, "url": "/baumdigital/centralamerica-wordpress/overview", "tab_name": "overview", "can_display": true, "label": "Overview", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "repo-overview-link", "icon": "icon-overview"}, {"analytics_label": "repository.source", "icon_class": "icon-source", "badge_label": null, "weight": 200, "url": "/baumdigital/centralamerica-wordpress/src", "tab_name": "source", "can_display": true, "label": "Source", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "repo-source-link", "icon": "icon-source"}, {"analytics_label": "repository.commits", "icon_class": "icon-commits", "badge_label": null, "weight": 300, "url": "/baumdigital/centralamerica-wordpress/commits/", "tab_name": "commits", "can_display": true, "label": "Commits", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "repo-commits-link", "icon": "icon-commits"}, {"analytics_label": "repository.branches", "icon_class": "icon-branches", "badge_label": null, "weight": 400, "url": "/baumdigital/centralamerica-wordpress/branches/", "tab_name": "branches", "can_display": true, "label": "Branches", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "repo-branches-link", "icon": "icon-branches"}, {"analytics_label": "repository.pullrequests", "icon_class": "icon-pull-requests", "badge_label": "0 open pull requests", "weight": 500, "url": "/baumdigital/centralamerica-wordpress/pull-requests/", "tab_name": "pullrequests", "can_display": true, "label": "Pull requests", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "repo-pullrequests-link", "icon": "icon-pull-requests"}, {"analytics_label": "user.addon", "icon_class": "aui-iconfont-build", "badge_label": null, "weight": 550, "url": "/baumdigital/centralamerica-wordpress/addon/pipelines/home", "tab_name": "repopage-d6GR6A-add-on-link", "can_display": true, "label": "Pipelines", "anchor": true, "analytics_payload": {}, "icon_url": null, "type": "connect_menu_item", "id": "repopage-d6GR6A-add-on-link", "target": "_self"}, {"analytics_label": "repository.downloads", "icon_class": "icon-downloads", "badge_label": null, "weight": 800, "url": "/baumdigital/centralamerica-wordpress/downloads/", "tab_name": "downloads", "can_display": true, "label": "Downloads", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "repo-downloads-link", "icon": "icon-downloads"}], "bitbucketActions": [{"analytics_label": "repository.clone", "icon_class": "icon-clone", "badge_label": null, "weight": 100, "url": "#clone", "tab_name": "clone", "can_display": true, "label": "<strong>Clone<\/strong> this repository", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "repo-clone-button", "icon": "icon-clone"}, {"analytics_label": "repository.compare", "icon_class": "aui-icon-small aui-iconfont-devtools-compare", "badge_label": null, "weight": 400, "url": "/baumdigital/centralamerica-wordpress/branches/compare", "tab_name": "compare", "can_display": true, "label": "<strong>Compare<\/strong> branches or tags", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "repo-compare-link", "icon": "aui-icon-small aui-iconfont-devtools-compare"}, {"analytics_label": "repository.fork", "icon_class": "icon-fork", "badge_label": null, "weight": 500, "url": "/baumdigital/centralamerica-wordpress/fork", "tab_name": "fork", "can_display": true, "label": "<strong>Fork<\/strong> this repository", "anchor": true, "analytics_payload": {}, "target": "_self", "type": "menu_item", "id": "repo-fork-link", "icon": "icon-fork"}], "activeMenuItem": "source"}}};
  window.__settings__ = {"SOCIAL_AUTH_ATLASSIANID_LOGOUT_URL": "https://id.atlassian.com/logout", "CANON_URL": "https://bitbucket.org", "API_CANON_URL": "https://api.bitbucket.org"};
</script>

<script src="https://d301sr5gafysq2.cloudfront.net/a23b1b22caa5/jsi18n/en/djangojs.js"></script>

  <script src="https://d301sr5gafysq2.cloudfront.net/a23b1b22caa5/dist/webpack/locales/en.js"></script>

<script src="https://d301sr5gafysq2.cloudfront.net/a23b1b22caa5/dist/webpack/vendor.js"></script>
<script src="https://d301sr5gafysq2.cloudfront.net/a23b1b22caa5/dist/webpack/app.js"></script>


<script async src="https://www.google-analytics.com/analytics.js"></script>

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","queueTime":0,"licenseKey":"a2cef8c3d3","agent":"","transactionName":"Z11RZxdWW0cEVkYLDV4XdUYLVEFdClsdAAtEWkZQDlJBGgRFQhFMQl1DXFcZQ10AQkFYBFlUVlEXWEJHAA==","applicationID":"1841284","errorBeacon":"bam.nr-data.net","applicationTime":284}</script>
</body>
</html>