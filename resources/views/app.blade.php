<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laracasts assets</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/styles.css">



    </head>
    <body class="font-sans">
    <div id="app">
        <header class="p-6 mb-8">
            <h1><img src="/images/logo.svg" alt="Laracasts"> </h1>
        </header>
    <div class="container px-6">


        <main class="flex">
            <aside class="w-64 pt-10">
             <section class="mb-10">
                 <h5 class="uppercase font-bold mb-3 text-base">The Brand</h5>
                 <ul class="list-reset">
                     <li class="text-sm leading-loose"> <router-link class="text-black" active-class="font-bold"  to="/" exact >Logo</router-link></li>
                     <li class="text-sm leading-loose"> <router-link class="text-black" active-class="font-bold"  to="/logo-symbol">Logo Symbol</router-link></li>
                     <li class="text-sm leading-loose"> <router-link class="text-black" active-class="font-bold"  to="/colors">Colors</router-link></li>
                     <li class="text-sm leading-loose"> <router-link class="text-black" active-class="font-bold"  to="/typograpgy">Typography</router-link></li>

                 </ul>
             </section>
            <section class="mb-10">
                <h5 class="uppercase font-bold mb-3 text-base">Doodles</h5>
                <ul class="list-reset">
                    <li class="text-sm leading-loose"> <router-link class="text-black"  active-class="font-bold" to="/mascot">Mascot</router-link></li>
                    <li class="text-sm leading-loose"> <router-link class=text-black"  active-class="font-bold" to="/illustrations">Illustrations</router-link></li>
                    <li class="text-sm leading-loose"> <router-link class=text-black"  active-class="font-bold" to="/loaders-and-animations">Loaders & Animatons</router-link></li>
                    <li class="text-sm leading-loose"> <router-link class=text-black"  active-class="font-bold" to="/wallpapers">Wallpapers</router-link></li>
                </ul>
            </section>

                <section class="mb-10">
                    <h5 class="uppercase font-bold mb-3 text-base">Stats</h5>
                    <ul class="list-reset">
                        <li class="text-sm leading-loose"> <router-link class="text-black"  active-class="font-bold" to="/site-stats">Site Stats</router-link></li>
                       </ul>
                </section>

            </aside>
        <div class="primary flex-1">
            <router-view></router-view>

        </div>
        </main>

        </div>
    </div>
    <script src="/js/app.js">

    </script>
    </body>
</html>
