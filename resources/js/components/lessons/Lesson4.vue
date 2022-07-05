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
                                        <pre><code>&lt;button @click="counter++"&gt;[+]&lt;/button&gt;
&lt;button @click="counter--"&gt;[-]&lt;/button&gt;
watch:{
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

                                <tr>
                                    <td><code>inputValue = {{ inputValue }} | errors = {{ errors }}</code></td>
                                    <td><pre><code>&lt;input type="text" class="form-control" 
    v-model="inputValue" :class="bindClass"&gt;
&lt;div class="invalid-feedback"&gt;
    &lt;li v-for="error in errors">{{ error }}&lt;/li&gt;
&lt;/div&gt;

watch:{
    inputValue(val){
        this.errors = [];
        if(val == ""){
            this.errors.push("this field cannot be left blank")
        }
        if(val.length &lt; 4 || val.length > 15){
            this.errors.push("value must be between 3 and 15 characters")
        }
    }

},
computed:{
    bindClass () {
        return {
            'is-invalid': this.errors.length>0,
            'is-valid': this.inputValue != '' 
        }
  }
}

                                    </code></pre></td>
                                    <td>
                                        <input type="text" class="form-control" v-model="inputValue" :class="bindClass">
                                        <div class="invalid-feedback">
                                            <li v-for="error in errors">{{ error }}</li>
                                        </div>
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
            inputValue:"",
            errors:[],
        }
    },
    watch:{
        counter(val,oldVal){
            val>oldVal ? this.process="Arttırıldı" : this.process="Azaltıldı"
            this.process +=" | eski değer : " + oldVal
        },
        inputValue(val){
            this.errors = [];
            if(val == ""){
                this.errors.push("this field cannot be left blank")
            }
            if(val.length < 4 || val.length > 15){
                this.errors.push("value must be between 3 and 15 characters")
            }
        }

    },
    computed:{
        bindClass () {
            return {
                'is-invalid': this.errors.length>0,
                'is-valid': this.inputValue != ''
            }
      }
    }
}
</script>
<style lang="">
    
</style>