import React, { useEffect, useState } from 'react';

interface Question {
  id: number;
  title: string;
  question: string;
  author: number;
  created_at: string;
  writer: {
    id: number;
    name: string;
  };
  answers: Answer[];
  answer_total: number;
}

interface Answer {
  id: number;
  quest_id: number;
  user_id: number;
  is_answer: string;
  answerer: {
    id: number;
    username: string;
    email: string;
    name: string;
    created_at: string;
    updated_at: string | null;
  };
}

const QuestionPage: React.FC = () => {
  const [questions, setQuestions] = useState<Question[]>([]);

  useEffect(() => {
    fetchQuestions();
  }, []);

  const fetchQuestions = async () => {
    try {
      const response = await fetch('http://127.0.0.1:8000/api/question');
      const data = await response.json();
      setQuestions(data.data);
    } catch (error) {
      console.log(error);
    }
  };

  return (
    <div>
      <h1>Daftar Pertanyaan</h1>
      {questions.map((question) => (
        <div key={question.id}>
          <h2>{question.title}</h2>
          <p>{question.question}</p>
          <p>Penulis: {question.writer.name}</p>
          <p>Jumlah Jawaban: {question.answer_total}</p>
          <h3>Jawaban:</h3>
          {question.answers.map((answer) => (
            <div key={answer.id}>
              <p>{answer.is_answer}</p>
              <p>Penjawab: {answer.answerer.name}</p>
            </div>
          ))}
        </div>
      ))}
    </div>
  );
};

export default QuestionPage;
