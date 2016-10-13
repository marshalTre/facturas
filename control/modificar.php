<?php
if (!isset($_SESSION)) {
    session_start();
}
error_reporting(0);

require_once './datos_conexion.php';

$folio = filter_input(INPUT_POST, 'id_folio');
$nom_org = filter_input(INPUT_POST, 'nom_org');
$tipo_org = filter_input(INPUT_POST, 'id_tipo_org');
$rep_legal = filter_input(INPUT_POST, 'rep_legal');
$registro = filter_input(INPUT_POST, 'registro');
$calle = filter_input(INPUT_POST, 'calle');
$num_ext = filter_input(INPUT_POST, 'num_ext');
$colonia = filter_input(INPUT_POST, 'colonia');
$delegacion = filter_input(INPUT_POST, 'delegacion');
$cod_postal = filter_input(INPUT_POST, 'cod_postal');
$tel_fijo = filter_input(INPUT_POST, 'tel_fijo');
$tel_movil = filter_input(INPUT_POST, 'tel_movil');
$pag_int = filter_input(INPUT_POST, 'pag_int');
$correo = filter_input(INPUT_POST, 'correo');
$nom_proyecto = filter_input(INPUT_POST, 'nom_proyecto');
$nom_resp = filter_input(INPUT_POST, 'nom_resp');
$eje_tem = filter_input(INPUT_POST, 'id_cat_eje');
$sub_eje = filter_input(INPUT_POST, 'id_sub_eje');
$del_ao = filter_input(INPUT_POST, 'del_ao');
$del_azc = filter_input(INPUT_POST, 'del_azc');
$del_ben = filter_input(INPUT_POST, 'del_ben');
$del_coy = filter_input(INPUT_POST, 'del_coy');
$del_cuaj = filter_input(INPUT_POST, 'del_cuaj');
$del_cuauh = filter_input(INPUT_POST, 'del_cuauh');
$del_gam = filter_input(INPUT_POST, 'del_gam');
$del_iztac = filter_input(INPUT_POST, 'del_iztac');
$del_iztap = filter_input(INPUT_POST, 'del_iztap');
$del_magda = filter_input(INPUT_POST, 'del_magda');
$del_miguel = filter_input(INPUT_POST, 'del_miguel');
$del_milpa = filter_input(INPUT_POST, 'del_milpa');
$del_tlah = filter_input(INPUT_POST, 'del_tlah');
$del_tlal = filter_input(INPUT_POST, 'del_tlal');
$del_venus = filter_input(INPUT_POST, 'del_venus');
$del_xochi = filter_input(INPUT_POST, 'del_xochi');
$ins_dic = filter_input(INPUT_POST, 'ins_dic');
$tipo_proyecto = filter_input(INPUT_POST, 'tipo_proyecto');
$mon_sol = filter_input(INPUT_POST, 'mon_sol');
$pob_obj = filter_input(INPUT_POST, 'pob_obj');
$num_mujeres = filter_input(INPUT_POST, 'num_mujeres');
$num_hombres = filter_input(INPUT_POST, 'num_hombres');
$objetivo = filter_input(INPUT_POST, 'objetivo');
$rec_ficha_tec = filter_input(INPUT_POST, 'rec_ficha_tec');
$rec_arch_elec = filter_input(INPUT_POST, 'rec_arch_elec');
$rec_cons_insc = filter_input(INPUT_POST, 'rec_cons_insc');
$rec_carta = filter_input(INPUT_POST, 'rec_carta');
$rec_cons_plat = filter_input(INPUT_POST, 'rec_cons_plat');
$rec_doc_term = filter_input(INPUT_POST, 'rec_doc_term');
$observaciones = filter_input(INPUT_POST, 'observaciones');
$resp_proyecto = filter_input(INPUT_POST, 'resp_proyecto');
$nom_per_entrega = filter_input(INPUT_POST, 'nom_per_entrega');
$cargo = filter_input(INPUT_POST, 'cargo');


$modificar='UPDATE registro_gral SET nom_org="'.$nom_org.'", id_tipo_org="'.$tipo_org.'", '
        . 'rep_legal="'.$rep_legal.'", registro="'.$registro.'", calle="'.$calle.'", num_ext="'.$num_ext.'",'
        . 'colonia="'.$colonia.'", delegacion="'.$delegacion.'", cod_postal="'.$cod_postal.'", tel_fijo="'.$tel_fijo.'",'
        . 'tel_movil="'.$tel_movil.'", pag_int="'.$pag_int.'",  correo="'.$correo.'", nom_proyecto="'.$nom_proyecto.'",'
        . 'nom_resp="'.$nom_resp.'", tipo_proyecto="'.$tipo_proyecto.'", mon_sol="'.$mon_sol.'", num_mujeres="'.$num_mujeres.'",'
        . 'num_hombres="'.$num_hombres.'", del_alvaro="'.$del_ao.'", del_azcapotzalco="'.$del_azc.'", del_benito="'.$del_ben.'",'
        . 'del_coyoacan="'.$del_coy.'",del_cuajimalpa="'.$del_cuaj.'",del_cuauhtemoc="'.$del_cuauh.'", del_gustavo="'.$del_gam.'",'
        . 'del_iztacalco="'.$del_iztac.'", del_iztapalapa="'.$del_iztap.'", del_magdalena="'.$del_magda.'", del_miguel="'.$del_miguel.'",'
        . 'del_milpa="'.$del_milpa.'", del_tlahuac="'.$del_tlah.'", del_tlalpan="'.$del_tlal.'", del_venustiano="'.$del_venus.'",'
        . 'del_xochimilco="'.$del_xochi.'", objetivo="'.$objetivo.'", rec_ficha_tec="'.$rec_ficha_tec.'", rec_arch_elec="'.$rec_arch_elec.'",'
        . 'rec_copia_insc="'.$rec_cons_insc.'", rec_carta="'.$rec_carta.'", rec_cons_plat="'.$rec_cons_plat.'",'
        . 'rec_doc_term="'.$rec_doc_term.'", observaciones="'.$observaciones.'", nom_per_entrega="'.$nom_per_entrega.'",'
        . 'cargo="'.$cargo.'", id_cat_eje="'.$eje_tem.'", id_sub_eje="'.$sub_eje.'", id_cat_poblacion="'.$pob_obj.'",'
        . 'id_cat_institucion="'.$ins_dic.'" where id_folio="'.$folio.'"' ;

$queryMod = mysqli_query(conector::conexion(), $modificar);

//if($queryMod){
//    
//    echo 'Se genero bien el query';
//}else{
//    
//    echo 'No se genera el query'. mysqli_error(conector::conexion(), $modificar);
//}

//}

header('Location: ./sinModif.php?numUs='.$resp_proyecto.'');