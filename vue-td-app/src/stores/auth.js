import { defineStore } from "pinia";
import { computed, ref } from "vue";
import { csrfCookie, login, register, logout, getUser } from "../http/auth-api";

// Define the store using the Pinia library
export const useAuthStore = defineStore("authStore", () => {
  // Create a reactive reference variable to store the user data
  const user = ref(null);

  // Define a computed property to check if the user is logged in
  const isLoggedIn = computed(() => !!user.value);

  // Define an asynchronous function to fetch the user data
  const fetchUser = async () => {
    // Make a HTTP request to get the user data
    const { data } = await getUser();

    // Update the user variable with the received data
    user.value = data;
  };

  const handleLogin = async (credentials) => {
    await csrfCookie();
    await login(credentials);
    await fetchUser();
  };

  const handleRegister = async (newUser) => {
    await register(newUser);
    await handleLogin({
      email: newUser.email,
      password: newUser.password,
    });
  };

  const handleLogout = async () => {
    await logout();
    user.value = null;
  };

  return {
    user,
    isLoggedIn,
    fetchUser,
    handleRegister,
    handleLogin,
    handleLogout,
  };
});
