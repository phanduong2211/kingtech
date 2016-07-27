<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'pro_code'=>'required|unique:products,pro_code',
            'url'=>'required',
            'image'=>'required',
            'price'=>'required',
            'price_company'=>'required',
            'price_origin'=>'required',
            'quantity'=>'required|numeric',
            'cate_id'=>'required|numeric'
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Vui lòng nhập tên sản phẩm',
            'pro_code.required'=>'Vui lòng nhập mã sản phẩm',
            'pro_code.unique'=>'Mã sản phẩm đã tồn tại',
            'url.required'=>'Vui lòng nhập url',
            'image.required'=>'Vui lòng chọn hình ảnh',
            'price.required'=>'Vui lòng chọn nhập giá sản phẩm',
            'price_company.required'=>'Vui lòng chọn nhập giá công ty',
            'price_origin.required'=>'Vui lòng chọn nhập giá sỉ',
            'quantity.required'=>'Vui lòng chọn nhập số lượng',
            'quantity.numeric'=>'Vui lòng chọn nhập số lượng',
            'cate_id.required'=>'Vui lòng chọn chọn loại sp',
            'cate_id.numeric'=>'Vui lòng chọn chọn loại sp'
        ];
    }
}
