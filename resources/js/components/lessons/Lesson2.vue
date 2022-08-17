<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col mt-3">
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
                      <pre><code>&lt;input v-model="inputValue"/&gt;</code></pre>
                    </td>
                    <td><input class="form-control" type="text" v-model="inputValue" /></td>
                  </tr>

                  <tr>
                    <td>
                      <code> inputValue = {{ inputValue }} </code>
                    </td>
                    <td>
                      <pre><code>&lt;input v-model.lazy="inputValue"/&gt;</code></pre>
                    </td>
                    <td><input class="form-control" type="text" v-model.lazy="inputValue" /></td>
                  </tr>

                  <tr>
                    <td>
                      <code> checked = {{ checked }} </code>
                    </td>
                    <td>
                      <pre><code>&lt;input type="checkbox" id="checkbox" v-model="checked"/&gt;</code></pre>
                    </td>
                    <td>
                      <input class="form-check-input" type="checkbox" v-model="checked" />
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <code> checkedNames = {{ checkedNames }} </code>
                    </td>
                    <td>
                      <pre><code>&lt;input type="checkbox" id="1" value="1" v-model="checkedNames"/&gt;
&lt;input type="checkbox" id="2" value="2" v-model="checkedNames"/&gt;
&lt;input type="checkbox" id="3" value="3" v-model="checkedNames"/&gt;</code></pre>
                    </td>
                    <td>
                      <input class="form-check-input m-1" type="checkbox" id="1" value="1" v-model="checkedNames">
                      <label for="1">1</label>

                      <input class="form-check-input m-1" type="checkbox" id="2" value="2" v-model="checkedNames">
                      <label for="2">2</label>

                      <input class="form-check-input m-1" type="checkbox" id="3" value="3" v-model="checkedNames">
                      <label for="3">3</label>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <code> picked = {{ picked }} </code>
                    </td>
                    <td>
                      <pre><code>&lt;input type="radio" id="one" value="One" v-model="picked"/&gt;
&lt;input type="radio" id="two" value="Two" v-model="picked"/&gt;</code></pre>
                    </td>
                    <td>
                      <input class="form-check-input" type="radio" id="one" value="One" v-model="picked" />
                      <label for="one">One</label>

                      <input class="form-check-input" type="radio" id="two" value="Two" v-model="picked" />
                      <label for="two">Two</label>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <code> selected = {{ selected }} </code>
                    </td>
                    <td>
                      <pre><code>&lt;select v-model="selected"&gt;
  &lt;option&gt;A&lt;/option&gt;
  &lt;option&gt;B&lt;/option&gt;
  &lt;option&gt;C&lt;/option&gt;
&lt;/select&gt;</code></pre>
                    </td>
                    <td>
                      <select class="form-select" v-model="selected">
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                      </select>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <code> selectedMulti = {{ selectedMulti }} </code>
                    </td>
                    <td>
                      <pre><code>&lt;select v-model="selectedMulti" multiple&gt;
  &lt;option&gt;A&lt;/option&gt;
  &lt;option&gt;B&lt;/option&gt;
  &lt;option&gt;C&lt;/option&gt;
&lt;/select&gt;</code></pre>
                    </td>
                    <td>
                      <select class="form-select" v-model="selectedMulti" multiple>
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                      </select>
                    </td>
                  </tr>

                  <tr>
                    <td><code>numberValue = {{ numberValue }}</code></td>
                    <td>
                      <pre><code>&lt;input type="number" v-model.number="numberValue" /&gt;</code></pre>
                    </td>
                    <td><input class="form-control" type="number" v-model.number="numberValue" /></td>
                  </tr>

                </tbody>
              </table>
            </div>
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
      checked: false,
      checkedNames: [],
      picked: "One",
      selected: "",
      selectedMulti: [],
      numberValue: 0,
    };
  },
};
</script>
