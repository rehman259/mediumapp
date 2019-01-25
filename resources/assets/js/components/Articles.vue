<template>
  <div>
    <div class="well" v-for="contact in list" >
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <img style="-webkit-user-select: none;cursor: zoom-in;" :src="contact.featured" width="294" height="196">
            </div>
            <div class="col-md-8 col-sm-8">
                <h3>{{contact.title}}</h3>
                <small>Written on {{contact.created_at}}
                </small>
                <br/>
                 <p v-html="contact.content">{{contact.content}}</p>
            </div>
        </div>
    </div>
    
  </div>
</template>

<script>
  export default {
    data: function(){
      return {
        edit:false,
        list:[],
        contact:{
          id:'',
          title:'',
          content:'',
          featured:'',
          created_at:''
        }
      }
    },
    mounted: function(){
      console.log('Contacts Component Loaded...');
      this.fetchContactList();
    },
    methods: {
      fetchContactList:function(){
        console.log('Fetching contacts...');
        axios.get('api/contacts')
          .then((response) => {
            console.log(response.data);
            this.list = response.data;
          }).catch((error) => {
            console.log(error);
          });
      }
      
    }
  }
</script>
