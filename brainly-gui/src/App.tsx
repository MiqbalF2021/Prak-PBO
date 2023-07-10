import React from 'react';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import QuestionPage from './pages/QuestionPage';
import HomePage from './pages/HomePage';

const App: React.FC = () => {
  return (
    <Router>
      <Routes>
      <Route path="/" element={<HomePage />} />
        <Route path="/questions/:id" element={<QuestionPage />} />
        {/* Tambahkan rute lain sesuai kebutuhan */}
      </Routes>
    </Router>
  );
};

export default App;
