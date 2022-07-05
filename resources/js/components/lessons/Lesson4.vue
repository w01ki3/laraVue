<template>
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header">Ders 4</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 27%;">değişken/ler</th>
                                    <th scope="col" style="width: 27%;">kullanım</th>
                                    <th scope="col">sonuç</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>counter : {{ counter }} | process: {{ process }}</code></td>
                                    <td>
                                        <pre><code>watch:{
    counter(val,oldVal){
        val>oldVal ? this.process="Arttırıldı" : this.process="Azaltıldı"
        this.process +=" | eski değer : " + oldVal
    }
}</code></pre>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary" @click="counter++">[+]</button>
                                        <button class="btn btn-danger" @click="counter--">[-]</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            counter:0,
            process:"Bir işlem yapılmadı",
        }
    },
    watch:{
        counter(val,oldVal){
            val>oldVal ? this.process="Arttırıldı" : this.process="Azaltıldı"
            this.process +=" | eski değer : " + oldVal
        }
    }
}
</script>
<style lang="">
    
</style>