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
                <td>htmlContent = {{ htmlContent }}</td>
                <td>
                </td>
                <td><span v-html="htmlContent"></span></td>
              </tr>
              <tr>
                <td>numberValue = 50</td>
                <td><code>test</code> tag v-if="numberValue>49"</td>
                <td></td>
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
        table : [
            ['htmlContent',"<strong>HTML içerik</strong>",]

        ],
        numberValue: 50,
    };
  },
};
</script>
