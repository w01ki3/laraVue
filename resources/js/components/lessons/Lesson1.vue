<template>
  <div class="row justify-content-center">
    <div class="col-md-8 mt-3">
      <div class="card">
        <div class="card-header">Ders 1</div>
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
                    <code> htmlContent = {{ htmlContent }} </code>
                  </td>
                  <td>
                    <pre><code>&lt;span v-html="htmlContent"&gt;&lt;/span&gt;</code></pre>
                  </td>
                  <td><span v-html="htmlContent"></span></td>
                </tr>
                <tr>
                  <td>
                    <code> numberValue = {{ numberValue }} </code>
                  </td>
                  <td>
                    <pre><code>&lt;span v-if="numberValue > 50"&gt;50 den büyük&lt;/span&gt;
&lt;span v-else-if="numberValue == 50"&gt;50 ye eşit&lt;/span&gt;
&lt;span v-else&gt;50 den küçük&lt;/span&gt;</code></pre>
                  </td>
                  <td>
                    <span v-if="numberValue > 50">50 den büyük</span>
                    <span v-else-if="numberValue == 50">50 ye eşit</span>
                    <span v-else>50 den küçük</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <code>items = {{ items }}</code>
                  </td>
                  <td>
                    <pre><code>&lt;li v-for="item in items"&gt;{ item }&lt;li&gt;</code></pre>
                  </td>
                  <td>
                    <li v-for="item in items">{{ item }}</li>
                  </td>
                </tr>
                <tr>
                  <td>
                    <code>listData = {{ listData }}</code>
                  </td>
                  <td>
                    <pre><code>&lt;li v-for="listItem in listData"&gt;{ listItem.itemName }&lt;li&gt;</code></pre>
                  </td>
                  <td>
                    <li v-for="listItem in listData">
                      {{ listItem.itemName }}
                    </li>
                  </td>
                </tr>
                <tr>
                  <td>
                    <code> numberValue = {{ numberValue }} </code>
                  </td>
                  <td>
                    <pre><code>&lt;button class="btn btn-primary" @click="numberValue--"&gt;-&lt;button&gt;
&lt;button class="btn btn-primary" @click="numberValue++"&gt;+&lt;button&gt;
                  </code></pre>
                  </td>
                  <td>
                    <button class="btn btn-primary m-1" @click="numberValue--">-</button>
                    <button class="btn btn-primary m-1" @click="numberValue++">+</button>
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
      htmlContent: "<strong>HTML içerik</strong>",
      numberValue: 51,
      items: ["data1", "data2", "data3"],
      listData: [
        { itemName: "item1", content: "content1" },
        { itemName: "item2", content: "content2" },
        { itemName: "item3", content: "content3" },
      ],
    };
  },
};
</script>
