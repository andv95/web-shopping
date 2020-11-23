const adminBase = {
    helpers: {
        autoGenSlug(text) {
            let slug = text.toLowerCase();
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            //Xóa các ký tự đặt biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            //Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/ /gi, "-");
            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //Xóa các ký tự gạch ngang ở đầu và cuối
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            return slug;
        },

        datatable: function (columns) {
            return $('#admin_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: $('#admin_datatable').data('route'),
                    data: function (d) {
                        d._token = $('#admin_datatable').data('token'),
                            d.search_name = $('#search_name').val()
                    },
                    type: 'POST'
                },
                columns: columns
            });
        },

        numberFormat: function (nStr)
        {
            nStr = nStr.replace(/,/g,'');
            nStr += '';
            x = nStr.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
            }
            return x1 + x2;
        },

        ajax() {
            var route = $('#submit-form').attr('action');
            var formData = new FormData($('#submit-form')[0]);
            jQuery.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $(document).ajaxSend(function () {
                adminBase.helpers.showLoading();
            });
            var options = {
                url: route,
                type: "post",
                data: formData,
                success: function (data) {
                    if (data.code == 0) {
                        adminBase.helpers.hideLoading();
                        $(".print-msg").addClass('alert-danger');
                    } else {
                        window.location.href = data.data.url;
                        alert(data.message);
                        $('.print-msg').addClass('alert-success');
                    }
                    adminBase.helpers.printErrorMsg(data.message);
                },
                error: function (message) {
                    console.log(message);
                },
                done: function () {
                    setTimeout(function () {
                        $("#overlay").fadeOut(300);
                    }, 500);
                }
            };
            if (formData instanceof FormData) {
                options.contentType = false;
                options.processData = false;
            }
            $.ajax(options);
        },

        showLoading() {
            $("#overlay").fadeIn(300);
        },
        hideLoading() {
            setTimeout(function () {
                $("#overlay").fadeOut(300);
            }, 500);
        },

        printErrorMsg(msg) {
            $('html, body').animate({ scrollTop: 0}, 'slow');
            $(".print-msg").find("ul").html('');
            $(".print-msg").css('display', 'block');
            $.each(msg, function (key, value) {
                $(".print-msg").find("ul").append('<li>' + value + '</li>');
            });
        }
    }
}
