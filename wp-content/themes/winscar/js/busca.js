/* Modulo */
var app = angular.module('exemploApp', []);
/* Controller */
app.controller('exemploCtrl', 
    function ($scope, $http) {
        $scope.cliente = {
            nome: '',
            pais: '',
            estado: '',
            municipio: ''
        };
        $scope.carregaPais =  function () {        
            /* altere para a sua URL REST 
             $http.get('paises.json')
                        .success(function (data) {
                            $scope.paises = data;
                        }); */
        $scope.paises = [
  { "id": "BR", "nome":"Brasil" },
  { "id": "US", "nome":"Estados Unidos" },
  { "id": "CO", "nome":"Colômbia" }    
];
                    }; 
        
         $scope.carregaEstados =  function () {        
            /* altere para a sua URL REST 
             $http.get('estados.json')
                        .success(function (data) {
                            $scope.estados = data;
                        }); */
        $scope.estados = [
  { "id": "SP", "nome":"São Paulo", "pais":"BR" },
  { "id": "MG", "nome":"Minas Gerais", "pais":"BR"},  
  { "id": "NY", "nome":"New York", "pais":"US"},
  { "id": "DC", "nome":"Distrito Capital", "pais":"CO"}
];
                    };            
        $scope.carregaCidades =  function () {        
            /* altere para a sua URL REST 
             $http.get('municipios.json')
                        .success(function (data) {
                            $scope.cidades = data;
                        }); */
        $scope.cidades = [
  { "id": "1", "nome":"Itu", "estado":"SP" },
  { "id": "2", "nome":"Salto", "estado":"SP"},  
  { "id": "3", "nome":"Belo Horizonte", "estado":"MG"},
  { "id": "4", "nome":"Elizabeth", "estado":"NY"},
  { "id": "5", "nome":"Bogotá", "estado":"DC"}
];
                    };                   

  });