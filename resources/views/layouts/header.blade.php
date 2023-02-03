<!-- En tête -->
<header>
    <nav>
        <!-- Action sur le bouton menu -->
        <div x-data="{ open: false }">
            <!-- Contenu du bouton menu a derouler -->
            <div x-show="open" class="sm:flex sm:justify-around p-4 text-white bg-cyan-800">
                <div class="max-w-sm">
                    <h2 class="text-xl font-bold mb-2">About</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque minima omnis, tempore dicta consequuntur
                        assumenda exercitationem alias ipsam accusantium beatae!</p>
                </div>
                <div>
                    <h2 class="text-xl font-bold mb-3">Contact</h2>
                    <p>
                        <a href="#" class="hover:underline flex items-center gap-2">
                            <svg class="fill-white hover:fill-yellow-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-.139 9.237c.209 4.617-3.234 9.765-9.33 9.765-1.854 0-3.579-.543-5.032-1.475 1.742.205 3.48-.278 4.86-1.359-1.437-.027-2.649-.976-3.066-2.28.515.098 1.021.069 1.482-.056-1.579-.317-2.668-1.739-2.633-3.26.442.246.949.394 1.486.411-1.461-.977-1.875-2.907-1.016-4.383 1.619 1.986 4.038 3.293 6.766 3.43-.479-2.053 1.08-4.03 3.199-4.03.943 0 1.797.398 2.395 1.037.748-.147 1.451-.42 2.086-.796-.246.767-.766 1.41-1.443 1.816.664-.08 1.297-.256 1.885-.517-.439.656-.996 1.234-1.639 1.697z"/></svg>
                            Follow on Twitter
                        </a><br>
                        <a href="#" class="hover:underline flex items-center gap-2">
                            <svg class="fill-white hover:fill-yellow-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                            Like on Facebook
                        </a><br>
                        <a href="#" class="hover:underline flex items-center gap-x-2">
                            <svg class="fill-white hover:fill-yellow-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M22 5v14h-20v-14h20zm2-2h-24v18h24v-18zm-2 16l-6.526-6.618-3.445 3.483-3.418-3.525-6.611 6.66 5.051-8-5.051-6 10.029 7.446 9.971-7.446-4.998 6.01 4.998 7.99z"/></svg>
                            Email me
                        </a>
                    </p>
                </div>
            </div>

            <!-- Menu -->
            <ul class="flex justify-around p-4 text-white bg-cyan-800">
                <li>
                    <a href="#" class="flex items-center text-xl font-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                        Mon T-Shirt
                    </a>
                </li>
                <li>
                    <a href="#">
                        <button x-on:click="open = ! open"> <!--  class="border border-solid border-white p-2 rounded-md" -->
                            <!-- <img src="../dist/Icons/Set 3/PNG/13.png" alt="" class="w-6"> -->
                            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="32" height="24" style="shape-rendering:geometricPrecision;text-rendering:geometricPrecision;image-rendering:optimizeQuality;fill-rule:evenodd;clip-rule:evenodd" viewBox="0 0 6.827 6.827"><defs><style>.fil0{fill:none}.fil2{fill:#fbc02d}</style></defs><g id="Layer_x0020_1"><g id="_486847888"><path id="_486848464" class="fil0" d="M0 0h6.827v6.827H0z"/><path id="_486848008" class="fil0" d="M.853.853h5.12v5.12H.853z"/></g><path d="M1.123 3.144h4.58a.27.27 0 0 1 0 .539h-4.58a.27.27 0 0 1 0-.54z" style="fill:#f44336"/><path class="fil2" d="M1.123 5.165h4.58a.27.27 0 0 1 0 .539h-4.58a.27.27 0 0 1 0-.54zM1.123 1.123h4.58a.27.27 0 0 1 0 .539h-4.58a.27.27 0 0 1 0-.54z"/></g></svg>
                        </button>
                    </a>
                </li>
                <li class="text-normal text-cyan-500 hover:text-cyan-100">
                    <a href="#" class="flex items-center gap-2 fill-cyan-500 hover:fill-cyan-100">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10.975 8l.025-.5c0-.517-.066-1.018-.181-1.5h5.993l-.564 2h-5.273zm-2.475 10c-.828 0-1.5.672-1.5 1.5 0 .829.672 1.5 1.5 1.5s1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm11.305-15l-3.432 12h-10.428l-.455-1.083c-.324.049-.652.083-.99.083-.407 0-.805-.042-1.191-.114l1.306 3.114h13.239l3.474-12h1.929l.743-2h-4.195zm-6.305 15c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm-9-15c-2.486 0-4.5 2.015-4.5 4.5s2.014 4.5 4.5 4.5c2.484 0 4.5-2.015 4.5-4.5s-2.016-4.5-4.5-4.5zm-.469 6.484l-1.687-1.636.695-.697.992.94 2.115-2.169.697.696-2.812 2.866z"/></svg>
                        Panier
                    </a>
                </li>
            </ul>
        </div>

        <!-- Sous menu -->
        <div>
            <ul class="p-4 sm:flex sm:items-end justify-center gap-4 text-md text-white font-semibold bg-red-500">
                <li><a href="#" class="hover:text-yellow-300">Films</a></li>
                <li><a href="#" class="hover:text-yellow-300">Séries TV</a></li>
                <li><a href="#" class="hover:text-yellow-300">Musique</a></li>
                <li><a href="#" class="hover:text-yellow-300">Jeux-vidéos</a></li>
                <li><a href="#" class="hover:text-yellow-300">Sport</a></li>
            </ul>
        </div>

