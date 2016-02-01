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
(function(g,q,f){var j="tinybox",l="TINY",r="gallery",x=r+"Id",v="player",n=".",s="embedded",y="tubepress."+r+n+v+n,k=q.Beacon.subscribe,o=q.DomInjector,a=q.Lang.Utils,u=a.isDefined,p="web/vendor/"+j+"/",t="#tinycontent",h=function(){return u(f[l])},d=function(){if(!h()){o.loadJs(p+j+".js");o.loadCss(p+"style.css")}},w=function(z){return z[x]},i=function(D,z){var A=q.Gallery,C=A.Options,B=C.getOption,E=z?"Height":"Width";return B(D,s+E)},m=function(z){return i(z,true)},c=function(z){return i(z,false)},e=function(E,D){var C=f[l],B=w(D),A=c(B),z=m(B);C.box.show("",0,A,z,1)},b=function(D,C){var z=g(t),B=w(C),A=c(B);if(z.length>0&&z.width()!==parseInt(A,10)){setTimeout(function(){b(D,C)},10)}else{g(t).html(C.html)}};k(y+"invoke."+j,e);k(y+"populate."+j,b);d()}(jQuery,TubePress,window));