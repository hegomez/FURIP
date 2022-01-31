<div class="row row-bottom-margin">
    <div class="col-md-6">
        <?php input_group('text','vPape','fas fa-user','Primer Apellido') ?>
    </div>
    <div class="col-md-6">
        <?php input_group('text','vSape','fas fa-user','Segundo Apellido') ?>
    </div>
    <div class="col-md-6">
        <?php input_group('text','vPnom','fas fa-user','Primer Nombre') ?>
    </div>
    <div class="col-md-6">
        <?php input_group('text','vSnom','fas fa-user','Segundo Nombre') ?>
    </div>
    <div class="col-md-3">
        <?php input_group('sel','vTDoc','fas fa-id-card','Tipo Identificación',array('CC','TI','RC','CE','PA','MS','AS','CD'),true) ?>
    </div>
    <div class="col-md-6">
        <?php input_group('text','vIdent','fas fa-address-card','Nro Identificación') ?>
    </div>
    <div class="col-md-3">
        <?php input_group('sel','vSex','fas fa-genderless','Sexo',array('F','M'),true) ?>
    </div>
    <div class="col-md-7">
        <?php input_group('text','vDir','fas fa-map-signs','Dirección') ?>
    </div>
    <div class="col-md-5">
        <?php input_group('text','vTel','fas fa-phone','Teléfono') ?>
    </div>
    <div class="col-md-6">
        <?php input_group('sel','vDepto','fas fa-map-marker-alt','Departamento',array(),true) ?>
    </div>
    <div class="col-md-6">
        <?php input_group('sel','vMunic','fas fa-map-marker-alt','Municipio',array(),true) ?>
    </div>
    <div class="col-md-6">
        <?php input_group('sel','vCond','fas fa-user-injured','Condición',array('Conductor','Peatón','Ocupante','Ciclista'),true) ?>
    </div>
</div>
