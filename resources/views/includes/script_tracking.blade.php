<script>
    let day = [
        'Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'
    ]

    let month = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember']

    $('#search-btn').on('click',function(e){
        e.preventDefault()
        $("#search-text").hide()
        $('#loading').show()
        let searching = $('#searching').val()
        $.get('http://eos-tlx.local/getTrackChoir/'+searching,function(data){
            $('.entry').remove()
            if(JSON.parse(data).datachoir == undefined){
                $.get("/api/checkawb?searching="+searching,function(val){
                    val.forEach(e=>{
                        $('.timeline').append(`<div class="entry">
                            <div class="title">
                                <p>${day[new Date(e.tracktime).getDay()]}</p>
                                <h6>${new Date(e.tracktime).getDate()} ${month[new Date(e.tracktime).getMonth()]} ${new
                            Date(e.tracktime).getFullYear()}</h6>
                            </div>
                            <div class="body">
                                <p>${e.status_eng}
                                </p>
                        
                            </div>
                        </div>`)
                    })
                })
            }else{
                JSON.parse(data).datachoir.forEach(z=>{
                $('.timeline').append(`<div class="entry">
                    <div class="title">
                        <p>${day[new Date(z.shipment_date).getDay()]}</p>
                        <h6>${new Date(z.shipment_date).getDate()} ${month[new Date(z.shipment_date).getMonth()]} ${new
                            Date(z.shipment_date).getFullYear()}</h6>
                    </div>
                    <div class="body">
                        <p>${z.notes}
                        </p>
                
                    </div>
                </div>`)
                })
            }  
            
        $("#search-text").show()
        $('#loading').hide()
            
        })
    })
</script>