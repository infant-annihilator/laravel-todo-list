<template>

    <div>
        <div class="flex w-screen sm:p-20">
            <div class="sm:w-1/4 h-full bg-white"></div>

            <div class="flex-col sm:w-1/2 bg-white h-full bg-grey-lightest rounded-lg lg:p-4 md:p-10 shadow-md z-50 div-main">

                <h1 class="flex-1 text-center sm:text-5xl text-grey-darkest">//TODO</h1>

                <item-form
                    v-on:reloadList="getList()"
                />

                <item-list
                    :items="items"
                    :itemsClosed="itemsClosed"
                    v-on:reloadList="getList()"
                />

            </div>
        </div>
    </div>

</template>

<script>
    import ItemForm from "./item/ItemForm";
    import ItemList from "./item/ItemList";
    import Tabs from "./components/Tabs";

    export default {
        components: {
            ItemForm,
            ItemList,
            Tabs
        },
        data: function () {
            return {
                items: [],
                itemsClosed: []
            }
        },
        methods: {
            /**
             * Метод для получения всех элементов списка
             */
            getList() {
                axios.get('api/items')
                .then (response => {
                    this.items = response.data
                    this.getItemsClosed()
                })
                .catch (error => {
                    console.log(error);
                })
            },
            /**
             * Возвращает только зщавершённые
             */
            getItemsClosed() {
                axios.get('api/items-closed')
                    .then (response => {
                        this.itemsClosed = response.data
                    })
                    .catch (error => {
                        console.log(error);
                    })
            }
        },
        /**
         * Получение списка сразу при рендеринге
         */
        created() {
            this.getList()
        }
    }
</script>
