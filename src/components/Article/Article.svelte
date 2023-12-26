<script lang="ts">
  export let size: number;
  export let date: string;
  export let name: string;
</script>

<div
  class="row mx-4 inline-block"
  style="padding: 0 !important; margin: 0; margin-left: 30px !important; height:32px !important; font-size: 100%"
>
  <ul class="list-inline">
    <li class="list-inline-item text-danger">-rwxr-x-r-x</li>
    <li class="list-inline-item text-success">root root</li>
    <li class="list-inline-item text-warning">{size}</li>
    <li class="list-inline-item text-info">{date}</li>
    <li class="list-inline-item text-warning">
      <a href="/{name.replace(/\s+/g, '-')}">{name}</a>
    </li>
  </ul>
</div>
