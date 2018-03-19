(function(){function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s}return e})()({1:[function(require,module,exports){
'use strict';

var _navbar = require('./navbar');

var _navbar2 = _interopRequireDefault(_navbar);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

(function () {
    _navbar2.default.init();
})();

},{"./navbar":2}],2:[function(require,module,exports){
'use strict';

Object.defineProperty(exports, "__esModule", {
    value: true
});
var menuActive = false;

function init() {
    var toggle = document.querySelector('.mobile-nav-toggle');
    var doc = document.querySelector('html');

    toggle.addEventListener('click', function () {
        if (menuActive == false) {
            doc.classList.add('nav-open');
            menuActive = true;
        } else {
            doc.classList.remove('nav-open');
            menuActive = false;
        }
    });
}

exports.default = {
    init: init
};

},{}]},{},[1]);
