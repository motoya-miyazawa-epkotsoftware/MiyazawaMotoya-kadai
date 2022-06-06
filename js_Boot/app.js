const quiz = [
  {
    question: '任天堂から販売されているゲームハードは次のうちどれ?',
    answers:[
      'PS5',
      'Switch',
      'Xbox',
      'スマートフォン'
    ],
    correct:'Switch'
  },{
    question: 'セガが開発した最後のゲームハードは次のうちどれ?',
    answers:[
      'プレイステーション',
      'セガサターン',
      'ドリームキャスト',
      'nintendo64'
    ],
    correct:'ドリームキャスト'
  },{
    question: '携帯ゲーム機で最も古いものは次のうちどれ?',
    answers:[
      'ゲームギア',
      'ワンダースワン',
      'ゲームボーイ',
      'PSP'
    ],
    correct:'ゲームボーイ'
  }
];

const quizLength = quiz.length;
let quizIndex = 0;
let score = 0;



const $button = document.getElementsByTagName('button');
const buttonLength = $button.length;

const setupQuiz = ()=>{
  document.getElementById('js-question').textContent = quiz[quizIndex].question;
  let buttonIndex = 0;

  while (buttonIndex < buttonLength) {
    $button[buttonIndex].textContent = quiz[quizIndex].answers[buttonIndex];
    buttonIndex++;
  }
}

setupQuiz();

const clickHandler = (e)=>{
  if(quiz[quizIndex].correct === e.target.textContent){
    window.alert('正解！');
    score++;
  }else{
    window.alert('不正解！');
  }

  quizIndex++;

  if(quizIndex < quizLength){
    setupQuiz();
  }else{
    window.alert('終了！あなたの正解数は' + score + '/' + quizLength + 'です！');
  }

}

let handlerIndex = 0;
while (handlerIndex < buttonLength){
  $button[handlerIndex].addEventListener('click',(e) => {
    clickHandler(e);
  });
  handlerIndex++;
}

