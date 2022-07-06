<template>
    <div class="row justify-content-center">
        <div class="col-md-12 m-3">
            <div class="card">
                <div class="card-header">External Component
                </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr v-for="(row,index) in inputData" :key="index">
                                    <td>{{ row }}</td>
                                    <td><button class="btn btn-danger btn-sm mb-1" @click="$emit('deleteData',index)">[-]</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props:['inputData']
}
</script>
<style lang="">
    
</style>