<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7]><html class="ie6"><![endif]-->
<!--[if IE 7]><html class="ie7"><![endif]-->
<!--[if IE 8]><html class="ie8"><![endif]-->
<!--[if gt IE 8]><!--><html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml"><!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="description" content="New highs list showing 52 week high prices for the NYSE, Nasdaq, AMEX, OTCBB." />
<meta name="keywords" content="52 week high, 52 week highs, 52 week lows, 52 week high low, stock analysis, high low stock, high low stocks, stock 52 week high, new highs new lows, NYSE 52 week high, Nasdaq 52 week high, new highs list" />
<meta name="robots" content="all,follow" />
<meta name="rating" content="Safe for Kids" />
<link rel="meta" href="/shared/rdf/labels.rdf" type="application/rdf+xml" title="ICRA labels" />
<meta http-equiv="pics-Label" content='(pics-1.1 "http://www.icra.org/pics/vocabularyv03/" l gen true for "http://www.barchart.com" r (n 0 s 0 v 0 l 0 oa 0 ob 0 oc 0 od 0 oe 0 of 0 og 0 oh 0 c 0) gen true for "http://www.www.barchart.com" r (n 0 s 0 v 0 l 0 oa 0 ob 0 oc 0 od 0 oe 0 of 0 og 0 oh 0 c 0))' />
<title>52 Week Highs – Stocks with new highs</title>

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
    <div class="logoarea"><div class="logo"><a href="/"><img src="//s3.amazonaws.com/images1.aws.barchart.com/barchart/barchart_logo1.gif?v=20" alt="Barchart.com" width="210" height="50" border="0" longdesc="http://www.barchart.com" /></a></div><div class="noprint" align="center" style="padding-top: 8px"><iframe width="728" height="90" frameBorder="0" scrolling="no" src="/ads/iframe.php?url=http%3A%2F%2Fad.doubleclick.net%2Fadj%2Fdmg.barchart%2Fstocks%3Bsec%3D%3Bcat%3D%3Burl%3D%3Bkw%3D%3Bdcopt%3Dist%3Bpos%3Dtop%3Bsz%3D728x90%3Btile%3D1%3Bord%3D27758343"><script type="text/javascript" src='http://ad.doubleclick.net/adj/dmg.barchart/stocks;sec=;cat=;url=;kw=;dcopt=ist;pos=top;sz=728x90;tile=1;ord=27758343'></script></iframe></div></div><div class="menu"><ul><li ><a href="/">Home</a></li><li  class="current"><a href="/stocks/marketoverview" class="current">Stocks</a></li><li class="newOption"><a href="/options/overview" class="">Options</a></li><li ><a href="/etf/marketoverview">ETFs</a></li><li ><a href="/futures/marketoverview">Futures</a></li><li ><a href="/forex/marketoverview">Forex</a></li><li ><a href="/funds/marketoverview">Funds</a></li><li ><a href="/economy/index.php">Economy</a></li><li ><a href="/education/default.php">Education</a></li><li ><a href="/my/account/">My Barchart</a></li><li class='premiumTab'><span>Premium Services</span><div class='premium_products'><ul><li><a href="/options/bulls-eye-options/order?ref=NAVps" target="_blank">Bulls-eye Options</a></li><li><a href="/stocks/covered-calls/order?ref=NAVps" target="_blank">Advanced Options Screener</a></li><li><a href="/my/stock-alerts/?ref=NAVps" target="_blank">Strategic Alerts</a></li><li><a href="http://www.trendsinfutures.com/free_14_day_trial?ref=NAVps" target="_blank">Trends In Futures</a></li><li><a href="https://www.barchart.com/register/crbfms.php?ref=NAVps" target="_blank">Fundamental Market Service</a></li><li><a href="/trader/?trader_source=NAVps" target="_blank">Barchart Trader</a></li><li><a href="/upgrade_subs.php?source=NAVps" target="_blank">Barchart Premier</a></li></ul></div></li></ul></div><div class="submenu"><ul><li><a href="/stocks/marketoverview" class="subcurrent">Market Pulse</a></li><li><a href="/stocks/indices.php">Indices</a></li><li><a href="/stocks/signals/">Signals</a></li><li><a href="/stocks/hotstocks">Hot Stocks</a></li><li><a href="/stocks/sectors/">Sectors</a></li><li><a href="/blog/index.php">Stock Picks</a></li><li><a href="/headlines/">News &amp; Commentary</a></li><li><a href="/stocks/advanced-options">Advanced Options</a></li><li><a href="/my/screener/stock.php">Stock Screener</a></li></ul></div><div id="advertisement_0" class="advertisement" 
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
                        <iframe width="120" height="60" frameBorder="0" scrolling="no" src="/ads/iframe.php?url=http%3A%2F%2Fad.doubleclick.net%2Fadj%2Fdmg.barchart%2Fstocks%3Bmkt%3Dstocks%3Bpos%3Dtop%3Bsz%3D120x30%2C120x60%3Btile%3D2%3Bord%3D27758343">
                            <script type="text/javascript" src="//ad.doubleclick.net/adj/dmg.barchart/stocks;mkt=stocks;pos=top;sz=120x30,120x60;tile=2;ord=27758343"></script>
                            <script type="text/javascript">
                                <!--
                                if ((!document.images && navigator.userAgent.indexOf('Mozilla/2.') >= 0) ||	(navigator.userAgent.indexOf("WebTV") >= 0)) {
                                    document.write('<a href="//ad.doubleclick.net/jump/dmg.barchart/stocks;mkt=stocks;pos=top;sz=120x30,120x60;tile=2;ord=27758343">');
                                    document.write('<img src="//ad.doubleclick.net/ad/dmg.barchart/stocks;mkt=stocks;pos=top;sz=120x30,120x60;tile=2;ord=27758343"></a>');
                                }
                                //-->
                            </script>
                            <noscript>
                                <!-- for non JavaScript browsers and Netscape 2.x -->
                                <a href="http://ad.doubleclick.net/jump/dmg.barchart/stocks;mkt=stocks;pos=top;sz=120x30,120x60;tile=2;ord=27758343">
                                    <img src="//ad.doubleclick.net/ad/dmg.barchart/stocks;mkt=stocks;pos=top;sz=120x30,120x60;tile=2;ord=27758343" width="120" height="60" border="0">
                                </a>
                            </noscript>
                        </iframe>
                    </div>
                                <div class="break"></div>
                <div class="sidemenuhead">Market Pulse</div>
                <div class="sidelistmenu">
                    <ul>
                        <li><a href="/stocks/marketoverview">Market Overview</a></li><li><a href="/stocks/momentum.php">Momentum</a></li><li><a href="/stocks/newhilo.php">New Highs/Lows</a></li><li><a href="/stocks/high.php" class="current">52 Week Highs</a></li><li><a href="/stocks/low.php">52 Week Lows</a></li><li><a href="/stocks/athigh.php">All Time Highs</a></li><li><a href="/stocks/atlow.php">All Time Lows</a></li><li><a href="/stocks/vleaders.php">Volume Leaders</a></li><li><a href="/stocks/percentadvance.php">Percent Advances</a></li><li><a href="/stocks/percentdecline.php">Percent Declines</a></li><li><a href="/stocks/priceadvance.php">Price Advances</a></li><li><a href="/stocks/pricedecline.php">Price Declines</a></li><li><a href="/stocks/rangeadvance.php">Range Advances</a></li><li><a href="/stocks/rangedecline.php">Range Declines</a></li><li><a href="/stocks/gapup.php">Gap Up Stocks</a></li><li><a href="/stocks/gapdown.php">Gap Down Stocks</a></li><li><a href="/stocks/pricevol.php">Price Volume</a></li><li><a href="/stocks/volumeadvance.php">Volume Advances</a></li><li><a href="/stocks/toptrading.php">Top Trading Stocks</a></li><li><div class="sidemenuhead">Performance</div></li><li><a href="/stocks/performance/ytd.php">YTD Change</a></li><li><a href="/stocks/performance/5day.php">5-Day Leaders</a></li><li><a href="/stocks/performance/1month.php">1-Month Leaders</a></li><li><a href="/stocks/performance/3month.php">3-Month Leaders</a></li><li><a href="/stocks/performance/6month.php">6-Month Leaders</a></li><li><a href="/stocks/performance/9month.php">9-Month Leaders</a></li><li><a href="/stocks/performance/12month.php">12-Month Leaders</a></li><li><a href="/stocks/performance/3year.php">3-Year Leaders</a></li><li><a href="/stocks/performance/5year.php">5-Year Leaders</a></li><li><a href="/stocks/performance/10year.php">10-Year Leaders</a></li><li><div class="sidemenuhead">Decliners</div></li><li><a href="/stocks/performance/ytd.php?decliners=show">YTD Change</a></li><li><a href="/stocks/performance/5day.php?decliners=show">5-Day Leaders</a></li><li><a href="/stocks/performance/1month.php?decliners=show">1-Month Leaders</a></li><li><a href="/stocks/performance/3month.php?decliners=show">3-Month Leaders</a></li><li><a href="/stocks/performance/6month.php?decliners=show">6-Month Leaders</a></li><li><a href="/stocks/performance/9month.php?decliners=show">9-Month Leaders</a></li><li><a href="/stocks/performance/12month.php?decliners=show">12-Month Leaders</a></li><li><a href="/stocks/performance/3year.php?decliners=show">3-Year Leaders</a></li><li><a href="/stocks/performance/5year.php?decliners=show">5-Year Leaders</a></li><li><a href="/stocks/performance/10year.php?decliners=show">10-Year Leaders</a></li><li><div class="sidemenuhead">More Stocks</div></li><li><a href="/stocks/indices.php">Indices</a></li><li><a href="/stocks/signals">Signals</a></li><li><a href="/stocks/hotstocks">Hot Stocks</a></li><li><a href="/stocks/sectors">Sectors</a></li><li><a href="/blog/index.php">Stock Picks</a></li><li><a href="/headlines/">News &amp; Commentary</a></li><li><a href="/stocks/covered-calls">Covered Calls</a></li><li><a href="/my/screener/stock.php">Stock Screener</a></li>                    </ul>
                </div>
                <br /><div class="noprint" align="center"><script type="text/javascript" src='http://ad.doubleclick.net/adj/dmg.barchart/stocks;sec=;cat=;url=;kw=;dcopt=;pos=bottom;sz=160x600;tile=3;ord=27758343'></script><br /><br /><br /></div>            </div>
        </td>
        <td class="maincol">
    <div class='location'><div class="crumbs">YOU ARE HERE:&nbsp; <a href="/stocks/marketoverview">Stocks</a>&nbsp;&raquo;&nbsp;<a href="/stocks/marketoverview">Market Pulse</a>&nbsp;&raquo;&nbsp;52 Week Highs</div>        <div class="share noprint">
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
		if (Barchart.Data.DataMaster) Barchart.Data.DataMaster.addSymbols(com.barchart.QuoteTableListener('1'), ['AAP','AAPL','AAT','ABC','ABCB','ADP','ADPT','AEC','AEE','AEP','AGN','AIV','AKR','ALE','ALGT','ALK','ALL','ALSN','AMBA','AMRE','AMRI','ANIP','ARE','ATNI','ATO','AVB','AVX','AWK','AWR','BABA','BAM','BEE','BERY','BFS','BIN','BJRI','BLK','BLKB','BMRN','BPY','BR','BRKS','BSET','BUSE','BXP','CBOE','CBPO','CDR','CFFN','CFG','CHD','CHSP','CI','CLC','CLDT','CLMS','CLX','CME','CMN','CMS','CNNX','CONE','COR','CPT','CRAI','CRL','CSL','CTB','CTCT','CTP','CUBE','CVA','CWT','CXW','CYBR','DCT','DENN','DLX','DOC','DPZ','DRE','DRH','DSPG','DTE','EA','EDR','EGP','EIX','ELS','ENFC','EQR','ERIE','ESE','ESPR','ESS','EXR','FCH','FDS','FII','FR'], ['AAP','AAPL','AAT','ABC','ABCB','ADP','ADPT','AEC','AEE','AEP','AGN','AIV','AKR','ALE','ALGT','ALK','ALL','ALSN','AMBA','AMRE','AMRI','ANIP','ARE','ATNI','ATO','AVB','AVX','AWK','AWR','BABA','BAM','BEE','BERY','BFS','BIN','BJRI','BLK','BLKB','BMRN','BPY','BR','BRKS','BSET','BUSE','BXP','CBOE','CBPO','CDR','CFFN','CFG','CHD','CHSP','CI','CLC','CLDT','CLMS','CLX','CME','CMN','CMS','CNNX','CONE','COR','CPT','CRAI','CRL','CSL','CTB','CTCT','CTP','CUBE','CVA','CWT','CXW','CYBR','DCT','DENN','DLX','DOC','DPZ','DRE','DRH','DSPG','DTE','EA','EDR','EGP','EIX','ELS','ENFC','EQR','ERIE','ESE','ESPR','ESS','EXR','FCH','FDS','FII','FR']);
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
<span class="help_fr"><a onclick="popWin('/education/help/stocks_highslows.php', 800, 600, 'helpWin'); return false;" href="#"><img src="/shared/images/helpme.gif" alt="View Help" border="0" title="View Help" width="45" height="12" /></a></span>
<h1>US Exchanges 52 Week Highs<span class="time"><span id="dtaDate">Mon, Nov 3rd, 2014</span></span></h1>

<div class="smgrey">Stocks that have traded for a year that have matched or made a new 52-Week High during the current trading session.</div>
	<div class="stickynote"><strong><center><a href="/my/stock-alerts/?source=STK_HL">Barchart Strategic Alerts - Technical and fundamental alerts sent to your phone and email - Try it now</a></center></strong></div>

</div>
<div class="flip_header">
<a href="/?modal=register.php%3Fref=excel%26ajax=1" class="flipcharts"><img src="/shared/images/excel.gif" alt="Export Data" border="0" title="Export Data" border="0" /></a><form id="frmFlipCharts" method="post" action="/flipcharts.php">
	<input type="hidden" name="style" value="flip" />
	<input type="hidden" name="symbols" value="AAP,AAPL,AAT,ABC,ABCB,ADP,ADPT,AEC,AEE,AEP,AGN,AIV,AKR,ALE,ALGT,ALK,ALL,ALSN,AMBA,AMRE,AMRI,ANIP,ARE,ATNI,ATO,AVB,AVX,AWK,AWR,BABA,BAM,BEE,BERY,BFS,BIN,BJRI,BLK,BLKB,BMRN,BPY,BR,BRKS,BSET,BUSE,BXP,CBOE,CBPO,CDR,CFFN,CFG,CHD,CHSP,CI,CLC,CLDT,CLMS,CLX,CME,CMN,CMS,CNNX,CONE,COR,CPT,CRAI,CRL,CSL,CTB,CTCT,CTP,CUBE,CVA,CWT,CXW,CYBR,DCT,DENN,DLX,DOC,DPZ,DRE,DRH,DSPG,DTE,EA,EDR,EGP,EIX,ELS,ENFC,EQR,ERIE,ESE,ESPR,ESS,EXR,FCH,FDS,FII,FR" />
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
<li onclick="location.href = '/stocks/high.php'">US Exchanges</li><li onclick="return false;">--By Market Cap--</li><li onclick="location.href = '/stocks/5bhigh.php'">Large Cap</li><li onclick="location.href = '/stocks/15bhigh.php'">Mid Cap</li><li onclick="location.href = '/stocks/1bhigh.php'">Small Cap</li><li onclick="location.href = '/stocks/250mhigh.php'">Micro Cap</li><li onclick="return false;">--By Exchange--</li><li onclick="location.href = '/stocks/nysehigh.php'">NYSE</li><li onclick="location.href = '/stocks/amexhigh.php'">AMEX</li><li onclick="location.href = '/stocks/nasdhigh.php'">Nasdaq</li><li onclick="location.href = '/stocks/etfhigh.php'">ETFs</li><li onclick="location.href = '/stocks/otchigh.php'">OTC/BB</li><li onclick="location.href = '/stocks/pinkhigh.php'">Pink Sheets</li><li onclick="location.href = '/stocks/tsxhigh.php'">Toronto (TSX)</li><li onclick="location.href = '/stocks/tsxvhigh.php'">Toronto Venture</li><li onclick="location.href = '/stocks/lsehigh.php'">London (LSE)</li><li onclick="location.href = '/stocks/nsihigh.php'">India (NSE)</li><li onclick="location.href = '/stocks/asxhigh.php'">Australia (ASX)</li>		</ul>
	</span>
	</div>
<div class='fr' style='padding-right: 5px; margin-top: 5px'><span id='divViewMenu'><strong>Main View</strong><span class="viewspace" ></span><a href='/stocks/high.php?view=technical'>Technical</a><span class="viewspace" ></span><a href='/stocks/high.php?view=performance'>Performance</a><span class="viewspace" ></span><a class='modal' href='/register.php?ref=views'>Custom View</a></span></div>	</div>
	<div class="mpbox" id="divContent">
	  	
<div class="xscroll">
<table class="datatable ajax" id="dt1" width="100%" border="0" cellpadding="1" cellspacing="1" data-largeTable="500" data-info="symbols=AAP,AAPL,AAT,ABC,ABCB,ADP,ADPT,AEC,AEE,AEP,AGN,AIV,AKR,ALE,ALGT,ALK,ALL,ALSN,AMBA,AMRE,AMRI,ANIP,ARE,ATNI,ATO,AVB,AVX,AWK,AWR,BABA,BAM,BEE,BERY,BFS,BIN,BJRI,BLK,BLKB,BMRN,BPY,BR,BRKS,BSET,BUSE,BXP,CBOE,CBPO,CDR,CFFN,CFG,CHD,CHSP,CI,CLC,CLDT,CLMS,CLX,CME,CMN,CMS,CNNX,CONE,COR,CPT,CRAI,CRL,CSL,CTB,CTCT,CTP,CUBE,CVA,CWT,CXW,CYBR,DCT,DENN,DLX,DOC,DPZ,DRE,DRH,DSPG,DTE,EA,EDR,EGP,EIX,ELS,ENFC,EQR,ERIE,ESE,ESPR,ESS,EXR,FCH,FDS,FII,FR,FRGI,FRT,GEO,GGP,GPC,GPN,GPX,GS,GSBC,GTIV,GTS,HA,HALL,HAWK,HCN,HCP,HDSN,HE,HIG,HIW,HNH,HOLX,HR,HRL,HTA,HZO,IART,IBN,IBOC,IDCC,INDB,INFN,INFY,INGN,INN,IQNT,IRDM,IT,JBHT,JLL,KIM,KITE,KMX,KR,KRC,KW,KWR,LBTYK,LBY,LCI,LE,LEAF,LEG,LG,LHO,LMT,LNT,LRCX,MAC,MCO,MCY,MDXG,MHFI,MKL,MLI,MMC,MMI,MNDO,MNR,MNST,MO,MOH,MPLX,MRGE,MTX,NATH,NAVI,NBCB,NCLH,NHI,NI,NJR,NNI,NNN,NP,OMAB,OMCL,ORBK,OZRK,PAYX,PCG,PCH,PDT,PEB,PEG,PEI,PFSW,PJC,PLOW,PLT,PLUS,PNW,PPS,PSA,PSEM,PSTB,PTX,PULB,PVTB,Q,QLYS,RAI,RDI,RDN,RDNT,RDWR,RE,REG,REXR,RFMD,RGA,RGLS,RHI,RJF,RLJ,ROG,ROIC,ROL,ROP,RPT,RUSHA,RVSB,SAIC,SANM,SAPE,SAVE,SCG,SCSS,SEIC,SFG,SHO,SHW,SJW,SLG,SLM,SMCI,SPB,SPG,SPR,SRCL,SRE,SSBI,SSNC,SSS,STBA,STE,STX,SUI,SWKS,SWX,SXT,SYF,SYMC,TDY,TEVA,TGS,THG,TMH,TQNT,TREC,TREX,TRNO,TSO,TSQ,TSS,TTWO,TXRH,TYL,UAL,UDR,UGI,UHT,USLM,UTL,UVE,V,VAL,VDSI,VIPS,VNO,VPRT,VRNT,VVC,WAB,WAL,WASH,WEC,WERN,WLP,WRB,WRI,WSBF,WTR,XEL,Y,YHOO,ZAGG,ZMH;columns=symbol,name,last,change,pctchange,high,low,volume,displaytime;mode=I;reqid=1;bgChange=;view=" data-fieldRules="name[maxlength]=40;" data-extraFields="" data-pageSize="100" data-perfLinks="N%3B"><thead>  <tr class="datatable_header" id="dt1_column">    <th rel="text" id="dt11_column_symbol" align="left" class="ds_symbol sort_none">Sym</th>
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
</thead><tbody>  <tr id="dt1_AAP" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AAP">AAP</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AAP">Advance Auto Parts Inc</a></td>
    <td id="dt1_AAP_last" align="right" class="ds_last qb_shad" nowrap="nowrap">148.45</td>
    <td id="dt1_AAP_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.49</span></td>
    <td id="dt1_AAP_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.01%</span></td>
    <td id="dt1_AAP_high" align="right" class="ds_high qb_shad" nowrap="nowrap">149.30</td>
    <td id="dt1_AAP_low" align="right" class="ds_low qb_shad" nowrap="nowrap">147.26</td>
    <td id="dt1_AAP_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">556,918</td>
    <td id="dt1_AAP_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:38</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/AAP" title="Detailed Quote for AAP"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AAP" title="Chart for AAP"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AAP" title="Opinion for AAP"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AAP" title="Cheat Sheet for AAP"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_AAPL" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/AAPL">AAPL</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/AAPL">Apple Inc</a></td>
    <td id="dt1_AAPL_last" align="right" class="ds_last qb_line" nowrap="nowrap">109.79</td>
    <td id="dt1_AAPL_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.79</span></td>
    <td id="dt1_AAPL_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.66%</span></td>
    <td id="dt1_AAPL_high" align="right" class="ds_high qb_line" nowrap="nowrap">109.90</td>
    <td id="dt1_AAPL_low" align="right" class="ds_low qb_line" nowrap="nowrap">108.01</td>
    <td id="dt1_AAPL_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">37,057,879</td>
    <td id="dt1_AAPL_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/AAPL" title="Detailed Quote for AAPL"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AAPL" title="Chart for AAPL"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AAPL" title="Opinion for AAPL"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AAPL" title="Cheat Sheet for AAPL"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_AAT" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AAT">AAT</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AAT">American Assets Trust</a></td>
    <td id="dt1_AAT_last" align="right" class="ds_last qb_shad" nowrap="nowrap">38.76</td>
    <td id="dt1_AAT_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.42</span></td>
    <td id="dt1_AAT_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.10%</span></td>
    <td id="dt1_AAT_high" align="right" class="ds_high qb_shad" nowrap="nowrap">38.82</td>
    <td id="dt1_AAT_low" align="right" class="ds_low qb_shad" nowrap="nowrap">37.83</td>
    <td id="dt1_AAT_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">91,323</td>
    <td id="dt1_AAT_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:38</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/AAT" title="Detailed Quote for AAT"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AAT" title="Chart for AAT"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AAT" title="Opinion for AAT"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AAT" title="Cheat Sheet for AAT"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ABC" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/ABC">ABC</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/ABC">Amerisourcebergen Corp</a></td>
    <td id="dt1_ABC_last" align="right" class="ds_last qb_line" nowrap="nowrap">86.75</td>
    <td id="dt1_ABC_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.34</span></td>
    <td id="dt1_ABC_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.57%</span></td>
    <td id="dt1_ABC_high" align="right" class="ds_high qb_line" nowrap="nowrap">86.96</td>
    <td id="dt1_ABC_low" align="right" class="ds_low qb_line" nowrap="nowrap">85.58</td>
    <td id="dt1_ABC_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">1,167,861</td>
    <td id="dt1_ABC_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/ABC" title="Detailed Quote for ABC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ABC" title="Chart for ABC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ABC" title="Opinion for ABC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ABC" title="Cheat Sheet for ABC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ABCB" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ABCB">ABCB</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ABCB">Ameris Bancorp</a></td>
    <td id="dt1_ABCB_last" align="right" class="ds_last qb_shad" nowrap="nowrap">25.05</td>
    <td id="dt1_ABCB_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.25</span></td>
    <td id="dt1_ABCB_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.01%</span></td>
    <td id="dt1_ABCB_high" align="right" class="ds_high qb_shad" nowrap="nowrap">25.16</td>
    <td id="dt1_ABCB_low" align="right" class="ds_low qb_shad" nowrap="nowrap">24.67</td>
    <td id="dt1_ABCB_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">59,546</td>
    <td id="dt1_ABCB_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:33</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/ABCB" title="Detailed Quote for ABCB"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ABCB" title="Chart for ABCB"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ABCB" title="Opinion for ABCB"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ABCB" title="Cheat Sheet for ABCB"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ADP" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/ADP">ADP</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/ADP">Automatic Data Processing</a></td>
    <td id="dt1_ADP_last" align="right" class="ds_last qb_line" nowrap="nowrap">81.73</td>
    <td id="dt1_ADP_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_down">-0.05</span></td>
    <td id="dt1_ADP_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_down">-0.06%</span></td>
    <td id="dt1_ADP_high" align="right" class="ds_high qb_line" nowrap="nowrap">82.47</td>
    <td id="dt1_ADP_low" align="right" class="ds_low qb_line" nowrap="nowrap">81.49</td>
    <td id="dt1_ADP_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">1,418,308</td>
    <td id="dt1_ADP_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/ADP" title="Detailed Quote for ADP"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ADP" title="Chart for ADP"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ADP" title="Opinion for ADP"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ADP" title="Cheat Sheet for ADP"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ADPT" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ADPT">ADPT</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ADPT">Adeptus Health Inc.</a></td>
    <td id="dt1_ADPT_last" align="right" class="ds_last qb_shad" nowrap="nowrap">35.69</td>
    <td id="dt1_ADPT_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+2.51</span></td>
    <td id="dt1_ADPT_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+7.56%</span></td>
    <td id="dt1_ADPT_high" align="right" class="ds_high qb_shad" nowrap="nowrap">35.93</td>
    <td id="dt1_ADPT_low" align="right" class="ds_low qb_shad" nowrap="nowrap">33.25</td>
    <td id="dt1_ADPT_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">150,586</td>
    <td id="dt1_ADPT_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/ADPT" title="Detailed Quote for ADPT"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ADPT" title="Chart for ADPT"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ADPT" title="Opinion for ADPT"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ADPT" title="Cheat Sheet for ADPT"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_AEC" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/AEC">AEC</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/AEC">Associated Estates Realty Corp</a></td>
    <td id="dt1_AEC_last" align="right" class="ds_last qb_line" nowrap="nowrap">19.77</td>
    <td id="dt1_AEC_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.24</span></td>
    <td id="dt1_AEC_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.23%</span></td>
    <td id="dt1_AEC_high" align="right" class="ds_high qb_line" nowrap="nowrap">19.85</td>
    <td id="dt1_AEC_low" align="right" class="ds_low qb_line" nowrap="nowrap">19.44</td>
    <td id="dt1_AEC_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">162,875</td>
    <td id="dt1_AEC_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/AEC" title="Detailed Quote for AEC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AEC" title="Chart for AEC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AEC" title="Opinion for AEC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AEC" title="Cheat Sheet for AEC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_AEE" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AEE">AEE</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AEE">Ameren Corp</a></td>
    <td id="dt1_AEE_last" align="right" class="ds_last qb_shad" nowrap="nowrap">43.09</td>
    <td id="dt1_AEE_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.75</span></td>
    <td id="dt1_AEE_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.77%</span></td>
    <td id="dt1_AEE_high" align="right" class="ds_high qb_shad" nowrap="nowrap">43.28</td>
    <td id="dt1_AEE_low" align="right" class="ds_low qb_shad" nowrap="nowrap">42.30</td>
    <td id="dt1_AEE_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">981,600</td>
    <td id="dt1_AEE_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/AEE" title="Detailed Quote for AEE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AEE" title="Chart for AEE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AEE" title="Opinion for AEE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AEE" title="Cheat Sheet for AEE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_AEP" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/AEP">AEP</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/AEP">American Electric Power Company</a></td>
    <td id="dt1_AEP_last" align="right" class="ds_last qb_line" nowrap="nowrap">58.68</td>
    <td id="dt1_AEP_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.34</span></td>
    <td id="dt1_AEP_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.58%</span></td>
    <td id="dt1_AEP_high" align="right" class="ds_high qb_line" nowrap="nowrap">58.80</td>
    <td id="dt1_AEP_low" align="right" class="ds_low qb_line" nowrap="nowrap">58.22</td>
    <td id="dt1_AEP_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">916,914</td>
    <td id="dt1_AEP_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/AEP" title="Detailed Quote for AEP"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AEP" title="Chart for AEP"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AEP" title="Opinion for AEP"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AEP" title="Cheat Sheet for AEP"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_AGN" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AGN">AGN</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AGN">Allergan Inc</a></td>
    <td id="dt1_AGN_last" align="right" class="ds_last qb_shad" nowrap="nowrap">192.34</td>
    <td id="dt1_AGN_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+2.28</span></td>
    <td id="dt1_AGN_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.20%</span></td>
    <td id="dt1_AGN_high" align="right" class="ds_high qb_shad" nowrap="nowrap">193.57</td>
    <td id="dt1_AGN_low" align="right" class="ds_low qb_shad" nowrap="nowrap">188.62</td>
    <td id="dt1_AGN_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">1,947,152</td>
    <td id="dt1_AGN_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/AGN" title="Detailed Quote for AGN"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AGN" title="Chart for AGN"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AGN" title="Opinion for AGN"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AGN" title="Cheat Sheet for AGN"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_AIV" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/AIV">AIV</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/AIV">Apartment Investment and Management</a></td>
    <td id="dt1_AIV_last" align="right" class="ds_last qb_line" nowrap="nowrap">36.13</td>
    <td id="dt1_AIV_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.34</span></td>
    <td id="dt1_AIV_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.95%</span></td>
    <td id="dt1_AIV_high" align="right" class="ds_high qb_line" nowrap="nowrap">36.17</td>
    <td id="dt1_AIV_low" align="right" class="ds_low qb_line" nowrap="nowrap">35.85</td>
    <td id="dt1_AIV_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">718,570</td>
    <td id="dt1_AIV_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/AIV" title="Detailed Quote for AIV"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AIV" title="Chart for AIV"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AIV" title="Opinion for AIV"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AIV" title="Cheat Sheet for AIV"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_AKR" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AKR">AKR</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AKR">Acadia Realty Trust</a></td>
    <td id="dt1_AKR_last" align="right" class="ds_last qb_shad" nowrap="nowrap">32.08</td>
    <td id="dt1_AKR_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.88</span></td>
    <td id="dt1_AKR_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+2.82%</span></td>
    <td id="dt1_AKR_high" align="right" class="ds_high qb_shad" nowrap="nowrap">32.13</td>
    <td id="dt1_AKR_low" align="right" class="ds_low qb_shad" nowrap="nowrap">31.15</td>
    <td id="dt1_AKR_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">223,123</td>
    <td id="dt1_AKR_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:37</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/AKR" title="Detailed Quote for AKR"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AKR" title="Chart for AKR"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AKR" title="Opinion for AKR"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AKR" title="Cheat Sheet for AKR"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ALE" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/ALE">ALE</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/ALE">Allete Inc</a></td>
    <td id="dt1_ALE_last" align="right" class="ds_last qb_line" nowrap="nowrap">52.23</td>
    <td id="dt1_ALE_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_down">-0.01</span></td>
    <td id="dt1_ALE_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_down">-0.02%</span></td>
    <td id="dt1_ALE_high" align="right" class="ds_high qb_line" nowrap="nowrap">53.26</td>
    <td id="dt1_ALE_low" align="right" class="ds_low qb_line" nowrap="nowrap">52.06</td>
    <td id="dt1_ALE_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">114,365</td>
    <td id="dt1_ALE_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/ALE" title="Detailed Quote for ALE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ALE" title="Chart for ALE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ALE" title="Opinion for ALE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ALE" title="Cheat Sheet for ALE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ALGT" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ALGT">ALGT</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ALGT">Allegiant Travel Company</a></td>
    <td id="dt1_ALGT_last" align="right" class="ds_last qb_shad" nowrap="nowrap">133.59</td>
    <td id="dt1_ALGT_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.12</span></td>
    <td id="dt1_ALGT_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.09%</span></td>
    <td id="dt1_ALGT_high" align="right" class="ds_high qb_shad" nowrap="nowrap">135.07</td>
    <td id="dt1_ALGT_low" align="right" class="ds_low qb_shad" nowrap="nowrap">132.34</td>
    <td id="dt1_ALGT_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">90,683</td>
    <td id="dt1_ALGT_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/ALGT" title="Detailed Quote for ALGT"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ALGT" title="Chart for ALGT"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ALGT" title="Opinion for ALGT"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ALGT" title="Cheat Sheet for ALGT"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ALK" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/ALK">ALK</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/ALK">Alaska Air Group</a></td>
    <td id="dt1_ALK_last" align="right" class="ds_last qb_line" nowrap="nowrap">54.05</td>
    <td id="dt1_ALK_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.82</span></td>
    <td id="dt1_ALK_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.54%</span></td>
    <td id="dt1_ALK_high" align="right" class="ds_high qb_line" nowrap="nowrap">54.24</td>
    <td id="dt1_ALK_low" align="right" class="ds_low qb_line" nowrap="nowrap">53.11</td>
    <td id="dt1_ALK_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">999,403</td>
    <td id="dt1_ALK_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/ALK" title="Detailed Quote for ALK"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ALK" title="Chart for ALK"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ALK" title="Opinion for ALK"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ALK" title="Cheat Sheet for ALK"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ALL" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ALL">ALL</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ALL">Allstate Corp</a></td>
    <td id="dt1_ALL_last" align="right" class="ds_last qb_shad" nowrap="nowrap">64.72</td>
    <td id="dt1_ALL_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_down">-0.13</span></td>
    <td id="dt1_ALL_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_down">-0.20%</span></td>
    <td id="dt1_ALL_high" align="right" class="ds_high qb_shad" nowrap="nowrap">65.00</td>
    <td id="dt1_ALL_low" align="right" class="ds_low qb_shad" nowrap="nowrap">64.50</td>
    <td id="dt1_ALL_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">1,151,173</td>
    <td id="dt1_ALL_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/ALL" title="Detailed Quote for ALL"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ALL" title="Chart for ALL"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ALL" title="Opinion for ALL"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ALL" title="Cheat Sheet for ALL"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ALSN" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/ALSN">ALSN</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/ALSN">Allison Transmission Holdings</a></td>
    <td id="dt1_ALSN_last" align="right" class="ds_last qb_line" nowrap="nowrap">33.06</td>
    <td id="dt1_ALSN_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.58</span></td>
    <td id="dt1_ALSN_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.79%</span></td>
    <td id="dt1_ALSN_high" align="right" class="ds_high qb_line" nowrap="nowrap">33.13</td>
    <td id="dt1_ALSN_low" align="right" class="ds_low qb_line" nowrap="nowrap">32.26</td>
    <td id="dt1_ALSN_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">2,268,478</td>
    <td id="dt1_ALSN_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/ALSN" title="Detailed Quote for ALSN"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ALSN" title="Chart for ALSN"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ALSN" title="Opinion for ALSN"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ALSN" title="Cheat Sheet for ALSN"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_AMBA" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AMBA">AMBA</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AMBA">Ambarella Inc</a></td>
    <td id="dt1_AMBA_last" align="right" class="ds_last qb_shad" nowrap="nowrap">47.35</td>
    <td id="dt1_AMBA_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+3.06</span></td>
    <td id="dt1_AMBA_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+6.91%</span></td>
    <td id="dt1_AMBA_high" align="right" class="ds_high qb_shad" nowrap="nowrap">47.45</td>
    <td id="dt1_AMBA_low" align="right" class="ds_low qb_shad" nowrap="nowrap">44.20</td>
    <td id="dt1_AMBA_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">2,105,900</td>
    <td id="dt1_AMBA_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/AMBA" title="Detailed Quote for AMBA"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AMBA" title="Chart for AMBA"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AMBA" title="Opinion for AMBA"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AMBA" title="Cheat Sheet for AMBA"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_AMRE" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/AMRE">AMRE</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/AMRE">Amreit Inc</a></td>
    <td id="dt1_AMRE_last" align="right" class="ds_last qb_line" nowrap="nowrap">26.36</td>
    <td id="dt1_AMRE_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.72</span></td>
    <td id="dt1_AMRE_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+6.98%</span></td>
    <td id="dt1_AMRE_high" align="right" class="ds_high qb_line" nowrap="nowrap">26.48</td>
    <td id="dt1_AMRE_low" align="right" class="ds_low qb_line" nowrap="nowrap">26.05</td>
    <td id="dt1_AMRE_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">1,550,387</td>
    <td id="dt1_AMRE_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:38</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/AMRE" title="Detailed Quote for AMRE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AMRE" title="Chart for AMRE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AMRE" title="Opinion for AMRE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AMRE" title="Cheat Sheet for AMRE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_AMRI" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AMRI">AMRI</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AMRI">Albany Molecular Research</a></td>
    <td id="dt1_AMRI_last" align="right" class="ds_last qb_shad" nowrap="nowrap">22.65</td>
    <td id="dt1_AMRI_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_down">-0.61</span></td>
    <td id="dt1_AMRI_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_down">-2.62%</span></td>
    <td id="dt1_AMRI_high" align="right" class="ds_high qb_shad" nowrap="nowrap">23.95</td>
    <td id="dt1_AMRI_low" align="right" class="ds_low qb_shad" nowrap="nowrap">22.65</td>
    <td id="dt1_AMRI_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">201,702</td>
    <td id="dt1_AMRI_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/AMRI" title="Detailed Quote for AMRI"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AMRI" title="Chart for AMRI"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AMRI" title="Opinion for AMRI"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AMRI" title="Cheat Sheet for AMRI"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ANIP" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/ANIP">ANIP</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/ANIP">ANI Pharmaceuticals Inc</a></td>
    <td id="dt1_ANIP_last" align="right" class="ds_last qb_line" nowrap="nowrap">39.23</td>
    <td id="dt1_ANIP_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+5.27</span></td>
    <td id="dt1_ANIP_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+15.52%</span></td>
    <td id="dt1_ANIP_high" align="right" class="ds_high qb_line" nowrap="nowrap">40.98</td>
    <td id="dt1_ANIP_low" align="right" class="ds_low qb_line" nowrap="nowrap">37.00</td>
    <td id="dt1_ANIP_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">1,062,496</td>
    <td id="dt1_ANIP_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/ANIP" title="Detailed Quote for ANIP"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ANIP" title="Chart for ANIP"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ANIP" title="Opinion for ANIP"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ANIP" title="Cheat Sheet for ANIP"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ARE" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ARE">ARE</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ARE">Alexandria Real Estate Equities</a></td>
    <td id="dt1_ARE_last" align="right" class="ds_last qb_shad" nowrap="nowrap">83.68</td>
    <td id="dt1_ARE_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.68</span></td>
    <td id="dt1_ARE_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.82%</span></td>
    <td id="dt1_ARE_high" align="right" class="ds_high qb_shad" nowrap="nowrap">83.82</td>
    <td id="dt1_ARE_low" align="right" class="ds_low qb_shad" nowrap="nowrap">82.57</td>
    <td id="dt1_ARE_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">243,080</td>
    <td id="dt1_ARE_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/ARE" title="Detailed Quote for ARE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ARE" title="Chart for ARE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ARE" title="Opinion for ARE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ARE" title="Cheat Sheet for ARE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ATNI" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/ATNI">ATNI</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/ATNI">Atlantic Tele-Network</a></td>
    <td id="dt1_ATNI_last" align="right" class="ds_last qb_line" nowrap="nowrap">68.74</td>
    <td id="dt1_ATNI_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.55</span></td>
    <td id="dt1_ATNI_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+2.31%</span></td>
    <td id="dt1_ATNI_high" align="right" class="ds_high qb_line" nowrap="nowrap">69.76</td>
    <td id="dt1_ATNI_low" align="right" class="ds_low qb_line" nowrap="nowrap">67.19</td>
    <td id="dt1_ATNI_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">52,295</td>
    <td id="dt1_ATNI_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:33</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/ATNI" title="Detailed Quote for ATNI"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ATNI" title="Chart for ATNI"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ATNI" title="Opinion for ATNI"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ATNI" title="Cheat Sheet for ATNI"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ATO" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ATO">ATO</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ATO">Atmos Energy Corp</a></td>
    <td id="dt1_ATO_last" align="right" class="ds_last qb_shad" nowrap="nowrap">53.58</td>
    <td id="dt1_ATO_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.58</span></td>
    <td id="dt1_ATO_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.09%</span></td>
    <td id="dt1_ATO_high" align="right" class="ds_high qb_shad" nowrap="nowrap">53.64</td>
    <td id="dt1_ATO_low" align="right" class="ds_low qb_shad" nowrap="nowrap">52.88</td>
    <td id="dt1_ATO_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">301,932</td>
    <td id="dt1_ATO_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/ATO" title="Detailed Quote for ATO"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ATO" title="Chart for ATO"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ATO" title="Opinion for ATO"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ATO" title="Cheat Sheet for ATO"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_AVB" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/AVB">AVB</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/AVB">Avalonbay Communities</a></td>
    <td id="dt1_AVB_last" align="right" class="ds_last qb_line" nowrap="nowrap">157.91</td>
    <td id="dt1_AVB_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+2.07</span></td>
    <td id="dt1_AVB_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.33%</span></td>
    <td id="dt1_AVB_high" align="right" class="ds_high qb_line" nowrap="nowrap">157.98</td>
    <td id="dt1_AVB_low" align="right" class="ds_low qb_line" nowrap="nowrap">155.90</td>
    <td id="dt1_AVB_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">486,643</td>
    <td id="dt1_AVB_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:38</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/AVB" title="Detailed Quote for AVB"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AVB" title="Chart for AVB"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AVB" title="Opinion for AVB"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AVB" title="Cheat Sheet for AVB"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_AVX" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AVX">AVX</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AVX">Avx Corp</a></td>
    <td id="dt1_AVX_last" align="right" class="ds_last qb_shad" nowrap="nowrap">14.41</td>
    <td id="dt1_AVX_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_down">-0.03</span></td>
    <td id="dt1_AVX_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_down">-0.21%</span></td>
    <td id="dt1_AVX_high" align="right" class="ds_high qb_shad" nowrap="nowrap">14.50</td>
    <td id="dt1_AVX_low" align="right" class="ds_low qb_shad" nowrap="nowrap">14.30</td>
    <td id="dt1_AVX_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">79,536</td>
    <td id="dt1_AVX_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/AVX" title="Detailed Quote for AVX"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AVX" title="Chart for AVX"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AVX" title="Opinion for AVX"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AVX" title="Cheat Sheet for AVX"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_AWK" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/AWK">AWK</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/AWK">American Water Works</a></td>
    <td id="dt1_AWK_last" align="right" class="ds_last qb_line" nowrap="nowrap">53.40</td>
    <td id="dt1_AWK_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.03</span></td>
    <td id="dt1_AWK_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.06%</span></td>
    <td id="dt1_AWK_high" align="right" class="ds_high qb_line" nowrap="nowrap">53.62</td>
    <td id="dt1_AWK_low" align="right" class="ds_low qb_line" nowrap="nowrap">53.22</td>
    <td id="dt1_AWK_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">303,270</td>
    <td id="dt1_AWK_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:38</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/AWK" title="Detailed Quote for AWK"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AWK" title="Chart for AWK"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AWK" title="Opinion for AWK"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AWK" title="Cheat Sheet for AWK"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_AWR" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AWR">AWR</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/AWR">American States Water Company</a></td>
    <td id="dt1_AWR_last" align="right" class="ds_last qb_shad" nowrap="nowrap">36.09</td>
    <td id="dt1_AWR_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.31</span></td>
    <td id="dt1_AWR_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.87%</span></td>
    <td id="dt1_AWR_high" align="right" class="ds_high qb_shad" nowrap="nowrap">36.18</td>
    <td id="dt1_AWR_low" align="right" class="ds_low qb_shad" nowrap="nowrap">35.80</td>
    <td id="dt1_AWR_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">43,995</td>
    <td id="dt1_AWR_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/AWR" title="Detailed Quote for AWR"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/AWR" title="Chart for AWR"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/AWR" title="Opinion for AWR"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=AWR" title="Cheat Sheet for AWR"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BABA" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/BABA">BABA</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/BABA">Alibaba Group Holding Ltd.</a></td>
    <td id="dt1_BABA_last" align="right" class="ds_last qb_line" nowrap="nowrap">102.40</td>
    <td id="dt1_BABA_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+3.80</span></td>
    <td id="dt1_BABA_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+3.85%</span></td>
    <td id="dt1_BABA_high" align="right" class="ds_high qb_line" nowrap="nowrap">102.80</td>
    <td id="dt1_BABA_low" align="right" class="ds_low qb_line" nowrap="nowrap">99.05</td>
    <td id="dt1_BABA_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">26,994,424</td>
    <td id="dt1_BABA_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/BABA" title="Detailed Quote for BABA"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BABA" title="Chart for BABA"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BABA" title="Opinion for BABA"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BABA" title="Cheat Sheet for BABA"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BAM" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BAM">BAM</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BAM">Brookfield Asset Management Inc</a></td>
    <td id="dt1_BAM_last" align="right" class="ds_last qb_shad" nowrap="nowrap">48.73</td>
    <td id="dt1_BAM_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_down">-0.24</span></td>
    <td id="dt1_BAM_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_down">-0.49%</span></td>
    <td id="dt1_BAM_high" align="right" class="ds_high qb_shad" nowrap="nowrap">49.51</td>
    <td id="dt1_BAM_low" align="right" class="ds_low qb_shad" nowrap="nowrap">48.73</td>
    <td id="dt1_BAM_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">270,577</td>
    <td id="dt1_BAM_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:38</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/BAM" title="Detailed Quote for BAM"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BAM" title="Chart for BAM"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BAM" title="Opinion for BAM"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BAM" title="Cheat Sheet for BAM"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BEE" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/BEE">BEE</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/BEE">Strategic Hotels & Resorts Inc</a></td>
    <td id="dt1_BEE_last" align="right" class="ds_last qb_line" nowrap="nowrap">13.05</td>
    <td id="dt1_BEE_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.20</span></td>
    <td id="dt1_BEE_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.56%</span></td>
    <td id="dt1_BEE_high" align="right" class="ds_high qb_line" nowrap="nowrap">13.19</td>
    <td id="dt1_BEE_low" align="right" class="ds_low qb_line" nowrap="nowrap">12.84</td>
    <td id="dt1_BEE_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">809,487</td>
    <td id="dt1_BEE_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/BEE" title="Detailed Quote for BEE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BEE" title="Chart for BEE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BEE" title="Opinion for BEE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BEE" title="Cheat Sheet for BEE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BERY" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BERY">BERY</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BERY">Berry Plastics Group Inc</a></td>
    <td id="dt1_BERY_last" align="right" class="ds_last qb_shad" nowrap="nowrap">26.09</td>
    <td id="dt1_BERY_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.07</span></td>
    <td id="dt1_BERY_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.27%</span></td>
    <td id="dt1_BERY_high" align="right" class="ds_high qb_shad" nowrap="nowrap">26.37</td>
    <td id="dt1_BERY_low" align="right" class="ds_low qb_shad" nowrap="nowrap">25.91</td>
    <td id="dt1_BERY_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">614,097</td>
    <td id="dt1_BERY_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/BERY" title="Detailed Quote for BERY"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BERY" title="Chart for BERY"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BERY" title="Opinion for BERY"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BERY" title="Cheat Sheet for BERY"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BFS" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/BFS">BFS</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/BFS">Saul Centers</a></td>
    <td id="dt1_BFS_last" align="right" class="ds_last qb_line" nowrap="nowrap">54.99</td>
    <td id="dt1_BFS_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.04</span></td>
    <td id="dt1_BFS_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.07%</span></td>
    <td id="dt1_BFS_high" align="right" class="ds_high qb_line" nowrap="nowrap">55.32</td>
    <td id="dt1_BFS_low" align="right" class="ds_low qb_line" nowrap="nowrap">54.69</td>
    <td id="dt1_BFS_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">17,343</td>
    <td id="dt1_BFS_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:36</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/BFS" title="Detailed Quote for BFS"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BFS" title="Chart for BFS"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BFS" title="Opinion for BFS"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BFS" title="Cheat Sheet for BFS"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BIN" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BIN">BIN</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BIN">Iesi-Bfc Ltd</a></td>
    <td id="dt1_BIN_last" align="right" class="ds_last qb_shad" nowrap="nowrap">29.75</td>
    <td id="dt1_BIN_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.52</span></td>
    <td id="dt1_BIN_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.78%</span></td>
    <td id="dt1_BIN_high" align="right" class="ds_high qb_shad" nowrap="nowrap">29.86</td>
    <td id="dt1_BIN_low" align="right" class="ds_low qb_shad" nowrap="nowrap">28.97</td>
    <td id="dt1_BIN_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">297,509</td>
    <td id="dt1_BIN_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/BIN" title="Detailed Quote for BIN"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BIN" title="Chart for BIN"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BIN" title="Opinion for BIN"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BIN" title="Cheat Sheet for BIN"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BJRI" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/BJRI">BJRI</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/BJRI">Bj's Restaurants</a></td>
    <td id="dt1_BJRI_last" align="right" class="ds_last qb_line" nowrap="nowrap">44.27</td>
    <td id="dt1_BJRI_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.25</span></td>
    <td id="dt1_BJRI_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.57%</span></td>
    <td id="dt1_BJRI_high" align="right" class="ds_high qb_line" nowrap="nowrap">44.38</td>
    <td id="dt1_BJRI_low" align="right" class="ds_low qb_line" nowrap="nowrap">43.41</td>
    <td id="dt1_BJRI_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">153,974</td>
    <td id="dt1_BJRI_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/BJRI" title="Detailed Quote for BJRI"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BJRI" title="Chart for BJRI"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BJRI" title="Opinion for BJRI"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BJRI" title="Cheat Sheet for BJRI"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BLK" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BLK">BLK</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BLK">Blackrock</a></td>
    <td id="dt1_BLK_last" align="right" class="ds_last qb_shad" nowrap="nowrap">339.38</td>
    <td id="dt1_BLK_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_down">-1.73</span></td>
    <td id="dt1_BLK_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_down">-0.51%</span></td>
    <td id="dt1_BLK_high" align="right" class="ds_high qb_shad" nowrap="nowrap">344.00</td>
    <td id="dt1_BLK_low" align="right" class="ds_low qb_shad" nowrap="nowrap">338.51</td>
    <td id="dt1_BLK_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">400,034</td>
    <td id="dt1_BLK_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:38</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/BLK" title="Detailed Quote for BLK"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BLK" title="Chart for BLK"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BLK" title="Opinion for BLK"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BLK" title="Cheat Sheet for BLK"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BLKB" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/BLKB">BLKB</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/BLKB">Blackbaud Inc</a></td>
    <td id="dt1_BLKB_last" align="right" class="ds_last qb_line" nowrap="nowrap">45.58</td>
    <td id="dt1_BLKB_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.08</span></td>
    <td id="dt1_BLKB_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+2.43%</span></td>
    <td id="dt1_BLKB_high" align="right" class="ds_high qb_line" nowrap="nowrap">45.60</td>
    <td id="dt1_BLKB_low" align="right" class="ds_low qb_line" nowrap="nowrap">44.05</td>
    <td id="dt1_BLKB_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">231,129</td>
    <td id="dt1_BLKB_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/BLKB" title="Detailed Quote for BLKB"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BLKB" title="Chart for BLKB"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BLKB" title="Opinion for BLKB"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BLKB" title="Cheat Sheet for BLKB"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BMRN" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BMRN">BMRN</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BMRN">Biomarin Pharmaceutical Inc</a></td>
    <td id="dt1_BMRN_last" align="right" class="ds_last qb_shad" nowrap="nowrap">84.34</td>
    <td id="dt1_BMRN_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.84</span></td>
    <td id="dt1_BMRN_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+2.23%</span></td>
    <td id="dt1_BMRN_high" align="right" class="ds_high qb_shad" nowrap="nowrap">86.80</td>
    <td id="dt1_BMRN_low" align="right" class="ds_low qb_shad" nowrap="nowrap">83.06</td>
    <td id="dt1_BMRN_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">1,092,599</td>
    <td id="dt1_BMRN_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/BMRN" title="Detailed Quote for BMRN"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BMRN" title="Chart for BMRN"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BMRN" title="Opinion for BMRN"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BMRN" title="Cheat Sheet for BMRN"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BPY" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/BPY">BPY</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/BPY">Brookfield Property Partners L.</a></td>
    <td id="dt1_BPY_last" align="right" class="ds_last qb_line" nowrap="nowrap">22.81</td>
    <td id="dt1_BPY_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.06</span></td>
    <td id="dt1_BPY_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.26%</span></td>
    <td id="dt1_BPY_high" align="right" class="ds_high qb_line" nowrap="nowrap">22.99</td>
    <td id="dt1_BPY_low" align="right" class="ds_low qb_line" nowrap="nowrap">22.76</td>
    <td id="dt1_BPY_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">50,499</td>
    <td id="dt1_BPY_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:33</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/BPY" title="Detailed Quote for BPY"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BPY" title="Chart for BPY"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BPY" title="Opinion for BPY"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BPY" title="Cheat Sheet for BPY"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BR" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BR">BR</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BR">Broadridge Financial Solutions Llc</a></td>
    <td id="dt1_BR_last" align="right" class="ds_last qb_shad" nowrap="nowrap">44.00</td>
    <td id="dt1_BR_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.07</span></td>
    <td id="dt1_BR_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.16%</span></td>
    <td id="dt1_BR_high" align="right" class="ds_high qb_shad" nowrap="nowrap">44.27</td>
    <td id="dt1_BR_low" align="right" class="ds_low qb_shad" nowrap="nowrap">43.67</td>
    <td id="dt1_BR_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">525,683</td>
    <td id="dt1_BR_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/BR" title="Detailed Quote for BR"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BR" title="Chart for BR"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BR" title="Opinion for BR"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BR" title="Cheat Sheet for BR"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BRKS" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/BRKS">BRKS</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/BRKS">Brooks Automation</a></td>
    <td id="dt1_BRKS_last" align="right" class="ds_last qb_line" nowrap="nowrap">12.20</td>
    <td id="dt1_BRKS_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_down">-0.13</span></td>
    <td id="dt1_BRKS_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_down">-1.05%</span></td>
    <td id="dt1_BRKS_high" align="right" class="ds_high qb_line" nowrap="nowrap">12.46</td>
    <td id="dt1_BRKS_low" align="right" class="ds_low qb_line" nowrap="nowrap">12.18</td>
    <td id="dt1_BRKS_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">141,366</td>
    <td id="dt1_BRKS_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:38</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/BRKS" title="Detailed Quote for BRKS"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BRKS" title="Chart for BRKS"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BRKS" title="Opinion for BRKS"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BRKS" title="Cheat Sheet for BRKS"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BSET" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BSET">BSET</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BSET">Bassett Furniture Industries Inc</a></td>
    <td id="dt1_BSET_last" align="right" class="ds_last qb_shad" nowrap="nowrap">17.72</td>
    <td id="dt1_BSET_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.34</span></td>
    <td id="dt1_BSET_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.96%</span></td>
    <td id="dt1_BSET_high" align="right" class="ds_high qb_shad" nowrap="nowrap">17.85</td>
    <td id="dt1_BSET_low" align="right" class="ds_low qb_shad" nowrap="nowrap">17.47</td>
    <td id="dt1_BSET_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">29,571</td>
    <td id="dt1_BSET_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/BSET" title="Detailed Quote for BSET"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BSET" title="Chart for BSET"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BSET" title="Opinion for BSET"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BSET" title="Cheat Sheet for BSET"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BUSE" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/BUSE">BUSE</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/BUSE">First Busey Corp</a></td>
    <td id="dt1_BUSE_last" align="right" class="ds_last qb_line" nowrap="nowrap">6.26</td>
    <td id="dt1_BUSE_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.01</span></td>
    <td id="dt1_BUSE_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.16%</span></td>
    <td id="dt1_BUSE_high" align="right" class="ds_high qb_line" nowrap="nowrap">6.33</td>
    <td id="dt1_BUSE_low" align="right" class="ds_low qb_line" nowrap="nowrap">6.22</td>
    <td id="dt1_BUSE_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">87,520</td>
    <td id="dt1_BUSE_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:37</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/BUSE" title="Detailed Quote for BUSE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BUSE" title="Chart for BUSE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BUSE" title="Opinion for BUSE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BUSE" title="Cheat Sheet for BUSE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_BXP" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BXP">BXP</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/BXP">Boston Properties</a></td>
    <td id="dt1_BXP_last" align="right" class="ds_last qb_shad" nowrap="nowrap">128.20</td>
    <td id="dt1_BXP_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.45</span></td>
    <td id="dt1_BXP_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.14%</span></td>
    <td id="dt1_BXP_high" align="right" class="ds_high qb_shad" nowrap="nowrap">128.46</td>
    <td id="dt1_BXP_low" align="right" class="ds_low qb_shad" nowrap="nowrap">126.61</td>
    <td id="dt1_BXP_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">455,763</td>
    <td id="dt1_BXP_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/BXP" title="Detailed Quote for BXP"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/BXP" title="Chart for BXP"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/BXP" title="Opinion for BXP"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=BXP" title="Cheat Sheet for BXP"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CBOE" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/CBOE">CBOE</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/CBOE">CBOE Holdings</a></td>
    <td id="dt1_CBOE_last" align="right" class="ds_last qb_line" nowrap="nowrap">60.49</td>
    <td id="dt1_CBOE_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.55</span></td>
    <td id="dt1_CBOE_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+2.63%</span></td>
    <td id="dt1_CBOE_high" align="right" class="ds_high qb_line" nowrap="nowrap">60.95</td>
    <td id="dt1_CBOE_low" align="right" class="ds_low qb_line" nowrap="nowrap">59.17</td>
    <td id="dt1_CBOE_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">551,674</td>
    <td id="dt1_CBOE_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/CBOE" title="Detailed Quote for CBOE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CBOE" title="Chart for CBOE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CBOE" title="Opinion for CBOE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CBOE" title="Cheat Sheet for CBOE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CBPO" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CBPO">CBPO</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CBPO">China Biologic Products</a></td>
    <td id="dt1_CBPO_last" align="right" class="ds_last qb_shad" nowrap="nowrap">63.79</td>
    <td id="dt1_CBPO_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+3.54</span></td>
    <td id="dt1_CBPO_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+5.88%</span></td>
    <td id="dt1_CBPO_high" align="right" class="ds_high qb_shad" nowrap="nowrap">65.45</td>
    <td id="dt1_CBPO_low" align="right" class="ds_low qb_shad" nowrap="nowrap">59.94</td>
    <td id="dt1_CBPO_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">68,225</td>
    <td id="dt1_CBPO_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:35</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/CBPO" title="Detailed Quote for CBPO"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CBPO" title="Chart for CBPO"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CBPO" title="Opinion for CBPO"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CBPO" title="Cheat Sheet for CBPO"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CDR" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/CDR">CDR</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/CDR">Cedar Shopping Centers Inc</a></td>
    <td id="dt1_CDR_last" align="right" class="ds_last qb_line" nowrap="nowrap">6.92</td>
    <td id="dt1_CDR_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.04</span></td>
    <td id="dt1_CDR_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.58%</span></td>
    <td id="dt1_CDR_high" align="right" class="ds_high qb_line" nowrap="nowrap">6.93</td>
    <td id="dt1_CDR_low" align="right" class="ds_low qb_line" nowrap="nowrap">6.86</td>
    <td id="dt1_CDR_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">241,347</td>
    <td id="dt1_CDR_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/CDR" title="Detailed Quote for CDR"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CDR" title="Chart for CDR"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CDR" title="Opinion for CDR"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CDR" title="Cheat Sheet for CDR"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CFFN" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CFFN">CFFN</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CFFN">Capitol Federal Financial</a></td>
    <td id="dt1_CFFN_last" align="right" class="ds_last qb_shad" nowrap="nowrap">12.90</td>
    <td id="dt1_CFFN_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.09</span></td>
    <td id="dt1_CFFN_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.70%</span></td>
    <td id="dt1_CFFN_high" align="right" class="ds_high qb_shad" nowrap="nowrap">12.95</td>
    <td id="dt1_CFFN_low" align="right" class="ds_low qb_shad" nowrap="nowrap">12.82</td>
    <td id="dt1_CFFN_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">219,713</td>
    <td id="dt1_CFFN_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/CFFN" title="Detailed Quote for CFFN"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CFFN" title="Chart for CFFN"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CFFN" title="Opinion for CFFN"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CFFN" title="Cheat Sheet for CFFN"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CFG" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/CFG">CFG</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/CFG">Citizens Financial Group Inc/Ri</a></td>
    <td id="dt1_CFG_last" align="right" class="ds_last qb_line" nowrap="nowrap">23.86</td>
    <td id="dt1_CFG_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.24</span></td>
    <td id="dt1_CFG_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.02%</span></td>
    <td id="dt1_CFG_high" align="right" class="ds_high qb_line" nowrap="nowrap">24.00</td>
    <td id="dt1_CFG_low" align="right" class="ds_low qb_line" nowrap="nowrap">23.16</td>
    <td id="dt1_CFG_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">1,329,136</td>
    <td id="dt1_CFG_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/CFG" title="Detailed Quote for CFG"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CFG" title="Chart for CFG"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CFG" title="Opinion for CFG"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CFG" title="Cheat Sheet for CFG"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CHD" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CHD">CHD</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CHD">Church & Dwight Company</a></td>
    <td id="dt1_CHD_last" align="right" class="ds_last qb_shad" nowrap="nowrap">72.22</td>
    <td id="dt1_CHD_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_down">-0.19</span></td>
    <td id="dt1_CHD_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_down">-0.26%</span></td>
    <td id="dt1_CHD_high" align="right" class="ds_high qb_shad" nowrap="nowrap">73.30</td>
    <td id="dt1_CHD_low" align="right" class="ds_low qb_shad" nowrap="nowrap">71.69</td>
    <td id="dt1_CHD_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">638,548</td>
    <td id="dt1_CHD_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:38</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/CHD" title="Detailed Quote for CHD"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CHD" title="Chart for CHD"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CHD" title="Opinion for CHD"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CHD" title="Cheat Sheet for CHD"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CHSP" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/CHSP">CHSP</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/CHSP">Chesapeake Lodging Trust</a></td>
    <td id="dt1_CHSP_last" align="right" class="ds_last qb_line" nowrap="nowrap">33.49</td>
    <td id="dt1_CHSP_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.45</span></td>
    <td id="dt1_CHSP_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.36%</span></td>
    <td id="dt1_CHSP_high" align="right" class="ds_high qb_line" nowrap="nowrap">33.52</td>
    <td id="dt1_CHSP_low" align="right" class="ds_low qb_line" nowrap="nowrap">32.83</td>
    <td id="dt1_CHSP_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">133,513</td>
    <td id="dt1_CHSP_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:38</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/CHSP" title="Detailed Quote for CHSP"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CHSP" title="Chart for CHSP"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CHSP" title="Opinion for CHSP"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CHSP" title="Cheat Sheet for CHSP"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CI" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CI">CI</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CI">Cigna Corp</a></td>
    <td id="dt1_CI_last" align="right" class="ds_last qb_shad" nowrap="nowrap">99.61</td>
    <td id="dt1_CI_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.04</span></td>
    <td id="dt1_CI_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.04%</span></td>
    <td id="dt1_CI_high" align="right" class="ds_high qb_shad" nowrap="nowrap">100.64</td>
    <td id="dt1_CI_low" align="right" class="ds_low qb_shad" nowrap="nowrap">99.50</td>
    <td id="dt1_CI_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">945,620</td>
    <td id="dt1_CI_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/CI" title="Detailed Quote for CI"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CI" title="Chart for CI"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CI" title="Opinion for CI"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CI" title="Cheat Sheet for CI"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CLC" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/CLC">CLC</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/CLC">Clarcor Inc</a></td>
    <td id="dt1_CLC_last" align="right" class="ds_last qb_line" nowrap="nowrap">66.47</td>
    <td id="dt1_CLC_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_down">-0.49</span></td>
    <td id="dt1_CLC_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_down">-0.73%</span></td>
    <td id="dt1_CLC_high" align="right" class="ds_high qb_line" nowrap="nowrap">67.44</td>
    <td id="dt1_CLC_low" align="right" class="ds_low qb_line" nowrap="nowrap">66.37</td>
    <td id="dt1_CLC_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">169,420</td>
    <td id="dt1_CLC_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:37</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/CLC" title="Detailed Quote for CLC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CLC" title="Chart for CLC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CLC" title="Opinion for CLC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CLC" title="Cheat Sheet for CLC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CLDT" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CLDT">CLDT</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CLDT">Chatham Lodging Trust [Reit]</a></td>
    <td id="dt1_CLDT_last" align="right" class="ds_last qb_shad" nowrap="nowrap">25.94</td>
    <td id="dt1_CLDT_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.32</span></td>
    <td id="dt1_CLDT_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.25%</span></td>
    <td id="dt1_CLDT_high" align="right" class="ds_high qb_shad" nowrap="nowrap">26.20</td>
    <td id="dt1_CLDT_low" align="right" class="ds_low qb_shad" nowrap="nowrap">25.48</td>
    <td id="dt1_CLDT_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">182,621</td>
    <td id="dt1_CLDT_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:38</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/CLDT" title="Detailed Quote for CLDT"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CLDT" title="Chart for CLDT"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CLDT" title="Opinion for CLDT"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CLDT" title="Cheat Sheet for CLDT"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CLMS" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/CLMS">CLMS</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/CLMS">Calamos Asset Management</a></td>
    <td id="dt1_CLMS_last" align="right" class="ds_last qb_line" nowrap="nowrap">14.03</td>
    <td id="dt1_CLMS_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.33</span></td>
    <td id="dt1_CLMS_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+2.41%</span></td>
    <td id="dt1_CLMS_high" align="right" class="ds_high qb_line" nowrap="nowrap">14.44</td>
    <td id="dt1_CLMS_low" align="right" class="ds_low qb_line" nowrap="nowrap">13.75</td>
    <td id="dt1_CLMS_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">189,237</td>
    <td id="dt1_CLMS_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/CLMS" title="Detailed Quote for CLMS"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CLMS" title="Chart for CLMS"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CLMS" title="Opinion for CLMS"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CLMS" title="Cheat Sheet for CLMS"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CLX" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CLX">CLX</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CLX">Clorox Company</a></td>
    <td id="dt1_CLX_last" align="right" class="ds_last qb_shad" nowrap="nowrap">99.17</td>
    <td id="dt1_CLX_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_down">-0.33</span></td>
    <td id="dt1_CLX_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_down">-0.33%</span></td>
    <td id="dt1_CLX_high" align="right" class="ds_high qb_shad" nowrap="nowrap">100.47</td>
    <td id="dt1_CLX_low" align="right" class="ds_low qb_shad" nowrap="nowrap">98.86</td>
    <td id="dt1_CLX_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">786,949</td>
    <td id="dt1_CLX_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:38</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/CLX" title="Detailed Quote for CLX"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CLX" title="Chart for CLX"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CLX" title="Opinion for CLX"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CLX" title="Cheat Sheet for CLX"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CME" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/CME">CME</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/CME">CME Group Inc</a></td>
    <td id="dt1_CME_last" align="right" class="ds_last qb_line" nowrap="nowrap">84.51</td>
    <td id="dt1_CME_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.70</span></td>
    <td id="dt1_CME_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.84%</span></td>
    <td id="dt1_CME_high" align="right" class="ds_high qb_line" nowrap="nowrap">84.84</td>
    <td id="dt1_CME_low" align="right" class="ds_low qb_line" nowrap="nowrap">83.83</td>
    <td id="dt1_CME_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">826,571</td>
    <td id="dt1_CME_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/CME" title="Detailed Quote for CME"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CME" title="Chart for CME"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CME" title="Opinion for CME"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CME" title="Cheat Sheet for CME"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CMN" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CMN">CMN</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CMN">Cantel Medical</a></td>
    <td id="dt1_CMN_last" align="right" class="ds_last qb_shad" nowrap="nowrap">42.10</td>
    <td id="dt1_CMN_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_down">-0.30</span></td>
    <td id="dt1_CMN_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_down">-0.71%</span></td>
    <td id="dt1_CMN_high" align="right" class="ds_high qb_shad" nowrap="nowrap">42.96</td>
    <td id="dt1_CMN_low" align="right" class="ds_low qb_shad" nowrap="nowrap">41.99</td>
    <td id="dt1_CMN_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">34,700</td>
    <td id="dt1_CMN_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/CMN" title="Detailed Quote for CMN"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CMN" title="Chart for CMN"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CMN" title="Opinion for CMN"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CMN" title="Cheat Sheet for CMN"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CMS" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/CMS">CMS</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/CMS">Cms Energy Corp</a></td>
    <td id="dt1_CMS_last" align="right" class="ds_last qb_line" nowrap="nowrap">33.05</td>
    <td id="dt1_CMS_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.38</span></td>
    <td id="dt1_CMS_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.16%</span></td>
    <td id="dt1_CMS_high" align="right" class="ds_high qb_line" nowrap="nowrap">33.11</td>
    <td id="dt1_CMS_low" align="right" class="ds_low qb_line" nowrap="nowrap">32.73</td>
    <td id="dt1_CMS_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">781,512</td>
    <td id="dt1_CMS_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/CMS" title="Detailed Quote for CMS"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CMS" title="Chart for CMS"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CMS" title="Opinion for CMS"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CMS" title="Cheat Sheet for CMS"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CNNX" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CNNX">CNNX</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CNNX">Cone Midstream Partners LP</a></td>
    <td id="dt1_CNNX_last" align="right" class="ds_last qb_shad" nowrap="nowrap">31.25</td>
    <td id="dt1_CNNX_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.99</span></td>
    <td id="dt1_CNNX_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+3.27%</span></td>
    <td id="dt1_CNNX_high" align="right" class="ds_high qb_shad" nowrap="nowrap">31.73</td>
    <td id="dt1_CNNX_low" align="right" class="ds_low qb_shad" nowrap="nowrap">29.99</td>
    <td id="dt1_CNNX_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">69,968</td>
    <td id="dt1_CNNX_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:38</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/CNNX" title="Detailed Quote for CNNX"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CNNX" title="Chart for CNNX"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CNNX" title="Opinion for CNNX"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CNNX" title="Cheat Sheet for CNNX"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CONE" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/CONE">CONE</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/CONE">Cyrusone Inc</a></td>
    <td id="dt1_CONE_last" align="right" class="ds_last qb_line" nowrap="nowrap">27.12</td>
    <td id="dt1_CONE_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_down">-0.19</span></td>
    <td id="dt1_CONE_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_down">-0.70%</span></td>
    <td id="dt1_CONE_high" align="right" class="ds_high qb_line" nowrap="nowrap">27.63</td>
    <td id="dt1_CONE_low" align="right" class="ds_low qb_line" nowrap="nowrap">26.70</td>
    <td id="dt1_CONE_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">259,220</td>
    <td id="dt1_CONE_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:38</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/CONE" title="Detailed Quote for CONE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CONE" title="Chart for CONE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CONE" title="Opinion for CONE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CONE" title="Cheat Sheet for CONE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_COR" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/COR">COR</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/COR">Coresite Realty Corp</a></td>
    <td id="dt1_COR_last" align="right" class="ds_last qb_shad" nowrap="nowrap">37.59</td>
    <td id="dt1_COR_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.57</span></td>
    <td id="dt1_COR_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.54%</span></td>
    <td id="dt1_COR_high" align="right" class="ds_high qb_shad" nowrap="nowrap">37.78</td>
    <td id="dt1_COR_low" align="right" class="ds_low qb_shad" nowrap="nowrap">37.11</td>
    <td id="dt1_COR_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">45,499</td>
    <td id="dt1_COR_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/COR" title="Detailed Quote for COR"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/COR" title="Chart for COR"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/COR" title="Opinion for COR"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=COR" title="Cheat Sheet for COR"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CPT" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/CPT">CPT</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/CPT">Camden Property Trust</a></td>
    <td id="dt1_CPT_last" align="right" class="ds_last qb_line" nowrap="nowrap">77.71</td>
    <td id="dt1_CPT_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.04</span></td>
    <td id="dt1_CPT_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.36%</span></td>
    <td id="dt1_CPT_high" align="right" class="ds_high qb_line" nowrap="nowrap">77.90</td>
    <td id="dt1_CPT_low" align="right" class="ds_low qb_line" nowrap="nowrap">76.80</td>
    <td id="dt1_CPT_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">317,540</td>
    <td id="dt1_CPT_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:38</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/CPT" title="Detailed Quote for CPT"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CPT" title="Chart for CPT"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CPT" title="Opinion for CPT"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CPT" title="Cheat Sheet for CPT"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CRAI" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CRAI">CRAI</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CRAI">Cra Internationalinc.</a></td>
    <td id="dt1_CRAI_last" align="right" class="ds_last qb_shad" nowrap="nowrap">31.56</td>
    <td id="dt1_CRAI_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.56</span></td>
    <td id="dt1_CRAI_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+5.20%</span></td>
    <td id="dt1_CRAI_high" align="right" class="ds_high qb_shad" nowrap="nowrap">31.56</td>
    <td id="dt1_CRAI_low" align="right" class="ds_low qb_shad" nowrap="nowrap">30.00</td>
    <td id="dt1_CRAI_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">47,858</td>
    <td id="dt1_CRAI_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:37</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/CRAI" title="Detailed Quote for CRAI"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CRAI" title="Chart for CRAI"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CRAI" title="Opinion for CRAI"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CRAI" title="Cheat Sheet for CRAI"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CRL" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/CRL">CRL</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/CRL">Charles River Laboratories Intl</a></td>
    <td id="dt1_CRL_last" align="right" class="ds_last qb_line" nowrap="nowrap">64.80</td>
    <td id="dt1_CRL_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.64</span></td>
    <td id="dt1_CRL_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+2.60%</span></td>
    <td id="dt1_CRL_high" align="right" class="ds_high qb_line" nowrap="nowrap">66.11</td>
    <td id="dt1_CRL_low" align="right" class="ds_low qb_line" nowrap="nowrap">64.05</td>
    <td id="dt1_CRL_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">650,002</td>
    <td id="dt1_CRL_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/CRL" title="Detailed Quote for CRL"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CRL" title="Chart for CRL"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CRL" title="Opinion for CRL"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CRL" title="Cheat Sheet for CRL"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CSL" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CSL">CSL</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CSL">Carlisle Companies Inc</a></td>
    <td id="dt1_CSL_last" align="right" class="ds_last qb_shad" nowrap="nowrap">88.91</td>
    <td id="dt1_CSL_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.03</span></td>
    <td id="dt1_CSL_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.03%</span></td>
    <td id="dt1_CSL_high" align="right" class="ds_high qb_shad" nowrap="nowrap">89.44</td>
    <td id="dt1_CSL_low" align="right" class="ds_low qb_shad" nowrap="nowrap">88.47</td>
    <td id="dt1_CSL_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">218,028</td>
    <td id="dt1_CSL_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/CSL" title="Detailed Quote for CSL"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CSL" title="Chart for CSL"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CSL" title="Opinion for CSL"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CSL" title="Cheat Sheet for CSL"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CTB" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/CTB">CTB</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/CTB">Cooper Tire & Rubber Company</a></td>
    <td id="dt1_CTB_last" align="right" class="ds_last qb_line" nowrap="nowrap">32.50</td>
    <td id="dt1_CTB_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.29</span></td>
    <td id="dt1_CTB_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.90%</span></td>
    <td id="dt1_CTB_high" align="right" class="ds_high qb_line" nowrap="nowrap">32.59</td>
    <td id="dt1_CTB_low" align="right" class="ds_low qb_line" nowrap="nowrap">32.21</td>
    <td id="dt1_CTB_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">367,100</td>
    <td id="dt1_CTB_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/CTB" title="Detailed Quote for CTB"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CTB" title="Chart for CTB"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CTB" title="Opinion for CTB"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CTB" title="Cheat Sheet for CTB"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CTCT" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CTCT">CTCT</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CTCT">Constant Contact</a></td>
    <td id="dt1_CTCT_last" align="right" class="ds_last qb_shad" nowrap="nowrap">35.61</td>
    <td id="dt1_CTCT_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.25</span></td>
    <td id="dt1_CTCT_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.71%</span></td>
    <td id="dt1_CTCT_high" align="right" class="ds_high qb_shad" nowrap="nowrap">35.96</td>
    <td id="dt1_CTCT_low" align="right" class="ds_low qb_shad" nowrap="nowrap">35.09</td>
    <td id="dt1_CTCT_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">200,034</td>
    <td id="dt1_CTCT_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/CTCT" title="Detailed Quote for CTCT"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CTCT" title="Chart for CTCT"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CTCT" title="Opinion for CTCT"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CTCT" title="Cheat Sheet for CTCT"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CTP" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/CTP">CTP</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/CTP">Ctpartners Executive Search Inc</a></td>
    <td id="dt1_CTP_last" align="right" class="ds_last qb_line" nowrap="nowrap">20.15</td>
    <td id="dt1_CTP_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+1.90</span></td>
    <td id="dt1_CTP_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+10.41%</span></td>
    <td id="dt1_CTP_high" align="right" class="ds_high qb_line" nowrap="nowrap">20.64</td>
    <td id="dt1_CTP_low" align="right" class="ds_low qb_line" nowrap="nowrap">18.50</td>
    <td id="dt1_CTP_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">137,308</td>
    <td id="dt1_CTP_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:35</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/CTP" title="Detailed Quote for CTP"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CTP" title="Chart for CTP"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CTP" title="Opinion for CTP"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CTP" title="Cheat Sheet for CTP"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CUBE" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CUBE">CUBE</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CUBE">Cubesmart</a></td>
    <td id="dt1_CUBE_last" align="right" class="ds_last qb_shad" nowrap="nowrap">21.40</td>
    <td id="dt1_CUBE_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.35</span></td>
    <td id="dt1_CUBE_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.66%</span></td>
    <td id="dt1_CUBE_high" align="right" class="ds_high qb_shad" nowrap="nowrap">21.55</td>
    <td id="dt1_CUBE_low" align="right" class="ds_low qb_shad" nowrap="nowrap">20.96</td>
    <td id="dt1_CUBE_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">1,333,722</td>
    <td id="dt1_CUBE_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/CUBE" title="Detailed Quote for CUBE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CUBE" title="Chart for CUBE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CUBE" title="Opinion for CUBE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CUBE" title="Cheat Sheet for CUBE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CVA" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/CVA">CVA</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/CVA">Covanta Holding Corp</a></td>
    <td id="dt1_CVA_last" align="right" class="ds_last qb_line" nowrap="nowrap">22.08</td>
    <td id="dt1_CVA_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.01</span></td>
    <td id="dt1_CVA_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.05%</span></td>
    <td id="dt1_CVA_high" align="right" class="ds_high qb_line" nowrap="nowrap">22.20</td>
    <td id="dt1_CVA_low" align="right" class="ds_low qb_line" nowrap="nowrap">21.95</td>
    <td id="dt1_CVA_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">1,620,270</td>
    <td id="dt1_CVA_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/CVA" title="Detailed Quote for CVA"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CVA" title="Chart for CVA"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CVA" title="Opinion for CVA"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CVA" title="Cheat Sheet for CVA"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CWT" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CWT">CWT</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CWT">California Water Service Group Holding</a></td>
    <td id="dt1_CWT_last" align="right" class="ds_last qb_shad" nowrap="nowrap">26.21</td>
    <td id="dt1_CWT_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.18</span></td>
    <td id="dt1_CWT_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.69%</span></td>
    <td id="dt1_CWT_high" align="right" class="ds_high qb_shad" nowrap="nowrap">26.32</td>
    <td id="dt1_CWT_low" align="right" class="ds_low qb_shad" nowrap="nowrap">25.95</td>
    <td id="dt1_CWT_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">118,720</td>
    <td id="dt1_CWT_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/CWT" title="Detailed Quote for CWT"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CWT" title="Chart for CWT"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CWT" title="Opinion for CWT"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CWT" title="Cheat Sheet for CWT"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CXW" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/CXW">CXW</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/CXW">Corrections Corporation of America</a></td>
    <td id="dt1_CXW_last" align="right" class="ds_last qb_line" nowrap="nowrap">36.97</td>
    <td id="dt1_CXW_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.19</span></td>
    <td id="dt1_CXW_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.52%</span></td>
    <td id="dt1_CXW_high" align="right" class="ds_high qb_line" nowrap="nowrap">37.15</td>
    <td id="dt1_CXW_low" align="right" class="ds_low qb_line" nowrap="nowrap">36.54</td>
    <td id="dt1_CXW_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">245,107</td>
    <td id="dt1_CXW_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:37</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/CXW" title="Detailed Quote for CXW"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CXW" title="Chart for CXW"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CXW" title="Opinion for CXW"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CXW" title="Cheat Sheet for CXW"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_CYBR" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CYBR">CYBR</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/CYBR">Cyberark Software Ltd.</a></td>
    <td id="dt1_CYBR_last" align="right" class="ds_last qb_shad" nowrap="nowrap">36.99</td>
    <td id="dt1_CYBR_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+1.71</span></td>
    <td id="dt1_CYBR_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+4.85%</span></td>
    <td id="dt1_CYBR_high" align="right" class="ds_high qb_shad" nowrap="nowrap">37.50</td>
    <td id="dt1_CYBR_low" align="right" class="ds_low qb_shad" nowrap="nowrap">35.03</td>
    <td id="dt1_CYBR_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">1,006,716</td>
    <td id="dt1_CYBR_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/CYBR" title="Detailed Quote for CYBR"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/CYBR" title="Chart for CYBR"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/CYBR" title="Opinion for CYBR"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=CYBR" title="Cheat Sheet for CYBR"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_DCT" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/DCT">DCT</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/DCT">Dct Industrial Trust Inc</a></td>
    <td id="dt1_DCT_last" align="right" class="ds_last qb_line" nowrap="nowrap">8.66</td>
    <td id="dt1_DCT_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.09</span></td>
    <td id="dt1_DCT_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.05%</span></td>
    <td id="dt1_DCT_high" align="right" class="ds_high qb_line" nowrap="nowrap">8.68</td>
    <td id="dt1_DCT_low" align="right" class="ds_low qb_line" nowrap="nowrap">8.56</td>
    <td id="dt1_DCT_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">1,982,948</td>
    <td id="dt1_DCT_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/DCT" title="Detailed Quote for DCT"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/DCT" title="Chart for DCT"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/DCT" title="Opinion for DCT"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=DCT" title="Cheat Sheet for DCT"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_DENN" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/DENN">DENN</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/DENN">Denny's Corp</a></td>
    <td id="dt1_DENN_last" align="right" class="ds_last qb_shad" nowrap="nowrap">8.73</td>
    <td id="dt1_DENN_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.11</span></td>
    <td id="dt1_DENN_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.28%</span></td>
    <td id="dt1_DENN_high" align="right" class="ds_high qb_shad" nowrap="nowrap">8.87</td>
    <td id="dt1_DENN_low" align="right" class="ds_low qb_shad" nowrap="nowrap">8.66</td>
    <td id="dt1_DENN_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">753,812</td>
    <td id="dt1_DENN_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/DENN" title="Detailed Quote for DENN"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/DENN" title="Chart for DENN"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/DENN" title="Opinion for DENN"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=DENN" title="Cheat Sheet for DENN"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_DLX" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/DLX">DLX</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/DLX">Deluxe Corp</a></td>
    <td id="dt1_DLX_last" align="right" class="ds_last qb_line" nowrap="nowrap">61.07</td>
    <td id="dt1_DLX_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.27</span></td>
    <td id="dt1_DLX_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.44%</span></td>
    <td id="dt1_DLX_high" align="right" class="ds_high qb_line" nowrap="nowrap">61.40</td>
    <td id="dt1_DLX_low" align="right" class="ds_low qb_line" nowrap="nowrap">60.57</td>
    <td id="dt1_DLX_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">167,187</td>
    <td id="dt1_DLX_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/DLX" title="Detailed Quote for DLX"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/DLX" title="Chart for DLX"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/DLX" title="Opinion for DLX"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=DLX" title="Cheat Sheet for DLX"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_DOC" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/DOC">DOC</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/DOC">Physicians Realty Trust</a></td>
    <td id="dt1_DOC_last" align="right" class="ds_last qb_shad" nowrap="nowrap">15.45</td>
    <td id="dt1_DOC_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.11</span></td>
    <td id="dt1_DOC_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.72%</span></td>
    <td id="dt1_DOC_high" align="right" class="ds_high qb_shad" nowrap="nowrap">15.50</td>
    <td id="dt1_DOC_low" align="right" class="ds_low qb_shad" nowrap="nowrap">15.31</td>
    <td id="dt1_DOC_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">152,968</td>
    <td id="dt1_DOC_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/DOC" title="Detailed Quote for DOC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/DOC" title="Chart for DOC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/DOC" title="Opinion for DOC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=DOC" title="Cheat Sheet for DOC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_DPZ" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/DPZ">DPZ</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/DPZ">Domino's Pizza Inc</a></td>
    <td id="dt1_DPZ_last" align="right" class="ds_last qb_line" nowrap="nowrap">89.50</td>
    <td id="dt1_DPZ_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.71</span></td>
    <td id="dt1_DPZ_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.80%</span></td>
    <td id="dt1_DPZ_high" align="right" class="ds_high qb_line" nowrap="nowrap">89.68</td>
    <td id="dt1_DPZ_low" align="right" class="ds_low qb_line" nowrap="nowrap">88.83</td>
    <td id="dt1_DPZ_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">211,798</td>
    <td id="dt1_DPZ_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/DPZ" title="Detailed Quote for DPZ"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/DPZ" title="Chart for DPZ"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/DPZ" title="Opinion for DPZ"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=DPZ" title="Cheat Sheet for DPZ"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_DRE" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/DRE">DRE</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/DRE">Duke Realty Corp</a></td>
    <td id="dt1_DRE_last" align="right" class="ds_last qb_shad" nowrap="nowrap">19.27</td>
    <td id="dt1_DRE_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.31</span></td>
    <td id="dt1_DRE_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.64%</span></td>
    <td id="dt1_DRE_high" align="right" class="ds_high qb_shad" nowrap="nowrap">19.29</td>
    <td id="dt1_DRE_low" align="right" class="ds_low qb_shad" nowrap="nowrap">18.89</td>
    <td id="dt1_DRE_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">1,379,863</td>
    <td id="dt1_DRE_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/DRE" title="Detailed Quote for DRE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/DRE" title="Chart for DRE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/DRE" title="Opinion for DRE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=DRE" title="Cheat Sheet for DRE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_DRH" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/DRH">DRH</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/DRH">Diamondrock Hospitality Company</a></td>
    <td id="dt1_DRH_last" align="right" class="ds_last qb_line" nowrap="nowrap">14.49</td>
    <td id="dt1_DRH_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.14</span></td>
    <td id="dt1_DRH_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.98%</span></td>
    <td id="dt1_DRH_high" align="right" class="ds_high qb_line" nowrap="nowrap">14.50</td>
    <td id="dt1_DRH_low" align="right" class="ds_low qb_line" nowrap="nowrap">14.33</td>
    <td id="dt1_DRH_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">407,883</td>
    <td id="dt1_DRH_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/DRH" title="Detailed Quote for DRH"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/DRH" title="Chart for DRH"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/DRH" title="Opinion for DRH"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=DRH" title="Cheat Sheet for DRH"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_DSPG" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/DSPG">DSPG</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/DSPG">DSP Group</a></td>
    <td id="dt1_DSPG_last" align="right" class="ds_last qb_shad" nowrap="nowrap">10.09</td>
    <td id="dt1_DSPG_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.40</span></td>
    <td id="dt1_DSPG_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+4.13%</span></td>
    <td id="dt1_DSPG_high" align="right" class="ds_high qb_shad" nowrap="nowrap">10.50</td>
    <td id="dt1_DSPG_low" align="right" class="ds_low qb_shad" nowrap="nowrap">9.76</td>
    <td id="dt1_DSPG_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">171,577</td>
    <td id="dt1_DSPG_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/DSPG" title="Detailed Quote for DSPG"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/DSPG" title="Chart for DSPG"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/DSPG" title="Opinion for DSPG"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=DSPG" title="Cheat Sheet for DSPG"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_DTE" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/DTE">DTE</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/DTE">Dte Energy Company</a></td>
    <td id="dt1_DTE_last" align="right" class="ds_last qb_line" nowrap="nowrap">82.79</td>
    <td id="dt1_DTE_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.63</span></td>
    <td id="dt1_DTE_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.77%</span></td>
    <td id="dt1_DTE_high" align="right" class="ds_high qb_line" nowrap="nowrap">82.99</td>
    <td id="dt1_DTE_low" align="right" class="ds_low qb_line" nowrap="nowrap">82.28</td>
    <td id="dt1_DTE_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">436,808</td>
    <td id="dt1_DTE_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/DTE" title="Detailed Quote for DTE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/DTE" title="Chart for DTE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/DTE" title="Opinion for DTE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=DTE" title="Cheat Sheet for DTE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_EA" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/EA">EA</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/EA">Electronic Arts Inc</a></td>
    <td id="dt1_EA_last" align="right" class="ds_last qb_shad" nowrap="nowrap">41.19</td>
    <td id="dt1_EA_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.22</span></td>
    <td id="dt1_EA_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.54%</span></td>
    <td id="dt1_EA_high" align="right" class="ds_high qb_shad" nowrap="nowrap">41.45</td>
    <td id="dt1_EA_low" align="right" class="ds_low qb_shad" nowrap="nowrap">40.72</td>
    <td id="dt1_EA_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">2,285,178</td>
    <td id="dt1_EA_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/EA" title="Detailed Quote for EA"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/EA" title="Chart for EA"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/EA" title="Opinion for EA"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=EA" title="Cheat Sheet for EA"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_EDR" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/EDR">EDR</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/EDR">Education Realty Trust Inc</a></td>
    <td id="dt1_EDR_last" align="right" class="ds_last qb_line" nowrap="nowrap">11.45</td>
    <td id="dt1_EDR_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.19</span></td>
    <td id="dt1_EDR_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.69%</span></td>
    <td id="dt1_EDR_high" align="right" class="ds_high qb_line" nowrap="nowrap">11.46</td>
    <td id="dt1_EDR_low" align="right" class="ds_low qb_line" nowrap="nowrap">11.23</td>
    <td id="dt1_EDR_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">577,540</td>
    <td id="dt1_EDR_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/EDR" title="Detailed Quote for EDR"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/EDR" title="Chart for EDR"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/EDR" title="Opinion for EDR"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=EDR" title="Cheat Sheet for EDR"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_EGP" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/EGP">EGP</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/EGP">Eastgroup Properties</a></td>
    <td id="dt1_EGP_last" align="right" class="ds_last qb_shad" nowrap="nowrap">69.40</td>
    <td id="dt1_EGP_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.54</span></td>
    <td id="dt1_EGP_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.78%</span></td>
    <td id="dt1_EGP_high" align="right" class="ds_high qb_shad" nowrap="nowrap">69.77</td>
    <td id="dt1_EGP_low" align="right" class="ds_low qb_shad" nowrap="nowrap">68.99</td>
    <td id="dt1_EGP_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">83,914</td>
    <td id="dt1_EGP_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/EGP" title="Detailed Quote for EGP"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/EGP" title="Chart for EGP"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/EGP" title="Opinion for EGP"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=EGP" title="Cheat Sheet for EGP"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_EIX" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/EIX">EIX</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/EIX">Edison International</a></td>
    <td id="dt1_EIX_last" align="right" class="ds_last qb_line" nowrap="nowrap">63.16</td>
    <td id="dt1_EIX_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.58</span></td>
    <td id="dt1_EIX_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.93%</span></td>
    <td id="dt1_EIX_high" align="right" class="ds_high qb_line" nowrap="nowrap">63.31</td>
    <td id="dt1_EIX_low" align="right" class="ds_low qb_line" nowrap="nowrap">62.55</td>
    <td id="dt1_EIX_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">1,131,778</td>
    <td id="dt1_EIX_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/EIX" title="Detailed Quote for EIX"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/EIX" title="Chart for EIX"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/EIX" title="Opinion for EIX"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=EIX" title="Cheat Sheet for EIX"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ELS" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ELS">ELS</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ELS">Equity Lifestyle Properties</a></td>
    <td id="dt1_ELS_last" align="right" class="ds_last qb_shad" nowrap="nowrap">49.63</td>
    <td id="dt1_ELS_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.53</span></td>
    <td id="dt1_ELS_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.08%</span></td>
    <td id="dt1_ELS_high" align="right" class="ds_high qb_shad" nowrap="nowrap">49.73</td>
    <td id="dt1_ELS_low" align="right" class="ds_low qb_shad" nowrap="nowrap">49.18</td>
    <td id="dt1_ELS_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">207,651</td>
    <td id="dt1_ELS_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/ELS" title="Detailed Quote for ELS"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ELS" title="Chart for ELS"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ELS" title="Opinion for ELS"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ELS" title="Cheat Sheet for ELS"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ENFC" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/ENFC">ENFC</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/ENFC">Entegra Financial Corp.</a></td>
    <td id="dt1_ENFC_last" align="right" class="ds_last qb_line" nowrap="nowrap">13.61</td>
    <td id="dt1_ENFC_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.21</span></td>
    <td id="dt1_ENFC_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.57%</span></td>
    <td id="dt1_ENFC_high" align="right" class="ds_high qb_line" nowrap="nowrap">13.63</td>
    <td id="dt1_ENFC_low" align="right" class="ds_low qb_line" nowrap="nowrap">13.48</td>
    <td id="dt1_ENFC_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">19,865</td>
    <td id="dt1_ENFC_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:12</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/ENFC" title="Detailed Quote for ENFC"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ENFC" title="Chart for ENFC"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ENFC" title="Opinion for ENFC"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ENFC" title="Cheat Sheet for ENFC"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_EQR" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/EQR">EQR</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/EQR">Equity Residential</a></td>
    <td id="dt1_EQR_last" align="right" class="ds_last qb_shad" nowrap="nowrap">70.28</td>
    <td id="dt1_EQR_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.72</span></td>
    <td id="dt1_EQR_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+1.04%</span></td>
    <td id="dt1_EQR_high" align="right" class="ds_high qb_shad" nowrap="nowrap">70.36</td>
    <td id="dt1_EQR_low" align="right" class="ds_low qb_shad" nowrap="nowrap">69.32</td>
    <td id="dt1_EQR_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">918,839</td>
    <td id="dt1_EQR_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/EQR" title="Detailed Quote for EQR"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/EQR" title="Chart for EQR"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/EQR" title="Opinion for EQR"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=EQR" title="Cheat Sheet for EQR"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ERIE" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/ERIE">ERIE</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/ERIE">Erie Indemnity Company</a></td>
    <td id="dt1_ERIE_last" align="right" class="ds_last qb_line" nowrap="nowrap">84.82</td>
    <td id="dt1_ERIE_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_down">-0.05</span></td>
    <td id="dt1_ERIE_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_down">-0.06%</span></td>
    <td id="dt1_ERIE_high" align="right" class="ds_high qb_line" nowrap="nowrap">85.35</td>
    <td id="dt1_ERIE_low" align="right" class="ds_low qb_line" nowrap="nowrap">83.10</td>
    <td id="dt1_ERIE_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">27,895</td>
    <td id="dt1_ERIE_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:21</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/ERIE" title="Detailed Quote for ERIE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ERIE" title="Chart for ERIE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ERIE" title="Opinion for ERIE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ERIE" title="Cheat Sheet for ERIE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ESE" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ESE">ESE</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ESE">Esco Technologies Inc</a></td>
    <td id="dt1_ESE_last" align="right" class="ds_last qb_shad" nowrap="nowrap">38.32</td>
    <td id="dt1_ESE_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.30</span></td>
    <td id="dt1_ESE_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.79%</span></td>
    <td id="dt1_ESE_high" align="right" class="ds_high qb_shad" nowrap="nowrap">38.44</td>
    <td id="dt1_ESE_low" align="right" class="ds_low qb_shad" nowrap="nowrap">37.78</td>
    <td id="dt1_ESE_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">26,395</td>
    <td id="dt1_ESE_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:33</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/ESE" title="Detailed Quote for ESE"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ESE" title="Chart for ESE"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ESE" title="Opinion for ESE"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ESE" title="Cheat Sheet for ESE"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ESPR" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/ESPR">ESPR</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/ESPR">Esperion Therapeutics Inc</a></td>
    <td id="dt1_ESPR_last" align="right" class="ds_last qb_line" nowrap="nowrap">29.77</td>
    <td id="dt1_ESPR_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.52</span></td>
    <td id="dt1_ESPR_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.78%</span></td>
    <td id="dt1_ESPR_high" align="right" class="ds_high qb_line" nowrap="nowrap">30.38</td>
    <td id="dt1_ESPR_low" align="right" class="ds_low qb_line" nowrap="nowrap">29.40</td>
    <td id="dt1_ESPR_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">333,435</td>
    <td id="dt1_ESPR_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/ESPR" title="Detailed Quote for ESPR"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ESPR" title="Chart for ESPR"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ESPR" title="Opinion for ESPR"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ESPR" title="Cheat Sheet for ESPR"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_ESS" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ESS">ESS</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/ESS">Essex Property Trust</a></td>
    <td id="dt1_ESS_last" align="right" class="ds_last qb_shad" nowrap="nowrap">202.12</td>
    <td id="dt1_ESS_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.36</span></td>
    <td id="dt1_ESS_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.18%</span></td>
    <td id="dt1_ESS_high" align="right" class="ds_high qb_shad" nowrap="nowrap">203.03</td>
    <td id="dt1_ESS_low" align="right" class="ds_low qb_shad" nowrap="nowrap">200.62</td>
    <td id="dt1_ESS_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">275,222</td>
    <td id="dt1_ESS_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:38</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/ESS" title="Detailed Quote for ESS"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/ESS" title="Chart for ESS"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/ESS" title="Opinion for ESS"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=ESS" title="Cheat Sheet for ESS"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_EXR" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/EXR">EXR</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/EXR">Extra Space Storage Inc</a></td>
    <td id="dt1_EXR_last" align="right" class="ds_last qb_line" nowrap="nowrap">58.63</td>
    <td id="dt1_EXR_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.47</span></td>
    <td id="dt1_EXR_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.81%</span></td>
    <td id="dt1_EXR_high" align="right" class="ds_high qb_line" nowrap="nowrap">58.83</td>
    <td id="dt1_EXR_low" align="right" class="ds_low qb_line" nowrap="nowrap">57.95</td>
    <td id="dt1_EXR_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">411,098</td>
    <td id="dt1_EXR_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:38</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/EXR" title="Detailed Quote for EXR"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/EXR" title="Chart for EXR"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/EXR" title="Opinion for EXR"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=EXR" title="Cheat Sheet for EXR"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_FCH" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/FCH">FCH</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/FCH">Felcor Lodging Trust Inc</a></td>
    <td id="dt1_FCH_last" align="right" class="ds_last qb_shad" nowrap="nowrap">10.95</td>
    <td id="dt1_FCH_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.22</span></td>
    <td id="dt1_FCH_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+2.05%</span></td>
    <td id="dt1_FCH_high" align="right" class="ds_high qb_shad" nowrap="nowrap">10.99</td>
    <td id="dt1_FCH_low" align="right" class="ds_low qb_shad" nowrap="nowrap">10.63</td>
    <td id="dt1_FCH_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">566,754</td>
    <td id="dt1_FCH_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:39</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/FCH" title="Detailed Quote for FCH"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/FCH" title="Chart for FCH"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/FCH" title="Opinion for FCH"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=FCH" title="Cheat Sheet for FCH"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_FDS" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/FDS">FDS</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/FDS">Factset Research Systems Inc</a></td>
    <td id="dt1_FDS_last" align="right" class="ds_last qb_line" nowrap="nowrap">131.52</td>
    <td id="dt1_FDS_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.08</span></td>
    <td id="dt1_FDS_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+0.06%</span></td>
    <td id="dt1_FDS_high" align="right" class="ds_high qb_line" nowrap="nowrap">132.21</td>
    <td id="dt1_FDS_low" align="right" class="ds_low qb_line" nowrap="nowrap">130.75</td>
    <td id="dt1_FDS_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">85,264</td>
    <td id="dt1_FDS_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:38</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/FDS" title="Detailed Quote for FDS"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/FDS" title="Chart for FDS"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/FDS" title="Opinion for FDS"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=FDS" title="Cheat Sheet for FDS"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_FII" class="">
    <td align="left" class="ds_symbol qb_shad" nowrap="nowrap"><a href="/quotes/stocks/FII">FII</a></td>
    <td align="left" class="ds_name qb_shad" nowrap="nowrap"><a href="/quotes/stocks/FII">Federated Investors</a></td>
    <td id="dt1_FII_last" align="right" class="ds_last qb_shad" nowrap="nowrap">31.46</td>
    <td id="dt1_FII_change" align="right" class="ds_change qb_shad" nowrap="nowrap"><span class="qb_up">+0.19</span></td>
    <td id="dt1_FII_pctchange" align="right" class="ds_pctchange qb_shad" nowrap="nowrap"><span class="qb_up">+0.61%</span></td>
    <td id="dt1_FII_high" align="right" class="ds_high qb_shad" nowrap="nowrap">31.50</td>
    <td id="dt1_FII_low" align="right" class="ds_low qb_shad" nowrap="nowrap">31.18</td>
    <td id="dt1_FII_volume" align="right" class="ds_volume qb_shad" nowrap="nowrap">253,365</td>
    <td id="dt1_FII_displaytime" align="right" class="ds_displaytime qb_shad" nowrap="nowrap">13:38</td>
    <td align="center" class="qb_shad noprint" nowrap><a href="/detailedquote/stocks/FII" title="Detailed Quote for FII"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/FII" title="Chart for FII"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/FII" title="Opinion for FII"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=FII" title="Cheat Sheet for FII"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
  <tr id="dt1_FR" class="">
    <td align="left" class="ds_symbol qb_line" nowrap="nowrap"><a href="/quotes/stocks/FR">FR</a></td>
    <td align="left" class="ds_name qb_line" nowrap="nowrap"><a href="/quotes/stocks/FR">First Industrial Realty Trust</a></td>
    <td id="dt1_FR_last" align="right" class="ds_last qb_line" nowrap="nowrap">19.78</td>
    <td id="dt1_FR_change" align="right" class="ds_change qb_line" nowrap="nowrap"><span class="qb_up">+0.25</span></td>
    <td id="dt1_FR_pctchange" align="right" class="ds_pctchange qb_line" nowrap="nowrap"><span class="qb_up">+1.28%</span></td>
    <td id="dt1_FR_high" align="right" class="ds_high qb_line" nowrap="nowrap">19.89</td>
    <td id="dt1_FR_low" align="right" class="ds_low qb_line" nowrap="nowrap">19.42</td>
    <td id="dt1_FR_volume" align="right" class="ds_volume qb_line" nowrap="nowrap">235,772</td>
    <td id="dt1_FR_displaytime" align="right" class="ds_displaytime qb_line" nowrap="nowrap">13:38</td>
    <td align="center" class="qb_line noprint" nowrap><a href="/detailedquote/stocks/FR" title="Detailed Quote for FR"><img src="/shared/images/quote_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/charts/stocks/FR" title="Chart for FR"><img src="/shared/images/chart_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/opinions/stocks/FR" title="Opinion for FR"><img src="/shared/images/opinion_icon.gif" width="12" height="10" border="0" /></a>&nbsp;<a href="/cheatsheet.php?sym=FR" title="Cheat Sheet for FR"><img src="/shared/images/cheatsheet_icon.gif" width="12" height="10" border="0" /></a></td>
  </tr>
</tbody></table>
<div class="loading" id="ldt1"></div></div>
<table width="100%" border="0" cellspacing="2" cellpadding="1" class="pages" data-tableId="dt1">
  <tr>
    <td style="text-align: center"><span class="selPage curPage" data-pageNum="1">1 - 100</span>&nbsp;|&nbsp;<span class="selPage chgPage" data-pageNum="2">101 - 200</span>&nbsp;|&nbsp;<span class="selPage chgPage" data-pageNum="3">201 - 300</span>&nbsp;|&nbsp;<span class="selPage chgPage" data-pageNum="4">301 - 308</span>&nbsp;|&nbsp;<span class="selPage chgPage" data-pageNum="0">Full List</a></td>
  </tr>
</table>
	</div>
</div>
	<div class="foottext">
		The new highs list shows stocks that have made a new 52 week high price – or matched the previous 52 week high price – during the current trading session. This, then, is essentially a new highs list of stocks trading at their highest prices in the past 52 weeks. Along with the stocks’ new highs, the table also includes the highest and lowest price each stock held during the day, as well as links to more detailed information for each stock.	</div>
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
        var topstocks = ['ARCP','SAPE','AAPL','BAC','FB','BABA'];
        var topfutures = ['GC*0','SI*0','ZC*0','ZS*0','CL*0','NG*0'];
    </script>
    <script type="text/javascript" src="//s3.amazonaws.com/js2.aws.barchart.com/display/stickyfooter.js?v=20"></script>
            <div id="dmgfooter" class="dmgfooterProp" style="display: none;">
            <div class="ftnewssection"><span class="ftbold">News:</span></div>
            <div class="ftheadlinesection ftfirst">
                <div id="newsticker" style="width: 190px; height: 40px;"><div style="display:none;"><a href="/headlines/story/3301358/sysco-says-us-foods-purchase-will-close-in-2015">Sysco says US Foods purchase will close in 2015</a> <span class="byline">AP - 2 mins ago</span></div><div style="display:none;"><a href="/headlines/story/3309636/hsni-cares-celebrates-ten-year-anniversary-of-supporting-st-jude-children-s-research-hospital">HSNi Cares Celebrates Ten Year Anniversary Of Supporting St. Jude Children's Research Hospital®</a> <span class="byline">PR Newswire - 3 mins ago</span></div><div style="display:none;"><a href="/headlines/story/3309630/celeb-packed-funeral-held-for-oscar-de-la-renta">Celeb-packed funeral held for Oscar de la Renta</a> <span class="byline">AP - 3 mins ago</span></div><div style="display:none;"><a href="/headlines/story/3309571/bankmobile-to-ask-customers-to-participate-in-design-and-marketing-of-new-banking-platform">BankMobile To Ask Customers To Participate In Design And Marketing Of New Banking Platform</a> <span class="byline">PR Newswire - 8 mins ago</span></div><div style="display:none;"><a href="/headlines/story/3309549/cuba-seeks-over-8-billion-in-foreign-investment">Cuba seeks over $8 billion in foreign investment</a> <span class="byline">AP - 9 mins ago</span></div><div style="display:none;"><a href="/headlines/story/3309548/build-a-bear-workshop-creates-warm-hugs-and-magical-memories-for-the-holiday-season-with-new-disney-frozen-collection">Build-A-Bear Workshop Creates Warm Hugs And Magical Memories For The Holiday Season With New Disney Frozen Collection</a> <span class="byline">PR Newswire - 10 mins ago</span></div><div style="display:none;"><a href="/headlines/story/3309533/kirby-corporation-to-present-at-the-stephens-fall-investment-conference">Kirby Corporation To Present At The Stephens Fall Investment Conference</a> <span class="byline">PR Newswire - 11 mins ago</span></div><div style="display:none;"><a href="/headlines/story/3309490/security-contractor-breach-not-detected-for-months">Security contractor breach not detected for months</a> <span class="byline">AP - 11 mins ago</span></div><div style="display:none;"><a href="/headlines/story/11209593/extreme-networks-appoints-stephen-patak-as-vice-president-of-sales-for-us-and-canada">Extreme Networks Appoints Stephen Patak as Vice President of Sales for US and Canada</a> <span class="byline">PR Newswire - 12 mins ago</span></div><div style="display:none;"><a href="/headlines/story/3309500/solera-holdings-inc-reschedules-first-quarter-fiscal-2015-earnings-announcement-and-conference-call">Solera Holdings, Inc. Reschedules First Quarter Fiscal 2015 Earnings Announcement and Conference Call</a> <span class="byline">PR Newswire - 13 mins ago</span></div></div>            </div>
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
