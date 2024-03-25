<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Payment Form</title>
<script src="https://js.stripe.com/v3/"></script>
<style>
  .stripe-form {
    max-width: 400px;
    margin: auto;
    border: 1px solid #ccc;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    border-radius: 5px;
    background: #f9f9f9;
  }
  .stripe-form input {
    margin-bottom: 20px;
    padding: 10px;
    width: 100%;
    box-sizing: border-box;
  }
  .stripe-form button {
    background: #32325d;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
  }
  .link-like-button {
  background-color: #fff; 
  border: 1px solid #ccc; 
  padding: 8px 18px; 
  text-decoration: none; 
  cursor: pointer; 
  border-radius: 5px;
  margin-top:4000px;
  margin-left:30px;
  background: darkred;
  color:white;
  font-weight: 60;
}

</style>
</head>
<body>

<form action="charge" method="post" id="payment-form" class="stripe-form">
  <div>
    <label for="card-element">
      Credit or debit card
    </label>
    <div id="card-element">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
  </div>
<br>
  <button >Submit Payment</button>
  <br>
  <br>
  
  <a href="Home Bake Haven.php" class="link-like-button">Cancel</a>


</form>

<script>
  var stripe = Stripe('pk_test_51OvK3eIhONe8LAkKN116k0723AWWLeVuJXXNzEzy4h31dJVr2ezrE1NBbD1SVr9fKig7b2spQKcbO9dFd4cafFuI00g8KOvMEl'); // Replace with your test publishable key
  var elements = stripe.elements();

  var style = {
    base: {
      color: "#32325d",
    }
  };

  var card = elements.create("card", { style: style });
  card.mount("#card-element");

  card.addEventListener('change', function(event) {
    var displayError = document.getElementById('card-errors');
    if (event.error) {
      displayError.textContent = event.error.message;
    } else {
      displayError.textContent = '';
    }
  });

  var form = document.getElementById('payment-form');
  form.addEventListener('submit', function(event) {
    event.preventDefault();

    stripe.createToken(card).then(function(result) {
      if (result.error) {
        var errorElement = document.getElementById('card-errors');
        errorElement.textContent = result.error.message;
      } else {
        stripeTokenHandler(result.token);
      }
    });
  });

  function stripeTokenHandler(token) {
    var form = document.getElementById('payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);

    form.submit();
  }
</script>

</body>
</html>
