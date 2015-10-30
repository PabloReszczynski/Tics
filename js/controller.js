angular.module('navbar', [])
.controller('navbarDirectiveTestCtrl', function($scope){
    $scope.affixed = 'top';
    $scope.search = {
        show: true,
        terms: ''
    };
    $scope.brand = "<span class="glyphicon glyphicon-home" aria-hidden="true"></span>";
    $scope.inverse = true;
    $scope.menus = [
        {
            title: "Perfil",
            action: "singular"
        },
        {
            title: "Tutorias",
            action: "singular"
        },
        {
            title: "Quienes Somos",
            action: "singular"
        },
        {
            title: "Contacto",
            action: "Singular"
        }
    ];

    $scope.items = '';
    $scope.styling = 'Inverse';
    $scope.searchDisplay = 'Visible';
})
