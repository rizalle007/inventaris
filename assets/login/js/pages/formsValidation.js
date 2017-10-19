/*
 *  Document   : formsValidation.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Forms Validation page
 */

var FormsValidation = function() {

    return {
        init: function() {
            /*
             *  Jquery Validation, Check out more examples and documentation at https://github.com/jzaefferer/jquery-validation
             */

            /* Initialize Form Validation */
            $('#form-validation').validate({
                errorClass: 'help-block animation-pullUp', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function(error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function(e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function(e) {
                    // You can use the following if you would like to highlight with green color the input after successful validation!
                    e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                    e.closest('.help-block').remove();
                },
                rules: {
                    'val-username': {
                        required: true,
                        minlength: 3
                    },
                    'val-email': {
                        required: true,
                        email: true
                    },
                    'val-password': {
                        required: true,
                        minlength: 5
                    },
                    'val-confirm-password': {
                        required: true,
                        equalTo: '#val-password'
                    },
                    'val-suggestions': {
                        required: true,
                        minlength: 5
                    },
                    'val-skill': {
                        required: true
                    },
                    'val-website': {
                        required: true,
                        url: true
                    },
                    'val-digits': {
                        required: true,
                        digits: true
                    },
                    'val-number': {
                        required: true,
                        number: true
                    },
                    'val-range': {
                        required: true,
                        range: [1, 5]
                    },
                    'val-terms': {
                        required: true
                    },

                    'kodesatuan': {
                        required: true,
                        minlength: 3
                    },
                    'namasatuan': {
                        required: true,
                        minlength: 3
                    },

                    'kodejenis': {
                        required: true,
                        minlength: 3
                    },
                    'namajenis': {
                        required: true,
                        minlength: 3
                    },

                    'koderak': {
                        required: true,
                        minlength: 3
                    },
                    'namarak': {
                        required: true,
                        minlength: 3
                    },

                    'kodepemasok': {
                        required: true,
                        minlength: 3
                    },
                    'namapemasok': {
                        required: true,
                        minlength: 10
                    },
                    'telp': {
                        required: true,
                        number: true
                    },
                    'email': {
                        required: true,
                        email: true
                    },
                    'alamat': {
                        required: true,
                        minlength: 10
                    },

                    'kodepelanggan': {
                        required: true,
                        minlength: 3
                    },
                    'namapelanggan': {
                        required: true,
                        minlength: 10
                    },

                    'namaperusahaan': {
                        required: true,
                        minlength: 5
                    },
                    'logo': {
                        required: true,
                        minlength: 3
                    },
                    'namapemilik': {
                        required: true,
                        minlength: 5
                    },

                    'namamenu': {
                        required: true,
                        minlength: 5
                    },
                    'url': {
                        required: true,
                        minlength: 3
                    },
                    'submenu': {
                        required: true,
                    }
                },
                messages: {
                    'val-username': {
                        required: 'Please enter a username',
                        minlength: 'Your username must consist of at least 3 characters'
                    },
                    'val-email': 'Please enter a valid email address',
                    'val-password': {
                        required: 'Please provide a password',
                        minlength: 'Your password must be at least 5 characters long'
                    },
                    'val-confirm-password': {
                        required: 'Please provide a password',
                        minlength: 'Your password must be at least 5 characters long',
                        equalTo: 'Please enter the same password as above'
                    },

                    'kodesatuan': {
                        required: 'Silahkan masukkan kode satuan barang',
                        minlength: 'kode satuan harus lebih dari 3 karakter'
                    },
                    'namasatuan': {
                        required: 'Silahkan masukkan nama satuan barang',
                        minlength: 'nama satuan harus lebih dari 3 karakter'
                    },

                    'kodejenis': {
                        required: 'Silahkan masukkan kode jenis barang',
                        minlength: 'kode jenis harus lebih dari 3 karakter'
                    },
                    'namajenis': {
                        required: 'Silahkan masukkan nama jenis barang',
                        minlength: 'nama jenis harus lebih dari 3 karakter'
                    },

                    'koderak': {
                        required: 'Silahkan masukkan kode rak barang',
                        minlength: 'kode rak harus lebih dari 3 karakter'
                    },
                    'namarak': {
                        required: 'Silahkan masukkan nama rak barang',
                        minlength: 'nama rak harus lebih dari 3 karakter'
                    },

                    'kodepemasok': {
                        required: 'Silahkan masukkan kode pemasok barang',
                        minlength: 'kode pemasok harus lebih dari 3 karakter'
                    },
                    'namapemasok': {
                        required: 'Silahkan masukkan nama pemasok barang',
                        minlength: 'nama pemasok harus lebih dari 10 karakter'
                    },
                    'telp': {
                        required: 'Silahkan masukkan no. telp/hp pemasok barang',
                    },
                    'telp': 'Silahkan masukkan hanya angka saja',
                    'email': {
                        required: 'Silahkan masukkan email pemasok barang',
                    },
                    'email': 'Silahkan masukkan alamat email pemasok barang',
                    'alamat': {
                        required: 'Silahkan masukkan alamat pemasok barang',
                        minlength: 'alamat pemasok harus lebih dari 10 karakter'
                    },

                    'kodepelanggan': {
                        required: 'Silahkan masukkan kode pelanggan barang',
                        minlength: 'kode pelanggan harus lebih dari 3 karakter'
                    },
                    'namapelanggan': {
                        required: 'Silahkan masukkan nama pelanggan barang',
                        minlength: 'nama pelanggan harus lebih dari 10 karakter'
                    },

                    'namaperusahaan': {
                        required: 'Silahkan masukkan nama perusahaan',
                        minlength: 'nama perusahaan harus lebih dari 5 karakter'
                    },
                    'logo': {
                        required: 'Silahkan masukkan logo perusahaan',
                        minlength: 'logo perusahaan harus lebih dari 3 karakter'
                    },
                    'namapemilik': {
                        required: 'Silahkan masukkan nama pemilik perusahaan',
                        minlength: 'nama pemilik perusahaan harus lebih dari 5 karakter'
                    },

                    'namamenu': {
                        required: 'Silahkan masukkan nama menu',
                        minlength: 'nama menu harus lebih dari 5 karakter'
                    },
                    'submenu': {
                        required: 'Silahkan pilih submenu, jika main menu pilih root',
                    },
                    

                    'val-suggestions': 'What can we do to become better?',
                    'val-skill': 'Please select a skill!',
                    'val-website': 'Please enter your website!',
                    'val-digits': 'Please enter only digits!',
                    'val-number': 'Please enter a number!',
                    'val-range': 'Please enter a number between 1 and 5!',
                    'val-terms': 'You must agree to the service terms!'
                }
            });
        }
    };
}();