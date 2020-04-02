<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Delivery</title>
    <link href="css/pedidos.css" rel="stylesheet" type="text/css" />
    <meta charset="utf-8" />
</head>
<body >
    <div id="wrap">
        <form action="pedido/mostrar.php" method="post" id="delivery-form" >
        <div>
            <div class="cont_order">
               <fieldset>
                <legend>Monte sua refeição</legend>

                <div class='field_container'>
                    <label >Acompanhamento</label>
                    <label class='radiolabel'><input type="radio"  value="AB"    name="campo1"  />Arroz branco</label><br/>
                    <label class='radiolabel'><input type="radio"  value="MAEO"  name = "campo2" />Macarrão alho-e-óleo</label><br/>
                    <label class='radiolabel'><input type="radio"  value="FDC"   name="campo3" />Farofa de calabreza</label><br/>
                    <label class='radiolabel'><input type="radio"  value="SDF"   name="campo4" />Salada de folhas</label><br/>
                </div>
                
                <div class='field_container'>
                    <label for="flavor">Prato principal:</label >
                    <select id="flavor" name="PF">
                        <option value="Opc">Escolha uma opção</option>
                        <option value="BF" >Bife à parmegiana</option>
                        <option value="FG">Frango à parmegiana</option>
                        <option value="LS">Lasanha de brócolis</option>
                        <option value="PS">Peixe frito</option>
                   </select>
                </div>

                <div class='field_container'>
                    <label >Adicionais:</label>
                    <label><input type="checkbox" value="BF" name="campo5"/>Batata-frita</label>
                    <label><input type="checkbox" value="BP" name="campo6" />Batata-palha</label>
                    <label><input type="checkbox" value="OG" name="campo7" />Orégano</label>
                    <label><input type="checkbox" value="VG" name="campo8"/>Vinagrete</label>
                    <label><input type="checkbox" value="TM" name="campo9"/>Tomate</label>
                    <label><input type="checkbox" value="CB" name="campo10"/>Cebola</label>
               </div>

               <div class='field_container'>
                   <label class="inlinelabel"><input type="checkbox" id="agree" value="CONFIRME" name="campo11" /> Confirmo que as opções são verdadeiras e que está de acordo com o meu pedido.</label>
               </div>

              </fieldset>
            </div>
            
        	<div class="cont_details">
            	<fieldset>
                <legend>Informações do cliente</legend>
                <label for='name'>Nome completo</label>
                <input type="text" id="name" name="nome"/>
                <br/>
                <label for='address'>Endereço de entrega</label>
                <input type="text" id="address" name="endereco"/>
                <br/>
                <label for='phonenumber'>Telefone</label>
                <input type="tel" placeholder="Ex: (99) 99999-9999" id="phonenumber" name="tel" />
                <br/>
                </fieldset>
            </div>
           
            <input type="submit" id="submit" name="enviar" value="Realizar Pedido" />
        </div>  
       </form>
	</div>
</body>
</html>