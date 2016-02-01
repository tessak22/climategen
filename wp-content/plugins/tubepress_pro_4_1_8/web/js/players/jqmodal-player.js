/*!
 * Copyright 2006 - 2015 TubePress LLC (http://tubepress.com)
 *
 * This file is part of TubePress (http://tubepress.com)
 *
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */
(function(b,l){var h="jqmodal",f=l.Beacon.subscribe,k="web/vendor/jqmodal/jqModal.",j=l.DomInjector,m="gallery",n="embedded",d="px",g="Id",e="id",r="tubepress."+m+".player.",p=m+g,i="item"+g,a=function(s){s.o.remove();s.w.remove()},o=function(s){return h+s[p]+s[i]},q=function(w,u){var v=b("<div />"),B=l.Gallery,z=u[p],A=B.Options,x=A.getOption,s=x(z,n+"Width",640),y=x(z,n+"Height",360),t=(-1*(s/2));v.attr(e,o(u));v.hide();v.height(y+d);v.width(s+d);v.addClass("jqmWindow");v.css("margin-left",t+d);v.appendTo("body");v.jqm({onHide:a}).jqmShow()},c=function(u,t){var s=b("#"+o(t));s.html(t.html)};if(!b.isFunction(b.fn.jqm)){j.loadJs(k+"js");j.loadCss(k+"css")}f(r+"invoke."+h,q);f(r+"populate."+h,c)}(jQuery,TubePress));