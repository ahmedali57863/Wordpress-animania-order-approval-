import"./redux-1.0.35-xa1uZ5t4.js";import{r as O}from"./vendor-1.0.35-CN03Eozo.js";var p={exports:{}},i={};/**
 * @license React
 * react-jsx-runtime.production.min.js
 *
 * Copyright (c) Facebook, Inc. and its affiliates.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */var m;function v(){if(m)return i;m=1;var t=O(),o=Symbol.for("react.element"),u=Symbol.for("react.fragment"),e=Object.prototype.hasOwnProperty,R=t.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED.ReactCurrentOwner,y={key:!0,ref:!0,__self:!0,__source:!0};function _(s,r,c){var n,f={},a=null,l=null;c!==void 0&&(a=""+c),r.key!==void 0&&(a=""+r.key),r.ref!==void 0&&(l=r.ref);for(n in r)e.call(r,n)&&!y.hasOwnProperty(n)&&(f[n]=r[n]);if(s&&s.defaultProps)for(n in r=s.defaultProps,r)f[n]===void 0&&(f[n]=r[n]);return{$$typeof:o,type:s,key:a,ref:l,props:f,_owner:R.current}}return i.Fragment=u,i.jsx=_,i.jsxs=_,i}var d;function h(){return d||(d=1,p.exports=v()),p.exports}var g=h();function x(){return x=Object.assign?Object.assign.bind():function(t){for(var o=1;o<arguments.length;o++){var u=arguments[o];for(var e in u)({}).hasOwnProperty.call(u,e)&&(t[e]=u[e])}return t},x.apply(null,arguments)}function E(t,o){if(t==null)return{};var u={};for(var e in t)if({}.hasOwnProperty.call(t,e)){if(o.indexOf(e)!==-1)continue;u[e]=t[e]}return u}export{x as _,E as a,g as j};
