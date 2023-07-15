<template>
  <div class="container py-5">
    <h1>404</h1>
    <p class="text-red">
      Sorry, page <code>{{ $route.params.notFound }}</code> does not exist. :-(
    </p>
    <router-link :to="{ name: 'tasks' }">Return</router-link>
  </div>
</template>
