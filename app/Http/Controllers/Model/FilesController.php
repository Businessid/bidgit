<?php

namespace App\Http\Controllers\Model;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use File;
use Storage;

class FilesController extends Controller
{



    // Repeter Singl Image Base 64
    public function UploadBase64Image($File, $Generete = false, $Withname = '', $Extention = 'png', $Path){
        File::isDirectory($Path) or File::makeDirectory($Path, 0777, true, true);
        if($Generete){
            $imageName = $Withname. time() . '.' . $Extention;
        }else{
            if($Withname == ""){
                $imageName = time() . '.' . $Extention;
            }else{
                $imageName  = $Withname . '.' . $Extention;
            }
        }
        if($File){
            $TheImage = json_decode($File);
            try{
                \File::put($Path. '/' . $imageName, base64_decode($TheImage->data));
                return $imageName;
            }catch (\Exception $e){
                return false;
            }
        }

    }


    // Repeter  Multiple Array Image Base 64
    public function UploadBase46ImageArray($FileArray, $Generete = false, $Withname = '', $Extention = 'png', $Path){
        File::isDirectory($Path) or File::makeDirectory($Path, 0777, true, true);
        $count = count($FileArray);
        for ($i=0 ; $i < $count ; $i++) {
            $File = $FileArray[$i];
            if($Generete){
                $imageName = $Withname. '-'. $i .'-'. time() . '.' . $Extention;
            }else{
                if($Withname == ""){
                    $imageName =  $i .'-'.time() . '.' . $Extention;
                }else{
                    $imageName  = $Withname . '-'. $i . '.' . $Extention;
                }
            }
            if($File){
                $TheImage = json_decode($File);
                try{
                    \File::put($Path . '/' . $imageName, base64_decode($TheImage->data));
                    return $imageName;
                }catch (\Exception $e){
                    return false;
                }
            }
        }
    }




    // Upload All Files with Extentions ;
    public function UploadFile($File, $Generete = true, $Withname = '', $Extention = '', $Path){
        File::isDirectory($Path) or File::makeDirectory($Path, 0777, true, true);
        if($Extention == ""){
//            $Extention = pathinfo($File, PATHINFO_EXTENSION);
            $Extention = $File->getClientOrginalExtension();
        }

        if($Generete){
            $FileName = $Withname. time() . '.' . $Extention;
        }else{
            if($Withname == ""){
                $FileName = time() . '.' . $Extention;
            }else{
                $FileName  = $Withname . '.' . $Extention;
            }
        }
        if($File){
            try{
                $upload = $File->storeAs('upload/verify_documents', $FileName);
                if($upload){
                    return $FileName;
                }else{
                    return false;
                }
            }catch (\Exception $e){
                return false;
            }
        }

    }




    public function DeleteFile($File){
        $res=unlink($File);
        if($res){
            return true;
        }else{
            return false;
        }
    }







}
