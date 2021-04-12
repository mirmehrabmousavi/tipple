<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <!-- Page Title -->
    <title>TIPPLE - Developers</title>
    <!-- Compressed Styles -->
    <link href="/css/slides.min.css?41331" rel="stylesheet" type="text/css">
    <!-- jQuery 3.3.1 -->
    <script src="/js/jquery-3.6.0.min.js"></script>
    <!-- Compressed Scripts -->
    <script src="/js/slides.min.js?41331" type="text/javascript"></script>
    <!-- Fonts and Material Icons -->
    <link rel="stylesheet" as="font"
          href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,600,700|Material+Icons"/>
</head>
<body class="slides chain simplifiedMobile animated">

<!-- SVG Library -->
<svg xmlns="http://www.w3.org/2000/svg" style="display:none">

    <symbol id="logo" viewBox="0 0 106 31"><title>Slides Framework</title>
        <path
            d="M17.413 14.04c-.56-5.84-5.6-7-8.52-7-4.6 0-8.6 2.92-8.6 7.52 0 3 2.4 4.88 5.28 5.8 4.24 1.64 5.88 1.84 5.88 3.36 0 1.08-1.2 1.72-2.32 1.72-.28 0-2.24 0-2.52-2.04h-6.6c.6 5.84 5.68 7.36 9.04 7.36 4.92 0 9.04-2.88 9.04-7.76 0-4.8-4-5.92-7.76-6.96-1.76-.52-3.4-1.2-3.4-2.2 0-.6.48-1.48 1.88-1.48 1.96 0 2.04 1.2 2.08 1.68h6.52zm2.222 15.96h6.64v-29.6h-6.64v29.6zm9.662-24.56h6.64v-5.04h-6.64v5.04zm0 24.56h6.64v-22.2h-6.64v22.2zm32.782-29.6h-6.64v9.28c-.72-.72-2.6-2.64-6.52-2.64-5.64 0-11 4.28-11 11.8 0 6.68 4.4 11.88 11.12 11.88 4.48 0 6.08-2.2 6.72-3.12v2.4h6.32v-29.6zm-17.52 18.4c0-2.56 1.8-5.56 5.64-5.56 1.56 0 2.96.56 3.96 1.56 1 .96 1.64 2.32 1.64 3.92.08 1.64-.52 3.08-1.56 4.12s-2.52 1.68-4.12 1.68c-3.12 0-5.56-2.28-5.56-5.68v-.04zm42.502 2.4c.52-4.08-.32-7.64-3.12-10.64-2.08-2.2-5-3.52-8.4-3.52-6.76 0-11.64 5.72-11.64 11.92 0 6.6 5.4 11.76 11.76 11.76 2.28 0 4.48-.68 6.32-2 1.88-1.28 3.44-3.2 4.52-5.68h-6.8c-.8 1.16-1.92 2.08-4.04 2.08-2.6 0-4.84-1.56-5.12-3.92h16.52zm-16.44-5.04c.16-1.04 1.52-3.52 4.96-3.52s4.8 2.48 4.96 3.52h-9.92zm34.502-2.12c-.56-5.84-5.6-7-8.52-7-4.6 0-8.6 2.92-8.6 7.52 0 3 2.4 4.88 5.28 5.8 4.24 1.64 5.88 1.84 5.88 3.36 0 1.08-1.2 1.72-2.32 1.72-.28 0-2.24 0-2.52-2.04h-6.6c.6 5.84 5.68 7.36 9.04 7.36 4.92 0 9.04-2.88 9.04-7.76 0-4.8-4-5.92-7.76-6.96-1.76-.52-3.4-1.2-3.4-2.2 0-.6.48-1.48 1.88-1.48 1.96 0 2.04 1.2 2.08 1.68h6.52z"/>
    </symbol>

    <symbol id="logo-icon" viewBox="0 0 50 41"><title>Slides Framework</title>
        <path d="M4,12h42c2.2,0,4,1.8,4,4v21c0,2.2-1.8,4-4,4H4c-2.2,0-4-1.8-4-4V16C0,13.8,1.8,12,4,12z"/>
        <path opacity="0.6"
              d="M45.5,9h-41C3.7,9,3,8.3,3,7.5v0C3,6.7,3.7,6,4.5,6h41C46.3,6,47,6.7,47,7.5v0C47,8.3,46.3,9,45.5,9z"/>
        <path opacity="0.4"
              d="M7.5,0h35C43.3,0,44,0.7,44,1.5v0C44,2.3,43.3,3,42.5,3h-35C6.7,3,6,2.3,6,1.5v0C6,0.7,6.7,0,7.5,0z"/>
    </symbol>

    <symbol id="close" viewBox="0 0 30 30">
        <path
            d="M15 0c-8.3 0-15 6.7-15 15s6.7 15 15 15 15-6.7 15-15-6.7-15-15-15zm5.7 19.3c.4.4.4 1 0 1.4-.2.2-.4.3-.7.3s-.5-.1-.7-.3l-4.3-4.3-4.3 4.3c-.2.2-.4.3-.7.3s-.5-.1-.7-.3c-.4-.4-.4-1 0-1.4l4.3-4.3-4.3-4.3c-.4-.4-.4-1 0-1.4s1-.4 1.4 0l4.3 4.3 4.3-4.3c.4-.4 1-.4 1.4 0s.4 1 0 1.4l-4.3 4.3 4.3 4.3z"/>
    </symbol>

    <symbol id="close-small" viewBox="0 0 11 11">
        <path
            d="M6.914 5.5l3.793-3.793c.391-.391.391-1.023 0-1.414s-1.023-.391-1.414 0l-3.793 3.793-3.793-3.793c-.391-.391-1.023-.391-1.414 0s-.391 1.023 0 1.414l3.793 3.793-3.793 3.793c-.391.391-.391 1.023 0 1.414.195.195.451.293.707.293s.512-.098.707-.293l3.793-3.793 3.793 3.793c.195.195.451.293.707.293s.512-.098.707-.293c.391-.391.391-1.023 0-1.414l-3.793-3.793z"/>
    </symbol>

    <symbol id="arrow-left" viewBox="0 0 29 56">
        <path
            d="M28.7.3c.4.4.4 1 0 1.4l-26.3 26.3 26.3 26.3c.4.4.4 1 0 1.4-.4.4-1 .4-1.4 0l-27-27c-.4-.4-.4-1 0-1.4l27-27c.3-.3 1-.4 1.4 0z"/>
    </symbol>

    <symbol id="arrow-right" viewBox="0 0 29 56">
        <path
            d="M.3 55.7c-.4-.4-.4-1 0-1.4l26.3-26.3-26.3-26.3c-.4-.4-.4-1 0-1.4.4-.4 1-.4 1.4 0l27 27c.4.4.4 1 0 1.4l-27 27c-.3.3-1 .4-1.4 0z"/>
    </symbol>

    <symbol id="back" viewBox="0 0 20 20">
        <path
            d="M2.3 10.7l5 5c.4.4 1 .4 1.4 0s.4-1 0-1.4l-3.3-3.3h11.6c.6 0 1-.4 1-1s-.4-1-1-1h-11.6l3.3-3.3c.4-.4.4-1 0-1.4-.2-.2-.4-.3-.7-.3s-.5.1-.7.3l-5 5c-.2.2-.3.5-.3.7 0 .2.1.5.3.7z"/>
    </symbol>

    <symbol id="menu" viewBox="0 0 18 18">
        <path
            d="M16 5h-14c-.6 0-1-.4-1-1 0-.5.4-1 1-1h14c.5 0 1 .4 1 1s-.4 1-1 1zm-14 5h14c.5 0 1-.4 1-1 0-.5-.4-1-1-1h-14c-.6 0-1 .4-1 1s.4 1 1 1zm14 3h-14c-.5 0-1 .4-1 1 0 .5.4 1 1 1h14c.5 0 1-.4 1-1s-.4-1-1-1z"/>
    </symbol>

    <symbol id="share" viewBox="0 0 18 18">
        <path
            d="M16 8c-.6 0-1 .4-1 1v6h-12v-6c0-.6-.4-1-1-1s-1 .4-1 1v6c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-6c0-.6-.4-1-1-1zm-2.3-2.3c.4-.4.4-1 0-1.4l-4-4c-.4-.4-1-.4-1.4 0l-4 4c-.4.4-.4 1 0 1.4s1 .4 1.4 0l2.3-2.3v7.6c0 .6.4 1 1 1s1-.4 1-1v-7.6l2.3 2.3c.4.4 1 .4 1.4 0z"/>
    </symbol>

    <symbol id="arrow-down" viewBox="0 0 24 24">
        <path
            d="M12 18c-.2 0-.5-.1-.7-.3l-11-10c-.4-.4-.4-1-.1-1.4.4-.4 1-.4 1.4-.1l10.4 9.4 10.3-9.4c.4-.4 1-.3 1.4.1.4.4.3 1-.1 1.4l-11 10c-.1.2-.4.3-.6.3z"/>
    </symbol>

    <symbol id="arrow-up" viewBox="0 0 24 24">
        <path
            d="M11.9 5.9c.2 0 .5.1.7.3l11 10c.4.4.4 1 .1 1.4-.4.4-1 .4-1.4.1l-10.4-9.4-10.3 9.4c-.4.4-1 .3-1.4-.1-.4-.4-.3-1 .1-1.4l11-10c.1-.2.4-.3.6-.3z"/>
    </symbol>

    <symbol id="arrow-top" viewBox="0 0 18 18">
        <path
            d="M15.7 7.3l-6-6c-.4-.4-1-.4-1.4 0l-6 6c-.4.4-.4 1 0 1.4.4.4 1 .4 1.4 0l4.3-4.3v11.6c0 .6.4 1 1 1s1-.4 1-1v-11.6l4.3 4.3c.2.2.4.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4z"/>
    </symbol>

    <symbol id="play" viewBox="0 0 30 30">
        <path d="M7 30v-30l22 15z"/>
    </symbol>

    <symbol id="chat" viewBox="0 0 18 18">
        <path
            d="M5,17c-0.2,0-0.3,0-0.4-0.1C4.2,16.7,4,16.4,4,16v-2H2c-1.1,0-2-0.9-2-2V3c0-1.1,0.9-2,2-2h14c1.1,0,2,0.9,2,2v9 c0,1.1-0.9,2-2,2H9.3l-3.7,2.8C5.4,16.9,5.2,17,5,17z M2,12h3.5C5.8,12,6,12.2,6,12.5V14l2.4-1.8C8.6,12.1,8.8,12,9,12h7V3H2V12z M13,7H5C4.4,7,4,6.6,4,6s0.4-1,1-1h8c0.6,0,1,0.4,1,1S13.6,7,13,7z M13,10H5c-0.6,0-1-0.4-1-1s0.4-1,1-1h8c0.6,0,1,0.4,1,1 S13.6,10,13,10z"/>
    </symbol>

    <symbol id="mail" viewBox="0 0 18 18">
        <path
            d="M16 2h-14c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-10c0-1.1-.9-2-2-2zm0 2v.5l-7 4.3-7-4.4v-.4h14zm-14 10v-7.2l6.5 4c.1.1.3.2.5.2s.4-.1.5-.2l6.5-4v7.2h-14z"/>
    </symbol>

    <symbol id="sound-on" viewBox="0 0 18 18">
        <path
            d="M8.5,0.1C8.1-0.1,7.7,0,7.4,0.2L3.7,3H2C0.9,3,0,3.9,0,5v6c0,1.1,0.9,2,2,2h1.7l3.7,2.8C7.6,15.9,7.8,16,8,16 c0.2,0,0.3,0,0.4-0.1C8.8,15.7,9,15.4,9,15V1C9,0.6,8.8,0.3,8.5,0.1z M7,13l-2.4-1.8C4.4,11.1,4.2,11,4,11l-2,0l0-6h2 c0.2,0,0.4-0.1,0.6-0.2L7,3V13z M11.7,9.9l0.7,1.9C13.9,11.2,15,9.7,15,8c0-1.7-1.1-3.2-2.7-3.8l-0.7,1.9C12.5,6.4,13,7.2,13,8C13,8.9,12.5,9.6,11.7,9.9z M12.2,1.1l-0.3,2C14.3,3.5,16,5.6,16,8s-1.8,4.5-4.2,4.9l0.3,2C15.6,14.3,18,11.4,18,8C18,4.6,15.6,1.7,12.2,1.1z"/>
    </symbol>

    <symbol id="sound-off" viewBox="0 0 18 18">
        <path
            d="M15.9,8l1.8-1.8c0.4-0.4,0.4-1,0-1.4s-1-0.4-1.4,0l-1.8,1.8l-1.8-1.8c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4L13.1,8l-1.8,1.8 c-0.4,0.4-0.4,1,0,1.4c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3l1.8-1.8l1.8,1.8c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L15.9,8z M8.5,0.1C8.1-0.1,7.7,0,7.4,0.2L3.7,3H2C0.9,3,0,3.9,0,5v6c0,1.1,0.9,2,2,2h1.7l3.7,2.8C7.6,15.9,7.8,16,8,16 c0.2,0,0.3,0,0.4-0.1C8.8,15.7,9,15.4,9,15V1C9,0.6,8.8,0.3,8.5,0.1z M7,13l-2.4-1.8C4.4,11.1,4.2,11,4,11l-2,0l0-6h2 c0.2,0,0.4-0.1,0.6-0.2L7,3V13z"/>
    </symbol>

    <!-- social -->
    <symbol id="apple" viewBox="-1 1 24 24">
        <path
            d="M17.6 13.8c0-3 2.5-4.5 2.6-4.6-1.4-2.1-3.6-2.3-4.4-2.4-1.9-.2-3.6 1.1-4.6 1.1-.9 0-2.4-1.1-4-1-2 0-3.9 1.2-5 3-2.1 3.7-.5 9.1 1.5 12.1 1 1.5 2.2 3.1 3.8 3 1.5-.1 2.1-1 3.9-1s2.4 1 4 1 2.7-1.5 3.7-2.9c1.2-1.7 1.6-3.3 1.7-3.4-.1-.1-3.2-1.3-3.2-4.9zm-3.1-9c.8-1 1.4-2.4 1.2-3.8-1.2 0-2.7.8-3.5 1.8-.8.9-1.5 2.3-1.3 3.7 1.4.1 2.8-.7 3.6-1.7z"/>
    </symbol>

    <symbol id="dribbble" viewBox="0 0 24 24">
        <path
            d="M12 0c-6.7 0-12 5.3-12 12s5.3 12 12 12 12-5.3 12-12-5.3-12-12-12zm7.9 5.7c1.3 1.7 2.1 3.9 2.3 6.1-.4-.1-2.4-.4-4.7-.4-.8 0-1.5 0-2.3.1 0-.1-.1-.3-.3-.5l-.7-1.5c3.7-1.4 5.3-3.4 5.7-3.8zm-7.9-3.8c2.5 0 4.9.9 6.7 2.5-.3.4-1.9 2.3-5.2 3.6-1.6-2.9-3.3-5.3-3.7-5.9.6-.1 1.4-.2 2.2-.2zm-4.4 1c.4.6 2.1 3 3.7 5.8-4.4 1.2-8.2 1.2-9.2 1.2h-.1c.8-3.1 2.9-5.6 5.6-7zm-5.7 9.1v-.3h.3c1.2 0 5.6-.1 10.1-1.5l.8 1.6c-.1 0-.3 0-.4.1-5.1 1.6-7.9 6-8.3 6.7-1.6-1.7-2.5-4.1-2.5-6.6zm10.1 10.1c-2.3 0-4.4-.8-6.1-2.1.3-.5 2.4-4.4 7.9-6.3 1.3 3.6 2 6.7 2.1 7.6-1.2.6-2.6.8-3.9.8zm5.7-1.8c-.1-.8-.7-3.6-2-7.1.7-.1 1.3-.1 2-.1 2.1 0 3.7.4 4.1.5-.3 2.8-1.8 5.2-4.1 6.7z"/>
    </symbol>

    <symbol id="facebook" viewBox="0 0 24 24">
        <path
            d="M24 1.3v21.3c0 .7-.6 1.3-1.3 1.3h-6.1v-9.3h3.1l.5-3.6h-3.6v-2.2c0-1.1.3-1.8 1.8-1.8h1.9v-3.2c-.3 0-1.5-.1-2.8-.1-2.8 0-4.7 1.7-4.7 4.8v2.7h-3.1v3.6h3.1v9.2h-11.5c-.7 0-1.3-.6-1.3-1.3v-21.4c0-.7.6-1.3 1.3-1.3h21.3c.8 0 1.4.6 1.4 1.3z"/>
    </symbol>

    <symbol id="facebook2" viewBox="0 0 512 512">
        <path
            d="M288 176v-64c0-17.664 14.336-32 32-32h32v-80h-64c-53.024 0-96 42.976-96 96v80h-64v80h64v256h96v-256h64l32-80h-96z"/>
    </symbol>

    <symbol id="fb-like" viewBox="0 0 20 20">
        <path
            d="M0 8v12h5v-12h-5zm2.5 10.8c-.4 0-.8-.3-.8-.8 0-.4.3-.8.8-.8s.8.3.8.8c0 .4-.4.8-.8.8zm3.5-.8h9.5c1.1 0 1.7-1 1.7-1.7 0-.3-.4-1-.4-1 1.4-.3 1.7-1.2 1.7-1.7-.1-.5-.3-.9-.5-1 1-.4 1.5-1.1 1.4-1.9-.1-.8-1-1.5-1-1.5 1-.6.9-1.5.9-1.5-.3-1.3-1.5-1.7-1.7-1.7h-5.6s.3-.5.3-2.4-1.3-3.6-2.6-3.6c0 0-.7.1-1 .3v3.5l-2.7 4.4v9.8z"/>
    </symbol>

    <symbol id="googlePlus" viewBox="0 1 24 24">
        <path
            d="M7.8 13.5h4.6c-.6 2-2.5 3.4-4.6 3.4-2.7 0-4.9-2.2-4.9-4.9s2.2-4.9 4.9-4.9c1.1 0 2.1.3 3 1l1.8-2.4c-1.4-1.1-3-1.6-4.8-1.6-4.3 0-7.9 3.5-7.9 7.9s3.5 7.9 7.9 7.9 7.9-3.5 7.9-7.9v-1.5h-7.9v3zM21.7 11v-2.2h-2v2.2h-2.2v2h2.2v2.2h2v-2.2h2.2v-2z"/>
    </symbol>

    <symbol id="instagram" viewBox="0 0 20 20">
        <circle cx="10" cy="10" r="3.3"/>
        <path
            d="M13,0H7C2.2,0,0,2.2,0,7v6c0,4.8,2.1,7,7,7h6c4.8,0,7-2.2,7-7V7C20,2.2,17.9,0,13,0z M10,15.1c-2.8,0-5.1-2.3-5.1-5.1 S7.2,4.9,10,4.9s5.1,2.3,5.1,5.1S12.8,15.1,10,15.1z M15.3,5.9c-0.7,0-1.2-0.5-1.2-1.2c0-0.7,0.5-1.2,1.2-1.2s1.2,0.5,1.2,1.2 C16.5,5.3,16,5.9,15.3,5.9z"/>
    </symbol>

    <symbol id="behance" viewBox="0 0 511.958 511.958">
        <path
            d="M210.624 240.619c10.624-5.344 18.656-11.296 24.16-17.728 9.792-11.584 14.624-26.944 14.624-45.984 0-18.528-4.832-34.368-14.496-47.648-16.128-21.632-43.424-32.704-82.016-33.28h-152.896v312.096h142.56c16.064 0 30.944-1.376 44.704-4.192 13.76-2.848 25.664-8.064 35.744-15.68 8.96-6.624 16.448-14.848 22.4-24.544 9.408-14.656 14.112-31.264 14.112-49.76 0-17.92-4.128-33.184-12.32-45.728-8.288-12.544-20.448-21.728-36.576-27.552zm-147.552-90.432h68.864c15.136 0 27.616 1.632 37.408 4.864 11.328 4.704 16.992 14.272 16.992 28.864 0 13.088-4.32 22.24-12.864 27.392-8.608 5.152-19.776 7.744-33.472 7.744h-76.928v-68.864zm108.896 198.24c-7.616 3.68-18.336 5.504-32.064 5.504h-76.832v-83.232h77.888c13.568.096 24.128 1.888 31.68 5.248 13.44 6.08 20.128 17.216 20.128 33.504 0 19.2-6.912 32.128-20.8 38.976zM327.168 110.539h135.584v38.848h-135.584zM509.856 263.851c-2.816-18.08-9.024-33.984-18.688-47.712-10.592-15.552-24.032-26.944-40.384-34.144-16.288-7.232-34.624-10.848-55.04-10.816-34.272 0-62.112 10.72-83.648 32-21.472 21.344-32.224 52.032-32.224 92.032 0 42.656 11.872 73.472 35.744 92.384 23.776 18.944 51.232 28.384 82.4 28.384 37.728 0 67.072-11.232 88.032-33.632 13.408-14.144 20.992-28.064 22.656-41.728h-62.464c-3.616 6.752-7.808 12.032-12.608 15.872-8.704 7.04-20.032 10.56-33.92 10.56-13.216 0-24.416-2.912-33.76-8.704-15.424-9.28-23.488-25.536-24.512-48.672h170.464c.256-19.936-.384-35.264-2.048-45.824zm-166.88 5.984c2.24-15.008 7.68-26.912 16.32-35.712 8.64-8.768 20.864-13.184 36.512-13.216 14.432 0 26.496 4.128 36.32 12.416 9.696 8.352 15.168 20.48 16.288 36.512h-105.44z"/>
    </symbol>

    <symbol id="linkedin" viewBox="0 0 24 24">
        <path
            d="M5.9 21.9h-4.7v-14.2h4.7v14.2zm-2.3-16.1c-1.6 0-2.6-1.1-2.6-2.5s1-2.5 2.7-2.5c1.6 0 2.6 1 2.6 2.5-.1 1.4-1.2 2.5-2.7 2.5zm19.2 16.1h-4.7v-7.6c0-2-.7-3.3-2.3-3.3-1.3 0-2.1.9-2.5 1.7-.1.3-.1.8-.1 1.2v7.9h-4.7v-14.1h4.7v2c.7-.9 1.7-2.3 4.3-2.3 3.1 0 5.5 2.1 5.5 6.4v8.2h-.2z"/>
    </symbol>

    <symbol id="medium" viewBox="0 0 130.8 104">
        <path
            d="M15.5 21.2c.2-1.6-.5-3.2-1.7-4.3l-12.1-14.7v-2.2h38l29.3 64.4 25.8-64.4h36.2v2.2l-10.5 10c-.9.7-1.3 1.8-1.2 2.9v73.7c0 1.1.3 2.2 1.2 2.9l10.2 10v2.2h-51.3v-2.2l10.6-10.2c1-1 1-1.3 1-2.9v-59.6l-29.4 74.7h-4l-34.2-74.7v50.3c0 2.2.4 4.2 1.9 5.7l13.7 16.8v2.2h-39v-2.2l13.8-16.7c1.5-1.5 1.8-3.3 1.8-5.7l-.1-58.2z"/>
    </symbol>

    <symbol id="pinterest" viewBox="0 0 24 24">
        <path
            d="M5.9 13.9c1.2-2-.4-2.5-.6-4-1-6.1 7.1-10.2 11.4-6 2.9 2.9 1 12-3.7 11-4.6-.9 2.2-8.1-1.4-9.5-3-1.1-4.6 3.6-3.2 5.9-.8 4-2.5 7.7-1.8 12.7 2.3-1.7 3.1-4.8 3.7-8.1 1.2.7 1.8 1.4 3.3 1.5 5.5.4 8.6-5.4 7.8-10.7-.7-4.7-5.5-7.1-10.6-6.6-4.1.4-8.1 3.7-8.3 8.3-.1 2.8.7 4.9 3.4 5.5z"/>
    </symbol>

    <symbol id="stumbleupon" viewBox="0 0 24 24">
        <path
            d="M13.3 9.6l1.6.8 2.5-.8v-1.4c0-3-2.4-5.4-5.4-5.4s-5.4 2.4-5.4 5.4v7.5c0 .7-.6 1.3-1.3 1.3s-1.3-.6-1.3-1.3v-3.2h-4v3.2c0 3 2.4 5.4 5.4 5.4s5.4-2.4 5.4-5.4v-7.5c0-.7.6-1.3 1.3-1.3s1.3.6 1.3 1.3l-.1 1.4zm6.6 2.9v3.2c0 .7-.6 1.3-1.3 1.3s-1.3-.6-1.3-1.3v-3.2l-2.5.8-1.6-.8v3.2c0 3 2.4 5.4 5.4 5.4s5.4-2.4 5.4-5.4v-3.2h-4.1z"/>
    </symbol>

    <symbol id="twitter" viewBox="0 1 24 23">
        <path
            d="M21.5 7.6v.6c0 6.6-5 14.1-14 14.1-2.8 0-5.4-.8-7.6-2.2l1.2.1c2.3 0 4.4-.8 6.1-2.1-2.2 0-4-1.5-4.6-3.4.3.1.6.1.9.1.5 0 .9-.1 1.3-.2-2.1-.6-3.8-2.6-3.8-5 .7.4 1.4.6 2.2.6-1.3-.9-2.2-2.4-2.2-4.1 0-.9.2-1.8.7-2.5 2.4 3 6.1 5 10.2 5.2-.1-.4-.1-.7-.1-1.1 0-2.7 2.2-5 4.9-5 1.4 0 2.7.6 3.6 1.6 1-.3 2.1-.7 3-1.3-.4 1.2-1.1 2.1-2.2 2.7 1-.1 1.9-.4 2.8-.8-.6 1.1-1.4 2-2.4 2.7z"/>
    </symbol>

    <symbol id="tumblr" viewBox="0 0 23 23">
        <path
            d="M12.573 4.94v-4.94h-3.188c-.072.183-.11.4-.11.622-.034.107-.072.184-.072.293-.328 1.829-1.28 3.11-2.892 3.807-.476.218-.914.253-1.39.218v3.987h2.342c.039 5.603.039 8.493.039 8.64v.332c.294 2.449 1.573 3.914 3.843 4.463.914.257 1.901.366 2.892.366 1.279-.036 2.525-.256 3.771-.659v-4.685c-.731.22-1.395.402-1.977.583-1.135.333-2.087.113-2.857-.619-.073-.11-.183-.257-.221-.403-.106-.586-.178-1.206-.178-1.795v-6.222h5.083v-3.988h-5.085z"/>
    </symbol>

    <symbol id="xing" viewBox="0 0 24 24">
        <path
            d="M3.647 4.74c-.208 0-.384.073-.472.216-.091.148-.077.338.02.531l2.34 4.051v.02l-3.678 6.49c-.096.191-.091.383 0 .531.088.142.244.236.452.236h3.461c.518 0 .767-.349.944-.669l3.737-6.608-2.38-4.15c-.172-.307-.433-.649-.964-.649h-3.46zm14.542-4.74c-.517 0-.741.326-.927.659l-7.702 13.658 4.918 9.023c.172.307.437.659.967.659h3.457c.208 0 .371-.079.459-.221.092-.148.09-.343-.007-.535l-4.88-8.915v-.023l7.664-13.551c.096-.191.098-.386.007-.534-.088-.142-.252-.221-.46-.221h-3.496z"/>
    </symbol>

    <symbol id="whatsapp" viewBox="0 0 512 512">
        <path
            d="M256.064 0h-.128c-141.152 0-255.936 114.816-255.936 256 0 56 18.048 107.904 48.736 150.048l-31.904 95.104 98.4-31.456c40.48 26.816 88.768 42.304 140.832 42.304 141.152 0 255.936-114.848 255.936-256s-114.784-256-255.936-256zm148.96 361.504c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.616-127.456-112.576-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016.16 8.576.288 7.52.32 11.296.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744-3.776 4.352-7.36 7.68-11.136 12.352-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z"/>
    </symbol>

    <symbol id="youtube" viewBox="0 0 24 24">
        <path
            d="M23.6 6.3c-.3-1.2-1.4-2.2-2.6-2.3-3-.3-6-.3-9-.3s-6 0-9 .3c-1.2.1-2.3 1.1-2.6 2.3-.4 1.8-.4 3.8-.4 5.7 0 1.9 0 3.9.4 5.7.3 1.2 1.4 2.2 2.6 2.3 3 .3 6 .3 9 .3s6 0 9-.3c1.3-.1 2.3-1.1 2.6-2.4.4-1.7.4-3.7.4-5.6 0-1.9 0-3.9-.4-5.7zm-14.1 9v-6.6l6.5 3.3-6.5 3.3z"/>
    </symbol>

</svg>

<!-- Navigation -->
<nav class="side pole">
    <div class="navigation">
        <ul></ul>
    </div>
</nav>

<!-- Panel Top #08 -->
<nav class="panel top">
    <div class="sections desktop">
        <div class="left"><a href="/" style="font-weight: bold;" title="Slides Framework">TIPPLE</a></div>
        <div class="center">
            <ul class="menu uppercase">
                <li><a href="{{route('app')}}">دانلود اپلیکیشن</a></li>
                <li><a href="{{route('contact')}}">تماس با ما</a></li>
                <li><a href="{{route('about')}}">درباره ما</a></li>
                <li><a href="{{route('purchases.create') }}">سفارش</a></li>
                <li><a href="{{route('alltariffs')}}">تعرفه ها</a></li>
                <li><a href="{{route('allblogs')}}">مقالات</a></li>
            </ul>
        </div>
        <div class="right">
            <ul class="menu trim">
                <li><a href="http://instagram.com/tippler.ir" target="_blank">
                        <svg>
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#instagram"></use>
                        </svg>
                    </a></li>
                <li><a href="http://wa.me/989190622401" target="_blank">
                        <svg>
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#whatsapp"></use>
                        </svg>
                    </a></li>
            </ul>
        </div>
    </div>
    <div class="sections compact hidden">
        <div class="left"><a href="/" title="Slides Framework">TIPPLE</a></div>
        <div class="right"><span class="button actionButton sidebarTrigger" data-sidebar-id="1"><svg><use
                        xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu"></use></svg></span></div>
    </div>
</nav>

<!-- Sidebar -->
<nav class="sidebar" data-sidebar-id="1">
    <div class="close">
        <svg>
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use>
        </svg>
    </div>
    <div class="content">
        <a href="/" class="logo">
            <svg width="37" height="30">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo-icon"></use>
            </svg>
        </a>
        <ul class="mainMenu margin-top-3">
            <li><a href="{{route('app')}}">دانلود اپلیکیشن</a></li>
            <li><a href="{{route('contact')}}">تماس با ما</a></li>
            <li><a href="{{route('about')}}">درباره ما</a></li>
            <li><a href="{{route('purchases.create') }}">سفارش</a></li>
            <li><a href="{{route('alltariffs')}}">تعرفه ها</a></li>
            <li><a href="{{route('allblogs')}}">مقالات</a></li>
        </ul>
        <ul class="subMenu small opacity-8">
            <li><a href="#">نظرات و پیشنهادات</a></li>
            <li><a href="#">سئوالات</a></li>
            <li><a href="#">لایسنس</a></li>
            <li><a href="#">شرایط و قوانین</a></li>
            <li><a href="#">تماس با ما</a></li>
        </ul>
        <ul class="social opacity-8">
            <li><a href="https://wa.me/989190622401">
                    <svg>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#whatsapp"></use>
                    </svg>
                </a></li>
            <li><a href="https://instagram.com/tippler.ir">
                    <svg>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#instagram"></use>
                    </svg>
                </a></li>
        </ul>
    </div>
</nav>

<!-- Slide 1 Slider Page 01 -->
<section class="slide fade-6 kenBurns">
    <div class="content">
        <!--SlideShow-->
        <div class="row">
            <!--SlideShow-->
            <div class="col-md-12">
                <div class="slideshow-container" style="margin-top: 100px">
                    @foreach($slider as $sliders)
                        <div class="mySlides fade center">
                            <img src="/{{$sliders->image}}" style="max-width:800px; max-height: 400px;">
                            <div class="text" style="text-align: center">{{$sliders->title}}</div>
                        </div>
                    @endforeach
                </div>
                <div style="text-align:center">
                    @foreach($slider as $sliders)
                        <span class="dot"></span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-image:url(assets/img/background/image_01.jpg)"></div>
</section>

<!-- Slide 2 Motivation Phrase -->
<section class="slide fade-6 kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrap">
                <div class="fix-7-12">
                    @foreach($motivation as $motivations)
                        <h1 class="ae-1">{{$motivations->title}}</h1>
                        <p class="ae-2"><span class="opacity-8">{{$motivations->description}}</span></p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-image:url(assets/img/background/image_02.jpg)"></div>
</section>

<!-- Slide 3 Step of Developing 1 -->
<section class="slide fade-6 kenBurns rtl">
    <div class="content">
        <div class="container">
            <div class="wrap">
                <div class="fix-12-12">
                    <ul class="flex left">
                        <li class="col-6-12 fromBottomLeft">
                            <p class="opacity-6 margin-bottom-2 ae-1" style="text-align: center;">TIPPLER</p>
                            <h1 class="ae-2" style="text-align: right;">مرحله های طراحی سایت</h1>
                            <div class="ae-3"><p class="opacity-8" style="text-align: right;">نیازسنجی و برنامه ریزی ساخت سایت
                                    اولین و مهم ترین گام، استخراج نیازمندیهای پروژه است. اینکه سایت قرار است چه امکاناتی ارائه کرده و چه نیازهایی از کاربر را برطرف سازد. اطلاعات مذکور به همراه درخواست های مشتری در قالب یک پروپوزال مستند شده و به تایید طرفین میرسد.</span>
                                </p></div>
                            <ul class="flex">
                                <li class="col-6-12 ae-3">
                                    <h3 class="margin-top-3" style="text-align: right;">نیازسنجی و برنامه ریزی ساخت سایت</h3>
                                    <p class="tiny opacity-6" style="text-align: right;">اولین و مهم ترین گام، استخراج نیازمندیهای پروژه است. اینکه سایت قرار است چه امکاناتی ارائه کرده و چه نیازهایی از کاربر را برطرف سازد. اطلاعات مذکور به همراه درخواست های مشتری در قالب یک پروپوزال مستند شده و به تایید طرفین میرسد.</p>
                                </li>
                                <li class="col-6-12 ae-3">
                                    <h3 class="margin-top-3" style="text-align: right;">تحقیق و بررسی محتوا</h3>
                                    <p class="tiny opacity-6" style="text-align: right;">بعد از نیازسنجی و دریافت درخواست های کارفرما، تیم فنی به بررسی و تحلیل محتوای گردآوری شده پرداخته و بهترین راه را جهت ارائه آن ها در سایت پیشنهاد میکند. این محتوا میتواند شامل متن، تصاویر، لوگوی تجاری، اطلاعات تماس، متن درباره ما، لیست و نمونه محصولات، خدمات، رنگ سازمانی و… باشد. مدیر پروژه مربوطه در TIPPLER، ایده ها و نتایج آنالیز را با کارفرما در میان میگذارد و در صورت تایید طرفین، اجرای طرح اولیه به تیم طراحی سپرده خواهد شد.</p>
                                </li>
                                <li class="col-6-12 ae-3">
                                    <h3 class="margin-top-3" style="text-align: right;">طراحی قالب اصلی سایت</h3>
                                    <p class="tiny opacity-6" style="text-align: right;">تیم طراحی TIPPLER با توجه به طرح اولیه اقدام به دیزاین صفحات مختلف سایت کرده و تمام ملاک های طراحی ایده آل را رعایت میکند. رنگ سازمانی و لوگو نقش مهمی در طراحی سایت دارند. در TIPPLER سعی میشود محیط وبسایت شما منطبق بر زمینه کاری تجارتتان باشد تا کاربر با کسب و کاری یکپارچه و منظم مواجه شود. کافرما میتواند تا 30 درصد تغییرات نسبت به طرح اولیه که به تایید طرفین رسیده بود را درخواست کند. تمامی عناصر گرافیکی و بصری نیز قبل از پیاده سازی به تایید کارفرما میرسد.</p>
                                </li>
                                <li class="col-6-12 ae-3">
                                    <h3 class="margin-top-3" style="text-align: right;">کدنویسی سایت</h3>
                                    <p class="tiny opacity-6" style="text-align: right;">کدهای یک سایت حکم اسکلت بندی یک ساختمان را دارد، لذا تمام توجه و دقت خود را در انجام بهترین و بهینه ترین کدنویسی انجام داده و آخرین تکنولوژی ها و استانداردهای دنیای وب را در آن دخیل میکنیم.</p>
                                </li>
                                <li class="col-6-12 ae-3">
                                    <h3 class="margin-top-3" style="text-align: right;">ورود اطلاعات اولیه سایت</h3>
                                    <p class="tiny opacity-6" style="text-align: right;">پس از اتمام کدنویسی، مرحله دیتاگذاری اولیه آغاز میشود. در واقع در این گام ما سایت را تا حدودی آب بندی کرده و شما را با یک خروجی کاملا خام تنها نخواهیم گذاشت. </p>
                                </li>
                                <li class="col-6-12 ae-3">
                                    <h3 class="margin-top-3" style="text-align: right;">تحویل و آموزش کار با پنل ادمین</h3>
                                    <p class="tiny opacity-6" style="text-align: right;">و در نهایت به تحویل سایت میرسیم با آموزش کار پنل ادمین سایت تحویل داده میشود.</p>
                                </li>
                            </ul>
                        </li>
                        <li class="col-1-12">&nbsp;</li>
                        <li class="col-5-12 bottom">
                            <img src="/assets/img/step1.jpg" data-action="zoom" class="shadow rounded ae-8"
                                 alt="Image"/>
                            <img src="/assets/img/step2.jpg" data-action="zoom" class="shadow rounded ae-8"
                                 alt="Image"/>
                            <img src="/assets/img/step3.jpg" data-action="zoom" class="shadow rounded ae-8"
                                 alt="Image"/>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-image:url(assets/img/background/image_03.jpg)"></div>
</section>

<!-- Slide 4 Step of Developing 2 -->
<section class="slide fade-6 kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrap">
                <div class="fix-11-12">
                    <ul class="flex reverse">
                        <li class="col-6-12 left box-73">
                            <h1 class="ae-2" style="text-align: right;">مراحل طراحی سایت</h1>
                            <p class="ae-3" style="text-align: right;"><span class="opacity-8">اگر قصد طراحی سایت را داشته باشید یا  در این خصوص مطالعاتی کرده باشید حتما تاکنون واژه سیستم مدیریت محتوا یا سی ام اس را شنیده اید سی ام اس ها یا همان سایت ساز ها نرم افزارهایی هستند که اطلاعات یک وبسایت را مدیریت میکنند اطلاعات سایت های مختلف که در بانک اطلاعاتی یا دیتابیس قراردارد ، توسط سیستم مدیریت محتوا مدیریت میشوند .
افراد مختلف میتوانند بدون داشتن مهارت های برنامه نویسی و با استفاده از سی ام اس یا سیستم مدیریت محتوا یک وبسایت کامل را مدیریت نمایند.</span>
                            </p>
                            <h2 style="text-align: right;">وردپرس چیست ؟</h2>
                            <p class="opacity-8" style="text-align: right;">وردپرس یک سی ام اس یا سیستم مدیریت محتوای متن باز میباشد ، این سیستم که در ابتدا یک سیستم مدیریت وبلاگ ساده بود ، بعد ها به صورت یک سی ام اس یا سیستم مدیریت محتوا در اختیار عموم قرار گرفت.
                                شما میتوانید وردپرس را به صورت رایگان نصب کرده و وبسایت خود را به وسیله آن راه اندازی نمایید
                                راه اندازی وبسایت با ورد پرس آسان بوده و شما میتوانید با چند کلیک وبسایت های خود را اعم از شرکتی ، فروشگاهی و غیره راه اندازی نمایید و در ادامه و آینده به توسعه آن بپردازید.
                                وردپرس جزو سی ام اس های آماده سایت ساز محسوب میشود و به جز وردپرس سی ام های دیگری هستند که میتوان با آنها طراحی سایت انجام داد.
                                این سیستم دارای پنل های مدیریت به زبان های مختلف میباشد.
                                متن باز بودن این سی ام اس باعث شده که برنامه نویسان مختلف از سراسر دنیا بتوانند به توسعه این سیستم بپردازند که البته همین موضوع باعث نا امنی وحشتناک این سی ام اس شده است. امنیت این ماژول ها از هیچ طریقی تایید نمیشوند و استفاده از آنها به نوعی ریسک محسوب میشود. ( به استثنای ماژول های رسمی وردپرس)
                                به طور کلی وردپرس و سایر سیستم های سایت ساز آماده و متن باز بیشتر جهت طراحی سایت هایی با امکانات محدود و با درجه اهمیت پایین استفاده میشوند. کمتر سایت دانشگاهی ، سایت فروشگاهی حرفه ای یا سایت ایده محوری را میبینید که با سایت ساز های آماده طراحی شده باشند.</p>
                            <h2 style="text-align: right;">سی ام اس اختصاصی چیست؟</h2>
                            <p class="opacity-8" style="text-align: right;">اگرچه سیستم های مدیریت محتوای آماده زیادی وجود دارند که نیازهای وبسایت را در حد اولیه و آماتور پوشش میدهند اما در صورتی که نیاز داشته باشید طراحی سایت حرفه ای با امکانات اختصاصی و خاص انجام دهید  نیاز است که از سی ام اس های اختصاصی حرفه ای ، قدرتمند و استاندارد استفاده نمایید.
                                نحوه طراحی سایت در سی ام اس های اختصاصی به این شکل است که تیم توسعه دهنده یا سازنده سایت ، کلیه امکانات مورد نظر شما را با توجه به اصل نیاز شما طراحی میکنند ، ماژول ها یا امکانات سایت از پیش تعریف شده نیست و کلیه بخش ها با توجه به نیاز شما طراحی میشوند ، هر بخشی که در سی ام اس های اختصاصی نوشته میشود از تست های متعدد باگ گیری عبور میکند و در نتیجه وبسایت طراحی شده با سی ام اس اختصاصی از نظر کیفیت ، امنیت و رابط کاربری به مراتب حرفه ای تر و بهتر از سیستم های مدیریت محتوای آماده خواهد بود . طراحی سایت شرکت های بزرگ ، طراحی سایت ارگان های دولتی ، طراحی سایت بانک ها ، طراحی سایت های ایده محور ، فروشگاه های اینترنتی حرفه ای و بزرگ معمولا با سی ام اس های اختصاصی صورت میپذیرد . معمولا هزینه برنامه نویسی در سیستم های مدیریت محتوای اختصاصی بالاتر از سیستم های آماده میباشد که این امر به دلیل سطح کاری و بالا بودن لول سایت طراحی شده با سی ام اس اختصاصی میباشد.</p>
                            <h2 style="text-align: right;">مزایای سی ام اس اختصاصی</h2>
                            <p class="opacity-8" style="text-align: right;">سیستم های مدیریت محتوای اختصاصی  یا سی ام اس اختصاصی مزایای بسیاری دارد که به اختصار به برخی از آنها میپردازیم</p>
                            <br>
                            <p class="opacity-8" style="text-align: right;">طراحی امکانات جدیدی که در سایر سی ام اس ها وجود ندارد : همانطور که گفته شد در اکثر سی ام اس های آماده شما مجبورید امکانات سایت خود را از بین ماژول ها و امکانات از پیش تعریف شده انتخاب نمایید اما در سایت ساز های اختصاصی میتوانید یک امکان را از صفر و دقیقا همانطور که میخواهید کدنویسی کنید.</p>
                            <br>
                            <p class="opacity-8" style="text-align: right;"> استفاده بهینه از منابع سرور و هاست : یکی از مشکلات سی ام اس های آماده مانند وردپرس ، استفاده زیاد از منابع سرور ، RAM و CPU سرور میباشد ، این اتفاق به خصوص در زمانی رخ میدهد که تعداد پست ها و تگ های سایت شما زیاد باشد و یا اینکه تعداد بازدید سایت شما افزایش پیدا کرده باشد.
                                این مشکل در سیستم های مدیریت محتوای اختصاصی کاملا برطرف میشود.</p>
                            <br>
                            <p class="opacity-8" style="text-align: right;"> امنیت فوق العاده : به دلیل اختصاصی نویسی و عدم استفاده از ماژول ها سی ام اس های آماده و متن باز ، سیستم های مدیریت محتوا یا سی ام اس های اختصاصی از امنیت فوق العاده بالایی برخوردار هستند.</p>
                        </li>
                        <li class="col-6-12 left ae-1 fromAbove">
                            <img class="shiftImage shiftImageVertical image-73" src="/assets/img/steping.png"
                                 width="802" data-action="zoom" alt="iPhone Image"/>
                        </li>
                    </ul>
                    <div class="fix-11-12">
                        <ul class="grid fixedSpaces equal left grid-73">
                            <li class="col-4-12 ae-3">
                                <a href="#" class="cell-73 rounded equalElement">
                                    <h3 style="text-align: right;">مرحله اول</h3>
                                    <p class="tiny opacity-6" style="text-align: right;">تعریف پروژه</p>
                                </a>
                            </li>
                            <li class="col-4-12 ae-4">
                                <a href="#" class="cell-73 rounded equalElement">
                                    <h3 style="text-align: right;">مرحله دوم</h3>
                                    <p class="tiny opacity-6" style="text-align: right;">طراحی و کد نویسی سایت</p>
                                </a>
                            </li>
                            <li class="col-4-12 ae-6">
                                <a href="#" class="cell-73 rounded equalElement last">
                                    <h3 style="text-align: right;">مرحله سوم</h3>
                                    <p class="tiny opacity-6" style="text-align: right;">تحویل و پشتیبانی 12 ماهه</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-image:url(assets/img/background/image_04.jpg)"></div>
</section>

<!-- Slide 5 All Blogs -->
<section class="slide fade-6 kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrap">
                <div class="fix-10-12 toCenter">
                    <p class="margin-bottom-2 ae-1"><span class="opacity-6">مقالات</span></p>
                    <h1 class="ae-1">انتحاب مناسب با مطالعه مقالات</h1>
                    <p class="ae-2"><span class="opacity-8">با مطالعه مقالات انتخاب مناسب تری در کسب و کار خود داشته باشید</span>
                    </p>
                </div>
                <div class="fix-12-12 margin-top-3">
                    <ul class="flex fixedSpaces later left">
                        @foreach($blog as $blogs)
                            <li class="col-3-12 col-tablet-1-2 col-phone-1-1">
                                <a href="{{route('getblog',['blog'=>$blogs->id])}}" class="button rounded empty margin-bottom-2 ae-5">
                                    <img class="wide" src="/{{$blogs->image}}" alt="{{$blogs->title}}"/>
                                </a>
                                <h3 class="ae-6" style="text-align: right;"><a href="#">{{$blogs->title}}</a></h3>
                                <div class="ae-7"><p class="tiny opacity-6" style="text-align: right; max-lines: 2"><a
                                            href="#">{{$blogs->description}}</a></p></div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-image:url(assets/img/background/image_05.jpg)"></div>
</section>

<!-- Slide 6 Tariff -->
<section class="slide fade-6 kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrap">
                <div class="fix-10-12">
                    <h1 class="ae-1">تعرفه ها</h1>
                    <ul class="grid grid-83 noSpaces equal ae-2 fadeIn">
                        @foreach($tariff as $tariffs)
                            <li class="col-4-12 ae-3" style="background: #F5FBFE">
                                <h3>{{$tariffs->name}}</h3>
                                <div class="price ae-5"><span class="currency">تومان</span>{{$tariffs->price}}</div>
                                <div class="ae-5">
                                    <h6 class="uppercase bold small opacity-4">به همراه مدیریت محتوای حرفه ای</h6>
                                </div>
                                <div class="margin-top-3 margin-bottom-3 equalElement ae-6">
                                    <ul class="p tiny">
                                        <li><strong>{{$tariffs->host}}</strong></li>
                                        <li class="opacity-7">{{$tariffs->domain}}</li>
                                        <li class="opacity-7">{{$tariffs->support}}</li>
                                    </ul>
                                </div>
                                <a href="{{route('purchases.create')}}"
                                   class="button red gradient wide cropSides cropBottom ae-7">درخواست</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-image:url(assets/img/background/image_06.jpg)"></div>
</section>

<!-- Slide 7 Resume -->
<section class="slide fade-6 kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrap">
                <div class="fix-12-12">
                    <ul class="grid">
                            <li class="col-6-12 left">
                                <h1 class="ae-2 fromLeft" style="text-align: center;">نمونه کار ها</h1>
                                <p class="ae-3 fromLeft" style="text-align: center;"><span class="opacity-8">نمونه کار ها نمونه کار ها نمونه کار ها نمونه کار ها نمونه کار ها</span>
                                </p>
                                <ul class="tabs controller uppercase bold ae-4 fromCenter" data-slider-id="60-1">
                                    @foreach($resume as $resumes)
                                        <li>{{$resumes->title}}</li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="col-6-12 left ae-5 fromCenter">
                                <ul class="slider animated margin-top-4" data-slider-id="60-1">
                                    @foreach($resume as $resumes)
                                    <li class="selected fromCenter">
                                        <div class="popupTrigger shadow rounded" data-popup-id="60-1">
                                            <img class="wide" src="/{{$resumes->image}}" alt="{{$resumes->title}}"/>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-image:url(assets/img/background/image_07.jpg)"></div>
</section>

<!-- Slide 7.1 Resume Pic -->
<section class="slide fade-6 kenBurns selected active animate">
    <div class="content">
        <div class="container">
            <div class="wrap">
                <div class="fix-10-12 toCenter">
                    <h1 class="ae-1 done">نمونه کار ها</h1>
                    <p class="ae-2 done"><span class="opacity-8">نمونه کار ها نمونه کار ها نمونه کار ها نمونه کار ها نمونه کارها</span>
                    </p>
                </div>
                <div class="fix-12-12">
                    <ul class="grid grid-75 masonry fixedSpaces ae-3 controller popupTrigger done" data-popup-id="75-1"
                        data-slider-id="75-1" style="position: relative; height: 381.562px;">
                        @foreach($resume as $resumes)
                        <li class="col-3-12 col-tablet-1-3 col-phablet-1-2 col-phone-1-1 ae-6 fadeIn done selected"
                            style="position: absolute; left: 0px; top: 0px;">
                            <img src="/{{$resumes->image}}" class="wide rounded margin-bottom-1" alt="{{$resumes->title}}">
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-image:url(assets/img/background/image_07_1.jpg)"></div>
</section>

<!-- Slide 7.2 Resume Open/Close Pic -->
<div class="popup animated" data-popup-id="75-1">
    <div class="close">
        <svg>
            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                 xlink:href="file:///C:/Users/T/AppData/Local/Temp/Rar$EXa13648.34317/html-website-templates-master/Landing%20Page%20Website%20for%20App/index.html#close"></use>
        </svg>
    </div>
    <div class="content">
        <div class="container">
            <div class="wrap spaces">
                <ul class="slider animated ae-1 fromAbove inlineBlock clickable popupContent disableSelect animateOnEvent"
                    data-slider-id="75-1" style="display: inline-block;">
                    @foreach($resume as $resumes)
                    <li class="selected ae-1 do">
                        <img src="/{{$resumes->image}}" class="rounded" alt="{{$resumes->title}}">
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Slide 8 Clients -->
<section class="slide fade-6 kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrap">
                <div class="fix-9-12 toCenter">
                    <h1 class="ae-1">تکنولوزی ها</h1>
                    <p class="ae-2"><span class="opacity-8">به کارگیری تکنولوژی های روز دنیا در طراحی و کد نویسی وبسایت</span>
                    </p>
                    <!-- remove class tintLogos class to disable color change of the logo images -->
                    <ul class="flex grid-68 tintLogos equal equalMobile">
                        <li class="col-2-12 col-tablet-1-4 col-phablet-1-3 col-phone-1-2">
                            <div class="table wide equalElement ae-3">
                                <div class="cell">
                                    <a href="#">
                                        <img width="67" src="/assets/img/bootstrap.png" alt="bootstrap"/>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="col-2-12 col-tablet-1-4 col-phablet-1-3 col-phone-1-2">
                            <div class="table wide equalElement ae-3">
                                <div class="cell">
                                    <a href="#">
                                        <img width="67" src="/assets/img/js.png" alt="bootstrap"/>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="col-2-12 col-tablet-1-4 col-phablet-1-3 col-phone-1-2">
                            <div class="table wide equalElement ae-3">
                                <div class="cell">
                                    <a href="#">
                                        <img width="67" src="/assets/img/jquery.png" alt="bootstrap"/>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="col-2-12 col-tablet-1-4 col-phablet-1-3 col-phone-1-2">
                            <div class="table wide equalElement ae-3">
                                <div class="cell">
                                    <a href="#">
                                        <img width="67" src="/assets/img/vuejs.png" alt="bootstrap"/>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="col-2-12 col-tablet-1-4 col-phablet-1-3 col-phone-1-2">
                            <div class="table wide equalElement ae-3">
                                <div class="cell">
                                    <a href="#">
                                        <img width="67" src="/assets/img/php.png" alt="bootstrap"/>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="col-2-12 col-tablet-1-4 col-phablet-1-3 col-phone-1-2">
                            <div class="table wide equalElement ae-3">
                                <div class="cell">
                                    <a href="#">
                                        <img width="67" src="/assets/img/laravel.png" alt="bootstrap"/>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="background" style="background-image:url(assets/img/background/image_08.jpg)"></div>
</section>

<!-- Slide 9 Advantage & DisAdvantage -->
<section class="slide fade-6 kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrap">
                <div class="fix-12-12 toCenter">
                    <div class="fix-7-12 btn-hire">
                        <p class="margin-bottom-2 ae-1"><span class="opacity-6"></span>مزایا و معایب طراحی سایت و خدمات دیجیتال مارکتینگ</p>
                        <h1 class="ae-2 huge fromAbove margin-bottom-2">مزایا و معایب راه اندازی کسب و کار آنلاین</h1>
                        <button href="{{route('purchases.create')}}" class="cta">ارسال درخواست
                            <span class="btn-background"></span>
                        </button>
                    </div>
                    <ul class="grid fixedSpaces left margin-top-10">
                        <li class="col-3-12 col-tablet-1-2 col-phablet-1-1 ae-4 fromLeft">
                            <h3 style="text-align: right;">مهم و حیاطی بودن کسب و کار</h3>
                            <p class="tiny opacity-6" style="text-align: right;"></p>
                        </li>
                        <li class="col-3-12 col-tablet-1-2 col-phablet-1-1 ae-4 fromLeft">
                            <h3 style="text-align: right;"></h3>
                            <p class="tiny opacity-6" style="text-align: right;"></p>
                        </li>
                        <li class="col-3-12 col-tablet-1-2 col-phablet-1-1 ae-4 fromLeft">
                            <h3 style="text-align: right;"></h3>
                            <p class="tiny opacity-6" style="text-align: right;"></p>
                        </li>
                        <li class="col-3-12 col-tablet-1-2 col-phablet-1-1 ae-4 fromLeft">
                            <h3 style="text-align: right;"></h3>
                            <p class="tiny opacity-6" style="text-align: right;"></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-image:url(assets/img/background/image_09.jpg)"></div>
</section>

<!-- Slide 10 Address Info -->
<section class="slide fade-6 kenBurns">
    <div class="content">
        <div class="container">
            <div class="contact">
                <div class="contact--lockup">
                    <div class="modal">
                        <div class="modal--information">
                            <p href="https://goo.gl/maps/tSCHnRhuk1XJqPu58">تهران شادمان خ شادمهر نبش کوچه سلامتی پلاک
                                163</p>
                            <a href="mailto:info@tippler.ir">info@tippler.ir</a>
                            <a href="tel:+2166095138">+21 - 66095138</a>
                        </div>
                        <ul class="modal--options">
                            <li><a href="mailto:info@tippler.ir">تماس با ما</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-image:url(assets/img/background/image_10.jpg)"></div>
</section>

<!-- Slide 11 Download Application -->
<section class="slide fade-6 kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrap">
                <div class="fix-6-12">
                    <h1 class="huge ae-1 margin-bottom-2">دانلود اپلیکیشن</h1>
                    <p class="hero ae-2 margin-bottom-3"><span
                            class="opacity-8">یادگیری هیچ گاه مغز را خسته نمی کند</span></p>

                    <form action="#" autocomplete="off" class="email-box btn-hire1">
                        <button class="cta1">دانلود اپلیکیشن
                            <span class="btn-background1"></span>
                        </button>
                    </form>
                    <a href="#" class="button hollow ae-5"><img src="/assets/img/appstore.jpg" height="63"/></a><a
                        href="#" class="button hollow ae-6"><img src="/assets/img/googleplay.jpg" height="63"/></a>
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-image:url(assets/img/background/image_11.jpg)"></div>
</section>

<!-- Slide 12 Notifications -->
<section class="slide fade-6 kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrap">
                <div class="fix-6-12">
                    <h1 class="huge ae-1 margin-bottom-2">عضویت در خبرنامه</h1>
                    <p class="hero ae-2 margin-bottom-3"><span
                            class="opacity-8">از اخرین تخفیف ها و اخبار با خبر شوید</span></p>
                    <form action="{{route('emails.store')}}" method="POST" class="email-box btn-hire">
                        @csrf
                        <input type="email" class="ae-3" name="email" placeholder="ایمیل خود را وارد کنید"/>
                        <button type="submit" class="cta">عضویت در خبرنامه
                            <span class="btn-background"></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-image:url(assets/img/background/image_12.jpg)"></div>
</section>

<!-- Slide 13 Footer -->
<section class="slide fade-6 kenBurns">
    <div class="content">
        <div class="container">
            <div class="wrap">
                <div class="fix-10-12">
                    <h1 class="fix-9-12 huge ae-1">محتوا ها فقط محتوا نیستند بلکه بخشی از دیزاین هستند</h1>
                    <ul class="grid equal fixedSpaces margin-top-3">
                        <li class="col-4-12 ae-3">
                            <div class="fix-3-12 equalElement">
                                <h6 class="uppercase opacity-4 margin-top-3 margin-bottom-2">آدرس شرکت</h6>
                                <p class="tiny"><a class="opacity-8" href="https://goo.gl/maps/tSCHnRhuk1XJqPu58">تهران
                                        شادمان خیابان شادمهر نبش کوچه سلامتی
                                        پلاک 163
                                    </a></p>
                            </div>
                            <div class="fix-3-12 equalElement">
                                <h6 class="uppercase opacity-4 margin-top-3 margin-bottom-2">شماره تماس</h6>
                                <p class="tiny"><a class="opacity-8" href="tel:+2166095138">021 - 66095138
                                    </a></p>
                            </div>
                        </li>
                        <li class="col-4-12 ae-4">
                            <div class="fix-3-12 equalElement">
                                <h6 class="uppercase opacity-4 margin-top-3 margin-bottom-2">ایمیل شرکت</h6>
                                <p class="tiny"><a class="opacity-8" href="mailto:info@tippler.ir">info@tippler.ir</a>
                                </p>
                            </div>
                            <div class="fix-3-12 equalElement">
                                <h6 class="uppercase opacity-4 margin-top-3 margin-bottom-2">ایمیل توسعه دهنده گان</h6>
                                <p class="tiny"><a class="opacity-8" href="mailto:mirmehrabmousavi@yahoo.com">mirmehrabmousavi@yahoo.com</a>
                                </p>
                            </div>
                        </li>
                        <li class="col-4-12 ae-5">
                            <div class="fix-3-12 equalElement">
                                <h6 class="uppercase opacity-4 margin-top-3 margin-bottom-2">وبلاگ شرکت</h6>
                                <p class="tiny"><a class="opacity-8" href="http://blog.tippler.ir">blog.tippler.ir</a>
                                </p>
                            </div>
                            <div class="fix-3-12 equalElement">
                                <h6 class="uppercase opacity-4 margin-top-3 margin-bottom-2">شبکه های اجتماعی</h6>
                                <ul class="social-circles">
                                    <li><a class="social-instagram" href="https://instagram.com/tippler.ir">
                                            <svg>
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#instagram"></use>
                                            </svg>
                                        </a></li>
                                    <li><a class="social-whatsapp" href="https://wa.me/989190622401">
                                            <svg>
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#whatsapp"></use>
                                            </svg>
                                        </a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="background" style="background-image:url(assets/img/background/image_13.jpg)"></div>
</section>

<!-- Panel Bottom #15 -->
<nav class="panel bottom lastSlideOnly">
    <div class="sections">
        <div class="center"><a href="/" class="opacity-8">CopyRight (c) 2021 TIPPLE DEVELOPERS All Rights Reserved</a>
        </div>
    </div>
</nav>

<!-- Loading Progress Bar -->
<div class="progress-bar red"></div>

<!--SlideShow Script-->
<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
</script>

</body>
</html>
