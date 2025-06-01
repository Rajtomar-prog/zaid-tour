
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    })
  });
  
  $(function () {
    $('.select2').select2()
  })
  
    function getval(sel) {          
       	if (sel.files && sel.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          $('<img class="preview" src="'+e.target.result+'" alt="your image" />').insertAfter(sel);
          $(sel).closest('.img-upload-btn').css('background-image','url('+e.target.result+')' )
          $('<span class="delete-btn" onclick="deletor(this)"><i class="fas fa-times-circle"></i></span>').insertAfter(sel.parentElement);
        }

        reader.readAsDataURL(sel.files[0]);
    }

        $('.uploadRow').append('<div class="col-sm-4"><div class="img-picker"><div class="img-upload-btn"><i class="fas fa-plus"></i><input type="file" name="images" onchange="getval(this);"></div></div></div>');
    }
	
	function deletor(id){
	  $(id).closest('.col-sm-4').remove();
	}
	
	$(".addMeetPoint").on('click',function(){
		$('<div class="form-group"><label class="lbl-text"><img class="mr-1" src="https://img.icons8.com/color/20/marker--v1.png" /> Another Meeting point <i class="far fa-times-circle deletePoint"></i></label><span class="input-icon"><i class="fas fa-search"></i></span><input type="text" class="form-control" placeholder="" /><textarea class="form-control mt-3" placeholder="Leave a comment here"></textarea></div>').insertBefore(this);	
	})
	
	$(".addDropPoint").on('click',function(){
		$('<div class="form-group"><label class="lbl-text"><img class="mr-1" src="https://img.icons8.com/color/20/marker--v1.png" /> Another Drop point <i class="far fa-times-circle deletePoint"></i></label><span class="input-icon"><i class="fas fa-search"></i></span><input type="text" class="form-control" placeholder="" /><textarea class="form-control mt-3" placeholder="Leave a comment here"></textarea></div>').insertBefore(this);	
	})
	
	function updateTraveler(value){
		if(value == "pick"){
			$("#pickTraveler").show();
			$("#meetTraveler").hide()
		}
		else{
			$("#meetTraveler").show();
			$("#pickTraveler").hide();
		}
	}
	
	$("input[name='showDropPoint']").click(function() {
        var status = $(this).val();
		if(status == "yes"){
			$("#dropPointBox").show();
		}
		else{
			$("#dropPointBox").hide();
		}
    });
	
	function addDynamicInclude(id){
		$('<div class="input-group mb-3"><span class="input-group-text"></span><input type="text" class="form-control" placeholder="Enter here"></div>').insertBefore("#"+id);
	}
	
	$('.addLanguage select').on('change', function() {
	  $('<figure><div class="form-check"><input class="form-check-input" type="checkbox" value="" id="'+this.value+'"><label class="form-check-label" for="'+this.value+'">'+this.value+'</label></div></figure>').insertBefore(this);	
	});
	
	
    