<template>
  <k-dialog
    ref="dialog"
    class="k-pages-dialog"
    size="medium"
    @cancel="$emit('cancel')"
    @submit="submit"
  >
    <template v-if="issue">
      <k-box :text="issue" theme="negative" />
    </template>
    <template v-else>

      <header v-if="model" class="k-pages-dialog-navbar">
        <k-button
          :disabled="!model.id"
          :tooltip="$t('back')"
          icon="angle-left"
          @click="back"
        />
        <k-headline>{{ model.title }}</k-headline>
      </header>

      <k-list v-if="models.length">
        <k-list-item
          v-for="page in models"
          :key="page.id"
          :text="page.text"
          :info="page.info"
          :image="page.image"
          :icon="page.icon"
          @click="toggle(page)"
        >
          <template slot="options">
            <k-button
              v-if="isSelected(page)"
              slot="options"
              :autofocus="true"
              :icon="checkedIcon"
              :tooltip="$t('remove')"
              theme="positive"
            />
            <k-button
              v-else
              slot="options"
              :autofocus="true"
              :tooltip="$t('select')"
              icon="circle-outline"
            />
            <k-button
              v-if="model"
              :disabled="!page.hasChildren"
              :tooltip="$t('open')"
              icon="angle-right"
              @click.stop="go(page)"
            />
          </template>
        </k-list-item>
      </k-list>
      <k-empty v-else icon="page">
        {{ $t("dialog.pages.empty") }}
      </k-empty>
    </template>
  </k-dialog>
</template>

<script>
import picker from "@/mixins/picker/dialog.js";

export default {
  mixins: [picker],
  data() {
    const mixin = picker.data();
    return {
      ...mixin,
      model: {
        title: null,
        parent: null
      },
      options: {
        ...mixin.options,
        parent: null,
      }
    };
  },
  computed: {
    fetchData() {
      return { parent: this.options.parent };
    }
  },
  methods: {
    back() {
      this.options.parent = this.model.parent;
      this.fetch();
    },
    go(page) {
      this.options.parent = page.id;
      this.fetch();
    },
    onFetched(response) {
      this.model = response.model;
    }
  }
};
</script>

<style lang="scss">
.k-pages-dialog-navbar {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 0.5rem;
  padding-right: 38px;
}
.k-pages-dialog-navbar .k-button {
  width: 38px;
}
.k-pages-dialog-navbar .k-button[disabled] {
  opacity: 0;
}
.k-pages-dialog-navbar .k-headline {
  flex-grow: 1;
  text-align: center;
}

.k-pages-dialog-search {
  margin-bottom: 0.5rem;
}

.k-pages-dialog .k-list-item {
  cursor: pointer;
}
.k-pages-dialog .k-list-item .k-button[data-theme="disabled"],
.k-pages-dialog .k-list-item .k-button[disabled] {
  opacity: 0.25;
}
.k-pages-dialog .k-list-item .k-button[data-theme="disabled"]:hover {
  opacity: 1;
}
.k-pages-dialog .k-empty {
  border: 0;
}
</style>
