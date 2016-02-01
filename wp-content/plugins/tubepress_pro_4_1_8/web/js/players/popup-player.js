/*!
 * Copyright 2006 - 2015 TubePress LLC (http://tubepress.com)
 *
 * This file is part of TubePress (http://tubepress.com)
 *
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */
(function(d,k,a,c){var j="popup",f=k.Beacon.subscribe,q={},m="gallery",g="Id",t="tubepress."+m+".player.",r=m+g,o="item",i=o+g,l="height",b="width",n="embedded",h="mediaItem",p=function(u){return(u/2)},s=function(x,w){var D=k.Gallery,B=w[r],C=D.Options,z=C.getOption,A=z(B,n+"Height"),u=z(B,n+"Width"),y=p(a[l])-p(A),v=p(a[b])-p(u);q[B+w[i]]=c.open("","","location=0,directories=0,menubar=0,scrollbars=0,status=0,toolbar=0,width="+u+"px,height="+A+"px,top="+y+",left="+v)},e=function(y,x){var w=x[h],A=w.title,v='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">\n<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html;charset=utf-8" /><title>'+A+'</title></head><body style="margin: 0pt; background-color: black;">',z="</body></html>",u=q[x[r]+x[i]].document;u.write(v+x.html+z);u.close()};f(t+"invoke."+j,s);f(t+"populate."+j,e)}(jQuery,TubePress,screen,window));