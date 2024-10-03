<header class="bg-yellow-500">
    <nav class="border-gray-200 dark:bg-gray-900 bg-yellow-500">
        <div class="max-w-screen-xl grid grid-cols-1 lg:grid-cols-3 items-center mx-auto p-4 gap-4">
            <!-- Logo Section -->
            <div class="flex items-center space-x-3 rtl:space-x-reverse lg:col-span-1">
                <a href="index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img id="butterfly_img" src="../../public/assets/images/White_Butterfly.png" class="h-8"
                        alt="Chrysalis Logo Borboleta" />
                </a>
                <a href="index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="../../public/assets/images/White_Chrysalis.png" class="h-8" alt="Chrysalis Logo Texto" />
                </a>
            </div>

            <!-- Search Bar Section -->
            <form class="max-w-md bg-yellow-500 focus:shadow rounded-full mx-auto lg:col-span-1 relative hidden lg:block"
                style="min-width: 26vw;">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Pesquisar..." required />
                </div>
            </form>

            <!-- Menu Button for Small Screens -->
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-700 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 lg:col-span-1"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>

            <!-- Menu Section -->
            <div class="hidden w-full md:block md:w-auto bg-yellow-500 float-left"
                id="navbar-default">
                <ul class="font-medium flex flex-col justify-end flex p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-orange-500 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

                    <li>
                        <a href="index.php"
                            class="block py-2 px-3 rounded md:hover:bg-transparent md:border-0 md:p-0 md:dark:hover:bg-transparent text-white transition-colors duration-300 hover:text-gray-700">Início</a>
                    </li>
                    <li>
                        <a href="about.php"
                            class="block py-2 px-3 rounded md:hover:bg-transparent md:border-0 md:p-0 md:dark:hover:bg-transparent text-white transition-colors duration-300 hover:text-gray-700">Sobre</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 rounded md:hover:bg-transparent md:border-0 md:p-0 md:dark:hover:bg-transparent transition-colors hover:text-gray-900 "><img
                                src="../../public/assets/images/icons/cart.svg" alt="Carrinho"
                                style="filter: invert(100%)"></a>
                    </li>
                    <li>
                        <a href="login.php"
                            class="block py-2 px-3 rounded md:hover:bg-transparent md:border-0 md:p-0 md:dark:hover:bg-transparent transition-colors hover:text-gray-900 "><img
                                src="../../public/assets/images/icons/account.svg" alt="Perfil"
                                style="filter: invert(100%)"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>