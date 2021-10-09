<script>
    $('#check-btn').on('click',function(e){
        $("#ongkir-id").empty()
        e.preventDefault()
        $("#check-text").hide()
        $('#check-loading').show()
        let country = $('#country').val()
        let package = $('#package').val()
        $.get('http://localhost:8000/api/ongkir?country='+country+'&packagetype='+package,function(data){
            if(data){
                $("#ongkir-id").append("Rp. " + data.prices)
            }else{
                $("#ongkir-id").append("-")
            }
            
        $("#check-text").show()
        $('#check-loading').hide()
            
        })
    })
</script>