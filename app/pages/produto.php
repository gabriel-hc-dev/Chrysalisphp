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
<?php
include("header.php");
?>
<body class="bg-white text-gray-800">
    <div class="container mx-auto p-6">
        <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div class="md:flex">
                <div class="md:flex-shrink-0">
                    <img class="h-64 w-full object-cover md:w-64" src="https://via.placeholder.com/300" alt="Produto">
                </div>
                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-orange-500 font-semibold">Nova Coleção</div>
                    <h1 class="block mt-1 text-lg leading-tight font-medium text-black">Nome do Produto</h1>
                    <p class="mt-2 text-gray-500">Descrição breve do produto. Detalhes sobre o material, estilo e outras informações relevantes.</p>
                    <div class="mt-4">
                        <span class="text-gray-700">Tamanhos:</span>
                        <div class="mt-2">
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="size" value="PP">
                                <span class="ml-2">PP</span>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input type="radio" class="form-radio" name="size" value="P">
                                <span class="ml-2">P</span>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input type="radio" class="form-radio" name="size" value="M">
                                <span class="ml-2">M</span>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input type="radio" class="form-radio" name="size" value="G">
                                <span class="ml-2">G</span>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input type="radio" class="form-radio" name="size" value="GG">
                                <span class="ml-2">GG</span>
                            </label>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600">Adicionar ao Carrinho</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>


</html>