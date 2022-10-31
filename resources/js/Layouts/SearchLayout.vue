

<template>
  <link
    href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    rel="stylesheet"
    id="bootstrap-css"
  />

  <main>
    <header>
      <Link href="/"></Link>
      <Link href="/search"></Link>
    </header>
    <article>
      <div class="col-md-12">
        <h1>VERTO GROUP ASSESSMENT</h1>
        <div class="card card-default">
          <div class="card-header">Search Image</div>
          <div class="card-body">
            <form action="" method="POST">
              <div class="form-group">
                <input type="text" name="title" placeholder="Image name" class="form-control">
              </div>
              <div class="form-group">
                <input type="submit" value="Search Image" class="btn btn-info">
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="container page-top">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-xs-6 thumb" v-for="(item, index) in currentPage" :key="index">
            <img class="image{{ index }}" :src="item" alt="" height="400" width="400" />
            <!-- <div>{{ currentPage }}</div> -->
          </div>
        </div>
        <slot></slot>
      </div>
    </article>
  </main>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";

defineProps({
  currentPage: Object,
});
</script>