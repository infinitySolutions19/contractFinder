 @section('header')

    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/homesearch.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/homesearchmain.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/pricingtable.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/multistepform.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.png')}}" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <style type="text/css">

                    /* Ion.RangeSlider

            // css version 2.0.3

            // Â© 2013-2014 Denis Ineshin | IonDen.com

            // ===================================================================================================================*/



            /* =====================================================================================================================

            // RangeSlider */



            .irs {

                position: relative; display: block;

                -webkit-touch-callout: none;

                -webkit-user-select: none;

                 -khtml-user-select: none;

                   -moz-user-select: none;

                    -ms-user-select: none;

                        user-select: none;

            }

                .irs-line {

                    position: relative; display: block;

                    overflow: hidden;

                    outline: none !important;

                }

                    .irs-line-left, .irs-line-mid, .irs-line-right {

                        position: absolute; display: block;

                        top: 0;

                    }

                    .irs-line-left {

                        left: 0; width: 11%;

                    }

                    .irs-line-mid {

                        left: 9%; width: 82%;

                    }

                    .irs-line-right {

                        right: 0; width: 11%;

                    }



                .irs-bar {

                    position: absolute; display: block;

                    left: 0; width: 0;

                }

                    .irs-bar-edge {

                        position: absolute; display: block;

                        top: 0; left: 0;

                    }



                .irs-shadow {

                    position: absolute; display: none;

                    left: 0; width: 0;

                }



                .irs-slider {

                    position: absolute; display: block;

                    cursor: default;

                    z-index: 1;

                }

                    .irs-slider.single {



                    }

                    .irs-slider.from {



                    }

                    .irs-slider.to {



                    }

                    .irs-slider.type_last {

                        z-index: 2;

                    }



                .irs-min {

                    position: absolute; display: block;

                    left: 0;

                    cursor: default;

                }

                .irs-max {

                    position: absolute; display: block;

                    right: 0;

                    cursor: default;

                }



                .irs-from, .irs-to, .irs-single {

                    position: absolute; display: block;

                    top: 0; left: 0;

                    cursor: default;

                    white-space: nowrap;

                }



            .irs-grid {

                position: absolute; display: none;

                bottom: 0; left: 0;

                width: 100%; height: 20px;

            }

            .irs-with-grid .irs-grid {

                display: block;

            }

                .irs-grid-pol {

                    position: absolute;

                    top: 0; left: 0;

                    width: 1px; height: 8px;

                    background: #000;

                }

                .irs-grid-pol.small {

                    height: 4px;

                }

                .irs-grid-text {

                    position: absolute;

                    bottom: 0; left: 0;

                    white-space: nowrap;

                    text-align: center;

                    font-size: 9px; line-height: 9px;

                    padding: 0 3px;

                    color: #000;

                }



            .irs-disable-mask {

                position: absolute; display: block;

                top: 0; left: -1%;

                width: 102%; height: 100%;

                cursor: default;

                background: rgba(0,0,0,0.0);

                z-index: 2;

            }

            .lt-ie9 .irs-disable-mask {

                background: #000;

                filter: alpha(opacity=0);

                cursor: not-allowed;

            }



            .irs-disabled {

                opacity: 0.4;

            }





            .irs-hidden-input {

                position: absolute !important;

                display: block !important;

                top: 0 !important;

                left: 0 !important;

                width: 0 !important;

                height: 0 !important;

                font-size: 0 !important;

                line-height: 0 !important;

                padding: 0 !important;

                margin: 0 !important;

                outline: none !important;

                z-index: -9999 !important;

                background: none !important;

                border-style: solid !important;

                border-color: transparent !important;

            }





            /* Ion.RangeSlider, Simple Skin

            // css version 2.0.3

            // Â© Denis Ineshin, 2014    https://github.com/IonDen

            // Â© guybowden, 2014        https://github.com/guybowden

            // ===================================================================================================================*/



            /* =====================================================================================================================

            // Skin details */



            .irs {

                height: 55px;

            }

            .irs-with-grid {

                height: 75px;

            }

            .irs-line {

                height: 10px; top: 33px;

                background: #EEE;

                background: linear-gradient(to bottom, #DDD -50%, #FFF 150%); /* W3C */

                border: 1px solid #CCC;

                border-radius: 16px;

                -moz-border-radius: 16px;

            }

                .irs-line-left {

                    height: 8px;

                }

                .irs-line-mid {

                    height: 8px;

                }

                .irs-line-right {

                    height: 8px;

                }



            .irs-bar {

                height: 10px; top: 33px;

                border-top: 1px solid #ffb54c;

                border-bottom: 1px solid #ffb54c;

                background: #ffcc45;

                background: #FF379A; /* W3C */

            }

                .irs-bar-edge {

                    height: 10px; top: 33px;

                    width: 14px;

                    border: 1px solid #428bca;

                    border-right: 0;

                    background: #428bca;

                    background: linear-gradient(to top, rgba(66,139,202,1) 0%,rgba(127,195,232,1) 100%); /* W3C */

                    border-radius: 16px 0 0 16px;

                    -moz-border-radius: 16px 0 0 16px;

                }



            .irs-shadow {

                height: 2px; top: 38px;

                background: #000;

                opacity: 0.3;

                border-radius: 5px;

                -moz-border-radius: 5px;

            }

            .lt-ie9 .irs-shadow {

                filter: alpha(opacity=30);

            }



            .irs-slider {

                top: 25px;

                width: 27px; height: 27px;

                border: 1px solid #AAA;

                background: #DDD;

                background: linear-gradient(to bottom, rgba(255,255,255,1) 0%,rgba(220,220,220,1) 20%,rgba(255,255,255,1) 100%); /* W3C */

                border-radius: 27px;

                -moz-border-radius: 27px;

                box-shadow: 1px 1px 3px rgba(0,0,0,0.3);

                cursor: pointer;

            }



            .irs-slider.state_hover, .irs-slider:hover {

                background: #FFF;

            }



            .irs-min, .irs-max {

                color: #333;

                font-size: 12px; line-height: 1.333;

                text-shadow: none;

                top: 0;

                padding: 1px 5px;

                background: rgba(0,0,0,0.1);

                border-radius: 3px;

                -moz-border-radius: 3px;

            }



            .lt-ie9 .irs-min, .lt-ie9 .irs-max {

                background: #ccc;

            }



            .irs-from, .irs-to, .irs-single {

                color: #fff;

                font-size: 14px; line-height: 1.333;

                text-shadow: none;

                padding: 1px 5px;

                background: #FF379A;

                border-radius: 3px;

                -moz-border-radius: 3px;

            }

            .lt-ie9 .irs-from, .lt-ie9 .irs-to, .lt-ie9 .irs-single {

                background: #999;

            }



            .irs-grid {

                height: 27px;

            }

            .irs-grid-pol {

                opacity: 0.5;

                background: #428bca;

            }

            .irs-grid-pol.small {

                background: #999;

            }



            .irs-grid-text {

                bottom: 5px;

                color: #99a4ac;

            }



            .irs-disabled {

            }



            /*searchbox checkboxes css*/



            .funkyradio div {

                  clear: both;

                  overflow: hidden;

                }



                .funkyradio label {

                  width: 100%;

                  border-radius: 3px;

                  bo/*rder: 1px solid #D1D3D4;*/

                  font-weight: normal;

                }



                .funkyradio input[type="radio"]:empty,

                .funkyradio input[type="checkbox"]:empty {

                  display: none;

                }



                .funkyradio input[type="radio"]:empty ~ label,

                .funkyradio input[type="checkbox"]:empty ~ label {

                  position: relative;

                  /*line-height: 1.5em;*/

                  text-indent: 3.25em;

                  margin-top: 5px;

                  cursor: pointer;

                  -webkit-user-select: none;

                     -moz-user-select: none;

                      -ms-user-select: none;

                          user-select: none;

                          margin: 15px;

                          width:  88%;

                          font-size: 15px;

                }



                .funkyradio input[type="radio"]:empty ~ label:before,

                .funkyradio input[type="checkbox"]:empty ~ label:before {

                  position: absolute;

                  display: block;

                  top: 0;

                  bottom: 0;

                  left: 0;

                  content: '';

                  width: 2.5em;

                  background: #D1D3D4;

                  border-radius: 3px 0 0 3px;

                }



                .funkyradio input[type="radio"]:hover:not(:checked) ~ label,

                .funkyradio input[type="checkbox"]:hover:not(:checked) ~ label {

                  color: #888;

                }



                .funkyradio input[type="radio"]:hover:not(:checked) ~ label:before,

                .funkyradio input[type="checkbox"]:hover:not(:checked) ~ label:before {

                  content: '\2714';

                  text-indent: .9em;

                  color: #C2C2C2;

                }



                .funkyradio input[type="radio"]:checked ~ label,

                .funkyradio input[type="checkbox"]:checked ~ label {

                  color: #777;

                }



                .funkyradio input[type="radio"]:checked ~ label:before,

                .funkyradio input[type="checkbox"]:checked ~ label:before {

                  content: '\2714';

                  text-indent: .9em;

                  color: #333;

                  background-color: #ccc;

                }



                .funkyradio input[type="radio"]:focus ~ label:before,

                .funkyradio input[type="checkbox"]:focus ~ label:before {

                  box-shadow: 0 0 0 3px #999;

                }



                .funkyradio-default input[type="radio"]:checked ~ label:before,

                .funkyradio-default input[type="checkbox"]:checked ~ label:before {

                  color: #333;

                  background-color: #ccc;

                }



                .funkyradio-primary input[type="radio"]:checked ~ label:before,

                .funkyradio-primary input[type="checkbox"]:checked ~ label:before {

                  color: #fff;

                  background-color: #337ab7;

                }



                .funkyradio-success input[type="radio"]:checked ~ label:before,

                .funkyradio-success input[type="checkbox"]:checked ~ label:before {

                  color: #fff;

                  /*background-color: #5cb85c;*/

                  background: #FF379A;

                }



                .funkyradio-danger input[type="radio"]:checked ~ label:before,

                .funkyradio-danger input[type="checkbox"]:checked ~ label:before {

                  color: #fff;

                  background-color: #d9534f;

                }



                .funkyradio-warning input[type="radio"]:checked ~ label:before,

                .funkyradio-warning input[type="checkbox"]:checked ~ label:before {

                  color: #fff;

                  background-color: #f0ad4e;

                }



                .funkyradio-info input[type="radio"]:checked ~ label:before,

                .funkyradio-info input[type="checkbox"]:checked ~ label:before {

                  color: #fff;

                  background-color: #5bc0de;

                }
    </style>

@endsection
