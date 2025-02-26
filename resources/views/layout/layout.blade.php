<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-200">
    <nav class="block w-full max-w-screen-xl px-4 py-2 mx-auto bg-gray-100 shadow-md rounded-md lg:px-8 lg:py-3 mt-10">
        <div class="container flex flex-wrap items-center justify-between mx-auto text-slate-800">
          <a href="/" class="mr-4 block cursor-pointer py-1.5 text-base text-slate-800 font-semibold">
            Mis notas
          </a>
       
          <div class="hidden lg:block">
            <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
              <li class="flex items-center p-1 text-sm gap-x-2 text-slate-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-slate-500">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                </svg>
       
                <a href="/anotations/create" class="flex items-center">
                  Crear nota
                </a>
              </li>
              <li class="flex items-center p-1 text-sm gap-x-2 text-slate-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-slate-500">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
                </svg>
       
                <a href="/" class="flex items-center">
                  Mis notas
                </a>
              </li>
              {{-- <li
              class="flex items-center p-1 text-sm gap-x-2 text-slate-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-slate-500">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                </svg>
       
                <a href="#" class="flex items-center">
                  Docs
                </a>
              </li> --}}
            </ul>
          </div>
          <button class="relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] select-none rounded-lg text-center align-middle text-xs font-medium uppercase text-inherit transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden" type="button">
            <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
            </span>
          </button>
        </div>
      </nav>

      {{-- <div class="flex justify-center flex-grow mx-10 py-10"> --}}
        @yield('contenido')
     {{-- </div> --}}
      <footer class="flex flex-row flex-wrap items-center justify-center w-full py-6 pr-10  text-center   gap-y-m gap-x-12  md:justify-between fixed bottom-0 bg-transparent">
        <p class="block text-slate-800 font-semibold text-sm px-10">
        Agenda
        </p>
        <ul class="flex flex-wrap items-center gap-y-2 gap-x-8">
          <li>
        <a href="#" class="text-slate-700 hover:text-slate-500 focus:text-slate-500 text-sm">
          Sobre nosotros
        </a>
          </li>
          <li>
        <a href="#" class="text-slate-700 hover:text-slate-500 focus:text-slate-500 text-sm">
          Licencia
        </a>
          </li>
          <li>
        <a href="#" class="text-slate-700 hover:text-slate-500 focus:text-slate-500 text-sm">
          Contribuir
        </a>
          </li>
          <li>
        <a href="#" class="text-slate-700 hover:text-slate-500 focus:text-slate-500 text-sm">
          Contacto
        </a>
          </li>
        </ul>
      </footer> 
</body>
</html>