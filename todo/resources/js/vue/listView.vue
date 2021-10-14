<template>
    <div>
        <div v-for="(item, index) in items" :key="index">
            <list-todo
                :item="item"
                class="item"
                v-on: itemchanged="$emit('reloadlist')"
                /> 
                </div>
    </div>
</template>
<script>
import listTodo from './listTodo'
import ListTodo from './listTodo.vue'
export default {
    props: ['items'],
    components: {
        listTodo
}
}
</script>
<style scoped>
.item{
    background: #e6e6e6;
    padding: 5px;
    margin-top: 5px;
}
    
</style>