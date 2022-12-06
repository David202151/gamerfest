import AppForm from '../app-components/Form/AppForm';

Vue.component('videojuego-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                nombre:  '' ,
                compania:  '' ,
                precio:  '' ,
                descripcion:  '' ,
                
            }
        }
    }

});