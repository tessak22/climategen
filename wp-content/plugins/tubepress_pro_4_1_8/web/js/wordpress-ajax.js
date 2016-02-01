/*!
 * Copyright 2006 - 2015 TubePress LLC (http://tubepress.com)
 *
 * This file is part of TubePress (http://tubepress.com)
 *
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */
(function(d,g){var e,j="url",a="tubepress",b="action",h="data",c=h+"Type",f=function(s,o,l){var n=o[h],m=n&&n.hasOwnProperty(a+"_"+b),q,k,p,r;if(!m){return}q=s[j];p=q===e;k=s[c]==="html";r=q.indexOf(e+" ")===0;if(p||(k&&r)){n[b]=a;s[h]=d.param(n)}},i=function(){d.ajaxPrefilter(f);e=g.Environment.getAjaxEndpointUrl()};d(i)}(jQuery,TubePress));