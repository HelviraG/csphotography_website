require('./bootstrap');

import $ from 'jquery';
import jQuery from 'jquery';

window.$ = $;
window.jQuery = jQuery;

import lightgallery from 'lightgallery'
window.lightgallery = lightgallery


$(document).ready(function() {
    $("#lightgallery").lightGallery(); 
});
