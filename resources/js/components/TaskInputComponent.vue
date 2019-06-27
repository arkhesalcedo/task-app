<template>
    <div>
        <small>Press enter or click 'Add'</small>

        <input type="text" v-model="title" class="form-control m-b-20" v-on:keyup.enter="addTask">

        <button class="btn btn-primary" @click="addTask">Add</button>
    </div>
</template>

<script>
    export default {
        name: 'TaskInputComponent',

        data() {
            return {
                title: null
            }
        },

        methods: {
            addTask() {
                const tasks = axios.post('/api/tasks', {
                    title: this.title
                }).then(response => {
                    this.$emit('add', response.data.data);

                    this.title = null;
                });
            }
        }
    }
</script>

