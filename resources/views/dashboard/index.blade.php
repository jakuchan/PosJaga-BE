@extends('layout/index')
@section('title', 'Dashboard')
    
@section('content')

<style>
    .cont-cont {
        overflow-x: hidden;
    }
    #mainContent {
        max-width: 100%;
        overflow: hidden;
    }
    .preloader-wrapper {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #edf2f7;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all .4s case;
    }

    .fade-out-animation {
      opacity: 0;
      visibility: hidden;
    }

  #login-success-popup {
    display: none;
  }
</style>

<div class="cont-cont w-screen bg-gray-100">
  <div>
    <div class="flex flex-col md:flex-row">
      <aside id="sidebar"
        class="fixed w-60 bg-[#C2151A] md:min-h-screen border-r border-gray-100 transform transition-transform ease-in-out duration-300">
        <div class="flex items-center justify-center p-4 text-white">
          <!-- logo -->
          <a class="flex items-center mx-8 transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" viewBox="0 0 496 512">
              <path fill="#FFBFC1"
                d="M248 8C111 8 0 119 0 256s111 248 248 248s248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88s-88-39.4-88-88s39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2c18.8-35.4 55.6-59.8 98.5-59.8c2.4 0 4.8.4 7.1 1.1c13 4.2 26.6 6.9 40.9 6.9c14.3 0 28-2.7 40.9-6.9c2.3-.7 4.7-1.1 7.1-1.1c42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z" />
            </svg>
          </a>
        </div>

        <div class="ml-8 text-center bg-white rounded-lg mr-1">
          <a href="" class="flex items-center px-2 text-[#C2151A] font-semibold text-md py-3 transition duration-200 ml-8">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 30" fill="none">
              <path
                d="M0 0H13.125V10.2083H0V0ZM2.91667 2.91667V7.29167H10.2083V2.91667H2.91667ZM16.0417 0H29.1667V16.0417H16.0417V0ZM18.9583 2.91667V13.125H26.25V2.91667H18.9583ZM0 13.125H13.125V29.1667H0V13.125ZM2.91667 16.0417V26.25H10.2083V16.0417H2.91667ZM16.0417 18.9583H29.1667V29.1667H16.0417V18.9583ZM18.9583 21.875V26.25H26.25V21.875H18.9583Z"
                fill="#C2151A" />
            </svg>
            <span class="px-2 font-montserrat ">DASHBOARD</span>
          </a>
        </div>
        <!-- nav -->
        <nav class="ml-2 mt-20 text-center">
          <div class="flex flex-col h-[75vh] justify-between">
            <div>
              <a href="" class="flex items-center px-2 text-white font-semibold text-md py-3 mt-7 transition duration-200">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                  <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9.5 1.5H11a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-10a1 1 0 0 1 1-1h1.5" />
                    <rect width="5" height="2.5" x="4.5" y=".5" rx="1" />
                    <path d="M4.5 5.5h5M4.5 8h5m-5 2.5h5" />
                  </g>
                </svg>
                <span class="px-2 font-montserrat">DATA TERLAMBAT</span>
              </a>

              <a href="" class="flex items-center px-2 m-1 text-white font-semibold text-md py-3 mt-7 transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 2048 2048">
                  <path fill="currentColor"
                    d="M1536 1408h192v128h-320v-384h128v256zm-256-896H256V384h1024v128zm192 384q119 0 224 45t183 124t123 183t46 224q0 119-45 224t-124 183t-183 123t-224 46q-119 0-224-45t-183-124t-123-183t-46-224q0-119 45-224t124-183t183-123t224-46zm0 1024q93 0 174-35t142-96t96-142t36-175q0-93-35-174t-96-142t-142-96t-175-36q-93 0-174 35t-142 96t-96 142t-36 175q0 93 35 174t96 142t142 96t175 36zM1166 768q-109 48-200 128H256V768h910zm-391 384q-14 31-25 63t-21 65H256v-128h519zm-519 384h451q3 32 8 64t14 64H256v-128zm594 384q50 71 116 128H0V0h1536v707l-32-2q-16-1-32-1t-32 1t-32 2V128H128v1792h722z" />
                </svg>
                <span class="px-2 font-montserrat">DATA KELUAR</span>
              </a>

              <a href="" class="flex items-center px-2 text-white font-semibold text-md py-3 mt-7 transition duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                  <g fill="none">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="1.5" d="M12 7v6" />
                    <circle cx="12" cy="16" r="1" fill="currentColor" />
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="1.5"
                      d="M22 12c0 4.714 0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12s0-7.071 1.464-8.536C4.93 2 7.286 2 12 2c4.714 0 7.071 0 8.535 1.464c.974.974 1.3 2.343 1.41 4.536" />
                  </g>
                </svg>
                <span class="px-2 font-montserrat">DATA PELANGGAR</span>
              </a>
            </div>

            <div class="flex justify-center pr-6">
              <a class="cursor-pointer flex items-center px-2 text-white font-semibold text-md py-3 mt-7 transition duration-200" id="logout-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 35 35" fill="none">
                  <path
                    d="M7.29167 30.625C6.48959 30.625 5.80271 30.3392 5.23104 29.7675C4.65938 29.1958 4.37403 28.5094 4.375 27.7083V7.29167C4.375 6.48959 4.66084 5.80271 5.2325 5.23104C5.80417 4.65938 6.49056 4.37403 7.29167 4.375H17.5V7.29167H7.29167V27.7083H17.5V30.625H7.29167ZM23.3333 24.7917L21.3281 22.6771L25.0469 18.9583H13.125V16.0417H25.0469L21.3281 12.3229L23.3333 10.2083L30.625 17.5L23.3333 24.7917Z"
                    fill="white" />
                </svg>
                <span class="px-2 font-montserrat">LOG OUT</span>
              </a>
            </div>
          </div>
        </nav>
      </aside>

      <div id="mainContent" class="w-full md:flex-1 ml-60 transition-all duration-300">
        <nav class="h-20 pl-4 pr-10 py-3 w-full flex justify-between bg-white text-white shadow-md">
          <div class="flex items-center">
            <button id="toggleSidebar" class="text-gray-800 mr-3 w-10 h-10">
              <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5">
                </path>
              </svg>
            </button>
            <a rel="noopener noreferrer" href="../" class="flex justify-start">
              <div class="flex items-center justify-center">
                <img class="h-10"
                  src="{{ url('/image/ts-logo.webp') }}" alt="Telkom Schools" style="color: black;"/>
              </div>
            </a>
          </div>
        </nav>
        <main>
          <div>
            <!-- content -->
            <div class="py-8 px-16">
              <!-- data atas -->
              <div class="flex justify-between">
                <!-- data siswa terlambat -->
                <div class="bg-white w-1/3 p-4 mx-4 rounded-lg shadow-lg" style="border-left: 7px solid #A0080D;">
                  <div style="display: flex; align-items: center;">
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"
                        fill="none">
                        <circle cx="50" cy="50" r="50" fill="#FBE0E1" />
                        <g transform="translate(24, 25)">
                          <svg width="50" height="50" viewBox="0 0 100 100" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="100" height="100" fill="url(#pattern0)" />
                            <defs>
                              <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_201_191" transform="scale(0.01)" />
                              </pattern>
                              <image id="image0_201_191" width="100" height="100"
                                xlink:href="data:image/png;base64,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" />
                            </defs>
                          </svg>
                        </g>
                      </svg>
                    </div>
                    <div class="ml-4 mb-2">
                      <text x="10" y="25" font-size="20" text-anchor="middle" fill="black"
                        class="font-bold text-3xl font-montserrat">100</text><br>
                      <div class="max-w-[200px]">
                        <text x="10" y="50" font-size="20" text-anchor="middle" fill="black" class="uppercase font-semibold text-gray-500 font-montserrat">siswa
                          terlambat bulan ini</text>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- data atas siswa izin keluar -->
                <div class="bg-white w-1/3 p-4 mx-4 rounded-lg shadow-lg" style="border-left: 7px solid #A0080D;">
                  <div style="display: flex; align-items: center;">
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"
                        fill="none">
                        <circle cx="50" cy="50" r="50" fill="#FBE0E1" />
                        <g transform="translate(24, 25)">
                          <svg width="50" height="50" viewBox="0 0 60 60" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="60" height="60" fill="url(#pattern1)" />
                            <defs>
                              <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_186_511" transform="scale(0.0111111)" />
                              </pattern>
                              <image id="image0_186_511" width="90" height="90"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAHeklEQVR4nO2cW4gcRRSGy8tOVU+f05MLXqIPEoOKSuI1EQ1qEhAT8RLwwRf1TUSMigiuqBgj+qISDYjJms1UzcaArMQYowSJGF8kPmncRJ8UhCDC5uIlYDYmZuT0zCZrT1+mu6t6Zmfqh4Khd/pU19dnTp06Xb2MZdQ6xrji7lLF8RXFcZsU+KPkcEQJ/EcKPN78/AP9TXFcI7m7hM7J2l/fSZUrNyiB7ykBfyiB9VSNw+9K4FC1XLm+0+PoWhEcKeDz1HAjG+yU5fK1nR5X12iUMUcJWCcFntQHGf0mBZ5QHN6SjAnWzxou4RVK4JhuwKq17a2W8DLWj6o63kLFcbwAyPVm/D5cFXgL6yeNOHiTFHC0MMhiMpTAUeV4i1i/hAvJ4VDRkNUkbI4Hez6M0KSkOH7XKcjqTBujSZj1qii7yApnN2PnBu2NMnZOds+Gtax38+TsKdwQm1MO2qRj2eM1nuzJPDvvYmRLpTIzaJOO5Qsh8BnrwWV1vkmsXL4waJeO5bIp8FStXL6O9YoatYt8oIfFjEuCdulYXrtK4HrWC/KrcFkKRIFWK+HlQdt0LPcvhcORUcZKbLqryt1lGryuXh1w57fYHnDn67CtBNzGprv8erIGGDXHuzFom47psC05vsymu6SA7VpgCFgcYnuxJtAfsekuejKiJXRwd5mpsCQF7g+7dlqq6wlNeR0BvtnoebNiQVPVTEuHJVzRYruEKzR59MGwax9x3fM7DVkJ3D3MZmM7Hn1cCwwHVrbYdmClpsFMRGdMnYQMn7T90EIX6JpwHwjapmMmQY/6T386A1lyUGH1nUnVGTvLTOgQ+HCwMzqmxTbH8bDBDDvORR0C/c5qxs6Ogtwspg0bmQwlh0eCHdIxk5OhGnCvLh4yrGYxonBGWRJ9Nwj6Yz1e561qAcG9VSbTu5qA24sCTHUXWcIn4yCPsvNACfxi8pwADFyj6UKeCXZMx0x6keTeEwVBPhEWGqeK0jtK86aeFwDtLtUE4/lg53RMh+2qgFvDQYMqAPSEdOD+OMjNKuXe4LkhW7v8HUT1rmwcDkcVlUxvhaCHxWELsanaxCuXKgE/h51vpExqsK0PG+DmcnmOEvivMcgcjtQE3hwHuVaCKyXHA1E2Qh9jdQHQeqtH4amox1mqhE8Z65vjr5TRxEGmbRFJqXH4iQJ25oRyXAp4lnLbRn4Lg3kXQ1LAjsiBcvjazM2Fn0Z4ZW4cZAon7ex7CT2ZPKc5u2a8SBgMuXmDOW7cibAaN2lTCa4ibzcAeoxCUhzkZllhoh17kUZow2HWiyQv1rlykxzeiBwsh83aIXPYk1SBoxQvjTNG3y3GhOTwrS7QynEuzujN30dtoKFZPt8vL1sFTnL38bSTb5w9v8ZLZUkdoUMKeC69Z+G44t686AHjBzoh06oz6U0EWjBlsR0L2jfseIvSbnJsTHwwmGcylJS3Ot7CyOsq4b16PRkkFYDiKnBSwNtZ7bNu3bZbi8lbh9jMSlzOaqoCl6ePtkBPeVTUsrTU3STNCzHhgoBoK341fjkvxY27sVrGbXn7YWnUnCDXGpiA6s1XK95MekqhOLyuqb9TVIhKU4ErDPSkNg2Ur6G9cDryV0kDFrAjKk8OQH5U102VAh9KW4ErHPSkaC+cFLih+R5hus65v2Rd3+4uUeXg05oWJsdqJbgvri9aqEiB+3RBjgVNG1VannVFiCpqtIOIzqEUiZ6C0JsCjaW4/0Infd6nOG6l71Cps92tXf5sz/E1PQOGv6gUnLUCZwR0w+twq2SVGaxDGvG3EMCnWsIFh0Nx6eLpx2FURNIMORl0I4k/UOXeHaxgSe4uURx/66YKnFHQPmyKjRxH6WfFCtIIr8yl6lkRFbgpG3wmOgp6CnBa3Q0neYcubW4U9MdMVuCKgh3daWIOil8pDo9RHGUGtdHzZlE1LX24gD1hr3h0CnZ0h6nyYNwvBb5Lea6/mZF782iQQ4wNUHbR1n60hIWDFLgrxTXtonNYRpmAHd2Zvk4mwjY9TlW1hHdJAS+w5KXw1mRPxq1tVOBelNxbXiTsmIspDrJqDoiW93G5e7O4MxTjyRtSVOCOFQnbJOhUkNVpWFCNg9U87x7/FT2/Xo3j9LlWwrvjzqFNiCF7PwqDbQQ0ZScEI24AknvLaaDh58N2nf+3g+YJyfHDrNda496dUdfaMdB5Iaszdr7MO4mSRtgFbtILqkXAjjRcZLhQmlO0jBW4Y0nXnieMaAOty5NVK+xfkmoU0ZXFdCtLk56tC7ReTxYtAP6mV/MSX8IhEIizFcdXc/zMjXi2DtBGIav/AYc/FYf3lcAH1YC7gHZu+rs3B9wF/hsFHLb4pdCc/ZiAnQu0sXAhOt90h5HMoHsZsjIAOxPofoCsNMNODbqoBF91UdMx5lSg+xGy0jT2tkH3M2SlgUFboC1kzM0iEbSFjFo8Oxa0hYzawkjklyxk1Bqzoz3aYCVL9VZra7ke9/fEu9QFg6xPF8+2kEUXwraejOZhW8jYuTBiZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWXF+l3/AXlFLHgAiqa3AAAAAElFTkSuQmCC" />
                            </defs>
                          </svg>
                        </g>
                      </svg>
                    </div>
                    <div class="ml-4 mb-2">
                      <text x="10" y="25" font-size="20" text-anchor="middle" fill="black"
                        class="font-bold text-3xl font-montserrat">100</text><br>
                      <div class="max-w-[200px]">
                        <text x="10" y="50" font-size="20" text-anchor="middle" fill="black" class="uppercase font-semibold text-gray-500 font-montserrat">siswa
                          izin keluar bulan lalu</text>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- data atas siswa melanggar aturan -->
                <div class="bg-white w-1/3 p-4 mx-4 rounded-lg shadow-lg" style="border-left: 7px solid #A0080D;">
                  <div style="display: flex; align-items: center;">
                    <div>
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"
                        fill="none">
                        <circle cx="50" cy="50" r="50" fill="#FBE0E1" />
                        <g transform="translate(24, 25)">
                          <svg width="50" height="50" viewBox="0 0 60 60" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="60" height="60" fill="url(#pattern2)" />
                            <defs>
                              <pattern id="pattern2" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_186_503" transform="scale(0.0111111)" />
                              </pattern>
                              <image id="image0_186_503" width="90" height="90"
                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAADjElEQVR4nO2cO2sUURSAj0L2nM2ek2ARfPUKaiuCWgo+Cu2sFS18dPoDUiqBKIIQhST37qog2/pACzuxs9UIghGMUbTwhQkxJDImFsK+c+fOnPF8cLpk9ptvLzM3RS6AYRiGYRiGYRhGkfDl8tYq8jlH/NCTvHTEPzzJcs5mwaF8dMjPPPKII943DLAeNHCrv3+zI7nhSH7lIORy14My60guXgNAyCuTJTniiL9mHotCBOfpaomPQd5wyGccyWLmgSjcOJIlTzy8DLAO8rOSixXZ/7u6a5nHXnkmF+RxQa2GhzMNnbz4so8gHY0j+emQRyfLA7trsLGSTLUk2xzyKUf8qM3vLvmSHM1sC6dmd4E8PVHiHa3uJ9neJVvRFqv6TSa7EYeV81pW8kSbyH+5CRsGPcmTZteqklyA2Kz+MZL/0Mij3dzXauzGKxtlNvofNY74VdYRfQeTPJO7vbcq8f6m1yPZCzHxxN+yjug7mDoMcS/354gfN17VPAIxyTqg73B6vj/k041Dy9OwJduJFDz0eEm2Nwn9AWJS9NB1GOIm15yHmHiUmawj+jbjUN6t6R4Df3k94VAuZx3StxuUS+pD1wFKf2LncWWjzCRuiaP60IUS1e6vRlS7vxpR7f5qRLX7qxHV7q9GVLu/GlHt/mpEtfurEdXu362oD/Tz3U4on8yw0JGw0JGw0JGw0JGw0JFQ89bW7q9GVLu/GlHt/mpEtfurEdXur0ZUu79t7yJhoSNhoSNhoSNhoSNhoSOhZnuk3V+NqHZ/NaLa/dWIavdXI6rdX42odn/b3kXCQkfCQkeiqKF9Dv6RKZVwkHKItK/faJLYIRoHDQcph0j7+s1WdojGPYXLG6mGDtnBQouFLtiKbnx4Sq+HlcQmzTNVk2Psgol64qlQx+9kgSN+nd6K5qlgop74QcNvE/kKKMAj305xRd8LJpocbdzkg+Z8X2Un5BxPleOprWjks1EOIXTIb2t9lV2QY+orR2W8TyH0wni5vCWorCcZa/GBcx75aq0se/L6gkxWXgqhrwcXdf39mzzxl/ReKqJqHPLnpAmkQRUHDhb66GPqMDLJosOBQ5AmRTzM23c3Cx7lJMTAl+Tw//gYcSifqlg5ADFZeWbLmJojkWlNM5+87O8MDm6ArEi2NytvdL7vSF444u/qV25yOjzyc4dy16GcSE7uzSywYRiGYRiGYRgGBOI38Ie/bpmk9DoAAAAASUVORK5CYII=" />
                            </defs>
                          </svg>
                        </g>
                      </svg>
                    </div>
                    <div class="ml-4 mb-2">
                      <text x="10" y="25" font-size="20" text-anchor="middle" fill="black"
                        class="font-bold text-3xl font-montserrat">100</text><br>
                      <div class="max-w-[200px]">
                        <text x="10" y="50" font-size="20" text-anchor="middle" fill="black" class="uppercase font-semibold text-gray-500 font-montserrat">siswa
                          melanggar aturan bulan lalu</text>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- grafik -->
              <!-- grafik siswa terlambat -->
              <div class="bg-white p-4 mx-4 rounded-lg mt-14 ">
                <div class="flex justify-between">
                  <div>
                    <div class="bg-white w-max  p-4 mt-24 ml-2 rounded-lg" style="border-left: 7px solid #A0080D; ">
                      <div style="display: flex; align-items: center;">
                        <div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"
                            fill="none">
                            <circle cx="50" cy="50" r="50" fill="#FBE0E1" />
                            <g transform="translate(24, 25)">
                              <svg width="50" height="50" viewBox="0 0 100 100" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="100" height="100" fill="url(#pattern0)" />
                                <defs>
                                  <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_201_191" transform="scale(0.01)" />
                                  </pattern>
                                  <image id="image0_201_191" width="100" height="100"
                                    xlink:href="data:image/png;base64,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" />
                                </defs>
                              </svg>
                            </g>
                          </svg>
                        </div>
                        <div class="ml-4 mb-2">
                          <text x="10" y="25" font-size="20" text-anchor="middle" fill="black"
                            class="font-bold text-3xl font-montserrat">100</text><br>
                          <div class="max-w-[200px]">
                            <text x="10" y="50" font-size="20" text-anchor="middle" fill="black" class="uppercase font-semibold text-gray-500 font-montserrat">siswa
                              terlambat bulan ini</text>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="mr-8 mt-4">
                      <div class="flex justify-between">
                        <div class="ml-16 text-[#C2151A] font-bold font-montserrat">GRAFIK SISWA TERLAMBAT</div>
                        <div class="flex justify-between">
                          <div class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 25 25" fill="none">
                            <circle cx="12.5" cy="12.5" r="12.5" fill="#C2151A"/>
                          </svg></div>
                          <div class="font-montserrat">PER MINGGU</div>
                        </div>
                      </div>
                      <div class="w-[820px] h-[261px] z-0 relative pt-3 pb-5 mb-5 font-montserrat">
                        <div class="absolute h-[200px] w-[120px] bg-[#C2151A] bottom-0 left-[50px] z-[500]">
                          <div class="text-black text-center mt-52 uppercase">senin</div>
                        </div>
                        <div class="absolute h-[100px] w-[120px] bg-[#C2151A] bottom-0 left-[210px] z-[500]">
                          <div class="text-black text-center mt-[106px] uppercase">selasa</div>
                        </div>
                        <div class="absolute h-[50px] w-[120px] bg-[#C2151A] bottom-0 left-[370px] z-[500]">
                          <div class="text-black text-center mt-[56px] uppercase">rabu</div>
                        </div>
                        <div class="absolute h-[180px] w-[120px] bg-[#C2151A] bottom-0 left-[530px] z-[500]">
                          <div class="text-black text-center mt-[184px] uppercase">kamis</div>
                        </div>
                        <div class="absolute h-[20px] w-[120px] bg-[#C2151A] bottom-0 left-[690px] z-[500]">
                          <div class="text-black text-center mt-[24px] uppercase">jum'at</div>
                        </div>
                        
                        <ul class="w-[830px] h-[450px] z-50 relative">
                          <li class="list-none h-[50px] border-b-2 border-gray-300 relative"><div class="absolute top-[30px] text-sm">80</div></li>
                          <li class="list-none h-[50px] border-b-2 border-gray-300 relative"><div class="absolute top-[30px] text-sm">60</div></li>
                          <li class="list-none h-[50px] border-b-2 border-gray-300 relative"><div class="absolute top-[30px] text-sm">40</div></li>
                          <li class="list-none h-[50px] border-b-2 border-gray-300 relative"><div class="absolute top-[30px] text-sm">20</div></li>
                          <li class="list-none h-[50px] border-b-2 border-gray-300 relative"><div class="absolute top-[30px] text-sm">0</div></li>
                        </ul>
                      </div>
                      </div>
                  </div>
                </div>
              </div>
              <!-- grafik siswa izin keluar -->
              <div class="bg-white p-4 mx-4 rounded-lg mt-14 ">
                <div class="flex justify-between">
                  <div>
                    <div class="bg-white w-max p-4 mt-24 ml-2 rounded-lg " style="border-left: 7px solid #A0080D;">
                      <div style="display: flex; align-items: center;">
                        <div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"
                            fill="none">
                            <circle cx="50" cy="50" r="50" fill="#FBE0E1" />
                            <g transform="translate(24, 25)">
                              <svg width="50" height="50" viewBox="0 0 60 60" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="60" height="60" fill="url(#pattern1)" />
                                <defs>
                                  <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_186_511" transform="scale(0.0111111)" />
                                  </pattern>
                                  <image id="image0_186_511" width="90" height="90"
                                    xlink:href="data:image/png;base64,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" />
                                </defs>
                              </svg>
                            </g>
                          </svg>
                        </div>
                        <div class="ml-4 mb-2">
                          <text x="10" y="25" font-size="20" text-anchor="middle" fill="black"
                            class="font-bold text-3xl font-montserrat">100</text><br>
                          <div class="max-w-[200px]">
                            <text x="10" y="50" font-size="20" text-anchor="middle" fill="black" class="uppercase font-semibold text-gray-500 font-montserrat">siswa
                              izin keluar bulan lalu</text>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="mr-8 mt-4">
                      <div class="flex justify-between">
                        <div class="ml-16 text-[#C2151A] font-bold font-montserrat">GRAFIK SISWA IZIN KELUAR</div>
                        <div class="flex justify-between">
                          <div class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 25 25" fill="none">
                            <circle cx="12.5" cy="12.5" r="12.5" fill="#C2151A"/>
                          </svg></div>
                          <div class="font-montserrat">PER MINGGU</div>
                        </div>
                      </div>  
                      <div class="w-[820px] h-[261px] z-0 relative pt-3 pb-5 mb-5 font-montserrat">
                        <div class="absolute h-[200px] w-[120px] bg-[#C2151A] bottom-0 left-[50px] z-[500]">
                          <div class="text-black text-center mt-52 uppercase">senin</div>
                        </div>
                        <div class="absolute h-[100px] w-[120px] bg-[#C2151A] bottom-0 left-[210px] z-[500]">
                          <div class="text-black text-center mt-[106px] uppercase">selasa</div>
                        </div>
                        <div class="absolute h-[50px] w-[120px] bg-[#C2151A] bottom-0 left-[370px] z-[500]">
                          <div class="text-black text-center mt-[56px] uppercase">rabu</div>
                        </div>
                        <div class="absolute h-[180px] w-[120px] bg-[#C2151A] bottom-0 left-[530px] z-[500]">
                          <div class="text-black text-center mt-[184px] uppercase">kamis</div>
                        </div>
                        <div class="absolute h-[20px] w-[120px] bg-[#C2151A] bottom-0 left-[690px] z-[500]">
                          <div class="text-black text-center mt-[24px] uppercase">jum'at</div>
                        </div>

                        <ul class="w-[830px] h-[450px] z-50 relative">
                          <li class="list-none h-[50px] border-b-2 border-gray-300 relative"><div class="absolute top-[30px] text-sm">80</div></li>
                          <li class="list-none h-[50px] border-b-2 border-gray-300 relative"><div class="absolute top-[30px] text-sm">60</div></li>
                          <li class="list-none h-[50px] border-b-2 border-gray-300 relative"><div class="absolute top-[30px] text-sm">40</div></li>
                          <li class="list-none h-[50px] border-b-2 border-gray-300 relative"><div class="absolute top-[30px] text-sm">20</div></li>
                          <li class="list-none h-[50px] border-b-2 border-gray-300 relative"><div class="absolute top-[30px] text-sm">0</div></li>
                        </ul>
                      </div>
                      </div>
                  </div>
                </div>
              </div>
              <!-- grafik siswa melanggar -->
              <div class="bg-white p-4 mx-4 rounded-lg mt-14 mb-14">
                <div class="flex justify-between">
                  <div>
                    <div class="bg-white w-max p-4 mt-24 ml-2 rounded-lg" style="border-left: 7px solid #A0080D;">
                      <div style="display: flex; align-items: center;">
                        <div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"
                            fill="none">
                            <circle cx="50" cy="50" r="50" fill="#FBE0E1" />
                            <g transform="translate(24, 25)">
                              <svg width="50" height="50" viewBox="0 0 60 60" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="60" height="60" fill="url(#pattern2)" />
                                <defs>
                                  <pattern id="pattern2" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_186_503" transform="scale(0.0111111)" />
                                  </pattern>
                                  <image id="image0_186_503" width="90" height="90"
                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAADjElEQVR4nO2cO2sUURSAj0L2nM2ek2ARfPUKaiuCWgo+Cu2sFS18dPoDUiqBKIIQhST37qog2/pACzuxs9UIghGMUbTwhQkxJDImFsK+c+fOnPF8cLpk9ptvLzM3RS6AYRiGYRiGYRhGkfDl8tYq8jlH/NCTvHTEPzzJcs5mwaF8dMjPPPKII943DLAeNHCrv3+zI7nhSH7lIORy14My60guXgNAyCuTJTniiL9mHotCBOfpaomPQd5wyGccyWLmgSjcOJIlTzy8DLAO8rOSixXZ/7u6a5nHXnkmF+RxQa2GhzMNnbz4so8gHY0j+emQRyfLA7trsLGSTLUk2xzyKUf8qM3vLvmSHM1sC6dmd4E8PVHiHa3uJ9neJVvRFqv6TSa7EYeV81pW8kSbyH+5CRsGPcmTZteqklyA2Kz+MZL/0Mij3dzXauzGKxtlNvofNY74VdYRfQeTPJO7vbcq8f6m1yPZCzHxxN+yjug7mDoMcS/354gfN17VPAIxyTqg73B6vj/k041Dy9OwJduJFDz0eEm2Nwn9AWJS9NB1GOIm15yHmHiUmawj+jbjUN6t6R4Df3k94VAuZx3StxuUS+pD1wFKf2LncWWjzCRuiaP60IUS1e6vRlS7vxpR7f5qRLX7qxHV7q9GVLu/GlHt/mpEtfurEdXu362oD/Tz3U4on8yw0JGw0JGw0JGw0JGw0JFQ89bW7q9GVLu/GlHt/mpEtfurEdXur0ZUu79t7yJhoSNhoSNhoSNhoSNhoSOhZnuk3V+NqHZ/NaLa/dWIavdXI6rdX42odn/b3kXCQkfCQkeiqKF9Dv6RKZVwkHKItK/faJLYIRoHDQcph0j7+s1WdojGPYXLG6mGDtnBQouFLtiKbnx4Sq+HlcQmzTNVk2Psgol64qlQx+9kgSN+nd6K5qlgop74QcNvE/kKKMAj305xRd8LJpocbdzkg+Z8X2Un5BxPleOprWjks1EOIXTIb2t9lV2QY+orR2W8TyH0wni5vCWorCcZa/GBcx75aq0se/L6gkxWXgqhrwcXdf39mzzxl/ReKqJqHPLnpAmkQRUHDhb66GPqMDLJosOBQ5AmRTzM23c3Cx7lJMTAl+Tw//gYcSifqlg5ADFZeWbLmJojkWlNM5+87O8MDm6ArEi2NytvdL7vSF444u/qV25yOjzyc4dy16GcSE7uzSywYRiGYRiGYRgGBOI38Ie/bpmk9DoAAAAASUVORK5CYII=" />
                                </defs>
                              </svg>
                            </g>
                          </svg>
                        </div>
                        <div class="ml-4 mb-2">
                          <text x="10" y="25" font-size="20" text-anchor="middle" fill="black"
                            class="font-bold text-3xl font-montserrat">100</text><br>
                          <div class="max-w-[200px]">
                            <text x="10" y="50" font-size="20" text-anchor="middle" fill="black" class="uppercase font-semibold text-gray-500 font-montserrat">siswa
                              melanggar aturan bulan lalu</text>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="mr-8 mt-4">
                      <div class="flex justify-between">
                        <div class="ml-16 text-[#C2151A] font-bold font-montserrat">GRAFIK SISWA MELANGGAR ATURAN</div>
                        <div class="flex justify-between">
                          <div class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 25 25" fill="none">
                            <circle cx="12.5" cy="12.5" r="12.5" fill="#C2151A"/>
                          </svg></div>
                          <div class="font-montserrat">PER MINGGU</div>
                        </div>
                      </div>
                      <div class="w-[820px] h-[261px] z-0 relative pt-3 pb-5 mb-5 font-montserrat">
                        <div class="absolute h-[200px] w-[120px] bg-[#C2151A] bottom-0 left-[50px] z-[500]">
                          <div class="text-black text-center mt-52 uppercase">senin</div>
                        </div>
                        <div class="absolute h-[100px] w-[120px] bg-[#C2151A] bottom-0 left-[210px] z-[500]">
                          <div class="text-black text-center mt-[106px] uppercase">selasa</div>
                        </div>
                        <div class="absolute h-[50px] w-[120px] bg-[#C2151A] bottom-0 left-[370px] z-[500]">
                          <div class="text-black text-center mt-[56px] uppercase">rabu</div>
                        </div>
                        <div class="absolute h-[180px] w-[120px] bg-[#C2151A] bottom-0 left-[530px] z-[500]">
                          <div class="text-black text-center mt-[184px] uppercase">kamis</div>
                        </div>
                        <div class="absolute h-[20px] w-[120px] bg-[#C2151A] bottom-0 left-[690px] z-[500]">
                          <div class="text-black text-center mt-[24px] uppercase">jum'at</div>
                        </div>
                        
                        <ul class="w-[830px] h-[450px] z-50 relative">
                          <li class="list-none h-[50px] border-b-2 border-gray-300 relative"><div class="absolute top-[30px] text-sm">80</div></li>
                          <li class="list-none h-[50px] border-b-2 border-gray-300 relative"><div class="absolute top-[30px] text-sm">60</div></li>
                          <li class="list-none h-[50px] border-b-2 border-gray-300 relative"><div class="absolute top-[30px] text-sm">40</div></li>
                          <li class="list-none h-[50px] border-b-2 border-gray-300 relative"><div class="absolute top-[30px] text-sm">20</div></li>
                          <li class="list-none h-[50px] border-b-2 border-gray-300 relative"><div class="absolute top-[30px] text-sm">0</div></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>

  {{-- Notif Element --}}
  <div id="success-login-popup" class="hidden fixed inset-0 justify-center items-start pt-48 bg-black bg-opacity-50">
    <div class="bg-white p-4 rounded-full shadow-md text-center animate__animated animate__slideInDown">
        <h2 class="text-2xl flex items-center font-montserrat text-black font-bold uppercase">
          <svg class="mr-2" class="mr-2" width="50" height="50" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <rect width="90" height="90" fill="url(#pattern9)"/>
          <defs>
            <pattern id="pattern9" patternContentUnits="objectBoundingBox" width="1" height="1">
              <use xlink:href="#image0_304_1288" transform="scale(0.0111111)"/>
            </pattern>
            <image id="image0_304_1288" width="90" height="90" xlink:href="data:image/png;base64,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"/>
          </defs>
      </svg>
    Log in Berhasil!</h2>
  </div>
</div>

</div>
  <!-- footer -->
  <footer class="bg-gray-300 p-4">
    <p>footer</p>
  </footer>
  <!-- Preloader -->
  <div class="preloader-wrapper">
    <div
      class="inline-block h-8 w-8 animate-[spinner-grow_0.75s_linear_infinite] rounded-full bg-current align-[-0.125em] text-secondary opacity-0 motion-reduce:animate-[spinner-grow_1.5s_linear_infinite]"
      role="status">
      <span
        class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...</span>
    </div>
  </div>

  <script>
    const toggleSidebarButton = document.getElementById("toggleSidebar");
    const sidebar = document.getElementById("sidebar");
    const mainContent = document.getElementById("mainContent");

    function toggleSidebar() {
      sidebar.classList.toggle("-translate-x-64");
      mainContent.classList.toggle("ml-0");
      if (sidebar.classList.contains("-translate-x-64")) {
        localStorage.setItem("sidebarStatus", "open");
      } else {
        localStorage.setItem("sidebarStatus", "closed");
      }
    }

    toggleSidebarButton.addEventListener("click", toggleSidebar);

    const storedSidebarStatus = localStorage.getItem("sidebarStatus");
    if (storedSidebarStatus === "open") {
      toggleSidebar();
    }

    const preloaderWrapper = document.querySelector('.preloader-wrapper');

    window.addEventListener("load", function () {
      setInterval(function () {
        preloaderWrapper.classList.add('fade-out-animation');
      }, 300);
    })

    // Notif script
    const loginSuccessPopup = document.getElementById('success-login-popup');
    function showNotifPopup() {
      loginSuccessPopup.style.display = 'flex';
      loginSuccessPopup.classList.add('animate__fadeIn');
      setTimeout(hideNotifPopup, notifTime);
    }
    
    function hideNotifPopup() {
      loginSuccessPopup.style.display = 'none';
      loginSuccessPopup.classList.remove('animate__fadeIn');
    }

    loginSuccessPopup.addEventListener('click', function (e) {
      if (e.target === loginSuccessPopup) {
        hideNotifPopup();
      }
    });

    document.addEventListener("keydown", function(event) {
        if (event.key === "Escape" || event.keyCode === 27) {
          hideNotifPopup(event);
        }
    });

    // Logout confirmation script
    const loginButton = document.getElementById('logout-btn');
    function logoutConfirm() {
      Swal.fire({
        title: 'Apakah anda yakin untuk log out?',
        text: "Anda harus memasukkan username dan password untuk dapat log in kembali.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Iya, keluar',
        cancelButtonText: 'Kembali',
      })
      .then((result) => {
        if (result.isConfirmed) {
          location.replace("/logout");
          
        }
      })
    }
    loginButton.addEventListener('click', function (e) {
      e.preventDefault();
      logoutConfirm();
    });
    </script>
  @if(session('log-notif') == true)
  <script>
    showNotifPopup();
  </script>
  @endif
  @if(session('logindulu') == true)
  <script>
    showNotifPopup();
  </script>
  @endif
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</div>
@endsection