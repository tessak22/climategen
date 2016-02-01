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
(function(e,k){var l="tubepress",j=".",m="gallery",r=m+"Id",o="player",c="detached",f="html",g="-",s=l+j+m+j+o+j,h=k.Beacon.subscribe,i=k.Ajax.LoadStyler,n=i.applyLoadingStyle,p=i.removeLoadingStyle,q=function(t){return"#js-"+l+g+o+g+c+g+t},b=function(t){if(t.length>0){t[0].scrollIntoView(true)}},d=function(x,w){var v=w[r],t=q(v),u=e(t);n(t);b(u)},a=function(y,x){var w=x[r],v=x[f],t=q(w),u=e(t);u.html(v);p(t)};h(s+"invoke."+c,d);h(s+"populate."+c,a)}(jQuery,TubePress));