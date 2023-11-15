@extends('layout/index')
@section('title', 'Welcome')
    
@section('content')

<style>
    .cont-cont {
      overflow-x: hidden;
    }
    #mainContent {
      max-width: 100%;
      overflow: hidden;
    }
  </style>
</head>
<div class="cont-cont">
  <div class="w-screen bg-gray-100">
    <div>
      <div class="flex flex-col md:flex-row">
        <aside
          id="sidebar"
          class="fixed w-60 bg-[#C2151A] md:min-h-screen border-r border-gray-100 transform transition-transform ease-in-out duration-300"
        >
          <div class="flex items-center justify-center p-4 text-white">
            <!-- logo -->
            <a href="/dashboard" class="flex items-center mx-8 transition duration-200">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-10 h-10"
                viewBox="0 0 496 512"
              >
                <path
                  fill="#FFBFC1"
                  d="M248 8C111 8 0 119 0 256s111 248 248 248s248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88s-88-39.4-88-88s39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2c18.8-35.4 55.6-59.8 98.5-59.8c2.4 0 4.8.4 7.1 1.1c13 4.2 26.6 6.9 40.9 6.9c14.3 0 28-2.7 40.9-6.9c2.3-.7 4.7-1.1 7.1-1.1c42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"
                />
              </svg>
            </a>
          </div>
          <!-- nav -->
          <nav class="ml-2 mt-24 text-center">
            <a
              class="flex items-center px-2 text-white font-semibold text-md py-3 mt-7 transition duration-200"
            >
              <svg
                class="w-6 h-6"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 14 14"
              >
                <g
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path
                    d="M9.5 1.5H11a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-10a1 1 0 0 1 1-1h1.5"
                  />
                  <rect width="5" height="2.5" x="4.5" y=".5" rx="1" />
                  <path d="M4.5 5.5h5M4.5 8h5m-5 2.5h5" />
                </g>
              </svg>
              <span class="px-2 font-montserrat">FORM TERLAMBAT</span>
            </a>
            <a
              class="flex items-center px-2 m-1 text-white font-semibold text-md py-3 mt-7 transition duration-200"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-6 h-6"
                viewBox="0 0 2048 2048"
              >
                <path
                  fill="currentColor"
                  d="M1536 1408h192v128h-320v-384h128v256zm-256-896H256V384h1024v128zm192 384q119 0 224 45t183 124t123 183t46 224q0 119-45 224t-124 183t-183 123t-224 46q-119 0-224-45t-183-124t-123-183t-46-224q0-119 45-224t124-183t183-123t224-46zm0 1024q93 0 174-35t142-96t96-142t36-175q0-93-35-174t-96-142t-142-96t-175-36q-93 0-174 35t-142 96t-96 142t-36 175q0 93 35 174t96 142t142 96t175 36zM1166 768q-109 48-200 128H256V768h910zm-391 384q-14 31-25 63t-21 65H256v-128h519zm-519 384h451q3 32 8 64t14 64H256v-128zm594 384q50 71 116 128H0V0h1536v707l-32-2q-16-1-32-1t-32 1t-32 2V128H128v1792h722z"
                />
              </svg>
              <span class="px-2 font-montserrat">FORM KELUAR</span>
            </a>
            <a
              class="flex items-center px-2 text-white font-semibold text-md py-3 mt-7 transition duration-200"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-6 h-6"
                viewBox="0 0 24 24"
              >
                <g fill="none">
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-width="1.5"
                    d="M12 7v6"
                  />
                  <circle cx="12" cy="16" r="1" fill="currentColor" />
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-width="1.5"
                    d="M22 12c0 4.714 0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12s0-7.071 1.464-8.536C4.93 2 7.286 2 12 2c4.714 0 7.071 0 8.535 1.464c.974.974 1.3 2.343 1.41 4.536"
                  />
                </g>
              </svg>
              <span class="px-2 font-montserrat">FORM PELANGGAR</span>
            </a>
          </nav>
        </aside>

        <div
          id="mainContent"
          class="w-full md:flex-1 ml-60 transition-all duration-300"
        >
          <nav class="h-20 pl-4 pr-10 py-3 w-full flex justify-between bg-white text-white shadow-md">
            <div class="flex items-center">
              <button id="toggleSidebar" class="text-gray-800 mr-3 w-10 h-10">
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.5"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true"
                >              
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                  ></path>
                </svg>
              </button>
              <a rel="noopener noreferrer" href="" class="flex justify-start">
                <div class="flex items-center justify-center">
                  <img
                    class="h-10"
                    src="{{ url('image/ts-logo.webp') }}"
                    alt="Telkom Schools"
                  />
                </div>
              </a>
            </div>
            <div class="flex items-center">
              <a href="#formulir" rel="noopener noreferrer" href="" class="flex justify-start">
               <p class="text-black font-extrabold font-montserrat">CARA MENGISI FORMULIR</p>
              </a>
            </div>
          </nav>
          <main>
            <div class="ml-20 mt-24 mr-20">
              <!-- content -->
                <!-- atas -->
                <div class="flex w-full h-[460px]">
                  <div class="montserratclassic w-1/2">
                    <h1 class="font-semibold text-black text-3xl mt-14">SELAMAT DATANG</h1>
                    <h1 class="font-semibold text-black text-3xl mt-1">DI SKATEL PERIZINAN!</h1>
                    <p class="mt-6 mr-24 text-[20px]">Di sini, kami hadir untuk memberikan kemudahan dalam mengurus perizinan dan melaporkan berbagai kegiatan. Mari kita bersama mempermudah proses dan menciptakan pengalaman yang lebih baik. Selamat menggunakan layanan kami!</p>
                  </div>
                  <div class="w-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="213" height="190" viewBox="0 0 313 290" fill="none" class="ml-44 mt-20">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M156.519 0C187.91 0 213.357 24.3752 213.357 54.4434C213.357 84.5116 187.91 108.887 156.519 108.887C125.128 108.887 99.681 84.5116 99.681 54.4434C99.681 24.3752 125.128 0 156.519 0ZM61.5644 279.598C36.1685 261.925 30.5388 227.877 48.9899 203.552C67.441 179.226 102.986 173.833 128.382 191.507C153.778 209.18 159.407 243.228 140.957 267.554C122.505 291.88 86.9601 297.272 61.5644 279.598ZM264.233 203.552C282.684 227.877 277.055 261.925 251.659 279.598C226.263 297.272 190.717 291.88 172.267 267.554C153.816 243.228 159.445 209.18 184.841 191.507C210.237 173.833 245.782 179.226 264.233 203.552ZM2.79722 106.714C12.4975 78.1182 44.563 62.4684 74.4176 71.76C104.272 81.0516 120.61 111.766 110.91 140.363C101.21 168.959 69.1441 184.609 39.2896 175.317C9.43504 166.026 -6.90311 135.312 2.79722 106.714ZM238.582 71.76C268.438 62.4684 300.502 78.1182 310.203 106.714C319.903 135.312 303.565 166.026 273.711 175.317C243.855 184.609 211.791 168.959 202.09 140.363C192.39 111.766 208.728 81.0516 238.582 71.76Z" fill="#C2151A"/>
                    </svg>
                  </div>
                </div>

                <div id="formulir"></div>
                <!-- bawah -->
                <div class="flex w-[1000px] h-[500px] mb-[50px] ml-52">
                  <div class="w-1/2 p-5 relative">
                    <div class="bg-white w-[400px] h-full rounded-lg shadow-lg">
                      <!-- lingkaran pink -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="188" height="188" viewBox="0 0 188 188" fill="none" class="absolute top-0 left-1/2 transform -translate-x-1/2">
                        <g filter="url(#filter0_d_97_471)">
                          <circle cx="74" cy="60" r="60" fill="#F3E0E0"  />
                        </g>
                        <!-- icon dlm lingkaran pink -->
                        <g transform="translate(49, 33)">
                          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 80 80" fill="none">
                            <path d="M54.2859 8.57153H62.8573C64.3728 8.57153 65.8263 9.17357 66.8979 10.2452C67.9695 11.3168 68.5716 12.7703 68.5716 14.2858V71.4287C68.5716 72.9442 67.9695 74.3976 66.8979 75.4693C65.8263 76.5409 64.3728 77.143 62.8573 77.143H17.143C15.6275 77.143 14.174 76.5409 13.1024 75.4693C12.0307 74.3976 11.4287 72.9442 11.4287 71.4287V14.2858C11.4287 12.7703 12.0307 11.3168 13.1024 10.2452C14.174 9.17357 15.6275 8.57153 17.143 8.57153H25.7144" stroke="#C2151A" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M48.5715 2.85718H31.4286C28.2727 2.85718 25.7144 5.41555 25.7144 8.57146V11.4286C25.7144 14.5845 28.2727 17.1429 31.4286 17.1429H48.5715C51.7274 17.1429 54.2858 14.5845 54.2858 11.4286V8.57146C54.2858 5.41555 51.7274 2.85718 48.5715 2.85718Z" stroke="#C2151A" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M25.7144 31.4287H54.2858M25.7144 45.7144H54.2858M25.7144 60.0001H54.2858" stroke="#C2151A" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                        </g>
                      </svg>
                      <div class="text-center pt-28">
                        <p class="uppercase text-black font-semibold font-montserrat">cara mengisi form terlambat</p>
                      </div>
                      <div class="text-center pt-4">
                        <div class="max-w-[300px] mx-auto text-left font-montserrat">
                          <p class="font-base">1. Isi data sesuai yang tertera di form</p>
                          <p class="font-base ">2. Nama: Isi dengan nama lengkap Anda</p>
                          <p class="font-base ">3. NIS (Nomor Induk Siswa): Masukkan nomor induk siswa Anda</p>
                          <p class="font-base ">4. Kelas: Tuliskan kelas Anda saat ini</p>
                          <p class="font-base ">5. Jurusan: Tuliskan jurusan atau program studi yang Anda ikuti</p>
                          <p class="font-base ">6. Alasan Keterlambatan: Jelaskan dengan singkat alasan mengapa Anda terlambat. Misalnya, kendala transportasi atau situasi darurat</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="w-1/2 p-5 relative">
                    <div class="bg-white w-[400px] h-full rounded-lg shadow-lg">
                      <!-- lingkaran pink -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="188" height="188" viewBox="0 0 188 188" fill="none" class="absolute top-0 left-1/2 transform -translate-x-1/2">
                        <g filter="url(#filter0_d_97_471)">
                          <circle cx="64" cy="60" r="60" fill="#F3E0E0" />
                        </g>
                        <!-- icon dalam lingkaran pink -->
                        <g transform="translate(46, 35)">
                          <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 80 80" fill="none">
                            <g clip-path="url(#clip0_97_480)">
                              <path d="M60 55H67.5V60H55V45H60V55ZM50 20H10V15H50V20ZM57.5 35C60.599 35 63.5156 35.5859 66.25 36.7578C68.9844 37.9297 71.3672 39.5443 73.3984 41.6016C75.4297 43.6589 77.0312 46.0417 78.2031 48.75C79.375 51.4583 79.974 54.375 80 57.5C80 60.599 79.4141 63.5156 78.2422 66.25C77.0703 68.9844 75.4557 71.3672 73.3984 73.3984C71.3411 75.4297 68.9583 77.0312 66.25 78.2031C63.5417 79.375 60.625 79.974 57.5 80C54.401 80 51.4844 79.4141 48.75 78.2422C46.0156 77.0703 43.6328 75.4557 41.6016 73.3984C39.5703 71.3411 37.9688 68.9583 36.7969 66.25C35.625 63.5417 35.026 60.625 35 57.5C35 54.401 35.5859 51.4844 36.7578 48.75C37.9297 46.0156 39.5443 43.6328 41.6016 41.6016C43.6589 39.5703 46.0417 37.9688 48.75 36.7969C51.4583 35.625 54.375 35.026 57.5 35ZM57.5 75C59.9219 75 62.1875 74.5443 64.2969 73.6328C66.4062 72.7214 68.2552 71.4714 69.8438 69.8828C71.4323 68.2943 72.6823 66.4453 73.5938 64.3359C74.5052 62.2266 74.974 59.9479 75 57.5C75 55.0781 74.5443 52.8125 73.6328 50.7031C72.7214 48.5938 71.4714 46.7448 69.8828 45.1562C68.2943 43.5677 66.4453 42.3177 64.3359 41.4062C62.2266 40.4948 59.9479 40.026 57.5 40C55.0781 40 52.8125 40.4557 50.7031 41.3672C48.5938 42.2786 46.7448 43.5286 45.1562 45.1172C43.5677 46.7057 42.3177 48.5547 41.4062 50.6641C40.4948 52.7734 40.026 55.0521 40 57.5C40 59.9219 40.4557 62.1875 41.3672 64.2969C42.2786 66.4062 43.5286 68.2552 45.1172 69.8438C46.7057 71.4323 48.5547 72.6823 50.6641 73.5938C52.7734 74.5052 55.0521 74.974 57.5 75ZM45.5469 30C42.7083 31.25 40.1042 32.9167 37.7344 35H10V30H45.5469ZM30.2734 45C29.9089 45.8073 29.5833 46.6276 29.2969 47.4609C29.0104 48.2943 28.737 49.1406 28.4766 50H10V45H30.2734ZM10 60H27.6172C27.6953 60.8333 27.7995 61.6667 27.9297 62.5C28.0599 63.3333 28.2422 64.1667 28.4766 65H10V60ZM33.2031 75C34.5052 76.849 36.0156 78.5156 37.7344 80H0V0H60V27.6172L58.75 27.5391C58.3333 27.513 57.9167 27.5 57.5 27.5C57.0833 27.5 56.6667 27.513 56.25 27.5391C55.8333 27.5651 55.4167 27.5911 55 27.6172V5H5V75H33.2031Z" fill="#C2151A"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_97_480">
                                <rect width="80" height="80" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>
                        </g>
                      </svg>
                      <div class="text-center pt-28">
                        <p class="uppercase text-black font-semibold font-montserrat">cara mengisi form keluar</p>
                      </div>
                      <div class="text-center pt-4">
                        <div class="max-w-[300px] mx-auto text-left font-montserrat">
                          <p class="font-base">1. Isi data sesuai yang tertera di form</p>
                          <p class="font-base ">2. Nama: Isi dengan nama lengkap Anda</p>
                          <p class="font-base ">3. NIS (Nomor Induk Siswa): Masukkan nomor induk siswa Anda</p>
                          <p class="font-base ">4. Kelas: Tuliskan kelas Anda saat ini</p>
                          <p class="font-base ">5. Jurusan: Tuliskan jurusan atau program studi yang Anda ikuti</p>
                          <p class="font-base ">6. Alasan Keterlambatan: Jelaskan dengan singkat alasan mengapa Anda terlambat. Misalnya, kendala transportasi atau situasi darurat</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- bawah part2 -->
                <div class="flex w-1/2 h-[500px] mb-[50px] ml-52 mt-28">
                  <div class="w-1/2 p-5 relative ml-60">
                    <div class="bg-white w-[400px] h-full rounded-lg shadow-lg">
                      <svg xmlns="http://www.w3.org/2000/svg" width="188" height="188" viewBox="0 0 188 188" fill="none" class="absolute top-0 left-1/2 transform -translate-x-1/2 ml-20">
                        <g filter="url(#filter0_d_97_471)">
                          <circle cx="74" cy="60" r="60" fill="#F3E0E0" />
                        </g>
                        <!-- icon dlm lingkaran pink -->
                        <g transform="translate(49, 35)">
                          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 80 80" fill="none">
                            <path d="M40 23.3335V43.3335" stroke="#C2151A" stroke-width="2.1875" stroke-linecap="round"/>
                            <path d="M39.9998 56.6667C41.8408 56.6667 43.3332 55.1743 43.3332 53.3333C43.3332 51.4924 41.8408 50 39.9998 50C38.1589 50 36.6665 51.4924 36.6665 53.3333C36.6665 55.1743 38.1589 56.6667 39.9998 56.6667Z" fill="#C2151A"/>
                            <path d="M73.3332 40.0001C73.3332 55.7134 73.3332 63.5701 68.4498 68.4501C63.5732 73.3334 55.7132 73.3334 39.9998 73.3334C24.2865 73.3334 16.4298 73.3334 11.5465 68.4501C6.6665 63.5734 6.6665 55.7134 6.6665 40.0001C6.6665 24.2867 6.6665 16.4301 11.5465 11.5467C16.4332 6.66675 24.2865 6.66675 39.9998 6.66675C55.7132 6.66675 63.5698 6.66675 68.4498 11.5467C71.6965 14.7934 72.7832 19.3567 73.1498 26.6667" stroke="#C2151A" stroke-width="2.1875" stroke-linecap="round"/>
                          </svg>
                        </g>
                      </svg>
                      <div class="text-center pt-28">
                        <p class="uppercase text-black font-semibold font-montserrat">cara mengisi form pelanggar</p>
                      </div>
                      <div class="text-center pt-4">
                        <div class="max-w-[300px] mx-auto text-left font-montserrat">
                          <p class="font-base">1. Isi data sesuai yang tertera di form</p>
                          <p class="font-base ">2. Nama: Isi dengan nama lengkap Anda</p>
                          <p class="font-base ">3. NIS (Nomor Induk Siswa): Masukkan nomor induk siswa Anda</p>
                          <p class="font-base ">4. Kelas: Tuliskan kelas Anda saat ini</p>
                          <p class="font-base ">5. Jurusan: Tuliskan jurusan atau program studi yang Anda ikuti</p>
                          <p class="font-base ">6. Alasan Keterlambatan: Jelaskan dengan singkat alasan mengapa Anda terlambat. Misalnya, kendala transportasi atau situasi darurat</p>
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
  </div>
  <!-- footer -->
  <footer class="bg-gray-300 p-4">
    <p>footer</p>
  </footer>
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
  </script>
</div>

@endsection