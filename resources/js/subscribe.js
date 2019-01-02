$(document).ready(function(){
  $('#newsletter-signup').submit(function(){

    //Проверяем, не отправляется ли уже форма в текущий момент времени
    if($(this).data('formstatus') !== 'submitting'){
    
      //Устанавливаем переменные
      var form = $(this),
        formData = form.serialize(),
        formUrl = form.attr('action'),
        formMethod = form.attr('method'), 
        responseMsg = $('#signup-response');
      
      //Добавляем дату к форме
      form.data('formstatus','submitting');
      
      //Показываем соообщение с просьбой подождать
      responseMsg.hide()
             .addClass('response-waiting')
             .text('. . .')
             .fadeIn(200);

      //Отправляем данные на сервер для проверки
      $.ajax({
        url: formUrl,
        type: formMethod,
        data: formData,
        dataType: 'json',
        success:function(data){

          //Устанавливаем переменные
          var responseData = data,
              klass = '';

          //Состояния ответа
          switch(responseData.status){
            case 'error':
              klass = 'response-error';
            break;
            case 'success':
              klass = 'response-success';
			  
			  
			  ga('send', 'pageview', '/virtual/subscribition');
			  mixpanel.track('Action button Request a guru');
			  
            break;  
          }
          
          //Показываем сообщение ответа
          responseMsg.fadeOut(200,function(){
            $(this).removeClass('response-waiting')
                 .addClass(klass)
                 .text(responseData.message)
                 .fadeIn(200,function(){
                   //Устанавливаем таймаут для скрытия сообщения ответа
                   setTimeout(function(){
                     responseMsg.fadeOut(200,function(){
                         $(this).removeClass(klass);
                       form.data('formstatus','idle');
                     });
                   },3000)
                });
          });
        }
      });
    }
    
    //Предотвращаем отправку формы
    return false;
  });
});