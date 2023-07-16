<template>
  <main class="auth-wrapper">
    <form class="auth-form" @submit.prevent="handleSubmit">
      <h1>
        <span>Yonnie's </span>
        <strong>TODO List</strong>
      </h1>
      <h2 class="h3 mb-4 fw-normal">Please sign in</h2>
      <div class="form-floating mb-2">
        <input
          type="email"
          v-model="form.email"
          class="form-control"
          id="email"
          placeholder="name@example.com"
        />
        <label for="email">Email</label>
      </div>
      <div class="form-floating mb-3">
        <input
          type="password"
          v-model="form.password"
          class="form-control"
          id="password"
          placeholder="Password"
        />
        <label for="password">Password</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">
        Sign in
      </button>
    </form>
  </main>
</template>

<script setup>
import { useRouter } from "vue-router";
import { reactive } from "vue";
import { useAuthStore} from "../stores/auth";

const router = useRouter();
const store = useAuthStore();

const form = reactive({
  email: '',
  password: '',
})

const handleSubmit = async () => {
  await store.handleLogin(form);
  //router.push({ name: "tasks" });
};

</script>

<style scoped>
.auth-wrapper {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  min-height: 60vh;
  margin-top: 2rem;
}

.auth-form {
  width: 400px;
}
</style>
