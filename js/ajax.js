$(document).ready(function(){

$('form').on('submit', function(e) {
	e.preventDefault();
	var titre = $('#titre').val();
    var date = $('#date').val();
	var contenu = $('#contenu').val();
	var url = 'insert.php';
  $.ajax({
  type: 'POST',
  url: url,
  data: {titre: titre, date: date, contenu: contenu },
  success: function(res){
     $('#titre').val();
     $('#date').val();
	 $('#contenu').val();
	 $('#res').append(	
 "<div class='card border-info mr-3' style='width: 18rem;'><div class='card-body'><h5 class='card-title'>"+titre+"</h5><p class='card-subtitle mb-2 text-muted'>"+date+"</p><p class='card-text'>"+contenu+"</p><button class='btn btn-info'>edit</button><button class='btn btn-danger'>delete</button></div></div>");
  },
  error: function(){
	console.log('error');
  },
});
});


$(document).on('click', '.delete', function(e){
    e.preventDefault();
   var id = $(this).data('id');
   var url = 'delete.php';
   var $clicked_btn = $(this);
  	$.ajax({
  	  url: url,
  	  type: 'GET',
      data: {
        'delete' : id,
      },
      success: function(){
        $clicked_btn.parent().parent().parent().remove();
      }
  	});
  });
 

$('#edit-data').click('a[data-role=update]',function(){
		var id = $(this).data("id");
        var title = $('#'+id).children('h5[data-target=titre]').text();
		var date = $('#'+id).children('p[data-target=date]').text();
		var content = $('#'+id).children('p[data-target=contenu]').text();

		$('#tit').val(title);
		$('#dat').val(date);
		$('#cont').val(content);
		$('#formId').val(id);
		$('#exampleModal').modal('toggle');

});

$(document).on('click', '.save', function(){
	var all = {
	id : $('#formId').val(),
	title : $('#tit').val(),
	date : $('#dat').val(),
	content : $('#cont').val(),
	}
	var url = 'update.php';
	$.ajax({
		type: 'POST',
		url: url,
		data: all,
		success: function(){
			
		}
	});
});
});