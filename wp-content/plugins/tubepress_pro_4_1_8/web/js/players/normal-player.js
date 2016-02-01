/*!
 * Copyright 2006 - 2015 TubePress LLC (http://tubepress.com)
 *
 * This file is part of TubePress (http://tubepress.com)
 *
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */
(function(g,s){var t="tubepress",E="#",a=t+"_",z="embedded_",x="player",u="gallery",F=u+"Id",i="html",q=".",l=" ",j="-",b="normal",r="title",c=":first",n=q+"js"+j+t+j+x+j+b+c,p=t+q+u+q+x+q,D=s.Beacon,k=D.subscribe,w=D.publish,m=s.Ajax.LoadStyler,v=m.applyLoadingStyle,A=m.removeLoadingStyle,y=false,C=function(H){return s.Gallery.Selectors.getOutermostSelectorModern(H)+l+n},o=function(H){return E+a+z+r+"_"+H},e=function(H){return g(o(H))},B=function(H){return E+a+z+"object_"+H},f=function(H){return g(B(H))},d=function(M,P){var L={},H="disable",J="target",K="duration",I,N,O;if(M.length>0){L[x+"Name"]=b;L[H]=y;L[F]=P;L[J]=M.offset().top;L[K]=0;w(p+"scroll",L);N=L[H]!==y;O=L[J];I=L[K];if(!N){g("html, body").animate({scrollTop:O},I)}}},G=function(O,N){var L=N[F],M=o(L),K=e(L),I=B(L),H=C(L),J=g(H);v(H);v(M);v(I);d(J,L);d(K,L)},h=function(O,N){var M=N[F],L=e(M),J=f(M),K=N[i],H=C(M),I=g(H);if(J.length>0&&L.length>0){L.parent("div").replaceWith(K)}else{I.html(K);A(H)}};k(p+"invoke"+q+b,G);k(p+"populate"+q+b,h)}(jQuery,TubePress));