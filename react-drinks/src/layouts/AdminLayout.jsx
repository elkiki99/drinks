import { Outlet } from 'react-router-dom'
import AdminSidebar from "../components/AdminSidebar";
import { useAuth } from '../hooks/useAuth';

export default function AdminLayout() {

    useAuth({middleware: 'admin'});
  return (
    <div className='md:flex'>
    <AdminSidebar />

    <main className='md:ml-64 w-full h-screen bg-gray-100 overflow-y-auto'>
      <Outlet />
    </main>
  </div>
  )
}
