<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/assets/images/White_Butterfly.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link href="./output.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../../public/assets/images/White_Butterfly.png">
    <title>Chrysalis - Sua loja preferida</title>
    <style>
        @keyframes butterfly-flying {
            0% {
                transform: scaleX(1);
            }

            50% {
                transform: scaleX(0.6);
            }

            100% {
                transform: scaleX(1);
            }
        }

        #butterfly_img {
            transition: all 2s ease;
        }

        #butterfly_img:hover {
            animation-name: butterfly-flying;
            animation-duration: 0.8s;
            animation-iteration-count: infinite;
        }
    </style>
</head>

<body>
    <?php
    include("header.php");
    ?>
    <main>
        <section class="flex justify-center p-4">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0" style="width: 50%">

                <div
                    class="w-full bg-white rounded-lg shadow dark:border md:mt-0 py-8 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Registro de usuário
                        </h1>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Já tem uma conta? <a href="#"
                                class="font-medium text-yellow-500  hover:underline dark:text-primary-500">Entrar</a>
                        </p>
                        <form class="space-y-4 md:space-y-6" action="#">
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-600 dark:focus:border-orange-600"
                                    placeholder="nome@empresa.com" required="">
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Senha</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-600 dark:focus:border-orange-600"
                                    required="">
                            </div>
                            <div>
                                <label for="confirm-password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmar Senha</label>
                                <input type="confirm-password" name="confirm-password" id="confirm-password"
                                    placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-600 dark:focus:border-orange-600"
                                    required="">
                            </div>
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="terms" aria-describedby="terms" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-orange-600 dark:ring-offset-gray-800"
                                        required="">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="terms" class="font-light text-gray-500 dark:text-gray-300">Eu aceito os <a
                                            class="font-medium text-yellow-500 hover:underline dark:text-primary-500"
                                            href="#">Termos e Condições</a></label>
                                </div>
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-yellow-500 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 hover:bg-orange-600 transition-all ">Criar
                                conta</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
    include("footer.php");
    ?>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>

</body>

</html>