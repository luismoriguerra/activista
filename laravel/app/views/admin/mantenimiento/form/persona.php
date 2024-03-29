<!-- /.modal -->
<div class="modal fade" id="personaModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header logo">
        <button class="btn btn-sm btn-default pull-right" data-dismiss="modal">
            <i class="fa fa-close"></i>
        </button>
        <h4 class="modal-title">New message</h4>
      </div>
      <div class="modal-body">
        <form id="form_personas" name="form_personas" action="" method="post">
          <fieldset>
            <legend>Datos personales</legend>
            <div class="row form-group">

              <div class="col-sm-12">
                <div class="col-sm-4">
                  <label class="control-label">Nombres
                      <a id="error_nombres" style="display:none" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="bottom" title="Ingrese Nombre">
                          <i class="fa fa-exclamation"></i>
                      </a>
                  </label>
                  <input type="text" class="form-control" placeholder="Ingrese Nombre" name="txt_nombres" id="txt_nombres">
                </div>
                <div class="col-sm-4">
                  <label class="control-label">Apellido Paterno
                      <a id="error_paterno" style="display:none" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="bottom" title="Ingrese Apellido Paterno">
                          <i class="fa fa-exclamation"></i>
                      </a>
                  </label>
                  <input type="text" class="form-control" placeholder="Ingrese Apellido Paterno" name="txt_paterno" id="txt_paterno">
                </div>
                <div class="col-sm-4">
                  <label class="control-label">Apellido Materno
                      <a id="error_materno" style="display:none" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="bottom" title="Ingrese Apellido Materno">
                          <i class="fa fa-exclamation"></i>
                      </a>
                  </label>
                  <input type="text" class="form-control" placeholder="Ingrese Apellido Materno" name="txt_materno" id="txt_materno">
                </div>
              </div>

              <div class="col-sm-12">
                <div class="col-sm-4">
                  <label class="control-label">DNI
                      <a id="error_dni" style="display:none" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="bottom" title="Ingrese DNI">
                          <i class="fa fa-exclamation"></i>
                      </a>
                  </label>
                  <input type="text" class="form-control" placeholder="Ingrese DNI" name="txt_dni" id="txt_dni">
                </div>
                <div class="col-sm-4">
                  <label class="control-label">Email
                      <a id="error_email" style="display:none" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="bottom" title="Ingrese email">
                          <i class="fa fa-exclamation"></i>
                      </a>
                  </label>
                  <input type="text" class="form-control" placeholder="Ingrese email" name="txt_email" id="txt_email">
                </div>
                <div class="col-sm-4">
                  <label class="control-label">Sexo:
                  </label>
                  <select class="form-control" name="slct_sexo" id="slct_sexo">
                      <option value='' style="display:none">.:Seleccione:.</option>
                      <option value='2'>Femenino</option>
                      <option value='1' selected>Masculino</option>
                  </select>
                </div>
              </div>
              <div class="editar col-sm-12">
                <div class="col-sm-4">
                  <label class="control-label">Fecha de Nacimiento
                      <a id="error_fecha_nac" style="display:none" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="bottom" title="Fecha de Nacimiento">
                          <i class="fa fa-exclamation"></i>
                      </a>
                  </label>
                  <input type="text" class="form-control" placeholder="AAAA-MM-DD" id="txt_fecha_nac" name="txt_fecha_nac" onfocus="blur()"/>
                </div>
                <div class="col-sm-4">
                  <label class="control-label">Password
                      <a id="error_password" style="display:none" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="bottom" title="Ingrese Password">
                          <i class="fa fa-exclamation"></i>
                      </a>
                  </label>
                  <input type="password" class="form-control" placeholder="Ingrese Password" name="txt_password" id="txt_password">
                </div>
                <div class="col-sm-4">
                  <label class="control-label">Estado:
                  </label>
                  <select class="form-control" name="slct_estado" id="slct_estado">
                      <option value='0'>Inactivo</option>
                      <option value='1' selected>Activo</option>
                  </select>
                </div>
              </div>

            </div>
          </fieldset>
          <fieldset id="f_areas_cargo">
            <legend>Nivel de Red Social</legend>

            <div class="row form-group">
              <div class="col-sm-12">
                <div class="col-sm-6">
                  <label class="control-label">Nivel Actual en la Red:
                  </label>
                  <select class="form-control" name="slct_cargos" id="slct_cargos">
                  </select>
                </div>
              </div>
            </div>
          </fieldset>
          <fieldset id="f_areas_cargo">
            <legend>Escalafón del Afiliado
            </legend>

            <div class="row form-group">
              <div class="col-sm-12">
              <table id="t_cargoPersona" class='table table-bordered'>
                <thead>
                <tr class="logo">
                    <th>Equipo</th>
                    <th>Cargo</th>
                    <th>Fecha de Inicio del Cargo</th>
                    <th>Doc. Para el Inicio del Cargo</th>
                    <th>Fecha de Final del Cargo</th>
                    <th>Doc. Para Fin del Cargo</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                <tr class="logo">
                    <th>Equipo</th>
                    <th>Cargo</th>
                    <th>Fecha de Inicio del Cargo</th>
                    <th>Doc. Para el Inicio del Cargo</th>
                    <th>Fecha de Final del Cargo</th>
                    <th>Doc. Para Fin del Cargo</th>
                </tr>
                </tfoot>
              </table>
              </div>
            </div>
            <select id='slct_grupos' style='display:none'></select>
          </fieldset>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- /.modal -->
