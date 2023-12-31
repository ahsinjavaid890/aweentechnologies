<?php

$pay_data = $gateway->convertAutoData();

?>

<?php if($payment == 'paypal'): ?>

<?php endif; ?>

<?php if($payment == 'stripe'): ?>

        <div class="row mt-2">
            <div class="col-lg-4">
                <h5 class="title pt-1">
                  <?php echo e(__('Card Number')); ?> *
                </h5>
            </div>
            <div class="col-lg-8">
                    <input type="text" class="option card-elements form-control
                     border w-50" name="card" id="scard" placeholder="<?php echo e(__('Card Number')); ?>" required="" autocomplete="off"  autofocus oninput="validateCard(this.value);">
                    <span id="errCard" class="pt-1 pb-1 d-none"></span>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-lg-4">
                <h5 class="title pt-1">
                  <?php echo e(__('Cvv')); ?> *
                </h5>
            </div>
            <div class="col-lg-8">
                    <input type="text" class="option card-elements form-control
                    border w-50" name="cvv" id="scvv" placeholder="<?php echo e(__('Cvv')); ?>" required="" autocomplete="off"  oninput="validateCVC(this.value);">
                    <span id="errCVC" class="pt-1 pb-1 d-none"></span>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-lg-4">
                <h5 class="title pt-1">
                  <?php echo e(__('Month')); ?> *
                </h5>
            </div>
            <div class="col-lg-8">
                    <input type="text" class="option card-elements form-control
                    border w-50" name="month" id="smonth" placeholder="<?php echo e(__('Month')); ?>" required="">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-lg-4">
                <h5 class="title pt-1">
                  <?php echo e(__('Year')); ?> *
                </h5>
            </div>
            <div class="col-lg-8">
                    <input type="text" class="option card-elements form-control
                    border w-50" name="year" id="syear" placeholder="<?php echo e(__('Year')); ?>" required="">
            </div>
        </div>

  <script type="text/javascript">

(function($) {
		"use strict";

    var cnstatus = false;
    var dateStatus = false;
    var cvcStatus = false;

    function validateCard(cn) {
      cnstatus = Stripe.card.validateCardNumber(cn);
      if (!cnstatus) {
        $("#errCard").removeClass('d-none').html('<?php echo e(__("Card number not valid")); ?>');
      } else {
        $("#errCard").addClass('d-none').html('');
      }
    }

    function validateCVC(cvc) {
      cvcStatus = Stripe.card.validateCVC(cvc);
      if (!cvcStatus) {
        $("#errCVC").removeClass('d-none').html('<?php echo e(__("CVC number not valid")); ?>');
      } else {
        $("#errCVC").addClass('d-none').html('');
      }

    }

})(jQuery);

  </script>

<?php endif; ?>


<?php if($payment == 'instamojo'): ?>

<?php endif; ?>

<?php if($payment == 'razorpay'): ?>

<?php endif; ?>

<?php if($payment == 'sslcommerz'): ?>

<?php endif; ?>

<?php if($payment == 'flutterwave'): ?>

<?php endif; ?>

<?php if($payment == 'paystack'): ?>

  <input type="hidden" name="txnid" id="ref_id" value="">

<?php endif; ?>

<?php if($payment == 'voguepay'): ?>

  <input type="hidden" name="txnid" id="ref_id" value="">

<?php endif; ?>

<?php if($payment == 'mollie'): ?>

<?php endif; ?>

<?php if($payment == 'authorize.net'): ?>

  <div class="row mt-2">
    <div class="col-lg-4">
        <h5 class="title pt-1">
          <?php echo e(__('Card Number')); ?> *
        </h5>
    </div>
    <div class="col-lg-8">
            <input type="text" class="option form-control
            border w-50" name="cardNumber" placeholder="<?php echo e(__('Card Number')); ?>" required="" >
    </div>
  </div>

  <div class="row mt-2">
    <div class="col-lg-4">
        <h5 class="title pt-1">
          <?php echo e(__('Card Code')); ?> *
        </h5>
    </div>
    <div class="col-lg-8">
            <input type="text" class="option form-control
            border w-50" name="cardCode" placeholder="<?php echo e(__('Card Code')); ?>" required="" >
    </div>
  </div>

  <div class="row mt-2">
    <div class="col-lg-4">
        <h5 class="title pt-1">
          <?php echo e(__('Month')); ?> *
        </h5>
    </div>
    <div class="col-lg-8">
            <input type="text" class="option form-control
            border w-50" name="month" placeholder="<?php echo e(__('Month')); ?>" required="">
    </div>
  </div>

  <div class="row mt-2">
    <div class="col-lg-4">
        <h5 class="title pt-1">
          <?php echo e(__('Year')); ?> *
        </h5>
    </div>
    <div class="col-lg-8">
            <input type="text" class="option form-control
            border w-50" name="year"  placeholder="<?php echo e(__('Year')); ?>" required="">
    </div>
  </div>

<?php endif; ?>

<?php if($payment == '2checkout'): ?>

  <input id="token" name="token" type="hidden" value="">

  <div class="row mt-2">
    <div class="col-lg-4">
        <h5 class="title pt-1">
          <?php echo e(__('Card Number')); ?> *
        </h5>
    </div>
    <div class="col-lg-8">
        <input type="text" class="option form-control
        border w-50" id="ccNo" name="cardNumber" placeholder="<?php echo e(__('Card Number')); ?>" required="" >
    </div>
  </div>

  <div class="row mt-2">
    <div class="col-lg-4">
        <h5 class="title pt-1">
          <?php echo e(__('Cvv')); ?> *
        </h5>
    </div>
    <div class="col-lg-8">
        <input type="text" class="option form-control
        border w-50" id="cvv" name="cardCVC" placeholder="<?php echo e(__('Cvv')); ?>" required="" >
    </div>
  </div>

  <div class="row mt-2">
    <div class="col-lg-4">
        <h5 class="title pt-1">
          <?php echo e(__('Month')); ?> *
        </h5>
    </div>
    <div class="col-lg-8">
        <input type="text" class="option form-control
        border w-50" id="expMonth" name="month" placeholder="<?php echo e(__('Month')); ?>" required="">
    </div>
  </div>

  <div class="row mt-2">
    <div class="col-lg-4">
        <h5 class="title pt-1">
          <?php echo e(__('Year')); ?> *
        </h5>
    </div>
    <div class="col-lg-8">
        <input type="text" class="option form-control
        border w-50" id="expYear" name="year"  placeholder="<?php echo e(__('Year')); ?>" required="">
    </div>
  </div>


  <script>

(function($) {
		"use strict";

    // Called when token created successfully.
    var successCallback = function(data) {
      var myForm = document.getElementById('twocheckout');

      // Set the token as the value for the token input
      myForm.token.value = data.response.token.token;

      // IMPORTANT: Here we call `submit()` on the form element directly instead of using jQuery to prevent and infinite token request loop.
      myForm.submit();
    };

    // Called when token creation fails.
    var errorCallback = function(data) {
      if (data.errorCode === 200) {tokenRequest();} else {alert(data.errorMsg);}
    };

    var tokenRequest = function() {
      // Setup token request arguments
      var args = {
        sellerId: "<?php echo e($pay_data['seller_id']); ?>",
        publishableKey: "<?php echo e($pay_data['public_key']); ?>",
        ccNo: $("#ccNo").val(),
        cvv: $("#cvv").val(),
        expMonth: $("#expMonth").val(),
        expYear: $("#expYear").val()
      };

      // Make the token request
      TCO.requestToken(successCallback, errorCallback, args);
    };

    $(function() {
      // Pull in the public encryption key for our environment
      <?php if($pay_data['sandbox_check'] == 1): ?>
        TCO.loadPubKey('sandbox');
      <?php else: ?>
        TCO.loadPubKey('production');
      <?php endif; ?>

      $(".pay-form").submit(function(e) {
        // Call our token request function
        tokenRequest();
        // Prevent form from submitting
        return false;
      });
    });

})(jQuery);

  </script>

<?php endif; ?>

<?php if($payment == 'mercadopago'): ?>

<div class="row mt-2">
  <div class="col-lg-4">
      <h5 class="title pt-1">
        <?php echo e(__('Credit Card Number')); ?>*
      </h5>
  </div>
  <div class="col-lg-8">
    <input class="option form-control
    border w-50" type="text" placeholder="<?php echo e(__('Credit Card Number')); ?>" id="cardNumber" data-checkout="cardNumber" onselectstart="return false" autocomplete=off required />
  </div>
</div>


<div class="row mt-2">
  <div class="col-lg-4">
      <h5 class="title pt-1">
        <?php echo e(__('Security Code')); ?>*
      </h5>
  </div>
  <div class="col-lg-8">
    <input class="option form-control
    border w-50" type="text" id="securityCode" data-checkout="securityCode" placeholder="<?php echo e(__('Security Code')); ?>" onselectstart="return false" autocomplete=off required />
  </div>
</div>

<div class="row mt-2">
  <div class="col-lg-4">
      <h5 class="title pt-1">
        <?php echo e(__('Expiration Month')); ?>*
      </h5>
  </div>
  <div class="col-lg-8">
    <input class="option form-control
    border w-50" type="text" id="cardExpirationMonth" data-checkout="cardExpirationMonth" placeholder="<?php echo e(__('Expiration Month')); ?>" autocomplete=off required />
  </div>
</div>

<div class="row mt-2">
  <div class="col-lg-4">
      <h5 class="title pt-1">
        <?php echo e(__('Expiration Year')); ?>*
      </h5>
  </div>
  <div class="col-lg-8">
    <input class="option form-control
    border w-50" type="text" id="cardExpirationYear" data-checkout="cardExpirationYear" placeholder="<?php echo e(__('Expiration Year')); ?>" autocomplete=off required />
  </div>
</div>

<div class="row mt-2">
  <div class="col-lg-4">
      <h5 class="title pt-1">
        <?php echo e(__('Card Holder Name')); ?>*
      </h5>
  </div>
  <div class="col-lg-8">
    <input class="option form-control
    border w-50" type="text" id="cardholderName" data-checkout="cardholderName" placeholder="<?php echo e(__('Card Holder Name')); ?>" required />
  </div>
</div>

<div class="row mt-2">
  <div class="col-lg-4">
      <h5 class="title pt-1">
        <?php echo e(__('Document type')); ?>*
      </h5>
  </div>
  <div class="col-lg-8">
    <select class="option form-control
    border w-50" id="docType" data-checkout="docType" required></select>
  </div>
</div>

<div class="row mt-2">
  <div class="col-lg-4">
      <h5 class="title pt-1">
        <?php echo e(__('Document Number')); ?>*
      </h5>
  </div>
  <div class="col-lg-8">
    <input class="form-control
    border w-50" type="text" id="docNumber" data-checkout="docNumber" placeholder="<?php echo e(__('Document Number')); ?>" required />
  </div>
</div>

  <input type="hidden" id="installments" value="1"/>
  <input type="hidden" name="amount" id="amount"/>
  <input type="hidden" name="description"/>
  <input type="hidden" name="paymentMethodId" />


<script>

(function($) {
		"use strict";

    window.Mercadopago.setPublishableKey("<?php echo e($pay_data['public_key']); ?>");
    window.Mercadopago.getIdentificationTypes();

    function addEvent(to, type, fn){
      if(document.addEventListener){
          to.addEventListener(type, fn, false);
      } else if(document.attachEvent){
          to.attachEvent('on'+type, fn);
      } else {
          to['on'+type] = fn;
      }
  };

addEvent(document.querySelector('#cardNumber'), 'keyup', guessingPaymentMethod);
addEvent(document.querySelector('#cardNumber'), 'change', guessingPaymentMethod);

function getBin() {
          var ccNumber = document.querySelector('input[data-checkout="cardNumber"]');
          return ccNumber.value.replace(/[ .-]/g, '').slice(0, 6);
};

function guessingPaymentMethod(event) {
  var bin = getBin();

  if (event.type == "keyup") {
      if (bin.length >= 6) {
          window.Mercadopago.getPaymentMethod({
              "bin": bin
          }, setPaymentMethodInfo);
      }
  } else {
      setTimeout(function() {
          if (bin.length >= 6) {
              window.Mercadopago.getPaymentMethod({
                  "bin": bin
              }, setPaymentMethodInfo);
          }
      }, 100);
  }
};

function setPaymentMethodInfo(status, response) {
  if (status == 200) {
      const paymentMethodElement = document.querySelector('input[name=paymentMethodId]');

      if (paymentMethodElement) {
          paymentMethodElement.value = response[0].id;
      } else {
          const input = document.createElement('input');
          input.setAttribute('name', 'paymentMethodId');
          input.setAttribute('type', 'hidden');
          input.setAttribute('value', response[0].id);

          form.appendChild(input);
      }

      Mercadopago.getInstallments({
          "bin": getBin(),
          "amount": parseFloat(document.querySelector('#amount').value),
      }, setInstallmentInfo);

  } else {
      alert(`payment method info error: ${response}`);
  }
};


let doSubmit = false;
addEvent(document.querySelector('#mercadopago'), 'submit', doPay);
function doPay(event){
  event.preventDefault();
  if(!doSubmit){
      var $form = document.querySelector('#mercadopago');

      window.Mercadopago.createToken($form, sdkResponseHandler); // The function "sdkResponseHandler" is defined below

      return false;
  }
};

function sdkResponseHandler(status, response) {
  if (status != 200 && status != 201) {
      alert("Some of your information is wrong!");
      $('#preloader').hide();

  }else{
      var form = document.querySelector('#mercadopago');
      var card = document.createElement('input');
      card.setAttribute('name', 'token');
      card.setAttribute('type', 'hidden');
      card.setAttribute('value', response.id);
      form.appendChild(card);
      doSubmit=true;
      form.submit();
  }
};


function setInstallmentInfo(status, response) {
      var selectorInstallments = document.querySelector("#installments"),
      fragment = document.createDocumentFragment();
      selectorInstallments.length = 0;

      if (response.length > 0) {
          var option = new Option("Escolha...", '-1'),
          payerCosts = response[0].payer_costs;
          fragment.appendChild(option);

          for (var i = 0; i < payerCosts.length; i++) {
              fragment.appendChild(new Option(payerCosts[i].recommended_message, payerCosts[i].installments));
          }

          selectorInstallments.appendChild(fragment);
          selectorInstallments.removeAttribute('disabled');
      }
  };

})(jQuery);

</script>


<?php endif; ?>

<?php if($payment == 'other'): ?>

<div class="row mt-3">
  <div class="col-lg-4">

  </div>
  <div class="col-lg-8">
    <?php echo clean($gateway->details , array('Attr.EnableID' => true)); ?>

  </div>
</div>

<div class="row mt-3">
  <div class="col-lg-4">
      <h5 class="title pt-1">
        <?php echo e(__('Transaction ID#')); ?> *
      </h5>
  </div>
  <div class="col-lg-8">
        <input type="text" class="option" name="txnid" required="" placeholder="<?php echo e(__('Transaction ID#')); ?>" required="">
  </div>
</div>

<?php endif; ?>
<?php /**PATH /home/demoroyal/public_html/test/online_store_api/project/resources/views/load/payment-user.blade.php ENDPATH**/ ?>