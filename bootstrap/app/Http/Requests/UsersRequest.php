<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
        // txtname, txtimage là tên name của input trong file create.blade.php
        return [
            'txtname'                => 'required|unique:Users,name',
            'txtemail'               => 'required|unique:Users,email',
            'txtpassword'            => 'required',
            'txtaddress'             => 'required',
            'txtavata'               => 'required|image',
            'txtstatus'              => 'required|numeric',

        ];
    }

    public function messages() {
        return [
            'txtname.required'          => 'Vui lòng nhập tên người dùng!',
            'txtname.unique'            => 'Tên người dùng này đã tồn tại!',
            'txtemail.required'         => 'Vui lòng nhập email người dùng!',
            'txtemail.unique'           => 'Tên email này đã tồn tại!',
            'txtavata.required'         => 'Vui lòng chọn ảnh cho người dùng!',
            'txtavata.image'            => 'Hình ảnh không đúng định dạng!',
            'txtpassword.required'      => 'Vui lòng nhập mật khẩu cho người dùng!',
            'txtadsress.required'       => 'Vui lòng nhập địa chỉ cho người dùng!',
            'txtstatus.required'        => 'Vui lòng cho biết có phải người dùng mới không',
            'txtstatus.numeric'         => 'Tiinhf trạng là 1 hoặc 0!',
        ];
    }
}
