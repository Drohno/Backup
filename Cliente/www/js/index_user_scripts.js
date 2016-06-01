/*jshint browser:true */
/*global $ */(function()
{
 "use strict";
 /*
   hook up event handlers
 */
    
function register_event_handlers()
 {
     
    /* button  #navBPrinci */
    $(document).on("click", "#navBPrinci", function(evt)
    {    
        uib_sb.toggle_sidebar($("#sbPrin")); 
        
    });

        /* button  Button */


        /* button  #navBtiendas */


        /* button  #navBtiendas */
    

        
        /* button  Botigues */


        /* button  Promos */


        /* button  #bTp */


        /* button  #bTp */


        /* button  #bPp */


        /* button  #bTp */
    

        /* button  #bPt */
    $(document).on("click", "#bPt", function(evt)
    {
         /*global activate_page */
         activate_page("#mainpage");
        uib_sb.close_all_sidebars;
    });

        /* button  #navBpromos */
    

        /* button  #bPp */


        /* button  #bPp */


        /* button  #bPp */


        /* listitem  Fotografía e Informática */


        /* button  #navB */
    

        /* listitem  Fotografía e Informática */
    $(document).on("click", ".uib_w_18", function(evt)
    {
         /*global activate_subpage */
         activate_subpage("#a20cmstudio");
        uib_sb.close_all_sidebars;
    });

        /* listitem  Librerías, papelerías */
    $(document).on("click", ".uib_w_19", function(evt)
    {
         /*global activate_subpage */
         activate_subpage("#abacus");
        uib_sb.close_all_sidebars;
    });

        /* listitem  Informática Sant Boi */


        /* button  #bPp */


        /* button  #bPp */


        /* button  #bPp */


        /* button  #bPp */


        /* button  #bPp */


        /* button  #bPp */


        /* button  #bPp */


        /* listitem  Informática Sant Boi */
    $(document).on("click", ".uib_w_20", function(evt)
    {
         /*global activate_subpage */
         activate_subpage("#informaticastboi");
        uib_sb.close_all_sidebars;
    });

        /* button  #navRegistro */
    

        /* button  #bPp */


        /* button  #bPr */
    $(document).on("click", "#bPr", function(evt)
    {
         /*global activate_page */
         activate_page("#registro");
        uib_sb.close_all_sidebars;
    });

        /* button  #bPp */


        /* button  #bPp */
    

        /* button  #bPr */
    $(document).on("click", "#bPr", function(evt)
    {
         /*global activate_page */
         activate_page("#registro");
        uib_sb.close_all_sidebars;
    });

        /* button  #bPp */
    

        /* button  #bPr */
    $(document).on("click", "#bPr", function(evt)
    {
         /*global activate_page */
         activate_page("#registro");
        uib_sb.close_all_sidebars;
    });

        /* button  #bPp */
    $(document).on("click", "#bPp", function(evt)
    {
         /*global activate_page */
         activate_page("#promos");
    });

        /* button  #bPr */
    $(document).on("click", "#bPr", function(evt)
    {
         /*global activate_page */
         activate_page("#registro");
        uib_sb.close_all_sidebars;
    });

        /* button  #bPp */
    $(document).on("click", "#bPp", function(evt)
    {
         /*global activate_page */
        actualizarPromos();
         activate_page("#promos");
        uib_sb.close_all_sidebars;
    });

        /* button  #bPr */
    $(document).on("click", "#bPr", function(evt)
    {
         /*global activate_page */
         activate_page("#registro");
        uib_sb.close_all_sidebars;
    });
     
        /* listitem  .uib_w_21 */


        /* listitem  El Fogon de Sant Boi */
    $(document).on("click", ".uib_w_21", function(evt)
    {
         /*global activate_subpage */
         activate_subpage("#fogonstboi");
        uib_sb.close_all_sidebars;
    });

        /* listitem  Fotografía e Informática */


        /* listitem  Fotografía e Informática */
    $(document).on("click", ".uib_w_26", function(evt)
    {
         /*global activate_subpage */
         activate_subpage("#a20cmstudio");
    });

        /* listitem  Librerías, papelerías */
    $(document).on("click", ".uib_w_25", function(evt)
    {
         /*global activate_subpage */
         activate_subpage("#abacus");
        uib_sb.close_all_sidebars;
    });

        /* listitem  Informática Sant Boi */
    $(document).on("click", ".uib_w_27", function(evt)
    {
         /*global activate_subpage */
         activate_subpage("#informaticastboi");
        uib_sb.close_all_sidebars;
    });

        /* listitem  .uib_w_34 */
    $(document).on("click", ".uib_w_34", function(evt)
    {
         /*global activate_subpage */
         activate_subpage("#quiroteresa");
        uib_sb.close_all_sidebars;
    });

        /* listitem  El Fogon de Sant Boi */
    $(document).on("click", ".uib_w_35", function(evt)
    {
         /*global activate_subpage */
         activate_subpage("#fogonstboi");
        uib_sb.close_all_sidebars;
    });
     
      /* button  #bPc */
    $(document).on("click", "#bPc", function(evt)
    {
         /*global activate_page */
         activate_page("#cuenta"); 
        infoCuenta();
        uib_sb.close_all_sidebars;
    });
    
        /* button  #navBCuenta */
    
    
        /* button  #SliderBarBotonRegistro */
    
    
        /* button  #bTp */
    $(document).on("click", "#bTp", function(evt)
    {
         /*global activate_page */
         activate_page("#tiendas"); 
        uib_sb.close_all_sidebars;
    });
    
        /* button  #SliderBarBotonRegistro */
    $(document).on("click", "#SliderBarBotonRegistro", function(evt)
    {
         /*global activate_page */
         activate_page("#registro"); 
        uib_sb.close_all_sidebars;
    });
    
        /* button  #SliderBarBotonCuenta */
    $(document).on("click", "#SliderBarBotonCuenta", function(evt)
    {
         /*global activate_page */
         activate_page("#cuenta");
        infoCuenta();
        uib_sb.close_all_sidebars;
    });
    
        /* button  Registro */
    
    
        /* button  Cuenta */
    
    
        /* button  #navBCuenta */
    
    
        /* button  #navBtiendas */
    $(document).on("click", "#navBtiendas", function(evt)
    {
         /*global uib_sb */
         /* Other possible functions are: 
           uib_sb.open_sidebar($sb)
           uib_sb.close_sidebar($sb)
           uib_sb.toggle_sidebar($sb)
            uib_sb.close_all_sidebars()
          See js/sidebar.js for the full sidebar API */
        
         uib_sb.toggle_sidebar($("#sbTiendas"));  
         return false;
    });
    
        /* button  #navB */
    
    
        /* button  #navB */
    
    
        /* button  #navB */
    
    
        /* button  #navB */
    
    
        /* button  #navB */
    
    
        /* button  #navB */
    $(document).on("click", "#navB", function(evt)
    {
         /*global uib_sb */
         /* Other possible functions are: 
           uib_sb.open_sidebar($sb)
           uib_sb.close_sidebar($sb)
           uib_sb.toggle_sidebar($sb)
            uib_sb.close_all_sidebars()
          See js/sidebar.js for the full sidebar API */
        
         uib_sb.toggle_sidebar($("#sb"));  
         return false;
    });
    
        /* button  #ACuenta */
    
    
        /* button  #ACuenta */
    
    
        /* button  #ACuenta */
    
    
        /* button  #ARegistro */
    
    
        /* button  #navBpromos */
    $(document).on("click", "#navBpromos", function(evt)
    {
         /*global uib_sb */
         /* Other possible functions are: 
           uib_sb.open_sidebar($sb)
           uib_sb.close_sidebar($sb)
           uib_sb.toggle_sidebar($sb)
            uib_sb.close_all_sidebars()
          See js/sidebar.js for the full sidebar API */
        
         uib_sb.toggle_sidebar($("#sbpromos"));  
         return false;
    });
    
        /* button  #navRegistro */
    
     
     
    /* PUSH NOTIFICATIONS */
     
    var pushNotification;
    var regID;
     
    function successHandler (result) {
        window.console.log('result = ' + result);
    }
    
    function errorHandler (error) {
        window.console.log('error = ' + error);
    }
     
    window.onNotificationGCM = function(e) {
        switch( e.event )
        {
            case 'registered':
                if ( e.regid.length > 0 )
                {
                    window.console.log('REGISTERED -> REGID:' + e.regid );
                    $(function () {
                        //introducimos token en el sitio correspondiente del form
                      $('#pushtoken').val(e.regid);
                      window.console.log("token guardado en formulario");
                        var aux = localStorage.getItem("registrado")||"false";
                        if(aux.localeCompare("true")==0){ 
                            var email = localStorage.getItem("email"); 
                            $.ajax({
                                type:'POST',
                                url:'http://www.appserv.hol.es/apptoken.php',
                                data: {token: e.regid, codasoc: 3, email: email},
                                dataType: 'json',
                                success: function (data) {
                                    //alert("Success");
                                },
                                error: function(xhr, textStatus, errorThrown, data){
                                    window.console.log("xhr.status: " + xhr.status);
                                    window.console.log("xhr.statusText: " + xhr.statusText);
                                    window.console.log("xhr.readyState: " + xhr.readyState);
                                    window.console.log("xhr.responseText: " + xhr.responseText);
                                    window.console.log("errorThrown: " + errorThrown);
                                }
                            });
                            evt.preventDefault();
                        }
                    });
                }
                break;
            case 'message':
                window.console.log('gcm: on message ');
                actualizarPromos();
                activate_page("#promos");
                break;

            case 'error':
                window.console.log( "gcm error: "+e.msg );
                break;
            default:
                break;
        }
    };
    var txt;
    //Comprobamos que el dispositivo esta listo para pedir el id a GCM
    document.addEventListener("deviceready", function(){
        pushNotification = window.plugins.pushNotification;
        window.console.log("Device Ready");
        window.plugins.pushNotification.unregister(successHandler, errorHandler);
        window.console.log("Unregistered");
        //alert(device.platform);
        if ( device.platform == 'android' || device.platform == 'Android' || device.platform == "amazon-fireos" ){
            try {
                pushNotification.register(
                    successHandler, errorHandler, { "senderID":"443647167733", "ecb":"window.onNotificationGCM" });
            } catch(err)
            {
                txt="There was an error on this page.\n\n";
                txt+="Error description: " + err.message + "\n\n";
                window.console.log(txt);
            }
        }
    }, false);
     
     /* FIN PUSH NOTIFICATIONS */
    
    function validateEmail(email) { 
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
    
    
        /* button  Button */
    $(document).on("click", ".uib_w_43", function(evt)
    {
        localStorage.setItem("email","");
        localStorage.setItem("nom","");
        localStorage.setItem("ape","");
        localStorage.setItem("registrado","false");
        alert("Sesión cerrada")
        activate_page("#mainpage");
        uib_sb.close_all_sidebars;
        location.reload();
         return false;
    });
    
        /* button  #ALogin */
    
    
        /* button  #login */
    
    
        /* button  #navRegistro */
    
    
        /* button  #navRegistro */
    
    
        /* button  #navBCuenta */
    $(document).on("click", "#navBCuenta", function(evt)
    {
         /*global uib_sb */
         /* Other possible functions are: 
           uib_sb.open_sidebar($sb)
           uib_sb.close_sidebar($sb)
           uib_sb.toggle_sidebar($sb)
            uib_sb.close_all_sidebars()
          See js/sidebar.js for the full sidebar API */
        
         uib_sb.toggle_sidebar($("#sbCuenta"));  
         return false;
    });
    
        /* button  #ARegistro */
    
    
        /* button  #ACuenta */
    
    
        /* button  #ALogin */
    
    
        /* button  #navRegistro */
    $(document).on("click", "#navRegistro", function(evt)
    {
         /*global uib_sb */
         /* Other possible functions are: 
           uib_sb.open_sidebar($sb)
           uib_sb.close_sidebar($sb)
           uib_sb.toggle_sidebar($sb)
            uib_sb.close_all_sidebars()
          See js/sidebar.js for the full sidebar API */
        
         uib_sb.toggle_sidebar($("#sbRegistro"));  
         return false;
    });
    
        /* button  #navLogin */
    $(document).on("click", "#navLogin", function(evt)
    {
         /*global uib_sb */
         /* Other possible functions are: 
           uib_sb.open_sidebar($sb)
           uib_sb.close_sidebar($sb)
           uib_sb.toggle_sidebar($sb)
            uib_sb.close_all_sidebars()
          See js/sidebar.js for the full sidebar API */
        
         uib_sb.toggle_sidebar($("#sbLogin"));  
         return false;
    });
    
        /* button  #ARegistro */
    
    
        /* button  #ACuenta */
    $(document).on("click", "#ACuenta", function(evt)
    {
         /*global activate_page */
         activate_page("#cuenta"); 
        infoCuenta();
        uib_sb.close_all_sidebars;
         return false;
    });
    
        /* button  #ALogin */
    $(document).on("click", "#ALogin", function(evt)
    {
         /*global activate_page */
         activate_page("#login"); 
        uib_sb.close_all_sidebars;
         return false;
    });
    
        /* button  #log */
    $(document).on("click", "#log", function(evt)
    {
        var email = $("#logmail").val();
        $.ajax({
            type:'POST',
            url:'http://www.appserv.hol.es/applogin.php',
            data: $("#form_login").serialize(),
            dataType: 'json',
            success: function (data) {
                if(data.resultat.localeCompare("ok") == 0){
                    //GUARDAR DATOS DEL FORMULARIO EN EL LOCALSTORAGE
                    localStorage.setItem("email",email);
                    localStorage.setItem("nom",data.nom);
                    localStorage.setItem("ape",data.ape);
                    localStorage.setItem("registrado","true");
                    alert(data.error);
                    activate_page("#mainpage");
                    location.reload();
                }else{
                   alert(data.error);
                }
            },
            error: function(xhr, textStatus, errorThrown, data){
                window.console.log("xhr.status: " + xhr.status);
                window.console.log("xhr.statusText: " + xhr.statusText);
                window.console.log("xhr.readyState: " + xhr.readyState);
                window.console.log("xhr.responseText: " + xhr.responseText);
                window.console.log("errorThrown: " + errorThrown);
                window.alert("Error de conexión con el servidor");
            }
        });
        evt.preventDefault();
         return false;
    });
    
        /* button  #ARegistro */
    $(document).on("click", "#ARegistro", function(evt)
    {
         /*global activate_page */
         activate_page("#registro");
        uib_sb.close_all_sidebars;
         return false;
    });
        
    
        /* button  #register */
    $(document).on("click", "#register", function(evt)
    {
      var email = $("#correo").val();
      var nom = $("#nom").val();
      var ape = $("#ape").val();
      //validaciones antes de registrar
      if (validateEmail(email)) {
          if (nom !== ""){
              if(ape !== ""){
                //Registro de usuario en BBDD
                $.ajax({
                        type:'POST',
                        url:'http://www.appserv.hol.es/appservice.php',
                        data: $("#form_registro").serialize(),
                        dataType: 'json',
                        success: function (data) {
                            if(data.resultat.localeCompare("ok") == 0){
                                alert(data.error);
                                //GUARDAR DATOS DEL FORMULARIO EN EL LOCALSTORAGE
                                localStorage.setItem("email",email);
                                localStorage.setItem("nom",nom);
                                localStorage.setItem("ape",ape);
                                localStorage.setItem("registrado","true");
                                activate_page("#mainpage");
                                location.reload();
                            }else{
                                alert(data.error);
                            }
                        },
                        error: function(xhr, textStatus, errorThrown, data){
                            window.console.log("xhr.status: " + xhr.status);
                            window.console.log("xhr.statusText: " + xhr.statusText);
                            window.console.log("xhr.readyState: " + xhr.readyState);
                            window.console.log("xhr.responseText: " + xhr.responseText);
                            window.console.log("errorThrown: " + errorThrown);
                            alert("Error de conexión con servidor");
                            
                        }
                    });
                evt.preventDefault();
              } else {
                  window.alert("Indique su apellido");
              }
          } else {
              window.alert("Indique su nombre");
          }
      } else {
          window.alert("Indique su email correctamente");
      }
         return false;
    });
    
        /* button  #bPp */
    $(document).on("click", "#bPp", function(evt)
    {
        /* your code goes here */ 
         return false;
    });
    
        /* button  #bPp */
    $(document).on("click", "#bPp", function(evt)
    {
        /* your code goes here */ 
         return false;
    });
     
    function actualizarPromos(){
        var aux = localStorage.getItem("registrado") || "false";
        if(aux.localeCompare("true")==0){
            $.ajax({
                    type:'POST',
                    url:'http://www.appserv.hol.es/apppromos.php',
                    data: {codasoc: 3},
                    dataType: 'json',
                    success: function (data) {
                        $('#promo_list').html('<ul data-role="listview" id="promo_list" style="list-style-type: none; padding: 0px; margin: 0px;">                         <!-- RELLENADO POR script EN JS --></ul>');
                       for(var i = 0; i<data.ofertas.length; i++){
                            //[i][0] -> Titulo oferta
                            //[i][1] -> Cuerpo oferta
                            //[i][2] -> URL imagen
                            //[i][3] -> inicio oferta
                            //[i][4] -> fin oferta
                            if(i%2==0){
                                 $('#promo_list').append('<li style="margin: 10px; background-color: #FDA6AC; border: 5px groove;"><img src="'+data.ofertas[i][2]+'" style="width: 100%; margin: auto; display: block; padding: 0px; margin:0px;"><h3>'+data.ofertas[i][0] 
                                +'</h3><p>' + data.ofertas[i][1] +'</p>'
                                +'<h4>Fin oferta:</h4><p>'+ data.ofertas[i][4] + '</p></li>');
                            }else{
                                $('#promo_list').append('<li style="margin: 10px; background-color: #FED2D5; border: 5px groove;"><img src="'+data.ofertas[i][2]+'" style="width: 100%; margin: auto; display: block; padding: 0px; margin:0px;"><h3>'+data.ofertas[i][0] 
                                +'</h3><p>' + data.ofertas[i][1] +'</p>'
                                +'<h4>Fin oferta:</h4><p>'+ data.ofertas[i][4] + '</p></li>');
                            }
                        }
                    $('#promo_list').listview('refresh');
                    },
                    error: function(xhr, textStatus, errorThrown, data){
                        window.console.log("xhr.status: " + xhr.status);
                        window.console.log("xhr.statusText: " + xhr.statusText);
                        window.console.log("xhr.readyState: " + xhr.readyState);
                        window.console.log("xhr.responseText: " + xhr.responseText);
                        window.console.log("errorThrown: " + errorThrown);
                        alert("Error consiguiendo ofertas");                  
                    }
                });
        }else{
            alert("Si quiere ver las promociones, considere registrarse porfavor :)");
        }
    }
     
     function infoCuenta(){
        $(document).getElementById("em").innerHTML = localStorage.getItem("email");
        $(document).getElementById("nm").innerHTML = localStorage.getItem("nom");
        $(document).getElementById("ap").innerHTML = localStorage.getItem("ape");
     }
    }
 document.addEventListener("app.Ready", register_event_handlers, false);
})();
