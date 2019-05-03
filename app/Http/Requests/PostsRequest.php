<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostsRequest extends FormRequest
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
            'txtid_user'                  => 'required|unique:name',
            'txtcontent'                  => 'required',
            'txtstatus'                   => 'required|numeric',
        ];
    }

    public function messages() {
        return [
            'txtid_user.required'         => 'Vui lòng nhập mã người dùng!',
            'txtcontent.required'         => 'Vui lòng nhập nội dung bài đăng !',
            'txtstatus.required'          => 'Vui lòng nhập trạng thái bài đăng !',
            'txtstatus.numeric'           => 'Mới là 1 hoặc 0!',

        ];
    }
}
