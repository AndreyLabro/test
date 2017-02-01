jQuery(document).ready(function ($) {
    var $testContainer = $('.test');
    var data = {
		score:0
    };

	var $testDescription = $testContainer.find('.article-test');
	var $startTestButton = $testDescription.find('button');

	$testContainer.css({
		'display': '-webkit-flex',
		'display': '-ms-flexbox',
		'display': 'flex'
	})


	$startTestButton.on('click', function(){
        $testContainer.find('.article-test').hide();
		$testContainer.find('.question-title').show();
		$testContainer.find('.question_bound').eq(0).show();
    });

	$('[data-weight]').on('click', function(){
		var $this = $(this);
		var $question = $this.closest('[data-question-index]');
		var $result = $question.find('.quest_res');
		var $variants = $question.find('.answers_list');
		var answer = $this.attr('data-weight');

		$variants.hide();
		$result.show();

		if(answer=='1'){
			$result.find('.answer_status-success').show();
			data.score++;
		} else {
			$result.find('.answer_status-fail').show();
		}
		console.log(data.score);
	});

	$('[data-next-question]').on('click', function(){
		var nextIndex = $(this).attr('data-next-question');
		var $questions = $testContainer.find('.question_bound');
		var prevQuestion = $questions.eq(nextIndex-1);
		var nextQuestion = $questions.eq(nextIndex);

		prevQuestion.hide();
		nextQuestion.show();

	});

	$('.show-results_btn').on('click', function(){
		$testContainer.find('.question_bound').hide();
		$testContainer.find('.question-title').hide();

		$testContainer.find('.article-result').each(function(){
			var $this = $(this);
			var min = +$this.attr('data-min-result');
			var max = +$this.attr('data-max-result');
			console.log(data.score);
			if(data.score>=min && data.score<=max){
				$this.show();
				$this.addClass('curent-result');
			}
			$testContainer.find('.total_answers__result').text(data.score);
			$testContainer.find('.result-event').show();
		});
	});

	$('.run-again_btn').on('click', function() {
		init('return')
	} );

	init('start');
	function init( type ) {
		data.score=0;
		$testContainer.find('.result-event').hide();
		$testContainer.find('.article-result').hide();
		$testContainer.find('.quest_res').hide();
		$testContainer.find('.answer_status').hide();
		// $testContainer.find('.question-title').show();
		
		$testContainer.find('.answers_list').show();
		$testContainer.find('.article-result').removeClass('curent-result');
		console.log(type)
		if (type == 'return') {
			$testContainer.find('.question_bound').eq(0).show();
		} else {
			$testContainer.find('.article-test').show();
			$('.question_bound').hide();
		};

	}
});
