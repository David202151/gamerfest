<div class="form-group row align-items-center" :class="{'has-danger': errors.has('nombre'), 'has-success': fields.nombre && fields.nombre.valid }">
    <label for="nombre" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.aula.columns.nombre') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.nombre" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('nombre'), 'form-control-success': fields.nombre && fields.nombre.valid}" id="nombre" name="nombre" placeholder="{{ trans('admin.aula.columns.nombre') }}">
        <div v-if="errors.has('nombre')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('nombre') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('edificio'), 'has-success': fields.edificio && fields.edificio.valid }">
    <label for="edificio" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.aula.columns.edificio') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.edificio" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('edificio'), 'form-control-success': fields.edificio && fields.edificio.valid}" id="edificio" name="edificio" placeholder="{{ trans('admin.aula.columns.edificio') }}">
        <div v-if="errors.has('edificio')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('edificio') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('direccion'), 'has-success': fields.direccion && fields.direccion.valid }">
    <label for="direccion" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.aula.columns.direccion') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.direccion" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('direccion'), 'form-control-success': fields.direccion && fields.direccion.valid}" id="direccion" name="direccion" placeholder="{{ trans('admin.aula.columns.direccion') }}">
        <div v-if="errors.has('direccion')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('direccion') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('observaciones'), 'has-success': fields.observaciones && fields.observaciones.valid }">
    <label for="observaciones" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.aula.columns.observaciones') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.observaciones" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('observaciones'), 'form-control-success': fields.observaciones && fields.observaciones.valid}" id="observaciones" name="observaciones" placeholder="{{ trans('admin.aula.columns.observaciones') }}">
        <div v-if="errors.has('observaciones')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('observaciones') }}</div>
    </div>
</div>


