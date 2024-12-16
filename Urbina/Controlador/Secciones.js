paypal.Buttons({
        style: {
            shape: "pill",
            color: "blue",
            label: "pay",
        },
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [
                    {
                        amount: {
                            value: 100,
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                actions.order.capture().then(function(detalles) {
                    window.location.href="../Vista/detalles.php?";


                })

            },
            oncancel: function(data) {
                alert("You canceled the payment!");
                console.log(data);

        }, 
       

       
    })
    .render("#paypal-button-container"); 