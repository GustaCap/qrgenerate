<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
      <div class="dark:bg-black p-10 flex items-center justify-center">
        <div class="bg-white dark:bg-gray-800 border-gray-200 dark:border-gray-800 p-4 rounded-xl border max-w-xl">
          <div class="flex justify-between">
            <div class="flex items-center">
    
                @foreach ($datas as $item)
                {{QrCode::size(60)->generate("http://127.0.0.1:8000/sanitizaciones/".$item->id)}}
    
                
              <div class="ml-1.5 text-sm leading-tight">
    
                <span class="text-2xl leading-normal mt-0 ml-4 text-green-800 font-bold block ">{{ $item->nombrecliente }}</span>
                {{-- <span class="text-gray-500 dark:text-gray-400 font-normal block">Tipo de Sanitizacion: {{ $item->servicio }}</span> --}}
              </div>
            </div>
            {{--  <svg class="text-blue-400 dark:text-white h-6 w-auto inline-block fill-current" viewBox="0 0 24 24"><g><path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path></g></svg>  --}}
          </div>
          <p class=" text-green-800 font-bold dark:text-white block text-xl leading-snug mt-6">Tipo de Sanitizacion: {{ $item->servicio }}</p>
          @if ($item->servicio == 'covisol')
          <img class="mt-2 rounded-2xl border border-gray-100 dark:border-gray-700 mb-6" src="{{ asset('image/covisolRender.png') }}"/>
          @endif
          @if ($item->servicio == 'ozono')
          <img class="mt-2 rounded-2xl border border-gray-100 dark:border-gray-700 mb-6" src="{{ asset('image/hero_sanity.jpg') }}"/>
          @endif
          @if ($item->servicio == 'ozono+covisol')
          <img class="mt-2 rounded-2xl border border-gray-100 dark:border-gray-700 mb-6" src="{{ asset('image/ozoneCovisol.jpg') }}"/>
          @endif
    
          {{-- <img class="mt-2 rounded-2xl border border-gray-100 dark:border-gray-700 mb-6" src="{{ asset('image/ozoneCovisol.jpg') }}"/> --}}
          {{-- <p class="text-gray-500 dark:text-gray-400 text-base py-1 my-0.5">{{ $item->fechainicio }}</p> --}}
          @endforeach
          <div class="border-gray-200 dark:border-gray-600 border border-b-0 my-1"></div>
          <div class="text-gray-500 dark:text-gray-400 flex mt-6 items-center justify-center">
                <div class="dark:bg-black p-10 items-center justify-center shadow block content-center">
                    <span class="text-2xl ml-3 block text-center text-green-800 font-bold">Inicio Sanitizacion</span>
                    <img class="mt-2 rounded-2xl mb-6" src="https://cdn5.vectorstock.com/i/thumb-large/71/04/q-letter-green-logo-with-check-mark-inside-vector-30257104.jpg"/>
    
                    <span class="text-2xl ml-3 block text-center text-green-800 font-bold">{{ $item->fechainicio }}</span>
                </div>
                <div class="dark:bg-black p-10 items-center justify-center shadow block">
                  <span class="text-2xl ml-3 block text-center text-yellow-500 font-bold">Vencimiento Sanitizacion</span>
                  <img class="mt-2 rounded-2xl mb-6" src="https://icons.iconarchive.com/icons/3dlb/3d-vol2/256/warning-icon.png"/>
                  <span class="text-2xl ml-3 block text-center text-yellow-500 font-bold">{{ $item->fechafin }}</span>
                </div>
                {{-- <img class="w-17 h-17" viewbox="0 0 48 48" src="{{ asset('image/logoPG_login.png') }}" /> --}}
          </div>
        </div>





        
      </div>
    </body>
</html>
