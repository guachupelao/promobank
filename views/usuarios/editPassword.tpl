<div class="content-wrapper">
    <div class="content-header">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    {$title}
                </h3>
                <h4>Funcionario(a): {$usuario.funcionario.nombre}</h4>
                {include file="../partials/_mensajes.tpl"}

                <p class="text-danger">Campos obligatorios *</p>
                {include file="../usuarios/_form.tpl"}

            </div>
        </div>
    </div>
</div>