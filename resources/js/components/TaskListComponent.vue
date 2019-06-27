<template>
    <div>
        <task-input-component @add="add" class="m-b-20" />

        <h4>List</h4>

        <ul>
            <li v-for="task in tasks" :key="`${task.id}_${task.title}`">
                <input class="form-check-input" v-model="task.completed" type="checkbox" :value="task.id" @click="toggle(task)">
                
                <span>{{ task.title }}</span>
            </li>
        </ul>
    </div>
</template>

<style scoped lang="scss">
    ul {
        list-style: none;
        margin: 0px;
        padding: 0px;
        text-align: left;
    }
</style>

<script>
    import TaskInputComponent from './TaskInputComponent';

    export default {
        name: 'TaskListComponent',

        components: {
            TaskInputComponent
        },

        data() {
            return {
                tasks: []
            }
        },

        created() {
            const tasks = axios.get('/api/tasks')
                .then(response => {
                    this.tasks = response.data.data;
                });
        },

        methods: {
            add(task) {
                this.tasks.push(task);
            },

            toggle(task) {
                axios.post(`/api/tasks/${task.id}`, {
                    completed: task.completed
                }).then(response => {
                    this.tasks.forEach((task, index) => {
                        if (task.id === response.data.data.id) {
                            this.tasks[index] = response.data.data;
                        }
                    });
                });
            }
        }
    }
</script>

