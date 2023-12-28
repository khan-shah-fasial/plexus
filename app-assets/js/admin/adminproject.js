$(document).ready(function(){
	/*change password*/
		$("#changepassword").on("click",function(e){

			e.preventDefault();
			formdata = $("#passwordform").serializeArray();
			formdata.push({name:'isAjax',value:1});
			$.ajax({
				url:$('#passwordform').attr('action'),
				type:'POST',
				data:formdata,
				dataType:"JSON",
				beforeSend:function(){
					ajaxindicatorstart("Please wait.",base_url);
				},
				success:function(response)
				{
					ajaxindicatorstop();
					if(response.result == 'success')
					{
						alert("password change");
						window.location.href = base_url+'admin/dashboard';

					}
					else if(response.result =='fail')
					{
						alert("old password does not match")
						$("#passwordform")[0].reset();
					}
					else if(response == 3)
					{
						window.location.href = base_url+'admin/dashboard';
					}
					else
					{
						appendMsgs("#passwordform",response);
					}
				},
				error:function(){
					ajaxindicatorstop();
				}
			});
		});
	/*change password*/

	/*about us overview*/
		$("#btn_overview").on("click",function(e){
			e.preventDefault();
			formdata = $("#overview_form").serializeArray();
			formdata.push({name:'isAjax',value:1});
			$.ajax({
				url:$('#overview_form').attr('action'),
				type:'POST',
				data:formdata,
				dataType:"JSON",
				beforeSend:function(){
					ajaxindicatorstart("Please wait.",base_url);
				},
				success:function(response)
				{
					ajaxindicatorstop();
					if(response.result == 'success')
					{
						window.location.href = base_url+'aboutus/overview';

					}
					else if(response.result =='fail')
					{
						alert("old password does not match")
						$("#passwordform")[0].reset();
					}
					else if(response == 3)
					{
						window.location.href = base_url+'aboutus/overview';
					}
					else
					{
						appendMsgs("#passwordform",response);
					}
				},
				error:function(){
					ajaxindicatorstop();
				}
			});
		});

	/*about us*/

	$("#btn_history").on("click",function(e){
			e.preventDefault();
			formdata = $("#history_form").serializeArray();
			formdata.push({name:'isAjax',value:1});
			$.ajax({
				url:$('#history_form').attr('action'),
				type:'POST',
				data:formdata,
				dataType:"JSON",
				beforeSend:function(){
					ajaxindicatorstart("Please wait.",base_url);
				},
				success:function(response)
				{
					ajaxindicatorstop();
					if(response.result == 'success')
					{
						window.location.href = base_url+'aboutus/history';

					}
					else if(response.result =='fail')
					{
						alert("old password does not match")
						$("#passwordform")[0].reset();
					}
					else if(response == 3)
					{
						window.location.href = base_url+'aboutus/history';
					}
					else
					{
						appendMsgs("#passwordform",response);
					}
				},
				error:function(){
					ajaxindicatorstop();
				}
			});
	});

	$("#btn_management").on("click",function(e){
	    e.preventDefault();
	    formdata = $('#management_form')[0];
	    var data = new FormData(formdata);
	    $.ajax({
	      url:$("#management_form").attr('action'),
	      type:'POST',
	      data:data,
	      dataType:"JSON",
	      contentType:false,
	      processData:false,
	      success:function(response)
	      {
	          if(response.result == 'success')
	          {
	            window.location.href = base_url+'aboutus/management';

	          }
	          else{
	            console.log(response);
	          }

	      }
	    });
	});

	$("#btn_award").on("click",function(e){
	    e.preventDefault();
	    formdata = $('#award_form')[0];
	    var data = new FormData(formdata);
	  
	    $.ajax({
	      url:$("#award_form").attr('action'),
	      type:'POST',
	      data:data,
	      dataType:"JSON",
	      contentType:false,
	      processData:false,
	      success:function(response)
	      {
	          if(response==1)
	          {
	            alert('Data successfully entered');
	            window.location.href = base_url+'management';

	          }
	          else{
	            console.log(response);
	          }

	      }
	    });

	  });



	$("#btn_news").on("click",function(e){
	    e.preventDefault();
	    formdata = $('#news_form')[0];
	    var data = new FormData(formdata);
	    $.ajax({
	      url:$("#news_form").attr('action'),
	      type:'POST',
	      data:data,
	      dataType:"JSON",
	      contentType:false,
	      processData:false,
	      success:function(response)
	      {
	          if(response.result == 'success')
	          {
	            window.location.href = base_url+'newsevents/news';

	          }
	          else{
	            console.log(response);
	          }

	      }
	    });
	});


$("#btn_events").on("click",function(e){
	    e.preventDefault();
	    formdata = $('#events_form')[0];
	    var data = new FormData(formdata);
	    $.ajax({
	      url:$("#events_form").attr('action'),
	      type:'POST',
	      data:data,
	      dataType:"JSON",
	      contentType:false,
	      processData:false,
	      success:function(response)
	      {
	          if(response.result == 'success')
	          {
	            window.location.href = base_url+'newsevents/events';

	          }
	          else{
	            console.log(response);
	          }

	      }
	    });
	});



$("#btn_road_show").on("click",function(e){
	    e.preventDefault();
	    formdata = $('#road_show_form')[0];
	    var data = new FormData(formdata);
	    $.ajax({
	      url:$("#road_show_form").attr('action'),
	      type:'POST',
	      data:data,
	      dataType:"JSON",
	      contentType:false,
	      processData:false,
	      success:function(response)
	      {
	          if(response.result == 'success')
	          {
	            window.location.href = base_url+'newsevents/road_show';

	          }
	          else{
	            console.log(response);
	          }

	      }
	    });
	});


	});