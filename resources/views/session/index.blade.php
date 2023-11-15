@extends('layout/index')
@section('title', 'Login')

@section('content')

<div class="bg-neutral-700 flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md flex w-1/2">
        <!-- kiri -->
        <div class="w-1/2 pr-8">
            <img src="{{url('image/side-logo.webp')}}" class="w-full h-auto mt-7">
        </div>
        <!-- kanan -->
        <div class="w-1/2 font-montserrat">
            <a href="../">
                <img src="{{url('image/ts-logo.webp')}}" class="w-25 h-14 mb-8 mx-auto">
            </a>
            <form action="/login" method="post">
                @csrf
                <div class="mb-12 relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 40 40" fill="none">
                            <path d="M10.7 12.3C10.7 16.435 14.065 19.8 18.2 19.8C22.335 19.8 25.7 16.435 25.7 12.3C25.7 8.16505 22.335 4.80005 18.2 4.80005C14.065 4.80005 10.7 8.16505 10.7 12.3ZM31.5333 36.4667H33.2V34.8C33.2 28.3684 27.965 23.1334 21.5333 23.1334H14.8666C8.43329 23.1334 3.19995 28.3684 3.19995 34.8V36.4667H31.5333Z" fill="#333333"/>
                        </svg>
                    </div>
                    <input type="text" value="{{ old('username') }}" placeholder="USERNAME" class="w-full px-12 py-2 border rounded-lg pl-14 bg-gray-200 shadow-md" name="username">
                </div>
                <div class="mb-12 relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 40 40" fill="none">
                            <!-- ikon kunci kiri -->
                            <path d="M19.9998 28.3334C20.8839 28.3334 21.7317 27.9822 22.3569 27.3571C22.982 26.732 23.3332 25.8841 23.3332 25.0001C23.3332 24.116 22.982 23.2682 22.3569 22.6431C21.7317 22.0179 20.8839 21.6667 19.9998 21.6667C19.1158 21.6667 18.2679 22.0179 17.6428 22.6431C17.0177 23.2682 16.6665 24.116 16.6665 25.0001C16.6665 25.8841 17.0177 26.732 17.6428 27.3571C18.2679 27.9822 19.1158 28.3334 19.9998 28.3334ZM29.9998 13.3334C30.8839 13.3334 31.7317 13.6846 32.3569 14.3097C32.982 14.9348 33.3332 15.7827 33.3332 16.6667V33.3334C33.3332 34.2175 32.982 35.0653 32.3569 35.6904C31.7317 36.3156 30.8839 36.6667 29.9998 36.6667H9.99984C9.11578 36.6667 8.26794 36.3156 7.64281 35.6904C7.01769 35.0653 6.6665 34.2175 6.6665 33.3334V16.6667C6.6665 15.7827 7.01769 14.9348 7.64281 14.3097C8.26794 13.6846 9.11578 13.3334 9.99984 13.3334H11.6665V10.0001C11.6665 7.78994 12.5445 5.67033 14.1073 4.10752C15.6701 2.54472 17.7897 1.66675 19.9998 1.66675C21.0942 1.66675 22.1778 1.88230 23.1889 2.30109C24.1999 2.71987 25.1186 3.33370 25.8924 4.10752C26.6662 4.88135 27.2800 5.80001 27.6988 6.81105C28.1176 7.82210 28.3332 8.90573 28.3332 10.0001V13.3334H29.9998ZM19.9998 5.00008C18.6738 5.00008 17.4020 5.52687 16.4643 6.46455C15.5266 7.40223 14.9998 8.67400 14.9998 10.0001V13.3334H24.9998V10.0001C24.9998 8.67400 24.4731 7.40223 23.5354 6.46455C22.5977 5.52687 21.3259 5.00008 19.9998 5.00008Z" fill="#333333"/>
                        </svg>
                    </div>
                    <input type="password" id="password" placeholder="PASSWORD" class="w-full px-4 py-2 border rounded-lg pl-14 bg-gray-200 shadow-md" name="password">
                </div>
                <button type="submit" class="bg-red-700 w-full text-white px-4 py-2 rounded-lg hover:bg-red-600 font-bold">LOG IN</button>
            </form>
        </div>
    </div>
    
    {{-- Notif Element --}}
    <div id="failed-login-popup" class="hidden fixed inset-0 justify-center items-start pt-48 bg-black bg-opacity-50">
        <div class="bg-white p-4 rounded-full shadow-md text-center animate__animated animate__slideInDown">
            <h2 class="text-2xl flex items-center font-montserrat text-black font-bold uppercase">
                <svg class="mr-2" width="50" height="50" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="100" height="100" fill="url(#pattern8)"/>
                    <defs>
                        <pattern id="pattern8" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_230_194" transform="scale(0.01)"/>
                        </pattern>
                        <image id="image0_230_194" width="100" height="100" xlink:href="data:image/png;base64,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"/>
                    </defs>
                </svg>
            Login gagal, coba lagi!</h2>
        </div>
    </div>

    {{-- <div id="fail-null" class="hidden fixed inset-0 justify-center items-start pt-48 bg-black bg-opacity-50">
        <div class="bg-white p-4 rounded-full shadow-md text-center animate__animated animate__slideInDown">
            <h2 class="text-2xl flex items-center font-montserrat text-black font-bold uppercase">
                <svg class="mr-2" width="50" height="50" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="100" height="100" fill="url(#pattern10)"/>
                    <defs>
                        <pattern id="pattern10" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_230_194" transform="scale(0.01)"/>
                        </pattern>
                        <image id="image0_230_194" width="100" height="100" xlink:href="data:image/png;base64,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"/>
                    </defs>
                </svg>
            Nama pengguna atau kata sandi tidak boleh kosong!</h2>
        </div>
    </div> --}}

    <script>
        // const passwordInput = document.getElementById('password');
        // const togglePasswordButton = document.getElementById('toggle-password-button');

        // togglePasswordButton.addEventListener('click', function () {
        //     if (passwordInput.type === 'password') {
        //         passwordInput.type = 'text';
        //     } else {
        //         passwordInput.type = 'password';
        //     }
        // });

        const loginFailedPopup = document.getElementById('failed-login-popup');
        function showNotifPopup() {
            loginFailedPopup.style.display = 'flex';
            loginFailedPopup.classList.add('animate__fadeIn');
            setTimeout(hideNotifPopup, notifTime);
        }
        function hideNotifPopup() {
            loginFailedPopup.style.display = 'none';
            loginFailedPopup.classList.remove('animate__fadeIn');
        }
        loginFailedPopup.addEventListener('click', function (e) {
            if (e.target === loginFailedPopup) {
                hideNotifPopup();
            }
        });
        document.addEventListener("keydown", function(event) {
            if (event.key === "Escape" || event.keyCode === 27) {
                hideNotifPopup(event);
            }
        });
        
        // const loginFailedNullPopup = document.getElementById('fail-null');
        // function showNotifNullPopup() {
        //     loginFailedNullPopup.style.display = 'flex';
        //     loginFailedNullPopup.classList.add('animate__fadeIn');
        //     setTimeout(hideNotifNullPopup, notifTime);
        // }
        // function hideNotifNullPopup() {
        //     loginFailedNullPopup.style.display = 'none';
        //     loginFailedNullPopup.classList.remove('animate__fadeIn');
        // }
        // loginFailedNullPopup.addEventListener('click', function (e) {
        //     if(e.target === loginFailedNullPopup) {
        //         hideNotifNullPopup();
        //     }
        // });
    </script>
    @if(session('fail-notif') == true)
    <script>
        showNotifPopup();
    </script>
    @endif
    @if($errors->has('username') || $errors->has('password'))
    <script>
        // showNotifNullPopup();
        showNotifPopup();
    </script>
    @endif
</div>
@endsection