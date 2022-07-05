<template>
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header">Ders 3</div>
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
                                        <td><code>red = {{ red }}</code></td>
                                        <td><pre><code>&lt;span v-bind:class="{ 'text-danger':red }"&gt;color value : { red }&lt;/span&gt;
&lt;button class="btn btn-danger" @click="red=!red"&gt;change color&lt;/button&gt;
                                        </code></pre></td>
                                        <td>
                                            <span v-bind:class="{ 'text-danger':red }">color value : {{ red }}</span>
                                            <hr>
                                            <button class="btn btn-danger" @click="red=!red">change color</button>
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
            red: false,
        }
    },

}
</script>