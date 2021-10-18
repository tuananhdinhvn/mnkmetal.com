<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\model\ProductCategoryModel;
use App\model\ProductCategoryChildModel;


class AjaxController extends Controller{
    //Pic product category in add and edit page
    public function getProcatChild($idprocat){
        $procat_child       = ProductCategoryChildModel::where('procat2_procat_id', $idprocat)->get();
        $count_procat_child = ProductCategoryChildModel::where('procat2_procat_id', $idprocat)->count();

        if($count_procat_child != 0){
            foreach($procat_child as $key => $item){
                if($key==0){
                    echo "<option>Chọn danh mục con</option>";
                }
                echo "<option value='".$item->procat2_id."'>".$item->procat2_ten."</option>";
            }
        } else {
            echo "<option value='none'>Chọn danh mục con</option>";
        }

    }

}
