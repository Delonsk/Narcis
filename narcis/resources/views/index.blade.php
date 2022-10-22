<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--    <link rel="stylesheet" href="https://use.typekit.net/gdw7yfk.css">--}}
    <title>Narcis</title>
    @vite('resources/css/app.css')
    <style>
        @media (min-width: 1024px) {
            .g-recaptcha {
                justify-content: start !important;
            }
        }
        .g-recaptcha {
            display: flex;
            justify-content: center;
        }

        @font-face {
            font-family: "grafolita-script";
            src: url({{asset('font/GrafolitaScript.otf')}}) ;
            font-display: auto;
            font-style: normal;
            font-weight: 400;
            font-stretch: normal;
        }

        @font-face {
            font-family: "ff-scala-sans-pro";
            src: url({{asset('font/ScalaSansPro.otf')}});
            font-display: auto;
            font-style: normal;
            font-weight: 400;
            font-stretch: normal;
        }

    </style>
</head>
<body class="">
<nav class="w-full min-h-[155px] pt-[10px] items-center shadow-[0px_20px_50px_#0000004D] relative">
    <div class="w-full flex justify-between items-center  min-h-[155px] relative">
        <div class="pl-[20px] sm:pl-[60px] ">
            <div class="w-[259px]">
                <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 976.19 342.44">
                    <g id="Layer_1-2" data-name="Layer 1">
                        <g>
                            <g>
                                <path
                                    d="M158.31,94.3c-.43-4.41-1.85-8.69-2.35-10.17-1.89-5.67-4.23-9.62-6.07-12.66-.72-1.18-4.26-6.99-9.64-12.86-13.6-14.86-32.13-22.75-41.81-26.87-10.02-4.27-17.96-6.38-21.45-7.33,0,0-6.78-1.72-18.11-3.49-1.01-.16-2.33-.31-4.96-.62-2.64-.31-3.04-.33-3.6-.25-2.07,.28-3.95,1.52-5.02,2.86-1.74,2.21-1.44,4.91-1.07,8.67,.47,4.75,.6,9.53,1.23,14.26,1.29,9.61,.75,8.49,1.72,15.13,1.33,9.05,3.04,16.01,3.71,18.61,1.7,6.64,6.63,25.31,17.46,40.7,2.43,3.45,4.7,6.2,7.19,8.56,2.76,2.62,8.86,7.27,12.15,9.19,2.16,1.26,6.75,3.36,9.18,3.98,3.83,.97,11.84,1.92,15.75,1.38,7.45-1.03,12.59-3.72,17.99-6.81,6.31-3.61,13.03-7.45,18.87-15.37,2.14-2.91,10.11-13.72,8.83-26.91Z"
                                    style="fill: #f0c419;"/>
                                <path
                                    d="M186.23,175c4.01,1.89,8.41,2.86,9.94,3.19,5.84,1.28,10.43,1.3,13.98,1.27,1.38-.01,8.19-.08,15.98-1.69,19.73-4.07,35.99-15.95,44.49-22.15,8.79-6.42,14.68-12.16,17.29-14.67,0,0,4.95-4.94,12.27-13.77,.65-.79,1.46-1.84,3.08-3.94,1.62-2.11,1.84-2.44,2.06-2.96,.82-1.92,.72-4.17,.11-5.78-1-2.63-3.48-3.75-6.9-5.35-4.32-2.03-8.49-4.37-12.88-6.25-8.91-3.82-7.68-3.7-13.88-6.27-8.45-3.49-15.31-5.59-17.88-6.34-6.58-1.94-25.13-7.27-43.9-5.84-4.2,.32-7.73,.86-11.04,1.79-3.67,1.03-10.78,3.89-14.11,5.73-2.19,1.21-6.35,4.08-8.11,5.85-2.8,2.79-7.71,9.18-9.25,12.82-2.93,6.93-3.25,12.72-3.36,18.94-.13,7.26-.27,15.01,3.54,24.07,1.4,3.33,6.61,15.71,18.59,21.36Z"
                                    style="fill: #f0c419;"/>
                                <path
                                    d="M104.33,159.63c-3.58,2.61-6.54,6-7.57,7.19-3.93,4.51-6.15,8.53-7.83,11.65-.65,1.22-3.86,7.22-6.19,14.83-5.9,19.26-3.3,39.23-1.94,49.66,1.41,10.8,3.62,18.72,4.57,22.21,0,0,1.95,6.71,6.18,17.37,.38,.95,.91,2.16,1.98,4.59,1.07,2.43,1.26,2.79,1.61,3.23,1.29,1.64,3.31,2.64,5.02,2.87,2.79,.38,4.96-1.25,8.01-3.48,3.85-2.81,7.91-5.35,11.67-8.3,7.63-5.99,6.94-4.96,12.16-9.17,7.13-5.74,12.25-10.75,14.15-12.64,4.86-4.84,18.45-18.56,26.21-35.69,1.74-3.84,2.96-7.19,3.73-10.54,.86-3.71,1.77-11.32,1.75-15.13-.01-2.5-.53-7.52-1.23-9.92-1.11-3.79-4.35-11.17-6.81-14.27-4.67-5.9-9.6-8.96-15-12.05-6.31-3.6-13.04-7.45-22.81-8.46-3.59-.37-16.95-1.75-27.67,6.05Z"
                                    style="fill: #f0c419;"/>
                                <path
                                    d="M118.53,109.52c-4.05-1.81-8.46-2.69-10-3-5.86-1.17-10.45-1.09-14-1-1.38,.04-8.18,.24-15.95,2-19.65,4.45-35.68,16.63-44.05,23-8.67,6.59-14.44,12.44-17,15,0,0-4.85,5.03-12,14-.64,.8-1.42,1.87-3,4-1.58,2.14-1.79,2.48-2,3-.78,1.94-.64,4.19,0,5.78,1.05,2.61,3.55,3.68,7,5.22,4.36,1.95,8.58,4.21,13,6,8.99,3.64,7.75,3.56,14,6,8.52,3.33,15.42,5.29,18,6,6.61,1.81,25.27,6.78,44,5,4.2-.4,7.71-1.01,11-2,3.65-1.1,10.7-4.09,14-6,2.16-1.25,6.27-4.2,8-6,2.74-2.85,7.53-9.33,9-13,2.8-6.98,3.01-12.78,3-19,0-7.27-.02-15.01-4-24-1.46-3.3-6.91-15.58-19-21Z"
                                    style="fill: #f3d55b;"/>
                                <path
                                    d="M190.81,133.57c3.63-2.55,6.65-5.89,7.7-7.05,4.01-4.44,6.29-8.42,8.03-11.51,.68-1.21,3.98-7.15,6.45-14.72,6.24-19.16,3.98-39.16,2.8-49.62-1.22-10.82-3.29-18.78-4.18-22.28,0,0-1.84-6.75-5.88-17.48-.36-.96-.87-2.18-1.9-4.63-1.03-2.45-1.21-2.81-1.55-3.25-1.26-1.66-3.27-2.7-4.96-2.96-2.78-.43-4.98,1.17-8.07,3.34-3.9,2.75-8.01,5.21-11.81,8.09-7.73,5.85-7.02,4.84-12.32,8.95-7.22,5.61-12.44,10.53-14.37,12.39-4.94,4.75-18.77,18.23-26.83,35.23-1.81,3.81-3.08,7.14-3.91,10.47-.92,3.69-1.96,11.29-2.02,15.1-.03,2.5,.4,7.53,1.06,9.94,1.04,3.81,4.16,11.25,6.56,14.39,4.57,5.98,9.44,9.13,14.78,12.31,6.24,3.71,12.9,7.68,22.66,8.85,3.59,.43,16.92,2.04,27.77-5.57Z"
                                    style="fill: #f3d55b;"/>
                                <path
                                    d="M133.9,186.18c.49,4.41,1.97,8.66,2.49,10.14,1.97,5.65,4.36,9.56,6.24,12.57,.73,1.17,4.36,6.93,9.81,12.72,13.81,14.67,32.44,22.3,42.17,26.29,10.07,4.13,18.05,6.13,21.55,7.04,0,0,6.8,1.63,18.15,3.24,1.01,.14,2.33,.28,4.97,.56,2.64,.27,3.04,.28,3.6,.2,2.06-.31,3.93-1.57,4.98-2.93,1.71-2.23,1.37-4.93,.95-8.68-.54-4.74-.73-9.53-1.43-14.25-1.42-9.59-.87-8.48-1.93-15.11-1.45-9.03-3.26-15.97-3.96-18.55-1.79-6.62-6.98-25.22-18.02-40.45-2.47-3.41-4.78-6.13-7.31-8.46-2.8-2.58-8.96-7.15-12.27-9.02-2.18-1.23-6.8-3.27-9.23-3.85-3.84-.92-11.86-1.75-15.77-1.16-7.44,1.13-12.54,3.9-17.89,7.06-6.26,3.69-12.93,7.63-18.65,15.63-2.1,2.94-9.92,13.86-8.45,27.03Z"
                                    style="fill: #f3d55b;"/>
                                <path
                                    d="M97.24,135.74c3-5,15.02-7,17.98-12.02,1.97-3.34,1.12-13.75,2.82-17.23,.59-1.21,2.52-3.34,3.76-3.85s4.05-.13,5.38,.07c4.08,.61,11.89,3.74,16.31,2.44,3.43-1.01,9.18-7.32,12.37-8.94,.8-.41,2.65-.86,3.54-.7,1.5,.28,4.51,1.18,5.54,2.3,2.65,2.86,5.21,11.22,6.87,14.76,0,0,1.15,1.56,1.46,1.69,.92,.38,3.5,.77,5,.99,2.35,.35,7.15,.13,9.46,.68,1.7,.4,4.97,2.25,6.08,3.61,.57,.7,1.06,1.71,1.08,2.61,.02,1.03-.38,3.07-.61,4.08-.68,2.93-3.11,8.51-3.68,11.47-.15,.78-.41,2.38-.23,3.15,.29,1.22,1.81,3.29,2.54,4.3,1.31,1.81,4.55,4.95,5.86,6.76,.73,1.01,2.17,3.11,2.54,4.3,.33,1.07-.18,3.05-.61,4.08s-1.53,2.69-2.46,3.31c-1.91,1.28-6.19,3.09-8.23,4.17-1.42,.75-4.54,1.89-5.61,3.08-1,1.12-2.03,4.07-2.3,5.54-.28,1.56-.24,4.74-.45,6.31-.17,1.26-.62,3.78-.99,5-.36,1.2-1.03,3.73-1.92,4.62-.5,.5-1.94,.88-2.61,1.08-.86,.26-2.64,.79-3.54,.7-3.17-.32-8.62-4.33-11.75-4.88-1.16-.2-3.59-.16-4.71,.21-1.71,.56-4.56,2.92-5.99,4.01-1.56,1.19-4.32,4.01-5.94,5.11-.8,.55-2.48,1.62-3.43,1.82-.77,.16-2.38-.04-3.15-.23-.73-.17-2.23-.63-2.77-1.15-2.44-2.32-4.05-9.26-5.79-12.15-.75-1.25-2.23-3.92-3.47-4.69-1.96-1.21-6.8-1.27-9.08-1.6-1.8-.26-5.47-.38-7.23-.84-.97-.25-2.94-.88-3.69-1.53-.94-.82-2.46-3.06-2.54-4.3-.07-1,.32-3.12,.61-4.08,.37-1.22,1.61-3.38,1.92-4.62,.54-2.2,2.49-6.43,2.53-8.7,.02-1.25-.63-3.75-1.24-4.84-.93-1.66-4.07-4.02-5.32-5.45-1.32-1.52-4.3-4.46-4.93-6.38-.32-.98,.08-3.19,.61-4.08Z"
                                    style="fill: #f29c1f;"/>
                                <circle cx="149.03" cy="148.02" r="13.5" style="fill: #e57e25;"/>
                            </g>
                            <text transform="translate(312.9 246.74)"
                                  style="fill: #f0c419; font-family:grafolita-script; font-size: 275px;">
                                <tspan x="0" y="0" style="letter-spacing: 0em;">Narci</tspan>
                                <tspan x="570.07" y="0" style="letter-spacing: -.05em;">s</tspan>
                            </text>
                        </g>
                    </g>
                </svg>

            </div>
        </div>
        <div class="lg:flex hidden font-['grafolita-script'] pr-[40px] items-center ">
            <h5 class="text-[#343434] pr-[30px] text-[40px]">Domov</h5>
            <h5 class="text-[#343434] px-[30px] text-[40px]">Ponuka</h5>
            <h5 class="text-[#343434] px-[30px] text-[40px]">O Nás</h5>
            <h5 class="text-[#343434] pl-[30px] text-[40px]">Kontakt</h5>
        </div>
        <div class="pr-[50px] hidden xl:flex">
            <img alt="icons" class="w-[40px] mx-[25px]" src="{{asset("img/phone_icon.svg")}}">
            <img alt="icons" class="w-[40px] mx-[25px]" src="{{asset("img/facebook_icon.svg")}}">
        </div>
        <div class="pr-[20px] sm:pr-[50px]  lg:hidden ">
            <div class="space-y-2 hamburger">
                <div class="w-8 h-0.5 bg-gray-600"></div>
                <div class="w-8 h-0.5 bg-gray-600"></div>
                <div class="w-8 h-0.5 bg-gray-600"></div>
            </div>
        </div>
    </div>
    <div class="hidden toggle-nav-content  font-['grafolita-script'] text-center pt-[40px] pr-[40px] items-center ">
        <h5 class="text-[#343434] px-[30px] text-[40px]">Domov</h5>
        <h5 class="text-[#343434] px-[30px] text-[40px]">Ponuka</h5>
        <h5 class="text-[#343434] px-[30px] text-[40px]">O Nás</h5>
        <h5 class="text-[#343434] px-[30px] text-[40px]">Kontakt</h5>
    </div>
</nav>

<main class="bg-[#F8F8F8] flex items-center flex-col">

    <section
        class="w-full min-h-[640px] flex items-center bg-[url('http://localhost:8000/img/background_narcis.jpg')] text-white bg-cover bg-center">
        <div class="px-[25px] md:px-[50px] xl:px-[135px]  font-['grafolita-script']
        ">
            <h1 class="text-[70px] drop-shadow-[0px_3px_6px_#00000029 max-w-[400px] sm:max-w-full">
                Kvetinárstvo Narcis
            </h1>
            <p class="text-[50px] drop-shadow-[0px_3px_6px_#00000029] pt-[30px] pb-[30px] max-w-[400px] md:max-w-[500px] lg:max-w-[500px] xl:max-w-[620px]">
                Dostupné na Radničnom námestí v Bardejove.
            </p>
        </div>
    </section>
    <div class="max-w-[1380px] w-full">
        <section class="pt-[55px] font-['grafolita-script'] w-full">
            <div class="flex justify-center w-full">
                <div class=" relative">
                    <h1 class="text-[75px] text-center px-[37px]"><span class="text-[#F0C419]">Čo</span> Ponúkame</h1>
                    <div class="w-full h-[3px] bg-[#F0C419] absolute bottom-[8px]"></div>
                </div>
            </div>
            <div class="w-full flex justify-center pt-[90px]">
                <div class="w-3/4 grid sm:grid-cols-2 xl:gap-x-[140px] xl:gap-y-[130px] md:gap-x-[70px] md:gap-y-[65px]
                sm:gap-x-[50px] sm:gap-y-[50px] gap-x-[25px] gap-y-[25px]">
                    <div class="bg-white aspect-[3/3.8] rounded-[30px] shadow-[0px_1px_5px_#00000029]"></div>
                    <div class="bg-white aspect-[3/3.8] rounded-[30px] shadow-[0px_1px_5px_#00000029]"></div>
                    <div class="bg-white aspect-[3/3.8] rounded-[30px] shadow-[0px_1px_5px_#00000029]"></div>
                    <div class="bg-white aspect-[3/3.8] rounded-[30px] shadow-[0px_1px_5px_#00000029]"></div>
                </div>
            </div>
        </section>
        <section class="pt-[270px] pb-[410px] relative">
            <img alt="1. včela"
                 class="absolute w-[165px] md:top-[285px] top-[250px] md:left-[115px] sm:left-[60px] left-[20px] rotate-[3.5deg]"
                 src="{{asset('img/Bee3.svg')}}">

            <div class="flex justify-center">
                <div class="relative">
                    <h1 class="text-[75px] font-['grafolita-script'] px-[25px]"><span class="text-[#F0C419]">O</span>
                        Nás
                    </h1>
                    <div class="w-full h-[3px] bg-[#F0C419] absolute bottom-[14px]"></div>
                </div>
            </div>
            <div class="justify-center flex pt-[70px] relative">
                <p class="w-11/12 px-[10px] text-center font-['ff-scala-sans-pro'] text-[28px] md:text-[40px] leading-[56px] ">
                    Sme kvetinárstvo s dlhoročným pôsobením a skúsenosťami na trhu. Zameriavame sa na viazanie
                    gratulačných, svadobných aj smútočných kytíc a vencov. Aranžujeme živé aj umelé dekorácie do bytov
                    aj na hroby. U nás si môžete objednať aj výzdoby kostolov a svadobných sál. Rozvoz donáškových kytíc
                    v rámci Bardejova
                    <span class="text-[#F0C419]">zdarma</span>. V ponuke máme aj kvalitné interiérové a exteriérové
                    doplnky dovážané z Holandska. Objednávky prijímame aj
                    <a class="text-[#F0C419]" href="">telefonicky</a>,
                    prostredníctvom <a class="text-[#F0C419]" href="">facebooku</a> alebo
                    <a class="text-[#F0C419]" href="">mailom</a>. Tešíme sa na vašu návštevu, určite si vyberiete z
                    našej bohatej ponuky.
                </p>
                <img alt="2. včela"
                     class="absolute w-[216px] sm:bottom-[-190px] bottom-[-210px] md:left-[175px] sm:left-[100px] left-[30px]"
                     src="{{asset('img/Bee2.svg')}}">

                <img alt="3. včela"
                     class="absolute w-[100px] sm:bottom-[-150px] bottom-[-130px] md:right-[210px] sm:right-[150px] right-[40px] rotate-[3.5deg]"
                     src="{{asset('img/Bee1.svg')}}">
            </div>

        </section>
        <section class="">
            <div class=" flex justify-center">
                <div class="relative">
                    <h1 class="text-[75px] font-['grafolita-script'] px-[35px]">
                        <span class="text-[#F0C419] text-center lg:text-left">Kontaktujte</span> Nás
                    </h1>
                    <div class="w-full h-[3px] bg-[#F0C419] absolute bottom-[14px]"></div>
                </div>
            </div>

            <div class="lg:pt-[140px] pt-[70px]   lg:flex ">
                <div class="lg:w-1/2 px-[40px] md:px-[80px]">
                    <div class="flex justify-center lg:justify-start">
                        <div class="relative">
                            <h1 class="text-[50px] font-['grafolita-script'] pl-[55px] lg:pl-[0px] pr-[55px] text-center lg:text-left">
                                Kvetinárstvo Narcis</h1>
                            <div class="w-full h-[3px] bg-[#F0C419] absolute bottom-[2px]"></div>
                        </div>
                    </div>
                    <div class="pt-[10px] text-[36px] font-['grafolita-script'] text-center lg:text-left">
                        <p>Radničné Námestie 17<br>085 01 Bardejov</p>
                    </div>

                    <div class="pt-[25px] font-['grafolita-script'] text-[36px] justify-center lg:justify-start flex">
                        <div class="">
                            <div class="flex justify-center lg:justify-start">
                                <div class="w-[61px] pb-[10px] flex items-center">
                                    <img alt="icon" class="h-[36px] scale-x-[-1]" src="{{asset('img/phone_icon.svg')}}">
                                </div>
                                <div>
                                    <p class="">0915 918 450</p>
                                </div>
                            </div>
                            <div class="flex justify-center lg:justify-start  pt-[20px]">
                                <div class="w-[61px] pb-[10px]  flex items-center">
                                    <img alt="icon" class="h-[36px]  scale-x-[-1]"
                                         src="{{asset('img/phone_icon.svg')}}">
                                </div>
                                <div>
                                    <p class="">054/472 52 49</p>
                                </div>
                            </div>
                            <div class="flex justify-center lg:justify-start  pt-[18px]">
                                <div class="w-[61px] pb-[10px]  flex items-center">
                                    <img alt="icon" class="h-[36px]  scale-x-[-1]"
                                         src="{{asset('img/phone_icon.svg')}}">
                                </div>
                                <div>
                                    <p class="">narcisbj@gmail.com</p>
                                </div>
                            </div>
                            <div class="flex justify-center  pt-[12px]">
                                <div class="w-[61px] pb-[10px]  flex items-center">
                                    <img alt="icon" class="h-[36px]  " src="{{asset('img/facebook_icon.svg')}}">
                                </div>
                                <div>
                                    <p class="">Kvetinárstvo Narcis Bardejov</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="lg:w-1/2  px-[30px] sm:px-[40px] md:px-[80px] lg:pt-[20px] pt-[50px] flex justify-center lg:justify-start ">
                    <div class="mapouter  max-w-[610px] rounded-[20px] shadow-[0px_1px_15px_#00000029;]">
                        <div class="gmap_canvas">
                            <iframe class="w-full" height="380" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=Radni%C4%8Dn%C3%A9%20N%C3%A1mestie%2017%20085%2001%20Bardejov&t=&z=17&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <a href="https://putlocker-is.org">putlocker</a><br>
                            <style>.mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 380px;
                                    width: 100%;
                                }</style>
                            <a href="https://www.embedgooglemap.net">google map for web</a>
                            <style>.gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 380px;
                                    width: 100%;
                                }</style>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" px-[25px] lg:px-[100px] flex flex-wrap">
                <div class="w-full lg:w-1/2 pt-[120px] flex flex-col items-center lg:items-start">
                    <div class="flex justify-center lg:justify-start">
                        <div class="relative">
                            <h1 class="text-[50px] font-['grafolita-script'] px-[40px] lg:pl-0 lg:pr-[75px] text-center lg:text-left">
                                Otváracie Hodiny</h1>
                            <div class="w-full h-[3px] bg-[#F0C419] absolute bottom-[-5px]"></div>
                        </div>
                    </div>
                    <div class="font-['grafolita-script']  text-[36px] md:w-[375px]">
                        <div class="flex justify-between pt-[25px]">
                            <p class="pr-[10px]">Pondelok</p>
                            <p class="text-[#F0C419] w-[170px]">8:00 - 16:30</p>
                        </div>
                        <div class="flex justify-between pt-[19px]">
                            <p class="pr-[10px]">Utorok</p>
                            <p class="text-[#F0C419] w-[170px]">8:00 - 16:30</p>
                        </div>
                        <div class="flex justify-between pt-[19px]">
                            <p class="pr-[10px]">Streda</p>
                            <p class="text-[#F0C419] w-[170px]">8:00 - 16:30</p>
                        </div>
                        <div class="flex justify-between pt-[19px]">
                            <p class="pr-[10px]">Štvrtok</p>
                            <p class="text-[#F0C419] w-[170px]">8:00 - 16:30</p>
                        </div>
                        <div class="flex justify-between pt-[19px]">
                            <p class="pr-[10px]">Piatok</p>
                            <p class="text-[#F0C419] w-[170px]">8:00 - 16:30</p>
                        </div>
                        <div class="flex justify-between pt-[19px]">
                            <p class="pr-[10px]">Sobota</p>
                            <p class="text-[#F0C419] w-[170px]">9:00 - 12:00</p>
                        </div>
                        <div class="flex justify-between pt-[19px]">
                            <p class="pr-[10px]">Nedeľa</p>
                            <p class="text-[#F0C419] w-[170px]">Zatvorené</p>
                        </div>

                    </div>
                </div>


                <div class="w-full lg:w-1/2 pt-[50px] lg:pt-[40px] px-[35px] ">
                    <div class="flex justify-center lg:justify-start">
                        <div class="relative">
                            <h1 class="text-[50px] font-['grafolita-script'] px-[20px] lg:pl-[10px] lg:pr-[20px] text-center lg:text-left>">
                                Kontaktný
                                Formulár</h1>
                            <div class="w-full h-[3px] bg-[#F0C419] absolute bottom-[-5px]"></div>
                        </div>
                    </div>
                    <form
                        class="text-[33px] px-[3px] font-['grafolita-script']  pt-[6px] flex  justify-center lg:justify-start lg:pr-[30px] lg:w-full"
                        method="post" action="/message">
                        <div class="md:w-10/12 lg:w-full">
                            {{ csrf_field() }}
                            <div class="pt-[15px]">
                                <p class="px-[2px]">Váš e-mail</p>
                                <input type="email" name="mail"
                                       class="w-full h-[48px] mt-[10px] rounded-[10px] border-[2px] border-[#F0C419] ">
                            </div>
                            <div class="pt-[15px]">
                                <p class="px-[2px]">Predmet správy</p>
                                <input type="text" name="subject"
                                       class="w-full h-[48px] mt-[10px] rounded-[10px] border-[2px] border-[#F0C419] ">
                            </div>
                            <div class="pt-[15px]">
                                <p class="px-[2px]">Správy</p>
                                <textarea name="message"
                                          class="w-full h-[244px] mt-[8px] rounded-[10px] border-[2px] border-[#F0C419]"></textarea>
                            </div>
                            <div class="w-full justify-center">
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                            </div>
                            <div class="pt-[25px] flex justify-center items-center lg:justify-start">
                                <input type="submit" placeholder="Odoslať"
                                       class=" bg-[#F0C419] px-[30px] py-[0px]  rounded-[10px] text-white ">

                            </div>
                        </div>

                    </form>
                </div>

            </div>

        </section>
        <footer class="pt-5"></footer>
    </div>
</main>
</body>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script>
    $(".hamburger").click(function () {
        $('.toggle-nav-content').toggle(400)
    });

</script>
</html>
