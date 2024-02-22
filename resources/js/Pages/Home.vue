<script setup>

     import {useForm, router} from "@inertiajs/vue3";

     defineProps({
         posts: Array
     })

     const form = useForm({
         body: '',
     })

     const createPost = () => {
         form.post('posts', {

             preserveScroll: true,

             onSuccess: () => {
                 // form.body = ''
                 form.reset()
             }
         })
     }

     const refreshPosts = () => {
             router.get('/', {}, {
                 preserveScroll: true,
                 only: ['posts']
             })
     }
</script>

<template>
    <h3 class="text-center text-primary text-decoration-underline">[ This is my first inertia application ]</h3><br>
    <div class="container">
        <div>
            <form v-on:submit.prevent="createPost">
                <div class="mb-3">
                    <label for="body" class="form-label fw-bold">Body</label>
                    <textarea
                              name="body"
                              class="form-control"
                              id="body"
                              rows="3"
                              v-model="form.body"
                              v-on:focus="form.clearErrors()"
                              placeholder="Enter body here">
                    </textarea>
                <div class="text-danger" v-if="form.errors.body">
                    {{ form.errors.body }}
                </div>
                <button
                        type="submit"
                        class="btn btn-primary btn-sm mb-3 mt-2"
                        :disabled="form.processing"
                        :class="{ 'opacity-50': form.processing }">
                        save
                </button>
                </div>
            </form>
        </div>
        <div class="py-1 text-center text-muted">
            <a type="button" v-on:click="refreshPosts">Refresh Post</a>
        </div>

        <table class="table mt-1">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">body</th>
                <th scope="col">Action</th>
            </tr>
            </thead>

            <tbody>
            <tr v-for="post in posts" :key="post.id">
                    <th scope="row">{{ post.id }}</th>
                    <td>{{ post.body.substring(0,70) + '...' }}</td>
                    <td>
                        <button class="btn btn-primary btn-sm">edit</button>
                        <button class="btn btn-danger btn-sm ms-1">delete</button>
                    </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
