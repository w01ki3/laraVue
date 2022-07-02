<template>
  <div class="row justify-content-center">
    <div class="col-md-8 mt-3">
      <div class="card">
        <div class="card-header">Ders 1</div>
        <div class="card-body">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">değişken/ler</th>
                <th scope="col">kullanım</th>
                <th scope="col">sonuç</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <code> htmlContent = {{ htmlContent }} </code>
                </td>
                <td>
                  <pre><code>&lt;span v-html="htmlContent"&gt;&lt;/span&gt;</code></pre>
                </td>
                <td><span v-html="htmlContent"></span></td>
              </tr>
              <tr>
                <td>numberValue = 50</td>
                <td>
                  <pre><code>&lt;span v-if="numberValue > 49"&gt;49 dan büyük&lt;/span&gt;</code></pre>
                  <pre><code>&lt;span v-if="numberValue > 50"&gt;50 den büyük&lt;/span&gt;</code></pre>
                </td>
                <td>
                  <span v-if="numberValue > 49">49 dan büyük</span>
                  <span v-if="numberValue > 51">51 den büyük</span>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
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
  data() {
    return {
      htmlContent: "<strong>HTML içerik</strong>",
      numberValue: 50,
    };
  },
};
</script>
