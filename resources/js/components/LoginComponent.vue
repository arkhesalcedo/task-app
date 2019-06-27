<template>
    <div>
        <p>When do you want it?</p>
            
        <input type="password" v-model="password" class="form-control" placeholder="Enter secret answer">
    </div>
</template>

<script>
    import { secretAnswer } from '../secret';

    export default {
        name: 'LoginComponent',

        data() {
            return {
                password: null
            }
        },

        watch: {
            password(value) {
                this.$emit('login', value === secretAnswer);
            }
        }
    }
</script>

