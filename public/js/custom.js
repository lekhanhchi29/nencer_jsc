/** 
* Using jQuery here
*/
$(document).ready(function () {
    /**
     *  Using jQuery validate
     * 
     * Validate for Login form
     */
    $('#login_form').validate({
        rules: {
            'email': {
                'required': true
            }, 
            'password': {
                'required' : true,
                'minlength' : 3
            }
        },
        messages: {
            'email': {
                'required': 'Bạn hãy nhập email!'
            },
            'password': {
                'required': 'Bạn hãy nhập mật khẩu',
                'minlength': 'Mật khẩu phải nhiều hơn 3 kí tự.'
            }
        },
        submitHandler: function (form) {
            // Submit data to server
            form.submit();
        }
    });

    /**
     *  Using jQuery validate
     * 
     * Validate for form create receipts
     */
    $('#form_create_receipts').validate({
        rules: {
            'receipt_name' : {
                'required' : true,
                'minlength' : 3,
                'maxlength' : 255
            },
            'delivery_date' : {
                'required' : true
            },
            'image' : {
                'required' : true,
                accept: "image/jpg, image/jpeg"
            }
        },
        messages: {
            'receipt_name': {
                'required': 'Ban hay nhap ten don hang',
                'minlength': 'Ten don hang phai lon hon 3 ky tu.',
                'maxlength': 'Ten don hang khong duoc qua 255 ky tu.'
            },
            'delivery_date': {
                'required': 'Hay chon ngay giao hang du kien'
            },
            'image': {
                'required': 'Ban hy tai hinh anh hoa don.',
                'accept': 'Dinh dang hoa don khong dung.'
            }
        },
        submitHandler: function (form) {
            // Submit data to server
            form.submit();
        }
    });
    
    /**
     *  Using jQuery validate
     * 
     * Validate for storage form
     */
    $('#storage-form').validate({
        rules: {
            'name' : {
                'required' : true,
            },
            'cost' : {
                'required' : true
            }
        },
        messages: {
            'name': {
                'required': 'Ban hay nhap ten kho',
            },
            'cost': {
                'required': 'Kho phai co gia duy tri'
            }
        },
        submitHandler: function (form) {
            // Submit data to server
            form.submit();
        }
    });
    /**
     *  Using jQuery validate
     * 
     * Validate for create employee
     */
    $('#employee_create_form').validate({
        rules: {
            'email' : {
                'required' : true,
                'maxlength': 50
            },
            'password' : {
                'required' : true,
                'minlength': 8,
                'maxlength': 29
            }
        },
        messages: {
            'email': {
                'required': 'Bạn hãy nhập email',
                'maxlength':'Email không quá 50 ký tự.'
            },
            'password': {
                'required': 'Bạn hãy nhập mật khẩu',
                'minlength': 'Mật khẩu phải trên 8 ký tự.',
                'maxlength': 'Mật khẩu không quá 29 ký tự.'
            }
        },
        submitHandler: function (form) {
            // Submit data to server
            form.submit();
        }
    });
    /**
     *  Using jQuery validate
     * 
     * Validate for edited employee
     */
    $('#employee_edit_form').validate({
        rules: {
            'password' : {
                'required' : true,
                'minlength': 8,
                'maxlength': 29
            }
        },
        messages: {
            'password': {
                'required': 'Bạn hãy nhập mật khẩu  cho người này',
                'minlength': 'Mật khẩu phải trên 8 ký tự.',
                'maxlength': 'Mật khẩu không quá 29 ký tự.'
            }
        },
        submitHandler: function (form) {
            // Submit data to server
            form.submit();
        }
    });

    //JS method đen form update receipt to server.
    
})