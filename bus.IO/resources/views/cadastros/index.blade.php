<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
   
    <style>
@import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: "Montserrat", sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;

}

header {
    color: white;
    padding: 0;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    
}


nav ul {
    list-style: none;
    display: flex;
    justify-content: end;
    gap: 20px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 15px;
    
}


.hero {
    padding: 50px 20px;
    color: white;
  
}

#home {
    background: url('/bus-img-1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center ;
 
}

.hero h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    text-shadow: black 1px 0 20px;
    
}

.hero p {
    font-size: 1.2rem;
    text-shadow: black 1px 0 20px;
}

main {
    padding: 20px;
    margin: auto;
    width: 60%;
}

.content {
    margin-bottom: 40px;
    padding: 20px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    
}


.content h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
    color: #333;
    text-align: center;
}

.content p {
    font-size: 1.1rem;
    line-height: 1.6;
    
}


footer {
    text-align: center;
    padding: 20px;
    background-color: #333;
    color: white;
    margin-top: 20px;

}
#menu {
    list-style: none;
    display: flex;
    gap: 20px;
}

#hamburger {
    display: none;
    font-size: 30px;
    cursor: pointer;
}

#importancia {
    background: url('/bus-img-2.jpg') ;
    background-position: center right;
    background-size: cover;
    background-attachment: fixed;
    text-align: center;
}

#importancia p  {
    display: inline-block;
    padding: 5px;
    background-color: rgba(0, 0, 0, 0.414);
    text-shadow: 1px 1px 0px black;
    color: white;
    border-radius: 10px;
}

#importancia h2  {
    display: inline-block;
    padding: 5px;
    background-color: rgba(0, 0, 0, 0.414);
    text-shadow: 1px 1px 0px black;
    color: white;
    border-radius: 10px;
}


.accordion-item {
    margin-bottom: 10px;
    
}
.accordion-header {
    background-image: linear-gradient(to right, rgb(37,99,235), rgb(59,130,246));
    color: white;
    padding: 15px;
    font-size: 1.2rem;
    border-radius: 5px;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: 1.9s;
    
}
.accordion-header:hover {
    background-image: linear-gradient(to right, rgb(59,130,246), rgb(37,99,235));
    border-radius: 20px;
    transition: 0.3s;

    
}
.accordion-content {
    padding: 15px;
    background-color: #f8f9fa;
    display: none;
    border-left: 2px solid #007bff;
    border-right: 2px solid #007bff;
    border-bottom: 2px solid #007bff;
    border-radius: 20px;
    
}
.icon {
    font-size: 1.5rem;
}

#whats{
    position: fixed;
    bottom: 6%;
    left: 90%;
}

#contato{
    display: none;
}

@media (max-width: 690px) {
    nav ul {
        flex-direction: column;
    }
    
    main{
        margin: auto;
        width: 90%;
    }

    header{
        text-align: center;
    }


    .hero h1 {
        font-size: 2rem;
    }

    .content {
        margin-bottom: 20px;
    }

    .content h2 {
        font-size: 1.5rem;
    }

    
    #menu {
        display: none;
        flex-direction: column;
        width: 100%;
        background-color: #333;
        position: absolute;
        top: 60px;
        left: 0;
        padding: 20px;
    }

    #menu.active {
        display: flex;
    }
    #hamburger {
        display: block;
    }
    #contato{
        display: block;
        width: 100px;
        margin: auto;
    }
    #whats{
        display: none;
    }
}
    </style>
</head>
<body>

    <header class="pt-0 bg-gradient-to-r from-blue-800 to-blue-700 hover:from-blue-700 hover:to-blue-800 relative">
        
        <nav class="bg-blue-950 border-b-2 h-16">
            <ul class="pt-4" id="menu">
                <li id="logo" class="absolute top-2 left-2 animate-pulse"><img src="/logo-bus-cortado.png" alt="onibus" width="65px"></li>
                
                <li><a href="#home" class=" hover:text-slate-900 hover:bg-green-500 transition duration-500 ease-in-out p-1 rounded ">Início</a></li>

                <li><a href="#historia" class=" hover:text-slate-900 hover:bg-green-500 transition duration-500 ease-in-out p-1 rounded ">História do Tema</a></li>


                <li><a href="#menuFunc" class=" hover:text-slate-900 hover:bg-green-500 transition duration-500 ease-in-out p-1 rounded ">Funcionalidades</a></li>

                <li><a href="/cadastros/cadastro"  class=" hover:text-slate-900 hover:bg-green-500 transition duration-500 ease-in-out p-1 rounded ">Cadastro</a></li>

                <li><a href="{{ route('login') }}"  class=" hover:text-slate-900 hover:bg-green-500 transition duration-500 ease-in-out p-1 rounded ">Minha Conta</a></li>

                <li><a href="https://wa.me/5513991225846"  class=" hover:text-slate-900 hover:bg-green-500 transition duration-500 ease-in-out p-1 rounded" id="contato">Contato</a></li>

            </ul>
            <div id="hamburger">&#9776;</div>
        </nav>
        
        <section id="home" class="hero"> 
            <div>
                <h1 class="text-9xl text-center font-semibold text-neutral-100 hover:text-green-500">BUS.IO</h1>
                <br>
                <p class=" text-neutral-100 font-semibold  hover:text-green-500">Explore nossa jornada e saiba mais sobre o desenvolvimento deste projeto.</p>
            </div>
        </section>
    </header>

    <main>
        <section id="historia" class="content">
            <h2>Sobre o Aplicativo</h2>
                <p class="text-justify">
        O aplicativo é uma solução completa para facilitar a vida dos usuários
        que dependem do transporte público. Ele oferece recursos como localização dos
        pontos de ônibus, consulta dos próximos horários e valores de passagem, previsão de
        chegada do ônibus. Além disso, os usuários podem carregar um passe mensalmente,
        válido para utilizar em qualquer ônibus de qualquer cidade, tornando o processo mais
        conveniente e econômico
                </p>
        </section>

        <section id="ideia" class="content">
            <h2>Como Surgiu a Ideia</h2>
            <p>A criação de um aplicativo voltado para os usuários de transporte público revelou-se indispensável. Através de pesquisas, identificamos que a maioria dos passageiros enfrenta ou já enfrentou dificuldades ao utilizar o transporte coletivo, como chegar atrasado ou não saber o horário exato em que o ônibus passará no ponto</p>
        </section>

        <section id="menuFunc" class="content">
        <h2>Funcionalidades</h2>
        <div class="w-auto h-auto bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-600 m-3 p-2 rounded-lg shadow-xl text-center text-slate-100 hover:rounded-3xl transition-all hover:transition-all duration-1000 ">
            <h1><b>Localização de Pontos de Ônibus</b></h1>
            <p>Os usuários podem facilmente encontrar os
                pontos de ônibus mais próximos de sua localização atual usando o aplicativo.
            </p>
        </div>

        <div class="w-auto h-auto bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-600 m-3 p-2  rounded-lg shadow-xl text-center  text-slate-100 hover:rounded-3xl transition-all hover:transition-all duration-1000 ">
            <h1><b>Consulta de Horários</b></h1>
            <p>Os horários de partida e chegada dos ônibus estão disponíveis
            para consulta, permitindo que os usuários planejem suas viagens com antecedência.
            </p>
        </div>

        <div class="w-auto h-auto bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-600 m-3 p-2 text-center rounded-lg shadow-xl  text-slate-100 hover:rounded-3xl transition-all hover:transition-all duration-1000 ">
            <h1><b>Valores de Passagem</b></h1>
            <p>Os preços das passagens de ônibus são exibidos no aplicativo,
            ajudando os usuários a gerenciarem seus gastos com transporte.
            </p>
        </div>

        <div class="w-auto h-auto bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-600 m-3 p-2 text-center rounded-lg shadow-xl text-slate-100 hover:rounded-3xl transition-all hover:transition-all duration-1000 ">
            <h1><b>Compra de Passagem Online</b></h1>
            <p>O aplicativo oferece a conveniência de comprar
            passagens de ônibus diretamente pelo smartphone, eliminando a necessidade
            de filas e pagamento em dinheiro.
            </p>
        </div>

        <div class="w-auto h-auto bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-500 hover:to-blue-600 m-3 p-2 text-center rounded-lg shadow-xl  text-slate-100 hover:rounded-3xl transition-all hover:transition-all duration-1000 ">
            <h1><b>Passe Mensal</b></h1>
            <p> Os usuários têm a opção de carregar um passe mensal, válido para
            uso em qualquer ônibus de qualquer cidade atendida pelo serviço, proporcionando
            economia e flexibilidade.
            </p>
        </div>
        </section>

        
        <section class="content" id="importancia">
            <h2>A Importância do Transporte Público</h2>
            <p class="bg-slate-400">O transporte público facilita deslocamentos urbanos e é uma opção econômica e acessível. Os usuários escolhem entre transporte próprio ou público, considerando fatores como tempo, conforto, acessibilidade, segurança e custo. O tempo de viagem depende do tráfego e da velocidade, sendo o ônibus uma das principais opções.</p>
        </section>


        <section class="content">
        <h2>Guia Completo - BUS.IO</h2>
        
        <!-- Seção 1 -->
        <div class="accordion-item" >
            <div class="accordion-header" onclick="toggleAccordion(0)" >
                Cadastro e Login
                <span class="icon">+</span>
            </div>
            <div class="accordion-content" >
                <li>Ao abrir o app pela primeira vez, crie uma conta com seu e-mail ou vincule seu login com redes sociais.</li>  <li>Após o cadastro, faça login para acessar todas as funcionalidades.</li>
            </div>
        </div>

        <!-- Seção 2 -->
        <div class="accordion-item">
            <div class="accordion-header" onclick="toggleAccordion(1)">
                Localização de Pontos de Ônibus
                <span class="icon">+</span>
            </div>
            <div class="accordion-content" >
            <li><b>Acesse o Mapa:</b> Na tela inicial, clique no ícone de mapa.</li>
            <li>O aplicativo usará a localização GPS do seu smartphone para identificar os pontos de ônibus mais próximos.</li>
            <li>Clique em um ponto de ônibus no mapa para ver os horários e rotas dos ônibus que passam por ali.</li>
            </div>
        </div>

        <!-- Seção 3 -->
        <div class="accordion-item">
            <div class="accordion-header" onclick="toggleAccordion(2)">
                Consulta de Rotas e Horários
                <span class="icon">+</span>
            </div>
            <div class="accordion-content">
            <li><b>Escolha sua Rota:</b> No menu principal, selecione a opção "Rotas".</li>
            <li>Insira o ponto de partida e destino para visualizar as opções de ônibus disponíveis.</li>
            <li>O aplicativo exibirá as rotas recomendadas e o tempo estimado de chegada de cada ônibus.</li>
            <li><b>Horários:</b> Além disso, ao clicar em uma rota, você pode ver os horários dos ônibus e planejar sua viagem com antecedência.</li>
            </div>
        </div>

        <!-- Seção 4 -->
        <div class="accordion-item">
            <div class="accordion-header" onclick="toggleAccordion(3)">
                Preços de Passagens
                <span class="icon">+</span>
            </div>
            <div class="accordion-content">
            <li><b>Verificar Preços:</b> Ao consultar uma rota, o aplicativo também mostra o valor da passagem.</li>
            </div>
        </div>

        <!-- Seção 5 -->
        <div class="accordion-item">
            <div class="accordion-header" onclick="toggleAccordion(4)">
                Compra de Passagem
                <span class="icon">+</span>
            </div>
            <div class="accordion-content">
            <li><b>Comprar Online:</b> No menu "Passagens", selecione a linha de ônibus desejada e escolha o número de passagens.</li>
            <li>Conclua o pagamento pelo aplicativo usando cartão de crédito ou outros métodos disponíveis.</li>
            <li>O bilhete digital será armazenado no app, e você poderá mostrá-lo ao motorista na hora do embarque.</li>
            </div>
        </div>

        <!-- Seção 6 -->
        <div class="accordion-item">
            <div class="accordion-header" onclick="toggleAccordion(5)">
                Recarga de Passe Mensal
                <span class="icon">+</span>
            </div>
            <div class="accordion-content">
            <li><b>Recarga Fácil:</b> Se você usa um passe mensal, pode recarregá-lo diretamente no aplicativo.</li>
            <li>Basta acessar a opção "Passe Mensal", selecionar o valor e concluir o pagamento.</li>
            <li>O passe é válido para qualquer ônibus na rede de cidades parceiras.</li>
            </div>
        </div>

        <!-- Seção 7 -->
        <div class="accordion-item">
            <div class="accordion-header" onclick="toggleAccordion(6)">
                Notificações e Alertas
                <span class="icon">+</span>
            </div>
            <div class="accordion-content">
            <li>Ative as notificações para receber alertas sobre mudanças nas rotas, atrasos ou atualizações no serviço de transporte.</li>
            <li>Você também pode definir lembretes personalizados para saber quando o próximo ônibus está se aproximando do ponto mais próximo.</li>
            </div>
        </div>
    </section>

        

    </main>

    <a href="https://wa.me/5513991225846" rel="external" target="_blank"><img src="/wpp.png" width="90px" alt="whatsapp" class="animate-bounce" id="whats"></a>

    <footer>
        <p>Copyright &copy; 2024. Todos os direitos reservados.</p>
    </footer>

    <script>
        const hamburger = document.getElementById("hamburger");
        const menu = document.getElementById("menu");

        hamburger.addEventListener("click", () => {
            menu.classList.toggle("active");
        });
    </script>

    <script>
            
        function toggleAccordion(index) {
            const content = document.getElementsByClassName('accordion-content')[index];
            const icon = document.getElementsByClassName('icon')[index];

            if (content.style.display === "block") {
                content.style.display = "none";
                icon.innerHTML = "+";
            } else {
                content.style.display = "block";
                icon.innerHTML = "-";
            }
        }
        </script>
</body>
</html>