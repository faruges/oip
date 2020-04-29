<!DOCTYPE html>
<html>
<title>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" href="<?php echo base_url('assets/css/estilos2.css') ?>">-->
<link type="text/css" href="<?php echo base_url('assets/css/estilos2.css') ?>" rel="stylesheet"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

/* =======================================================
 *
 *      Whatsapp Chat Support
 *      Version: 1
 *      By castlecode
 *
 *      Contact: http://codecanyon.net/user/castlecode
 *      Created: December 10, 2018
 *
 *      Copyright (c) 2018, castlecode. All rights reserved.
 *      Available only in http://codecanyon.net/
 *
 *      ---------------------------------
 *      CONTENTS
 *      ---------------------------------
 *
 *      [A] GLOBAL
 *      [B] BUTTON
 *      [C] BUTTON PERSON
 *      [D] POPUP
 *          [1] HEADER
 *          [2] MULTIPLE PERSONS
 *          [3] INPUT TEXT FIELD
 *
 * ======================================================= */

/* ====================================================================== *
        [A] GLOBAL
 * ====================================================================== */

  

 /* ====================================================================== *
        [B] BUTTON
 * ====================================================================== */

    .wcs_button{
        text-align: center;
        padding: 9px 18px;
        border-radius: 50px;
        background: #26C281;
        color: #fff;
        display: inline-block;
        margin-right: 3px;
        cursor: pointer;

        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
             -o-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
            -ms-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
                box-shadow: 0 1px 2px rgba(0,0,0,0.15);

    }
    .wcs_button .fa{
        font-size: 15px;
        margin-right: 3px;
    }

    .wcs_button_circle{
        width: 50px;
        height: 50px;
        border-radius: 100%;
        padding: 0;
    }
    .wcs_button_circle .fa{
        line-height: 50px;
        font-size: 25px;
        margin-right: 0px;
    }

    .wcs_button_label{
        cursor: pointer;
        display: inline-block;
        font-size: 12px;
        margin-right: 10px;
        margin-left: 10px;
        background: #d4f3e6;
        padding: 5px 10px;
        border-radius: 4px;

        -webkit-transition: .3s ease all;
           -moz-transition: .3s ease all;
                transition: .3s ease all;
    }
    .wcs_button_label_hide{
        -webkit-transform: translate(10px, 0);
           -moz-transform: translate(10px, 0);
            -ms-transform: translate(10px, 0);
                transform: translate(10px, 0);

        opacity: 0;
        visibility: hidden;
    }

    .wcs_fixed_right{
        z-index: 999;
        position: fixed;
        bottom: 20px;
        right: 20px;
    }

    .wcs_fixed_left{
        z-index: 999;
        position: fixed;
        bottom: 20px;
        left: 20px;
    }
    .wcs_fixed_left .wcs_popup{
        left: 0 !important;
        right: unset !important;
    }

/* ====================================================================== *
        [C] BUTTON PERSON
 * ====================================================================== */

    .wcs_button_person{
        padding: 7px 18px 8px 10px;
        border-radius: 50px;
        text-align: left;
        background: #26C281;
        color: #fff;

        -webkit-transition: .4s ease all;
           -moz-transition: .4s ease all;
                transition: .4s ease all;

        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
             -o-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
            -ms-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
                box-shadow: 0 1px 2px rgba(0,0,0,0.15);
    }

    .wcs_button_person:hover{
        -webkit-transform: translate(0,-3px);
           -moz-transform: translate(0,-3px);
            -ms-transform: translate(0,-3px);
                transform: translate(0,-3px);

        -webkit-box-shadow: 0 4px 8px 1px rgba(43,43,43,.15);
           -moz-box-shadow: 0 4px 8px 1px rgba(43,43,43,.15);
             -o-box-shadow: 0 4px 8px 1px rgba(43,43,43,.15);
            -ms-box-shadow: 0 4px 8px 1px rgba(43,43,43,.15);
                box-shadow: 0 4px 8px 1px rgba(43,43,43,.15);
    }

    /* PERSON IMG */

    .wcs_button_person_img{
        overflow: hidden;
        display:table-cell;
        vertical-align:middle;
    }

    .wcs_button_person_img img{
        border: 2px solid #fff;
        border-radius: 50%;
        display: block;
        width: 60px;
        height: 60px;
    }

    .wcs_button_person_img .fa{
        font-size: 60px;
    }

    /* PERSON CONTENT */

    .wcs_button_person_content{
        padding-left: 14px;
        display:table-cell;
        vertical-align:middle;
    }

    /* PERSON NAME */

    .wcs_button_person_name{
        font-size: 10px;
        color: rgba(255,255,255,.8);
    }

    /* PERSON DESCRIPTION */

    .wcs_button_person_description{
        font-size: 14px;
        font-weight: bold;
        line-height: 23px;
        color: #fff;
    }

    /* PERSON STATUS */

    .wcs_button_person_status{
        font-size: 10px;
        vertical-align: middle;
        color: #fff;
        background: rgba(255,255,255,.3);
        display: inline-block;
        padding: 1px 5px;
        border-radius: 5px;
    }

    /* BUTTON PERSON OFFLINE */

    .wcs_button_person_offline{
        background: #a4a4a4 !important;
        cursor: auto !important;
    }

    .wcs_button_person_offline:hover{
        -webkit-transform: translate(0,0) !important;
           -moz-transform: translate(0,0) !important;
            -ms-transform: translate(0,0) !important;
                transform: translate(0,0) !important;

        -webkit-box-shadow: none !important;
           -moz-box-shadow: none !important;
             -o-box-shadow: none !important;
            -ms-box-shadow: none !important;
                box-shadow: none !important;
    }

    .wcs_button_person_offline .wcs_button_person_status{
        background: #f1a528;
    }

    .wcs_button_person_offline .wcs_button_person_img{
        -webkit-filter: grayscale(1);
        filter: grayscale(1);
    }

/* ====================================================================== *
        [D] POPUP
 * ====================================================================== */

    .wcs_popup{
        position: absolute;
        width: 300px;
        bottom: 100%;
        right: 0;
        margin-bottom: 20px;
        visibility: hidden;
        max-width: calc(100vw - 60px);
    }

    /* CLOSE */

    .wcs_popup_close{
        position: absolute;
        top: 2px;
        right: 8px;
        cursor: pointer;

        opacity: .8;
        color: #fff;
        font-size: 18px;

        -webkit-transition: all 0.08s ease-in-out;
           -moz-transition: all 0.08s ease-in-out;
                transition: all 0.08s ease-in-out;
    }

    .wcs_popup_close:hover{
        opacity: 1;
    }

    /* ====================================================================== *
            [1] HEADER
     * ====================================================================== */

    .wcs_popup_header{
        padding: 20px;
        background: #26C281;
        border-top-right-radius: 8px;
        border-top-left-radius: 8px;
        color: #fff;
        text-align: center;

        -webkit-box-shadow: 0 4px 8px 1px rgba(43,43,43,.15);
           -moz-box-shadow: 0 4px 8px 1px rgba(43,43,43,.15);
             -o-box-shadow: 0 4px 8px 1px rgba(43,43,43,.15);
            -ms-box-shadow: 0 4px 8px 1px rgba(43,43,43,.15);
                box-shadow: 0 4px 8px 1px rgba(43,43,43,.15);
    }

    .wcs_popup_header .fa-whatsapp{
        font-size: 50px;
        display: block;
        margin-bottom: 20px;
    }

    .wcs_popup_header_description{
        display: block;
        margin-top: 10px;
        font-size: 12px;
    }

    /* ====================================================================== *
            [2] MULTIPLE PERSONS
     * ====================================================================== */

     /* CONTAINER */

    .wcs_popup_person_container{
        /*max-height: 470px;
        overflow-y: scroll;*/
        background: #fff;
        padding: 20px;
        border-bottom-right-radius: 8px;
        border-bottom-left-radius: 8px;

        -webkit-box-shadow: 0 4px 8px 1px rgba(43,43,43,.15);
           -moz-box-shadow: 0 4px 8px 1px rgba(43,43,43,.15);
             -o-box-shadow: 0 4px 8px 1px rgba(43,43,43,.15);
            -ms-box-shadow: 0 4px 8px 1px rgba(43,43,43,.15);
                box-shadow: 0 4px 8px 1px rgba(43,43,43,.15);
    }

    /* PERSON */

    .wcs_popup_person{
        background: #f5f7f9;
        padding: 10px;
        text-align: left;
        margin-bottom: 10px;
        cursor: pointer;

        -webkit-transition: .2s ease all;
           -moz-transition: .2s ease all;
                transition: .2s ease all;
    }

    .wcs_popup_person:hover{
        -webkit-box-shadow: 0 1px 2px rgba(43,43,43,.15);
           -moz-box-shadow: 0 1px 2px rgba(43,43,43,.15);
             -o-box-shadow: 0 1px 2px rgba(43,43,43,.15);
            -ms-box-shadow: 0 1px 2px rgba(43,43,43,.15);
                box-shadow: 0 1px 2px rgba(43,43,43,.15);
    }

    .wcs_popup_person:last-child{
        margin-bottom: 0;
    }

    .wcs_popup_person::after {
        content: "";
        clear: both;
        display: table;
    }

    /* PERSON IMG */

    .wcs_popup_person_img{
        overflow: hidden;
        display:table-cell;
        vertical-align:middle;
    }

    .wcs_popup_person_img img{
        border: 2px solid #26C281;
        border-radius: 50%;
        display: block;
        width: 60px;
        height: 60px;
    }

    /* PERSON CONTENT */

    .wcs_popup_person_content{
        padding-left: 15px;
        display:table-cell;
        vertical-align:middle;
    }

    /* PERSON NAME */

    .wcs_popup_person_name{
        font-size: 14px;
        color: #383838;
        font-weight: bold;
    }

    /* PERSON DESCRIPTION */

    .wcs_popup_person_description{
        font-size: 11px;
        line-height: 18px;
        color: #8c8c8c;
    }

    /* PERSON STATUS */

    .wcs_popup_person_status{
        font-size: 10px;
        vertical-align: middle;
        color: #fff;
        background: #26C281;
        border-radius: 5px;
        display: inline-block;
        padding: 1px 5px;
    }

    /* POPUP PERSON OFFLINE */

    .wcs_popup_person_offline{
        cursor: auto !important;
    }

    .wcs_popup_person_offline .wcs_popup_person_img{
        -webkit-filter: grayscale(1);
        filter: grayscale(1);
    }

    .wcs_popup_person_offline:hover{
        -webkit-box-shadow: none !important;
           -moz-box-shadow: none !important;
             -o-box-shadow: none !important;
            -ms-box-shadow: none !important;
                box-shadow: none !important;
    }

    .wcs_popup_person_offline .wcs_popup_person_status{
        background: #f1a528;
    }

    /* ====================================================================== *
            [3] INPUT TEXT FIELD
     * ====================================================================== */

    .wcs_popup_input{
        border-bottom-right-radius: 8px;
        border-bottom-left-radius: 8px;
        background: #fff;
        padding: 10px 10px;

        -webkit-box-shadow: 0 4px 8px 1px rgba(43,43,43,.15);
           -moz-box-shadow: 0 4px 8px 1px rgba(43,43,43,.15);
             -o-box-shadow: 0 4px 8px 1px rgba(43,43,43,.15);
            -ms-box-shadow: 0 4px 8px 1px rgba(43,43,43,.15);
                box-shadow: 0 4px 8px 1px rgba(43,43,43,.15);
    }

    .wcs_popup_input input{
        border: 0;
        outline: none;
        width: 90%;
        color: #555555;
    }

    .wcs_popup_input input::placeholder{
        color: #cfcfcf;
    }

    .wcs_popup_input>*{
        vertical-align: top;
    }

    .wcs_popup_input .fa{
        font-size: 17px;
        color: #9da3a5;
        vertical-align: middle;
        cursor: pointer;
    }

    /* AVATAR */

    .wcs_popup_avatar{
        overflow: hidden;
        position: absolute;
        left: -70px;
        bottom: -4px;
    }

    .wcs_fixed_left .wcs_popup_avatar{
        left: initial;
        right: -70px;
    }

    .wcs_popup_avatar img{
        border-radius: 50%;
        border: 2px solid #26C281;
        display: block;
        height: 50px;
        width: 50px;

        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
             -o-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
            -ms-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
                box-shadow: 0 1px 2px rgba(0,0,0,0.15);
    }

    .wcs_popup_input_offline{
        color: #f1a528;
    }

    .wcs_popup_input_offline+.wcs_popup_avatar{
        -webkit-filter: grayscale(1);
        filter: grayscale(1);
    }

    @media only screen and (max-width: 400px) {
        .wcs_popup_avatar{
            display: none;
        }
    }

/* ====================================================================== *
        [H] EFFECTS
 * ====================================================================== */

    .wcs-show .wcs_popup{
        visibility: visible;
    }

    /* Effect 0: Fade in */

    .wcs-effect-0 .wcs_popup{
        opacity: 0;

        -webkit-transition: opacity 0.3s;
        -moz-transition: opacity 0.3s;
        transition: opacity 0.3s;
    }
    .wcs-show.wcs-effect-0 .wcs_popup{
        opacity: 1;
    }

    /* Effect 1: Fade in and scale up */

    .wcs-effect-1 .wcs_popup{
        -webkit-transform: scale(0.7);
        -moz-transform: scale(0.7);
        -ms-transform: scale(0.7);
        transform: scale(0.7);
        opacity: 0;

        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
    }
    .wcs-show.wcs-effect-1 .wcs_popup{
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        opacity: 1;
    }

    /* Effect 2: Slide from the right */

    .wcs-effect-2 .wcs_popup {
        -webkit-transform: translateX(20%);
        -moz-transform: translateX(20%);
        -ms-transform: translateX(20%);
        transform: translateX(20%);
        opacity: 0;
        -webkit-transition: all 0.3s cubic-bezier(0.25, 0.5, 0.5, 0.9);
        -moz-transition: all 0.3s cubic-bezier(0.25, 0.5, 0.5, 0.9);
        transition: all 0.3s cubic-bezier(0.25, 0.5, 0.5, 0.9);
    }
    .wcs-show.wcs-effect-2 .wcs_popup {
        -webkit-transform: translateX(0);
        -moz-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
        opacity: 1;
    }

    /* Effect 3: Slide from the bottom */

    .wcs-effect-3 .wcs_popup {
        -webkit-transform: translateY(20%);
        -moz-transform: translateY(20%);
        -ms-transform: translateY(20%);
        transform: translateY(20%);
        opacity: 0;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
    }
    .wcs-show.wcs-effect-3 .wcs_popup {
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
        opacity: 1;
    }

    /* Effect 4: Newspaper */

    .wcs-effect-4 .wcs_popup {
        -webkit-transform: scale(0) rotate(720deg);
        -moz-transform: scale(0) rotate(720deg);
        -ms-transform: scale(0) rotate(720deg);
        transform: scale(0) rotate(720deg);
        opacity: 0;
    }
    .wcs-show.wcs-effect-4 ~ .datepicker-in-fullscreen-background,
    .wcs-effect-4 .wcs_popup {
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        transition: all 0.5s;
    }
    .wcs-show.wcs-effect-4 .wcs_popup {
        -webkit-transform: scale(1) rotate(0deg);
        -moz-transform: scale(1) rotate(0deg);
        -ms-transform: scale(1) rotate(0deg);
        transform: scale(1) rotate(0deg);
        opacity: 1;
    }

    /* Effect 5: fall */

    .wcs-effect-5.whatsapp_chat_support {
        -webkit-perspective: 1300px;
        -moz-perspective: 1300px;
        perspective: 1300px;
    }
    .wcs-effect-5 .wcs_popup {
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-transform: translateZ(600px) rotateX(20deg);
        -moz-transform: translateZ(600px) rotateX(20deg);
        -ms-transform: translateZ(600px) rotateX(20deg);
        transform: translateZ(600px) rotateX(20deg);
        opacity: 0;
    }
    .wcs-show.wcs-effect-5 .wcs_popup {
        -webkit-transition: all 0.3s ease-in;
        -moz-transition: all 0.3s ease-in;
        transition: all 0.3s ease-in;
        -webkit-transform: translateZ(0px) rotateX(0deg);
        -moz-transform: translateZ(0px) rotateX(0deg);
        -ms-transform: translateZ(0px) rotateX(0deg);
        transform: translateZ(0px) rotateX(0deg);
        opacity: 1;
    }

    /* Effect 6: side fall */

    .wcs-effect-6.whatsapp_chat_support {
        -webkit-perspective: 1300px;
        -moz-perspective: 1300px;
        perspective: 1300px;
    }
    .wcs-effect-6 .wcs_popup {
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-transform: translate(30%) translateZ(600px) rotate(10deg);
        -moz-transform: translate(30%) translateZ(600px) rotate(10deg);
        -ms-transform: translate(30%) translateZ(600px) rotate(10deg);
        transform: translate(30%) translateZ(600px) rotate(10deg);
        opacity: 0;
    }
    .wcs-show.wcs-effect-6 .wcs_popup {
        -webkit-transition: all 0.3s ease-in;
        -moz-transition: all 0.3s ease-in;
        transition: all 0.3s ease-in;
        -webkit-transform: translate(0%) translateZ(0) rotate(0deg);
        -moz-transform: translate(0%) translateZ(0) rotate(0deg);
        -ms-transform: translate(0%) translateZ(0) rotate(0deg);
        transform: translate(0%) translateZ(0) rotate(0deg);
        opacity: 1;
    }

    /* Effect 7:  3D Rotate from bottom */

    .wcs-effect-7.whatsapp_chat_support {
        -webkit-perspective: 1300px;
        -moz-perspective: 1300px;
        perspective: 1300px;
    }
    .wcs-effect-7 .wcs_popup {
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-transform: translateY(100%) rotateX(90deg);
        -moz-transform: translateY(100%) rotateX(90deg);
        -ms-transform: translateY(100%) rotateX(90deg);
        transform: translateY(100%) rotateX(90deg);
        -webkit-transform-origin: 0 100%;
        -moz-transform-origin: 0 100%;
        transform-origin: 0 100%;
        opacity: 0;
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
    }
    .wcs-show.wcs-effect-7 .wcs_popup {
        -webkit-transform: translateY(0%) rotateX(0deg);
        -moz-transform: translateY(0%) rotateX(0deg);
        -ms-transform: translateY(0%) rotateX(0deg);
        transform: translateY(0%) rotateX(0deg);
        opacity: 1;
    }

    /* Effect 8:  3D Rotate in from left */

    .wcs-effect-8.whatsapp_chat_support {
        -webkit-perspective: 1300px;
        -moz-perspective: 1300px;
        perspective: 1300px;
    }
    .wcs-effect-8 .wcs_popup {
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-transform: translateZ(100px) translateX(-30%) rotateY(90deg);
        -moz-transform: translateZ(100px) translateX(-30%) rotateY(90deg);
        -ms-transform: translateZ(100px) translateX(-30%) rotateY(90deg);
        transform: translateZ(100px) translateX(-30%) rotateY(90deg);
        -webkit-transform-origin: 0 100%;
        -moz-transform-origin: 0 100%;
        transform-origin: 0 100%;
        opacity: 0;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
    }
    .wcs-show.wcs-effect-8 .wcs_popup {
        -webkit-transform: translateZ(0px) translateX(0%) rotateY(0deg);
        -moz-transform: translateZ(0px) translateX(0%) rotateY(0deg);
        -ms-transform: translateZ(0px) translateX(0%) rotateY(0deg);
        transform: translateZ(0px) translateX(0%) rotateY(0deg);
        opacity: 1;
    }

    /* Effect 9: 3D flip horizontal */

    .wcs-effect-9.whatsapp_chat_support {
        -webkit-perspective: 1300px;
        -moz-perspective: 1300px;
        perspective: 1300px;
    }
    .wcs-effect-9 .wcs_popup {
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-transform: rotateY(-70deg);
        -moz-transform: rotateY(-70deg);
        -ms-transform: rotateY(-70deg);
        transform: rotateY(-70deg);
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
        opacity: 0;
    }
    .wcs-show.wcs-effect-9 .wcs_popup {
        -webkit-transform: rotateY(0deg);
        -moz-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        transform: rotateY(0deg);
        opacity: 1;
    }

    /* Effect 10: 3D flip vertical */

    .wcs-effect-10.whatsapp_chat_support {
        -webkit-perspective: 1300px;
        -moz-perspective: 1300px;
        perspective: 1300px;
    }
    .wcs-effect-10 .wcs_popup {
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-transform: rotateX(-70deg);
        -moz-transform: rotateX(-70deg);
        -ms-transform: rotateX(-70deg);
        transform: rotateX(-70deg);
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
        opacity: 0;
    }
    .wcs-show.wcs-effect-10 .wcs_popup {
        -webkit-transform: rotateX(0deg);
        -moz-transform: rotateX(0deg);
        -ms-transform: rotateX(0deg);
        transform: rotateX(0deg);
        opacity: 1;
    }

    /* Effect 11: 3D sign */

    .wcs-effect-11.whatsapp_chat_support {
        -webkit-perspective: 1300px;
        -moz-perspective: 1300px;
        perspective: 1300px;
    }
    .wcs-effect-11 .wcs_popup {
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-transform: rotateX(-60deg);
        -moz-transform: rotateX(-60deg);
        -ms-transform: rotateX(-60deg);
        transform: rotateX(-60deg);
        -webkit-transform-origin: 50% 0;
        -moz-transform-origin: 50% 0;
        transform-origin: 50% 0;
        opacity: 0;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
    }
    .wcs-show.wcs-effect-11 .wcs_popup {
        -webkit-transform: rotateX(0deg);
        -moz-transform: rotateX(0deg);
        -ms-transform: rotateX(0deg);
        transform: rotateX(0deg);
        opacity: 1;
    }

    /* Effect 12: Super scaled */

    .wcs-effect-12 .wcs_popup {
        -webkit-transform: scale(2);
        -moz-transform: scale(2);
        -ms-transform: scale(2);
        transform: scale(2);
        opacity: 0;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
    }
    .wcs-show.wcs-effect-12 .wcs_popup {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        opacity: 1;
    }

    /* Effect 13: 3D split */

    .wcs-effect-13.whatsapp_chat_support {
        -webkit-perspective: 1300px;
        -moz-perspective: 1300px;
        perspective: 1300px;
    }
    .wcs-effect-13 .wcs_popup {
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-transform: translateZ(-3000px) rotateY(90deg);
        -moz-transform: translateZ(-3000px) rotateY(90deg);
        -ms-transform: translateZ(-3000px) rotateY(90deg);
        transform: translateZ(-3000px) rotateY(90deg);
        opacity: 0;
    }
    .wcs-show.wcs-effect-13 .wcs_popup {
        -webkit-animation: slit .7s forwards ease-out;
        -moz-animation: slit .7s forwards ease-out;
        animation: slit .7s forwards ease-out;
    }
    @-webkit-keyframes slit {
        50% { -webkit-transform: translateZ(-250px) rotateY(89deg); opacity: .5; -webkit-animation-timing-function: ease-out;}
        100% { -webkit-transform: translateZ(0) rotateY(0deg); opacity: 1; }
    }
    @-moz-keyframes slit {
        50% { -moz-transform: translateZ(-250px) rotateY(89deg); opacity: .5; -moz-animation-timing-function: ease-out;}
        100% { -moz-transform: translateZ(0) rotateY(0deg); opacity: 1; }
    }
    @keyframes slit {
        50% { transform: translateZ(-250px) rotateY(89deg); opacity: 1; animation-timing-function: ease-in;}
        100% { transform: translateZ(0) rotateY(0deg); opacity: 1; }
    }

/* ====================================================================== *
        [G] DEBUG
 * ====================================================================== */

    .wcs_debug{
        position: fixed;
        padding: 10px;
        background: white;
        border: 1px solid #dadada;
        top: 5px;
        right: 5px;
    }

    .wcs_debug strong{
        width: 125px;
        display: inline-block;
    }


</style>


<body>




<div style="margin-left:7.5% ;margin-right:8.5%; font-size:20px">

<!--
<div class="whatsapp">
	<a href="https://wa.me/5211234567890?text=%20Me%20podrían%20ayudar%20contactdome%20por%20este%20medio" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
</div> -->

<div class="whatsapp_chat_support wcs_fixed_right wcs-effect-1 wcs-show" id="example_1">
					<div class="wcs_button_label wcs_button_label_hide">
			 			Questions? Let's Chat
			 		</div>
					<div class="wcs_button wcs_button_circle">
						<span class="fa fa-whatsapp"></span>
					</div>

					<div class="wcs_popup">
						     <div class="wcs_popup_close">
							      <span class="fa fa-close"></span>
						     </div>
						<div class="wcs_popup_header">
  							<strong>Necesitas Ayuda? Chatea con nosotros</strong>
  							<br>
  							<div class="wcs_popup_header_description">Click one of our representatives below</div>
						</div>
						<div class="wcs_popup_person_container">
  							<div class="wcs_popup_person" data-number="+528261708604">
								          <div class="wcs_popup_person_img"><img src="img/person_5.jpg" alt=""></div>
      								<div class="wcs_popup_person_content">
      									        <div class="wcs_popup_person_name">Mia Smith</div>
      									        <div class="wcs_popup_person_description">Sales Support</div>
      									        <div class="wcs_popup_person_status">En línea</div>
      								</div>
							 </div>

							<div class="wcs_popup_person" data-number="+528261708604">
    								<div class="wcs_popup_person_img"><img src="img/person_6.jpg" alt=""></div>
    								<div class="wcs_popup_person_content">
      									<div class="wcs_popup_person_name">James Brown</div>
      									<div class="wcs_popup_person_description">Customer Support</div>
      									<div class="wcs_popup_person_status">I'm Online</div>
    								</div>
							</div>
	</div>
</div>

</body>
</html>
