/*!
 * Copyright 2006 - 2015 TubePress LLC (http://tubepress.com/)
 *
 * This file is part of TubePress Pro.
 *
 * License summary
 *   - Can be used on 1 site, 1 server
 *   - Cannot be resold or distributed
 *   - Commercial use allowed
 *   - Can modify source-code but cannot distribute modifications (derivative works)
 *
 * Please see http://tubepress.com/license for details.
 */
(function(d,m){var r="fancybox",n="gallery",q="player",o="embedded",e="jquery",h="mediaItem",j="title",g="-1.3.4.",i=".",t=n+"Id",f=m.Beacon.subscribe,k=m.DomInjector,a=m.Lang.Utils,p=a.isDefined,l="web/vendor/"+r+"/",u="tubepress."+n+i+q+i,v=function(){return p(d[r])},s=function(){if(!v()){var w=l+e+i+r+g;k.loadJs(w+"js");k.loadCss(w+"css")}},c=function(){d.fancybox.showActivity()},b=function(z,y){var C=y[t],E=m.Gallery,D=E.Options,A=D.getOption,B=A(C,o+"Height"),x=A(C,o+"Width"),w={content:y.html,height:B,width:x,autoDimensions:false};if(p(y[h])&&p(y[h][j])){w[j]=y[h][j]}d.fancybox(w)};f(u+"invoke."+r,c);f(u+"populate."+r,b);s()}(jQuery,TubePress));