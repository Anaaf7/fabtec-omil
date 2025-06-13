<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Font Rawline-->
    <link rel="stylesheet"
        href="https://cdngovbr-ds.estaleiro.serpro.gov.br/design-system/fonts/rawline/css/rawline.css" />
    <!-- Font Raleway-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900&amp;display=swap" />
    <!-- Design System GOV.BR CSS-->
    <link rel="stylesheet" href="../node_modules/@govbr-ds/core/dist/core.min.css" />
    <!-- Fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
    <!--Tailwind-->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!--Textarea-->
    <script src="https://cdn.tiny.cloud/1/%suachave%/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <title>Show</title>
</head>

<script>
    tinymce.init({
        selector: '#textarea',
        plugins: [
            'a11ychecker', 'accordion', 'advlist', 'anchor', 'autolink', 'autosave',
            'charmap', 'code', 'codesample', 'directionality', 'emoticons', 'exportpdf',
            'exportword', 'fullscreen', 'help', 'image', 'importcss', 'importword',
            'insertdatetime', 'link', 'lists', 'markdown', 'math', 'media', 'nonbreaking',
            'pagebreak', 'preview', 'quickbars', 'save', 'searchreplace', 'table',
            'visualblocks', 'visualchars', 'wordcount'
        ],

        toolbar: 'undo redo | accordion accordionremove | ' +
            'importword exportword exportpdf | math | ' +
            'blocks fontfamily fontsize | bold italic underline strikethrough | ' +
            'align numlist bullist | link image | table media | ' +
            'lineheight outdent indent | forecolor backcolor removeformat | ' +
            'charmap emoticons | code fullscreen preview | save print | ' +
            'pagebreak anchor codesample | ltr rtl',
        menubar: 'file edit view insert format tools table help'

    });
</script>

<body>
    <!--Cabeçalho-->

    <header class="br-header compact">
        <div class="container-lg">
            <div class="header-top">
                <div class="header-actions">
                    <div class="header-links dropdown">
                        <button class="br-button circle small" type="button" data-toggle="dropdown"
                            aria-label="Abrir Acesso Rápido"><i class="fas fa-ellipsis-v" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="header-functions dropdown">
                        <button class="br-button circle small" type="button" data-toggle="dropdown"
                            aria-label="Abrir Funcionalidades do Sistema"><i class="fas fa-th" aria-hidden="true"></i>
                        </button>


                        <div class="br-list">
                            <div class="header">
                                <div class="title">Funcionalidades do Sistema</div>
                            </div>

                            <div class="br-item">
                                <button class="br-button circle small" type="button" aria-label="Funcionalidade 2"><i
                                        class="fas fa-headset" aria-hidden="true"></i><span class="text">Funcionalidade
                                        2</span>
                                </button>
                            </div>

                            <div class="br-item">
                                <button class="br-button circle small" type="button" aria-label="Funcionalidade 4"><i
                                        class="fas fa-adjust" aria-hidden="true"></i><span class="text">Funcionalidade
                                        4</span>
                                </button>
                            </div>
                        </div>
                    </div>


                    <div class="header-login">
                        <div class="header-sign-in">
                            <button class="br-sign-in small" type="button" data-trigger="login"><i class="fas fa-user"
                                    aria-hidden="true"></i><span class="d-sm-inline">Funcionário</span>
                            </button>
                        </div>
                        <div class="header-avatar"></div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="header-menu">
                    <div class="header-menu-trigger">
                        <button class="br-button small circle" type="button" aria-label="Menu" data-toggle="menu"
                            data-target="#main-navigation" id="menu-compact"><i class="fas fa-bars"
                                aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="header-info">
                        <div class="header-title">Fabtec</div>
                        <div class="header-subtitle">Fábrica de Soluções Tecnológicas</div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <br /><br />

    <!-- Edição do documento-->
    <div class="container">
        <h1>Edição do documento</h1>

        <form action="">
            <textarea name="" id="textarea"></textarea>
        </form>
    </div>


    <br /><br /><br /><br /><br />

    <!-- Rodapé com principais navegações e logo-->
    <footer class="br-footer">
        <div class="container-lg">
            <div class="d-none d-sm-block">
                <div class="row align-items-end justify-content-between py-5">
                    <div class="col">
                        <div class="social-network">
                            <div class="social-network-title">Redes Sociais</div>
                            <div class="d-flex">
                                <a class="br-button circle" href="javascript: void(0)"
                                    aria-label="Compartilhar por Facebook"><i class="fab fa-facebook-f"
                                        aria-hidden="true"></i></a><a class="br-button circle"
                                    href="javascript: void(0)" aria-label="Compartilhar por Twitter"><i
                                        class="fab fa-twitter" aria-hidden="true"></i></a><a class="br-button circle"
                                    href="javascript: void(0)" aria-label="Compartilhar por Linkedin"><i
                                        class="fab fa-linkedin-in" aria-hidden="true"></i></a><a
                                    class="br-button circle" href="javascript: void(0)"
                                    aria-label="Compartilhar por Whatsapp"><i class="fab fa-whatsapp"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col assigns text-right flex justify-end">
                        <img class="ml-4" src="../imgs/logoFabtec.png" alt="Imagem" />
                    </div>
                </div>
            </div>
        </div>
        <span class="br-divider my-3"></span>
        <div class="container-lg">
            <div class="info">
                <div class="text-down-01 text-medium pb-3">
                    Texto destinado a exibição de informações relacionadas
                    à&nbsp;<strong>licença de uso.</strong>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts de componentes -->
    <script type="module" src="<node_modules></node_modules>/@govbr-ds/core/dist/core.min.js"></script>
</body>

</html>