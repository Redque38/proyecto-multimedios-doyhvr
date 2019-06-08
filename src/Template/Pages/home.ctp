<!DOCTYPE html>
    <html ng-app>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
        </head>
        <body>
            <div>
                <label>Name:</label>
                <input type="text" ng-model="yourName" placeholder="Enter a name here">
                <hr>
                <h1>{{yourName}}!</h1>
            </div>
      </body>
</html>

