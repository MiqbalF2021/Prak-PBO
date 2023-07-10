import React from 'react';
import { Link } from 'react-router-dom';

const HomePage: React.FC = () => {
  return (
    <div>
      <h1>Homepage</h1>
      <ul>
        <li>
          <Link to="/questions">Lihat Pertanyaan</Link>
        </li>
        <li>
          <Link to="/ask">Bertanya</Link>
        </li>
        <li>
          <Link to="/answer">Jawab</Link>
        </li>
        <li>
          <Link to="/login">Login</Link>
        </li>
      </ul>
    </div>
  );
};

export default HomePage;
