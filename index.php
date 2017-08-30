<html>
  <html lang="en-us">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="manifest" href="./manifest.json">
    <title>Say It Large</title>
    <style id="webmakerstyle">

      body {
        margin: 0;
        font-family: Verdana;
        font-size: 22pt
      }

      div {
        padding: 0px;
      }

      p {
        height: 5%;
      }

      .container {
        height: 100%;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        background-color: #fee;
      }

      .item {
        margin: 4px;
        background-color: #fee;
      }

    </style>
  </head>
<body>
    <div class='container'>
      <div class='item'>
        <p>
          Ian M Clark
        </p>
        <p>
          ian@olsen-clark.com
        </p>
        <p>
          @theboxfactory
        </p>
      </div>      
    </div>
    <script>
      console.log('Started....');

      if ('serviceWorker' in navigator) {
        console.log('Service Worker supported.')
        navigator.serviceWorker.register('service-worker.js')
          .then(function(event){
            console.log('Service worker registered.');
          }).catch(function(error) {
              console.log('Servicd worker registration failed: ' + error);
            }); 
      }
      else {
        console.log('Service Worker not supported.')
      }

      document.addEventListener('load', function() {
        console.log('Document loaded...');
        alert('Loaded');
      });

      console.log('Ended....');
    
    </script>
</body>
</html>