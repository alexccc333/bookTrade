<template>
    <div class="container">
       <div class="col-md-12">

       </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        computed: {
        // Вычисляемое свойство, которое будет преобразовывать данные из JSON в объект js.
        decodedData() {
            console.log(JSON.parse(this.message)) ;
        }
    }
    }
</script>
