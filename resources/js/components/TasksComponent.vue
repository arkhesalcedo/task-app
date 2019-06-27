<template>
    <div>
        <div class="form-group text-center">
            <h1 class="m-b-50">Task App</h1>

            <task-list-component v-if="loggedIn" />

            <login-component v-else @login="login"/>
        </div>
    </div>
</template>

<script>
    import LoginComponent from './LoginComponent';
    import TaskListComponent from './TaskListComponent';

    export default {
        name: 'TasksComponent',

        components: {
            TaskListComponent,
            LoginComponent
        },

        data() {
            return {
                loggedIn: false,
            }
        },

        methods: {
            login(status) {
                this.loggedIn = status;
            }
        }
    }
</script>

