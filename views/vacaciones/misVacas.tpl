<div class="content-wrapper">
<div class="content-header">
<div class="container-fluid">
    <div class="row">

        <div class="col-md-5 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <tr >       
                    <th></th>
                    <th style="text-align:center" colspan="3" ><h4>Vacaciones</h4></th>                        
                </tr>               


                <table class="table table-hover">
                    <tr>
                        <th>Fecha de contrato:</th>
                        <td>{$funcionario.date_in|date_format:"d/m/Y"}</td>
                    </tr>   
                    <tr>
                        <th>Dias Ganados:</th>
                        <td>{{vacationDays($funcionario->date_in)}}</td>
                    </tr>  
                    <tr>
                        <th>Dias Tomados:</th>
                        <td>{{vacationTaken($funcionario->id)}}</td>
                    </tr>  
                    <tr>
                        <th>Dias Restantes:</th>
                        <td>{{vacationDays($funcionario->date_in)-vacationTaken($funcionario->id)}}</td>  
                    </tr>       
                                           
                    
                    
                </table>
                <p>
                    <a href="{$_layoutParams.root}vacaciones/add/{$funcionario.id}"
                        class="btn btn-outline-success">Solicitud Vacaciones</a>
                </p>
                <p>
                    <a href="{$_layoutParams.root}vacaciones/historial/{$funcionario.id}"
                        class="btn btn-outline-success">Historial de Vacaciones</a>
                </p>
                    <a href="{$_layoutParams.root}funcionarios/miPerfil" class="btn btn-outline-primary btn-sm">Volver</a>

            </div>
        </div>
            </div>
        </div>
    </div>
</div>



<script>
    $('#date-init').datetimepicker({
        format: 'DD-MM-YYYY'
    });
</script>

