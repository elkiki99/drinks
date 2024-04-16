import { Outlet } from 'react-router-dom'
import Logo from '../components/Logo'


export default function AuthLayout() {
  return (

    <main>
      <div className='mt-10'>
        <Logo textSize={"6xl"} />
      </div>
      
      <div className='my-10'>
          <Outlet />
      </div>

    </main>
  )
}
