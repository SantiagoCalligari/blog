<script lang="ts">
  export let id: number;
  export let size: number;
  export let date: string;
  export let name: string;
  export let user: any;
  function handleDeleteClick() {
    const formData = new FormData();
    formData.append("articleId", id); // replace '123' with the actual article ID

    fetch(`?/destroy`, {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: new URLSearchParams(formData),
    })
      .then((response) => response.json())
      .then(location.reload());
  }
</script>

<div
  class="row mx-4 inline-block"
  style="padding: 0 !important; margin: 0; margin-left: 30px !important; height:32px !important; font-size: 100%"
>
  <ul class="list-inline">
    {#if user.username !== null}
      <a
        href="/"
        type="submit"
        id="del"
        style="color:red; "
        on:click={handleDeleteClick}
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="feather feather-trash"
          style="height:15px; width:15px"
        >
          <polyline points="3 6 5 6 21 6"></polyline>
          <path
            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
          ></path>
        </svg>
      </a>
    {/if}
    <li class="list-inline-item text-danger">-rwxr-x-r-x</li>
    <li class="list-inline-item text-danger">-rwxr-x-r-x</li>
    <li class="list-inline-item text-success">root root</li>
    <li
      class="list-inline-item text-warning"
      style="min-width: 5rem; text-align:right"
    >
      {size} B
    </li>
    <li class="list-inline-item text-info">{date}</li>
    <li class="list-inline-item text-warning">
      <a href="/{name.replace(/\s+/g, '-')}">{name}</a>
    </li>
  </ul>
</div>
