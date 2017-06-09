/**
 * Constructor
 *
 * Recibe un Objeto con los datos de configuración necesarios para instanciar el objeto.
 *
 * globalCollectConfig = {
 *      clientSessionID     : '512c8b4b4998456e9bf309a1551141e4',   // Obtenido por request a la Server API
 *      customerId          : '552-2b99277687eb4e0699474d4023b64f57',   // Obtenido por request a la Server API
 *      region              : 'EU',   // Obtenido por request a la Server API,
 *      environment         : 'PREPROD',   // SANDBOX / PREPROD / PROD
 *      countryCode         : 'AR',
 *      currency            : 'ARS',
 *      locale              : 'en_GB'
 * }
 *
 * @param GlobalCollectConfig
 * @constructor
 */
var GlobalCollectPayment = function (GlobalCollectConfig) {
    this.config     = GlobalCollectConfig || {};
    this.session    = null;
    this._paymentProducts = {};

    /**
     * Métodos
     */
    this.validateParameters     = validateParameters;
    this.getEndPoint            = getEndPoint;
    this.SendRequest            = SendRequest;
    this.paymentDetails         = paymentDetails;
    this.pay                    = pay;
    this.encrypt                = encrypt;
    this.setPaymentProduct      = setPaymentProduct;
    this.getPaymentProduct      = getPaymentProduct;
    this.getPaymentProducts     = getPaymentProducts;

    if (!GlobalCollectConfig) {
        throw {
            toString: function() {
                return 'Son requeridos los datos de configuración para instanciar el objeto.';
            }
        };
    }

    var sessionDetails = {
        clientSessionID : this.config.clientSessionID,
        customerId      : this.config.customerId,
        region          : this.config.region,
        environment     : this.config.environment
    };

    this.session = new GCsdk.Session(sessionDetails);

    if (true === this.validateParameters()) {
        var client = this;
        $('.credit-cards li')
            .off('change', 'input')
            .on('change', 'input', function(e){
                e.preventDefault();
                $('#' + $.fn.options.paymentProduct).val($(this).data('product-id'));
                $(this).setFormats($(this));
                $.fn.validateCreditCard();
            });
    }

    return this;
}

/**
 * Obtiene la Url del endpoint para el ambiente configurado.
 * @returns {*}
 */
var getEndPoint = function() {
    if ('SANDBOX' === this.config.environment) {
        return 'https://api-sandbox.globalcollect.com';
    }
    if ('PREPROD' === this.config.environment) {
        return 'https://api-preprod.globalcollect.com';
    }
    if ('PROD' === this.config.environment) {
        return 'https://api.globalcollect.com';
    }
    return false;
}

/**
 * Valida parametros de configuración.
 * @returns {boolean}
 */
var validateParameters = function () {
    if (!this.config.clientSessionID) {
        throw 'clientSessionID es requerido';
        return false;
    }

    if (!this.config.customerId) {
        throw 'customerId es requerido';
        return false;
    }

    if (!this.config.environment) {
        throw 'environment es requerido';
        return false;
    }

    if (!this.config.countryCode) {
        throw 'countryCode es requerido';
        return false;
    }

    if (!this.config.currency) {
        throw 'currency es requerido';
        return false;
    }

    if (!this.config.locale) {
        this.config.locale = 'en_GB';
    }

    return true;
}

var SendRequest = function(Query) {
    var UrlEndPoint = this.getEndPoint();

    if (!UrlEndPoint) {
        throw 'Ocurrió un error al obtener el endpoint para '. this.config.environment;
        return false;
    }

    var response = false;

    $.ajax({
        async       : false,
        url         : UrlEndPoint + '/client/v1/' + this.config.customerId + '/' + Query + '?countryCode=' + this.config.countryCode + '&currencyCode=' + this.config.currency,
        type        : 'GET',
        dataType    : 'json',
        headers     : {
            Authorization: 'GCS v1Client:' + this.config.clientSessionID
        }
    }).done(function(json){
        response = json;
    }).fail(function(jqXHR, textStatus, errorThrown) {
        // the request failed
        console.log(jqXHR, textStatus, errorThrown);
    });

    return response;
}

var setPaymentProduct = function(paymentProduct)
{
    this._paymentProducts[paymentProduct.id] = paymentProduct;
}

var getPaymentProducts = function()
{
    return this._paymentProducts;
}

var getPaymentProduct = function(paymentProductID)
{
    if (false === this._paymentProducts.hasOwnProperty(paymentProductID)) {
        return false;
    }

    return this._paymentProducts[paymentProductID];
}

var paymentDetails = function() {
    var paymentDetails = {
        //totalAmount : $('#amount').val(),
        totalAmount : 1000,
        countryCode : $.trim(this.config.countryCode),
        locale      : this.config.locale,
        isRecurring : false,
        currency    : $.trim(this.config.currency)
    };

    return paymentDetails;
}

var pay = function(options, callback) {
    if (true === $('#' + $.fn.options.form).validate().form()) {
        $.fn.paymentSendingForm();
        var paymentDetails = this.paymentDetails();

        var paymentRequest = this.session.getPaymentRequest();
        var client = this;
        this.session.getPaymentProduct($('#' + $.fn.options.paymentProduct).val(), paymentDetails).then(function(paymentProduct) {
            paymentRequest.setPaymentProduct(paymentProduct);

            var blob = {
                'cardNumber'  : $.trim($('#'+$.fn.options.cardNumber).val()),
                'expiryDate'  : $.trim($('#'+$.fn.options.expirityMonth).val()) + '/' + $.trim($('#'+$.fn.options.expirityYear).val()),
                'cvv'         : $.trim($('#'+$.fn.options.cvv).val()),
            };

            for (var key in blob) {
                paymentRequest.setValue(key, blob[key]);
            }

            if (true === paymentRequest.isValid()) {
                return client.encrypt(paymentRequest, callback);
            } else {
                return false;
            }
        }, function(e) {
            return false;
        });
    } else {
        $.fn.paymentRestoreButton();
    }
}

var encrypt = function(paymentRequest, callback) {
    var encryptor = this.session.getEncryptor();
    var client = this;
    encryptor.encrypt(paymentRequest).then(function(encryptedString) {
        $('#' + $.fn.options.blobcode).attr('value', encryptedString);
        if ('function' === typeof callback) {
            callback.call();
        }
    }, function(errors) {
        $.fn.paymentRestoreButton();
    });
}