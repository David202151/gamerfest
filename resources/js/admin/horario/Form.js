import AppForm from '../app-components/Form/AppForm';

Vue.component('horario-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                hora_inicio:  '' ,
                hora_fin:  '' ,
                fecha:  '' ,
                observaciones:  '' ,
                
            }
        }
    }

});