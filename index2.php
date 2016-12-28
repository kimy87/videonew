
<!DOCTYPE html>
<html lang="en-gb" dir="ltr" class="uk-height-1-1">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login layout example - UIkit documentation</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">
        <link rel="stylesheet" href="css/uikit.css">
        <script src="js/jquery.js"></script>
        <script src="js/uikit.js"></script>

        <style>
        .uk-grid > * {
            padding-left: 10px;
            padding-right: 10px;
        }
        .uk-container {
          max-width:100%;
        }
        #mk-list-recent-1 article {
            background: rgba(0, 0, 0, 0.5) none repeat scroll 0 0;
            border: 2px solid #fff;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
            text-align: center;
        }
        </style>
    </head>



      <body>
      <div class="uk-grid uk-grid-collapse">
      <div class="uk-visible-large uk-width-large-2-10">
      <div id="mk-column-1" class="uk-height-1-1 uk-overlay-background" data-uk-sticky data-uk-scrollspy="{cls:'uk-animation-slide-left',delay:1000}">
      <nav class="uk-navbar" style="background:transparent!important">
      <ul id="mk-nav-lang" class="uk-navbar-nav uk-contrast">
      <li class="uk-active"><a href="http://www.kinitv.com" style="background:#fff;text-shadow:none">EN</a></li>
      <li><a href="http://www.kinitv.com/bm">BM</a></li>
      <li><a href="http://www.kinitv.com/cn">中文</a></li>
      </ul>
      <div class="uk-hidden-large uk-navbar-flip uk-navbar-content">
      <a href="http://www.kinitv.com"><img src="http://static01.malaysiakini.com/kinitv/desktop/img/logo.svg" alt="KiniTV logo"></a>
      </div>
      </nav>
      <div class="uk-visible-large">
      <a href="http://www.kinitv.com"><img src="http://static01.malaysiakini.com/kinitv/desktop/img/logo.svg" width="150" alt="KiniTV logo" class="uk-margin-top uk-margin-right uk-margin-bottom uk-margin-left"></a>
      </div>
      <ul id="mk-list-menu" class="uk-visible-large uk-nav uk-nav-side uk-nav-parent-icon uk-margin-top uk-contrast" data-uk-nav data-uk-switcher>
      <li class="uk-active"><a onclick="changeChannel('all','Recent Videos');" href="#"><i class="uk-icon-justify uk-icon-clock-o"></i> Most Recent</a></li>
      <li><a onclick="changeChannel('monthly-hit','Popular Videos');"><i class="uk-icon-justify uk-icon-heart-o"></i> Most Popular</a></li>
      <li class="uk-nav-header uk-text-contrast">Channels</li>

      </ul>
      <form class="uk-hidden uk-search uk-contrast" data-uk-search="{flipDropdown:true, source:'../tests/components/_searchautocomplete.json'}">
      <input class="uk-search-field" type="search" placeholder="Search">
      </form>
      <div class="uk-position-bottom-left uk-width-1-1" style="z-index:-1;">
      <div class="uk-panel uk-text-center uk-margin-bottom uk-contrast">
      <div class="uk-grid uk-grid-collapse uk-margin-large-top">
      <div class="uk-width-1-4">
      <a href="http://www.dailymotion.com/kinitv" title="Dailymotion" data-uk-tooltip="{pos:'right'}"><i class="uk-icon-small uk-icon-play-circle-o"></i></a>
      </div>
      <div class="uk-width-1-4">
      <a href="http://www.youtube.com/kinitv" title="YouTube" data-uk-tooltip="{pos:'right'}"><i class="uk-icon-small uk-icon-youtube"></i></a>
      </div>
      <div class="uk-width-1-4">
      <a href="http://www.facebook.com/kinitv" title="Facebook" data-uk-tooltip="{pos:'right'}"><i class="uk-icon-small uk-icon-facebook"></i></a>
      </div>
      <div class="uk-width-1-4">
      <a href="http://www.twitter.com/kinitv" title="Twitter" data-uk-tooltip="{pos:'right'}"><i class="uk-icon-small uk-icon-twitter"></i></a>
      </div>
      <div class="uk-width-medium-1-1 uk-width-large-1-1 uk-text-center uk-margin-top">
      <ul class="uk-subnav uk-subnav-line" style="justify-content: center;">
      <li><a href="#tv-modal-about" data-uk-modal class="uk-text-muted">About Us</a></li>
      <li><a href="#tv-modal-jobs" data-uk-modal class="uk-text-muted">Jobs</a></li>
      <li><a class="uk-text-muted" href="http://fgmedia.my/audience-reach/kinitv/?utm_source=advertise2&utm_medium=top-nav-bm&utm_campaign=click" target="_blank">Advertise <i class="uk-icon-external-link"></i></a></li>
      </ul>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      <div id="mk-column-2" class="uk-width-medium-1-3 uk-width-large-3-10" data-uk-scrollspy="{cls:'uk-animation-fade',delay:1500}">
      <div class="uk-hidden-large uk-position-z-index" data-uk-sticky data-uk-scrollspy="{cls:'uk-animation-slide-left',delay:500}">
      <nav class="uk-navbar" style="background:none!important">
      <ul class="uk-navbar-nav" style="background:#fff">
      <li><a data-uk-offcanvas="{target:'#mk-offcanvas-menu'}"><i class="uk-icon-small uk-icon-bars"></i></a></li>
      </ul>
      <div class="uk-navbar-brand">
      <a href="http://www.kinitv.com"><img src="http://static01.malaysiakini.com/kinitv/desktop/img/logo.svg" alt="KiniTV logo" class="uk-height-1-1"></a>
      </div>
      </nav>
      </div>
      <div class="uk-block" id="mk-list-content">
      <div class="uk-container">
      <h2 class="mk-category-title uk-margin-bottom-top">Recent videos</h2>
      <ul id="mk-list-recent-1" class="uk-list uk-list-space" data-uk-margin>
        <li onclick="updatePreview(dataArray[1], true)" class="counter-1">
          <article class="uk-panel uk-panel-box uk-contrast uk-margin-large-top uk-border-rounded">
            <div class="uk-panel-teaser">
               <figure class="uk-overlay" style="min-width: 100%;">
                 <img src="http://img.kinitv.com/images/videos/8/thumb/v42812_20161221065132_t.jpg" alt="" width="100%">
                 <figcaption class="uk-position-bottom-right uk-text-small"> <i class="uk-icon-clock-o"></i> 21-12-16  6:51pm</figcaption>
               </figure>
             </div>
             <h3 class="uk-panel-title uk-text-contrast uk-margin-bottom-remove" style="font-size: 20px; padding: 8px;">'Higher pay rise should be given to those at the bottom'</h3>
             <div class="mk-figcaption-views uk-position-top-left mk-fig-range-2">108<br><span class="uk-text-small">views</span> </div>
             <a onclick="event.preventDefault();" class="uk-position-cover" data-uk-tooltip="{pos:'bottom'}"></a>
           </article>
         </li>
         <li onclick="updatePreview(dataArray[2], true)" class="counter-2">
           <article class="uk-panel uk-panel-box uk-contrast uk-margin-large-top uk-border-rounded">
             <div class="uk-panel-teaser">
                <figure class="uk-overlay" style="min-width: 100%;">
                  <img src="http://img.kinitv.com/images/videos/8/thumb/v42809_20161221061106_t.jpg" alt="" width="100%">
                  <figcaption class="uk-position-bottom-right uk-text-small"> <i class="uk-icon-clock-o"></i> 21-12-16  6:51pm</figcaption>
                </figure>
              </div>
              <h3 class="uk-panel-title uk-text-contrast uk-margin-bottom-remove" style="font-size: 20px; padding: 8px;">'Higher pay rise should be given to those at the bottom'</h3>
              <div class="mk-figcaption-views uk-position-top-left mk-fig-range-2">108<br><span class="uk-text-small">views</span> </div>
              <a onclick="event.preventDefault();" class="uk-position-cover" data-uk-tooltip="{pos:'bottom'}"></a>
            </article>
          </li>
          <li onclick="updatePreview(dataArray[3], true)" class="counter-3">
            <article class="uk-panel uk-panel-box uk-contrast uk-margin-large-top uk-border-rounded">
              <div class="uk-panel-teaser">
                 <figure class="uk-overlay" style="min-width: 100%;">
                   <img src="http://img.kinitv.com/images/videos/8/thumb/v42808_20161221055121_t.jpg" alt="" width="100%">
                   <figcaption class="uk-position-bottom-right uk-text-small"> <i class="uk-icon-clock-o"></i> 21-12-16  6:51pm</figcaption>
                 </figure>
               </div>
               <h3 class="uk-panel-title uk-text-contrast uk-margin-bottom-remove" style="font-size: 20px; padding: 8px;">'Higher pay rise should be given to those at the bottom'</h3>
               <div class="mk-figcaption-views uk-position-top-left mk-fig-range-2">108<br><span class="uk-text-small">views</span> </div>
               <a onclick="event.preventDefault();" class="uk-position-cover" data-uk-tooltip="{pos:'bottom'}"></a>
             </article>
           </li>

      </ul>
      <ul id="mk-list-recent-2" class="uk-list uk-list-space uk-margin-top" style="line-height:1em" data-uk-margin>
      </ul>
      <div class="uk-text-center">
      <a href="#" data-uk-smooth-scroll><i class="uk-icon-button uk-icon-angle-up"></i></a>
      </div>
      </div>
      </div>
      </div>
      <div class="uk-width-medium-2-3 uk-width-large-5-10">
      <div id="mk-column-3" class="uk-height-1-1 uk-container" data-uk-sticky data-uk-scrollspy="{cls:'uk-animation-fade',delay:2000}">
      <div class="uk-block">

      <h1 class="uk-article-title uk-margin-top-remove uk-text-contrast" id="previewTitle"></h1>
      <div id="previewSummary">
      <div class="uk-grid uk-grid-collapse uk-margin-bottom">
      <div class="uk-width-9-10 uk-text-truncate uk-text-muted">
      </div>
      <div class="uk-width-1-10">
      <a style="text-decoration:none; color: white;" href="#mk-offcanvas-info" title="More info" data-uk-tooltip data-uk-offcanvas>More</a>
      </div>
      </div>
      </div>
      <article class="uk-panel uk-panel-box uk-contrast" style="background:rgba(0,0,0,0.2);">
      <div class="uk-panel-teaser">
      <iframe id="previewIframe" width="100%" src="" frameborder="0" allowfullscreen style="height: 40vh;"></iframe>
      </div>
      <div class="uk-grid uk-grid-collap0se">
      <div class="uk-width-1-3" style="font-size:14px;line-height:1.35em;">
      <div class="uk-float-left uk-margin-right">
      <a href="#mk-offcanvas-info" title="About this video" data-uk-tooltip="{pos:'right'}" data-uk-offcanvas><i class="uk-icon-large uk-icon-file-text"></i></a>
      </div>
      <span id="previewTimeSince"></span>
      <br>
      <span style="color:#FF9800" id="previewViewCount"></span>
      </div>
      <div class="uk-width-2-3 uk-text-right">
      <div class="addthis_sharing_toolbox"></div>
      </div>
      </div>
      </article>
      <article class="uk-position-relative uk-panel uk-panel-box uk-panel-box-secondary uk-margin-top uk-margin-bottom" style="background:rgba(0,0,0,0.2);border: 1px solid #424242;">
      <div class="uk-grid uk-grid-small">
      <div class="uk-width-1-2">
      <div class="uk-grid uk-grid-small" style="position: relative;">
      <div class="uk-width-1-2" id="brandedContextMainImg" style="cursor:pointer;">
      </div>
      <div class="uk-width-1-2" style="cursor:pointer;">
      <div class="uk-panel-title uk-margin-bottom-remove uk-text-contrast" id="brandedContentMain">
      </div>
      </div>
      </div>
      </div>
      <div class="uk-width-1-2">
      <div class="uk-grid uk-grid-small" style="position: relative;">
      <div class="uk-width-1-2" id="brandedContextMainImg2" style="cursor:pointer;">
      </div>
      <div class="uk-width-1-2" style="cursor:pointer;">
      <div class="uk-panel-title uk-margin-bottom-remove uk-text-contrast" id="brandedContentMain2">
      </div>
      </div>
      </div>
      </div>
      </div>
      <a onclick="event.preventDefault();" style="pointer-events: none;" class="uk-position-cover" title="Click to play video" data-uk-tooltip="{pos:'bottom'}"></a>
      </article>

      </div>
      </div>
      </div>
      </div>
      <div id="mk-offcanvas-info" class="uk-offcanvas">
      <div class="uk-offcanvas-bar uk-offcanvas-bar-flip">
      <div class="uk-panel">
      <div class="uk-panel-title" id="mk-offcanvas-title"></div>
      <p id="mk-offcanvas-date"></p>
      <p id="mk-offcanvas-excerpt" style="color: #FCFCFC;"></p>
      <button class="uk-button" onclick="javascript:UIkit.offcanvas.hide([force = false])">Close</button>
      </div>
      </div>
      </div>
      <div id="mk-offcanvas-menu" class="uk-offcanvas">
      <div class="uk-offcanvas-bar">
      <div class="uk-navbar">
      <ul class="uk-navbar-nav">
      <li class="uk-active"><a href="http://www.kinitv.com/en">English</a></li>
      <li><a href="http://www.kinitv.com/bm">Bahasa</a></li>
      <li><a href="http://www.kinitv.com/cn">中文版</a></li>
      </ul>
      </div>
      <form class="uk-search uk-contrast" data-uk-search="{flipDropdown:true, source:'../tests/components/_searchautocomplete.json'}">
      <input class="uk-search-field" type="search" placeholder="Search">
      </form>
      <ul id="mk-offcanvas-list-menu" class="uk-nav uk-nav-offcanvas" data-uk-nav>
      <li class="uk-active"><a onclick="changeChannel('all','Recent Videos');" href="#"><i class="uk-icon-justify uk-icon-clock-o"></i> Recent</a></li>
      <li><a onclick="changeChannel('monthly-hit','Popular Videos');"><i class="uk-icon-justify uk-icon-heart-o"></i> Popular</a></li>
      <li class="uk-nav-header">Channels</li>

      </ul>
      </div>
      </div>
      <div id="tv-modal-about" class="uk-modal">
      <div class="uk-modal-dialog">
      <a class="uk-modal-close uk-close"></a>
      <div class="uk-modal-header">
      <h2 class="uk-text-uppercase">About Us</h2>
      </div>
      <div class="uk-grid">
      <div class="uk-width-1-2">
      <p class="uk-text-large">KiniTV, Malaysia's most influential news and information video web portal has over 328,000 subscribers on YouTube and its videos have been viewed over 324 million times.</p>
      <p>The current figures make KiniTV the most subscribed and viewed Malaysian news channel on YouTube.</p>
      <p>With an increasing viewer-base, KiniTV aims to become the 'go-to' video web portal for Malaysians by providing independent, accurate and timely news videos; filling the void left by mainstream media by making sure no news worthy stories are left unreported regardless of subject.</p>
      <p>KiniTV specialises in politics and current affairs, but also provides content for a range of categories including business and the arts.</p>
      </div>
      <div class="uk-width-1-2">
      <dl class="uk-description-list-line">
      <dt>KINITV Sdn. Bhd (777209-A)</dt>
      <dd>PJ 51 Business Park,</dd>
      <dd>No. 9, Jalan 51/205A, Off Jalan Tandang,</dd>
      <dd>46050 Petaling Jaya,</dd>
      <dd>Selangor</dd>
      <dt>Phone</dt>
      <dd>+603-7770 0000</dd>
      <dt>Fax</dt>
      <dd>+603-2788 4539</dd>
      <dt>Email</dt>
      <dd><a href="/cdn-cgi/l/email-protection#1f717a686c6d7070725f747671766b69317c7072"><span class="__cf_email__" data-cfemail="48262d3f3b3a27272508232126213c3e662b2725">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></dd>
      <dt>Dailymotion</dt>
      <dd><a href="http://www.dailymotion.com/kinitv" target="_blank">dailymotion.com/kinitv <i class="uk-icon-external-link"></i></a></dd>
      <dt>YouTube</dt>
      <dd><a href="http://www.youtube.com/kinitv target="_blank"">youtube.com/kinitv <i class="uk-icon-external-link"></i></a></dd>
                              <dt>Facebook</dt>
                              <dd><a href="http://www.facebook.com/kinitv"  target="_bland">kinitv <i class="uk-icon-external-link"></i></a></dd>
                              <dt>Twitter</dt>
                              <dd><a href="http://www.twitter.com/kinitv" target="_blank">@kinitv <i class="uk-icon-external-link"></i></a></dd>
                          </dl>
                      </div>
                  </div>
              </div>
          </div>
          <div id="tv-modal-jobs" class="uk-modal">
              <div class="uk-modal-dialog">
                  <a class="uk-modal-close uk-close"></a>
                  <div class="uk-modal-header">
                      <h2 class="uk-text-uppercase">Job Vacancies</h2>
                  </div>
                  <ul class="uk-grid uk-grid-divider uk-grid-width-1-2 uk-margin">
                      <li>
                          <div class="uk-panel uk-panel-header">
                              <h2 class="uk-panel-title">Presenter/Producer, English</h2>
                              <p>Responsibilities:</p>
                              <ul>
                                  <li>Sets news agenda and makes deployment decisions</li>
                                  <li>Carries out coordination work involving cameras, equipment, manpower and logistics for assignment coverage</li>
                                  <li>Sub-edits and monitors stories sent in by reporters</li>
                                  <li>Support news programme production by presenting the daily bulletin</li>
                              </ul>
                              <p>Requirements:</p>
                              <ul>
                                  <li>A resourceful and an independent leader</li>
                                  <li>Must have strong interest and knowledge in Malaysian politics</li>
                                  <li>Able to perform well under pressure and cope with occasional long and irregular hours</li>
                                  <li>A dynamic, creative and a committed team player</li>
                                  <li>Must have at least 5 years of experience in journalism, familiarity with broadcast and digital industry a plus</li>
                                  <li>An excellent command of the English language</li>
                              </ul>
                          </div>
                      </li>
                      <li>
                          <div class="uk-panel uk-panel-header">
                              <h2 class="uk-panel-title">Reporter</h2>
                              <p>Responsibilities:</p>
                              <ul>
                                  <li>Shoot and edit footage, write scripts for news reports and bulletins</li>
                                  <li>Generate story ideas and pitch to producers</li>
                                  <li>Research, verify and collate evidence and information to support a story</li>
                                  <li>Develop and maintain local contacts for news coverage</li>
                                  <li>Fresh graduates are encouraged to apply</li>
                              </ul>
                          </div>
                      </li>
                  </ul>
                  <hr>
                  <p class="uk-text-center">Kindly send your resume to <a href="/cdn-cgi/l/email-protection#701e150703021f1f1d301b191e1904065e131f1d"><span class="__cf_email__" data-cfemail="254b405256574a4a48654e4c4b4c51530b464a48">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></p>
              </div>
          </div>
        <div class="bvholder uk-hidden">

        </div>
          <!-- <div class="uk-hidden">
            <li class="mrbanner-1" style="display: flex; align-items: center;justify-content:center;margin-top:40px !important;"><div id='div-gpt-ad-332411303523721848-1'><script>googletag.cmd.push(function(){googletag.display('div-gpt-ad-332411303523721848-1');});</script></div></li>
            <li class="mrbanner-2" style="display: flex; align-items: center;justify-content:center;margin-top:40px !important;">
                <div id='div-gpt-ad-332411303523721848-2'><script type='text/javascript'>googletag.cmd.push(function(){googletag.display('div-gpt-ad-332411303523721848-2');});</script></div>
            </li>
          </div> -->
          <!-- <script type="text/javascript">
                  jQuery(document).ready(function($){
                      var images = ['background-day.jpg' 'background-night.jpg' 'background-national.jpg' 'background-penang.jpg'];
                      $('body').css({'background-image': 'url(./img/' + images[Math.floor(Math.random() * images.length)] + ')'});
                  });
              </script> -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.26.4/js/uikit.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.26.4/js/components/dropdown.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.26.4/js/components/lightbox.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.26.4/js/components/parallax.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.26.4/js/components/search.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.26.4/js/components/slideshow.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.26.4/js/components/sticky.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.26.4/js/components/tooltip.min.js"></script>
          <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57b12e48feade461"></script>














    </body>

</html>
