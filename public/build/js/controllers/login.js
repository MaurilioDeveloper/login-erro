angular.module('app.controllers')
        .controller('LoginController',['$scope', '$location', 'OAuth', function($scope, $location, OAuth){
        //.controller('LoginController',['$scope', '$location', function($scope, $location){
        $scope.user = {
            usuario: '',
            password: ''
        };
        $scope.error = {
            message: '',
            error: false
        };
        $scope.login = function(){
           if($scope.form.$valid){
           OAuth.getAccessToken($scope.user).then(function(){
           
              msg('Login efetuado com sucesso...', 'success');
                        setTimeout(function () {
                            window.location.href = '#/Home';
                        }, 4000);
               
           })
           
           ,function(data){
           }
           }else{
               $scope.error.error = true;
               //$scope.error.message = data.error_description;
                  
           } 
        };
}]);
function msg(msg, tipo) {
        var retorno = $('.retorno');
        var tipo = (tipo === 'success') ? 'success' : (tipo === 'warning') ? 'warning' : (tipo === 'danger') ? 'danger' : (tipo === 'info') ? 'info' : alert('INFORME UMA MENSAGEM DE SUCESSO, ATENÇÃO, ERRO OU INFORMAÇÃO');
        retorno.empty().fadeOut('fast', function () {
            return $(this).html('<img src="build/img/244.GIF" id="load" alt="Carregando" /><br><br><div class="alert alert-' + tipo + '">' + msg + '</div>').fadeIn('slow');

        });

        setTimeout(function () {
            retorno.fadeOut('slow').empty();
        }, 6000)
    }