

        document
            .getElementById("btnEnviar")
            .addEventListener(
                "click",
                function(){

                    let nom =
                        document.getElementById("nom")
                        .value
                        .trim();

                    if(nom===""){

                        alert(
                            "Introdueix el teu nom"
                        );

                        return;
                    }

                    alert(
                        "Missatge enviat correctament"
                    );

                }
            );

