"use strict";
    
import * as data from "./dashboards-charts"

import {ResizeMenu, toggleSidemenu, closedSidemenuFn, detachedFn, iconTextFn, doubletFn, menuClickFn, menuhoverFn, iconClickFn, iconHoverFn, setNavActive, clearNavDropdown, 
    checkHoriMenu, iconOverayFn} from './defaultmenu'

let mainContent;
(function () {
    let html = document.querySelector('html');
    mainContent = document.querySelector('.main-content');
    if (document.querySelector("#hs-overlay-switcher")) {
        localStorageBackup2();
        switcherClick();
        checkOptions();
        setTimeout(() => {
            checkOptions();
        }, 1000);
        /* LTR to RTL */
        // html.setAttribute("dir" , "rtl") // for rtl version
    }
})();

function switcherClick() {
    let ltrBtn, rtlBtn, verticalBtn, horiBtn, lightBtn, darkBtn, boxedBtn, fullwidthBtn, scrollHeaderBtn, scrollMenuBtn, fixedHeaderBtn, fixedMenuBtn, lightHeaderBtn, darkHeaderBtn, colorHeaderBtn, gradientHeaderBtn, lightMenuBtn, darkMenuBtn, colorMenuBtn, gradientMenuBtn, transparentMenuBtn, transparentHeaderBtn, regular, classic, modern, defaultBtn, closedBtn, iconTextBtn, detachedBtn, overlayBtn, doubleBtn, menuClickBtn, menuHoverBtn, iconClickBtn, iconHoverBtn, primaryDefaultColor1Btn, primaryDefaultColor2Btn, primaryDefaultColor3Btn, primaryDefaultColor4Btn, primaryDefaultColor5Btn, bgDefaultColor1Btn, bgDefaultColor2Btn, bgDefaultColor3Btn, bgDefaultColor4Btn, bgDefaultColor5Btn, bgImage1Btn, bgImage2Btn, bgImage3Btn, bgImage4Btn, bgImage5Btn, ResetAll, resetBtn,loaderEnable,loaderDisable;
    let html = document.querySelector('html');
    lightBtn = document.querySelector('#switcher-light-theme');
    darkBtn = document.querySelector('#switcher-dark-theme');
    ltrBtn = document.querySelector('#switcher-ltr');
    rtlBtn = document.querySelector('#switcher-rtl');
    verticalBtn = document.querySelector('#switcher-vertical');
    horiBtn = document.querySelector('#switcher-horizontal');
    boxedBtn = document.querySelector('#switcher-boxed');
    fullwidthBtn = document.querySelector('#switcher-full-width');
    fixedMenuBtn = document.querySelector('#switcher-menu-fixed');
    scrollMenuBtn = document.querySelector('#switcher-menu-scroll');
    fixedHeaderBtn = document.querySelector('#switcher-header-fixed');
    scrollHeaderBtn = document.querySelector('#switcher-header-scroll');
    lightHeaderBtn = document.querySelector('#switcher-header-light');
    darkHeaderBtn = document.querySelector('#switcher-header-dark');
    colorHeaderBtn = document.querySelector('#switcher-header-primary');
    gradientHeaderBtn = document.querySelector('#switcher-header-gradient');
    transparentHeaderBtn = document.querySelector('#switcher-header-transparent');
    lightMenuBtn = document.querySelector('#switcher-menu-light');
    darkMenuBtn = document.querySelector('#switcher-menu-dark');
    colorMenuBtn = document.querySelector('#switcher-menu-primary');
    gradientMenuBtn = document.querySelector('#switcher-menu-gradient');
    transparentMenuBtn = document.querySelector('#switcher-menu-transparent');
    regular = document.querySelector('#switcher-regular');
    classic = document.querySelector('#switcher-classic');
    modern = document.querySelector('#switcher-modern');
    defaultBtn = document.querySelector('#switcher-default-menu');
    menuClickBtn = document.querySelector('#switcher-menu-click');
    menuHoverBtn = document.querySelector('#switcher-menu-hover');
    iconClickBtn = document.querySelector('#switcher-icon-click');
    iconHoverBtn = document.querySelector('#switcher-icon-hover');
    closedBtn = document.querySelector('#switcher-closed-menu');
    iconTextBtn = document.querySelector('#switcher-icontext-menu');
    overlayBtn = document.querySelector('#switcher-icon-overlay');
    doubleBtn = document.querySelector('#switcher-double-menu');
    detachedBtn = document.querySelector('#switcher-detached');
    resetBtn = document.querySelector('#resetbtn');
    primaryDefaultColor1Btn = document.querySelector('#switcher-primary');
    primaryDefaultColor2Btn = document.querySelector('#switcher-primary1');
    primaryDefaultColor3Btn = document.querySelector('#switcher-primary2');
    primaryDefaultColor4Btn = document.querySelector('#switcher-primary3');
    primaryDefaultColor5Btn = document.querySelector('#switcher-primary4');
    bgDefaultColor1Btn = document.querySelector('#switcher-background');
    bgDefaultColor2Btn = document.querySelector('#switcher-background1');
    bgDefaultColor3Btn = document.querySelector('#switcher-background2');
    bgDefaultColor4Btn = document.querySelector('#switcher-background3');
    bgDefaultColor5Btn = document.querySelector('#switcher-background4');
    bgImage1Btn = document.querySelector('#switcher-bg-img');
    bgImage2Btn = document.querySelector('#switcher-bg-img1');
    bgImage3Btn = document.querySelector('#switcher-bg-img2');
    bgImage4Btn = document.querySelector('#switcher-bg-img3');
    bgImage5Btn = document.querySelector('#switcher-bg-img4');
    ResetAll = document.querySelector('#reset-all');
    loaderEnable = document.querySelector('#switcher-loader-enable');
    loaderDisable = document.querySelector('#switcher-loader-disable');

   // primary theme
  let primaryColor1Var = primaryDefaultColor1Btn.addEventListener(
    "click",
    () => {
        localStorage.setItem("primaryRGB", "58, 88, 146");
        localStorage.setItem("primaryRGB1", "58 88 146");
        html.style.setProperty("--primary-rgb", `58, 88, 146`);
        html.style.setProperty("--primary", `58 88 146`);
        updateColors();
    }
  );
  let primaryColor2Var = primaryDefaultColor2Btn.addEventListener(
    "click",
    () => {
        localStorage.setItem("primaryRGB", "49, 176, 176");
        localStorage.setItem("primaryRGB1", "49 176 176");
        html.style.setProperty("--primary-rgb", `49, 176, 176`);
        html.style.setProperty("--primary", `49 176 176`);
        updateColors();
    }
  );
  let primaryColor3Var = primaryDefaultColor3Btn.addEventListener(
    "click",
    () => {
        localStorage.setItem("primaryRGB", "170, 82, 216");
        localStorage.setItem("primaryRGB1", "170 82 216");
        html.style.setProperty("--primary-rgb", `170, 82, 216`);
        html.style.setProperty("--primary", `170 82 216`);
        updateColors();
    }
  );
  let primaryColor4Var = primaryDefaultColor4Btn.addEventListener(
    "click",
    () => {
        localStorage.setItem("primaryRGB", "80, 198, 118");
        localStorage.setItem("primaryRGB1", "80 198 118");
        html.style.setProperty("--primary-rgb", `80, 198, 118`);
        html.style.setProperty("--primary", `80 198 118`);
        updateColors();
    }
  );
  let primaryColor5Var = primaryDefaultColor5Btn.addEventListener(
    "click",
    () => {
        localStorage.setItem("primaryRGB", "244, 86, 86");
        localStorage.setItem("primaryRGB1", "244 86 86");
        html.style.setProperty("--primary-rgb", `244, 86, 86`);
        html.style.setProperty("--primary", `244 86 86`);
        updateColors();
    }
  );

   // Background theme
   let backgroundColor1Var = bgDefaultColor1Btn.addEventListener("click", () => {
    localStorage.setItem("bodyBgRGB", "20 30 96");
    localStorage.setItem("darkBgRGB", "25 38 101");
    localStorage.setItem("valexMenu","dark");
    localStorage.setItem("valexHeader","dark");
    localStorage.removeItem("hs_theme","dark");
    html.classList.add("dark");
    html.classList.remove("light");
    html.setAttribute("data-menu-styles", "dark");
    html.setAttribute("data-header-styles", "dark");
    document.querySelector('html').style.setProperty('--light', "25 38 101");
    document.querySelector('html').style.setProperty('--input-border', "20, 30, 101");
    localStorage.setItem("--light", "25 38 101");
    document.querySelector('#switcher-menu-dark').checked = true
    document.querySelector('#switcher-header-dark').checked = true
    document.querySelector("html").style.setProperty("--body-bg", localStorage.bodyBgRGB);
    document.querySelector("html").style.setProperty("--dark-bg", localStorage.darkBgRGB);
    document.querySelector("#switcher-dark-theme").checked = true;
  });
  let backgroundColor2Var = bgDefaultColor2Btn.addEventListener("click", () => {
    localStorage.setItem("bodyBgRGB", "15 95 95");
    localStorage.setItem("darkBgRGB", "16 104 104");
    localStorage.setItem("valexMenu","dark");
    localStorage.setItem("valexHeader","dark");
    localStorage.removeItem("hs_theme","dark");
    html.classList.add("dark");
    html.classList.remove("light");
    html.setAttribute("data-menu-styles", "dark");
    html.setAttribute("data-header-styles", "dark");
    document.querySelector('html').style.setProperty('--light', "16 104 104");
    document.querySelector('html').style.setProperty('--input-border', "15, 95, 95");
    localStorage.setItem("--light", "16 104 104");
    document.querySelector('#switcher-menu-dark').checked = true
    document.querySelector('#switcher-header-dark').checked = true
    document.querySelector("html").style.setProperty("--body-bg", localStorage.bodyBgRGB);
    document.querySelector("html").style.setProperty("--dark-bg", localStorage.darkBgRGB);
    document.querySelector("#switcher-dark-theme").checked = true;
  });
  let backgroundColor3Var = bgDefaultColor3Btn.addEventListener("click", () => {
    localStorage.setItem("bodyBgRGB", "87 48 121");
    localStorage.setItem("darkBgRGB", "98 51 140");
    localStorage.setItem("valexMenu","dark");
    localStorage.setItem("valexHeader","dark");
    localStorage.removeItem("hs_theme","dark");
    html.classList.add("dark");
    html.classList.remove("light");
    html.setAttribute("data-menu-styles", "dark");
    html.setAttribute("data-header-styles", "dark");
    document.querySelector('html').style.setProperty('--light', "98 51 140");
    document.querySelector('html').style.setProperty('--input-border', "87 ,48 ,121");
    localStorage.setItem("--light", "98 51 140");
    document.querySelector('#switcher-menu-dark').checked = true
    document.querySelector('#switcher-header-dark').checked = true
    document.querySelector("html").style.setProperty("--body-bg", localStorage.bodyBgRGB);
    document.querySelector("html").style.setProperty("--dark-bg", localStorage.darkBgRGB);
    document.querySelector("#switcher-dark-theme").checked = true;
  });
  let backgroundColor4Var = bgDefaultColor4Btn.addEventListener("click", () => {
    localStorage.setItem("bodyBgRGB", "26 93 48");
    localStorage.setItem("darkBgRGB", "28 103 53");
    localStorage.setItem("valexMenu","dark");
    localStorage.setItem("valexHeader","dark");
    localStorage.removeItem("hs_theme","dark");
    html.classList.add("dark");
    html.classList.remove("light");
    html.setAttribute("data-menu-styles", "dark");
    html.setAttribute("data-header-styles", "dark");
    document.querySelector('html').style.setProperty('--light', "28 103 53");
    document.querySelector('html').style.setProperty('--input-border', "26, 93, 48");
    localStorage.setItem("--light", "28 103 53");
    document.querySelector('#switcher-menu-dark').checked = true
    document.querySelector('#switcher-header-dark').checked = true
    document.querySelector("html").style.setProperty("--body-bg", localStorage.bodyBgRGB);
    document.querySelector("html").style.setProperty("--dark-bg", localStorage.darkBgRGB);
    document.querySelector("#switcher-dark-theme").checked = true;
  });
  let backgroundColor5Var = bgDefaultColor5Btn.addEventListener("click", () => {
    localStorage.setItem("bodyBgRGB", "157 41 41");
    localStorage.setItem("darkBgRGB", "172 56 56");
    localStorage.setItem("valexMenu","dark");
    localStorage.setItem("valexHeader","dark");
    localStorage.removeItem("hs_theme","dark");
    html.classList.add("dark");
    html.classList.remove("light");
    html.setAttribute("data-menu-styles", "dark");
    html.setAttribute("data-header-styles", "dark");
    document.querySelector('html').style.setProperty('--light', "172 56 56");
    document.querySelector('html').style.setProperty('--input-border', "157, 41, 41");
    localStorage.setItem("--light", "172 56 56");
    document.querySelector('#switcher-menu-dark').checked = true
    document.querySelector('#switcher-header-dark').checked = true
    document.querySelector("html").style.setProperty("--body-bg", localStorage.bodyBgRGB);
    document.querySelector("html").style.setProperty("--dark-bg", localStorage.darkBgRGB);
    document.querySelector("#switcher-dark-theme").checked = true;
  });

    // Bg image
    let bgImg1Var = bgImage1Btn.addEventListener("click", () => {
        html.setAttribute("bg-img", "bgimg1");
        localStorage.setItem("bgimg", "bgimg1");
      });
      let bgImg2Var = bgImage2Btn.addEventListener("click", () => {
        html.setAttribute("bg-img", "bgimg2");
        localStorage.setItem("bgimg", "bgimg2");
      });
      let bgImg3Var = bgImage3Btn.addEventListener("click", () => {
        html.setAttribute("bg-img", "bgimg3");
        localStorage.setItem("bgimg", "bgimg3");
      });
      let bgImg4Var = bgImage4Btn.addEventListener("click", () => {
        html.setAttribute("bg-img", "bgimg4");
        localStorage.setItem("bgimg", "bgimg4");
      });
      let bgImg5Var = bgImage5Btn.addEventListener("click", () => {
        html.setAttribute("bg-img", "bgimg5");
        localStorage.setItem("bgimg", "bgimg5");
      });

    /* Light Layout Start */
    let lightThemeVar = lightBtn.addEventListener('click', () => {
        lightFn();
        html.setAttribute('data-menu-styles', 'light');
        localStorage.setItem("valexHeader", 'light');
        localStorage.setItem("valexMenu", 'light');
        localStorage.removeItem("bodylightRGB")
        localStorage.removeItem("bodyBgRGB")
        localStorage.removeItem("valexMenu")
        localStorage.removeItem("valexMenu", 'dark');
    })
    /* Light Layout End */

    /* Dark Layout Start */
    let darkThemeVar = darkBtn.addEventListener('click', () => {
        darkFn();
        localStorage.setItem("valexMenu", 'dark');
        localStorage.setItem("valexHeader", 'dark');
        localStorage.setItem("hs_theme","dark");
        localStorage.removeItem("hs_theme","light");
    });
    /* Dark Layout End */

    /* Light Menu Start */
    let lightMenuVar = lightMenuBtn.addEventListener('click', () => {
        html.setAttribute('data-menu-styles', 'light');
        localStorage.setItem("valexMenu", 'light');
    });
    /* Light Menu End */

    /* Color Menu Start */
    let colorMenuVar = colorMenuBtn.addEventListener('click', () => {
        html.setAttribute('data-menu-styles', 'color');
        localStorage.setItem("valexMenu", 'color');
    });
    /* Color Menu End */

    /* Dark Menu Start */
    let darkMenuVar = darkMenuBtn.addEventListener('click', () => {
        html.setAttribute('data-menu-styles', 'dark');
        localStorage.setItem("valexMenu", 'dark');
    });
    /* Dark Menu End */

    /* Gradient Menu Start */
    let gradientMenuVar = gradientMenuBtn.addEventListener('click', () => {
        html.setAttribute('data-menu-styles', 'gradient');
        localStorage.setItem("valexMenu", 'gradient');
    });
    /* Gradient Menu End */

    /* Transparent Menu Start */
    let transparentMenuVar = transparentMenuBtn.addEventListener('click', () => {
        html.setAttribute('data-menu-styles', 'transparent');
        localStorage.setItem("valexMenu", 'transparent');
    });
    /* Transparent Menu End */

    /* Light Header Start */
    let lightHeaderVar = lightHeaderBtn.addEventListener('click', () => {
        html.setAttribute('data-header-styles', 'light');
        localStorage.setItem("valexHeader", 'light');
    });
    /* Light Header End */

    /* Color Header Start */
    let colorHeaderVar = colorHeaderBtn.addEventListener('click', () => {
        html.setAttribute('data-header-styles', 'color');
        localStorage.setItem("valexHeader", 'color');
    });
    /* Color Header End */

    /* Dark Header Start */
    let darkHeaderVar = darkHeaderBtn.addEventListener('click', () => {
        html.setAttribute('data-header-styles', 'dark');
        localStorage.setItem("valexHeader", 'dark');
    });
    /* Dark Header End */

    /* Gradient Header Start */
    let gradientHeaderVar = gradientHeaderBtn.addEventListener('click', () => {
        html.setAttribute('data-header-styles', 'gradient');
        localStorage.setItem("valexHeader", 'gradient');
    });
    /* Gradient Header End */

    /* Transparent Header Start */
    let transparentHeaderVar = transparentHeaderBtn.addEventListener('click', () => {
        html.setAttribute('data-header-styles', 'transparent');
        localStorage.setItem("valexHeader", 'transparent');
    });
    /* Transparent Header End */

    /* Full Width Layout Start */
    let fullwidthVar = fullwidthBtn.addEventListener('click', () => {
        html.setAttribute('data-width', 'fullwidth');
        localStorage.setItem("valexfullwidth", true);
        localStorage.removeItem("valexboxed");
    });
    /* Full Width Layout End */

    /* Boxed Layout Start */
    let boxedVar = boxedBtn.addEventListener('click', () => {
        html.setAttribute('data-width', 'boxed');
        localStorage.setItem("valexboxed", true);
        localStorage.removeItem("valexfullwidth");
        checkHoriMenu()
    });
    /* Boxed Layout End */

    /* Regular page style Start */
    let shadowVar = regular.addEventListener('click', () => {
        html.setAttribute('data-page-style', 'regular');
        localStorage.setItem("valexregular", true);
        localStorage.removeItem("valexclassic");
        localStorage.removeItem("valexmodern");
    });
    /* Regular page style End */

    /* Classic page style Start */
    let noShadowVar = classic.addEventListener('click', () => {
        html.setAttribute('data-page-style', 'classic');
        localStorage.setItem("valexclassic", true);
        localStorage.removeItem("valexmodern");
        localStorage.removeItem("valexregular");
        // localStorage.removeItem("valexmodern");
    });
    /* Classic page style End */

    // /* modern page style Start */
    let modernVar = modern.addEventListener('click', () => {
        html.setAttribute('data-page-style', 'modern');
        localStorage.setItem("valexmodern", true);
        localStorage.removeItem("valexregular");
        localStorage.removeItem("valexclassic");
    });
    // /* modern page style End */

    /* Header-Position Styles Start */
    let fixedHeaderVar = fixedHeaderBtn.addEventListener('click', () => {
        html.setAttribute('data-header-position', 'fixed');
        localStorage.setItem("valexheaderfixed", true);
        localStorage.removeItem("valexheaderscrollable");
    });

    let scrollHeaderVar = scrollHeaderBtn.addEventListener('click', () => {
        html.setAttribute('data-header-position', 'scrollable');
        localStorage.setItem("valexheaderscrollable", true);
        localStorage.removeItem("valexheaderfixed");
    });
    /* Header-Position Styles End */

    /* Menu-Position Styles Start */
    let fixedMenuVar = fixedMenuBtn.addEventListener('click', () => {
        html.setAttribute('data-menu-position', 'fixed');
        localStorage.setItem("valexmenufixed", true);
        localStorage.removeItem("valexmenuscrollable");
    });

    let scrollMenuVar = scrollMenuBtn.addEventListener('click', () => {
        html.setAttribute('data-menu-position', 'scrollable');
        localStorage.setItem("valexmenuscrollable", true);
        localStorage.removeItem("valexmenufixed");
    });
    /* Menu-Position Styles End */

    /* Default Sidemenu Start */
    let defaultVar = defaultBtn.addEventListener('click', () => {
        html.setAttribute('data-vertical-style', 'default');
        html.setAttribute('data-nav-layout', 'vertical')
        toggleSidemenu();
        localStorage.removeItem("valexverticalstyles");
        document.querySelectorAll(".main-menu>li.open").forEach((ele)=>{
            if(!ele.classList.contains('active')){
                ele.classList.remove('open')
                ele.querySelector('ul').style.display = 'none'
            }
        })
    });
    /* Default Sidemenu End */

    /* Closed Sidemenu Start */
    let closedVar = closedBtn.addEventListener('click', () => {
        closedSidemenuFn();
        localStorage.setItem("valexverticalstyles", 'closed');
        document.querySelectorAll(".main-menu>li.open").forEach((ele)=>{
            if(!ele.classList.contains('active')){
                ele.classList.remove('open')
                ele.querySelector('ul').style.display = 'none'
            }
        })
    });
    /* Closed Sidemenu End */

    /* Hover Submenu Start */
    let detachedVar = detachedBtn.addEventListener('click', () => {
        detachedFn();
        localStorage.setItem("valexverticalstyles", 'detached');
    });
    /* Hover Submenu End */

    /* Icon Text Sidemenu Start */
    let iconTextVar = iconTextBtn.addEventListener('click', () => {
        iconTextFn();
        localStorage.setItem("valexverticalstyles", 'icontext');
    });
    /* Icon Text Sidemenu End */

    /* Icon Overlay Sidemenu Start */
    let overlayVar = overlayBtn.addEventListener('click', () => {
        iconOverayFn();
        localStorage.setItem("valexverticalstyles", 'overlay');
        document.querySelectorAll(".main-menu>li.open").forEach((ele)=>{
            if(!ele.classList.contains('active')){
                ele.classList.remove('open')
                ele.querySelector('ul').style.display = 'none'
            }
        })
    });
    /* Icon Overlay Sidemenu End */

    /* doublemenu Sidemenu Start */
    let doubleVar = doubleBtn.addEventListener('click', () => {
        doubletFn();
        localStorage.setItem("valexverticalstyles", 'doublemenu');
    });
    /* doublemenu Sidemenu End */

    /* Menu Click Sidemenu Start */
    let menuClickVar = menuClickBtn.addEventListener('click', () => {
        html.removeAttribute('data-vertical-style');
        menuClickFn();
        localStorage.setItem("valexnavstyles", 'menu-click');
        localStorage.removeItem("valexverticalstyles");
        document.querySelectorAll(".main-menu>li.open").forEach((ele)=>{
            if(!ele.classList.contains('active')){
                ele.classList.remove('open')
                ele.querySelector('ul').style.display = 'none'
            }
        })
        if(document.querySelector("html").getAttribute("data-nav-layout")=='horizontal'){
            document.querySelector(".main-menu").style.marginLeft = "0px"
            document.querySelector(".main-menu").style.marginRight = "0px"
            ResizeMenu()
        }
    });
    /* Menu Click Sidemenu End */

    /* Menu Hover Sidemenu Start */
    let menuhoverVar = menuHoverBtn.addEventListener('click', () => {
        html.removeAttribute('data-vertical-style');
        menuhoverFn();
        localStorage.setItem("valexnavstyles", 'menu-hover');
        localStorage.removeItem("valexverticalstyles");

        if(document.querySelector("html").getAttribute("data-nav-layout")=='horizontal'){
            document.querySelector(".main-menu").style.marginLeft = "0px"
            document.querySelector(".main-menu").style.marginRight = "0px"
            ResizeMenu()
        }
    });
    /* Menu Hover Sidemenu End */

    /* icon Click Sidemenu Start */
    let iconClickVar = iconClickBtn.addEventListener('click', () => {
        html.removeAttribute('data-vertical-style');
        iconClickFn();
        localStorage.setItem("valexnavstyles", 'icon-click');
        localStorage.removeItem("valexverticalstyles");

        if(document.querySelector("html").getAttribute("data-nav-layout")=='horizontal'){
            document.querySelector(".main-menu").style.marginLeft = "0px"
            document.querySelector(".main-menu").style.marginRight = "0px"
            ResizeMenu()
            document.querySelector("#slide-left").classList.add("d-none")
        }
        document.querySelectorAll(".main-menu>li.open").forEach((ele)=>{
            if(!ele.classList.contains('active')){
                ele.classList.remove('open')
                ele.querySelector('ul').style.display = 'none'
            }
        })
    });
    /* icon Click Sidemenu End */

    /* icon hover Sidemenu Start */
    let iconhoverVar = iconHoverBtn.addEventListener('click', () => {
        html.removeAttribute('data-vertical-style');
        iconHoverFn();
        localStorage.setItem("valexnavstyles", 'icon-hover');
        localStorage.removeItem("valexverticalstyles");

        if(document.querySelector("html").getAttribute("data-nav-layout")=='horizontal'){
            document.querySelector(".main-menu").style.marginLeft = "0px"
            document.querySelector(".main-menu").style.marginRight = "0px"
            ResizeMenu()
            document.querySelector("#slide-left").classList.add("d-none")
        }
    });
    /* icon hover Sidemenu End */

    /* Sidemenu start*/
    let verticalVar = verticalBtn.addEventListener('click', () => {
        let mainContent = document.querySelector('.main-content');
        // local storage
        localStorage.removeItem("valexlayout");
        localStorage.setItem("valexverticalstyles", 'default');
        verticalFn();
        setNavActive();
        mainContent.removeEventListener('click', clearNavDropdown);

        //
        document.querySelector(".main-menu").style.marginLeft = "0px"
        document.querySelector(".main-menu").style.marginRight = "0px"

        document.querySelectorAll(".slide").forEach((element) => {
            if (
              element.classList.contains("open") &&
              !element.classList.contains("active")
            ) {
              element.querySelector("ul").style.display = "none";
            }
        });
    });
    /* Sidemenu end */

    /* horizontal start*/
    let horiVar = horiBtn.addEventListener('click', () => {
        let mainContent = document.querySelector('.main-content');
        html.removeAttribute('data-vertical-style');
        //    local storage
        localStorage.setItem("valexlayout", 'horizontal');
        localStorage.removeItem("valexverticalstyles");

        horizontalClickFn();
        clearNavDropdown();
        mainContent.addEventListener('click', clearNavDropdown);
    });
    /* horizontal end*/

    /* rtl start */
    let rtlVar = rtlBtn.addEventListener('click', () => {
        localStorage.setItem("valexrtl", true);
        localStorage.removeItem("valexltr");
        rtlFn();
        if (document.querySelector(".noUi-target")) {
            console.log("working");
            document.querySelectorAll(".noUi-origin").forEach((e) => {
              e.classList.add("!transform-none");
            });
        }
    });
    /* rtl end */

    /* ltr start */
    let ltrVar = ltrBtn.addEventListener('click', () => {
        //    local storage
        localStorage.setItem("valexltr", true);
        localStorage.removeItem("valexrtl");
        ltrFn();
        if (document.querySelector(".noUi-target")) {
            document.querySelectorAll(".noUi-origin").forEach((e) => {
              e.classList.add("!transform-none");
            });
        }
    });
    /* ltr end */

    // reset all start
    let resetVar = ResetAll.addEventListener('click', () => {
        ResetAllFn();
        setNavActive();
        document.querySelector("html").setAttribute("data-menu-styles","light");
        document.querySelector('#switcher-menu-light').checked = true;
        document.querySelectorAll(".slide").forEach((element) => {
            if (
              element.classList.contains("open") &&
              !element.classList.contains("active")
            ) {
              element.querySelector("ul").style.display = "none";
            }
        });
        if (document.querySelector(".noUi-target")) {
            document.querySelectorAll(".noUi-origin").forEach((e) => {
              e.classList.add("!transform-none");
            });
        }
    })
    // reset all end

    /* loader start */
    loaderEnable.onclick = ()=>{
        document.querySelector("html").setAttribute("loader","enable");
        localStorage.setItem("loaderEnable","true")
    }

    loaderDisable.onclick = ()=>{
        document.querySelector("html").setAttribute("loader","disable");
        localStorage.setItem("loaderEnable","false")
    }
    /* loader end */
}

function ltrFn() {
    let html = document.querySelector('html')
    html.setAttribute("dir", "ltr");
    document.querySelector('#switcher-ltr').checked = true;
    checkOptions();
}

function rtlFn() {
    let html = document.querySelector('html');
    html.setAttribute("dir", "rtl");
    checkOptions();
}

function lightFn() {
    let html = document.querySelector('html');
    html.setAttribute('class', 'light');
    html.setAttribute('data-header-styles', 'light');
    if(localStorage.getItem("valexlayout") == "horizontal"){
        html.setAttribute('data-menu-styles', 'light');
    }
    if(!localStorage.getItem('primaryRGB')){
        html.setAttribute('style','')
    }
    document.querySelector('#switcher-light-theme').checked = true;
    document.querySelector('#switcher-menu-light').checked = true;
    document.querySelector('#switcher-header-light').checked = true;
    updateColors()
    localStorage.removeItem("valexdarktheme");
    localStorage.removeItem("valexbgColor");
    localStorage.removeItem("valexheaderbg");
    localStorage.removeItem("valexbgwhite");
    localStorage.removeItem("valexmenubg");
    localStorage.removeItem("valexmenubg");
    localStorage.removeItem("hs_theme");
    checkOptions();
    html.style.removeProperty('--body-bg-rgb');
    html.style.removeProperty('--body-bg-rgb2');
    html.style.removeProperty("--body-bg");
    html.style.removeProperty("--dark-bg");
    html.style.removeProperty("--light");
    html.style.removeProperty("--form-control-bg");
    html.style.removeProperty("--input-border");

    document.querySelector("#switcher-background4").checked = false
    document.querySelector("#switcher-background3").checked = false
    document.querySelector("#switcher-background2").checked = false
    document.querySelector("#switcher-background1").checked = false
    document.querySelector("#switcher-background").checked = false
    document.querySelector('#switcher-menu-light').checked = true;
    document.querySelector('#switcher-header-light').checked = true;

}

function darkFn() {
    let html = document.querySelector('html');
    html.setAttribute('class', 'dark');
    html.setAttribute('data-header-styles', 'dark');
    html.setAttribute('data-menu-styles', 'dark');
    if(!localStorage.getItem('primaryRGB')){
        html.setAttribute('style','')
    }
    document.querySelector('#switcher-menu-dark').checked = true;
    document.querySelector('#switcher-header-dark').checked = true;
    document.querySelector('html').style.removeProperty('--body-bg-rgb');
    document.querySelector('html').style.removeProperty('--body-bg-rgb2');
    document.querySelector('html').style.removeProperty("--body-bg");
    document.querySelector('html').style.removeProperty("--dark-bg");
    document.querySelector('html').style.removeProperty('--light');
    document.querySelector('html').style.removeProperty('--form-control-bg');
    document.querySelector('html').style.removeProperty('--input-border');
    updateColors()
    localStorage.setItem("valexdarktheme", true);
    localStorage.removeItem("valexlighttheme");
    localStorage.removeItem("bodyBgRGB");
    localStorage.removeItem("valexbgColor");
    localStorage.removeItem("valexheaderbg");
    localStorage.removeItem("valexbgwhite");
    localStorage.removeItem("valexmenubg");
    localStorage.removeItem("hs_theme");
    checkOptions();

    document.querySelector("#switcher-background4").checked = false
    document.querySelector("#switcher-background3").checked = false
    document.querySelector("#switcher-background2").checked = false
    document.querySelector("#switcher-background1").checked = false
    document.querySelector("#switcher-background").checked = false
    document.querySelector('#switcher-menu-dark').checked = true;
    document.querySelector('#switcher-header-dark').checked = true;
}

function verticalFn() {
    let html = document.querySelector('html');
    html.setAttribute('data-nav-layout', 'vertical');
    html.setAttribute('data-vertical-style', 'overlay');
    html.removeAttribute('data-nav-style');
    localStorage.removeItem('valexnavstyles');
    html.removeAttribute('data-toggled');
    document.querySelector('#switcher-vertical').checked = true;
    document.querySelector('#switcher-menu-click').checked = false;
    document.querySelector('#switcher-menu-hover').checked = false;
    document.querySelector('#switcher-icon-click').checked = false;
    document.querySelector('#switcher-icon-hover').checked = false;
    checkOptions();
    if(!localStorage.valexMenu){
    html.setAttribute("data-menu-styles","light")
    }
}

function horizontalClickFn() {
    document.querySelector('#switcher-horizontal').checked = true;
    document.querySelector('#switcher-menu-click').checked = true;
    let html = document.querySelector('html');
    html.setAttribute('data-nav-layout', 'horizontal');
    html.removeAttribute('data-vertical-style');
    if (!html.getAttribute('data-nav-style')) {
        html.setAttribute('data-nav-style', 'menu-click');
    }
    checkOptions();
    checkHoriMenu();
}

function ResetAllFn() {
    let html = document.querySelector('html');
    if(localStorage.getItem("valexlayout")=="horizontal"){
        document.querySelector(".main-menu").style.display = "block"
    }
    checkOptions();

    // clearing localstorage
    localStorage.clear();

    // reseting to light
    lightFn();

    //To reset the light-rgb
    document.querySelector('html').removeAttribute("style")

    // clearing attibutes
    // removing header, menu, pageStyle & boxed
    html.removeAttribute('data-nav-style');
    html.removeAttribute('data-menu-position');
    html.removeAttribute('data-header-position');
    html.removeAttribute('data-width');
    html.removeAttribute('data-page-style');

    // removing theme styles
    html.removeAttribute('bg-img');

    // clear primary & bg color
    html.style.removeProperty(`--primary`);
    html.style.removeProperty(`--body-bg-rgb`);

    // reseting to ltr
    ltrFn();

    // reseting to vertical
    verticalFn();
    mainContent.removeEventListener('click', clearNavDropdown);

    // reseting page style
    document.querySelector('#switcher-classic').checked = false;
    document.querySelector('#switcher-modern').checked = false;
    document.querySelector('#switcher-regular').checked = true;

    // reseting layout width styles
    document.querySelector('#switcher-full-width').checked = true;
    document.querySelector('#switcher-boxed').checked = false;

    // reseting menu position styles
    document.querySelector('#switcher-menu-fixed').checked = true;
    document.querySelector('#switcher-menu-scroll').checked = false;

    // reseting header position styles
    document.querySelector('#switcher-header-fixed').checked = true;
    document.querySelector('#switcher-header-scroll').checked = false;

    // reseting sidemenu layout styles
    document.querySelector('#switcher-default-menu').checked = true;
    document.querySelector('#switcher-closed-menu').checked = false;
    document.querySelector('#switcher-icontext-menu').checked = false;
    document.querySelector('#switcher-icon-overlay').checked = false;
    document.querySelector('#switcher-detached').checked = false;
    document.querySelector('#switcher-double-menu').checked = false;

    // resetting theme primary
    document.querySelector("#switcher-primary").checked = false
    document.querySelector("#switcher-primary1").checked = false
    document.querySelector("#switcher-primary2").checked = false
    document.querySelector("#switcher-primary3").checked = false
    document.querySelector("#switcher-primary4").checked = false

    // resetting theme background
    document.querySelector("#switcher-background").checked = false
    document.querySelector("#switcher-background1").checked = false
    document.querySelector("#switcher-background2").checked = false
    document.querySelector("#switcher-background3").checked = false
    document.querySelector("#switcher-background4").checked = false


    // reseting chart colors
    updateColors();

    // to reset horizontal menu scroll
    document.querySelector(".main-menu").style.marginLeft = "0px"
    document.querySelector(".main-menu").style.marginRight = "0px"

}

function checkOptions() {

    // dark
    if (localStorage.getItem('valexdarktheme')) {
        document.querySelector('#switcher-dark-theme').checked = true;
    }

    // horizontal
    if (localStorage.getItem('valexlayout') === "horizontal") {
        document.querySelector('#switcher-horizontal').checked = true;
        document.querySelector('#switcher-menu-click').checked = true;
    }
    else {
        document.querySelector('#switcher-vertical').checked = true;
    }

    //RTL
    if (localStorage.getItem('valexrtl')) {
        document.querySelector('#switcher-rtl').checked = true;
    }
    else {
        document.querySelector('#switcher-ltr').checked = true;
    }

    // light header
    if (localStorage.getItem('valexHeader') === "light") {
        document.querySelector('#switcher-header-light').checked = true;
    }

    // color header
    if (localStorage.getItem('valexHeader') === "color") {
        document.querySelector('#switcher-header-primary').checked = true;
    }

    // gradient header
    if (localStorage.getItem('valexHeader') === "gradient") {
        document.querySelector('#switcher-header-gradient').checked = true;
    }

    // dark header
    if (localStorage.getItem('valexHeader') === "dark") {
        document.querySelector('#switcher-header-dark').checked = true;
    }
    // transparent header
    if (localStorage.getItem('valexHeader') === "transparent") {
        document.querySelector('#switcher-header-transparent').checked = true;
    }

    // light menu
    if (localStorage.getItem('valexMenu') === 'light') {
        document.querySelector('#switcher-menu-light').checked = true;
    }

    // color menu
    if (localStorage.getItem('valexMenu') === 'color') {
        document.querySelector('#switcher-menu-primary').checked = true;
    }

    // gradient menu
    if (localStorage.getItem('valexMenu') === 'gradient') {
        document.querySelector('#switcher-menu-gradient').checked = true;
    }

    // dark menu
    if (localStorage.getItem('valexMenu') === 'dark') {
        document.querySelector('#switcher-menu-dark').checked = true;
    }
    // transparent menu
    if (localStorage.getItem('valexMenu') === 'transparent') {
        document.querySelector('#switcher-menu-transparent').checked = true;
    }

    //boxed
    if (localStorage.getItem('valexboxed')) {
        document.querySelector('#switcher-boxed').checked = true;
    }

    //scrollable
    if (localStorage.getItem('valexheaderscrollable')) {
        document.querySelector('#switcher-header-scroll').checked = true;
    }
    if (localStorage.getItem('valexmenuscrollable')) {
        document.querySelector('#switcher-menu-scroll').checked = true;
    }

    //fixed
    if (localStorage.getItem('valexheaderfixed')) {
        document.querySelector('#switcher-header-fixed').checked = true;
    }
    if (localStorage.getItem('valexmenufixed')) {
        document.querySelector('#switcher-menu-fixed').checked = true;
    }

    //classic
    if (localStorage.getItem('valexclassic')) {
        document.querySelector('#switcher-classic').checked = true;
        document.querySelector('#switcher-modern').checked = false;
    }

    // //modern
    if (localStorage.getItem('valexmodern')) {
        document.querySelector('#switcher-modern').checked = true;
        document.querySelector('#switcher-classic').checked = false;
    }

    // sidemenu layout style
    if (localStorage.valexverticalstyles) {
        let verticalStyles = localStorage.getItem('valexverticalstyles');
        switch (verticalStyles) {
            case 'default':
                document.querySelector('#switcher-default-menu').checked = true;
                break;
            case 'closed':
                document.querySelector('#switcher-closed-menu').checked = true;
                break;
            case 'icontext':
                document.querySelector('#switcher-icontext-menu').checked = true;
                break;
            case 'overlay':
                document.querySelector('#switcher-icon-overlay').checked = true;
                break;
            case 'detached':
                document.querySelector('#switcher-detached').checked = true;
                break;
            case 'doublemenu':
                document.querySelector('#switcher-double-menu').checked = true;
                break;
            default:
                document.querySelector('#switcher-default-menu').checked = true;
                break;
        }
    }
    // navigation menu style
    if (localStorage.valexnavstyles) {
        let navStyles = localStorage.getItem('valexnavstyles');
        switch (navStyles) {
            case 'menu-click':
                document.querySelector('#switcher-menu-click').checked = true;
                break;
            case 'menu-hover':
                document.querySelector('#switcher-menu-hover').checked = true;
                break;
            case 'icon-click':
                document.querySelector('#switcher-icon-click').checked = true;
                break;
            case 'icon-hover':
                document.querySelector('#switcher-icon-hover').checked = true;
                break;
        }
    }

    // loader
    if(localStorage.loaderEnable != "true"){
        document.querySelector("#switcher-loader-disable").checked = true
    }
}

// chart colors
let myVarVal,primaryRGB
function updateColors() {
    'use strict'
    primaryRGB = getComputedStyle(document.documentElement).getPropertyValue('--primary-rgb').trim();

    //get variable
    myVarVal = localStorage.getItem("primaryRGB") || primaryRGB;
        // index //
        if (document.querySelector("#Sales-bar") !== null) {
            data.salesReport(myVarVal);
        }
        if (document.querySelector("#chart") !== null) {
            data.sales(myVarVal);
        }
        if (document.querySelector("#us-map1") !== null) {
            data.vectormap(myVarVal);
        } 
    
        // crmdashboard //
        if (document.querySelector("#leadbysouce") !== null) {
            data.leadbysouce(myVarVal);
        } 
        if (document.querySelector("#revenue") !== null) {
            data.revenue(myVarVal);
        } 
    
        // ecommercedashboard //
        if (document.querySelector("#earnings") !== null) {
            data.earnings(myVarVal);
        } 
        if (document.querySelector("#salesDonut") !== null) {
            data.salesDonut(myVarVal);
        } 
    
        // cryptodashboard //
        if (document.querySelector("#crypto") !== null) {
            data.cryptoCurrency(myVarVal);
        } 
    
        // nftdashboard //
        if (document.querySelector("#nft-statistics") !== null) {
            data.nftstatistics(myVarVal);
        } 
    
        // analyticsdashboard //
        if (document.querySelector("#sessionoverview") !== null) {
            data.sessionoverview(myVarVal);
        } 
        if (document.querySelector("#sourcechart") !== null) {
            data.sourcechart(myVarVal);
        }
        if (document.querySelector("#impressions") !== null) {
            data.impressions(myVarVal);
        }
        if (document.querySelector("#analytics-bouncerate") !== null) {
            data.analyticsbouncerate(myVarVal);
        }
        
        // hrmdashboard //
        if (document.querySelector("#performanceReport") !== null) {
            data.performanceReport(myVarVal);
        }
        if (document.querySelector("#jobsummery") !== null) {
            data.jobsummery(myVarVal);
        }
    
        // projectsdashboard //
        if (document.querySelector("#compltedprojects") !== null) {
            data.compltedprojects(myVarVal);
        }
        if (document.querySelector("#projectsanalysis") !== null) {
            data.projectsanalysis(myVarVal);
        }
        if (document.querySelector("#totalRevenue") !== null) {
            data.totalRevenue(myVarVal);
        }
    
       // jobsdashboard //
        if (document.querySelector("#vacancystatus") !== null) {
            data.vacancystatus(myVarVal);
        } 
        if (document.querySelector("#acceptanceratio") !== null) {
            data.acceptanceratio(myVarVal);
        } 
    
        // stocksdahboard //
        if (document.querySelector("#totalInvestmentsStats") !== null) {
            data.totalInvestmentsStats(myVarVal);
        }
        if (document.querySelector("#total-invested") !== null) {
            data.totalinvested(myVarVal);
        }
        if (document.querySelector("#apple-stock") !== null) {
            data.applestock(myVarVal);
        }
    
        // coursedashboard //
        if (document.querySelector("#coursescompleted") !== null) {
            data.coursescompleted(myVarVal);
        }
    
        if (document.querySelector("#course-categories") !== null) {
            data.coursecategories(myVarVal);
        } 
    
        // personaldashboard //
        if (document.querySelector("#statistics") !== null) {
            data.totalRevenueChart(myVarVal);
        }
    
        //widgets
        if (document.querySelector("#report") !== null) {
            data.targetReport(myVarVal);
        }
        if (document.querySelector("#views") !== null) {
            data.pageviews(myVarVal);
        }
}

if (document.querySelector("#hs-overlay-switcher")) {
    /*Start Switcher Scroll */
    // var myElement1 = document.getElementById("switcher-body");
    // new SimpleBar(myElement1, { autoHide: true });
    /*End Switcher Scroll */

    //switcher color pickers
    const pickrContainerPrimary = document.querySelector(
      ".pickr-container-primary"
    );
    const themeContainerPrimary = document.querySelector(
      ".theme-container-primary"
    );
    const pickrContainerBackground = document.querySelector(
      ".pickr-container-background"
    );
    const themeContainerBackground = document.querySelector(
      ".theme-container-background"
    );

    /* for theme primary */
    const nanoThemes = [
      [
        "nano",
        {
          defaultRepresentation: "RGB",
          components: {
            preview: true,
            opacity: false,
            hue: true,

            interaction: {
              hex: false,
              rgba: true,
              hsva: false,
              input: true,
              clear: false,
              save: false,
            },
          },
        },
      ],
    ];
    const nanoButtons = [];
    let nanoPickr = null;
    for (const [theme, config] of nanoThemes) {
      const button = document.createElement("button");
      button.innerHTML = theme;
      nanoButtons.push(button);

      button.addEventListener("click", () => {
        const el = document.createElement("p");
        pickrContainerPrimary.appendChild(el);

        /* Delete previous instance */
        if (nanoPickr) {
          nanoPickr.destroyAndRemove();
        }

        /* Apply active class */
        for (const btn of nanoButtons) {
          btn.classList[btn === button ? "add" : "remove"]("active");
        }

        /* Create fresh instance */
        nanoPickr = new Pickr(
          Object.assign(
            {
              el,
              theme,
              default: "rgba(1, 98, 232, 1)",
            },
            config
          )
        );

        /* Set events */
        nanoPickr.on("changestop", (source, instance) => {
          let color = instance.getColor().toRGBA();
          let html = document.querySelector("html");
          html.style.setProperty(
            "--primary",
            `${Math.floor(color[0])} ${Math.floor(color[1])} ${Math.floor(
              color[2]
            )}`
          );
          html.style.setProperty(
            "--color-primary-rgb",
            `${Math.floor(color[0])} ,${Math.floor(color[1])}, ${Math.floor(
              color[2]
            )}`
          );
          /* theme color picker */
          localStorage.setItem(
            "primaryRGB",
            `${Math.floor(color[0])}, ${Math.floor(color[1])}, ${Math.floor(
              color[2]
            )}`
          );
          localStorage.setItem(
            "primaryRGB1",
            `${Math.floor(color[0])} ${Math.floor(color[1])} ${Math.floor(
              color[2]
            )}`
          );
          updateColors();
        });
      });

      themeContainerPrimary.appendChild(button);
    }
    nanoButtons[0].click();
    /* for theme primary */

    /* for theme background */
    const nanoThemes1 = [
      [
        "nano",
        {
          defaultRepresentation: "RGB",
          components: {
            preview: true,
            opacity: false,
            hue: true,

            interaction: {
              hex: false,
              rgba: true,
              hsva: false,
              input: true,
              clear: false,
              save: false,
            },
          },
        },
      ],
    ];
    const nanoButtons1 = [];
    let nanoPickr1 = null;
    for (const [theme, config] of nanoThemes) {
      const button = document.createElement("button");
      button.innerHTML = theme;
      nanoButtons1.push(button);

      button.addEventListener("click", () => {
        const el = document.createElement("p");
        pickrContainerBackground.appendChild(el);

        /* Delete previous instance */
        if (nanoPickr1) {
          nanoPickr1.destroyAndRemove();
        }

        /* Apply active class */
        for (const btn of nanoButtons) {
          btn.classList[btn === button ? "add" : "remove"]("active");
        }

        /* Create fresh instance */
        nanoPickr1 = new Pickr(
          Object.assign(
            {
              el,
              theme,
              default: "rgba(1, 98, 232, 1)",
            },
            config
          )
        );

        /* Set events */
        nanoPickr1.on("changestop", (source, instance) => {
          let color = instance.getColor().toRGBA();
          let html = document.querySelector("html");
          html.style.setProperty(
            "--body-bg",
            `${Math.floor(color[0] + 14)}
             ${Math.floor(color[1] + 14)}
              ${Math.floor(color[2] + 14)}`
          );
          html.style.setProperty(
            "--dark-bg",
            `
            ${Math.floor(color[0])}
            ${Math.floor(color[1])}
            ${Math.floor(color[2])}
            `
          );
          html.style.setProperty(
            "--light",
            `
            ${Math.floor(color[0] + 5)}
            ${Math.floor(color[1] + 5)}
            ${Math.floor(color[2] + 5)}
            `
          );
          localStorage.removeItem("bgtheme");
          updateColors();
          html.classList.add("dark");
          html.classList.remove("light");
          html.setAttribute("data-menu-styles", "dark");
          html.setAttribute("data-header-styles", "dark");
          document.querySelector("#switcher-dark-theme").checked = true;
          localStorage.setItem(
            "bodyBgRGB",
            `${Math.floor(color[0] + 14)}
             ${Math.floor(color[1] + 14)}
              ${Math.floor(color[2] + 14)}`
          );
          localStorage.setItem(
            "--light",
            `${Math.floor(color[0] + 5)}
             ${Math.floor(color[1] + 5)}
              ${Math.floor(color[2] + 5)}`
          );
          localStorage.setItem(
            "darkBgRGB",
            `${Math.floor(color[0])} ${Math.floor(color[1])} ${Math.floor(
              color[2]
            )}`
          );
        });
      });
      themeContainerBackground.appendChild(button);
    }
    nanoButtons1[0].click();
    /* for theme background */
}

updateColors()

function localStorageBackup2(){
    if (localStorage.bodyBgRGB || localStorage.bodylightRGB){
        document.querySelector('#switcher-dark-theme').checked = true;
        document.querySelector('#switcher-menu-dark').checked = true;
        document.querySelector('#switcher-header-dark').checked = true;
    }

    if (localStorage.bodyBgRGB && localStorage.bodylightRGB) {
        if(localStorage.bodyBgRGB == "20 30 96"){
            document.querySelector("#switcher-background").checked = true
        }
        if(localStorage.bodyBgRGB == "23 72 95"){
            document.querySelector("#switcher-background1").checked = true
        }
        if(localStorage.bodyBgRGB == "87 48 121"){
            document.querySelector("#switcher-background2").checked = true
        }
        if(localStorage.bodyBgRGB == "44, 109, 40"){
            document.querySelector("#switcher-background3").checked = true
        }
        if(localStorage.bodyBgRGB == "157 41 41"){
            document.querySelector("#switcher-background4").checked = true
        }
    }

    if (localStorage.primaryRGB) {  
        if(localStorage.primaryRGB == "58, 88, 146"){
            document.querySelector("#switcher-primary").checked = true
        }
        if(localStorage.primaryRGB == "49, 176, 176"){
            document.querySelector("#switcher-primary1").checked = true
        }
        if(localStorage.primaryRGB == "170, 82, 216"){
            document.querySelector("#switcher-primary2").checked = true
        }
        if(localStorage.primaryRGB == "80, 198, 118"){
            document.querySelector("#switcher-primary3").checked = true
        }
        if(localStorage.primaryRGB == "244, 86, 86"){
            document.querySelector("#switcher-primary4").checked = true
        }
    }

    if(localStorage.loaderEnable == "true"){
        document.querySelector("#switcher-loader-enable").checked = true
    }
}

