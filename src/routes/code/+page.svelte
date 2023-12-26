<script lang="ts">
  import RepositoryTerminal from "../../components/Repositories/RepositoryTerminal.svelte";
  let repositories = [
    {
      link: "https://github.com/SantiagoCalligari/blog",
      description:
        " blog.calligari.ar inspired on https://blog.falconindy.com/",
    },
    {
      link: "https://github.com/SantiagoCalligari/GarchLinux",
      description: "Mi propia distribucion de linux, creada con alci.",
    },
    {
      link: "https://github.com/SantiagoCalligari/gitget",
      description:
        "gitget it's a cli tool that shows every github repo that a user has",
    },
    {
      link: "https://github.com/SantiagoCalligari/http_server",
      description:
        "A project to learn routing, security, parsing and compressing algorithms.",
    },
    {
      link: "https://github.com/SantiagoCalligari/multimove",
      description:
        "Optimize file transfers with Multimove, a fast and efficient tool.",
    },
  ];
</script>

<div class="d-flex">
  <RepositoryTerminal {repositories} />
</div>
