<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
<header>
    <img id="logopie" src="img/LOGO_CENCA-removebg-preview.png">
</header>
<body>
    <div class="container">
        <h1> Datos</h1>

        <form action="generar_pdf.php" method="POST">
            <div class="form-section">
                <div class="form-group">
                    <h2>Datos Fiscales</h2>
                    <label>Versión:</label>
                    <input type="text" name="version" value="3.3" required>

                    <label>Tipo de Comprobante:</label>
                    <select name="tipoComprobante" required>
                        <option value="I">Ingreso</option>
                        <option value="T">Traslado</option>
                    </select>

                    <label>Uso de CFDI:</label>
                    <select name="usoCfdi" required>
                        <option value="P01">Por definir</option>
                    <option value="Definitivo de importación">Definitivo de importación</option>
                    <option value="Definitivo de exportación">Definitivo de exportación</option>
        <option value="Temporales de importación para retomar al extranjero en el mismo estado">Temporales de importación para retomar al extranjero en el mismo estado</option>
        <option value="Temporales de importación para elaboración, transformación o reparación para empresas con programa IMMEX">Temporales de importación para elaboración, transformación o reparación para empresas con programa IMMEX</option>
        <option value="Temporales de exportación para retornar al país en el mismo estado">Temporales de exportación para retornar al país en el mismo estado</option>
        <option value="Temporales de exportación para elaboración, transformación o reparación">Temporales de exportación para elaboración, transformación o reparación</option>
        <option value="Depósito Fiscal">Depósito Fiscal</option>
        <option value="Elaboración, transformación o reparación en recinto fiscalizado">Elaboración, transformación o reparación en recinto fiscalizado</option>
        <option value="Recinto fiscalizado estratégico">Recinto fiscalizado estratégico</option>
        <option value="Tránsitos">Tránsitos</option>
                    </select>
                    <label>Tipo de Relación:</label>
                    <select name="tipoRelacion" required>
                        <option value="05">Traslados de mercancías facturadas previamente</option>
            <option value="06">De Intercambio</option>
            <option value="06">De Donación</option>
            <option value="06">Reciprocidad</option>
                    </select>
                </div>
            </div>

            <div class="form-section">
                <div class="form-group">
                    <h3>Receptor</h3>
                    <label>RFC:</label>
                    <input type="text" name="rfcReceptor" required>

                    <label>Razón Social:</label>
                    <input type="text" name="razonSocialReceptor" required>
                </div>
            </div>

            <div class="form-section">
                <div class="form-group">
                    <h3>Ubicaciones</h3>
                    <label>ID Origen:</label>
                    <input type="text" name="idOrigen" required>

                    <label>RFC Remitente:</label>
                    <input type="text" name="rfcRemitente" required>

                    <label>Nombre Remitente:</label>
                    <input type="text" name="nombreRemitente" required>

                    <label>Fecha de Salida:</label>
                    <input type="datetime-local" name="fechaSalida" required>

                    <label>ID Destino:</label>
                    <input type="text" name="idDestino" required>

                    <label>RFC Destinatario:</label>
                    <input type="text" name="rfcDestinatario" required>

                    <label>Fecha de Llegada:</label>
                    <input type="datetime-local" name="fechaLlegada" required>
                </div>
            </div>

            <div class="form-section">
                <div class="form-group">
                    <h3>Mercancías</h3>
                    <label>Tipo de Mercancía:</label>
                    <select name="tipoMercancia" required>
                        <option value="no_existe_en_catalogo">No existe en el catálogo</option>
                        <option value="animales_vivos_de_granja">Animales vivos de granja</option>
                        <option value="caballos">Caballos</option>
                        <option value="ovejas">Ovejas</option>
                        <option value="peces_vivos">Peces vivos</option>
                        <option value="alimento_perros_gatos">Alimento para perros y gatos</option>
                    </select>
                    <label>Descripción:</label>
                    <input type="text" name="descripcionMercancia" required>
                    <label>Cantidad:</label>
            <input type="number" name="cantidad" required>
            <label>Dimensiones:</label>
            <select name="dimensiones" required>                                                                                                                                                           <option value="Gramo">Gramo</option>
<option value="Centigramo">Centigramo</option>
<option value="Tonelada (tonelada métrica)">Tonelada (tonelada métrica)</option>
<option value="Decitonelada métrica">Decitonelada métrica</option>
<option value="Miligramo">Miligramo</option>
<option value="Hectogramo">Hectogramo</option>
<option value="Kilotonelada Métrica">Kilotonelada Métrica</option>
<option value="Megagramo">Megagramo</option>
<option value="Libra">Libra</option>
<option value="Grano">Grano</option>
<option value="Onza (avoirdupois)">Onza (avoirdupois)</option>
<option value="Hundredweight">Hundredweight</option>
<option value="Hundred pound">Hundred pound</option>
<option value="Tonelada (UK) o tonelada larga (estados unidos)">Tonelada (UK) o tonelada larga (estados unidos)</option>
<option value="Estone (UK)">Estone (UK)</option>
<option value="Tonelada (estados unidos) o tonelada corta (UK y estados unidos)">Tonelada (estados unidos) o tonelada corta (UK y estados unidos)</option>
<option value="Onza troy u onza farmacéutica">Onza troy u onza farmacéutica</option>
<option value="Slug">Slug</option>
<option value="Libra (avoirdupois) por grado fahrenheit">Libra (avoirdupois) por grado fahrenheit</option>
<option value="Tonelada por kelvin">Tonelada por kelvin</option>
<option value="Tonelada corta por grado fahrenheit">Tonelada corta por grado fahrenheit</option>
<option value="Tonelada, ensayo">Tonelada, ensayo</option>
<option value="Libra Alemana">Libra Alemana</option>
<option value="Microgramo por kilogramo">Microgramo por kilogramo</option>
<option value="Nanogramo por kilogramo">Nanogramo por kilogramo</option>
<option value="Miligramo por kilogramo">Miligramo por kilogramo</option>
<option value="Kilogramo por kilogramo">Kilogramo por kilogramo</option>
<option value="Libra por libra">Libra por libra</option>
<option value="Microgramo por hectogramo">Microgramo por hectogramo</option>
<option value="Metro cúbico">Metro cúbico</option>
<option value="Megalitro">Megalitro</option>
<option value="Litro">Litro</option>
<option value="Milímetro cúbico">Milímetro cúbico</option>
<option value="Centímetro cúbico">Centímetro cúbico</option>
<option value="Decímetro cúbico">Decímetro cúbico</option>
<option value="Mililitro">Mililitro</option>
<option value="Hectolitro">Hectolitro</option>
<option value="Centilitro">Centilitro</option>
<option value="Decámetro cúbico">Decámetro cúbico</option>
<option value="Hectómetro cúbico">Hectómetro cúbico</option>
<option value="Kilómetro cúbico">Kilómetro cúbico</option>
<option value="Metro cúbico por pascal (joules)">Metro cúbico por pascal (joules)</option>
<option value="Decilitro">Decilitro</option>
<option value="Microlitro">Microlitro</option>
<option value="Kilolitro">Kilolitro</option>
<option value="Decalitro">Decalitro</option>
<option value="Centímetro cúbico por bar">Centímetro cúbico por bar</option>
<option value="Litro por bar">Litro por bar</option>
<option value="Metro cúbico por bar">Metro cúbico por bar</option>
<option value="Mililitro por bar">Mililitro por bar</option>
<option value="Pies cúbicos estándar">Pies cúbicos estándar</option>
<option value="Pulgada cúbica">Pulgada cúbica</option>
<option value="Pie cúbico">Pie cúbico</option>
<option value="Yarda cúbica">Yarda cúbica</option>
<option value="Galón (UK)">Galón (UK)</option>
<option value="Galón (EUA)">Galón (EUA)</option>
<option value="Pinta (US)">Pinta (US)</option>
<option value="Pint (uk)">Pint (uk)</option>
<option value="Cuarto (UK)">Cuarto (UK)</option>
<option value="Pinta líquida (estados unidos)">Pinta líquida (estados unidos)</option>
<option value="Cuarto de líquido (estadis unidos)">Cuarto de líquido (estadis unidos)</option>
<option value="Pinta seca (estados unidos)">Pinta seca (estados unidos)</option>
<option value="Onza líquida (UK)">Onza líquida (UK)</option>
<option value="Cuarto (EUA)">Cuarto (EUA)</option>
<option value="Barril (uk petróleo)">Barril (uk petróleo)</option>
<option value="Pie cúbico por grado fahrenheit">Pie cúbico por grado fahrenheit</option>
<option value="Pie cúbico por psi (libra por pulgada cuadrada)">Pie cúbico por psi (libra por pulgada cuadrada)</option>
<option value="Peck (UK)">Peck (UK)</option>
<option value="Pinta (US seco)">Pinta (US seco)</option>
<option value="Cuarto de galón (seco de los EUA)">Cuarto de galón (seco de los EUA)</option>
<option value="Tonelada (flota UK)">Tonelada (flota UK)</option>
<option value="Tonelada (flota estados unidos)">Tonelada (flota estados unidos)</option>
<option value="Yarda cúbica por grado fahrenheit">Yarda cúbica por grado fahrenheit</option>
<option value="Yarda cúbica por psi (libra por pulgada cuadrada)">Yarda cúbica por psi (libra por pulgada cuadrada)</option>
<option value="Onza líquida (estados unidos)">Onza líquida (estados unidos)</option>
<option value="Bushel (UK)">Bushel (UK)</option>
<option value="Bushel (EUA)">Bushel (EUA)</option>
<option value="Barril (EUA)">Barril (EUA)</option>
<option value="Barril seco (EUA)">Barril seco (EUA)</option>
<option value="Galón seco (EUA)">Galón seco (EUA)</option>
<option value="Cuarto seco (estados unidos)">Cuarto seco (estados unidos)</option>
<option value="Estere">Estere</option>
<option value="Taza (unidad de volumen)">Taza (unidad de volumen)</option>
<option value="Cucharada (estados unidos)">Cucharada (estados unidos)</option>
<option value="Cucharilla (estados unidos)">Cucharilla (estados unidos)</option>
<option value="Peck">Peck</option>
<option value="Acre-pie">Acre-pie</option>
<option value="Cordón">Cordón</option>
<option value="Milla cúbica (reino unido)">Milla cúbica (reino unido)</option>
<option value="Unidad tradicional de capacidad de carga">Unidad tradicional de capacidad de carga</option>
<option value="Femtolitro">Femtolitro</option>
<option value="Picolitro">Picolitro</option>
<option value="Nanolitro">Nanolitro</option>
<option value="Metro cúbico normalizado">Metro cúbico normalizado</option>
<option value="Metro cúbico estándar">Metro cúbico estándar</option>
            </select>
            <label>Peso en Kg:</label>
            <input type="number" name="pesoKg" required>

            <label>Valor de la Mercancía:</label>
            <input type="number" name="valorMercancia" required>

            <label for="material">Material:</label><br>
                    <input type="text" id="material" placeholder="Escribe el material...">
                    <div id="listaSugerenciasMaterial" class="sugerencias"></div>
                    <br><br>

                    <label for="tipoEmbalaje">Tipo de embalaje:</label><br>
                    <input type="text" id="tipoEmbalaje" placeholder="Escribe el tipo de embalaje...">
                    <div id="listaSugerenciasEmbalaje" class="sugerencias"></div>
                    <br><br>
                  

            <label>Fracción Arancelaria:</label>
            <input type="text" name="fraccionArancelaria" required>

            <label>Pedimento:</label>
            <input type="text" name="pedimento" required>
                </div>
            </div>
            <div class="form-section">
                <div class="form-group">
            <h3>Transporte</h3>
            <label>Tipo de Transporte:</label>
            <select name="tipoTransporte" required>
        <option value="01">Autotransporte </option>
        <option value="01">Transporte Federal</option>
        <option value="02">Transporte Marítimo</option>
        <option value="03">Transporte Aéreo</option>
        <option value="04">Transporte Ferroviario</option>
    </select>

            <label>Permiso SCT:</label>
            <select name="PermisoSCT" required>
                <option value="Autotransporte Federal de carga general">Autotransporte Federal de carga general</option>
                <option value="Transporte privado de carga">Transporte privado de carga</option>
                <option value="Autotransporte Federal de Carga Especializada de materiales y residuos peligrosos">Autotransporte Federal de Carga Especializada de materiales y residuos peligrosos</option>
                <option value="Transporte de automóviles sin rodar en vehículo tipo góndola">Transporte de automóviles sin rodar en vehículo tipo góndola</option>
                <option value="Transporte de carga de gran peso y/o volumen de hasta 90 toneladas">Transporte de carga de gran peso y/o volumen de hasta 90 toneladas</option>
                <option value="Transporte de carga especializada de gran peso y/o volumen de más 90 toneladas">Transporte de carga especializada de gran peso y/o volumen de más 90 toneladas</option>
                <option value="Transporte Privado de materiales y residuos peligrosos">Transporte Privado de materiales y residuos peligrosos</option>
                <option value="Autotransporte internacional de carga de largo recorrido">Autotransporte internacional de carga de largo recorrido</option>
                <option value="Autotransporte internacional de carga especializada de materiales y residuos peligrosos de largo recorrido">Autotransporte internacional de carga especializada de materiales y residuos peligrosos de largo recorrido</option>
                <option value="Autotransporte Federal de Carga General cuyo ámbito de aplicación comprende la franja fronteriza con Estados Unidos">Autotransporte Federal de Carga General cuyo ámbito de aplicación comprende la franja fronteriza con Estados Unidos</option>
                <option value="Autotransporte Federal de Carga Especializada cuyo ámbito de aplicación comprende la franja fronteriza con Estados Unidos">Autotransporte Federal de Carga Especializada cuyo ámbito de aplicación comprende la franja fronteriza con Estados Unidos</option>
                <option value="Servicio auxiliar de arrastre en las vías generales de comunicación">Servicio auxiliar de arrastre en las vías generales de comunicación</option>
                <option value="Servicio auxiliar de servicios de arrastre, arrastre y salvamento, y depósito de vehículos en las vías generales de comunicación">Servicio auxiliar de servicios de arrastre, arrastre y salvamento, y depósito de vehículos en las vías generales de comunicación</option>
                <option value="Servicio de paquetería y mensajería en las vías generales de comunicación">Servicio de paquetería y mensajería en las vías generales de comunicación</option>
                <option value="Transporte especial para el tránsito de grúas industriales con peso máximo de 90 toneladas">Transporte especial para el tránsito de grúas industriales con peso máximo de 90 toneladas</option>
                <option value="Servicio federal para empresas arrendadoras servicio público federal">Servicio federal para empresas arrendadoras servicio público federal</option>
                <option value="Empresas trasladistas de vehículos nuevos">Empresas trasladistas de vehículos nuevos</option>
                <option value="Empresas fabricantes o distribuidoras de vehículos nuevos">Empresas fabricantes o distribuidoras de vehículos nuevos</option>
                <option value="Autorización expresa para circular en los caminos y puentes de jurisdicción federal con configuraciones de tractocamión doblemente articulado">Autorización expresa para circular en los caminos y puentes de jurisdicción federal con configuraciones de tractocamión doblemente articulado</option>
                <option value="Autotransporte Federal de Carga Especializada de fondos y valores">Autotransporte Federal de Carga Especializada de fondos y valores</option>
                <option value="Permiso temporal para navegación de cabotaje">Permiso temporal para navegación de cabotaje</option>
                <option value="Concesión y/o autorización para el servicio regular nacional y/o internacional para empresas mexicanas">Concesión y/o autorización para el servicio regular nacional y/o internacional para empresas mexicanas</option>
                <option value="Permiso para el servicio aéreo regular de empresas extranjeras">Permiso para el servicio aéreo regular de empresas extranjeras</option>
                <option value="Permiso para el servicio nacional e internacional no regular de fletamento">Permiso para el servicio nacional e internacional no regular de fletamento</option>
                <option value="Permiso para el servicio nacional e internacional no regular de taxi aéreo">Permiso para el servicio nacional e internacional no regular de taxi aéreo</option>
                <option value="Permiso no contemplado en el catálogo">Permiso no contemplado en el catálogo</option>
    </select>
            <label>Configuración Vehicular:</label>
            <select name="configVehicular" required>
        <option value="C2">Camión Unitario</option>
        <option value="C2R2">Camión-Remolque</option>
        <option value="C3R2">Camión-Remolque (Mayor capacidad)</option>
    </select>

            <label>Placa del Vehículo:</label>
            <input type="text" name="placaVehiculo" required>
                    </div></div>
                    
            <div class="form-section">
          <div class="form-group">
            <h3>Operador</h3>
            <label>Nombre:</label>
            <input type="text" name="nombreOperador" required>

            <label>RFC:</label>
            <input type="text" name="rfcOperador" required>
          </div></div>
                <div class="form-section">
                    <div class="form-group">
                        <h3>Dirección</h3>
                        <form>
                            <label for="pais">País:</label>
                            <select id="pais" name="pais" onchange="limpiarCampos()">
                                <option value="MX">México</option>
                                <option value="US">Estados Unidos</option>
                            </select>
                            <br><br>
                    
                            <label for="codigo_postal">Código Postal:</label>
                            <input type="text" id="codigo_postal" name="codigo_postal" maxlength="5" required oninput="buscarCP()">
                            <br><br>
                    
                            <label for="estado">Estado:</label>
                            <input type="text" id="estado" name="estado" readonly>
                            <br><br>
                    
                            <label for="municipio">Municipio:</label>
                            <input type="text" id="municipio" name="municipio" readonly>
                            <br><br>
                    
                            <label for="localidad">Localidad:</label>
                            <input type="text" id="localidad" name="localidad">
                            <br><br>
                    
                            <label for="calle">Calle:</label>
                            <input type="text" id="calle" name="calle">
                            <br><br>
                    
                            <label for="numero_exterior">Número Exterior:</label>
                            <input type="text" id="numero_exterior" name="numero_exterior">
                            <br><br>
                    
                            
                        <script>
                            async function buscarCP() {
                                const cp = document.getElementById("codigo_postal").value;
                                const pais = document.getElementById("pais").value;
                    
                                if (cp.length === 5) {
                                    try {
                                        if (pais === "MX") {
                                    const token = 'fb554bc4-b5e0-4f18-bc4a-130cab156ef3';
                                    const respuesta = await fetch(`https://api.copomex.com/query/info_cp/${cp}?type=simplified&token=${token}`);
                                    const datos = await respuesta.json();
                                    if (!datos.error) {
                                        document.getElementById("estado").value = datos.response.estado;
                                        document.getElementById("municipio").value = datos.response.municipio;
                                    } else {
                                        limpiarCampos();
                                        alert("Código postal no encontrado.");
                                    }
                                } else if (pais === "US") {
                                    const respuesta = await fetch(`https://api.zippopotam.us/us/${cp}`);
                                    const datos = await respuesta.json();
                                    if (datos.places) {
                                        document.getElementById("estado").value = datos.places[0]["state"];
                                        document.getElementById("municipio").value = datos.places[0]["place name"];
                                    } else {
                                        limpiarCampos();
                                        alert("Código postal no encontrado.");
                                    }
                                }
                            } catch (error) {
                                console.error("Error al obtener datos:", error);
                                limpiarCampos();
                                alert("Error al obtener datos.");
                            }
                        }
                    }
            
                    function limpiarCampos() {
                        document.getElementById("estado").value = "";
                        document.getElementById("municipio").value = "";
                    }
                </script>
                        
        
            </div></div>
           
            <button type="submit">Guardar Carta Porte</button>
           
    </div>
</form>

    <script src="script.js"></script>
<footer>
    <img id="logopie" src="img/LOGO_CENCA-removebg-preview.png"><img>
  
    © 2025 - Software de certificados y documentos oficiales CERTICENC V0.1
  
  Teléfonos: +52 00 00 00 00 00 / +52 00 00 00 00 00
  Lunes a viernes de 9am a 6pm
  </footer>
               
            
        </form>
    </div>
</body>
</html>
