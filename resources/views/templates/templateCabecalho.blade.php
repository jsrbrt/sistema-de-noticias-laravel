<header class="header w-100">
    <img class="logo-zaite" src="{{ asset('assets_site/images/logoZaiteBranco.png') }}" alt="">
</header>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1>Área Restrita para Associados</h1>
                <button type="button" data-bs-dismiss="modal" aria-label="Close">
                    <img src="{{ asset('assets_site/images/x.png') }}">
                </button>
            </div>
            <form class="modal-body" onsubmit="Auth.login(event, this)">
                <h1>Faça seu login</h1>
                <fieldset>
                    <input type="email" placeholder="E-mail" name="email" required />
                    <input type="password" placeholder="Senha" name="password" required />
                    <button type="submit">Entrar</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>