<template>
  <div class="row justify-content-center">
    <div class="col-md-8 mt-3">
      <div class="card">
        <div class="card-header">Ders 2</div>
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
                    <code> inputValue = {{ inputValue }} </code>
                  </td>
                  <td>
                    <pre><code>&lt;input v-model="inputValue"&gt;</code></pre>
                  </td>
                  <td><input type="text" v-model="inputValue" class="form-control" /></td>
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
      inputValue: "yaz yada sil",
    };
  },
};
</script>
