<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-3">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <button class="btn btn-primary" @click="count--">
                            (-)
                        </button>
                        count : {{ count }}
                        
                        <button class="btn btn-primary" @click="count++">
                            (+)
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data() {
            return {
                count: 0,
            }
        },
    }
</script>
