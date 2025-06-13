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
    <title>Funcionário</title>
    @vite('resources/js/app.js')

</head>

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

    <!-- titulo-->
    <div class="container col">
        <h1>Selecione o funcionário que deseja editar</h1>
    </div>


    <div class="container">

<div class="br-table" data-search="data-search" data-selection="data-selection" data-collapse="data-collapse" data-random="data-random">
  <div class="table-header">
    <div class="top-bar">
      <div class="table-title">Funcionários setor mecânica</div>
      <div class="actions-trigger text-nowrap">
        <button class="br-button circle" type="button" id="button-dropdown-density" title="Ver mais opções" data-toggle="dropdown" data-target="target01-63313" aria-label="Definir densidade da tabela" aria-haspopup="true" aria-live="polite"><i class="fas fa-ellipsis-v" aria-hidden="true"></i>
        </button>
        <div class="br-list" id="target01-63313" role="menu" aria-labelledby="button-dropdown-density" hidden="hidden">
          <button class="br-item" type="button" data-density="small" role="menuitem">Densidade alta
          </button><span class="br-divider"></span>
          <button class="br-item" type="button" data-density="medium" role="menuitem">Densidade média
          </button><span class="br-divider"></span>
          <button class="br-item" type="button" data-density="large" role="menuitem">Densidade baixa
          </button>
        </div>
      </div>
      <div class="search-trigger">
        <button class="br-button circle" type="button" id="button-input-search" data-toggle="search" aria-label="Abrir busca" aria-controls="table-searchbox-63313"><i class="fas fa-search" aria-hidden="true"></i>
        </button>
      </div>
    </div>
    <div class="search-bar">
      <div class="br-input">
        <label for="table-searchbox-63313">Buscar na tabela</label>
        <input id="table-searchbox-63313" type="search" placeholder="Buscar na tabela" aria-labelledby="button-input-search" aria-label="Buscar na tabela"/>
        <button class="br-button" type="button" aria-label="Buscar"><i class="fas fa-search" aria-hidden="true"></i>
        </button>
      </div>
      <button class="br-button circle" type="button" data-dismiss="search" aria-label="Fechar busca"><i class="fas fa-times" aria-hidden="true"></i>
      </button>
    </div>
    <div class="selected-bar">
      <div class="info"><span class="count">0</span><span class="text">item selecionado</span></div>
      <div class="actions-trigger text-nowrap">
        <button class="br-button circle inverted" type="button" id="button-dropdown-selection" data-toggle="dropdown" data-target="target02-63313" aria-controls="target02-63313" aria-label="Ver mais opções de ação" aria-haspopup="true"><i class="fas fa-ellipsis-v" aria-hidden="true"></i>
        </button>
        <div class="br-list" id="target02-63313" role="menu" aria-labelledby="button-dropdown-selection" hidden="hidden">
          <button class="br-item" type="button" data-toggle="" role="menuitem">Ação 1
          </button><span class="br-divider"></span>
          <button class="br-item" type="button" role="menuitem">Ação 2
          </button>
        </div>
      </div>
    </div>
  </div>
  <table>
    <caption>Funcionários setor mecânica</caption>
    <thead>
      <tr>
        <td class="column-collapse" scope="col" aria-hidden="true"></td>
        <th class="column-checkbox" scope="col">
          <div class="br-checkbox hidden-label">
            <input id="check-all-63313" name="check-all-63313" type="checkbox" aria-label="Selecionar tudo" data-parent="check-01-63313"/>
            <label for="check-all-63313">Selecionar todas as linhas</label>
          </div>
        </th>
        <th scope="col">Nome do funcionário</th>
        <th scope="col">editar setor do funcionário</th>
        <th scope="col">excluir funcionário no setor</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <button class="br-button circle small" type="button" id="button-line-1-63313" aria-label="Expandir/Retrair Rótulo 01" data-toggle="collapse" data-target="collapse-1-4-63313" aria-describedby="collapse-1-4-63313"><i class="fas fa-chevron-down" aria-hidden="true"></i>
          </button>
        </td>
        <td>
          <div class="br-checkbox hidden-label">
            <input id="check-line-1-63313" name="check-line-1-63313" type="checkbox" aria-label="Selecionar linha 1" data-child="check-01-63313"/>
            <label for="check-line-1-63313">Selecionar linha 1</label>
          </div>
        </td>
        <td data-th="Título coluna 1">Funcioário 1</td>
        <td data-th="Título coluna 2"><a href="edit.blade.php">editar</a></td>
        <td data-th="Título coluna 3">excluir</td>
      </tr>
      <tr class="collapse">
        <td id="collapse-1-4-63313" aria-hidden="true" hidden="hidden" colspan="6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies aliquet lacinia. Vestibulum in interdum eros. Donec vel tempus diam. Aenean pulvinar mattis nisi in laoreet. Integer felis mi, vehicula sed pretium sit amet, pellentesque vel nisl. Curabitur metus ante, pellentesque in lectus a, sagittis imperdiet mi.</td>
      </tr>
      <tr>
        <td>
          <button class="br-button circle small" type="button" id="button-line-2-63313" aria-label="Expandir/Retrair Rótulo 01" data-toggle="collapse" data-target="collapse-2-4-63313" aria-describedby="collapse-2-4-63313"><i class="fas fa-chevron-down" aria-hidden="true"></i>
          </button>
        </td>
        <td>
          <div class="br-checkbox hidden-label">
            <input id="check-line-2-63313" name="check-line-2-63313" type="checkbox" aria-label="Selecionar linha 2" data-child="check-01-63313"/>
            <label for="check-line-2-63313">Selecionar linha 2</label>
          </div>
        </td>
        <td data-th="Título coluna 1">Funcioário 1</td>
        <td data-th="Título coluna 2"><a href="edit.blade.php">editar</a></td>
        <td data-th="Título coluna 3">excluir</td>
      </tr>
      <tr class="collapse">
        <td id="collapse-2-4-63313" aria-hidden="true" hidden="hidden" colspan="6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies aliquet lacinia. Vestibulum in interdum eros. Donec vel tempus diam. Aenean pulvinar mattis nisi in laoreet. Integer felis mi, vehicula sed pretium sit amet, pellentesque vel nisl. Curabitur metus ante, pellentesque in lectus a, sagittis imperdiet mi.</td>
      </tr>
      <tr>
        <td>
          <button class="br-button circle small" type="button" id="button-line-3-63313" aria-label="Expandir/Retrair Rótulo 01" data-toggle="collapse" data-target="collapse-3-4-63313" aria-describedby="collapse-3-4-63313"><i class="fas fa-chevron-down" aria-hidden="true"></i>
          </button>
        </td>
        <td>
          <div class="br-checkbox hidden-label">
            <input id="check-line-3-63313" name="check-line-3-63313" type="checkbox" aria-label="Selecionar linha 3" data-child="check-01-63313"/>
            <label for="check-line-3-63313">Selecionar linha 3</label>
          </div>
        </td>
        <td data-th="Título coluna 1">Funcioário 1</td>
        <td data-th="Título coluna 2"><a href="edit.blade.php">editar</a></td>
        <td data-th="Título coluna 3">excluir</td>
      </tr>
      <tr class="collapse">
        <td id="collapse-3-4-63313" aria-hidden="true" hidden="hidden" colspan="6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies aliquet lacinia. Vestibulum in interdum eros. Donec vel tempus diam. Aenean pulvinar mattis nisi in laoreet. Integer felis mi, vehicula sed pretium sit amet, pellentesque vel nisl. Curabitur metus ante, pellentesque in lectus a, sagittis imperdiet mi.</td>
      </tr>
    </tbody>
  </table>
  <div class="table-footer">
    <nav class="br-pagination" aria-label="paginação" data-total="50" data-current="1" data-per-page="20">
      <div class="pagination-per-page">
        <div class="br-select">
          <div class="br-input">
            <label for="per-page-selection-random-60958">Exibir</label>
            <input id="per-page-selection-random-60958" type="text" placeholder=" "/>
            <button class="br-button" type="button" aria-label="Exibir lista" tabindex="-1" data-trigger="data-trigger"><i class="fas fa-angle-down" aria-hidden="true"></i>
            </button>
          </div>
          <div class="br-list" tabindex="0">
            <div class="br-item" tabindex="-1">
              <div class="br-radio">
                <input id="per-page-10-random-60958" type="radio" name="per-page-random-60958" value="per-page-10-random-60958" checked="checked"/>
                <label for="per-page-10-random-60958">10</label>
              </div>
            </div>
            <div class="br-item" tabindex="-1">
              <div class="br-radio">
                <input id="per-page-20-random-60958" type="radio" name="per-page-random-60958" value="per-page-20-random-60958"/>
                <label for="per-page-20-random-60958">20</label>
              </div>
            </div>
            <div class="br-item" tabindex="-1">
              <div class="br-radio">
                <input id="per-page-30-random-60958" type="radio" name="per-page-random-60958" value="per-page-30-random-60958"/>
                <label for="per-page-30-random-60958">30</label>
              </div>
            </div>
          </div>
        </div>
      </div><span class="br-divider d-none d-sm-block mx-3"></span>
      <div class="pagination-information d-none d-sm-flex"><span class="current">1</span>&ndash;<span class="per-page">20</span>&nbsp;de&nbsp;<span class="total">50</span>&nbsp;itens</div>
      <div class="pagination-go-to-page d-none d-sm-flex ml-auto">
        <div class="br-select">
          <div class="br-input">
            <label for="go-to-selection-random-22179">Página</label>
            <input id="go-to-selection-random-22179" type="text" placeholder=" "/>
            <button class="br-button" type="button" aria-label="Exibir lista" tabindex="-1" data-trigger="data-trigger"><i class="fas fa-angle-down" aria-hidden="true"></i>
            </button>
          </div>
          <div class="br-list" tabindex="0">
            <div class="br-item" tabindex="-1">
              <div class="br-radio">
                <input id="go-to-1-random-22179" type="radio" name="go-to-random-22179" value="go-to-1-random-22179" checked="checked"/>
                <label for="go-to-1-random-22179">1</label>
              </div>
            </div>
            <div class="br-item" tabindex="-1">
              <div class="br-radio">
                <input id="go-to-2-random-22179" type="radio" name="go-to-random-22179" value="go-to-2-random-22179"/>
                <label for="go-to-2-random-22179">2</label>
              </div>
            </div>
            <div class="br-item" tabindex="-1">
              <div class="br-radio">
                <input id="go-to-3-random-22179" type="radio" name="go-to-random-22179" value="go-to-3-random-22179"/>
                <label for="go-to-3-random-22179">3</label>
              </div>
            </div>
          </div>
        </div>
      </div><span class="br-divider d-none d-sm-block mx-3"></span>
      <div class="pagination-arrows ml-auto ml-sm-0">
        <button class="br-button circle" type="button" aria-label="Voltar página"><i class="fas fa-angle-left" aria-hidden="true"></i>
        </button>
        <button class="br-button circle" type="button" aria-label="Página seguinte"><i class="fas fa-angle-right" aria-hidden="true"></i>
        </button>
      </div>
    </nav>
  </div>
</div>

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
                    <div class="col assigns text-right">
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
    <script type="module" src="../node_modules/@govbr-ds/dist/core.min.js"></script>
</body>

</html>