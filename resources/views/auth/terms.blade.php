<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">

<div class="d-flex justify-content-center align-items-center min-vh-100 bg-light px-3">
    <div class="card shadow w-100" style="max-width: 800px;">
        <div class="card-body p-5">
            <h1 class="card-title text-center mb-4">Termos de Uso e Política de Privacidade</h1>

            <p class="text-muted text-center mb-4">
                Este documento descreve como coletamos, utilizamos e protegemos seus dados pessoais, conforme a LGPD (Lei nº 13.709/2018).
            </p>

            <hr>

            <div class="text-justify">
                <h5 class="mt-4">1. Coleta de Dados Pessoais</h5>
                <p>
                    Ao utilizar esta aplicação, você autoriza a coleta de dados pessoais como nome, e-mail, CPF, localização e demais informações necessárias para o funcionamento dos serviços oferecidos.
                </p>

                <h5 class="mt-4">2. Finalidade da Coleta</h5>
                <p>
                    Os dados coletados são utilizados exclusivamente para finalidades legítimas, como autenticação, personalização de serviços, comunicações importantes, e melhoria da experiência do usuário.
                </p>

                <h5 class="mt-4">3. Consentimento</h5>
                <p>
                    Ao aceitar estes termos, você consente de forma livre, informada e inequívoca com o tratamento dos seus dados pessoais conforme descrito neste documento. Você pode revogar esse consentimento a qualquer momento.
                </p>

                <h5 class="mt-4">4. Compartilhamento de Dados</h5>
                <p>
                    Seus dados não serão vendidos ou compartilhados com terceiros, exceto quando necessário para prestação de serviços, cumprimento de obrigações legais, ou mediante sua autorização.
                </p>

                <h5 class="mt-4">5. Armazenamento e Segurança</h5>
                <p>
                    Armazenamos seus dados em ambientes seguros, adotando medidas técnicas e administrativas para protegê-los contra acessos não autorizados, vazamentos, ou qualquer forma de tratamento inadequado.
                </p>

                <h5 class="mt-4">6. Direitos do Titular</h5>
                <p>
                    Conforme a LGPD, você tem o direito de acessar, corrigir, excluir, limitar ou portar seus dados. Também pode solicitar informações sobre o uso dos seus dados ou revogar seu consentimento a qualquer momento.
                </p>

                <h5 class="mt-4">7. Alterações nesta Política</h5>
                <p>
                    Podemos atualizar esta política periodicamente. Caso ocorra alguma mudança relevante, notificaremos você por meio da aplicação ou pelos canais de contato informados.
                </p>

                <p class="mt-5">
                    Em caso de dúvidas, entre em contato conosco através do nosso canal de suporte.
                </p>
            </div>

            <div class="text-center mt-5">
                <a href="{{ url()->previous() }}" class="btn btn-primary">
                    Voltar
                </a>
            </div>
        </div>
    </div>
</div>
    </body>
</html>
