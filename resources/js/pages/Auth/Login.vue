
<template>
    <Head title="Login" />

    <div class="min-vh-100 d-flex align-items-center justify-content-center bg-primary p-4">

        <div class="w-100" style="max-width: 420px;">

            <!-- Logo -->
            <Logo
                class="d-block mx-auto mb-4"
                height="50"
            />

            <!-- Login Form -->
            <form
                @submit.prevent="login"
                class="card border-0 shadow-lg overflow-hidden"
            >

                <div class="card-body p-4 p-md-5">

                    <h2 class="text-center fw-bold mb-3">
                        Welcome Back!
                    </h2>

                    <hr class="mx-auto mb-4 opacity-50" style="width: 80px;">

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="form-label">
                            Email
                        </label>

                        <input
                            id="email"
                            v-model="form.email"
                            type="email"
                            class="form-control"
                            :class="{ 'is-invalid': form.errors.email }"
                            placeholder="Enter your email"
                            autofocus
                            autocapitalize="off"
                        />

                        <div v-if="form.errors.email" class="invalid-feedback">
                            {{ form.errors.email }}
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" class="form-label">
                            Password
                        </label>

                        <input
                            id="password"
                            v-model="form.password"
                            type="password"
                            class="form-control"
                            :class="{ 'is-invalid': form.errors.password }"
                            placeholder="Enter your password"
                        />

                        <div v-if="form.errors.password" class="invalid-feedback">
                            {{ form.errors.password }}
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="form-check mb-3">
                        <input
                            id="remember"
                            v-model="form.remember"
                            class="form-check-input"
                            type="checkbox"
                        />

                        <label class="form-check-label" for="remember">
                            Remember Me
                        </label>
                    </div>

                </div>

                <!-- Submit Button -->
                <div class="card-footer bg-light border-top p-3 d-flex justify-content-end">

                    <button
                        type="submit"
                        class="btn btn-primary px-4"
                        :disabled="form.processing"
                    >
                        <span
                            v-if="form.processing"
                            class="spinner-border spinner-border-sm me-2"
                            role="status"
                        ></span>

                        {{ form.processing ? 'Logging in...' : 'Login' }}
                    </button>

                </div>

            </form>

        </div>

    </div>
</template>

<script>
import { Head, useForm } from '@inertiajs/vue3'
import Logo from '@/Shared/Logo.vue'

export default {
    components: {
        Head,
        Logo,
    },

    setup() {
        const form = useForm({
            email: 'johndoe@example.com',
            password: 'secret',
            remember: false,
        })

        function login() {
            form.post('/login')
        }

        return {
            form,
            login,
        }
    },
}
</script>
