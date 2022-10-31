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
                <input
                  type="text"
                  name="title"
                  placeholder="Image name"
                  class="form-control"
                  v-model="message"
                />
              </div>
              <div class="form-group">
                <button class="search-button">
                  <a :href="message"
                    >Search</a
                  >
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="container page-top">
        <div class="row">
          <div
            class="col-lg-4 col-md-4 col-xs-6 thumb"
            v-for="(item, index) in currentPage"
            :key="index"
          >
            <img
              v-if="item.urls"
              class="image{{ index }}"
              :src="item.urls.regular"
              alt=""
              height="400"
              width="400"
            />
            <p v-if="item.description">{{ cutting(item.description, 20) }}</p>
            <p v-else>{{ item.alt_description }}</p>
          </div>
        </div>
        <slot></slot>
      </div>
    </article>
  </main>
</template>

<script>
export default {
  data() {
    return {
      message: "",
    };
  },
  props: {
    currentPage: {
      imageUrl: Object,
    },
  },
  methods: {
    cutting(data, num) {
      const reqdString = data.split("").slice(0, num).join("");
      return reqdString;
    },
  },
};
</script>