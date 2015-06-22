!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7]><html class="ie6"><![endif]-->
<!--[if IE 7]><html class="ie7"><![endif]-->
<!--[if IE 8]><html class="ie8"><![endif]-->
<!--[if gt IE 8]><!--><html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml"><!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="description" content="New highs list showing 52 week high prices for the NYSE, Nasdaq, AMEX, OTCBB." />
<meta name="keywords" content="all-time high stocks, all time highs, new highs" />
<meta name="robots" content="all,follow" />
<meta name="rating" content="Safe for Kids" />
<link rel="meta" href="/shared/rdf/labels.rdf" type="application/rdf+xml" title="ICRA labels" />
<meta http-equiv="pics-Label" content='(pics-1.1 "http://www.icra.org/pics/vocabularyv03/" l gen true for "http://www.barchart.com" r (n 0 s 0 v 0 l 0 oa 0 ob 0 oc 0 od 0 oe 0 of 0 og 0 oh 0 c 0) gen true for "http://www.www.barchart.com" r (n 0 s 0 v 0 l 0 oa 0 ob 0 oc 0 od 0 oe 0 of 0 og 0 oh 0 c 0))' />
<title>All Time Highs – Stocks with new all time highs</title>

<link rel="stylesheet" type="text/css" media="all" href="/shared/css/compress.php?v=20&add=" />
<link rel="stylesheet" href="/shared/css/print.css?v=20" type="text/css" media="print" />
<link rel="stylesheet" href="//s3.amazonaws.com/js1.aws.barchart.com/tinybox/tinybox.css?v=20" type="text/css" />
<link rel="stylesheet" href="//static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/css" media="all" />
<!--[if IE 6]>
<link rel="stylesheet" href="/shared/css/ie6style.css?v=20" type="text/css" />
<link rel="stylesheet" href="/shared/css/ie6menus.css?v=20" type="text/css" />
<link rel="stylesheet" href="/shared/css/ie6text.css?v=20" type="text/css" />
<![endif]-->
<!--[if lte IE 7]>
<link rel="stylesheet" href="/shared/css/ie7style.css?v=20" type="text/css" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" href="/shared/css/ie8style.css?v=20" type="text/css" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" href="/shared/css/ie9style.css?v=20" type="text/css" />
<![endif]-->
<!--[if IE]>
<style type="text/css">
    .submenu ul li a {
        padding: 6px 11px 2px 11px;
    }
    .submenu ul li a:hover {
        padding: 6px 11px 2px 11px;
        text-decoration:underline;
    }
</style>
<![endif]-->

<link rel="stylesheet" href="/shared/css/ie10style.css?v=20" type="text/css" />
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<script type="text/javascript">jQuery.noConflict();</script>
<script type="text/javascript" src="//s3.amazonaws.com/js1.aws.barchart.com/tinybox/tinybox.js?v=20"></script>
<script type="text/javascript" src="//s3.amazonaws.com/js2.aws.barchart.com/jqUtilities/jqModal.js?v=20"></script>
<script type="text/javascript" src="//s3.amazonaws.com/js2.aws.barchart.com/util/thirdpartyfunctions.js?v=20"></script>
<script type="text/javascript">var session_keepalive = true;</script>
<script type="text/javascript" src="//s3.amazonaws.com/js2.aws.barchart.com/quotes/com.barchart.js?v=20"></script>
<script type="text/javascript" src="//s3.amazonaws.com/js1.aws.barchart.com/display/footer.js?v=20"></script>
<script type="text/javascript" src="//s3.amazonaws.com/js2.aws.barchart.com/jqUtilities/jquery.datasort.js?v=20"></script>
<script type="text/javascript" src="//s3.amazonaws.com/js1.aws.barchart.com/jqUtilities/jquery.cookies.2.2.0.js?v=20"></script>
<script type="text/javascript" src="//s3.amazonaws.com/js2.aws.barchart.com/jqUtilities/jquery.qtip.min.js?v=20"></script>
<script type="text/javascript" src="/shared/js/modernizr.barchart.js"></script>
<script src="/shared/js/jquery.form.js"></script>



<script type="text/javascript">
var tooltips = new Array();
tooltips['comment'] = false; tooltips['pick'] = false; tooltips['vote'] = false; tooltips['follow'] = false; window.userId = window.userID;
var Barchart = {
    Content : [],
    Highlights : new com.barchart.QuoteHighlights(),
    InitObjects : [],
    Page : {},
    Init : function() {
        Barchart.Data.DataMaster = new com.barchart.DataMaster();
        for (var k in Barchart.Content) {
            var c = Barchart.Content[k];
            if (c.Init)
                c.Init();
        }
        for (var i = 0; i < Barchart.InitObjects.length; i++) {
            if (typeof(Barchart.InitObjects[i]) != undefined) {
                Barchart.InitObjects[i].Init();
            }
        }
        if (Barchart.Page.Init) {
            Barchart.Page.Init();
        }
        Barchart.Data.DataMaster.start();
        Barchart.Stubs.DisplayAds();
            },
    Site : {},
    User : {
        username : null,
        Views : {}
    }
};
Barchart.Data = {
    DataMaster : null
};
Barchart.Stubs = {
    Symbol : 'null',
    ReturnSearchLocation: function(symbol) {
        var type = 'stocks';
        if (symbol.substr(0,1) == '^')
            type = 'forex';
        else if (symbol.length == 5 && symbol.substr(-1) == 'X')
            type = 'funds';
        else if (symbol.match(/^[a-zA-Z].*[0-9]$/))
            type = 'futures';
        var locate = document.URL.replace(/(|\r)+$/, ''); //clear begin/end whitespace
        if (locate.match(/.php/gi) && !locate.match(/lookup|historical|allrates|sectors\/finder/gi)) {
            var urlPart = locate.split('?');
            if (urlPart[1] != null){
                var queryAttrValPair = urlPart[1].split('&');
                var symVal = queryAttrValPair[0].split('=');
                if (symVal[0] == 'sym'){
                    symVal[1] = symbol;
                    var assembledUrl = urlPart[0] + '?' + symVal[0] + '=' + symVal[1];
                    for (i=0; i < queryAttrValPair.length; i++)
                        if (i)
                            assembledUrl += '&' + queryAttrValPair[i];
                    document.location.href = assembledUrl;
                }
                else
                    document.location.href = '/quotes/' + type + '/' + symbol;
            }
            else
                document.location.href = '/quotes/' + type + '/' + symbol;
        }
        else {
            if (locate.match(/\/opinions/gi))
                document.location.href = '/opinions/' + type + '/' + symbol;
            else if (locate.match(/\/snapopinion/gi))
                document.location.href = '/snapopinion/' + type + '/' + symbol;
            else if (locate.match(/\/performance/gi))
                document.location.href = '/performance/' + type + '/' + symbol;
            else if (locate.match(/\/technicals/gi))
                document.location.href = '/technicals/' + type + '/' + symbol;
            else if (locate.match(/\/detailedquote/gi))
                document.location.href = '/detailedquote/' + type + '/' + symbol;
            else if (locate.match(/\/javascript_charts/))
                document.location.href = '/javascript_charts/' + symbol;
            else if (locate.match(/\/charts/gi))
                document.location.href = '/charts/' + type + '/' + symbol;
            else if (locate.match(/\/profile/gi))
                document.location.href = '/profile/' + type + '/' + symbol;
            else if (locate.match(/\/options/gi) && (type == 'stocks' || type == 'etf'))
                document.location.href = '/options/' + type + '/' + symbol;
            else if (locate.match(/\/plmodules/gi))
                document.location.href = '/plmodules/?module=' + (locate.match(/module=([A-Za-z]+)/))[1] + '&symbol=' + symbol;
            else
                document.location.href = '/quotes/' + type + '/' + symbol;
        }
    },
    GetFutures : function(symbol) {
        symbol = symbol.replace(/\s+/, '');
        if (symbol.indexOf('/') != -1) {
            var urlsym = symbol.split('/');
            if (urlsym[1].length > 0) {
                var searchQry = '?search=' + urlsym[1] + '*';
                document.location.href = '/commodityfutures/' + urlsym[0] + '/' + urlsym[1] + searchQry;
            }
        }
        else if (symbol.length > 0) {
            var searchQry = '?search=' + symbol + '*';
            document.location.href = '/commodityfutures/' + symbol + searchQry;
        }
    },
    GetQuote : function() {
        var symbol = jQuery('.symbol-search').val().toUpperCase();
        if (symbol.match(/\*$/)) {
            symbol = symbol.replace(/\*/, '');
            Barchart.Stubs.GetFutures(symbol);
        }
        else if (symbol.length > 0){
            Barchart.Stubs.ReturnSearchLocation(symbol);
        }
        else
            alert('Please enter a symbol or select a commodity from the list.');
        return false;
    },
    DisplayAds : function() {
        var adTypes = {
            //'adTop' : 'stocks;sec=;cat=;url=;kw=;dcopt=ist;pos=top;sz=728x90;tile=1;',
            //'adSkyScraper' : 'stocks;sec=;cat=;url=;kw=;dcopt=;pos=bottom;sz=160x600;tile=3;',
            //'ad300x250' : 'stocks;sec=;cat=;url=;kw=;dcopt=;pos=top;sz=300x250,300x600;tile=4;',
            // 'ad305x171' : ''
            //'adSponsors' : new Array(),
            //'adSponsorsExpand' : new Array()
            //'adMarketplace' : new Array()
        };
        for (var className in adTypes) {
            var elements = findElementsByClassName(className, '');
            for (var i=0; i < elements.length; i++) {
                switch (className) {
                    case 'adSponsors':
                        elements[i].contentWindow.location.replace("//adserver.barchart.com/adframe.jsx?site=" + adTypes[className][i]);
                        break;
                    case 'adSponsorsExpand':
                        elements[i].innerHTML = '<a href="/ads/expand.php?id=' + adTypes[className][i] + '" class="thickbox" title=""><img src="//s3.amazonaws.com/images1.aws.barchart.com/barchart/expand.gif?v=20" alt="Expand" border="0" /></a>';
                        break;
                    case 'adMarketplace':
                        var html = "<html><head><style type=\"text/css\">a:link, a:visited, a:hover { color: #10466D; font: 10px verdana; } #mrktdiv { width: 100%; margin: 3% 0 0 2%; }</style></head><body><div id=\"mrktdiv\"><table border=\"0\" cellspacing=\"0\" cellpadding=\"4\" align=\"center\"><tr>";
                        for (var j = 0; j < adTypes['adMarketplace'].length; j++) {
                            // html += "<td><script language=\"javascript\" type=\"text/javascript\" src=\"//adserver.barchart.com/adscript.jsx?site=" + adTypes['adMarketplace'][j] + "\"><" + "/script></td>";
                            html += '<td>\x3Cscript language="javascript" type="text/javascript" src="//adserver.barchart.com/adscript.jsx?site=' + adTypes['adMarketplace'][j] + '">\x3C/script></td>';
                        }
                        html += "</tr></table></div></body></html>";
                        elements[i].contentWindow.document.write(html);
                        break;
                    default:
                        var ary = adTypes[className].split('-');
                        if (ary[0] != 'deanmg')
                            elements[i].contentWindow.location.replace("http://adserver.barchart.com/adframe.jsx?site=" + adTypes[className]);
                        else {
                            elements[i].src = "/inc/adDisplay.php?type=" + className + "&zoneid=" + ary[1] + "&n=" + ary[2];
                            //elements[i].contentWindow.document.write("<html><head> <scr" + "ipt type='text/javascript' src='http://ox.deanmg.com/www/delivery/spcjs.php?id=2'></scr" + "ipt> <style>body { margin: 0px; }</style></head> <body><scr" + "ipt type='text/javascript'>OA_show(" + ary[1] + ");</scr" + "ipt> <noscript><a target='_blank' href='http://ox.deanmg.com/www/delivery/ck.php?n=" + ary[2] + "'><img border='0' alt='' src='http://ox.deanmg.com/www/delivery/avw.php?zoneid=" + ary[1] + "&n=" + ary[2] + "' /></a></noscript> </body></html>");
                        }
                }
            }
        }
    }
};
jQuery('document').ready(function() {
    jQuery('#header_bar').on('mouseover', '#topbarLogin', function() {
        jQuery(this).addClass('hover');
        jQuery(this).children('.options').show();
    });
    jQuery('#header_bar').on('click', '#topbarLogin', function(e) {
        e.stopPropagation();
        jQuery(this).addClass('sticky');
    });
    jQuery('#header_bar').on('mouseout', '#topbarLogin', function() {
        if(jQuery(this).hasClass('sticky')) {
            return true;
        }
        jQuery(this).removeClass('hover');
        jQuery(this).children('.options').hide()
    });
    jQuery(document).on('click', function() {
        jQuery('#topbarLogin').removeClass('hover');
        jQuery('#topbarLogin').removeClass('sticky');
        jQuery('#topbarLogin .options').hide();
    });
    jQuery(document).keypress(function(e){
        if (e.keyCode == 27) {
            jQuery('#modal').jqmHide();
        }
    });
        jQuery('a.modal').live('click', function(e){
        url  = jQuery(this).attr('href');

        // Redirect all registration modals!
        var split_url = url.split("?");
        var trim = split_url[0].replace(/\//g, '');
        if (trim == 'register.php') {
            window.location = '/register.php';
            return false;
        }

        url += ((url.match(/\?/)) ? '&' : '?') + 'ajax=1';
        jQuery('#modal').jqm({ajax: url, modal: true, onShow: showModal, onHide:hideModal}).jqmShow();
        return false;
    });
    jQuery('a.level1').live('click', function(){
        hasAccess = false;
        if (!hasAccess) {
            jQuery('#modal').jqm({ajax: 'register.php?ajax=1', modal: true, onShow: showModal, onHide:hideModal}).jqmShow();
            return false;
        }
        return true;
    });
    window.formSubmitHandler = function(form) {
        var result = false;
        if (jQuery(form).parents('#modal').length>0) {
            if (jQuery(form).children('input.submit').attr('disabled') != 'disabled') {
                jQuery.post(jQuery(form).attr('action'), jQuery(form).serialize() + '&ajax=1', function(data){
                    jQuery('#modal').html(data);
                });
            }
        } else
            result = true;
        if(jQuery(form).children('input.submit')){
            if (jQuery(form).children('input.submit').hasClass('disableOnSubmit') && jQuery(form).children('input.submit').attr('disabled') != 'disabled') {
                jQuery(form).children('input.submit').attr('disabled', 'disabled');
                jQuery(form).children('.bcButton').style.opacity = '0.5';
                jQuery(form).children('.bcButton').insert({after:' <img src=\"/shared/images/throbber2.gif\" style=\"vertical-align: middle; margin-left: 3px;\" alt=\"\">'});
            }
        }
        return result;
    };
    jQuery.fn.center = function () {
        jQuery(this).css('margin','0').css('padding','0');
        scrollTo(0,0);
        this.css("position","absolute");
        //             this.css("top", Math.max(0, ((jQuery(window).height() - this.outerHeight()*1.2) / 2) +
        //                 jQuery(window).scrollTop()) + "px");
        this.css("top", "35px");
        this.css("left", Math.max(0, ((jQuery(window).width() - this.outerWidth()) / 2) +
            jQuery(window).scrollLeft()) + "px");
        return this;
    }
    window.showModal = function(hash) {
        scrollTo(0,0);
        //jQuery("html,body").css("overflow","hidden");
        //hash.w[0].style.height = '80%';
        hash.w[0].style.height = (hash.w.height() > jQuery('body').height() * .8) ? '80%' : 'auto';
        jQuery('#modal').center();
        hash.w.show();
    }
    window.hideModal = function(hash){
        jQuery('#birthday').datepicker( "hide" );
        if ( jQuery('#birthday').length !== 0 ) {
            jQuery('#birthday').datepicker('destroy');
        }
        hash.w.fadeOut('2000',function(){ hash.o.remove();});
        jQuery("html,body").css("overflow","auto");
    }
    window.openModal = function(url) {
        url += ((url.match(/\?/)) ? '&' : '?') + 'ajax=1';
        jQuery('#modal').jqm({ajax: url, modal: true, scroll: 'yes', onShow: showModal,toTop:true,onHide : hideModal }).center().jqmShow().focus();
    }
    jQuery('form').live('submit', function(){return formSubmitHandler(this);});
    jQuery('#modal a').live('click', function(){
        if (typeof jQuery(this).attr('href') == 'undefined' || jQuery(this).attr('href') == '#')
            return false;
        if (jQuery(this).hasClass('nomodal') || jQuery(this).attr('href').substr(0, 7) == 'http://')
            return true;
        jQuery.get(jQuery(this).attr('href'), {ajax: 1}, function(data){
            jQuery('#modal').html(data).center();
            window.showModal({w: jQuery('#modal')});
            jQuery('#modal').center();
        });
        return false;
    });
    });
function fbLogin() {
    FB.login(function(response) {},
        {scope:'email,user_birthday,user_work_history,user_education_history,user_website,user_location,publish_actions,publish_stream'});
    return false;
}
function fbLoginCreatePassword() {
    window.fbRegisterURL = '/fbRegister.php?action=createPassword2';
    FB.login(function(response) {},
        {scope:'email,user_birthday,user_work_history,user_education_history,user_website,user_location,publish_actions,publish_stream'});
    return false;
}
window.fbSyncCallback = location.href;
function fbSync(){
    jQuery("#modal").children().remove();
    jQuery("#modal").empty();
    if(jQuery('#modal').css('display')!='none')
        jQuery("#modal").load('/my/account/facebook-sync.php?link=true',{referer:window.fbSyncCallback});
    else
        window.openModal('/my/account/facebook-sync.php?link=true&referer='+encodeURI(window.fbSyncCallback));
    return false;
}
function reloadImage(img) {
    img.src = img.src + '?' + new Date();
}
</script>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/scriptaculous/1.9.0/scriptaculous.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/scriptaculous/1.9.0/builder.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/scriptaculous/1.9.0/effects.js"></script>
<script type="text/javascript" src="//s3.amazonaws.com/js2.aws.barchart.com/protoUtilities/protoj.js?v=20"></script>
<script type="text/javascript" src="//s3.amazonaws.com/js2.aws.barchart.com/protoUtilities/protomultiselect/textboxlist.js?v=20"></script>
<script type="text/javascript" src="//s3.amazonaws.com/js2.aws.barchart.com/protoUtilities/hovercard.js?v=20"></script>

<script type="text/javascript" src="//s3.amazonaws.com/js2.aws.barchart.com/bcnetwork/useractions.js?v=20"></script>
<!-- LeadLander -->
<!-- Disabled temporarilly per Andrew
<script type="text/javascript" language="javascript">llactid=22000</script>
<script type="text/javascript" language="javascript" src="http://t6.trackalyzer.com/trackalyze.js"></script>
-->
<script type="text/javascript" src="//adserver.barchart.com/adscript.jsx?site=Tracking-BC-Stocks"></script><script type='text/javascript'>
    jQuery(document).ready(function() {
        Barchart.Init();
        var name = jQuery('.user_first_name').text();
        name = name.toLowerCase();
        jQuery('.user_first_name').text(name);
    });
</script>
</head>

<body>

<div id="modal" class="jqmWindow" style="display: none;">
    <div class="maincol">
        <div style="padding: 30px 0px; font-size: 16px; font-weight: bold; text-align: center">Please wait while we connect to your Facebook account ...
            <br /><br /><br/>
            <img src="/shared/images/facebook_login.png" /><br/><img src="/shared/images/progress_bar.gif"/>
        </div>
    </div>
</div>

<div class="container">

    <div id="header_bar" class="loggedout">
                <span class="leftItems">
            <span class="header_bar_item">
                <span class="bcButton"><a href="http://www.barchartmarketdata.com/">Institutional</a></span>
              <span class="newbttn">
                <span class="bcButton">Professional</span>
                    <div id="pro_menu">
                        <table style="border-collapse:collapse;" cellpadding="10">
                            <tr style="border-bottom:1px solid #DDD;">
                                <td width="110"><a style="font-size:13px;" href="/trader">Barchart Trader</a></td>
                                <td style="font-weight:100;"><a style="text-decoration:none" href="/trader">The premier realtime and trading platform for all traders. BarchartTrader features advanced, customizable charts, custom workspaces, advanced analysis, and integrated trading.</a></td></tr>
                            <tr style="border-bottom:1px solid #DDD;">
                                <td width="110"><a style="font-size:13px;" href="http://www.trendsinfutures.com/free_14_day_trial?ref=bchomelinks">Trends-In-Futures</a></td>
                                <td style="font-weight:100;"><a style="text-decoration:none" href="http://www.trendsinfutures.com/free_14_day_trial?ref=bchomelinks">Follow our award-winning trading system, and watch commentary and analysis from our veteran team of market professionals.</a></td></tr>
                            <tr>
                                <td width="110"><a style="font-size:13px;" href="http://acs.barchart.com/">Advanced Commodities Services</a></td>
                                <td style="font-weight:100;"><a style="text-decoration:none" href="http://acs.barchart.com/">Designed as the ultimate research tools for commodities, futures, and futures options traders. Advanced tools and analysis for worldwide futures information.</a></td>
                            </tr>
                        </table>
                    </div>
                </span>
            </span>
        </span>
        <span class="rightItems">
        <div style="vertical-align:middle;">
            <div  class="header_bar_item">
                                <a href='/register.php'  id='topbarJoin'>Join Now</a>
                &nbsp;|&nbsp;
                <a href='/benefits.php'  id='topbarJoin'>Why Join?</a>
            </div>
            <span id="topbarLogin" class="header_bar_item hoverable">
                                <span class='bcButton' style='cursor: default' onmousedown="" onclick="">LOG IN</span>                <div class="options bastard_options" style='display: none;'>
                                        <form action="/login.php" method="post" class="padder">
                        <p>Your Username/Email:<input type="text" name="email" /></p>
                        <p>Your Password:<input type="password" name="password" /></p>
                        <p><label><input type="checkbox" name="remember" value="1" checked="checked" />Remember Me</label></p>
                        <p><input type="submit" value="Log In" /></p>
                        <div id="loginSocialMedia" style="text-align:center;">
                            <a style="display:block;padding:0px;margin-bottom: 3px;" href="#" onclick="fbLogin(); return false;"><img src="/shared/images/social_media/login-facebook.png" width="170" height="32" border="0" alt="Log in with Facebook" /></a>
                            <a style="display:block;padding:0px;margin-bottom: 3px;" href="http://www.barchart.com/social_media/linkedin/authorize.php"><img src="/shared/images/social_media/login-linkedin.png" width="170" height="32" border="0" alt="Log in with LinkedIn" /></a>
                            <a style="display:block;padding:0px;margin-bottom: 3px;" href="http://www.barchart.com/social_media/google/authorize.php"><img src="/shared/images/social_media/login-google.png" width="170" height="32" border="0" alt="Log in with Google" /></a>
                        </div>
                        <p style="font-size: 11px;"><a href="/password.php" style="text-decoration: none; color: #395e7d;">Forgot your password?</a></p>
                    </form>
                </div>
            </span>
                        <!--
            or
            <a style="display:inline;" href="#" onclick="fbLogin(); return false;">
                <img src='/shared/images/fb_login_new.gif' height='27' alt='Login with Facebook'>
            </a>
            -->
        </div>
        </span>
    </div>



<center class="main">
    <div class="content" style=''>
    <div class="logoarea"><div class="logo"><a href="/"><img src="//s3.amazonaws.com/images1.aws.barchart.com/barchart/barchart_logo1.gif?v=20" alt="Barchart.com" width="210" height="50" border="0" longdesc="http://www.barchart.com" /></a></div><div class="noprint" align="center" style="padding-top: 8px"><iframe width="728" height="90" frameBorder="0" scrolling="no" src="/ads/iframe.php?url=http%3A%2F%2Fad.doubleclick.net%2Fadj%2Fdmg.barchart%2Fstocks%3Bsec%3D%3Bcat%3D%3Burl%3D%3Bkw%3D%3Bdcopt%3Dist%3Bpos%3Dtop%3Bsz%3D728x90%3Btile%3D1%3Bord%3D96221090"><script type="text/javascript" src='http://ad.doubleclick.net/adj/dmg.barchart/stocks;sec=;cat=;url=;kw=;dcopt=ist;pos=top;sz=728x90;tile=1;ord=96221090'></script></iframe></div></div><div class="menu"><ul><li ><a href="/">Home</a></li><li  class="current"><a href="/stocks/marketoverview" class="current">Stocks</a></li><li class="newOption"><a href="/options/overview" class="">Options</a></li><li ><a href="/etf/marketoverview">ETFs</a></li><li ><a href="/futures/marketoverview">Futures</a></li><li ><a href="/forex/marketoverview">Forex</a></li><li ><a href="/funds/marketoverview">Funds</a></li><li ><a href="/economy/index.php">Economy</a></li><li ><a href="/education/default.php">Education</a></li><li ><a href="/my/account/">My Barchart</a></li><li class='premiumTab'><span>Premium Services</span><div class='premium_products'><ul><li><a href="/options/bulls-eye-options/order?ref=NAVps" target="_blank">Bulls-eye Options</a></li><li><a href="/stocks/covered-calls/order?ref=NAVps" target="_blank">Advanced Options Screener</a></li><li><a href="/my/stock-alerts/?ref=NAVps" target="_blank">Strategic Alerts</a></li><li><a href="http://www.trendsinfutures.com/free_14_day_trial?ref=NAVps" target="_blank">Trends In Futures</a></li><li><a href="https://www.barchart.com/register/crbfms.php?ref=NAVps" target="_blank">Fundamental Market Service</a></li><li><a href="/trader/?trader_source=NAVps" target="_blank">Barchart Trader</a></li><li><a href="/upgrade_subs.php?source=NAVps" target="_blank">Barchart Premier</a></li></ul></div></li></ul></div><div class="submenu"><ul><li><a href="/stocks/marketoverview" class="subcurrent">Market Pulse</a></li><li><a href="/stocks/indices.php">Indices</a></li><li><a href="/stocks/signals/">Signals</a></li><li><a href="/stocks/hotstocks">Hot Stocks</a></li><li><a href="/stocks/sectors/">Sectors</a></li><li><a href="/blog/index.php">Stock Picks</a></li><li><a href="/headlines/">News &amp; Commentary</a></li><li><a href="/stocks/advanced-options">Advanced Options</a></li><li><a href="/my/screener/stock.php">Stock Screener</a></li></ul></div><div id="advertisement_0" class="advertisement" 
>
	        <div id="appSignup" style="margin:5px 0;padding:0px 8px; border:#666 1px solid; font-family:Lucida Grande, Lucida Sans Unicode, Helvetica, Arial;">
            <div style="width:230px;*float:left;display:inline-block;vertical-align:top;">
                <div style="text-align:center;padding-top:0px;">
                    <a style="text-decoration:none; color:#000;" href="/app?ref=top_banner"><span style="font-weight:700;font-size:40px; letter-spacing:-2px; margin:0px; padding:0px 2px 0px 10px;*display:inline;display:inline-block; text-align:center; -webkit-padding-before:5px;">The App.</span><br />
                    <img src="/shared/images/advertising/ad_logo.png" height="15" width="80"/></a>
                </div>
            </div>
            <div id="dontShow" style="position:relative;font-weight:700;font-size:12px;width:10px;height:10px;float:right;cursor:pointer; margin-top:3px;">X
                    <div id="reminderOptions" style="poition:absolute;top:10px;width:150px;display:none;background:#fff;padding:5px;border:#eee 1px solid;">
                        <div class="option" rel="later" style="border-bottom:#eee 1px solid;">Remind me later</div>
                        <div class="option" rel="never">Never show again</div>
                    </div>
            </div>
            <div style="*float:left;display:inline-block;margin:0px 0px 0px 20px; vertical-align:bottom;">
                <a href="/app?ref=top_banner"><img src="/shared/images/advertising/tiltedphone.png" /></a>
            </div>
            <div style="width:360px;*float:left;display:inline-block;margin:0px 0px 0px 2px;float:right;">
                <img style="float:right; padding:5px 10px 0px 0px;" src="/app/images/qrcode.18322283_crop.png" height="80" width="80"/>
                <div style="padding-top:10px;text-align:center;"><a style="text-decoration:none; color:#000;" href="/app?ref=top_banner"><span style="font-size:26px;font-weight:normal;">Now Available</span><br /><span style="font-size:20px;font-weight:normal;">for iPhone and Android</span></a></div>
            </div>
            <div style="clear:both"></div>
        </div>
    
<script type="text/javascript">
    checkEmail = function(email) { //mantis 1947
        var rules = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
        if (!rules.test(email))
            return false;
        else
            return true;
    };

    jQuery(document).ready(function(){

            jQuery('#signup').submit(function(e){
            e.preventDefault();

            jQuery(this).removeAttr('disabled');

            if (!checkEmail(jQuery('#bcAppEmail').val())) { //quick add per mantis 1947.
                jQuery('#response').html('<div class="error">Invalid Email Address.</div>');
                return false;
            }

            jQuery.ajax({
                url:        '/app/subscribe.php',
                type:       'post',
                dataType:   'json',
                data:       {
                    email   : jQuery('#bcAppEmail').val(),
                    source  : jQuery('#source').val(),
                    service : jQuery('#service').val()
                },
                success:    function(data) {
                        var ad = jQuery('#appSignup');
                        jQuery(ad).html('<h1 style="width:999px;color:green;text-align:center;">Thanks for signing up!</h1>');
                        setTimeout(function(){
                            jQuery(ad).parent('div').slideUp('normal', 'swing');
                        },2000);
                        document.cookie = 'dontShowADonHomepage='+true;
                    }                   
            });
        });

        jQuery('#dontShow').click(function(event){
            event.stopPropagation();
            jQuery('#reminderOptions').show();
        });

        jQuery('html').click(function(){

            jQuery('#reminderOptions').hide();

        });
        
        jQuery('#dontShow .option').click(function(event){
            event.preventDefault();

            var rel = jQuery(this).attr('rel');

            jQuery('#reminderOptions').hide();

            jQuery.ajax({
                url:        '/app/subscribe.php',
                type:       'post',
                dataType:   'json',
                data:       {
                    negate   : true,
                    reminder : rel,
                },
                success:    function(data) {
                        var ad = jQuery('#dontShow');
                        jQuery(ad).parent('div').slideUp('normal', 'swing');
                    }                   
            });
        });
    });
</script>



</div>    <table class="menu_wrapper"><tr>
            <td class="sidemenu">
            <div class="sidemenu">
                	<div id="searchbox-container" class="symsearch">
		<form action="/searchredirect.php" method="POST" onsubmit="return Barchart.Stubs.GetQuote();">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top: 3px">
		<tr>
			<td align="center" width="75%" colspan="2">
				<input type="text" id="searchbox-input" class="symbol-search" placeholder="Enter ticker symbol" style="font-size:11px; margin-left:1px;">

				<div class="symbol-search-submit"><strong>GO</strong></div>

				<script type="text/javascript">
					var renderItem = function(ul, item) {
						// Overwrite the default render item method
						if(item.searchElement === undefined) {
							var aTag = '<a>';
									aTag += '<span class="symbol-search-symbol">'+item.symbolDisplay + '</span>';
									aTag += '<span class="symbol-search-name">'+item.caption + '</span>';
									aTag += '<span class="symbol-search-exchange">'+item.exchange + '</span>';
								aTag += '</a>';

							jQuery('<li>')
								.data('item.autocomplete', item)
								.append(aTag)
								.appendTo(ul);
						} else {
							// Hack to append last search element
							jQuery('<li>')
								.data('item.autocomplete', item)
								.append('<a class="symbol-search-center"><span>'+item.text+'</span></a>')
								.appendTo(ul);
						}
					}

					jQuery(document).ready(function() {
						jQuery('#searchbox-input').focus();

						jQuery('#searchbox-input').autocomplete({
							source: 	function(request, response) {
								jQuery.getJSON('/symbol_autocomplete.php', {
									keyword: 	request.term
								},
								function(data) {
									// Build regex to highlight search term in results
									var regex = new RegExp("(?![^&;]+;)(?!<[^<>]*)(" + request.term.replace(/([\^\$\(\)\[\]\{\}\*\.\+\?\|\\])/gi, "\\$1") + ")(?![^<>]*>)(?![^&;]+;)", "gi");

									jQuery(data).each(function(index, element) {
										element.symbolDisplay =  element.symbol.replace(regex, "<strong>$1</strong>");
										element.caption =  element.caption.replace(regex, "<strong>$1</strong>");
									});
									// We can't add this last search element to the backend, because it is in phplib
									data.push({searchElement: true, text: 'Extended Search', url: '/lookup.php?field=name&search=contains&string='+jQuery('#searchbox-input').val()+'&type[]=1'});
									
									response(data);
								});
							},
							select: 	function(event, ui) {
								if(ui.item.searchElement === true) {
									window.location.href = ui.item.url;
								} else {
									jQuery('#searchbox-input').val(ui.item.symbol);
									Barchart.Stubs.GetQuote();
								}
							},
							open: 		function(event, ui) {
								jQuery(this).autocomplete('widget').css('zIndex', 750);
							}
						}).data('autocomplete')._renderItem = renderItem;

						// Search autocomplete when enter is pressed, which could occur before JSON response from server
						jQuery('#searchbox-input').keypress(function(e) {
							if(e.keyCode === 13) {
								Barchart.Stubs.GetQuote();
							}
						});

						jQuery('#searchbox-container').on('click', '.symbol-search-submit', function() {
							Barchart.Stubs.GetQuote();
						});
					});
				</script>
			</td>
		</tr>
		<tr>
        	<td align="center" style="padding-bottom: 6px; padding-left: 8px; padding-top: 4px;">
				<a href="/lookup.php?type[]=1">Symbol Search</a>				</td>
			<td>&nbsp;</td>
        </tr>
        <tr>
        	<td colspan="2" align="left" style="border-top:1px solid #CCCCCC; padding-top:3px; padding-left: 10px;">
                <select name="commodity" style="padding-left: 4px;" class="fld" onchange="Barchart.Stubs.GetFutures(this.options[this.selectedIndex].value);">
                    <option value="">Select a Commodity</option>
                    <option value="">--Grains and Oilseeds--</option>
                    <option value="Wheat_Futures/ZW">Wheat</option>
                    <option value="Corn_Futures/ZC">Corn</option>
                    <option value="Soybeans_Futures/ZS">Soybeans</option>
                    <option value="Soybean_Meal_Futures/ZM">Soybean Meal</option>
                    <option value="Soybean_Oil_Futures/ZL">Soybean Oil</option>
                    <option value="Oats_Futures/ZO">Oats</option>
                    <option value="Rough_Rice_Futures/ZR">Rough Rice</option>
                    <option value="KCBT_Wheat_Futures/KE">KCBT Wheat</option>
                    <option value="Spring_Wheat_Futures/MW">Spring Wheat</option>
                    <option value="Canola_Futures/RS">Canola</option>
                    <option value="">&nbsp;</option>
                    <option value="">--Currencies--</option>
                    <option value="US_Dollar_Index_Futures/DX">U.S. Dollar Index</option>
                    <option value="British_Pound_Futures/B6">British Pound</option>
                    <option value="Canadian_Dollar_Futures/D6">Canadian Dollar</option>
                    <option value="Japanese_Yen_Futures/J6">Japanese Yen</option>
                    <option value="Swiss_Franc_Futures/S6">Swiss Franc</option>
                    <option value="Euro_FX_Futures/E6">Euro FX</option>
                    <option value="Australian_Dollar_Futures/A6">Australian Dollar</option>
                    <option value="Mexican_Peso_Futures/M6">Mexican Peso</option>
                    <option value="New_Zealand_Dollar_Futures/N6">New Zealand Dollar</option>
                    <option value="">&nbsp;</option>
                    <option value="">--Energies--</option>
                    <option value="Crude_Oil_Futures/CL">Crude Oil WTI</option>
                    <option value="Heating_Oil_Futures/HO">Heating Oil</option>
                    <option value="Gasoline_Rbob_Futures/RB">Gasoline RBOB</option>
                    <option value="Natural_Gas_Futures/NG">Natural Gas</option>
                    <option value="Ethanol_Futures/ZK">Ethanol</option>
                    <option value="Crude_Oil_Brent/CB">Crude Oil Brent</option>
                    <option value="ICE_Crude_Oil_WTI/WI">ICE Crude Oil WTI</option>
                    <option value="ICE_Gas_Oil/LF">ICE Gas Oil</option>
                    <option value="ICE_Natural_Gas/NF">ICE Natural Gas</option>
                    <option value="">&nbsp;</option>
                    <option value="">--Financials--</option>
                    <option value="30-Year_T-Bond_Futures/ZB">30 Year T-Bond</option>
                    <option value="Ultra_T-Bond_Futures/UD">Ultra T-Bond</option>
                    <option value="10-Year_T-Note_Futures/ZN">10 Year T-Note</option>
                    <option value="5-Year_T-Note_Futures/ZF">5 Year T-Note</option>
                    <option value="2-Year_T-Note_Futures/ZT">2 Year T-Note</option>
                    <option value="30-Day_Fed_Funds_Futures/ZQ">30 Day Fed Funds</option>
                    <option value="Eurodollar_Futures/GE">Eurodollar</option>
                    <option value="">&nbsp;</option>
                    <option value="">--Indices--</option>
                    <option value="E-Mini_S%26P_500_Futures/ES">E-Mini S&P 500</option>
                    <option value="E-Mini_Nasdaq_100_Futures/NQ">E-Mini Nasdaq</option>
                    <option value="DJIA_Mini-Sized_Futures/YM">E-Mini Dow</option>
                    <option value="S%26P_500_Index_Futures/SP">Full-Sized S&P 500 Index</option>
                    <option value="E-Mini_S%26P_Midcap_Futures/EW">E-Mini S&P Midcap</option>
                    <option value="Russell_2000_Mini_Futures/RJ">E-Mini Russell 2000</option>
                    <option value="Nasdaq_100_Futures/ND">Full-Sized Nasdaq 100</option>
                    <option value="DJIA_Futures/DJ">Full-Sized Dow Industrials</option>
                    <option value="">&nbsp;</option>
                    <option value="">--Meats--</option>
                    <option value="Live_Cattle_Futures/LE">Live Cattle</option>
                    <option value="Feeder_Cattle_Futures/GF">Feeder Cattle</option>
                    <option value="Lean_Hogs_Futures/HE">Lean Hogs</option>
                    <option value="Class_III_Milk_Futures/DL">Milk Class III</option>
                    <option value="">&nbsp;</option>
                    <option value="">--Metals--</option>
                    <option value="Gold_Futures/GC">Gold</option>
                    <option value="Silver_Futures/SI">Silver</option>
                    <option value="High_Grade_Copper_Futures/HG">High Grade Copper</option>
                    <option value="Platinum_Futures/PL">Platinum</option>
                    <option value="Palladium_Futures/PA">Palladium</option>
                    <option value="">&nbsp;</option>
                    <option value="">--Softs--</option>
                    <option value="Cotton_%232_Futures/CT">Cotton #2</option>
                    <option value="Orange_Juice_Futures/OJ">Orange Juice</option>
                    <option value="Coffee_Futures/KC">Coffee</option>
                    <option value="Sugar_%2311_Futures/SB">Sugar #11</option>
                    <option value="Cocoa_Futures/CC">Cocoa</option>
                    <option value="Sugar_%2316_Futures/SD">Sugar #16</option>
                    <option value="Lumber_Futures/LS">Lumber</option>
                    <option value="">&nbsp;</option>
                    <option value="">--European Grains--</option>
                    <option value="Rapeseed_Futures/XR">Rapeseed</option>
                    <option value="Feed_Wheat_Futures/LW">Feed Wheat</option>
                    <option value="Milling_Wheat_Futures/ML">Milling Wheat</option>
                    <option value="Corn_Futures/XB">Corn</option>
                    <option value="Malting_Barley_Futures/BG">Malting Barley</option>
                    <option value="">&nbsp;</option>
                    <option value="">--European Indices--</option>
                    <option value="Euro_Stoxx_50_Index_Futures/FX">Euro Stoxx 50 Index</option>
                    <option value="FTSE_100_Index_Futures/X">FTSE 100 Index</option>
                    <option value="DAX_Index_Futures/DY">DAX Index</option>
                    <option value="Swiss_Market_Index_Futures/SZ">Swiss Market Index</option>
                    <option value="CAC_40_Index_Futures/MX">CAC 40 Index</option>
                    <option value="AEX_Index_Futures/AE">AEX Index</option>
                    <option value="">&nbsp;</option>
                    <option value="">--European Financials--</option>
                    <option value="Euro_Bund_Futures/GG">Euro Bund</option>
                    <option value="Euro_Bobl_Futures/HR">Euro Bobl</option>
                    <option value="Euro_Schatz_Futures/HF">Euro Schatz</option>
                    <option value="10-Year_Long_Gilt_Futures/G">10-Year Long Gilt</option>
                    <option value="3-Month_EuriBor_Futures/IM">3-Month EuriBor</option>
                    <option value="3-Month_Sterling_Futures/L">3-Month Sterling</option>
                    <option value="3-Month_Euroswiss_Futures/F">3-Month Euroswiss</option>
                    <option value="">&nbsp;</option>
                    <option value="">--European Softs--</option>
                    <option value="White_Sugar_%235_Futures/SW">Sugar White #5</option>
                    <option value="Cocoa_%237_Futures/CA">Cocoa #7</option>
                    <option value="Robusta_Coffee_10-T/RM">Coffee Robusta 10-T</option>
                    <option value="Arabica_Coffee/XF">Coffee Arabica</option>
                </select>
            </td>
        </tr>
        <tr>
			<td colspan="2" align="center" style="font-size: 9px">
			or enter GC* - Gold Futures				</td>
		</tr>
        <tr>
			<td colspan="2" align="center" style=" font-weight:bold;background-color:#FFC;">
               <div class="halfbreak" style="background-color:#FFF;"></div>
				<span>
					<a style="font-size:12px; text-decoration:none; color:#004276;" href="/app">Get the Barchart App</a> 
										
				</span>
            </td>
		</tr>
		</table>
		</form>
	</div>
                                    <div class="symsearchad">
                        <iframe width="120" height="60" frameBorder="0" scrolling="no" src="/ads/iframe.php?url=http%3A%2F%2Fad.doubleclick.net%2Fadj%2Fdmg.barchart%2Fstocks%3Bmkt%3Dstocks%3Bpos%3Dtop%3Bsz%3D120x30%2C120x60%3Btile%3D2%3Bord%3D96221090">
                            <script type="text/javascript" src="//ad.doubleclick.net/adj/dmg.barchart/stocks;mkt=stocks;pos=top;sz=120x30,120x60;tile=2;ord=96221090"></script>
                            <script type="text/javascript">
                                <!--
                                if ((!document.images && navigator.userAgent.indexOf('Mozilla/2.') >= 0) ||	(navigator.userAgent.indexOf("WebTV") >= 0)) {
                                    document.write('<a href="//ad.doubleclick.net/jump/dmg.barchart/stocks;mkt=stocks;pos=top;sz=120x30,120x60;tile=2;ord=96221090">');
                                    document.write('<img src="//ad.doubleclick.net/ad/dmg.barchart/stocks;mkt=stocks;pos=top;sz=120x30,120x60;tile=2;ord=96221090"></a>');
                                }
                                //-->
                            </script>
                            <noscript>
                                <!-- for non JavaScript browsers and Netscape 2.x -->
                                <a href="http://ad.doubleclick.net/jump/dmg.barchart/stocks;mkt=stocks;pos=top;sz=120x30,120x60;tile=2;ord=96221090">
                                    <img src="//ad.doubleclick.net/ad/dmg.barchart/stocks;mkt=stocks;pos=top;sz=120x30,120x60;tile=2;ord=96221090" width="120" height="60" border="0">
                                </a>
                            </noscript>
                        </iframe>
                    </div>
                                <div class="break"></div>
                <div class="sidemenuhead">Market Pulse</div>
                <div class="sidelistmenu">
                    <ul>
                        <li><a href="/stocks/marketoverview">Market Overview</a></li><li><a href="/stocks/momentum.php">Momentum</a></li><li><a href="/stocks/newhilo.php">New Highs/Lows</a></li><li><a href="/stocks/high.php">52 Week Highs</a></li><li><a href="/stocks/low.php">52 Week Lows</a></li><li><a href="/stocks/athigh.php" class="current">All Time Highs</a></li><li><a href="/stocks/atlow.php">All Time Lows</a></li><li><a href="/stocks/vleaders.php">Volume Leaders</a></li><li><a href="/stocks/percentadvance.php">Percent Advances</a></li><li><a href="/stocks/percentdecline.php">Percent Declines</a></li><li><a href="/stocks/priceadvance.php">Price Advances</a></li><li><a href="/stocks/pricedecline.php">Price Declines</a></li><li><a href="/stocks/rangeadvance.php">Range Advances</a></li><li><a href="/stocks/rangedecline.php">Range Declines</a></li><li><a href="/stocks/gapup.php">Gap Up Stocks</a></li><li><a href="/stocks/gapdown.php">Gap Down Stocks</a></li><li><a href="/stocks/pricevol.php">Price Volume</a></li><li><a href="/stocks/volumeadvance.php">Volume Advances</a></li><li><a href="/stocks/toptrading.php">Top Trading Stocks</a></li><li><div class="sidemenuhead">Performance</div></li><li><a href="/stocks/performance/ytd.php">YTD Change</a></li><li><a href="/stocks/performance/5day.php">5-Day Leaders</a></li><li><a href="/stocks/performance/1month.php">1-Month Leaders</a></li><li><a href="/stocks/performance/3month.php">3-Month Leaders</a></li><li><a href="/stocks/performance/6month.php">6-Month Leaders</a></li><li><a href="/stocks/performance/9month.php">9-Month Leaders</a></li><li><a href="/stocks/performance/12month.php">12-Month Leaders</a></li><li><a href="/stocks/performance/3year.php">3-Year Leaders</a></li><li><a href="/stocks/performance/5year.php">5-Year Leaders</a></li><li><a href="/stocks/performance/10year.php">10-Year Leaders</a></li><li><div class="sidemenuhead">Decliners</div></li><li><a href="/stocks/performance/ytd.php?decliners=show">YTD Change</a></li><li><a href="/stocks/performance/5day.php?decliners=show">5-Day Leaders</a></li><li><a href="/stocks/performance/1month.php?decliners=show">1-Month Leaders</a></li><li><a href="/stocks/performance/3month.php?decliners=show">3-Month Leaders</a></li><li><a href="/stocks/performance/6month.php?decliners=show">6-Month Leaders</a></li><li><a href="/stocks/performance/9month.php?decliners=show">9-Month Leaders</a></li><li><a href="/stocks/performance/12month.php?decliners=show">12-Month Leaders</a></li><li><a href="/stocks/performance/3year.php?decliners=show">3-Year Leaders</a></li><li><a href="/stocks/performance/5year.php?decliners=show">5-Year Leaders</a></li><li><a href="/stocks/performance/10year.php?decliners=show">10-Year Leaders</a></li><li><div class="sidemenuhead">More Stocks</div></li><li><a href="/stocks/indices.php">Indices</a></li><li><a href="/stocks/signals">Signals</a></li><li><a href="/stocks/hotstocks">Hot Stocks</a></li><li><a href="/stocks/sectors">Sectors</a></li><li><a href="/blog/index.php">Stock Picks</a></li><li><a href="/headlines/">News &amp; Commentary</a></li><li><a href="/stocks/covered-calls">Covered Calls</a></li><li><a href="/my/screener/stock.php">Stock Screener</a></li>                    </ul>
                </div>
                <br /><div class="noprint" align="center"><script type="text/javascript" src='http://ad.doubleclick.net/adj/dmg.barchart/stocks;sec=;cat=;url=;kw=;dcopt=;pos=bottom;sz=160x600;tile=3;ord=96221090'></script><br /><br /><br /></div>            </div>
        </td>
        <td class="maincol">
    <div class='location'><div class="crumbs">YOU ARE HERE:&nbsp; <a href="/stocks/marketoverview">Stocks</a>&nbsp;&raquo;&nbsp;<a href="/stocks/marketoverview">Market Pulse</a>&nbsp;&raquo;&nbsp;All Time Highs</div>        <div class="share noprint">
            <!-- Facebook "Like" button -->
            <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2FBarchart&amp;layout=button_count&amp;show_faces=false&amp;width=100&amp;action=like&amp;font=verdana&amp;colorscheme=light&amp;height=20" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:20px;" allowTransparency="true"></iframe>
            <!-- Google Badge -->
            <a href="https://plus.google.com/117847964137296688187?prsrc=3" rel="publisher" target="_top" style="text-decoration:none;">
                <img src="//ssl.gstatic.com/images/icons/gplus-16.png" alt="Google+" style="border:0;width:16px;height:16px;margin: 0 20px 2px 0;"/>
            </a>
            <!-- AddToAny Share/Save button -->
            <a class="share-this a2a_target" href="javascript:;">
                <img src="/shared/images/share_save.png" width="140" height="16" align="top" border="0" alt="Share or Bookmark" style="margin-top: 2px" />
            </a>

            <script type="text/javascript">
                // A custom "onReady" function for AddToAny
                function my_addtoany_onready() {
                    a2a_config.target = '.share-this';
                    a2a.init('page');
                }

                // Setup AddToAny "onReady" callback
                var a2a_config = a2a_config || {};
                a2a_config.tracking_callback = {
                    ready: my_addtoany_onready,
                };
                // Additional a2a_config properties may go here
                a2a_config.onclick=1;
                a2a_config.hide_embeds=0;
                a2a_config.color_link_text="333333";
                a2a_config.color_link_text_hover="333333";
                a2a_config.num_services=12;
                a2a_config.prioritize=["facebook","twitter","digg","google_bookmarks","stumbleupon","blogger_post","delicious","reddit"];
                a2a_config.track_links ="ga";

                // Load AddToAny script asynchronously
                (function(){
                    var a = document.createElement('script');
                    a.type = 'text/javascript';
                    a.async = true;
                    a.src = 'http://static.addtoany.com/menu/page.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(a, s);
                })();
                </script>
        </div>
    </div>
<!-- Begin comScore Tag -->
<script>
    var _comscore = _comscore || [];
    _comscore.push({ c1: "2", c2: "9932183" });
    (function() {
        var s = document.createElement("script"), el =
            document.getElementsByTagName("script")[0]; s.async = true;
        s.src = (document.location.protocol == "https:" ? "https://sb" :
            "http://b") + ".scorecardresearch.com/beacon.js";
        el.parentNode.insertBefore(s, el);
    })();
</script>

<noscript>
    <img src="//b.scorecardresearch.com/p?c1=2&c2=9932183&cv=2.0&cj=1" />
</noscript>
<!-- End comScore Tag -->
<script type="text/javascript">
	Barchart.Page.Init = function() {
		if (Barchart.Data.DataMaster) Barchart.Data.DataMaster.addSymbols(com.barchart.QuoteTableListener('1'), [''], ['']);
		new Dropdown(document.getElementById('filterButton'));
	}

	Barchart.Page.UI = {
		OpenFlipCharts : function() {
			var w = window.open('', 'winFlipCharts', 'width=730,height=535,scrollbars=yes,resizable=yes');
			var f = document.getElementById('frmFlipCharts');
			f.target = 'winFlipCharts';
			f.submit();
		}
	}
</script>

<div id="pagehead">
<span class="help_fr"><a onclick="popWin('/education/help/stocks_alltime_hl.php', 800, 600, 'helpWin'); return false;" href="#"><img src="/shared/images/helpme.gif" alt="View Help" border="0" title="View Help" width="45" height="12" /></a></span>
<h1>US Exchanges All Time Highs<span class="time"><span id="dtaDate">Thu, Oct 30th, 2014</span></span></h1>

<div class="smgrey">Stocks that made or matched a new all time High price during the current trading session.</div>
	<div class="stickynote"><strong><center><a href="/my/stock-alerts/?source=STK_HL">Barchart Strategic Alerts - Technical and fundamental alerts sent to your phone and email - Try it now</a></center></strong></div>

</div>
<div class="flip_header">
<a href="/?modal=register.php%3Fref=excel%26ajax=1" class="flipcharts"><img src="/shared/images/excel.gif" alt="Export Data" border="0" title="Export Data" border="0" /></a><form id="frmFlipCharts" method="post" action="/flipcharts.php">
	<input type="hidden" name="style" value="flip" />
	<input type="hidden" name="symbols" value="AAT,ABBV,ABC,ACE,ACHC,ADP,ADPT,AEP,AGIO,AKR,ALXN,AMGN,AMRE,ANAC,APOG,AWK,AWR,BABY,BAM,BCC,BIDU,BIN,BLKB,BLUE,BMRC,BR,BURL,CACI,CASY,CB,CBPO,CELG,CFG,CHD,CI,CMN,CONE,COST,CPK,CSX,CTAS,CTLT,CVS,CWT,CYBR,DFT,DPZ,DTE,EGP,ELLI,ELS,EPAM,EROS,ESBF,EW,EXR,FAF,FDS,FFG,FNHC,FRGI,FRT,GD,GEO,GILD,GMCR,GPC,GPX,HAIN,HD,HPP,HRL,HUM,IDA,IG,ILMN,IT,ITC,ITW,JAH,JJSF,JOUT,JWN,KR,LB,LCI,LEAF,LEG,LMT,LNT,LOPE,LOW,MAR,MCO,MDT,MDXG,MGEE,MHFI,MLI,MMM,MPLX,NAVI,NCLH,NEWM,NHC,NI,NJR,NKE,NOC,NP,NU,NWE,ODFL,OMAB,ORLY,OVAS,OZRK,PAHC,PEB,PG,PNY,POR,QTS,RE,RGEN,RHI,ROL,ROP,RSG,RTN,SAFT,SAIC,SBAC,SGC,SIG,SMCI,SNA,SPNC,SRE,SSNC,STE,SXI,SXT,SYF,SYK,TAX,TDY,TEG,TFSL,TFX,TRV,TSO,TTPH,TYL,UEIC,UGI,UNH,USLM,USPH,V,VAC,VASC,VPRT,VVC,WEC,WGL,WGP,WHG,WHR,XEL,ZMH" />
</form>

<!-- This is the main content area -->
<a href="/?modal=register.php%3Fref=flipcharts%26ajax=1" class="flipcharts">FlipCharts</a></div>
<div>
	<div class="bar">
	<div class="fl">
<h2>Filter:&nbsp;</h2>
	<span id="filterButton" class="dropdown">
		<span class="dropdownbutton textddbutton" style="margin-top: 3px">US Exchanges</span>
		<ul class="itemlist" style="width: 135px">
<li onclick="location.href = '/stocks/athigh.php'">US Exchanges</li><li onclick="return false;">--By Market Cap--</li><li onclick="location.href = '/stocks/5bathigh.php'">Large Cap</li><li onclick="location.href = '/stocks/15bathigh.php'">Mid Cap</li><li onclick="location.href = '/stocks/1bathigh.php'">Small Cap</li><li onclick="location.href = '/stocks/250mathigh.php'">Micro Cap</li><li onclick="return false;">--By Exchange--</li><li onclick="location.href = '/stocks/nyseathigh.php'">NYSE</li><li onclick="location.href = '/stocks/amexathigh.php'">AMEX</li><li onclick="location.href = '/stocks/nasdathigh.php'">Nasdaq</li><li onclick="location.href = '/stocks/etfathigh.php'">ETFs</li><li onclick="location.href = '/stocks/otcathigh.php'">OTC/BB</li><li onclick="location.href = '/stocks/pinkathigh.php'">Pink Sheets</li><li onclick="location.href = '/stocks/tsxathigh.php'">Toronto (TSX)</li><li onclick="location.href = '/stocks/tsxvathigh.php'">Toronto Venture</li><li onclick="location.href = '/stocks/lseathigh.php'">London (LSE)</li><li onclick="location.href = '/stocks/nsiathigh.php'">India (NSE)</li><li onclick="location.href = '/stocks/asxathigh.php'">Australia (ASX)</li>		</ul>
	</span>
	</div>
<div class='fr' style='padding-right: 5px; margin-top: 5px'><span id='divViewMenu'><strong>Main View</strong><span class="viewspace" ></span><a href='/stocks/athigh.php?_dtp1=0&view=technical'>Technical</a><span class="viewspace" ></span><a href='/stocks/athigh.php?_dtp1=0&view=performance'>Performance</a><span class="viewspace" ></span><a class='modal' href='/register.php?ref=views'>Custom View</a></span></div>	</div>
	<div class="mpbox" id="divContent">
	  	
<div class="xscroll">
<table class="datatable ajax" id="dt1" width="100%" border="0" cellpadding="1" cellspacing="1" data-largeTable="500" data-info="symbols=AAT,ABBV,ABC,ACE,ACHC,ADP,ADPT,AEP,AGIO,AKR,ALXN,AMGN,AMRE,ANAC,APOG,AWK,AWR,BABY,BAM,BCC,BIDU,BIN,BLKB,BLUE,BMRC,BR,BURL,CACI,CASY,CB,CBPO,CELG,CFG,CHD,CI,CMN,CONE,COST,CPK,CSX,CTAS,CTLT,CVS,CWT,CYBR,DFT,DPZ,DTE,EGP,ELLI,ELS,EPAM,EROS,ESBF,EW,EXR,FAF,FDS,FFG,FNHC,FRGI,FRT,GD,GEO,GILD,GMCR,GPC,GPX,HAIN,HD,HPP,HRL,HUM,IDA,IG,ILMN,IT,ITC,ITW,JAH,JJSF,JOUT,JWN,KR,LB,LCI,LEAF,LEG,LMT,LNT,LOPE,LOW,MAR,MCO,MDT,MDXG,MGEE,MHFI,MLI,MMM,MPLX,NAVI,NCLH,NEWM,NHC,NI,NJR,NKE,NOC,NP,NU,NWE,ODFL,OMAB,ORLY,OVAS,OZRK,PAHC,PEB,PG,PNY,POR,QTS,RE,RGEN,RHI,ROL,ROP,RSG,RTN,SAFT,SAIC,SBAC,SGC,SIG,SMCI,SNA,SPNC,SRE,SSNC,STE,SXI,SXT,SYF,SYK,TAX,TDY,TEG,TFSL,TFX,TRV,TSO,TTPH,TYL,UEIC,UGI,UNH,USLM,USPH,V,VAC,VASC,VPRT,VVC,WEC,WGL,WGP,WHG,WHR,XEL,ZMH;columns=symbol,name,last,change,pctchange,high,low,volume,displaytime;mode=I;reqid=1;bgChange=;view=" data-fieldRules="name[maxlength]=40;" data-extraFields="" data-pageSize="100" data-perfLinks="N%3B"><thead>  <tr class="datatable_header" id="dt1_column">    <th rel="text" id="dt11_column_symbol" align="left" class="ds_symbol sort_none">Sym</th>
    <th rel="text" id="dt11_column_name" align="left" class="ds_name sort_none">Name</th>
    <th rel="price" id="dt11_column_last" align="right" class="ds_last sort_none"><abbr title="Last Price: The last trade price.">Last</abbr></th>
    <th rel="change" id="dt11_column_change" align="right" class="ds_change sort_none"><abbr title="Change: The difference between the current price and the previous day's settlement price.">Change</abbr></th>
    <th rel="pctchange" id="dt11_column_pctchange" align="right" class="ds_pctchange sort_none"><abbr title="Percent Change: The difference between the current price and the previous day's settlement price expressed as a percentage.">Percent</abbr></th>
    <th rel="price" id="dt11_column_high" align="right" class="ds_high sort_none"><abbr title="High Price: The highest trade price for the day.">High</abbr></th>
    <th rel="price" id="dt11_column_low" align="right" class="ds_low sort_none"><abbr title="Low Price: The lowest trade price for the day.">Low</abbr></th>
    <th rel="int" id="dt11_column_volume" align="right" class="ds_volume sort_none"><abbr title="Volume: The total number of contracts traded for the day. For weekly and monthly, this is the average daily volume.">Volume</abbr></th>
    <th rel="time" id="dt11_column_displaytime" align="right" class="ds_displaytime sort_none"><abbr title="Last Trade Time">Time</abbr></th>
    <th align="center" class="ds_links sort_disabled noprint">Links</th>
  </tr>
</thead><tbody>  <tr id="dt1_AAT" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AAT">AAT</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AAT">American Assets Trust</a></td>
    <td id="dt1_AAT_last" align="right" class="ds_last qb_shad" nowrap="nowrap">38.02</td>
    <td id="dt1_AAT_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.51</span></td>
    <td id="dt1_AAT_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.36%</span></td>
    <td id="dt1_AAT_high" align="right" class="ds_high qb_shad" nowrap="nowrap">38.10</td>
    <td id="dt1_AAT_low" align="right" class="ds_low qb_shad" nowrap="nowrap">37.12</td>
    <td id="dt1_AAT_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">136,891</td>
    <td id="dt1_AAT_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/AAT" title="Detailed Quote for AAT"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AAT" title="Chart for AAT"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AAT" title="Opinion for AAT"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AAT" title="Cheat Sheet for AAT"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ABBV" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/ABBV">ABBV</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/ABBV">Abbvie Inc. Common Stock</a></td>
    <td id="dt1_ABBV_last" align="right" class="ds_last qb_line" nowrap="nowrap">61.18</td>
    <td id="dt1_ABBV_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.20</span></td>
    <td id="dt1_ABBV_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+2.00%</span></td>
    <td id="dt1_ABBV_high" align="right" class="ds_high qb_line" nowrap="nowrap">61.43</td>
    <td id="dt1_ABBV_low" align="right" class="ds_low qb_line" nowrap="nowrap">59.91</td>
    <td id="dt1_ABBV_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">11,889,727</td>
    <td id="dt1_ABBV_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/ABBV" title="Detailed Quote for ABBV"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ABBV" title="Chart for ABBV"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ABBV" title="Opinion for ABBV"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ABBV" title="Cheat Sheet for ABBV"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ABC" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ABC">ABC</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ABC">Amerisourcebergen Corp</a></td>
    <td id="dt1_ABC_last" align="right" class="ds_last qb_shad" nowrap="nowrap">84.84</td>
    <td id="dt1_ABC_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+5.10</span></td>
    <td id="dt1_ABC_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+6.40%</span></td>
    <td id="dt1_ABC_high" align="right" class="ds_high qb_shad" nowrap="nowrap">85.12</td>
    <td id="dt1_ABC_low" align="right" class="ds_low qb_shad" nowrap="nowrap">81.68</td>
    <td id="dt1_ABC_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">5,192,574</td>
    <td id="dt1_ABC_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/ABC" title="Detailed Quote for ABC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ABC" title="Chart for ABC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ABC" title="Opinion for ABC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ABC" title="Cheat Sheet for ABC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ACE" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/ACE">ACE</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/ACE">Ace Limited</a></td>
    <td id="dt1_ACE_last" align="right" class="ds_last qb_line" nowrap="nowrap">108.96</td>
    <td id="dt1_ACE_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.59</span></td>
    <td id="dt1_ACE_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.54%</span></td>
    <td id="dt1_ACE_high" align="right" class="ds_high qb_line" nowrap="nowrap">109.62</td>
    <td id="dt1_ACE_low" align="right" class="ds_low qb_line" nowrap="nowrap">107.98</td>
    <td id="dt1_ACE_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">1,100,343</td>
    <td id="dt1_ACE_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/ACE" title="Detailed Quote for ACE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ACE" title="Chart for ACE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ACE" title="Opinion for ACE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ACE" title="Cheat Sheet for ACE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ACHC" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ACHC">ACHC</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ACHC">Acadia Healthcare Company Inc</a></td>
    <td id="dt1_ACHC_last" align="right" class="ds_last qb_shad" nowrap="nowrap">59.08</td>
    <td id="dt1_ACHC_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+6.17</span></td>
    <td id="dt1_ACHC_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+11.66%</span></td>
    <td id="dt1_ACHC_high" align="right" class="ds_high qb_shad" nowrap="nowrap">61.91</td>
    <td id="dt1_ACHC_low" align="right" class="ds_low qb_shad" nowrap="nowrap">57.19</td>
    <td id="dt1_ACHC_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">1,731,274</td>
    <td id="dt1_ACHC_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/ACHC" title="Detailed Quote for ACHC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ACHC" title="Chart for ACHC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ACHC" title="Opinion for ACHC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ACHC" title="Cheat Sheet for ACHC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ADP" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/ADP">ADP</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/ADP">Automatic Data Processing</a></td>
    <td id="dt1_ADP_last" align="right" class="ds_last qb_line" nowrap="nowrap">78.95</td>
    <td id="dt1_ADP_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.03</span></td>
    <td id="dt1_ADP_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.32%</span></td>
    <td id="dt1_ADP_high" align="right" class="ds_high qb_line" nowrap="nowrap">79.39</td>
    <td id="dt1_ADP_low" align="right" class="ds_low qb_line" nowrap="nowrap">77.30</td>
    <td id="dt1_ADP_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">2,253,747</td>
    <td id="dt1_ADP_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/ADP" title="Detailed Quote for ADP"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ADP" title="Chart for ADP"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ADP" title="Opinion for ADP"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ADP" title="Cheat Sheet for ADP"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ADPT" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ADPT">ADPT</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ADPT">Adeptus Health Inc.</a></td>
    <td id="dt1_ADPT_last" align="right" class="ds_last qb_shad" nowrap="nowrap">32.77</td>
    <td id="dt1_ADPT_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.54</span></td>
    <td id="dt1_ADPT_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.68%</span></td>
    <td id="dt1_ADPT_high" align="right" class="ds_high qb_shad" nowrap="nowrap">34.51</td>
    <td id="dt1_ADPT_low" align="right" class="ds_low qb_shad" nowrap="nowrap">31.93</td>
    <td id="dt1_ADPT_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">423,663</td>
    <td id="dt1_ADPT_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/ADPT" title="Detailed Quote for ADPT"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ADPT" title="Chart for ADPT"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ADPT" title="Opinion for ADPT"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ADPT" title="Cheat Sheet for ADPT"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_AEP" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/AEP">AEP</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/AEP">American Electric Power Company</a></td>
    <td id="dt1_AEP_last" align="right" class="ds_last qb_line" nowrap="nowrap">58.27</td>
    <td id="dt1_AEP_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.51</span></td>
    <td id="dt1_AEP_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+2.66%</span></td>
    <td id="dt1_AEP_high" align="right" class="ds_high qb_line" nowrap="nowrap">58.30</td>
    <td id="dt1_AEP_low" align="right" class="ds_low qb_line" nowrap="nowrap">56.87</td>
    <td id="dt1_AEP_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">3,314,271</td>
    <td id="dt1_AEP_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/AEP" title="Detailed Quote for AEP"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AEP" title="Chart for AEP"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AEP" title="Opinion for AEP"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AEP" title="Cheat Sheet for AEP"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_AGIO" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AGIO">AGIO</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AGIO">Agios Pharmaceuticals Inc</a></td>
    <td id="dt1_AGIO_last" align="right" class="ds_last qb_shad" nowrap="nowrap">84.37</td>
    <td id="dt1_AGIO_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+5.01</span></td>
    <td id="dt1_AGIO_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+6.31%</span></td>
    <td id="dt1_AGIO_high" align="right" class="ds_high qb_shad" nowrap="nowrap">84.42</td>
    <td id="dt1_AGIO_low" align="right" class="ds_low qb_shad" nowrap="nowrap">79.13</td>
    <td id="dt1_AGIO_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">409,534</td>
    <td id="dt1_AGIO_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/AGIO" title="Detailed Quote for AGIO"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AGIO" title="Chart for AGIO"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AGIO" title="Opinion for AGIO"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AGIO" title="Cheat Sheet for AGIO"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_AKR" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/AKR">AKR</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/AKR">Acadia Realty Trust</a></td>
    <td id="dt1_AKR_last" align="right" class="ds_last qb_line" nowrap="nowrap">30.80</td>
    <td id="dt1_AKR_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.45</span></td>
    <td id="dt1_AKR_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.48%</span></td>
    <td id="dt1_AKR_high" align="right" class="ds_high qb_line" nowrap="nowrap">30.93</td>
    <td id="dt1_AKR_low" align="right" class="ds_low qb_line" nowrap="nowrap">29.82</td>
    <td id="dt1_AKR_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">2,011,023</td>
    <td id="dt1_AKR_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/AKR" title="Detailed Quote for AKR"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AKR" title="Chart for AKR"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AKR" title="Opinion for AKR"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AKR" title="Cheat Sheet for AKR"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ALXN" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ALXN">ALXN</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ALXN">Alexion Pharmaceuticals</a></td>
    <td id="dt1_ALXN_last" align="right" class="ds_last qb_shad" nowrap="nowrap">192.93</td>
    <td id="dt1_ALXN_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+2.44</span></td>
    <td id="dt1_ALXN_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.28%</span></td>
    <td id="dt1_ALXN_high" align="right" class="ds_high qb_shad" nowrap="nowrap">194.20</td>
    <td id="dt1_ALXN_low" align="right" class="ds_low qb_shad" nowrap="nowrap">189.15</td>
    <td id="dt1_ALXN_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">1,184,487</td>
    <td id="dt1_ALXN_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/ALXN" title="Detailed Quote for ALXN"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ALXN" title="Chart for ALXN"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ALXN" title="Opinion for ALXN"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ALXN" title="Cheat Sheet for ALXN"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_AMGN" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/AMGN">AMGN</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/AMGN">Amgen Inc</a></td>
    <td id="dt1_AMGN_last" align="right" class="ds_last qb_line" nowrap="nowrap">161.58</td>
    <td id="dt1_AMGN_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+2.70</span></td>
    <td id="dt1_AMGN_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.70%</span></td>
    <td id="dt1_AMGN_high" align="right" class="ds_high qb_line" nowrap="nowrap">161.58</td>
    <td id="dt1_AMGN_low" align="right" class="ds_low qb_line" nowrap="nowrap">158.16</td>
    <td id="dt1_AMGN_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">4,049,590</td>
    <td id="dt1_AMGN_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/AMGN" title="Detailed Quote for AMGN"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AMGN" title="Chart for AMGN"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AMGN" title="Opinion for AMGN"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AMGN" title="Cheat Sheet for AMGN"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_AMRE" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AMRE">AMRE</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AMRE">Amreit Inc</a></td>
    <td id="dt1_AMRE_last" align="right" class="ds_last qb_shad" nowrap="nowrap">24.85</td>
    <td id="dt1_AMRE_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.13</span></td>
    <td id="dt1_AMRE_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.53%</span></td>
    <td id="dt1_AMRE_high" align="right" class="ds_high qb_shad" nowrap="nowrap">24.86</td>
    <td id="dt1_AMRE_low" align="right" class="ds_low qb_shad" nowrap="nowrap">24.46</td>
    <td id="dt1_AMRE_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">63,341</td>
    <td id="dt1_AMRE_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/AMRE" title="Detailed Quote for AMRE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AMRE" title="Chart for AMRE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AMRE" title="Opinion for AMRE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AMRE" title="Cheat Sheet for AMRE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ANAC" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/ANAC">ANAC</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/ANAC">Anacor Pharmaceuticals</a></td>
    <td id="dt1_ANAC_last" align="right" class="ds_last qb_line" nowrap="nowrap">30.08</td>
    <td id="dt1_ANAC_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.37</span></td>
    <td id="dt1_ANAC_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.25%</span></td>
    <td id="dt1_ANAC_high" align="right" class="ds_high qb_line" nowrap="nowrap">30.13</td>
    <td id="dt1_ANAC_low" align="right" class="ds_low qb_line" nowrap="nowrap">29.13</td>
    <td id="dt1_ANAC_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">382,948</td>
    <td id="dt1_ANAC_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/ANAC" title="Detailed Quote for ANAC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ANAC" title="Chart for ANAC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ANAC" title="Opinion for ANAC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ANAC" title="Cheat Sheet for ANAC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_APOG" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/APOG">APOG</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/APOG">Apogee Enterprises</a></td>
    <td id="dt1_APOG_last" align="right" class="ds_last qb_shad" nowrap="nowrap">43.61</td>
    <td id="dt1_APOG_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.23</span></td>
    <td id="dt1_APOG_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+2.90%</span></td>
    <td id="dt1_APOG_high" align="right" class="ds_high qb_shad" nowrap="nowrap">43.65</td>
    <td id="dt1_APOG_low" align="right" class="ds_low qb_shad" nowrap="nowrap">42.35</td>
    <td id="dt1_APOG_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">210,603</td>
    <td id="dt1_APOG_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/APOG" title="Detailed Quote for APOG"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/APOG" title="Chart for APOG"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/APOG" title="Opinion for APOG"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=APOG" title="Cheat Sheet for APOG"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_AWK" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/AWK">AWK</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/AWK">American Water Works</a></td>
    <td id="dt1_AWK_last" align="right" class="ds_last qb_line" nowrap="nowrap">53.12</td>
    <td id="dt1_AWK_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.91</span></td>
    <td id="dt1_AWK_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.74%</span></td>
    <td id="dt1_AWK_high" align="right" class="ds_high qb_line" nowrap="nowrap">53.13</td>
    <td id="dt1_AWK_low" align="right" class="ds_low qb_line" nowrap="nowrap">52.17</td>
    <td id="dt1_AWK_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">498,816</td>
    <td id="dt1_AWK_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/AWK" title="Detailed Quote for AWK"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AWK" title="Chart for AWK"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AWK" title="Opinion for AWK"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AWK" title="Cheat Sheet for AWK"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_AWR" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AWR">AWR</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AWR">American States Water Company</a></td>
    <td id="dt1_AWR_last" align="right" class="ds_last qb_shad" nowrap="nowrap">35.87</td>
    <td id="dt1_AWR_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.04</span></td>
    <td id="dt1_AWR_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+2.99%</span></td>
    <td id="dt1_AWR_high" align="right" class="ds_high qb_shad" nowrap="nowrap">35.91</td>
    <td id="dt1_AWR_low" align="right" class="ds_low qb_shad" nowrap="nowrap">34.82</td>
    <td id="dt1_AWR_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">137,722</td>
    <td id="dt1_AWR_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/AWR" title="Detailed Quote for AWR"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AWR" title="Chart for AWR"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AWR" title="Opinion for AWR"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AWR" title="Cheat Sheet for AWR"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BABY" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/BABY">BABY</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/BABY">Natus Medical Inc</a></td>
    <td id="dt1_BABY_last" align="right" class="ds_last qb_line" nowrap="nowrap">33.87</td>
    <td id="dt1_BABY_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.23</span></td>
    <td id="dt1_BABY_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.68%</span></td>
    <td id="dt1_BABY_high" align="right" class="ds_high qb_line" nowrap="nowrap">34.24</td>
    <td id="dt1_BABY_low" align="right" class="ds_low qb_line" nowrap="nowrap">33.30</td>
    <td id="dt1_BABY_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">393,866</td>
    <td id="dt1_BABY_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/BABY" title="Detailed Quote for BABY"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BABY" title="Chart for BABY"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BABY" title="Opinion for BABY"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BABY" title="Cheat Sheet for BABY"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BAM" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BAM">BAM</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BAM">Brookfield Asset Management Inc</a></td>
    <td id="dt1_BAM_last" align="right" class="ds_last qb_shad" nowrap="nowrap">48.25</td>
    <td id="dt1_BAM_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.45</span></td>
    <td id="dt1_BAM_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.94%</span></td>
    <td id="dt1_BAM_high" align="right" class="ds_high qb_shad" nowrap="nowrap">48.73</td>
    <td id="dt1_BAM_low" align="right" class="ds_low qb_shad" nowrap="nowrap">47.64</td>
    <td id="dt1_BAM_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">384,168</td>
    <td id="dt1_BAM_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/BAM" title="Detailed Quote for BAM"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BAM" title="Chart for BAM"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BAM" title="Opinion for BAM"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BAM" title="Cheat Sheet for BAM"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BCC" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/BCC">BCC</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/BCC">Boise Cascade L.L.C. Common ST</a></td>
    <td id="dt1_BCC_last" align="right" class="ds_last qb_line" nowrap="nowrap">35.24</td>
    <td id="dt1_BCC_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.59</span></td>
    <td id="dt1_BCC_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.70%</span></td>
    <td id="dt1_BCC_high" align="right" class="ds_high qb_line" nowrap="nowrap">35.42</td>
    <td id="dt1_BCC_low" align="right" class="ds_low qb_line" nowrap="nowrap">31.81</td>
    <td id="dt1_BCC_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">541,953</td>
    <td id="dt1_BCC_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/BCC" title="Detailed Quote for BCC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BCC" title="Chart for BCC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BCC" title="Opinion for BCC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BCC" title="Cheat Sheet for BCC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BIDU" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BIDU">BIDU</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BIDU">Baidu Inc</a></td>
    <td id="dt1_BIDU_last" align="right" class="ds_last qb_shad" nowrap="nowrap">237.01</td>
    <td id="dt1_BIDU_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+12.46</span></td>
    <td id="dt1_BIDU_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+5.55%</span></td>
    <td id="dt1_BIDU_high" align="right" class="ds_high qb_shad" nowrap="nowrap">237.55</td>
    <td id="dt1_BIDU_low" align="right" class="ds_low qb_shad" nowrap="nowrap">222.00</td>
    <td id="dt1_BIDU_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">10,712,455</td>
    <td id="dt1_BIDU_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/BIDU" title="Detailed Quote for BIDU"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BIDU" title="Chart for BIDU"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BIDU" title="Opinion for BIDU"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BIDU" title="Cheat Sheet for BIDU"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BIN" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/BIN">BIN</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/BIN">Iesi-Bfc Ltd</a></td>
    <td id="dt1_BIN_last" align="right" class="ds_last qb_line" nowrap="nowrap">28.25</td>
    <td id="dt1_BIN_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.86</span></td>
    <td id="dt1_BIN_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+7.05%</span></td>
    <td id="dt1_BIN_high" align="right" class="ds_high qb_line" nowrap="nowrap">28.39</td>
    <td id="dt1_BIN_low" align="right" class="ds_low qb_line" nowrap="nowrap">26.46</td>
    <td id="dt1_BIN_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">902,325</td>
    <td id="dt1_BIN_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/BIN" title="Detailed Quote for BIN"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BIN" title="Chart for BIN"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BIN" title="Opinion for BIN"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BIN" title="Cheat Sheet for BIN"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BLKB" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BLKB">BLKB</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BLKB">Blackbaud Inc</a></td>
    <td id="dt1_BLKB_last" align="right" class="ds_last qb_shad" nowrap="nowrap">42.11</td>
    <td id="dt1_BLKB_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.93</span></td>
    <td id="dt1_BLKB_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+2.26%</span></td>
    <td id="dt1_BLKB_high" align="right" class="ds_high qb_shad" nowrap="nowrap">43.15</td>
    <td id="dt1_BLKB_low" align="right" class="ds_low qb_shad" nowrap="nowrap">41.63</td>
    <td id="dt1_BLKB_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">530,836</td>
    <td id="dt1_BLKB_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/BLKB" title="Detailed Quote for BLKB"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BLKB" title="Chart for BLKB"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BLKB" title="Opinion for BLKB"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BLKB" title="Cheat Sheet for BLKB"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BLUE" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/BLUE">BLUE</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/BLUE">Bluebird Bio Inc</a></td>
    <td id="dt1_BLUE_last" align="right" class="ds_last qb_line" nowrap="nowrap">41.29</td>
    <td id="dt1_BLUE_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.62</span></td>
    <td id="dt1_BLUE_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+4.08%</span></td>
    <td id="dt1_BLUE_high" align="right" class="ds_high qb_line" nowrap="nowrap">42.19</td>
    <td id="dt1_BLUE_low" align="right" class="ds_low qb_line" nowrap="nowrap">39.19</td>
    <td id="dt1_BLUE_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">601,434</td>
    <td id="dt1_BLUE_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/BLUE" title="Detailed Quote for BLUE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BLUE" title="Chart for BLUE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BLUE" title="Opinion for BLUE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BLUE" title="Cheat Sheet for BLUE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BMRC" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BMRC">BMRC</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BMRC">Bank of Marin Bancorp</a></td>
    <td id="dt1_BMRC_last" align="right" class="ds_last qb_shad" nowrap="nowrap">49.44</td>
    <td id="dt1_BMRC_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.96</span></td>
    <td id="dt1_BMRC_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.98%</span></td>
    <td id="dt1_BMRC_high" align="right" class="ds_high qb_shad" nowrap="nowrap">49.85</td>
    <td id="dt1_BMRC_low" align="right" class="ds_low qb_shad" nowrap="nowrap">47.81</td>
    <td id="dt1_BMRC_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">45,156</td>
    <td id="dt1_BMRC_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/BMRC" title="Detailed Quote for BMRC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BMRC" title="Chart for BMRC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BMRC" title="Opinion for BMRC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BMRC" title="Cheat Sheet for BMRC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BR" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/BR">BR</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/BR">Broadridge Financial Solutions Llc</a></td>
    <td id="dt1_BR_last" align="right" class="ds_last qb_line" nowrap="nowrap">43.58</td>
    <td id="dt1_BR_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.16</span></td>
    <td id="dt1_BR_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.37%</span></td>
    <td id="dt1_BR_high" align="right" class="ds_high qb_line" nowrap="nowrap">43.78</td>
    <td id="dt1_BR_low" align="right" class="ds_low qb_line" nowrap="nowrap">43.25</td>
    <td id="dt1_BR_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">397,436</td>
    <td id="dt1_BR_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/BR" title="Detailed Quote for BR"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BR" title="Chart for BR"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BR" title="Opinion for BR"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BR" title="Cheat Sheet for BR"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BURL" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BURL">BURL</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BURL">Burlington Stores Inc</a></td>
    <td id="dt1_BURL_last" align="right" class="ds_last qb_shad" nowrap="nowrap">41.57</td>
    <td id="dt1_BURL_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.12</span></td>
    <td id="dt1_BURL_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+2.77%</span></td>
    <td id="dt1_BURL_high" align="right" class="ds_high qb_shad" nowrap="nowrap">41.63</td>
    <td id="dt1_BURL_low" align="right" class="ds_low qb_shad" nowrap="nowrap">40.16</td>
    <td id="dt1_BURL_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">479,435</td>
    <td id="dt1_BURL_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/BURL" title="Detailed Quote for BURL"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BURL" title="Chart for BURL"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BURL" title="Opinion for BURL"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BURL" title="Cheat Sheet for BURL"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CACI" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/CACI">CACI</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/CACI">Caci International</a></td>
    <td id="dt1_CACI_last" align="right" class="ds_last qb_line" nowrap="nowrap">82.05</td>
    <td id="dt1_CACI_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+7.53</span></td>
    <td id="dt1_CACI_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+10.10%</span></td>
    <td id="dt1_CACI_high" align="right" class="ds_high qb_line" nowrap="nowrap">82.15</td>
    <td id="dt1_CACI_low" align="right" class="ds_low qb_line" nowrap="nowrap">76.76</td>
    <td id="dt1_CACI_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">660,602</td>
    <td id="dt1_CACI_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/CACI" title="Detailed Quote for CACI"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CACI" title="Chart for CACI"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CACI" title="Opinion for CACI"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CACI" title="Cheat Sheet for CACI"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CASY" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CASY">CASY</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CASY">Caseys General Stores</a></td>
    <td id="dt1_CASY_last" align="right" class="ds_last qb_shad" nowrap="nowrap">81.06</td>
    <td id="dt1_CASY_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.53</span></td>
    <td id="dt1_CASY_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.66%</span></td>
    <td id="dt1_CASY_high" align="right" class="ds_high qb_shad" nowrap="nowrap">81.48</td>
    <td id="dt1_CASY_low" align="right" class="ds_low qb_shad" nowrap="nowrap">79.81</td>
    <td id="dt1_CASY_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">215,924</td>
    <td id="dt1_CASY_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/CASY" title="Detailed Quote for CASY"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CASY" title="Chart for CASY"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CASY" title="Opinion for CASY"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CASY" title="Cheat Sheet for CASY"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CB" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/CB">CB</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/CB">Chubb Corp</a></td>
    <td id="dt1_CB_last" align="right" class="ds_last qb_line" nowrap="nowrap">98.41</td>
    <td id="dt1_CB_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.57</span></td>
    <td id="dt1_CB_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.58%</span></td>
    <td id="dt1_CB_high" align="right" class="ds_high qb_line" nowrap="nowrap">98.78</td>
    <td id="dt1_CB_low" align="right" class="ds_low qb_line" nowrap="nowrap">97.47</td>
    <td id="dt1_CB_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">998,851</td>
    <td id="dt1_CB_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/CB" title="Detailed Quote for CB"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CB" title="Chart for CB"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CB" title="Opinion for CB"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CB" title="Cheat Sheet for CB"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CBPO" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CBPO">CBPO</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CBPO">China Biologic Products</a></td>
    <td id="dt1_CBPO_last" align="right" class="ds_last qb_shad" nowrap="nowrap">59.65</td>
    <td id="dt1_CBPO_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+3.15</span></td>
    <td id="dt1_CBPO_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+5.58%</span></td>
    <td id="dt1_CBPO_high" align="right" class="ds_high qb_shad" nowrap="nowrap">61.33</td>
    <td id="dt1_CBPO_low" align="right" class="ds_low qb_shad" nowrap="nowrap">56.50</td>
    <td id="dt1_CBPO_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">184,591</td>
    <td id="dt1_CBPO_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/CBPO" title="Detailed Quote for CBPO"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CBPO" title="Chart for CBPO"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CBPO" title="Opinion for CBPO"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CBPO" title="Cheat Sheet for CBPO"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CELG" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/CELG">CELG</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/CELG">Celgene Corp</a></td>
    <td id="dt1_CELG_last" align="right" class="ds_last qb_line" nowrap="nowrap">106.94</td>
    <td id="dt1_CELG_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.80</span></td>
    <td id="dt1_CELG_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.71%</span></td>
    <td id="dt1_CELG_high" align="right" class="ds_high qb_line" nowrap="nowrap">107.35</td>
    <td id="dt1_CELG_low" align="right" class="ds_low qb_line" nowrap="nowrap">104.18</td>
    <td id="dt1_CELG_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">6,002,308</td>
    <td id="dt1_CELG_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/CELG" title="Detailed Quote for CELG"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CELG" title="Chart for CELG"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CELG" title="Opinion for CELG"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CELG" title="Cheat Sheet for CELG"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CFG" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CFG">CFG</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CFG">Citizens Financial Group Inc/Ri</a></td>
    <td id="dt1_CFG_last" align="right" class="ds_last qb_shad" nowrap="nowrap">23.44</td>
    <td id="dt1_CFG_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_down">-0.04</span></td>
    <td id="dt1_CFG_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_down">-0.17%</span></td>
    <td id="dt1_CFG_high" align="right" class="ds_high qb_shad" nowrap="nowrap">23.69</td>
    <td id="dt1_CFG_low" align="right" class="ds_low qb_shad" nowrap="nowrap">23.30</td>
    <td id="dt1_CFG_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">1,176,597</td>
    <td id="dt1_CFG_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/CFG" title="Detailed Quote for CFG"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CFG" title="Chart for CFG"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CFG" title="Opinion for CFG"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CFG" title="Cheat Sheet for CFG"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CHD" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/CHD">CHD</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/CHD">Church & Dwight Company</a></td>
    <td id="dt1_CHD_last" align="right" class="ds_last qb_line" nowrap="nowrap">72.32</td>
    <td id="dt1_CHD_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_down">-0.02</span></td>
    <td id="dt1_CHD_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_down">-0.03%</span></td>
    <td id="dt1_CHD_high" align="right" class="ds_high qb_line" nowrap="nowrap">72.74</td>
    <td id="dt1_CHD_low" align="right" class="ds_low qb_line" nowrap="nowrap">71.85</td>
    <td id="dt1_CHD_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">605,832</td>
    <td id="dt1_CHD_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/CHD" title="Detailed Quote for CHD"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CHD" title="Chart for CHD"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CHD" title="Opinion for CHD"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CHD" title="Cheat Sheet for CHD"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CI" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CI">CI</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CI">Cigna Corp</a></td>
    <td id="dt1_CI_last" align="right" class="ds_last qb_shad" nowrap="nowrap">97.10</td>
    <td id="dt1_CI_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+3.10</span></td>
    <td id="dt1_CI_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+3.30%</span></td>
    <td id="dt1_CI_high" align="right" class="ds_high qb_shad" nowrap="nowrap">97.56</td>
    <td id="dt1_CI_low" align="right" class="ds_low qb_shad" nowrap="nowrap">94.50</td>
    <td id="dt1_CI_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">3,071,059</td>
    <td id="dt1_CI_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/CI" title="Detailed Quote for CI"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CI" title="Chart for CI"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CI" title="Opinion for CI"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CI" title="Cheat Sheet for CI"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CMN" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/CMN">CMN</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/CMN">Cantel Medical</a></td>
    <td id="dt1_CMN_last" align="right" class="ds_last qb_line" nowrap="nowrap">41.93</td>
    <td id="dt1_CMN_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.29</span></td>
    <td id="dt1_CMN_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+3.17%</span></td>
    <td id="dt1_CMN_high" align="right" class="ds_high qb_line" nowrap="nowrap">42.23</td>
    <td id="dt1_CMN_low" align="right" class="ds_low qb_line" nowrap="nowrap">40.50</td>
    <td id="dt1_CMN_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">100,823</td>
    <td id="dt1_CMN_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/CMN" title="Detailed Quote for CMN"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CMN" title="Chart for CMN"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CMN" title="Opinion for CMN"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CMN" title="Cheat Sheet for CMN"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CONE" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CONE">CONE</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CONE">Cyrusone Inc</a></td>
    <td id="dt1_CONE_last" align="right" class="ds_last qb_shad" nowrap="nowrap">26.80</td>
    <td id="dt1_CONE_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.67</span></td>
    <td id="dt1_CONE_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+2.56%</span></td>
    <td id="dt1_CONE_high" align="right" class="ds_high qb_shad" nowrap="nowrap">26.93</td>
    <td id="dt1_CONE_low" align="right" class="ds_low qb_shad" nowrap="nowrap">25.93</td>
    <td id="dt1_CONE_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">303,830</td>
    <td id="dt1_CONE_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/CONE" title="Detailed Quote for CONE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CONE" title="Chart for CONE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CONE" title="Opinion for CONE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CONE" title="Cheat Sheet for CONE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_COST" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/COST">COST</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/COST">Costco Wholesale Corp</a></td>
    <td id="dt1_COST_last" align="right" class="ds_last qb_line" nowrap="nowrap">133.00</td>
    <td id="dt1_COST_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.07</span></td>
    <td id="dt1_COST_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.81%</span></td>
    <td id="dt1_COST_high" align="right" class="ds_high qb_line" nowrap="nowrap">133.31</td>
    <td id="dt1_COST_low" align="right" class="ds_low qb_line" nowrap="nowrap">131.33</td>
    <td id="dt1_COST_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">1,302,063</td>
    <td id="dt1_COST_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/COST" title="Detailed Quote for COST"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/COST" title="Chart for COST"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/COST" title="Opinion for COST"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=COST" title="Cheat Sheet for COST"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CPK" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CPK">CPK</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CPK">Chesapeake Utilities Corp</a></td>
    <td id="dt1_CPK_last" align="right" class="ds_last qb_shad" nowrap="nowrap">48.63</td>
    <td id="dt1_CPK_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.12</span></td>
    <td id="dt1_CPK_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+2.36%</span></td>
    <td id="dt1_CPK_high" align="right" class="ds_high qb_shad" nowrap="nowrap">48.83</td>
    <td id="dt1_CPK_low" align="right" class="ds_low qb_shad" nowrap="nowrap">47.43</td>
    <td id="dt1_CPK_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">47,252</td>
    <td id="dt1_CPK_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/CPK" title="Detailed Quote for CPK"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CPK" title="Chart for CPK"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CPK" title="Opinion for CPK"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CPK" title="Cheat Sheet for CPK"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CSX" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/CSX">CSX</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/CSX">CSX Corp</a></td>
    <td id="dt1_CSX_last" align="right" class="ds_last qb_line" nowrap="nowrap">35.29</td>
    <td id="dt1_CSX_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_down">-0.11</span></td>
    <td id="dt1_CSX_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_down">-0.31%</span></td>
    <td id="dt1_CSX_high" align="right" class="ds_high qb_line" nowrap="nowrap">35.67</td>
    <td id="dt1_CSX_low" align="right" class="ds_low qb_line" nowrap="nowrap">35.02</td>
    <td id="dt1_CSX_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">6,801,376</td>
    <td id="dt1_CSX_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/CSX" title="Detailed Quote for CSX"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CSX" title="Chart for CSX"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CSX" title="Opinion for CSX"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CSX" title="Cheat Sheet for CSX"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CTAS" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CTAS">CTAS</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CTAS">Cintas Corp</a></td>
    <td id="dt1_CTAS_last" align="right" class="ds_last qb_shad" nowrap="nowrap">72.69</td>
    <td id="dt1_CTAS_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.88</span></td>
    <td id="dt1_CTAS_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.23%</span></td>
    <td id="dt1_CTAS_high" align="right" class="ds_high qb_shad" nowrap="nowrap">72.86</td>
    <td id="dt1_CTAS_low" align="right" class="ds_low qb_shad" nowrap="nowrap">71.17</td>
    <td id="dt1_CTAS_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">502,075</td>
    <td id="dt1_CTAS_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/CTAS" title="Detailed Quote for CTAS"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CTAS" title="Chart for CTAS"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CTAS" title="Opinion for CTAS"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CTAS" title="Cheat Sheet for CTAS"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CTLT" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/CTLT">CTLT</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/CTLT">Catalent Inc.</a></td>
    <td id="dt1_CTLT_last" align="right" class="ds_last qb_line" nowrap="nowrap">25.64</td>
    <td id="dt1_CTLT_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.09</span></td>
    <td id="dt1_CTLT_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.35%</span></td>
    <td id="dt1_CTLT_high" align="right" class="ds_high qb_line" nowrap="nowrap">26.00</td>
    <td id="dt1_CTLT_low" align="right" class="ds_low qb_line" nowrap="nowrap">24.87</td>
    <td id="dt1_CTLT_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">310,469</td>
    <td id="dt1_CTLT_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/CTLT" title="Detailed Quote for CTLT"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CTLT" title="Chart for CTLT"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CTLT" title="Opinion for CTLT"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CTLT" title="Cheat Sheet for CTLT"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CVS" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CVS">CVS</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CVS">CVS Corp</a></td>
    <td id="dt1_CVS_last" align="right" class="ds_last qb_shad" nowrap="nowrap">85.55</td>
    <td id="dt1_CVS_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.36</span></td>
    <td id="dt1_CVS_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.42%</span></td>
    <td id="dt1_CVS_high" align="right" class="ds_high qb_shad" nowrap="nowrap">85.95</td>
    <td id="dt1_CVS_low" align="right" class="ds_low qb_shad" nowrap="nowrap">84.78</td>
    <td id="dt1_CVS_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">3,186,867</td>
    <td id="dt1_CVS_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/CVS" title="Detailed Quote for CVS"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CVS" title="Chart for CVS"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CVS" title="Opinion for CVS"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CVS" title="Cheat Sheet for CVS"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CWT" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/CWT">CWT</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/CWT">California Water Service Group Holding</a></td>
    <td id="dt1_CWT_last" align="right" class="ds_last qb_line" nowrap="nowrap">25.46</td>
    <td id="dt1_CWT_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.46</span></td>
    <td id="dt1_CWT_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.84%</span></td>
    <td id="dt1_CWT_high" align="right" class="ds_high qb_line" nowrap="nowrap">25.66</td>
    <td id="dt1_CWT_low" align="right" class="ds_low qb_line" nowrap="nowrap">24.87</td>
    <td id="dt1_CWT_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">301,701</td>
    <td id="dt1_CWT_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/CWT" title="Detailed Quote for CWT"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CWT" title="Chart for CWT"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CWT" title="Opinion for CWT"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CWT" title="Cheat Sheet for CWT"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CYBR" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CYBR">CYBR</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CYBR">Cyberark Software Ltd.</a></td>
    <td id="dt1_CYBR_last" align="right" class="ds_last qb_shad" nowrap="nowrap">34.71</td>
    <td id="dt1_CYBR_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_down">-0.20</span></td>
    <td id="dt1_CYBR_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_down">-0.57%</span></td>
    <td id="dt1_CYBR_high" align="right" class="ds_high qb_shad" nowrap="nowrap">37.20</td>
    <td id="dt1_CYBR_low" align="right" class="ds_low qb_shad" nowrap="nowrap">34.05</td>
    <td id="dt1_CYBR_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">2,652,226</td>
    <td id="dt1_CYBR_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/CYBR" title="Detailed Quote for CYBR"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CYBR" title="Chart for CYBR"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CYBR" title="Opinion for CYBR"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CYBR" title="Cheat Sheet for CYBR"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_DFT" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/DFT">DFT</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/DFT">Dupont Fabros Technology</a></td>
    <td id="dt1_DFT_last" align="right" class="ds_last qb_line" nowrap="nowrap">30.44</td>
    <td id="dt1_DFT_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.22</span></td>
    <td id="dt1_DFT_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.73%</span></td>
    <td id="dt1_DFT_high" align="right" class="ds_high qb_line" nowrap="nowrap">30.49</td>
    <td id="dt1_DFT_low" align="right" class="ds_low qb_line" nowrap="nowrap">29.63</td>
    <td id="dt1_DFT_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">997,745</td>
    <td id="dt1_DFT_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/DFT" title="Detailed Quote for DFT"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/DFT" title="Chart for DFT"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/DFT" title="Opinion for DFT"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=DFT" title="Cheat Sheet for DFT"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_DPZ" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/DPZ">DPZ</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/DPZ">Domino's Pizza Inc</a></td>
    <td id="dt1_DPZ_last" align="right" class="ds_last qb_shad" nowrap="nowrap">88.88</td>
    <td id="dt1_DPZ_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_down">-0.10</span></td>
    <td id="dt1_DPZ_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_down">-0.11%</span></td>
    <td id="dt1_DPZ_high" align="right" class="ds_high qb_shad" nowrap="nowrap">89.30</td>
    <td id="dt1_DPZ_low" align="right" class="ds_low qb_shad" nowrap="nowrap">88.62</td>
    <td id="dt1_DPZ_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">275,671</td>
    <td id="dt1_DPZ_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/DPZ" title="Detailed Quote for DPZ"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/DPZ" title="Chart for DPZ"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/DPZ" title="Opinion for DPZ"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=DPZ" title="Cheat Sheet for DPZ"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_DTE" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/DTE">DTE</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/DTE">Dte Energy Company</a></td>
    <td id="dt1_DTE_last" align="right" class="ds_last qb_line" nowrap="nowrap">81.99</td>
    <td id="dt1_DTE_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.94</span></td>
    <td id="dt1_DTE_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+2.42%</span></td>
    <td id="dt1_DTE_high" align="right" class="ds_high qb_line" nowrap="nowrap">82.01</td>
    <td id="dt1_DTE_low" align="right" class="ds_low qb_line" nowrap="nowrap">80.13</td>
    <td id="dt1_DTE_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">1,355,404</td>
    <td id="dt1_DTE_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/DTE" title="Detailed Quote for DTE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/DTE" title="Chart for DTE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/DTE" title="Opinion for DTE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=DTE" title="Cheat Sheet for DTE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_EGP" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/EGP">EGP</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/EGP">Eastgroup Properties</a></td>
    <td id="dt1_EGP_last" align="right" class="ds_last qb_shad" nowrap="nowrap">67.94</td>
    <td id="dt1_EGP_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.63</span></td>
    <td id="dt1_EGP_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.94%</span></td>
    <td id="dt1_EGP_high" align="right" class="ds_high qb_shad" nowrap="nowrap">68.00</td>
    <td id="dt1_EGP_low" align="right" class="ds_low qb_shad" nowrap="nowrap">67.02</td>
    <td id="dt1_EGP_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">110,511</td>
    <td id="dt1_EGP_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/EGP" title="Detailed Quote for EGP"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/EGP" title="Chart for EGP"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/EGP" title="Opinion for EGP"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=EGP" title="Cheat Sheet for EGP"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ELLI" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/ELLI">ELLI</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/ELLI">Ellie Mae Inc</a></td>
    <td id="dt1_ELLI_last" align="right" class="ds_last qb_line" nowrap="nowrap">39.29</td>
    <td id="dt1_ELLI_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.62</span></td>
    <td id="dt1_ELLI_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.60%</span></td>
    <td id="dt1_ELLI_high" align="right" class="ds_high qb_line" nowrap="nowrap">39.99</td>
    <td id="dt1_ELLI_low" align="right" class="ds_low qb_line" nowrap="nowrap">38.28</td>
    <td id="dt1_ELLI_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">508,604</td>
    <td id="dt1_ELLI_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/ELLI" title="Detailed Quote for ELLI"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ELLI" title="Chart for ELLI"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ELLI" title="Opinion for ELLI"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ELLI" title="Cheat Sheet for ELLI"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ELS" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ELS">ELS</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ELS">Equity Lifestyle Properties</a></td>
    <td id="dt1_ELS_last" align="right" class="ds_last qb_shad" nowrap="nowrap">48.06</td>
    <td id="dt1_ELS_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.47</span></td>
    <td id="dt1_ELS_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.99%</span></td>
    <td id="dt1_ELS_high" align="right" class="ds_high qb_shad" nowrap="nowrap">48.06</td>
    <td id="dt1_ELS_low" align="right" class="ds_low qb_shad" nowrap="nowrap">47.37</td>
    <td id="dt1_ELS_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">281,719</td>
    <td id="dt1_ELS_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/ELS" title="Detailed Quote for ELS"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ELS" title="Chart for ELS"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ELS" title="Opinion for ELS"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ELS" title="Cheat Sheet for ELS"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_EPAM" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/EPAM">EPAM</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/EPAM">Epam Systems Inc</a></td>
    <td id="dt1_EPAM_last" align="right" class="ds_last qb_line" nowrap="nowrap">47.14</td>
    <td id="dt1_EPAM_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_down">-0.08</span></td>
    <td id="dt1_EPAM_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_down">-0.17%</span></td>
    <td id="dt1_EPAM_high" align="right" class="ds_high qb_line" nowrap="nowrap">47.50</td>
    <td id="dt1_EPAM_low" align="right" class="ds_low qb_line" nowrap="nowrap">46.39</td>
    <td id="dt1_EPAM_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">393,949</td>
    <td id="dt1_EPAM_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/EPAM" title="Detailed Quote for EPAM"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/EPAM" title="Chart for EPAM"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/EPAM" title="Opinion for EPAM"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=EPAM" title="Cheat Sheet for EPAM"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_EROS" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/EROS">EROS</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/EROS">Eros International Plc</a></td>
    <td id="dt1_EROS_last" align="right" class="ds_last qb_shad" nowrap="nowrap">18.49</td>
    <td id="dt1_EROS_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.29</span></td>
    <td id="dt1_EROS_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.59%</span></td>
    <td id="dt1_EROS_high" align="right" class="ds_high qb_shad" nowrap="nowrap">18.84</td>
    <td id="dt1_EROS_low" align="right" class="ds_low qb_shad" nowrap="nowrap">18.24</td>
    <td id="dt1_EROS_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">441,308</td>
    <td id="dt1_EROS_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/EROS" title="Detailed Quote for EROS"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/EROS" title="Chart for EROS"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/EROS" title="Opinion for EROS"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=EROS" title="Cheat Sheet for EROS"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ESBF" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/ESBF">ESBF</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/ESBF">Esb Financial Corp</a></td>
    <td id="dt1_ESBF_last" align="right" class="ds_last qb_line" nowrap="nowrap">18.59</td>
    <td id="dt1_ESBF_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+5.70</span></td>
    <td id="dt1_ESBF_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+44.22%</span></td>
    <td id="dt1_ESBF_high" align="right" class="ds_high qb_line" nowrap="nowrap">18.68</td>
    <td id="dt1_ESBF_low" align="right" class="ds_low qb_line" nowrap="nowrap">16.94</td>
    <td id="dt1_ESBF_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">715,003</td>
    <td id="dt1_ESBF_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/ESBF" title="Detailed Quote for ESBF"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ESBF" title="Chart for ESBF"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ESBF" title="Opinion for ESBF"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ESBF" title="Cheat Sheet for ESBF"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_EW" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/EW">EW</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/EW">Edwards Lifesciences Corp</a></td>
    <td id="dt1_EW_last" align="right" class="ds_last qb_shad" nowrap="nowrap">120.28</td>
    <td id="dt1_EW_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.28</span></td>
    <td id="dt1_EW_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.23%</span></td>
    <td id="dt1_EW_high" align="right" class="ds_high qb_shad" nowrap="nowrap">120.51</td>
    <td id="dt1_EW_low" align="right" class="ds_low qb_shad" nowrap="nowrap">119.06</td>
    <td id="dt1_EW_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">659,768</td>
    <td id="dt1_EW_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/EW" title="Detailed Quote for EW"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/EW" title="Chart for EW"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/EW" title="Opinion for EW"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=EW" title="Cheat Sheet for EW"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_EXR" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/EXR">EXR</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/EXR">Extra Space Storage Inc</a></td>
    <td id="dt1_EXR_last" align="right" class="ds_last qb_line" nowrap="nowrap">56.84</td>
    <td id="dt1_EXR_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.16</span></td>
    <td id="dt1_EXR_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.28%</span></td>
    <td id="dt1_EXR_high" align="right" class="ds_high qb_line" nowrap="nowrap">57.00</td>
    <td id="dt1_EXR_low" align="right" class="ds_low qb_line" nowrap="nowrap">56.03</td>
    <td id="dt1_EXR_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">696,330</td>
    <td id="dt1_EXR_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/EXR" title="Detailed Quote for EXR"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/EXR" title="Chart for EXR"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/EXR" title="Opinion for EXR"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=EXR" title="Cheat Sheet for EXR"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_FAF" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/FAF">FAF</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/FAF">First American Corp</a></td>
    <td id="dt1_FAF_last" align="right" class="ds_last qb_shad" nowrap="nowrap">30.46</td>
    <td id="dt1_FAF_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.38</span></td>
    <td id="dt1_FAF_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.26%</span></td>
    <td id="dt1_FAF_high" align="right" class="ds_high qb_shad" nowrap="nowrap">31.00</td>
    <td id="dt1_FAF_low" align="right" class="ds_low qb_shad" nowrap="nowrap">29.92</td>
    <td id="dt1_FAF_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">1,295,614</td>
    <td id="dt1_FAF_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/FAF" title="Detailed Quote for FAF"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/FAF" title="Chart for FAF"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/FAF" title="Opinion for FAF"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=FAF" title="Cheat Sheet for FAF"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_FDS" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/FDS">FDS</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/FDS">Factset Research Systems Inc</a></td>
    <td id="dt1_FDS_last" align="right" class="ds_last qb_line" nowrap="nowrap">130.33</td>
    <td id="dt1_FDS_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.47</span></td>
    <td id="dt1_FDS_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.36%</span></td>
    <td id="dt1_FDS_high" align="right" class="ds_high qb_line" nowrap="nowrap">130.66</td>
    <td id="dt1_FDS_low" align="right" class="ds_low qb_line" nowrap="nowrap">129.63</td>
    <td id="dt1_FDS_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">185,073</td>
    <td id="dt1_FDS_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/FDS" title="Detailed Quote for FDS"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/FDS" title="Chart for FDS"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/FDS" title="Opinion for FDS"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=FDS" title="Cheat Sheet for FDS"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_FFG" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/FFG">FFG</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/FFG">Fbl Financial Group</a></td>
    <td id="dt1_FFG_last" align="right" class="ds_last qb_shad" nowrap="nowrap">49.70</td>
    <td id="dt1_FFG_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.36</span></td>
    <td id="dt1_FFG_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.73%</span></td>
    <td id="dt1_FFG_high" align="right" class="ds_high qb_shad" nowrap="nowrap">49.95</td>
    <td id="dt1_FFG_low" align="right" class="ds_low qb_shad" nowrap="nowrap">48.69</td>
    <td id="dt1_FFG_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">32,619</td>
    <td id="dt1_FFG_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/FFG" title="Detailed Quote for FFG"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/FFG" title="Chart for FFG"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/FFG" title="Opinion for FFG"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=FFG" title="Cheat Sheet for FFG"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_FNHC" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/FNHC">FNHC</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/FNHC">Federated National Holding Company</a></td>
    <td id="dt1_FNHC_last" align="right" class="ds_last qb_line" nowrap="nowrap">35.34</td>
    <td id="dt1_FNHC_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.57</span></td>
    <td id="dt1_FNHC_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.64%</span></td>
    <td id="dt1_FNHC_high" align="right" class="ds_high qb_line" nowrap="nowrap">35.39</td>
    <td id="dt1_FNHC_low" align="right" class="ds_low qb_line" nowrap="nowrap">34.54</td>
    <td id="dt1_FNHC_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">253,712</td>
    <td id="dt1_FNHC_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/FNHC" title="Detailed Quote for FNHC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/FNHC" title="Chart for FNHC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/FNHC" title="Opinion for FNHC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=FNHC" title="Cheat Sheet for FNHC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_FRGI" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/FRGI">FRGI</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/FRGI">Fiesta Restaurant Group Inc</a></td>
    <td id="dt1_FRGI_last" align="right" class="ds_last qb_shad" nowrap="nowrap">54.36</td>
    <td id="dt1_FRGI_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.25</span></td>
    <td id="dt1_FRGI_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+2.35%</span></td>
    <td id="dt1_FRGI_high" align="right" class="ds_high qb_shad" nowrap="nowrap">55.40</td>
    <td id="dt1_FRGI_low" align="right" class="ds_low qb_shad" nowrap="nowrap">52.25</td>
    <td id="dt1_FRGI_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">381,314</td>
    <td id="dt1_FRGI_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/FRGI" title="Detailed Quote for FRGI"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/FRGI" title="Chart for FRGI"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/FRGI" title="Opinion for FRGI"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=FRGI" title="Cheat Sheet for FRGI"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_FRT" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/FRT">FRT</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/FRT">Federal Realty Investment Trust</a></td>
    <td id="dt1_FRT_last" align="right" class="ds_last qb_line" nowrap="nowrap">131.09</td>
    <td id="dt1_FRT_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.59</span></td>
    <td id="dt1_FRT_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.45%</span></td>
    <td id="dt1_FRT_high" align="right" class="ds_high qb_line" nowrap="nowrap">131.09</td>
    <td id="dt1_FRT_low" align="right" class="ds_low qb_line" nowrap="nowrap">129.43</td>
    <td id="dt1_FRT_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">296,018</td>
    <td id="dt1_FRT_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/FRT" title="Detailed Quote for FRT"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/FRT" title="Chart for FRT"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/FRT" title="Opinion for FRT"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=FRT" title="Cheat Sheet for FRT"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_GD" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/GD">GD</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/GD">General Dynamics Corp</a></td>
    <td id="dt1_GD_last" align="right" class="ds_last qb_shad" nowrap="nowrap">138.29</td>
    <td id="dt1_GD_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.84</span></td>
    <td id="dt1_GD_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.35%</span></td>
    <td id="dt1_GD_high" align="right" class="ds_high qb_shad" nowrap="nowrap">139.02</td>
    <td id="dt1_GD_low" align="right" class="ds_low qb_shad" nowrap="nowrap">134.67</td>
    <td id="dt1_GD_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">2,302,284</td>
    <td id="dt1_GD_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/GD" title="Detailed Quote for GD"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/GD" title="Chart for GD"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/GD" title="Opinion for GD"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=GD" title="Cheat Sheet for GD"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_GEO" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/GEO">GEO</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/GEO">Geo Group Inc</a></td>
    <td id="dt1_GEO_last" align="right" class="ds_last qb_line" nowrap="nowrap">39.54</td>
    <td id="dt1_GEO_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.55</span></td>
    <td id="dt1_GEO_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.41%</span></td>
    <td id="dt1_GEO_high" align="right" class="ds_high qb_line" nowrap="nowrap">39.61</td>
    <td id="dt1_GEO_low" align="right" class="ds_low qb_line" nowrap="nowrap">38.99</td>
    <td id="dt1_GEO_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">433,135</td>
    <td id="dt1_GEO_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/GEO" title="Detailed Quote for GEO"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/GEO" title="Chart for GEO"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/GEO" title="Opinion for GEO"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=GEO" title="Cheat Sheet for GEO"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_GILD" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/GILD">GILD</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/GILD">Gilead Sciences</a></td>
    <td id="dt1_GILD_last" align="right" class="ds_last qb_shad" nowrap="nowrap">114.22</td>
    <td id="dt1_GILD_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+3.50</span></td>
    <td id="dt1_GILD_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+3.16%</span></td>
    <td id="dt1_GILD_high" align="right" class="ds_high qb_shad" nowrap="nowrap">114.35</td>
    <td id="dt1_GILD_low" align="right" class="ds_low qb_shad" nowrap="nowrap">110.60</td>
    <td id="dt1_GILD_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">14,327,545</td>
    <td id="dt1_GILD_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/GILD" title="Detailed Quote for GILD"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/GILD" title="Chart for GILD"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/GILD" title="Opinion for GILD"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=GILD" title="Cheat Sheet for GILD"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_GMCR" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/GMCR">GMCR</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/GMCR">Keurig Green Mountain Inc.</a></td>
    <td id="dt1_GMCR_last" align="right" class="ds_last qb_line" nowrap="nowrap">149.98</td>
    <td id="dt1_GMCR_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+2.11</span></td>
    <td id="dt1_GMCR_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.43%</span></td>
    <td id="dt1_GMCR_high" align="right" class="ds_high qb_line" nowrap="nowrap">150.62</td>
    <td id="dt1_GMCR_low" align="right" class="ds_low qb_line" nowrap="nowrap">146.44</td>
    <td id="dt1_GMCR_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">1,061,666</td>
    <td id="dt1_GMCR_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/GMCR" title="Detailed Quote for GMCR"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/GMCR" title="Chart for GMCR"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/GMCR" title="Opinion for GMCR"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=GMCR" title="Cheat Sheet for GMCR"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_GPC" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/GPC">GPC</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/GPC">Genuine Parts Company</a></td>
    <td id="dt1_GPC_last" align="right" class="ds_last qb_shad" nowrap="nowrap">95.36</td>
    <td id="dt1_GPC_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.30</span></td>
    <td id="dt1_GPC_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.38%</span></td>
    <td id="dt1_GPC_high" align="right" class="ds_high qb_shad" nowrap="nowrap">95.47</td>
    <td id="dt1_GPC_low" align="right" class="ds_low qb_shad" nowrap="nowrap">93.44</td>
    <td id="dt1_GPC_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">577,689</td>
    <td id="dt1_GPC_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/GPC" title="Detailed Quote for GPC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/GPC" title="Chart for GPC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/GPC" title="Opinion for GPC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=GPC" title="Cheat Sheet for GPC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_GPX" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/GPX">GPX</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/GPX">Gp Strategies Corp</a></td>
    <td id="dt1_GPX_last" align="right" class="ds_last qb_line" nowrap="nowrap">31.44</td>
    <td id="dt1_GPX_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.62</span></td>
    <td id="dt1_GPX_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+5.43%</span></td>
    <td id="dt1_GPX_high" align="right" class="ds_high qb_line" nowrap="nowrap">31.55</td>
    <td id="dt1_GPX_low" align="right" class="ds_low qb_line" nowrap="nowrap">30.24</td>
    <td id="dt1_GPX_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">150,742</td>
    <td id="dt1_GPX_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/GPX" title="Detailed Quote for GPX"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/GPX" title="Chart for GPX"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/GPX" title="Opinion for GPX"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=GPX" title="Cheat Sheet for GPX"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_HAIN" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/HAIN">HAIN</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/HAIN">Hain Celestial Group</a></td>
    <td id="dt1_HAIN_last" align="right" class="ds_last qb_shad" nowrap="nowrap">106.66</td>
    <td id="dt1_HAIN_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.75</span></td>
    <td id="dt1_HAIN_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.71%</span></td>
    <td id="dt1_HAIN_high" align="right" class="ds_high qb_shad" nowrap="nowrap">106.68</td>
    <td id="dt1_HAIN_low" align="right" class="ds_low qb_shad" nowrap="nowrap">105.20</td>
    <td id="dt1_HAIN_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">505,718</td>
    <td id="dt1_HAIN_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/HAIN" title="Detailed Quote for HAIN"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/HAIN" title="Chart for HAIN"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/HAIN" title="Opinion for HAIN"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=HAIN" title="Cheat Sheet for HAIN"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_HD" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/HD">HD</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/HD">Home Depot</a></td>
    <td id="dt1_HD_last" align="right" class="ds_last qb_line" nowrap="nowrap">97.52</td>
    <td id="dt1_HD_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.10</span></td>
    <td id="dt1_HD_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.14%</span></td>
    <td id="dt1_HD_high" align="right" class="ds_high qb_line" nowrap="nowrap">97.80</td>
    <td id="dt1_HD_low" align="right" class="ds_low qb_line" nowrap="nowrap">96.03</td>
    <td id="dt1_HD_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">4,286,859</td>
    <td id="dt1_HD_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/HD" title="Detailed Quote for HD"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/HD" title="Chart for HD"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/HD" title="Opinion for HD"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=HD" title="Cheat Sheet for HD"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_HPP" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/HPP">HPP</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/HPP">Hudson Pacific Properties</a></td>
    <td id="dt1_HPP_last" align="right" class="ds_last qb_shad" nowrap="nowrap">27.49</td>
    <td id="dt1_HPP_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.13</span></td>
    <td id="dt1_HPP_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.48%</span></td>
    <td id="dt1_HPP_high" align="right" class="ds_high qb_shad" nowrap="nowrap">27.63</td>
    <td id="dt1_HPP_low" align="right" class="ds_low qb_shad" nowrap="nowrap">27.18</td>
    <td id="dt1_HPP_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">221,519</td>
    <td id="dt1_HPP_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/HPP" title="Detailed Quote for HPP"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/HPP" title="Chart for HPP"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/HPP" title="Opinion for HPP"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=HPP" title="Cheat Sheet for HPP"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_HRL" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/HRL">HRL</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/HRL">Hormel Foods Corp</a></td>
    <td id="dt1_HRL_last" align="right" class="ds_last qb_line" nowrap="nowrap">53.39</td>
    <td id="dt1_HRL_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.32</span></td>
    <td id="dt1_HRL_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.60%</span></td>
    <td id="dt1_HRL_high" align="right" class="ds_high qb_line" nowrap="nowrap">53.66</td>
    <td id="dt1_HRL_low" align="right" class="ds_low qb_line" nowrap="nowrap">51.65</td>
    <td id="dt1_HRL_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">488,063</td>
    <td id="dt1_HRL_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/HRL" title="Detailed Quote for HRL"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/HRL" title="Chart for HRL"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/HRL" title="Opinion for HRL"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=HRL" title="Cheat Sheet for HRL"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_HUM" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/HUM">HUM</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/HUM">Humana Inc</a></td>
    <td id="dt1_HUM_last" align="right" class="ds_last qb_shad" nowrap="nowrap">137.18</td>
    <td id="dt1_HUM_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+2.23</span></td>
    <td id="dt1_HUM_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.65%</span></td>
    <td id="dt1_HUM_high" align="right" class="ds_high qb_shad" nowrap="nowrap">138.00</td>
    <td id="dt1_HUM_low" align="right" class="ds_low qb_shad" nowrap="nowrap">134.51</td>
    <td id="dt1_HUM_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">847,463</td>
    <td id="dt1_HUM_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/HUM" title="Detailed Quote for HUM"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/HUM" title="Chart for HUM"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/HUM" title="Opinion for HUM"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=HUM" title="Cheat Sheet for HUM"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_IDA" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/IDA">IDA</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/IDA">Idacorp Inc</a></td>
    <td id="dt1_IDA_last" align="right" class="ds_last qb_line" nowrap="nowrap">63.19</td>
    <td id="dt1_IDA_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.61</span></td>
    <td id="dt1_IDA_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+2.61%</span></td>
    <td id="dt1_IDA_high" align="right" class="ds_high qb_line" nowrap="nowrap">63.60</td>
    <td id="dt1_IDA_low" align="right" class="ds_low qb_line" nowrap="nowrap">61.77</td>
    <td id="dt1_IDA_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">433,754</td>
    <td id="dt1_IDA_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/IDA" title="Detailed Quote for IDA"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/IDA" title="Chart for IDA"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/IDA" title="Opinion for IDA"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=IDA" title="Cheat Sheet for IDA"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_IG" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/IG">IG</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/IG">IGI Laboratories</a></td>
    <td id="dt1_IG_last" align="right" class="ds_last qb_shad" nowrap="nowrap">9.96</td>
    <td id="dt1_IG_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.41</span></td>
    <td id="dt1_IG_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+4.29%</span></td>
    <td id="dt1_IG_high" align="right" class="ds_high qb_shad" nowrap="nowrap">10.10</td>
    <td id="dt1_IG_low" align="right" class="ds_low qb_shad" nowrap="nowrap">9.37</td>
    <td id="dt1_IG_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">1,275,428</td>
    <td id="dt1_IG_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/IG" title="Detailed Quote for IG"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/IG" title="Chart for IG"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/IG" title="Opinion for IG"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=IG" title="Cheat Sheet for IG"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ILMN" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/ILMN">ILMN</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/ILMN">Illumina Inc</a></td>
    <td id="dt1_ILMN_last" align="right" class="ds_last qb_line" nowrap="nowrap">193.42</td>
    <td id="dt1_ILMN_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+4.54</span></td>
    <td id="dt1_ILMN_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+2.40%</span></td>
    <td id="dt1_ILMN_high" align="right" class="ds_high qb_line" nowrap="nowrap">194.77</td>
    <td id="dt1_ILMN_low" align="right" class="ds_low qb_line" nowrap="nowrap">187.20</td>
    <td id="dt1_ILMN_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">1,277,342</td>
    <td id="dt1_ILMN_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/ILMN" title="Detailed Quote for ILMN"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ILMN" title="Chart for ILMN"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ILMN" title="Opinion for ILMN"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ILMN" title="Cheat Sheet for ILMN"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_IT" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/IT">IT</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/IT">Gartner Inc</a></td>
    <td id="dt1_IT_last" align="right" class="ds_last qb_shad" nowrap="nowrap">79.78</td>
    <td id="dt1_IT_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.79</span></td>
    <td id="dt1_IT_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.00%</span></td>
    <td id="dt1_IT_high" align="right" class="ds_high qb_shad" nowrap="nowrap">79.97</td>
    <td id="dt1_IT_low" align="right" class="ds_low qb_shad" nowrap="nowrap">78.53</td>
    <td id="dt1_IT_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">190,925</td>
    <td id="dt1_IT_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/IT" title="Detailed Quote for IT"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/IT" title="Chart for IT"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/IT" title="Opinion for IT"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=IT" title="Cheat Sheet for IT"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ITC" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/ITC">ITC</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/ITC">Itc Holdings</a></td>
    <td id="dt1_ITC_last" align="right" class="ds_last qb_line" nowrap="nowrap">39.50</td>
    <td id="dt1_ITC_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.86</span></td>
    <td id="dt1_ITC_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+2.23%</span></td>
    <td id="dt1_ITC_high" align="right" class="ds_high qb_line" nowrap="nowrap">39.62</td>
    <td id="dt1_ITC_low" align="right" class="ds_low qb_line" nowrap="nowrap">38.73</td>
    <td id="dt1_ITC_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">1,681,487</td>
    <td id="dt1_ITC_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/ITC" title="Detailed Quote for ITC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ITC" title="Chart for ITC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ITC" title="Opinion for ITC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ITC" title="Cheat Sheet for ITC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ITW" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ITW">ITW</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ITW">Illinois Tool Works Inc</a></td>
    <td id="dt1_ITW_last" align="right" class="ds_last qb_shad" nowrap="nowrap">90.02</td>
    <td id="dt1_ITW_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.48</span></td>
    <td id="dt1_ITW_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.54%</span></td>
    <td id="dt1_ITW_high" align="right" class="ds_high qb_shad" nowrap="nowrap">90.16</td>
    <td id="dt1_ITW_low" align="right" class="ds_low qb_shad" nowrap="nowrap">88.79</td>
    <td id="dt1_ITW_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">1,967,042</td>
    <td id="dt1_ITW_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/ITW" title="Detailed Quote for ITW"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ITW" title="Chart for ITW"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ITW" title="Opinion for ITW"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ITW" title="Cheat Sheet for ITW"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_JAH" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/JAH">JAH</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/JAH">Jarden Corp</a></td>
    <td id="dt1_JAH_last" align="right" class="ds_last qb_line" nowrap="nowrap">65.30</td>
    <td id="dt1_JAH_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.85</span></td>
    <td id="dt1_JAH_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.32%</span></td>
    <td id="dt1_JAH_high" align="right" class="ds_high qb_line" nowrap="nowrap">65.61</td>
    <td id="dt1_JAH_low" align="right" class="ds_low qb_line" nowrap="nowrap">64.17</td>
    <td id="dt1_JAH_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">1,917,516</td>
    <td id="dt1_JAH_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/JAH" title="Detailed Quote for JAH"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/JAH" title="Chart for JAH"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/JAH" title="Opinion for JAH"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=JAH" title="Cheat Sheet for JAH"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_JJSF" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/JJSF">JJSF</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/JJSF">J & J Snack Foods</a></td>
    <td id="dt1_JJSF_last" align="right" class="ds_last qb_shad" nowrap="nowrap">102.50</td>
    <td id="dt1_JJSF_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.44</span></td>
    <td id="dt1_JJSF_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.42%</span></td>
    <td id="dt1_JJSF_high" align="right" class="ds_high qb_shad" nowrap="nowrap">102.68</td>
    <td id="dt1_JJSF_low" align="right" class="ds_low qb_shad" nowrap="nowrap">99.70</td>
    <td id="dt1_JJSF_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">56,349</td>
    <td id="dt1_JJSF_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/JJSF" title="Detailed Quote for JJSF"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/JJSF" title="Chart for JJSF"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/JJSF" title="Opinion for JJSF"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=JJSF" title="Cheat Sheet for JJSF"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_JOUT" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/JOUT">JOUT</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/JOUT">Johnson Outdoors Inc</a></td>
    <td id="dt1_JOUT_last" align="right" class="ds_last qb_line" nowrap="nowrap">29.59</td>
    <td id="dt1_JOUT_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.69</span></td>
    <td id="dt1_JOUT_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+2.39%</span></td>
    <td id="dt1_JOUT_high" align="right" class="ds_high qb_line" nowrap="nowrap">29.59</td>
    <td id="dt1_JOUT_low" align="right" class="ds_low qb_line" nowrap="nowrap">28.59</td>
    <td id="dt1_JOUT_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">18,568</td>
    <td id="dt1_JOUT_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/JOUT" title="Detailed Quote for JOUT"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/JOUT" title="Chart for JOUT"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/JOUT" title="Opinion for JOUT"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=JOUT" title="Cheat Sheet for JOUT"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_JWN" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/JWN">JWN</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/JWN">Nordstrom</a></td>
    <td id="dt1_JWN_last" align="right" class="ds_last qb_shad" nowrap="nowrap">72.41</td>
    <td id="dt1_JWN_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.03</span></td>
    <td id="dt1_JWN_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.44%</span></td>
    <td id="dt1_JWN_high" align="right" class="ds_high qb_shad" nowrap="nowrap">72.93</td>
    <td id="dt1_JWN_low" align="right" class="ds_low qb_shad" nowrap="nowrap">71.20</td>
    <td id="dt1_JWN_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">1,155,783</td>
    <td id="dt1_JWN_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/JWN" title="Detailed Quote for JWN"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/JWN" title="Chart for JWN"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/JWN" title="Opinion for JWN"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=JWN" title="Cheat Sheet for JWN"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_KR" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/KR">KR</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/KR">Kroger Company</a></td>
    <td id="dt1_KR_last" align="right" class="ds_last qb_line" nowrap="nowrap">55.06</td>
    <td id="dt1_KR_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.51</span></td>
    <td id="dt1_KR_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.93%</span></td>
    <td id="dt1_KR_high" align="right" class="ds_high qb_line" nowrap="nowrap">55.12</td>
    <td id="dt1_KR_low" align="right" class="ds_low qb_line" nowrap="nowrap">54.30</td>
    <td id="dt1_KR_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">2,359,427</td>
    <td id="dt1_KR_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/KR" title="Detailed Quote for KR"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/KR" title="Chart for KR"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/KR" title="Opinion for KR"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=KR" title="Cheat Sheet for KR"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_LB" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/LB">LB</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/LB">L Brands Inc</a></td>
    <td id="dt1_LB_last" align="right" class="ds_last qb_shad" nowrap="nowrap">72.13</td>
    <td id="dt1_LB_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.72</span></td>
    <td id="dt1_LB_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.01%</span></td>
    <td id="dt1_LB_high" align="right" class="ds_high qb_shad" nowrap="nowrap">72.40</td>
    <td id="dt1_LB_low" align="right" class="ds_low qb_shad" nowrap="nowrap">71.03</td>
    <td id="dt1_LB_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">1,012,001</td>
    <td id="dt1_LB_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/LB" title="Detailed Quote for LB"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/LB" title="Chart for LB"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/LB" title="Opinion for LB"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=LB" title="Cheat Sheet for LB"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_LCI" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/LCI">LCI</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/LCI">Lannett Co Inc</a></td>
    <td id="dt1_LCI_last" align="right" class="ds_last qb_line" nowrap="nowrap">55.89</td>
    <td id="dt1_LCI_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+3.40</span></td>
    <td id="dt1_LCI_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+6.48%</span></td>
    <td id="dt1_LCI_high" align="right" class="ds_high qb_line" nowrap="nowrap">57.55</td>
    <td id="dt1_LCI_low" align="right" class="ds_low qb_line" nowrap="nowrap">52.01</td>
    <td id="dt1_LCI_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">1,053,987</td>
    <td id="dt1_LCI_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/LCI" title="Detailed Quote for LCI"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/LCI" title="Chart for LCI"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/LCI" title="Opinion for LCI"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=LCI" title="Cheat Sheet for LCI"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_LEAF" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/LEAF">LEAF</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/LEAF">Springleaf Holdings Inc</a></td>
    <td id="dt1_LEAF_last" align="right" class="ds_last qb_shad" nowrap="nowrap">36.96</td>
    <td id="dt1_LEAF_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.10</span></td>
    <td id="dt1_LEAF_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.27%</span></td>
    <td id="dt1_LEAF_high" align="right" class="ds_high qb_shad" nowrap="nowrap">37.55</td>
    <td id="dt1_LEAF_low" align="right" class="ds_low qb_shad" nowrap="nowrap">36.68</td>
    <td id="dt1_LEAF_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">256,143</td>
    <td id="dt1_LEAF_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/LEAF" title="Detailed Quote for LEAF"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/LEAF" title="Chart for LEAF"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/LEAF" title="Opinion for LEAF"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=LEAF" title="Cheat Sheet for LEAF"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_LEG" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/LEG">LEG</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/LEG">Leggett & Platt Inc</a></td>
    <td id="dt1_LEG_last" align="right" class="ds_last qb_line" nowrap="nowrap">39.10</td>
    <td id="dt1_LEG_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.49</span></td>
    <td id="dt1_LEG_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.27%</span></td>
    <td id="dt1_LEG_high" align="right" class="ds_high qb_line" nowrap="nowrap">39.14</td>
    <td id="dt1_LEG_low" align="right" class="ds_low qb_line" nowrap="nowrap">38.43</td>
    <td id="dt1_LEG_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">937,698</td>
    <td id="dt1_LEG_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/LEG" title="Detailed Quote for LEG"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/LEG" title="Chart for LEG"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/LEG" title="Opinion for LEG"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=LEG" title="Cheat Sheet for LEG"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_LMT" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/LMT">LMT</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/LMT">Lockheed Martin Corp</a></td>
    <td id="dt1_LMT_last" align="right" class="ds_last qb_shad" nowrap="nowrap">189.29</td>
    <td id="dt1_LMT_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+2.86</span></td>
    <td id="dt1_LMT_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.53%</span></td>
    <td id="dt1_LMT_high" align="right" class="ds_high qb_shad" nowrap="nowrap">189.62</td>
    <td id="dt1_LMT_low" align="right" class="ds_low qb_shad" nowrap="nowrap">184.83</td>
    <td id="dt1_LMT_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">1,608,697</td>
    <td id="dt1_LMT_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/LMT" title="Detailed Quote for LMT"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/LMT" title="Chart for LMT"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/LMT" title="Opinion for LMT"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=LMT" title="Cheat Sheet for LMT"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_LNT" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/LNT">LNT</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/LNT">Alliant Energy Corp</a></td>
    <td id="dt1_LNT_last" align="right" class="ds_last qb_line" nowrap="nowrap">61.91</td>
    <td id="dt1_LNT_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.51</span></td>
    <td id="dt1_LNT_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+2.50%</span></td>
    <td id="dt1_LNT_high" align="right" class="ds_high qb_line" nowrap="nowrap">61.91</td>
    <td id="dt1_LNT_low" align="right" class="ds_low qb_line" nowrap="nowrap">60.40</td>
    <td id="dt1_LNT_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">393,107</td>
    <td id="dt1_LNT_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/LNT" title="Detailed Quote for LNT"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/LNT" title="Chart for LNT"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/LNT" title="Opinion for LNT"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=LNT" title="Cheat Sheet for LNT"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_LOPE" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/LOPE">LOPE</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/LOPE">Grand Canyon Education</a></td>
    <td id="dt1_LOPE_last" align="right" class="ds_last qb_shad" nowrap="nowrap">46.97</td>
    <td id="dt1_LOPE_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+3.75</span></td>
    <td id="dt1_LOPE_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+8.68%</span></td>
    <td id="dt1_LOPE_high" align="right" class="ds_high qb_shad" nowrap="nowrap">51.99</td>
    <td id="dt1_LOPE_low" align="right" class="ds_low qb_shad" nowrap="nowrap">46.13</td>
    <td id="dt1_LOPE_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">2,889,322</td>
    <td id="dt1_LOPE_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/LOPE" title="Detailed Quote for LOPE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/LOPE" title="Chart for LOPE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/LOPE" title="Opinion for LOPE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=LOPE" title="Cheat Sheet for LOPE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_LOW" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/LOW">LOW</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/LOW">Lowe's Companies</a></td>
    <td id="dt1_LOW_last" align="right" class="ds_last qb_line" nowrap="nowrap">56.27</td>
    <td id="dt1_LOW_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.46</span></td>
    <td id="dt1_LOW_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.82%</span></td>
    <td id="dt1_LOW_high" align="right" class="ds_high qb_line" nowrap="nowrap">56.56</td>
    <td id="dt1_LOW_low" align="right" class="ds_low qb_line" nowrap="nowrap">55.91</td>
    <td id="dt1_LOW_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">5,695,520</td>
    <td id="dt1_LOW_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/LOW" title="Detailed Quote for LOW"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/LOW" title="Chart for LOW"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/LOW" title="Opinion for LOW"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=LOW" title="Cheat Sheet for LOW"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_MAR" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/MAR">MAR</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/MAR">Marriot International</a></td>
    <td id="dt1_MAR_last" align="right" class="ds_last qb_shad" nowrap="nowrap">76.00</td>
    <td id="dt1_MAR_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.97</span></td>
    <td id="dt1_MAR_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+2.66%</span></td>
    <td id="dt1_MAR_high" align="right" class="ds_high qb_shad" nowrap="nowrap">76.31</td>
    <td id="dt1_MAR_low" align="right" class="ds_low qb_shad" nowrap="nowrap">73.50</td>
    <td id="dt1_MAR_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">3,430,195</td>
    <td id="dt1_MAR_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/MAR" title="Detailed Quote for MAR"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/MAR" title="Chart for MAR"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/MAR" title="Opinion for MAR"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=MAR" title="Cheat Sheet for MAR"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_MCO" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/MCO">MCO</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/MCO">Moody's Corp</a></td>
    <td id="dt1_MCO_last" align="right" class="ds_last qb_line" nowrap="nowrap">98.10</td>
    <td id="dt1_MCO_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.50</span></td>
    <td id="dt1_MCO_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.51%</span></td>
    <td id="dt1_MCO_high" align="right" class="ds_high qb_line" nowrap="nowrap">98.56</td>
    <td id="dt1_MCO_low" align="right" class="ds_low qb_line" nowrap="nowrap">96.55</td>
    <td id="dt1_MCO_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">734,435</td>
    <td id="dt1_MCO_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/MCO" title="Detailed Quote for MCO"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/MCO" title="Chart for MCO"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/MCO" title="Opinion for MCO"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=MCO" title="Cheat Sheet for MCO"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_MDT" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/MDT">MDT</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/MDT">Medtronic Inc</a></td>
    <td id="dt1_MDT_last" align="right" class="ds_last qb_shad" nowrap="nowrap">67.43</td>
    <td id="dt1_MDT_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.39</span></td>
    <td id="dt1_MDT_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.58%</span></td>
    <td id="dt1_MDT_high" align="right" class="ds_high qb_shad" nowrap="nowrap">67.75</td>
    <td id="dt1_MDT_low" align="right" class="ds_low qb_shad" nowrap="nowrap">66.59</td>
    <td id="dt1_MDT_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">5,754,570</td>
    <td id="dt1_MDT_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/MDT" title="Detailed Quote for MDT"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/MDT" title="Chart for MDT"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/MDT" title="Opinion for MDT"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=MDT" title="Cheat Sheet for MDT"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_MDXG" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/MDXG">MDXG</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/MDXG">Mimedx Group Inc</a></td>
    <td id="dt1_MDXG_last" align="right" class="ds_last qb_line" nowrap="nowrap">9.70</td>
    <td id="dt1_MDXG_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.71</span></td>
    <td id="dt1_MDXG_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+7.90%</span></td>
    <td id="dt1_MDXG_high" align="right" class="ds_high qb_line" nowrap="nowrap">9.74</td>
    <td id="dt1_MDXG_low" align="right" class="ds_low qb_line" nowrap="nowrap">8.71</td>
    <td id="dt1_MDXG_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">1,588,681</td>
    <td id="dt1_MDXG_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/MDXG" title="Detailed Quote for MDXG"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/MDXG" title="Chart for MDXG"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/MDXG" title="Opinion for MDXG"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=MDXG" title="Cheat Sheet for MDXG"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_MGEE" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/MGEE">MGEE</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/MGEE">Mge Energy Inc</a></td>
    <td id="dt1_MGEE_last" align="right" class="ds_last qb_shad" nowrap="nowrap">44.13</td>
    <td id="dt1_MGEE_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.16</span></td>
    <td id="dt1_MGEE_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+2.70%</span></td>
    <td id="dt1_MGEE_high" align="right" class="ds_high qb_shad" nowrap="nowrap">44.19</td>
    <td id="dt1_MGEE_low" align="right" class="ds_low qb_shad" nowrap="nowrap">42.95</td>
    <td id="dt1_MGEE_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">85,051</td>
    <td id="dt1_MGEE_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/MGEE" title="Detailed Quote for MGEE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/MGEE" title="Chart for MGEE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/MGEE" title="Opinion for MGEE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=MGEE" title="Cheat Sheet for MGEE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_MHFI" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/MHFI">MHFI</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/MHFI">The McGraw-Hill Companies Inc</a></td>
    <td id="dt1_MHFI_last" align="right" class="ds_last qb_line" nowrap="nowrap">89.36</td>
    <td id="dt1_MHFI_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.84</span></td>
    <td id="dt1_MHFI_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+2.10%</span></td>
    <td id="dt1_MHFI_high" align="right" class="ds_high qb_line" nowrap="nowrap">89.45</td>
    <td id="dt1_MHFI_low" align="right" class="ds_low qb_line" nowrap="nowrap">86.63</td>
    <td id="dt1_MHFI_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">1,900,905</td>
    <td id="dt1_MHFI_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/MHFI" title="Detailed Quote for MHFI"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/MHFI" title="Chart for MHFI"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/MHFI" title="Opinion for MHFI"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=MHFI" title="Cheat Sheet for MHFI"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_MLI" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/MLI">MLI</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/MLI">Mueller Industries</a></td>
    <td id="dt1_MLI_last" align="right" class="ds_last qb_shad" nowrap="nowrap">32.04</td>
    <td id="dt1_MLI_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.27</span></td>
    <td id="dt1_MLI_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.85%</span></td>
    <td id="dt1_MLI_high" align="right" class="ds_high qb_shad" nowrap="nowrap">32.40</td>
    <td id="dt1_MLI_low" align="right" class="ds_low qb_shad" nowrap="nowrap">31.43</td>
    <td id="dt1_MLI_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">174,814</td>
    <td id="dt1_MLI_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/MLI" title="Detailed Quote for MLI"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/MLI" title="Chart for MLI"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/MLI" title="Opinion for MLI"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=MLI" title="Cheat Sheet for MLI"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_MMM" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/MMM">MMM</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/MMM">3M Company</a></td>
    <td id="dt1_MMM_last" align="right" class="ds_last qb_line" nowrap="nowrap">152.10</td>
    <td id="dt1_MMM_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.09</span></td>
    <td id="dt1_MMM_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.72%</span></td>
    <td id="dt1_MMM_high" align="right" class="ds_high qb_line" nowrap="nowrap">152.40</td>
    <td id="dt1_MMM_low" align="right" class="ds_low qb_line" nowrap="nowrap">150.00</td>
    <td id="dt1_MMM_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">1,836,508</td>
    <td id="dt1_MMM_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/MMM" title="Detailed Quote for MMM"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/MMM" title="Chart for MMM"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/MMM" title="Opinion for MMM"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=MMM" title="Cheat Sheet for MMM"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_MPLX" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/MPLX">MPLX</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/MPLX">Mplx LP</a></td>
    <td id="dt1_MPLX_last" align="right" class="ds_last qb_shad" nowrap="nowrap">64.73</td>
    <td id="dt1_MPLX_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+4.49</span></td>
    <td id="dt1_MPLX_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+7.45%</span></td>
    <td id="dt1_MPLX_high" align="right" class="ds_high qb_shad" nowrap="nowrap">69.05</td>
    <td id="dt1_MPLX_low" align="right" class="ds_low qb_shad" nowrap="nowrap">61.61</td>
    <td id="dt1_MPLX_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">919,040</td>
    <td id="dt1_MPLX_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/MPLX" title="Detailed Quote for MPLX"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/MPLX" title="Chart for MPLX"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/MPLX" title="Opinion for MPLX"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=MPLX" title="Cheat Sheet for MPLX"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_NAVI" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/NAVI">NAVI</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/NAVI">Navient Corporation</a></td>
    <td id="dt1_NAVI_last" align="right" class="ds_last qb_line" nowrap="nowrap">19.50</td>
    <td id="dt1_NAVI_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.24</span></td>
    <td id="dt1_NAVI_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.25%</span></td>
    <td id="dt1_NAVI_high" align="right" class="ds_high qb_line" nowrap="nowrap">19.54</td>
    <td id="dt1_NAVI_low" align="right" class="ds_low qb_line" nowrap="nowrap">19.16</td>
    <td id="dt1_NAVI_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">1,987,360</td>
    <td id="dt1_NAVI_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/NAVI" title="Detailed Quote for NAVI"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/NAVI" title="Chart for NAVI"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/NAVI" title="Opinion for NAVI"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=NAVI" title="Cheat Sheet for NAVI"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_NCLH" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/NCLH">NCLH</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/NCLH">Norwegian Cruise Line Holdings</a></td>
    <td id="dt1_NCLH_last" align="right" class="ds_last qb_shad" nowrap="nowrap">38.44</td>
    <td id="dt1_NCLH_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.78</span></td>
    <td id="dt1_NCLH_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+4.86%</span></td>
    <td id="dt1_NCLH_high" align="right" class="ds_high qb_shad" nowrap="nowrap">38.66</td>
    <td id="dt1_NCLH_low" align="right" class="ds_low qb_shad" nowrap="nowrap">36.60</td>
    <td id="dt1_NCLH_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">1,832,468</td>
    <td id="dt1_NCLH_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/NCLH" title="Detailed Quote for NCLH"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/NCLH" title="Chart for NCLH"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/NCLH" title="Opinion for NCLH"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=NCLH" title="Cheat Sheet for NCLH"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_NEWM" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/NEWM">NEWM</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/NEWM">New Media Investment Group Inc.</a></td>
    <td id="dt1_NEWM_last" align="right" class="ds_last qb_line" nowrap="nowrap">18.39</td>
    <td id="dt1_NEWM_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.48</span></td>
    <td id="dt1_NEWM_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+8.75%</span></td>
    <td id="dt1_NEWM_high" align="right" class="ds_high qb_line" nowrap="nowrap">18.40</td>
    <td id="dt1_NEWM_low" align="right" class="ds_low qb_line" nowrap="nowrap">16.97</td>
    <td id="dt1_NEWM_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">502,418</td>
    <td id="dt1_NEWM_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/NEWM" title="Detailed Quote for NEWM"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/NEWM" title="Chart for NEWM"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/NEWM" title="Opinion for NEWM"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=NEWM" title="Cheat Sheet for NEWM"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_NHC" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/NHC">NHC</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/NHC">National Healthcare Corp</a></td>
    <td id="dt1_NHC_last" align="right" class="ds_last qb_shad" nowrap="nowrap">60.55</td>
    <td id="dt1_NHC_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.75</span></td>
    <td id="dt1_NHC_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.25%</span></td>
    <td id="dt1_NHC_high" align="right" class="ds_high qb_shad" nowrap="nowrap">60.90</td>
    <td id="dt1_NHC_low" align="right" class="ds_low qb_shad" nowrap="nowrap">58.81</td>
    <td id="dt1_NHC_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">20,910</td>
    <td id="dt1_NHC_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/NHC" title="Detailed Quote for NHC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/NHC" title="Chart for NHC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/NHC" title="Opinion for NHC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=NHC" title="Cheat Sheet for NHC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_NI" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/NI">NI</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/NI">NiSource Inc</a></td>
    <td id="dt1_NI_last" align="right" class="ds_last qb_line" nowrap="nowrap">42.37</td>
    <td id="dt1_NI_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.75</span></td>
    <td id="dt1_NI_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.80%</span></td>
    <td id="dt1_NI_high" align="right" class="ds_high qb_line" nowrap="nowrap">42.46</td>
    <td id="dt1_NI_low" align="right" class="ds_low qb_line" nowrap="nowrap">40.76</td>
    <td id="dt1_NI_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">1,687,492</td>
    <td id="dt1_NI_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/NI" title="Detailed Quote for NI"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/NI" title="Chart for NI"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/NI" title="Opinion for NI"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=NI" title="Cheat Sheet for NI"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_NJR" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/NJR">NJR</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/NJR">Newjersey Resources Corp</a></td>
    <td id="dt1_NJR_last" align="right" class="ds_last qb_shad" nowrap="nowrap">57.64</td>
    <td id="dt1_NJR_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.89</span></td>
    <td id="dt1_NJR_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.57%</span></td>
    <td id="dt1_NJR_high" align="right" class="ds_high qb_shad" nowrap="nowrap">57.92</td>
    <td id="dt1_NJR_low" align="right" class="ds_low qb_shad" nowrap="nowrap">56.61</td>
    <td id="dt1_NJR_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">213,145</td>
    <td id="dt1_NJR_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/NJR" title="Detailed Quote for NJR"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/NJR" title="Chart for NJR"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/NJR" title="Opinion for NJR"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=NJR" title="Cheat Sheet for NJR"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_NKE" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/NKE">NKE</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/NKE">Nike Inc</a></td>
    <td id="dt1_NKE_last" align="right" class="ds_last qb_line" nowrap="nowrap">93.00</td>
    <td id="dt1_NKE_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.05</span></td>
    <td id="dt1_NKE_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.14%</span></td>
    <td id="dt1_NKE_high" align="right" class="ds_high qb_line" nowrap="nowrap">93.00</td>
    <td id="dt1_NKE_low" align="right" class="ds_low qb_line" nowrap="nowrap">91.55</td>
    <td id="dt1_NKE_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">2,292,965</td>
    <td id="dt1_NKE_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/NKE" title="Detailed Quote for NKE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/NKE" title="Chart for NKE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/NKE" title="Opinion for NKE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=NKE" title="Cheat Sheet for NKE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_NOC" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/NOC">NOC</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/NOC">Northrop Grumman Corp</a></td>
    <td id="dt1_NOC_last" align="right" class="ds_last qb_shad" nowrap="nowrap">137.29</td>
    <td id="dt1_NOC_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.63</span></td>
    <td id="dt1_NOC_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.20%</span></td>
    <td id="dt1_NOC_high" align="right" class="ds_high qb_shad" nowrap="nowrap">137.78</td>
    <td id="dt1_NOC_low" align="right" class="ds_low qb_shad" nowrap="nowrap">133.75</td>
    <td id="dt1_NOC_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">1,779,534</td>
    <td id="dt1_NOC_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/NOC" title="Detailed Quote for NOC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/NOC" title="Chart for NOC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/NOC" title="Opinion for NOC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=NOC" title="Cheat Sheet for NOC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_NP" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/NP">NP</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/NP">Neenah Paper</a></td>
    <td id="dt1_NP_last" align="right" class="ds_last qb_line" nowrap="nowrap">60.30</td>
    <td id="dt1_NP_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.71</span></td>
    <td id="dt1_NP_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.19%</span></td>
    <td id="dt1_NP_high" align="right" class="ds_high qb_line" nowrap="nowrap">60.46</td>
    <td id="dt1_NP_low" align="right" class="ds_low qb_line" nowrap="nowrap">59.25</td>
    <td id="dt1_NP_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">74,575</td>
    <td id="dt1_NP_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/NP" title="Detailed Quote for NP"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/NP" title="Chart for NP"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/NP" title="Opinion for NP"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=NP" title="Cheat Sheet for NP"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_NU" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/NU">NU</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/NU">Northeast Utilities</a></td>
    <td id="dt1_NU_last" align="right" class="ds_last qb_shad" nowrap="nowrap">49.35</td>
    <td id="dt1_NU_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.00</span></td>
    <td id="dt1_NU_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+2.07%</span></td>
    <td id="dt1_NU_high" align="right" class="ds_high qb_shad" nowrap="nowrap">49.98</td>
    <td id="dt1_NU_low" align="right" class="ds_low qb_shad" nowrap="nowrap">48.34</td>
    <td id="dt1_NU_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">1,772,437</td>
    <td id="dt1_NU_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/NU" title="Detailed Quote for NU"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/NU" title="Chart for NU"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/NU" title="Opinion for NU"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=NU" title="Cheat Sheet for NU"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_NWE" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/NWE">NWE</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/NWE">Northwestern Corp</a></td>
    <td id="dt1_NWE_last" align="right" class="ds_last qb_line" nowrap="nowrap">52.75</td>
    <td id="dt1_NWE_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.11</span></td>
    <td id="dt1_NWE_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+2.15%</span></td>
    <td id="dt1_NWE_high" align="right" class="ds_high qb_line" nowrap="nowrap">52.92</td>
    <td id="dt1_NWE_low" align="right" class="ds_low qb_line" nowrap="nowrap">51.45</td>
    <td id="dt1_NWE_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">162,975</td>
    <td id="dt1_NWE_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/NWE" title="Detailed Quote for NWE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/NWE" title="Chart for NWE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/NWE" title="Opinion for NWE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=NWE" title="Cheat Sheet for NWE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ODFL" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ODFL">ODFL</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ODFL">Old Dominion Freight Line</a></td>
    <td id="dt1_ODFL_last" align="right" class="ds_last qb_shad" nowrap="nowrap">72.36</td>
    <td id="dt1_ODFL_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.25</span></td>
    <td id="dt1_ODFL_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.76%</span></td>
    <td id="dt1_ODFL_high" align="right" class="ds_high qb_shad" nowrap="nowrap">74.17</td>
    <td id="dt1_ODFL_low" align="right" class="ds_low qb_shad" nowrap="nowrap">69.72</td>
    <td id="dt1_ODFL_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">988,286</td>
    <td id="dt1_ODFL_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/ODFL" title="Detailed Quote for ODFL"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ODFL" title="Chart for ODFL"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ODFL" title="Opinion for ODFL"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ODFL" title="Cheat Sheet for ODFL"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_OMAB" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/OMAB">OMAB</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/OMAB">Grupo Aeroportuario Del Centro</a></td>
    <td id="dt1_OMAB_last" align="right" class="ds_last qb_line" nowrap="nowrap">38.89</td>
    <td id="dt1_OMAB_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.41</span></td>
    <td id="dt1_OMAB_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.07%</span></td>
    <td id="dt1_OMAB_high" align="right" class="ds_high qb_line" nowrap="nowrap">39.70</td>
    <td id="dt1_OMAB_low" align="right" class="ds_low qb_line" nowrap="nowrap">37.82</td>
    <td id="dt1_OMAB_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">78,249</td>
    <td id="dt1_OMAB_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/OMAB" title="Detailed Quote for OMAB"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/OMAB" title="Chart for OMAB"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/OMAB" title="Opinion for OMAB"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=OMAB" title="Cheat Sheet for OMAB"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ORLY" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ORLY">ORLY</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ORLY">O'Reilly Automotive</a></td>
    <td id="dt1_ORLY_last" align="right" class="ds_last qb_shad" nowrap="nowrap">174.90</td>
    <td id="dt1_ORLY_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.84</span></td>
    <td id="dt1_ORLY_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.48%</span></td>
    <td id="dt1_ORLY_high" align="right" class="ds_high qb_shad" nowrap="nowrap">175.80</td>
    <td id="dt1_ORLY_low" align="right" class="ds_low qb_shad" nowrap="nowrap">172.77</td>
    <td id="dt1_ORLY_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">624,773</td>
    <td id="dt1_ORLY_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/ORLY" title="Detailed Quote for ORLY"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ORLY" title="Chart for ORLY"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ORLY" title="Opinion for ORLY"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ORLY" title="Cheat Sheet for ORLY"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_OVAS" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/OVAS">OVAS</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/OVAS">Ovascience Inc</a></td>
    <td id="dt1_OVAS_last" align="right" class="ds_last qb_line" nowrap="nowrap">20.13</td>
    <td id="dt1_OVAS_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.07</span></td>
    <td id="dt1_OVAS_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.35%</span></td>
    <td id="dt1_OVAS_high" align="right" class="ds_high qb_line" nowrap="nowrap">20.83</td>
    <td id="dt1_OVAS_low" align="right" class="ds_low qb_line" nowrap="nowrap">19.83</td>
    <td id="dt1_OVAS_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">181,669</td>
    <td id="dt1_OVAS_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/OVAS" title="Detailed Quote for OVAS"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/OVAS" title="Chart for OVAS"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/OVAS" title="Opinion for OVAS"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=OVAS" title="Cheat Sheet for OVAS"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_OZRK" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/OZRK">OZRK</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/OZRK">Bank of The Ozarks</a></td>
    <td id="dt1_OZRK_last" align="right" class="ds_last qb_shad" nowrap="nowrap">34.90</td>
    <td id="dt1_OZRK_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_down">-0.04</span></td>
    <td id="dt1_OZRK_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_down">-0.11%</span></td>
    <td id="dt1_OZRK_high" align="right" class="ds_high qb_shad" nowrap="nowrap">35.33</td>
    <td id="dt1_OZRK_low" align="right" class="ds_low qb_shad" nowrap="nowrap">34.44</td>
    <td id="dt1_OZRK_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">349,219</td>
    <td id="dt1_OZRK_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/OZRK" title="Detailed Quote for OZRK"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/OZRK" title="Chart for OZRK"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/OZRK" title="Opinion for OZRK"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=OZRK" title="Cheat Sheet for OZRK"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_PAHC" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/PAHC">PAHC</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/PAHC">Phibro Animal Health Corp</a></td>
    <td id="dt1_PAHC_last" align="right" class="ds_last qb_line" nowrap="nowrap">25.65</td>
    <td id="dt1_PAHC_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.84</span></td>
    <td id="dt1_PAHC_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+3.39%</span></td>
    <td id="dt1_PAHC_high" align="right" class="ds_high qb_line" nowrap="nowrap">26.80</td>
    <td id="dt1_PAHC_low" align="right" class="ds_low qb_line" nowrap="nowrap">24.81</td>
    <td id="dt1_PAHC_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">76,195</td>
    <td id="dt1_PAHC_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/PAHC" title="Detailed Quote for PAHC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/PAHC" title="Chart for PAHC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/PAHC" title="Opinion for PAHC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=PAHC" title="Cheat Sheet for PAHC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_PEB" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/PEB">PEB</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/PEB">Pebblebrook Hotel Trust</a></td>
    <td id="dt1_PEB_last" align="right" class="ds_last qb_shad" nowrap="nowrap">41.99</td>
    <td id="dt1_PEB_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.61</span></td>
    <td id="dt1_PEB_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.47%</span></td>
    <td id="dt1_PEB_high" align="right" class="ds_high qb_shad" nowrap="nowrap">41.99</td>
    <td id="dt1_PEB_low" align="right" class="ds_low qb_shad" nowrap="nowrap">41.16</td>
    <td id="dt1_PEB_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">704,865</td>
    <td id="dt1_PEB_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/PEB" title="Detailed Quote for PEB"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/PEB" title="Chart for PEB"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/PEB" title="Opinion for PEB"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=PEB" title="Cheat Sheet for PEB"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_PG" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/PG">PG</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/PG">Procter & Gamble Company</a></td>
    <td id="dt1_PG_last" align="right" class="ds_last qb_line" nowrap="nowrap">86.94</td>
    <td id="dt1_PG_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.40</span></td>
    <td id="dt1_PG_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.46%</span></td>
    <td id="dt1_PG_high" align="right" class="ds_high qb_line" nowrap="nowrap">87.00</td>
    <td id="dt1_PG_low" align="right" class="ds_low qb_line" nowrap="nowrap">85.67</td>
    <td id="dt1_PG_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">5,814,822</td>
    <td id="dt1_PG_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/PG" title="Detailed Quote for PG"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/PG" title="Chart for PG"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/PG" title="Opinion for PG"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=PG" title="Cheat Sheet for PG"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_PNY" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/PNY">PNY</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/PNY">Piedmont Natural Gas Company</a></td>
    <td id="dt1_PNY_last" align="right" class="ds_last qb_shad" nowrap="nowrap">37.96</td>
    <td id="dt1_PNY_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.62</span></td>
    <td id="dt1_PNY_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.66%</span></td>
    <td id="dt1_PNY_high" align="right" class="ds_high qb_shad" nowrap="nowrap">38.02</td>
    <td id="dt1_PNY_low" align="right" class="ds_low qb_shad" nowrap="nowrap">37.06</td>
    <td id="dt1_PNY_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">277,612</td>
    <td id="dt1_PNY_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/PNY" title="Detailed Quote for PNY"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/PNY" title="Chart for PNY"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/PNY" title="Opinion for PNY"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=PNY" title="Cheat Sheet for PNY"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_POR" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/POR">POR</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/POR">Portland General Electric Company</a></td>
    <td id="dt1_POR_last" align="right" class="ds_last qb_line" nowrap="nowrap">36.41</td>
    <td id="dt1_POR_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.92</span></td>
    <td id="dt1_POR_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+2.59%</span></td>
    <td id="dt1_POR_high" align="right" class="ds_high qb_line" nowrap="nowrap">36.84</td>
    <td id="dt1_POR_low" align="right" class="ds_low qb_line" nowrap="nowrap">35.54</td>
    <td id="dt1_POR_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">838,683</td>
    <td id="dt1_POR_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/POR" title="Detailed Quote for POR"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/POR" title="Chart for POR"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/POR" title="Opinion for POR"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=POR" title="Cheat Sheet for POR"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_QTS" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/QTS">QTS</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/QTS">Qts Realty Trust Inc</a></td>
    <td id="dt1_QTS_last" align="right" class="ds_last qb_shad" nowrap="nowrap">34.83</td>
    <td id="dt1_QTS_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.02</span></td>
    <td id="dt1_QTS_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+3.02%</span></td>
    <td id="dt1_QTS_high" align="right" class="ds_high qb_shad" nowrap="nowrap">34.92</td>
    <td id="dt1_QTS_low" align="right" class="ds_low qb_shad" nowrap="nowrap">33.79</td>
    <td id="dt1_QTS_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">82,962</td>
    <td id="dt1_QTS_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/QTS" title="Detailed Quote for QTS"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/QTS" title="Chart for QTS"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/QTS" title="Opinion for QTS"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=QTS" title="Cheat Sheet for QTS"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_RE" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/RE">RE</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/RE">Everest Re Group</a></td>
    <td id="dt1_RE_last" align="right" class="ds_last qb_line" nowrap="nowrap">169.51</td>
    <td id="dt1_RE_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.99</span></td>
    <td id="dt1_RE_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.19%</span></td>
    <td id="dt1_RE_high" align="right" class="ds_high qb_line" nowrap="nowrap">169.80</td>
    <td id="dt1_RE_low" align="right" class="ds_low qb_line" nowrap="nowrap">166.71</td>
    <td id="dt1_RE_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">269,845</td>
    <td id="dt1_RE_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/RE" title="Detailed Quote for RE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/RE" title="Chart for RE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/RE" title="Opinion for RE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=RE" title="Cheat Sheet for RE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_RGEN" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/RGEN">RGEN</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/RGEN">Repligen Corp</a></td>
    <td id="dt1_RGEN_last" align="right" class="ds_last qb_shad" nowrap="nowrap">25.49</td>
    <td id="dt1_RGEN_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.76</span></td>
    <td id="dt1_RGEN_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+3.07%</span></td>
    <td id="dt1_RGEN_high" align="right" class="ds_high qb_shad" nowrap="nowrap">25.94</td>
    <td id="dt1_RGEN_low" align="right" class="ds_low qb_shad" nowrap="nowrap">24.47</td>
    <td id="dt1_RGEN_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">389,236</td>
    <td id="dt1_RGEN_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/RGEN" title="Detailed Quote for RGEN"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/RGEN" title="Chart for RGEN"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/RGEN" title="Opinion for RGEN"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=RGEN" title="Cheat Sheet for RGEN"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_RHI" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/RHI">RHI</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/RHI">Robert Half International Inc</a></td>
    <td id="dt1_RHI_last" align="right" class="ds_last qb_line" nowrap="nowrap">53.79</td>
    <td id="dt1_RHI_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.45</span></td>
    <td id="dt1_RHI_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.84%</span></td>
    <td id="dt1_RHI_high" align="right" class="ds_high qb_line" nowrap="nowrap">54.00</td>
    <td id="dt1_RHI_low" align="right" class="ds_low qb_line" nowrap="nowrap">53.16</td>
    <td id="dt1_RHI_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">890,341</td>
    <td id="dt1_RHI_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/RHI" title="Detailed Quote for RHI"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/RHI" title="Chart for RHI"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/RHI" title="Opinion for RHI"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=RHI" title="Cheat Sheet for RHI"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ROL" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ROL">ROL</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ROL">Rollins</a></td>
    <td id="dt1_ROL_last" align="right" class="ds_last qb_shad" nowrap="nowrap">31.58</td>
    <td id="dt1_ROL_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.44</span></td>
    <td id="dt1_ROL_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.41%</span></td>
    <td id="dt1_ROL_high" align="right" class="ds_high qb_shad" nowrap="nowrap">31.84</td>
    <td id="dt1_ROL_low" align="right" class="ds_low qb_shad" nowrap="nowrap">31.05</td>
    <td id="dt1_ROL_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">179,048</td>
    <td id="dt1_ROL_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/ROL" title="Detailed Quote for ROL"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ROL" title="Chart for ROL"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ROL" title="Opinion for ROL"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ROL" title="Cheat Sheet for ROL"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ROP" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/ROP">ROP</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/ROP">Roper Industries</a></td>
    <td id="dt1_ROP_last" align="right" class="ds_last qb_line" nowrap="nowrap">154.83</td>
    <td id="dt1_ROP_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.67</span></td>
    <td id="dt1_ROP_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.43%</span></td>
    <td id="dt1_ROP_high" align="right" class="ds_high qb_line" nowrap="nowrap">155.34</td>
    <td id="dt1_ROP_low" align="right" class="ds_low qb_line" nowrap="nowrap">153.45</td>
    <td id="dt1_ROP_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">461,442</td>
    <td id="dt1_ROP_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/ROP" title="Detailed Quote for ROP"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ROP" title="Chart for ROP"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ROP" title="Opinion for ROP"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ROP" title="Cheat Sheet for ROP"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_RSG" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/RSG">RSG</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/RSG">Republic Services</a></td>
    <td id="dt1_RSG_last" align="right" class="ds_last qb_shad" nowrap="nowrap">39.80</td>
    <td id="dt1_RSG_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.46</span></td>
    <td id="dt1_RSG_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.17%</span></td>
    <td id="dt1_RSG_high" align="right" class="ds_high qb_shad" nowrap="nowrap">39.97</td>
    <td id="dt1_RSG_low" align="right" class="ds_low qb_shad" nowrap="nowrap">39.12</td>
    <td id="dt1_RSG_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">1,451,461</td>
    <td id="dt1_RSG_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/RSG" title="Detailed Quote for RSG"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/RSG" title="Chart for RSG"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/RSG" title="Opinion for RSG"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=RSG" title="Cheat Sheet for RSG"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_RTN" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/RTN">RTN</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/RTN">Raytheon Company</a></td>
    <td id="dt1_RTN_last" align="right" class="ds_last qb_line" nowrap="nowrap">103.20</td>
    <td id="dt1_RTN_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.54</span></td>
    <td id="dt1_RTN_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.51%</span></td>
    <td id="dt1_RTN_high" align="right" class="ds_high qb_line" nowrap="nowrap">103.80</td>
    <td id="dt1_RTN_low" align="right" class="ds_low qb_line" nowrap="nowrap">100.23</td>
    <td id="dt1_RTN_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">1,740,727</td>
    <td id="dt1_RTN_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/RTN" title="Detailed Quote for RTN"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/RTN" title="Chart for RTN"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/RTN" title="Opinion for RTN"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=RTN" title="Cheat Sheet for RTN"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_SAFT" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/SAFT">SAFT</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/SAFT">Safety Insurance Group</a></td>
    <td id="dt1_SAFT_last" align="right" class="ds_last qb_shad" nowrap="nowrap">62.17</td>
    <td id="dt1_SAFT_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.77</span></td>
    <td id="dt1_SAFT_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.25%</span></td>
    <td id="dt1_SAFT_high" align="right" class="ds_high qb_shad" nowrap="nowrap">62.62</td>
    <td id="dt1_SAFT_low" align="right" class="ds_low qb_shad" nowrap="nowrap">61.32</td>
    <td id="dt1_SAFT_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">47,269</td>
    <td id="dt1_SAFT_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/SAFT" title="Detailed Quote for SAFT"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/SAFT" title="Chart for SAFT"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/SAFT" title="Opinion for SAFT"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=SAFT" title="Cheat Sheet for SAFT"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_SAIC" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/SAIC">SAIC</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/SAIC">Science Applications Internatio</a></td>
    <td id="dt1_SAIC_last" align="right" class="ds_last qb_line" nowrap="nowrap">48.18</td>
    <td id="dt1_SAIC_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.50</span></td>
    <td id="dt1_SAIC_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.05%</span></td>
    <td id="dt1_SAIC_high" align="right" class="ds_high qb_line" nowrap="nowrap">48.31</td>
    <td id="dt1_SAIC_low" align="right" class="ds_low qb_line" nowrap="nowrap">47.44</td>
    <td id="dt1_SAIC_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">233,275</td>
    <td id="dt1_SAIC_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/SAIC" title="Detailed Quote for SAIC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/SAIC" title="Chart for SAIC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/SAIC" title="Opinion for SAIC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=SAIC" title="Cheat Sheet for SAIC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_SBAC" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/SBAC">SBAC</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/SBAC">SBA Communications Corp</a></td>
    <td id="dt1_SBAC_last" align="right" class="ds_last qb_shad" nowrap="nowrap">114.40</td>
    <td id="dt1_SBAC_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.94</span></td>
    <td id="dt1_SBAC_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.73%</span></td>
    <td id="dt1_SBAC_high" align="right" class="ds_high qb_shad" nowrap="nowrap">114.59</td>
    <td id="dt1_SBAC_low" align="right" class="ds_low qb_shad" nowrap="nowrap">112.04</td>
    <td id="dt1_SBAC_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">912,153</td>
    <td id="dt1_SBAC_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/SBAC" title="Detailed Quote for SBAC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/SBAC" title="Chart for SBAC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/SBAC" title="Opinion for SBAC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=SBAC" title="Cheat Sheet for SBAC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_SGC" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/SGC">SGC</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/SGC">Superior Uniform Group</a></td>
    <td id="dt1_SGC_last" align="right" class="ds_last qb_line" nowrap="nowrap">23.52</td>
    <td id="dt1_SGC_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_down">-0.61</span></td>
    <td id="dt1_SGC_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_down">-2.53%</span></td>
    <td id="dt1_SGC_high" align="right" class="ds_high qb_line" nowrap="nowrap">26.44</td>
    <td id="dt1_SGC_low" align="right" class="ds_low qb_line" nowrap="nowrap">23.40</td>
    <td id="dt1_SGC_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">30,221</td>
    <td id="dt1_SGC_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/SGC" title="Detailed Quote for SGC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/SGC" title="Chart for SGC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/SGC" title="Opinion for SGC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=SGC" title="Cheat Sheet for SGC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_SIG" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/SIG">SIG</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/SIG">Signet Jewelers Limited</a></td>
    <td id="dt1_SIG_last" align="right" class="ds_last qb_shad" nowrap="nowrap">119.45</td>
    <td id="dt1_SIG_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.88</span></td>
    <td id="dt1_SIG_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.60%</span></td>
    <td id="dt1_SIG_high" align="right" class="ds_high qb_shad" nowrap="nowrap">119.64</td>
    <td id="dt1_SIG_low" align="right" class="ds_low qb_shad" nowrap="nowrap">115.48</td>
    <td id="dt1_SIG_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">738,086</td>
    <td id="dt1_SIG_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/SIG" title="Detailed Quote for SIG"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/SIG" title="Chart for SIG"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/SIG" title="Opinion for SIG"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=SIG" title="Cheat Sheet for SIG"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_SMCI" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/SMCI">SMCI</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/SMCI">Super Micro Computer</a></td>
    <td id="dt1_SMCI_last" align="right" class="ds_last qb_line" nowrap="nowrap">31.78</td>
    <td id="dt1_SMCI_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.18</span></td>
    <td id="dt1_SMCI_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.57%</span></td>
    <td id="dt1_SMCI_high" align="right" class="ds_high qb_line" nowrap="nowrap">32.08</td>
    <td id="dt1_SMCI_low" align="right" class="ds_low qb_line" nowrap="nowrap">31.24</td>
    <td id="dt1_SMCI_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">414,585</td>
    <td id="dt1_SMCI_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/SMCI" title="Detailed Quote for SMCI"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/SMCI" title="Chart for SMCI"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/SMCI" title="Opinion for SMCI"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=SMCI" title="Cheat Sheet for SMCI"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_SNA" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/SNA">SNA</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/SNA">Snap-On Inc</a></td>
    <td id="dt1_SNA_last" align="right" class="ds_last qb_shad" nowrap="nowrap">130.50</td>
    <td id="dt1_SNA_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.08</span></td>
    <td id="dt1_SNA_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.83%</span></td>
    <td id="dt1_SNA_high" align="right" class="ds_high qb_shad" nowrap="nowrap">135.70</td>
    <td id="dt1_SNA_low" align="right" class="ds_low qb_shad" nowrap="nowrap">125.00</td>
    <td id="dt1_SNA_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">304,724</td>
    <td id="dt1_SNA_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/SNA" title="Detailed Quote for SNA"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/SNA" title="Chart for SNA"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/SNA" title="Opinion for SNA"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=SNA" title="Cheat Sheet for SNA"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_SPNC" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/SPNC">SPNC</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/SPNC">The Spectranetics Corp</a></td>
    <td id="dt1_SPNC_last" align="right" class="ds_last qb_line" nowrap="nowrap">31.76</td>
    <td id="dt1_SPNC_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.38</span></td>
    <td id="dt1_SPNC_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.21%</span></td>
    <td id="dt1_SPNC_high" align="right" class="ds_high qb_line" nowrap="nowrap">32.31</td>
    <td id="dt1_SPNC_low" align="right" class="ds_low qb_line" nowrap="nowrap">30.91</td>
    <td id="dt1_SPNC_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">637,800</td>
    <td id="dt1_SPNC_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/SPNC" title="Detailed Quote for SPNC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/SPNC" title="Chart for SPNC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/SPNC" title="Opinion for SPNC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=SPNC" title="Cheat Sheet for SPNC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_SRE" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/SRE">SRE</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/SRE">Sempra Energy</a></td>
    <td id="dt1_SRE_last" align="right" class="ds_last qb_shad" nowrap="nowrap">110.49</td>
    <td id="dt1_SRE_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.98</span></td>
    <td id="dt1_SRE_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.82%</span></td>
    <td id="dt1_SRE_high" align="right" class="ds_high qb_shad" nowrap="nowrap">110.89</td>
    <td id="dt1_SRE_low" align="right" class="ds_low qb_shad" nowrap="nowrap">108.17</td>
    <td id="dt1_SRE_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">1,411,644</td>
    <td id="dt1_SRE_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/SRE" title="Detailed Quote for SRE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/SRE" title="Chart for SRE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/SRE" title="Opinion for SRE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=SRE" title="Cheat Sheet for SRE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_SSNC" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/SSNC">SSNC</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/SSNC">SS&C Technologies Holdings</a></td>
    <td id="dt1_SSNC_last" align="right" class="ds_last qb_line" nowrap="nowrap">46.59</td>
    <td id="dt1_SSNC_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_down">-0.09</span></td>
    <td id="dt1_SSNC_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_down">-0.19%</span></td>
    <td id="dt1_SSNC_high" align="right" class="ds_high qb_line" nowrap="nowrap">48.50</td>
    <td id="dt1_SSNC_low" align="right" class="ds_low qb_line" nowrap="nowrap">44.99</td>
    <td id="dt1_SSNC_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">410,809</td>
    <td id="dt1_SSNC_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/SSNC" title="Detailed Quote for SSNC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/SSNC" title="Chart for SSNC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/SSNC" title="Opinion for SSNC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=SSNC" title="Cheat Sheet for SSNC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_STE" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/STE">STE</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/STE">Steris Corp</a></td>
    <td id="dt1_STE_last" align="right" class="ds_last qb_shad" nowrap="nowrap">60.84</td>
    <td id="dt1_STE_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.42</span></td>
    <td id="dt1_STE_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.70%</span></td>
    <td id="dt1_STE_high" align="right" class="ds_high qb_shad" nowrap="nowrap">61.34</td>
    <td id="dt1_STE_low" align="right" class="ds_low qb_shad" nowrap="nowrap">59.92</td>
    <td id="dt1_STE_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">342,125</td>
    <td id="dt1_STE_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/STE" title="Detailed Quote for STE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/STE" title="Chart for STE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/STE" title="Opinion for STE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=STE" title="Cheat Sheet for STE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_SXI" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/SXI">SXI</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/SXI">Standex International Corp</a></td>
    <td id="dt1_SXI_last" align="right" class="ds_last qb_line" nowrap="nowrap">82.56</td>
    <td id="dt1_SXI_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.91</span></td>
    <td id="dt1_SXI_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.11%</span></td>
    <td id="dt1_SXI_high" align="right" class="ds_high qb_line" nowrap="nowrap">82.79</td>
    <td id="dt1_SXI_low" align="right" class="ds_low qb_line" nowrap="nowrap">80.80</td>
    <td id="dt1_SXI_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">59,533</td>
    <td id="dt1_SXI_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/SXI" title="Detailed Quote for SXI"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/SXI" title="Chart for SXI"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/SXI" title="Opinion for SXI"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=SXI" title="Cheat Sheet for SXI"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_SXT" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/SXT">SXT</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/SXT">Sensient Technologies Corp</a></td>
    <td id="dt1_SXT_last" align="right" class="ds_last qb_shad" nowrap="nowrap">57.82</td>
    <td id="dt1_SXT_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.85</span></td>
    <td id="dt1_SXT_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.49%</span></td>
    <td id="dt1_SXT_high" align="right" class="ds_high qb_shad" nowrap="nowrap">58.17</td>
    <td id="dt1_SXT_low" align="right" class="ds_low qb_shad" nowrap="nowrap">56.65</td>
    <td id="dt1_SXT_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">245,716</td>
    <td id="dt1_SXT_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/SXT" title="Detailed Quote for SXT"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/SXT" title="Chart for SXT"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/SXT" title="Opinion for SXT"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=SXT" title="Cheat Sheet for SXT"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_SYF" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/SYF">SYF</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/SYF">Synchrony Financial</a></td>
    <td id="dt1_SYF_last" align="right" class="ds_last qb_line" nowrap="nowrap">26.79</td>
    <td id="dt1_SYF_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_down">-0.21</span></td>
    <td id="dt1_SYF_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_down">-0.78%</span></td>
    <td id="dt1_SYF_high" align="right" class="ds_high qb_line" nowrap="nowrap">27.45</td>
    <td id="dt1_SYF_low" align="right" class="ds_low qb_line" nowrap="nowrap">26.51</td>
    <td id="dt1_SYF_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">1,048,560</td>
    <td id="dt1_SYF_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/SYF" title="Detailed Quote for SYF"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/SYF" title="Chart for SYF"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/SYF" title="Opinion for SYF"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=SYF" title="Cheat Sheet for SYF"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_SYK" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/SYK">SYK</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/SYK">Stryker Corp</a></td>
    <td id="dt1_SYK_last" align="right" class="ds_last qb_shad" nowrap="nowrap">87.04</td>
    <td id="dt1_SYK_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.36</span></td>
    <td id="dt1_SYK_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.42%</span></td>
    <td id="dt1_SYK_high" align="right" class="ds_high qb_shad" nowrap="nowrap">87.24</td>
    <td id="dt1_SYK_low" align="right" class="ds_low qb_shad" nowrap="nowrap">86.16</td>
    <td id="dt1_SYK_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">1,392,771</td>
    <td id="dt1_SYK_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/SYK" title="Detailed Quote for SYK"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/SYK" title="Chart for SYK"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/SYK" title="Opinion for SYK"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=SYK" title="Cheat Sheet for SYK"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_TAX" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/TAX">TAX</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/TAX">Jth Holding Inc</a></td>
    <td id="dt1_TAX_last" align="right" class="ds_last qb_line" nowrap="nowrap">38.40</td>
    <td id="dt1_TAX_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.40</span></td>
    <td id="dt1_TAX_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.05%</span></td>
    <td id="dt1_TAX_high" align="right" class="ds_high qb_line" nowrap="nowrap">38.62</td>
    <td id="dt1_TAX_low" align="right" class="ds_low qb_line" nowrap="nowrap">37.65</td>
    <td id="dt1_TAX_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">41,427</td>
    <td id="dt1_TAX_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/TAX" title="Detailed Quote for TAX"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/TAX" title="Chart for TAX"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/TAX" title="Opinion for TAX"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=TAX" title="Cheat Sheet for TAX"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_TDY" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/TDY">TDY</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/TDY">Teledyne Technologies Inc</a></td>
    <td id="dt1_TDY_last" align="right" class="ds_last qb_shad" nowrap="nowrap">102.26</td>
    <td id="dt1_TDY_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+2.20</span></td>
    <td id="dt1_TDY_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+2.20%</span></td>
    <td id="dt1_TDY_high" align="right" class="ds_high qb_shad" nowrap="nowrap">102.88</td>
    <td id="dt1_TDY_low" align="right" class="ds_low qb_shad" nowrap="nowrap">99.20</td>
    <td id="dt1_TDY_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">184,718</td>
    <td id="dt1_TDY_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/TDY" title="Detailed Quote for TDY"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/TDY" title="Chart for TDY"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/TDY" title="Opinion for TDY"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=TDY" title="Cheat Sheet for TDY"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_TEG" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/TEG">TEG</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/TEG">Integrys Energy Group</a></td>
    <td id="dt1_TEG_last" align="right" class="ds_last qb_line" nowrap="nowrap">72.93</td>
    <td id="dt1_TEG_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+2.50</span></td>
    <td id="dt1_TEG_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+3.55%</span></td>
    <td id="dt1_TEG_high" align="right" class="ds_high qb_line" nowrap="nowrap">72.95</td>
    <td id="dt1_TEG_low" align="right" class="ds_low qb_line" nowrap="nowrap">70.50</td>
    <td id="dt1_TEG_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">515,849</td>
    <td id="dt1_TEG_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/TEG" title="Detailed Quote for TEG"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/TEG" title="Chart for TEG"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/TEG" title="Opinion for TEG"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=TEG" title="Cheat Sheet for TEG"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_TFSL" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/TFSL">TFSL</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/TFSL">Tfs Financial Corp</a></td>
    <td id="dt1_TFSL_last" align="right" class="ds_last qb_shad" nowrap="nowrap">15.04</td>
    <td id="dt1_TFSL_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.20</span></td>
    <td id="dt1_TFSL_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.35%</span></td>
    <td id="dt1_TFSL_high" align="right" class="ds_high qb_shad" nowrap="nowrap">15.18</td>
    <td id="dt1_TFSL_low" align="right" class="ds_low qb_shad" nowrap="nowrap">14.62</td>
    <td id="dt1_TFSL_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">347,778</td>
    <td id="dt1_TFSL_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/TFSL" title="Detailed Quote for TFSL"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/TFSL" title="Chart for TFSL"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/TFSL" title="Opinion for TFSL"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=TFSL" title="Cheat Sheet for TFSL"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_TFX" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/TFX">TFX</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/TFX">Teleflex Inc</a></td>
    <td id="dt1_TFX_last" align="right" class="ds_last qb_line" nowrap="nowrap">112.87</td>
    <td id="dt1_TFX_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.64</span></td>
    <td id="dt1_TFX_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.57%</span></td>
    <td id="dt1_TFX_high" align="right" class="ds_high qb_line" nowrap="nowrap">114.37</td>
    <td id="dt1_TFX_low" align="right" class="ds_low qb_line" nowrap="nowrap">109.95</td>
    <td id="dt1_TFX_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">317,670</td>
    <td id="dt1_TFX_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/TFX" title="Detailed Quote for TFX"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/TFX" title="Chart for TFX"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/TFX" title="Opinion for TFX"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=TFX" title="Cheat Sheet for TFX"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_TRV" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/TRV">TRV</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/TRV">The Travelers Companies Inc</a></td>
    <td id="dt1_TRV_last" align="right" class="ds_last qb_shad" nowrap="nowrap">100.00</td>
    <td id="dt1_TRV_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.58</span></td>
    <td id="dt1_TRV_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.58%</span></td>
    <td id="dt1_TRV_high" align="right" class="ds_high qb_shad" nowrap="nowrap">100.53</td>
    <td id="dt1_TRV_low" align="right" class="ds_low qb_shad" nowrap="nowrap">99.07</td>
    <td id="dt1_TRV_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">2,859,541</td>
    <td id="dt1_TRV_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/TRV" title="Detailed Quote for TRV"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/TRV" title="Chart for TRV"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/TRV" title="Opinion for TRV"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=TRV" title="Cheat Sheet for TRV"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_TSO" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/TSO">TSO</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/TSO">Tesoro Petroleum Corp</a></td>
    <td id="dt1_TSO_last" align="right" class="ds_last qb_line" nowrap="nowrap">68.10</td>
    <td id="dt1_TSO_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.15</span></td>
    <td id="dt1_TSO_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.72%</span></td>
    <td id="dt1_TSO_high" align="right" class="ds_high qb_line" nowrap="nowrap">68.99</td>
    <td id="dt1_TSO_low" align="right" class="ds_low qb_line" nowrap="nowrap">66.71</td>
    <td id="dt1_TSO_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">3,891,937</td>
    <td id="dt1_TSO_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/TSO" title="Detailed Quote for TSO"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/TSO" title="Chart for TSO"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/TSO" title="Opinion for TSO"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=TSO" title="Cheat Sheet for TSO"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_TTPH" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/TTPH">TTPH</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/TTPH">Tetraphase Pharmaceuticals Inc</a></td>
    <td id="dt1_TTPH_last" align="right" class="ds_last qb_shad" nowrap="nowrap">25.19</td>
    <td id="dt1_TTPH_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.90</span></td>
    <td id="dt1_TTPH_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+3.71%</span></td>
    <td id="dt1_TTPH_high" align="right" class="ds_high qb_shad" nowrap="nowrap">26.34</td>
    <td id="dt1_TTPH_low" align="right" class="ds_low qb_shad" nowrap="nowrap">23.99</td>
    <td id="dt1_TTPH_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">871,910</td>
    <td id="dt1_TTPH_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/TTPH" title="Detailed Quote for TTPH"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/TTPH" title="Chart for TTPH"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/TTPH" title="Opinion for TTPH"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=TTPH" title="Cheat Sheet for TTPH"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_TYL" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/TYL">TYL</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/TYL">Tyler Technologies</a></td>
    <td id="dt1_TYL_last" align="right" class="ds_last qb_line" nowrap="nowrap">110.42</td>
    <td id="dt1_TYL_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+3.32</span></td>
    <td id="dt1_TYL_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+3.10%</span></td>
    <td id="dt1_TYL_high" align="right" class="ds_high qb_line" nowrap="nowrap">111.23</td>
    <td id="dt1_TYL_low" align="right" class="ds_low qb_line" nowrap="nowrap">106.12</td>
    <td id="dt1_TYL_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">202,636</td>
    <td id="dt1_TYL_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/TYL" title="Detailed Quote for TYL"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/TYL" title="Chart for TYL"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/TYL" title="Opinion for TYL"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=TYL" title="Cheat Sheet for TYL"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_UEIC" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/UEIC">UEIC</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/UEIC">Universal Electronics Inc</a></td>
    <td id="dt1_UEIC_last" align="right" class="ds_last qb_shad" nowrap="nowrap">56.30</td>
    <td id="dt1_UEIC_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.42</span></td>
    <td id="dt1_UEIC_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+2.59%</span></td>
    <td id="dt1_UEIC_high" align="right" class="ds_high qb_shad" nowrap="nowrap">56.51</td>
    <td id="dt1_UEIC_low" align="right" class="ds_low qb_shad" nowrap="nowrap">54.69</td>
    <td id="dt1_UEIC_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">173,746</td>
    <td id="dt1_UEIC_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/UEIC" title="Detailed Quote for UEIC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/UEIC" title="Chart for UEIC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/UEIC" title="Opinion for UEIC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=UEIC" title="Cheat Sheet for UEIC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_UGI" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/UGI">UGI</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/UGI">Ugi Corp</a></td>
    <td id="dt1_UGI_last" align="right" class="ds_last qb_line" nowrap="nowrap">37.72</td>
    <td id="dt1_UGI_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.54</span></td>
    <td id="dt1_UGI_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.45%</span></td>
    <td id="dt1_UGI_high" align="right" class="ds_high qb_line" nowrap="nowrap">37.83</td>
    <td id="dt1_UGI_low" align="right" class="ds_low qb_line" nowrap="nowrap">37.12</td>
    <td id="dt1_UGI_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">612,225</td>
    <td id="dt1_UGI_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/UGI" title="Detailed Quote for UGI"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/UGI" title="Chart for UGI"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/UGI" title="Opinion for UGI"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=UGI" title="Cheat Sheet for UGI"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_UNH" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/UNH">UNH</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/UNH">Unitedhealth Group Inc</a></td>
    <td id="dt1_UNH_last" align="right" class="ds_last qb_shad" nowrap="nowrap">93.88</td>
    <td id="dt1_UNH_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.92</span></td>
    <td id="dt1_UNH_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.99%</span></td>
    <td id="dt1_UNH_high" align="right" class="ds_high qb_shad" nowrap="nowrap">94.15</td>
    <td id="dt1_UNH_low" align="right" class="ds_low qb_shad" nowrap="nowrap">92.50</td>
    <td id="dt1_UNH_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">2,868,733</td>
    <td id="dt1_UNH_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/UNH" title="Detailed Quote for UNH"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/UNH" title="Chart for UNH"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/UNH" title="Opinion for UNH"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=UNH" title="Cheat Sheet for UNH"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_USLM" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/USLM">USLM</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/USLM">United States Lime & Minerals</a></td>
    <td id="dt1_USLM_last" align="right" class="ds_last qb_line" nowrap="nowrap">69.72</td>
    <td id="dt1_USLM_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.86</span></td>
    <td id="dt1_USLM_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+2.74%</span></td>
    <td id="dt1_USLM_high" align="right" class="ds_high qb_line" nowrap="nowrap">69.98</td>
    <td id="dt1_USLM_low" align="right" class="ds_low qb_line" nowrap="nowrap">66.88</td>
    <td id="dt1_USLM_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">20,136</td>
    <td id="dt1_USLM_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/USLM" title="Detailed Quote for USLM"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/USLM" title="Chart for USLM"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/USLM" title="Opinion for USLM"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=USLM" title="Cheat Sheet for USLM"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_USPH" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/USPH">USPH</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/USPH">U.S. Physical Therapy</a></td>
    <td id="dt1_USPH_last" align="right" class="ds_last qb_shad" nowrap="nowrap">42.97</td>
    <td id="dt1_USPH_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.82</span></td>
    <td id="dt1_USPH_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.95%</span></td>
    <td id="dt1_USPH_high" align="right" class="ds_high qb_shad" nowrap="nowrap">43.43</td>
    <td id="dt1_USPH_low" align="right" class="ds_low qb_shad" nowrap="nowrap">41.98</td>
    <td id="dt1_USPH_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">56,786</td>
    <td id="dt1_USPH_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/USPH" title="Detailed Quote for USPH"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/USPH" title="Chart for USPH"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/USPH" title="Opinion for USPH"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=USPH" title="Cheat Sheet for USPH"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_V" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/V">V</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/V">Visa Inc</a></td>
    <td id="dt1_V_last" align="right" class="ds_last qb_line" nowrap="nowrap">236.65</td>
    <td id="dt1_V_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+21.99</span></td>
    <td id="dt1_V_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+10.24%</span></td>
    <td id="dt1_V_high" align="right" class="ds_high qb_line" nowrap="nowrap">239.28</td>
    <td id="dt1_V_low" align="right" class="ds_low qb_line" nowrap="nowrap">228.02</td>
    <td id="dt1_V_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">12,714,746</td>
    <td id="dt1_V_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/V" title="Detailed Quote for V"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/V" title="Chart for V"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/V" title="Opinion for V"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=V" title="Cheat Sheet for V"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_VAC" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/VAC">VAC</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/VAC">Marriot Vacations Worldwide Cor</a></td>
    <td id="dt1_VAC_last" align="right" class="ds_last qb_shad" nowrap="nowrap">69.75</td>
    <td id="dt1_VAC_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.40</span></td>
    <td id="dt1_VAC_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.58%</span></td>
    <td id="dt1_VAC_high" align="right" class="ds_high qb_shad" nowrap="nowrap">70.48</td>
    <td id="dt1_VAC_low" align="right" class="ds_low qb_shad" nowrap="nowrap">69.10</td>
    <td id="dt1_VAC_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">262,555</td>
    <td id="dt1_VAC_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/VAC" title="Detailed Quote for VAC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/VAC" title="Chart for VAC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/VAC" title="Opinion for VAC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=VAC" title="Cheat Sheet for VAC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_VASC" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/VASC">VASC</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/VASC">Vascular Solutions</a></td>
    <td id="dt1_VASC_last" align="right" class="ds_last qb_line" nowrap="nowrap">29.16</td>
    <td id="dt1_VASC_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.21</span></td>
    <td id="dt1_VASC_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.73%</span></td>
    <td id="dt1_VASC_high" align="right" class="ds_high qb_line" nowrap="nowrap">29.58</td>
    <td id="dt1_VASC_low" align="right" class="ds_low qb_line" nowrap="nowrap">28.68</td>
    <td id="dt1_VASC_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">195,989</td>
    <td id="dt1_VASC_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/VASC" title="Detailed Quote for VASC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/VASC" title="Chart for VASC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/VASC" title="Opinion for VASC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=VASC" title="Cheat Sheet for VASC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_VPRT" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/VPRT">VPRT</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/VPRT">Vistaprint N.V.</a></td>
    <td id="dt1_VPRT_last" align="right" class="ds_last qb_shad" nowrap="nowrap">64.24</td>
    <td id="dt1_VPRT_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+9.18</span></td>
    <td id="dt1_VPRT_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+16.67%</span></td>
    <td id="dt1_VPRT_high" align="right" class="ds_high qb_shad" nowrap="nowrap">65.61</td>
    <td id="dt1_VPRT_low" align="right" class="ds_low qb_shad" nowrap="nowrap">55.24</td>
    <td id="dt1_VPRT_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">2,907,194</td>
    <td id="dt1_VPRT_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/VPRT" title="Detailed Quote for VPRT"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/VPRT" title="Chart for VPRT"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/VPRT" title="Opinion for VPRT"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=VPRT" title="Cheat Sheet for VPRT"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_VVC" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/VVC">VVC</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/VVC">Vectren Corp</a></td>
    <td id="dt1_VVC_last" align="right" class="ds_last qb_line" nowrap="nowrap">45.26</td>
    <td id="dt1_VVC_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.77</span></td>
    <td id="dt1_VVC_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.73%</span></td>
    <td id="dt1_VVC_high" align="right" class="ds_high qb_line" nowrap="nowrap">45.28</td>
    <td id="dt1_VVC_low" align="right" class="ds_low qb_line" nowrap="nowrap">44.49</td>
    <td id="dt1_VVC_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">271,155</td>
    <td id="dt1_VVC_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/VVC" title="Detailed Quote for VVC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/VVC" title="Chart for VVC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/VVC" title="Opinion for VVC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=VVC" title="Cheat Sheet for VVC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_WEC" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/WEC">WEC</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/WEC">Wisconsin Energy Corp</a></td>
    <td id="dt1_WEC_last" align="right" class="ds_last qb_shad" nowrap="nowrap">49.57</td>
    <td id="dt1_WEC_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.28</span></td>
    <td id="dt1_WEC_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+2.65%</span></td>
    <td id="dt1_WEC_high" align="right" class="ds_high qb_shad" nowrap="nowrap">49.64</td>
    <td id="dt1_WEC_low" align="right" class="ds_low qb_shad" nowrap="nowrap">48.37</td>
    <td id="dt1_WEC_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">2,312,993</td>
    <td id="dt1_WEC_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/WEC" title="Detailed Quote for WEC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/WEC" title="Chart for WEC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/WEC" title="Opinion for WEC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=WEC" title="Cheat Sheet for WEC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_WGL" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/WGL">WGL</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/WGL">WGL Holdings Inc</a></td>
    <td id="dt1_WGL_last" align="right" class="ds_last qb_line" nowrap="nowrap">47.30</td>
    <td id="dt1_WGL_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.47</span></td>
    <td id="dt1_WGL_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.00%</span></td>
    <td id="dt1_WGL_high" align="right" class="ds_high qb_line" nowrap="nowrap">47.61</td>
    <td id="dt1_WGL_low" align="right" class="ds_low qb_line" nowrap="nowrap">46.74</td>
    <td id="dt1_WGL_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">254,147</td>
    <td id="dt1_WGL_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/WGL" title="Detailed Quote for WGL"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/WGL" title="Chart for WGL"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/WGL" title="Opinion for WGL"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=WGL" title="Cheat Sheet for WGL"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_WGP" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/WGP">WGP</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/WGP">Western Gas Eqty Partners LP</a></td>
    <td id="dt1_WGP_last" align="right" class="ds_last qb_shad" nowrap="nowrap">61.82</td>
    <td id="dt1_WGP_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_down">-0.62</span></td>
    <td id="dt1_WGP_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_down">-0.99%</span></td>
    <td id="dt1_WGP_high" align="right" class="ds_high qb_shad" nowrap="nowrap">63.70</td>
    <td id="dt1_WGP_low" align="right" class="ds_low qb_shad" nowrap="nowrap">61.03</td>
    <td id="dt1_WGP_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">223,204</td>
    <td id="dt1_WGP_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/WGP" title="Detailed Quote for WGP"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/WGP" title="Chart for WGP"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/WGP" title="Opinion for WGP"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=WGP" title="Cheat Sheet for WGP"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_WHG" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/WHG">WHG</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/WHG">Westwood Holdings Group Inc</a></td>
    <td id="dt1_WHG_last" align="right" class="ds_last qb_line" nowrap="nowrap">66.40</td>
    <td id="dt1_WHG_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.38</span></td>
    <td id="dt1_WHG_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+2.12%</span></td>
    <td id="dt1_WHG_high" align="right" class="ds_high qb_line" nowrap="nowrap">66.80</td>
    <td id="dt1_WHG_low" align="right" class="ds_low qb_line" nowrap="nowrap">64.25</td>
    <td id="dt1_WHG_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">12,182</td>
    <td id="dt1_WHG_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/WHG" title="Detailed Quote for WHG"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/WHG" title="Chart for WHG"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/WHG" title="Opinion for WHG"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=WHG" title="Cheat Sheet for WHG"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_WHR" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/WHR">WHR</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/WHR">Whirlpool Corp</a></td>
    <td id="dt1_WHR_last" align="right" class="ds_last qb_shad" nowrap="nowrap">170.55</td>
    <td id="dt1_WHR_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+2.32</span></td>
    <td id="dt1_WHR_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.38%</span></td>
    <td id="dt1_WHR_high" align="right" class="ds_high qb_shad" nowrap="nowrap">171.30</td>
    <td id="dt1_WHR_low" align="right" class="ds_low qb_shad" nowrap="nowrap">167.91</td>
    <td id="dt1_WHR_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">889,160</td>
    <td id="dt1_WHR_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/WHR" title="Detailed Quote for WHR"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/WHR" title="Chart for WHR"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/WHR" title="Opinion for WHR"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=WHR" title="Cheat Sheet for WHR"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_XEL" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/XEL">XEL</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/XEL">Xcel Energy Inc</a></td>
    <td id="dt1_XEL_last" align="right" class="ds_last qb_line" nowrap="nowrap">33.52</td>
    <td id="dt1_XEL_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.67</span></td>
    <td id="dt1_XEL_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+2.04%</span></td>
    <td id="dt1_XEL_high" align="right" class="ds_high qb_line" nowrap="nowrap">33.76</td>
    <td id="dt1_XEL_low" align="right" class="ds_low qb_line" nowrap="nowrap">32.25</td>
    <td id="dt1_XEL_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">5,013,142</td>
    <td id="dt1_XEL_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/XEL" title="Detailed Quote for XEL"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/XEL" title="Chart for XEL"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/XEL" title="Opinion for XEL"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=XEL" title="Cheat Sheet for XEL"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ZMH" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ZMH">ZMH</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ZMH">Zimmer Holdings</a></td>
    <td id="dt1_ZMH_last" align="right" class="ds_last qb_shad" nowrap="nowrap">109.28</td>
    <td id="dt1_ZMH_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.13</span></td>
    <td id="dt1_ZMH_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.04%</span></td>
    <td id="dt1_ZMH_high" align="right" class="ds_high qb_shad" nowrap="nowrap">109.55</td>
    <td id="dt1_ZMH_low" align="right" class="ds_low qb_shad" nowrap="nowrap">107.51</td>
    <td id="dt1_ZMH_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">787,372</td>
    <td id="dt1_ZMH_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">10/30/14</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/ZMH" title="Detailed Quote for ZMH"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ZMH" title="Chart for ZMH"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ZMH" title="Opinion for ZMH"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ZMH" title="Cheat Sheet for ZMH"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
</tbody></table>
<div class="loading" id="ldt1"></div></div>
<table width="100%" border="0" cellspacing="2" cellpadding="1" class="pages" data-tableId="dt1">
  <tr>
    <td style="text-align: center"><span class="selPage chgPage" data-pageNum="1">1 - 100</span>&nbsp;|&nbsp;<span class="selPage chgPage" data-pageNum="2">101 - 171</span>&nbsp;|&nbsp;<span class="selPage curPage" data-pageNum="0">Full List</span></td>
  </tr>
</table>
	</div>
</div>
	<div class="foottext">
		Our list of all-time high stocks shows those stocks that have made new highs in the current trading period, or that have matched previous all time highs. Our All Time Highs pages are updated every ten minutes throughout the day. Our list of all-time high stocks includes US Exchanges (NYSE, AMEX, and NASDAQ stocks).	</div>
</td>
</tr>
</table>
</div>
    <div style="clear:both"></div>
    <div class="mp_spacer"></div>

</center>


<div id="footer">
    <div id="background-container">
        <div id="newsletters">
            <form action="/register.php" method="post" id="newsletter-form">
                <div class="heading">
                    REGISTER  FOR  <span class="orangeText">FREE</span>  BARCHART
                    NEWSLETTERS
                </div>
                <div id="newsletter-subscriptions">
                    <p>I would like to receive these free email subscriptions:</p>
                    <ul>
                        <li><input type="checkbox" checked="checked"
                                   class="newsletter-checkbox" id="morning_call" name="morning_call"
                                   value="1"> <a
                                onclick="window.open('/newsletters/mcnewsletter.html', 'window_name', 'toolbar=no, directories=no, location=no, status=yes, menubar=no, resizable=yes, scrollbars=no, width=450, height=260'); return false"
                                href="/newsletters/mcnewsletter.html">Barchart Morning Call</a> </input>
                        </li>
                        <li><input type="checkbox" checked="checked"
                                   class="newsletter-checkbox" id="chart_of_the_day"
                                   name="chart_of_the_day" value="1"> <a
                                onclick="window.open('/newsletters/codnewsletter.html', 'window_name', 'toolbar=no, directories=no, location=no, status=yes, menubar=no, resizable=yes, scrollbars=no, width=450, height=270'); return false"
                                href="/newsletters/codnewsletter.html">Barchart Chart of the Day</a>
                            </input>
                        </li>
                        <li><input type="checkbox" checked="checked"
                                   class="newsletter-checkbox" id="special_offers"
                                   name="special_offers" value="1"> <a
                                onclick="window.open('/newsletters/bcoffers.html', 'window_name', 'toolbar=no, directories=no, location=no, status=yes, menubar=no, resizable=yes, scrollbars=no, width=450, height=250'); return false"
                                href="/newsletters/bcoffers.html">Special Offers</a> </input>
                        </li>
                    </ul>
                </div>

                <div class="divider">
                    <div id="left-line"></div>
                    <div id="right-line"></div>
                </div>

                <div id="newsletter-signup-form">
                    <div class="errors"></div>

                    <input class="newsletter-signup" id="newsletter-signup-email"
                           type="text" name="email" value="Email Address" /> <br /> <select
                        class="newsletter-signup" id="newsletter-signup-country"
                        name="country">
                        <option value="0" selected="selected">Country</option>
                        <option value="USA">United States</option>\n<option value="CAN">Canada</option>\n<option value="UK">United Kingdom</option>\n<option value="AFGH">Afghanistan</option>\n<option value="ALBA">Albania</option>\n<option value="ALGE">Algeria</option>\n<option value="ANGO">Angola</option>\n<option value="ANGU">Anguilla</option>\n<option value="ANTA">Antartica</option>\n<option value="ANTI">Antigua & Barbuda</option>\n<option value="ARGE">Argentina</option>\n<option value="ARME">Armenia</option>\n<option value="ARUB">Aruba</option>\n<option value="AUST">Austria</option>\n<option value="AUS">Australia</option>\n<option value="AZER">Azerbaijan</option>\n<option value="BAHA">Bahamas</option>\n<option value="BAHR">Bahrain</option>\n<option value="BANG">Bangladesh</option>\n<option value="BARB">Barbados</option>\n<option value="BELA">Belarus</option>\n<option value="BELG">Belgium</option>\n<option value="BELI">Belize</option>\n<option value="BENI">Benin</option>\n<option value="BERM">Bermuda</option>\n<option value="BHUT">Bhutan</option>\n<option value="BOLI">Bolivia</option>\n<option value="BORN">Borneo</option>\n<option value="BOSN">Bosnia</option>\n<option value="BOTS">Botswana</option>\n<option value="BRAZ">Brazil</option>\n<option value="BRIO">British Indian Ocean Territories</option>\n<option value="BRVI">British Virgin Islands</option>\n<option value="BRUN">Brunei</option>\n<option value="BULG">Bulgaria</option>\n<option value="BURK">Burkina Faso</option>\n<option value="BURU">Burundi</option>\n<option value="CAMB">Cambodia</option>\n<option value="CAME">Cameroon</option>\n<option value="CAPV">Cape Verde Island</option>\n<option value="CAYM">Cayman Islands</option>\n<option value="CAFR">Central African Republic</option>\n<option value="CHAD">Chad</option>\n<option value="CHIL">Chile</option>\n<option value="CHIN">China</option>\n<option value="COLO">Colombia</option>\n<option value="COMO">Comoros</option>\n<option value="CONG">Congo</option>\n<option value="COST">Costa Rica</option>\n<option value="IVOR">Cote D'ivoire</option>\n<option value="CROA">Croatia</option>\n<option value="CUBA">Cuba</option>\n<option value="CYPR">Cyprus</option>\n<option value="CZEC">Czech Republic</option>\n<option value="DENM">Denmark</option>\n<option value="DJIB">Djibouti</option>\n<option value="DOMI">Dominican Republic</option>\n<option value="ECUA">Ecuador</option>\n<option value="EGYP">Egypt</option>\n<option value="ELSA">El Salvador</option>\n<option value="ENGL">England</option>\n<option value="EQGU">Equatorial Guinea</option>\n<option value="ERIT">Eritrea</option>\n<option value="ESTO">Estonia</option>\n<option value="ETHI">Ethiopia</option>\n<option value="FALK">Falkland Islands</option>\n<option value="FARO">Faroe Islands</option>\n<option value="FIJI">Fiji</option>\n<option value="FINL">Finland</option>\n<option value="FRAN">France</option>\n<option value="FRGU">French Guiana</option>\n<option value="POLY">French Polynesia</option>\n<option value="FRST">French So Territories</option>\n<option value="GABO">Gabon</option>\n<option value="GAMB">Gambia</option>\n<option value="GEOR">Georgia</option>\n<option value="GERM">Germany</option>\n<option value="GHAN">Ghana</option>\n<option value="GIBR">Gibraltar</option>\n<option value="GREC">Greece</option>\n<option value="GREE">Greenland</option>\n<option value="GREN">Grenada</option>\n<option value="GUAD">Guadeloupe</option>\n<option value="GUAT">Guatemala</option>\n<option value="GUIB">Guinea-bissau</option>\n<option value="GUYA">Guyana</option>\n<option value="HAIT">Haiti</option>\n<option value="HOND">Honduras</option>\n<option value="HONG">Hong Kong</option>\n<option value="HUNG">Hungary</option>\n<option value="ICEL">Iceland</option>\n<option value="INDI">India</option>\n<option value="INDO">Indonesia</option>\n<option value="IRAN">Iran</option>\n<option value="IRAQ">Iraq</option>\n<option value="IREL">Ireland</option>\n<option value="ISRA">Israel</option>\n<option value="ITAL">Italy</option>\n<option value="JAMA">Jamaica</option>\n<option value="JAPA">Japan</option>\n<option value="JORD">Jordan</option>\n<option value="KAZA">Kazakhstan</option>\n<option value="KENY">Kenya</option>\n<option value="KUWA">Kuwait</option>\n<option value="KYRG">Kyrgyzstan</option>\n<option value="LAOS">Laos</option>\n<option value="LATV">Latvia</option>\n<option value="LEBA">Lebanon</option>\n<option value="LESO">Lesotho</option>\n<option value="LIBE">Liberia</option>\n<option value="LIBY">Libya</option>\n<option value="LIEC">Liechtenstien</option>\n<option value="LITH">Lithuania</option>\n<option value="LUXE">Luxembourg</option>\n<option value="MACA">Macau</option>\n<option value="MACE">Macedonia</option>\n<option value="MADA">Madagascar</option>\n<option value="MALW">Malawi</option>\n<option value="MALA">Malaysia</option>\n<option value="MALD">Maldives</option>\n<option value="MALI">Mali</option>\n<option value="MALT">Malta</option>\n<option value="MART">Martinique</option>\n<option value="MAUA">Mauritania</option>\n<option value="MAUS">Mauritius</option>\n<option value="MAYO">Mayotte</option>\n<option value="MEXI">Mexico</option>\n<option value="MOLD">Moldova</option>\n<option value="MONA">Monaco</option>\n<option value="MONG">Mongolia</option>\n<option value="MONT">Montserrat</option>\n<option value="MORO">Morocco</option>\n<option value="MOZA">Mozambique</option>\n<option value="MYAN">Myanmar</option>\n<option value="NIRE">N Ireland</option>\n<option value="NAMI">Namibia</option>\n<option value="NEPA">Nepal</option>\n<option value="NETH">Netherlands</option>\n<option value="NANT">Netherlands Antilles</option>\n<option value="NCAL">New Caledonia</option>\n<option value="NGUI">New Guinea</option>\n<option value="NZEA">New Zealand</option>\n<option value="NICA">Nicaragua</option>\n<option value="NIGE">Niger</option>\n<option value="NIGA">Nigeria</option>\n<option value="NKOR">North Korea</option>\n<option value="NORW">Norway</option>\n<option value="OMAN">Oman</option>\n<option value="PAKI">Pakistan</option>\n<option value="PANA">Panama</option>\n<option value="PAPU">Papua New Guinea</option>\n<option value="PARA">Paraguay</option>\n<option value="PERU">Peru</option>\n<option value="PHIL">Philippines</option>\n<option value="POLA">Poland</option>\n<option value="PORT">Portugal</option>\n<option value="ANDO">Principality Of Andorra</option>\n<option value="QATA">Qatar</option>\n<option value="ROMA">Romania</option>\n<option value="RUSS">Russia</option>\n<option value="RWAN">Rwanda</option>\n<option value="SGEO">S Georgia & S Sandwich Isls</option>\n<option value="SOMO">Samoa (western)</option>\n<option value="SANM">San Marino</option>\n<option value="SAOT">Sao Tome & Principe</option>\n<option value="SAUD">Saudi Arabia</option>\n<option value="SCOT">Scotland</option>\n<option value="SENE">Senegal</option>\n<option value="SEYC">Seychelles Island</option>\n<option value="SIER">Sierra Leone</option>\n<option value="SING">Singapore</option>\n<option value="SLVK">Slovakia</option>\n<option value="SLVN">Slovenia</option>\n<option value="SOLO">Solomon Island</option>\n<option value="SOMA">Somalia</option>\n<option value="SAFR">South Africa</option>\n<option value="SKOR">South Korea</option>\n<option value="SPAI">Spain</option>\n<option value="SRIL">Sri Lanka</option>\n<option value="STHL">St Helena</option>\n<option value="STKN">St Kitts & Nevis</option>\n<option value="STLU">St Lucia</option>\n<option value="STPM">St Pierre & Miquelon</option>\n<option value="STVG">St Vincent & The Grenadines</option>\n<option value="SUDA">Sudan</option>\n<option value="SURI">Suriname</option>\n<option value="SWAZ">Swaziland</option>\n<option value="SWED">Sweden</option>\n<option value="SWIT">Switzerland</option>\n<option value="SYRI">Syria</option>\n<option value="TAIW">Taiwan</option>\n<option value="TANZ">Tanzania</option>\n<option value="THAI">Thailand</option>\n<option value="TOGO">Togo</option>\n<option value="TONG">Tonga</option>\n<option value="TRIN">Trinidad & Tobago</option>\n<option value="TUNI">Tunisia</option>\n<option value="TURK">Turkey</option>\n<option value="TURC">Turks & Caicos Islands</option>\n<option value="UGAN">Uganda</option>\n<option value="UKRA">Ukraine</option>\n<option value="UAE">United Arab Emirates</option>\n<option value="URUG">Uruguay</option>\n<option value="UZBE">Uzbekistan</option>\n<option value="VATI">Vatican</option>\n<option value="VENE">Venezuela</option>\n<option value="VIET">Vietnam</option>\n<option value="WALE">Wales</option>\n<option value="WFIS">Wallis & Futuna Islands</option>\n<option value="SAHA">Western Sahara</option>\n<option value="WSAM">Western Samoa</option>\n<option value="YEME">Yemen</option>\n<option value="YUGO">Yugoslavia</option>\n<option value="ZAIR">Zaire</option>\n<option value="ZAMB">Zambia</option>\n<option value="ZIMB">Zimbabwe</option>\n                    </select> <br /> <input type="hidden" name="newsletter"
                                            value="true" /> <input type="submit" id="newsletter-submit-button"
                                                                   class="bcButton" name="newsletter-signup-submit" value="SIGN UP" />
                    <span id="loader"></span>

            </form>
        </div>
    </div>
    <div class="pane" id="markets">
        <div class="heading">MARKETS</div>
        <ul>
            <li><a href="/stocks/marketoverview">Stock Quotes</a></li>
            <li><a href="/futures/marketoverview">Futures Quotes</a></li>
            <li><a href="/forex/marketoverview">Forex Quotes</a></li>
            <li><a href="/etf/marketoverview">ETF Quotes</a></li>
            <li><a href="/headlines/">News & Commentary</a></li>
        </ul>
    </div>
    <div class="pane" id="profile">
        <div class="heading">MY BARCHART</div>
        <ul>
                        <li><a class="modal"
                    onclick="window.scrollTo(0,0);"                   href="/register.php?ref=portfolio">My Portfolios</a></li>
            <li><a class="modal"
                    onclick="window.scrollTo(0,0);"                   href="/register.php?ref=mycharts">My Charts</a></li>
            <li><a class="modal"
                    onclick="window.scrollTo(0,0);"                   href="/register.php?ref=mpages">Market Pages</a></li>
            <li><a class="modal"
                    onclick="window.scrollTo(0,0);"                   href="/register.php?ref=screener">Screeners</a></li>
            <li><a class="modal"
                    onclick="window.scrollTo(0,0);"                   href="/register.php?ref=technicals">Historical Data</a></li>
        </ul>
    </div>
    <div class="pane" id="links">
        <div class="heading">QUICK LINKS</div>
        <ul>
            <li><a href="/sitemap.php">Site Map</a></li>
            <li><a href="/education/contact.php">Contact Us</a></li>
            <li><a href="http://financialaudiences.com/advertise-with-barchart/">Advertise</a></li>
            <li><a href="/market-data-widgets/">Webmaster Tools</a></li>
            <li><a href="http://mobile.barchart.com/">Barchart Mobile</a></li>
            <li><a href="http://www.barchartondemand.com/">Financial Data APIs</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>

<div id="copyright-info">
    <p>
        Copyright &copy;
        2014        , Barchart.com Inc. All Rights Reserved. <a href="/agreement.php">User
            agreement applies</a>. <br /> Stocks: 15 minute delay, EST. Futures
        and Forex: 10 minute delay, CST. <a
            href="http://www.barchartmarketdata.com">Market Data</a> subject to <a
            href="/privacy.php#terms">terms of use</a> and <a href="/privacy.php">privacy
            policy</a>.
    </p>
</div>
<br />
<br/><br/>
</div>
</div>
<link rel="stylesheet" href="/webinars/css/webinars.css" type="text/css" />
<script type="text/javascript" src="/webinars/js/signup.js"></script>
<div id="webinars_signup_box"><div style="padding:12px;">
    <form method="post" id="webinar_form">
        <div id="webinarClose"><a href="javascript:void(0);" onclick="return webinarConfirmClose();">X</a></div>
            <p id="webinars_top_text"><b>Sign up here</b><br />to be notified<br />of our upcoming<br />educational webinars</p>
            <p id="webinar_errors"></p>
            <p id="webinar_success"></p>
            <div style="text-align:center;">
                <input type="text" name="email" id="webinar_email" placeholder="Enter email address" autocomplete="off" />
                <input type="submit" id="webinars_notify_box" value="Notify Me" class="bcButton" />
            </div>
        </div>
    </form>
</div></div><script type="text/javascript">
    function makePlaceHolder() {
        if (! Modernizr.input.placeholder) {
            <!-- Adds placeholder text to HTML4 browsers -->
            jQuery('[placeholder]').focus(function() {
                var input = jQuery(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                    input.removeClass('placeholder');
                }
            }).blur(function() {
                var input = jQuery(this);
                if (input.val() == '' || input.val() == input.attr('placeholder')) {
                    input.addClass('placeholder');
                    input.val(input.attr('placeholder'));
                }
            }).blur();
            jQuery('[placeholder]').parents('form').submit(function() {
                jQuery(this).find('[placeholder]').each(function() {
                    var input = jQuery(this);
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                })
            });
        }
    }
    jQuery(document).ready(function() {
        jQuery('*[class*="datatable"]').datasort({ flipcharts: 'frmFlipCharts'});
        makePlaceHolder();
    });
</script>
<div id="fb-root"></div>
<script type='text/javascript'>
    window.fbRegisterURL = '/fbRegister.php';
    window.fbAsyncInit = function() {
        FB.init({appId: '167945536583134', status: false, cookie: true, xfbml: true, oauth: true});
        FB.Event.subscribe('auth.statusChange', function(response) {
            if (response.status == 'connected') {
                jQuery('#modal').addClass('fbLoginModal').jqm({modal: true, onShow: showModal, onHide:hideModal}).center().jqmShow();;
                if(window.fbRegisterURL.indexOf('ajax=1')!= -1 ){
                    jQuery('#modal').load(window.fbRegisterURL);
                } else {
                    window.location = window.fbRegisterURL;
                }
            }
        });
        if (window.fbOnLoad != undefined) {
            window.fbOnLoad();
        }
    };
    (function() {
        var e = document.createElement('script'); e.async = true;
        e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
        document.getElementById('fb-root').appendChild(e);
    }());
</script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    var pluginUrl = '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
    _gaq.push(['_require', 'inpage_linkid', pluginUrl]);
    _gaq.push(['_setAccount', 'UA-2009749-12']);
        _gaq.push(['_trackPageview']);
    //_gaq.push(['_trackPageview', '/register.php?ajax=1']);
    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    _bizo_data_partner_id = "2594";
    (function(){var b,a,u;a=document.createElement("script");a.type="text/javascript";a.async=true;u=(window.location.protocol==="https:"?"https://sjs.":"http://js.")+"bizographics.com/insight.min.js";a.src=u;b=document.getElementsByTagName("script")[0];return b.parentNode.insertBefore(a,b)})();
</script><script src="http://tags.crwdcntrl.net/c/3092/cc_af.js"></script>

    <!-- STICKY FOOTER START -->
    <link rel="stylesheet" href="/shared/css/stickyfooter.css?v=20" type="text/css" />
    <script type="text/javascript" src="//s3.amazonaws.com/js1.aws.barchart.com/jqUtilities/jquery.cycle.all.js?v=20"></script>
    <script type="text/javascript">
                // Stocks and Futures for Sticky Footer
        var topstocks = ['FB','ARCP','BAC','INTC','PBR','ALU'];
        var topfutures = ['GC*0','SI*0','ZC*0','ZS*0','CL*0','NG*0'];
    </script>
    <script type="text/javascript" src="//s3.amazonaws.com/js2.aws.barchart.com/display/stickyfooter.js?v=20"></script>
            <div id="dmgfooter" class="dmgfooterProp" style="display: none;">
            <div class="ftnewssection"><span class="ftbold">News:</span></div>
            <div class="ftheadlinesection ftfirst">
                <div id="newsticker" style="width: 190px; height: 40px;"><div style="display:none;"><a href="/headlines/story/3241099/malaysia-airlines-sued-by-2-boys-over-flight-370">Malaysia Airlines sued by 2 boys over Flight 370</a> <span class="byline">AP - 2 mins ago</span></div><div style="display:none;"><a href="/headlines/story/3241108/japan-s-central-bank-steps-up-asset-purchases-expanding-monetary-easing-to-shore-up-growth">Japan's central bank steps up asset purchases, expanding monetary easing to shore up growth</a> <span class="byline">AP - 8 mins ago</span></div><div style="display:none;"><a href="/headlines/story/3239960/japan-s-inflation-slips-as-jobless-rate-edges-up">Japan's inflation slips as jobless rate edges up</a> <span class="byline">AP - 17 mins ago</span></div><div style="display:none;"><a href="/headlines/story/3240884/beijing-hosts-regional-conference-on-afghanistan">Beijing hosts regional conference on Afghanistan</a> <span class="byline">AP - 50 mins ago</span></div><div style="display:none;"><a href="/headlines/story/3215252/asia-stocks-gain-after-robust-us-growth-report">Asia stocks gain after robust US growth report</a> <span class="byline">AP - 55 mins ago</span></div><div style="display:none;"><a href="/headlines/story/3240828/wal-mart-ups-ante-on-holiday-shopping">Wal-Mart ups ante on holiday shopping</a> <span class="byline">AP - 58 mins ago</span></div><div style="display:none;"><a href="/headlines/story/3240539/reports-of-armed-man-at-boeing-plant-in-washington">Reports of armed man at Boeing plant in Washington</a> <span class="byline">AP - 1 hr 4 mins ago</span></div><div style="display:none;"><a href="/headlines/story/3240379/lawsuit-surgical-gowns-let-diseases-pass-through">Lawsuit: Surgical gowns let diseases pass through</a> <span class="byline">AP - 1 hr 39 mins ago</span></div><div style="display:none;"><a href="/headlines/story/3240462/cogobuy-group-2014-3q-business-update">Cogobuy Group 2014 3Q Business Update</a> <span class="byline">PR Newswire - 2 hrs 2 mins ago</span></div><div style="display:none;"><a href="/headlines/story/3238927/nevada-court-says-strip-club-dancers-are-employees">Nevada court says Strip club dancers are employees</a> <span class="byline">AP - 2 hrs 53 mins ago</span></div></div>            </div>
            <div class="ftsection">
                <div class="stickysym"><span class="ftbold" id="stickysymbol1" title=""></span></div><div class="stickyprc"><span id="stickysymbol1price"></span></div><br/>
                <div class="stickysym"><span class="ftbold" id="stickysymbol4" title=""></span></div><div class="stickyprc"><span id="stickysymbol4price"></span></div>
            </div>
            <div class="ftsection">
                <div class="stickysym"><span class="ftbold" id="stickysymbol2" title=""></span></div><div class="stickyprc"><span id="stickysymbol2price"></span></div><br/>
                <div class="stickysym"><span class="ftbold" id="stickysymbol5" title=""></span></div><div class="stickyprc"><span id="stickysymbol5price"></span></div>
            </div>
            <div class="ftsection">
                <div class="stickysym"><span class="ftbold" id="stickysymbol3" title=""></span></div><div class="stickyprc"><span id="stickysymbol3price"></span></div><br/>
                <div class="stickysym"><span class="ftbold" id="stickysymbol6" title=""></span></div><div class="stickyprc"><span id="stickysymbol6price"></span></div>
            </div>
            <div class="ftnewssection">
                <img id="stickyfootersettings" src="//s3.amazonaws.com/images1.aws.barchart.com/barchart/settings-inactive.png?v=20">
            </div>            <div class="ftnewssection">
                <iframe src="//adserver.barchart.com/adframe.jsx?site=House-170x40" width="170" height="40" frameborder="0" scrolling="no"></iframe>
                <script type="text/javascript" language="javascript" src="//adserver.barchart.com/adscript.jsx?site=Tracking-BC-Footer"></script>
            </div>
            <div class="ftnewssection ftad ftlast">
                <img id="stickyfooterminimize" title="Click the arrow to minimize the Barchart Data Ticker." src="//s3.amazonaws.com/images1.aws.barchart.com/barchart/arrow-down.gif?v=20"><br/>
                <img id="stickyfooterclose" style="margin-top: 18px;" title="Click this arrow to close the Barchart Data Ticker." src="//s3.amazonaws.com/images1.aws.barchart.com/barchart/delete_inactive_small.png?v=20">
            </div>
        </div>
        <div id="stickyfooteropen" class="stickyfooteropenProp" style="display:none;"><img title="Click the arrow to open or close the Barchart Data Ticker." src="//s3.amazonaws.com/images2.aws.barchart.com/barchart/arrow-up.gif?v=20"></div>
        <div id="stickysettingsbox" style="display: none;">
            <strong>Symbols:</strong><br/>
            <input type="radio" class="stickygroup" name="stickygroup" value="topstocks"> Top Stocks<br>
            <input type="radio" class="stickygroup" name="stickygroup" value="futuremarkets"> Futures Markets<br>
            <input type="radio" class="stickygroup" name="stickygroup" value="other"> My Stocks<br/>
            <input type="text" name="stickyfooter1" id="stickyfooter1" style="text-transform: uppercase; width: 56px; float:left; margin-top: 4px; margin-right: 4px;" />
            <input type="text" name="stickyfooter2" id="stickyfooter2" style="text-transform: uppercase; width: 56px; float:left; margin-top: 4px; margin-right: 4px;" />
            <input type="text" name="stickyfooter3" id="stickyfooter3" style="text-transform: uppercase; width: 56px; margin-top: 4px; float:left;" />
            <div style="clear: both;"></div>
            <input type="text" name="stickyfooter4" id="stickyfooter4" style="text-transform: uppercase; width: 56px; float:left; margin-top: 4px; margin-right: 4px;" />
            <input type="text" name="stickyfooter5" id="stickyfooter5" style="text-transform: uppercase; width: 56px; float:left; margin-top: 4px; margin-right: 4px;" />
            <input type="text" name="stickyfooter6" id="stickyfooter6" style="text-transform: uppercase; width: 56px; margin-top: 4px; float:left;" />
            <div style="clear: both;"></div>
            <span class="bcButton" style="margin-top: 4px; margin-right: 4px; float:left;" id="stickysave">Save</span> <span class="bcButton" style="margin-top: 4px; float:left;" id="stickycancel">Cancel</span>
        </div>
        <!-- STICKY FOOTER END -->


<!-- Begin comScore Tag -->
<script>
    var _comscore = _comscore || [];
    _comscore.push({ c1: "2", c2: "16807273" });
    (function() {
        var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
        s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
        el.parentNode.insertBefore(s, el);
    })();
</script>
<noscript>
    <img src="http://b.scorecardresearch.com/p?c1=2&c2=16807273&cv=2.0&cj=1" />
</noscript>
<!-- End comScore Tag -->

</body>
</html>
