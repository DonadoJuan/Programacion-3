function ejemplosJSON(){
	
	var persona = { "nombre" : "Juan", "edad" : 35 };
	alert(persona.nombre); // Juan
	alert(persona.edad); // 35

	alert(persona["nombre"]); // Juan

	/*
	var nombres = [ "Juan", "Pablo", "Ramiro" ];
	alert(nombres[0]); // Juan
	alert(nombres[2]); // Ramiro

	var personas = [{ "nombre" : "Juan", "edad" : 35 },
				{ "nombre" : "Anibal", "edad" : 26 }];
	alert(personas[0].nombre); // Juan
	alert(personas[1].nombre); // Anibal
	*/

	/*
	var cadJSON = ' [{ "nombre" : "Juan", "edad" : 35 },{ "nombre" : "Anibal", "edad" : 26 }] ';

	//var personas = eval ("(" + cadJSON + ") ");
	var personas = eval(cadJSON);

	alert(personas[0].edad); // 35
	alert(personas[0].nombre);
	*/

	/*
	var cadJSON = ' [{ "nombre" : "Juan", "edad" : 35 },{ "nombre" : "Anibal", "edad" : 26 }] ';
	var obj = JSON.parse(cadJSON); // 
	alert(obj[0].nombre);
	*/
	/*
	var persona = { "nombre" : "Juan", "edad" : 35 };

	var toString = JSON.stringify(persona);

	alert(toString);

	var obj = JSON.parse(toString);

	alert(obj.nombre);
	*/
	/*
	var persona = {"nombre":"Jorge","edad":23,
                   "saludar":function(){alert("Hola soy "+this.nombre);}
                  };

	persona.saludar();
	
	var personas = {"personas":[{ "nombre" : "Juan", "edad" : 35 },{ "nombre" : "Anibal", "edad" : 26 }],
					"saludarTodos":function(){
										for(var i=0; i<this.personas.length; i++){
											alert("Hola soy "+this.personas[i].nombre);
										}
									}
				   };
	
	personas.saludarTodos();
*/
	
}