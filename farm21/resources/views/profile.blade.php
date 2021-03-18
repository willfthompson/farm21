<h1>This is your profile</h1>

<script>
    data(){
                return{
                    sensors: []
                }
            },
            mounted() { axios.get('/api/sensors/')
            .then(response => 
            
            this.sensors = response.data)
            
            }
</script>