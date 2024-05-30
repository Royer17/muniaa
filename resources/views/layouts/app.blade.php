<!doctype html>
<html>
  <head>
    <title>{{ $setting->web_title }}</title>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ 'favicon.png' }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
  
    <link href="{{ '/css/output.min.css' }}" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
    />
    <style>
      .mfp-active {
        overflow: hidden;
      }

      .mfp-bg {
        overflow: hidden;
      }

      .mfp-wrap {
        overflow: hidden !important;
      }
    </style>
  </head>
  <body>
    <nav class="bg-white">
      <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
          <div class="absolute inset-y-0 right-0 flex items-center md:hidden">
            <button
              id="menu-button"
              type="button"
              class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-500"
              aria-controls="mobile-menu"
              aria-expanded="false"
              onclick="toggleMenu()"
            >
              <span class="sr-only">Open main menu</span>
              <svg
                id="menu-icon"
                class="block h-6 w-6"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
                />
              </svg>
            </button>
          </div>
          <div
            class="flex-1 flex items-center sm:items-stretch sm:justify-start"
          >
            <div
              class="flex w-full md:justify-between gap-4 md:gap-0 px-2 py-2 h-fit"
            >
              <div class="flex items-center gap-8 max-w-32 md:max-w-[300px]">
                <a href="#">
                  <img
                    src="./img/logo.png"
                    alt="Municipalidad Alto de la Alianza Logo"
                  />
                </a>
                <a class="hidden md:block" href="#">
                  <img
                    src="img/logo4.png"
                    alt="Municipalidad Alto de la Alianza Slogan"
                  />
                </a>
              </div>
              <div class="flex gap-4 items-center">
                <div class="hidden md:flex gap-2 max-w-28">
                  <a href="#">
                    <img src="img/fb.png" alt="Facebook" />
                  </a>
                  <a href="#">
                    <img src="img/tiktok.png" alt="Tiktok" />
                  </a>
                  <a href="#">
                    <img src="img/ig.png" alt="instagram" />
                  </a>
                </div>
                <a href="#">
                  <img
                    src="./img/logo-portal-transparencia.png"
                    class="max-w-[110px]"
                    alt="Portal de Transparencia"
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="hidden md:flex justify-center mx-auto bg-[#E9E9E9] rounded-t-full w-fit lg:px-5 xl:px-5 2xl:px-20"
      >
        <div class="flex items-center md:space-x-0 lg:space-x-2 xl:space-x-4">
          <a
            href="#"
            class="text-black block px-1 2xl:px-3 py-2 rounded-md md:text-xs xl:text-base font-medium"
            >Informe de Rendición de Cuentas</a
          >
          <div class="h-6 bg-dark-blue w-0.5"></div>
          <a
            href="#"
            class="text-black block px-1 2xl:px-3 py-2 rounded-md md:text-xs xl:text-base font-medium"
            >El Distrito</a
          >
          <div class="h-6 bg-dark-blue w-0.5"></div>

          <button
            id="dropdownNavbarLink"
            data-dropdown-toggle="dropdownNavbar"
            class="text-black font-medium flex items-center justify-between w-fit"
          >
            Dropdown
            <svg
              class="w-4 h-4 ml-1"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </button>
          <div
            id="dropdownNavbar"
            class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44"
          >
            <ul class="py-1" aria-labelledby="dropdownLargeButton">
              <li>
                <a
                  href="#"
                  class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2"
                  >Dashboard</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2"
                  >Settings</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2"
                  >Earnings</a
                >
              </li>
            </ul>
            <div class="py-1">
              <a
                href="#"
                class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2"
                >Sign out</a
              >
            </div>
          </div>

          <div class="h-6 bg-dark-blue w-0.5"></div>

          <a
            href="#"
            class="text-black block px-1 2xl:px-3 py-2 rounded-md md:text-xs xl:text-base font-medium"
            >Obras Municipales</a
          >
          <div class="h-6 bg-dark-blue w-0.5"></div>

          <a
            href="#"
            class="text-black block px-1 2xl:px-3 py-2 rounded-md md:text-xs xl:text-base font-medium"
            >Enlaces</a
          >
          <div class="h-6 bg-dark-blue w-0.5"></div>

          <a
            href="#"
            class="text-black block px-1 2xl:px-3 py-2 rounded-md md:text-xs xl:text-base font-medium"
            >Servicios</a
          >
          <div class="h-6 bg-dark-blue w-0.5"></div>

          <a
            href="#"
            class="text-black block px-1 2xl:px-3 py-2 rounded-md md:text-xs xl:text-base font-medium"
            >Favoritos</a
          >
          <div class="h-6 bg-dark-blue w-0.5"></div>

          <a
            href="#"
            class="text-black block px-1 2xl:px-3 py-2 rounded-md md:text-xs xl:text-base font-medium"
            >Portal de Transparencia</a
          >
        </div>
      </div>
      <div class="hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 absolute bg-white w-full z-50">
          <a
            href="#"
            class="text-gray-900 block px-3 py-2 rounded-md text-base font-medium"
            >Informe de Rendición de Cuentas</a
          >
          <a
            href="#"
            class="text-gray-900 block px-3 py-2 rounded-md text-base font-medium"
            >El Distrito</a
          >
          <a
            href="#"
            class="text-gray-900 block px-3 py-2 rounded-md text-base font-medium"
            >La municipalidad</a
          >
          <a
            href="#"
            class="text-gray-900 block px-3 py-2 rounded-md text-base font-medium"
            >Obras Municipales</a
          >
          <a
            href="#"
            class="text-gray-900 block px-3 py-2 rounded-md text-base font-medium"
            >Enlaces</a
          >
          <a
            href="#"
            class="text-gray-900 block px-3 py-2 rounded-md text-base font-medium"
            >Servicios</a
          >
          <a
            href="#"
            class="text-gray-900 block px-3 py-2 rounded-md text-base font-medium"
            >Favoritos</a
          >
          <a
            href="#"
            class="text-gray-900 block px-3 py-2 rounded-md text-base font-medium"
            >Portal de Transparencia</a
          >
        </div>
      </div>
      <div class="flex">
        <div class="h-1 w-3/4 bg-dark-blue"></div>
        <div class="h-1 w-1/4 bg-green-light"></div>
      </div>
    </nav>

    <section class="section" id="slider">
      <div class="swiper main-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img
              class="w-full"
              src="img/photos/alianza.png"
              alt="Foto principal alto de alianza"
            />
          </div>
          <div class="swiper-slide">
            <img
              class="w-full"
              src="img/photos/alianza.png"
              alt="Foto principal alto de alianza"
            />
          </div>
          <div class="swiper-slide">
            <img
              class="w-full"
              src="img/photos/alianza.png"
              alt="Foto principal alto de alianza"
            />
          </div>
        </div>

        <div class="button-next custom-next">
          <svg class="text-white" fill="currentColor" viewBox="0 0 20 20">
            <path
              fill-rule="evenodd"
              d="M7.293 14.707a1 1 0 010-1.414L11.586 9 7.293 4.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
              clip-rule="evenodd"
            />
          </svg>
        </div>
        <div class="button-prev custom-prev">
          <svg class="text-white" fill="currentColor" viewBox="0 0 20 20">
            <path
              fill-rule="evenodd"
              d="M12.707 14.707a1 1 0 010-1.414L8.414 9l4.293-4.293a1 1 0 00-1.414-1.414l-5 5a1 1 0 000 1.414l5 5a1 1 0 001.414 0z"
              clip-rule="evenodd"
            />
          </svg>
        </div>
      </div>
    </section>
    <section class="section" id="services">
      <div
        class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4 px-4 md:px-20 md:py-6 md:gap-x-7 md:gap-y-8"
      >
        <div class="service-card-base">
          <a href="#"> <img src="./img/services/secciu.png" /> </a>
        </div>
        <div class="service-card-base">
          <a href="#"> <img src="./img/services/parquefami.png" /> </a>
        </div>
        <div class="service-card-base">
          <a href="#"> <img src="./img/services/licenciafun.png" /> </a>
        </div>
        <div class="service-card-base">
          <a href="#"> <img src="./img/services/sci.png" /> </a>
        </div>
        <div class="service-card-base">
          <a href="#"> <img src="./img/services/regciv.png" /> </a>
        </div>
        <div class="service-card-base">
          <a href="#"> <img src="./img/services/sci.png" /> </a>
        </div>
        <div class="service-card-base">
          <a href="#"> <img src="./img/services/regciv.png" /> </a>
        </div>
      </div>
    </section>
    <section class="section hidden md:block bg-[#E3E3E3]" id="news-desktop">
      <div class="flex p-5 max-w-[800px] lg:max-w-[1400px] mx-auto py-10">
        <div class="max-w-4xl">
          <h1 class="title">Noticias</h1>
          <div
            thumbsSlider=""
            class="swiper news-thumb-swiper h-[435px] rounded-l-xl"
          >
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="group slide-item">
                  <div>
                    <img
                      class="max-w-[200px] w-full"
                      src="https://picsum.photos/300/200"
                    />
                  </div>
                  <div class="flex flex-col justify-center gap-2 text-white">
                    <p class="text-sm font-bold group-hover:text-white">
                      Patrullaje permanente en la avenida manuel cuadros
                    </p>
                    <p class="text-xs group-hover:text-white">23 de Nov.</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="group slide-item">
                  <div>
                    <img
                      class="max-w-[200px] w-full"
                      src="https://picsum.photos/300/200"
                    />
                  </div>
                  <div class="flex flex-col justify-center gap-2 text-white">
                    <p class="text-sm font-bold group-hover:text-white">
                      Patrullaje permanente en la avenida manuel cuadros
                    </p>
                    <p class="text-xs group-hover:text-white">23 de Nov.</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="group slide-item">
                  <div>
                    <img
                      class="max-w-[200px] w-full"
                      src="https://picsum.photos/300/200"
                    />
                  </div>
                  <div class="flex flex-col justify-center gap-2 text-white">
                    <p class="text-sm font-bold group-hover:text-white">
                      Patrullaje permanente en la avenida manuel cuadros
                    </p>
                    <p class="text-xs group-hover:text-white">23 de Nov.</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="group slide-item">
                  <div>
                    <img
                      class="max-w-[200px] w-full"
                      src="https://picsum.photos/300/200"
                    />
                  </div>
                  <div class="flex flex-col justify-center gap-2 text-white">
                    <p class="text-sm font-bold group-hover:text-white">
                      Patrullaje permanente en la avenida manuel cuadros
                    </p>
                    <p class="text-xs group-hover:text-white">23 de Nov.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="w-8/12">
          <div
            class="swiper news-swiper max-w-full max-h-[500px] w-full rounded-xl overflow-hidden"
          >
            <div class="swiper-wrapper w-full">
              <div class="swiper-slide">
                <img
                  class="w-full h-full"
                  src="https://picsum.photos/1500/1200"
                />
              </div>
              <div class="swiper-slide">
                <img
                  class="w-full h-full"
                  src="https://picsum.photos/1500/1200"
                />
              </div>
              <div class="swiper-slide">
                <img
                  class="w-full h-full"
                  src="https://picsum.photos/1500/1200"
                />
              </div>
              <div class="swiper-slide">
                <img
                  class="w-full h-full"
                  src="https://picsum.photos/1500/1200"
                />
              </div>
            </div>

            <div class="button-next custom-next">
              <svg class="text-white" fill="currentColor" viewBox="0 0 20 20">
                <path
                  fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L11.586 9 7.293 4.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                  clip-rule="evenodd"
                />
              </svg>
            </div>
            <div class="button-prev custom-prev">
              <svg class="text-white" fill="currentColor" viewBox="0 0 20 20">
                <path
                  fill-rule="evenodd"
                  d="M12.707 14.707a1 1 0 010-1.414L8.414 9l4.293-4.293a1 1 0 00-1.414-1.414l-5 5a1 1 0 000 1.414l5 5a1 1 0 001.414 0z"
                  clip-rule="evenodd"
                />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section md:hidden" id="news-mobile">
      <h1 class="title">Noticias</h1>
      <div class="swiper news-swiper bg-dark-blue rounded-tl-xl">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="news-slide">
              <div>
                <img src="https://picsum.photos/300/200" />
              </div>
              <div class="flex flex-col justify-center gap-2 text-white">
                <p class="text-sm font-bold">
                  Patrullaje permanente en la avenida manuel cuadros
                </p>
                <p class="text-xs">23 de Nov.</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="news-slide">
              <div>
                <img src="https://picsum.photos/300/200" />
              </div>
              <div class="flex flex-col justify-center gap-2 text-white">
                <p class="text-sm font-bold">
                  Patrullaje permanente en la avenida manuel cuadros
                </p>
                <p class="text-xs">23 de Nov.</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="news-slide">
              <div>
                <img src="https://picsum.photos/300/200" />
              </div>
              <div class="flex flex-col justify-center gap-2 text-white">
                <p class="text-sm font-bold">
                  Patrullaje permanente en la avenida manuel cuadros
                </p>
                <p class="text-xs">23 de Nov.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="button-next custom-next">
          <svg class="text-white" fill="currentColor" viewBox="0 0 20 20">
            <path
              fill-rule="evenodd"
              d="M7.293 14.707a1 1 0 010-1.414L11.586 9 7.293 4.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
              clip-rule="evenodd"
            />
          </svg>
        </div>
        <div class="button-prev custom-prev">
          <svg class="text-white" fill="currentColor" viewBox="0 0 20 20">
            <path
              fill-rule="evenodd"
              d="M12.707 14.707a1 1 0 010-1.414L8.414 9l4.293-4.293a1 1 0 00-1.414-1.414l-5 5a1 1 0 000 1.414l5 5a1 1 0 001.414 0z"
              clip-rule="evenodd"
            />
          </svg>
        </div>
      </div>
    </section>
    <section class="section hidden md:block" id="works-desktop">
      <div class="flex p-5 max-w-[800px] lg:max-w-[1400px] mx-auto py-10">
        <div class="max-w-4xl">
          <h1 class="title">Obras</h1>
          <div
            thumbsSlider=""
            class="swiper works-thumb-swiper border-solid border-l-2 border-t-2 border-b-2 border-[#B0B0B0] h-[435px] rounded-l-xl"
          >
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="group slide-item">
                  <div>
                    <img
                      class="max-w-[200px] w-full"
                      src="https://picsum.photos/300/200"
                    />
                  </div>
                  <div class="flex flex-col justify-center gap-2 text-white">
                    <p class="text-sm font-bold group-hover:text-white">
                      Patrullaje permanente en la avenida manuel cuadros
                    </p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="group slide-item">
                  <div>
                    <img
                      class="max-w-[200px] w-full"
                      src="https://picsum.photos/300/200"
                    />
                  </div>
                  <div class="flex flex-col justify-center gap-2 text-white">
                    <p class="text-sm font-bold group-hover:text-white">
                      Patrullaje permanente en la avenida manuel cuadros
                    </p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="group slide-item">
                  <div>
                    <img
                      class="max-w-[200px] w-full"
                      src="https://picsum.photos/300/200"
                    />
                  </div>
                  <div class="flex flex-col justify-center gap-2 text-white">
                    <p class="text-sm font-bold group-hover:text-white">
                      Patrullaje permanente en la avenida manuel cuadros
                    </p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="group slide-item">
                  <div>
                    <img
                      class="max-w-[200px] w-full"
                      src="https://picsum.photos/300/200"
                    />
                  </div>
                  <div class="flex flex-col justify-center gap-2 text-white">
                    <p class="text-sm font-bold group-hover:text-white">
                      Patrullaje permanente en la avenida manuel cuadros
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="w-8/12">
          <div
            class="swiper works-swiper max-w-full max-h-[500px] w-full rounded-xl overflow-hidden"
          >
            <div class="swiper-wrapper w-full">
              <div class="swiper-slide">
                <img
                  class="w-full h-full"
                  src="https://picsum.photos/1500/1200"
                />
              </div>
              <div class="swiper-slide">
                <img
                  class="w-full h-full"
                  src="https://picsum.photos/1500/1200"
                />
              </div>
              <div class="swiper-slide">
                <img
                  class="w-full h-full"
                  src="https://picsum.photos/1500/1200"
                />
              </div>
              <div class="swiper-slide">
                <img
                  class="w-full h-full"
                  src="https://picsum.photos/1500/1200"
                />
              </div>
            </div>

            <div class="button-next custom-next">
              <svg class="text-white" fill="currentColor" viewBox="0 0 20 20">
                <path
                  fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L11.586 9 7.293 4.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                  clip-rule="evenodd"
                />
              </svg>
            </div>
            <div class="button-prev custom-prev">
              <svg class="text-white" fill="currentColor" viewBox="0 0 20 20">
                <path
                  fill-rule="evenodd"
                  d="M12.707 14.707a1 1 0 010-1.414L8.414 9l4.293-4.293a1 1 0 00-1.414-1.414l-5 5a1 1 0 000 1.414l5 5a1 1 0 001.414 0z"
                  clip-rule="evenodd"
                />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section md:hidden" id="works-mobile">
      <h1 class="title">Obras</h1>
      <div class="swiper works-swiper bg-dark-blue rounded-tl-xl">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="works-slide">
              <div>
                <img src="https://picsum.photos/300/200" alt="Foto obras 1" />
              </div>
              <div class="flex flex-col justify-center gap-2 text-white">
                <p class="text-sm font-bold">
                  Patrullaje permanente en la avenida manuel cuadros
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="works-slide">
              <div>
                <img src="https://picsum.photos/300/200" alt="Foto obras 2" />
              </div>
              <div class="text-white">
                <p>Patrullaje permanente en la avenida manuel cuadros</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="works-slide">
              <div>
                <img src="https://picsum.photos/300/200" alt="Foto obras 3" />
              </div>
              <div class="text-white">
                <p>Patrullaje permanente en la avenida manuel cuadros</p>
              </div>
            </div>
          </div>
        </div>
        <div class="button-next custom-next">
          <svg class="text-white" fill="currentColor" viewBox="0 0 20 20">
            <path
              fill-rule="evenodd"
              d="M7.293 14.707a1 1 0 010-1.414L11.586 9 7.293 4.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
              clip-rule="evenodd"
            />
          </svg>
        </div>
        <div class="button-prev custom-prev">
          <svg class="text-white" fill="currentColor" viewBox="0 0 20 20">
            <path
              fill-rule="evenodd"
              d="M12.707 14.707a1 1 0 010-1.414L8.414 9l4.293-4.293a1 1 0 00-1.414-1.414l-5 5a1 1 0 000 1.414l5 5a1 1 0 001.414 0z"
              clip-rule="evenodd"
            />
          </svg>
        </div>
      </div>
      <div></div>
    </section>
    <section class="section mt-5" id="photo-gallery">
      <div class="bg-dark-blue py-2 md:pt-6 md:pb-10">
        <div class="max-w-[300px] md:max-w-[900px] mx-auto">
          <h1
            class="text-white text-[14px] md:text-[32px] text-center font-bold mb-3 mt-1"
          >
            Galeria de Fotos
          </h1>
          <div class="swiper photo-gallery-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide px-[20px]">
                <img src="img/photos/foto.png" alt="Fotos Alto de Alianza 1" />
              </div>
              <div class="swiper-slide px-[20px]">
                <img src="img/photos/foto.png" alt="Fotos Alto de Alianza 2" />
              </div>
            </div>
            <div class="button-next custom-next">
              <svg class="text-white" fill="currentColor" viewBox="0 0 20 20">
                <path
                  fill-rule="evenodd"
                  d="M7.293 14.707a1 1 0 010-1.414L11.586 9 7.293 4.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                  clip-rule="evenodd"
                />
              </svg>
            </div>
            <div class="button-prev custom-prev">
              <svg class="text-white" fill="currentColor" viewBox="0 0 20 20">
                <path
                  fill-rule="evenodd"
                  d="M12.707 14.707a1 1 0 010-1.414L8.414 9l4.293-4.293a1 1 0 00-1.414-1.414l-5 5a1 1 0 000 1.414l5 5a1 1 0 001.414 0z"
                  clip-rule="evenodd"
                />
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div></div>
    </section>
    <section class="section" id="links">
      <h1 class="title md:hidden">Enlaces</h1>
      <div class="swiper links-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img class="mx-auto" src="icons/INDECOPI.svg" alt="Indecopi" />
          </div>
          <div class="swiper-slide">
            <img
              class="mx-auto"
              src="icons/CONTRALORIA.svg"
              alt="Contraloria"
            />
          </div>
          <div class="swiper-slide">
            <img class="mx-auto" src="icons/OSCE.svg" alt="Osce" />
          </div>
          <div class="swiper-slide">
            <img class="mx-auto" src="icons/SUNASS.svg" alt="Sunass" />
          </div>
        </div>

        <div class="button-next custom-next">
          <svg fill="currentColor" viewBox="0 0 20 20">
            <path
              fill-rule="evenodd"
              d="M7.293 14.707a1 1 0 010-1.414L11.586 9 7.293 4.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
              clip-rule="evenodd"
            />
          </svg>
        </div>
        <div class="button-prev custom-prev">
          <svg fill="currentColor" viewBox="0 0 20 20">
            <path
              fill-rule="evenodd"
              d="M12.707 14.707a1 1 0 010-1.414L8.414 9l4.293-4.293a1 1 0 00-1.414-1.414l-5 5a1 1 0 000 1.414l5 5a1 1 0 001.414 0z"
              clip-rule="evenodd"
            />
          </svg>
        </div>
      </div>
    </section>
 
  
    <footer class="flex flex-col">
        <div class="flex flex-col md:flex-row w-full">
          <div
            class="flex sm:flex-wrap items-center justify-center bg-[#E7E7E7] w-full md:w-4/12 gap-5 sm:gap-20 md:gap-10 lg:gap-5 px-10 md:px-8 lg:px-4 py-2 mb-1 md:mb-0"
          >
            <img
              class="w-36 md:w-40 2xl:w-56"
              src="img/logo.png"
              alt="Logo Municipalidad Alto de la Alianza"
            />
            <img
              class="w-36 md:w-40 2xl:w-56"
              src="img/logo4.png"
              alt="Logo Slogan Municipalidad Alto de la Alianza"
            />
          </div>
          <div
            class="flex flex-col md:flex-row gap-2 md:gap-8 flex-1 bg-green-light text-white p-8 md:px-16 md:py-10 text-xs md:text-base"
          >
            <div>
              <p>
                Derechos Reservados Municipalidad Distrital Alto de la Alianza
              </p>
              <p>Dirección: Av. Prolongación Pinto Nro. 1337</p>
            </div>
    
            <div>
              <p>Email: mesadepartes@munialtoalianza.gob.pe</p>
              <p>Central Telefonica: 052-311283</p>
            </div>
          </div>
        </div>
    
        <div
          class="bg-dark-blue text-white text-[0.5rem] md:text-base text-center py-0.5"
        >
          <p class="uppercase">
            Funcionario responsable: Sub gerencia de Tecnologías de la Información
            y Comunicación
          </p>
        </div>
      </footer>
    
      

    <div id="news-popup" class="popup-gallery hidden">
        <a
          href="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_b.jpg"
          title="The Cleaner"
          ><img
            src="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_s.jpg"
            width="75"
            height="75"
        /></a>
        <a
          href="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_b.jpg"
          title="Winter Dance"
          ><img
            src="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_s.jpg"
            width="75"
            height="75"
        /></a>
        <a
          href="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_b.jpg"
          title="The Uninvited Guest"
          ><img
            src="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_s.jpg"
            width="75"
            height="75"
        /></a>
        <a
          href="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_b.jpg"
          title="Oh no, not again!"
          ><img
            src="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_s.jpg"
            width="75"
            height="75"
        /></a>
        <a
          href="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_b.jpg"
          title="Swan Lake"
          ><img
            src="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_s.jpg"
            width="75"
            height="75"
        /></a>
        <a
          href="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_b.jpg"
          title="The Shake"
          ><img
            src="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_s.jpg"
            width="75"
            height="75"
        /></a>
        <a
          href="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_b.jpg"
          title="Who's that, mommy?"
          ><img
            src="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_s.jpg"
            width="75"
            height="75"
        /></a>
      </div>
    
      
      <script
        src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
        crossorigin="anonymous"
      ></script>
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
      
    
      <script src="{{ '/js/slides/homepage.min.js'}}"></script>
      <script src="{{ '/js/main.min.js'}}"></script>
    </body>
    </html>