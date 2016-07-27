
(function () {
   'use strict';

   angular
       .module('app')
       .factory('UserService', UserService);

   UserService.$inject = ['$http'];
   function UserService($http) {
       var service = {};

       service.GetAll = GetAll;
       service.GetById = GetById;
       service.GetRecord = GetRecordById
       service.addIssue = addIssue;
       service.updateIssue = updateIssue;
       service.createRequest = createRequest;
       
       return service;

       function GetAll() {
           return $http.get('/api/readUser.php').then(handleSuccess, handleError('Error getting all users'));
       }

       function GetById(userID) {
           return $http.get('/api/readUser.php/' + userID).then(handleSuccess, handleError('Error getting user by id'));
       }

       function GetRecordById(recordID) {
           return $http.get('/api/readRequest_Issue.php/' + userID).then(handleSuccess, handleError('Error getting record by id'));
       }

       function addIssue(userID) {
           return $http.post('/api/addIssue.php', userID).then(handleSuccess, handleError('Error creating issue'));
       }

       function updateIssue(userID) {
           return $http.put('/api/updateIssue/' + user.id).then(handleSuccess, handleError('Error updating issue'));
       }

      function createRequest(userID) {
           return $http.put('/api/insertRequest/' + user.id).then(handleSuccess, handleError('Error updating request'));
       }
      
       // private functions

       function handleSuccess(res) {
           return res.data;
       }

       function handleError(error) {
           return function () {
               return { success: false, message: error };
           };
       }
   }

})();
}