$(function(){


    $('#searchButton').click( function(){
        var state = $('#statesSelect').val();
        var municipality = $('#municipalitiesSelect').val();

        $.ajax({
            url: "db/getPDF.php", 
            type: "GET",            
            data : {state: state, 
                   municipality: municipality },
            success: function(data)  
            {
                $("#tableResult").find("tr").remove();
                $("#tableResult").append("<tr><th>Estado</th><th>Municipio</th><th>PDF</th></tr>");
                var json = JSON.parse(data);
                $.each(json, function(contador, elemento){
                    $("#tableResult").append("<tr><td>"+elemento.state+"</td><td>"+elemento.municipality+"</td><td><a href="+elemento.link+">VER PDF</a></td></tr>");         
                }); 
            }
        });
    });

    $('#statesSelect').on('change', function() {
        var state = $('#statesSelect').val();
        if(state == "Todos"){

        }
        else{
            $.ajax({
                url: "db/getMunicipalities.php", 
                type: "GET",            
                data:  {state: state}, 
                success: function(data)  
                {
                    $('#municipalitiesSelect').find('option').remove();
                    var json = JSON.parse(data);
                    $("#municipalitiesSelect").append("<option value=0>Todos</option>");
                    $.each(json, function(contador, elemento){
                        $("#municipalitiesSelect").append("<option value="+elemento.id+">"+elemento.name+"</option>");           
                    }); 
                }
                });
        }
      });

});


