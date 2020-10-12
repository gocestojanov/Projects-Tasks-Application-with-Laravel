<template>
  <div>
    <vue-tags-input
      v-model="tag"
      :tags="tags"
      :autocomplete-items="filteredItems"
      @tags-changed="newTags => tags = newTags"
    />
    <input type="hidden" name="projecttag" class="form-control" :value="item">

  </div>
</template>

<script>
import VueTagsInput from '@johmun/vue-tags-input';
import axios from 'axios';


export default {
  components: {
    name: "TagsInput",
    VueTagsInput,
  },
  data() {
    return {
      tag: '',
      tags: [],
      autocompleteItems: [],
      debounce: null,
    };
  },
  props: ['projectid'],
  computed: {
    filteredItems() {
      return this.autocompleteItems.filter(i => {
        return i.text.toLowerCase().indexOf(this.tag.toLowerCase()) !== -1;
      });
    },
    item(){
      return this.tags.map(x => x.text)
    }
  },


  watch: {
    'tag': 'initItems',
  },

 beforeMount(){
    this.initProjectTags()
 },

  methods: {
    update(newTags) {
      this.autocompleteItems = [];
      this.tags = newTags;
    },
    initItems() {

      if (this.tag.length < 0) return;
        const url = '/tags';
    //    const url = `https://itunes.apple.com/search?term=${this.tag}&entity=allArtist&attribute=allArtistTerm&limit=6`;

      clearTimeout(this.debounce);

      this.debounce = setTimeout(() => {
        axios.get(url).then(response => {
        //    this.autocompleteItems = response.data.results.map(a => { return { text: a.name };} );
            this.autocompleteItems = response.data.map( a => { return { text: a.name };} );


        }).catch( (error) => console.log(error) );

      }, 600);
    },

    initProjectTags() {
      const url = '/projecttags/' + this.projectid;

       clearTimeout(this.debounce);

      this.debounce = setTimeout(() => {
        axios.get(url).then(response => {

               this.tags = response.data.projecttags.map( a => { return { text: a.name };} );

        }).catch( (error) => console.log(error) );

      }, 600);
    },



  },

};
</script>
