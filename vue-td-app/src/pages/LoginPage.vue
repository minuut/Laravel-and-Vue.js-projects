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
          :class="{ 'is-invalid': errors.email && errors.email[0] }"
          id="email"
          placeholder="name@example.com"
        />
        <label for="email">Email</label>
        <div class="invalid-feedback" v-if="errors.email && errors.email[0]">
          {{ errors.email && errors.email[0] }}
        </div>
      </div>
      <div class="form-floating mb-3" :class="isInvalid">
        <input
          type="password"
          v-model="form.password"
          class="form-control"
          :class="{ 'is-invalid': errors.password && errors.password[0] }"
          id="password"
          placeholder="Password"
        />
        <label for="password">Password</label>
        <div
          class="invalid-feedback"
          v-if="errors.password && errors.password[0]">
          {{ errors.password && errors.password[0] }}
        </div>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">
        Sign in
      </button>
    </form>
  </main>
</template>

<script setup>
import { storeToRefs } from "pinia";
import { useRouter } from "vue-router";
import { reactive } from "vue";
import { useAuthStore } from "../stores/auth";

const router = useRouter();
const store = useAuthStore();
const { isLoggedIn, errors } = storeToRefs(store);
const { handleLogin } = store;

const form = reactive({
  email: "",
  password: "",
});

const handleSubmit = async () => {
  await handleLogin(form);

  // if the user is logged in then redirect to tasks route
  if (isLoggedIn.value) {
    router.push({ name: "tasks" });
  }
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
