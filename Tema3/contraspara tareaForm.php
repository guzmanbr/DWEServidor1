<p>
                        <label for="idContraseña">Contraseña: </label>
                        <input type="text" name="contraseña" id="idContraseña" placeholder="Contraseña" value="<? 
                            $paron='//';
                            if(enviado() && !vacio("contraseña")){
                                echo $_REQUEST["contraseña"];
                            }
                        ?>">
                        <?php
                            //comprobar que no este vacio
                            if (vacio("contraseña") && enviado()){
                                ?><span><--Debe rellenar este campo.</span><?
                            }
                        ?>
                    </p>
                    <p>
                        <label for="idContraseña2">Repetir Contraseña: </label>
                        <input type="text" name="contraseña2" id="idContraseña2" placeholder="Contraseña" value="<? 
                            if(enviado() && !vacio("contraseña2")){
                                echo $_REQUEST["contraseña2"];
                            }
                        ?>">
                        <?php
                            //comprobar que no este vacio
                            if (vacio("contraseña2") && enviado()){
                                ?><span><--Debe rellenar este campo.</span><?
                            }
                        ?>
                    </p>