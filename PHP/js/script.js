$(function () {

		$("#mobile_number,#mobile_number_local").attr("maxlength", "10");
		$("#mobile_number,#mobile_number_local").attr("minlength", "10");
		// $("#mobile_number").blur(function(){
		// 	res = formatPhoneNumber($("#phone_mobile").val());
		// 	$("#mobile_number").val(res);
		// });
		
		var startString= moment().add('minutes',90).format('YYYY-MM-DD hh:mm a');
		var endString= moment(startString, "YYYY-MM-DD").add('days', 1);
		var time_slotes= intervals(startString, endString);
		var time_option= '<option value="">Select Time</option>';
		for(var i=0;i<time_slotes.length;i++){
			time_option +='<option value="'+time_slotes[i]+'">'+time_slotes[i]+'</option>';
		}
		$("#pickup_time").append(time_option);
		$("#pickup_time_local").append(time_option);

		$('#pickup_date').datetimepicker({
			format: 'DD-MM-YYYY',
			minDate:moment().add('minutes',90)
			// minDate: new Date().setHours(0,0,0,0)
		});

		$('#pickup_date_local').datetimepicker({
			format: 'DD-MM-YYYY',
			minDate:moment().add('minutes',90)
			// minDate: new Date().setHours(0,0,0,0)
		});

		$('#return_date').datetimepicker({
			format: 'DD-MM-YYYY',
			minDate: moment().add('minutes',90)
		});

		// $('#pickup_time').datetimepicker({
		// 	format: 'LT',
		// 	stepping: 15,
		// 	minDate: moment()
		// });

		// $('#pickup_time_local').datetimepicker({
		// 	format: 'LT',
		// 	stepping: 15,
		// 	minDate: moment()
		// });

		$('#pickup_date').on('dp.change', function (e) {  
			var pickup_date= document.getElementById("pickup_date").value;
			var today = moment().format('DD-MM-YYYY');
			$('#return_date').data("DateTimePicker").minDate(pickup_date);
			$('#return_date').val("");
			
			var startString= moment(pickup_date, "YYYY-MM-DD");
			if(today==pickup_date){
				var startString= moment().add('minutes',90).format('YYYY-MM-DD hh:mm a');
			}
			
			var endString= moment(startString, "YYYY-MM-DD").add('days', 1);
			var time_slotes= intervals(startString, endString);

			var time_option= '<option value="">Select Time</option>';
			for(var i=0;i<time_slotes.length;i++){
				time_option +='<option value="'+time_slotes[i]+'">'+time_slotes[i]+'</option>';
			}
			$("#pickup_time").html('').append(time_option);

		});

		$('#pickup_date_local').on('dp.change', function (e) {  
			var pickup_date= document.getElementById("pickup_date_local").value;
			var today = moment().format('DD-MM-YYYY');

			var startString= moment(pickup_date, "YYYY-MM-DD");
			if(today==pickup_date){
				var startString= moment().add('minutes',90).format('YYYY-MM-DD hh:mm a');
			}
			
			var endString= moment(startString, "YYYY-MM-DD").add('days', 1);
			var time_slotes= intervals(startString, endString);

			var time_option= '<option value="">Select Time</option>';
			for(var i=0;i<time_slotes.length;i++){
				time_option +='<option value="'+time_slotes[i]+'">'+time_slotes[i]+'</option>';
			}
			$("#pickup_time_local").html('').append(time_option);

		});
		

	});

	function intervals(startString, endString) {
		var start = moment(startString, 'YYYY-MM-DD hh:mm a');
		var end = moment(endString, 'YYYY-MM-DD hh:mm a');

		// round starting minutes up to nearest 15 (12 --> 15, 17 --> 30)
		// note that 59 will round up to 60, and moment.js handles that correctly
		start.minutes(Math.ceil(start.minutes() / 15) * 15);
	
		var result = [];
	
		var current = moment(start);
		// console.log(start);
		while (current < end) {
			result.push(current.format('hh:mm A'));
			current.add(15, 'minutes');
		}
		// console.log(result);
		return result;
	}

	function setFromTocity(from_id, to_id){
		$("#pickup_city").select2().val(from_id).trigger("change");
		$("#drop_city").select2().val(to_id).trigger("change");
		$('html, body').animate({
			scrollTop: $("#os_tab").offset().top - 2
		},200);
	}

	function formatPhoneNumber(phoneNumberString) {
		var cleaned = ('' + phoneNumberString).replace(/\D/g, '');
		var match = cleaned.match(/^(1|)?(\d{3})(\d{3})(\d{4})$/);
		if (match) {
		  var intlCode = (match[1] ? '+1 ' : '');
		  return [intlCode, '(', match[2], ') ', match[3], '-', match[4]].join('');
		}
		return null;
	  }