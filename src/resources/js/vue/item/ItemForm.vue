<template>
    <div>
        <div class="flex items-center border-b border-b-2 border-teal py-2">
            <input class="lg:text-2xl appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 leading-tight focus:outline-none"
                   type="text"
                   v-model="item.context"
                   placeholder="Новая цель..."
            >

            <button class="flex-no-shrink drop-shadow-lg text-sm border-4 py-1 px-2 rounded"
                    :class="[ item.context ? 'bg-green-300 border-green-300 hover:bg-purple-500 hover:border-purple-800' : '']"
                    @click="addItem()"
                    type="button"
            >
                Добавить
            </button>
            <button class="flex-no-shrink border-transparent border-4 text-pink-500 hover:text-pink-800 text-sm py-1 px-2 rounded"
                    type="button"
                    @click="clear()"
            >
                Отмена
            </button>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                item: {
                    context: ""
                },
            }
        },
        methods: {
            /**
             * Добавление нового элемента в БД,
             * валидация элемента,
             * обновление списка
             */
            addItem() {
                if (this.item.context) {
                    axios.post('api/item/store', {
                        item: this.item
                    })
                    .then (response => {
                        if (response.status == 201) {
                            this.item.context = "";
                            this.$emit('reloadList');
                        }
                    })
                    .catch (error => {
                        console.log(error);
                    })
                }
            },
            /**
             * Очищаети форму
             */
            clear() {
                if (this.item.context) {
                    this.item.context = "";
                }
            }
        }
    }
</script>
