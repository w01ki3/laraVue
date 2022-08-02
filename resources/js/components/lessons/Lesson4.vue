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
                  <th scope="col" style="width: 27%">değişken/ler</th>
                  <th scope="col" style="width: 27%">kullanım</th>
                  <th scope="col">sonuç</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <code>counter : {{ counter }} | process: {{ process }}</code>
                  </td>
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
                  <td>
                    <code>inputValue = {{ inputValue }} | errors = {{ errors }}</code>
                  </td>
                  <td>
                    <pre><code>&lt;input type="text" class="form-control" 
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

                                    </code></pre>
                  </td>
                  <td>
                    <input
                      type="text"
                      class="form-control"
                      v-model="inputValue"
                      :class="bindClass"
                    />
                    <div class="invalid-feedback">
                      <li v-for="(error, index) in errors" :key="index">{{ error }}</li>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>
                    <li v-for="(row, index) in inputData" :key="index">
                      {{ row }}
                      <button
                        class="btn btn-danger btn-sm mb-1"
                        @click="deleteData(index)"
                      >
                        [-]
                      </button>
                    </li>
                  </td>
                  <td>
                    <pre><code>&lt;button :disabled="errors.length>0 
|| inputValue==''" @click="addData"&gt;add [+]&lt;/button&gt;
&lt;button @click="deleteData(index)"&gt;[-]&lt;/button&gt;

methods: {
    addData(){
        this.inputData.push(this.inputValue)
    },
    deleteData(index){
        this.inputData.splice(index, 1);
        this.inputData.value = "";
    } 
}
</code></pre>
                  </td>
                  <td>
                    <input
                      type="text"
                      class="form-control"
                      v-model="inputValue"
                      :class="bindClass"
                    />
                    <div class="invalid-feedback">
                      <li v-for="error in errors">{{ error }}</li>
                    </div>
                    <hr />
                    <button
                      :disabled="errors.length > 0 || inputValue == ''"
                      class="btn btn-primary"
                      @click="addData"
                    >
                      add [+]
                    </button>
                  </td>
                </tr>

                <tr>
                  <td colspan="3">
                    <pre><code>&lt;external-component @deleteData="deleteData" :inputData="inputData"&gt;&lt;/external-component&gt;    

import ExternalComponent from './ExternalComponent.vue'
export default {
    components:{
        ExternalComponent
    }
}    

//ExternalComponent.vue

&lt;tr v-for="(row,index) in inputData" :key="index"&gt;
    &lt;td&gt;{ row }&lt;/td&gt;
    &lt;td&gt;&lt;button class="btn btn-danger btn-sm mb-1" @click="$emit('deleteData',index)"&gt;[-]&lt;/button&gt;&lt;/td&gt;
&lt;/tr&gt;

export default {
    props:['inputData']
}</code></pre>
                    <external-component
                      @deleteData="deleteData"
                      :inputData="inputData"
                    ></external-component>
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
import ExternalComponent from "./ExternalComponent.vue";

export default {
  components: {
    ExternalComponent,
  },
  data() {
    return {
      counter: 0,
      process: "Bir işlem yapılmadı",
      inputValue: "",
      errors: [],
      inputData: [],
      error: "",
    };
  },
  watch: {
    counter(val, oldVal) {
      val > oldVal ? (this.process = "Arttırıldı") : (this.process = "Azaltıldı");
      this.process += " | eski değer : " + oldVal;
    },
    inputValue(val) {
      this.errors = [];
      if (val == "") {
        this.errors.push("this field cannot be left blank");
      }
      if (val.length < 4 || val.length > 15) {
        this.errors.push("value must be between 3 and 15 characters");
      }
    },
  },
  computed: {
    bindClass() {
      return {
        "is-invalid": this.errors.length > 0,
        "is-valid": this.inputValue != "",
      };
    },
  },
  methods: {
    addData() {
      this.inputData.push(this.inputValue);
    },
    deleteData(index) {
      this.inputData.splice(index, 1);
      this.inputData.value = "";
    },
  },
};
</script>
<style lang=""></style>
