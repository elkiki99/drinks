import React from 'react'
import ReactDOM from 'react-dom/client'
import { RouterProvider } from 'react-router-dom'
import { DrinksProvider } from './context/DrinksProvider'
import router from './router'
import './index.css'

ReactDOM.createRoot(document.getElementById('root')).render(
  <React.StrictMode>
    <DrinksProvider>
      <RouterProvider router={router} />
    </DrinksProvider>
  </React.StrictMode>,
)
