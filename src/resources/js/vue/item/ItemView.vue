<template>
    <div class="flex bg-grey-light w-full h-auto p-2 mt-4 rounded-lg">
            <label class="w-1/12 inline-flex items-center mt-3">
                <input
                    type="checkbox"
                    class="form-checkbox h-5 w-5 text-purple-600"
                    @change="updateCheck()"
                    v-model="item.completed"
                />
                <span class="ml-2 text-gray-700"></span>
            </label>
            <i class="fa fa-times text-2xl" aria-hidden="true"></i>
        <p
            class="w-10/12 text-1xl text-center p-1 shadow-md rounded-lg"
            :class="[item.completed ? 'line-through bg-gray-100' : '']"
        >
            {{ item.context }}
        </p>
        <button class="w-1/12 text-1xl text-center p-1 text-pink-500 hover:bg-pink-300 rounded-lg" @click="removeItem()">
            x
        </button>
    </div>
</template>

<script>
    export default {

        props: [
            'item'
        ],
        methods: {
            updateCheck() {
                axios.put('api/item/' + this.item.id, {
                    item: this.item
                })
                .then (response => {
                    if (response.status == 200) {
                        this.$emit('itemChanged');
                    }
                })
                .catch (error => {
                    console.log(error);
                })
            },
            removeItem() {
                axios.delete('api/item/' + this.item.id)
                .then (response => {
                    if (response.status == 200) {
                        this.$emit('itemChanged');
                    }
                })
                .catch (error => {
                    console.log(error);
                })
            }
        },

    }
</script>
