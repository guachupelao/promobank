<div class="content-wrapper">
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-6 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3>
                    {$title}
                </h3>
                {include file="../partials/_mensajes.tpl"}

                <p class="text-danger">Campos obligatorios *</p>
               
                {include file="../vacaciones/_form.tpl"}
                

            </div>
            <a href="{$_layoutParams.root}vacaciones/view" class="btn btn-outline-primary btn-sm">Volver</a>
        </div>
    </div>
</section> <!-- .section -->
</div>