<template>
        <div class="row justify-content-center">
            <div class="col-md-8 mt-3">
                <div class="card">
                    <div class="card-header">Deneme-Yamulma Component</div>

                    <div class="card-body">
                        <h1>Kurcalaya kurcalaya öğreniyorum</h1>
                    </div>
                </div>
                <div class="card card-body my-4">
                    <a class="admin-laravel-link" :href="baglanti.url">{{ baglanti.name }}</a>
                </div>

            </div>
        </div>
</template>

<script>
    export default {
        mounted() {
            console.log('created from router2.js')
        },
        data() {
            return {
                baglanti: {'url':'page2', 'name':'bu kök\'ün ana dizine dön'},
            };
        },

    }
</script>