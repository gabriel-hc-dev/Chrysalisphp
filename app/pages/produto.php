<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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

    #tamanho:hover {
      background-color: #FE980A;
    }

    #btn_carrinho {
      background-color: rgb(232, 128, 13)
    }

    #btn_carrinho:hover {
      background-color: #f97316;
    }

    #btn_avaliar {
      background-color: #E8800D;
    }

    #btn_avaliar:hover {
      background-color: #f97316;
    }
  </style>
</head>

<body class="bg-white text-gray-900">
  <?php
  include("header.php");
  ?>
  <main>
    <section class="flex items-center justify-center min-h-screen">
      <!-- Container -->
      <div class="container mx-auto p-6">
        <!-- Detalhamento do produto -->
        <div class="flex flex-col items-center justify-center md:flex-row md:justify-center md:space-x-12 gap-4 mb-8">

          <!-- Imagem do produto -->

          <img class="w-5/6 m-8" src="https://via.placeholder.com/500" alt="Camiseta Branca"
            style="height:500px; width: 500px;">


          <!-- Detalhes do produto -->
          <div class="md:w-1/2 mt-6 md:mt-0">
            <h1 class="text-3xl font-bold text-start md:text-left">Camiseta Branca Masculina</h1>
            <p class="text-zinc-400 text-lg mt-4 text-start md:text-left">⭐ 4.8 (120 Avaliações)</p>
            <p class="text-4xl font-bold mt-4 text-start md:text-left">R$ 49,99</p>

            <!-- Opções de Tamanhos -->
            <div class="mt-6">
              <h2 class="text-lg font-semibold text-start md:text-left">Tamanhos Disponíveis:</h2>
              <div class="flex justify-start space-x-2 mt-2">
                <button id="tamanho"
                  class="py-2 px-4 text-black rounded-full border-2 border-yellow-700 hover:bg-orange-500 transition duration-300">PP</button>
                <button id="tamanho"
                  class="py-2 px-4 text-black rounded-full border-2 border-yellow-700 hover:bg-orange-500 transition duration-300">P</button>
                <button id="tamanho"
                  class="py-2 px-4 text-black rounded-full border-2 border-yellow-700 hover:bg-orange-500 transition duration-300">M</button>
                <button id="tamanho"
                  class="py-2 px-4 text-black rounded-full border-2 border-yellow-700 hover:bg-orange-500 transition duration-300">G</button>
                <button id="tamanho"
                  class="py-2 px-4 text-black rounded-full border-2 border-yellow-700 hover:bg-orange-500 transition duration-300">GG</button>
              </div>
            </div>

            <!-- Opções de Entrega -->
            <div class="mt-6">
              <h2 class="text-lg font-semibold text-start md:text-left">Opções de Entrega:</h2>
              <div class="flex flex-col space-y-2 mt-2 text-start md:text-left">
                <div class="relative z-0 my-2">
                  <input type="text" id="cep"
                    class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-orange-500 focus:outline-none focus:ring-0  focus:border-orange-500 peer"
                    placeholder=" " />
                  <label for="cep"
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-orange-500 peer-focus:dark:text-orange-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Digite
                    seu CEP</label>
                </div>
                <div class="flex items-center justify-start md:justify-start">
                  <input type="radio" name="shipping" id="shipping"
                    class="w-4 h-4 text-orange-500 focus:ring-0 focus:ring-orange-500 ">
                  <label for="shipping" class="ml-2">Envio Padrão - R$ 10,00 (Chega em 5-7 dias úteis)</label>
                </div>
                <div class="flex items-center justify-start md:justify-start">
                  <input type="radio" name="shipping" id="express"
                    class="w-4 h-4 text-orange-500 focus:ring-0 focus:ring-orange-500 ">
                  <label for="express" class="ml-2">Envio Expresso - R$ 20,00 (Chega em 2-3 dias úteis)</label>
                </div>
              </div>
            </div>


            <!-- Botão de Adicionar ao Carrinho -->
            <div class="mt-6">
              <button id="btn_carrinho"
                class="w-full py-4 text-white font-bold rounded-lg transition-all duration-300">Adicionar ao
                Carrinho</button>
            </div>
          </div>
        </div>

        <!-- Adicionar Avaliação -->
        <div class="mt-12 mb-8">
          <h2 class="text-2xl font-bold text-center">Adicionar Avaliação</h2>
          <div class="flex flex-col items-center space-y-4 mt-2">
            <!-- Avaliação por Estrelas -->
            <div class="flex space-x-1">
              <button class="text-gray-400 hover:text-orange-500"><i class="fas fa-star"></i></button>
              <button class="text-gray-400 hover:text-orange-500"><i class="fas fa-star"></i></button>
              <button class="text-gray-400 hover:text-orange-500"><i class="fas fa-star"></i></button>
              <button class="text-gray-400 hover:text-orange-500"><i class="fas fa-star"></i></button>
              <button class="text-gray-400 hover:text-orange-500"><i class="fas fa-star"></i></button>
            </div>
            <!-- Caixa de Comentário -->
            <textarea class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-500"
              placeholder="Adicione um comentário (opcional)"></textarea>

            <!-- Botão de Enviar Avaliação -->
            <button id="btn_avaliar"
              class="px-12 py-4 w-full text-white font-bold rounded-lg transition-all duration-300">Enviar
              Avaliação</button>
          </div>
        </div>

        <!-- Aba de comentários -->
        <div class="mt-12">
          <h2 class="text-2xl font-bold text-center">Comentários</h2>

          <!-- Botões de Filtro -->
          <div class="flex justify-center space-x-2 mt-4">
            <button class="py-2 px-4 bg-gray-200 rounded-lg hover:bg-gray-300 duration-500">Todas</button>
            <button class="py-2 px-4 bg-gray-200 rounded-lg hover:bg-gray-300 duration-500">5 Estrelas</button>
            <button class="py-2 px-4 bg-gray-200 rounded-lg hover:bg-gray-300 duration-500">4 Estrelas</button>
            <button class="py-2 px-4 bg-gray-200 rounded-lg hover:bg-gray-300 duration-500">3 Estrelas</button>
            <button class="py-2 px-4 bg-gray-200 rounded-lg hover:bg-gray-300 duration-500">2 Estrelas</button>
            <button class="py-2 px-4 bg-gray-200 rounded-lg hover:bg-gray-300 duration-500">1 Estrela</button>
          </div>

          <!-- Exemplo de Comentário -->
          <div class="mt-6">
            <div class="p-4 border-b border-gray-300">
              <div class="flex justify-between">
                <div>
                  <h3 class="font-bold">Cliente Exemplo</h3>
                  <p class="text-sm text-gray-500">Publicado em 24/09/2024</p>
                </div>
                <div class="flex">
                  <span class="text-orange-500">⭐️⭐️⭐️⭐️⭐️</span>
                </div>
              </div>
              <p class="mt-2 text-gray-700">Produto excelente! Chegou rápido e a qualidade é ótima. Recomendo!</p>
            </div>

            <div class="p-4 border-b border-gray-300">
              <div class="flex justify-between">
                <div>
                  <h3 class="font-bold">Outro Cliente</h3>
                  <p class="text-sm text-gray-500">Publicado em 20/09/2024</p>
                </div>
                <div class="flex">
                  <span class="text-orange-500">⭐️⭐️⭐️⭐️</span>
                </div>
              </div>
              <p class="mt-2 text-gray-700">Bom produto, mas demorou um pouco para chegar.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
  <?php
  include("footer.php");
  ?>
</body>

</html>