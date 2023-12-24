<script lang="ts">
  import Closetags from "./Closetags.svelte";

  let owo = "hello";
</script>

<div
  class="bg-dark text-light m-auto px-3 py-2 mb-5 rounded"
  style="width: 1000px; height: 500px;"
>
  <Closetags />
  <div class="col">
    <div class="row mx-1 inline-block">
      <ul class="list-inline">
        <li class="list-inline-item text-secondary">❯</li>
        <li class="list-inline-item text-warning">ls</li>
        <li class="list-inline-item text-secondary">/etc</li>
        <li class="list-inline-item">|</li>
        <li class="list-inline-item text-warning">more</li>
      </ul>
    </div>
  </div>
</div>
