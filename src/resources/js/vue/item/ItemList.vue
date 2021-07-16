<template>
    <div>
        <h3 class="m-2 text-2xl font-bold"> В процессе </h3>
        <div v-for="(item, index) in items" :key="index">
            <item-view
                :item="item"
                v-on:itemChanged="$emit('reloadList')"
            />
        </div>

        <h3 class="m-2 mt-5 text-2xl font-bold"> Завершены </h3>
        <div v-for="(item, index) in itemsClosed" :key="'closed' + index">
            <item-view
                :item="item"
                v-on:itemChanged="$emit('reloadList')"
            />
        </div>
    </div>
</template>

<script>
    import ItemView from "./ItemView";

    export default {
        props: [
            'items',
            'itemsClosed'
        ],
        components: {
            ItemView
        },
    }
</script>
