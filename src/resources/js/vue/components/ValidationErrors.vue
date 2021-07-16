<template>
    <div>
        <div v-if="validationErrors">
            <ul>
                <li v-for="(value, index) in validationErrors" :key="index" class="text-pink-500"">
                    {{ value }}
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'errors'
        ],
        computed: {
            /**
             * Преобразование из объекта в массив
             */
            validationErrors() {
                let errors = Object.values(this.errors);
                errors = errors.flat();

                return errors;
            }
        }
    }
</script>
