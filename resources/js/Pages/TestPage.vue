<template>
    <button @click="test_app">test</button>

</template>

<script>
export default {
    name: 'TestPage',
    methods: {
        test_app() {
            alert('test')
        }
    },
}
</script>