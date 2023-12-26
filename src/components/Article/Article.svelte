<script lang="ts">
  export let size: number;
  export let date: string;
  export let name: string;
</script>

<div class="row mx-4 inline-block">
  <ul class="list-inline">
    <li class="list-inline-item text-danger">-rwxr-x-r-x</li>
    <li class="list-inline-item text-success">root root</li>
    <li class="list-inline-item text-warning">{size}</li>
    <li class="list-inline-item text-info">{date}</li>
    <li class="list-inline-item text-warning">
      <a href="/{name}">{name}</a>
    </li>
  </ul>
</div>
