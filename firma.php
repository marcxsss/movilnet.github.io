    <?php 
if(isset($_GET['nrodoc'])){

require_once 'controller/controllerFirma.php'; ?>
<!--------------INICIO FIRMA ANTIGUA--------------------->
<div>
    
    <table width="500" cellspacing="0" cellpadding="0" border="0">
       <tr>
          <td style="margin: 0.1px;">
             <table cellspacing="0" cellpadding="0" border="0">
                <tr>    
                  <td valign="top" style="padding: 0px 8px 0px 0px; vertical-align: top;">
                    <a target="_blank" href="https://movilnet.pe/">
                        <img alt="Movilnet Perú Comunicaciones S.A.C." style="width:133px;max-width:133px;" src="https://movilnet.pe/assets/img/logo_firma_movilnet.png">
                    </a>
                  </td>
                  <td valign="top" style="margin: 0.1px; font-size: 1em; padding: 0px 15px 0px 8px; vertical-align: top;">
                     <table cellspacing="0" cellpadding="0" border="0" style="font-family: Arial, Helvetica, sans-serif; line-height: 1.4; font-size: 60%; color: rgb(0, 0, 1);">
                        <tr>
                           <td style="margin: 0.1px;">
                              <div style="font-size: 1.5em; font-weight:bold; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);"><?php echo $data_user->nombre; ?></div>
                           </td>
                        </tr>
                        <tr>
                           <td style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px;">
                              <div style="font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);">
                                 
                                    <?php echo $data_user->cargo; ?>
                                 
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td style="margin: 0.1px;"><span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span> <a href="tel:<?php echo $data_user->telefono ?>" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);"><?php echo $data_user->telefono ?></a> | <a href="tel:(01)5022587" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);">(01) 5022 587</a></td>
                        </tr>
                        <tr>
                           <td style="margin: 0.1px;"><span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span> <a href="mailto:<?php echo $data_user->nombre_correo; ?>@movilnet.pe" target="_blank" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);"><?php echo $data_user->nombre_correo; ?>@movilnet.pe</a></td>
                        </tr>
                        <tr>
                           <td style="margin: 0.1px;"><span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span> <span style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);">Calle Chinch&oacute;n 858 - San Isidro</span></td>
                        </tr>
                        <tr>
                           <td style="margin: 0.1px;"><span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span> <a href="https://www.movilnet.pe" target="_blank" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(25, 137, 179);">www.movilnet.pe</a></td>  
                        </tr>
                     </table>
                  </td>
                  <td valign="middle" style="border-left: 3px solid rgb(4, 171, 230); vertical-align: middle; padding: 0px 0px 3px 6px; font-family: Arial; border-top-color: rgb(4, 171, 230); border-right-color: rgb(4, 171, 230); border-bottom-color: rgb(4, 171, 230);">
                     <table cellspacing="0" cellpadding="0" border="0" style="line-height: 1;">
                        <tr>
                           <td style="margin: 0.1px; padding: 4px 0px 0px;"><a target="_blank" class="social_link" href="https://www.facebook.com/movilnetperuoficial?_rdc=1&_rdr"><img alt="facebook" style="width: 22px;min-width:22px;" width="22" src="https://img.mysignature.io/s/v3/9/1/2/912bcb20-7432-5e12-ab81-00761bc80df9.png"></a></td>
                        </tr>
                        <tr>
                           <td style="margin: 0.1px; padding: 4px 0px 0px;"><a target="_blank" class="social_link" href="https://www.instagram.com/movilnetperu/"><img alt="instagram" style="width: 22px;min-width:22px;" width="22" src="https://img.mysignature.io/s/v3/0/9/7/09722686-350f-56d4-b526-191b3e849a75.png"></a></td>
                        </tr>
                        <tr>
                           <td style="margin: 0.1px; padding: 4px 0px 0px;"><a target="_blank" class="social_link" href="https://api.whatsapp.com/send?phone=51<?php echo $data_user->wpp; ?>"><img alt="whatsapp" style="width: 22px;min-width:22px;" width="22" src="https://img.mysignature.io/s/v3/c/1/8/c18024ac-2d00-551c-8e98-90666ea11ef8.png"></a></td>
                        </tr>
                     </table>
                  </td>
                </tr>
             </table>
          </td>
       </tr>
    </table>
</div>
<br>
<br>
<br>
<!--------------FIN FIRMA ANTIGUA--------------------->

<!-----------FIRMA MOVILNET 2023---------------------------->
<div>
    <table width="500" cellspacing="0" cellpadding="0" border="0">
        <!--fila principal-->
        <tr>
            <!--col 1-->
            <td style="margin: 0.1px;">
                <!--fila logo-->
                <table cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <!--logo-->
                        <td valign="top" style="padding: 0px 8px 0px 0px; vertical-align: top;">
                            <a target="_blank" href="https://movilnet.pe/">
                                <img alt="Movilnet Perú Comunicaciones S.A.C." style="width:125px;max-width:125px;" src="https://movilnet.pe/assets/img/firma4.gif">
                                
                            </a>
                        </td>
                        <!--col 2-->
                        <td valign="top" style="margin: 0.1px; font-size: 1em; vertical-align: top;">
                            <table cellspacing="0" cellpadding="0" border="0" style="font-family: Arial, Helvetica, sans-serif; line-height: 1.4; font-size: 60%; color: rgb(0, 0, 1); border-left: 0.5px solid rgb(4, 171, 230); padding-left: 18px;">
                                <!--nombre-->
                                <tr>
                                    <td style="margin: 0.1px; padding-bottom:4px;">
                                        <div style="font-size: 1.5em; font-weight:bold; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);"><?php echo $data_user->nombre; ?></div>
                                    </td>
                                </tr>
                                <!--cargo-->
                                <tr>
                                    <td style="margin: 0px 0px 0px 0px; padding-bottom: 4px;">
                                        <div style="font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1); font-size: 12px; "><span><?php echo $data_user->cargo; ?></span></div>
                                    </td>
                                </tr>
                                <!--cel-->
                                <tr>
                                    <td style="margin: 0.1px; padding-bottom:4px;">
                                        <span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span>
                                        <a href="tel:<?php echo $data_user->telefono ?>" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);"><strong>t:</strong> <?php echo $data_user->telefono ?></a>
                                    </td>
                                </tr>
                                <!--tel-->
                                <tr>
                                    <td style="margin: 0.1px; padding-bottom:4px;">
                                        <span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span>
                                        <a href="tel:(01)5022587" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);"><strong>c:</strong> (01) 5022 587</a>
                                    </td>
                                </tr>
                                <!--direcc-->
                                <tr>
                                    <td style="margin: 0.1px; padding-bottom:4px;">
                                        <span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span>
                                        <span style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);">Calle Chinch&oacute;n 858 - San Isidro</span>
                                    </td>
                                </tr>
                                <!--web-->
                                <tr>
                                    <td style="margin: 0.1px;">
                                        <span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span>
                                        <a href="https://www.movilnet.pe" target="_blank" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(25, 137, 179);">www.movilnet.pe</a>
                                    </td> 
                                </tr>
                            </table>
                        </td>
                        <!--redes sociales-->
                        <td valign="middle" style="vertical-align: top; padding-left: 7px; text-align: right;">
                            <a target="_blank" class="social_link" href="https://www.facebook.com/movilnetperuoficial?_rdc=1&_rdr">
                                <img alt="facebook" style="width:22px; height:22px; margin-right:13px;" width="22" src="https://movilnet.pe/assets/img/icon-fb.png">
                            </a>
                            <br>
                            <a target="_blank" class="social_link" href="https://www.instagram.com/movilnetperu/">
                                <img alt="instagram" style="width:22px; height:22px; margin-right:13px;" width="22" src="https://movilnet.pe/assets/img/icon-ig.png">
                            </a>
                            <br>
                            <a target="_blank" class="social_link" href="https://www.linkedin.com/company/movilnetperu/">
                                <img alt="LinkedIn" style="width:22px; height:22px; margin-right:13px;" width="22" src="https://movilnet.pe/assets/img/icon-ln.png">
                            </a>
                            <br>
                            <a target="_blank" class="social_link" href="https://api.whatsapp.com/send?phone=51973039894">
                                <img alt="whatsapp" style="width:22px; height:22px; margin-right:13px;" width="22" src="https://movilnet.pe/assets/img/icon-wtp.png">
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>

<!------------------FIN FIRMA MOVILNET 2023------------------->

<!-----------FIRMA TRUCKMIN 2023---------------------------->
<div>
    <table width="500" cellspacing="0" cellpadding="0" border="0">
        <!--fila principal-->
        <tr>
            <!--col 1-->
            <td style="margin: 0.1px;">
                <!--fila logo-->
                <table cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <!--logo-->
                        <td valign="top" style="padding: 0px 8px 0px 0px; vertical-align: top;">
                            <a target="_blank" href="https://movilnet.pe/">
                                <img alt="Movilnet Perú Comunicaciones S.A.C." style="width:125px;max-width:125px;" src="https://movilnet.pe/assets/img/truckminGif.gif">
                                
                            </a>
                        </td>
                        <!--col 2-->
                        <td valign="top" style="margin: 0.1px; font-size: 1em; vertical-align: top;">
                            <table cellspacing="0" cellpadding="0" border="0" style="font-family: Arial, Helvetica, sans-serif; line-height: 1.4; font-size: 60%; color: rgb(0, 0, 1); border-left: 0.5px solid #F49A1A; padding-left: 18px;">
                                <!--nombre-->
                                <tr>
                                    <td style="margin: 0.1px; padding-bottom:4px;">
                                        <div style="font-size: 1.5em; font-weight:bold; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);"><?php echo $data_user->nombre; ?></div>
                                    </td>
                                </tr>
                                <!--cargo-->
                                <tr>
                                    <td style="margin: 0px 0px 0px 0px; padding-bottom: 4px;">
                                        <div style="font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1); font-size: 12px; "><span><?php echo $data_user->cargo; ?></span></div>
                                    </td>
                                </tr>
                                <!--cel-->
                                <tr>
                                    <td style="margin: 0.1px; padding-bottom:4px;">
                                        <span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span>
                                        <a href="tel:<?php echo $data_user->telefono ?>" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);"><strong>t:</strong> <?php echo $data_user->telefono ?></a>
                                    </td>
                                </tr>
                                <!--tel-->
                                <tr>
                                    <td style="margin: 0.1px; padding-bottom:4px;">
                                        <span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span>
                                        <a href="tel:(01)5022587" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);"><strong>c:</strong> (01) 5022 587</a>
                                    </td>
                                </tr>
                                <!--direcc-->
                                <tr>
                                    <td style="margin: 0.1px; padding-bottom:4px;">
                                        <span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span>
                                        <span style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);">Calle Chinch&oacute;n 858 - San Isidro</span>
                                    </td>
                                </tr>
                                <!--web-->
                                <tr>
                                    <td style="margin: 0.1px;">
                                        <span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span>
                                        <a href="https://truckmin.pe/" target="_blank" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: #F49A1A;">www.truckmin.pe</a>
                                    </td> 
                                </tr>
                            </table>
                        </td>
                        <!--redes sociales-->
                        <td valign="middle" style="vertical-align: top; padding-left: 7px; text-align: right;">
                            <a target="_blank" class="social_link" href="https://www.facebook.com/truckmingroupperu?_rdc=1&_rdr">
                                <img alt="facebook" style="width:22px; height:22px; margin-right:13px;" width="22" src="https://movilnet.pe/assets/img/fb_icon.png">
                            </a>
                            <br>
                            <a target="_blank" class="social_link" href="https://www.instagram.com/truckmingroupperu/">
                                <img alt="instagram" style="width:22px; height:22px; margin-right:13px;" width="22" src="https://movilnet.pe/assets/img/insta_icon.png">
                            </a>
                            <br>
                            <a target="_blank" class="social_link" href="https://www.linkedin.com/company/movilnetperu/">
                                <img alt="LinkedIn" style="width:22px; height:22px; margin-right:13px;" width="22" src="https://movilnet.pe/assets/img/link_icon.png">
                            </a>
                            <br>
                            <a target="_blank" class="social_link" href="https://api.whatsapp.com/send?phone=51973039894">
                                <img alt="whatsapp" style="width:22px; height:22px; margin-right:13px;" width="22" src="https://movilnet.pe/assets/img/ws_icon.png">
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>

<!------------------FIN FIRMA TRCKMIN 2023------------------->
<br>
<br>
<br>
<!-----------FIRMA MOVILNET VERSION HORISONTAL 2023---------------------------->
<div>
    
    <table width="500" cellspacing="0" cellpadding="0" border="0">
        <!--fila principal-->
        <tr>
            <!--col 1-->
            <td style="margin: 0.1px;">
                <!--fila logo-->
                <table cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <!--logo-->
                        <td valign="top" style="padding: 0px 8px 0px 0px; vertical-align: top;">
                            <a target="_blank" href="https://movilnet.pe/">
                            <img alt="Movilnet Perú Comunicaciones S.A.C." style="width:153px;max-width:153px;" src="https://movilnet.pe/assets/img/movlinethorisontal.gif"><p></p>
                            </a>
                        </td>
                    </tr>
                
                    <!--fila iconos redes-->
                    <tr>
                        <!--redes sociales-->
                        <td valign="middle" style="vertical-align: middle; padding: 0px 0px 3px 6px; font-family: Arial;">
                            
                            <table cellspacing="0" cellpadding="0" border="0" style="line-height: 1; padding-top:10px">
                                <tr>
                                    <center>
                                   <td style="margin: 0.1px; padding: 4px 0px 0px; text-align: center;"><a target="_blank" class="social_link" href="https://www.facebook.com/movilnetperuoficial?_rdc=1&_rdr"><img alt="facebook" style="width:28px; height:28px; margin-right:11px;" width="28" src="https://movilnet.pe/assets/img/icon-fb.png"></a></td>
                                    
                                   <td style="margin: 0.1px; padding: 4px 0px 0px; text-align: center;"><a target="_blank" class="social_link" href="https://www.instagram.com/movilnetperu/"><img alt="instagram" style="width:28px; height:28px; margin-right:11px;" width="28" src="https://movilnet.pe/assets/img/icon-ig.png"></a></td>
                                    
                                   <td style="margin: 0.1px; padding: 4px 0px 0px; text-align: center;"><a target="_blank" class="social_link" href="https://www.linkedin.com/company/movilnetperu/"><img alt="LinkedIn" style="width:28px; height:28px; margin-right:11px;" width="28" src="https://movilnet.pe/assets/img/icon-ln.png"></a></td>
                                   
                                   <td style="margin: 0.1px; padding: 4px 0px 0px; text-align: center;"><a target="_blank" class="social_link" href="https://api.whatsapp.com/send?phone=51973039894"><img alt="whatsapp" style="width:28px; height:28px; margin-right:11px;" width="28" src="https://movilnet.pe/assets/img/icon-wtp.png"></a></td>
                                   </center>
                                    </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
            
            <!--col 2-->
            <td valign="top" style="margin: 0.1px; font-size: 1em; padding: 0px 150px 0px 8px; vertical-align: top;">
                <table cellspacing="0" cellpadding="0" border="0" style="font-family: Arial, Helvetica, sans-serif; line-height: 1.4; font-size: 60%; color: rgb(0, 0, 1); border-left: 0.5px solid rgb(4, 171, 230); padding-left: 18px;">
                    <!--nombre-->
                    <tr>
                        <td style="margin: 0.1px; padding-bottom:1px;">
                              <div style="font-size: 1.5em; font-weight:bold; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);"><?php echo $data_user->nombre; ?></div>
                        </td>
                    </tr>
                    
                    <!--cargo-->
                    <tr>
                        <td style="margin: 0px 0px 0px 0px; padding-bottom: 0px 0px 1px 0px;">
                              <div style="font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1); font-size: 12px; "><span><?php echo $data_user->cargo; ?></span></div>
                                 
                        </td>
                    </tr>
                    
                    <!--cel-->
                    <tr>
                        <td style="margin: 0.1px; padding-bottom:1px;"><span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span> <a href="tel:<?php echo $data_user->telefono ?>" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);"><strong>t:</strong> <?php echo $data_user->telefono ?></a>
                        </td>
                    </tr>
                    
                    
                      
                    <!--tel-->
                    <tr>
                        <td style="margin: 0.1px; padding-bottom:1px;"><span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span><a href="tel:(01)5022587" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);"><strong>c:</strong> (01) 5022 587</a>
                        </td>
                    </tr>
                    <!--direcc-->
                    <tr>
                        <td style="margin: 0.1px; padding-bottom:1px;"><span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span> <span style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);">Calle Chinch&oacute;n 858 - San Isidro</span>
                        </td>
                    </tr>
                    <!--web-->
                    <tr>
                        <td style="margin: 0.1px;"><span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span> <a href="https://www.movilnet.pe" target="_blank" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(25, 137, 179);">www.movilnet.pe</a>
                        </td> 
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
<!------------------FIN FIRMA MOVILNET VERSION HORISONTAL  2023------------------->

<br>
<br>
<br>
<!-----------FIRMA TRUCKMIN VERSION HORISONTAL 2023---------------------------->
<div>
    
    <table width="500" cellspacing="0" cellpadding="0" border="0">
        <!--fila principal-->
        <tr>
            <!--col 1-->
            <td style="margin: 0.1px;">
                <!--fila logo-->
                <table cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <!--logo-->
                        <td valign="top" style="padding: 0px 8px 0px 0px; vertical-align: top;">
                            <a target="_blank" href="https://movilnet.pe/">
                            <img alt="Movilnet Perú Comunicaciones S.A.C." style="width:153px;max-width:153px;" src="https://movilnet.pe/assets/img/truckminhorisontal.gif"><p></p>
                            </a>
                        </td>
                    </tr>
                
                    <!--fila iconos redes-->
                    <tr>
                        <!--redes sociales-->
                        <td valign="middle" style="vertical-align: middle; padding: 0px 0px 3px 6px; font-family: Arial;">
                            
                            <table cellspacing="0" cellpadding="0" border="0" style="line-height: 1; padding-top:10px">
                                <tr>
                                    <center>
                                   <td style="margin: 0.1px; padding: 4px 0px 0px; text-align: center;"><a target="_blank" class="social_link" href="https://www.facebook.com/movilnetperuoficial?_rdc=1&_rdr"><img alt="facebook" style="width:28px; height:28px; margin-right:11px;" width="28" src="https://movilnet.pe/assets/img/fb_icon.png"></a></td>
                                    
                                   <td style="margin: 0.1px; padding: 4px 0px 0px; text-align: center;"><a target="_blank" class="social_link" href="https://www.instagram.com/movilnetperu/"><img alt="instagram" style="width:28px; height:28px; margin-right:11px;" width="28" src="https://movilnet.pe/assets/img/insta_icon.png"></a></td>
                                    
                                   <td style="margin: 0.1px; padding: 4px 0px 0px; text-align: center;"><a target="_blank" class="social_link" href="https://www.linkedin.com/company/movilnetperu/"><img alt="LinkedIn" style="width:28px; height:28px; margin-right:11px;" width="28" src="https://movilnet.pe/assets/img/link_icon.png"></a></td>
                                   
                                   <td style="margin: 0.1px; padding: 4px 0px 0px; text-align: center;"><a target="_blank" class="social_link" href="https://api.whatsapp.com/send?phone=51973039894"><img alt="whatsapp" style="width:28px; height:28px; margin-right:11px;" width="28" src="https://movilnet.pe/assets/img/ws_icon.png"></a></td>
                                   </center>
                                    </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
            
            <!--col 2-->
            <td valign="top" style="margin: 0.1px; font-size: 1em; padding: 0px 150px 0px 8px; vertical-align: top;">
                <table cellspacing="0" cellpadding="0" border="0" style="font-family: Arial, Helvetica, sans-serif; line-height: 1.4; font-size: 60%; color: rgb(0, 0, 1); border-left: 0.5px solid #F49A1A; padding-left: 18px;">
                    <!--nombre-->
                    <tr>
                        <td style="margin: 0.1px; padding-bottom:1px;">
                              <div style="font-size: 1.5em; font-weight:bold; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);"><?php echo $data_user->nombre; ?></div>
                        </td>
                    </tr>
                    
                    <!--cargo-->
                    <tr>
                        <td style="margin: 0px 0px 0px 0px; padding-bottom: 0px 0px 1px 0px;">
                              <div style="font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1); font-size: 12px; "><span><?php echo $data_user->cargo; ?></span></div>
                                 
                        </td>
                    </tr>
                    
                    <!--cel-->
                    <tr>
                        <td style="margin: 0.1px; padding-bottom:1px;"><span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span> <a href="tel:<?php echo $data_user->telefono ?>" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);"><strong>t:</strong> <?php echo $data_user->telefono ?></a>
                        </td>
                    </tr>
                    
                    
                      
                    <!--tel-->
                    <tr>
                        <td style="margin: 0.1px; padding-bottom:1px;"><span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span><a href="tel:(01)5022587" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);"><strong>c:</strong> (01) 5022 587</a>
                        </td>
                    </tr>
                    <!--direcc-->
                    <tr>
                        <td style="margin: 0.1px; padding-bottom:1px;"><span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span> <span style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);">Calle Chinch&oacute;n 858 - San Isidro</span>
                        </td>
                    </tr>
                    <!--web-->
                    <tr>
                        <td style="margin: 0.1px;"><span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span> <a href="https://www.movilnet.pe" target="_blank" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: #F49A1A;">www.movilnet.pe</a>
                        </td> 
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
<!------------------FIN FIRMA TRUCKMIN VERSION HORISONTAL  2023------------------->
<br/>
<br/>
<div>
    <table width="500" cellspacing="0" cellpadding="0" border="0">
       <tr>
          <td style="margin: 0.1px;">
             <table cellspacing="0" cellpadding="0" border="0">
                <tr>    
                  <td valign="top" style="padding: 0px 8px 0px 0px; vertical-align: top;">
                    <a target="_blank" href="https://truckmin.pe/">
                        <img alt="Truckmin Group Peru S.A.C." style="width:135px;max-width:135px;" src="https://movilnet.pe/assets/img/Truckmin.png">
                    </a>
                  </td>
                  <td valign="top" style="margin: 0.1px; font-size: 1em; padding: 0px 15px 0px 8px; vertical-align: top;">
                     <table cellspacing="0" cellpadding="0" border="0" style="font-family: Arial, Helvetica, sans-serif; line-height: 1.4; font-size: 60%; color: rgb(0, 0, 1);">
                        <tr>
                           <td style="margin: 0.1px;">
                              <div style="font-size: 1.5em; font-weight:bold; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);"><?php echo $data_user->nombre; ?></div>
                           </td>
                        </tr>
                        <tr>
                           <td style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px;">
                              <div style="font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);">
                                 <span>
                                    <?php echo $data_user->cargo; ?>
                                 </span>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td style="margin: 0.1px;"><span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span> <a href="tel:<?php echo $data_user->telefono ?>" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);"><?php echo $data_user->telefono ?></a> | <a href="tel:(01)5022587" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);">(01) 5022 587</a></td>
                        </tr>
                        <tr>
                           <td style="margin: 0.1px;"><span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span> <a href="mailto:<?php echo $data_user->nombre_correo; ?>@truckmin.pe" target="_blank" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);"><?php echo $data_user->nombre_correo; ?>@truckmin.pe</a></td>
                        </tr>
                        <tr>
                           <td style="margin: 0.1px;"><span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span> <span style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);">Calle Chinch&oacute;n 858 - San Isidro</span></td>
                        </tr>
                        <tr>
                           <td style="margin: 0.1px;"><span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span> <a href="https://truckmin.pe" target="_blank" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(25, 137, 179);">www.truckmin.pe</a></td>  
                        </tr>
                     </table>
                  </td>
                  <td valign="middle" style="border-left: 3px solid rgb(4, 171, 230); vertical-align: middle; padding: 0px 0px 3px 6px; font-family: Arial; border-top-color: rgb(4, 171, 230); border-right-color: rgb(4, 171, 230); border-bottom-color: rgb(4, 171, 230);">
                     <table cellspacing="0" cellpadding="0" border="0" style="line-height: 1;">
                        <tr>
                           <td style="margin: 0.1px; padding: 4px 0px 0px;"><a target="_blank" class="social_link" href="https://www.facebook.com/truckmingroupperu"><img alt="facebook" style="width: 22px;min-width:22px;" width="22" src="https://img.mysignature.io/s/v3/9/1/2/912bcb20-7432-5e12-ab81-00761bc80df9.png"></a></td>
                        </tr>
                        <tr>
                           <td style="margin: 0.1px; padding: 4px 0px 0px;"><a target="_blank" class="social_link" href="https://www.instagram.com/truckmingroupperu/"><img alt="instagram" style="width: 22px;min-width:22px;" width="22" src="https://img.mysignature.io/s/v3/0/9/7/09722686-350f-56d4-b526-191b3e849a75.png"></a></td>
                        </tr>
                        <tr>
                           <td style="margin: 0.1px; padding: 4px 0px 0px;"><a target="_blank" class="social_link" href="https://api.whatsapp.com/send?phone=51<?php echo $data_user->wpp; ?>"><img alt="whatsapp" style="width: 22px;min-width:22px;" width="22" src="https://img.mysignature.io/s/v3/c/1/8/c18024ac-2d00-551c-8e98-90666ea11ef8.png"></a></td>
                        </tr>
                     </table>
                  </td>
                </tr>
             </table>
          </td>
       </tr>
    </table>
</div>
<br/>
<br/>
<div>
    <table width="500" cellspacing="0" cellpadding="0" border="0">
       <tr>
          <td style="margin: 0.1px;">
             <table cellspacing="0" cellpadding="0" border="0">
                <tr>    
                  <td valign="top" style="padding: 0px 8px 0px 0px; vertical-align: top;">
                    <a target="_blank" href="https://satnet.com.pe/">
                        <img alt="Satnet Peru S.A.C." style="width:135px;max-width:135px;" src="https://movilnet.pe/assets/img/FIRMA_LOGO_SATNET.png">
                    </a>
                  </td>
                  <td valign="top" style="margin: 0.1px; font-size: 1em; padding: 0px 15px 0px 8px; vertical-align: top;">
                     <table cellspacing="0" cellpadding="0" border="0" style="font-family: Arial, Helvetica, sans-serif; line-height: 1.4; font-size: 60%; color: rgb(0, 0, 1);">
                        <tr>
                           <td style="margin: 0.1px;">
                              <div style="font-size: 1.5em; font-weight:bold; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);"><?php echo $data_user->nombre; ?></div>
                           </td>
                        </tr>
                        <tr>
                           <td style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px;">
                              <div style="font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);">
                                 <span>
                                    <?php echo $data_user->cargo; ?>
                                 </span>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td style="margin: 0.1px;"><span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span> <a href="tel:<?php echo $data_user->telefono ?>" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);"><?php echo $data_user->telefono ?></a> | <a href="tel:(01)5022587" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);">(01) 5022 587</a></td>
                        </tr>
                        <tr>
                           <td style="margin: 0.1px;"><span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span> <a href="mailto:<?php echo $data_user->nombre_correo; ?>@satnet.com.pe" target="_blank" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);"><?php echo $data_user->nombre_correo; ?>@satnet.com.pe</a></td>
                        </tr>
                        <tr>
                           <td style="margin: 0.1px;"><span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span> <span style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(0, 0, 1);">Calle Dean Valdivia 207 - San Isidro</span></td>
                        </tr>
                        <tr>
                           <td style="margin: 0.1px;"><span style="font-family: Arial, Helvetica, sans-serif; color: rgb(4, 171, 230);"></span> <a href="https://www.satnet.com.pe" target="_blank" style="text-decoration: none; font-family: Arial, Helvetica, sans-serif; color: rgb(25, 137, 179);">www.satnet.com.pe</a></td>  
                        </tr>
                     </table>
                  </td>
                  <td valign="middle" style="border-left: 3px solid rgb(4, 171, 230); vertical-align: middle; padding: 0px 0px 3px 6px; font-family: Arial; border-top-color: rgb(4, 171, 230); border-right-color: rgb(4, 171, 230); border-bottom-color: rgb(4, 171, 230);">
                     <table cellspacing="0" cellpadding="0" border="0" style="line-height: 1;">
                        <tr>
                           <td style="margin: 0.1px; padding: 4px 0px 0px;"><a target="_blank" class="social_link" href="https://www.facebook.com/satnetperu"><img alt="facebook" style="width: 22px;min-width:22px;" width="22" src="https://img.mysignature.io/s/v3/9/1/2/912bcb20-7432-5e12-ab81-00761bc80df9.png"></a></td>
                        </tr>
                        <tr>
                           <td style="margin: 0.1px; padding: 4px 0px 0px;"><a target="_blank" class="social_link" href="https://www.instagram.com/satnetperu/"><img alt="instagram" style="width: 22px;min-width:22px;" width="22" src="https://img.mysignature.io/s/v3/0/9/7/09722686-350f-56d4-b526-191b3e849a75.png"></a></td>
                        </tr>
                        <tr>
                           <td style="margin: 0.1px; padding: 4px 0px 0px;"><a target="_blank" class="social_link" href="https://api.whatsapp.com/send?phone=51<?php echo $data_user->wpp; ?>"><img alt="whatsapp" style="width: 22px;min-width:22px;" width="22" src="https://img.mysignature.io/s/v3/c/1/8/c18024ac-2d00-551c-8e98-90666ea11ef8.png"></a></td>
                        </tr>
                     </table>
                  </td>
                </tr>
             </table>
          </td>
       </tr>
    </table>
</div>
   <?php
      
   }else{
      echo 'Ingrese el número de documento';
      return false;
   }
   
   ?> 