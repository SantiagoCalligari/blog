<script lang="ts">
  export let link: string;
  export let description: string;
</script>

<div class="text-monospace text-info" style="padding: 0; margin:0; height:24px">
  <span class="text-white">├┬</span>
  <a href={link}>{link}</a>
</div>
<div
  class="text-monospace text-danger"
  style="padding: 0; margin:0; height:24px;"
>
  <span class="text-white">│└─</span>

  <span>{description}</span>
</div>
