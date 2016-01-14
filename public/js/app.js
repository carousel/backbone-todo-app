 var FormView = Backbone.View.extend({
    initialize:  function() {
        this.render();
    },
    el: $('.container'),
     render: function  () {
         $('#header').html('BackboneJS Todo App');
         if($('ol#todos').children().length == 0){
            $('ol#todos').append('<p>No todos</p>');
         }
     },
     events: {
        'click button#button': 'addTodo',
        'click button#reset-button': 'reset',
        'click span.delete-todo': 'deleteTodo'
     },
     reset: function  (e) {
        e.preventDefault();
        $('input#todo').val('');
        this.render();
     },
     deleteTodo: function(e) {
         $(e.currentTarget).parent().remove();
         if($('ol#todos').children().length == 0){
            $('ol#todos').append('<p id="no-todos">No todos</p>');
         }
     },
     addTodo: function  (e) {
         e.preventDefault();
         if($('ol#todos').children().length >= 5){
             alert('Sorry,you can enter maximum 5 todos.');
            $('input#todo').val('');
             return false;
         }
         if(this.validate()){
         $('ol#todos').find('p').remove();
    $('ol#todos').append('<li>' + $('input').val() + ' <span title="Delete todo" class ="btn btn-xs btn-danger pull-right delete-todo">X</span></li>');
             $('input#todo').val('');
         }else{
             alert('Please enter todo');
         }
     },
     validate: function  () {
         if($('input#todo').val()[0] == ' '){
            $('input#todo').val('');
            this.render();
            return false;
         };
         if($('input#todo').val() == ''){
             return false;
         }else{
             return true
         }
     }
 });
new FormView();
