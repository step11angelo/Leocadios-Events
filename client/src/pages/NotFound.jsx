import React from 'react';
import icon from '../assets/images/alert.jpg';
import "../css/NotFound.css";

function NotFound() {
  return (
    <div className='container' style={{ 
        display: 'flex', 
        alignItems: 'center', 
        justifyContent: 'center', 
        height: '100vh' 
    }}>
      <div style={{ 
          textAlign: 'center' 
      }}>
        <img src={icon} alt="Alert icon" style={{ width: '500px', height: '300px' }} />
        <h1 className='error404'>Error 404</h1>
        <p className='error'>The page you are looking for could not be found.</p>
        
      </div>
    </div>
  );
}

export default NotFound;
