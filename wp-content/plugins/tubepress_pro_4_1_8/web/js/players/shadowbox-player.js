/*!
 * Copyright 2006 - 2015 TubePress LLC (http://tubepress.com)
 *
 * This file is part of TubePress (http://tubepress.com)
 *
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */
(function(f,n){var m="shadowbox",r="player",g="web/vendor/"+m+"/"+m,h="html",p="gallery",t=p+"Id",q="embedded",s=n.Beacon,i=s.subscribe,a=n.Lang.Utils,j=n.DomInjector,u="tubepress."+p+"."+r+".",b="#sb-"+r,o=function(){return a.isDefined(window.Shadowbox)},d=function(){Shadowbox.path=g;Shadowbox.init({initialHeight:160,initialWidth:320,skipSetup:true,players:[h],useSizzle:false});Shadowbox.load()},k=function(){if(!o()){j.loadJs(g+".js");j.loadCss(g+".css");a.callWhenTrue(d,o,300)}},e=function(C,B){var w=n.Gallery,A=B[t],y=w.Options,x=y.getOption,v=x(A,q+"Height"),z=x(A,q+"Width");Shadowbox.open({player:h,height:v,width:z,content:"&nbsp;"})},l=function(v){f(b).html(v)},c=function(w,v){var y=function(){l(v.html)},x=function(){return f(b).length>0};a.callWhenTrue(y,x,100)};i(u+"invoke."+m,e);i(u+"populate."+m,c);k()}(jQuery,TubePress));