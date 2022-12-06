<div class="form-group row align-items-center" :class="{'has-danger': errors.has('hora_inicio'), 'has-success': fields.hora_inicio && fields.hora_inicio.valid }">
    <label for="hora_inicio" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.horario.columns.hora_inicio') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.hora_inicio" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('hora_inicio'), 'form-control-success': fields.hora_inicio && fields.hora_inicio.valid}" id="hora_inicio" name="hora_inicio" placeholder="{{ trans('admin.horario.columns.hora_inicio') }}">
        <div v-if="errors.has('hora_inicio')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('hora_inicio') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('hora_fin'), 'has-success': fields.hora_fin && fields.hora_fin.valid }">
    <label for="hora_fin" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.horario.columns.hora_fin') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.hora_fin" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('hora_fin'), 'form-control-success': fields.hora_fin && fields.hora_fin.valid}" id="hora_fin" name="hora_fin" placeholder="{{ trans('admin.horario.columns.hora_fin') }}">
        <div v-if="errors.has('hora_fin')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('hora_fin') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fecha'), 'has-success': fields.fecha && fields.fecha.valid }">
    <label for="fecha" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.horario.columns.fecha') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.fecha" :config="datePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('fecha'), 'form-control-success': fields.fecha && fields.fecha.valid}" id="fecha" name="fecha" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('fecha')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fecha') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('observaciones'), 'has-success': fields.observaciones && fields.observaciones.valid }">
    <label for="observaciones" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.horario.columns.observaciones') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.observaciones" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('observaciones'), 'form-control-success': fields.observaciones && fields.observaciones.valid}" id="observaciones" name="observaciones" placeholder="{{ trans('admin.horario.columns.observaciones') }}">
        <div v-if="errors.has('observaciones')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('observaciones') }}</div>
    </div>
</div>


