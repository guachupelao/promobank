<form action="" method="post">
    {if $button == 'Guardar'}
        <!--.  <div class="mb-3">
            <label for="name" class="label text-success" style="font-weight: bold; font-size: 14px;">Funcionario <span class="text-danger">*</span></label>
                <select name="funcionario" class="form-control" id="">
                
                    <option value="">Seleccione...</option>
                    {foreach from=$funcionarios item=funcionario}
                        <option value="{$funcionario.id}">{$funcionario.nombre}</option>
                    {/foreach}
                </select>
        </div> -->

        <div class="mb-3">
            <label for="tipo" class="label text-success" style="font-weight: bold; font-size: 14px;">Tipo <span
                    class="text-danger">*</span></label>
            <select name="tipo" class="form-control">
                {if $button == 'Editar'}
                
                {/if}
                <option value="">Seleccione...</option>
                <option value="Vacaciones">Vacaciones</option>
                <option value="Falta">Falta</option>
                <option value="Permiso">Permiso</option>
            </select>
        </div>    

        <div class="mb-3">
            <label for="razon" class="label text-success" style="font-weight: bold; font-size: 14px;">Razon <span
                    class="text-danger">*</span></label>
            <textarea name="razon" class="form-control" rows="4" placeholder="Razon del servicio" style="resize: none;">
                {$vacacion.razon|default:""}
            </textarea>
        </div>

        <div class="mb-3">
            <label for="days_solicitados" class="label text-success" style="font-weight: bold; font-size: 14px;">Dias Tomados <span
                    class="text-danger">*</span></label>
            <input type="number" name="days_solicitados" value="{$vacacion.days_solicitados|default:""}" class="form-control" id=""
                aria-describedby="" placeholder="Dias solicitados">
        </div>
    
        <div class="mb-3">
            <label for="date_init" class="label text-success" style="font-weight: bold; font-size: 14px;">Fecha de Inicio<span
                    class="text-danger">*</span></label>
            <input type="date" name="date_init" value="{$vacacion.date_init|default:""}" class="form-control" id=""
                aria-describedby="" placeholder="Fecha de inicio">
        </div>

        
    {/if}  
    {if $button == 'Editar'}
        <div class="mb-3">
            <label for="estado" class="label text-success" style="font-weight: bold; font-size: 14px;">Cambiar Estado
                <span class="text-danger">*</span></label>
            <select name="estado" class="form-control">
                <option value="{$vacacion.status_id}">{$vacacion.status.nombre}</option>

                <option value="">Seleccione...</option>
                {foreach from=$statuses item=estado}
                    <option value="{$estado.id}">{$estado.nombre}</option>
                {/foreach}
            </select>
        </div>
        <div class="mb-3">
            <label for="days_funcionario" class="label text-success" style="font-weight: bold; font-size: 14px;">Dias Autorizados <span
                    class="text">*</span></label>
            <input min=0 type="number" name="days_funcionario" value="{$vacacion.days_funcionario|default:""}" class="form-control" id=""
                aria-describedby="" placeholder="Dias autorizados">
        </div>
        <div class="mb-3">
        <label for="observaciones" class="label text-success" style="font-weight: bold; font-size: 14px;">Observaciones <span
                class="text-danger">*</span></label>
        <textarea name="observaciones" class="form-control" rows="4" placeholder="observaciones" style="resize: none;">
            {$vacacion.observaciones|default:""}
        </textarea>
    </div>
    {/if}


    <input type="hidden" name="enviar" value="{$enviar}">
    <button type="submit" class="btn btn-outline-success">{$button}</button>
    <a href="{$_layoutParams.root}vacaciones/misVacas" class="btn btn-outline-primary btn-sm">Volver</a>

</form>