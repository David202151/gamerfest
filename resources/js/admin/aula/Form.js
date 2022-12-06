import AppForm from '../app-components/Form/AppForm';

Vue.component('aula-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nombre:  '' ,
                edificio:  '' ,
                direccion:  '' ,
                observaciones:  '' ,
                
            }
        }
    }

});