function objectifyForm(formArray) {
    var returnArray = {};
    for (var i = 0; i < formArray.length; i++) {
        returnArray[formArray[i]['name']] = formArray[i]['value'];
    }
    return returnArray;
}

let App = function() {
    const _this = this,
        data = {},
        fields = {
            alertbox: $('.alertbox'),
            step1: $('#step1'),
            step2: $('#step2'),
            step3: $('#step3'),
            bags: $('#bags'),
            price: $('#price'),
            addtobasket: $('.addtobasket'),
        },
        bootstrap = {
            start: function() {
                console.log('ready');

                const _form = $('#gardenForm').bind('change', function() {
                    _this.form = objectifyForm(_form.serializeArray());
                });
                bootstrap.bindButtons();
            },
            bindButtons: function() {
                $('#subitform').click(function() {
                    _this.funcs.formSubmit();
                });
                $('.addtobasket').click(function() {
                    _this.funcs.submitBasket();
                });
            },
        },
        form = [];

    funcs = {
        formSubmit: function() {
            fields.alertbox.addClass('d-none');

            if (_this.form.width == 0 || _this.form.length == 0 || _this.form.measurementunit == '' || _this.form.depthmeasurementunit == '') {
                fields.alertbox.removeClass('d-none');
                return false;
            }

            axios.post('calculate', _this.form)
                .then(response => {
                    const resdata = response.data;
                    if (resdata.result) {
                        fields.step1.addClass('d-none');
                        fields.step2.removeClass('d-none');

                        fields.bags.html(resdata.totals.bags);
                        fields.price.html(resdata.totals.price);

                        data.id = resdata.insert_id;
                    }
                })
                .catch(function(error) {
                    if (error.response) {
                        // Request made and server responded
                        console.log(error.response.data);
                        console.log(error.response.status);
                        console.log(error.response.headers);
                    } else if (error.request) {
                        // The request was made but no response was received
                        console.log(error.request);
                    } else {
                        // Something happened in setting up the request that triggered an Error
                        console.log('Error', error.message);
                    }
                });
        },
        submitBasket: function (){
            const basket = {
                id: data.id,
            };

            axios.post('basket', basket)
                .then(response => {
                    const resdata = response.data;
                    if (resdata.result) {
                        fields.step2.addClass('d-none');
                        fields.step3.removeClass('d-none');
                    }
                })
                .catch(function(error) {
                    if (error.response) {
                        // Request made and server responded
                        console.log(error.response.data);
                        console.log(error.response.status);
                        console.log(error.response.headers);
                    } else if (error.request) {
                        // The request was made but no response was received
                        console.log(error.request);
                    } else {
                        // Something happened in setting up the request that triggered an Error
                        console.log('Error', error.message);
                    }
                });
        }
    }

    return {
        init: function() {
            bootstrap.start();
        },
    }
}();
