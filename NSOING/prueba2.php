// FUNCIONES LOCAL

        function leerSelectLocal(){
          if($("#selCharterLocal").children().length==0){
            console.log("CharterLocal vacio");
          }else{
            $('#selCharterLocal option').each(function(i){
              var w=$(this);                                        
              arrayCharterLocal.push({"num":w.val(),"derbyname":w.text(),"rol":"","alternate":""});                                             
            });
          }
        }

        function cargarEquipoLocal(array){
          $.each(array,function(i,v){
            var opcion='<option value="'+v.idTeam+'">'+v.nameTeam+'</option>'
            $("#selLocal").append(opcion)
          });
          // cargarSelCharterLocal(arrayEquipos,"1");       //-1 para Opcio Seleccione Equipo.
          // $("#selLocal").val("1")                       //Linea para fase de pruebas.
        }

        function cargarSelCharterLocal(array){
          $('#selCharterLocal option').remove();
          arrayCharterLocal=[];
          arrayRosterLocal=[];
          var espacios="";
          $.each(array,function(i,v){
            var largo= v.num.toString();
            largo=largo.length;
            console.log(largo)
            
              switch(largo){
                case 1:
                espacios="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                break;
                case 2:
                espacios="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                break;
                case 3:
                espacios="&nbsp;&nbsp;&nbsp;&nbsp;";
                break;
                case 4:
                espacios="&nbsp;";
                break;
                default:
                alert("Se produjo un error al cargar los numeros.")
              }
              var nomb=v.num+espacios+v.derbyname
              var opcion='<option value="'+v.num+'">'+nomb+'</option>'

              $("#selCharterLocal").append(opcion)
              var aukera=$('#selCharterLocal option:last')
              arrayCharterLocal.push({"num":aukera.val(),"derbyname":aukera.text()});
            
          });
          

        }


        function cargarCharterLocal(array){

          $('#selCharterLocal option').remove();
          $.each(array,function(i,v){
            var opcion='<option value='+v.num+'>'+v.derbyname+'</option>'
            $('#selCharterLocal').append(opcion);
          }); 
        }

        function cargarRosterLocal(array){
          var alterno="";
          var estado="";
          var opcion="";
          $('#selRosterLocal option').remove();
          $.each(array,function(i,v){
            alterno=v.alternate
            estado=v.rol
            opcion='<option value='+v.num+'>'+v.derbyname+'</option>'
            $('#selRosterLocal').append(opcion);
            $('#selRosterLocal option[value='+v.num+']').addClass(estado)
            $('#selRosterLocal option[value='+v.num+']').addClass(alterno)
          });
        }

        function botonPasaLocal(){        	 
          var estado =$('input[name="radSk"]:checked').val();
          var alterno="";
          var opcion = $("#selCharterLocal option:selected");
          var nomb=$("#selCharterLocal option:selected").text();
          var valor= $("#selCharterLocal option:selected").val();
          var valore=valor;
          



          if ($("#chkAlternate").prop("checked")==true)
            alterno="alternate";

          if ((estado==undefined) || (valor==undefined))
            alert("Algo lo seleccionaste mal")
          else{
            if(estado=="bench"){
              var valore='B'+valor+''
              nomb='B'+nomb+''
            }
            arrayRosterLocal.push({"num":valore,"derbyname":nomb,"rol":estado,"alternate":alterno});
            ordenarArray(arrayRosterLocal);
            cargarRosterLocal(arrayRosterLocal);
          }

          $("#selRosterLocal option").prop("selected", false);
          $("#selCharterLocal option:selected").remove();
          $.each(arrayCharterLocal,function(i,v){


            if(v.num == valor){                                         
              arrayCharterLocal.splice(i,1);
              console.log("arrayCharterLocal",arrayCharterLocal)
              return false;
            }
          });
          if ($("#chkAlternate").prop("checked")==true){
            $("#chkAlternate").prop('disabled',true)
            $("#chkAlternate").prop("checked", false);
            controlLocal[3]=controlLocal[3]-1;
          };

          switch(estado){ 
            case "skater":
            controlLocal[0]=controlLocal[0]-1                            
            if(controlLocal[0]==0){
              $("#radSkater").prop('disabled',true)
              $("#radSkater").prop("checked", false);
            }
            break;
            case "bench":
            controlLocal[1]=controlLocal[1]-1
            if(controlLocal[1]==0){
              $("#radBench").prop('disabled',true)
              $("#radBench").prop("checked", false); 
            }
            break;
            case "captain":
            controlLocal[2]=controlLocal[2]-1
            controlLocal[0]=controlLocal[0]-1 
            if(controlLocal[2]==0){
              $("#radCaptain").prop('disabled',true)
              $("#radSkater").prop("checked", true); 
            }
            break;   
          }
        }

        

        function botonVuelveLocal(){
          var opcion = $("#selRosterLocal option:selected").text();
          var valor= $("#selRosterLocal option:selected").val();
          var estado="";
          var alterno="";
          $.each(arrayRosterLocal,function(i,v){
            if(v.num == valor){ 
              estado=v.rol;
              alterno=v.alternate;
              arrayRosterLocal.splice(i,1);
              cargarRosterLocal(arrayRosterLocal)
              return false;
            }
          });
          if(estado=="bench"){
            console.log("valor",valor)
            valor=valor.substring(1);
            opcion=opcion.substring(1);
            console.log(valor)
          }
          arrayCharterLocal.push({"num":valor,"derbyname":opcion});
          switch (estado){
            case "skater":
            $('#selRosterLocal option[value='+valor+']').removeClass("skater")
            controlLocal[0]+=1;
            if(controlLocal[0]!=0){
              $("#radSkater").prop('disabled',false)
              $("#radSkater").prop("checked", true);
            }
            break;
            case "bench":
            $('#selRosterLocal option[value='+valor+']').removeClass("bench")
            controlLocal[1]+=1;
            if(controlLocal[1]!=0){
              $("#radBench").prop('disabled',false)
              $("#radSkater").prop("checked", true);
            }
            break;
            case "captain":
            $('#selRosterLocal option[value='+valor+']').removeClass("captain")
            controlLocal[2]+=1;
            controlLocal[0]+=1;
            if(controlLocal[2]!=0){
              $("#radCaptain").prop('disabled',false)
              $("#radSkater").prop("checked", true);
            }
            if(controlLocal[0]!=0){
              $("#radSkater").prop('disabled',false)
              $("#radSkater").prop("checked", true);
            }
            break;
            default:
            alert("No se pudo cargar el rol de esta jugadora.")
          }
          if (alterno=="alternate"){
            $("#chkAlternate").prop('disabled',false)
            $("#chkAlternate").prop("checked", false);
            $('#selRosterLocal option[value='+valor+']').removeClass("alternate")
          }
          $("#selRosterLocal option:selected").remove();
          ordenarArray(arrayCharterLocal);
          cargarCharterLocal(arrayCharterLocal);
        }

        function botonResLocal(){
          var estado= ["skater","alternate","bench","captain"];
          $(estado).each(function(){
            $('#selRosterLocal option').removeClass(estado)
          });   
          loadboutconfig(controlLocal);
          cargarSelCharterLocal(arrayEquipos);
          $("#radSkater").prop('disabled',false)
          $("#radBench").prop('disabled',false)
          $("#radCaptain").prop('disabled',false)
          $("#chkAlternate").prop('disabled',false)
          $("#selRosterLocal option").prop("selected", false);
          $("#selRosterLocal option").remove();

        }

