$(function () {
  $("#datepicker").datepicker({ 
        autoclose: true, 
		 format: 'yyyy/mm/dd',
        todayHighlight: true
  }).datepicker('update', new Date());

$("#editdatepicker").datepicker({ 
        autoclose: true, 
		 format: 'yyyy/mm/dd',
        todayHighlight: true
  });

});



