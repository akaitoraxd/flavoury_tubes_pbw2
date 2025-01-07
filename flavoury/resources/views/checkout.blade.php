<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{config('midtrans.client_key')}}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
  </head>

  <body>


    <script type="text/javascript">
      window.snap.pay('{{$snapToken}}', {
        onSuccess: function(result){
          window.location = '/invoice/{{$order->id}}';
          console.log('success');
          console.log(result);
        },
        onPending: function(result){
          console.log('pending');
          console.log(result);
        },
        onError: function(result){
          console.log('error');
          console.log(result);
        },
        onClose: function(){
          console.log('customer closed the popup without finishing the payment');
        }
      });
    </script>
  </body>
</html>